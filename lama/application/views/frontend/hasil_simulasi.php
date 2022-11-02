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
        <h2>Simulasi Angsuran Mobil Honda</h2>
        <p style="color: red">*Estimasi pembiayaan angsuran pembelian mobil (belum termasuk biaya administrasi, asuransi dan provisi)</p>
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
            <h5><i class="fa fa-envelope" aria-hidden="true"></i>Hitung Simulasi</h5>
          </div>
          <?php
            $this->load->view('frontend/form_simulasi');
          ?>
          <div class="main_features">
             <table class="table table-borderless">
                <tbody>
                  <tr>
                    <td width="30%">Harga Mobil</td>
                    <td scope="col">: <?php echo format_rupiah($harga); ?></td>
                    
                  </tr>
                  <tr>
                    <td scope="col">Uang Muka</td>
                    <td scope="col">: <?php echo format_rupiah($dp); ?></td>
                   
                  </tr>
                  <tr>
                    <td scope="col">Bunga</td>
                    <td scope="col">: <?php echo $bunga; ?> %</td>
                    
                  </tr>
                  <tr>
                    <td scope="col">Jumlah Bulan</td>
                    <td scope="col">: <?php echo $bulan; ?> Bulan</td>
                   
                  </tr>
                </tbody>
              </table>
              <table class="table">

                <thead>
                  <tr>
                    <th scope="col">Bulan</th>
                    <th scope="col">Jumlah Angsuran</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                if ($harga!=0) {
                  $plafon_pinjaman=$harga-$dp;                  
                  $angsuran_pokok=$plafon_pinjaman/$bulan;
                  $angsuran_bunga=(($bunga/100)*$plafon_pinjaman) /12; 
                  $angsuran_perbulan=$angsuran_pokok+$angsuran_bunga;
                  $angsuran_pertama=$dp+$angsuran_perbulan;

                  echo "<tr>
                            <th scope='row'><center>1</center></th>
                            <td>".format_rupiah($angsuran_pertama)."</td>
                   
                          </tr>"  ;
                  for ($i=2; $i <= $bulan ; $i++) { 
                    echo "<tr>
                            <th scope='row' ><center>$i</center></th>
                            <td>".format_rupiah($angsuran_perbulan)."</td>
                   
                          </tr>";
                  }
                }
                ?>
                
                
                </tbody>
              </table>
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