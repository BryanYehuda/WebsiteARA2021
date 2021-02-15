<div class="container-designed">

  <div class="apple-window-designed"><br><br>

    <div class="header-designed">
      <ul style="margin: 0;">
        <li class="button-circle-designed" style="background-color: #AC8FBC;"></li>
        <li class="button-circle-designed" style="background-color: #AAD8B6;"></li>
        <li class="button-circle-designed" style="background-color: #E7A996;"></li>
      </ul>
    </div>

    <div class="content-designed">
      <div class="register-webinar">
        <div class="row"><br>
          <div class="col s12 center-align">
            <span class="form-title-designed "><strong>Profile Kelompok <?= $nama_tim; ?></strong></span>
            <br>
          </div>
          <div class="col s12 center-align">
            <div class="row">
              <br><br>    
              <div class="row">
                <div class="col s12 l6">
                  <span class="form-input-title-designed"><strong>Nama Ketua Kelompok:</strong></span>
                </div>
                <div class="col s12 l6">
                  <span class="form-input-title-designed"><?php if ($nama1 != null) {
                    echo $nama1;
                  } else {
                    echo "-";
                  } ?></span>
                </div>
              </div>
              <div class="row">
                <div class="col s12 l6">
                  <span class="form-input-title-designed"><strong>Nama Anggota Kedua:</strong></span>
                </div>
                <div class="col s12 l6">
                  <span class="form-input-title-designed"><?php if ($nama2 != null) {
                    echo $nama2;
                  } else {
                    echo "-";
                  } ?></span>
                </div>
              </div>
              <div class="row">
                <div class="col s12 l6">
                  <span class="form-input-title-designed"><strong>Nama Anggota Ketiga:</strong></span>
                </div>
                <div class="col s12 l6">
                  <span class="form-input-title-designed"><?php if ($nama3 != null) {
                    echo $nama3;
                  } else {
                    echo "-";
                  } ?></span>
                </div>
              </div>
              <div class="row">
                <div class="col s12 l6">
                  <span class="form-input-title-designed"><strong>Institusi:</strong></span>
                </div>
                <div class="col s12 l6">
                  <span class="form-input-title-designed"><?= $institusi ?></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><br><br>

    <div class="header-designed">
      <ul style="margin: 0;">
        <li class="button-circle-designed" style="background-color: #AC8FBC;"></li>
        <li class="button-circle-designed" style="background-color: #AAD8B6;"></li>
        <li class="button-circle-designed" style="background-color: #E7A996;"></li>
      </ul>
    </div>

    <div class="content-designed">
      <div class="register-webinar">
        <div class="row"><br>
          <div class="col s12 center-align">
            <span class="form-title-designed "><strong>Status Perlombaan Anda</strong></span>
            <br>
          </div>
          <div class="col s12 center-align">
            <div class="row">
              <br><br>
              <?php if ($status == 1) { ?>
                <div class="row">
                  <div class="col s12 center-align">
                    <img class="responsive-img" src="<?php echo base_url(); ?>assets/images/AkunTerverifikasi.png">
                    <!-- Status 1 -->
                  </div>
                </div>
              <?php } else if ($status == 2) { ?>
                <div class="row">
                  <div class="col s12 center-align">
                    <img class="responsive-img" src="<?php echo base_url(); ?>assets/images/LolosPenyisihan.png">
                    <!-- Status 2 -->
                  </div>
                </div>
              <?php } else if ($status == 3) { ?>
                <div class="row">
                  <div class="col s12 center-align">
                    <img class="responsive-img" src="<?php echo base_url(); ?>assets/images/MenangJuara1.png">
                    <!-- Status 3 -->
                  </div>
                </div>
              <?php } else if ($status == 4) { ?>
                <div class="row">
                  <div class="col s12 center-align">
                    <img class="responsive-img" src="<?php echo base_url(); ?>assets/images/MenangJuara2.png">
                    <!-- Status 4 -->
                  </div>
                </div>
              <?php } else if ($status == 5) { ?>
                <div class="row">
                  <div class="col s12 center-align">
                    <img class="responsive-img" src="<?php echo base_url(); ?>assets/images/MenangJuara3.png">
                    <!-- Status 5 -->
                  </div>
                </div>
              <?php } else if ($status == 6) { ?>
                <div class="row">
                  <div class="col s12 center-align">
                    <img class="responsive-img" src="<?php echo base_url(); ?>assets/images/TidakLolosPenyisihan.png">
                    <!-- Status 6 -->
                  </div>
                </div>
              <?php } else if ($status == 7) { ?>
                <div class="row">
                  <div class="col s12 center-align">
                    <img class="responsive-img" src="<?php echo base_url(); ?>assets/images/TidakLolosFinal.png">
                    <!-- Status 7 -->
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div><br><br>

    <div class="header-designed">
      <ul style="margin: 0;">
        <li class="button-circle-designed" style="background-color: #AC8FBC;"></li>
        <li class="button-circle-designed" style="background-color: #AAD8B6;"></li>
        <li class="button-circle-designed" style="background-color: #E7A996;"></li>
      </ul>
    </div>

    <div class="content-designed">
      <div class="register-webinar">
        <div class="row"><br>
          <div class="col s12 center-align">
            <span class="form-title-designed "><strong>Dashboard Capture The Flag</strong></span>
            <br><br><br>
          </div>
          <div class="col s12 center-align">
            <div class="row">
              <div class="col s12 center-align">
                <span class="form-input-title-designed">Ooops... Sepertinya kamu terlalu cepat kemari, silahkan tunggu informasi terbaru di sosial media kami ya</span>
              </div><br><br>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><br><br>


</div>
</div>