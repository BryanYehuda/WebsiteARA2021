<div class="container contact-form">
    <div class="contact-image">
        <img src="<?php echo base_url().'assets/img/logo.png' ?>" alt="rocket_contact" />
    </div>
    <form action="<?php echo base_url().'daftar/webinar' ?>" method="post" enctype="multipart/form-data">
        <h3>Pendaftaran Webinar ARA 2021</h3>
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
                    <input type="file" id="bayar" name="bayar" class="form-control" onchange="return fileValidation('bayar')" required/>
                    <span id="bayar-size"></span>
                </div>
                <div class="form-group">
                    <input type="submit" name="btnSubmit" class="btnContactSubmit" value="Submit" style="width: 100%;"/>
                </div>
            </div>
        </div>
    </form>
</div>