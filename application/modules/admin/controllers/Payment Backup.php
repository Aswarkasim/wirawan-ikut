<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Payment extends CI_Controller
{


  public function __construct()
  {
    parent::__construct();

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
      'is_valid' => '0'
    ];
    $this->Crud_model->edit('tbl_payment', 'id_payment', $id_payment, $data);

    $payment = $this->Crud_model->listingOne('tbl_payment', 'id_payment', $id_payment);
    $task = $this->Crud_model->listingOneAll('tbl_task', 'id_user', $payment->id_user);

    if (!empty($task)) {
      foreach ($task as $row) {
        $this->Crud_model->delete('tbl_task', 'id_task', $row->id_task);
      }
    }
    $this->session->set_flashdata('msg', 'Pembayaran tidak valid');
    redirect('admin/payment/detail/' . $id_payment, 'refresh');
  }

  function is_valid($id_payment)
  {

    $this->load->helper('string');

    $data = [
      'is_valid' => '1'
    ];
    $this->Crud_model->edit('tbl_payment', 'id_payment', $id_payment, $data);

    $payment = $this->Crud_model->listingOne('tbl_payment', 'id_payment', $id_payment);
    $soal = $this->Crud_model->listingOneAll('tbl_soal', 'id_paket', $payment->id_paket);
    $task = $this->Crud_model->listingOneAll('tbl_task', 'id_user', $payment->id_user);

    // $totalSoal = count($soal);

    if (empty($task)) {
      $no = 1;
      foreach ($soal as $row) {

        $dataTask = [
          'id_task'   => random_string(),
          'id_user'   => $payment->id_user,
          'id_paket'  => $payment->id_paket,
          'id_soal'   => $row->id_soal,
          'no_soal'   => $no++
        ];
        $this->Crud_model->add('tbl_task', $dataTask);
      }
    }
    $this->session->set_flashdata('msg', 'Pembayaran valid dan user terlah diaktifkan');
    redirect('admin/payment/detail/' . $id_payment, 'refresh');
  }
}
