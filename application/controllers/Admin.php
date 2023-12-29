<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin', 'admin');
    }

    public function index()
    {
        $this->load->view('admin');
    }

    public function registrasi()
    {
        $data = [
            'data' => $this->admin->getRegist()->result()
        ];

        $this->template->load('admin', 'admin/regist/regist', $data);
    }

    public function addVaksin()
    {
        $post = $this->input->post(null, true);
		// print_r($post);
		// die;
		$add = $this->admin->addVaksin($post);
		if($add){
			redirect ('admin/registrasi');
		}else{
			redirect ('admin/registrasi');
		}
    }

    public function kartukendali($id = null)
    {
        if($id != null){

        }
    }

    public function importCSV()
    {
      
        $file_data = $this->csvimport->get_array($_FILES["csv"]["tmp_name"]);
        print_r($file_data);
        die;
        foreach($file_data as $row)
        {
            $data[] = array(
                'nik' => $row['nik'],
                'nama_peserta' => $row['nama_peserta'],
                'jkel' => $post['jkel'],
                'alamat' => $row['alamat'],
                'tgl_lahir' => $row['tgl_lahir'],
                'hp' => $row['hp'],
                'wa' => $row['wa'],
                'tgl_daftar' => date('Y-m-d H:i:s'),
                'asal' => $row['asal'],
                'other_asal' => $row['other_asal'],
                'pekerjaan' => $row['pekerjaan'],
                'other_pekerjaan' => $row['other_pekerjaan'],
                'profesi' => $row['profesi'],
                'other_profesi' => $row['other_profesi'],
                'vaksin1' => $row['vaksin1'],
                'tgl_vaksin1' => $row['tgl_vaksin1'],
                'jns_vaksin1' => $row['jns_vaksin1'],
                'status' => "belum datang"
            );
        }
        print_r($data);
        die;
        $this->admin->csv($data);
 
    }
}