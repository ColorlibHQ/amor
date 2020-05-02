<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <!-- For Resposive Device -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php echo amor_site_icon();?>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>

    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <?php
                            echo amor_theme_logo( 'navbar-brand' );
                        ?>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <?php
                            if(has_nav_menu('primary-menu')) {
                                wp_nav_menu(array(
                                    'menu'           => 'primary-menu',
                                    'theme_location' => 'primary-menu',
                                    'menu_id'        => 'menu-main-menu',
                                    'container_class'=> 'collapse navbar-collapse main-menu-item justify-content-end',
                                    'container_id'   => 'navbarSupportedContent',
                                    'menu_class'     => 'navbar-nav align-items-center',
                                    'walker'         => new amor_bootstrap_navwalker,
                                    'depth'          => 3
                                ));
                            }


                            if( amor_opt( 'amor_header_btn' ) == 1 ){
                                $btn_lbl = !empty( amor_opt( 'header_btn_label' ) ) ? amor_opt( 'header_btn_label' ) : '';
                                $btn_url = !empty( amor_opt( 'booking_btn_url' ) ) ? amor_opt( 'booking_btn_url' ) : '';
                            ?>
                                <div class="d-none d-lg-block">
                                    <a class="btn_2" href="<?php echo $btn_url?>"><?php echo $btn_lbl?></a>
                                </div>
                        <?php } ?>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <?php
    //Page Title Bar
    if( function_exists( 'amor_page_titlebar' ) ){
	    amor_page_titlebar();
    }

