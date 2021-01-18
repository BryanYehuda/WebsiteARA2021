<div id="webinar" class="col s12">
    <table class="table table-hover table-responsive">
        <thead>
            <tr style="color: whitesmoke;">
                <th>Nama</th>
                <th>Institusi</th>
                <th>Email</th>
                <th>No. WhatsApp</th>
                <th>Bukti</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($datas as $data) {?>
            <tr draggable="false">
                <td draggable="false">
                    <?= $data->nama; ?>
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
                    <!-- <a href="<?php echo base_url('uploads/webinar/') . $data->bukti; ?>" target="_blank"
                        draggable="false"> -->
                    <a href="<?php echo base_url('uploads/webinar/') . $data->bukti; ?>" target="_blank"
                        draggable="false">
                        <?= $data->bukti; ?>
                    </a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

</div>