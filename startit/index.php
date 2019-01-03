<?php
/*
Template Name: Home
*/
?>


<?php get_header(); ?>
<!-- Start Header -->
<?php get_template_part( 'parts/content/navigation' ); ?>
<?php get_template_part( 'parts/content/slider' ); ?>
<div class="main-wrapper">
    <?php get_template_part( 'parts/content/services' ); ?>
    <?php get_template_part( 'parts/content/about' ); ?>
    <?php get_template_part( 'parts/content/works' ); ?>
    <?php get_template_part( 'parts/content/blog' ); ?>
    <?php get_template_part( 'parts/content/contact' ); ?>

</div>
<!-- End Main Wrapper-->
<?php  get_footer() ?>