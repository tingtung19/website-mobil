<?php
      $this->load->view('frontend/meta_atas');
      $this->load->view('frontend/header');
      $this->load->view('frontend/format_rupiah');
      $this->load->view('frontend/'.$content.'');
      $this->load->view('frontend/footer');
      	

      // $this->load->view('frontend/registration');
      $this->load->view('frontend/login');
      $this->load->view('frontend/forgotpassword');
      $this->load->view('frontend/meta_bawah');

?>
<!-- Back to top-->
		<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
		<!--/Back to top--> 

