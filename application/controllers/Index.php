<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('m_post');
        $this->load->helper('url');
    }

    public function index() {
        $data['post'] = $this->m_post->get();
        $this->load->view('v_index', $data);
    }
}