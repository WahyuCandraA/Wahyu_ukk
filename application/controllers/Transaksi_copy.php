<?php
defined('BASEPATH') or exit('No direct script access allowed');

class transaksi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        cek_login();
        $this->load->model('transaksi_m');
        $this->load->model('paket_m');
        $this->load->model('member_m');
        if ($this->session->userdata('role') == 'Owner') {
            echo "Error";
            die;
        }
    }

    public function index()
    {
        $data['judul'] = "Data transaksi";
        $data['transaksi'] = $this->transaksi_m->get_transaksi();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('transaksi/index', $data);
        $this->load->view('template/footer', $data);
    }

    public function tambah()
    {
        $valid = $this->form_validation;
        $valid->set_rules('kd_invoice', 'kd_invoice', 'required');

        $kd_invoice = $this->input->post('kd_invoice');

        if ($valid->run()) {
            $this->transaksi_m->insert($this->input->post());
            $this->session->set_flashdata('message', 'Berhasil Ditambahkan');
            redirect('transaksi/cetak/'. $kd_invoice, 'refresh');
        }

        $data['judul'] = "Tambah Data transaksi";
        $data['transaksi'] = $this->transaksi_m->get_transaksi();
        $data['paket'] = $this->paket_m->get_paket();
        $data['member'] = $this->member_m->get_member();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('transaksi/tambah', $data);
        $this->load->view('template/footer', $data);
    }

    public function ubah($id)
    {
        $valid = $this->form_validation;

        $valid->set_rules('kd_invoice', 'kd_invoice', 'required');

        if ($valid->run()) {
            $this->transaksi_m->update($this->input->post());
            // var_dump('test');
            // die;
            $this->session->set_flashdata('message', 'Berhasil Diubah');
            redirect('transaksi', 'refresh');
        }

        $data['judul'] = "Ubah Data transaksi";
        $data['transaksi'] = $this->transaksi_m->get_transaksi($id);
        $data['paket'] = $this->paket_m->get_paket();
        $data['member'] = $this->member_m->get_member();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('transaksi/ubah', $data);
        $this->load->view('template/footer', $data);
    }

    public function hapus($id)
    {
        $this->db->delete('tb_detail_transaksi', ['id' => $id]);
        $this->db->delete('tb_transaksi', ['id_transaksi' => $id]);
        $this->session->set_flashdata('message', 'Berhasil DiHapus');
        redirect('transaksi', 'refresh');
    }
    public function cetak($kd_invoice)
	{
		$data['member'] = $this->member_m->get_member();
        $data['outlet'] = $this->outlet_m->get_outlet();

        $data['title'] = 'Detail Transaksi';
        $data['transaksi'] = $this->transaksi_m->cetak($kd_invoice);
        
		$this->load->view('transaksi/cetak', $data);
	}
}