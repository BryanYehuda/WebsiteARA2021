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
                    <div class="col s12">
                        <span class="form-title-designed center-align"><strong>Submit OTP</strong></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <span class="form-title-designed center-align"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <form class=" col s12" action="<?php echo base_url().'otp/activate' ?>" method="post"
                            enctype="multipart/form-data">
                            <br><br>
                            <div class="row">
                                <div class="col s12 l12">
                                    <span class="form-input-title-designed">Username</span>
                                </div>
                                <div class="col s12 l12">
                                    <input class="form-input-designed" id="username" name="username"
                                        class="validate" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 l12">
                                    <span class="form-input-title-designed">Kode OTP <span
                                            class="required-star-designed">*</span></span>
                                </div>
                                <div class="col s12 l12">
                                    <input class="form-input-designed" id="otp" name="otp" class="validate" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="center-align">
                                    <button
                                        class="btn waves-effect waves-light center-align submit-button-form-designed"
                                        type="submit" name="action" style="background-color: #64a0cc;">Submit OTP
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