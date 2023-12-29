<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

    public function getRegist()
    {
        $this->db->order_by('tgl_daftar','asc');
        return $this->db->get('tb_pesertavaksin');
    }

    public function addVaksin($post)
    {
        $data = [
            'nik' => $post['nik'],
            'nama_peserta' => $post['nama_peserta'],
            'jkel' => $post['jkel'],
            'alamat' => $post['alamat'],
            'tgl_lahir' => $post['tgl_lahir'],
            'hp' => $post['hp'],
            'wa' => $post['wa'],
            'tgl_daftar' => date('Y-m-d H:i:s'),
            'asal' => $post['asal'],
            'other_asal' => $post['other_asal'],
            'pekerjaan' => $post['pekerjaan'],
            'other_pekerjaan' => $post['other_pekerjaan'],
            'profesi' => $post['profesi'],
            'other_profesi' => $post['other_profesi'],
            'vaksin1' => $post['vaksin1'],
            'tgl_vaksin1' => $post['tgl_vaksin1'],
            'jns_vaksin1' => $post['jns_vaksin1'],
            'status' => "belum datang"
        ];

        return $this->insert('tb_pesertavaksin', $data);
    }

    public function csv($data)
    {
        return $this->insert('tb_pesertavaksin', $data);
    }
}