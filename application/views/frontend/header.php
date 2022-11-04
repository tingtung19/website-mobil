
<header>
  <div class="default-header">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-2">
          <div class="logo"> <a href="<?php echo base_url('home') ;?>"><img src="<?php echo base_url('assets/images/logo11.png') ?>" alt="image"/></a> </div>
        </div>
        <div class="col-sm-9 col-md-10">
          <div class="header_info">
            <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
              <p class="uppercase_text">Email kami di : </p>
              <a href="mailto:<?php echo $data_profil['email_profil'] ;?>"><?php echo $data_profil['email_profil'] ;?> </div>
            <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-phone" aria-hidden="true"></i> </div>
              <p class="uppercase_text">Hubungi kami di : </p>
              <a href="tel:<?php echo $data_profil['nohp_profil'] ;?>"><?php echo $data_profil['nohp_profil'] ;?></a> </div>
            <div class="social-follow">
              <ul>
              <li><a href="https://facebook.com/herlina.santi1402"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
              <li><a href="https://api.whatsapp.com/send/?phone=6282116222882&text&app_absent=0"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
              <li><a href="https://g.page/honda-perkasa-klaten"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
              <li><a href="https://www.instagram.com/mobilhondaklaten/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
            </div>
 
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Navigation sdfdfd  fsf-->
  <nav id="navigation_bar" class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="header_wrap">
        <div class="user_login">
          <ul>       
            <li><a href="#loginform" data-toggle="modal" data-dismiss="modal">Login</a></li>
            </li>
          </ul>
        </div>
      </div>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="nav navbar-nav">
          <li><a href="<?php echo base_url('home'); ?>">Home</a></li>  
          <li><a href="<?php echo base_url('car_listing'); ?>">Daftar Mobil</a>   
          <li><a href="<?php echo base_url('simulasi/proses_simulasi'); ?>">Simulasi</a>   
          <li><a href="<?php echo base_url('spk'); ?>">Rekomendasi</a> 	 
          <li><a href="<?php echo base_url('about_us'); ?>">Tentang Kami</a></li>          
          <li><a href="<?php echo base_url('kabar_honda'); ?>">Kabar Honda</a></li>
          <li><a href="<?php echo base_url('contact_us'); ?>">Hubungi Kami</a></li>

        </ul>
      </div>
    </div>
  </nav>
  <!-- Navigation end --> 
  
</header>