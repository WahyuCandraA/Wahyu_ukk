<?php
defined('BASEPATH') or exit('No direct script access allowed');

class member_m extends CI_Model
{

    public function get_member($id = '')
    {
        if ($id == '') {
            return $this->db->get('tb_member')->result_array();
        } else {
            return $this->db->get_where('tb_member', ['id_member' => $id])->row_array();
        }
    }

    public function insert($post)
    {
        $this->db->insert('tb_member', [
            'id_member' => $post['id_member'],
            'nama_member' => $post['nama_member'],
            'alamat' => $post['alamat'],
            'jenis_kelamin' => $post['jenis_kelamin'],
            'tlp' => $post['tlp']
        ]);
    }

    public function update($post)
    {
        $data = [
            'nama_member' => $post['nama_member'],
            'alamat' => $post['alamat'],
            'jenis_kelamin' => $post['jenis_kelamin'],
            'tlp' => $post['tlp']
        ];

        $this->db->where('id_member', $post['id_member']);
        $this->db->update('tb_member', $data);
    }

    public function get_jumlah_pelanggan()
    {
        $query = $this->db->query("SELECT COUNT(*) as jumlah FROM  tb_member");
        return $query->result_array();
    }
}