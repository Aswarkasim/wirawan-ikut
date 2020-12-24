<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
  public function login($email, $password)
  {
    $this->db->select('*')
      ->from('tbl_admin')
      ->where(array(
        'email'      => $email,
        'password'   => sha1($password)
      ));
    $query = $this->db->get();
    return $query->row();
  }
  public function loginUsername($username, $password)
  {
    $this->db->select('*')
      ->from('tbl_admin')
      ->where(array(
        'username'      => $username,
        'password'   => sha1($password)
      ));
    $query = $this->db->get();
    return $query->row();
  }

  function listKupon()
  {
    $this->db->select('tbl_kupon.*,
                      tbl_admin.nama_admin')
      ->from('tbl_kupon')
      ->join('tbl_admin', 'tbl_admin.id_admin = tbl_kupon.id_admin', 'left')
      ->order_by('tbl_kupon.date_created', 'DESC');
    return $this->db->get()->result();
  }
}

/* End of file ModelName.php */
