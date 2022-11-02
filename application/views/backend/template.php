<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title><?php echo $data_profil['nama_profil'];?> | Admin Dashboard</title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/style.css">
</head>

<body>
	<?php
	  $this->load->view('backend/header');
	  
	  ?>
	  <div class="ts-main-content">
	<?php
	  $this->load->view('backend/leftbar');
      $this->load->view('backend/format_rupiah');
      $this->load->view('backend/'.$content.'');

    ?>
<!-- Loading Scripts -->
	<script src="<?php echo base_url();?>assets/admin/js/jquery.min.js"></script>
	<script src="<?php echo base_url();?>assets/admin/js/bootstrap-select.min.js"></script>
	<script src="<?php echo base_url();?>assets/admin/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/admin/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url();?>assets/admin/js/dataTables.bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/admin/js/Chart.min.js"></script>
	<script src="<?php echo base_url();?>assets/admin/js/fileinput.js"></script>
	<script src="<?php echo base_url();?>assets/admin/js/chartData.js"></script>
	<script src="<?php echo base_url();?>assets/admin/js/main.js"></script>
	
	<script>
		
	window.onload = function(){
    
		// Line chart from swirlData for dashReport
		var ctx = document.getElementById("dashReport").getContext("2d");
		window.myLine = new Chart(ctx).Line(swirlData, {
			responsive: true,
			scaleShowVerticalLines: false,
			scaleBeginAtZero : true,
			multiTooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",
		}); 
		
		// Pie Chart from doughutData
		var doctx = document.getElementById("chart-area3").getContext("2d");
		window.myDoughnut = new Chart(doctx).Pie(doughnutData, {responsive : true});

		// Dougnut Chart from doughnutData
		var doctx = document.getElementById("chart-area4").getContext("2d");
		window.myDoughnut = new Chart(doctx).Doughnut(doughnutData, {responsive : true});

	}
	</script>
</body>
</html>
