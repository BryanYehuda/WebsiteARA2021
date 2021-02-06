<!--Register Olimpiade Ends-->
<div class="register-olimpiade">

  <!--Register Olimpiade Form Start-->
  <div class="row">
    <div class="col s10 offset-s1">
      <div class="card black">
        <div class="card-content white-text">
          <span class="card-title center-align">Register Form IoT ARA 2021</span>
          <br>
          <div class="row">
            <form class="col s12" action="<?php echo base_url().'daftar/iot' ?>" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="input-field col s12">
                  <input name="nama_tim" id="tim" type="text" class="validate" required>
                  <label for="tim">Nama Tim</label>
                  <span id="team_result"></span>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="nama_ketua" name="nama1" type="text" class="validate">
                  <label for="nama_ketua">Nama Ketua Tim</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12 l6">
                  <input id="nama_anggota_pertama" name="nama2" type="text" class="validate">
                  <label for="nama_anggota_pertama">Nama Anggota Pertama</label>
                </div>
                <div class="input-field col s12 l6">
                  <input id="nama_anggota_kedua" name="nama3" type="text" class="validate">
                  <label for="nama_anggota_kedua">Nama Anggota Kedua</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12 l4">
                  <input id="studentid_ketua" name="id1" type="text" class="validate" required>
                  <label for="studentid_ketua">Student ID Ketua</label>
                </div>
                <div class="input-field col s12 l4">
                  <input id="studentid_satu" name="id2" type="text" class="validate" required>
                  <label for="studentid_satu">Student ID Anggota Pertama</label>
                </div>
                <div class="input-field col s12 l4">
                  <input id="studentid_kedua" name="id3" type="text" class="validate" required>
                  <label for="studentid_kedua">Student ID Anggota Kedua</label>
                </div>
              </div>
              <!-- Edit Colour to black wkwk -->
              <div class="row">
                <div class="input-field col s12 l4">
                  <select name="gender1">
                    <option value="-" disabled selected>Pilih Jenis Kelamin</option>
                    <option value="1">Laki-laki</option>
                    <option value="2">Perempuan</option>
                  </select>
                  <label>Jenis Kelamin Ketua</label>
                </div>
                <div class="input-field col s12 l4">
                  <select name="gender2">
                    <option value="-" disabled selected>Pilih Jenis Kelamin</option>
                    <option value="1">Laki-laki</option>
                    <option value="2">Perempuan</option>
                  </select>
                  <label>Jenis Kelamin Anggota pertama</label>
                </div>
                <div class="input-field col s12 l4">
                  <select name="gender3">
                    <option value="-" disabled selected>Pilih Jenis Kelamin</option>
                    <option value="1">Laki-laki</option>
                    <option value="2">Perempuan</option>
                  </select>
                  <label>Jenis Kelamin Anggota Kedua</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12 l4">
                  <input id="email_ketua" name="email1" type="email" class="validate">
                  <label for="email_ketua">Email Ketua</label>
                </div>
                <div class="input-field col s12 l4">
                  <input id="email_anggota_satu" name="email2" type="email" class="validate">
                  <label for="email_anggota_satu">Email Anggota Pertama</label>
                </div>
                <div class="input-field col s12 l4">
                  <input id="email_anggota_kedua" name="email3" type="email" class="validate">
                  <label for="email_anggota_kedua">Email Anggota Kedua</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12 l6">
                  <input id="no_telp" name="wa1" type="number" class="validate">
                  <label for="no_telp">Nomor Telepon</label>
                </div>
                <div class="input-field col s12 l6">
                  <input id="id_line" name="line1" type="text" class="validate">
                  <label for="id_line">ID Line</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="asal_sekolah" name="institusi" type="text" class="validate">
                  <label for="asal_sekolah">Institusi</label>
                </div>
              </div>
              <div class="row">
                <div class="file-field input-field">
                  <div class="btn blue">
                    <span>Upload KTM Ketua Tim</span>
                    <input type="file" id="ktm1" name="ktm1" class="form-control" onchange="return fileValidation('ktm1')" required/>
                    <span id="ktm1-size"></span>
                  </div>
                  <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                  </div>
                </div>
                <div class="file-field input-field">
                  <div class="btn blue">
                    <span>Upload KTM Anggota 1</span>
                    <input type="file" id="ktm2" name="ktm2" class="form-control" onchange="return fileValidation('ktm2')" required/>
                    <span id="ktm2-size"></span>
                  </div>
                  <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                  </div>
                </div>
                <div class="file-field input-field">
                  <div class="btn blue">
                    <span>Upload KTM Anggota 2</span>
                    <input type="file" id="ktm3" name="ktm3" class="form-control" onchange="return fileValidation('ktm3')" required/>
                    <span id="ktm3-size"></span>
                  </div>
                  <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                  </div>
                </div>
              <div class="file-field input-field">
                <div class="btn blue">
                  <span>Surat Keterangan Siswa/wi atau Mahasiswa/wi Ketua Tim</span>
                  <input type="file" id="surat1" name="surat1" class="form-control" onchange="return fileValidation('surat1')" required/>
                  <span id="surat1-size"></span>
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text">
                </div>
              </div>
              <div class="file-field input-field">
                <div class="btn blue">
                 <span>Surat Keterangan Siswa/wi atau Mahasiswa/wi Anggota 1</span>
                 <input type="file" id="surat2" name="surat2" class="form-control" onchange="return fileValidation('surat2')" required/>
                 <span id="surat2-size"></span>
               </div>
               <div class="file-path-wrapper">
                 <input class="file-path validate" type="text">
               </div>
             </div>
             <div class="file-field input-field">
              <div class="btn blue">
                <span>Surat Keterangan Siswa/wi atau Mahasiswa/wi Anggota 2</span>
                <input type="file" id="surat3" name="surat3" class="form-control" onchange="return fileValidation('surat3')" />
                <span id="surat3-size"></span>
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
              </div>
            </div>
            <div class="row">
              <div class="center-align">
                <button class="btn blue waves-effect waves-light center-align" type="submit" name="action">Submit
                  <i class="material-icons right">send</i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Register Olimpiade Form Ends-->

</div>
  <!--Register Olimpiade Ends-->