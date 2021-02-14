<div id="webinar" class="col s12">
    <table class="table table-hover table-responsive">
        <thead>
            <tr style="color: whitesmoke;">
                <th>Nama</th>
                <th>Institusi</th>
                <th>Email</th>
                <th>No. WhatsApp</th>
                <th>Sesi</th>
                <th>Tgl. Daftar</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($datas as $data) {?>
            <tr draggable="false">
                <td draggable="false">
                    <a data-toggle="modal" data-target="#modal_<?php echo $data->id; ?>_webinar" draggable="false">
                        <?=$data->nama; ?>
                    </a>
                </td>
                <td draggable="false">
                    <?= $data->institusi; ?>
                </td>
                <td draggable="false">
                    <?= $data->email; ?>
                </td>
                <td draggable="false">
                    <?= $data->no_wa; ?>
                </td>
                <td draggable="false">
                    <?= $data->sesi; ?>
                </td>
                <td draggable="false">
                    <?= $data->webinar_timestamp; ?>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <?php foreach($datas as $data) {?>
        <div id="modal_<?php echo $data->id; ?>_webinar" class="modal">
        <div class="modal-dialog">

            <div class="modal-content" style="background-color: rgb(56, 56, 56);">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">
                        <?= $data->nama; ?>
                    </h4>
                </div>
                <div class="modal-body">
                    <p>
                        <b>
                            Bukti 1
                        </b>
                        <br>
                            <a href="<?php echo base_url('uploads/webinar/') . $data->nama . '/' . $data->bukti; ?>" target="_blank"
                            draggable="false">
                                <?= $data->bukti; ?>
                            </a>
                        <br>
                        <br>
                        <b>
                            Bukti 2
                        </b>
                        <br>
                        <a href="<?php echo base_url('uploads/webinar/') . $data->nama . '/' . $data->bukti2; ?>" target="_blank"
                            draggable="false">
                                <?= $data->bukti2; ?>
                            </a>
                        <br>
                        <br>
                        <b>
                            Bukti Telkom 1
                        </b>
                        <br>
                            <a href="<?php echo base_url('uploads/webinar/') . $data->nama . '/' . $data->bukti_telkom1; ?>" target="_blank"
                            draggable="false">
                                <?= $data->bukti_telkom1; ?>
                            </a>
                        <br>
                        <br>
                            Bukti Telkom 2
                        </b>
                        <br>
                            <a href="<?php echo base_url('uploads/webinar/') . $data->nama . '/' . $data->bukti_telkom2; ?>" target="_blank"
                            draggable="false">
                                <?= $data->bukti_telkom2; ?>
                            </a>
                        <br>

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