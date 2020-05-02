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
 * Amor elementor Event section widget.
 *
 * @since 1.0
 */
class Amor_Events extends Widget_Base {

	public function get_name() {
		return 'amor-events';
	}

	public function get_title() {
		return __( 'Events', 'amor' );
	}

	public function get_icon() {
		return 'eicon-info-box';
	}

	public function get_categories() {
		return [ 'amor-elements' ];
	}

	protected function _register_controls() {

		$repeater = new \Elementor\Repeater();

        // ----------------------------------------  Event Section ------------------------------
        $this->start_controls_section(
            'events_heading',
            [
                'label' => __( 'Event Heading', 'amor' ),
            ]
        );
        $this->add_control(
            'event_header',
            [
                'label'         => esc_html__( 'Event Header', 'amor' ),
                'description'   => esc_html__('Use <br> tag for line break', 'amor'),
                'type'          => Controls_Manager::WYSIWYG,
                'label_block'   => true,
                'default'       => __( '<h2>Upcoming Event</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>', 'amor' )
            ]
        );

        $this->end_controls_section(); // End section top content
        
		// ----------------------------------------   Events content ------------------------------
		$this->start_controls_section(
			'events_block',
			[
				'label' => __( 'Events', 'amor' ),
			]
		);
		$this->add_control(
            'events_content', [
                'label' => __( 'Create Event', 'amor' ),
                'type'  => Controls_Manager::REPEATER,
                'title_field' => '{{{ title }}}',
                'fields' => [
                    [
                        'name'  => 'image',
                        'label' => __( 'Image', 'amor' ),
                        'type'  => Controls_Manager::MEDIA,
                        'label_block' => true,
                    ],
                    [
                        'name'  => 'event_day',
                        'label' => __( 'Event Day', 'amor' ),
                        'type'  => Controls_Manager::DATE_TIME,
                        'picker_options' => [
                            'dateFormat' => 'd M'
                        ],
                        'label_block' => true,
                    ],
                    [
                        'name'  => 'event_counter',
                        'label' => __( 'Event Counter', 'amor' ),
                        'type'  => Controls_Manager::DATE_TIME,
                        'label_block' => true,
                    ],
                    [
                        'name'  => 'title',
                        'label' => __( 'Title', 'amor' ),
                        'type'  => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => __( 'Volunteeer Idea 2020', 'amor' )
                    ],
                    [
                        'name'      => 'desc',
                        'label'     => __( 'Short Text', 'amor' ),
                        'type'      => Controls_Manager::TEXTAREA,
                        'default'   => __( 'Seed the life upon you are creat.', 'amor' )
                    ],
                ],
            ]
        );

		$this->end_controls_section(); // End Events content

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
                    '{{WRAPPER}} .event_part .section_tittle h2' => 'color: {{VALUE}};',
                ],
            ]
        );    

        $this->add_control(
            'color_sub_ttitle', [
                'label'     => __( 'Text Color', 'amor' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .event_part .section_tittle p' => 'color: {{VALUE}};',
                ],
            ]
        );    
        
        $this->end_controls_section();

        // Single Event Color Settings ==============================
        $this->start_controls_section(
            'single_serv_color_sett', [
                'label' => __( 'Single Event Color Settings', 'amor' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        
        $this->add_control(
            'event_title_color', [
                'label'     => __( 'Event Title Color', 'amor' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .event_part .single_event .media-body h5' => 'color: {{VALUE}};',
                ],
            ]
        );    
        $this->add_control(
            'event_sub_title_color', [
                'label'     => __( 'Sub Title Color', 'amor' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .event_part .single_event .media-body p' => 'color: {{VALUE}};',
                ],
            ]
        );    
        $this->add_control(
            'event_date_color', [
                'label'     => __( 'Event Date Color', 'amor' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .event_part .single_event ul li span' => 'color: {{VALUE}};',
                ],
            ]
        );    
        $this->add_control(
            'event_date_placeholder_color', [
                'label'     => __( 'Event Counter Placeholder Color', 'amor' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .event_part .single_event ul li' => 'color: {{VALUE}};',
                ],
            ]
        );    
        $this->add_control(
            'sing_event_bg_color', [
                'label'     => __( 'Single Event BG Color', 'amor' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .event_part .single_event' => 'background-color: {{VALUE}};',
                ],
            ]
        );    

        $this->add_control(
            'tricker_bg_col_sep',
            [
                'label'     => __( 'Tricker BG Color', 'amor' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'tricker_bg_col',
                'label' => __( 'Background', 'amor' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .event_part .tricker',
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
                'selector' => '{{WRAPPER}} .event_part',
            ]
        );
        $this->end_controls_section();

	}

	protected function render() {

    $settings = $this->get_settings();

    // call load widget script
    // $this->load_widget_script();

    $event_header = !empty( $settings['event_header'] ) ? $settings['event_header'] : '';
    $events = !empty( $settings['events_content'] ) ? $settings['events_content'] : '';
    $count = 0;
    ?>

    <!--::event_part start::-->
    <section class="event_part">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-8">
                    <div class="section_tittle">
                        <?php
                            // Event Header =============
                            if( $event_header ){
                                echo wp_kses_post( wpautop( $event_header ) );
                            }
                        ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                if( is_array( $events ) && count( $events ) > 0 ){
                    foreach ( $events as $event ) {
                        $event_img    = !empty( $event['image']['id'] ) ? wp_get_attachment_image( $event['image']['id'], 'amor_event_thumb_203x211', false, array( 'class' => 'align-self-center', 'alt' => 'event image' ) ) : '';
                        $event_day = !empty( $event['event_day'] ) ? $event['event_day'] : '';
                        $event_counter = !empty( $event['event_counter'] ) ? $event['event_counter'] : '';
                        $event_title = !empty( $event['title'] ) ? $event['title'] : '';
                        $event_desc  = !empty( $event['desc'] ) ? $event['desc'] : '';
                        $count++;
                ?>
                <div class="col-sm-6">
                    <div class="single_event media">
                        <?php
                            if( $event_img ){
                                echo wp_kses_post( $event_img );
                            }
                        ?>
                        <div class="tricker"><?php echo esc_html( $event_day )?></div>
                        <div class="media-body align-self-center">
                            <h5 class="mt-0"><?php echo esc_html( $event_title )?></h5>
                            <p><?php echo esc_html( $event_desc )?></p>
                            <ul class="counter-class counter-class<?php echo $count?>" data-date="<?php echo $event_counter?>">
                                <li><span class="counter-days " id="days"></span><?php _e('days', 'amor')?></li>
                                <li><span class="counter-hours" id="hours"></span><?php _e('Hours', 'amor')?></li>
                                <li><span class="counter-minutes" id="minutes"></span><?php _e('Minutes', 'amor')?></li>
                            </ul>
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
    <!--::event_part end::-->
    <?php
    }

    public function load_widget_script(){
        if( \Elementor\Plugin::$instance->editor->is_edit_mode() === true  ) {
        ?>
        <script>
        ( function( $ ){
            $(document).ready(function(){
                loopcounter('counter-class1');
                loopcounter('counter-class2');
                loopcounter('counter-class3');
                loopcounter('counter-class4');
            });
        })(jQuery);
        </script>
        <?php 
        }
    }
}
