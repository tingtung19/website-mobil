<div class="brand clearfix">
	<a href="<?=base_url('dashboard');?>" style="font-size: 20px;"><?php echo $data_profil['nama_profil'];?> | Admin Panel</a>  
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		<ul class="ts-profile-nav">
			
			<li class="ts-account">
				<a href="#">Administrator <i class="fa fa-angle-down hidden-side"></i></a>
				<ul>
					<li><a href="<?php echo base_url('login/ubah_password'); ?>">Ubah Password</a></li>
					<li><a href="<?php echo base_url('login/logout'); ?>">Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>
