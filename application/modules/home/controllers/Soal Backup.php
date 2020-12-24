<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Soal extends CI_Controller
{


  public function __construct()
  {
    parent::__construct();
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

    $member = $this->HM->detailMember($id_user, $id_paket);


    if ($task != null) {
      $soal = $this->Crud_model->listingOne('tbl_soal', 'id_soal', $task->id_soal);
      $data = [
        'soal'    => $soal,
        'task'    => $task,
        'member'    => $member,
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
    __is_boolean('tbl_member', 'id_member', $id_member, 'is_done', '1');
    $task = $this->Crud_model->listingOneAll('tbl_task', 'id_member', $id_member);
    $paket = $this->Crud_model->listingOne('tbl_paket', 'id_paket', $id_paket);
    if ($paket->type == "CPNS") {

      $dataTwk = $this->HM->kunciJawabanCpns($id_member, 'TWK');
      $dataTiu = $this->HM->kunciJawabanCpns($id_member, 'TIU');
      $dataTkp = $this->HM->kunciJawabanCpns($id_member, 'TKP');
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
        $dataMtkSaintek = $this->SM->kunciJawabanUtbk($id_member, 'MATEMATIKA');
        $dataBing = $this->SM->kunciJawabanUtbk($id_member, 'BING');
        $dataFisika = $this->SM->kunciJawabanUtbk($id_member, 'FISIKA');
        $dataKimia = $this->SM->kunciJawabanUtbk($id_member, 'KIMIA');


        $dataKpu = $this->SM->kunciJawabanUtbk($id_member, 'KPU');
        $dataPkmbm = $this->SM->kunciJawabanUtbk($id_member, 'KMBM');
        $dataPpu = $this->SM->kunciJawabanUtbk($id_member, 'PPU');
        $dataPk = $this->SM->kunciJawabanUtbk($id_member, 'PK');


        $kpu = 0;
        $pkmbm = 0;
        $ppu = 0;
        $pk = 0;

        $maxKpu = $this->SM->nilaiMax($paket->id_paket, 'KPU');
        $maxPkmbm = $this->SM->nilaiMax($paket->id_paket, 'KMBM');
        $maxPpu = $this->SM->nilaiMax($paket->id_paket, 'PPU');
        $maxPk = $this->SM->nilaiMax($paket->id_paket, 'PK');

        foreach ($dataKpu as $d) {
          if ($d->id_pilihan == $d->kunci_jawaban) {
            $kpu = $kpu + $d->poin;
          }
        }

        foreach ($dataPkmbm as $d) {
          if ($d->id_pilihan == $d->kunci_jawaban) {
            $pkmbm = $pkmbm + $d->poin;
          }
        }

        foreach ($dataPpu as $d) {
          if ($d->id_pilihan == $d->kunci_jawaban) {
            $ppu = $ppu + $d->poin;
          }
        }

        foreach ($dataPk as $d) {
          if ($d->id_pilihan == $d->kunci_jawaban) {
            $pk = $pk + $d->poin;
          }
        }


        $mtkSaintek = 0;
        $bing = 0;
        $fisika = 0;
        $kimia = 0;

        foreach ($dataMtkSaintek as $d) {
          if ($d->id_pilihan == $d->kunci_jawaban) {
            $mtkSaintek = $mtkSaintek + $d->poin;
          }
        }

        foreach ($dataBing as $d) {
          if ($d->id_pilihan == $d->kunci_jawaban) {
            $bing = $bing + $d->poin;
          }
        }

        foreach ($dataFisika as $d) {
          if ($d->id_pilihan == $d->kunci_jawaban) {
            $fisika = $fisika + $d->poin;
          }
        }

        foreach ($dataKimia as $d) {
          if ($d->id_pilihan == $d->kunci_jawaban) {
            $kimia = $kimia + $d->poin;
          }
        }


        $nilaiMax = 0;
        $soal = $this->Crud_model->listingOneAll('tbl_soal', 'id_soal', $id_soal);
        foreach ($soal as $row) {
          $nilaiMax = $nilaiMax + $row->poin;
        }

        $nilai = $mtkSaintek + $bing + $fisika + $kimia + $kpu + $pkmbm + $ppu + $pk;


        $rerataHasil = $nilai * 500 / $nilaiMax;

        $total = $rerataHasil + 250;


        $data = [
          'total' => $total,
          'paket'    => $paket,
          'mtkSaintek'    => $mtkSaintek,
          'bing'    => $bing,
          'fisika'    => $fisika,
          'kimia'    => $kimia,

          'kpu'    => $kpu,
          'pkmbm'    => $pkmbm,
          'ppu'    => $ppu,
          'pk'    => $pk,
          'content'     => 'home/soal/resultUtbk'
        ];
        $this->load->view('home/layout/wrapper', $data, FALSE);
      } else if ($paket->klasifikasi == 'SOSHUM') {


        $dataMtkSoshum = $this->SM->kunciJawabanUtbk($id_member, 'MATEMATIKA');
        $dataSejarah = $this->SM->kunciJawabanUtbk($id_member, 'BING');
        $dataGeo = $this->SM->kunciJawabanUtbk($id_member, 'GEOGRAFI');
        $dataSosio = $this->SM->kunciJawabanUtbk($id_member, 'SOSIOLOGI');
        $dataEko = $this->SM->kunciJawabanUtbk($id_member, 'EKONOMI');

        $mtkSoshum = 0;
        $sejarah = 0;
        $geo = 0;
        $sosio = 0;
        $eko = 0;

        foreach ($dataMtkSoshum as $d) {
          if ($d->id_pilihan == $d->kunci_jawaban) {
            $mtkSoshum = $mtkSoshum + $d->poin;
          }
        }

        foreach ($dataSejarah as $d) {
          if ($d->id_pilihan == $d->kunci_jawaban) {
            $sejarah = $sejarah + $d->poin;
          }
        }

        foreach ($dataGeo as $d) {
          if ($d->id_pilihan == $d->kunci_jawaban) {
            $geo = $geo + $d->poin;
          }
        }

        foreach ($dataSosio as $d) {
          if ($d->id_pilihan == $d->kunci_jawaban) {
            $sosio = $sosio + $d->poin;
          }
        }

        foreach ($dataEko as $d) {
          if ($d->id_pilihan == $d->kunci_jawaban) {
            $eko = $eko + $d->poin;
          }
        }

        // $dataKpu = $this->SM->kunciJawabanUtbk($id_member, 'KPU');
        // $dataPkmbm = $this->SM->kunciJawabanUtbk($id_member, 'KMBM');
        // $dataPpu = $this->SM->kunciJawabanUtbk($id_member, 'PPU');
        // $dataPk = $this->SM->kunciJawabanUtbk($id_member, 'PK');


        $kpu = $this->SM->getNilaiPerolehan($id_member, 'KPU');
        $pkmbm = $this->SM->getNilaiPerolehan($id_member, 'KMBM');
        $ppu = $this->SM->getNilaiPerolehan($id_member, 'PPU');
        $pk = $this->SM->getNilaiPerolehan($id_member, 'PK');

        // foreach ($dataKpu as $d) {
        //   if ($d->id_pilihan == $d->kunci_jawaban) {
        //     $kpu = $kpu + $d->poin;
        //   }
        // }

        // foreach ($dataPkmbm as $d) {
        //   if ($d->id_pilihan == $d->kunci_jawaban) {
        //     $pkmbm = $pkmbm + $d->poin;
        //   }
        // }

        // foreach ($dataPpu as $d) {
        //   if ($d->id_pilihan == $d->kunci_jawaban) {
        //     $ppu = $ppu + $d->poin;
        //   }
        // }

        // foreach ($dataPk as $d) {
        //   if ($d->id_pilihan == $d->kunci_jawaban) {
        //     $pk = $pk + $d->poin;
        //   }
        // }

        $nilaiMax = 0;
        $soal = $this->Crud_model->listingOneAll('tbl_soal', 'id_paket', $id_paket);
        foreach ($soal as $row) {
          $nilaiMax = $nilaiMax + $row->poin;
        }

        $nilai = $mtkSoshum + $sejarah + $geo + $eko + $kpu + $pkmbm + $ppu + $pk;

        // echo $id_soal . '<br>';
        // echo $nilaiMax;

        $rerataHasil = $nilai * 500 / $nilaiMax;

        $total = $rerataHasil + 250;


        $data = [
          'total'        => $total,
          'paket'         => $paket,
          'mtkSoshum'     => $mtkSoshum,
          'sejarah'       => $sejarah,
          'geografi'      => $geo,
          'sosiologi'     => $sosio,
          'ekonomi'       => $sosio,

          'kpu'    => $kpu,
          'pkmbm'    => $pkmbm,
          'ppu'    => $ppu,
          'pk'    => $pk,
          'content'        => 'home/soal/resultUtbk'
        ];
        $this->load->view('home/layout/wrapper', $data, FALSE);
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
