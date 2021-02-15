<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		if ($this->session->userdata('status') == "login") {
			if ($this->session->userdata('kategori') == 'iot') {
				redirect('iot');
			} else if ($this->session->userdata('kategori') == 'ctf') {
				redirect('ctf');
			} else if ($this->session->userdata('kategori') == 'olimpiade') {
				redirect('olimpiade');
			}
		}
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
	}

	function loginact(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'usernamelogin_tim' => $username,
			'pass' => md5('taburin_garem_ah...' . $password . 'biar_sedep_gitu_kan_ya...')
		);
		$cek = $this->m_data->get_where("tim",$where);
		$rows = $cek->num_rows();
		if($rows > 0){
			$cek = $cek->row_array();
			$data_session = array(
				'id'		=> $cek['id'],
				'nama'		=> $cek['nama'],
				'kategori'	=> $cek['kategori'],
				'status'	=> "login"
			);
			$this->session->set_userdata($data_session);
			if ($cek['kategori'] == 'iot') {
				redirect('iot');
			} else if ($cek['kategori'] == 'ctf') {
				redirect('ctf');
			} else if ($cek['kategori'] == 'olimpiade') {
				redirect('olimpiade');
			}

		}else{
			$msg = "<p><b style = 'color: red;'>Username/Password anda salah</b></p>";
			$this->load->view('header');
			$this->load->view('login',array('msg' => $msg));
			$this->load->view('footer');
		}
	}

}
