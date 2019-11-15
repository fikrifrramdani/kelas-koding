<?php defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Kelas Koding';
		$data['users'] = $this->db->get_where('Users', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/user_header', $data);
		$this->load->view('templates/user_navbar', $data);
		$this->load->view('users/index');
		$this->load->view('templates/user_footer');
	}
}
