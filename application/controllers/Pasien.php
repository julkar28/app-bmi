<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Pasien extends CI_Controller
{
    public function index()
    {
        $this->load->model('pasien_model', 'pasien1');
        $this->pasien1->id = 1;
        $this->pasien1->kode = '010001';
        $this->pasien1->nama = 'Faiz Fikri';
        $this->pasien1->gender = 'L';
        $this->pasien1->tmp_lahir = 'Jakarta';
        $this->pasien1->tgl_lahir = '04-01-2001';
        $this->pasien1->email = 'fikrifaiz04@gmail.com';

        $this->load->model('pasien_model', 'pasien2');
        $this->pasien2->id = 2;
        $this->pasien2->kode = '020001';
        $this->pasien2->nama = 'Pandan Wangi';
        $this->pasien2->gender = 'P';
        $this->pasien2->tmp_lahir = 'Bandung';
        $this->pasien2->tgl_lahir = '03-05-2001';
        $this->pasien2->email = 'pandanwangi03@gmail.com';

        $this->load->model('pasien_model', 'pasien3');
        $this->pasien3->id = 3;
        $this->pasien3->kode = '010002';
        $this->pasien3->nama = 'Riyadi Salim';
        $this->pasien3->gender = 'L';
        $this->pasien3->tmp_lahir = 'Padang';
        $this->pasien3->tgl_lahir = '07-02-2001';
        $this->pasien3->email = 'riyadisalim02@gmail.com';

        $list_pasien = [$this->pasien1, $this->pasien2, $this->pasien3];
        $data['list_pasien'] = $list_pasien;

        $this->load->view('header');
        $this->load->view('pasien/index', $data);
        $this->load->view('footer');
    }
}
