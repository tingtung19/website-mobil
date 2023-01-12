<script>
function tampilDP() {
  var harga = document.getElementById("harga").value;
  var dp = document.getElementById("dp");
  dp.value = 0.25*harga;
}

function tampilBunga() {
  var bulan = document.getElementById("bulan").value;
  var bunga = document.getElementById("bunga");
  var besar_bunga;
  if (bulan==12) {
    besar_bunga='6.85';
  }else if (bulan==24) {
    besar_bunga='7.15';
  }else if (bulan==36) {
    besar_bunga='7.30';
  }else if (bulan==48) {
    besar_bunga='7.85';
  }else if (bulan==12) {
    besar_bunga='8.85';
  }
  bunga.value=besar_bunga;
}
</script>
<!--Listing-detail-->
<section class="listing-detail">
  <div class="container">
    <div class="listing_detail_head row">
      <div class="col-md-9">
        <h2>Rekomendasi Pemilihan Mobil Honda </h2>
        <p style="color: red">*Rekomendasi Pemilihan pembelian mobil honda dengan metode Multi Criteria Decision Making (MCDM)</p>
      </div>
      <div class="col-md-3">
        <div class="price_info">
          
         
        </div>
      </div>

      <div class="col-md-9">
        <!--Listing-Image-Slider-->
          <div class="recent-car-list">
              <div class="car-info-box"> 
               <!--  <div><img src="<?php echo base_url();?>image/berita/<?php echo htmlentities($data_berita['gambar_berita']);?>" class="img-responsive" alt="image" >
                </div> -->
              </div>
          </div> 
          <div class="widget_heading">
            <h5><i class="fa fa-envelope" aria-hidden="true"></i>Isi Form dibawah ini</h5>
          </div>
          <form class="form-horizontal" method="POST" action="#">

          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Nama Lengkap</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nama" id="inputEmail3" value="" placeholder="Nama">
            </div>
          </div>

          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">No HP</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="no_hp" id="inputEmail3" placeholder="No HP">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>
            <div class="col-sm-10">
              <textarea class="form-control" name="alamat"></textarea>
            </div>
          </div>

          <div class="widget_heading">
            <h5><i class="fa fa-list" aria-hidden="true"></i>Isi Nilai Kriteria</h5>
          </div>
          
          <?php
           foreach ($data_kriteria as $dk) {
            ?>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label"><?=$dk['nama_kriteria'];?></label>
              
              <div class="col-sm-8">
                <select class="form-control" name="c1">
                <?php
                  $data_detail = $this->front_model->lihat_where('t_detail_kriteria', ["id_kriteria" => $dk['id_kriteria'] ])->result_array();
                  foreach ($data_detail as $dd) {
                      echo "<option value='$dd[id_detail_kriteria]'>$dd[nama_detail_kriteria]</option>";
                  }
                ?>  
                </select>
              </div>
            </div>


          <?php
           }

          ?>

          
            
            <div class="form-group" align="center">
                <button  class="form-control btn btn-primary" align="center" type="submit" name="submit">Proses Rekomendasi</button><br>
              </div> 
            
          </form>
          
          <div class="main_features">  
            <?php
                    
            if(isset($hasil_spk)) {

            ?>
            <div class="product-listing-m gray-bg">
              <div class="product-listing-img"><img src="<?php echo base_url().'image/mobil/'.htmlentities($hasil_spk['gambar']);?>" class="img-responsive" alt="Image" /> </a> 
              </div>
              <div class="product-listing-content">
                <h5><a href="<?php echo base_url('home/detail_mobil/').htmlentities($hasil_spk['id_mobil']);?>"> <?php echo htmlentities($hasil_spk['nama_mobil']);?></a></h5>
                <p>#<?php echo htmlentities($hasil_spk['nama_kategori']);?></p>
                <p class="list-price">Mulai <?php echo htmlentities(format_rupiah($hasil_spk['harga']));?> </p>
                <ul>
                  <!-- <li><i class="fa fa-user" aria-hidden="true"></i><?php echo htmlentities($hasil_spk['seating']);?> Seats</li>
                  <li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo htmlentities($hasil_spk['tahun']);?> </li>
                  <li><i class="fa fa-car" aria-hidden="true"></i><?php echo htmlentities($hasil_spk['bb']);?></li> -->
                </ul>
                <a href="<?php echo base_url('home/detail_mobil/').htmlentities($hasil_spk['id_mobil']);?>" class="btn">Lihat Detail <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
              </div>
            </div>
            <?php 
            } 
            ?>
          </div>
        </div>
      </div>

      
      <!--/Side-Bar--> 
    </div>
    
</section>