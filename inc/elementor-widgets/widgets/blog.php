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
 * Amor elementor few words section widget.
 *
 * @since 1.0
 */

class Amor_Blog extends Widget_Base {

	public function get_name() {
		return 'amor-blog';
	}

	public function get_title() {
		return __( 'Blog', 'amor' );
	}

	public function get_icon() {
		return 'eicon-post-list';
	}

	public function get_categories() {
		return [ 'amor-elements' ];
    }
    
    public function amor_featured_post_cat(){
        $post_cat_array = [];
        $cat_args = [
            'orderby' => 'name',
            'order'   => 'ASC'
        ];
        $categories = get_categories($cat_args);
        foreach($categories as $category) {
            $args = array(
                'showposts' => 4,
                'category_name' => $category->slug,
                'ignore_sticky_posts'=> 1
            );
            $posts = get_posts($args);
            if ($posts) {
                $post_cat_array[ $category->slug ] = $category->name;
            } else {
                return __( 'Select a different category, because this category have not enough posts.', 'amor' );
            }
        }
    
        return $post_cat_array;

             
    }

	protected function _register_controls() {

        // ----------------------------------------  Blog content ------------------------------
        $this->start_controls_section(
            'blog_content',
            [
                'label' => __( 'Latest Blog Post', 'amor' ),
            ]
        );
		$this->add_control(
			'sec_title',
			[
				'label'         => esc_html__( 'Section Title', 'amor' ),
				'description'   => __( "Use < span> tag for color and italic word", "amor" ),
				'type'          => Controls_Manager::WYSIWYG,
				'label_block'   => true,
				'default'       => __( '<h2>Blog Post</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>', 'amor' )
			]
        );

        $this->end_controls_section(); // End Blog content


        // Blog post settings
        $this->start_controls_section(
            'blog_post_sec',
            [
                'label' => __( 'Blog Post Settings', 'amor' ),
            ]
        );
        $this->add_control(
            'post_cat',
            [
                'label'         => esc_html__( 'Select Category', 'amor' ),
                'type'          => Controls_Manager::SELECT,
                'default'       => 'inspiration',
                'description'   => esc_html__( 'Please use the featured images size 1159px width & 811px height or more for better look.', 'amor' ),
                'options'       => $this->amor_featured_post_cat()
            ]
        );
		$this->add_control(
			'post_order',
			[
				'label'         => esc_html__( 'Post Order', 'amor' ),
				'type'          => Controls_Manager::SWITCHER,
				'label_block'   => false,
				'label_on'      => 'ASC',
				'label_off'     => 'DESC',
                'default'       => 'yes',
                'options'       => [
                    'no'        => 'ASC',
                    'yes'       => 'DESC'
                ]
			]
		);
		$this->add_control(
			'excerpt_limit',
			[
				'label'         => esc_html__( 'Excerpt Limit', 'amor' ),
				'type'          => Controls_Manager::NUMBER,
				'label_block'   => false,
                'default'       => '18',
                'min'           => '10',
                'max'           => '30',
			]
		);

        $this->end_controls_section(); // End few words content


        //------------------------------ Style Section ------------------------------
        $this->start_controls_section(
            'style_section', [
                'label' => __( 'Style Section Heading', 'amor' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_secttitle', [
                'label'     => __( 'Section Title Color', 'amor' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .blog_part .section_tittle h2' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_big_ttitle', [
                'label'     => __( 'Sub Title Color', 'amor' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .blog_part .section_tittle p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

        //------------------------------ Single item Style Section ------------------------------
        $this->start_controls_section(
            'blog_post_style_section', [
                'label' => __( 'Blog Post Styles', 'amor' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'blog_post_title', [
                'label'     => __( 'Blog Title Color', 'amor' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .blog_part .single_blog .single_appartment_content h4' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'blog_exc_color', [
                'label'     => __( 'Blog Excerpt Color', 'amor' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .blog_part .single_blog .single_appartment_content p' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'blog_meta_color', [
                'label'     => __( 'Blog Meta Color', 'amor' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .blog_part .single_blog .list-unstyled li a' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .blog_part .single_blog .list-unstyled li a span' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .blog_part .single_blog .list-unstyled li:after' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        
        $this->end_controls_section();


        /**
         * Style Tab
         * ------------------------------ Background Style ------------------------------
         *
         */
        $this->start_controls_section(
            'section_bg', [
                'label' => __( 'Style Background', 'amor' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        
        $this->add_control(
            'section_bgheading',
            [
                'label'     => __( 'Background Settings', 'amor' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'sectionbg',
                'label' => __( 'Background', 'amor' ),
                'types' => [ 'classic' ],
                'selector' => '{{WRAPPER}} .blog_part',
            ]
        );

        $this->end_controls_section();
	}

	protected function render() {

    $settings  = $this->get_settings();
    $title = !empty( $settings['sec_title'] ) ? $settings['sec_title'] : '';
    $post_cat = !empty( $settings['post_cat'] ) ? $settings['post_cat'] : '';
    $post_order = !empty( $settings['post_order'] ) ? $settings['post_order'] : '';
    $excerpt_limit = !empty( $settings['excerpt_limit'] ) ? $settings['excerpt_limit'] : '';
    $post_order = $post_order == 'yes' ? 'DESC' : 'ASC';
    $dynamic_class = is_front_page() ? 'blog_part padding_bottom' : 'blog_part section_padding';
    ?>

    <!--::blog_part start::-->
    <section class="<?php echo esc_attr($dynamic_class)?>">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-md-8">
                    <div class="section_tittle text-center">
                        <?php
                            //Title text ==============
                            if( $title ){
                                echo wp_kses_post( wpautop( $title ) );
                            }
                        ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                    if( function_exists( 'amor_latest_blog' ) ) {
                        amor_latest_blog( $post_cat, $post_order, $excerpt_limit );
                    }
                ?>
            </div>
        </div>
    </section>
    <!--::blog_part end::-->
    <?php
	}
}
