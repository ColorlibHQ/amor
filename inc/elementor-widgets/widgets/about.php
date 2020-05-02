<?php
namespace Amorelementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Scheme_Color;
use Elementor\Utils;
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
class Amor_About extends Widget_Base {

	public function get_name() {
		return 'amor-about';
	}

	public function get_title() {
		return __( 'About', 'amor' );
	}

	public function get_icon() {
		return 'eicon-info-box';
	}

	public function get_categories() {
		return [ 'amor-elements' ];
	}

	protected function _register_controls() {

		$repeater = new \Elementor\Repeater();

        // ----------------------------------------  About Section ------------------------------
        $this->start_controls_section(
            'about_heading',
            [
                'label' => __( 'About Heading', 'amor' ),
            ]
        );
        $this->add_control(
            'about_img',
            [
                'label'         => esc_html__( 'About Image', 'amor' ),
                'type'          => Controls_Manager::MEDIA,
                'label_block'   => true,
                'default'       => [
                    'url'       => Utils::get_placeholder_image_src(),
                ]
            ]
        );
        $this->add_control(
            'about_header',
            [
                'label'         => esc_html__( 'About Header', 'amor' ),
                'description'   => esc_html__('Use <br> tag for line break', 'amor'),
                'type'          => Controls_Manager::WYSIWYG,
                'label_block'   => true,
                'default'       => __( '<h5>2000<br><span>since</span></h5><h2>About Believe</h2><p>According to the research firm Frost & Sullivan, the estimated size of the North American used test and measurement equipment market was $446.4 million in 2004 and is estimated to grow to $654.5 million by 2011. For over 50 years, companies and governments have procured used test and measurement instruments.</p>', 'amor' )
            ]
        );
        $this->add_control(
            'about_btn_label',
            [
                'label'         => esc_html__( 'About Button Label', 'amor' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => __( 'learn more', 'amor' )
            ]
        );
        $this->add_control(
            'about_btn_url',
            [
                'label'         => esc_html__( 'About Button URL', 'amor' ),
                'type'          => Controls_Manager::URL,
                'label_block'   => true,
                'default'       => [
                    'url'       => '#'
                ]
            ]
        );

        $this->end_controls_section(); // End section top content
        
		// ----------------------------------------   About content ------------------------------
		$this->start_controls_section(
			'counter_block',
			[
				'label' => __( 'Counter Section', 'amor' ),
			]
		);
		$this->add_control(
            'about_counters', [
                'label' => __( 'Create New', 'amor' ),
                'type'  => Controls_Manager::REPEATER,
                'title_field' => '{{{ title }}}',
                'fields' => [
                    [
                        'name'      => 'counter_val',
                        'label'     => __( 'Counter Value', 'amor' ),
                        'type'      => Controls_Manager::TEXT,
                        'default'   => __( '50', 'amor' )
                    ],
                    [
                        'name'      => 'counter_unit',
                        'label'     => __( 'Counter Unit', 'amor' ),
                        'type'      => Controls_Manager::SELECT,
                        'default'   => 'k',
                        'options'   => [
                            'k'     => __( 'K', 'amor' ),
                            'm'     => __( 'M', 'amor' ),
                        ]
                    ],
                    [
                        'name'  => 'title',
                        'label' => __( 'Title', 'amor' ),
                        'type'  => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => __( 'Total Volunteer', 'amor' )
                    ],
                ],
            ]
        );

		$this->end_controls_section(); // End About content

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
            'sec_tit_top_col', [
                'label'     => __( 'Section Title Top Color', 'amor' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about_us .about_us_text > h5' => 'color: {{VALUE}};',
                ],
            ]
        );    
        $this->add_control(
            'bor_left_col', [
                'label'     => __( 'Border Left Color', 'amor' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about_us .about_us_text > h5' => 'border-color: {{VALUE}};',
                ],
            ]
        );    

        $this->add_control(
            'color_sub_ttitle', [
                'label'     => __( 'Big Title Color', 'amor' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about_us .about_us_text > h2' => 'color: {{VALUE}};',
                ],
            ]
        );    

        $this->add_control(
            'text_color', [
                'label'     => __( 'Text Color', 'amor' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about_us .about_us_text > p' => 'color: {{VALUE}};',
                ],
            ]
        );    

        $this->add_control(
            'count_val__separator',
            [
                'label'     => __( 'Counter Styles', 'amor' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        ); 
        $this->add_control(
            'count_val_color', [
                'label'     => __( 'Counter Value Color', 'amor' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .banner_item > .single_item > h2' => 'color: {{VALUE}};',
                ],
            ]
        );    
        $this->add_control(
            'count_title_color', [
                'label'     => __( 'Counter Title Color', 'amor' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .banner_item > .single_item > h5' => 'color: {{VALUE}};',
                ],
            ]
        );    
        $this->add_control(
            'count_border_color', [
                'label'     => __( 'Counter Border Color', 'amor' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .banner_item > .single_item' => 'border-color: {{VALUE}};',
                ],
            ]
        );    
        $this->add_control(
            'count_border_hvr_color', [
                'label'     => __( 'Counter Border Hover Color', 'amor' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .banner_item > .single_item:hover' => 'border-color: {{VALUE}};',
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
                'selector' => '{{WRAPPER}} .about_btn .btn_3',
            ]
        );
        $this->add_control(
            'btnn_txt_color', [
                'label' => __( 'Button Text Color', 'amor' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about_btn .btn_3' => 'color: {{VALUE}}; border-color: transparent;',
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
                'selector' => '{{WRAPPER}} .about_btn .btn_3:hover',
            ]
        );
        $this->add_control(
            'btnn_hover_txt_color', [
                'label' => __( 'Button Hover Text Color', 'amor' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .about_btn .btn_3:hover' => 'color: {{VALUE}} !important; border-color: transparent',
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
                'selector' => '{{WRAPPER}} .about_us',
            ]
        );
        $this->add_control(
            'about_shade_img_separator',
            [
                'label'     => __( 'About Shade Image', 'amor' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        ); 
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'about_shade_img',
                'label' => __( 'Background', 'amor' ),
                'types' => [ 'classic' ],
                'selector' => '{{WRAPPER}} .about_us .about_us_img',
            ]
        );
        $this->end_controls_section();

	}

	protected function render() {

        $settings = $this->get_settings();

        // call load widget script
        $this->load_widget_script();
        
        $about_img   = !empty( $settings['about_img']['id'] ) ? wp_get_attachment_image( $settings['about_img']['id'], 'amor_about_thumb_458x580', false, array( 'alt' => 'about image' ) ) : '';
        $about_header = !empty( $settings['about_header'] ) ? $settings['about_header'] : '';
        $about_btn_label = !empty( $settings['about_btn_label'] ) ? $settings['about_btn_label'] : '';
        $about_btn_url = !empty( $settings['about_btn_url']['url'] ) ? $settings['about_btn_url']['url'] : '';
        $counters = !empty( $settings['about_counters'] ) ? $settings['about_counters'] : '';
        $dynamic_class = is_front_page() ? 'about_us' : 'about_us padding_top';
        ?>

    <!-- about part end-->
    <section class="<?php echo esc_attr($dynamic_class)?>">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6">
                    <div class="about_us_img">
                        <?php
                            if( $about_img ){
                                echo wp_kses_post( $about_img );
                            }
                        ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about_us_text">
                        <?php
                            // About Header =============
                            if( $about_header ){
                                echo wp_kses_post( wpautop( $about_header ) );
                            }
                        ?>
                        <div class="banner_item">
                            <?php
                            if( is_array( $counters ) && count( $counters ) > 0 ){
                                foreach ( $counters as $counter ) {
                                    $counter_val    = !empty( $counter['counter_val'] ) ? $counter['counter_val'] : '';
                                    $title          = !empty( $counter['title'] ) ? $counter['title'] : '';
                                    $counter_unit   = !empty( $counter['counter_unit'] ) ? $counter['counter_unit'] : '';
                            ?>
                            <div class="single_item">
                                <h2> <span class="count"><?php echo esc_html( $counter_val )?></span><?php echo esc_html( $counter_unit )?></h2>
                                <h5><?php echo esc_html( $title )?></h5>
                            </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                        
                    </div>
                   
                </div>
                <div class="col-lg-12">
                    <div class="text-center about_btn">
                        <?php
                            if( $about_btn_label ){
                                echo "<a class='btn_3' href='". esc_url($about_btn_url) . "'>".esc_html( $about_btn_label )."</a>";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about part end-->
    <?php
    }

    public function load_widget_script(){
        if( \Elementor\Plugin::$instance->editor->is_edit_mode() === true  ) {
        ?>
        <script>
        ( function( $ ){
            //counter up
            $('.count').counterUp({
                delay: 10,
                time: 2000
            });
        })(jQuery);
        </script>
        <?php 
        }
    }
}
