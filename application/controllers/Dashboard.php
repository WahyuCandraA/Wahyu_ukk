<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        cek_login();
    }

    public function index()
    {
        $data['judul'] = "Dashboard";
        $data['jumlah_transaksi'] = $this->transaksi_m->get_jumlah_transaksi();
        $data['jumlah_kasir'] = $this->user_m->get_jumlah_kasir();
        $data['jumlah_outlet'] = $this->outlet_m->get_jumlah_outlet();
        $data['jumlah_pelanggan'] = $this->member_m->get_jumlah_pelanggan();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('dashboard', $data);
        $this->load->view('template/footer', $data);
    }
}