<header id="header">
  <div class="logo">
       <img
            id="header-img"
            src="<?php echo base_url().'assets/img/navico.png' ?>"
            alt="ARA"
            />
    </div>
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
        <div class="line"></div>
        <div class="line"></div>
    </div>
</header>

<section id="home" class="banner-area">
  <div class="img-area">
    <div class="banner-text">
      <img
            id="banner-img"
            src="<?php echo base_url().'assets/img/ara2021.png' ?>"
            alt="ARA"
            />
        <div class="banner-subtext">
        <h3>Subtext isinya informasi apa itu ARA, lomba2nya, kapan, dll. Kalo bisa yang banyak biar bagus nanti. Atau serahlah</h3>
      </div>
        <div class="banner-btn" href="#offers">
            <a href="#offers">Daftar Sekarang</a>
        </div>
    </div>
  </div>
</section>

<section id="offers" class="service-area">
  <div class="service-header">
    <h1>KATEGORI</h1>
  </div> 
  <div class="cards-container">
    <div class="card">
      <div class="card-img">
        <img
             src="<?php echo base_url().'assets/img/ctf.png' ?>"
             id="first"
             class="in-img"
             alt="CTF"
             >
      </div>
      <h1>Capture the Flag</h1>
      <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <div class="btn-daftar">
            <a href="<?php echo base_url().'pendaftaran/ctf'; ?>">Daftar</a>
        </div>
    </div>
    <div class="card">
      <div class="card-img">
        <img
             src="<?php echo base_url().'assets/img/kti.png' ?>"
             id="second"
             class="in-img"
             alt="KTI"
             >
      </div>
      <h1>KTI IoT</h1>
      <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <div class="btn-daftar">
            <a href="<?php echo base_url().'pendaftaran/iot'; ?>">Daftar</a>
        </div>
    </div>
    <div class="card">
         <div class="card-img">
        <img
             src="<?php echo base_url().'assets/img/olim.png' ?>"
             id="third"
             class="in-img"
             alt="Olimpiade"
             >
      </div>
      <h1>Olimpiade</h1>
      <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <div class="btn-daftar">
            <a href="<?php echo base_url().'pendaftaran/olimpiade'; ?>">Daftar</a>
        </div>
    </div>    
    <div class="card">
           <div class="card-img">
        <img
             src="<?php echo base_url().'assets/img/webinar.png' ?>"
             id="fourth"
             class="in-img"
             alt="Webinar"
             >
      </div>
      <h1>Webinar</h1>
      <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <div class="btn-daftar">
            <a href="<?php echo base_url().'pendaftaran/webinar'; ?>">Daftar</a>
        </div>
    </div>
  </div>
</section>

<section id="contact" class="contact-area">
  <div class="footer">
    <h1>ARA</h1>
    <p>Teknologi Informasi Institut Teknologi Sepuluh Nopember</p>
  </div>
  <div class="footer-nav">
    <ul>
      <li><a class="footer-link">TikTok</a></li>
      <li><a class="footer-link">Instagram</a></li>
    </ul>
  </div>
</section>

<script src="<?php echo base_url().'assets/home.js' ?>"></script>
