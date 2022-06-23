<?php
/**
 *
 * @package arile-super
 */	

if ( ! function_exists( 'arilesuper_aasta_main_slider_default_content' ) ) :
		/* Main slider content  */
		function arilesuper_aasta_main_slider_default_content( $wp_customize ){
					$aasta_main_slider_data = $wp_customize->get_setting( 'aasta_main_slider_content' );
						if ( ! empty( $aasta_main_slider_data ) ) {
						$aasta_main_slider_data->default = json_encode( array(
						array(
						'title'      => esc_html__( 'Welcome to Aasta', 'arile-super' ),
						'subtitle'       => esc_html__( 'A Multipurpose WP Theme', 'arile-super' ),
						'text'       => esc_html__( 'Aasta is a most popular Multipurpose WordPress themes in the world. The designs are clean, modern, and feature strong default colors that inspire confidence.', 'arile-super' ),
						'button_text'      => __('Check it out','arile-super'),
						'link'       => '#',
						'image_url'  => arile_super_plugin_url .'/inc/aasta/images/theme-slide1.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b10',				
						),
						array(
						'title'      => esc_html__( 'Build a Beautiful Website', 'arile-super' ),
						'subtitle'       => esc_html__( 'Pixels Perfect Design ', 'arile-super' ),
						'text'       => esc_html__( 'Aasta is a most popular Multipurpose WordPress themes in the world. The designs are clean, modern, and feature strong default colors that inspire confidence.', 'arile-super' ),
						'button_text'      => __('Check it out','arile-super'),
						'link'       => '#',
						'image_url'  => arile_super_plugin_url .'/inc/aasta/images/theme-slide2.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b14',
						),	
					) );
				}
		}
add_action( 'customize_register', 'arilesuper_aasta_main_slider_default_content' );
endif;

/* Service content  */
if ( ! function_exists( 'arilesuper_aasta_service_default_content' ) ) :		
    function arilesuper_aasta_service_default_content( $wp_customize ){
			$aasta_service_data = $wp_customize->get_setting( 'aasta_service_content' );
				if ( ! empty( $aasta_service_data ) ) {	
					$aasta_service_data->default = json_encode( array(
						array(
						'icon_value' => 'fa-laptop',
						'title'      => esc_html__( 'SEO Friendly', 'arile-super' ),
						'text'       => 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.',
						'choice'    => 'customizer_repeater_image',
						'image_url'  => arile_super_plugin_url .'/inc/aasta/images/theme-service1.jpg',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b15',
						),
						array(
						'icon_value' => 'fa fa-opencart',
						'title'      => esc_html__( 'Translation & RTL Ready', 'arile-super' ),
						'text'       => 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.',
						'choice'    => 'customizer_repeater_image',
						'image_url'  => arile_super_plugin_url .'/inc/aasta/images/theme-service2.jpg',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b16',
						),
						array(
						'icon_value' => 'fa fa-users',
						'title'      => esc_html__( 'Creative Design', 'arile-super' ),
						'text'       => 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.',
						'choice'    => 'customizer_repeater_image',
						'image_url'  => arile_super_plugin_url .'/inc/aasta/images/theme-service3.jpg',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b17',
						),
						
					) );
				}
	    }
add_action( 'customize_register', 'arilesuper_aasta_service_default_content' );
endif;

/* Project content  */
if ( ! function_exists( 'arilesuper_aasta_project_default_content' ) ) :		
	function arilesuper_aasta_project_default_content( $wp_customize ){
			$aasta_project_data = $wp_customize->get_setting( 'aasta_project_content' );
					if ( ! empty( $aasta_project_data ) ) { 	
					$aasta_project_data->default = json_encode( array(
						array(
						'image_url'  => arile_super_plugin_url .'/inc/aasta/images/theme-project1.jpg',
						'title'      => __('StartUp Business','arile-super'),
						'text'       => __('','arile-super'),	
						'id'         => 'customizer_repeater_56d7ea7f40b30',
						),
						array(
						'image_url'  => arile_super_plugin_url .'/inc/aasta/images/theme-project2.jpg',
						'title'      => __('Market Expansion','arile-super'),
						'text'       => __('','arile-super'),
						'id'         => 'customizer_repeater_56d7ea7f40b31',
						),
						array(
						'image_url'  => arile_super_plugin_url .'/inc/aasta/images/theme-project3.jpg',
						'title'      => __('Data Analytics','arile-super'),
						'text'       => __('','arile-super'),
						'id'         => 'customizer_repeater_56d7ea7f40b71',
						),
						
					) );	
					
				}
        }
add_action( 'customize_register', 'arilesuper_aasta_project_default_content' );
endif;

/* Testimonial content  */
if ( ! function_exists( 'arilesuper_aasta_testimonial_default_content' ) ) :		
	function arilesuper_aasta_testimonial_default_content( $wp_customize ){
		$aasta_testimonial_data = $wp_customize->get_setting( 'aasta_testimonial_content' );
				if ( ! empty( $aasta_testimonial_data ) ) 
				{			
					$aasta_testimonial_data->default = json_encode( array(
						array(
						'title'      => 'Rosa Linn',
						'text'       => '"You guys are legendary! You guys are great and having amazing support & service. I couldn’t ask for any better. Thank you!"',
						'designation' => __('Designer','arile-super'),
						'image_url'  => arile_super_plugin_url .'/inc/aasta/images/theme-user1.jpg',
						'id'         => 'customizer_repeater_56d7ea7f40b30',
						),
						array(
						'title'      => 'Herman Girard',
						'text'       => '"You guys are legendary! You guys are great and having amazing support & service. I couldn’t ask for any better. Thank you!"',
						'designation' => __('Sales Manager','arile-super'),
						'image_url'  => arile_super_plugin_url .'/inc/aasta/images/theme-user2.jpg',
						'id'         => 'customizer_repeater_56d7ea7f40b31',
						),
						array(
						'title'      => 'Alexia Dior',
						'text'       => '"You guys are legendary! You guys are great and having amazing support & service. I couldn’t ask for any better. Thank you!"',
						'designation' => __('Designer','arile-super'),
						'image_url'  => arile_super_plugin_url .'/inc/aasta/images/theme-user3.jpg',
						'id'         => 'customizer_repeater_56d7ea7f40b33',
						),
					) );
				}
        }
add_action( 'customize_register', 'arilesuper_aasta_testimonial_default_content' );
endif;