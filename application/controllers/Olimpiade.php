<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Olimpiade extends CI_Controller {

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
		$this->load->library('upload');
		$this->load->helper(array('form', 'url'));
		if($this->session->userdata('status') != "login"){
			redirect('login');
		}
	}

	public function index(){
		$id_tim = $this->session->userdata('id');

		$where = array(
			'id_tim' => $id_tim,
		);
		$info_tim = $this->m_data->get_where("tim",array('id' => $id_tim))->row_array();
		$detil_tim = $this->m_data->get_where("olimpiade",array('nama_tim' => $info_tim['nama']))->row_array();
		$data['nama_tim'] = $info_tim['nama'];
		$data['institusi'] = $info_tim['institusi'];
		$data['nama1'] = $detil_tim['nama1'];
		$data['nama2'] = $detil_tim['nama2'];
		$data['nama3'] = $detil_tim['nama3'];
		$data['status'] = $detil_tim['sts'];
		$this->load->view('header');
		$this->load->view('dashboardOlim/dashboardOlim', $data);
		$this->load->view('footer');
	}
}
