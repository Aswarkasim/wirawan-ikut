<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Paket extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    is_logged_in_admin();
    $this->load->model('admin/Soal_model', 'SM');
  }

  public function index()
  {
    $paket = $this->SM->listPaket();


    $data = [
      'paket'    => $paket,
      'add'      => 'admin/paket/add',
      'edit'      => 'admin/paket/edit/',
      'delete'      => 'admin/paket/delete/',
      'title'     => 'Paket',
      'content'   => 'admin/paket/index'
    ];

    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  public function add()
  {

    $this->load->helper('string');

    $type = $this->Crud_model->listing('tbl_type');

    $required = '%s tidak boleh kosong';
    $valid = $this->form_validation;
    $valid->set_rules('nama_paket', 'Nama Paket', 'required', ['required' => $required]);
    if ($valid->run()) {
      if (!empty($_FILES['cover']['name'])) {
        $config['upload_path']   = './assets/uploads/images/';
        $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
        $config['max_size']      = '24000'; // KB 
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('cover')) {
          $data = [
            'title'    => 'Tambah Paket',
            'add'    => 'admin/paket/add',
            'back'    => 'admin/paket',
            'type'    => $type,
            'error'     => $this->upload->display_errors(),
            'content'  => 'admin/paket/add'
          ];
          $this->load->view('admin/layout/wrapper', $data, FALSE);
        } else {
          $upload_data = ['uploads' => $this->upload->data()];

          $i = $this->input;

          $data = [
            'id_paket'      => random_string(),
            'nama_paket'     => $i->post('nama_paket'),
            'type'     => $i->post('type'),
            'waktu'     => $i->post('waktu'),
            'jumlah_soal'     => $i->post('jumlah_soal'),
            'klasifikasi'     => $i->post('klasifikasi'),
            'harga'     => $i->post('harga'),
            'cover'          => $config['upload_path'] . $upload_data['uploads']['file_name']
          ];
          $this->Crud_model->add('tbl_paket', $data);
          $this->session->set_flashdata('msg', 'Paket ditambahkan');
          redirect('admin/paket');
        }
      }
    }
    $data = [
      'title'    => 'Tambah Paket',
      'add'    => 'admin/paket/add',
      'back'    => 'admin/paket',
      'type'    => $type,
      'content'  => 'admin/paket/add'
    ];
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }



  function edit($id_paket)
  {
    $paket = $this->Crud_model->listingOne('tbl_paket', 'id_paket', $id_paket);
    $type = $this->Crud_model->listing('tbl_type');

    $valid = $this->form_validation;

    $required = '%s tidak boleh kosong';
    $valid = $this->form_validation;
    $valid->set_rules('nama_paket', 'Nama Paket', 'required', ['required' => $required]);
    if ($valid->run()) {
      if (!empty($_FILES['cover']['name'])) {
        $config['upload_path']   = './assets/uploads/images/';
        $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
        $config['max_size']      = '24000'; // KB 
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('cover')) {
          $data = [
            'title'    => 'Edit Paket ' . $paket->nama_paket,
            'add'    => 'admin/paket/edit/' . $paket->id_paket,
            'back'    => 'admin/paket',
            'type'    => $type,
            'paket'    => $paket,
            'error'     => $this->upload->display_errors(),
            'content'  => 'admin/paket/edit'
          ];
          $this->load->view('admin/layout/wrapper', $data, FALSE);
        } else {
          if ($paket->cover != '') {
            unlink($paket->cover);
          }

          $upload_data = ['uploads' => $this->upload->data()];

          $i = $this->input;

          $data = [
            'id_paket'      => $id_paket,
            'nama_paket'     => $i->post('nama_paket'),
            'id_type'     => $i->post('id_type'),
            'waktu'     => $i->post('waktu'),
            'harga'     => $i->post('harga'),
            'cover'          => $config['upload_path'] . $upload_data['uploads']['file_name']
          ];
          $this->Crud_model->edit('tbl_paket', 'id_paket', $id_paket, $data);
          $this->session->set_flashdata('msg', 'Paket diubah');
          redirect('admin/paket/edit/' . $id_paket);
        }
      } else {
        $i = $this->input;

        $data = [
          'id_paket'      => $id_paket,
          'nama_paket'     => $i->post('nama_paket'),
          'id_type'     => $i->post('id_type'),
          'waktu'     => $i->post('waktu'),
          'harga'     => $i->post('harga')
        ];
        $this->Crud_model->edit('tbl_paket', 'id_paket', $id_paket, $data);
        $this->session->set_flashdata('msg', 'Paket diubah');
        redirect('admin/paket/edit/' . $id_paket);
      }
    }
    $data = [
      'title'    => 'Edit Paket ' . $paket->nama_paket,
      'edit'    => 'admin/paket/edit/' . $paket->id_paket,
      'back'    => 'admin/paket',
      'type'    => $type,
      'paket'    => $paket,
      'content'  => 'admin/paket/edit'
    ];
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  function detail($id_paket)
  {

    if ($this->session->userdata('id_paket')) {
      $this->session->unset_userdata('id_paket');
      $this->session->set_userdata('id_paket', $id_paket);
    } else {
      $this->session->set_userdata('id_paket', $id_paket);
    }

    $paket = $this->SM->detailPaket($id_paket);
    $soal = $this->Crud_model->listingOneAll('tbl_soal', 'id_paket', $id_paket);
    $member = $this->SM->listMember($id_paket, '50');


    $data = [
      'paket'  => $paket,
      'paket'  => $paket,
      'member'  => $member,
      'content'  => 'admin/paket/detail'
    ];
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  function delete($id_paket)
  {

    $this->Crud_model->delete('tbl_paket', 'id_paket', $id_paket);
    $this->session->set_flashdata('msg', 'dihapus');
    redirect('admin/paket');
  }

  function editPetunjuk()
  {
    $id_paket = $this->session->userdata('id_paket');
    $data = [
      'petunjuk' => $this->input->post('petunjuk')
    ];
    $this->Crud_model->edit('tbl_paket', 'id_paket', $id_paket, $data);
    $this->session->set_flashdata('msg', 'Petunjuk diperbaharui');
    redirect('admin/paket/detail/' . $id_paket, 'refresh');
  }

  function is_active($id_paket, $value)
  {
    $paket = $this->Crud_model->listingOne('tbl_paket', 'id_paket', $id_paket);
    $soal = $this->Crud_model->listingOneAll('tbl_soal', 'id_paket', $id_paket);
    if ($paket->jumlah_soal != count($soal)) {
      $this->session->set_flashdata('msg_er', 'Jumlah soal belum cukup');
      redirect('admin/paket/detail/' . $id_paket, 'refresh');
    } else {
      __is_boolean('tbl_paket', 'id_paket', $id_paket, 'is_active', $value);
      $this->session->set_flashdata('msg', 'Paket diaktifkan');
      redirect('admin/paket/detail/' . $id_paket, 'refresh');
    }
  }


  function is_pembahasan($id_paket, $value)
  {
    __is_boolean('tbl_paket', 'id_paket', $id_paket, 'is_pembahasan', $value);
    $this->session->set_flashdata('msg', 'Pembahasan paket diaktifkan');
    redirect('admin/paket/detail/' . $id_paket, 'refresh');
  }
  function is_rangking($id_paket, $value)
  {

    __is_boolean('tbl_paket', 'id_paket', $id_paket, 'is_rangking', $value);
    $this->session->set_flashdata('msg', 'Rangking paket diaktifkan');
    redirect('admin/paket/detail/' . $id_paket, 'refresh');
  }
}
