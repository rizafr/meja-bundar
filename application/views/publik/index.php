<?php
function slugify($text)
{
  // replace non letter or digits by -
	$text = preg_replace('~[^\pL\d]+~u', '-', $text);

  // transliterate
	$text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

  // remove unwanted characters
	$text = preg_replace('~[^-\w]+~', '', $text);

  // trim
	$text = trim($text, '-');

  // remove duplicate -
	$text = preg_replace('~-+~', '-', $text);

  // lowercase
	$text = strtolower($text);

	if (empty($text)) {
		return 'n-a';
	}

	return $text;
}
?>
<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
	<title><?= $instansi->nama_instansi;?></title>
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
	<!-- Custom Theme files -->
	<!--theme-style-->
	<link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet" type="text/css" media="all" />
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
	<!--//theme-style-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Fashion Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!--fonts-->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900' rel='stylesheet' type='text/css'>
	<!--//fonts-->
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
</head>
<body> 
	<!--header-->
	<div class="header" id="home">
		<div class="container">
			<div class="header-top">
				<div class="logo">
					<a href="/"><img src="<?php echo base_url(); ?>assets/img/logoajakecil.png" alt="" ></a>
				</div>
				<div class="top-nav">
					<span class="menu"> </span>
					<ul>
						<li class="active" ><a href="index.html" class="scroll">HOME</a></li>
						<li><a href="#about" class="scroll"> ABOUT</a></li>
						<li><a href="#wedowell" class="scroll">WE DO WELL</a></li>
						<li><a href="#team" class="scroll">TEAM</a></li>
						<li><a href="#portfolio" class="scroll">PORTFOLIO </a></li>
						<li><a href="#contact" class="scroll">CONTACT </a></li>
					</ul>
					<script>
						$("span.menu").click(function(){
							$(".top-nav ul").slideToggle(500, function(){
							});
						});
					</script>
				</div>
				<div class="clearfix"> </div>
			</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>
	<!---->
	<div class="banner">
		<div class="banner-matter">
			<h2 style="color: #000; font-size: 26px;">Be Drawn to the Visual Arts for It Can Expand Your Imagination.</h2>
			<h4>
				By Barbara Januszkiewicz
			</h4>
			<img src="<?php echo base_url(); ?>assets/img/logoajakecil.png" style="height: 300px">							
		</div>
		<a href="#about" class="scroll arrow"><img src="<?php echo base_url(); ?>assets/img/arrow.png" alt=""></a>
	</div>
	<!--content-->
	<div class="content">	
		<div class="about" id="about">
			<div class="container">
				<h3>ABOUT</h3>
				<video id="vidbg" preload="auto" autoplay="true" loop="loop">
					<source src="<?php echo base_url(); ?>assets/mov/vidbg.mp4" type="video/mp4"> 
				</video>
				<p class="dummy-about">
					<?= $instansi->nama_instansi;?> speaks through visual experience. <br />
					We Called ourselves as visual explorer.
				</p>
				<a href="#work" class="scroll down-in">
					<i class="fa fa-angle-down"></i>
				</a>
			</div>
		</div>
		<!---->
		<div class="container">
			<div class="wedowell" id="wedowell">
			    <div class="wow fadeInUp">
			        <h3>Things We Do Well</h3>
			    </div>

			    <div class="row wow wedowell--list fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
			        <div class="col-md-4"> <div class="wedowell--item"> Visual Stage   </div></div>
			        <div class="col-md-4"> <div class="wedowell--item"> Visual Mapping </div></div>
			        <div class="col-md-4"> <div class="wedowell--item"> Video Mapping  </div></div>
			        <div class="col-md-4"> <div class="wedowell--item"> Infographics   </div></div>
			        <div class="col-md-4"> <div class="wedowell--item"> Company Profile</div></div>
			        <div class="col-md-4"> <div class="wedowell--item"> After Movie    </div></div>
			    </div>
			</div>
		</div>

		<!---->
		<div class="content">
		    <div class="team wow fadeInUp" id="team">
		        <h3>The Team</h3>

		    <div class="team wrapper wow fadeIn">
		        <div class="row wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
		            <div class="col-md-4 team--item">
		                <img src="<?php echo base_url(); ?>assets/img/deva.jpg" alt="daivalana">
		                <h3>Daivalana</h3>
		                <a class="fa fa-instagram"></a>
		                <a class="fa fa-linkedin"></a>
		            </div>
		            <div class="col-md-4 team--item">
		                <img src="<?php echo base_url(); ?>assets/img/iqra.jpg" alt="iqra">
		                <h3>Iqra</h3>
		                <a href="https://instagram.com/iqrasadra" class="fa fa-instagram"></a>
		                <a href="http://linkedin.com/in/iqrasadra" class="fa fa-linkedin"></a>
		            </div>
		            <div class="col-md-4 team--item">
		                <img src="<?php echo base_url(); ?>assets/img/aim.jpg" alt="luqman">
		                <h3>Luqman</h3>
		                <a class="fa fa-instagram"></a>
		                <a class="fa fa-linkedin"></a>
		            </div>
		            <div class="col-md-4 team--item">
		                <img src="<?php echo base_url(); ?>assets/img/gunawan.jpg" alt="Gunawan">
		                <h3>Gunawan</h3>
		                <a class="fa fa-instagram"></a>
		                <a class="fa fa-linkedin"></a>
		            </div>
		            <div class="col-md-4 team--item">
		                <img src="<?php echo base_url(); ?>assets/img/arvin.jpg" alt="Arvin">
		                <h3>Arvin</h3>
		                <a class="fa fa-instagram"></a>
		                <a class="fa fa-linkedin"></a>
		            </div>
		            <div class="col-md-4 team--item">
		                <img src="<?php echo base_url(); ?>assets/img/dince.jpg" alt="Gita">
		                <h3>Gita</h3>
		                <a class="fa fa-instagram"></a>
		                <a class="fa fa-linkedin"></a>
		            </div>
		        </div>
		    </div>
		    </div>
		</div>

		<div class="container">
			<div class="portfolio" id="portfolio">
			<h3>Latest Work</h3>
				<?php  if (count($portfolios)) : ?>
				<div class="container">
				    <div class="row">
				        <div class="portfolio-filter">
				            <button class="btn btn-default filter-button" data-filter="all">All</button>
				            <?php
				                foreach ($portfolios as $portfolio => $item) {
				                    $role = $item->role;
				                    $roleItems = explode(',', $role);
				                    $listCategory[] = $roleItems[0];
				                }
				                $result = array_unique($listCategory);
				            ?>
				            <?php foreach ($result as $key => $value) : ?>
				                <button class="btn btn-default filter-button" data-filter="<?= slugify($value);?>"><?= $value;?></button>
				            <?php endforeach; ?>
				        </div>
				    </div>
				    <br/>
				    <div class="row">
				        <?php
				        foreach ($portfolios as $portfolio => $item): 
				            $query = $this->db->get_where('portfolioItems', array('portfolioId' => $item->id));
				            $row = $query->row();
				            $picture = 'portfolio-images/no-image-available.png';
				            if (count($row)) {
				                $picture = $row->pictureUrl;
				            }
				            $role = $item->role;
				            $category = explode(',', $role);
				        ?>

				        <div class="portfolio-list col-md-4 wow fadeInUp filter <?= slugify($category[0]);?>">
				        <a href="<?php echo base_url(); ?>publik/portofolio/<?= $item->id ?>" class="grid-overlay">
				            <span class="grid-caption">
				            <strong><?= $item->title?></strong>
				            </span>
				        </a>
				        <img style= "background-image: url('<?= base_url() . $picture ?>')" alt="" class="hover-shadow wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
				       </a>
				       </div>

				        <?php 
				        endforeach; 
				        ?>
				        </div>
				    </div>
				<?php endif ;?>
			</div>
		</div>
							  
	</div>
