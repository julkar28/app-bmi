<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Bmipasien extends CI_Controller
{
    public function index()
    {
        $lost = $this->input->post();
        $nama = $this->input->post("nama");
        $berat = $this->input->post("berat");
        $tinggi = $this->input->post("tinggi");
        $umur = $this->input->post("umur");
        $list = null;
        if (!empty($lost)) {
            $this->load->model('bmi_model', 'bmi0');
            $this->bmi0->berat = $berat;
            $this->bmi0->tinggi = $tinggi;
            $this->bmi0->nama = $nama;
            $this->bmi0->umur = $umur;
            $this->bmi0->tinggi = $tinggi;
            $this->bmi0->nilai = $this->bmi0->nilaiBMI();
            $this->bmi0->status = $this->bmi0->statusBMI();
            $list = $this->bmi0;
        }
        
        $data['list'] = $list;
        $this->load->view('header');
        $this->load->view('bmi/index', $data);
        $this->load->view('footer');
    }
}
