<?php
namespace Amorelementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Scheme_Color;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Text_Shadow;
use Elementor\Group_Control_Background;



// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 *
 * Amor elementor Team Member section widget.
 *
 * @since 1.0
 */
class Amor_Services extends Widget_Base {

	public function get_name() {
		return 'amor-services';
	}

	public function get_title() {
		return __( 'Services', 'amor' );
	}

	public function get_icon() {
		return 'eicon-info-box';
	}

	public function get_categories() {
		return [ 'amor-elements' ];
	}

	protected function _register_controls() {

		$repeater = new \Elementor\Repeater();

        // ----------------------------------------  Service Section ------------------------------
        $this->start_controls_section(
            'services_heading',
            [
                'label' => __( 'Service Heading', 'amor' ),
            ]
        );
        $this->add_control(
            'service_header',
            [
                'label'         => esc_html__( 'Service Header', 'amor' ),
                'description'   => esc_html__('Use <br> tag for line break', 'amor'),
                'type'          => Controls_Manager::WYSIWYG,
                'label_block'   => true,
                'default'       => __( '<h2>We are CharityPress Funding Network
                Worldwide.</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>', 'amor' )
            ]
        );
        $this->add_control(
            'ser_btn_label',
            [
                'label'         => esc_html__( 'Service Button Label', 'amor' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => __( 'learn more', 'amor' )
            ]
        );
        $this->add_control(
            'ser_btn_url',
            [
                'label'         => esc_html__( 'Service Button URL', 'amor' ),
                'type'          => Controls_Manager::URL,
                'label_block'   => true,
                'default'       => [
                    'url'       => '#'
                ]
            ]
        );

        $this->end_controls_section(); // End section top content
        
		// ----------------------------------------   Services content ------------------------------
		$this->start_controls_section(
			'services_block',
			[
				'label' => __( 'Services', 'amor' ),
			]
		);
		$this->add_control(
            'services_content', [
                'label' => __( 'Create Service', 'amor' ),
                'type'  => Controls_Manager::REPEATER,
                'title_field' => '{{{ title }}}',
                'fields' => [
                    [
                        'name'      => 'icon',
                        'label'     => __( 'Select Icon', 'amor' ),
                        'type'      => Controls_Manager::ICON,
                        'default'   => 'fa fa-mobile',
                        'options'   => amor_flaticon_list()
                    ],
                    [
                        'name'  => 'title',
                        'label' => __( 'Title', 'amor' ),
                        'type'  => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => __( 'Donation', 'amor' )
                    ],
                    [
                        'name'      => 'desc',
                        'label'     => __( 'Descriptions', 'amor' ),
                        'type'      => Controls_Manager::TEXTAREA,
                        'default'   => __( 'Lorem ipsum dolor sit amet consectetur elit seiusmod tempor incididunt', 'amor' )
                    ],
                    [
                        'name'      => 'anc_txt',
                        'label'     => __( 'Anchor Text', 'amor' ),
                        'type'      => Controls_Manager::TEXT,
                        'default'   => __( 'Donate Now', 'amor' )
                    ],
                    [
                        'name'      => 'anc_link',
                        'label'     => __( 'Anchor Link', 'amor' ),
                        'type'      => Controls_Manager::URL,
                        'default'   => [
                            'url'   => '#'
                        ]
                    ],
                ],
            ]
        );

		$this->end_controls_section(); // End Services content

        /**
         * Style Tab
         * ------------------------------ Style Tab Content ------------------------------
         *
         */

        // Heading Style ==============================
        $this->start_controls_section(
            'color_sect', [
                'label' => __( 'Style Heading', 'amor' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_sec_ttitle', [
                'label'     => __( 'Big Title Color', 'amor' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service_part .service_text h2' => 'color: {{VALUE}};',
                ],
            ]
        );    

        $this->add_control(
            'color_sub_ttitle', [
                'label'     => __( 'Text Color', 'amor' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service_part .service_text p' => 'color: {{VALUE}};',
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
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .service_part .service_text .btn_3',
            ]
        );
        $this->add_control(
            'btnn_txt_color', [
                'label' => __( 'Button Text Color', 'amor' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service_part .service_text .btn_3' => 'color: {{VALUE}}; border-color: transparent;',
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
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .service_part .service_text .btn_3:hover',
            ]
        );
        $this->add_control(
            'btnn_hover_txt_color', [
                'label' => __( 'Button Hover Text Color', 'amor' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service_part .service_text .btn_3:hover' => 'color: {{VALUE}} !important; border-color: transparent',
                ],
            ]
        ); 
        $this->end_controls_section();

        // Single Service Color Settings ==============================
        $this->start_controls_section(
            'single_serv_color_sett', [
                'label' => __( 'Single Service Color Settings', 'amor' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'item_bg_color', [
                'label'     => __( 'Item BG Color', 'amor' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service_part .single_service_text' => 'background-color: {{VALUE}};',
                ],
            ]
        );    
        $this->add_control(
            'icon_color', [
                'label'     => __( 'Icon Color', 'amor' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service_part .single_service_text i' => 'color: {{VALUE}};',
                ],
            ]
        );    
        $this->add_control(
            'item_title_color', [
                'label'     => __( 'Item Title Color', 'amor' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service_part .single_service_text h4' => 'color: {{VALUE}};',
                ],
            ]
        );    
        $this->add_control(
            'item_text_color', [
                'label'     => __( 'Item Text Color', 'amor' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service_part .single_service_text p' => 'color: {{VALUE}};',
                ],
            ]
        );    
        $this->add_control(
            'anc_txt_color', [
                'label'     => __( 'Anchor Link Color', 'amor' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service_part .single_service_text a' => 'color: {{VALUE}};',
                ],
            ]
        );    
        
        $this->add_control(
            'item_hvr_separator',
            [
                'label'     => __( 'Hover Styles', 'amor' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        ); 
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'item_hover_bg',
                'label' => __( 'Item Background', 'amor' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .service_part .single_service_text:hover',
            ]
        );
        $this->add_control(
            'item_hvr_txt_color', [
                'label'     => __( 'Hover Text Color', 'amor' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service_part .single_service_text:hover i' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .service_part .single_service_text:hover h4' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .service_part .single_service_text:hover p' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .service_part .single_service_text:hover a' => 'color: {{VALUE}};',
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
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .service_part',
            ]
        );
        $this->end_controls_section();

	}

	protected function render() {

    $settings = $this->get_settings();
    $service_header = !empty( $settings['service_header'] ) ? $settings['service_header'] : '';
    $ser_btn_label = !empty( $settings['ser_btn_label'] ) ? $settings['ser_btn_label'] : '';
    $ser_btn_url = !empty( $settings['ser_btn_url']['url'] ) ? $settings['ser_btn_url']['url'] : '';
    $services = !empty( $settings['services_content'] ) ? $settings['services_content'] : '';
    ?>

    <!-- service part start-->
    <section class="service_part">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-4 col-sm-10">
                    <div class="service_text">
                        <?php
                            // Service Header =============
                            if( $service_header ){
                                echo wp_kses_post( wpautop( $service_header ) );
                            }

                            // Button =============
                            if( $ser_btn_label ){
                                echo "<a href='". esc_url($ser_btn_url) . "' class='btn_3'>".esc_html( $ser_btn_label )."</a>";
                            }
                        ?>
                    </div>
                </div>
                <div class="col-lg-7 col-xl-6">
                    <div class="service_part_iner">
                        <div class="row">
                            <?php
                            if( is_array( $services ) && count( $services ) > 0 ){
                                foreach ( $services as $service ) {
                                    $fontIcon      = !empty( $service['icon'] ) ? $service['icon'] : '';
                                    $service_title = !empty( $service['title'] ) ? $service['title'] : '';
                                    $service_desc  = !empty( $service['desc'] ) ? $service['desc'] : '';
                                    $anc_txt       = !empty( $service['anc_txt'] ) ? $service['anc_txt'] : '';
                                    $anc_url       = !empty( $service['anc_url']['url'] ) ? $service['anc_url']['url'] : '';
                            ?>
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_service_text ">
                                    <?php
                                        if( $fontIcon ){
                                            echo '<i class="'. esc_attr( $fontIcon ) .'"></i>';
                                        }

                                        echo '<h4>' .esc_html( $service_title ) . '</h4>';
                                        echo '<p>' .esc_html( $service_desc ) . '</p>';

                                        // Anchor text =============
                                        if( $anc_txt ){
                                            echo "<a href='". esc_url($anc_url) . "'>".esc_html( $anc_txt )."</a>";
                                        }
                                    ?>
                                </div>
                            </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service part end-->
    <?php
    }
}
