<div class="container-designed">

  <div class="apple-window-designed">

    <div data-aos="zoom-in">

      <div class="header-designed">
        <ul style="margin: 0;">
          <li class="button-circle-designed" style="background-color: #AC8FBC;">
          </li>
          <li class="button-circle-designed" style="background-color: #AAD8B6;">
          </li>
          <li class="button-circle-designed" style="background-color: #E7A996;">
          </li>
        </ul>
      </div>

      <div class="content-designed">
        <div class="row">
          <div class="col s12 center-align"><br>
            <span class="form-title-designed"><strong>Tata Cara Pendaftaran Webinar</strong></span>
          </div>
        </div>
        <div class="row">
          <div class="col s12" style="text-align:justify">
            <p>Periode Pendaftaran: 6 Februari 2021 - 3 Maret 2021<br></p>
            <p>Catatan : Pendaftaran tidak dipungut biaya.</p>
            <p>Contact Person Webinar<br>
              1. Clae : clarissafatimah (line) / 081515544997<br>
            2. Nisa : revinaerha (line) / 081371806484</p>
          </div>  
        </div>
      </div>
      <br><br>

    </div>

    <div data-aos="zoom-in">

      <div class="header-designed">
        <ul style="margin: 0;">
          <li class="button-circle-designed" style="background-color: #AC8FBC;">
          </li>
          <li class="button-circle-designed" style="background-color: #AAD8B6;">
          </li>
          <li class="button-circle-designed" style="background-color: #E7A996;">
          </li>
        </ul>
      </div>

      <div class="content-designed">
        <div class="register-webinar">
          <div class="row"><br>
            <div class="col s12 center-align">
              <span class="form-title-designed "><strong>Form Registrasi Webinar ARA 2021</strong></span>
              <br>
            </div>
            <div class="row">
              <form id="form" name="form" class=" col s12" action="<?php echo base_url().'daftar/webinar' ?>" method="post" enctype="multipart/form-data">
                <br><br>
                <div class="row">
                  <div class="col s12 l6">
                    <span class="form-input-title-designed">Pilih Webinar: <span class="required-star-designed">*</span></span>
                  </div>
                  <div class="col s12 l6">
                    <p>
                      <label>
                        <input type="checkbox" class="filled-in" name="webinar[]" value="Webinar-CTF" />
                        <span>Webinar CTF</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input type="checkbox" class="filled-in" name="webinar[]" value="Webinar-IoT" />
                        <span>Webinar IoT</span>
                      </label>
                    </p>
                  </div>
                </div>
                <div class="row">
                  <div class="col s12 l6">
                    <span class="form-input-title-designed">Email: <span class="required-star-designed">*</span></span>
                  </div>
                  <div class="col s12 l6">
                    <input class="form-input-designed" id="email" name="email" type="email" class="validate" required>
                    <span id="email_result"></span>
                  </div>
                </div>
                <div class="row">
                  <div class="col s12 l6">
                    <span class="form-input-title-designed">Nama Lengkap: <span class="required-star-designed">*</span></span>
                  </div>
                  <div class="col s12 l6">
                    <input class="form-input-designed" id="nama_lengkap" name="nama" class="validate" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col s12 l6">
                    <span class="form-input-title-designed">Institusi: <span class="required-star-designed">*</span></span>
                  </div>
                  <div class="col s12 l6">
                    <input class="form-input-designed" id="institusi" name="institusi" class="validate" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col s12 l6">
                    <span class="form-input-title-designed">Nomor WhatsApp: <span class="required-star-designed">*</span></span>
                  </div>
                  <div class="col s12 l6">
                    <input class="form-input-designed" id="wa" name="wa" type="number" class="validate" required>
                    <span id="wa_result"></span>
                  </div>
                </div>
                <div class="row">
                  <div class="col s12 l12">
                    <span class="form-title-designed">Share Poster IoT ARA 2021 di Instastory</span>
                  </div>
                </div>
                <div class="row">
                  <div class="col s12 l12">
                    <span class="form-input-title-designed">Poster didownload di 
                      <a href="https://drive.google.com/file/d/1hW0SzI6lzE0cfnFkTViFMMQ6Y_DJvs2Z/view?usp=sharing">sini</a></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col s12 l6">
                      <span class="form-input-title-designed">Bukti Share Poster Webinar ARA 2021:
                        <span class="required-star-designed">*</span></span>
                      </div>
                      <div class="col s12 l6">
                        <div class="file-field input-field">
                          <div class="btn upload-button-designed">
                            <input type="file" id="share2" name="share2"
                            onchange="return fileValidation('share2')" required>
                            <label for="share2">
                              <img class="upload-button-image-designed"
                              src="<?php echo base_url('assets/images/upload_black.png') ?>"
                              style="max-height: 90%;">
                              <span class="upload-button-label-designed">Upload</span>
                            </label>
                          </div>
                          <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                            <span id="share2-size"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                  <div class="col s12 l12">
                    <span class="form-input-title-designed">Poster didownload di 
                      <a href="https://drive.google.com/file/d/1hW0SzI6lzE0cfnFkTViFMMQ6Y_DJvs2Z/view?usp=sharing">sini</a></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col s12 l6">
                      <span class="form-input-title-designed">Bukti Share Poster Webinar ARA 2021:
                        <span class="required-star-designed">*</span></span>
                      </div>
                      <div class="col s12 l6">
                        <div class="file-field input-field">
                          <div class="btn upload-button-designed">
                            <input type="file" id="share" name="share"
                            onchange="return fileValidation('share')" required>
                            <label for="share">
                              <img class="upload-button-image-designed"
                              src="<?php echo base_url('assets/images/upload_black.png') ?>"
                              style="max-height: 90%;">
                              <span class="upload-button-label-designed">Upload</span>
                            </label>
                          </div>
                          <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                            <span id="share-size"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col s12 l12">
                        <span class="form-input-title-designed">Link Instagram 
                          <a href="https://www.instagram.com/telkomindonesia/">@telkomindonesia</a></span>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col s12 l6">
                          <span class="form-input-title-designed">Bukti Follow @telkomindonesia:
                            <span class="required-star-designed">*</span></span>
                          </div>
                          <div class="col s12 l6">
                            <div class="file-field input-field">
                              <div class="btn upload-button-designed">
                                <input type="file" id="telkom1" name="telkom1"
                                onchange="return fileValidation('telkom1')" required>
                                <label for="telkom1">
                                  <img class="upload-button-image-designed"
                                  src="<?php echo base_url('assets/images/upload_black.png') ?>"
                                  style="max-height: 90%;">
                                  <span class="upload-button-label-designed">Upload</span>
                                </label>
                              </div>
                              <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                                <span id="telkom1-size"></span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                      <div class="col s12 l12">
                        <span class="form-input-title-designed">Link Instagram 
                          <a href="https://www.instagram.com/livingintelkom/">@livingintelkom</a></span>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col s12 l6">
                          <span class="form-input-title-designed">Bukti Follow @livingintelkom:
                            <span class="required-star-designed">*</span></span>
                          </div>
                          <div class="col s12 l6">
                            <div class="file-field input-field">
                              <div class="btn upload-button-designed">
                                <input type="file" id="telkom2" name="telkom2"
                                onchange="return fileValidation('telkom2')" required>
                                <label for="telkom2">
                                  <img class="upload-button-image-designed"
                                  src="<?php echo base_url('assets/images/upload_black.png') ?>"
                                  style="max-height: 90%;">
                                  <span class="upload-button-label-designed">Upload</span>
                                </label>
                              </div>
                              <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                                <span id="telkom2-size"></span>
                              </div>
                            </div>
                          </div>
                        </div>
                          <div class="row">
                            <div class="col s12 l6">
                              <span class="form-input-title-designed">Bukti Upload Twibbon:</span>
                            </div>
                            <div class="col s12 l6">
                              <div class="file-field input-field">
                                <div class="btn upload-button-designed">
                                  <input type="file" id="twibbon" name="twibbon"
                                  onchange="return fileValidation('twibbon')">
                                  <label for="twibbon">
                                    <img class="upload-button-image-designed"
                                    src="<?php echo base_url('assets/images/upload_black.png') ?>"
                                    style="max-height: 90%;">
                                    <span class="upload-button-label-designed">Upload</span>
                                  </label>
                                </div>
                                <div class="file-path-wrapper">
                                  <input class="file-path validate" type="text">
                                  <span id="twibbon-size"></span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <br>
                          <div class="row animate__animated animate__bounce animate__infinite animate__slower animate__delay-1s">
                            <div class="col s12 l12">
                              <br><br><br>
                              <b><span class="form-input-title-designed"><span class="required-star-designed">*</span>Wajib Diisi</span></b>
                            </div>
                          </div>
                          <br><br>
                          <div class="row">
                            <div class="center-align">
                              <button id="submitBtn" class="btn waves-effect waves-light center-align submit-button-form-designed"
                              type="submit" name="action" style="background-color: #64a0cc;">Daftar
                            </button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>
        <script type="text/javascript">
          $(document).ready(function () {
            $('#submitBtn').click(function() {
              checked = $("input[type=checkbox]:checked").length;

              if(!checked) {
                alert("Anda belum memilih webinar yang ingin di ikuti");
                return false;
              }

            });
          });

        </script>