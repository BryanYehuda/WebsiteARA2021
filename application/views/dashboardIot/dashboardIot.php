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
                    <img class="responsive-img" src="<?php echo base_url(); ?>assets/images/LolosBabak1.png">
                    <!-- Status 2 -->
                  </div>
                </div>
                <p>Untuk mencari tahu tim mana saja yang lolos babak 1 bisa <a href="https://drive.google.com/file/d/1JEic42XlWBtvMnqBwiyihoPYPLA9gnge/view?usp=drivesdk">Klik Disini</a> </p>
              <?php } else if ($status == 3) { ?>
                <div class="row">
                  <div class="col s12 center-align">
                    <img class="responsive-img" src="<?php echo base_url(); ?>assets/images/LolosBabak2.png">
                    <!-- Status 3 -->
                  </div>
                </div>
              <?php } else if ($status == 4) { ?>
                <div class="row">
                  <div class="col s12 center-align">
                    <img class="responsive-img" src="<?php echo base_url(); ?>assets/images/MenangJuara1.png">
                    <!-- Status 4 -->
                  </div>
                </div>
              <?php } else if ($status == 5) { ?>
                <div class="row">
                  <div class="col s12 center-align">
                    <img class="responsive-img" src="<?php echo base_url(); ?>assets/images/MenangJuara2.png">
                    <!-- Status 5 -->
                  </div>
                </div>
              <?php } else if ($status == 6) { ?>
                <div class="row">
                  <div class="col s12 center-align">
                    <img class="responsive-img" src="<?php echo base_url(); ?>assets/images/MenangJuara3.png">
                    <!-- Status 6 -->
                  </div>
                </div>
              <?php } else if ($status == 7) { ?>
                <div class="row">
                  <div class="col s12 center-align">
                    <img class="responsive-img" src="<?php echo base_url(); ?>assets/images/TidakLolosBabak1.png">
                    <!-- Status 7 -->
                  </div>
                </div>
              <?php } else if ($status == 8) { ?>
                <div class="row">
                  <div class="col s12 center-align">
                    <img class="responsive-img" src="<?php echo base_url(); ?>assets/images/TidakLolosBabak2.png">
                    <!-- Status 8 -->
                  </div>
                </div>
              <?php } else if ($status == 9) { ?>
                <div class="row">
                  <div class="col s12 center-align">
                    <img class="responsive-img" src="<?php echo base_url(); ?>assets/images/TidakLolosFinal.png">
                    <!-- Status 9 -->
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div><br><br>

    <?php if ($status == 1) { ?>
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
              <span class="form-title-designed "><strong>Informasi Abstrak Kelompok Anda</strong></span>
              <br>
            </div>
            <div class="col s12 center-align">
              <div class="row">
                <br><br>    
                <div class="row">
                  <div class="col s12">
                    <span class="form-input-title-designed">Judul:</span>
                  </div>
                </div>
                <div class="row">
                  <div class="col s12 input-field">
                    <textarea id="textarea1" style="text-align: justify; padding: 14px;" class="form-input-designed-textarea materialize-textarea" id="disabled" disabled><?php echo $judul ?></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col s12">
                    <span class="form-input-title-designed">Abstrak:</span>
                  </div>
                </div>
                <div class="row">
                  <div class="col s12 input-field">
                    <textarea id="textarea1" style="text-align: justify; padding: 14px;" class="form-input-designed-textarea materialize-textarea" id="disabled" disabled><?php echo $abstrak ?></textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><br><br>
    <?php } ?>

    <?php if ($status == 2) { ?>
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
              <span class="form-title-designed "><strong>Upload File KTI untuk Penyelisihan Babak 2</strong></span>
              <br><br>
            </div>
            <?php if (!isset($file)) { ?>

              <form id="form" name="form" class=" col s12" action="<?php echo base_url().'iot/submit_kti' ?>" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="col s12 l6">
                    <span class="form-input-title-designed">File KTI Lengkap:
                      <span class="required-star-designed">*</span></span>
                    </div>
                    <div class="col s12 l6">
                      <div class="file-field input-field">
                        <div class="btn upload-button-designed">
                          <input type="file" id="kti" name="kti"
                          onchange="return fileValidation('kti')" required>
                          <label for="kti">
                            <img class="upload-button-image-designed"
                            src="<?php echo base_url('assets/images/upload_black.png') ?>"
                            style="max-height: 90%;">
                            <span class="upload-button-label-designed">Upload</span>
                          </label>
                        </div>
                        <div class="file-path-wrapper">
                          <input class="file-path validate" type="text">
                          <span id="kti-size"></span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="center-align">
                      <button class="btn waves-effect waves-light center-align submit-button-form-designed"
                      type="submit" name="action" style="background-color: #64a0cc;">Submit
                    </button>
                  </div>
                </div>
              </form>
            <?php } else { ?>
              <p align="center">Anda sudah Upload File KTI</p>
            <?php } ?>
          </div>
        </div>
      </div><br><br>
    <?php } ?>

    <?php if ($status == 3) { ?>
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
              <span class="form-title-designed "><strong>Zoom Babak Final KTI IoT</strong></span>
              <br><br>
            </div>
            <div class="row">
              <div class="center-align">
                <a href="https://google.com" target="_blank" class="btn waves-effect waves-light center-align submit-button-form-designed"
                type="submit" name="action" style="background-color: #64a0cc;">Join Zoom
              </a>
            </div>
          </div>
        </div>
      </div>
    </div><br><br>
  <?php } ?>

</div>
</div>