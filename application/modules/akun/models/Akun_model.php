<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Akun_model extends CI_Model
{

  function myPaket($id_user)
  {
    $this->db->select('tbl_member.*, 
                      tbl_paket.nama_paket,
                      tbl_paket.type')
      ->from('tbl_member')
      ->join('tbl_paket', 'tbl_paket.id_paket = tbl_member.id_paket', 'left')
      ->where('id_user', $id_user);
    return $this->db->get()->result();
  }

  function myPaketDetail($id_user, $id_paket)
  {
    $this->db->select('*')->from('tbl_member')
      ->where('id_user', $id_user)
      ->where('id_paket', $id_paket);
    return $this->db->get()->row();
  }




  function myPayment($id_user)
  {
    $this->db->select('tbl_payment.*, 
                      tbl_paket.nama_paket,
                      tbl_paket.type')
      ->from('tbl_payment')
      ->join('tbl_paket', 'tbl_paket.id_paket = tbl_payment.id_paket', 'left')
      ->where('id_user', $id_user)
      ->order_by('date_updated', 'DESC');
    return $this->db->get()->result();
  }
}

/* End of file ModelName.php */
