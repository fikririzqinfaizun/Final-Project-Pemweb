<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('logged_in'))
        {
            redirect('auth/login');
        }
    }

    public function admin()
    {
        if($this->session->userdata('role') != 'admin')
        {
            redirect('dashboard/user');
        }

        $data['nama'] =
        $this->session->userdata('nama');

        $data['jumlah_turnamen'] =
        $this->db->count_all('turnamen');

        $data['jumlah_tim'] =
        $this->db->count_all('tim');

        $data['jumlah_peserta'] =
        $this->db->count_all('peserta');

        $data['jumlah_match'] =
        $this->db->count_all('pertandingan');

        $this->load->view(
            'admin/dashboard',
            $data
        );
    }

    public function user()
    {
        if($this->session->userdata('role') != 'user')
        {
            redirect('dashboard/admin');
        }
        
        $data['nama'] =
        $this->session->userdata('nama');

        $data['banner'] = $this->db
    ->where('status','Aktif')
    ->order_by('id','DESC')
    ->get('banner')
    ->result();
    
        $data['jumlah_turnamen'] =
        $this->db->count_all('turnamen');

        $data['jumlah_match'] =
        $this->db->count_all('pertandingan');

        $this->load->view(
            'user/dashboard',
            $data
        );
    }
}