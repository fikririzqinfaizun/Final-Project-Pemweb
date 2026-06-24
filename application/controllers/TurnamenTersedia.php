<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TurnamenTersedia extends CI_Controller {

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
        $data['turnamen'] = $this->db
            ->order_by('game','ASC')
            ->get('turnamen')
            ->result();

        $this->load->view(
            'user/turnamen_tersedia',
            $data
        );
    }
}