<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Turnamen_model extends CI_Model {

    public function getAll()
    {
        return $this->db
                    ->get('turnamen')
                    ->result();
    }

    public function getById($id)
    {
        return $this->db
                    ->get_where(
                        'turnamen',
                        ['id'=>$id]
                    )
                    ->row();
    }

    public function insert($data)
    {
        return $this->db
                    ->insert(
                        'turnamen',
                        $data
                    );
    }

    public function update($id,$data)
    {
        return $this->db
                    ->update(
                        'turnamen',
                        $data,
                        ['id'=>$id]
                    );
    }

    public function delete($id)
    {
        return $this->db
                    ->delete(
                        'turnamen',
                        ['id'=>$id]
                    );
    }
}