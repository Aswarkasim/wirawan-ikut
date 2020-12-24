<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Paket extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $id_user  = $this->session->userdata('id_user');
    __is_complete_data_profile($id_user);
    $this->load->model('home/Home_model', 'HM');
  }


  public function index()
  {
    $data = [
      'content'  => 'home/paket/index'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }

  function detail($id_paket)
  {
    $id_user  = $this->session->userdata('id_user');
    $payment = $this->HM->cekInvoice($id_user, $id_paket);

    $member = $this->HM->cekMember($id_user, $id_paket);

    if ($member != null) {
      $now = date('Y-m-d h:i:s');
      if ($now >= $member->aktif_sampai) {
        $this->Crud_model->delete('tbl_member', 'id_member', $member->id_member);
        $task = $this->Crud_model->listingOneAll('tbl_task', 'id_member', $member->id_member);
        foreach ($task as $row) {
          $this->Crud_model->delete('tbl_task', 'id_task', $row->id_task);
        }
      } else {
        $this->petunjuk($id_paket);
      }
    } else {

      if (count($payment) <= 0) {
        $paket = $this->HM->detailPaket($id_paket);
        $soal  = $this->Crud_model->listingOneAll('tbl_soal', 'id_paket', $id_paket);
        $data = [
          'paket'    => $paket,
          'soal'    => $soal,
          'content'  => 'home/paket/detail'
        ];
        $this->load->view('home/layout/wrapper', $data, FALSE);
      } else {
        $this->invoice($payment->id_payment);
      }
    }
  }

  function buatInvoice($id_paket)
  {
    is_logged_in_user();

    $this->load->helper('string');

    $id_user  = $this->session->userdata('id_user');
    $paket = $this->Crud_model->listingOne('tbl_paket', 'id_paket', $id_paket);
    $kode = random_string('numeric', '3');

    $sekarang     = strtotime(date('y-m-d H:i:s'));
    $endTime      = strtotime("+14 days", strtotime($sekarang));
    $date_expired = date('y-m-d H:i:s', $endTime);

    $data = [
      'id_payment'        => random_string(),
      'id_user'           => $id_user,
      'id_paket'          => $id_paket,
      'kode'              => $kode,
      'date_expired'      => $date_expired,
      'jumlah_bayar'      => $paket->harga + $kode,
    ];
    $this->Crud_model->add('tbl_payment', $data);
    $this->session->set_flashdata('msg', 'Invoice telah dibuat');
    redirect('home/paket/invoice/' . $data['id_payment']);
  }


  function submitKupon($id_paket)
  {
    is_logged_in_user();

    $this->load->helper('string');


    $kupon = $this->input->post('kupon');

    $detailKupon = $this->Crud_model->listingOne('tbl_kupon', 'kupon', $kupon);

    if ($detailKupon) {
      if ($detailKupon->sisa_kuota > 0) {
        $kupon = $detailKupon->diskon;

        $id_user  = $this->session->userdata('id_user');
        $paket = $this->Crud_model->listingOne('tbl_paket', 'id_paket', $id_paket);
        $kode = random_string('numeric', '3');

        $sekarang     = strtotime(date('y-m-d H:i:s'));
        $endTime      = strtotime("+14 days", strtotime($sekarang));
        $date_expired = date('y-m-d H:i:s', $endTime);

        $harga = $paket->harga;

        $total = $harga - ($harga * $kupon / 100);

        if ($total == 0) {
          $kode = 0;
        }

        $data = [
          'id_payment'        => random_string(),
          'id_user'           => $id_user,
          'id_paket'          => $id_paket,
          'kode'              => $kode,
          'date_expired'      => $date_expired,
          'jumlah_bayar'      => $total + $kode,
        ];
        $this->Crud_model->add('tbl_payment', $data);


        $dataKupon = [
          'sisa_kuota' => $detailKupon->sisa_kuota - 1
        ];
        $this->Crud_model->edit('tbl_kupon', 'id_kupon', $detailKupon->id_kupon, $dataKupon);


        $this->session->set_flashdata('msg', 'Invoice telah dibuat');
        redirect('home/paket/invoice/' . $data['id_payment']);
      } else {
        $this->session->set_flashdata('msg_er', 'Kuota kupon telah mencapai batas');
        redirect('home/paket/detail/' . $id_paket, 'refresh');
      }
    } else {
      $this->session->set_flashdata('msg_er', 'Kupon tidak tersedia');
      redirect('home/paket/detail/' . $id_paket, 'refresh');
    }
  }

  public function invoice($id_payment)
  {
    $payment = $this->HM->detailInvoice($id_payment);

    $data = [
      'payment' => $payment,
      'content'  => 'home/paket/invoice'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }

  function is_pay($value, $id_payment)
  {
    __is_boolean('tbl_payment', 'id_payment', $id_payment, 'is_pay', $value);
    $this->session->set_flashdata('msg', 'Status pembayaran diubah');
    redirect('home/paket/invoice/' . $id_payment, 'refresh');
  }

  function petunjuk($id_paket)
  {
    $paket = $this->Crud_model->listingOne('tbl_paket', 'id_paket', $id_paket);

    $data = [
      'paket'   => $paket,
      'content'  => 'home/paket/petunjuk'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }

  function start($id_paket)
  {
    $this->load->helper('string');
    $id_user = $this->session->userdata('id_user');

    $soal = $this->HM->listKlasifikasi($id_paket);
    $member = $this->HM->detailMember($id_user, $id_paket);

    $task = $this->Crud_model->listingOneAll('tbl_task', 'id_member', $member->id_member);

    $paket = $this->Crud_model->listingOne('tbl_paket', 'id_paket', $id_paket);
    // print_r($member);
    // die;

    if (($member->time_start == null) || $member->time_end == null) {
      $time_start = date('y-m-d H:i:s');
      $endTime = strtotime("+" . $paket->waktu . " minutes", strtotime($time_start));
      $time_end = date('y-m-d H:i:s', $endTime);

      $dataTime = [
        'time_start'  => $time_start,
        'time_end'    => $time_end
      ];
      $this->Crud_model->edit('tbl_member', 'id_member', $member->id_member, $dataTime);
    }

    if (empty($task)) {
      $no = 1;
      foreach ($soal as $row) {

        $dataTask = [
          'id_task'   => random_string(),
          'id_user'   => $id_user,
          'id_paket'  => $id_paket,
          'id_member'  => $member->id_member,
          'id_soal'   => $row->id_soal,
          'no_soal'   => $row->no_soal
        ];
        $this->Crud_model->add('tbl_task', $dataTask);
      }
    }
    // $this->session->set_flashdata('msg', 'Pembayaran valid dan user terlah diaktifkan');
    if ($this->session->userdata('id_paket')) {
      $this->session->unset_userdata('id_paket');
      $this->session->set_userdata('id_paket', $id_paket);
    } else {
      $this->session->set_userdata('id_paket', $id_paket);
    }
    redirect('home/soal/butir/1', 'refresh');
  }


  function nowDate()
  {
    // echo 'Default Timezone: ' . date('d-m-Y H:i:s') . '</br>';
    // date_default_timezone_set('Asia/Jakarta');
    // echo 'Indonesian Timezone: ' . date('d-m-Y H:i:s');
    $currentDateTime = '08/04/2010 22:15:00';
    $newDateTime = date('h:i A', strtotime($currentDateTime));
    echo $newDateTime . '<br>';
    echo date_default_timezone_get() . '<br>';
    echo date('Y-m-d h:i:s') . '<br>';
    echo date('Y-m-d H:i:s') . '<br>';


    // $now = date('h:i:s');
    // $time = strtotime('00:15:00');
    // echo $now + $time;

    $now = date('Y-m-d h:i:s');
    $fake =  '2020-12-05 12:48:50' . '<br>';
    echo $fake;

    if ($now > $fake) {
      echo 'lebih besar <br>';
    } else {
      echo 'lebih kecil <br>';
    }



    $selectedTime = date('h:i:s');
    $endTime = strtotime("+15 minutes", strtotime($selectedTime));
    $hasil = date('h:i:s', $endTime);
    echo  $hasil . '<br>';
  }

  function rangking($id_paket)
  {
    $rangking = $this->HM->rangking($id_paket);
    $paket = $this->Crud_model->listingOne('tbl_paket', 'id_paket', $id_paket);
    $data = [
      'rangking'  => $rangking,
      'paket'     => $paket,
      'content'   => 'home/paket/rangking'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }
}
