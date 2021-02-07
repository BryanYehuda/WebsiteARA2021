<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panitiaaraonly extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
        $this->load->model('m_panitia');
        $this->load->model('m_otp');
        
        //Check if panitia is already login
        if(!$this->session->has_userdata("panitia_logged_in") && $this->session->userdata("panitia_logged_in") != '0') {
            $this->load->view('panitia/p_header');
            $this->load->view('panitia/p_login');
            $this->load->view('panitia/p_footer');
            return;
        }

    }

	public function index() {
        if($this->session->has_userdata("panitia_logged_in") && $this->session->userdata("panitia_logged_in") != '0') {
            $this->load->view('panitia/p_header');
            $this->load->view('panitia/p_sel');
            $this->load->view('panitia/p_footer');
            return;
        } 
    }

    function login() {

        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        $this->form_validation->set_rules('accessor', 'Accessor', 'required|trim');

        $accessor = htmlspecialchars($this->input->post('accessor'));
        $username = htmlspecialchars($this->input->post('username'));
        $password = md5('uyah_garam' . htmlspecialchars($this->input->post('password')) . '25');

        $ana = $this->m_panitia->checkin($username, $password)->row_array();

        if($accessor != "" && $ana && $ana['status_panitia'] > 0) {
            $this->m_panitia->writelog($ana['id_panitia'], $accessor);
            $this->session->sess_expiration = '43200';
            $this->session->set_userdata('panitia_logged_in', $ana['status_panitia']);
            redirect(base_url('panitiaaraonly'));
        }

        redirect(base_url());
    }

    function webinar() {
        if($this->session->has_userdata("panitia_logged_in") && $this->session->userdata("panitia_logged_in") != '0') {
            $cur = 'webinar';
            $panitia['datas'] = $this->m_panitia->get_data($cur);
            $onpage['onpage'] = $cur;
            $this->load->view('panitia/p_header', $onpage);
            $this->load->view('panitia/p_webinar', $panitia);
            // $this->load->view('panitia/p_result');
            $this->load->view('panitia/p_footer', $onpage);
        }
    }

    function iot() {
        if($this->session->has_userdata("panitia_logged_in") && $this->session->userdata("panitia_logged_in") != '0') {
            $cur = 'iot';
            $panitia['datas'] = $this->m_panitia->get_data($cur);
            $onpage['onpage'] = $cur;
            $this->load->view('panitia/p_header', $onpage);
            $this->load->view('panitia/p_iot', $panitia);
            // $this->load->view('panitia/p_result');
            $this->load->view('panitia/p_footer');
        }
    }

    function ctf() {
        if($this->session->has_userdata("panitia_logged_in") && $this->session->userdata("panitia_logged_in") != '0') {
            $cur = 'ctf';
            $panitia['datas'] = $this->m_panitia->get_data($cur);
            $onpage['onpage'] = $cur;
            $this->load->view('panitia/p_header', $onpage);
            $this->load->view('panitia/p_ctf', $panitia);
            // $this->load->view('panitia/p_result');
            $this->load->view('panitia/p_footer', $onpage);
        }
    }

    function olim() {
        if($this->session->has_userdata("panitia_logged_in") && $this->session->userdata("panitia_logged_in") != '0') {
            $cur = 'olimpiade';
            $panitia['datas'] = $this->m_panitia->get_data($cur);
            $onpage['onpage'] = $cur;
            $this->load->view('panitia/p_header', $onpage);
            $this->load->view('panitia/p_olimpiade', $panitia);
            // $this->load->view('panitia/p_result');
            $this->load->view('panitia/p_footer', $onpage);
        }
    }
    
    //DANGER!
    // function sendnewemailtoallplease025thegreatestdota2playerintableiot() {
    //     $alldataiot = $this->m_panitia->get_data('iot');

    //     foreach($alldataiot as $dataiot) {
    //         echo $dataiot->nama_tim .' | ' . $dataiot->email1 . ' | iot<br>';
    //         //if($dataiot->email1 == 'rafael.nixon.c@gmail.com')
    //             $this->m_otp->request_otp($dataiot->email1, $dataiot->nama_tim, 'iot');
    //     }

    // }
    
    function sendemailmanuallytotim($tim_id, $table) {
        if(strlen($tim_id) > 0) {
            
            $q = $this->m_panitia->get_data_of_tim_by_id($tim_id, $table);
            
            if($q->num_rows() > 0) {
                $sended = $this->m_otp->request_otp_by_tim_id($tim_id, $q->row_array()['email1']);
            
                if($sended) {
                    echo '<h1 style="color:green;">Email Sent!</h1>';
                    return;
                }
            }
            
        }
        
        echo '<h1 style="color:red;">Email Error!</h1>';
        return;
    }
    
    // function search($table) {
    //     if($this->session->has_userdata("panitia_logged_in") && $this->session->userdata("panitia_logged_in") != '0') {
    //         $this->form_validation->set_rules('keyword', 'Keyword', 'trim');

    //         $keyword = htmlspecialchars($this->input->post('keyword'));
    //         $data['onpage'] = $table;
    //         $data['datas'] = $this->m_panitia->search($table, $keyword);
    //         $this->load->view('panitia/p_header', $data);
    //         $this->load->view('panitia/p_'.$table, $data);
    //         $this->load->view('panitia/p_footer');
    //     }
    // }


    function fetchwebinar() {
        echo 'Hi david!';
        if($this->session->has_userdata("panitia_logged_in") && $this->session->userdata("panitia_logged_in") != '0') {
            $query = '';
            $outhead = '';
            $out = '';
            if($this->input->post('query')) {
                $query = $this->input->post('query');
            }

            $data = $this->m_panitia->fetchdatawebinar($query);

            $outhead = '
            <table class="responsive-table stripped highlight" id="result">
            <thead>
            <tr style="color: whitesmoke;">
                <th>Nama</th>
                <th>Institusi</th>
                <th>Email</th>
                <th>No. WhatsApp</th>
                <th>Bukti</th>
            </tr>
            </thead>
            <tbody>
            ';

            if($data->num_rows() > 0) {
                foreach($data->result() as $row) {
                        $out .='
                        <tr draggable="false">
                            <td draggable="false">
                                '. $row->nama .'
                            </td>
                            <td draggable="false">
                                '. $row->institusi .'
                            </td>
                            <td draggable="false">
                                '. $row->email .'
                            </td>
                            <td draggable="false">
                                '. $row->no_wa .'
                            </td>
                            <td draggable="false">
                                <a href="'. base_url('uploads/webinar/') . $row->bukti .'" target="_blank"
                                    draggable="false">
                                    '. $row->bukti .'
                                </a>
                            </td>
                        </tr>
                        ';
                    } 

            } else {
                $countcol = 5;
                $out .= '
                <tr>
                    <td colspan="'. $countcol .'">No Data Found</td>
                </tr>
                ';
            }

            echo $outhead . $out . '</tbody></table>';
        }
    }

    function fetch($table) {
        if($this->session->has_userdata("panitia_logged_in") && $this->session->userdata("panitia_logged_in") != '0') {
            $query = '';
            $outhead = '';
            $out = '';
            if($this->input->post('query')) {
                $query = $this->input->post('query');
            }
            $data = $this->m_panitia->fetchdata($table, $query);

            $outhead = '
            <table class="responsive-table stripped highlight" id="result">
            <thead>
            <tr style="color: whitesmoke;">
                <th>Nama</th>
                <th>Institusi</th>
                <th>Email</th>
                <th>No. WhatsApp</th>
                <th>Bukti</th>
            </tr>
            </thead>
            <tbody>
            ';

            if($table != '' && $table != 'webinar')
                $outhead = '
                <table class="responsive-table stripped highlight" id="result">
                <thead>
                <tr style="color: whitesmoke;">
                    <th>Nama Tim</th>
                    <th>Nama Ketua</th>
                    <th>Email Ketua</th>
                    <th>No. WhatsApp</th>
                    <th>ID Line</th>
                    <th>Alamat</th>
                    <th>Nama Anggota 1</th>
                    <th>Nama Anggota 2</th>
                </tr>
                </thead>
                <tbody>
                ';

            if($data) {
                foreach($data->row_array() as $row) {
                    if($table == 'webinar') {
                        $out .='
                        <tr draggable="false">
                            <td draggable="false">
                                '. $row->nama .'
                            </td>
                            <td draggable="false">
                                '. $row->institusi .'
                            </td>
                            <td draggable="false">
                                '. $row->email .'
                            </td>
                            <td draggable="false">
                                '. $row->no_wa .'
                            </td>
                            <td draggable="false">
                                <a href="'. base_url('uploads/webinar/') . $row->bukti .'" target="_blank"
                                    draggable="false">
                                    '. $row->bukti .'
                                </a>
                            </td>
                        </tr>
                        ';
                    } elseif($table == "olimpiade") {
                        $out .= '
                        <tr draggable="false">
                    <td draggable="false">
                        '. $row->nama_tim . '
                    </td>
                    <td draggable="false">
                        <a href="#modal_'. $row->id_ctf . '_1" draggable="false">
                            '. $row->nama1 . '
                        </a>
                    </td>
                    <td draggable="false">
                        '. $row->email1 . '
                    </td>
                    <td draggable="false">
                        '. $row->no_wa . '
                    </td>
                    <td draggable="false">
                        '. $row->line . '
                    </td>
                    <td draggable="false">
                        '. $row->alamat . '
                    </td>
                    <td draggable="false">
                        <a href="#modal_'. $row->id_ctf . '_2" draggable="false">
                            '. $row->nama2 . '
                        </a>
                    </td>
                    <td draggable="false">
                        <a href="#modal_'. $row->id_ctf . '_3" draggable="false">
                            '. $row->nama3 . '
                        </a>
                    </td>
                    <!-- <td draggable="false">
                        <a href="'. base_url('uploads/iot/') . $row->bukti . '" target="_blank"
                            draggable="false">
                            '. $row->bukti . '
                        </a>
                    </td> -->
                </tr>

                <!-- Modals -->
                <div id="modal_'. $row->id_ctf . '_1" class="modal">
                    <div class="modal-content">
                        <h4>
                            '. $row->nama_tim . ' : Ketua
                        </h4>
                        <p>
                            <b>
                                Nama
                            </b>
                            <br>
                            '. $row->nama1 . '
                            <br>
                            <br>
                            <b>
                                ID Mahasiswa
                            </b>
                            <br>
                            '. $row->id1 . '
                            <br>
                            <br>
                            <b>
                                Jenis Kelamin
                            </b>
                            <br>
                            '. $row->gender1 . '
                            <br>
                            <br>
                            <b>
                                Email
                            </b>
                            <br>
                            '. $row->email1 . '
                            <br>
                            <br>
                            <b>
                                KTM
                            </b>
                            <br>
                            '. $row->ktm1 . '
                            <br>
                            <br>
                            <b>
                                Foto
                            </b>
                            <br>
                            <img src="'. base_url('uploads/iot/') . $row->foto1 . '" draggable="false"
                                alt="'. $row->foto1 . '" style="max-height: 768px;">
                        </p>
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
                    </div>
                </div>
                <div id="modal_'. $row->id_ctf . '_2" class="modal">
                    <div class="modal-content">
                        <h4>
                            '. $row->nama_tim . ' : Anggota 1
                        </h4>
                        <p>
                            <b>
                                Nama
                            </b>
                            <br>
                            '. $row->nama2 . '
                            <br>
                            <br>
                            <b>
                                ID Mahasiswa
                            </b>
                            <br>
                            '. $row->id2 . '
                            <br>
                            <br>
                            <b>
                                Jenis Kelamin
                            </b>
                            <br>
                            '. $row->gender2 . '
                            <br>
                            <br>
                            <b>
                                Email
                            </b>
                            <br>
                            '. $row->email2 . '
                            <br>
                            <br>
                            <b>
                                KTM
                            </b>
                            <br>
                            '. $row->ktm2 . '
                            <br>
                            <br>
                            <b>
                                Foto
                            </b>
                            <br>
                            <img src="'. base_url('uploads/iot/') . $row->foto2 . '" draggable="false"
                                alt="'. $row->foto2 . '" style="max-height: 768px;">
                        </p>
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
                    </div>
                </div>
                <div id="modal_'. $row->id_ctf . '_3" class="modal">
                    <div class="modal-content">
                        <h4>
                            '. $row->nama_tim . ' : Anggota 2
                        </h4>
                        <p>
                            <b>
                                Nama
                            </b>
                            <br>
                            '. $row->nama3 . '
                            <br>
                            <br>
                            <b>
                                ID Mahasiswa
                            </b>
                            <br>
                            '. $row->id3 . '
                            <br>
                            <br>
                            <b>
                                Jenis Kelamin
                            </b>
                            <br>
                            '. $row->gender3 . '
                            <br>
                            <br>
                            <b>
                                Email
                            </b>
                            <br>
                            '. $row->email3 . '
                            <br>
                            <br>
                            <b>
                                KTM
                            </b>
                            <br>
                            '. $row->ktm3 . '
                            <br>
                            <br>
                            <b>
                                Foto
                            </b>
                            <br>
                            <img src="'. base_url('uploads/iot/') . $row->foto3 . '" draggable="false"
                                alt="'. $row->foto3 . '" style="max-height: 768px;">
                        </p>
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
                    </div>
                </div>';
                    } else {
                        $out .= '
                        <tr draggable="false">
                    <td draggable="false">
                        '. $row->nama_tim . '
                    </td>
                    <td draggable="false">
                        <a href="#modal_'. $row->id_ctf . '_1" draggable="false">
                            '. $row->nama1 . '
                        </a>
                    </td>
                    <td draggable="false">
                        '. $row->email1 . '
                    </td>
                    <td draggable="false">
                        '. $row->no_wa . '
                    </td>
                    <td draggable="false">
                        '. $row->line . '
                    </td>
                    <td draggable="false">
                        '. $row->alamat . '
                    </td>
                    <td draggable="false">
                        <a href="#modal_'. $row->id_ctf . '_2" draggable="false">
                            '. $row->nama2 . '
                        </a>
                    </td>
                    <td draggable="false">
                        <a href="#modal_'. $row->id_ctf . '_3" draggable="false">
                            '. $row->nama3 . '
                        </a>
                    </td>
                </tr>

                <!-- Modals -->
                <div id="modal_'. $row->id_ctf . '_1" class="modal">
                    <div class="modal-content">
                        <h4>
                            '. $row->nama_tim . ' : Ketua
                        </h4>
                        <p>
                            <b>
                                Nama
                            </b>
                            <br>
                            '. $row->nama1 . '
                            <br>
                            <br>
                            <b>
                                ID Mahasiswa
                            </b>
                            <br>
                            '. $row->id1 . '
                            <br>
                            <br>
                            <b>
                                Jenis Kelamin
                            </b>
                            <br>
                            '. $row->gender1 . '
                            <br>
                            <br>
                            <b>
                                Email
                            </b>
                            <br>
                            '. $row->email1 . '
                            <br>
                            <br>
                            <b>
                                KTM
                            </b>
                            <br>
                            '. $row->ktm1 . '
                            <br>
                            <br>
                            <b>
                                Surat
                            </b>
                            <br>
                            <a href="'. base_url('uploads/iot/') . $row->surat1 . '" draggable="false"
                                alt="'. $row->surat1 . '">
                        </p>
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
                    </div>
                </div>
                <div id="modal_'. $row->id_ctf . '_2" class="modal">
                    <div class="modal-content">
                        <h4>
                            '. $row->nama_tim . ' : Anggota 1
                        </h4>
                        <p>
                            <b>
                                Nama
                            </b>
                            <br>
                            '. $row->nama2 . '
                            <br>
                            <br>
                            <b>
                                ID Mahasiswa
                            </b>
                            <br>
                            '. $row->id2 . '
                            <br>
                            <br>
                            <b>
                                Jenis Kelamin
                            </b>
                            <br>
                            '. $row->gender2 . '
                            <br>
                            <br>
                            <b>
                                Email
                            </b>
                            <br>
                            '. $row->email2 . '
                            <br>
                            <br>
                            <b>
                                KTM
                            </b>
                            <br>
                            '. $row->ktm2 . '
                            <br>
                            <br>
                            <b>
                                Surat
                            </b>
                            <br>
                            <a href="'. base_url('uploads/iot/') . $row->surat2 . '" draggable="false"
                                alt="'. $row->surat2 . '">
                        </p>
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
                    </div>
                </div>
                <div id="modal_'. $row->id_ctf . '_3" class="modal">
                    <div class="modal-content">
                        <h4>
                            '. $row->nama_tim . ' : Anggota 2
                        </h4>
                        <p>
                            <b>
                                Nama
                            </b>
                            <br>
                            '. $row->nama3 . '
                            <br>
                            <br>
                            <b>
                                ID Mahasiswa
                            </b>
                            <br>
                            '. $row->id3 . '
                            <br>
                            <br>
                            <b>
                                Jenis Kelamin
                            </b>
                            <br>
                            '. $row->gender3 . '
                            <br>
                            <br>
                            <b>
                                Email
                            </b>
                            <br>
                            '. $row->email3 . '
                            <br>
                            <br>
                            <b>
                                KTM
                            </b>
                            <br>
                            '. $row->ktm3 . '
                            <br>
                            <br>
                            <b>
                                Surat
                            </b>
                            <br>
                            <a href="'. base_url('uploads/iot/') . $row->surat3 . '" draggable="false"
                                alt="'. $row->surat3 . '">
                        </p>
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
                    </div>
                </div>';
                    }
                }
            } else {
                $countcol = 5;
                if($table != '' && $table != 'webinar')
                    $countcol = 8;

                $out .= '
                <tr>
                    <td colspan="'. $countcol .'">No Data Found</td>
                </tr>
                ';
            }

            echo $outhead . $out . '</tbody></table>';
        }

        echo '<b style="color:white;">Hell</b>';
    }

    function olimpiade() {
        redirect(base_url('panitiaaraonly/olim'));
    }

    function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}

}