<section id="services" class="services pt-10">
    <div class="container">
        <div class="section-title">
            <?php
            if( have_rows('section_titles') ):
                // loop through the rows of data
                while ( have_rows('section_titles') ) : the_row();
                    ?>
                    <h2><?= the_sub_field('title');?></h2>
                    <p><?= the_sub_field('subtitle');?></p>
                <?php
                endwhile;
            else :
            endif;
            ?>
        </div>
        <div class="row">
            <?php
            // check if the repeater field has rows of data
            if( have_rows('services_block') ):
                // loop through the rows of data
                while ( have_rows('services_block') ) : the_row();
                    ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="servicebox">
                            <div class="srv_desc">
                                <h5 class="count"><?= the_sub_field('number');?></h5>
                                <h4><a href="index.html#"><?= the_sub_field('title');?></a></h4>
                                <p><?=  the_sub_field('desc');?></p>
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
</section>