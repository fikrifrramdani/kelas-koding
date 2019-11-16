<?php defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function index()
	{
		$this->form_validation->set_rules('userName', 'User Name', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		// validasi login
		if ($this->form_validation->run() == false) {
			$data['title'] = 'Login | Kelas-Koding';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/auth_login');
			$this->load->view('templates/auth_footer');
		} else {
			// ketika validasinya berhasil
			$this->_login();
		}
	}

	private function _login()
	{
		$userName = $this->input->post('userName');
		$password = $this->input->post('password');

		$user = $this->db->get_where('users', ['user_name' => $userName])->row_array();

		// usernya ada
		if ($user) {
			// usernya aktif
			if ($user['is_active'] == 1) {
				if (password_verify($password, $user['password'])) {
					$data = [
						'user_name' => $user['user_name'],
						'email' => $user['email'],
						'role_id' => $user['role_id'],
					];
					$this->session->set_userdata($data);

					// jika role_id nya 1, redirect ke admin page
					if ($user['role_id'] == 1) {
						// jika dia dosen
						if ($user['role_id'] == 2) {
							redirect('admin');
						}
						redirect('admin');
					} else {
						// jika bukan 1, redirect ke user pages
						redirect('Users');
					}
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger">Wrong password</div>');
					redirect('auth');
				}
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Your account does not exist, please register!</div>');
			redirect('auth', 'refresh');
		}
	}

	public function register()
	{
		// form validation
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('userName', 'UserName', 'trim|required|is_unique[users.user_name]', [
			'is_unique' => 'This user name has already registered!',
		]);
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]', [
			'is_unique' => 'This email has already registered!',
		]);
		$this->form_validation->set_rules('gender', 'Gender', 'trim|required');
		$this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[4]|matches[password2]', [
			'matches' => 'Password dont match!',
			'min_length' => 'Password too short!',
		]);
		$this->form_validation->set_rules('password2', 'Password', 'trim|required|matches[password1]');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Register | Kelas-Koding';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/auth_register');
			$this->load->view('templates/auth_footer');
		} else {
			// insert data ke database
			$data = [
				'name' => htmlspecialchars($this->input->post('name', true)),
				'user_name' => htmlspecialchars($this->input->post('userName', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'image' => 'default.jpg',
				'gender' => $this->input->post('gender'),
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id' => 3,
				'is_active' => 1,
				'date_created' => time(),
			];

			// query data ke database
			$this->db->insert('users', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulations!, your account has been created. Please login</div>');
			redirect('auth', 'refresh');
		}
	}

	public function logout()
	{
		// fungsi logout dan membersihkan session
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');
		// notifikasi logout menggunakan flashdata
		$this->session->set_flashdata('message', '<div class="alert alert-success">You have been logged out!</div>');
		redirect('auth', 'refresh');
	}
}
