<?php defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Admin | Kelas Koding';
        $data['users'] = $this->db->get_where('Users', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/auth_header', $data);
        $this->load->view('templates/auth_navbar', $data);
        $this->load->view('templates/auth_sidebar');
        $this->load->view('admin/index');
        $this->load->view('templates/auth_footer');
    }
}
