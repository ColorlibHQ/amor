<?php
// Block direct access
if( !defined( 'ABSPATH' ) ){
    exit( 'Direct script access denied.' );
} 
/**
 * @Packge     : AMOR
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
 
// enqueue css
function amor_common_custom_css(){
    
    wp_enqueue_style( 'amor-common', get_template_directory_uri().'/assets/css/dynamic.css' );
		$header_bg         		  = esc_url( get_header_image() );
		$header_bg_img 			  = !empty( $header_bg ) ? 'background-image: url('.esc_url( $header_bg ).')' : '';

		$themeColor     		  = amor_opt( 'amor_theme_color' ) != '#8d00ff' ? amor_opt('amor_theme_color') : '';

		$buttonBorderColor     	  = amor_opt( 'amor_button_border_color' );
		$hoverColor     	  	  = amor_opt( 'amor_hover_color');

		$headerTop_bg     		  = amor_opt( 'amor_top_header_bg_color' );
		$headerTop_col     		  = amor_opt( 'amor_top_header_color' );

		$headerBg          		  = amor_opt( 'amor_header_bg_color');
		$menuColor          	  = amor_opt( 'amor_header_menu_color' );
		$menuHoverColor           = amor_opt( 'amor_header_menu_hover_color' ) != '#ffffff' ? amor_opt('amor_header_menu_hover_color') : $themeColor;
		$dropMenuColor            = amor_opt( 'amor_header_drop_menu_color' );
		$dropMenuHovColor         = amor_opt( 'amor_header_drop_menu_hover_color' ) != '#8d00ff' ? amor_opt('amor_header_drop_menu_hover_color') : $themeColor;
		$headerBtnBgColor         = amor_opt( 'amor_booking_btn_bg_color' ) != '#8d00ff' ? amor_opt('amor_booking_btn_bg_color') : '';

		$footerwbgColor     	  = amor_opt('amor_footer_bg_color');
		$footerwTextColor   	  = amor_opt('amor_footer_widget_text_color') != '#555555' ? amor_opt('amor_footer_widget_text_color') : '';
		$widgettitlecolor  		  = amor_opt('amor_footer_widget_title_color');
		$footerwanchorcolor 	  = amor_opt('amor_footer_widget_anchor_color') != '#8d00ff' ? amor_opt('amor_footer_widget_anchor_color') : $themeColor;
		$footerwanchorhovcolor    = amor_opt('amor_footer_widget_anchor_hover_color') != '#8d00ff' ? amor_opt('amor_footer_widget_anchor_hover_color') : $themeColor;
		
		$footerNewsDefColor    	  = amor_opt('amor_footer_widget_anchor_color') != '#555555' ? amor_opt('amor_footer_widget_anchor_color') : $themeColor;

		$fofbg					  = amor_opt('amor_fof_bg_color');
		$foftonecolor			  = amor_opt('amor_fof_textone_color');
		$fofttwocolor			  = amor_opt('amor_fof_texttwo_color');

		$customcss ="
			.hero-banner{
				{$header_bg_img}
			}
			
			.passion_part .single-home-passion .card .card-body a:hover, .form-contact .form-group .btn_1:hover, .wpcf7-form .form-group .btn_1:hover, .intro_video_iner .btn_2
			{
				border-color: {$themeColor};
			}

			.cta_part .cta_part_iner .cta_part_text p, .about_part .about_text h5, .our_latest_work .single_work_demo h5, .blog_part .single-home-blog .card h5:hover, .blog_part .single-home-blog .card ul li i, .feature_part .single_feature_part .eci, .counter .single_counter .eci, .passion_part .single-home-passion .card h5:hover, .blog_part .single_blog .list-unstyled li:hover a, .blog_part .right_single_blog .single_blog .media-body p a, .blog_area a :hover, .form-contact .form-group .btn_1:hover i, .wpcf7-form .form-group .btn_1:hover i, .service_part .single_service_text i, .service_part .single_service_text a
			{
				color: {$themeColor}
			}			

			.blog_item_date h3:hover, .blog_item_date p:hover
			{
				color: #fff;
			}

			.our_latest_work .single_work_demo .btn_3:hover, .team_member_section .single_team_member .single_team_text h3 a:hover, .team_member_section .single_team_member .team_member_social_icon a:hover, .blog_part .single-home-blog .card .card-body a:hover, .pre_icon a:hover, .next_icon a:hover, .review_part .section_tittle p, .banner-breadcrumb > ol > li.breadcrumb-item > a.bread-link:hover, .review_part .section_tittle p, .banner-breadcrumb .breadcrumb-item a:hover, .blog_details a:hover, .blog_right_sidebar .widget_categories ul li:hover, .blog_right_sidebar .widget_categories ul li:hover a, .blog_right_sidebar .widget_categories ul li a:hover, .volunteers_part .single_blog_item:hover h3{
				color: {$themeColor}!important;
			}

			.review_part .intro_video_bg .video-play-button, .review_part .owl-prev span:after, .review_part .owl-next span:after, .review_part .intro_video_bg .video-play-button:after, .review_part .intro_video_bg .video-play-button:before, .review_part .intro_video_bg .video-play-button:hover:after, .blog_item_img .blog_item_date, .button, .blog_right_sidebar .single_sidebar_widget.widget_amor_newsletter .btn, .pre_icon :after, .next_icon :after, .passion_part .skill-bar, .passion_part .skill-bar:after, .volunteers_part .single_blog_item .single_blog_img .social_icon, .form-contact .form-group .btn_1 i, .service_part .service_text .btn_3, .about_btn .btn_3, .blog_area .comment-form button.btn_3, .banner_part .banner_text .btn_2, .intro_video_iner .btn_2, .event_part .tricker, .main_menu .btn_2:hover
			{
				background: {$themeColor}
			}

			.service_part .single_service_part:hover .single_service_part_iner span, .passion_part .single-home-passion .card .card-body a:hover, .blog_part .right_single_blog .single_blog .media-body:hover, .form-contact .form-group .btn_1:hover, .wpcf7-form .form-group .btn_1:hover, .f0f-content-inner .btn_1:hover
			{
				background: {$themeColor}!important;
			}

			.copyright_part .footer-social a:hover
			{
				background: {$hoverColor}!important;
			}

			.blog_part .single-home-blog .card h5:hover
			{
				color: {$hoverColor};
			}

			.about_part .about_img h2:after, .copyright_part .footer-social a, .service_part .service_text .btn_3, .about_us .about_us_text > h5, .banner_item .single_item:hover, .about_btn .btn_3, .blog_area .comment-form button.btn_3, .contact-section .wpcf7-submit.button.button-contactForm.btn_3, .banner_part .banner_text .btn_2
			{
				border-color: {$themeColor}
			}


			.main_menu .btn_2:hover
			{
				background: {$headerBtnBgColor};
			}

			.sub_header{
				background: {$headerTop_bg}
			}
			.sub_header .sub_header_social_icon a,
			.sub_header .sub_header_social_icon .register_icon
			{
				color: {$headerTop_col}
			}

			.main_menu.menu_fixed
			{
				background: {$headerBg};
			}
			.main_menu .main-menu-item ul li a
			{
			   color: {$menuColor}!important;
			}
			.main_menu .main-menu-item ul li a:hover
			{
			   color: {$menuHoverColor}!important;
			   border-color: {$menuHoverColor}!important;
			}
			
			.dropdown .dropdown-menu .dropdown-item
			{
			   color: {$dropMenuColor}!important;
			}
			.dropdown .dropdown-menu .dropdown-item:hover
			{
			   color: {$dropMenuHovColor}!important;
			}

			.main_menu .btn_1:hover{
				background-color: {$headerBtnBgColor}!important;
			}

			.footer-area, .footer_part .work_hours ul li p, .footer_part .work_hours ul li p span {
				background-color: {$footerwbgColor};
			}

			.footer-area .single_footer_part p, .footer-area .single_footer_part p span, .footer-area .widget_amor_newsletter .input-group input, .footer-area .copyright_part_text p, .footer-area .footer_2 .social_icon a, .footer_part .work_hours ul li p, .footer_part .work_hours ul li p span, .footer_part .work_hours h5, .footer_part .copyright_text p
			{
				color: {$footerwTextColor}
			}

			.footer_part .single_footer_part.widget_amor_newsletter .btn{
				border-left-color: {$footerNewsDefColor}
			}

			.footer_part .single_footer_part.widget_amor_newsletter .btn i
			{
				border-color: {$footerNewsDefColor}
			}

			.footer_part .single_footer_part.widget_amor_newsletter .btn, .footer_part .single_footer_part.widget_amor_newsletter .btn i, .single_sidebar_widget .tagcloud a:hover{
				background-color: {$footerNewsDefColor}
			}

			.footer_part .footer_icon li a :hover, .footer_part .copyright_text p a
			{
				color: {$footerNewsDefColor}
			}

			.footer-area .copyright_part_text, .footer_part .work_hours ul li:after {
				border-color: {$footerwTextColor}
			}

			.footer_part hr {
				background-color: {$footerwTextColor}
			}

			.footer-area .widget_amor_newsletter .input-group .form-control::placeholder {
				color: {$footerwTextColor};
				opacity: 1;
			}
			
			.footer-area .widget_amor_newsletter .input-group .form-control:-ms-input-placeholder {
				color: {$footerwTextColor};
			}
			
			.footer-area .widget_amor_newsletter .input-group .form-control::-ms-input-placeholder {
				color: {$footerwTextColor};
			}

			.footer-area .single_footer_part h4
			{
				color: {$widgettitlecolor}
			}

			.footer_part .single_footer_part .menu li a, .footer-area .copyright_part_text a, .footer_part .footer_icon li a
			{
			   color: {$footerwanchorcolor};
			}
			.footer-area .btn{
				background: {$footerwanchorcolor};
			}
			.footer_part .single_footer_part .menu li a:hover, .footer-area .copyright_part_text a:hover, .footer-area .footer_2 .social_icon a:hover
			{
			   color: {$footerwanchorhovcolor}!important;
			}
			.footer_part .copyright_text p a:hover
			{
			   color: {$footerwanchorhovcolor};
			}

			.f0f-content .h1 {
				color: {$foftonecolor};
			}
			.f0f-content p {
				color: {$fofttwocolor};
			}

        ";
       
    wp_add_inline_style( 'amor-common', $customcss );
    
}
add_action( 'wp_enqueue_scripts', 'amor_common_custom_css', 50 );