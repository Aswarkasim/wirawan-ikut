<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Soal_model extends CI_Model
{
  function listPaket()
  {
    $this->db->select('*')
      ->from('tbl_paket');
    return $this->db->get()->result();
  }


  function detailPaket($id_paket)
  {
    $this->db->select('*')
      ->from('tbl_paket')
      ->where('tbl_paket.id_paket', $id_paket);
    return $this->db->get()->row();
  }

  function listPilihan($where)
  {
    $query = $this->db->select('*')
      ->from('tbl_pilihan')
      ->where('id_soal', $where)
      ->order_by('anotasi', 'ASC')
      ->get();
    return $query->result();
  }

  function listMember($member, $limit = null)
  {
    $this->db->select('tbl_member.*,
                      tbl_user.namalengkap,
                      tbl_paket.nama_paket')
      ->from('tbl_member')
      ->join('tbl_user', 'tbl_user.id_user = tbl_member.id_user', 'left')
      ->join('tbl_paket', 'tbl_paket.id_paket = tbl_member.id_paket', 'left')
      ->where('tbl_member.id_paket', $member)
      ->limit($limit)
      ->order_by('tbl_member.date_created', 'DESC');
    return $this->db->get()->result();
  }

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

  function cekPoin($id_soal, $poin = 0)
  {
    $this->db->select('*')
      ->from('tbl_pilihan')
      ->where('id_soal', $id_soal)
      ->where('poin', $poin);
    return $this->db->get()->row();
  }

  function cekNoSoal($id_paket, $no_soal = 0)
  {
    $this->db->select('*')
      ->from('tbl_soal')
      ->where('id_paket', $id_paket)
      ->where('no_soal', $no_soal);
    return $this->db->get()->row();
  }
}
