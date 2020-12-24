<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Payment_model extends CI_Model
{
  function listPayment($limit, $from)
  {
    $this->db->select('tbl_payment.*,
                      tbl_user.namalengkap,
                      tbl_paket.nama_paket')
      ->from('tbl_payment')
      ->join('tbl_user', 'tbl_user.id_user = tbl_payment.id_user', 'left')
      ->join('tbl_paket', 'tbl_paket.id_paket = tbl_payment.id_paket', 'left')
      ->where('is_pay', '1')
      ->limit($limit)
      ->offset($from)
      ->order_by('tbl_payment.date_created', 'DESC');
    return $this->db->get()->result();
  }

  function detailPayment($id_payment)
  {
    $this->db->select('tbl_payment.*,
                      tbl_user.namalengkap,
                      tbl_user.email,
                      tbl_paket.*')
      ->from('tbl_payment')
      ->join('tbl_user', 'tbl_user.id_user = tbl_payment.id_user', 'left')
      ->join('tbl_paket', 'tbl_paket.id_paket = tbl_payment.id_paket', 'left')
      ->where('tbl_payment.id_payment', $id_payment);
    return $this->db->get()->row();
  }

  function cekMember($id_user, $id_paket)
  {
    $this->db->select('*')
      ->from('tbl_member')
      ->where('id_user', $id_user)
      ->where('id_paket', $id_paket);
  }
}
