<!Doctype html>
<html>
<head>
    <title><?= $instansi->nama_instansi;?></title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"> 

    <meta name="viewport" content="width=device-width">
</head>

<body>
    <header>
        <div class="container">
            <nav class="menu">
                <h2>Main Navigation</h2>
                <div id="burger-nav"></div>
                <ul>
                    <li><a href="#home" class="current">Home</a></li>                        
                    <li><a href="#about">About</a></li>             
                    <li><a href="#doweell">We Do Well</a></li>       
                    <li><a href="#team">Team</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>


    <div class="container">
        <div class="home" id="home">
            <div class="logo wow fadeInUp">
                <img src="<?php echo base_url(); ?>assets/img/logoajakecil.png">
            </div>
            <div class="quotes wow fadeInUp">
                <blockquote>“Be Drawn to the Visual Arts for It Can Expand Your Imagination.”</blockquote>
                <span>By Barbara Januszkiewicz</span>
            </div>
        </div>
    </div>

    <div class="bgblack" id="about">
        <div class="bgvid wow fadeIn">
            <video id="vidbg" preload="auto" autoplay="true" loop="loop">
                <source src="<?php echo base_url(); ?>assets/mov/vidbg.mp4" type="video/mp4"> 
                </video>
                <div class="about wrapper wow fadeInUp">
                    <h2><?= $instansi->nama_instansi;?> speaks through visual experience. <br />
                        We Called ourselves as visual explorer. </h2>
                    </div>
                </div>
            </div>


            <div class="wedowell container" id="doweell">
                <div class="wow fadeInUp">
                    <h3 class="title">Things We Do Well</h3>
                </div>

                <ul class="row wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                    <li class="col-md-3"> Visual Stage   </li>
                    <li class="col-md-3"> Visual Mapping </li>
                    <li class="col-md-3"> Video Mapping  </li>
                    <li class="col-md-3"> Infographics   </li>
                    <li class="col-md-3"> Company Profile</li>
                    <li class="col-md-3"> After Movie    </li>
                </ul>
            </div>

            <div class="bgblack">
                <div class="container wow fadeInUp" id="team">
                    <h3 class="title">The Team</h3>
                </div>

                <div class="team wrapper wow fadeIn">
                    <ul class="wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
                        <li>
                            <img src="<?php echo base_url(); ?>assets/img/deva.jpg" alt="daivalana">
                            <h3>Daivalana</h3>
                            <a class="fa fa-instagram"></a>
                            <a class="fa fa-linkedin"></a>
                        </li>
                        <li>
                            <img src="<?php echo base_url(); ?>assets/img/iqra.jpg" alt="iqra">
                            <h3>Iqra</h3>
                            <a href="https://instagram.com/iqrasadra" class="fa fa-instagram"></a>
                            <a href="http://linkedin.com/in/iqrasadra" class="fa fa-linkedin"></a>
                        </li>
                        <li>
                            <img src="<?php echo base_url(); ?>assets/img/aim.jpg" alt="luqman">
                            <h3>Luqman</h3>
                            <a class="fa fa-instagram"></a>
                            <a class="fa fa-linkedin"></a>
                        </li>
                        <li>
                            <img src="<?php echo base_url(); ?>assets/img/gunawan.jpg" alt="Gunawan">
                            <h3>Gunawan</h3>
                            <a class="fa fa-instagram"></a>
                            <a class="fa fa-linkedin"></a>
                        </li>
                        <li>
                            <img src="<?php echo base_url(); ?>assets/img/arvin.jpg" alt="Arvin">
                            <h3>Arvin</h3>
                            <a class="fa fa-instagram"></a>
                            <a class="fa fa-linkedin"></a>
                        </li>
                        <li>
                            <img src="<?php echo base_url(); ?>assets/img/dince.jpg" alt="Gita">
                            <h3>Gita</h3>
                            <a class="fa fa-instagram"></a>
                            <a class="fa fa-linkedin"></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="portfolio" id="portfolio">
                <div class="container">
                    <h3 class="title">Latest Work</h3>
                </div>

                <div class="container">
                    <div class="row">
                        <?php foreach ($portfolios as $portfolio => $item): ?>
                            <?php
                            $query = $this->db->get_where('portfolioItems', array('portfolioId' => $item->id));
                            $row = $query->row();
                            if (count($row)) :
                                ?>

                            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                                <div class="card wow fadeInUp">
                                    <div class="card-img-top" style="background-image: url('<?= base_url() . $row->pictureUrl ?>')"></div>
                                    <div class="card-block">
                                        <h4 class="card-title">
                                            <?= $item->title?>
                                        </h4>

                                        <div class="card-text">
                                        <?= $item->overview?>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <small><?= $item->createdTime; ?></small>
                                        <a href="<?php echo base_url(); ?>publik/portofolio/<?= $item->id ?>">
                                            <button class="btn btn-secondary float-right btn-sm">show</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <?php 
                            endif;
                            endforeach; 
                            ?>

                        </div>

                    </div>
                </div>

                <div class="bgblack" id="contact">
                    <div class="contact container">
                        <h2 class="wow fadeInUp">If you have anything to be asked or wanna work with us, get in touch at:</h2>
                        <span class="wow fadeInUp">studio<?= $instansi->nama_instansi;?>@gmail.com</span>
                    </div>
                    <div class="footer wrapper wow fadeInUp">
                        <div id="address">
                            <h4><a href="https://goo.gl/maps/PtTxQrwFnCw">Jl. Gudang Selatan No.22 A, Bandung, ID</a></h4>
                        </div>
                        <div id="social-icons">
                            <ul>
                                <li><a href="http://instagram.com/mejabunstudio">Instagram</a></li>
                                <li><a href="http://instagram.com/mejabunstudio">Behance</a></li>
                                <li><a href="http://instagram.com/mejabunstudio">Linkedin</a></li>
                                <li><a href="http://instagram.com/mejabunstudio">Youtube</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>


                <script type="text/javascript">
                    $(document).ready(function() {
// Create a clone of the menu, right next to original.
$('.menu').addClass('original').clone().insertAfter('.menu').addClass('cloned').css('position','fixed').css('top','0').css('margin-top','0').css('z-index','500').removeClass('original').hide();

scrollIntervalID = setInterval(stickIt, 10);

function stickIt() {
    var orgElementPos = $('.original').offset();
    orgElementTop = orgElementPos.top + 55;               

    if ($(window).scrollTop() >= (orgElementTop)) {
        orgElement = $('.original');
        coordsOrgElement = orgElement.offset();
        leftOrgElement = coordsOrgElement.left;  
        widthOrgElement = orgElement.css('width');
        $('.cloned')
        .css('left','0'+'px')
        .css('right','0'+'px')
        .css('top',0)
        .css('width','100%')
        .show();
        $('.original').css('visibility','hidden');
    } else {
        $('.cloned').hide();
        $('.original').css('visibility','visible');
    }
}

$("a").on('click', function(event) {
    if (this.hash !== "") {
        event.preventDefault();
        var hash = this.hash;
        $('html, body').animate({
            scrollTop: $(hash).offset().top - 20
        }, 800, function(){
            window.location.hash = hash;
        });
    }
});

new WOW().init();

$(".filter-button").click(function(){
    var value = $(this).attr('data-filter');
    if (value == "all") {
        $('.filter').show('1000');
    } else {
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
