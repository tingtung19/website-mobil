

<!--Page Header-->
<section class="page-header listing_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Daftar Mobil</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Daftar Mobil</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 

<!--Listing-->
<section class="listing-page">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-md-push-3">
        <div class="result-sorting-wrapper">
          <div class="sorting-count">

<p><span> Mobil</span></p>
</div>
</div>

<?php 

foreach ($data_mobil as $result) {

 ?>
        <div class="product-listing-m gray-bg">
          <div class="product-listing-img"><img src="<?php echo base_url().'image/mobil/'.htmlentities($result['gambar']);?>" class="img-responsive" alt="Image" /> </a> 
          </div>
          <div class="product-listing-content">
            <h5><a href="<?php echo base_url('home/detail_mobil/').htmlentities($result['id_mobil']);?>"> <?php echo htmlentities($result['nama_mobil']);?></a></h5>
            <p>#<?php echo htmlentities($result['nama_kategori']);?></p>
            <p class="list-price">Mulai <?php echo htmlentities(format_rupiah($result['harga']));?> </p>
            <ul>
              <!-- <li><i class="fa fa-user" aria-hidden="true"></i><?php echo htmlentities($result['seating']);?> Seats</li>
              <li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo htmlentities($result['tahun']);?> </li>
              <li><i class="fa fa-car" aria-hidden="true"></i><?php echo htmlentities($result['bb']);?></li> -->
            </ul>
            <a href="<?php echo base_url('home/detail_mobil/').htmlentities($result['id_mobil']);?>" class="btn">Lihat Detail <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
          </div>
        </div>
      <?php } ?>
         </div>
      
      <!--Side-Bar-->
     <aside class="col-md-3 col-md-pull-9">
		<div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-filter" aria-hidden="true"></i>Cari Mobil</h5>
          </div>
          <div class="sidebar_filter">
            <form action="<?php echo base_url('car_listing/cari');?>" method="post">
              <div class="form-group select">
                <select class="form-control" name="id_kategori" required>
                  <option value="" selected>Pilih Kategori</option>
                  <?php 
					         foreach ($data_kategori as $data_k) {
                    
						 ?>
					<option value="<?php echo htmlentities($data_k['id_kategori']);?>"><?php echo htmlentities($data_k['nama_kategori']);?></option>
				  <?php } ?>
                </select>
              </div>
              <div class="form-group">
                <input type="text" name="cari" class="form-control" placeholder="Kata kunci">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-block"><i class="fa fa-search" aria-hidden="true"></i>Cari</button>
              </div>
            </form>
          </div>
        </div>
	 
        <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-car" aria-hidden="true"></i>Mobil Terbaru</h5>
          </div>
          <div class="recent_addedcars">
            <ul>
			<?php
				foreach ($data_mobil_left as $result) {
         
         ?>
					<li class="gray-bg">
						<div class="recent_post_img"> <a href="<?php echo base_url('home/detail_mobil/'); ?><?php echo htmlentities($result['id_mobil']);?>"><img src="<?php echo base_url().'image/mobil/'.htmlentities($result['gambar']);?>" alt="image"></a> </div>
						<div class="recent_post_title"> <a href="<?php echo base_url('home/detail_mobil/'); ?><?php echo htmlentities($result['id_mobil']);?>"><?php echo htmlentities($result['nama_mobil']);?></a>
						<p class="widget_price">Mulai <?php echo htmlentities(format_rupiah($result['harga']));?> </p>
						</div>
					</li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </aside>
      <!--/Side-Bar--> 
    </div>
  </div>
</section>
<!-- /Listing--> 
