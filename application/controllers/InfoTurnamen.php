<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InfoTurnamen extends CI_Controller {

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
            ->order_by('id','DESC')
            ->get('turnamen')
            ->result();

        $this->load->view(
            'user/info_turnamen',
            $data
        );
    }
}