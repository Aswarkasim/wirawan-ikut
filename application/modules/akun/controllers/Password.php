<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Password extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $id_user  = $this->session->userdata('id_user');
    is_logged_in_user();
    __is_complete_data_profile($id_user);
  }


  public function index()
  {
    $id_user = $this->session->userdata('id_user');
    $user = $this->Crud_model->listingOne('tbl_user', 'id_user', $id_user);
    // print_r($user);
    // die;

    $valid = $this->form_validation;

    $valid->set_rules('password_lama', 'Password Lama', 'required');
    $valid->set_rules('password', 'Password', 'required');
    $valid->set_rules('re_password', 'Password', 'required|matches[password]');

    if ($valid->run() === FALSE) {
      $data = [
        'user'    => $user,
        'content'   => 'akun/password/index'
      ];
      $this->load->view('akun/layout/wrapper', $data, FALSE);
    } else {
      $i = $this->input;

      $pass = sha1($i->post('password_lama'));

      if ($pass != $user->password) {
        $data = [
          'error'     => 'Password lama yang dimasukkan tidak sama',
          'content'   => 'akun/password/index'
        ];
        $this->load->view('akun/layout/wrapper', $data, FALSE);
      } else {

        $data = [
          'password'      => sha1($i->post('password'))
        ];
        $this->Crud_model->edit('tbl_user', 'id_user', $id_user, $data);
        $this->load->view('akun/layout/wrapper', $data, FALSE);
        $this->session->set_flashdata('msg', 'Password diubah');
        redirect('akun/password', 'refresh');
      }
    }
  }
}

/* End of file Password.php */
