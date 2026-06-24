<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pertandingan_model extends CI_Model {

    public function getAll()
    {
        return $this->db
                    ->get('pertandingan')
                    ->result();
    }

    public function getById($id)
    {
        return $this->db
                    ->get_where(
                        'pertandingan',
                        ['id'=>$id]
                    )
                    ->row();
    }

    public function insert($data)
    {
        return $this->db->insert(
            'pertandingan',
            $data
        );
    }

    public function update($id,$data)
    {
        return $this->db->update(
            'pertandingan',
            $data,
            ['id'=>$id]
        );
    }

    public function delete($id)
    {
        return $this->db->delete(
            'pertandingan',
            ['id'=>$id]
        );
    }
}