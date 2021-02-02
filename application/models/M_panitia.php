<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
class M_Panitia extends CI_Model {

    function get_data($table) {
        if($table == 'webinar')
            return $this->db->get($table)->result();

        $tabletime = $table;
        
        if($table == 'olimpiade')
            $tabletime = 'olim';

        return $this->db->select('team.nama, team.id, team.tim_status, team.bukti_bayar, cur.*')->from('tim team')->join($table . ' cur', 'team.nama = cur.nama_tim', 'LEFT')->order_by('cur.' . $tabletime . '_timestamp', 'DESC')->where("cur.nama_tim is not null and team.nama is not null and team.tim_status > 0")->get()->result();
    }

    function get_data_all_tim() {
        return $this->db->get('tim');
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
        return $this->db->get_where('panitia', ['username_panitia' => $user, 'password_panitia' => $pass]);
    }

    function writelog($id, $name) {
        $this->db->insert('panitia_log', ['log_panitia_id' => $id, 'log_panitia_accessor_name_panitia' => $name]);
    }

}