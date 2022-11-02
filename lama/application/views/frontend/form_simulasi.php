        <form method="post" action="<?php echo base_url('simulasi/proses_simulasi');?>">
            <!-- <input type="hidden" class="form-control" name="vid" value=<?php echo $id_berita;?> required>      -->
              <div class="form-group" align="center">
                <input type="number" class="form-control" name="harga" id="harga" onkeyup="tampilDP()" placeholder="Harga Mobil">
              </div>  
              <div class="form-group" align="center">
                <input type="number" class="form-control" name="dp" id="dp" placeholder="Uang Muka Minimal 25%">
              </div> 
              <div class="form-group" align="center">
                
                <select name="bulan" id="bulan" class="form-control" onchange="tampilBunga()">
                  <option value="12"> 12 Bulan</option>
                  <option value="24"> 24 Bulan</option>
                  <option value="36"> 36 Bulan</option>
                  <option value="48"> 48 Bulan</option>
                  <option value="60"> 60 Bulan</option>
                </select>
              </div> 
              <div class="form-group" align="center">
                <input type="text" class="form-control" name="bunga" id="bunga" value="6.85">
              </div> 
              
              <div class="form-group" align="center">
                <button  class="form-control btn btn-primary" align="center" type="submit" name="submit">Hitung Simulasi</button><br>
              </div>         
                <!-- <a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Login Untuk Menyewa</a> -->
          </form>