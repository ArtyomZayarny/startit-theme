<?php


$path = get_template_directory_uri();
/*
<script src="<?php echo $path; ?>/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo $path; ?>/js/bootstrap.min.js"></script>
<script src="<?php echo $path; ?>/js/jquery.mixitup.min.js"></script>
<script src="<?php echo $path; ?>/js/jquery.fancybox.min.js"></script>
<script src="<?php echo $path; ?>/js/owl.carousel.js"></script>
<script src="<?php echo $path; ?>/js/typed.min.js"></script>
<script src="<?php echo $path; ?>/js/menu.js"></script>
<script src="<?php echo $path; ?>/js/custom.js"></script>
*/
/* Add styles and scripts */
function link_scripts(){
    wp_enqueue_style('custom',get_template_directory_uri().'/css/style.css',array(),'1.0');
    wp_enqueue_script('add',get_template_directory_uri().'/js/add.js',array(),'1.0',true);

    wp_enqueue_script('jQuery',get_template_directory_uri().'/js/jquery-3.2.1.min.js',array(),'3.2.1', true );
    wp_enqueue_script('bootstrap',get_template_directory_uri().'/js/bootstrap.min.js',array(), '1.0',true );
    wp_enqueue_script('mixitup',get_template_directory_uri().'/js/jquery.mixitup.min.js',array(), '1.0',true );
    wp_enqueue_script('fancybox',get_template_directory_uri().'/js/jquery.fancybox.min.js', array(), '1.0', true);
    wp_enqueue_script('carousel',get_template_directory_uri().'/js/owl.carousel.js', array(), '1.0', true);
    wp_enqueue_script('typed',get_template_directory_uri().'/js/typed.min.js', array(), '1.0', true);
    wp_enqueue_script('menu',get_template_directory_uri().'/js/menu.js', array(), '1.0', true);
    wp_enqueue_script('custom',get_template_directory_uri().'/js/custom.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts','link_scripts');

/*add custom image size uploads*/
add_theme_support ('post-thumbnails');
add_image_size ('small-thumb', 230, 230, true);

/*Disable image size*/
function sgr_filter_image_sizes( $sizes) {
    unset( $sizes['thumbnail']);
    unset( $sizes['medium']);
    unset( $sizes['large']);
    return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'sgr_filter_image_sizes');

/*Add menu support*/
//Registrate two types of menu
register_nav_menus( array(
    'menutop' => __( 'Menu Top' ),
    'mainmenu' => __( 'Main Menu' ),
    'menubottom' => __( 'Menu Bottom' )
));

?>