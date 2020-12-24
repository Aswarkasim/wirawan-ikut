<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Payment extends CI_Controller
{


  public function __construct()
  {
    parent::__construct();
    is_logged_in_admin();
    $this->load->model('admin/Payment_model', 'PM');
  }


  public function index()
  {
    $this->load->library('pagination');


    $config['base_url']     = base_url('admin/payment/index/');
    $config['total_rows']   = count($this->Crud_model->listing('tbl_payment'));
    $config['per_page']     = 5;

    $from = $this->uri->segment(4);
    $this->pagination->initialize($config);
    $payment = $this->PM->listPayment($config['per_page'], $from);

    $data = [
      'title'   => 'Manajemen Payment',
      'from'      => $from,
      'payment'   => $payment,
      'pagination' => $this->pagination->create_links(),
      'content'  => 'admin/payment/index'
    ];
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  function detail($id_payment)
  {
    __is_boolean('tbl_payment', 'id_payment', $id_payment, 'is_read', '1');
    $payment = $this->PM->detailPayment($id_payment);
    $data = [
      'payment'     => $payment,
      'content'     => 'admin/payment/detail'
    ];
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  function not_valid($id_payment)
  {
    $data = [
      'is_valid' => '0',
      'is_active' => '0'
    ];
    $this->Crud_model->edit('tbl_payment', 'id_payment', $id_payment, $data);

    $payment = $this->Crud_model->listingOne('tbl_payment', 'id_payment', $id_payment);
    $this->Crud_model->delete('tbl_member', 'id_paket', $payment->id_paket);
    $this->session->set_flashdata('msg', 'Pembayaran tidak valid');
    redirect('admin/payment/detail/' . $id_payment, 'refresh');
  }

  function is_valid($id_payment)
  {

    $this->load->helper('string');

    $data = [
      'is_valid' => '1',
      'is_active' => '0'
    ];
    $this->Crud_model->edit('tbl_payment', 'id_payment', $id_payment, $data);

    $payment = $this->Crud_model->listingOne('tbl_payment', 'id_payment', $id_payment);
    // // $soal = $this->Crud_model->listingOneAll('tbl_soal', 'id_paket', $payment->id_paket);
    $member = $this->PM->cekMember($payment->id_user, $payment->id_payment);

    // $totalSoal = count($soal);

    if (empty($member)) {

      $selectedTime = date('Y-m-d h:i:s');
      $endTime = strtotime("+15 days", strtotime($selectedTime));
      $masa_aktif = date('Y-m-d h:i:s', $endTime);


      $dataTask = [
        'id_member'   => random_string(),
        'id_user'   => $payment->id_user,
        'id_paket'  => $payment->id_paket,
        'aktif_sampai' => $masa_aktif
      ];
      $this->Crud_model->add('tbl_member', $dataTask);
    }
    $this->session->set_flashdata('msg', 'Pembayaran valid dan user terlah diaktifkan');
    redirect('admin/payment/detail/' . $id_payment, 'refresh');
  }
}
