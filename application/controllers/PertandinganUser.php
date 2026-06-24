<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PertandinganUser extends CI_Controller {

    public function index()
    {
        $data['match'] =
        $this->db->get('pertandingan')->result();

        $this->load->view(
            'user/bracket',
            $data
        );
    }
}