<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panitia extends CI_Controller {

    function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->library('upload');
	}

    public function index() {
        $this->load->view('panitia/p_header');
        $this->load->view('panitia/p_webinar');
        // $this->load->view('panitia/p_iot');
        // $this->load->view('panitia/p_olimpiade');
        // $this->load->view('panitia/p_ctf');
        $this->load->view('panitia/p_footer');
    }
    
    public function search($keyword) {
        $keyword = $this->input->post('keyword');
        $data['reswebinar'] = $this->m_data->panitia_search('webinar', 'nama', $keyword);
        $this->load->view('panitia/p_webinar', $data);
    }

}