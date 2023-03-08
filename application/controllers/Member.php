<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        cek_login();
        $this->load->model('member_m');
        // if ($this->session->userdata('role') == 'Kasir') {
        //     echo "Error";
        //     die;
        // }
        if ($this->session->userdata('role') == 'Owner') {
            echo "Error";
            die;
        }
    }

    public function index()
    {
        $data['judul'] = "Data Pelanggan";
        $data['member'] = $this->member_m->get_member();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('member/index', $data);
        $this->load->view('template/footer', $data);
    }

    public function tambah()
    {
        $valid = $this->form_validation;

        $valid->set_rules('id_member', 'id_member', 'required');

        if ($valid->run()) {
            $this->member_m->insert($this->input->post());
            $this->session->set_flashdata('message', 'Berhasil Ditambahkan');
            redirect('member', 'refresh');
        }

        $data['judul'] = "Tambah Data Pelanggan";
        $data['member'] = $this->member_m->get_member();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('member/tambah', $data);
        $this->load->view('template/footer', $data);
    }

    public function ubah($id)
    {
        $valid = $this->form_validation;

        $valid->set_rules('id_member', 'id_member', 'required');

        if ($valid->run()) {
            $this->member_m->update($this->input->post());
            // var_dump('test');
            // die;
            $this->session->set_flashdata('message', 'Berhasil Diubah');
            redirect('member', 'refresh');
        }

        $data['judul'] = "Ubah Data Pelanggan";
        $data['member'] = $this->member_m->get_member($id);

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('member/ubah', $data);
        $this->load->view('template/footer', $data);
    }

    public function hapus($id)
    {
        $this->db->delete('tb_member', ['id_member' => $id]);
        $this->session->set_flashdata('message', 'Berhasil DiHapus');
        redirect('member', 'refresh');
    }
}