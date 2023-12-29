<?php
use GuzzleHttp\Client;
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Welcome extends CI_Model {

    private $_client;
    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://192.168.20.93/restfv/api/'
        ]);

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
            'status' => "belum datang",
            'X-API-KEY' => "amalGanteng"
        ];

        $res = $this->_client->request('POST', 'vaksin/vaksin', [
            'form_params' => $data
        ]);

         $result = json_decode($res->getBody()->getContents(), true);
        return $result;
    }

}