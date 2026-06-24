<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DaftarTurnamen extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('logged_in'))
        {
            redirect('auth/login');
        }
    }

    public function index($game = '')
    {
        $games = [

            'ml' => 'Mobile Legends',
            'pubg' => 'PUBG Mobile',
            'ff' => 'Free Fire',
            'hok' => 'Honor of Kings',
            'valorant' => 'Valorant',
            'dota2' => 'DOTA 2'

        ];

        $data['game'] = isset($games[$game])
            ? $games[$game]
            : 'Unknown Game';

        if($this->input->post())
        {
            $simpan = [

                'game' => $data['game'],

                'nama_tim' =>
                $this->input->post('nama_tim'),

                'player1' =>
                $this->input->post('player1'),

                'player2' =>
                $this->input->post('player2'),

                'player3' =>
                $this->input->post('player3'),

                'player4' =>
                $this->input->post('player4'),

                'player5' =>
                $this->input->post('player5'),

                'cadangan1' =>
                $this->input->post('cadangan1'),

                'cadangan2' =>
                $this->input->post('cadangan2'),

                'metode_bayar' =>
                $this->input->post('metode_bayar'),

                'status_bayar' =>
                'Menunggu Verifikasi'

            ];

            $this->db->insert(
                'peserta',
                $simpan
            );

            redirect('timuser');
        }

        $this->load->view(
            'user/daftar_turnamen',
            $data
        );
    }
}