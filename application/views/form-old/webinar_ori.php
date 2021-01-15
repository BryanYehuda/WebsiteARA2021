<!--Register Webinar Ends-->
      <div class="register-webinar">

       <!--Register Webinar Form Start-->
       <div class="row">
          <div class="col s10 offset-s1">
            <div class="card black">
              <div class="card-content white-text">
                <span class="card-title center-align">Register Form Webinar ARA 2021</span>
                <br>
                <div class="row">
                    <form class="col s12" action="<?php echo base_url().'daftar/webinar' ?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                      <div class="input-field col s12 l6">
                        <input id="email" name="email" type="email" class="validate">
                        <label for="email">Alamat email</label>
                        <span id="email_result"></span>
                      </div>
                      <div class="input-field col s12 l6">
                        <input id="nama_lengkap" name="nama" type="text" class="validate">
                        <label for="nama_lengkap">Nama Lengkap</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12 l6">
                        <input id="institusi" name="institusi" type="text" class="validate">
                        <label for="institusi">Institusi</label>
                      </div>
                      <div class="input-field col s12 l6">
                        <input id="wa" name="wa" type="number" class="validate">
                        <label for="wa">Nomor WhatsApp</label>
                        <span id="wa_result"></span>
                      </div>
                    </div>
                    <div class="row">
                        <div class="file-field input-field">
                          <div class="btn blue">
                            <span>Upload Bukti</span>
                            <input type="file" id="bayar" name="bayar" onchange="return fileValidation('bayar')">
                          </div>
                          <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                            <span id="bayar-size"></span>
                          </div>
                        </div>
                    </div>
                    <div class="row">
                      <div class="center-align">
                        <button class="btn blue waves-effect waves-light center-align" type="submit" name="action">Submit
                          <i class="material-icons right">send</i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Register Webinar Form Ends-->

      </div>
      <!--Register Webinar Ends-->