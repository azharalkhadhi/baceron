<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function index()
	{
		if ($this->session->userdata('username')) {
			redirect('kategori');
		}

		$data['judul'] = "Baceron | Sign In";

		$this->form_validation->set_rules('username', 'Username', 'required|trim', [
			'required' => 'Username tidak boleh kosong'
		]);
		$this->form_validation->set_rules('password', 'Password', 'required|trim', [
			'required' => 'Password tidak boleh kosong'
		]);

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/index');
			$this->load->view('templates/auth_footer');
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		// query builder untuk ngecek username berdasarkan yang kita input
		// di bawah sama aja kaya SELECT * FROM user WHERE username = $username
		// row_array() itu fungsinya buat ngambil data hanya sebaris saja
		// $user = $this->db->get_where('user', ['username' => $username])->row_array();
		$user = $this->User_model->cekData('username', $username);

		// cek username nya ada atau tidak
		if ($user) {

			// cek password nya
			if (password_verify($password, $user['password'])) {
				// siapin data buat login
				$data = [
					'id_role' => $user['id_role'],
					'username' => $user['username']
				];

				$this->session->set_userdata($data);

				// cek role user nya
				if ($user['id_role'] == 1) {
					redirect('admin');
				} else {
					redirect('user');
				}
			} else {
				$this->session->set_flashdata('info', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('info', '<div class="alert alert-danger" role="alert">Username tidak ditemukan!</div>');
			redirect('auth');
		}
	}

	public function signUp()
	{
		if ($this->session->userdata('username')) {
			redirect('kategori');
		}

		$data['judul'] = "Sign Up";

		$this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]', [
			'required' => 'Nama tidak boleh kosong',
			'is_unique' => 'Username sudah terdaftar, ganti yang lain!'
		]);

		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
			'required' => 'Email tidak boleh kosong',
			'valid_email' => 'mohon isi dengan email yang benar',
		]);

		$this->form_validation->set_rules('password', 'Password', 'required|trim|matches[password1]', [
			'required' => 'Password tidak boleh kosong',
			'matches' => 'Password tidak sama'
		]);
		$this->form_validation->set_rules('password1', 'Repeat Password', 'required|trim|matches[password]', [
			'required' => 'Repeat Password tidak boleh kosong'
		]);

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/signup');
			$this->load->view('templates/auth_footer');
		} else {
			$this->User_model->daftarAkun($this->input->post());

			$this->session->set_flashdata('info', '<div class="alert alert-success" role="alert">Registrasi berhasil! silahkan login!</div>');
			redirect('auth');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('id_role');
		redirect('auth');
	}
}
