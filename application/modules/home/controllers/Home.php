<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $id_user  = $this->session->userdata('id_user');
        // __is_complete_data_profile($id_user);
        $this->load->model('home/Home_model', 'HM');
    }


    public function index()
    {
        $paket  = $this->HM->listPaket(3);
        $testimony  = $this->Crud_model->listing('tbl_testimony');
        $team  = $this->Crud_model->listing('tbl_team');
        $konfigurasi = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1');

        $data = [
            'paket'     => $paket,
            'konfigurasi'     => $konfigurasi,
            'team'     => $team,
            'testimony'     => $testimony,
            'content'  => 'home/home/index'
        ];
        $this->load->view('home/layout/wrapper', $data, FALSE);
    }

    function bannerPage()
    {

        $this->load->view('home/home/testpage', FALSE);
    }
}
