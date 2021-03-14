<div id="olimpiade" class="col s12">

<div class="row">
        <div class="col-xs-12">
            <input type="button" onclick="sts_all_chg()" data-toggle="modal" data-target="#modal_change_status_selected"
                draggable="false" style="color:red;" value="Click to Change Status of Selected Teams">
        </div>
        <div class="col-xs-12">
            <br>
        </div>
    </div>

    <table class="table table-hover table-responsive">
        <thead>
            <tr style="color: whitesmoke;">
            <th><input type="checkbox" id="check-all" value="selectAll"></th>
                <th>ID</th>
                <th>Nama Tim</th>
                <th>Nama Ketua</th>
                <th>Email Ketua</th>
                <th>No. WhatsApp</th>
                <th>ID Line</th>
                <!-- <th>Alamat</th> -->
                <th>Nama Anggota 1</th>
                <th>Nama Anggota 2</th>
                <th>Tgl. Daftar</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($datas as $data) { ?>
            <tr draggable="false">
            <td draggable="false"><input type="checkbox" name="check" value="<?= $data->id_ctf; ?>"></td>
                <td draggable="false">
                    i-
                    <?= $data->id ?>
                </td>
                <td draggable="false">
                    <a data-toggle="modal" data-target="#modal_<?php echo $data->id_ctf; ?>_0" draggable="false">
                        <?= $data->nama_tim; ?>
                    </a>
                    <!-- <a href="<?php echo base_url('uploads/ctf/') . $data->nama_tim . '/' . $data->bukti_bayar; ?>"
                        draggable="false" target="_blank">
                        <?=$data->nama_tim; ?>
                    </a> -->
                </td>
                <td draggable="false">
                    <a data-toggle="modal" data-target="#modal_<?php echo $data->id_ctf; ?>_1" draggable="false">
                        <?= $data->nama1; ?>
                    </a>
                </td>
                <td draggable="false">
                    <?= $data->email1; ?>
                </td>
                <td draggable="false">
                    <?= $data->no_wa; ?>
                </td>
                <td draggable="false">
                    <?= $data->line; ?>
                </td>
                <!-- <td draggable="false">
                    <?= $data->alamat; ?>
                </td> -->
                <td draggable="false">
                    <a data-toggle="modal" data-target="#modal_<?php echo $data->id_ctf; ?>_2" draggable="false">
                        <?= $data->nama2; ?>
                    </a>
                </td>
                <td draggable="false">
                    <a data-toggle="modal" data-target="#modal_<?php echo $data->id_ctf; ?>_3" draggable="false">
                        <?= $data->nama3; ?>
                    </a>
                </td>
                <td draggable="false">
                    <?= $data->olim_timestamp; ?>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <div id="modal_change_status_selected" class="modal">
        <div class="modal-dialog">

            <div class="modal-content" style="background-color: rgb(56, 56, 56);">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">
                        Change Status of Selected Teams
                    </h4>
                </div>
                <div class="modal-body">
                    <p>
                    <form class="form act-<?= $data->id; ?>" id="the_all_link"
                        action="<?php echo base_url('panitiaaraonly/gantistatus/ctf/'); ?>" method="POST">
                        <p>Ganti Status Ke</p>
                        <?php
                            for($ix=1;$ix<=7;$ix++) { ?>
                        <input type="radio" id="<?= $ix ?>" name="status" value="<?= $ix ?>" <?php if($ix==$data->sts) {
                        echo 'checked="checked"'; } ?>>
                        <label for="<?= $ix ?>">
                            <?php 
                            switch($ix) {
                            case 1:
                                echo 'Terverifikasi';
                            break;
                            case 2:
                                echo 'Lolos Penyisihan';
                            break;
                            case 3:
                                echo 'Menang Juara 1';
                            break;
                            case 4:
                                echo 'Menang Juara 2';
                            break;
                            case 5:
                                echo 'Menang Juara 3';
                            break;
                            case 6:
                                echo 'Tidak Lolos Penyisihan';
                            break;
                            case 7:
                                echo 'Tidak Menang Final';
                            break;
                        } ?>
                        </label><br>
                        <?php }
                        ?>
                        <br>
                        <input type="submit" id="submsel" value="Ganti" style="color: red;font-weight: bold;">
                    </form>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <?php foreach($datas as $data) { ?>

    <div id="modal_<?php echo $data->id_ctf; ?>_0" class="modal">
        <div class="modal-dialog">

            <div class="modal-content" style="background-color: rgb(56, 56, 56);">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">
                        <?= $data->nama_tim; ?> : Tim
                    </h4>
                </div>
                <div class="modal-body">
                    <p>
                        <a href="<?php echo base_url('uploads/ctf/') . $data->nama_tim . '/' . $data->bukti_bayar; ?>"
                            draggable="false" target="_blank">
                            Bukti Bayar
                        </a>
                    </p>
                    <p>
                        <b>Status Tim</b><br>
                        <?php 
                                switch($data->sts) {
                                        case 1:
                                            echo '<b style="color:lightgreen">Terverifikasi</b>';
                                        break;
                                        case 2:
                                            echo '<b style="color:lightgreen">Lolos Penyisihan</b>';
                                        break;
                                        case 3:
                                            echo '<b style="color: lime;">Menang Juara 1</b>';
                                        break;
                                        case 4:
                                            echo '<b style="color: limegreen;">Menang Juara 2</b>';
                                        break;
                                        case 5:
                                            echo '<b style="color: greenyellow;">Menang Juara 3</b>';
                                        break;
                                        case 6:
                                            echo '<b style="color: deeppink;">Tidak Lolos Penyisihan</b>';
                                        break;
                                        case 7:
                                            echo '<b style="color: deeppink;">Tidak Menang Final</b>';
                                        break;
                                }
                        ?>
                    </p>
                    <p>
                    <form class="form act-<?= $data->id; ?>"
                        action="<?php echo base_url('panitiaaraonly/gantistatus/ctf/' . $data->id_ctf); ?>"
                        method="POST">
                        <p>Ganti Status Ke</p>
                        <?php
                            for($ix=1;$ix<=7;$ix++) { ?>
                        <input type="radio" id="<?= $ix ?>" name="status" value="<?= $ix ?>" <?php if($ix==$data->sts) {
                        echo 'checked="checked"'; } ?>>
                        <label for="<?= $ix ?>">
                            <?php 
                            switch($ix) {
                            case 1:
                                echo 'Terverifikasi';
                            break;
                            case 2:
                                echo 'Lolos Penyisihan';
                            break;
                            case 3:
                                echo 'Menang Juara 1';
                            break;
                            case 4:
                                echo 'Menang Juara 2';
                            break;
                            case 5:
                                echo 'Menang Juara 3';
                            break;
                            case 6:
                                echo 'Tidak Lolos Penyisihan';
                            break;
                            case 7:
                                echo 'Tidak Menang Final';
                            break;
                        } ?>
                        </label><br>
                        <?php }
                        ?>
                        <br>

                        <input type="submit" value="Ganti" style="color: red;font-weight: bold;">
                    </form>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div id="modal_<?php echo $data->id_ctf; ?>_1" class="modal">
        <div class="modal-dialog">

            <div class="modal-content" style="background-color: rgb(56, 56, 56);">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">
                        <?= $data->nama_tim; ?> : Ketua
                    </h4>
                </div>
                <div class="modal-body">
                    <p>
                        <b>
                            Nama
                        </b>
                        <br>
                        <?= $data->nama1; ?>
                        <br>
                        <br>
                        <b>
                            ID Mahasiswa
                        </b>
                        <br>
                        <?= $data->id1; ?>
                        <br>
                        <br>
                        <b>
                            Jenis Kelamin
                        </b>
                        <br>
                        <?php if($data->gender1 == "0") {
                            echo 'Laki-Laki';
                        } else {
                            echo 'Perempuan';
                        } ?>
                        <br>
                        <br>
                        <b>
                            Email
                        </b>
                        <br>
                        <?= $data->email1; ?>
                        <br>
                        <br>
                        <b>
                            KTM
                        </b>
                        <br>
                        <a href="<?php echo base_url('uploads/olimpiade/') . $data->nama_tim . '/ktm/' . $data->ktm1; ?>"
                            draggable="false" target="_blank">
                            <?=$data->ktm1; ?>
                        </a>
                        <br>
                        <br>
                        <b>
                            Foto
                        </b>
                        <br>
                        <a href="<?php echo base_url('uploads/olimpiade/') . $data->nama_tim . '/foto/' . $data->foto1; ?>"
                            draggable="false" target="_blank">
                            <?php echo $data->foto1; ?>
                        </a>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div id="modal_<?php echo $data->id_ctf; ?>_2" class="modal">
        <div class="modal-dialog">

            <div class="modal-content" style="background-color: rgb(56, 56, 56);">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">
                        <?= $data->nama_tim; ?> : Anggota 1
                    </h4>
                </div>
                <div class="modal-body">
                    <p>
                        <b>
                            Nama
                        </b>
                        <br>
                        <?= $data->nama2; ?>
                        <br>
                        <br>
                        <b>
                            ID Mahasiswa
                        </b>
                        <br>
                        <?= $data->id2; ?>
                        <br>
                        <br>
                        <b>
                            Jenis Kelamin
                        </b>
                        <br>
                        <?php if($data->gender2 == "0") {
                            echo 'Laki-Laki';
                        } else {
                            echo 'Perempuan';
                        } ?>
                        <br>
                        <br>
                        <b>
                            Email
                        </b>
                        <br>
                        <?= $data->email2; ?>
                        <br>
                        <br>
                        <b>
                            KTM
                        </b>
                        <br>
                        <a href="<?php echo base_url('uploads/olimpiade/') . $data->nama_tim . '/ktm/' . $data->ktm2; ?>"
                            draggable="false" target="_blank">
                            <?=$data->ktm2; ?>
                        </a>
                        <br>
                        <br>
                        <b>
                            Foto
                        </b>
                        <br>
                        <a href="<?php echo base_url('uploads/olimpiade/') . $data->nama_tim . '/foto/' . $data->foto2; ?>"
                            draggable="false" target="_blank">
                            <?php echo $data->foto2; ?>
                        </a>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div id="modal_<?php echo $data->id_ctf; ?>_3" class="modal">
        <div class="modal-dialog">

            <div class="modal-content" style="background-color: rgb(56, 56, 56);">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">
                        <?= $data->nama_tim; ?> : Anggota 2
                    </h4>
                </div>
                <div class="modal-body">
                    <p>
                        <b>
                            Nama
                        </b>
                        <br>
                        <?= $data->nama3; ?>
                        <br>
                        <br>
                        <b>
                            ID Mahasiswa
                        </b>
                        <br>
                        <?= $data->id3; ?>
                        <br>
                        <br>
                        <b>
                            Jenis Kelamin
                        </b>
                        <br>
                        <?php if($data->gender3 == "0") {
                            echo 'Laki-Laki';
                        } else {
                            echo 'Perempuan';
                        } ?>
                        <br>
                        <br>
                        <b>
                            Email
                        </b>
                        <br>
                        <?= $data->email3; ?>
                        <br>
                        <br>
                        <b>
                            KTM
                        </b>
                        <br>
                        <a href="<?php echo base_url('uploads/olimpiade/') . $data->nama_tim . '/ktm/' . $data->ktm3; ?>"
                            draggable="false" target="_blank">
                            <?=$data->ktm3; ?>
                        </a>
                        <br>
                        <br>
                        <b>
                            Foto
                        </b>
                        <br>
                        <a href="<?php echo base_url('uploads/olimpiade/') . $data->nama_tim . '/foto/' . $data->foto3; ?>"
                            draggable="false" target="_blank">
                            <?php echo $data->foto3; ?>
                        </a>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>

</div>
<script>
    $('#check-all').click(function () {
        if (this.checked) {
            $(':checkbox').each(function () {
                this.checked = true;
            });
        } else {
            $(':checkbox').each(function () {
                this.checked = false;
            });
        }
    });

    function sts_all_chg() {
        var sels = "";
        var checkboxes = document.getElementsByName("check");

        for (var idx = 0; idx < checkboxes.length; idx++) {
            if (checkboxes[idx].checked)
                sels = sels + checkboxes[idx].value + "-";
        }

        document.getElementById("the_all_link").action = "<?php echo base_url('panitiaaraonly/gantistatus/ctf/'); ?>" + sels;

        if (sels == "" || sels == null) {
            document.getElementById("submsel").disabled = true;
        } else {
            document.getElementById("submsel").disabled = false;
        }
    }



</script>