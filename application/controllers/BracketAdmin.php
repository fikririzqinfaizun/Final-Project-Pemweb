<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BracketAdmin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('logged_in'))
        {
            redirect('auth/login');
        }
    }

    private function getGames()
    {
        return [
            'ml'        => 'Mobile Legends',
            'pubg'      => 'PUBG Mobile',
            'ff'        => 'Free Fire',
            'hok'       => 'Honor of Kings',
            'valorant'  => 'Valorant',
            'efootball' => 'eFootball'
        ];
    }

    public function index()
    {
        $data['peserta'] = $this->db
            ->where('status_bayar','Sudah Bayar')
            ->get('peserta')
            ->result();

        $data['bracket'] = $this->db
            ->get('bracket')
            ->result();

        $this->load->view('admin/bracket',$data);
    }

    public function game($kode = '')
    {
        $games = $this->getGames();

        if(!isset($games[$kode]))
        {
            redirect('bracketadmin');
        }

        $game = $games[$kode];

        $data['kode'] = $kode;
        $data['game'] = $game;

        $data['peserta'] = $this->db
            ->where('game',$kode)
            ->where('status_bayar','Sudah Bayar')
            ->get('peserta')
            ->result();

        $data['total_tim'] = count($data['peserta']);

        $data['match'] = $this->db
            ->where('game',$game)
            ->order_by('id','ASC')
            ->get('bracket')
            ->result();

        $this->load->view('admin/bracket_game',$data);
    }

    public function tambah($kode = '')
    {
        $games = $this->getGames();

        if(!isset($games[$kode]))
        {
            redirect('bracketadmin');
        }

        $game = $games[$kode];

        if($this->input->post())
        {
            $data = [
                'game'         => $game,
                'round_match'  => $this->input->post('round_match'),
                'tim1'         => $this->input->post('tim1'),
                'tim2'         => $this->input->post('tim2'),
                'jam_mulai'    => $this->input->post('jam_mulai'),
                'jam_selesai'  => $this->input->post('jam_selesai')
            ];

            $this->db->insert('bracket',$data);

            redirect('bracketadmin/game/'.$kode);
        }

        $data['kode'] = $kode;
        $data['game'] = $game;

        $data['peserta'] = $this->db
            ->where('game',$kode)
            ->where('status_bayar','Sudah Bayar')
            ->get('peserta')
            ->result();

        $this->load->view('admin/bracket_tambah',$data);
    }

    public function hapus($id)
    {
        $this->db->delete(
            'bracket',
            ['id'=>$id]
        );

        redirect('bracketadmin');
    }

    public function reset($kode = '')
    {
        $games = $this->getGames();

        if(!isset($games[$kode]))
        {
            redirect('bracketadmin');
        }

        $game = $games[$kode];

        $this->db->where('game',$game);
        $this->db->delete('bracket');

        redirect('bracketadmin/game/'.$kode);
    }

    
   public function report($id)
{
    $match = $this->db
        ->where('id',$id)
        ->get('bracket')
        ->row();

    if(!$match)
    {
        redirect('bracketadmin');
    }

    if($this->input->post())
    {
        $score1 = (int)$this->input->post('score1');
        $score2 = (int)$this->input->post('score2');

        if($score1 == $score2)
        {
            $this->session->set_flashdata(
                'error',
                'Skor tidak boleh seri'
            );

            redirect($_SERVER['HTTP_REFERER']);
        }

        $winner = ($score1 > $score2)
            ? $match->tim1
            : $match->tim2;

        $this->db
            ->where('id',$id)
            ->update('bracket',[
                'score1'       => $score1,
                'score2'       => $score2,
                'winner'       => $winner,
                'status_match' => 'Selesai'
            ]);

        if(!empty($match->next_match))
        {
            $parent = $this->db
                ->where('game',$match->game)
                ->where('match_no',$match->next_match)
                ->get('bracket')
                ->row();

            if($parent)
            {
                if(empty($parent->tim1))
                {
                    $this->db
                        ->where('id',$parent->id)
                        ->update([
                            'tim1' => $winner
                        ]);
                }
                else
                {
                    $this->db
                        ->where('id',$parent->id)
                        ->update([
                            'tim2' => $winner
                        ]);
                }
            }
        }
        else
        {
            $this->db
                ->where('id',$match->id)
                ->update([
                    'status_match' => 'Juara'
                ]);
        }

        redirect($_SERVER['HTTP_REFERER']);
    }

    $data['match'] = $match;

    $this->load->view(
        'admin/report_score',
        $data
    );
}

   public function generate()
{
    $kode = $this->input->post('game');

    $games = $this->getGames();

    if(!isset($games[$kode]))
    {
        redirect('bracketadmin');
    }

    $game = $games[$kode];

    $this->db->where('game',$game);
    $this->db->delete('bracket');

    $teams = $this->db
        ->where('game',$kode)
        ->where('status_bayar','Sudah Bayar')
        ->get('peserta')
        ->result_array();

    shuffle($teams);

    $teamCount = count($teams);

    if($teamCount < 2)
    {
        $this->session->set_flashdata(
            'error',
            'Minimal 2 tim'
        );

        redirect('bracketadmin/game/'.$kode);
    }

    $power = 1;

    while($power < $teamCount)
    {
        $power *= 2;
    }

    while(count($teams) < $power)
    {
        $teams[] = [
            'nama_tim' => 'BYE'
        ];
    }

    $matchNo = 1;
    $currentRound = [];

    for($i=0;$i<count($teams);$i+=2)
    {
        $this->db->insert('bracket',[
            'game'          => $game,
            'round_match'   => 'Round 1',
            'match_no'      => $matchNo,
            'next_match'    => null,
            'bracket_level' => 1,
            'tim1'          => $teams[$i]['nama_tim'],
            'tim2'          => $teams[$i+1]['nama_tim'],
            'status_match'  => 'Menunggu'
        ]);

        $currentRound[] = $matchNo;

        $matchNo++;
    }

    $level = 2;

    while(count($currentRound) > 1)
    {
        $nextRound = [];

        for($i=0;$i<count($currentRound);$i+=2)
        {
            $parentMatch = $matchNo;

            $this->db->insert('bracket',[
                'game'          => $game,
                'round_match'   => 'Round '.$level,
                'match_no'      => $parentMatch,
                'next_match'    => null,
                'bracket_level' => $level,
                'tim1'          => '',
                'tim2'          => '',
                'status_match'  => 'Menunggu'
            ]);

            $this->db
                ->where('game',$game)
                ->where_in(
                    'match_no',
                    [
                        $currentRound[$i],
                        $currentRound[$i+1]
                    ]
                )
                ->update([
                    'next_match' => $parentMatch
                ]);

            $nextRound[] = $parentMatch;

            $matchNo++;
        }

        $currentRound = $nextRound;

        $level++;
    }

    redirect('bracketadmin/game/'.$kode);
}
}