
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

						<h2 class="page-title">Kelola Spesifikasi</h2>
						
						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">Daftar Spesifikasi</div>
							<div class="panel-body">
								<form  method="post" class="form-horizontal" action="<?php echo base_url('master/spek'); ?>" >
									<div class="form-group">
										<label class="col-sm-3 control-label">Nama Spesifikasi</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" name="nama_spek" id="" placeholder="Nama Spesifikasi">
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-9 col-sm-offset-3">
											<button class="btn btn-sm btn-primary" type="submit" name="submit"><span class="fa fa-plus-circle"></span> Tambah Spesifikasi</button>
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
										<th>Nama Spesifikasi</th>
										
										<th>Aksi</th>
										</tr>
									</thead>
									<tbody>

									<?php 
										$nomor = 0;
										foreach ($data_spek as $result) {
										
											$nomor++;
											?>
										<tr align="center">
											<td><?php echo htmlentities($nomor);?></td>
											<td><?php echo htmlentities($result['nama_spek']);?></td>
											
											<td><a href="<?php echo base_url();?>master/edit_spek/<?php echo $result['id_spek'];?>"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
											<a href="<?php echo base_url();?>master/hapus_spek/<?php echo $result['id_spek'];?>" onclick="return confirm('Apakah anda yakin akan menghapus <?php echo $result['nama_spek'];?>?');"><i class="fa fa-close"></i></a></td>
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
	