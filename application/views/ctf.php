<div class="container-designed">

    <div class="apple-window-designed">

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
                <span class="form-title-designed">Form Registrasi Capture The Flag ARA 2021</span>
                <br>
                <div class="row">
                    <form class=" col s12" action="<?php echo base_url().'daftar/olimpiade' ?>" method="post"
                        enctype="multipart/form-data">
                        <div class="row">
                            <div class="col s12 l12">
                                <span class="form-input-title-designed">Nama Tim: <span
                                        class="required-star-designed">*</span></span>
                                <input class="form-input-designed" id="tim" name="nama_tim" class="validate" required>
                                <span id="team_result"></span>
                            </div>
                            <!-- Nama Start -->
                            <div class="col s4 l4">
                                <span class="form-input-title-designed">Nama Lengkap Ketua: <span
                                        class="required-star-designed">*</span></span>
                            </div>
                            <div class="col s4 l4">
                                <span class="form-input-title-designed">Nama Lengkap Anggota 1: <span
                                        class="required-star-designed">*</span></span>
                            </div>
                            <div class="col s4 l4">
                                <span class="form-input-title-designed">Nama Lengkap Anggota 2: <span
                                        class="required-star-designed">*</span></span>
                            </div>
                            <div class="col s4 l4">
                                <input class="form-input-designed" id="nama_ketua" name="nama1" class="validate"
                                    required>
                            </div>
                            <div class="col s4 l4">
                                <input class="form-input-designed" id="nama_anggota_pertama" name="nama2"
                                    class="validate" required>
                            </div>
                            <div class="col s4 l4">
                                <input class="form-input-designed" id="nama_anggota_kedua" name="nama3" class="validate"
                                    required>
                            </div>
                            <!-- Nama End -->
                            <!-- NIM Start -->
                            <div class="col s4 l4">
                                <span class="form-input-title-designed">NIM Ketua: <span
                                        class="required-star-designed">*</span></span>
                            </div>
                            <div class="col s4 l4">
                                <span class="form-input-title-designed">NIM Anggota 1: <span
                                        class="required-star-designed">*</span></span>
                            </div>
                            <div class="col s4 l4">
                                <span class="form-input-title-designed">NIM Anggota 2: <span
                                        class="required-star-designed">*</span></span>
                            </div>
                            <div class="col s4 l4">
                                <input class="form-input-designed" id="studentid_ketua" name="id1" class="validate"
                                    required>
                            </div>
                            <div class="col s4 l4">
                                <input class="form-input-designed" id="studentid_satu" name="id2" class="validate"
                                    required>
                            </div>
                            <div class="col s4 l4">
                                <input class="form-input-designed" id="studentid_kedua" name="id3" class="validate"
                                    required>
                            </div>
                            <!-- NIM End -->
                            <!-- Jurusan Start -->
                            <!-- <div class="col s4 l4">
                                <span class="form-input-title-designed">Jurusan Ketua: <span
                                        class="required-star-designed">*</span></span>
                            </div>
                            <div class="col s4 l4">
                                <span class="form-input-title-designed">Jurusan Anggota 1: <span
                                        class="required-star-designed">*</span></span>
                            </div>
                            <div class="col s4 l4">
                                <span class="form-input-title-designed">Jurusan Anggota 2: <span
                                        class="required-star-designed">*</span></span>
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
                            <div class="col s4 l4">
                                <span class="form-input-title-designed">Jenis Kelamin Ketua: <span
                                        class="required-star-designed">*</span></span>
                            </div>
                            <div class="col s4 l4">
                                <span class="form-input-title-designed">Jenis Kelamin Anggota 1: <span
                                        class="required-star-designed">*</span></span>
                            </div>
                            <div class="col s4 l4">
                                <span class="form-input-title-designed">Jenis Kelamin Anggota 2: <span
                                        class="required-star-designed">*</span></span>
                            </div>
                            <div class="col s4 l4">
                                <select name="gender1">
                                    <option value="-" disabled selected>Pilih Jenis Kelamin</option>
                                    <option value="1">Laki-laki</option>
                                    <option value="2">Perempuan</option>
                                </select>
                            </div>
                            <div class="col s4 l4">
                                <select name="gender2">
                                    <option value="-" disabled selected>Pilih Jenis Kelamin</option>
                                    <option value="1">Laki-laki</option>
                                    <option value="2">Perempuan</option>
                                </select>
                            </div>
                            <div class="col s4 l4">
                                <select name="gender3">
                                    <option value="-" disabled selected>Pilih Jenis Kelamin</option>
                                    <option value="1">Laki-laki</option>
                                    <option value="2">Perempuan</option>
                                </select>
                            </div>
                            <!-- Jenis Kelamin End -->
                            <!-- Email Start -->
                            <div class="col s4 l4">
                                <span class="form-input-title-designed">Email Ketua: <span
                                        class="required-star-designed">*</span></span>
                            </div>
                            <div class="col s4 l4">
                                <span class="form-input-title-designed">Email Anggota 1: <span
                                        class="required-star-designed">*</span></span>
                            </div>
                            <div class="col s4 l4">
                                <span class="form-input-title-designed">Email Anggota 2: <span
                                        class="required-star-designed">*</span></span>
                            </div>
                            <div class="col s4 l4">
                                <input class="form-input-designed" id="email_ketua" name="email1" type="email"
                                    class="validate" required>
                            </div>
                            <div class="col s4 l4">
                                <input class="form-input-designed" id="email_satu" name="email2" type="email"
                                    class="validate" required>
                            </div>
                            <div class="col s4 l4">
                                <input class="form-input-designed" id="email_kedua" name="email3" type="email"
                                    class="validate" required>
                            </div>
                            <!-- Email End -->
                            <!-- Contact Start -->
                            <div class="col s12 l12">

                                <div class="col s6 l6">
                                    <span class="form-input-title-designed">Nomor Telepon (WhatsApp): <span
                                            class="required-star-designed">*</span></span>
                                </div>
                                <div class="col s6 l6">
                                    <span class="form-input-title-designed">ID Line: <span
                                            class="required-star-designed">*</span></span>
                                </div>
                            </div>
                            <div class="col s6 l6">
                                <input class="form-input-designed" id="no_telp" name="wa1" type="number"
                                    class="validate" required>
                            </div>
                            <div class="col s6 l6">
                                <input class="form-input-designed" id="id_line" name="line1" class="validate" required>
                            </div>
                            <!-- Contact End -->
                            <div class="col s12 l12">
                                <span class="form-input-title-designed">Institusi: <span
                                        class="required-star-designed">*</span></span>
                                <input class="form-input-designed" id="asal_sekolah" name="institusi" class="validate"
                                    required>
                            </div>
                            <!-- Upload Start -->
                            <!-- KTM Start -->
                            <div class="col s4 l4">
                                <span class="form-input-title-designed">KTM Ketua: <span
                                        class="required-star-designed">*</span></span>
                            </div>
                            <div class="col s4 l4">
                                <span class="form-input-title-designed">KTM Anggota 1: <span
                                        class="required-star-designed">*</span></span>
                            </div>
                            <div class="col s4 l4">
                                <span class="form-input-title-designed">KTM Anggota 2: <span
                                        class="required-star-designed">*</span></span>
                            </div>
                            <div class="col s4 l4">
                                <div class="file-field input-field">
                                    <div class="btn upload-button-designed">
                                        <input type="file" id="ktm1" name="ktm1"
                                            onchange="return fileValidation('ktm1')">
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
                            <div class="col s4 l4">
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
                            <div class="col s4 l4">
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
                            <!-- KTM End -->
                            <!-- Surat Start -->
                            <div class="col s12 l12">
                                <span class="form-input-title-designed">Surat Keterangan Mahasiswa Aktif</span>
                            </div>
                            <div class="col s4 l4">
                                <span class="form-input-title-designed">Ketua: <span
                                        class="required-star-designed">*</span></span>
                            </div>
                            <div class="col s4 l4">
                                <span class="form-input-title-designed">Anggota 1: <span
                                        class="required-star-designed">*</span></span>
                            </div>
                            <div class="col s4 l4">
                                <span class="form-input-title-designed">Anggota 2: <span
                                        class="required-star-designed">*</span></span>
                            </div>
                            <div class="col s4 l4">
                                <div class="file-field input-field">
                                    <div class="btn upload-button-designed">
                                        <input type="file" id="surat1" name="surat1"
                                            onchange="return fileValidation('surat1')">
                                        <label for="surat1">
                                            <img class="upload-button-image-designed"
                                                src="<?php echo base_url('assets/images/upload_black.png') ?>"
                                                style="max-height: 90%;">
                                            <span class="upload-button-label-designed">Upload</span>
                                        </label>
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text">
                                        <span id="surat1-size"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col s4 l4">
                                <div class="file-field input-field">
                                    <div class="btn upload-button-designed">
                                        <input type="file" id="surat2" name="surat2"
                                            onchange="return fileValidation('surat2')">
                                        <label for="surat2">
                                            <img class="upload-button-image-designed"
                                                src="<?php echo base_url('assets/images/upload_black.png') ?>"
                                                style="max-height: 90%;">
                                            <span class="upload-button-label-designed">Upload</span>
                                        </label>
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text">
                                        <span id="surat2-size"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col s4 l4">
                                <div class="file-field input-field">
                                    <div class="btn upload-button-designed">
                                        <input type="file" id="surat3" name="surat3"
                                            onchange="return fileValidation('surat3')">
                                        <label for="surat3">
                                            <img class="upload-button-image-designed"
                                                src="<?php echo base_url('assets/images/upload_black.png') ?>"
                                                style="max-height: 90%;">
                                            <span class="upload-button-label-designed">Upload</span>
                                        </label>
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text">
                                        <span id="surat3-size"></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Surat End -->
                            <div class="col s12 l12">
                                <span class="form-input-title-designed">Bukti Pembayaran:
                                    <span class="required-star-designed">*</span></span>
                                <div class="file-field input-field">
                                    <div class="btn upload-button-designed">
                                        <input type="file" id="bayar" name="bayar"
                                            onchange="return fileValidation('bayar')">
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
                            <div class="col s12 l12">
                                <b><span class="form-input-title-designed"><span
                                            class="required-star-designed">*</span>Wajib
                                        Diisi</span></b>
                            </div>
                        </div>
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