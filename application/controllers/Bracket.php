<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bracket extends CI_Controller {

    public function index()
    {
        $this->load->view('user/bracket');
    }

    public function game($kode='')
    {
        $games = [

            'ml'   => 'Mobile Legends',
            'pubg' => 'PUBG Mobile',
            'ff'   => 'Free Fire',
            'hok'  => 'Honor of Kings'

        ];

        if(!isset($games[$kode]))
        {
            redirect('bracket');
        }

        $game = $games[$kode];

        $data['kode'] = $kode;
        $data['game'] = $game;

        $data['match'] = $this->db
            ->where('game',$game)
            ->order_by('match_no','ASC')
            ->get('bracket')
            ->result();

        $this->load->view(
            'user/bracket_game',
            $data
        );
    }
}