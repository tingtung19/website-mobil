
</style>

		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Kelola Berita</h2>
						
						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">Daftar Berita</div>
							<div class="panel-body">
								<div class="pull-right">
									<a class="btn btn-sm btn-primary" href="<?php echo base_url('berita/tambah_berita');?>"> <span class="fa fa-plus"></span> Tambah Berita</a>
								</div>
								<hr>
								
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
										<th>Tanggal Upload</th>
										<th>Judul Berita</th>
										<th>Deskripsi </th>
										<th>Gambar</th>
										<th>Aksi</th>
										</tr>
									</thead>
									<tbody>

									<?php 
										$nomor = 0;
										foreach ($data_berita as $result) {
											$id_berita=$result['id_berita'];
											$nomor++;
											?>
										<tr >
											<td><?php echo htmlentities($nomor);?></td>
											<td><?php echo htmlentities($result['tgl_upload']);?></td>
											<td><?php echo htmlentities($result['judul_berita']);?></td>
											<td><?php echo substr($result['deskripsi_berita'],0,50);?> ...</td>
											<td><?php 
													
														echo "<a target='_BLANK' href='".base_url()."image/berita/$result[gambar_berita]'> 
														<img class='img-responsive' width='50' src='".base_url()."image/berita/$result[gambar_berita]'></a><br>";
													
												?>
											</td>
											<td><!-- <a href="<?php echo base_url();?>berita/edit_berita/<?php echo $result['id_berita'];?>"><i class="fa fa-edit"></i></a>&nbsp;&nbsp; -->
											<a href="<?php echo base_url();?>berita/hapus_berita/<?php echo $result['id_berita'];?>" onclick="return confirm('Apakah anda yakin akan menghapus <?php echo $result['judul_berita'];?>?');"><i class="fa fa-close"></i></a></td>
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
	