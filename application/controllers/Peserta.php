<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('logged_in'))
        {
            redirect('auth/login');
        }

        $this->load->model('Peserta_model');
    }

    public function index()
    {
        $data['peserta'] =
        $this->Peserta_model->getAll();

        $this->load->view(
            'peserta/index',
            $data
        );
    }

    public function daftar($game = '')
{
    if($this->input->post())
    {
        $data = [

            'nama_tim' => $this->input->post('nama_tim'),

            'player1' => $this->input->post('player1'),
            'player2' => $this->input->post('player2'),
            'player3' => $this->input->post('player3'),
            'player4' => $this->input->post('player4'),
            'player5' => $this->input->post('player5'),

            'cadangan1' => $this->input->post('cadangan1'),
            'cadangan2' => $this->input->post('cadangan2'),

            'game' => $game,

            'metode_bayar' =>
            $this->input->post('metode_bayar'),

            'status_bayar' => 'Belum Bayar',

            'tanggal_daftar' =>
                date('Y-m-d H:i:s')

        ];

        $this->db->insert(
            'peserta',
            $data
        );

        redirect('dashboard/user');
    }

    $data['game'] = $game;

    $this->load->view(
        'peserta/daftar',
        $data
    );
}

    public function hapus($id)
    {
        $this->Peserta_model
             ->delete($id);

        redirect('peserta');
    }

    public function edit($id)
{
    if($this->input->post())
    {
        $data = [

            'status_bayar' =>
            $this->input->post('status_bayar')

        ];

        $this->Peserta_model->update(
            $id,
            $data
        );

        redirect('peserta');
    }

    $data['peserta'] =
    $this->Peserta_model->getById($id);

    $this->load->view(
        'peserta/edit',
        $data
    );
}
}