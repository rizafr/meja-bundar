<!Doctype html>
<html>
    <head>
        <title><?= $instansi->nama_instansi;?></title>
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css">
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"> 
        <meta name="viewport" content="width=device-width">
    </head>

    <body>
         <header>
            <div class="wrapper">
                <h1><?= $instansi->nama_instansi;?></h1>
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
        
        
        <div class="wrapper">
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
        
            <div class="bgblack">
                <div class="bgvid wow fadeIn">
                    <video id="vidbg" preload="auto" autoplay="true" loop="loop">
                        <source src="<?php echo base_url(); ?>assets/mov/vidbg.mp4" type="video/mp4"> 
                    </video>
                </div>
                
                <div class="about wrapper wow fadeInUp" id="about">
                    <h2><?= $instansi->nama_instansi;?> speaks through visual experience. 
                    We Called ourselves as visual explorer. </h2>
                </div>
            </div>
            

            <div class="wedowell wrapper" id="doweell">
                <div class="wrapper wow fadeInUp">
                    <h3>Things We Do Well</h3>
                </div>
                <ul class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                    <li> Visual Stage   </li>
                    <li> Visual Mapping </li>
                    <li> Video Mapping  </li>
                    <li> Infographics   </li>
                    <li> Company Profile</li>
                    <li> After Movie    </li>
                </ul>
            </div>
            
            <div class="bgblack">
            <div class="wrapper wow fadeInUp" id="team">
                <h3>The Team</h3>
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
                <div class="wrapper">
                <h3>Latest Work</h3>
                </div>
                <?php $portfolioList = $this->db->query("SELECT portfolioId, pictureUrl FROM portfolioItems  group by portfolioId order by portfolioId DESC")->result();
                    foreach ($portfolioList as $key => $value) :
                ?>
                    <div class="portfolio-list wow fadeInUp">
                    <a href="<?php echo base_url(); ?>publik/portofolio/<?= $value->portfolioId ?>">
                        <img style= "background-image: url('<?= base_url() . $value->pictureUrl ?>')" alt="" class="hover-shadow wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
                    </a>
                    </div>
                <?php endforeach;?>
                <div class="clearfix">
                </div>
            </div>
            
        <div class="bgblack" id="contact">
            <div class="contact wrapper">
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
                // Create a clone of the menu, right next to original.
                $('.menu').addClass('original').clone().insertAfter('.menu').addClass('cloned').css('position','fixed').css('top','0').css('margin-top','0').css('z-index','500').removeClass('original').hide();

                scrollIntervalID = setInterval(stickIt, 10);


                function stickIt() {

                  var orgElementPos = $('.original').offset();
                  orgElementTop = orgElementPos.top + 55;               

                  if ($(window).scrollTop() >= (orgElementTop)) {
                    // scrolled past the original position; now only show the cloned, sticky element.

                    // Cloned element should always have same left position and width as original element.     
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
                    // not scrolled past the menu; only show the original menu.
                    $('.cloned').hide();
                    $('.original').css('visibility','visible');
                  }
                }
                // Add smooth scrolling to all links
                  $("a").on('click', function(event) {

                    // Make sure this.hash has a value before overriding default behavior
                    if (this.hash !== "") {
                      // Prevent default anchor click behavior
                      event.preventDefault();

                      // Store hash
                      var hash = this.hash;

                      // Using jQuery's animate() method to add smooth page scroll
                      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                      $('html, body').animate({
                        scrollTop: $(hash).offset().top - 50
                      }, 800, function(){
                   
                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                      });
                    } // End if
                  });

                  new WOW().init();
            </script>
       
    </body>
</html>
