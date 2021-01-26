<?php 

class M_data extends CI_Model{
    function input_data($data,$table){
        $this->db->insert($table,$data);
    }

    function is_tim_available($nama_tim)  
    {
        $this->db->where('nama', $nama_tim);  
        $query = $this->db->get("tim");  
        if($query->num_rows() > 0){
            return true;
        } else {
            return false;  
        }
    }

    function is_email_available($email)  
    {
        $this->db->where('email', $email);  
        $query = $this->db->get("webinar");  
        if($query->num_rows() > 0)  
        {  
            return true;  
        }  
        else  
        {  
            return false;  
        }  
    }

    function is_wa_available($no_wa)  
    {
        $this->db->where('no_wa', $no_wa);  
        $query = $this->db->get("webinar");  
        if($query->num_rows() > 0)  
        {  
            return true;  
        }  
        else  
        {  
            return false;  
        }  
    }

    function panitia_search($table, $col, $keyword) {
        $this->db->like($col, $keyword);
        $query  =   $this->db->get($table);
        return $query->result();
    }

    function get_where($table,$where){
        $this->db->where($where);
        return $this->db->get($table);
    }
}

?>