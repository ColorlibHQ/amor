<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package
 */

    $url = 'https://colorlib.com/';
    $copyText = sprintf( __( 'Theme by %s colorlib %s Copyright &copy; %s  |  All rights reserved.', 'amor' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );
    $copyRight = !empty( amor_opt( 'amor_footer_copyright_text' ) ) ? amor_opt( 'amor_footer_copyright_text' ) : $copyText;
    $footer_logo = get_theme_mod( 'footer_logo' );
    $footer_logo_src = wp_get_attachment_image_src( $footer_logo, 'amor_logo_126x34' );
    $footer_class = amor_opt( 'amor_footer_widget_toggle' ) == 1 ? 'footer-area' : 'no_widget';

    ?>

    <!-- footer part start-->
    
    <footer class="footer_part <?php echo esc_attr($footer_class)?>">
        <div class="container">
            <?php
                if( amor_opt( 'amor_footer_widget_toggle' ) == 1 ) {
            ?>
            <div class="row justify-content-around">
                <?php
                    // Footer Widget 1
                    echo '<div class="col-sm-6 col-lg-3">';
                        if( !empty( $footer_logo ) ) {
                            echo '<a href="'. esc_url( home_url('/') ) .'"> <img src="'. $footer_logo_src[0] .'" class="footer_logo" alt="footer logo"> </a>';
                        }

                        if ( is_active_sidebar( 'footer-1' ) ) {
                            dynamic_sidebar( 'footer-1' );
                        }
                    echo '</div>';

                    // Footer Widget 2
                    if ( is_active_sidebar( 'footer-2' ) ) {
                        dynamic_sidebar( 'footer-2' );
                    }

                    // Footer Widget 3
                    if ( is_active_sidebar( 'footer-3' ) ) {
                        dynamic_sidebar( 'footer-3' );
                    }

                    // Footer Widget 4
                    if ( is_active_sidebar( 'footer-4' ) ) {
                        dynamic_sidebar( 'footer-4' );
                    }
                ?>
            </div>
            <hr>
                <?php
                } 
            ?>
            <div class="row">
                <div class="col-lg-6">
                    <div class="copyright_text">
                        <p class="footer-text m-0"><?php echo wp_kses_post( $copyRight ); ?></p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer_icon social_icon">
                        <ul class="list-unstyled">
                            <?php
                            $social_opt = amor_opt('amor_social_profile_toggle');
                            if ( $social_opt == true ) {
                                $social_items = amor_opt('amor_header_social');
                                if( is_array( $social_items ) && count( $social_items ) > 0 ){
                                    foreach ($social_items as $value) {
                                        echo '<li><a href="'. $value['social_url'] .'" class="single_social_icon"><i class="'. $value['social_icon'] .'"></i></a></li>';
                                    }
                                }          
                            }   
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
    </body>
</html>