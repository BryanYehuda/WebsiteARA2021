<div class="container contact-form">
    <div class="contact-image">
        <img src="<?php echo base_url().'assets/img/logo.png' ?>" alt="rocket_contact" />
    </div>
    <form action="<?php echo base_url().'daftar/iot' ?>" method="post" enctype="multipart/form-data">
        <h3>Pendaftaran KTI IoT ARA 2021</h3>
        <div class="row">
            <div class="col">
                <div class="form-group" >
                    <span>Nama Tim: </span>
                    <input type="text" name="nama_tim" id="tim" class="form-control" placeholder="Nama Tim" value="" required/>
                    <span id="team_result"></span>
                </div>
                <div class="form-group">
                   <span>Institusi : </span>
                    <input type="text" name="institusi" class="form-control" placeholder="Institution ex: ITS, SMAN 1 Surabaya" value="" required/>
                </div>
                <div class="form-group" >
                    <span>Anggota 1 (ketua tim): </span>
                    <input type="text" name="nama1" class="form-control" placeholder="Member 1 Name" value="" required/>

                    <input type="text" name="id1" class="form-control" placeholder="Student 1 ID" value="" required/>

                    <select class="form-control" name="gender1" id="jenis_kelamin_pertama" required>
                        <option selected="selected">Pilih Jenis Kelamin</option>
                        <option value="0">Laki-laki</option>
                        <option value="1">Perempuan</option>
                    </select>

                    <input type="email" name="email1" class="form-control" placeholder="Member 1 Email" value="" required/>

                    <input type="text" name="alamat1" class="form-control" placeholder="Alamat" value="" required/>

                    <input type="tel" name="wa1" class="form-control" placeholder="No Whatsapp Format 0812-XXXX-XXXX" value="" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}" required/>


                    <input type="text" name="line1" class="form-control" placeholder="ID Line" value="" required/>

                </div>
                <div class="form-group" >
                    <span>Anggota 2: </span>
                    <input type="text" name="nama2" class="form-control" placeholder="Member 2 Name" value="" required/>

                    <input type="text" name="id2" class="form-control" placeholder="Student 2 ID" value="" required/>

                    <select class="form-control" name="gender2" id="jenis_kelamin_pertama" required>
                        <option selected="selected">Pilih Jenis Kelamin</option>
                        <option value="0">Laki-laki</option>
                        <option value="1">Perempuan</option>
                    </select>

                    <input type="email" name="email2" class="form-control" placeholder="Member 2 Email" value="" required/>

                </div>

                <div class="form-group" >
                    <span>Anggota 3: </span>
                    <input type="text" name="nama3" class="form-control" placeholder="Member 3 Name" value="" required/>

                    <input type="text" name="id3" class="form-control" placeholder="Student 3 ID" value="" required/>

                    <select class="form-control" name="gender3" id="jenis_kelamin_pertama" required>
                        <option selected="selected">Pilih Jenis Kelamin</option>
                        <option value="0">Laki-laki</option>
                        <option value="1">Perempuan</option>
                    </select>

                    <input type="email" name="email3" class="form-control" placeholder="Member 3 Email" value="" required/>

                </div>
                
                <div class="form-group">
                    <span>Kartu Pelajar / Kartu Tanda Mahasiswa : </span>
                    <input type="file" id="ktm1" name="ktm1" class="form-control" onchange="return fileValidation('ktm1')" required/>
                    <span id="ktm1-size"></span>
                    <input type="file" id="ktm2" name="ktm2" class="form-control" onchange="return fileValidation('ktm2')" required/>
                    <span id="ktm2-size"></span>
                    <input type="file" id="ktm3" name="ktm3" class="form-control" onchange="return fileValidation('ktm3')" />
                    <span id="ktm3-size"></span>
                </div>
                <div class="form-group">
                    <span>Surat Keterangan Siswa/wi atau Mahasiswa/wi: </span>
                    <input type="file" id="surat1" name="surat1" class="form-control" onchange="return fileValidation('surat1')" required/>
                    <span id="surat1-size"></span>
                    <input type="file" id="surat2" name="surat2" class="form-control" onchange="return fileValidation('surat2')" required/>
                    <span id="surat2-size"></span>
                    <input type="file" id="surat3" name="surat3" class="form-control" onchange="return fileValidation('surat3')" />
                    <span id="surat3-size"></span>
                </div>
                <!-- <div class="form-group">
                    <span>Bukti Pembayaran: </span>
                    <input type="file" id="bayar" name="bayar" class="form-control" onchange="return fileValidation('bayar')" required/>
                    <span id="bayar-size"></span>
                </div> -->
                <div class="form-group">
                    <input type="submit" name="btnSubmit" class="btnContactSubmit" value="Submit" style="width: 100%;"/>
                </div>
            </div>
        </div>
    </form>
</div>