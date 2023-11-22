<?php
defined('BASEPATH') or exit('no direct script access allowed');
class Pinjaman extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pinjaman_model');
        
    }
    function index()
    {
        $data['judul'] = "Halaman Pinjaman";
        $data['pinjaman'] = $this->pinjaman_model->get();
        $this->load->view("layout/header");
        $this->load->view("pinjaman/vw_pinjaman", $data);
        $this->load->view("layout/footer");
    }
    public function tambah()
    {
        $data['judul'] = "Halaman Tambah Pinjaman"; 
        $this->load->view("layout/header");
        $this->load->view("pinjaman/vw_tambah_pinjaman", $data);
        $this->load->view("layout/footer");
    }
    public function detail($id)
    {
        $data['judul'] = "Halaman Detail Pinjaman";
        $data['pinjaman'] = $this->pinjaman_model->getById($id);
        $this->load->view("layout/header");
        $this->load->view("pinjaman/vw_detail_pinjaman", $data);
        $this->load->view("layout/footer");
    }
    public function hapus($id)
    {
        $this->pinjaman_model->delete($id);
        redirect('pinjaman');
    }
    public function upload()
    {
        $data = [
            'nik' => $this->input->post('nik'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('no_hp'),
            'email' => $this->input->post('email'),
            'besar_pinjaman' => $this->input->post('besar_pinjaman'),
            'durasi' => $this->input->post('durasi'),
        ];
        $this->pinjaman_model->insert($data);
        redirect('pinjaman');
    }
    public function edit($id)
    {
        $data['judul'] = "Halaman Detail Pinjaman";
        $data['pinjaman'] = $this->pinjaman_model->getById($id);
        $this->load->view("layout/header");
        $this->load->view("pinjaman/vw_ubah_pinjaman", $data);
        $this->load->view("layout/footer");
    }
    public function update()
    {
        $data = [
            'nik' => $this->input->post('nik'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('no_hp'),
            'email' => $this->input->post('email'),
            'besar_pinjaman' => $this->input->post('besar_pinjaman'),
            'durasi' => $this->input->post('durasi'),
        ];
        $id = $this->input->post('id');
        $this->pinjaman_model->update(['id' => $id], $data);
        redirect('pinjaman');
    }
}




