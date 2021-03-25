<?php

require get_template_directory().'/include/customizer/social.php';
function reformarq_customize_register( $wp_customize ){

	$wp_customize->get_section('custom_css')->description = 'Colocar Css Adicional ';
	$wp_customize->add_panel('opcoes', array(
		'title' => 'Opções do Tema',
		'priority' => 200
	));
	reformarq_social_customizer( $wp_customize );


}

?>