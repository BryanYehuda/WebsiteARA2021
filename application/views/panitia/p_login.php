<div class="container">
    <div class="row" style="font-size: x-large;">
        <?php echo form_open_multipart('panitiaaraonly/login') ?>
        <div class="col-xs-12 row">
            <div class="input-field col-xs-12" style="margin-bottom: 25px;">
                <b style="background-color: #111;color: whitesmoke;">Username</b>
                <input name="username"
                    style="background-color: rgb(31, 31, 31);color: whitesmoke;border-color: whitesmoke;width:100%;">
            </div>
        </div>
        <div class="col-xs-12 row">
            <div class="input-field col-xs-12" style="margin-bottom: 25px;">
                <b style="background-color: #111;color: whitesmoke;">Password</b>
                <input name="password" type="password"
                    style="background-color: rgb(31, 31, 31);color: whitesmoke;border-color: whitesmoke;width:100%;">
            </div>
        </div>
        <div class="col-xs-12 row">
            <div class="input-field col-xs-12" style="margin-bottom: 25px;">
                <b style="background-color: #111;color: whitesmoke;">Accessor</b>
                <input name="accessor"
                    style="background-color: rgb(31, 31, 31);color: whitesmoke;border-color: whitesmoke;width:100%;">
            </div>
        </div>
        <div class="col-xs-12 row">
            <hr>
            <div class="input-field col-xs-12">
                <input type="submit" value="ACCESS"
                    style="background-color: rgb(31, 31, 31);color: whitesmoke;border-color: whitesmoke;width: 100%;min-height: 50px;">
            </div>
        </div>
        <?php echo form_close() ?>
    </div>
</div>