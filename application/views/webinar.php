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
                <div class="row">
                    <span class="form-title-designed center-align"><strong>Form Registrasi Webinar ARA 2021 (COMING SOON)</strong></span>
                    <br>
                    <div class="row">
                        <form class=" col s12" action="<?php echo base_url().'daftar/webinar' ?>" method="post" enctype="multipart/form-data">
                        <br><br>    
                            <div class="row">
                                <div class="col s12 l6">
                                    <span class="form-input-title-designed">Email: <span class="required-star-designed">*</span></span>
                                </div>
                                <div class="col s12 l6">
                                    <input class="form-input-designed" id="email" name="email" type="email" class="validate" required>
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
                                    <a href="https://drive.google.com/file/d/1hW0SzI6lzE0cfnFkTViFMMQ6Y_DJvs2Z/view?usp=sharing" target="_blank">sini</a></span>
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
                            <div>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <div class="row animate__animated animate__bounce animate__infinite animate__slower animate__delay-1s">
                                <div class="col s12 l12">
                                    <br>
                                    <b><span class="form-input-title-designed"><span class="required-star-designed">*</span>Wajib Diisi</span></b>
                                </div>
                            </div>
                            <br><br>
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