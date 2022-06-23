<?php
/**
 * @package    arile-super
 */

require arile_super_plugin_dir . 'inc/aasta/customizer/super-aasta-customizer.php';
require arile_super_plugin_dir . 'inc/aasta/customizer/super-aasta-customizer-options.php';
require arile_super_plugin_dir . 'inc/aasta/customizer/super-aasta-customizer-default.php';
if ( ! function_exists( 'arilesuper_aasta_frontpage_sections' ) ) :
	function arilesuper_aasta_frontpage_sections() {	
		require arile_super_plugin_dir . 'inc/aasta/front-page/super-aasta-slider.php';	
		require arile_super_plugin_dir . 'inc/aasta/front-page/super-aasta-service.php';
		require arile_super_plugin_dir . 'inc/aasta/front-page/super-aasta-project.php';
		require arile_super_plugin_dir . 'inc/aasta/front-page/super-aasta-testimonial.php';	
		require arile_super_plugin_dir . 'inc/aasta/front-page/super-aasta-blog.php';
    }
	add_action( 'arilesuper_aasta_frontpage', 'arilesuper_aasta_frontpage_sections' );
endif;