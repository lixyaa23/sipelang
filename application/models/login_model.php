<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model {

    public function data_login($table, $where) {
        $this->db->where($where);
        $query = $this->db->get($table);
        return $query;
    }

    public function get_user_by_username($username) {
        $this->db->where('username', $username);
        $query = $this->db->get('users');
        return $query->row(); 
    }

}
