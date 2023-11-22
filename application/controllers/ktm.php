<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ktm extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ktm_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman ktm";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['ktm'] = $this->ktm_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("ktm/vw_ktm", $data);
        $this->load->view("layout/footer", $data);
    }
    public function tambah()
    {
        $data['judul'] = "Halaman Tambah ktm";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama', 'Nama ', 'required', [
            'required' => 'Nama  Wajib di isi'
        ]);
        $this->form_validation->set_rules('nim', 'nim', 'required|integer', [
            'required' => 'nim Wajib di isi',
            'integer' => 'nim Harus Angka'
        ]);
        $this->form_validation->set_rules('jurusan', 'jurusan', 'required', [
            'required' => 'jurusan  Wajib di isi'
        ]);
        $this->form_validation->set_rules('tanggal_lahir', 'tanggal lahir', 'required', [
            'required' => 'tanggal lahir Wajib di isi'
        ]);
        $this->form_validation->set_rules('alamat', 'alamat', 'required', [
            'required' => 'alamat ktm Wajib di isi'
        ]);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view("layout/header", $data);
            $this->load->view("ktm/vw_tambah_ktm", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'nama' => $this->input->POST('nama'),
                'nim' => $this->input->POST('nim'),
                'jurusan' => $this->input->POST('jurusan'),
                'tanggal_lahir' => $this->input->POST('tanggal_lahir'),
                'alamat' => $this->input->POST('alamat'),
            ];
            $this->ktm_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-info-circle"></i> Data ktm Berhasil Ditambah!</div>');
            redirect('ktm');
        }
    }

    public function hapus($id)
    {
        $this->ktm_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-info-circle"></i> Data ktm Berhasil Dihapus!</div>');
        redirect('ktm');
    }

    public function edit($id)
    {
        $data['judul'] = "Halaman Ubah ktm";
        $data['ktm'] = $this->ktm_model->getById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'Nama Wajib di isi'
        ]);
        $this->form_validation->set_rules('nim', 'nim', 'required|integer', [
            'required' => 'nim Wajib di isi',
            'integer' => 'nim Harus Angka'
        ]);
        $this->form_validation->set_rules('jurusan', 'jurusan', 'required', [
            'required' => 'jurusan ktm Wajib di isi'
        ]);
        $this->form_validation->set_rules('tanggal_lahir', 'tanggal lahir', 'required', [
            'required' => 'tanggal lahir Wajib di isi'
        ]);
        $this->form_validation->set_rules('alamat', 'alamat', 'required', [
            'required' => 'alamat Wajib di isi'
        ]);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view("layout/header", $data);
            $this->load->view("ktm/vw_ubah_ktm", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'nama' => $this->input->POST('nama'),
                'nim' => $this->input->POST('nim'),
                'jurusan' => $this->input->POST('jurusan'),
                'tanggal_lahir' => $this->input->POST('tanggal_lahir'),
                'alamat' => $this->input->POST('alamat'),
            ];
            $id = $this->input->POST('id');
            $this->ktm_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-info-circle"></i> Data ktm Berhasil Diubah!</div>');
            redirect('ktm');
        }
    }
    public function detail($id)
	{
		$data['judul'] = "Halaman Detail ktm";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['ktm'] = $this->ktm_model->getById($id);
		$this->load->view("layout/header",$data);
		$this->load->view("ktm/vw_detail_ktm", $data);
		$this->load->view("layout/footer",$data);
	}
}

/* End of file Prodi.php */
/* Location: ./application/controllers/Prodi.php */
