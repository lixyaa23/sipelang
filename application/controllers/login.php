<?php

class login extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('login_model');
        $this->load->library('form_validation');
    }

    public function index(){
        $this->load->view('form_login');
    }

    public function cek_login() {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
    
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('form_login');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $where = array(
                'username' => $username,
                'password' => $password
            );
    
            $user = $this->login_model->data_login("admin", $where)->row();
    
            if ($user) {
                $data_session = array(
                    'user_id' => $user->id,
                    'status' => "login",
                );
                $this->session->set_userdata($data_session);
                redirect('Dashboard');
            } else {
                $this->session->set_flashdata('pesan', 'Username atau Password salah.');
                redirect(base_url("login"));
            }
        }
    }
    
    public function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }
}
?>
