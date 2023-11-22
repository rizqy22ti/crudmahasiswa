<?php
defined('BASEPATH') or exit('no direct script access allowed');
class profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model', 'userrole');
    }
    function index()
    {
        $data['judul'] = "Halaman Profile";
        $data['user'] = $this->userrole->getBy();
        $this->load->view("layout/header", $data);
        $this->load->view("profile/vw_profile", $data);
        $this->load->view("layout/footer");
    }
}