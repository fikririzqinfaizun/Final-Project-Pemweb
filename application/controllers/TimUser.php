<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TimUser extends CI_Controller {

    public function index()
    {
        $this->load->view('user/pilih_game');
    }
}