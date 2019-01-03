
<header id="header" class="header">
    <div class="navigation">
        <div class="container">
            <nav id="flexmenu">
                <div class="logo">
                    <a href="index.html"><img src="<?= the_field('header_logo'); ?>" alt="logo"></a>
                </div>
                <div class="nav-inner">
                    <div id="mobile-toggle" class="mobile-btn"></div>
                    <?php

                    if ( has_nav_menu('mainmenu') ) wp_nav_menu( array('theme_location' => 'mainmenu','container' => false,  'menu_class'
                    => 'main-menu'));
                    ?>
                    <!-- <ul class="main-menu">
                        <li class="menu-item"><a class="active" href="index.html#slider">Home</a></li>
                        <li class="menu-item"><a href="index.html#services">Services</a></li>
                        <li class="menu-item"><a href="index.html#about">About Us</a></li>
                        <li class="menu-item"><a href="index.html#works">Portfolio</a></li>
                        <li class="menu-item"><a href="index.html#blog">Blog</a></li>
                        <li class="menu-item"><a href="index.html#contact">Contact</a></li>
                    </ul> -->
                </div>
            </nav>
        </div>
    </div>
</header>