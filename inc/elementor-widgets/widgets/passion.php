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
class Amor_Passion extends Widget_Base {

	public function get_name() {
		return 'amor-passions';
	}

	public function get_title() {
		return __( 'Our Causes', 'amor' );
	}

	public function get_icon() {
		return 'eicon-info-box';
	}

	public function get_categories() {
		return [ 'amor-elements' ];
	}

	protected function _register_controls() {

		$repeater = new \Elementor\Repeater();

        // ----------------------------------------  Passion Section ------------------------------
        $this->start_controls_section(
            'passions_heading',
            [
                'label' => __( 'Causes Heading', 'amor' ),
            ]
        );
        $this->add_control(
            'passion_header',
            [
                'label'         => esc_html__( 'Causes Header', 'amor' ),
                'description'   => esc_html__('Use <br> tag for line break', 'amor'),
                'type'          => Controls_Manager::WYSIWYG,
                'label_block'   => true,
                'default'       => __( '<h2>Our Causes</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>', 'amor' )
            ]
        );

        $this->end_controls_section(); // End section top content
        
		// ----------------------------------------   Causes content ------------------------------
		$this->start_controls_section(
			'passions_block',
			[
				'label' => __( 'Causes', 'amor' ),
			]
		);
		$this->add_control(
            'passions_content', [
                'label' => __( 'Create New', 'amor' ),
                'type'  => Controls_Manager::REPEATER,
                'title_field' => '{{{ title }}}',
                'fields' => [
                    [
                        'name'      => 'image',
                        'label'     => __( 'Select Image', 'amor' ),
                        'type'  => Controls_Manager::MEDIA,
                    ],
                    [
                        'name'  => 'title',
                        'label' => __( 'Title', 'amor' ),
                        'type'  => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => __( 'Fourth created forth fill moving created subdue be', 'amor' )
                    ],
                    [
                        'name'      => 'title_url',
                        'label'     => __( 'Title URL', 'amor' ),
                        'type'      => Controls_Manager::URL,
                        'default'   => [
                            'url'   => '#'
                        ]
                    ],
                    [
                        'name'  => 'goal_icon',
                        'label' => __( 'Goal Icon', 'amor' ),
                        'type'      => Controls_Manager::ICON,
                        'label_block'   => true,
                        'default'   => 'fa fa-mobile',
                        'options'   => amor_flaticon_list()
                    ],
                    [
                        'name'      => 'goal_title',
                        'label'     => __( 'Goal Title', 'amor' ),
                        'type'      => Controls_Manager::TEXT,
                        'label_block'   => true,
                        'default'   => __( 'Goal: $2500', 'amor' )
                    ],
                    [
                        'name'  => 'raised_icon',
                        'label' => __( 'Raised Icon', 'amor' ),
                        'type'      => Controls_Manager::ICON,
                        'label_block'   => true,
                        'default'   => 'fa fa-mobile',
                        'options'   => amor_flaticon_list()
                    ],
                    [
                        'name'      => 'raised_title',
                        'label'     => __( 'Raised Title', 'amor' ),
                        'type'      => Controls_Manager::TEXT,
                        'label_block'   => true,
                        'default'   => __( 'Raised: $1533', 'amor' )
                    ],
                    [
                        'name'  => 'percentage_val',
                        'label' => __( 'Percentage Value In Slide', 'amor' ),
                        'type'  => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => '75%'
                    ],
                    [
                        'name'      => 'btn_label',
                        'label'     => __( 'Button Label', 'amor' ),
                        'type'      => Controls_Manager::TEXT,
                        'default'   => __( 'read more', 'amor' )
                    ],
                    [
                        'name'      => 'btn_url',
                        'label'     => __( 'Button URL', 'amor' ),
                        'type'      => Controls_Manager::URL,
                        'default'   => [
                            'url'   => '#'
                        ]
                    ],
                ],
            ]
        );

		$this->end_controls_section(); // End Passions content

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
                'label'     => __( 'Section Title Color', 'amor' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .passion_part .section_tittle h2' => 'color: {{VALUE}};',
                ],
            ]
        );    

        $this->add_control(
            'color_sub_ttitle', [
                'label'     => __( 'Text Color', 'amor' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .passion_part .section_tittle p' => 'color: {{VALUE}};',
                ],
            ]
        );    
        
        $this->end_controls_section();

        // Single Passion Color Settings ==============================
        $this->start_controls_section(
            'single_serv_color_sett', [
                'label' => __( 'Single Item Color Settings', 'amor' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'item_title_color', [
                'label'     => __( 'Item Title Color', 'amor' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .passion_part .single-home-passion .card h5' => 'color: {{VALUE}};',
                ],
            ]
        );    
        $this->add_control(
            'item_title_hvr_color', [
                'label'     => __( 'Item Title Hover Color', 'amor' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .passion_part .single-home-passion .card a:hover h5' => 'color: {{VALUE}};',
                ],
            ]
        );    
        $this->add_control(
            'goal_raised_icon_color', [
                'label'     => __( 'Goal & Raised Icon Colors', 'amor' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .passion_part .single-home-passion .card ul li span' => 'color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'goal_raised_txt_color', [
                'label'     => __( 'Goal & Raised Text Color', 'amor' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .passion_part .single-home-passion .card ul li' => 'color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'slide_color', [
                'label'     => __( 'Slide Color', 'amor' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .passion_part .skill-bar, .passion_part .skill-bar:after' => 'background-color: {{VALUE}};',
                ],
            ]
        );    
           
          
        $this->add_control(
            'btn_styles_sep', [
                'label'     => __( 'Button Styles', 'amor' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'after'
            ]
        );    

        $this->add_control(
            'btn_bg_color', [
                'label'     => __( 'Button Bg Color', 'amor' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .passion_part .btn_2' => 'background-color: {{VALUE}};',
                ],
            ]
        ); 

        $this->add_control(
            'btn_txt_color', [
                'label'     => __( 'Button Text Color', 'amor' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .passion_part .btn_2' => 'color: {{VALUE}}!important;',
                ],
            ]
        ); 

        $this->add_control(
            'btn_hvr_bg_color', [
                'label'     => __( 'Button Hover Bg Color', 'amor' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .passion_part .btn_2:hover' => 'background: {{VALUE}};border-color: transparent',
                ],
            ]
        ); 

        $this->add_control(
            'btn_hvr_txt_color', [
                'label'     => __( 'Button Hover Text Color', 'amor' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .passion_part .btn_2:hover' => 'color: {{VALUE}}!important;',
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
                'selector' => '{{WRAPPER}} .passion_part',
            ]
        );
        $this->end_controls_section();

	}

	protected function render() {

    $settings = $this->get_settings();
    $passion_header = !empty( $settings['passion_header'] ) ? $settings['passion_header'] : '';
    $passions = !empty( $settings['passions_content'] ) ? $settings['passions_content'] : '';
    ?>

    <!--::passion part start::-->
    <section class="passion_part passion_section_padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-md-8">
                    <div class="section_tittle">
                        <?php
                            // Passion Header =============
                            if( $passion_header ){
                                echo wp_kses_post( wpautop( $passion_header ) );
                            }
                        ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                if( is_array( $passions ) && count( $passions ) > 0 ){
                    foreach ( $passions as $passion ) {
                        $passion_img    = !empty( $passion['image']['id'] ) ? wp_get_attachment_image( $passion['image']['id'], 'amor_cases_thumb_350x361', false, array( 'class' => 'card-img-top', 'alt' => 'causes image' ) ) : '';
                        $passion_title  = !empty( $passion['title'] ) ? $passion['title'] : '';
                        $passion_url  = !empty( $passion['title_url']['url'] ) ? $passion['title_url']['url'] : '';
                        $percentage_val = !empty( $passion['percentage_val'] ) ? $passion['percentage_val'] : '';
                        $goal_icon      = !empty( $passion['goal_icon'] ) ? $passion['goal_icon'] : '';
                        $goal_title     = !empty( $passion['goal_title'] ) ? $passion['goal_title'] : '';
                        $raised_icon    = !empty( $passion['raised_icon'] ) ? $passion['raised_icon'] : '';
                        $raised_title   = !empty( $passion['raised_title'] ) ? $passion['raised_title'] : '';
                        $btn_label      = !empty( $passion['btn_label'] ) ? $passion['btn_label'] : '';
                        $btn_url        = !empty( $passion['btn_url']['url'] ) ? $passion['btn_url']['url'] : '';
                ?>
                <div class="col-sm-6 col-lg-4 col-xl-4">
                    <div class="single-home-passion">
                        <div class="card">
                            <?php
                                if( $passion_img ){
                                    echo wp_kses_post( $passion_img );
                                }
                            ?>
                            <div class="card-body">
                                <a href="<?php echo esc_url( $passion_url );?>">
                                    <h5 class="card-title"><?php echo esc_html( $passion_title );?> </h5>
                                </a>
                                <ul>
                                    <li><span class="<?php echo esc_html( $goal_icon );?>"></span> <?php echo esc_html( $goal_title );?></li>
                                    <li><span class="<?php echo esc_html( $raised_icon );?>"></span> <?php echo esc_html( $raised_title );?></li>
                                </ul>                                
                                <div class="skill">
                                    <div class="skill-bar skill11 wow slideInLeft animated" style="width: <?php echo esc_html( $percentage_val );?>">
                                        <span class="skill-count11"><?php echo esc_html( $percentage_val );?></span>
                                    </div>
                                </div>
                                <a href="<?php echo esc_url( $btn_url );?>" class="btn_2"><?php echo esc_html( $btn_label );?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </section>
    <!--::passion part end::-->
    <?php
    }
}
