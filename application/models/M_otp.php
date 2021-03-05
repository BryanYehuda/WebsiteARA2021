<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
class M_otp extends CI_Model {

    function generate_username($id) {

        $query = $this->db->get_where('tim', ['id' => $id]);

        if($query->num_rows() > 0) {
            $name = $query->row_array()['nama'];
            $name = strtolower(str_replace(' ', '_', $name));

            return $name . mt_rand(0,9) . mt_rand(0,9) . mt_rand(0,9);
        }

        return '';
    }

    function generate_password($id) {

        $query = $this->db->get_where('tim', ['id' => $id]);

        if($query->num_rows() > 0) {
            $str = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

            return
                $str[mt_rand(0,strlen($str)-1)] . 
                $str[mt_rand(0,strlen($str)-1)] . 
                $str[mt_rand(0,strlen($str)-1)] . 
                $str[mt_rand(0,strlen($str)-1)] . 
                $str[mt_rand(0,strlen($str)-1)] . 
                $str[mt_rand(0,strlen($str)-1)] . 
                $str[mt_rand(0,strlen($str)-1)] . 
                $str[mt_rand(0,strlen($str)-1)]
            ;
        }

        return '';
    }

    function send_phpmailer($to, $subject, $message) {
        $this->load->library('phpmailer_lib');

        $sended = $this->phpmailer_lib->send($to, $subject, $message);

        if($sended) {
            return true;
        }

        return false;
    }

    function send_email($from1, $to, $subject, $message, $from2 = '', $ishtml = 0) {

        $config = Array(
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => '465',
            'smtp_user' => 'ara.its.ac.id@gmail.com',
            'smtp_pass' => 'secret',
            'newline'   => '\n',
            'validate'  => 'true',
            'dsn'       => 'true',
            'priority'  => '1'

        );
        
        $this->load->library('email', $config);

        if($from2 != '') {
            $this->email->from($from1, $from2);
        } else {
            $this->email->from($from1);
        }

        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);