<!---pop-up-box---->
<link href="<?php echo base_url(); ?>assets/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
<script src="<?php echo base_url(); ?>assets/js/jquery.magnific-popup.js" type="text/javascript"></script>
<!-- /caption-popup -->
<div class="design">
	<!---->
	<div class="contact" id="contact">
		<div class="container">
			<h3>CONTACT</h3>
			<p>Start your project today <span>or</span> Maybe you're here just to say '<span>Hi</span>'?</p>
			<p>
				<a href="mailto:studiomejabundar@gmail.com"><span class="wow fadeInUp">studio<?= $instansi->nama_instansi;?>@gmail.com</span></a>
			</p>
				<div class="map-responsive">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d990.1942973570784!2d107.6207129!3d-6.9172204!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e632af4fff39%3A0xdfeffaeb9d65df0f!2sMejaBundar+Studio!5e0!3m2!1sen!2sid!4v1505233673263" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div

			</div>
		</div>
	</div>
	<!--footer-->
	<div class="footer">
		<div class="container">
			<a href="#home" class="scroll footer-top">
				<img src="<?php echo base_url(); ?>assets/img/drop.png" alt=""/>
			</a>
			<ul class="social-ic-icons">
				<li><a href="http://instagram.com/mejabunstudio">Instagram</a></li>
				<li><a href="http://instagram.com/mejabunstudio">Behance</a></li>
				<li><a href="http://instagram.com/mejabunstudio">Linkedin</a></li>
				<li><a href="http://instagram.com/mejabunstudio">Youtube</a></li>
			</ul>
			<div class="footer-grid">
			    <div id="address">
			        <h4><a href="https://goo.gl/maps/PtTxQrwFnCw">Jl. Gudang Selatan No.22 A, Bandung, ID</a></h4>
			    </div>
			</div>

		</div>	
	</div>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>


	<script type="text/javascript">
		$(document).ready(function() {
			new WOW().init();

		    $(".filter-button").click(function(){
		        var value = $(this).attr('data-filter');
		        
		        if(value == "all")
		        {
		            $('.filter').show('1000');
		        }
		        else
		        {
		            $(".filter").not('.'+value).hide('3000');
		            $('.filter').filter('.'+value).show('3000');
		            
		        }
		    });
		    
		    if ($(".filter-button").removeClass("active")) {
		        $(this).removeClass("active");
		    }
		    $(this).addClass("active");

		});
	</script>

	</body>
</html>