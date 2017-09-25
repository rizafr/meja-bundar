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

<section class="ae-container-fluid rk-main">
    <section class="ae-container-fluid ae-container-fluid--inner rk-portfolio">
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
                <a href="<?php echo base_url(); ?>publik/portfolio_detail/<?= $item->id ?>" class="grid-overlay">
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
    </section>
</section>

<script type="text/javascript">
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
</script>