<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{
  public function listPaket($limit)
  {
    $this->db->select('*')
      ->from('tbl_paket')
      ->where('is_active', '1')
      ->limit($limit);
    return $this->db->get()->result();
  }


  public function detailPaket($id_paket)
  {
    $this->db->select('*')
      ->from('tbl_paket')
      ->where('id_paket', $id_paket);
    return $this->db->get()->row();
  }

  function detailInvoice($id_payment)
  {
    $this->db->select('tbl_payment.*, 
                      tbl_paket.*')
      ->from('tbl_payment')
      ->join('tbl_paket', 'tbl_paket.id_paket = tbl_payment.id_paket', 'left')
      ->where('id_payment', $id_payment);
    return $this->db->get()->row();
  }

  function cekInvoice($id_user, $id_paket)
  {
    $this->db->select('*')
      ->from('tbl_payment')
      ->where('id_user', $id_user)
      ->where('id_paket', $id_paket)
      ->where('is_active', '1');
    return $this->db->get()->row();
  }

  function cekMember($id_user, $id_paket)
  {
    $this->db->select('*')
      ->from('tbl_member')
      ->where('id_user', $id_user)
      ->where('id_paket', $id_paket);
    return $this->db->get()->row();
  }





  function listPilihan($id_soal)
  {
    $this->db->select('*')
      ->from('tbl_pilihan')
      ->where('id_soal', $id_soal)
      ->order_by('anotasi', 'ASC');
    return $this->db->get()->result();
  }

  function listKlasifikasi($id_paket)
  {
    $this->db->select('*')
      ->from('tbl_soal')
      ->where('id_paket', $id_paket)
      ->where('is_done', '1');
    return $this->db->get()->result();
  }

  function detailMember($id_user, $id_paket)
  {
    $this->db->select('*')
      ->from('tbl_member')
      ->where('id_paket', $id_paket)
      ->where('id_user', $id_user);
    return $this->db->get()->row();
  }



  function cekKupon($kupon)
  {
    $this->db->select('*')
      ->from('tbl_token')
      ->where('token', $kupon);
    return $this->db->get()->row();
  }

  function rangking($id_paket)
  {
    $this->db->select('tbl_rangking.*, 
                      tbl_user.namalengkap,
                      tbl_user.foto,
                      tbl_paket.nama_paket')
      ->from('tbl_rangking')
      ->join('tbl_user', 'tbl_user.id_user = tbl_rangking.id_user', 'left')
      ->join('tbl_paket', 'tbl_paket.id_paket = tbl_rangking.id_paket', 'left')
      ->where('tbl_rangking.id_paket', $id_paket)
      ->order_by('tbl_rangking.nilai', 'DESC')
      ->order_by('tbl_rangking.date_created', 'ASC')
      ->limit('10');
    return $this->db->get()->result();
  }
}
