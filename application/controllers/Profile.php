<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') !== "login") {
            redirect(base_url("login"));
        }
        // Load model to fetch user data
        $this->load->model('User_model');
    }

    public function index()
    {
        $data['title'] = 'Profile';
        // Get user ID from session
        $user_id = $this->session->userdata('user_id');
        // Fetch user data from database
        $data['user'] = $this->User_model->get_user_by_id($user_id);

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('profile', $data);
        $this->load->view('template/footer');
    }
}
