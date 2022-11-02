
<!--Listing-detail-->
<section class="listing-detail">
  <div class="container">
    <div class="listing_detail_head row">
      <div class="col-md-9">
        <h2><?php echo htmlentities($data_berita['judul_berita']);?></h2>
        <p>Oleh <?php echo htmlentities($data_berita['username'])."  | ".$data_berita['tgl_upload'];?> </p>
      </div>
      <div class="col-md-3">
        <div class="price_info">
          
         
        </div>
      </div>

      <div class="col-md-9">
        <!--Listing-Image-Slider-->
          <div class="recent-car-list">
              <div class="car-info-box"> 
                <div><img src="<?php echo base_url();?>image/berita/<?php echo htmlentities($data_berita['gambar_berita']);?>" class="img-responsive" alt="image" >
                </div>
              </div>
          </div> 
          <div class="main_features">
          <p style="text-align: justify"><?php echo htmlentities($data_berita['deskripsi_berita']);?></p>
          
        </div>
      </div>

      <aside class="col-md-3">

        <div class="share_vehicle">
          <p>Share: <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a> </p>
        </div>
        <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-envelope" aria-hidden="true"></i>Booking Sekarang</h5>
          </div>
          <!--<form method="get" action="booking.php">-->
            
              <div class="form-group" align="center">
                <a href="<?=base_url('contact_us');?>"><button class="btn" align="center">Booking Sekarang</button></a><br>
              </div>          
                <!-- <a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Login Untuk Menyewa</a> -->
          <!--</form>-->

          <div class="widget_heading">
            <h5><i class="fa fa-envelope" aria-hidden="true"></i>Hitung Simulasi</h5>
          </div>
          <?php
            $this->load->view('frontend/form_simulasi');
          ?>
        </div>
      </aside>
      <!--/Side-Bar--> 
    </div>
    
</section>