
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

						<h2 class="page-title">Kelola Mobil</h2>
						
						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">Daftar Mobil</div>
							<div class="panel-body">
								<div class="pull-right">
									<a class="btn btn-sm btn-primary" href="<?php echo base_url('mobil/tambah_mobil');?>"> <span class="fa fa-plus"></span> Tambah Mobil</a>
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
										<th>Nama Mobil</th>
										<th>Deskripsi Mobil</th>
										<th>Gambar</th>
										<th>Aksi</th>
										</tr>
									</thead>
									<tbody>

									<?php 
										$nomor = 0;
										foreach ($data_mobil as $result) {
											$id_mobil=$result['id_mobil'];
											$nomor++;
											?>
										<tr align="center">
											<td><?php echo htmlentities($nomor);?></td>
											<td><?php echo htmlentities($result['nama_mobil']);?></td>
											<td><?php echo substr($result['deskripsi'],0,50);?> ...</td>
											<td><?php 
													$data_gambar=$this->front_model->lihat_where('t_gambar',array('id_mobil'=> $id_mobil))->result_array();
													foreach ($data_gambar as $data_g) {
														echo "<a target='_BLANK' href='".base_url()."image/mobil/$data_g[gambar]'> 
														<img class='img-responsive' width='50' src='".base_url()."image/mobil/$data_g[gambar]'></a><br>";
													}
												?>
											</td>
											<td><!-- <a href="<?php echo base_url();?>mobil/edit_mobil/<?php echo $result['id_mobil'];?>"><i class="fa fa-edit"></i></a>&nbsp;&nbsp; -->
											<a href="<?php echo base_url();?>mobil/hapus_mobil/<?php echo $result['id_mobil'];?>" onclick="return confirm('Apakah anda yakin akan menghapus <?php echo $result['nama_mobil'];?>?');"><i class="fa fa-close"></i></a></td>
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
	