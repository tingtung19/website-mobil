
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Profil </h2>
						
						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">Profil</div>
							<div class="panel-body">
								<form  method="post" class="form-horizontal" action="<?php echo base_url('admin/profil'); ?>" enctype="multipart/form-data">
									<div class="form-group">
										<label class="col-sm-3 control-label">Nama Profil</label>
										<div class="col-sm-6">
											<input type="text" class="form-control" name="nama_profil" id="" value="<?php echo $data_profil['nama_profil'] ;?>">
											<input type="hidden" class="form-control" name="id_profil" id="" value="<?php echo $data_profil['id_profil'] ;?>">
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label">Deskripsi Profil</label>
										<div class="col-sm-6">

											<textarea class="form-control" name="deskripsi_profil"><?php echo $data_profil['deskripsi_profil'] ;?></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Alamat Profil</label>
										<div class="col-sm-6">
											<textarea class="form-control" name="alamat_profil"><?php echo $data_profil['alamat_profil'] ;?></textarea>
											
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label">Email Profil</label>
										<div class="col-sm-6">
											
											<input type="email" class="form-control" name="email_profil" value="<?php echo $data_profil['email_profil'] ;?>">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Nomor HP Profil</label>
										<div class="col-sm-6">
											
											<input type="text" class="form-control" name="nohp_profil" value="<?php echo $data_profil['nohp_profil'] ;?>">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">File Profil</label>
										<div class="col-sm-6">
											<?php
												if (isset($data_profil['file_profil'])) {
													echo "<img src='".base_url()."/image/profil/$data_profil[file_profil]' width='50' height='50' class='img-fluid img-thumbnail'>";
													echo "<input type='hidden' name='file_lama' value='$data_profil[file_profil]'>";
												}
											?>
											
											<input type="file" class="form-control" name="file_profil" >
										</div>
									</div>

									

									<div class="form-group">
										<div class="col-sm-9 col-sm-offset-3">
											<button class="btn btn-sm btn-primary" type="submit" name="submit"><span class="fa fa-ceklis"></span> Simpan Profil</button>
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
	