<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta_model extends CI_Model {

    public function getAll()
    {
        return $this->db
            ->order_by('id','DESC')
            ->get('peserta')
            ->result();
    }

    public function getById($id)
    {
        return $this->db
            ->get_where(
                'peserta',
                ['id'=>$id]
            )
            ->row();
    }

    public function insert($data)
    {
        return $this->db->insert(
            'peserta',
            $data
        );
    }

    public function update($id,$data)
    {
        return $this->db->update(
            'peserta',
            $data,
            ['id'=>$id]
        );
    }

    public function delete($id)
    {
        return $this->db->delete(
            'peserta',
            ['id'=>$id]
        );
    }
}