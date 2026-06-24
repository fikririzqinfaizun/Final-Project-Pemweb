<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('logged_in'))
        {
            redirect('auth/login');
        }

        $this->load->model('Chat_model');
    }

    public function index($receiver_id = null)
{
    if($receiver_id)
    {
        $this->db
            ->where('sender_id', $receiver_id)
            ->where('receiver_id', 1)
            ->update('messages', [
                'is_read' => 1
            ]);
    }

    $data['receiver_id'] = $receiver_id;

    $this->load->view('chat/index', $data);
}

    public function get_messages($receiver_id)
    {
        $sender_id = $this->session->userdata('id');

        $messages = $this->Chat_model
            ->getMessages($sender_id,$receiver_id);

        echo json_encode($messages);
    }

    public function send()
    {
        $image = '';

        if(!empty($_FILES['image']['name']))
        {
            $config['upload_path'] = './uploads/chat/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload',$config);

            if($this->upload->do_upload('image'))
            {
                $image = $this->upload->data('file_name');
            }
        }

        $data = [
            'sender_id' => $this->session->userdata('id'),
            'receiver_id' => $this->input->post('receiver_id'),
            'message' => $this->input->post('message'),
            'image' => $image
        ];

        $this->Chat_model->sendMessage($data);

        echo json_encode([
            'status'=>'success'
        ]);
    }
    public function daftar_user()
{
    $data['users'] =
        $this->Chat_model->getChatList();

    $this->load->view(
        'chat/daftar_user',
        $data
    );
}
}