<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Turnamen extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('logged_in'))
        {
            redirect('auth/login');
        }

        $this->load->model('Turnamen_model');
    }

    public function index()
    {
        $data['turnamen'] =
        $this->Turnamen_model->getAll();

        $this->load->view(
            'turnamen/index',
            $data
        );
    }

    public function tambah()
    {
        if($this->input->post())
        {
            $data = [

                'nama_turnamen' =>
                $this->input->post('nama_turnamen'),

                'game' =>
                $this->input->post('game'),

                'tanggal_mulai' =>
                $this->input->post('tanggal_mulai'),

                'hadiah' =>
                $this->input->post('hadiah'),

                'status' =>
                $this->input->post('status'),

                'status_turnamen' =>
                $this->input->post('status_turnamen')
            ];

            $this->Turnamen_model->insert($data);

            redirect('turnamen');
        }

        $this->load->view(
            'turnamen/tambah'
        );
    }

    public function edit($id)
    {
        if($this->input->post())
        {
            $data = [

                'nama_turnamen' =>
                $this->input->post('nama_turnamen'),

                'game' =>
                $this->input->post('game'),

                'tanggal_mulai' =>
                $this->input->post('tanggal_mulai'),

                'hadiah' =>
                $this->input->post('hadiah'),

                'status' =>
                $this->input->post('status'),

                'status_turnamen' =>
                $this->input->post('status_turnamen')
            ];

            $this->Turnamen_model
                 ->update(
                    $id,
                    $data
                 );

            redirect('turnamen');
        }

        $data['turnamen'] =
        $this->Turnamen_model
             ->getById($id);

        $this->load->view(
            'turnamen/edit',
            $data
        );
    }

    public function hapus($id)
    {
        $this->Turnamen_model
             ->delete($id);

        redirect('turnamen');
    }

    public function detail($id)
    {
        $data['turnamen'] =
        $this->Turnamen_model
             ->getById($id);

        $this->load->view(
            'turnamen/detail',
            $data
        );
    }

    public function game($game)
{
    $game = urldecode($game);

    $mapping = [

        'Mobile-Legends' => 'ml',
        'PUBG-Mobile'    => 'pubg',
        'Free-Fire'      => 'ff',
        'Honor-of-Kings' => 'hok'

    ];

    $kode_game = isset($mapping[$game])
        ? $mapping[$game]
        : '';

    $data['judul_game'] = str_replace('-', ' ', $game);

    $data['tim'] = $this->db
        ->where('game', $kode_game)
        ->get('peserta')
        ->result();

    $this->load->view(
        'user/daftar_tim_game',
        $data
    );
}
}