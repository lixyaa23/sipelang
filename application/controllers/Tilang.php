<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tilang extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('tilang_model');
    }

    public function index()
    {
        $data['title'] = 'Tilang' ;
        $data['tilang'] = $this->tilang_model->get_data('tbl_tilang')->result();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('tilang', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Data Tilang' ;

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('tambah_tilang');
        $this->load->view('template/footer');
    }

    public function tambah_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah();
        } else {
            $data = array(
                'id_tilang' => $this->input->post('id_tilang'),
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'pasal' => $this->input->post('pasal'),
                'denda' => $this->input->post('denda'),
            );

            $this->tilang_model->insert_data($data, 'tbl_tilang');
            $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            Data Berhasil Ditambahkan!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span></button></div>');
            redirect('tilang');
        }

    }

    public function edit($id_tilang)
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $data = array(
                'id_tilang' => $id_tilang,
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'pasal' => $this->input->post('pasal'),
                'denda' => $this->input->post('denda'),
            );

            $this->tilang_model->update_data($data, 'tbl_tilang');
            $this->session->set_flashdata('pesan', '<div class="alert alert-succes alert-dismissible fade show" role="alert">
            Data Berhasil Diubah!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span></button></div>');
            redirect('tilang');
        }
    }

    public function print()
    {
        $data['tilang'] = $this->tilang_model->get_data('tbl_tilang')->result();
        $this->load->view('print_tilang', $data);
    }

    public function _rules()
    {
        $this->form_validation->set_rules('id_tilang', 'ID Tilang', 'required', array(
            'required' => '%s harus diisi !!'
        ));
        $this->form_validation->set_rules('nama', 'Nama', 'required', array(
            'required' => '%s harus diisi !!'
        ));
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', array(
            'required' => '%s harus diisi !!'
        ));
        $this->form_validation->set_rules('pasal', 'Pasal', 'required', array(
            'required' => '%s harus diisi !!'
        ));
        $this->form_validation->set_rules('denda', 'Denda', 'required', array(
            'required' => '%s harus diisi !!'
        ));
    }

    public function delete($id)
    {
        $where = array('id_tilang' => $id);

        $this->tilang_model->delete($where, 'tbl_tilang');
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Berhasil Dihapus!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span></button></div>');
            redirect('tilang');
    }

}