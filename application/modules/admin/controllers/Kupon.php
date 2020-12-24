<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kupon extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    is_logged_in_admin();
  }

  public function index()
  {
    $this->load->model('admin/Admin_model', 'AM');
    $kupon = $this->AM->listKupon();

    $data = [
      'kupon'    => $kupon,
      'add'      => 'admin/kupon/add',
      'edit'      => 'admin/kupon/edit/',
      'delete'      => 'admin/kupon/delete/',
      'title'     => 'Kupon',
      'content'   => 'admin/kupon/index'
    ];

    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }
  function add()
  {

    $this->load->helper('string');

    $valid = $this->form_validation;

    $valid->set_rules('kupon', 'Kupon', 'required', ['required' => '%s tidak boleh kosong']);

    if ($valid->run() === FALSE) {
      $data = [
        'title'     => 'Tambah Kupon',
        'add'       => 'admin/kupon/add',
        'back'      => 'admin/kupon',
        'content'   => 'admin/kupon/add'
      ];
      $this->load->view('admin/layout/wrapper', $data, FALSE);
    } else {
      $i = $this->input;
      $data = [
        'id_kupon'      => random_string(),
        'id_admin'    => $this->session->userdata('id_admin'),
        'kupon'     => $i->post('kupon'),
        'diskon'     => $i->post('diskon'),
        'kapasitas'     => $i->post('kapasitas'),
        'is_active'     => $i->post('is_active')
      ];
      $this->Crud_model->add('tbl_kupon', $data);
      $this->session->set_flashdata('msg', 'ditambah');
      redirect('admin/kupon/add', 'refresh');
    }
  }

  function edit($id_kupon)
  {
    $kupon = $this->Crud_model->listingOne('tbl_kupon', 'id_kupon', $id_kupon);

    $valid = $this->form_validation;

    $valid->set_rules('nama_kupon', 'Nama Kupon', 'required');

    if ($valid->run() === FALSE) {
      $data = [
        'title'     => 'Edit ' . $kupon->nama_kupon,
        'edit'       => 'admin/kupon/edit/',
        'back'      => 'admin/kupon',
        'kupon'      => $kupon,
        'content'   => 'admin/kupon/edit'
      ];
      $this->load->view('admin/layout/wrapper', $data, FALSE);
    } else {
      $i = $this->input;
      $data = [
        'id_kupon'       => $id_kupon,
        'nama_kupon'     => $i->post('nama_kupon'),
      ];
      $this->Crud_model->edit('tbl_kupon', 'id_kupon', $id_kupon, $data);
      $this->session->set_flashdata('msg', 'diedit');
      redirect('admin/kupon/edit/' . $id_kupon, 'refresh');
    }
  }

  function delete($id_kupon)
  {

    $this->Crud_model->delete('tbl_kupon', 'id_kupon', $id_kupon);
    $this->session->set_flashdata('msg', 'dihapus');
    redirect('admin/kupon');
  }
}

/* End of file Kupon.php */
