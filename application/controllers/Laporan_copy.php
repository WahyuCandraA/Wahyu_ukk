<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        cek_login();
        $this->load->model('Laporan_m');
        $this->load->model('Outlet_m');
        $this->load->model('Paket_m');
    }

    public function index()
    {
        $dari = $this->input->get('dari');
        $sampai = $this->input->get('sampai');
        $id_paket = $this->input->get('id_paket');
        $id_outlet = $this->input->get('id_outlet');

        $data['judul'] = "Data Laporan";
        $data['laporan'] = $this->laporan_m->get_Laporan($dari, $sampai, $id_paket, $id_outlet);
        $data['outlet'] = $this->outlet_m->get_outlet();
        $data['paket'] = $this->paket_m->get_paket();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('laporan/index', $data);
        $this->load->view('template/footer', $data);
    }
    public function pdf() {
        $this->load->library('pdf');
    
        $dari = $this->input->get('dari');
        $sampai = $this->input->get('sampai');
        $id_paket = $this->input->get('id_paket');
        $id_outlet = $this->input->get('id_outlet');
        
        $data['laporan'] = $this->Laporan_m->get_Laporan($dari, $sampai, $id_paket, $id_outlet);
        // var_dump($data);
        // die;
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan-laundry.pdf";
        $this->pdf->load_view('laporan', $data);
    }
}