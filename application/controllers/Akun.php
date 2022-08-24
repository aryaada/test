<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if($this->session->userdata('logged_in') !== TRUE){
            redirect('login');
        }
        $this->load->model('m_akun');
        $this->load->helper('url');
    }

    public function index() {
        $data['akun'] = $this->m_akun->get();
        if($this->session->userdata('role')=='Admin'){
            $this->load->view('v_akun', $data);
        }else{
            echo "Access Denied";
        }
    }

    public function add_akun() {
        $this->load->view('v_form_add_akun');
    }

    public function simpan_akun() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $nama = $this->input->post('nama');
        $role = $this->input->post('role');

        $data = array(
            'username' => $username,
            'password' => $password,
            'name' => $nama,
            'role' => $role
        );
        $this->m_akun->add($data, 'account');
        redirect('akun');
    }

    public function edit($username) {
        $where = array('username' => $username);
        $data['akun'] = $this->m_akun->edit($where, 'account')->result();
        $this->load->view('v_form_edit_akun', $data);
    }

    public function update() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $name = $this->input->post('name');
        $role = $this->input->post('role');

        $data = array(
            'password' => $password,
            'name' => $name,
            'role' => $role
        );

        $where = array(
            'username' => $username
        );

        $this->m_akun->update($where, $data, 'account');
        redirect('akun');
    }

    public function detail($username) {
        $where = array('username' => $username);
        $data['akun'] = $this->m_akun->detail($where, 'account')->result();
        $this->load->view('v_detail_akun', $data);
    }

    public function hapus($username) {
        $where = array('username' => $username);
        $this->m_akun->hapus($where, 'account');
        redirect('akun');
    }
}