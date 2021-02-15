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
		$cek = $this->m_data->get_where("abstrak_iot",$where);
		$cek_kti = $this->m_data->get_where("kti_iot",$where);
		$info_tim = $this->m_data->get_where("tim",array('id' => $id_tim))->row_array();
		$detil_tim = $this->m_data->get_where("iot",array('nama_tim' => $info_tim['nama']))->row_array();
		$rows = $cek->num_rows();
		$rows_kti = $cek_kti->num_rows();
		if($rows == 0){
			$data['abstrak'] = "Data Tidak Tersedia";
			$data['judul'] = "Data Tidak Tersedia";
		} else {
			$cek = $cek->row_array();
			$data['abstrak'] = $cek['abstrak'];
			$data['judul'] = $cek['judul'];
		}
		if($rows_kti != 0){
			$cek = $cek_kti->row_array();
			$data['file'] = $cek['kti'];
		}
		$data['nama_tim'] = $info_tim['nama'];
		$data['institusi'] = $info_tim['institusi'];
		$data['nama1'] = $detil_tim['nama1'];
		$data['nama2'] = $detil_tim['nama2'];
		$data['nama3'] = $detil_tim['nama3'];
		$data['status'] = $detil_tim['sts'];
		$this->load->view('header');
		$this->load->view('dashboardIot/dashboardIot', $data);
		$this->load->view('footer');
	}

	function submit_kti(){
		$id_tim = $this->session->userdata('id');

		$data = array(
			'id_tim' => $id_tim,
			'kti' => $this->upload($id_tim)
		);

		$this->m_data->input_data($data,'kti_iot');

		redirect('berhasilsubmit');
	}

	public function sukses_submit(){
		$this->load->view('header');
		$this->load->view('dashboardIot/uploadsukses');
		$this->load->view('footer');
	}

	function upload($id)
	{
		$nama = str_replace(".","-",$this->session->userdata('nama'));
		$path = './uploads/kti/'.$this->session->userdata('nama');
		if (!is_dir($path)) {
			mkdir($path, 0777, TRUE);
		}
		$config['file_name']			= $id.'-'.$nama;
		$config['upload_path']          = $path;
		$config['allowed_types']        = 'pdf';
		$config['overwrite'] 			= TRUE;
		$config['max_size']             = 8000;

		$this->upload->initialize($config);

		if ( ! $this->upload->do_upload('kti'))
		{
			$error = $this->upload->display_errors();

			$img = NULL;
		}
		else
		{

			$img = $this->upload->data('file_name');

		}
		return $img;
	}

}
