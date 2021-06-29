<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title'] = 'Halaman Login';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/login');
        $this->load->view('templates/auth_footer');
    }

    public function registrasi()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]|matches[repeatPassword]', [
            'matches' => 'Password tidak sama!',
            'min_length' => 'Password pendek!'
        ]);
        $this->form_validation->set_rules('repeatPassword', 'Password', 'required|trim|matches[password]');

        if( $this->form_validation->run() == false){
            $data['title'] = 'Halaman Registrasi';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registrasi');
            $this->load->view('templates/auth_footer');
        } else {
            echo ' data berhasil ditambahkan';
        }
    }
}
