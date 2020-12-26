<?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class Coba extends CI_Controller {  
      //functions  
      function email_availibility()  
      {  
           $data["title"] = "Codeigniter Tutorial - Check Email availibility using Ajax";  
           $this->load->view("email_availibility", $data);  
      }  
      function check_email_avalibility()  
      {  
           // if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))  
           // {  
           //      echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> Invalid Email</span></label>';  
           // }  
           // else  
           // {  
                $this->load->model("main_model");  
                if($this->main_model->is_email_available($_POST["email"]))  
                {  
                     echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> Email Already register</label>';  
                }  
                else  
                {  
                     echo '<label class="text-success"><span class="glyphicon glyphicon-ok"></span> Email Available</label>';  
                }  
           // }  
      }       
 }  
 ?>  