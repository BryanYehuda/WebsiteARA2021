<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Iot extends CI_Controller {

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
	}

	public function index()
	{
		if($this->session->userdata('status') == "login"){
			redirect('iot/abstrak');
		}
		$this->load->view('header');
		$this->load->view('dashboardIot/login');
		$this->load->view('footer');
	}

	function loginact(){
		if($this->session->userdata('status') == "login"){
			redirect('iot/abstrak');
		}
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'nama' => $username,
			'pass' => md5($password),
			'kategori' => 'iot'
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
			redirect('iot/abstrak');

		}else{
			$msg = "<p><b style = 'color: red;'>Username/Password anda salah</b></p>";
			$this->load->view('header');
			$this->load->view('dashboardIot/login',array('msg' => $msg));
			$this->load->view('footer');
		}
	}

	public function abstrak(){
		if($this->session->userdata('status') == NULL){
			redirect('iot');
		}
		$id_tim = $this->session->userdata('id');

		$where = array(
			'id_tim' => $id_tim,
		);
		$cek = $this->m_data->get_where("abstrak_iot",$where);
		$rows = $cek->num_rows();
		if($rows == 0){
			$this->load->view('header');
			$this->load->view('dashboardIot/formAbstrak');
			$this->load->view('footer');
		} else {
			$cek = $cek->row_array();
			$data['abstrak'] = $cek['abstrak'];
			$data['judul'] = $cek['judul'];
			$this->load->view('header');
			$this->load->view('dashboardIot/doneAbstrak', $data);
			$this->load->view('footer');
		}
	}

	function submit_abstrak(){
		$id_tim = $this->session->userdata('id');
		$judul = $this->input->post('judul');
		$abstrak = $this->input->post('abstrak');

		$data = array(
			'id_tim' => $id_tim,
			'judul' => $judul,
			'abstrak' => $abstrak
		);

		$this->m_data->input_data($data,'abstrak_iot');
			
		redirect('berhasilsubmit');
	}

	public function sukses_submit(){
		if($this->session->userdata('status') == NULL){
			redirect('iot');
		}
		$this->load->view('header');
		$this->load->view('dashboardIot/uploadsukses');
		$this->load->view('footer');
	}
	
// 	public function cek_pass(){
// 		$data = array('kategori' => 'iot', );
// 		$print = $this->m_data->get_where('tim', $data)->result();

// 		foreach ($print as $key) {
// 		    echo $key->nama." = ".(strtolower(str_replace(' ', '', $key->nama))."ara123 <br>");
// 			$query = "
// 			UPDATE tim
// 			SET pass = md5('".strtolower(str_replace(' ', '', $key->nama))."ara123')
// 			WHERE kategori = 'iot' AND id = ".$key->id.";";
// 			echo $query."<br>";
// 			$this->db->query($query);
// 		}
// 	}

}
