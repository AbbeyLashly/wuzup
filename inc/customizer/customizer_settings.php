<?php

//////////////////////////////////////////////////////////////////
// Customizer - Add Custom Styling
//////////////////////////////////////////////////////////////////
function maidesign_customizer_style()
{
	wp_enqueue_style('customizer-css', get_stylesheet_directory_uri() . '/functions/customizer/css/customizer.css');
}
add_action('customize_controls_print_styles', 'maidesign_customizer_style');

//////////////////////////////////////////////////////////////////
// Customizer - Add Settings
//////////////////////////////////////////////////////////////////
function maidesign_register_theme_customizer( $wp_customize ) {
 	
	// Add Sections
	
	$wp_customize->add_section( 'maidesign_new_section_custom_css' , array(
   		'title'      => 'Custom CSS',
   		'description'=> 'Add your custom CSS which will overwrite the theme CSS',
   		'priority'   => 103,
	) );
	
	$wp_customize->add_section( 'maidesign_new_section_footer' , array(
   		'title'      => 'Footer Settings',
   		'description'=> '',
   		'priority'   => 97,
	) );
	
	$wp_customize->add_section( 'maidesign_new_section_social' , array(
   		'title'      => 'Social Settings',
   		'description'=> 'Enter your social media usernames. Icons will not show if left blank.',
   		'priority'   => 96,
	) );

	$wp_customize->add_section( 'maidesign_new_section_page' , array(
   		'title'      => 'Page Settings',
   		'description'=> '',
   		'priority'   => 95,
	) );
	
	$wp_customize->add_section( 'maidesign_new_section_post' , array(
   		'title'      => 'Post Settings',
   		'description'=> '',
   		'priority'   => 94,
	) );

    $wp_customize->add_section( 'maidesign_new_section_related' , array(
   		'title'      => 'Related Posts Settings',
   		'description'=> '',
   		'priority'   => 94,
	) );
	
	$wp_customize->add_section( 'maidesign_new_section_logo_header' , array(
   		'title'      => 'Header Settings',
   		'description'=> '',
   		'priority'   => 92,
	) );

	$wp_customize->add_section( 'maidesign_new_section_promo' , array(
   		'title'      => 'Promo Box Settings',
   		'description'=> '',
   		'priority'   => 90,
	) );
	$wp_customize->add_section( 'maidesign_new_section_carousel' , array(
   		'title'      => 'Slider area Settings',
   		'description'=> '',
   		'priority'   => 91,
	) );
	$wp_customize->add_section( 'maidesign_new_section_general' , array(
   		'title'      => 'General Settings',
   		'description'=> '',
   		'priority'   => 89,
	) );

	// Add Setting
		
		// General
		$wp_customize->add_setting(
			'md_favicon'
		);

		$wp_customize->add_setting(
	        'md_blog_layout',
	        array(
	            'default'     => 'list'
	        )
	    );  
	    $wp_customize->add_setting(
	        'md_background_about_me',
	        array(
	            'default'     => '#F6F6F6'
	        )
	    ); 
	    $wp_customize->add_setting(
	        'md_border_about_me',
	        array(
	            'default'     => '#EEE'
	        )
	    ); 
	    // Carousel slider
        $wp_customize->add_setting(
	        'md_show_carousel',
            array(
	            'default'     => 'hide'
	        )
	    );  

        $wp_customize->add_setting(
	        'md_number_slide',
            array(
	            'default'     => 5
	        )
	    );  
		
        // Related settings
       $wp_customize->add_setting(
	        'md_change_text_related',
	        array(
	            'default'     => 'You may also like'
	        )
	    );
        $wp_customize->add_setting(
	        'md_related_by',
	        array(
	            'default'     => 'cat'
	        )
	    );
        $wp_customize->add_setting(
	        'md_related_order',
	        array(
	            'default'     => 'rand'
	        )
	    );        
        
        $wp_customize->add_setting(
	        'md_show_date_related',
	        array(
	            'default'     => false
	        )
	    ); 
        
        //Promotion area        

        $wp_customize->add_setting(
	        'md_title_box_1'
	    );
        $wp_customize->add_setting(
	        'md_title_box_2'
	    );
        $wp_customize->add_setting(
	        'md_title_box_3'
	    );
        $wp_customize->add_setting(
	        'md_link_box_1'
	    );
        $wp_customize->add_setting(
	        'md_link_box_2'
	    );
        $wp_customize->add_setting(
	        'md_link_box_3'
	    );
        $wp_customize->add_setting(
	        'md_image_box_1'
	    );
        $wp_customize->add_setting(
	        'md_image_box_2'
	    );
        $wp_customize->add_setting(
	        'md_image_box_3'
	    );
        $wp_customize->add_setting(
	        'md_hide_promo',
            array(
	            'default'     => false
	        )
	    ); 
	    $wp_customize->add_setting(
	        'md_show_only_promo_homepage',
            array(
	            'default'     => false
	        )
	    );  

		// Header & Logo
		$wp_customize->add_setting(
	        'md_logo'
	    );
		$wp_customize->add_setting(
	        'md_logo_retina'
	    );
		$wp_customize->add_setting(
	        'md_header_padding_top',
	        array(
	            'default'     => '110'
	        )
	    );
		$wp_customize->add_setting(
	        'md_header_padding_bottom',
	        array(
	            'default'     => '24'
	        )
	    );
	    $wp_customize->add_setting(
	        'md_background_menu',
	        array(
	            'default'     => '#F6F6F6'
	        )
	    );
	    $wp_customize->add_setting(
	        'md_text_menu',
	        array(
	            'default'     => '#343434'
	        )
	    );
	    $wp_customize->add_setting(
	        'md_border_dropdown',
	        array(
	            'default'     => '#EEE'
	        )
	    );
	    $wp_customize->add_setting(
	        'md_hover_dropdown',
	        array(
	            'default'     => '#ECECEC'
	        )
	    );
		      
		      
		// Post Settings
		$wp_customize->add_setting(
	        'md_font_style',
	        array(
	            'default'     => 'merriweather'
	        )
	    );

		$wp_customize->add_setting(
	        'md_bold_title',
	        array(
	            'default'     => false
	        )
	    );
	    $wp_customize->add_setting(
	        'md_post_date',
	        array(
	            'default'     => false
	        )
	    );
	    $wp_customize->add_setting(
	        'md_post_date_list',
	        array(
	            'default'     => false
	        )
	    );
	    
		$wp_customize->add_setting(
	        'md_post_tags',
	        array(
	            'default'     => false
	        )
	    );
		$wp_customize->add_setting(
	        'md_post_author',
	        array(
	            'default'     => false
	        )
	    );
		$wp_customize->add_setting(
	        'md_post_related',
	        array(
	            'default'     => false
	        )
	    );

		$wp_customize->add_setting(
	        'md_post_thumb',
	        array(
	            'default'     => false
	        )
	    );
        $wp_customize->add_setting(
	        'md_post_thumb_front_page',
	        array(
	            'default'     => false
	        )
	    );        

		$wp_customize->add_setting(
	        'md_post_author_name',
	        array(
	            'default'     => false
	        )
	    );
		$wp_customize->add_setting(
	        'md_post_cat',
	        array(
	            'default'     => false
	        )
	    );
	    $wp_customize->add_setting(
	        'md_cat_color',
	        array(
	            'default'     => '#242424'
	        )
	    );
	    $wp_customize->add_setting(
	        'md_cat_list_color',
	        array(
	            'default'     => '#B1B1B1'
	        )
	    );
	    $wp_customize->add_setting(
	        'md_link',
	        array(
	            'default'     => '#848484'
	        )
	    );
	    $wp_customize->add_setting(
	        'md_share_button_color',
	        array(
	            'default'     => '#242424'
	        )
	    );
	    
        
		// Page
		$wp_customize->add_setting(
	        'md_page_date',
	        array(
	            'default'     => false
	        )
	    );
        
        $wp_customize->add_setting(
	        'md_page_author_name',
	        array(
	            'default'     => false
	        )
	    );
        
		// Social Media
		
		$wp_customize->add_setting(
	        'md_facebook',
	        array(
	            'default'     => 'mai'
	        )
	    );
		$wp_customize->add_setting(
	        'md_twitter',
	        array(
	            'default'     => ''
	        )
	    );
		$wp_customize->add_setting(
	        'md_instagram',
	        array(
	            'default'     => ''
	        )
	    );
		$wp_customize->add_setting(
	        'md_pinterest',
	        array(
	            'default'     => ''
	        )
	    );
		$wp_customize->add_setting(
	        'md_tumblr',
	        array(
	            'default'     => ''
	        )
	    );
		$wp_customize->add_setting(
	        'md_bloglovin',
	        array(
	            'default'     => ''
	        )
	    );
		$wp_customize->add_setting(
	        'md_tumblr',
	        array(
	            'default'     => ''
	        )
	    );
		$wp_customize->add_setting(
	        'md_google',
	        array(
	            'default'     => ''
	        )
	    );
		$wp_customize->add_setting(
	        'md_youtube',
	        array(
	            'default'     => ''
	        )
	    );
		$wp_customize->add_setting(
	        'md_rss',
	        array(
	            'default'     => ''
	        )
	    );
		
		// Footer Options

	    $wp_customize->add_setting(
	        'md_footer_social',
	        array(
	            'default'     => false
	        )
	    );

		$wp_customize->add_setting(
	        'md_footer_copyright',
	        array(
	            'default'     => '&copy; 2016 Your copyright. All Rights Reserved - Designed by <a href="http://www.mailovedesign.com">Mai</a>'
	        )
	    );	
	    $wp_customize->add_setting(
	        'md_background_footer',
	        array(
	            'default'     => '#141414'
	        )
	    );	

	    $wp_customize->add_setting(
	        'md_text_footer',
	        array(
	            'default'     => '#C7C7C7'
	        )
	    );
            		
		// Custom CSS
		$wp_customize->add_setting(
			'md_custom_css'
		);

    // Add Control
	
		// General
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'upload_favicon',
				array(
					'label'      => 'Upload Favicon',
					'section'    => 'maidesign_new_section_general',
					'settings'   => 'md_favicon',
					'priority'	 => 1
				)
			)
		);
		
    	$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'blog_layout',
				array(
					'label'          => 'Homepage Layout',
					'section'        => 'maidesign_new_section_general',
					'settings'       => 'md_blog_layout',
					'type'           => 'radio',
					'priority'	 => 2,
					'choices'        => array(
						'list'   => 'First full - Then list',
						'normal'  => 'Normal'
					)
				)
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'background_about_me',
				array(
					'label'          => 'Background About-me widget',
					'section'        => 'maidesign_new_section_general',
					'settings'       => 'md_background_about_me',
                    'priority'	 =>  4
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'border_about_me',
				array(
					'label'          => 'Border About-me widget',
					'section'        => 'maidesign_new_section_general',
					'settings'       => 'md_border_about_me',
                    'priority'	 =>  5
				)
			)
		);
		// Slider settings
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'show_carousel',
				array(
					'label'      => 'Slider Options:',
					'section'    => 'maidesign_new_section_carousel',
					'settings'   => 'md_show_carousel',
					'type'		 => 'radio',
					'priority'	 => 1,
					'choices'        => array(
						'all'   => 'Show all pages',
						'only_home'  => 'Show only homepage',
						'hide'	=> "Hide slider"
					)
				)
			)
		);
        
        $wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'number_slide',
				array(
					'label'      => 'Number of slide',
					'section'    => 'maidesign_new_section_carousel',
					'settings'   => 'md_number_slide',
					'type'		 => 'number',
					'priority'	 => 3
				)
			)
		);  
		// Header and Logo
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'upload_logo',
				array(
					'label'      => 'Upload Logo',
					'section'    => 'maidesign_new_section_logo_header',
					'settings'   => 'md_logo',
					'priority'	 => 6
				)
			)
		);
		
		$wp_customize->add_control(
			new Customize_Number_Control(
				$wp_customize,
				'header_padding_top',
				array(
					'label'      => 'Top Header Padding',
					'section'    => 'maidesign_new_section_logo_header',
					'settings'   => 'md_header_padding_top',
					'type'		 => 'number',
					'priority'	 => 8
				)
			)
		);
		$wp_customize->add_control(
			new Customize_Number_Control(
				$wp_customize,
				'header_padding_bottom',
				array(
					'label'      => 'Bottom Header Padding',
					'section'    => 'maidesign_new_section_logo_header',
					'settings'   => 'md_header_padding_bottom',
					'type'		 => 'number',
					'priority'	 => 9
				)
			)
		);               

		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'background_menu',
				array(
					'label'          => 'Background Menu color',
					'section'        => 'maidesign_new_section_logo_header',
					'settings'       => 'md_background_menu',
                    'priority'	 => 10
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'text_menu',
				array(
					'label'          => 'Text color Menu',
					'section'        => 'maidesign_new_section_logo_header',
					'settings'       => 'md_text_menu',
                    'priority'	 => 10
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'border_dropdown',
				array(
					'label'          => 'Border dropdown menu color',
					'section'        => 'maidesign_new_section_logo_header',
					'settings'       => 'md_border_dropdown',
                    'priority'	 => 10
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'hover_dropdown',
				array(
					'label'          => 'Hover dropdown menu color',
					'section'        => 'maidesign_new_section_logo_header',
					'settings'       => 'md_hover_dropdown',
                    'priority'	 => 10
				)
			)
		);

        //Promotion area
        
        $wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'title_box_1',
				array(
					'label'      => 'Title box 1',
					'section'    => 'maidesign_new_section_promo',
					'settings'   => 'md_title_box_1',
					'type'		 => 'text',
					'priority'	 => 1
				)
			)
		);
        $wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'title_box_2',
				array(
					'label'      => 'Title box 2',
					'section'    => 'maidesign_new_section_promo',
					'settings'   => 'md_title_box_2',
					'type'		 => 'text',
					'priority'	 => 2
				)
			)
		);
        $wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'title_box_3',
				array(
					'label'      => 'Title box 3',
					'section'    => 'maidesign_new_section_promo',
					'settings'   => 'md_title_box_3',
					'type'		 => 'text',
					'priority'	 => 3
				)
			)
		);
        
        $wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'link_box_1',
				array(
					'label'      => 'Link box 1',
					'section'    => 'maidesign_new_section_promo',
					'settings'   => 'md_link_box_1',
					'type'		 => 'text',
					'priority'	 => 1
				)
			)
		);
        $wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'link_box_2',
				array(
					'label'      => 'Link box 2',
					'section'    => 'maidesign_new_section_promo',
					'settings'   => 'md_link_box_2',
					'type'		 => 'text',
					'priority'	 => 2
				)
			)
		);
        $wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'link_box_3',
				array(
					'label'      => 'Link box 3',
					'section'    => 'maidesign_new_section_promo',
					'settings'   => 'md_link_box_3',
					'type'		 => 'text',
					'priority'	 => 3
				)
			)
		);
        
        $wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'image_box_1',
				array(
					'label'      => 'Image box 1',
					'section'    => 'maidesign_new_section_promo',
					'settings'   => 'md_image_box_1',
					'priority'	 => 1
				)
			)
		);
        $wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'image_box_2',
				array(
					'label'      => 'Image box 2',
					'section'    => 'maidesign_new_section_promo',
					'settings'   => 'md_image_box_2',
					'priority'	 => 2
				)
			)
		);
        $wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'image_box_3',
				array(
					'label'      => 'Image box 3',
					'section'    => 'maidesign_new_section_promo',
					'settings'   => 'md_image_box_3',
					'priority'	 => 3
				)
			)
		);
        
        $wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'hide_promo',
				array(
					'label'      => 'Hide Promo Box',
					'section'    => 'maidesign_new_section_promo',
					'settings'   => 'md_hide_promo',
					'type'		 => 'checkbox',
					'priority'	 => 5
				)
			)
		);
        $wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'show_only_promo_homepage',
				array(
					'label'      => 'Show Promo Box only homepage',
					'section'    => 'maidesign_new_section_promo',
					'settings'   => 'md_show_only_promo_homepage',
					'type'		 => 'checkbox',
					'priority'	 => 6
				)
			)
		);

		// Post Settings
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'font_style',
				array(
					'label'          => 'Select font for Heading (Title of post)',
					'section'        => 'maidesign_new_section_post',
					'settings'       => 'md_font_style',
					'type'           => 'radio',
					'priority'	 => 2,
					'choices'        => array(
						'merriweather'  => 'Merriweather (serif)',
						'montserrat'   => 'Montserrat (sans-serif)'						
					)
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'bold_title',
				array(
					'label'      => 'No Bold title of post',
					'section'    => 'maidesign_new_section_post',
					'settings'   => 'md_bold_title',
					'type'		 => 'checkbox',
					'priority'	 => 2
				)
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_cat',
				array(
					'label'      => 'Hide Category',
					'section'    => 'maidesign_new_section_post',
					'settings'   => 'md_post_cat',
					'type'		 => 'checkbox',
					'priority'	 => 2
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_date',
				array(
					'label'      => 'Hide date',
					'section'    => 'maidesign_new_section_post',
					'settings'   => 'md_post_date',
					'type'		 => 'checkbox',
					'priority'	 => 3
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_date_list',
				array(
					'label'      => 'Hide date at list posts',
					'section'    => 'maidesign_new_section_post',
					'settings'   => 'md_post_date_list',
					'type'		 => 'checkbox',
					'priority'	 => 3
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_author_name',
				array(
					'label'      => 'Hide Author Name',
					'section'    => 'maidesign_new_section_post',
					'settings'   => 'md_post_author_name',
					'type'		 => 'checkbox',
					'priority'	 => 3
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_tags',
				array(
					'label'      => 'Hide Tags',
					'section'    => 'maidesign_new_section_post',
					'settings'   => 'md_post_tags',
					'type'		 => 'checkbox',
					'priority'	 => 4
				)
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_author',
				array(
					'label'      => 'Hide Author Box',
					'section'    => 'maidesign_new_section_post',
					'settings'   => 'md_post_author',
					'type'		 => 'checkbox',
					'priority'	 => 6
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_related',
				array(
					'label'      => 'Hide Related Posts Box',
					'section'    => 'maidesign_new_section_post',
					'settings'   => 'md_post_related',
					'type'		 => 'checkbox',
					'priority'	 => 7
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_thumb',
				array(
					'label'      => 'Hide Featured Image of Single Sost (Individual post)',
					'section'    => 'maidesign_new_section_post',
					'settings'   => 'md_post_thumb',
					'type'		 => 'checkbox',
					'priority'	 => 8
				)
			)
		);
        $wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_thumb_front_page',
				array(
					'label'      => 'Hide All Featured Image of post',
					'section'    => 'maidesign_new_section_post',
					'settings'   => 'md_post_thumb_front_page',
					'type'		 => 'checkbox',
					'priority'	 => 9
				)
			)
		);


		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'cat_color',
				array(
					'label'          => 'Categories color',
					'section'        => 'maidesign_new_section_post',
					'settings'       => 'md_cat_color',
                    'priority'	 => 10
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'cat_list_color',
				array(
					'label'          => 'Categories of list color',
					'section'        => 'maidesign_new_section_post',
					'settings'       => 'md_cat_list_color',
                    'priority'	 => 10
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'link',
				array(
					'label'          => 'Color for link',
					'section'        => 'maidesign_new_section_post',
					'settings'       => 'md_link',
                    'priority'	 => 10
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'share_button_color',
				array(
					'label'          => 'Share button color',
					'section'        => 'maidesign_new_section_post',
					'settings'       => 'md_share_button_color',
                    'priority'	 => 11
				)
			)
		);


        //Related post settings
        $wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'change_text_related',
				array(
					'label'      => 'Change text: Related',
					'section'    => 'maidesign_new_section_related',
					'settings'   => 'md_change_text_related',
					'type'		 => 'text',
					'priority'	 => 8
				)
			)
		);
        
        $wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'related_by',
				array(
					'label'          => 'Related posts by',
					'section'        => 'maidesign_new_section_related',
					'settings'       => 'md_related_by',
					'type'           => 'radio',
					'priority'	 => 9,
					'choices'        => array(
						'cat'   => 'Categories',
						'tag'  => 'Tags'
					)
				)
			)
		);
        $wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'related_order',
				array(
					'label'          => 'Order of Related posts',
					'section'        => 'maidesign_new_section_related',
					'settings'       => 'md_related_order',
					'type'           => 'radio',
					'priority'	 => 10,
					'choices'        => array(
						'rand'   => 'random',
						'date'  => 'Date'
					)
				)
			)
		);
        
        $wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'show_date_related',
				array(
					'label'      => 'Show date at bottom of related posts',
					'section'    => 'maidesign_new_section_related',
					'settings'   => 'md_show_date_related',
					'type'		 => 'checkbox',
					'priority'	 => 11
				)
			)
		);

		// Page
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'page_date',
				array(
					'label'      => 'Hide date',
					'section'    => 'maidesign_new_section_page',
					'settings'   => 'md_page_date',
					'type'		 => 'checkbox',
					'priority'	 => 2
				)
			)
		);
        
        $wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'page_author_name',
				array(
					'label'      => 'Hide author name',
					'section'    => 'maidesign_new_section_page',
					'settings'   => 'md_page_author_name',
					'type'		 => 'checkbox',
					'priority'	 => 3
				)
			)
		);
        
		// Social Media
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'facebook',
				array(
					'label'      => 'Facebook',
					'section'    => 'maidesign_new_section_social',
					'settings'   => 'md_facebook',
					'type'		 => 'text',
					'priority'	 => 1
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'twitter',
				array(
					'label'      => 'Twitter',
					'section'    => 'maidesign_new_section_social',
					'settings'   => 'md_twitter',
					'type'		 => 'text',
					'priority'	 => 2
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'instagram',
				array(
					'label'      => 'Instagram',
					'section'    => 'maidesign_new_section_social',
					'settings'   => 'md_instagram',
					'type'		 => 'text',
					'priority'	 => 3
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'pinterest',
				array(
					'label'      => 'Pinterest',
					'section'    => 'maidesign_new_section_social',
					'settings'   => 'md_pinterest',
					'type'		 => 'text',
					'priority'	 => 4
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'bloglovin',
				array(
					'label'      => 'Bloglovin',
					'section'    => 'maidesign_new_section_social',
					'settings'   => 'md_bloglovin',
					'type'		 => 'text',
					'priority'	 => 5
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'google',
				array(
					'label'      => 'Google Plus',
					'section'    => 'maidesign_new_section_social',
					'settings'   => 'md_google',
					'type'		 => 'text',
					'priority'	 => 6
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'tumblr',
				array(
					'label'      => 'Tumblr',
					'section'    => 'maidesign_new_section_social',
					'settings'   => 'md_tumblr',
					'type'		 => 'text',
					'priority'	 => 7
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'youtube',
				array(
					'label'      => 'Youtube',
					'section'    => 'maidesign_new_section_social',
					'settings'   => 'md_youtube',
					'type'		 => 'text',
					'priority'	 => 8
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'rss',
				array(
					'label'      => 'RSS Link',
					'section'    => 'maidesign_new_section_social',
					'settings'   => 'md_rss',
					'type'		 => 'text',
					'priority'	 => 8
				)
			)
		);
		
		// Footer
		
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'footer_social',
				array(
					'label'      => 'Disable Footer Social',
					'section'    => 'maidesign_new_section_footer',
					'settings'   => 'md_footer_social',
					'type'		 => 'checkbox',
					'priority'	 => 1
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'footer_copyright',
				array(
					'label'      => 'Footer Copyright Text',
					'section'    => 'maidesign_new_section_footer',
					'settings'   => 'md_footer_copyright',
					'type'		 => 'text',
					'priority'	 => 7
				)
			)
		);        
       	$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'background_footer',
				array(
					'label'          => 'Background color of footer copyright',
					'section'        => 'maidesign_new_section_footer',
					'settings'       => 'md_background_footer',
                    'priority'	 => 10
				)
			)
		);	
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'text_footer',
				array(
					'label'          => 'Text color copyright',
					'section'        => 'maidesign_new_section_footer',
					'settings'       => 'md_text_footer',
                    'priority'	 => 10
				)
			)
		);		
			
		// Custom CSS
		$wp_customize->add_control(
			new Customize_CustomCss_Control(
				$wp_customize,
				'custom_css',
				array(
					'label'      => 'Custom CSS',
					'section'    => 'maidesign_new_section_custom_css',
					'settings'   => 'md_custom_css',
					'type'		 => 'custom_css',
					'priority'	 => 1
				)
			)
		);
        
	
		
	

	// Remove Sections
	$wp_customize->remove_section( 'title_tagline');
	$wp_customize->remove_section( 'nav');
	$wp_customize->remove_section( 'static_front_page');
	$wp_customize->remove_section( 'colors');
	$wp_customize->remove_section( 'background_image');
	
 
}
add_action( 'customize_register', 'maidesign_register_theme_customizer' );
?>