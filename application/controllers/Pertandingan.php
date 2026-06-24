<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pertandingan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('logged_in'))
        {
            redirect('auth/login');
        }

        $this->load->model('Pertandingan_model');
    }

    public function index()
    {
        $data['pertandingan'] =
        $this->Pertandingan_model->getAll();

        $this->load->view(
            'pertandingan/index',
            $data
        );
    }

    public function tambah()
    {
        if($this->input->post())
        {
            $data = [

                'turnamen_id' =>
                $this->input->post('turnamen_id'),

                'tim1_id' =>
                $this->input->post('tim1_id'),

                'tim2_id' =>
                $this->input->post('tim2_id'),

                'tanggal' =>
                $this->input->post('tanggal'),

                'hasil' =>
                '',

                'status' =>
                'Belum Main'
            ];

            $this->Pertandingan_model
                 ->insert($data);

            redirect('pertandingan');
        }

        $data['turnamen'] =
        $this->db->get('turnamen')->result();

        $data['tim'] =
        $this->db->get('tim')->result();

        $this->load->view(
            'pertandingan/tambah',
            $data
        );
    }

    public function edit($id)
    {
        if($this->input->post())
        {
            $data = [

                'hasil' =>
                $this->input->post('hasil'),

                'status' =>
                $this->input->post('status')
            ];

            $this->Pertandingan_model
                 ->update(
                    $id,
                    $data
                 );

            redirect('pertandingan');
        }

        $data['match'] =
        $this->Pertandingan_model
             ->getById($id);

        $this->load->view(
            'pertandingan/edit',
            $data
        );
    }

    public function hapus($id)
    {
        $this->Pertandingan_model
             ->delete($id);

        redirect('pertandingan');
    }
}