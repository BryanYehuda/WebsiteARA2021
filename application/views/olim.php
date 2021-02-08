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
                              <span class="form-title-designed"><strong>Tata Cara Pendaftaran Olimpiade</strong></span>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col s12" style="text-align:justify">
                              <p>Periode Pendaftaran : 25 Desember 2020 - 12 Maret 2021 pukul 23:59 WIB.<br></p>
                              <p>Berkas Pendaftaran :<br>
                              Foto/scan 3x4 setiap anggota.<br>
                              Foto/scan kartu pelajar setiap anggota.<br>
                              Bukti pembayaran registrasi sebesar Rp 40.000,- ke rekening BNI 0254251568 A/n Muhammad Hilmi Ramadhan<br>
                              Membaca Guide book yang bisa di dapat melalui <a href="https://drive.google.com/file/d/1LqEygw6i1M1n7nK_yxn6nZB8sWcFt2Gb/view?usp=drivesdk">link ini</a></p>
                              <!--<p>-->
                              <!--    <strong>Catatan:</strong><br>-->
                              <!--    Jika mendaftar bersama 3 tim maka hanya dikenakan biaya pendaftaran sebesar 25 rb per tim, dan wajib mengkonfirmasi pada CP yang tertera-->
                              <!--</p>-->
                              <p>Contact Person Olimpiade<br>
                              1. Haffif : haffifrasya18 (line) / 081322779949<br>
                              2. Tera : terajan (line) / 081217267874</p>
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
                                <span class="form-title-designed "><strong>Form Registrasi Olimpiade ARA 2021</strong></span>
                                <br>
                              </div>
                              <div class="row">
                                <form id="form" name="form" class=" col s12" action="<?php echo base_url().'daftar/olimpiade' ?>" method="post" enctype="multipart/form-data">
                                  <br><br>
                                  <div class="row">
                                    <div class="col s12 l6">
                                      <span class="form-input-title-designed">Nama Tim: <span class="required-star-designed">*</span></span>
                                    </div>
                                    <div class="col s12 l6">
                                      <input class="form-input-designed" id="tim" name="nama_tim" class="validate" required>
                                      <span id="team_result"></span>
                                    </div>
                                  </div>
                                  <!-- Nama Start -->
                                  <div class="row">
                                    <div class="col s12">
                                      <span class="form-title-designed">Nama Lengkap Anggota Tim</span>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col s12 l6">
                                      <span class="form-input-title-designed">Nama Lengkap Ketua: <span class="required-star-designed">*</span></span>
                                    </div>
                                    <div class="col s12 l6">
                                      <input class="form-input-designed" id="nama_ketua" name="nama1" class="validate" required>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col s12 l6">
                                      <span class="form-input-title-designed">Nama Lengkap Anggota 1:</span>
                                    </div>
                                    <div class="col s12 l6">
                                      <input class="form-input-designed" id="nama_anggota_pertama" name="nama2" class="validate">
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col s12 l6">
                                      <span class="form-input-title-designed">Nama Lengkap Anggota 2:</span>
                                    </div>
                                    <div class="col s12 l6">
                                      <input class="form-input-designed" id="nama_anggota_kedua" name="nama3" class="validate">
                                    </div>
                                  </div>
                                  <!-- Nama End -->
                                  <!-- NIM Start -->
                                  <div class="row">
                                    <div class="col s12">
                                      <span class="form-title-designed">Nomor Induk Anggota Tim</span>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col s12 l6">
                                      <span class="form-input-title-designed">NISN Ketua: <span class="required-star-designed">*</span></span>
                                    </div>
                                    <div class="col s12 l6">
                                      <input class="form-input-designed" id="studentid_ketua" name="id1" class="validate" required>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col s12 l6">
                                      <span class="form-input-title-designed">NISN Anggota 1:</span>
                                    </div>
                                    <div class="col s12 l6">
                                      <input class="form-input-designed" id="studentid_satu" name="id2" class="validate">
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col s12 l6">
                                      <span class="form-input-title-designed">NISN Anggota 2:</span>
                                    </div>
                                    <div class="col s12 l6">
                                      <input class="form-input-designed" id="studentid_kedua" name="id3" class="validate">
                                    </div>
                                  </div>
                                  <!-- NIM End -->
                                  <!-- Jurusan Start -->
                                  <!-- <div class="col s4 l4">
                                      <span class="form-input-title-designed">Jurusan Ketua: <span
                                              class="required-star-designed">*</span></span>
                                  </div>
                                  <div class="col s4 l4">
                                      <span class="form-input-title-designed">Jurusan Anggota 1:</span>
                                  </div>
                                  <div class="col s4 l4">
                                      <span class="form-input-title-designed">Jurusan Anggota 2:</span>
                                  </div>
                                  <div class="col s4 l4">
                                      <input class="form-input-designed" id="jurusan_ketua" name="jurusan1" class="validate"
                                          required>
                                  </div>
                                  <div class="col s4 l4">
                                      <input class="form-input-designed" id="jurusan_satu" name="jurusan2" class="validate"
                                          required>
                                  </div>
                                  <div class="col s4 l4">
                                      <input class="form-input-designed" id="jurusan_kedua" name="jurusan2" class="validate"
                                          required>
                                        </div> -->
                                        <!-- Jurusan End -->
                                        <!-- Jenis Kelamin Start -->
                                        <div class="row">
                                          <div class="col s12">
                                            <span class="form-title-designed">Jenis Kelamin Anggota Tim</span>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col s12 l6">
                                            <span class="form-input-title-designed">Jenis Kelamin Ketua: <span class="required-star-designed">*</span></span>
                                          </div>
                                          <div class="col s12 l6">
                                            <select name="gender1">
                                              <option value="-" disabled selected>Pilih Jenis Kelamin</option>
                                              <option value="0">Laki-laki</option>
                                              <option value="1">Perempuan</option>
                                            </select>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col s12 l6">
                                            <span class="form-input-title-designed">Jenis Kelamin Anggota 1:</span>
                                          </div>
                                          <div class="col s12 l6">
                                            <select name="gender2">
                                              <option value="-" disabled selected>Pilih Jenis Kelamin</option>
                                              <option value="0">Laki-laki</option>
                                              <option value="1">Perempuan</option>
                                            </select>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col s12 l6">
                                            <span class="form-input-title-designed">Jenis Kelamin Anggota 2:</span>
                                          </div>
                                          <div class="col s12 l6">
                                            <select name="gender3">
                                              <option value="-" disabled selected>Pilih Jenis Kelamin</option>
                                              <option value="0">Laki-laki</option>
                                              <option value="1">Perempuan</option>
                                            </select>
                                          </div>
                                        </div>
                                        <!-- Jenis Kelamin End -->
                                        <!-- Email Start -->
                                        <div class="row">
                                          <div class="col s12">
                                            <span class="form-title-designed">Email Anggota Tim</span>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col s12 l6">
                                            <span class="form-input-title-designed">Email Ketua: <span class="required-star-designed">*</span></span>
                                          </div>
                                          <div class="col s12 l6">
                                            <input class="form-input-designed" id="email_ketua" name="email1" type="email" class="validate" required>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col s12 l6">
                                            <span class="form-input-title-designed">Email Anggota 1:</span>
                                          </div>
                                          <div class="col s12 l6">
                                            <input class="form-input-designed" id="email_satu" name="email2" type="email" class="validate">
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col s12 l6">
                                            <span class="form-input-title-designed">Email Anggota 2:</span>
                                          </div>
                                          <div class="col s12 l6">
                                            <input class="form-input-designed" id="email_kedua" name="email3" type="email" class="validate">
                                          </div>
                                        </div>
                                        <!-- Email End -->
                                        <!-- Contact Start -->
                                        <div class="row">
                                          <div class="col s12">
                                            <span class="form-title-designed">Kontak Anggota Tim (Salah Satu)</span>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col s12 l6">
                                            <span class="form-input-title-designed">Nomor Telepon (WhatsApp): <span class="required-star-designed">*</span></span>
                                          </div>
                                          <div class="col s12 l6">
                                            <input class="form-input-designed" id="no_telp" name="wa1" type="number" class="validate" required>
                                          </div>
                                        </div>
                                        <div class="row">
                                          
                                          <div class="col s12 l6">
                                            <span class="form-input-title-designed">ID Line: <span class="required-star-designed">*</span></span>
                                          </div>
                                          <div class="col s12 l6">
                                            <input class="form-input-designed" id="id_line" name="line1" class="validate" required>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col s12 l6">
                                            <span class="form-input-title-designed">Institusi: <span class="required-star-designed">*</span></span>
                                          </div>
                                          <div class="col s12 l6">
                                            <input class="form-input-designed" id="asal_sekolah" name="institusi" class="validate" required>
                                          </div>
                                        </div>
                                        <!-- Contact End -->
                                        <!-- Upload Start -->
                                        <!-- KTM Start -->
                                        <div class="row">
                                          <div class="col s12">
                                            <span class="form-title-designed">Kartu Tanda Pelajar</span>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col s12 l6">
                                            <span class="form-input-title-designed">Kartu Tanda Pelajar Ketua: <span class="required-star-designed">*</span></span>
                                          </div>
                                          <div class="col s12 l6">
                                            <div class="file-field input-field">
                                              <div class="btn upload-button-designed">
                                                <input type="file" id="ktm1" name="ktm1"
                                                onchange="return fileValidation('ktm1')" required>
                                                <label for="ktm1">
                                                  <img class="upload-button-image-designed"
                                                  src="<?php echo base_url('assets/images/upload_black.png') ?>"
                                                  style="max-height: 90%;">
                                                  <span class="upload-button-label-designed">Upload</span>
                                                </label>
                                              </div>
                                              <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text">
                                                <span id="ktm1-size"></span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col s12 l6">
                                            <span class="form-input-title-designed">Kartu Tanda Pelajar Anggota 1:</span>
                                          </div>
                                          <div class="col s12 l6">
                                            <div class="file-field input-field">
                                              <div class="btn upload-button-designed">
                                                <input type="file" id="ktm2" name="ktm2"
                                                onchange="return fileValidation('ktm2')">
                                                <label for="ktm2">
                                                  <img class="upload-button-image-designed"
                                                  src="<?php echo base_url('assets/images/upload_black.png') ?>"
                                                  style="max-height: 90%;">
                                                  <span class="upload-button-label-designed">Upload</span>
                                                </label>
                                              </div>
                                              <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text">
                                                <span id="ktm2-size"></span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col s12 l6">
                                            <span class="form-input-title-designed">Kartu Tanda Pelajar Anggota 2:</span>
                                          </div>
                                          <div class="col s12 l6">
                                            <div class="file-field input-field">
                                              <div class="btn upload-button-designed">
                                                <input type="file" id="ktm3" name="ktm3"
                                                onchange="return fileValidation('ktm3')">
                                                <label for="ktm3">
                                                  <img class="upload-button-image-designed"
                                                  src="<?php echo base_url('assets/images/upload_black.png') ?>"
                                                  style="max-height: 90%;">
                                                  <span class="upload-button-label-designed">Upload</span>
                                                </label>
                                              </div>
                                              <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text">
                                                <span id="ktm3-size"></span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <!-- KTM End -->
                                        <!-- Foto Start -->
                                        <div class="row">
                                          <div class="col s12">
                                            <span class="form-title-designed">Pas Foto (3x4) Bebas Rapi</span>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col s12 l6">
                                            <span class="form-input-title-designed">Ketua: <span class="required-star-designed">*</span></span>
                                          </div>
                                          <div class="col s12 l6">
                                            <div class="file-field input-field">
                                              <div class="btn upload-button-designed">
                                                <input type="file" id="foto1" name="foto1"
                                                onchange="return fileValidation('foto1')" required>
                                                <label for="foto1">
                                                  <img class="upload-button-image-designed"
                                                  src="<?php echo base_url('assets/images/upload_black.png') ?>"
                                                  style="max-height: 90%;">
                                                  <span class="upload-button-label-designed">Upload</span>
                                                </label>
                                              </div>
                                              <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text">
                                                <span id="foto1-size"></span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col s12 l6">
                                            <span class="form-input-title-designed">Anggota 1:</span>
                                          </div>
                                          <div class="col s12 l6">
                                            <div class="file-field input-field">
                                              <div class="btn upload-button-designed">
                                                <input type="file" id="foto2" name="foto2"
                                                onchange="return fileValidation('foto2')">
                                                <label for="foto2">
                                                  <img class="upload-button-image-designed"
                                                  src="<?php echo base_url('assets/images/upload_black.png') ?>"
                                                  style="max-height: 90%;">
                                                  <span class="upload-button-label-designed">Upload</span>
                                                </label>
                                              </div>
                                              <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text">
                                                <span id="foto2-size"></span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col s12 l6">
                                            <span class="form-input-title-designed">Anggota 2:</span>
                                          </div>    
                                          <div class="col s12 l6">
                                            <div class="file-field input-field">
                                              <div class="btn upload-button-designed">
                                                <input type="file" id="foto3" name="foto3"
                                                onchange="return fileValidation('foto3')">
                                                <label for="foto3">
                                                  <img class="upload-button-image-designed"
                                                  src="<?php echo base_url('assets/images/upload_black.png') ?>"
                                                  style="max-height: 90%;">
                                                  <span class="upload-button-label-designed">Upload</span>
                                                </label>
                                              </div>
                                              <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text">
                                                <span id="foto3-size"></span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <!-- Foto End -->
                                        <div class="row">
                                          <div class="col s12 l12">
                                            <span class="form-title-designed">Upload Bukti Pembayaran Olimpiade</span>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col s12 l6">
                                            <span class="form-input-title-designed">Bukti Pembayaran: <span class="required-star-designed">*</span></span>
                                          </div>
                                          <div class="col s12 l6">
                                            <div class="file-field input-field">
                                              <div class="btn upload-button-designed">
                                                <input type="file" id="bayar" name="bayar"
                                                onchange="return fileValidation('bayar')" required>
                                                <label for="bayar">
                                                  <img class="upload-button-image-designed"
                                                  src="<?php echo base_url('assets/images/upload_black.png') ?>"
                                                  style="max-height: 90%;">
                                                  <span class="upload-button-label-designed">Upload</span>
                                                </label>
                                              </div>
                                              <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text">
                                                <span id="bayar-size"></span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <!-- Poster Start -->
                                        <div class="row">
                                          <div class="col s12 l12">
                                            <span class="form-title-designed">Share Poster Olimpiade ARA 2021 di Instastory (maksimum file size 2MB)</span>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col s12 l12">
                                            <span class="form-input-title-designed">Poster didownload di 
                                              <a href="https://drive.google.com/file/d/16swBr2XgvjYPl1j-4TvzymSzItuecCz3/view?usp=sharing">sini</a></span>
                                            </div>
                                          </div>
                                          <div class="row">
                                            <div class="col s12 l6">
                                              <span class="form-input-title-designed">Bukti Share Poster Olimpiade ARA 2021:
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
                                            <br>
                                            <!-- Poster End -->
                                            <div class="row animate__animated animate__bounce animate__infinite animate__slower animate__delay-1s">
                                              <div class="col s12 l12">
                                                <br><br>
                                                <b><span class="form-input-title-designed"><span class="required-star-designed">*</span>Wajib Diisi</span></b>
                                              </div>
                                            </div>
                                            <br><br>
                                            <!-- Upload End -->
                                            <div class="row">
                                              <div class="center-align">
                                                <button class="btn waves-effect waves-light center-align submit-button-form-designed"
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