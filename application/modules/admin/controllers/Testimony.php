<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Testimony extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    is_logged_in_admin();
    $this->load->model('admin/Soal_model', 'SM');
  }

  public function index()
  {
    $testimony = $this->Crud_model->listing('tbl_testimony');

    $data = [
      'testimony'    => $testimony,
      'add'      => 'admin/testimony/add',
      'edit'      => 'admin/testimony/edit/',
      'delete'      => 'admin/testimony/delete/',
      'title'     => 'Testimony',
      'content'   => 'admin/testimony/index'
    ];

    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  public function add()
  {

    $this->load->helper('string');


    $required = '%s tidak boleh kosong';
    $valid = $this->form_validation;
    $valid->set_rules('nama_testimony', 'Nama', 'required', ['required' => $required]);
    if ($valid->run()) {
      if (!empty($_FILES['gambar']['name'])) {
        $config['upload_path']   = './assets/uploads/images/';
        $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
        $config['max_size']      = '24000'; // KB 
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('gambar')) {
          $data = [
            'title'    => 'Tambah Testimony',
            'add'    => 'admin/testimony/add',
            'back'    => 'admin/testimony',
            'error'     => $this->upload->display_errors(),
            'content'  => 'admin/testimony/add'
          ];
          $this->load->view('admin/layout/wrapper', $data, FALSE);
        } else {
          $upload_data = ['uploads' => $this->upload->data()];

          $i = $this->input;

          $data = [
            'id_testimony'      => random_string(),
            'nama_testimony'    => $i->post('nama_testimony'),
            'pekerjaan'         => $i->post('pekerjaan'),
            'deskripsi'         => $i->post('deskripsi'),
            'gambar'            => $config['upload_path'] . $upload_data['uploads']['file_name']
          ];
          $this->Crud_model->add('tbl_testimony', $data);
          $this->session->set_flashdata('msg', 'Testimony ditambahkan');
          redirect('admin/testimony');
        }
      }
    }
    $data = [
      'title'    => 'Tambah Testimony',
      'add'    => 'admin/testimony/add',
      'back'    => 'admin/testimony',
      'content'  => 'admin/testimony/add'
    ];
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }



  function edit($id_testimony)
  {
    $testimony = $this->Crud_model->listingOne('tbl_testimony', 'id_testimony', $id_testimony);
    $type = $this->Crud_model->listing('tbl_type');

    $valid = $this->form_validation;

    $required = '%s tidak boleh kosong';
    $valid = $this->form_validation;
    $valid->set_rules('nama_testimony', 'Nama Testimony', 'required', ['required' => $required]);
    if ($valid->run()) {
      if (!empty($_FILES['gambar']['name'])) {
        $config['upload_path']   = './assets/uploads/images/';
        $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
        $config['max_size']      = '24000'; // KB 
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('gambar')) {
          $data = [
            'title'    => 'Edit Testimony ' . $testimony->nama_testimony,
            'edit'    => 'admin/testimony/edit/' . $testimony->id_testimony,
            'back'    => 'admin/testimony',
            'type'    => $type,
            'testimony'    => $testimony,
            'error'     => $this->upload->display_errors(),
            'content'  => 'admin/testimony/edit'
          ];
          $this->load->view('admin/layout/wrapper', $data, FALSE);
        } else {
          if ($testimony->gambar != '') {
            unlink($testimony->gambar);
          }

          $upload_data = ['uploads' => $this->upload->data()];

          $i = $this->input;

          $data = [
            'id_testimony'      => $id_testimony,
            'nama_testimony'    => $i->post('nama_testimony'),
            'pekerjaan'         => $i->post('pekerjaan'),
            'deskripsi'         => $i->post('deskripsi'),
            'gambar'          => $config['upload_path'] . $upload_data['uploads']['file_name']
          ];
          $this->Crud_model->edit('tbl_testimony', 'id_testimony', $id_testimony, $data);
          $this->session->set_flashdata('msg', 'Testimony diubah');
          redirect('admin/testimony/edit/' . $id_testimony);
        }
      } else {
        $i = $this->input;

        $data = [
          'id_testimony'      => $id_testimony,
          'nama_testimony'    => $i->post('nama_testimony'),
          'pekerjaan'         => $i->post('pekerjaan'),
          'deskripsi'         => $i->post('deskripsi')
        ];
        $this->Crud_model->edit('tbl_testimony', 'id_testimony', $id_testimony, $data);
        $this->session->set_flashdata('msg', 'Testimony diubah');
        redirect('admin/testimony/edit/' . $id_testimony);
      }
    }
    $data = [
      'title'    => 'Edit Testimony ' . $testimony->nama_testimony,
      'edit'    => 'admin/testimony/edit/' . $testimony->id_testimony,
      'back'    => 'admin/testimony',
      'type'    => $type,
      'testimony'    => $testimony,
      'content'  => 'admin/testimony/edit'
    ];
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  function delete($id_testimony)
  {

    $testimony = $this->Crud_model->listingOne('tbl_testimony', 'id_testimony', $id_testimony);
    if ($testimony->gambar != '') {
      unlink($testimony->gambar);
    }

    $this->Crud_model->delete('tbl_testimony', 'id_testimony', $id_testimony);
    $this->session->set_flashdata('msg', 'dihapus');
    redirect('admin/testimony');
  }
}
