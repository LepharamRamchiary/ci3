<?php
class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_users() {
        return $this->db->get('user')->result(); // SELECT * FROM users
    }

    public function insert_user($data) {
        return $this->db->insert('user', $data); // INSERT INTO users
    }
}
