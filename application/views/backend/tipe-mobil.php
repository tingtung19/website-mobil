

		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Kelola Tipe Mobil</h2>
						
						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">Daftar Tipe Mobil</div>
							<div class="panel-body">
								<form  method="post" class="form-horizontal" action="<?php echo base_url('mobil/tipe_mobil'); ?>" enctype="multipart/form-data">
									
									<div class="form-group">
										<label class="col-sm-3 control-label">Kategori Mobil</label>
										<div class="col-sm-9">
											<select class="form-control" name="id_mobil" id="">
												<option value=""> - Pilih Nama Mobil -</option>
												<?php
													foreach ($data_mobil as $data_m) {
														echo "<option value='$data_m[id_mobil]'>$data_m[nama_mobil]</option>";
													}
												?>
												
											</select>
										</div>
									</div>
								
									<div class="form-group">
										<div class="col-sm-9 col-sm-offset-3">
											<button class="btn btn-sm btn-primary" type="submit" name="cek"><span class="fa fa-search"></span> Cek Tipe Mobil</button>
										</div>
									</div>
								</form>					
							

								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											<td colspan="6">
												<?php
												if (isset($id_mobil)) {
												?>
												<a class="btn btn-sm btn-primary" href="<?php echo base_url();?>mobil/tambah_tipe/<?php echo $id_mobil; ?>"><span class="fa fa-plus"></span>Tambah Tipe Mobil </a> 
											<?php } ?>
											</td>
										</tr>
									</thead>
									<thead>
										<tr align="center">
										<th>No</th>
										<th>Nama Mobil</th>
										<th>Nama Tipe</th>
										<th>Harga</th>
										<th>Spesifikasi</th>
										<th>Aksi</th>
										</tr>
									</thead>
									<tbody>

									<?php 
										$nomor = 0;
										if ($jumlah_tipe >1 ) {
											
											foreach ($data_tipe as $result) {
												$id_mobil=$result['id_mobil'];
												$id_tipe=$result['id_tipe'];
												$nomor++;
												?>
											<tr align="center">
												<td><?php echo htmlentities($nomor);?></td>
												<td><?php echo htmlentities($result['nama_mobil']);?></td>
												<td><?php echo htmlentities($result['nama_tipe']);?></td>
												<td><?php echo htmlentities(format_rupiah($result['harga']));?></td>
												<td style="text-align: left"><?php 
														$data_spek=$this->front_model->queryku("select * from t_detail_tipe a, t_spek b where a.id_spek=b.id_spek and a.id_tipe='$id_tipe'")->result_array();
														foreach ($data_spek as $data_s) {
															echo "$data_s[nama_spek] : $data_s[keterangan_spek]<br>";
														}
													?>
												</td>
												<td><!-- <a href="<?php echo base_url();?>mobil/edit_tipe/<?php echo $result['id_mobil'];?>"><i class="fa fa-edit"></i></a> -->&nbsp;&nbsp;
												<a href="<?php echo base_url();?>mobil/hapus_tipe/<?php echo $result['id_tipe'];?>" onclick="return confirm('Apakah anda yakin akan menghapus <?php echo $result['nama_tipe'];?>?');"><i class="fa fa-close"></i></a></td>
											</tr>
											<?php 
											}
										}
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	