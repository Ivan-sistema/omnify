<?php
require get_template_directory().'/include/customizer/social.php';
require get_template_directory().'/include/customizer/footer_customizer.php';
function reformarq_customizer_register( $wp_cutomize ){

	reformarq_social_customizer( $wp_customize );
	reformarq_footer_customizer( $wp_customize );

}

?>