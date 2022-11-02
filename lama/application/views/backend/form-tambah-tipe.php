
</style>

		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Tambah Tipe Mobil</h2>
						
						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">Data Tipe Mobil</div>
							<div class="panel-body">
								<form  method="post" class="form-horizontal" action="<?php echo base_url('mobil/tambah_tipe/').$id_mobil; ?>" enctype="multipart/form-data">
									<div class="form-group">
										<label class="col-sm-3 control-label">Nama Mobil</label>
										<div class="col-sm-6">
											<input type="text" class="form-control" name="nama_mobil" id="" value="<?php echo $nama_mobil ;?>">
											<input type="hidden" class="form-control" name="id_mobil" id="" value="<?php echo $id_mobil ;?>">
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label">Nama Tipe Mobil</label>
										<div class="col-sm-6">
											<input type="text" class="form-control" name="nama_tipe">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Harga Mobil</label>
										<div class="col-sm-6">
											<input type="text" class="form-control" name="harga">
										</div>
									</div>

									<?php
									foreach ($data_spek as $data_s) {
									?>
									<div class="form-group">
										<label class="col-sm-3 control-label"><?php echo $data_s['nama_spek'] ;?></label>
										<div class="col-sm-6">
											<input type="hidden" class="form-control" name="id_spek[]" value="<?php echo $data_s['id_spek'];?>">
											<input type="text" class="form-control" name="keterangan_spek[]">
										</div>
									</div>
									<?php
									}

									?>

									<div class="form-group">
										<div class="col-sm-9 col-sm-offset-3">
											<button class="btn btn-sm btn-primary" type="submit" name="submit"><span class="fa fa-plus-circle"></span> Tambah Mobil</button>
										</div>
									</div>
								</form>
								
							<!-- <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
							else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?> -->
							

								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	