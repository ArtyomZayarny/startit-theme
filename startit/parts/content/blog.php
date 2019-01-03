<section id="blog" class="blog">
    <div class="container">
        <div class="section-title">
            <h2><?= the_field('last_article_title') ?></h2>
            <p><?=  the_field('last_article_subtitle')  ?></p>
        </div>
        <div class="row">
            <?php
            if( have_rows('last_article_block') ):
                while ( have_rows('last_article_block') ) : the_row();
                    ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="blog_post">
                            <div class="post_img">
                                <a href="index.html#"><img src="<?= get_sub_field('article_img') ?>" alt="img"></a>
                            </div>
                            <div class="post_content">
                                <div class="post_header">
                                    <h2 class="post_title"><a href="index.html#"><?= get_sub_field('article_title') ?></a></h2>
                                    <div class="read_more"><a href="index.html#"><?= get_sub_field('article_link') ?></a></div>
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
</section>