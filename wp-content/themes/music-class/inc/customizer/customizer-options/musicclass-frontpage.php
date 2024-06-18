<?php
function musicclass_blog_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	$wp_customize->add_panel(
		'musicclass_frontpage_sections', array(
			'priority' => 32,
			'title' => esc_html__( 'Frontpage Sections', 'music-class' ),
		)
	);
	


	/*=========================================
	Slider Section
	=========================================*/
	$wp_customize->add_section(
		'slider_setting', array(
			'title' => esc_html__( 'Slider Section', 'music-class' ),
			'description'=> __('<a>Note :</a> Image Size Should Be 800*600','music-class'),
			'priority' => 1,
			'panel' => 'musicclass_frontpage_sections',
		)
	);



	$wp_customize->add_setting('musicclass_slider_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new musicclass_Tab_Control($wp_customize, 'musicclass_slider_tabs', array(
	   'section' => 'slider_setting',
	   'priority' => 2,
	   'buttons' => array(
	      array(
         	'name' => esc_html__('General', 'music-class'),
            'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'slider1',
            	'slider2',
            	'slider3',
            	'slider4',
            	'slider5',
            	'slider6'
            ),
            'active' => true,
         ), 
	      array(
            'name' => esc_html__('Style', 'music-class'),
        	'icon' => 'dashicons dashicons-art',
            'fields' => array(
                'slider_titlecolor',
                'slider_descriptioncolor',
                'slider_btntxt1color',
				'slider_btnbg1color',
				'slider_btndotscolor',
				'slider_btntxthovercolor',
				'slider_imagebordercolor'
            ),
     	)
	    
    	),
	))); 


	

	// General Tab

	// Slider 1
	$wp_customize->add_setting( 
    	'slider1',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider1',
		array(
		    'label'   		=> __('Slider 1','music-class'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);		



	// Slider 2
	$wp_customize->add_setting(
    	'slider2',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'slider2',
		array(
		    'label'   		=> __('Slider 2','music-class'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	


	// Slider 3
	$wp_customize->add_setting(
    	'slider3',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'slider3',
		array(
		    'label'   		=> __('Slider 3','music-class'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	


	// Slider 4
	$wp_customize->add_setting(
    	'slider4',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'slider4',
		array(
		    'label'   		=> __('Slider 4','music-class'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);



	// Slider 5
	$wp_customize->add_setting(
    	'slider5',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'slider5',
		array(
		    'label'   		=> __('Slider 5','music-class'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);

	// Slider 6
	$wp_customize->add_setting(
    	'slider6',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'slider6',
		array(
		    'label'   		=> __('Slider 6','music-class'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);




	// Style setting

	// slider title Color
	$slidertitlecolor = esc_html__('#fff', 'music-class' );
	$wp_customize->add_setting(
    	'slider_titlecolor',
    	array(
			'default' => $slidertitlecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_titlecolor',
		array(
		    'label'   		=> __('Title Color','music-class'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// slider description Color
	$sliderdescriptioncolor = esc_html__('#fff', 'music-class' );
	$wp_customize->add_setting(
    	'slider_descriptioncolor',
    	array(
			'default' => $sliderdescriptioncolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_descriptioncolor',
		array(
		    'label'   		=> __('Description Color','music-class'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider btntxt1 Color
	$sliderbtntxt1color = esc_html__('#F64828', 'music-class' );
	$wp_customize->add_setting(
    	'slider_btntxt1color',
    	array(
			'default' => $sliderbtntxt1color,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_btntxt1color',
		array(
		    'label'   		=> __('Button Text Color','music-class'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider btnbg1 Color
	$sliderbtnbg1color = esc_html__('#fff', 'music-class' );
	$wp_customize->add_setting(
    	'slider_btnbg1color',
    	array(
			'default' => $sliderbtnbg1color,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_btnbg1color',
		array(
		    'label'   		=> __('Button BG Color','music-class'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider btndots Color
	$sliderbtndotscolor = esc_html__('#fff', 'music-class' );
	$wp_customize->add_setting(
    	'slider_btndotscolor',
    	array(
			'default' => $sliderbtndotscolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_btndotscolor',
		array(
		    'label'   		=> __('Button Dots Color','music-class'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);
	

	// slider btntxthover Color
	$sliderbtntxthovercolor = esc_html__('#000', 'music-class' );
	$wp_customize->add_setting(
    	'slider_btntxthovercolor',
    	array(
			'default' => $sliderbtntxthovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_btntxthovercolor',
		array(
		    'label'   		=> __('Button Text Hover Color','music-class'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider imageborder Color
	$sliderimagebordercolor = esc_html__('#fff', 'music-class' );
	$wp_customize->add_setting(
    	'slider_imagebordercolor',
    	array(
			'default' => $sliderimagebordercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_imagebordercolor',
		array(
		    'label'   		=> __('Image Border Color','music-class'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	
	
	/*=========================================
	aboutus Section
	=========================================*/
	$wp_customize->add_section(
		'aboutus_setting', array(
			'title' => esc_html__( 'AboutUs Section', 'music-class' ),
			'priority' => 2,
			'panel' => 'musicclass_frontpage_sections',
		)
	);

	$wp_customize->add_setting('musicclass_aboutus_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new musicclass_Tab_Control($wp_customize, 'musicclass_aboutus_tabs', array(
	   'section' => 'aboutus_setting',
	   'priority' => 2,
	   'buttons' => array(
	      array(
         	'name' => esc_html__('General', 'music-class'),
            'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
				'aboutus_disable_section',
            	'aboutus_heading',
				'aboutus_title',
				'aboutus_description',
				'aboutus_list1text',
				'aboutus_list2text',
				'aboutus_list3text',
				'aboutus_list4text',
            	'aboutus_readmorebtn_link',
				'aboutus_image',
				'aboutus_imageyearnumber',
				'aboutus_imageyeartext'

            ),
            'active' => true,
         ),
	      array(
            'name' => esc_html__('Style', 'music-class'),
        	'icon' => 'dashicons dashicons-art',
            'fields' => array(
				'aboutus_headingcolor',
				'aboutus_titlecolor',
				'aboutus_descriptioncolor',
				'aboutus_listcolor',
				'aboutus_btntextcolor',
				'aboutus_btnbgcolor',
				'aboutus_btnbghovercolor',
				'aboutus_imagebrdcolor1',
				'aboutus_imagebrdcolor2',
				'aboutus_imagetitlecolor',
				'aboutus_imagetitlebgcolor',
				'aboutus_imagetitlebgbrdcolor'
            ),
     	),
		 array(
		   'name' => esc_html__('Layout', 'music-class'),
		   'icon' => 'dashicons dashicons-layout',
		   'fields' => array(
			   'music_class_aboutus_section_width',
			   'musicclass_aboutus_padding',
			   'music_class_aboutus_top_padding',
			   'music_class_aboutus_bottom_padding'
		   ),
		)
	   
	    
    	),
	))); 


	// hide show aboutus section
	$wp_customize->add_setting(
        'aboutus_disable_section',
        array(
            'sanitize_callback' => 'wp_kses_post',
        )
    ); 
    $wp_customize->add_control(
        new musicclass_Toggle_Switch_Custom_Control(
            $wp_customize,
            'aboutus_disable_section',
            array(
                'settings'      => 'aboutus_disable_section',
                'section'       => 'aboutus_setting',
                'label'         => __( 'Disable Section', 'music-class' ),
                'on_off_label'  => array(
                    'on' => __( 'Yes', 'music-class' ),
                    'off' => __( 'No', 'music-class' )
                ),
            )
        )
    );

	


	// aboutus_heading
	$wp_customize->add_setting(
    	'aboutus_heading',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_heading',
		array(
		    'label'   		=> __('Heading','music-class'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// aboutus_title
	$wp_customize->add_setting(
    	'aboutus_title',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_title',
		array(
		    'label'   		=> __('Title','music-class'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// aboutus_description
	$wp_customize->add_setting(
    	'aboutus_description',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_description',
		array(
		    'label'   		=> __('Description','music-class'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// aboutus list1text
	$wp_customize->add_setting(
    	'aboutus_list1text',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_list1text',
		array(
		    'label'   		=> __('List 1 Text','music-class'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// aboutus list2text
	$wp_customize->add_setting(
    	'aboutus_list2text',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_list2text',
		array(
		    'label'   		=> __('List 2 Text','music-class'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// aboutus list3text
	$wp_customize->add_setting(
    	'aboutus_list3text',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_list3text',
		array(
		    'label'   		=> __('List 3 Text','music-class'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// aboutus list4text
	$wp_customize->add_setting(
    	'aboutus_list4text',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_list4text',
		array(
		    'label'   		=> __('List 4 Text','music-class'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	



	// aboutus_readmorebtn_link
	$aboutusreadmorebtnlink = esc_html__('#', 'music-class' );
	$wp_customize->add_setting(
    	'aboutus_readmorebtn_link',
    	array(
			'default' => $aboutusreadmorebtnlink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_readmorebtn_link',
		array(
		    'label'   		=> __('Read More Button Link','music-class'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);


	// aboutus_image
	$wp_customize->add_setting(
    	'aboutus_image',
	    array(
	        'sanitize_callback' => 'esc_url_raw'
	    )
	);
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'aboutus_image',
	        array(
			    'label'   		=> __('Image','music-class'),
	            'section' => 'aboutus_setting',
	            'settings' => 'aboutus_image'
	        )
	    )
	);


	// aboutus_imageyearnumber
	$wp_customize->add_setting(
    	'aboutus_imageyearnumber',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_imageyearnumber',
		array(
		    'label'   		=> __('Image Year Number','music-class'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// aboutus_imageyeartext
	$wp_customize->add_setting(
    	'aboutus_imageyeartext',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_imageyeartext',
		array(
		    'label'   		=> __('Image Year Text','music-class'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	//style


	// aboutus heading Color
	$aboutusheadingcolor = esc_html__('#FF7703', 'music-class' );
	$wp_customize->add_setting(
    	'aboutus_headingcolor',
    	array(
			'default' => $aboutusheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_headingcolor',
		array(
		    'label'   		=> __('Heading & Icon Color','music-class'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// aboutus title Color
	$aboutustitlecolor = esc_html__('#000', 'music-class' );
	$wp_customize->add_setting(
    	'aboutus_titlecolor',
    	array(
			'default' => $aboutustitlecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_titlecolor',
		array(
		    'label'   		=> __('Title Color','music-class'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// aboutus description Color
	$aboutusdescriptioncolor = esc_html__('#B2ACAC', 'music-class' );
	$wp_customize->add_setting(
    	'aboutus_descriptioncolor',
    	array(
			'default' => $aboutusdescriptioncolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_descriptioncolor',
		array(
		    'label'   		=> __('Description Color','music-class'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// aboutus list Color
	$aboutuslistcolor = esc_html__('#FF7703', 'music-class' );
	$wp_customize->add_setting(
    	'aboutus_listcolor',
    	array(
			'default' => $aboutuslistcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_listcolor',
		array(
		    'label'   		=> __('List Color','music-class'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// aboutus btntext Color
	$aboutusbtntextcolor = esc_html__('#fff', 'music-class' );
	$wp_customize->add_setting(
    	'aboutus_btntextcolor',
    	array(
			'default' => $aboutusbtntextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_btntextcolor',
		array(
		    'label'   		=> __('Button Text & Dot Color','music-class'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// aboutus btnbg Color
	$aboutusbtnbgcolor = esc_html__('#F64828', 'music-class' );
	$wp_customize->add_setting(
    	'aboutus_btnbgcolor',
    	array(
			'default' => $aboutusbtnbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_btnbgcolor',
		array(
		    'label'   		=> __('Button BG Color','music-class'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// aboutus btnbghover Color
	$aboutusbtnbghovercolor = esc_html__('#000', 'music-class' );
	$wp_customize->add_setting(
    	'aboutus_btnbghovercolor',
    	array(
			'default' => $aboutusbtnbghovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_btnbghovercolor',
		array(
		    'label'   		=> __('Button BG Hover Color','music-class'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// aboutus imagebrd Color
	$aboutusimagebrdcolor1 = esc_html__('#F64828', 'music-class' );
	$wp_customize->add_setting(
    	'aboutus_imagebrdcolor1',
    	array(
			'default' => $aboutusimagebrdcolor1,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_imagebrdcolor1',
		array(
		    'label'   		=> __('Image Border Color','music-class'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// aboutus imagebrd Color
	$aboutusimagebrdcolor2 = esc_html__('#FF7703', 'music-class' );
	$wp_customize->add_setting(
    	'aboutus_imagebrdcolor2',
    	array(
			'default' => $aboutusimagebrdcolor2,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_imagebrdcolor2',
		array(
		    'label'   		=> __('Image Border Color','music-class'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// aboutus imagetitle Color
	$aboutusimagetitlecolor = esc_html__('#F64828', 'music-class' );
	$wp_customize->add_setting(
    	'aboutus_imagetitlecolor',
    	array(
			'default' => $aboutusimagetitlecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_imagetitlecolor',
		array(
		    'label'   		=> __('Image Box Heading Color','music-class'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// aboutus imagetitlebg Color
	$aboutusimagetitlebgcolor = esc_html__('#cccccc', 'music-class' );
	$wp_customize->add_setting(
    	'aboutus_imagetitlebgcolor',
    	array(
			'default' => $aboutusimagetitlebgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_imagetitlebgcolor',
		array(
		    'label'   		=> __('Image Box Heading BG Color','music-class'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);
	
	// aboutus imagetitlebgbrd Color
	$aboutusimagetitlebgbrdcolor = esc_html__('#fff', 'music-class' );
	$wp_customize->add_setting(
    	'aboutus_imagetitlebgbrdcolor',
    	array(
			'default' => $aboutusimagetitlebgbrdcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'aboutus_imagetitlebgbrdcolor',
		array(
		    'label'   		=> __('Image Box Heading BG Border Color','music-class'),
		    'section'		=> 'aboutus_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);
	

	
	// layout setting
	$wp_customize->add_setting('music_class_aboutus_section_width',array(
        'default' => 'Box Width',
        'sanitize_callback' => 'musicclass_sanitize_choices',
    ));
    $wp_customize->add_control('music_class_aboutus_section_width',array(
        'type' => 'select',
        'label' => __('Section Width','music-class'),
        'choices' => array (
            'Box Width' => __('Box Width','music-class'),
            'Full Width' => __('Full Width','music-class')
        ),
        'section' => 'aboutus_setting',
    ));


    // aboutus section padding 
	$wp_customize->add_setting('musicclass_aboutus_padding',array(
      'sanitize_callback'   => 'esc_html'
    ));
    $wp_customize->add_control('musicclass_aboutus_padding',array(
      'label' => __('Section Padding','music-class'),
      'section' => 'aboutus_setting'
    ));

    $wp_customize->add_setting('music_class_aboutus_top_padding',array(
        'default' => '5',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('music_class_aboutus_top_padding',array(
	    'type' => 'number',
	    'label' => __('Top','music-class'),
	    'section' => 'aboutus_setting',
    ));

 	$wp_customize->add_setting('music_class_aboutus_bottom_padding',array(
        'default' => '2',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('music_class_aboutus_bottom_padding',array(
	    'type' => 'number',
	    'label' => __('Bottom','music-class'),
	    'section' => 'aboutus_setting',
    ));




	/*=========================================
	Service Section
	=========================================*/
	$wp_customize->add_section(
		'Service_setting', array(
			'title' => esc_html__( 'Service Section', 'music-class' ),
			'description'=> __('<a>Note :</a> Image Size Should Be 87*87','music-class'),
			'priority' => 2,
			'panel' => 'musicclass_frontpage_sections',
		)
	);



	$wp_customize->add_setting('musicclass_Service_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new musicclass_Tab_Control($wp_customize, 'musicclass_Service_tabs', array(
	   'section' => 'Service_setting',
	   'priority' => 2,
	   'buttons' => array(
	      array(
         	'name' => esc_html__('General', 'music-class'),
            'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'service_disable_section',
            	'service_heading',
				'service_subheading',
				'service_description',
				'service_readmorebtn_link',
            	'Service1',
            	'Service2',
            	'Service3',
            	'Service4',
            	'Service5'
            ),
            'active' => true,
         ),
	      array(
            'name' => esc_html__('Style', 'music-class'),
        	'icon' => 'dashicons dashicons-art',
            'fields' => array(
            	'service_headingcolor',
            	'service_boxtitlecolorcolor',
            	'service_boxdescriptioncolorcolor',
				'service_btntextcolor',
				'service_btnbgcolor1',
				'service_btnbgcolor2',
				'service_btnbghovercolor',
				'service_boxbgcolor',
				'service_inboxiconcolor',
				'service_inboxtitlecolor',
				'service_inboxdescriptioncolor',
				'service_inboxbtntextcolor',
				'service_btntexthrvcolor'
            ),
     	),
  		array(
	        'name' => esc_html__('Layout', 'music-class'),
	        'icon' => 'dashicons dashicons-layout',
	        'fields' => array(
	            'music_class_service_section_width',
	            'musicclass_service_padding',
	            'music_class_service_top_padding',
	            'music_class_service_bottom_padding'
	        ),
     	)
	    
    	),
	))); 



	// General

	// hide show service section
	$wp_customize->add_setting(
        'service_disable_section',
        array(
            'sanitize_callback' => 'wp_kses_post',
        )
    ); 
    $wp_customize->add_control(
        new musicclass_Toggle_Switch_Custom_Control(
            $wp_customize,
            'service_disable_section',
            array(
                'settings'      => 'service_disable_section',
                'section'       => 'Service_setting',
                'label'         => __( 'Disable Section', 'music-class' ),
                'on_off_label'  => array(
                    'on' => __( 'Yes', 'music-class' ),
                    'off' => __( 'No', 'music-class' )
                ),
            )
        )
    );


	

    // service title
	$wp_customize->add_setting(
    	'service_heading',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'service_heading',
		array(
		    'label'   		=> __('Heading','music-class'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// service subheading
	$wp_customize->add_setting(
    	'service_subheading',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'service_subheading',
		array(
		    'label'   		=> __('Sub Heading','music-class'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// service description
	$wp_customize->add_setting(
    	'service_description',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'service_description',
		array(
		    'label'   		=> __('Description','music-class'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// service_readmorebtn_link
	$servicereadmorebtnlink = esc_html__('#', 'music-class' );
	$wp_customize->add_setting(
    	'service_readmorebtn_link',
    	array(
			'default' => $servicereadmorebtnlink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'service_readmorebtn_link',
		array(
		    'label'   		=> __('Button Link','music-class'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// Service 1
	$wp_customize->add_setting( 
    	'Service1',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'Service1',
		array(
		    'label'   		=> __('Service 1','music-class'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);		

	

	// Service 2
	$wp_customize->add_setting(
    	'Service2',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 2,
		)
	);	

	$wp_customize->add_control( 
		'Service2',
		array(
		    'label'   		=> __('Service 2','music-class'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	


	// Service 3
	$wp_customize->add_setting(
    	'Service3',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'Service3',
		array(
		    'label'   		=> __('Service 3','music-class'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	


	// Service 4
	$wp_customize->add_setting(
    	'Service4',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'Service4',
		array(
		    'label'   		=> __('Service 4','music-class'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);


	// Service 5
	$wp_customize->add_setting(
    	'Service5',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'Service5',
		array(
		    'label'   		=> __('Service 5','music-class'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);

	

	// style

	// service headingcolor color
	$serviceheadingcolor = esc_html__('#FF7703', 'music-class' );
	$wp_customize->add_setting(
    	'service_headingcolor',
    	array(
			'default' => $serviceheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_headingcolor',
		array(
		    'label'   		=> __('Heading Color','music-class'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);



	// service boxtitlecolor color
	$serviceboxtitlecolorcolor = esc_html__('#000', 'music-class' );
	$wp_customize->add_setting(
    	'service_boxtitlecolorcolor',
    	array(
			'default' => $serviceboxtitlecolorcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_boxtitlecolorcolor',
		array(
		    'label'   		=> __('Title Color','music-class'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);



	// service boxdescriptioncolor color
	$serviceboxdescriptioncolorcolor = esc_html__('#827D7DD9', 'music-class' );
	$wp_customize->add_setting(
    	'service_boxdescriptioncolorcolor',
    	array(
			'default' => $serviceboxdescriptioncolorcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_boxdescriptioncolorcolor',
		array(
		    'label'   		=> __('Description Color','music-class'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// service btntext Color
	$servicebtntextcolor = esc_html__('#fff', 'music-class' );
	$wp_customize->add_setting(
    	'service_btntextcolor',
    	array(
			'default' => $servicebtntextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'service_btntextcolor',
		array(
		    'label'   		=> __('Button Text & Dot Color','music-class'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// service btnbg Color
	$servicebtnbgcolor1 = esc_html__('#E11B6B', 'music-class' );
	$wp_customize->add_setting(
    	'service_btnbgcolor1',
    	array(
			'default' => $servicebtnbgcolor1,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'service_btnbgcolor1',
		array(
		    'label'   		=> __('Button BG Color','music-class'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// service btnbg Color
	$servicebtnbgcolor2 = esc_html__('#F64828', 'music-class' );
	$wp_customize->add_setting(
    	'service_btnbgcolor2',
    	array(
			'default' => $servicebtnbgcolor2,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'service_btnbgcolor2',
		array(
		    'label'   		=> __('Button BG Color','music-class'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// service btnbghover Color
	$servicebtnbghovercolor = esc_html__('#000', 'music-class' );
	$wp_customize->add_setting(
    	'service_btnbghovercolor',
    	array(
			'default' => $servicebtnbghovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'service_btnbghovercolor',
		array(
		    'label'   		=> __('Button BG Hover Color','music-class'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// service boxbg color
	$serviceboxbgcolor = esc_html__('#F3F3F366', 'music-class' );
	$wp_customize->add_setting(
    	'service_boxbgcolor',
    	array(
			'default' => $serviceboxbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_boxbgcolor',
		array(
		    'label'   		=> __('Box BG Color','music-class'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// service inboxicon color
	$serviceinboxiconcolor = esc_html__('#F64828', 'music-class' );
	$wp_customize->add_setting(
    	'service_inboxiconcolor',
    	array(
			'default' => $serviceinboxiconcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_inboxiconcolor',
		array(
		    'label'   		=> __('Box Icon Color','music-class'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// service inboxtitle color
	$serviceinboxtitlecolor = esc_html__('#220C06', 'music-class' );
	$wp_customize->add_setting(
    	'service_inboxtitlecolor',
    	array(
			'default' => $serviceinboxtitlecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_inboxtitlecolor',
		array(
		    'label'   		=> __('Box Title Color','music-class'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// service inboxdescription color
	$serviceinboxdescriptioncolor = esc_html__('#000000A8', 'music-class' );
	$wp_customize->add_setting(
    	'service_inboxdescriptioncolor',
    	array(
			'default' => $serviceinboxdescriptioncolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_inboxdescriptioncolor',
		array(
		    'label'   		=> __('Box Description Color','music-class'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// service inboxbtntext color
	$serviceinboxbtntextcolor = esc_html__('#FF7703', 'music-class' );
	$wp_customize->add_setting(
    	'service_inboxbtntextcolor',
    	array(
			'default' => $serviceinboxbtntextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_inboxbtntextcolor',
		array(
		    'label'   		=> __('Read More Text Color','music-class'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// service btntexthrv color
	$servicebtntexthrvcolor = esc_html__('#000', 'music-class' );
	$wp_customize->add_setting(
    	'service_btntexthrvcolor',
    	array(
			'default' => $servicebtntexthrvcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'service_btntexthrvcolor',
		array(
		    'label'   		=> __('Read More Text Hover Color','music-class'),
		    'section'		=> 'Service_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	


	// layout setting
	$wp_customize->add_setting('music_class_service_section_width',array(
        'default' => 'Box Width',
        'sanitize_callback' => 'musicclass_sanitize_choices',
    ));
    $wp_customize->add_control('music_class_service_section_width',array(
        'type' => 'select',
        'label' => __('Section Width','music-class'),
        'choices' => array (
            'Box Width' => __('Box Width','music-class'),
            'Full Width' => __('Full Width','music-class')
        ),
        'section' => 'Service_setting',
    ));


    // service section padding 
	$wp_customize->add_setting('musicclass_service_padding',array(
      'sanitize_callback'   => 'esc_html'
    ));
    $wp_customize->add_control('musicclass_service_padding',array(
      'label' => __('Section Padding','music-class'),
      'section' => 'Service_setting'
    ));

    $wp_customize->add_setting('music_class_service_top_padding',array(
        'default' => '5',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('music_class_service_top_padding',array(
	    'type' => 'number',
	    'label' => __('Top','music-class'),
	    'section' => 'Service_setting',
    ));

 	$wp_customize->add_setting('music_class_service_bottom_padding',array(
        'default' => '2',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('music_class_service_bottom_padding',array(
	    'type' => 'number',
	    'label' => __('Bottom','music-class'),
	    'section' => 'Service_setting',
    ));

	



	$wp_customize->register_control_type('musicclass_Tab_Control');

}

add_action( 'customize_register', 'musicclass_blog_setting' );

// service selective refresh
function musicclass_blog_section_partials( $wp_customize ){	
	// blog_title
	$wp_customize->selective_refresh->add_partial( 'blog_title', array(
		'selector'            => '.home-blog .title h6',
		'settings'            => 'blog_title',
		'render_callback'  => 'musicclass_blog_title_render_callback',
	
	) );
	
	// blog_subtitle
	$wp_customize->selective_refresh->add_partial( 'blog_subtitle', array(
		'selector'            => '.home-blog .title h2',
		'settings'            => 'blog_subtitle',
		'render_callback'  => 'musicclass_blog_subtitle_render_callback',
	
	) );
	
	// blog_description
	$wp_customize->selective_refresh->add_partial( 'blog_description', array(
		'selector'            => '.home-blog .title p',
		'settings'            => 'blog_description',
		'render_callback'  => 'musicclass_blog_description_render_callback',
	
	) );	
	}

add_action( 'customize_register', 'musicclass_blog_section_partials' );

// blog_title
function musicclass_blog_title_render_callback() {
	return get_theme_mod( 'blog_title' );
}

// blog_subtitle
function musicclass_blog_subtitle_render_callback() {
	return get_theme_mod( 'blog_subtitle' );
}

// service description
function musicclass_blog_description_render_callback() {
	return get_theme_mod( 'blog_description' );
}


