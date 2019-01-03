  <?php

      /*
       Template Name: Page Contact
       */

      echo 'I\'am template Contact'.'<br>';
      echo  get_template_directory_uri().'/js/add.js';
  if ( has_nav_menu('menutop') ) wp_nav_menu( array('theme_location' => 'menutop', 'menu_class'
  => 'class-dlya-ul'));

  ?>