<!Doctype HTML> 
<html>
    <head>
        <title><?= $instansi->nama_instansi;?></title>
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css">
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
        <meta name="viewport" content="width=device-width">
    </head>
    
    <body class="page-portfolio">
        <header>
            <div class="wrapper">
                <h1><?= $instansi->nama_instansi;?></h1>
                <nav>
                    <h2>Main Navigation</h2>
                    <div id="burger-nav"></div>
                    <ul>
                        <li><a href="" class="current">Home</a></li>                        
                        <li><a href="#abouts" >About</a></li>             
                        <li><a href="" >We Do Well</a></li>       
                        <li><a href="" >Team</a></li>
                        <li><a href="" >Portfolio</a></li>
                        <li><a href="" >Contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        
        <section>
            <div class="portfolio-header">
                <h2><?= $portofolio->title ?></h2>
                <h4> <?= $portofolio->subTitle ?></h4>
            </div>
        </section>
        <div class="clearfix">
        </div>
        <div class="portfolio-desc-wrapper">
            <div class="column contentLeft responsive-paddingRight">
                <div class="content-box">
                    <h3>Overview</h3>
                    <?= $portofolio->overview; ?>
                </div>
            </div>
            
            <div class="column content-right">
            <div class="content-box">
                <h3>Time</h3>
                <p><?= date("d M Y", strtotime($portofolio->createdTime));?></p>
            </div>
            
            <div class="content-box">
                <h3>Role</h3>
                <?= $portofolio->role;?>
            </div>
            
            <div class="content-box">
                <h3>Links</h3>
                <a>instagram</a>
                <a>Web</a>
            </div>
            </div>
        </div>
        
         <div class="clearfix">
        </div>
    

        <iframe width="640" height="480" src="https://www.youtube.com/embed/<?= $portofolio->youtubeUrlId;?>">
        </iframe>

        <?php 
            $portfolioItems = $this->db->query("SELECT * FROM portfolioItems where portfolioId = '$portofolio->id'")->result();
        ?>
        <section class="gallery">
            <div>
                <div class="row">
                    <?php 
                        $i = 1; 
                        foreach($portfolioItems as $row => $value):?>
                            <div class="column">
                                <img src="<?= base_url() . $value->pictureUrl;?>" onclick="openModal();currentSlide(<?= $i?>)" class="hover-shadow">
                            </div>
                    <?php 
                        $i++;
                        endforeach;
                    ?>
                      
                </div>

                <div id="myModal" class="modal">
                      <span class="close cursor" onclick="closeModal()">&times;</span>
                      <div class="modal-content">
                        <?php 
                        $i = 1;
                        foreach($portfolioItems as $row => $value):?>
                        <div class="mySlides">
                          <div class="numbertext"><?= $i;?> / 4</div>
                            <img src="<?= base_url() . $value->pictureUrl;?>" style="width:100%">
                        </div>
                        <?php 
                            $i++;
                            endforeach;
                        ?>

                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>

                        <div class="caption-container">
                          <p id="caption"></p>
                        </div>
                      </div>
                </div>
            </div>
        </section>
        
        <div class="clearfix"></div>
        
        <footer class="foot">
            <div class="wrapper">
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
        </footer>
        <script src="<?php echo base_url(); ?>assets/js/gallery.js"></script>
    </body>
</html>