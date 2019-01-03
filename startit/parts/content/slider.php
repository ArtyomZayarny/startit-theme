<section id="slider" class="slider_1" style="background-image:url(<?= the_field('slider_bg')?>)">
    <div class="slider">
        <div class="container">
            <div class="slide-content">
                <h6 class="sub_heading"><?= the_field('sub_heading'); ?></h6>
                <div class="typing_content">
                    <h2 class="heading">
                        <?= the_field('main-title_static') ?> <span class="typed-element">Carrby</span>
                    </h2>
                    <div class="typed-strings">
                        <p>Agency</p>
                        <p>Company</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll_btn"><a href="index.html#about"><i class="fa fa-angle-down"></i></a></div>
        <div class="section-shape">
            <img src="<?= the_field('section_shape'); ?>"alt="shape image"/>
        </div>
    </div>
</section>
