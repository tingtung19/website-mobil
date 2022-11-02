

<!--Page Header-->
<section class="page-header contactus_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Hubungi Kami</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Hubungi Kami</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 

<!--Contact-us-->
<section class="contact_us section-padding">
  <div class="container">
    <div  class="row">
      <div class="col-md-6">
        <h3>Ada Pertanyaan? Silahkan Isi Form Berikut </h3>
          <!-- <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
        else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?> -->
        <div class="contact_form gray-bg">
          <form  method="post" action="<?=base_url('contact_us/kirim_email');?>">
            <div class="form-group">
              <label class="control-label">Nama Lengkap <span>*</span></label>
              <input type="text" name="nama" class="form-control white_bg" id="fullname" required>
            </div>
            <div class="form-group">
              <label class="control-label">Alamat Email <span>*</span></label>
              <input type="email" name="email" class="form-control white_bg" id="emailaddress" required>
            </div>
            <div class="form-group">
              <label class="control-label">Nomor HP <span>*</span></label>
              <input type="text" name="no_hp" class="form-control white_bg" id="phonenumber" required>
            </div>
            <div class="form-group">
              <label class="control-label">Pesan <span>*</span></label>
              <textarea class="form-control white_bg" name="pesan" rows="4" required></textarea>
            </div>
            <div class="form-group">
              <button class="btn" type="submit" name="kirim" type="submit">Kirim Pesan <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-6">
        <h3>Info Kontak</h3>
        <div class="contact_detail">

          <ul>
            <li>
              <div class="icon_wrap"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
              <div class="contact_info_m"><?php   echo htmlentities($data_profil['alamat_profil']); ?></div>
            </li>
            <li>
              <div class="icon_wrap"><i class="fa fa-phone" aria-hidden="true"></i></div>
              <div class="contact_info_m"><a href=""><?php   echo htmlentities($data_profil['nohp_profil']); ?></a></div>
            </li>
            <li>
              <div class="icon_wrap"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
              <div class="contact_info_m"><a href=""><?php   echo htmlentities($data_profil['email_profil']); ?></a></div>
            </li>
          </ul>
        
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Contact-us--> 

