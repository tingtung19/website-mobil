
 <style>
.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
</style>

		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Kelola Detail Kriteria</h2>
						
						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">Daftar Detail Kriteria</div>
							<div class="panel-body">
								<form  method="post" class="form-horizontal" action="<?php echo base_url('spk/data_detail_kriteria'); ?>" >
									<div class="form-group">
										<label class="col-sm-3 control-label">Kriteria</label>
										<div class="col-sm-9">
											<select class="form-control" name="id_kriteria">
												<?php
													foreach ($data_kriteria as $dk) {
														echo "<option value='$dk[id_kriteria]'>$dk[nama_kriteria]</option>";
													}
												?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Nama Detail Kriteria</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" name="nama_detail_kriteria" id="" placeholder="Nama Kriteria">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Nama Detail Kriteria</label>
										<div class="col-sm-9">
											<select class="form-control" name="nilai">
						                    <option value="rendah">Rendah</option>
						                    <option value="sedang">Sedang</option>
						                    <option value="tinggi">Tinggi</option>

						                </select>
										</div>
									</div>
									
									<div class="form-group">
										<div class="col-sm-9 col-sm-offset-3">
											<button class="btn btn-sm btn-primary" type="submit" name="submit"><span class="fa fa-plus-circle"></span> Tambah Detail Kriteria</button>
										</div>
									</div>
								</form>
								
							<!-- <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
							else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?> -->
							<?php
							if(isset($msg) ){
							?>
								<div class="succWrap"><strong>INFO</strong>:<?php echo htmlentities($msg); ?> </div>
							<?php 
								}
							?> 

								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr align="center">
										<th>No</th>
										<th>Nama Kriteria</th>
										<th>Nama Detail Kriteria</th>
										<th>Nilai</th>
										<th>Aksi</th>
										</tr>
									</thead>
									<tbody>

									<?php 
										$nomor = 0;
										foreach ($data_detail_kriteria as $result) {
										
											$nomor++;
											?>
										<tr align="center">
											<td><?php echo htmlentities($nomor);?></td>
											<td><?php echo htmlentities($result['id_kriteria']);?></td>
											<td><?php echo htmlentities($result['nama_detail_kriteria']);?></td>

											<td><?php echo htmlentities($result['nilai']);?></td>
											
											<td><a href="<?php echo base_url();?>spk/edit_detail_kriteria/<?php echo $result['id_detail_kriteria'];?>"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
											<a href="<?php echo base_url();?>spk/hapus_detail_kriteria/<?php echo $result['id_detail_kriteria'];?>" onclick="return confirm('Apakah anda yakin akan menghapus <?php echo $result['nama_detail_kriteria'];?>?');"><i class="fa fa-close"></i></a></td>
										</tr>
										<?php }?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	