<?php
class login extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_login');
    $this->load->library('form_validation');
  }

  public function index()
  {
    // Jika pengguna sudah login, redirect ke halaman user
    if ($this->session->userdata('username')) {
    }

    // Validasi input
    $this->form_validation->set_rules(
      'username',
      'Username',
      'required|trim', // Ubah validasi menjadi hanya required dan trim
      ['required' => 'Username Wajib Harus diisi!!']
    );
    $this->form_validation->set_rules(
      'password',
      'Password',
      'required|trim',
      ['required' => 'Password Wajib Harus diisi!!']
    );

    // Jika validasi gagal, tampilkan pesan kesalahan di halaman login
    if ($this->form_validation->run() == false) {
      // Mengambil nilai username yang telah dimasukkan sebelumnya
      $data['username'] = $this->input->post('username');
      $this->load->view('backend/login', $data);
    } else {
      // Jika validasi berhasil, lanjutkan proses login
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $this->m_login->proses_login($username, $password);
    }
  }

  public function logout()
  {
    $this->session->unset_userdata('username');
    $this->session->unset_userdata('password');

    $this->session->set_flashdata('info', '<div class="alert alert-warning alert-message" role="alert"><i class="icon fas fa-exclamation-triangle"></i> Anda Telah Keluar!!</div>');
    redirect('login');
  }

  public function registrasi()
  {
    if ($this->session->userdata('username')) {
    }
    $this->form_validation->set_rules(
      'username',
      'Username',
      'required|trim|is_unique[user.username]', // Pastikan username unik
      [
        'required' => 'Username Wajib diisi!!',
        'is_unique' => 'Username sudah digunakan!'
      ]
    );
    $this->form_validation->set_rules(
      'password1',
      'Password',
      'required|trim|min_length[3]|matches[password2]',
      [
        'required' => 'Password1 Wajib diisi!!',
        'matches' => 'Password Tidak Sama!!',
        'min_length' => 'Password Terlalu Pendek'
      ]
    );
    $this->form_validation->set_rules(
      'password2',
      'Repeat Password',
      'required|trim|matches[password1]',
      [
        'required' => 'Password2 Wajib diisi!!',
      ]
    );

    if ($this->form_validation->run() == false) {
      $data['judul'] = 'Registrasi Member';
      $this->load->view('backend/register', $data);
    } else {
      $data = [
        'username' => htmlspecialchars($this->input->post('username', true)),
        'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
        'image' => 'default.jpg',
        'tanggal_input' => time()
      ];

      $this->m_login->simpanData($data);

      $this->session->set_flashdata('info', '<div class="alert alert-success alert-message" role="alert"><i class="icon fas fa-check"></i> Selamat!! akun member anda sudah dibuat. Silahkan Login</div>');
      redirect('login');
    }
  }
}
