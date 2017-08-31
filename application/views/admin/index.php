<?php 
	$q_instansi	= $this->db->query("SELECT * FROM tr_instansi LIMIT 1")->row();
?>
<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <head>
		<title>.:: <?= $q_instansi->nama_instansi;?> ::.</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<style type="text/css">
			@font-face {
			font-family: 'Cabin';
			font-style: normal;
			font-weight: 400;
			src: local('Cabin Regular'), local('Cabin-Regular'), url(<?php echo base_url(); ?>aset/font/satu.woff) format('woff');
			}
			@font-face {
			font-family: 'Cabin';
			font-style: normal;
			font-weight: 700;
			src: local('Cabin Bold'), local('Cabin-Bold'), url(<?php echo base_url(); ?>aset/font/dua.woff) format('woff');
			}
			@font-face {
			font-family: 'Lobster';
			font-style: normal;
			font-weight: 400;
			src: local('Lobster'), url(<?php echo base_url(); ?>aset/font/tiga.woff) format('woff');
			}	
			
		</style>
		<link rel="stylesheet" href="<?php echo base_url(); ?>aset/css/bootstrap.css" media="screen">
		<link rel="stylesheet" href="<?php echo base_url(); ?>aset/css/bootstrap-reset.css" media="screen">
		<link rel="stylesheet" href="<?php echo base_url(); ?>aset/css/owl.carousel.css" media="screen">
		<link rel="stylesheet" href="<?php echo base_url(); ?>aset/css/animate.css" media="screen">
		<link rel="stylesheet" href="<?php echo base_url(); ?>aset/css/style.css" media="screen">
		<link rel="stylesheet" href="<?php echo base_url(); ?>aset/js/jquery/jquery-ui-1.10.1.custom.css" />	
		<link rel="stylesheet" href="<?php echo base_url(); ?>aset/css/step.css" media="screen">
		<link href="<?php echo base_url(); ?>aset/font-awesome/css/font-awesome.css" rel="stylesheet" />
		<link href="<?php echo base_url(); ?>aset/advanced-datatable/media/css/demo_page.css" rel="stylesheet" />
		<link href="<?php echo base_url(); ?>aset/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="../bower_components/bootstrap/assets/js/html5shiv.js"></script>
			<script src="../bower_components/bootstrap/assets/js/respond.min.js"></script>
		<![endif]-->
		<script src="<?php echo base_url(); ?>aset/js/jquery.js"></script>		
		<script src="<?php echo base_url(); ?>aset/js/jquery-1.11.1.min.js"></script>		
		<script src="<?php echo base_url(); ?>aset/js/jquery.nicescroll.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>aset/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>aset/js/jquery/jquery-ui-1.9.2.custom.min.js"></script>
		<script src="<?php echo base_url(); ?>aset/js/loading.js"></script>
		<script src="<?php echo base_url(); ?>aset/js/bootswatch.js"></script>
		<script src="<?php echo base_url(); ?>aset/js/bootstrap-tooltip.js"></script>
		<script src="<?php echo base_url() ?>aset/js/wow.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.css">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.js"></script>
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>
		
		
		<script type="text/javascript">
			// <![CDATA[
			$(document).ready(function () {
				new WOW().init();
				
				$(function() {
					$( "#date" ).datepicker({
						changeMonth: true,
						changeYear: true,
						dateFormat: 'yy-mm-dd'
					});
				});
			});
			// ]]>
		</script>
		
	</head>
	
	<body>
		
		<?php $this->load->view('admin/menu',['q_instansi' => $q_instansi]); ?>
		
		<div class="container">
			<div class="wrap">
				<div class="page-header animated fadeIn" data-wow-duration="2s" id="banner">
					<div class="row">
						<div class="" style="padding: 15px 15px 0 15px;">
							<div class="well well-sm">
								<img src="<?php echo base_url(); ?><?php echo $q_instansi->logo_instansi; ?>" class="thumbnail span3" style="display: inline; float: left; margin-right: 20px; width: 100px; height: 100px">
								<h2 style="margin: 15px 0 10px 0; color: #000;"><?php echo $q_instansi->nama_instansi; ?></h2>
								<div style="color: #000; font-size: 16px; font-family: Tahoma" class="clearfix"><b>Alamat : <?php echo $q_instansi->alamat_instansi; ?></b></div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- DINAMIC CONTENT PAGE-->				
				<?php $this->load->view('admin/'.$page); ?>	
				<!-- END DINAMIC CONTENT PAGE-->				
				
			</div>
		</div>
		
		
	</body>
	<script src="<?php echo base_url(); ?>aset/js/common-scripts.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>aset/js/jquery.dcjqaccordion.2.7.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>aset/js/owl.carousel.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>aset/js/count.js" type="text/javascript"></script>
	
	<script src="<?php echo base_url(); ?>aset/js/highcharts.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>aset/js/exporting.js" type="text/javascript"></script>
	
	<!--common script for all pages-->
	
	<!--script for this page only-->
	
	<script type="text/javascript" charset="utf-8">
		$(document).ready(function() {
			$('#example').dataTable( {
				"aaSorting": [[ 0, "desc" ]]
			} );
		} );
	</script>
	
	<!--main content end-->
	
	
	<script type="text/javascript" src="<?php echo base_url(); ?>aset/data-tables/jquery.dataTables.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>aset/data-tables/DT_bootstrap.js"></script>
	
	<script type="text/javascript">
		$(document).ready(function(){
			$(" #alert" ).fadeOut(5000);
		});
	</script>
	
	
	
</html>
