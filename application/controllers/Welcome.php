<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function index()
	{
		$nama = [
			'nama_depan' => 'Rizqy',
			'nama_belakang' => 'Syaban'
		];
		$nama = json_encode($nama);
		$this->db->insert('user', array('nama' => $nama));
	}
	public function tampilData()
	{
		$data['row'] = $this->db->get('user')->result();
		$this->load->view('welcome_message', $data);
	}
}

