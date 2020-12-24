<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Tagihan extends CI_Controller
{


  public function __construct()
  {
    parent::__construct();
    is_logged_in_user();
    $id_user  = $this->session->userdata('id_user');
    __is_complete_data_profile($id_user);
    $this->load->model('akun/Akun_model', 'AM');
  }


  public function index()
  {
    $id_user  = $this->session->userdata('id_user');
    $payment = $this->AM->myPayment($id_user);
    $data = [
      'payment'  => $payment,
      'content'  => 'akun/tagihan/index'
    ];
    $this->load->view('akun/layout/wrapper', $data, FALSE);

    // $this->load->view('home/index', FALSE);
  }
}
