<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_dashboard');
    $this->load->library('form_validation');
    $this->load->helper('url');
  }

  public function index()
  {
    $this->m_squrity->getSecurity();
    $isi['user'] = $this->m_dashboard->ambil_data($this->session->userdata('username'));
    $isi['content'] = 'backend/profil/v_profil';
    $isi['judul'] = '<i class="fas fa-fw fa-user"></i> Profile Saya';
    $this->load->view('backend/dashboard', $isi);
  }

  public function ubahProfil()
  {
    $isi['judul'] = '<i class="fa fa-edit"></i> Ubah Profil';
    $isi['user'] = $this->m_dashboard->ambil_data($this->session->userdata('username'));
    $isi['content'] = 'backend/profil/e_profil';

    $this->form_validation->set_rules('username', 'Username', 'required|trim', [
      'required' => 'Username tidak boleh kosong'
    ]);

    if ($this->form_validation->run() == false) {
      $this->load->view('backend/dashboard', $isi);
    } else {
      $username = $this->input->post('username', true);
      $upload_image = $_FILES['image']['name'];

      // Handle file upload jika ada
      if ($upload_image) {
        $config['upload_path'] = 'img/profile/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '3000';
        $config['max_width'] = '1024';
        $config['max_height'] = '1000';
        $config['file_name'] = 'pro' . time();
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
          // Menghapus gambar lama jika bukan 'default.jpg'
          $gambar_lama = $isi['user']->image;
          if ($gambar_lama != 'default.jpg') {
            unlink(FCPATH . 'img/profile/' . $gambar_lama);
          }
          // Set gambar baru
          $gambar_baru = $this->upload->data('file_name');
          $this->db->set('image', $gambar_baru);
        } else {
          // Tambahkan error handling jika diperlukan
          $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">' . $this->upload->display_errors() . '</div>');
          redirect('user/ubahprofil');
        }
      }

      // Update username dan gambar (jika ada)
      $this->db->set('username', $username);
      $this->db->where('username', $this->session->userdata('username'));
      $this->db->update('user');

      // Update session username dengan username baru
      $this->session->set_userdata('username', $username);

      // Set pesan flash untuk notifikasi sukses
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Profil berhasil diubah</div>');
      redirect('user');
    }
  }
}