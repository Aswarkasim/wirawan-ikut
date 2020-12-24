<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Soal extends CI_Controller
{


  public function __construct()
  {
    parent::__construct();
    $id_user  = $this->session->userdata('id_user');
    __is_complete_data_profile($id_user);
    $this->load->model('home/Home_model', 'HM');
    $this->load->model('home/Soal_model', 'SM');
  }


  public function butir()
  {
    //  print_r($this->session->userdata('id_paket'));
    $id_paket = $this->session->userdata('id_paket');
    $id_user = $this->session->userdata('id_user');
    // $status = $this->uri->segment('4');
    $butir = $this->uri->segment('4');
    $task = $this->HM->butirSoal($id_user, $id_paket, $butir);
    $paket = $this->Crud_model->listingOne('tbl_paket', 'id_paket', $id_paket);


    $member = $this->HM->detailMember($id_user, $id_paket);


    if ($task != null) {
      $soal = $this->Crud_model->listingOne('tbl_soal', 'id_soal', $task->id_soal);
      $data = [
        'soal'    => $soal,
        'task'    => $task,
        'member'    => $member,
        'paket'    => $paket,
        'listSoal' => $this->HM->listSoal($task->id_member),
        'content'  => 'home/soal/index'
      ];
      $this->load->view('home/layout/wrapper', $data, FALSE);
    } else {
      $task = $this->HM->butirSoal($id_user, $id_paket, '1');
      $this->resultTask($task->id_task, $task->id_paket, $task->id_member);
    }
  }
  function submit($id_task)
  {
    $task = $this->Crud_model->listingOne('tbl_task', 'id_task', $id_task);
    $no_soal = $task->no_soal + 1;
    $i = $this->input;
    $status = "";
    if ($_POST['ragu']) {
      $status = "ragu";
    } else if ($_POST['selesai']) {
      $status = "selesai";
    }
    $data = [
      'id_pilihan'  => $i->post('id_pilihan'),
      'is_done'     => $i->post('is_done'),
      'is_done'     => $status
    ];
    $this->Crud_model->edit('tbl_task', 'id_task', $id_task, $data);
    redirect('home/soal/butir/' . $no_soal);
  }

  function resultTask($id_soal, $id_paket, $id_member)
  {
    $this->load->helper('string');

    __is_boolean('tbl_member', 'id_member', $id_member, 'is_done', '1');
    $task = $this->Crud_model->listingOneAll('tbl_task', 'id_member', $id_member);
    $paket = $this->Crud_model->listingOne('tbl_paket', 'id_paket', $id_paket);
    $member = $this->Crud_model->listingOne('tbl_member', 'id_member', $id_member);

    $nilai = 0;

    if ($paket->type == "CPNS") {

      $dataTwk = $this->SM->kunciJawabanCpns($id_member, 'TWK');
      $dataTiu = $this->SM->kunciJawabanCpns($id_member, 'TIU');
      $dataTkp = $this->SM->kunciJawabanCpns($id_member, 'TKP');
      $twk = 0;
      $tiu = 0;
      $tkp = 0;


      foreach ($dataTwk as $d) {
        if ($d->id_pilihan == $d->kunci_jawaban) {
          $twk = $twk + 5;
        }
      }

      foreach ($dataTiu as $d) {
        if ($d->id_pilihan == $d->kunci_jawaban) {
          $tiu = $tiu + 5;
        }
      }

      foreach ($dataTkp as $d) {
        $tkp = $tkp + $d->poin;
      }


      $nilai = ($twk + $tiu + $tkp) / 3;

      $data = [
        'tiu'         => $tiu,
        'twk'         => $twk,
        'tkp'         => $tkp,
        'id_paket'    => $id_paket,
        'content'     => 'home/soal/resultCpns'
      ];
      $this->load->view('home/layout/wrapper', $data, FALSE);
    } else if ($paket->type == 'UTBK') {

      if ($paket->klasifikasi == 'SAINTEK') {
        $mtkSaintek = $this->SM->getNilaiPerolehan($id_member, 'MATEMATIKA');
        $bing = $this->SM->getNilaiPerolehan($id_member, 'BING');
        $fisika = $this->SM->getNilaiPerolehan($id_member, 'FISIKA');
        $kimia = $this->SM->getNilaiPerolehan($id_member, 'KIMIA');


        $kpu = $this->SM->getNilaiPerolehan($id_member, 'KPU');
        $pkmbm = $this->SM->getNilaiPerolehan($id_member, 'KMBM');
        $ppu = $this->SM->getNilaiPerolehan($id_member, 'PPU');
        $pk = $this->SM->getNilaiPerolehan($id_member, 'PK');



        $maxMtkSaintek = $this->SM->nilaiMax($id_paket, 'MATEMATIKA');
        $maxBing = $this->SM->nilaiMax($id_paket, 'BING');
        $maxFisika = $this->SM->nilaiMax($id_paket, 'FISIKA');
        $maxKimia = $this->SM->nilaiMax($id_paket, 'KIMIA');

        $maxKpu = $this->SM->nilaiMax($id_paket, 'KPU');
        $maxPkmbm = $this->SM->nilaiMax($id_paket, 'KMBM');
        $maxPpu = $this->SM->nilaiMax($id_paket, 'PPU');
        $maxPk = $this->SM->nilaiMax($id_paket, 'PK');


        $na_mtk =  $this->SM->nilaiAkhir($mtkSaintek, $maxMtkSaintek);
        $na_bing = $this->SM->nilaiAkhir($bing, $maxBing);
        $na_fisika  = $this->SM->nilaiAkhir($fisika, $maxFisika);
        $na_kimia  = $this->SM->nilaiAkhir($kimia, $maxKimia);


        $na_kpu = $this->SM->nilaiAkhir($kpu, $maxKpu);
        $na_pkmbm = $this->SM->nilaiAkhir($pkmbm, $maxPkmbm);
        $na_ppu = $this->SM->nilaiAkhir($ppu, $maxPpu);
        $na_pk = $this->SM->nilaiAkhir($pk, $maxPk);

        $rerataTka = ($na_mtk + $na_bing + $na_fisika + $na_kimia) / 4;
        $rerataTps = ($na_pk + $na_pkmbm + $na_ppu + $na_pk) / 4;

        $nilai = ($rerataTka + $rerataTps) / 2;

        $data = [
          'rerataTka'     => $rerataTka,
          'paket'    => $paket,
          'mtkSaintek'    => $na_mtk,
          'bing'    => $na_bing,
          'fisika'    => $na_fisika,
          'kimia'    => $na_kimia,

          'rerataTps'   => $rerataTps,
          'kpu'    => $na_kpu,
          'pkmbm'    => $na_pkmbm,
          'ppu'    => $na_ppu,
          'pk'    => $na_pk,
          'content'     => 'home/soal/resultUtbk'
        ];
        $this->load->view('home/layout/wrapper', $data, FALSE);
      } else if ($paket->klasifikasi == 'SOSHUM') {



        //================================SOSHUM==============================
        $mtkSoshum = $this->SM->getNilaiPerolehan($id_member, 'MATEMATIKA');
        $sejarah = $this->SM->getNilaiPerolehan($id_member, 'BING');
        $geo = $this->SM->getNilaiPerolehan($id_member, 'GEOGRAFI');
        $sosio = $this->SM->getNilaiPerolehan($id_member, 'SOSIOLOGI');
        $eko = $this->SM->getNilaiPerolehan($id_member, 'EKONOMI');



        $kpu = $this->SM->getNilaiPerolehan($id_member, 'KPU');
        $pkmbm = $this->SM->getNilaiPerolehan($id_member, 'KMBM');
        $ppu = $this->SM->getNilaiPerolehan($id_member, 'PPU');
        $pk = $this->SM->getNilaiPerolehan($id_member, 'PK');



        $maxMtkSoshum = $this->SM->nilaiMax($id_paket, 'MATEMATIKA');
        $maxSejarah = $this->SM->nilaiMax($id_paket, 'SEJARAH');
        $maxGeo = $this->SM->nilaiMax($id_paket, 'GEOGRAFI');
        $maxSosio = $this->SM->nilaiMax($id_paket, 'SOSIOLOGI');
        $maxEko = $this->SM->nilaiMax($id_paket, 'EKONOMI');

        $maxKpu = $this->SM->nilaiMax($id_paket, 'KPU');
        $maxPkmbm = $this->SM->nilaiMax($id_paket, 'KMBM');
        $maxPpu = $this->SM->nilaiMax($id_paket, 'PPU');
        $maxPk = $this->SM->nilaiMax($id_paket, 'PK');


        $na_mtk =  $this->SM->nilaiAkhir($mtkSoshum, $maxMtkSoshum);
        $na_sejarah = $this->SM->nilaiAkhir($sejarah, $maxSejarah);
        $na_geo  = $this->SM->nilaiAkhir($geo, $maxGeo);
        $na_sosio  = $this->SM->nilaiAkhir($sosio, $maxSosio);
        $na_eko  = $this->SM->nilaiAkhir($eko, $maxEko);


        $na_kpu = $this->SM->nilaiAkhir($kpu, $maxKpu);
        $na_pkmbm = $this->SM->nilaiAkhir($pkmbm, $maxPkmbm);
        $na_ppu = $this->SM->nilaiAkhir($ppu, $maxPpu);
        $na_pk = $this->SM->nilaiAkhir($pk, $maxPk);



        // $rerataHasil = ($mtkSoshum + $sejarah + $geo + $eko + $kpu + $pkmbm + $ppu + $pk) / 8;


        $rerataTka = ($na_mtk + $na_sejarah + $na_geo + $na_sosio + $na_eko) / 5;
        $rerataTps = ($na_pk + $na_pkmbm + $na_ppu + $na_pk) / 4;

        $nilai = ($rerataTka + $rerataTps) / 2;

        $data = [
          // 'total'        => $rerataHasil,
          'rerataTka'     => $rerataTka,
          'paket'         => $paket,
          'mtkSoshum'     => $na_mtk,
          'sejarah'       => $na_sejarah,
          'geografi'      => $na_geo,
          'sosiologi'     => $na_sosio,
          'ekonomi'       => $na_eko,

          'rerataTps'   => $rerataTps,
          'kpu'       => $na_kpu,
          'pkmbm'     => $na_pkmbm,
          'ppu'       => $na_ppu,
          'pk'        => $na_pk,
          'content'   => 'home/soal/resultUtbk'
        ];
        $this->load->view('home/layout/wrapper', $data, FALSE);
      }
      $nilai = $nilai;
    }

    //masuk ke rangking

    if ($paket->is_rangking == 1) {
      $cek = $this->Crud_model->listingOne('tbl_rangking', 'id_member', $id_member);
      if ($cek == null) {

        $rangking = [
          'id_rangking'  => random_string(),
          'id_paket'    => $id_paket,
          'id_user'     => $member->id_user,
          'id_member'     => $member->id_member,
          'nilai'       => $nilai
        ];
        $this->Crud_model->add('tbl_rangking', $rangking);
      }
    }
  }




  function timeup()
  {

    $data = [
      'content'  => 'home/soal/timeup'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }

  function testMax()
  {
    $nilai = $this->HM->nilaiMax('gJ1kEQUF', 'SEJARAH');
    print_r($nilai);
  }
}
