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
		$this->load->model('m_otp');
		$this->load->library('upload');
		$this->load->helper(array('form', 'url'));
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

	public function sukseswebinar(){
		$this->load->view('header');
		$this->load->view('successwebinar');
		$this->load->view('footer');
	}

	public function uploadsukses(){
		$this->load->view('header');
		$this->load->view('uploadsukses');
		$this->load->view('footer');
	}

	public function login()
	{
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
	}

	public function dashboardiot()
	{
		$this->load->view('header');
		$this->load->view('dashboardiot');
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
		$nama		= htmlspecialchars($this->input->post('nama'));
		$institusi	= htmlspecialchars($this->input->post('institusi'));
		$email		= htmlspecialchars($this->input->post('email'));
		$no_wa		= htmlspecialchars($this->input->post('wa'));
		$sesi 		= substr(implode(', ', $this->input->post('webinar')), 0);
		$tel1 		= $this->upload_telkom1('webinar', $nama);
		$tel2 		= $this->upload_telkom2('webinar', $nama);
		$twbn 		= $this->upload_twibbon('webinar', $nama);

		$path = './uploads/webinar/'.$nama.'/';
		if (!is_dir($path)) {
			mkdir($path, 0777, TRUE);
		}
		$config['file_name']			= 'bukti_poster2-'.$nama;
		$config['upload_path']          = $path;
		$config['allowed_types']        = 'gif|jpg|png|pdf';
		// $config['max_size']             = 10000;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->upload->initialize($config);

		if ( ! $this->upload->do_upload('share2'))
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
				'bukti'		=>	$img,
				'sesi'		=>	$sesi,
				'bukti_telkom1'	=>	$tel1,
				'bukti_telkom2'	=>	$tel2,
				'twibbon'	=>	$twbn,
				'bukti2'	=>	$this->upload_poster('webinar', $nama)
			);

			$this->m_data->input_data($data,'webinar');
			
			redirect('pendaftaran/sukseswebinar');
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
		$tim 		= htmlspecialchars($this->input->post('nama_tim'));
		$id1 		= htmlspecialchars($this->input->post('id1'));
		$id2 		= htmlspecialchars($this->input->post('id2'));
		$id3 		= htmlspecialchars($this->input->post('id3'));

		$data1 = array(
			'nama_tim' => $tim,
			'nama1' => htmlspecialchars($this->input->post('nama1')),
			'id1' => $id1,
			'gender1' => htmlspecialchars($this->input->post('gender1')),
			'email1' => htmlspecialchars($this->input->post('email1')),
			'alamat' => htmlspecialchars($this->input->post('alamat1')),
			'no_wa' => htmlspecialchars($this->input->post('wa1')),
			'line' => htmlspecialchars($this->input->post('line1')),
			'nama2' => htmlspecialchars($this->input->post('nama2')),
			'id2' => $id2,
			'gender2' => htmlspecialchars($this->input->post('gender2')),
			'email2' => htmlspecialchars($this->input->post('email2')),
			'nama3' => htmlspecialchars($this->input->post('nama3')),
			'id3' => $id3,
			'gender3' => htmlspecialchars($this->input->post('gender3')),
			'email3' => htmlspecialchars($this->input->post('email3')),
			'ktm1' => htmlspecialchars($this->upload('iot', $tim, 'ktm1', $id1, 'ktm')),
			'ktm2' => htmlspecialchars($this->upload('iot', $tim, 'ktm2', $id2, 'ktm')),
			'ktm3' => htmlspecialchars($this->upload('iot', $tim, 'ktm3', $id3, 'ktm')),
			'surat1' => htmlspecialchars($this->upload('iot', $tim, 'surat1', $id1, 'surat')),
			'surat2' => htmlspecialchars($this->upload('iot', $tim, 'surat2', $id2, 'surat')),
			'surat3' => htmlspecialchars($this->upload('iot', $tim, 'surat3', $id3, 'surat')),
		);

		$data2 = array(
			'nama' => $tim,
			'kategori' => 'iot',
			'institusi' => $this->input->post('institusi'),
			'bukti_share' => $this->upload_poster('iot', $tim)
		);

		$this->m_data->input_data($data2,'tim');
		$this->m_data->input_data($data1,'iot');

		$this->load->library('email');
		if($this->m_otp->request_otp($data1['email1'], $tim, $data2['kategori'])) {
			redirect('pendaftaran/sukses');
		} else {
			$this->showmessage('Request OTP - Gagal', 'Mohon maaf, telah terjadi masalah saat melakukan pendaftaran. Mohon hubungi panitia ARA2021.\nKontak Panitia ARA2021: <a href="https://linktr.ee/ARA2021">linktr.ee/ARA2021</a>');
		}
	}

	public function olimpiade()
	{
		$this->load->view('header');
		$this->load->view('olim');
		$this->load->view('footer');
	}

	function submit_olimpiade()
	{
		$tim 		= htmlspecialchars($this->input->post('nama_tim'));
		$id1 		= htmlspecialchars($this->input->post('id1'));
		$id2 		= htmlspecialchars($this->input->post('id2'));
		$id3 		= htmlspecialchars($this->input->post('id3'));

		$data1 = array(
			'nama_tim' => $tim,
			'nama1' => htmlspecialchars($this->input->post('nama1')),
			'id1' => $id1,
			'gender1' => htmlspecialchars($this->input->post('gender1')),
			'email1' => htmlspecialchars($this->input->post('email1')),
			'alamat' => htmlspecialchars($this->input->post('alamat1')),
			'no_wa' => htmlspecialchars($this->input->post('wa1')),
			'line' => htmlspecialchars($this->input->post('line1')),
			'nama2' => htmlspecialchars($this->input->post('nama2')),
			'id2' => $id2,
			'gender2' => htmlspecialchars($this->input->post('gender2')),
			'email2' => htmlspecialchars($this->input->post('email2')),
			'nama3' => htmlspecialchars($this->input->post('nama3')),
			'id3' => $id3,
			'gender3' => htmlspecialchars($this->input->post('gender3')),
			'email3' => htmlspecialchars($this->input->post('email3')),
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
			'bukti_bayar' => $this->upload_bayar('olimpiade', $tim),
			'bukti_share' => $this->upload_poster('olimpiade', $tim)
		);

		$this->m_data->input_data($data2,'tim');
		$this->m_data->input_data($data1,'olimpiade');

		$this->load->library('email');
		if($this->m_otp->request_otp($data1['email1'], $tim, $data2['kategori'])) {
			redirect('pendaftaran/sukses');
		} else {
			$this->showmessage('Request OTP - Gagal', 'Mohon maaf, telah terjadi masalah saat melakukan pendaftaran. Mohon hubungi panitia ARA2021.\nKontak Panitia ARA2021: <a href="https://linktr.ee/ARA2021">linktr.ee/ARA2021</a>');
		}
		
	}

	public function ctf()
	{
		$this->load->view('header');
		$this->load->view('ctf');
		$this->load->view('footer');
	}

	function submit_ctf()
	{
		$tim 		= htmlspecialchars($this->input->post('nama_tim'));
		$id1 		= htmlspecialchars($this->input->post('id1'));
		$id2 		= htmlspecialchars($this->input->post('id2'));
		$id3 		= htmlspecialchars($this->input->post('id3'));

		$data1 = array(
			'nama_tim' => $tim,
			'nama1' => htmlspecialchars($this->input->post('nama1')),
			'id1' => $id1,
			'gender1' => htmlspecialchars($this->input->post('gender1')),
			'email1' => htmlspecialchars($this->input->post('email1')),
			'no_wa' => htmlspecialchars($this->input->post('wa1')),
			'line' => htmlspecialchars($this->input->post('line1')),
			'nama2' => htmlspecialchars($this->input->post('nama2')),
			'id2' => $id2,
			'gender2' => htmlspecialchars($this->input->post('gender2')),
			'email2' => htmlspecialchars($this->input->post('email2')),
			'nama3' => htmlspecialchars($this->input->post('nama3')),
			'id3' => $id3,
			'gender3' => htmlspecialchars($this->input->post('gender3')),
			'email3' => htmlspecialchars($this->input->post('email3')),
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
			'bukti_bayar' => $this->upload_bayar('ctf', $tim),
// 			'bukti_share' => $this->upload_poster('ctf', $tim),
			'bukti_zip' => $this->upload_zip('ctf', $tim)
		);

		$this->m_data->input_data($data2,'tim');
		$this->m_data->input_data($data1,'ctf');

		$this->load->library('email');
		if($this->m_otp->request_otp($data1['email1'], $tim, $data2['kategori'])) {
			redirect('pendaftaran/sukses');
		} else {
			$this->showmessage('Request OTP - Gagal', 'Mohon maaf, telah terjadi masalah saat melakukan pendaftaran. Mohon hubungi panitia ARA2021.\nKontak Panitia ARA2021: <a href="https://linktr.ee/ARA2021">linktr.ee/ARA2021</a>');
		}
		
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
			echo '<label style="color: green;">Nama Tim bisa digunakan</label>';  
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
	    $nama = str_replace(".","-",$tim);
		$path = './uploads/'.$cat.'/'.$tim.'/'.$tipe;
		if (!is_dir($path)) {
			mkdir($path, 0777, TRUE);
		}
		$config['file_name']			= $nama.'-'.$id.'-'.$tipe;
		$config['upload_path']          = $path;
		$config['allowed_types']        = 'gif|jpg|png|pdf';
		// $config['max_size']             = 10000;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->upload->initialize($config);

		if ( ! $this->upload->do_upload($form))
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

	function upload_bayar($cat, $tim)
	{
	    $nama = str_replace(".","-",$tim);
		$path = './uploads/'.$cat.'/'.$tim;
		if (!is_dir($path)) {
			mkdir($path, 0777, TRUE);
		}
		$config['file_name']			= 'bukti_bayar-'.$nama;
		$config['upload_path']          = $path;
		$config['allowed_types']        = 'gif|jpg|png|pdf';
		// $config['max_size']             = 10000;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->upload->initialize($config);

		if ( ! $this->upload->do_upload('bayar'))
		{
			$error = $this->upload->display_errors();

			$img = NULL;
		}
		else
		{

			$img = $this->upload->data('file_name');

			return $img;
		}

	}

	function upload_poster($cat, $tim)
	{
	    $nama = str_replace(".","-",$tim);
		$path = './uploads/'.$cat.'/'.$tim;
		if (!is_dir($path)) {
			mkdir($path, 0777, TRUE);
		}
		$config['file_name']			= 'bukti_poster-'.$nama;
		$config['upload_path']          = $path;
		$config['allowed_types']        = 'gif|jpg|png|pdf';
		// $config['max_size']             = 10000;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->upload->initialize($config);

		if ( ! $this->upload->do_upload('share'))
		{
			$error = $this->upload->display_errors();

			$img = NULL;
		}
		else
		{

			$img = $this->upload->data('file_name');

			return $img;
		}

	}

	function upload_zip($cat, $tim)
	{
	    $nama = str_replace(".","-",$tim);
		$path = './uploads/'.$cat.'/'.$tim;
		if (!is_dir($path)) {
			mkdir($path, 0777, TRUE);
		}
		$config['file_name']			= 'bukti_zip-'.$nama;
		$config['upload_path']          = $path;
		$config['allowed_types']        = 'zip';
		// $config['max_size']             = 10000;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->upload->initialize($config);
		if (empty($_FILES['share2']['name'])) {
			return $img = 'kosong';
		} else {
			if ( ! $this->upload->do_upload('share2'))
			{
				$error = $this->upload->display_errors();

				$img = NULL;
			}
			else
			{

				$img = $this->upload->data('file_name');

				return $img;
			}
		}


	}

	function upload_telkom1($cat, $tim)
	{
	    $nama = str_replace(".","-",$tim);
		$path = './uploads/'.$cat.'/'.$tim;
		if (!is_dir($path)) {
			mkdir($path, 0777, TRUE);
		}
		$config['file_name']			= 'bukti_telkom1-'.$nama;
		$config['upload_path']          = $path;
		$config['allowed_types']        = 'gif|jpg|png|pdf';
		// $config['max_size']             = 10000;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->upload->initialize($config);
		if (empty($_FILES['telkom1']['name'])) {
			return $img = 'kosong';
		} else {
			if ( ! $this->upload->do_upload('telkom1'))
			{
				$error = $this->upload->display_errors();

				$img = NULL;
			}
			else
			{

				$img = $this->upload->data('file_name');

				return $img;
			}
		}


	}

	function upload_telkom2($cat, $tim)
	{
	    $nama = str_replace(".","-",$tim);
		$path = './uploads/'.$cat.'/'.$tim;
		if (!is_dir($path)) {
			mkdir($path, 0777, TRUE);
		}
		$config['file_name']			= 'bukti_telkom2-'.$nama;
		$config['upload_path']          = $path;
		$config['allowed_types']        = 'gif|jpg|png|pdf';
		// $config['max_size']             = 10000;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->upload->initialize($config);
		if (empty($_FILES['telkom2']['name'])) {
			return $img = 'kosong';
		} else {
			if ( ! $this->upload->do_upload('telkom2'))
			{
				$error = $this->upload->display_errors();

				$img = NULL;
			}
			else
			{

				$img = $this->upload->data('file_name');

				return $img;
			}
		}


	}

	function upload_twibbon($cat, $tim)
	{
	    $nama = str_replace(".","-",$tim);
		$path = './uploads/'.$cat.'/'.$tim;
		if (!is_dir($path)) {
			mkdir($path, 0777, TRUE);
		}
		$config['file_name']			= 'twibbon-'.$nama;
		$config['upload_path']          = $path;
		$config['allowed_types']        = 'gif|jpg|png|pdf';
		// $config['max_size']             = 10000;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->upload->initialize($config);
		if (empty($_FILES['twibbon']['name'])) {
			return $img = 'kosong';
		} else {
			if ( ! $this->upload->do_upload('twibbon'))
			{
				$error = $this->upload->display_errors();

				$img = NULL;
			}
			else
			{

				$img = $this->upload->data('file_name');

				return $img;
			}
		}


	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}

	function showmessage($title = '~-404-~', $msg='') {

		if($title == '~-404-~') {
			$mesg['thetitle'] = '404';
			$mesg['themessage'] = 'Maaf, kami tidak dapat menemukan halaman yang anda cari';
		} else {
			$mesg['thetitle'] = $title;
			$mesg['themessage'] = $msg;
		}

		$this->load->view('header');
		$this->load->view('v_message', $mesg);
		$this->load->view('footer');
    }

}
