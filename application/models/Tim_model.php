<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tim_model extends CI_Model {

    public function getAll()
    {
        return $this->db->get('tim')->result();
    }

    public function getById($id)
    {
        return $this->db
                    ->get_where(
                        'tim',
                        ['id'=>$id]
                    )
                    ->row();
    }

    public function insert($data)
    {
        return $this->db
                    ->insert(
                        'tim',
                        $data
                    );
    }

    public function update($id,$data)
    {
        return $this->db
                    ->update(
                        'tim',
                        $data,
                        ['id'=>$id]
                    );
    }

    public function delete($id)
    {
        return $this->db
                    ->delete(
                        'tim',
                        ['id'=>$id]
                    );
    }
}