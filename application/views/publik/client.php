<section class="ae-container-fluid rk-main">
    <section class="ae-container-fluid ae-container-fluid--inner rk-portfolio">
        <div class="row">
            <div class="logo wow fadeInUp text-center" style="display: block; margin: 0 auto;">
                <img src="<?php echo base_url(); ?>assets/img/logoajakecil.png" width="150px;">
                <h4 class="text-center" style="margin-bottom: 50px;">
                    Our Clients
                </h4>
            </div>
        </div>
        <?php  if (count($clients)) : ?>
        <div class="container">
            <div class="row">
                <?php
                foreach ($clients as $client => $item): 
                    $pictureColorUrl = $item->pictureColorUrl;
                    $pictureBwUrl = $item->pictureBwUrl;
                ?>

                <div class="portfolio-list col-md-4 wow fadeInUp">
                    <img style= "background-image: url('<?= base_url() . $pictureColorUrl ?>'); background-size: 300px; height: 100px; background-color: transparent; border-color: none; content: '';border: 0" alt="" class="wow fadeIn img-responsive" data-wow-duration="1s" data-wow-delay="1s">
               </div>

                <?php 
                endforeach; 
                ?>
                </div>
            </div>
        <?php endif ;?>
    </section>
</section>