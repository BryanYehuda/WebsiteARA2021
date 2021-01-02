<div id="olimpiade" class="col s12">
    <table class="responsive-table stripped highlight">
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
            <!-- <?php
            foreach($webinar as $data) {
            ?>
            <tr>
                <td>$data->nama</td>
                <td>$data->institusi</td>
                <td>$data->email</td>
                <td>$data->no_wa</td>
                <td>$data->bukti</td>
            </tr>
            <?php
            }
            ?> -->
            <tr draggable="false">
                <td draggable="false">$data->nama</td>
                <td draggable="false">$data->institusi</td>
                <td draggable="false">$data->email</td>
                <td draggable="false">$data->no_wa</td>
                <td draggable="false">$data->bukti</td>
            </tr>
        </tbody>
    </table>
</div>