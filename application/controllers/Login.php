<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('m_login');
    }

    public function index() {
        $this->load->view('v_login');
    }

    public function auth() {
        $username = $this->input->post('username', TRUE);
        $password = $this->input->post('password', TRUE);
        $validasi = $this->m_login->validasi($username, $password);
        if($validasi->num_rows() > 0){
            $data = $validasi->row_array();
            $nama = $data['name'];
            $username = $data['username'];
            $role = $data['role'];
            $sesdata = array(
                'name' => $nama,
                'username' => $username,
                'role' => $role,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($sesdata);
            if($role == 'Admin') {
                redirect('index');
            } else {
                redirect('index');
            }
        } else {
            echo $this->session->set_flashdata('msg', 'Username atau Password salah');
            redirect('login');
        }
    }

    function logout(){
        $this->session->sess_destroy();
        redirect('index');
    }
}