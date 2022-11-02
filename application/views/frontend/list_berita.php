

<!--Page Header-->
<section class="page-header listing_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Daftar Berita</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Daftar Berita</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 

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
                <div class="car-info-box"> <a href="<?php echo base_url(); ?>kabar_honda/detail_berita/<?php echo htmlentities($data_b['id_berita']);?>"><img src="<?php echo base_url(); ?>image/berita/<?php echo htmlentities($data_b['gambar_berita']);?>" class="img-responsive" alt="image"></a>
                  <ul>
                  <!-- <li><i class="fa fa-car" aria-hidden="true"></i><?php echo htmlentities($data_b['bb']);?></li>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo htmlentities($data_b['tahun']);?> Model</li>
                  <li><i class="fa fa-user" aria-hidden="true"></i><?php echo htmlentities($data_b['seating']);?> Seats</li> -->
                  </ul>
                </div>
                <div class="car-title-m">
                  <h6><a href="<?php echo base_url(); ?>kabar_honda/detail_berita/<?php echo htmlentities($data_b['id_berita']);?>"><?php echo htmlentities($data_b['judul_berita']);?></a></h6>
                  <!-- <span class="price"><?php echo htmlentities(format_rupiah($data_b['harga']));?> </span>  -->
                </div>
                <div class="inventory_info_m">
                  <p><?php echo substr($data_b['deskripsi_berita'],0,100);?> ... <a href="<?php echo base_url(); ?>kabar_honda/detail_berita/<?php echo htmlentities($data_b['id_berita']);?>">Selengkapnya</a> </p>
                </div>
            </div>
          </div>
        <?php }?>
       
      </div>
    </div>
  </div>
</section>
