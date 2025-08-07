<?php
class Users extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('User_model');
        $this->load->helper('url');
    }

    public function index() {
        $data['user'] = $this->User_model->get_users();
        $this->load->view('user_list', $data);
    }

    public function add() {
        $this->load->view('user_form');
    }

    public function save() {
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email')
        );
        $this->User_model->insert_user($data);
        redirect('users');
    }
}
