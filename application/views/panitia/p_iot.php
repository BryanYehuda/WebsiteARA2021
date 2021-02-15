<div id="iot" class="col s12">

    <table class="table table-hover table-responsive">
        <thead>
            <tr style="color: whitesmoke;">
                <th>ID</th>
                <th>Nama Tim</th>
                <th>Nama Ketua</th>
                <th>Email Ketua</th>
                <th>No. WhatsApp</th>
                <th>ID Line</th>
                <th>Nama Anggota 1</th>
                <th>Nama Anggota 2</th>
                <th>Tgl. Daftar</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($datas as $data) { ?>
            <tr draggable="false">
                <td draggable="false">
                    i-
                    <?= $data->id ?>
                </td>
                <td draggable="false">
                    <a data-toggle="modal" data-target="#modal_<?php echo $data->id_ctf; ?>_team" draggable="false">
                        <?=$data->nama_tim; ?>
                    </a>
                </td>
                <td draggable="false">
                    <a data-toggle="modal" data-target="#modal_<?php echo $data->id_ctf; ?>_1" draggable="false">
                        <?= $data->nama1; ?>
                    </a>
                </td>
                <td draggable="false">
                    <a data-toggle="modal" data-target="#modal_<?php echo $data->id_ctf; ?>_email" draggable="false">
                        <?= $data->email1; ?>
                    </a>
                </td>
                <td draggable="false">
                    <?= $data->no_wa; ?>
                </td>
                <td draggable="false">
                    <?= $data->line; ?>
                </td>
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
                    <?= $data->iot_timestamp; ?>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <?php foreach($datas as $data) { ?>

    <div id="modal_<?php echo $data->id_ctf; ?>_team" class="modal">
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
                        <b>
                            Waktu Submit Abstrak
                        </b>
                        <br>
                        <?= $data->timestamp; ?>
                        <br>
                        <br>
                        <b>
                            Judul Abstrak IOT
                        </b>
                        <br>
                        <?= $data->judul; ?>
                        <br>
                        <br>
                        <b>
                            Abstrak IOT <span style="color:rgb(58, 136, 58);"> (TIP: 3x fast left click to select
                                all)</span>
                        </b>
                        <br>
                        <?= $data->abstrak; ?>
                        <br>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div id="modal_<?php echo $data->id_ctf; ?>_email" class="modal">
        <div class="modal-dialog">

            <div class="modal-content" style="background-color: rgb(56, 56, 56);">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">
                        <?= $data->nama_tim; ?> : Email
                    </h4>
                </div>
                <div class="modal-body">
                    <p>
                    <h1 style="color:red;">
                        PERHATIAN !
                    </h1>
                    <br>
                    <br>
                    <h3 style="color:red;">
                        JANGAN ASAL MENCET!
                        <br>
                        <br>
                        KLIK LINK <a
                            href="<?php echo base_url() . 'panitiaaraonly/sendemailmanuallytotim/' . $data->id . '/iot'; ?> ">!INI!</a>
                        UNTUK MENGIRIM EMAIL PEMBARUAN AKUN/REQUEST OTP BARU!
                        <br>
                        <br>
                        JANGAN ASAL-ASALAN!
                    </h3>
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
                        <a href="<?php echo base_url('uploads/iot/') . $data->nama_tim . '/ktm/' . $data->ktm1; ?>"
                            draggable="false" target="_blank">
                            <?=$data->ktm1; ?>
                        </a>
                        <br>
                        <br>
                        <b>
                            Surat
                        </b>
                        <br>
                        <a href="<?php echo base_url('uploads/iot/') . $data->nama_tim . '/surat/' . $data->surat1; ?>"
                            draggable="false" target="_blank">
                            <?php echo $data->surat1; ?>
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
                        <a href="<?php echo base_url('uploads/iot/') . $data->nama_tim . '/ktm/' . $data->ktm2; ?>"
                            draggable="false" target="_blank">
                            <?=$data->ktm2; ?>
                        </a>
                        <br>
                        <br>
                        <b>
                            Surat
                        </b>
                        <br>
                        <a href="<?php echo base_url('uploads/iot/') . $data->nama_tim . '/surat/' . $data->surat2; ?>"
                            draggable="false" target="_blank">
                            <?php echo $data->surat2; ?>
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
                        <a href="<?php echo base_url('uploads/iot/') . $data->nama_tim . '/ktm/' . $data->ktm3; ?>"
                            draggable="false" target="_blank">
                            <?=$data->ktm3; ?>
                        </a>
                        <br>
                        <br>
                        <b>
                            Surat
                        </b>
                        <br>
                        <a href="<?php echo base_url('uploads/iot/') . $data->nama_tim . '/surat/' . $data->surat3; ?>"
                            draggable="false" target="_blank">
                            <?php echo $data->surat3; ?>
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