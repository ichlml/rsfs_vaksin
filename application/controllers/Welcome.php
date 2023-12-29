<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_welcome','welcome');
	}

	public function index()
	{
		// $this->load->view('beranda');
		$data = [
			'title'=>'Halaman Utama'
		];
		$this->template->load('beranda','pengguna/home', $data);
	}

	public function vaksin()
	{
		$data = [
			'title'=>'Pendaftaran Vaksin '
		];

		$this->template->load('beranda','pengguna/vaksin', $data);
	}

	public function addVaksin()
	{
		$post = $this->input->post(null, true);
		// print_r($post);
		// die;
		$add = $this->welcome->addVaksin($post);
		if($add){
			redirect ('welcome');
		}else{
			redirect ('welcome');
		}
	}
}