        return $this->email->send(FALSE);
    }

    function request_otp($email, $name, $category)  
    {

        $this->db->from('tim')->where(['nama' => $name, 'kategori' => $category]);
        $query = $this->db->get();
        if($query->num_rows() > 0 && $query->row_array()['tim_status'] == 2)
        {
            $id = $query->row_array()['id'];
            $gusername = $this->generate_username($id);
            $gpassword = $this->generate_password($id);

            $thenewotp = mt_rand(0,9) . mt_rand(0,9) . mt_rand(0,9) . mt_rand(0,9) . mt_rand(0,9) . mt_rand(0,9);
            
            $sended = $this->send_phpmailer($email, 'ARA 2021 | ACCOUNT',
            'JANGAN MEMBAGIKAN KODE OTP ATAUPUN USERNAME ATAU PASSWORD AKUN ARA2021 ANDA!<br>
            Kode OTP tidak memiliki batas waktu kadaluarsa<br>
            <br>
            Kode OTP untuk<br>
            Nama Tim    : ' . $name .'<br>
            Kategori    : ' . strtoupper($category) . '<br>
            adalah ' . $thenewotp . '<br>
            <br>
            Aktifkan akun ARA2021 tim kamu dengan mengunjungi '. 
            base_url() . 'otp/activate<br>
            <br>
            Informasi login untuk akun tim kamu<br>
            Username    : ' . $gusername . '<br>
            Password    : ' . $gpassword . '<br>
            <br>
            Masuk ke dashboard ARA2021 dengan mengunjungi
            ' . base_url() . 'login');

            $kategori = '';
            switch($category) {
                default:
                    $kategori = 1;
                    break;
                case 'iot':
                    $kategori = 2;
                    break;
                case 'olimpiade':
                    $kategori = 3;
                    break;
            }
            
            if($sended) {
                
                $this->db->insert('otp', ['email' => $email, 'id_tim_otp' => $query->row_array()['id'], 'nama_otp' => $name, 'kategori_lomba' => $kategori, 'code_otp' => $thenewotp]);

                $this->db->where(['id' => $id]);
                $this->db->update('tim', ['usernamelogin_tim' => $gusername]);

                $this->db->where(['id' => $id]);
                $this->db->update('tim', ['pass' => md5('taburin_garem_ah...' . $gpassword . 'biar_sedep_gitu_kan_ya...')]);
                
                return true;
            }
				
        }  
        else  
        {  
            return false;  
        }  
    }
    
    function request_otp_by_tim_id($tim_id, $email)  
    {

        $this->db->from('tim')->where(['id' => $tim_id]);
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            $id = $query->row_array()['id'];
            $gusername = $this->generate_username($id);
            $gpassword = $this->generate_password($id);

            $thenewotp = mt_rand(0,9) . mt_rand(0,9) . mt_rand(0,9) . mt_rand(0,9) . mt_rand(0,9) . mt_rand(0,9);
            
            $sended = $this->send_phpmailer($email, 'ARA 2021 | ACCOUNT',
            'JANGAN MEMBAGIKAN KODE OTP ATAUPUN USERNAME ATAU PASSWORD AKUN ARA2021 ANDA!<br>
            Kode OTP tidak memiliki batas waktu kadaluarsa<br>
            <br>
            Kode OTP untuk<br>
            Nama Tim    : ' . $query->row_array()['nama'] .'<br>
            Kategori    : ' . strtoupper($query->row_array()['kategori']) . '<br>
            adalah ' . $thenewotp . '<br>
            <br>
            Aktifkan akun ARA2021 tim kamu dengan mengunjungi '. 
            base_url() . 'otp/activate<br>
            <br>
            Informasi login untuk akun tim kamu<br>
            Username    : ' . $gusername . '<br>
            Password    : ' . $gpassword . '<br>
            <br>
            Masuk ke dashboard ARA2021 dengan mengunjungi
            ' . base_url() . 'login');

            $kategori = '';
            switch($query->row_array()['kategori']) {
                default:
                    $kategori = 1;
                    break;
                case 'iot':
                    $kategori = 2;
                    break;
                case 'olimpiade':
                    $kategori = 3;
                    break;
            }
            
            if($sended) {
                
                $this->db->insert('otp', ['email' => $email, 'id_tim_otp' => $query->row_array()['id'], 'nama_otp' => $query->row_array()['nama'], 'kategori_lomba' => $kategori, 'code_otp' => $thenewotp]);

                $this->db->where(['id' => $id]);
                $this->db->update('tim', ['usernamelogin_tim' => $gusername]);

                $this->db->where(['id' => $id]);
                $this->db->update('tim', ['pass' => md5('taburin_garem_ah...' . $gpassword . 'biar_sedep_gitu_kan_ya...')]);
                
                $this->db->where(['id' => $id]);
                $this->db->update('tim', ['tim_status' => '2']);
                
                return true;
            }
				
        }  
        else  
        {  
            return false;  
        }  

        return false;
    }

    function submit_otp($username, $otp)
    {
        
        $this->db->where(['usernamelogin_tim' => $username]);
        $query = $this->db->get("tim");

        if($query->num_rows() > 0 && $query->row_array()['tim_status'] == 2) {
            $id = $query->row_array()['id'];

            $this->db->where(['id_tim_otp' => $query->row_array()['id']])->order_by('req_otp', 'DESC');
            $theotp = $this->db->get("otp");

            if($theotp->num_rows() > 0 &&  $otp == $theotp->row_array()['code_otp'])
            {
                $kategori = '';
                switch($query->row_array()['kategori']) {
                    default:
                        $kategori = 1;
                        break;
                    case 'iot':
                        $kategori = 2;
                        break;
                    case 'olimpiade':
                        $kategori = 3;
                        break;
                }

                $qem = $this->db->get_where($query->row_array()['kategori'], ['nama_tim' => $query->row_array()['nama']]);

                if($qem->num_rows() > 0) {
                        
                    $this->db->where(['id' => $id]);
                    $this->db->update('tim', ['tim_status' => '1']);
                    
                    return true;

                }
                    

            }
        }

        return false;
    }

    function send_webinar_email($email)  
    {
            
        $sended = $this->send_phpmailer($email, 'ARA 2021 | Informasi Webinar Ara Cyber Security',
        "<pre>Halo ITzen!

        Terima kasih telah mendaftar pada ARATALK yang diselenggarakan oleh HMIT ITS! 
        
        bertemakan :
        1. Cyber Security (A Specialist's Sight: Monitoring Attacks and Cyber Threat Hunting)
        
        yang diadakan pada: 
        Tanggal : 6 Maret 2021 (Cyber Security) 
        Waktu : 07:45 - 12.00 WIB
        Platform : Zoom dan Youtube
        
        Link Webinar:
        intip.in/aratalk2021zoom1
        
        Para peserta webinar harap memperhatikan poin poin sebagai berikut :
        1. Peserta sudah bisa masuk ke room Zoom Meeting pada jam 07.45
        2. Disarankan menggunakan format nama: Nama_Instansi
        3. Pada awal dan akhir acara akan diberikan link Presensi dan Feedback yang hanya dibuka selama 30 menit. KEDUA link tersebut merupakan salah satu syarat mendapatkan e-Sertifikat
        4. Syarat kedua mendapat e-Sertifikat adalah telah memenuhi persyaratan pendaftaran webinar Aratalk ini (share poster dll yang wajib)
        5. Akan ada sesi breaktime setelah dilakukan Penyampaian Materi 
        6. Karena beberapa alasan, peserta tidak diberikan akses untuk melakukan on mic
        7. Pada sesi Q&A, pertanyaan dapat diajukan melalui Platform Sli.do yang akan dibagikan linknya nanti
        8. Peserta yang memiliki masalah dengan Zoom Meeting-nya, bisa mengakses Webinar melalui link Youtube yang telah disediakan
        9. Apabila ada masalah teknis lain bisa menghubungi Panitia melalui chat Zoom Meeting ataupun Grup Peserta
        
        Ikuti juga social media kami untuk mendapatkan informasi terbaru:
        @ara_its
        @hmit_its
        
        Best Regards, 
        ARA</pre>");
        
        if($sended) {
            
            return true;
        }

        return false;
    }
}

?>