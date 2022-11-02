
<?php

foreach ($data_m as $data_mobil) {
?>
<!--Listing-detail-->
<section class="listing-detail">
  <div class="container">
    <div class="listing_detail_head row">
      <div class="col-md-9">
        <h2><?php echo htmlentities($data_mobil['nama_mobil']);?></h2>
      </div>
      <div class="col-md-3">
        <div class="price_info">
          <p>Mulai <?php echo htmlentities(format_rupiah($data_mobil['harga']));?> </p>
         
        </div>
      </div>

      <div class="col-md-12">
        <!--Listing-Image-Slider-->
          <section id="listing_img_slider">
            <?php
            foreach ($data_gambar as $data_g) {
              ?>
            <div><img src="<?php echo base_url();?>image/mobil/<?php echo htmlentities($data_g['gambar']);?>" class="img-responsive" alt="image" width="900" height="560"></div>
            
            <?php } ?>
          </section>
      </div>
    </div>
    <div class="row">
      <div class="col-md-9">
        <div class="main_features">
          <p style="text-align: justify"><?php echo htmlentities($data_mobil['deskripsi']);?></p>
          <ul>
          
            <li> <i class="fa fa-calendar" aria-hidden="true"></i>
              <h5><?php echo htmlentities($data_mobil['nama_kategori']);?></h5>
              <p>Tahun Registrasi</p>
            </li>
            <!-- <li> <i class="fa fa-cogs" aria-hidden="true"></i>
              <h5><?php echo htmlentities($data_mobil['bb']);?></h5>
              <p>Tipe Bahan Bakar</p>
            </li>
       
            <li> <i class="fa fa-user-plus" aria-hidden="true"></i>
              <h5><?php echo htmlentities($data_mobil['seating']);?></h5>
              <p>Seats</p> -->
            </li>
          </ul>
        </div>
        <div class="listing_more_info">
          <div class="listing_detail_wrap"> 
            <!-- Nav tabs -->
            <ul class="nav nav-tabs gray-bg" role="tablist">
              <!-- <li role="presentation" class="active"><a href="#vehicle-overview " aria-controls="vehicle-overview" role="tab" data-toggle="tab">Deskripisi Kendaraan</a></li> -->
              <?php
              foreach ($data_tipe as $data_t) {
                echo "<li role='presentation'><a href='#$data_t[id_tipe]' aria-controls='$data_t[id_tipe]' role='tab' data-toggle='tab'>$data_t[nama_tipe]</a></li>";
              }
              ?>
            </ul>
            
            <!-- Tab panes -->
            <div class="tab-content"> 
             
              <?php
              foreach ($data_tipe as $data_t) {
                $id_tipe=$data_t['id_tipe'];
              ?>
              <div role="tabpanel" class="tab-pane" id="<?php echo $data_t['id_tipe']; ?>"> 
                <!--Accessories-->
                <table>
                  <thead>
                    <tr>
                      <th colspan="1"><?php echo $data_t['nama_tipe']; ?></th>
                      <th><?php echo htmlentities(format_rupiah($data_t['harga']));?></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $data_spek=$this->front_model->queryku("select * from t_detail_tipe a, t_spek b where a.id_spek=b.id_spek and a.id_tipe='$id_tipe'")->result_array();
                    foreach ($data_spek as $data_s) {
                      echo"
                    <tr>
                      <td>$data_s[nama_spek]</td>
                      <td>$data_s[keterangan_spek]</td>
                    </tr>";
                   
                    }
                    ?>
                  </tbody>
                </table>
              </div> <!-- /tab-pane -->
              <?php 
              }
              ?>

            </div> <!-- /tab-content -->
          </div>
          
        </div>
<?php } ?>
   
      </div>
      <!--Side-Bar-->
      <aside class="col-md-3">

        <div class="share_vehicle">
          <p>Share: <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a> </p>
        </div>
        <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-envelope" aria-hidden="true"></i>Booking Sekarang</h5>
          </div>
          <!--<form method="get" action="booking.php">-->
            <input type="hidden" class="form-control" name="vid" value=<?php echo $id_mobil;?> required>     
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
  </div>
</section>