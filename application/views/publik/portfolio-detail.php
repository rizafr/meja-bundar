<section class="ae-container-fluid ae-container-fluid--full">
    <br><br><br><br>
    <div class="ae-container-fluid">
        <div class="ae-grid ae-grid--collapse rk-portfolio-info ">
            <div class="ae-grid__item item-lg-8 item-sm--center au-xs-ta-center au-lg-ta-left">
                <h2 class="rk-portfolio-inner-title "><?= $portofolio->title ?></h2>
            </div>
            <div class="ae-grid__item item-lg-4 au-xs-ta-center au-lg-ta-right rk-portfolio-details">
                <p class="rk-portfolio-inner-client "><span class="ae-lambda">Client: </span><span class="ae-u-bolder"><?= $portofolio->clientName ?></span></p>
                <p class="au-underline rk-portfolio-inner-website "><a href="<?= $portofolio->linkUrl ?>" class="ae-kappa"><?= $portofolio->linkUrl ?></a></p>
                <p class="ae-kappa ae-u-bold rk-portfolio-inner-date ">
                    <?= date('d M Y', strtotime($portofolio->publishedTime))?>
                </p>
            </div>
        </div>
    </div>
    <div class="ae-container-fluid ae-container-fluid--inner rk-portfolio--inner">
        <div class="ae-grid ae-grid--collapse au-xs-ptp-1">
            <div class="ae-grid__item item-lg-12 au-lg-ptp-1">
                <p class="ae-eta"><?= $portofolio->overview ?></p>
            </div>
        </div>
    </div>
    <div class="ae-grid__item item-lg-10 item-lg--offset-2">
        <div class='embed-container'>
            <iframe src="https://www.youtube.com/embed/<?= $portofolio->youtubeUrlId;?>"></iframe>
        </div>
    </div>

<?php 
    $portfolioItems = $this->db->query("SELECT * FROM portfolioItems where portfolioId = '$portofolio->id'")->result();
?>
    <section class="gallery">
            <div class="container">
                <?php 
                    $i = 1; 
                    foreach($portfolioItems as $row => $value):?>
                        <a href="<?= base_url() . $value->pictureUrl;?>" class="portfolio-list col-md-4" data-fancybox="group">
                            <img style= "background-image: url('<?= base_url() . $value->pictureUrl ?>')" class="img-responsive"/>
                        </a>
                <?php 
                    $i++;
                    endforeach;
                ?>
                  
            </div>
    </section>


<div class="ae-container-fluid au-pt-4 au-pb-4">
    <a href="<?php echo base_url(); ?>publik/portfolio" class="au-mt-2 arrow-button arrow-button--right text-right">Back to Portfolio
        <svg>
            <use xlink:href="assets/img/symbols.svg#arrow"></use>
        </svg>
    </a>
</div>
</section>