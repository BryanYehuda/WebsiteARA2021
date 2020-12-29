<!DOCTYPE html>  
 <html>  
 <head>  
      <title>Webslesson | <?php echo $title; ?></title>  
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />  
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
 </head>  
 <body>  
      <div class="container" style="width:600px">  
           <br /><br /><br />  
           <h3><?php echo $title; ?></h3>  
           <br />  
           <label>Enter Email</label>  
           <input type="text" name="email" id="email" class="form-control" />  
           <span id="email_result"></span>  
           <br /><br />  
           <label>Enter Password</label>  
           <input type="text" name="password" id="password" class="form-control" />  
      </div>  
 </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#email').change(function(){  
           var email = $('#email').val();  
           if(email != '')  
           {  
                $.ajax({  
                     url:"<?php echo base_url(); ?>coba/check_email_avalibility",  
                     method:"POST",  
                     data:{email:email},  
                     success:function(data){  
                          $('#email_result').html(data);  
                     }  
                });  
           }  
      });  
 });  
 </script>  