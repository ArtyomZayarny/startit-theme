<section id="works" class="works">
    <div class="container">
        <div class="section-title">
            <h2><?= the_field('portfolio_title');?></h2>
            <p><?= the_field('portfolio_desc'); ?></p>
        </div>

        <ul id="filters" class="clearfix text-center">
            <?php
            if( have_rows('filter') ):
                // loop through the rows of data
                while ( have_rows('filter') ) : the_row();
                    ?>
                    <li><span class="<?= the_sub_field('class'); ?>" data-filter="<?= the_sub_field('data_attr'); ?>"><?= the_sub_field('filter_item'); ?></span></li>
                <?php
                endwhile;
            else :
            endif;
            ?>
        </ul>

        <div id="portfoliolist">
            <div class="row">
        <?php
            if( have_rows('filter_gallery') ):
                while ( have_rows('filter_gallery') ) : the_row();
                    ?>
                    <div class="col-md-4 col-lg-3 portfolio <?= the_sub_field('item_tag') ?>">
                        <div class="portfolio-wrapper">
                            <div class="works-img">
                                <a href="<?= the_sub_field('item_pic') ?>" data-fancybox="<?php echo get_template_directory_uri();?>/images">
                                    <img src="<?= the_sub_field('item_pic') ?>" alt="" />
                                </a>
                            </div>
                            <div class="works-info">
                                <div class="label-text">
                                    <h4><?= the_sub_field('item_label') ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                endwhile;
                else :
                endif;
                ?>
            </div>
        </div>
    </div>
</section>