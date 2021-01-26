<!--Footer Starts-->
<footer class="page-footer">
  <div class="row">
    <img class="responsive-img" style="left:0; width:100%; position:absolute;" src="<?php echo base_url(); ?>assets/images/footer_taskbar.png">
  </div>
</footer>
<!--Footer Ends-->

<!-- Script Start -->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/materialize.js"></script>
<script src="<?php echo base_url(); ?>assets/js/init.js"></script>
<script src="<?php echo base_url(); ?>assets/js/script.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- Script End -->

</body>

</html>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<script>AOS.init();</script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems);
  });
</script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    var elems2 = document.querySelectorAll('.collapsible');
    var instances2 = M.Collapsible.init(elems2, { edge: 'right' });
  });
</script>
<script>
  $(document).ready(function () {
    $('#tim').change(function () {
      var tim = $('#tim').val();
      if (tim != '') {
        $.ajax({
          url: "<?php echo base_url(); ?>welcome/check_tim",
          method: "POST",
          data: { tim: tim },
          success: function (data) {
            $('#team_result').html(data);
          }
        });
      }
    });
  });  
</script>
<script>
  $(document).ready(function () {
    $('#email').change(function () {
      var email = $('#email').val();
      if (email != '') {
        $.ajax({
          url: "<?php echo base_url(); ?>welcome/check_email",
          method: "POST",
          data: { email: email },
          success: function (data) {
            $('#email_result').html(data);
          }
        });
      }
    });
  });  
</script>
<script>
  $(document).ready(function () {
    $('#wa').change(function () {
      var wa = $('#wa').val();
      if (wa != '') {
        $.ajax({
          url: "<?php echo base_url(); ?>welcome/check_no",
          method: "POST",
          data: { wa: wa },
          success: function (data) {
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
    if (element == 'foto1' || element == 'foto2' || element == 'foto3') {
      var allowedExtensions = /(\.jpg|\.png)$/i;
      var msg = 'Hanya bisa upload file berekestensi *.jpg dan *.png.';
    } else {
      var allowedExtensions = /(\.pdf|\.jpg|\.png|\.zip)$/i;
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
        const file = Math.round((fsize / 2048));
        // The size of the file. 
        if (file >= 2048) {
          alert(
            "Ukuran file terlalu besar, ukuran maksimal adalah 2mb");
        } else {
          document.getElementById(element + '-size').innerHTML = '<b>'
            + file + '</b> KB';
        }
      }
    }
  } 
</script>
<script>
  $(function () {
  $("#form").keypress(function (e) {
    var keyCode = e.keyCode || e.which;

            //Regex for Valid Characters i.e. Alphabets and Numbers.
            var regex = /^[A-Za-z0-9 @._* \n\r]+$/;
            
            //Validate TextBox value against the Regex.
            var isValid = regex.test(String.fromCharCode(keyCode));
            if (!isValid) {
              alert("Only Alphabets and Numbers allowed.");
            }
            
            return isValid;
          });
});
</script>
<script>
  $(function () {
  $("#abstrakIOT").keypress(function (e) {
    var keyCode = e.keyCode || e.which;

            //Regex for Valid Characters i.e. Alphabets and Numbers.
            var regex = /^[A-Za-z0-9 ~`!@#$%^&*()_+=?'";:.,\\\{\}\[\]\|\/\-\n\r]+$/;
            
            //Validate TextBox value against the Regex.
            var isValid = regex.test(String.fromCharCode(keyCode));
            if (!isValid) {
              alert("Only Alphabets and Numbers allowed.");
            }
            
            return isValid;
          });
});
</script>