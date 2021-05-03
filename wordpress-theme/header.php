<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="SITE KEYWORDS HERE"/>
    <meta name="description" content="">
    <meta name='copyright' content=''>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title><?php bloginfo('name'); ?></title>
    <!--    <title>--><?php //echo get_the_title(); ?><!--</title>-->
    <?php wp_head(); ?>
</head>
<body>
<!-- Header -->
<header class="header">
    <!-- Topbar -->
    <?php dynamic_sidebar('top-bar') ?>
    <!-- End Topbar -->
    <!-- Header Inner -->
    <div class="header-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="logo">
                        <?php the_custom_logo() ?>
                    </div>
                    <div class="mobile-menu"></div>
                </div>
                <div class="col-lg-9 col-md-9 col-12">
                    <!-- Header Widget -->
                    <?php dynamic_sidebar('header-inner') ?>
                    <!--/ End Header Widget -->
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Inner -->
    <!-- Header Menu -->
    <div class="header-menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-default">
                        <div class="navbar-collapse">
                            <!-- Main Menu -->
                            <?php wp_nav_menu(
                                array(
                                    'theme_location' => 'primary-menu',
                                    'menu_class' => 'nav menu navbar-nav',
                                    'menu_id' => 'nav',
                                    'link_after' => '<i class="fa fa-angle-down"></i>',
                                    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                                    'walker' => new WP_Bootstrap_Navwalker(),
                                )); ?>
                            <div class="button">
                                <a href="contact.php" class="btn"><i class="fa fa-pencil"></i>Apply Now</a>
                            </div>
                            <!--/ End Button -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Menu -->
</header>
<!-- End Header -->
<!-- Book Preloader -->
<!--<div class="book_preload">-->
<!--    <div class="book">-->
<!--        <div class="book__page"></div>-->
<!--        <div class="book__page"></div>-->
<!--        <div class="book__page"></div>-->
<!--    </div>-->
<!--</div>-->
<!--/ End Book Preloader -->