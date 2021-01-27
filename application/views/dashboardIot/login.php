<div class="container-designed">

  <div class="apple-window-designed"><br><br>

    <div data-aos="zoom-in">

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
              <span class="form-title-designed "><strong>Login Form ARA 2021</strong></span>
              <br>
            </div>
            <div class="col s12 center-align">
              <div class="row">
                <form id="form" name="form" class=" col s12" method="post" enctype="multipart/form-data" action="<?php echo base_url().'iot/loginact' ?>">
                  <?php if (isset($msg)) {
                    echo $msg;
                  } ?>
                  <!-- Action jangan lupa diisi -->
                  <br><br>    
                  <div class="row">
                    <div class="col s12 m3 l3">
                      <span class="form-input-title-designed">Username:</span>
                    </div>
                    <div class="col s12 m9 l9">
                      <input class="form-input-designed" id="username" name="username" required>
                      <span id=""></span>
                      <!--id, name, class jangan lupa diisi -->
                    </div>
                  </div>
                  <div class="row">
                    <div class="col s12 m3 l3">
                      <span class="form-input-title-designed">Password:</span>
                    </div>
                    <div class="col s12 m9 l9">
                      <input class="form-input-designed" id="password" name="password" type="password" required>
                      <span id=""></span>
                      <!--id, name, class jangan lupa diisi -->
                    </div>
                  </div><br><br>
                  <div class="row">
                    <div class="center-align">
                      <button class="btn waves-effect waves-light center-align submit-button-form-designed"
                      type="submit" name="action" style="background-color: #64a0cc;">LOGIN
                    </button>
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
</div>