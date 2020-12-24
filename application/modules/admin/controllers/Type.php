<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Type extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    is_logged_in_admin();
  }

  public function index()
  {
    $type = $this->Crud_model->listing('tbl_type');

    $data = [
      'type'    => $type,
      'add'      => 'admin/type/add',
      'edit'      => 'admin/type/edit/',
      'delete'      => 'admin/type/delete/',
      'title'     => 'Type',
      'content'   => 'admin/type/index'
    ];

    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }
  function add()
  {

    $this->load->helper('string');

    $valid = $this->form_validation;

    $valid->set_rules('nama_type', 'Nama Type', 'required');

    if ($valid->run() === FALSE) {
      $data = [
        'title'     => 'Tambah Type',
        'add'       => 'admin/type/add',
        'back'      => 'admin/type',
        'content'   => 'admin/type/add'
      ];
      $this->load->view('admin/layout/wrapper', $data, FALSE);
    } else {
      $i = $this->input;
      $data = [
        'id_type'      => random_string(),
        'nama_type'     => $i->post('nama_type')
      ];
      $this->Crud_model->add('tbl_type', $data);
      $this->session->set_flashdata('msg', 'ditambah');
      redirect('admin/type/add', 'refresh');
    }
  }

  function edit($id_type)
  {
    $type = $this->Crud_model->listingOne('tbl_type', 'id_type', $id_type);

    $valid = $this->form_validation;

    $valid->set_rules('nama_type', 'Nama Type', 'required');

    if ($valid->run() === FALSE) {
      $data = [
        'title'     => 'Edit ' . $type->nama_type,
        'edit'       => 'admin/type/edit/',
        'back'      => 'admin/type',
        'type'      => $type,
        'content'   => 'admin/type/edit'
      ];
      $this->load->view('admin/layout/wrapper', $data, FALSE);
    } else {
      $i = $this->input;
      $data = [
        'id_type'       => $id_type,
        'nama_type'     => $i->post('nama_type'),
      ];
      $this->Crud_model->edit('tbl_type', 'id_type', $id_type, $data);
      $this->session->set_flashdata('msg', 'diedit');
      redirect('admin/type/edit/' . $id_type, 'refresh');
    }
  }

  function delete($id_type)
  {

    $this->Crud_model->delete('tbl_type', 'id_type', $id_type);
    $this->session->set_flashdata('msg', 'dihapus');
    redirect('admin/type');
  }

  function ckeditor()
  {
    $this->load->view('admin/type/ckeditor');
  }
}

/* End of file Type.php */
