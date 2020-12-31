<!-- CSS Link here -->
<link href="<?php echo base_url().'assets/form.css' ?>" rel="stylesheet">


<!-- nav -->
<header id="header">
  <div class="logo">
       <img
            id="header-img"
            src="<?php echo base_url().'assets/img/navicon.png' ?>"
            alt="ARA"
            onclick="window.location='<?php echo base_url(); ?>';"
            />
    </div>
<!--navbar-->    
  <nav id="nav-bar">  
  <ul class="nav-big">
      <li><a class="nav-link" href="<?php echo base_url(); ?>">Home</a></li>    
      <li><a class="nav-link" onclick="openForm()" href=#offers>Daftar</a></li>
      <li><a class="nav-link" href=#contact>Kontak</a></li>
    </ul>
      
    <ul class="nav-area">  
      <li><a class="small nav-link" href="<?php echo base_url(); ?>">Home</a></li>    
      <li><a class="small nav-link" href="<?php echo base_url().'pendaftaran/ctf'; ?>">Daftar CTF</a></li>
      <li><a class="small nav-link" href="<?php echo base_url().'pendaftaran/iot'; ?>">Daftar KTI IoT</a></li>
      <li><a class="small nav-link" href="<?php echo base_url().'pendaftaran/olimpiade'; ?>">Daftar Olimpiade IT</a></li>
      <li><a class="nav-link" href="<?php echo base_url().'pendaftaran/olimpiade'; ?>">Daftar Webinar</a></li>
    </ul>
  </nav>
    <div class="burger">
        <div class="line"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>
</header>


<!-- form -->
<section id="ctf" class="ctf-form">

    <div class="info-area">
        <div class="img-area" style="background-image: url(../assets/img/olimform.png);">
        </div>
        <div class="text-area">
            <div class="title">
                <h1>Olimpiade IT</h1>
                <div class="title-border"></div>
            </div>
            <div class="exp-area">
                <div class="exp">
                    <p>Olimpiade Cyber Security dan Internet of Things adalah salah satu cabang kegiatan ARA yang ditujukan untuk seluruh siswa SMA/Sederajat di seluruh Indonesia. Berbekal dengan 1-3 anggota akan dihadapkan dengan dua babak seleksi yaitu babak penyisihan dan babak final, olimpiade akan diadakan dalam dua hari.</p>
                </div>
                <div class="title">
                    <h1>Pelaksanaan</h1>
                    <div class="title-border"></div>
                </div>
                <div class="jadwal">
                    <p>Jadwal : - </p>
                    <p>Syarat : - </p>
                </div>
                <div class="btn-daftar" onclick="openForm()">
                    <a>DAFTAR</a>
                </div>  
            </div>
        </div>
    </div>

    <div class="form-area">
        <div class="form-inside">
            <form action="<?php echo base_url().'daftar/olimpiade' ?>" method="post" enctype="multipart/form-data">
                <h3>Pendaftaran Olimpiade ARA 2021</h3>
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
                            <input type="file" id="ktm1" name="ktm1" class="form-control custom-file-input ktm" onchange="return fileValidation('ktm1')" required hidden/>
                            <label class="custom-file-label form-control ktm-label" for="ktm1">KTM 1</label>
                            <span id="ktm1-size"></span>
                            <input type="file" id="ktm2" name="ktm2" class="form-control custom-file-input ktm2" onchange="return fileValidation('ktm2')" required hidden/>
                            <label class="custom-file-label form-control ktm-label2" for="ktm2">KTM 2</label>
                            <span id="ktm2-size"></span>
                            <input type="file" id="ktm3" name="ktm3" class="form-control custom-file-input ktm3" onchange="return fileValidation('ktm3')" hidden/>
                            <label class="custom-file-label form-control ktm-label3" for="ktm3">KTM 3</label>
                            <span id="ktm3-size"></span>
                        </div>
                        <div class="form-group">
                            <span>Pas foto (3 x 4 rapi) masing - masing anggota tim: </span>
                            <input type="file" id="foto1" name="foto1" class="form-control custom-file-input foto" onchange="return fileValidation('foto1')" required hidden/>
                            <label class="custom-file-label form-control foto-label" for="foto1">Pas Foto</label>
                            <span id="foto1-size"></span>
                            <input type="file" id="foto2" name="foto2" class="form-control custom-file-input foto2" onchange="return fileValidation('foto2')" required hidden/>
                            <label class="custom-file-label form-control foto-label2" for="foto2">Pas Foto</label>
                            <span id="foto2-size"></span>
                            <input type="file" id="foto3" name="foto3" class="form-control custom-file-input foto3" onchange="return fileValidation('foto3')" hidden/>
                            <label class="custom-file-label form-control foto-label3" for="foto3">Pas Foto</label>
                            <span id="foto3-size"></span>
                        </div>
                        <div class="form-group">
                            <span>Bukti Pembayaran: </span>
                            <input type="file" id="bayar" name="bayar" class="form-control custom-file-input" onchange="return fileValidation('bayar')" required hidden/>
                            <label class="custom-file-label form-control" for="bayar">Bukti Pembayaran</label>
                            <span id="bayar-size"></span>
                        </div>
                        <div id="buttons" class="form-group text-center">
                            <input type="submit" name="btnSubmit" class="btn btn-primary" value="Submit" style="width: 40%;"/>
                        </div>
                        <div id="buttons" class="form-group text-center">
                            <input type="button" name="btnCancel" class="btn btn-danger" value="Cancel" style="width: 40%;" onclick="openForm()"/>
                        </div>

                        <div class="form-x" onclick="openForm()">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- contact -->
<section id="contact" class="contact-area">
  <div class="contact-container">
    <div class="contact-text">
      <h1>Temui kami di</h1>
    </div>
      <div class="contact-sosial">
      <div class="contact-img">
        <a href="https://linktr.ee/ARA2021/" target="_blank">
        <img
            id="img-linktree"
            src="<?php echo base_url().'assets/img/linktree.png' ?>"
            alt="LinkTree"
            /></a>
      </div>
      <div class="contact-img">
        <a href="https://www.instagram.com/ara_its/" target="_blank">
        <img
            id="img-ig"
            src="<?php echo base_url().'assets/img/ins.png' ?>"
            alt="Instagram"
            /></a>
      </div>
      <div class="contact-img">
        <a href="https://vt.tiktok.com/ZSbLUXBu/" target="_blank">
        <img
            id="img-tiktok"
            src="<?php echo base_url().'assets/img/tiktok.png' ?>"
            alt="TikTok"
            href="#home"
            /></a>
      </div>
    </div>
  </div>
</section>

<!-- SCRIPT -->
<script src="<?php echo base_url().'assets/form.js' ?>"></script>