<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {
    public function validasi($username, $password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('account');

        return $query;
    }
}