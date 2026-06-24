<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('logged_in'))
        {
            redirect('auth/login');
        }
    }

    public function index()
    {
        $data['banner'] = $this->db
            ->order_by('id','DESC')
            ->get('banner')
            ->result();

        $this->load->view(
            'admin/banner/index',
            $data
        );
    }

    public function tambah()
    {
        if($this->input->post())
        {
            if(!is_dir('./uploads/banner'))
            {
                mkdir('./uploads/banner', 0777, true);
            }

            $config['upload_path']   = './uploads/banner/';
            $config['allowed_types'] = 'jpg|jpeg|png|webp';
            $config['max_size']      = 10000;
            $config['encrypt_name']  = TRUE;

            $this->load->library('upload', $config);

            if(!$this->upload->do_upload('gambar'))
            {
                echo '<h3>Upload Gagal</h3>';
                echo $this->upload->display_errors();
                die();
            }

            $upload = $this->upload->data();

            $data = [

                'gambar' => $upload['file_name'],
                'status' => $this->input->post('status')

            ];

            $this->db->insert('banner', $data);

            redirect('banner');
        }

        $this->load->view('admin/banner/tambah');
    }

    public function hapus($id)
    {
        $banner = $this->db
            ->get_where('banner',['id'=>$id])
            ->row();

        if($banner)
        {
            $file = './uploads/banner/'.$banner->gambar;

            if(file_exists($file))
            {
                unlink($file);
            }
        }

        $this->db->delete(
            'banner',
            ['id'=>$id]
        );

        redirect('banner');
    }
}