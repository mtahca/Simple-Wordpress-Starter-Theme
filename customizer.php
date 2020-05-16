<?php
add_action( 'customize_register', 'mf_customizer_settings' );
function mf_customizer_settings( $wp_customize ) {

    $wp_customize->add_section( 'mf_ga' , array(
        'title'      => 'Tema Ayarları',
        'priority'   => 21,
    ) );

    $wp_customize->add_setting( 'mf-analytics' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'mf-analytics', array(
        'label'        => 'Google Analytics Kodunuz',
        'section'    => 'mf_ga',
        'settings'   => 'mf-analytics',
        'type'      => 'textarea',
    ) ) );

    $wp_customize->add_setting('mf-logo');

	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'mf-logo-control', array(
			'label' => 'Logo',
			'section' => 'mf_ga',
			'settings' => 'mf-logo',
			'width' => 240,
			'height' => 60
		)));

}
