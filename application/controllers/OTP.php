<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Otp extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('m_data');
		$this->load->model('m_otp');
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
    
    public function index() {
        redirect(base_url() . 'otp/activate');
    }

    public function activate() {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('otp', 'OTP', 'required|trim');
        
        if($this->form_validation->run() == TRUE) {

            $username = htmlspecialchars($this->input->post('username'));
            $otp = htmlspecialchars($this->input->post('otp'));

            if($this->m_otp->submit_otp($username, $otp)) {
                $this->showmessage('Request OTP - Sukses', 'Akun tim ARA2021 anda telah diaktifkan. Sekarang anda dapat melakukan login melalui <a href=' . base_url() . 'login>'  . base_url() . 'login</a>\nKontak Panitia ARA2021: <a href="https://linktr.ee/ARA2021">linktr.ee/ARA2021</a>');
                return TRUE;
            } else {
                $this->showmessage('Request OTP - Gagal', 'Mohon maaf, telah terjadi kesalahan saat melakukan request kode OTP. \nKontak Panitia ARA2021: <a href="https://linktr.ee/ARA2021">linktr.ee/ARA2021</a>');
                return FALSE;
            }

        } else {
            $this->load->view('header');
            $this->load->view('v_submitotp');
            $this->load->view('footer');
        }

    }
    
}

?>