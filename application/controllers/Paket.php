<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Paket extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        cek_login();
        $this->load->model('paket_m');
        $this->load->model('outlet_m');
        if ($this->session->userdata('role') == 'Owner') {
            echo "Error";
            die;
        }
    }

    public function get_paket($id_paket)
    {
        echo json_encode($this->db->get_where('tb_paket', ['id_paket' => $id_paket])->row_array());
    }

    public function index(
    )
    {
        $data['judul'] = "Data Paket";
        $data['paket'] = $this->paket_m->get_paket();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('paket/index', $data);
        $this->load->view('template/footer', $data);
    }

    public function tambah()
    {
        $valid = $this->form_validation;

        $valid->set_rules('id_paket', 'id_paket', 'required');

        if ($valid->run()) {
            $this->paket_m->insert($this->input->post());
            $this->session->set_flashdata('message', 'Berhasil Ditambahkan');
            redirect('paket', 'refresh');
        }

        $data['judul'] = "Tambah Data Paket";
        $data['paket'] = $this->paket_m->get_paket();
        $data['outlet'] = $this->outlet_m->get_outlet();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('paket/tambah', $data);
        $this->load->view('template/footer', $data);
    }

    public function ubah($id)
    {
        $valid = $this->form_validation;

        $valid->set_rules('id_paket', 'id_paket', 'required');

        if ($valid->run()) {
            $this->paket_m->update($this->input->post());
            $this->session->set_flashdata('message', 'Berhasil Diubah');
            redirect('paket', 'refresh');
        }

        $data['judul'] = "Ubah Data Paket";
        $data['paket'] = $this->paket_m->get_paket($id);
        $data['outlet'] = $this->outlet_m->get_outlet();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('paket/ubah', $data);
        $this->load->view('template/footer', $data);
    }

    public function hapus($id)
    {
        $this->db->delete('tb_paket', ['id_paket' => $id]);
        $this->session->set_flashdata('message', 'Berhasil DiHapus');
        redirect('paket', 'refresh');
    }
}