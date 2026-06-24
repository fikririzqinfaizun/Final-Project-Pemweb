<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tim extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('logged_in'))
        {
            redirect('auth/login');
        }

        $this->load->model('Tim_model');
    }

    public function index()
{
    $data['tim'] = $this->db
        ->order_by('id','DESC')
        ->get('peserta')
        ->result();

    $this->load->view(
        'tim/index',
        $data
    );
}
    public function tambah()
    {
        if($this->input->post())
        {
            $data = [

                'nama_tim' =>
                $this->input->post('nama_tim'),

                'game' =>
                $this->input->post('game'),

                'kapten' =>
                $this->input->post('kapten'),

                'asal_kota' =>
                $this->input->post('asal_kota'),

                'status_bayar' =>
                $this->input->post('status_bayar')
            ];

            $this->Tim_model->insert($data);

            redirect('tim');
        }

        $this->load->view('tim/tambah');
    }

    public function edit($id)
    {
        if($this->input->post())
        {
            $data = [

                'nama_tim' =>
                $this->input->post('nama_tim'),

                'game' =>
                $this->input->post('game'),

                'kapten' =>
                $this->input->post('kapten'),

                'asal_kota' =>
                $this->input->post('asal_kota'),
                
                'status_bayar' =>
                $this->input->post('status_bayar')  
            ];

            $this->Tim_model
                 ->update(
                    $id,
                    $data
                 );

            redirect('tim');
        }

        $data['tim'] =
        $this->Tim_model
             ->getById($id);

        $this->load->view(
            'tim/edit',
            $data
        );
    }

    public function hapus($id)
    {
        $this->Tim_model->delete($id);

        redirect('tim');
    }

    public function pilih_game()
{
    $this->load->view('tim/pilih_game');
}

public function create($game)
{
    $data['game'] = urldecode($game);

    $this->load->view('tim/tambah',$data);
}
}