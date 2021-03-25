<?php

function reformarq_social_customizer( $wp_customize ){

	// SETTINGS
	$wp_customize->add_setting('reformarq_instagram', array('default'=>''));
	$wp_customize->add_setting('reformarq_youtube', array('default'=>''));
	$wp_customize->add_setting('reformarq_facebook', array('default'=>''));
	$wp_customize->add_setting('reformarq_twitter', array('default'=>''));
	$wp_customize->add_setting('reformarq_linkedin', array('default'=>''));
	$wp_customize->add_setting('reformarq_whatsapp', array('default'=>''));

	//SECTIONS
	$wp_customize->add_section('reformarq_social_section', array(
		'title' => 'Redes Sociais',
		'priority' => '1',
		'panel' => 'opcoes',
		'description' => 'Para a rede social ficar visivel coloque um link , caso não use alguma rede social deixe o campo em branco que o ícone irá desaparecer.'

	));

	//CONTROLLERS
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'reformarq_instagram',
			array(
				'label' => 'Instagram',
				'section' => 'reformarq_social_section',
				'settings' => 'reformarq_instagram',
				'type' => 'text'
			)
		)
	);

	$wp_customize->add_control(
		new wp_Customize_Control(
			$wp_customize,
			'reformarq_youtube',
			array(
				'label' => 'youtube',
				'section' => 'reformarq_social_section',
				'settings' => 'reformarq_youtube',
				'type' => 'text'
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'reformarq_facebook',
			array(
				'label' => 'Facebook',
				'section' => 'reformarq_social_section',
				'settings' => 'reformarq_facebook',
				'type' => 'text'
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'reformarq_twitter',
			array(
				'label' => 'Twitter',
				'section' => 'reformarq_social_section',
				'settings' => 'reformarq_twitter',
				'type' => 'text'
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'reformarq_linkedin',
			array(
				'label' => 'linedin',
				'section' => 'reformarq_social_section',
				'settings' => 'reformarq_linkedin',
				'type' => 'text'
			)
		)
	);

	
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'reformarq_whatsapp',
			array(
				'label' => 'whatsapp',
				'section' => 'reformarq_social_section',
				'settings' => 'reformarq_whatsapp',
				'type' => 'text'
			)
		)
	);
}

?>