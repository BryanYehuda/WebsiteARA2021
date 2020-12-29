<!-- CSS Link here -->
<link href="<?php echo base_url().'assets/style.css' ?>" rel="stylesheet">

<header id="header">
  <div class="logo">
       <img
            id="header-img"
            src="<?php echo base_url().'assets/img/navicon.png' ?>"
            alt="ARA"
            />
    </div>
<!--navbar-->    
  <nav id="nav-bar">  
    <ul class="nav-big">
      <li><a class="nav-link" href=#home>Home</a></li>    
      <li><a class="nav-link" href=#offers>Pendaftaran</a></li>
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

<!--banner-->    

<section id="home" class="banner-area">
  <div class="img-area">
    <div class="banner-text">
        <div class="title">
            <h1>ARA</h1>
            <h1>2021</h1>
        </div>
        <div class="banner-subtext">
        <h3>Perlombaan Internet of Things dan Cyber Security</h3>
      </div>
        <div class="banner-btn" href="#offers">
            <a href="#offers">DAFTAR</a>
        </div>
    </div>
  </div>
</section>

<!--kategori-->    

<section id="offers" class="service-area">
  <div class="service-header">
    <h1>Kategori Kegiatan</h1>
  </div>
  <div class="service-border"></div>
    
<!--cards-->

  <div class="cards-container">
    <div class="card">
      <div class="card-img"></div>
        <div class="card-text">
            <h1>Capture the Flag</h1>
            <p>Capture The Flag atau yang biasa disebut dengan CTF adalah sebuah percabangan lomba hacking mahasiswa tingkat nasional dari kegiatan ARA 2021.</p>
            
            <div class="btn-daftar">
            <a href="<?php echo base_url().'pendaftaran/ctf'; ?>">DAFTAR</a>
            </div>
        </div>
    </div>

    <div class="card">
      <div class="card-img2"></div>
        <div class="card-text">
            <h1>KTI IoT</h1>
            <p>Dalam kegiatan ini, peserta lomba diharapkan dapat menuangkan idenya pada topik Internet of Things dalam bentuk karya tulis ilmiah.</p>
            
            <div class="btn-daftar">
            <a href="<?php echo base_url().'pendaftaran/ctf'; ?>">DAFTAR</a>
            </div>
        </div>
    </div>

    <div class="card">
      <div class="card-img3"></div>
        <div class="card-text">
            <h1>Webinar</h1>
            <p>Webinar tentang IoT dan Cybersecurity, sesuai dengan tema ARA 2021.</p>
            
            <div class="btn-daftar">
            <a href="<?php echo base_url().'pendaftaran/ctf'; ?>">DAFTAR</a>
            </div>
        </div>
    </div>

    <div class="card">
      <div class="card-img4"></div>
        <div class="card-text">
            <h1>Olimpiade IT</h1>
            <p>Olimpiade Module Based dengan tema IoT dan Cybersecurity dengan dua babak (penyisihan dan final) untuk SMA sederajat seluruh Indonesia</p>
            <div class="btn-daftar">
            <a href="<?php echo base_url().'pendaftaran/ctf'; ?>">DAFTAR</a>
            </div>
        </div>
    </div>
  </div>      
</section>

<!--Contact-->

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

<script src="<?php echo base_url().'assets/home.js' ?>"></script>
