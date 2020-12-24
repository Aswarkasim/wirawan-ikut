<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Team extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    is_logged_in_admin();
    $this->load->model('admin/Soal_model', 'SM');
  }

  public function index()
  {
    $team = $this->Crud_model->listing('tbl_team');

    $data = [
      'team'    => $team,
      'add'      => 'admin/team/add',
      'edit'      => 'admin/team/edit/',
      'delete'      => 'admin/team/delete/',
      'title'     => 'Team',
      'content'   => 'admin/team/index'
    ];

    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  public function add()
  {

    $this->load->helper('string');


    $required = '%s tidak boleh kosong';
    $valid = $this->form_validation;
    $valid->set_rules('nama_team', 'Nama', 'required', ['required' => $required]);
    if ($valid->run()) {
      if (!empty($_FILES['gambar']['name'])) {
        $config['upload_path']   = './assets/uploads/images/';
        $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
        $config['max_size']      = '24000'; // KB 
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('gambar')) {
          $data = [
            'title'    => 'Tambah Team',
            'add'    => 'admin/team/add',
            'back'    => 'admin/team',
            'error'     => $this->upload->display_errors(),
            'content'  => 'admin/team/add'
          ];
          $this->load->view('admin/layout/wrapper', $data, FALSE);
        } else {
          $upload_data = ['uploads' => $this->upload->data()];

          $i = $this->input;

          $data = [
            'id_team'      => random_string(),
            'nama_team'    => $i->post('nama_team'),
            'pekerjaan'         => $i->post('pekerjaan'),
            'deskripsi'         => $i->post('deskripsi'),
            'gambar'            => $config['upload_path'] . $upload_data['uploads']['file_name']
          ];
          $this->Crud_model->add('tbl_team', $data);
          $this->session->set_flashdata('msg', 'Team ditambahkan');
          redirect('admin/team');
        }
      }
    }
    $data = [
      'title'    => 'Tambah Team',
      'add'    => 'admin/team/add',
      'back'    => 'admin/team',
      'content'  => 'admin/team/add'
    ];
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }



  function edit($id_team)
  {
    $team = $this->Crud_model->listingOne('tbl_team', 'id_team', $id_team);
    $type = $this->Crud_model->listing('tbl_type');

    $valid = $this->form_validation;

    $required = '%s tidak boleh kosong';
    $valid = $this->form_validation;
    $valid->set_rules('nama_team', 'Nama Team', 'required', ['required' => $required]);
    if ($valid->run()) {
      if (!empty($_FILES['gambar']['name'])) {
        $config['upload_path']   = './assets/uploads/images/';
        $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
        $config['max_size']      = '24000'; // KB 
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('gambar')) {
          $data = [
            'title'    => 'Edit Team ' . $team->nama_team,
            'edit'    => 'admin/team/edit/' . $team->id_team,
            'back'    => 'admin/team',
            'type'    => $type,
            'team'    => $team,
            'error'     => $this->upload->display_errors(),
            'content'  => 'admin/team/edit'
          ];
          $this->load->view('admin/layout/wrapper', $data, FALSE);
        } else {
          if ($team->gambar != '') {
            unlink($team->gambar);
          }

          $upload_data = ['uploads' => $this->upload->data()];

          $i = $this->input;

          $data = [
            'id_team'      => $id_team,
            'nama_team'    => $i->post('nama_team'),
            'pekerjaan'         => $i->post('pekerjaan'),
            'deskripsi'         => $i->post('deskripsi'),
            'gambar'          => $config['upload_path'] . $upload_data['uploads']['file_name']
          ];
          $this->Crud_model->edit('tbl_team', 'id_team', $id_team, $data);
          $this->session->set_flashdata('msg', 'Team diubah');
          redirect('admin/team/edit/' . $id_team);
        }
      } else {
        $i = $this->input;

        $data = [
          'id_team'      => $id_team,
          'nama_team'    => $i->post('nama_team'),
          'pekerjaan'         => $i->post('pekerjaan'),
          'deskripsi'         => $i->post('deskripsi')
        ];
        $this->Crud_model->edit('tbl_team', 'id_team', $id_team, $data);
        $this->session->set_flashdata('msg', 'Team diubah');
        redirect('admin/team/edit/' . $id_team);
      }
    }
    $data = [
      'title'    => 'Edit Team ' . $team->nama_team,
      'edit'    => 'admin/team/edit/' . $team->id_team,
      'back'    => 'admin/team',
      'type'    => $type,
      'team'    => $team,
      'content'  => 'admin/team/edit'
    ];
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  function delete($id_team)
  {

    $team = $this->Crud_model->listingOne('tbl_team', 'id_team', $id_team);
    if ($team->gambar != '') {
      unlink($team->gambar);
    }

    $this->Crud_model->delete('tbl_team', 'id_team', $id_team);
    $this->session->set_flashdata('msg', 'dihapus');
    redirect('admin/team');
  }
}
