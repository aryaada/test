<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if($this->session->userdata('logged_in') !== TRUE){
            redirect('login');
        }
        $this->load->model('m_post');
        $this->load->helper('url');
    }

    public function index() {
        $data['post'] = $this->m_post->get();
        $this->load->view('v_post', $data);
    }

    public function add_post() {
        $this->load->view('v_form_add_post');
    }

    public function simpan_post() {
        $title = $this->input->post('title');
        $content = $this->input->post('content');
        $username = $this->input->post('username');
        $this->load->helper('date');

        date_default_timezone_set("UTC");
        echo $date=gmdate("F j, Y").'<br>';

        if (function_exists('date_default_timezone_set')) {
            date_default_timezone_set('Asia/Jakarta');
        }
        date_default_timezone_set('Asia/Jakarta');
        $currentDate =time();
        $datestring = '%Y-%m-%d - %h:%i %a';
        $time = time();
        $better_date= mdate($datestring, $time).'<br>';
        $c_date=date("Y-m-d H:i:s").'<br>';

        $data = array(
            'title' => $title,
            'content' => $content,
            'date' => $c_date,
            'username' => $username
        );
        $this->m_post->add($data, 'post');
        redirect('post');
    }

    public function edit($id) {
        $where = array('idpost' => $id);
        $data['post'] = $this->m_post->edit($where, 'post')->result();
        $this->load->view('v_form_edit_post', $data);
    }

    public function update() {
        $id = $this->input->post('idpost');
        $title = $this->input->post('title');
        $content = $this->input->post('content');

        $data = array(
            'title' => $title,
            'content' => $content,
        );

        $where = array(
            'idpost' => $id
        );

        $this->m_post->update($where, $data, 'post');
        redirect('post');
    }

    public function detail($id) {
        $where = array('idpost' => $id);
        $data['post'] = $this->m_post->detail($where, 'post')->result();
        $this->load->view('v_detail_post', $data);
    }

    public function hapus($id) {
        $where = array('idpost' => $id);
        $this->m_post->hapus($where, 'post');
        redirect('post');
    }
}