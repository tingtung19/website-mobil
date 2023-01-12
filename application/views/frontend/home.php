

<!-- Banners -->
<section id="banner" class="banner-section">
  <div class="container">
    <div class="div_zindex">
      <div class="row">
        <div class="col-md-5 col-md-push-7">
          <div class="banner_content">
            <h1 style="color: black">Cari Mobil untuk kenyamanan anda.</h1>
            <p>Kami Punya beberapa pilihan untuk anda. </p>
            <a href="<?php echo base_url('car_listing');?>" class="btn">Selengkapnya <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a> </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Banners --> 

<section class="">
  <div class="container">
    <div class="row">
      <div class="col-md-12 ">
        <div class="product-listing-m white-bg">
          <div class="product-listing-img">
              
              <img src="image/profil/<?php echo htmlentities($data_profil['file_profil']);?>" height="100" width="300" class="img-responsive pull-right" alt="Image" /> </a> 
              
          </div>
          <div class="product-listing-content">
            <h5><a href="<?php echo base_url('about_us');?>"> <?php echo htmlentities($data_profil['nama_profil']);?></a></h5>
            <?php echo substr($data_profil['deskripsi_profil'],0,400);?> ...
           
            <p><a href="<?php echo base_url('about_us');?>" class="btn btn-sm">Lihat Selengkapnya <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></p>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>


<!-- Resent Cat-->
<section class="section-padding gray-bg">
  <div class="container">
    <div class="row"> 
      
      <!-- Nav tabs -->
      <div class="recent-tab">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#resentnewcar" role="tab" data-toggle="tab">Mobil Untuk Anda</a></li>
        </ul>
      </div>
      <!-- Recently Listed New Cars -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="resentnewcar">

        <?php 
        foreach ($data_mobil as $data_m ) {
        ?>  

          <div class="col-list-3">
            <div class="recent-car-list">
                <div class="car-info-box"> <a href="<?php echo base_url(); ?>home/detail_mobil/<?php echo htmlentities($data_m['id_mobil']);?>"><img src="<?php echo base_url(); ?>image/mobil/<?php echo htmlentities($data_m['gambar']);?>" class="img-responsive" alt="image"></a>
                  <ul>
                  <!-- <li><i class="fa fa-car" aria-hidden="true"></i><?php echo htmlentities($data_m['bb']);?></li>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo htmlentities($data_m['tahun']);?> Model</li>
                  <li><i class="fa fa-user" aria-hidden="true"></i><?php echo htmlentities($data_m['seating']);?> Seats</li> -->
                  </ul>
                </div>
                <div class="car-title-m">
                  <h6><a href="<?php echo base_url(); ?>home/detail_mobil/<?php echo htmlentities($data_m['id_mobil']);?>"><?php echo htmlentities($data_m['nama_mobil']);?></a></h6>
                  <span class="price"><?php echo htmlentities(format_rupiah($data_m['harga']));?> </span> 
                </div>
                <div class="inventory_info_m">
                  <p><?php echo substr($data_m['deskripsi'],0,70);?></p>
                </div>
            </div>
          </div>
        <?php }?>
       
      </div>
    </div>
  </div>
</section>
<!-- /Resent Cat --> 

<!-- Section News -->
<section class="section-padding gray-bg">
  <div class="container">
    <div class="row"> 
      
      <!-- Nav tabs -->
      <div class="recent-tab">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#resentnewcar" role="tab" data-toggle="tab">Kabar Honda</a></li>
        </ul>
      </div>
      <!-- Recently Listed New Cars -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="resentnewcar">

        <?php 
        foreach ($data_berita as $data_b ) {
        ?>  

          <div class="col-list-3">
            <div class="recent-car-list">
                <div class="car-info-box"> <a href="<?php echo base_url(); ?>home/detail_berita/<?php echo htmlentities($data_b['id_berita']);?>"><img src="<?php echo base_url(); ?>image/berita/<?php echo htmlentities($data_b['gambar_berita']);?>" class="img-responsive" alt="image"></a>
                  <ul>
                  <!-- <li><i class="fa fa-car" aria-hidden="true"></i><?php echo htmlentities($data_b['bb']);?></li>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo htmlentities($data_b['tahun']);?> Model</li>
                  <li><i class="fa fa-user" aria-hidden="true"></i><?php echo htmlentities($data_b['seating']);?> Seats</li> -->
                  </ul>
                </div>
                <div class="car-title-m">
                  <h6><a href="<?php echo base_url(); ?>home/detail_berita/<?php echo htmlentities($data_b['id_berita']);?>"><?php echo htmlentities($data_b['judul_berita']);?></a></h6>
                  <!-- <span class="price"><?php echo htmlentities(format_rupiah($data_b['harga']));?> </span>  -->
                </div>
                <div class="inventory_info_m">
                  <p><?php echo substr($data_b['deskripsi_berita'],0,100);?> ... <a href="<?php echo base_url(); ?>home/detail_berita/<?php echo htmlentities($data_b['id_berita']);?>">Selengkapnya</a> </p>
                </div>
            </div>
          </div>
        <?php }?>
       
      </div>
    </div>
  </div>
</section>
<!-- /News --> 


