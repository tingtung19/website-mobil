
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
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);fe
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
								<form  method="post" class="form-horizontal" action="<?php echo base_url('master/edit_spek/1'); ?>" >
									<div class="form-group">
										<label class="col-sm-3 control-label">Nama Spek</label>
										<div class="col-sm-9">
											<input type="hidden" class="form-control" name="id_spek" id="" value="<?php echo $data_kategori['id_spek']; ?>">
											<input type="text" class="form-control" name="nama_spek" id="" value="<?php echo $data_kategori['nama_spek']; ?>">
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-9 col-sm-offset-3">
											<button class="btn btn-sm btn-primary" type="submit" name="submit"><span class="fa fa-pencil"></span> Ubah Spesifikasi</button>
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
	