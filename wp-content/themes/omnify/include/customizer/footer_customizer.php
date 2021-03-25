<?php

function reformarq_footer_customizer( $wp_customize ){

	// SETTINGS
	$wp_customize->add_setting('reformarq_img_footer', array('default'=>''));
	$wp_customize->add_setting('reformarq_description_footer', array('default'=>''));
	$wp_customize->add_setting('reformarq_copy_footer', array('default'=>''));

	//SECTIONS
	$wp_customize->add_section('reformarq_footer_section', array(
		'title' => 'Footer',
		'priority' => '1',
		'panel' => 'opcoes',
		'description' => 'Insira Informações da coluna 1 do footer.'

	));



	//CONTROLLERS

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'reformarq_img_footer',
			array(
				'label' => 'Logotipo',
				'section' => 'reformarq_footer_section',
				'settings' => 'reformarq_img_footer',
				'type' => 'file'
			)
		)
	);

	$wp_customize->add_control(
		new wp_Customize_Control(
			$wp_customize,
			'reformarq_description_footer',
			array(
				'label' => 'Descrição',
				'section' => 'reformarq_footer_section',
				'settings' => 'reformarq_description_footer',
				'type' => 'text'
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'reformarq_copy_footer',
			array(
				'label' => 'copy',
				'section' => 'reformarq_footer_section',
				'settings' => 'reformarq_copy_footer',
				'type' => 'text'
			)
		)
	);
}
?>