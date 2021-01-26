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
            <span class="form-title-designed "><strong>Dashboard Ide Inovatif IoT</strong></span>
            <br>
          </div>
          <div class="col s12 center-align">
            <div class="row">
              <form id="abstrakIOT" name="abstrakIOT" class=" col s12" action="<?php echo base_url().'iot/submit_abstrak'?>" method="post" enctype="multipart/form-data">
                <!-- Action jangan lupa diisi -->
                <br><br>
                <div class="row">
                  <div class="col s12">
                    <span class="form-input-title-designed">Judul:</span>
                  </div>
                </div>
                <div class="row">
                  <div class="col s12 input-field">
                    <textarea id="textarea1" class="form-input-designed-textarea materialize-textarea" id="judul" name="judul" required></textarea>
                    <!-- Id, name, class jangan lupa diisi -->
                  </div>
                </div><br><br> 
                <div class="row">
                  <div class="col s12">
                    <span class="form-input-title-designed">Abstrak:</span>
                  </div>
                </div>
                <div class="row">
                  <div class="col s12 input-field">
                    <textarea id="textarea1" class="form-input-designed-textarea materialize-textarea" id="abstrak" name="abstrak" required></textarea>
                    <!-- Id, name, class jangan lupa diisi -->
                  </div>
                </div><br><br>
                <div class="row">
                  <div class="center-align">

                    <!-- Modal Trigger -->
                    <a class="waves-effect waves-light btn modal-trigger submit-button-form-designed" style="background-color: #64a0cc;" href="#modal1">UPLOAD</a>
                    <!-- Modal Structure -->
                    <div id="modal1" class="modal">
                      <div class="modal-content">
                        <h4>Pengumuman Penting</h4>
                        <p>Diberitahukan kepada seluruh peserta Kompetisi Ide Inovatif IoT untuk memastikan bahwa berkas yang 
                        akan Anda kirimkan adalah benar. Berkas yang telah dikirim tidak dapat direvisi ulang maupun dikirim kembali. 
                        Terima kasih atas perhatiannya.</p>
                      </div>
                      <div class="modal-footer">
                        <a class="waves-effect waves-light btn modal-close submit-button-form-designed" style="background-color: #CF3636;" href="#!">KEMBALI</a>
                        <button class="btn waves-effect waves-light submit-button-form-designed"
                        type="submit" name="action" style="background-color: #64a0cc;">UPLOAD</button>
                      </div><br>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div><br><br><br><br>


</div>
</div>