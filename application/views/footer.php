
</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</html>
<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
<script>  
   $(document).ready(function(){  
      $('#tim').change(function(){  
         var tim = $('#tim').val();  
         if(tim != '')  
         {  
            $.ajax({  
               url:"<?php echo base_url(); ?>welcome/check_tim",  
               method:"POST",  
               data:{tim:tim},  
               success:function(data){  
                  $('#team_result').html(data);  
              }  
          });  
        }  
    });  
  });  
</script>
<script>  
   $(document).ready(function(){  
      $('#email').change(function(){  
         var email = $('#email').val();  
         if(email != '')  
         {  
            $.ajax({  
               url:"<?php echo base_url(); ?>welcome/check_email",  
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
<script>  
   $(document).ready(function(){  
      $('#wa').change(function(){  
         var wa = $('#wa').val();  
         if(wa != '')  
         {  
            $.ajax({  
               url:"<?php echo base_url(); ?>welcome/check_no",  
               method:"POST",  
               data:{wa:wa},  
               success:function(data){  
                  $('#wa_result').html(data);  
              }  
          });  
        }  
    });  
  });  
</script>
<script> 
    function fileValidation(element) { 
        var fileInput =  
        document.getElementById(element); 

        var filePath = fileInput.value; 

            // Allowing file type
            if (element == 'foto1'|| element == 'foto2' || element == 'foto3') {
                var allowedExtensions = /(\.jpg|\.png)$/i;
                var msg = 'Hanya bisa upload file berekestensi *.jpg dan *.png.';
            } else {
                var allowedExtensions = /(\.pdf|\.jpg|\.png)$/i; 
                var msg = 'Hanya bisa upload file berekestensi *.pdf, *.jpg dan *.png.';
            }


            if (!allowedExtensions.exec(filePath)) { 
                alert(msg); 
                fileInput.value = ''; 
                return false; 
            }

            if (fileInput.files.length > 0) { 
                for (const i = 0; i <= fileInput.files.length - 1; i++) { 

                    const fsize = fileInput.files.item(i).size; 
                    const file = Math.round((fsize / 1024)); 
                // The size of the file. 
                if (file >= 1024) { 
                    alert( 
                      "Ukuran file terlalu besar, ukuran maksimal adalah 1mb"); 
                } else { 
                    document.getElementById(element+'-size').innerHTML = '<b>'
                    + file + '</b> KB'; 
                } 
            } 
        } 
    } 
</script> 