<?php


require_once('wp_bootstrap_navwalker.php');

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEOCRL' ),
) );

register_nav_menus( array(
    'Top_Menu' => __( 'Top Menu', 'THEOCRL' ),
) );


// Require Customizer
	require get_template_directory() . '/inc/customizer.php';
	function theocrl_customize( $wp_customize ) {
		// Footer Section
	  	$wp_customize->add_setting( 'theocrl_copyright',
		    array(
		        'type'       => 'theme_mod', // OR 'option'
		        'default'    => 'Copyright Year!',
		        'capability' => 'manage_options',
		        'transport'  => 'refresh', // or 'postMessage'
		    )
		);
		$wp_customize->add_setting( 'theocrl_logo',
		    array(
		        'type'       => 'theme_mod', // OR 'option'
		        'capability' => 'manage_options',
		        'transport'  => 'refresh', // or 'postMessage'
		    )
		);
		$wp_customize->add_section( 'theocrl_footer_section',
		    array(
		        'title'          => 'Footer Information',
		        'description'    => '',
		        'capability'     => 'manage_options',
		        'theme-supports' => '',
		        'priority'       => 10,
		        'panel'          => 'theocrl_panel',
		    )
		);
		$wp_customize->add_panel( 'theocrl_panel',
		    array(
		        'title'          => 'Footer',
		        'description'    => 'TheOCRL Panel',
		        'capability'     => 'manage_options',
		        'theme-supports' => '',
		        'priority'       => 10,
		    )
		);
		$wp_customize->add_control( new WP_Customize_Control(
	        $wp_customize,
		        'theocrl_copyright',
				        array(
				            'label'    => 'Copyright',
				            'section'  => 'theocrl_footer_section',
				            'settings' => 'theocrl_copyright',
				            'type'     => 'text',
				            'priority' => 10
				        )
				) 
		);
		$wp_customize->add_control( new WP_Customize_Image_Control(
	        $wp_customize,
		        'theocrl_logo',
				        array(
				            'label'      => __( 'Footer Logo', 'theocrl' ),
				            'section'  => 'theocrl_footer_section',
				            'settings' => 'theocrl_logo',
				            'priority' => 10
				        )
				)
		);
		// Breaking News Section
		$wp_customize->add_setting( 'theocrl_breakingnews',
		    array(
		        'type'       => 'theme_mod', // OR 'option'
		        'default'    => 'Breaking News Information',
		        'capability' => 'manage_options',
		        'transport'  => 'refresh', // or 'postMessage'
		    )
		);
		$wp_customize->add_setting( 'theocrl_breakingnews_url',
		    array(
		        'type'       => 'theme_mod', // OR 'option'
		        'default'    => 'Breaking News Link',
		        'capability' => 'manage_options',
		        'transport'  => 'refresh', // or 'postMessage'
		    )
		);
		$wp_customize->add_section( 'theocrl_breakingnews_section',
		    array(
		        'title'          => 'Breaking News Section',
		        'description'    => '',
		        'capability'     => 'manage_options',
		        'theme-supports' => '',
		        'priority'       => 9,
		        'panel'          => 'breakingnews_panel',
		    )
		);
		$wp_customize->add_panel( 'breakingnews_panel',
		    array(
		        'title'          => 'Breaking News',
		        'description'    => '',
		        'capability'     => 'manage_options',
		        'theme-supports' => '',
		        'priority'       => 9,
		    )
		);
		$wp_customize->add_control( new WP_Customize_Control(
	        $wp_customize,
	        'theocrl_breakingnews',
		        array(
		            'label'    => 'Breaking News',
		            'section'  => 'theocrl_breakingnews_section',
		            'settings' => 'theocrl_breakingnews',
		            'type'     => 'text',
		            'priority' => 9
		        )
			)
		);
		$wp_customize->add_control( new WP_Customize_Control(
	        $wp_customize,
	        'theocrl_breakingnews_url',
		        array(
		            'label'    => 'Breaking News Link',
		            'section'  => 'theocrl_breakingnews_section',
		            'settings' => 'theocrl_breakingnews_url',
		            'type'     => 'text',
		            'priority' => 9
		        )
			)
		);
		
		// Removed Unneeded Sections
		$wp_customize->remove_section( 'title_tagline' );
		$wp_customize->remove_section( 'static_front_page' );
		// Header Section
		$wp_customize->add_setting( 'header_logo',
		    array(
		        'type'       => 'theme_mod', // OR 'option'
		        'capability' => 'manage_options',
		        'transport'  => 'refresh', // or 'postMessage'
		    )
		);
		$wp_customize->add_section( 'theocrl_header_section',
		    array(
		        'title'          => 'Header',
		        'description'    => '',
		        'capability'     => 'manage_options',
		        'theme-supports' => '',
		        'priority'       => 7,
		    )
		);
		$wp_customize->add_control( new WP_Customize_Image_Control(
	        $wp_customize,
		        'header_logo',
				        array(
				            'label'      => __( 'Header Logo', 'theocrl' ),
				            'section'  => 'theocrl_header_section',
				            'settings' => 'header_logo',
				            'priority' => 8,
				        )
				)
		);

		// General Section
		$wp_customize->add_setting( 'body_color',
		    array(
		        'type'       => 'theme_mod', // OR 'option'
		        'capability' => 'manage_options',
		        'transport'  => 'refresh', // or 'postMessage'
		    )
		);
		$wp_customize->add_section( 'theocrl_general_section',
		    array(
		        'title'          => 'General',
		        'description'    => '',
		        'capability'     => 'manage_options',
		        'theme-supports' => '',
		        'priority'       => 8,
		    )
		);
		$wp_customize->add_control( new WP_Customize_Color_Control(
	        $wp_customize,
		        'body_color',
				        array(
				            'label'      => 'Body Color Overall',
				            'section'  => 'theocrl_general_section',
				            'settings' => 'body_color',
				            'priority' => 8,
				        )
				)
		);
	}
	add_action( 'customize_register', 'theocrl_customize' );