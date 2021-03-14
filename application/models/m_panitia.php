<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class M_Panitia extends CI_Model {

    function get_data($table) {
        if($table == 'webinar')
            return $this->db->get($table)->result();

        $tabletime = $table;
        
        if($table == 'olimpiade')
            $tabletime = 'olim';

        if($table == 'iot')
            return $this->db->select('team.nama, team.id, team.tim_status, team.bukti_bayar, cur.*, abstrac.id_tim, abstrac.judul, abstrac.abstrak, abstrac.timestamp, kti_iot.id_tim, kti_iot.kti, kti_iot.status')->from('tim team, abstrak_iot abstrac')->join($table . ' cur', 'team.nama = cur.nama_tim AND abstrac.id_tim = team.id', 'LEFT')->join('kti', 'team.id = kti_iot.id_tim', 'LEFT')->order_by('cur.' . $tabletime . '_timestamp', 'DESC')->where("cur.nama_tim is not null and team.nama is not null and team.tim_status > 0")->get()->result();        
        
        return $this->db->select('team.nama, team.id, team.tim_status, team.bukti_bayar, cur.*')->from('tim team')->join($table . ' cur', 'team.nama = cur.nama_tim', 'LEFT')->order_by('cur.' . $tabletime . '_timestamp', 'DESC')->where("cur.nama_tim is not null and team.nama is not null and team.tim_status > 0")->get()->result();
    }
    
    function get_data_of_tim_by_id($id, $table) {
        
        $tabletime = $table;
        
        if($table == 'olimpiade')
            $tabletime = 'olim';
        
        return $this->db->select('team.nama, team.id, team.tim_status, team.bukti_bayar, cur.*')->from('tim team')->join($table . ' cur', 'team.nama = cur.nama_tim', 'LEFT')->order_by('cur.' . $tabletime . '_timestamp', 'DESC')->where("cur.nama_tim is not null and team.nama is not null and team.id = " . $id)->get();
    }

    function get_custom_email_webinar() {
        return $this->db->get('email_webinar')->result();
    }

    function changestatus($table, $table_id, $newvalue) {
        if($table == 'olim')
        $table = 'olimpiade';
        
        $tablewew = $table;

        if($table == 'olimpiade')
        $tablewew = 'olim';



        $this->db->where('id_' . $tablewew, $table_id)->update($table, ['sts' => $newvalue]);
    }

    function fetchteamstatus($table, $team) {
        if($table == 'olim')
            $table = 'olimpiade';

        return $this->db->select($table . '.nama_tim, ' . $table . '.sts')->from($table)->where('nama_tim = ' . $team)->get()->result();
    }

    function search($table, $keyword) {
        switch($table) {
            case 'webinar':
                return $this->db
                ->like('nama',$keyword)
                ->or_like('institusi',$keyword)
                ->or_like('email',$keyword)
                ->or_like('no_wa',$keyword)
                ->get('webinar')->result();
                break;
            case 'ctf':
                return $this->db
                ->like('nama_tim',$keyword)
                ->or_like('nama1',$keyword)
                ->or_like('id1',$keyword)
                ->or_like('email1',$keyword)
                ->or_like('nama2',$keyword)
                ->or_like('id2',$keyword)
                ->or_like('email2',$keyword)
                ->or_like('nama3',$keyword)
                ->or_like('id3',$keyword)
                ->or_like('email3',$keyword)
                ->or_like('alamat',$keyword)
                ->or_like('no_wa',$keyword)
                ->or_like('line',$keyword)
                ->get('ctf')->result();
                break;
            case 'iot':
                return $this->db
                ->like('nama_tim',$keyword)
                ->or_like('nama1',$keyword)
                ->or_like('id1',$keyword)
                ->or_like('email1',$keyword)
                ->or_like('nama2',$keyword)
                ->or_like('id2',$keyword)
                ->or_like('email2',$keyword)
                ->or_like('nama3',$keyword)
                ->or_like('id3',$keyword)
                ->or_like('email3',$keyword)
                ->or_like('alamat',$keyword)
                ->or_like('no_wa',$keyword)
                ->or_like('line',$keyword)
                ->get('iot')->result();
                break;
            case 'olimpiade':
                return $this->db
                ->like('nama_tim',$keyword)
                ->or_like('nama1',$keyword)
                ->or_like('id1',$keyword)
                ->or_like('email1',$keyword)
                ->or_like('nama2',$keyword)
                ->or_like('id2',$keyword)
                ->or_like('nama3',$keyword)
                ->or_like('email2',$keyword)
                ->or_like('id3',$keyword)
                ->or_like('alamat',$keyword)
                ->or_like('no_wa',$keyword)
                ->or_like('email3',$keyword)
                ->or_like('line',$keyword)
                ->get('olimpiade')->result();
                break;
            default:
                return null;
                break;
        }
    }

    function fetchdata($table, $keyword) {
        $this->db->select("*");
        $this->db->from($table);

            // $this->db->select("*")->from($table);
            
            switch($table) {
                case 'webinar':
                    $this->db
                    ->like('nama',$keyword)
                    ->or_like('institusi',$keyword)
                    ->or_like('email',$keyword)
                    ->or_like('no_wa',$keyword);
                    break;
                default:
                    $this->db
                    ->like('nama_tim',$keyword)
                    ->or_like('nama1',$keyword)
                    ->or_like('id1',$keyword)
                    ->or_like('email1',$keyword)
                    ->or_like('nama2',$keyword)
                    ->or_like('id2',$keyword)
                    ->or_like('nama3',$keyword)
                    ->or_like('email2',$keyword)
                    ->or_like('id3',$keyword)
                    ->or_like('alamat',$keyword)
                    ->or_like('no_wa',$keyword)
                    ->or_like('email3',$keyword)
                    ->or_like('line',$keyword);
                    break;
            }
            return $this->db->get();
    }

    function fetchdatawebinar($keyword) {
        $this->db->select("*");
        $this->db->from($table);
        $this->db
                ->like('nama',$keyword)
                ->or_like('institusi',$keyword)
                ->or_like('email',$keyword)
                ->or_like('no_wa',$keyword);
                
        return $this->db->get();
    }

    function checkin($user, $pass) {
        return $this->db->get_where('panitia', ['username_panitia' => $user, 'password_panitia' => $pass, 'status_panitia' => 1]);
    }

    function writelog($id, $name) {
        $this->db->insert('panitia_log', ['log_panitia_id' => $id, 'log_panitia_accessor_name_panitia' => $name]);
    }

}