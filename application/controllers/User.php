<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->$this->form_validation->set_rules('noSk', 'NomorSuratKeluar', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('surat_keluar', ['no_surat' => $this->input->post('no_surat')]);
            $this->session->$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Surat Keluar Berhasil Ditambahkan!</div>');
            redirect('suratKeluar');
        }
    }

    public function edit()
    {
        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('name', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $name = $this->input->post('name');
            $username = $this->input->post('username');

            //  Cek Jika Ada Gambar Yang Akan di Upload   
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']     = '2048';
                $config['upload_path'] = './assets/img/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {

                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->dispaly_errors();
                }
            }

            // $this->db->set('username', $username);
            $this->db->set('name', $name);

            $this->db->where('username', $username);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Edit profile berhasil!</div>');
            redirect('user');
        }
    }

    public function changePassword()
    {
        $data['title'] = 'Change Password';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Repeat Password', 'required|trim|min_length[3]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/changePassword', $data);
            $this->load->view('templates/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');

            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Wrong current password!</div>');
                redirect('user/changepassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    New password cannot be the same as current password!</div>');
                    redirect('user/changepassword');
                } else {
                    //password sudah oke
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('username', $this->session->userdata('username'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Password changed!</div>');
                    redirect('user/changepassword');
                }
            }
        }
    }

<<<<<<< Updated upstream
    public function users (){
        $data['title'] = 'Users';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/users', $data);
        $this->load->view('templates/footer');
    }

    public function suratMasuk (){
=======
    public function suratMasuk()
    {
>>>>>>> Stashed changes
        $data['title'] = 'Surat Masuk';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $data['surat_masuk'] = $this->db->get('surat_masuk')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/suratMasuk', $data);
        $this->load->view('templates/footer');
    }

<<<<<<< Updated upstream
    public function tambahSuratMasuk (){
        $data['title'] = 'Form Tambah Surat Masuk';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/tambahSuratMasuk', $data);
        $this->load->view('templates/footer');
    }

    public function suratKeluar (){
=======
    public function suratKeluar()
    {
>>>>>>> Stashed changes
        $data['title'] = 'Surat Keluar';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        // $this->load->model('suratKeluar_model', 'suratKeluar');

        $data['surat_keluar'] = $this->db->get('surat_keluar')->result_array();
        $this->form_validation->set_rules('no_surat', 'No Surat', 'required');
        $this->form_validation->set_rules('tgl_suratKeluar', 'Tanggal Surat', 'required');
        $this->form_validation->set_rules('pengirim', 'Pengirim', 'required');
        $this->form_validation->set_rules('penerima', 'Penerima', 'required');
        $this->form_validation->set_rules('perihal', 'Perihal', 'required');
        $this->form_validation->set_rules('disposisi', 'Disposisi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/suratKeluar', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'no_surat' => $this->input->post('no_surat'),
                'tgl_suratKeluar' => $this->input->post('tgl_suratKeluar'),
                'pengirim' => $this->input->post('pengirim'),
                'penerima' => $this->input->post('penerima'),
                'no_surat' => $this->input->post('no_surat'),
                'perihal' => $this->input->post('perihal'),
                'disposisi' => $this->input->post('disposisi')
            ];
            $this->db->insert('surat_keluar', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Surat Baru Berhasil Ditambah!</div>');
            redirect('user/suratKeluar');
        }
    }

    public function disposisi()
    {
        $data['title'] = 'Disposisi';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/disposisi', $data);
        $this->load->view('templates/footer');
    }

    public function tambahDisposisi (){
        $data['title'] = 'Form Tambah Data Disposisi';
        $data['user'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/tambahDisposisi', $data);
        $this->load->view('templates/footer');
    }
}
