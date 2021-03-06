<?php
namespace Amorelementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Utils;



// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;  
}


/**
 *
 * Amor elementor about us section widget.
 *
 * @since 1.0
 */
class Amor_Banner extends Widget_Base {

	public function get_name() {
		return 'amor-banner';
	}

	public function get_title() {
		return __( 'Banner', 'amor' );
	}

	public function get_icon() {
		return 'eicon-banner';
	}

	public function get_categories() {
		return [ 'amor-elements' ];
	}

	protected function _register_controls() {

        // ----------------------------------------  content ------------------------------
        $this->start_controls_section(
            'banner_section',
            [
                'label' => __( 'Banner Section Content', 'amor' ),
            ]
        );
        $this->add_control(
            'banner_content',
            [
                'label'         => esc_html__( 'Banner Content', 'amor' ),
                'type'          => Controls_Manager::WYSIWYG,
                'default'       => __( '<h1>Help The <br> Children in Need </h1><p>Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>', 'amor' )
            ]
        );
        $this->add_control(
            'banner_btnlabel',
            [
                'label'         => esc_html__( 'Button Label', 'amor' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => esc_html__( 'Start Donation', 'amor' )
            ]
        );
        $this->add_control(
            'banner_btnurl',
            [
                'label'         => esc_html__( 'Button Url', 'amor' ),
                'type'          => Controls_Manager::URL,
                'show_external' => false
            ]
        );
        $this->add_control(
            'vid_cont_sec_sep',
            [
                'label'         => esc_html__( 'Video Content Section', 'amor' ),
                'type'          => Controls_Manager::HEADING,
                'separator'     => 'after'
            ]
        );

        $this->add_control(
			'vid_thumbnail',
			[
				'label'         => esc_html__( 'Video Thumbnail', 'amor' ),
                'type'          => Controls_Manager::MEDIA,
                'default'       => [
                    'url'       => Utils::get_placeholder_image_src(),
                ]
			]
        );
        
        $this->add_control(
            'popup_vid_url',
            [
                'label'         => esc_html__( 'Popup Video Url', 'amor' ),
                'type'          => Controls_Manager::URL,
                'show_external' => false,
                'default'       => [
                    'url'       => 'https://www.youtube.com/watch?v=pBFQdxA-apI'
                ]
            ]
        );

        $this->end_controls_section(); // End content


        /**
         * Style Tab
         * ------------------------------ Background Style ------------------------------
         *
         */

        // Heading Style ==============================
        $this->start_controls_section(
            'color_sect', [
                'label' => __( 'Banner Heading Style', 'amor' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_secttitle', [
                'label'     => __( 'Big  Title Color', 'amor' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .banner_part .banner_text h1' => 'color: {{VALUE}};',
                ],
            ]
        );    
        $this->add_control(
            'sub_title_color', [
                'label'     => __( 'Text Color', 'amor' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .banner_part .banner_text p' => 'color: {{VALUE}};',
                ],
            ]
        );
        
        $this->end_controls_section();


        
        // Button Style ==============================
        $this->start_controls_section(
            'btn_styles', [
                'label' => __( 'Button Styles', 'amor' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btnn_bg',
                'label' => __( 'Button Background', 'amor' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .banner_part .banner_text .btn_2',
            ]
        );
        $this->add_control(
            'btnn_txt_color', [
                'label' => __( 'Button Text Color', 'amor' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .banner_part .banner_text .btn_2' => 'color: {{VALUE}}; border-color: {{VALUE}};',
                ],
            ]
        ); 

        $this->add_control(
            'btn_hvr_separator',
            [
                'label'     => __( 'Hover Styles', 'amor' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        ); 
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'btnn_hover_bg',
                'label' => __( 'Button Background', 'amor' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .banner_part .banner_text .btn_2:hover',
            ]
        );
        $this->add_control(
            'btnn_hover_txt_color', [
                'label' => __( 'Button Hover Text Color', 'amor' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .banner_part .banner_text .btn_2:hover' => 'color: {{VALUE}}; border-color: transparent',
                ],
            ]
        ); 
        $this->end_controls_section();


        // Background Style ==============================
        $this->start_controls_section(
            'section_bg', [
                'label' => __( 'Style Background', 'amor' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'sectionbg',
                'label' => __( 'Background', 'amor' ),
                'types' => [ 'classic' ],
                'selector' => '{{WRAPPER}} .banner_part',
            ]
        );
        $this->end_controls_section();

	}

	protected function render() {
        $settings = $this->get_settings();
        $ban_content = !empty( $settings['banner_content'] ) ? $settings['banner_content'] : '';
        $button_label = !empty( $settings['banner_btnlabel'] ) ? $settings['banner_btnlabel'] : '';
        $button_url = !empty( $settings['banner_btnurl']['url'] ) ? $settings['banner_btnurl']['url'] : '';
        $popup_vid_url = !empty( $settings['popup_vid_url']['url'] ) ? $settings['popup_vid_url']['url'] : '';
        $vid_thumbnail   = !empty( $settings['vid_thumbnail']['id'] ) ? wp_get_attachment_image( $settings['vid_thumbnail']['id'], 'amor_banner_video_thumb_750x498', false, array( 'alt' => 'video thumb image' ) ) : '';
    ?>

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-7">
                    <div class="banner_text text-center">
                        <div class="banner_text_iner">
                            <?php
                                //Content ==============
                                if( $ban_content ){
                                    echo wp_kses_post( wpautop( $ban_content ) );
                                }
                                // Button =============
                                if( $button_label ){
                                    echo '<a class="btn_2" href="'. esc_url( $button_url ) .'">'. esc_html( $button_label ) .'</a>';
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="banner_video">
                        <div class="banner_video_iner">
                            <?php
                                if( $vid_thumbnail ){
                                    echo wp_kses_post( $vid_thumbnail );
                                }
                            ?>
                            <div class="extends_video">
                                <a id="play-video_1" class="video-play-button popup-youtube"
                                    href="<?php echo esc_url( $popup_vid_url )?>">
                                    <span class="fa fa-play"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->     
    <?php

    }
	
}
