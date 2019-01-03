<section id="about" class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="section-title">

                 <h2><?= the_field('about_title'); ?></h2>
                    <p><?= the_field('about_subtitle'); ?></p>
                </div>
                <div class="about_content_box box-left">
                    <div class="about_txt_box">
                        <p><?= the_field('about_left_box_text'); ?></p>
                    </div>
                    <div class="about_img_box">
                        <img src="<?= the_field('about_left_box_img');?>" alt="img">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="about_content_box box-right">
                    <div class="row">
                        <?php
                        $gallery = get_field('about_right_gallery');
                        foreach ($gallery as $img){ ?>
                            <div class="col-lg-6 col-md-6">
                                <div class="about_img_box">
                                    <img src="<?php echo $img['url'] ?>" alt="img">
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="about_txt_box">
                        <?php
                        if( have_rows('about_right_desc') ):
                            // loop through the rows of data
                            while ( have_rows('about_right_desc') ) : the_row();
                                ?>
                                <p><?= the_sub_field('about_right_p');?></p>
                            <?php
                            endwhile;
                        else :
                        endif;
                        ?>
                        <!--<p>Ut enim ad minima veniam, quis nostrum exercitationem corporate loorem commosequatur? Quis autem vel eum iure veniam, quis nostruction doloru sequatur? Quis autem vel eum Quis autem vel eum iure veniam lorem ipsui lorem quis nostru iure.Ut enim ad minima veniam, quis nostrum exercitatio commosequatur? </p>
                        <p>Ut enim ad minima veniam, quis nostrum exercitationem corporate loorem commosequatur? Quis autem vel eum iure veniam, quis nostruction dolor sequatur.</p>
                       -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>