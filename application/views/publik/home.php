<!Doctype html>
<html>
    <head>
        <title><?= $instansi->nama_instansi;?></title>
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css">
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
        <meta name="viewport" content="width=device-width">
    </head>

    <body>
         <header>
            <div class="wrapper">
                <h1><?= $instansi->nama_instansi;?></h1>
                <nav>
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
                <div class="logo">
                    <img src="<?php echo base_url(); ?>assets/img/logoajakecil.png">
                </div>
                <div class="quotes">
                    <blockquote>“Be Drawn to the Visual Arts for It Can Expand Your Imagination.”</blockquote>
                    <span>By Barbara Januszkiewicz</span>
                </div>
            </div>
          </div>
        
            <div class="bgblack">
                <div class="bgvid">
                    <video id="vidbg" preload="auto" autoplay="true" loop="loop">
                        <source src="<?php echo base_url(); ?>assets/mov/vidbg.mp4" type="video/mp4"> 
                    </video>
                </div>
                
                <div class="about wrapper" id="about">
                    <h2><?= $instansi->nama_instansi;?> speaks through visual experience. 
                    We Called ourselves as visual explorer. </h2>
                </div>
            </div>
            

            <div class="wedowell wrapper" id="doweell">
                <div class="wrapper">
                    <h3>Things We Do Well</h3>
                </div>
                <ul>
                    <li> Visual Stage   </li>
                    <li> Visual Mapping </li>
                    <li> Video Mapping  </li>
                    <li> Infographics   </li>
                    <li> Company Profile</li>
                    <li> After Movie    </li>
                </ul>
            </div>
            
            <div class="bgblack">
            <div class="wrapper">
                <h3>The Team</h3>
            </div>
                
            <div class="team wrapper" id="team">
                <ul>
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
                    <div class="portfolio-list">
                    <a href="<?php echo base_url(); ?>publik/portofolio/<?= $value->portfolioId ?>">
                        <img style= "background-image: url('<?= base_url() . $value->pictureUrl ?>')" alt="" class="hover-shadow">
                    </a>
                    </div>
                <?php endforeach;?>
                <div class="clearfix">
                </div>
            </div>
            
        <div class="bgblack" id="contact">
            <div class="contact wrapper">
                <h2>If you have anything to be asked or wanna work with us, get in touch at:</h2>
                <span>studio<?= $instansi->nama_instansi;?>@gmail.com</span>
             </div>
             <div class="footer wrapper">
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
       
    </body>
</html>
