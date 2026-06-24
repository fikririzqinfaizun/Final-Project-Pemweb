<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('User_model');
    }

    public function login()
    {
        if($this->input->post())
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user = $this->User_model
                         ->getByUsername($username);

            if(
                $user &&
                password_verify(
                    $password,
                    $user->password
                )
            )
            {
                $this->session->set_userdata([
                    'id' => $user->id,
                    'nama' => $user->nama,
                    'role' => $user->role,
                    'logged_in' => TRUE
                ]);

                if($user->role == 'admin')
                {
                    redirect('dashboard/admin');
                }
                else
                {
                    redirect('dashboard/user');
                }
            }
            else
            {
                $data['error'] =
                'Username atau Password salah';
            }
        }

        $this->load->view(
            'auth/login',
            isset($data) ? $data : NULL
        );
    }

    public function register()
    {
        if($this->input->post())
        {
            $data = [

                'nama' =>
                $this->input->post('nama'),

                'username' =>
                $this->input->post('username'),

                'password' =>
                password_hash(
                    $this->input->post('password'),
                    PASSWORD_DEFAULT
                ),

                'role' => 'user'
            ];

            $this->User_model->insert($data);

            redirect('auth/login');
        }

        $this->load->view(
            'auth/register'
        );
    }

    public function logout()
    {
        $this->session->sess_destroy();

        redirect('auth/login');
    }
}