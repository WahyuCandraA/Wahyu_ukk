<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function index()
	{
		if ($this->session->userdata('id_user') != '') {
			redirect('dashboard', 'refresh');
		}

		$valid = $this->form_validation;

		$valid->set_rules('username', 'username', 'required');
		$valid->set_rules('password', 'password', 'required');

		if ($valid->run()) {
			$post = $this->input->post();
			// die(var_dump(password_hash('12345', PASSWORD_DEFAULT)));

			$this->db->where('username', $post['username']);
			$user = $this->db->get('tb_user')->row_array();

			if ($user) {
				if (password_verify($post['password'], $user['password'])) {

					$array = array(
						'id_user' => $user['id_user'],
						'id_outlet' => $user['id_outlet'],
						'nama' => $user['nama'],
						'role' => $user['role']
					);

					$this->session->set_userdata($array);

					$this->session->set_flashdata('succes', 'Login Berhasil');
					redirect('dashboard', 'refresh');

				} else {
					$this->session->set_flashdata('error', 'Password Anda Salah');
					redirect('auth', 'refresh');
				}
			} else {
				$this->session->set_flashdata('error', 'Username Tidak Ditemukan');
				redirect('auth', 'refresh');
			}
		}

		$data['judul'] = 'Laundry Login';
		$this->load->view('auth/index', $data);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth', 'refresh');
	}
}