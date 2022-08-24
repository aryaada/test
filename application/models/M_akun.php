<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_akun extends CI_Model {
    public function get() {
        $this->db->select('*');
        $this->db->from('account');
        $query = $this->db->get();

        return $query->result();
    }

    public function add($data, $table) {
        $this->db->insert($table, $data);
    }

    public function edit($where, $table) {
        return $this->db->get_where($table, $where);
    }

    public function update($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

    public function detail($where, $table) {
        return $this->db->get_where($table, $where);
    }

    function hapus($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}