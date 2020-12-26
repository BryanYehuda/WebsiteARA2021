<?php  
 class Main_model extends CI_Model  
 {  
      function is_email_available($email)  
      {  
           $this->db->where('nama', $email);  
           $query = $this->db->get("tim");  
           if($query->num_rows() > 0)  
           {  
                return true;  
           }  
           else  
           {  
                return false;  
           }  
      }  
 }  
 ?>  