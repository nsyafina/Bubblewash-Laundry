<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_login extends CI_Model
{

 public function proses_login($username, $password)
 {
  $this->db->where('username', $username);
  
  $query = $this->db->get('user');
  if ($query->num_rows() == 1) {
    foreach ($query->result() as $row) {
      $sess = array(
        'id_user' => $row->id_user,
        'username' => $row->username,
        
      );
      $this->session->set_userdata($sess);
    }
    redirect('dashboard');
  } else {
    $this->session->set_flashdata('info', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-exclamation-triangle"></i> Login Gagal, Silahkan Periksa Kembali Username dan Password Anda!</div>');
    redirect('login');
  }
}



public function simpanData($data = null)
{
  $this->db->insert('user', $data);
}
}
?>
