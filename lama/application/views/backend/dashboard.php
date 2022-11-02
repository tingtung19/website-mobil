		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Dashboard</h2>

						<div class="row">
							<div class="col-md-12">
								<div class="row">

									<div class="col-md-4">
										<div class="panel panel-default">
											<div class="panel-body bk-info text-light">
												<div class="stat-panel text-center">
												<?php 
												
												?>
													<div class="stat-panel-number h1 "><?php echo htmlentities($data_mobil);?></div>
													<div class="stat-panel-title text-uppercase">Jumlah Mobil</div>
												</div>
											</div>
											<a href="<?=base_url('berita/data_berita');?>" class="block-anchor panel-footer text-center">Rincian &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									
									<div class="col-md-4">
										<div class="panel panel-default">
											<div class="panel-body bk-success text-light">
												<div class="stat-panel text-center">
												<?php 
										?>
													<div class="stat-panel-number h1 "><?php echo htmlentities($data_berita);?></div>
													<div class="stat-panel-title text-uppercase">Jumlah Artikel</div>
												</div>
											</div>
											<a href="<?=base_url('berita/data_berita');?>" class="block-anchor panel-footer text-center">Rincian &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>