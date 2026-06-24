<?php

class Chat_model extends CI_Model {

    public function getMessages($sender,$receiver)
    {
        $this->db->group_start();
        $this->db->where('sender_id',$sender);
        $this->db->where('receiver_id',$receiver);
        $this->db->group_end();

        $this->db->or_group_start();
        $this->db->where('sender_id',$receiver);
        $this->db->where('receiver_id',$sender);
        $this->db->group_end();

        return $this->db
            ->order_by('created_at','ASC')
            ->get('messages')
            ->result();
    }

    public function sendMessage($data)
    {
        return $this->db->insert('messages',$data);
    }

    public function getChatList()
{
    $sql = "
        SELECT
            u.id,
            u.username,
            (
                SELECT message
                FROM messages m2
                WHERE m2.sender_id = u.id
                   OR m2.receiver_id = u.id
                ORDER BY m2.id DESC
                LIMIT 1
            ) AS last_message,

            (
                SELECT created_at
                FROM messages m2
                WHERE m2.sender_id = u.id
                   OR m2.receiver_id = u.id
                ORDER BY m2.id DESC
                LIMIT 1
            ) AS last_time,

            (
                SELECT COUNT(*)
                FROM messages m3
                WHERE m3.sender_id = u.id
                AND m3.receiver_id = 1
                AND m3.is_read = 0
            ) AS unread

        FROM users u

        WHERE u.role='user'

        ORDER BY last_time DESC
    ";

    return $this->db->query($sql)->result();
}
}