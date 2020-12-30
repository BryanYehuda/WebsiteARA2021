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


<section id="webinar" class="webinar-form">

    <div class="info-area">
        <div class="img-area" style="background-image: url(../assets/img/webinarform.png);">
        </div>
        <div class="text-area">
            <div class="title">
                <h1>Webinar IoT & CyberSecurity</h1>
                <div class="title-border"></div>
            </div>
            <div class="exp-area">
                <div class="exp">
                    <p>Webinar ARA adalah kegiatan seminar online yang diadakan pada platform Zoom sekaligus sebagai acara pembuka pada rangkaian kegiatan ARA 2021. Webinar yang diselenggarakan oleh HMIT ITS ini akan menjadi webinar yang mengusung topik Internet of Things dan Cyber Security dimana kedua topik tersebut merupakan dua bidang yang difokuskan pada ARA 2021.</p>
                </div>
                <div class="title">
                    <h1>Pelaksanaan</h1>
                    <div class="title-border"></div>
                </div>
                <div class="jadwal">
                    <p>Jadwal : - </p>
                    <p>Syarat : - </p>
                </div>
                <button class="btn-daftar" onclick="openForm()">
                    <a>DAFTAR</a>
                </button>  
            </div>
        </div>
    </div>

    <div class="form-area">
        <div class="form-inside">        
            <form action="<?php echo base_url().'daftar/webinar' ?>" method="post" enctype="multipart/form-data">
                <h3>Pendaftaran Webinar ARA 2021</h3>
                <div class="white"></div>
                <div class="row">
                    <div class="col">
                        <div class="form-group" >
                            <span>Biodata : </span>
                            <input type="text" name="nama" class="form-control" placeholder="Nama" required/>

                            <input type="text" name="institusi" class="form-control" placeholder="Institusi. Contoh: ITS, SMAN 1 Surabaya" required/>

                            <div class="form-group" >
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email" required/>
                                <span id="email_result"></span>
                            </div>

                            <input type="tel" id="wa" name="wa" class="form-control" placeholder="No Whatsapp. Contoh: 0812-XXXX-XXXX" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}" required/>
                            <span id="wa_result"></span>
                        </div>  
                        <div class="form-group">
                            <span>Bukti Share Webinar: </span>
                            <input type="file" id="bayar" name="bayar" class="form-control custom-file-input" onchange="return fileValidation('bayar')" required/>
                            <label class="custom-file-label form-control" for="bayar">Bukti Share</label>
                            <span id="bayar-size"></span>
                        </div>
                        <div id="buttons" class="form-group text-center">
                            <input type="submit" name="btnSubmit" class="btn btn-primary" value="Submit" style="width: 40%;"/>
                        </div>
                        <div id="buttons" class="form-group text-center">
                            <input type="button" name="btnCancel" class="btn btn-danger" value="Cancel" style="width: 40%;" onclick="openForm()"/>
                        </div>

                        <div class="white2"></div>

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