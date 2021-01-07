<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}

	public function sukses(){
		$this->load->view('header');
		$this->load->view('success');
		$this->load->view('footer');
	}

	public function pendaftaran()
	{
		$this->load->view('header');
		$this->load->view('daftar');
		$this->load->view('footer');
	}

	public function webinar()
	{
		$this->load->view('header');
		$this->load->view('webinar');
		$this->load->view('footer');
	}

	function submit_webinar()
	{
		$nama		= $this->input->post('nama');
		$institusi	= $this->input->post('institusi');
		$email		= $this->input->post('email');
		$no_wa		= $this->input->post('wa');

		$path = './uploads/webinar/';
		if (!is_dir($path)) {
			mkdir($path, 0777, TRUE);
		}
		$config['file_name']			= $no_wa;
		$config['upload_path']          = $path;
		$config['allowed_types']        = 'gif|jpg|png|pdf';
		// $config['max_size']             = 10000;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->upload->initialize($config);

		if ( ! $this->upload->do_upload('bayar'))
		{
			$error = $this->upload->display_errors();

			echo $error;
		}
		else
		{
			
			$img = $this->upload->data('file_name');

			$data = array(
				'nama'		=>	$nama,
				'institusi'	=>	$institusi,
				'email'		=>	$email,
				'no_wa'		=>	$no_wa,
				'bukti'		=>	$img
			);

			$this->m_data->input_data($data,'webinar');
			
			redirect('pendaftaran/sukses');
		}
	}

	public function iot()
	{
		$this->load->view('header');
		$this->load->view('iot');
		$this->load->view('footer');
	}

	function submit_iot()
	{
		$tim 		= $this->input->post('nama_tim');
		$id1 		= $this->input->post('id1');
		$id2 		= $this->input->post('id2');
		$id3 		= $this->input->post('id3');

		$data1 = array(
			'nama_tim' => $tim,
			'nama1' => $this->input->post('nama1'),
			'id1' => $id1,
			'gender1' => $this->input->post('gender1'),
			'email1' => $this->input->post('email1'),
			'alamat' => $this->input->post('alamat1'),
			'no_wa' => $this->input->post('wa1'),
			'line' => $this->input->post('line1'),
			'nama2' => $this->input->post('nama2'),
			'id2' => $id2,
			'gender2' => $this->input->post('gender2'),
			'email2' => $this->input->post('email2'),
			'nama3' => $this->input->post('nama3'),
			'id3' => $id3,
			'gender3' => $this->input->post('gender3'),
			'email3' => $this->input->post('email3'),
			'ktm1' => $this->upload('iot', $tim, 'ktm1', $id1, 'ktm'),
			'ktm2' => $this->upload('iot', $tim, 'ktm2', $id2, 'ktm'),
			'ktm3' => $this->upload('iot', $tim, 'ktm3', $id3, 'ktm'),
			'surat1' => $this->upload('iot', $tim, 'surat1', $id1, 'surat'),
			'surat2' => $this->upload('iot', $tim, 'surat2', $id2, 'surat'),
			'surat3' => $this->upload('iot', $tim, 'surat3', $id3, 'surat'),
		);

		$data2 = array(
			'nama' => $tim,
			'kategori' => 'iot',
			'institusi' => $this->input->post('institusi'),
			// 'bukti_bayar' => $this->upload_bayar('iot', $tim)
		);

		$this->m_data->input_data($data2,'tim');
		$this->m_data->input_data($data1,'iot');

		redirect('pendaftaran/sukses');
	}

	public function olimpiade()
	{
		$this->load->view('header');
		$this->load->view('olim');
		$this->load->view('footer');
	}

	function submit_olimpiade()
	{
		$tim 		= $this->input->post('nama_tim');
		$id1 		= $this->input->post('id1');
		$id2 		= $this->input->post('id2');
		$id3 		= $this->input->post('id3');

		$data1 = array(
			'nama_tim' => $tim,
			'nama1' => $this->input->post('nama1'),
			'id1' => $id1,
			'gender1' => $this->input->post('gender1'),
			'email1' => $this->input->post('email1'),
			'alamat' => $this->input->post('alamat1'),
			'no_wa' => $this->input->post('wa1'),
			'line' => $this->input->post('line1'),
			'nama2' => $this->input->post('nama2'),
			'id2' => $id2,
			'gender2' => $this->input->post('gender2'),
			'email2' => $this->input->post('email2'),
			'nama3' => $this->input->post('nama3'),
			'id3' => $id3,
			'gender3' => $this->input->post('gender3'),
			'email3' => $this->input->post('email3'),
			'ktm1' => $this->upload('olimpiade', $tim, 'ktm1', $id1, 'ktm'),
			'ktm2' => $this->upload('olimpiade', $tim, 'ktm2', $id2, 'ktm'),
			'ktm3' => $this->upload('olimpiade', $tim, 'ktm3', $id3, 'ktm'),
			'foto1' => $this->upload('olimpiade', $tim, 'foto1', $id1, 'foto'),
			'foto2' => $this->upload('olimpiade', $tim, 'foto2', $id2, 'foto'),
			'foto3' => $this->upload('olimpiade', $tim, 'foto3', $id3, 'foto'),
		);

		$data2 = array(
			'nama' => $tim,
			'kategori' => 'olimpiade',
			'institusi' => $this->input->post('institusi'),
			'bukti_bayar' => $this->upload_bayar('olimpiade', $tim)
		);

		$this->m_data->input_data($data2,'tim');
		$this->m_data->input_data($data1,'olimpiade');

		redirect('pendaftaran/sukses');
		
	}

	public function ctf()
	{
		$this->load->view('header');
		$this->load->view('ctf');
		$this->load->view('footer');
	}

	function submit_ctf()
	{
		$tim 		= $this->input->post('nama_tim');
		$id1 		= $this->input->post('id1');
		$id2 		= $this->input->post('id2');
		$id3 		= $this->input->post('id3');

		$data1 = array(
			'nama_tim' => $tim,
			'nama1' => $this->input->post('nama1'),
			'id1' => $id1,
			'gender1' => $this->input->post('gender1'),
			'email1' => $this->input->post('email1'),
			'no_wa' => $this->input->post('wa1'),
			'line' => $this->input->post('line1'),
			'nama2' => $this->input->post('nama2'),
			'id2' => $id2,
			'gender2' => $this->input->post('gender2'),
			'email2' => $this->input->post('email2'),
			'nama3' => $this->input->post('nama3'),
			'id3' => $id3,
			'gender3' => $this->input->post('gender3'),
			'email3' => $this->input->post('email3'),
			'ktm1' => $this->upload('ctf', $tim, 'ktm1', $id1, 'ktm'),
			'ktm2' => $this->upload('ctf', $tim, 'ktm2', $id2, 'ktm'),
			'ktm3' => $this->upload('ctf', $tim, 'ktm3', $id3, 'ktm'),
			'surat1' => $this->upload('ctf', $tim, 'surat1', $id1, 'surat'),
			'surat2' => $this->upload('ctf', $tim, 'surat2', $id2, 'surat'),
			'surat3' => $this->upload('ctf', $tim, 'surat3', $id3, 'surat')
		);

		$data2 = array(
			'nama' => $tim,
			'kategori' => 'ctf',
			'institusi' => $this->input->post('institusi'),
			'bukti_bayar' => $this->upload_bayar('ctf', $tim)
		);

		$this->m_data->input_data($data2,'tim');
		$this->m_data->input_data($data1,'ctf');

		redirect('pendaftaran/sukses');
		
	}

	function check_tim()  
	{  

		$this->load->model("m_data");  
		if($this->m_data->is_tim_available($_POST["tim"]))  
		{  
			echo '<label style="color: red;">Nama Tim sudah digunakan</label>';  
		}  
		else  
		{  
			echo '<label style="color: white;">Nama Tim bisa digunakan</label>';  
		}  

	}

	function check_email()  
	{  

		$this->load->model("m_data");  
		if($this->m_data->is_email_available($_POST["email"]))  
		{  
			echo '<label style="color: red;"> Email Sudah terdaftar</label>';  
		}  

	}

	function check_no()  
	{  

		$this->load->model("m_data");  
		if($this->m_data->is_wa_available($_POST["wa"]))  
		{  
			echo '<label style="color: red;"></span> Nomor Sudah terdaftar</label>';  
		}  

	}

	function upload($cat, $tim, $form, $id, $tipe)
	{
		$path = './uploads/'.$cat.'/'.$tim.'/'.$tipe;
		if (!is_dir($path)) {
			mkdir($path, 0777, TRUE);
		}
		$config['file_name']			= $tim.'-'.$id.'-'.$tipe;
		$config['upload_path']          = $path;
		$config['allowed_types']        = 'gif|jpg|png|pdf';
		// $config['max_size']             = 10000;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->upload->initialize($config);

		if ( ! $this->upload->do_upload($form))
		{
			$error = $this->upload->display_errors();

			echo $error;
		}
		else
		{

			$img = $this->upload->data('file_name');

			return $img;
		}
	}

	function upload_bayar($cat, $tim)
	{
		$path = './uploads/'.$cat.'/'.$tim;
		if (!is_dir($path)) {
			mkdir($path, 0777, TRUE);
		}
		$config['file_name']			= 'bukti_bayar-'.$tim;
		$config['upload_path']          = $path;
		$config['allowed_types']        = 'gif|jpg|png|pdf';
		// $config['max_size']             = 10000;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->upload->initialize($config);

		if ( ! $this->upload->do_upload('bayar'))
		{
			$error = $this->upload->display_errors();

			echo $error;
		}
		else
		{

			$img = $this->upload->data('file_name');

			return $img;
		}

	}


}
