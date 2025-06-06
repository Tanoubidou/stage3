<?php
    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }


    // This is your option name where all the Redux data is stored.
    $opt_name = "banko_opt";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'submenu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => esc_html__( 'Theme Options', 'banko' ),
        'page_title'           => esc_html__( 'Theme Options', 'banko' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => false,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => false,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '',
        // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'red',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */



    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */


    // -> START Basic Fields
    Redux::setSection( $opt_name, array(
        'title'     => esc_html__('General', 'banko'),
        'id'        => 'main_logo_id',
        'desc'      => esc_html__('Wellcome Our Theme Option', 'banko'),
        'customizer_width' => '400px',
        'icon'      => 'el-icon-cog',
    ) );


/*========================
banko Typography FIELD
=========================*/
    Redux::setSection( $opt_name, array(
         'title'     => esc_html__('Typography Area', 'banko'),
        'id'         => 'banko_tyfo_page',  
        'icon'       => 'el-icon-picture',
        'fields'    => array(
			/*
				array(
					'id'          => 'banko_body_typography',
					'type'        => 'typography', 
					'title'       => esc_html__('Body Typography Style', 'banko'),
					'google'      => true, 
					'font-backup' => true,
					'line-height'   => false,
					'output'      => array('
						body,p						
					'),
					'units'       =>'px',
					'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'banko'),
					'default'     => array(
						'color'       => '', 
						'font-style'  => '', 
						'font-family' => '', 
						'google'      => true,
						'font-size'   => '',						
					),
				),
				array(
					'id'          => 'banko_heading_all_typography',
					'type'        => 'typography', 
					'title'       => esc_html__('Headibg Typography Style', 'banko'),
					'google'      => true, 
					'font-backup' => true,
					'line-height'   => false,
					'font-style'  => false, 					
					'output'      => array('
						h1, h2, h3, h4, h5, h6					
					'),
					'units'       =>'px',
					'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'banko'),
					'default'     => array(
						'color'       => '', 
						'font-family' => '', 
						'google'      => true,
						'font-size'   => '',						
					),
				),
				
				array(
					'id'          => 'banko_heading_typographyh1',
					'type'        => 'typography', 
					'title'       => esc_html__('Heading Typography H1', 'banko'),
					'google'      => true, 
					'font-backup' => true,
					'line-height'   => false,
					'font-style'  => false, 					
					'output'      => array('
						h1				
					'),
					'units'       =>'px',
					'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'banko'),
					'default'     => array(
						'color'       => '', 
						'font-family' => '', 
						'google'      => true,
						'font-size'   => '',						
					),
				),
				array(
					'id'          => 'banko_heading_typographyh2',
					'type'        => 'typography', 
					'title'       => esc_html__('Heading Typography H2', 'banko'),
					'google'      => true, 
					'font-backup' => true,
					'line-height'   => false,
					'font-style'  => false, 					
					'output'      => array('
						h2				
					'),
					'units'       =>'px',
					'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'banko'),
					'default'     => array(
						'color'       => '', 
						'font-family' => '', 
						'google'      => true,
						'font-size'   => '',						
					),
				),
				array(
					'id'          => 'banko_heading_typographyh3',
					'type'        => 'typography', 
					'title'       => esc_html__('Heading Typography H3', 'banko'),
					'google'      => true, 
					'font-backup' => true,
					'line-height'   => false,
					'font-style'  => false, 					
					'output'      => array('
						h3			
					'),
					'units'       =>'px',
					'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'banko'),
					'default'     => array(
						'color'       => '', 
						'font-family' => '', 
						'google'      => true,
						'font-size'   => '',						
					),
				),
				array(
					'id'          => 'banko_heading_typographyh4',
					'type'        => 'typography', 
					'title'       => esc_html__('Heading Typography H4', 'banko'),
					'google'      => true, 
					'font-backup' => true,
					'line-height'   => false,
					'font-style'  => false, 					
					'output'      => array('
						h4				
					'),
					'units'       =>'px',
					'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'banko'),
					'default'     => array(
						'color'       => '', 
						'font-family' => '', 
						'google'      => true,
						'font-size'   => '',						
					),
				),
				array(
					'id'          => 'banko_heading_typographyh5',
					'type'        => 'typography', 
					'title'       => esc_html__('Heading Typography H5', 'banko'),
					'google'      => true, 
					'font-backup' => true,
					'line-height'   => false,
					'font-style'  => false, 					
					'output'      => array('
						h5					
					'),
					'units'       =>'px',
					'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'banko'),
					'default'     => array(
						'color'       => '', 
						'font-family' => '', 
						'google'      => true,
						'font-size'   => '',						
					),
				),
				array(
					'id'          => 'banko_heading_typographyh6',
					'type'        => 'typography', 
					'title'       => esc_html__('Heading Typography H6', 'banko'),
					'google'      => true, 
					'font-backup' => true,
					'line-height'   => false,
					'font-style'  => false, 					
					'output'      => array('
						h6					
					'),
					'units'       =>'px',
					'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'banko'),
					'default'     => array(
						'color'       => '', 
						'font-family' => '', 
						'google'      => true,
						'font-size'   => '',						
					),
				),					
				

				
			*/					
            ),
			
    ) );
	
/*========================
END banko Typography FIELD
=========================*/
	
	//total header area
     Redux::setSection( $opt_name, array(
        'title'     => esc_html__('Header area', 'banko'),
        'id'        => 'banko_header_area',
        'desc'      => esc_html__('Header options', 'banko'),
        'icon'      => 'el-icon-tasks',      
        'fields'    => array(
		
             array(
                    'id'        => 'banko_header_display_none_hide',
					'desc'      => esc_html__('All Menu OFF/ON section', 'banko'),					
                    'type'      => 'switch',
                    'title'     => esc_html__('All Header Hide', 'banko'),
                    'default'   => false,
                ),			
             array(
                    'id'        => 'banko_header_top_hide',
					'desc'      => esc_html__('If you ON this section. It will show header top section all your single page. But If you want to only show header top in home and others page, Please goes to your page, there you can see header top OFF/ON section. Please set It', 'banko'),
                    'type'      => 'switch',
                    'title'     => esc_html__('Header Top', 'banko'),
                    'default'   => false,
                ),
                array(
                    'id'        => 'banko_box_layout',
                    'type'      => 'select',
                    'title'     => esc_html__('Select Header Top layout', 'banko'),
                    'customizer_only'   => false,
                    'options'   => array(
                        'htopt_box' => esc_html__('Box Layout','banko'),
                        'htopt_full' => esc_html__('Full Layout','banko'),
                    ),
                    'default'   => 'htopt_box'
                ),			
                array(
                    'id'        => 'banko_main_box_layout',
                    'type'      => 'select',
                    'title'     => esc_html__('Select Header layout', 'banko'),
                    'customizer_only'   => false,
                    'options'   => array(
                        'hmenul_box' => esc_html__('Box Layout','banko'),
                        'hmenu_full' => esc_html__('Full Layout','banko'),
                    ),
                    'default'   => 'hmenul_box'
                ),

				
            )
        ));	
	
     //Header Top
    Redux::setSection( $opt_name, array(
        'title'     => esc_html__('Header Top Style ', 'banko'),
        'id'        => 'banko_header_top',
        'desc'      => esc_html__('Insert header top info', 'banko'),
		'icon'		=> 'el el-circle-arrow-right',
        'subsection' => true,     
        'fields'    => array(
                array(
                    'id'        => 'banko_top_right_layout',
                    'type'      => 'select',
                    'title'     => esc_html__('Select Your Top Header Style', 'banko'),
                    'customizer_only'   => false,
                    'options'   => array(
                        'header_top_1' => esc_html__('Left Address Right Icon','banko'),
                        'header_top_2' => esc_html__('Left Icon Right Address','banko'),
                        'header_top_3' => esc_html__(' Left Opening Middle Icon Right Login','banko'),
                        'header_top_4' => esc_html__('Left Address Right Icon & Search','banko'),
                    ),
                    'default'   => 'header_top_1'
                ),
                array(
                    'id'        => 'banko_top_imgicon',
                    'type'      => 'media',
                    'url'      => true,
                    'title'     => esc_html__('Top Icon Image', 'banko'),
                    'compiler'  => 'true',
                    'mode'      => false,
                ),
				array(
                    'id'       => 'banko_header_top_wel',
                    'type'     => 'text',
                    'title'    => esc_html__('Welcome Text', 'banko'),
					'default'	=> esc_html__('Welcome! To banko Finalce Consulti', 'banko'),
                ),
                array(
                    'id'       => 'banko_header_top_follow',
                    'type'     => 'text',
                    'title'    => esc_html__('Follow Title', 'banko'),
					'default'	=> esc_html__('Follow Us', 'banko'),
                ),
                array(								
                    'id'        => 'banko_header_top_icon_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Header Top Icon Color', 'banko'),
                    'default'  => '',
					'output'    => array(
						'color' => '.top-address p span i, .top-address p a
					')
                ),				
                array(								
                    'id'        => 'banko_header_top_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Header Top Address Text Color', 'banko'),
                    'default'  => '',
					'output'    => array(
						'color' => '.top-address p a,
								.top-right-menu ul.social-icons li a,
								.top-address p span,
								.top-address.menu_18 span,
								.em-quearys-menu i,
								.top-form-control button.top-quearys-style
					')
                ),
                array(								
                    'id'        => 'banko_header_top_hover_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Address Icon Hover Color', 'banko'),
                    'default'  => '',
					'output'    => array(
					'color' => '.top-right-menu .social-icons li a:hover,
								.top-right-menu .social-icons li a i:hover,
								.top-address p a i,
								.top-address p span i
					')
                ),
                array(								
                    'id'        => 'banko_header_opening_bg_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Opening BG Color', 'banko'),
                    'default'  => '',
					'output'    => array(
					'background-color' => '.top-address.menu_18 span,.em-quearys-menu i',
					'border-color' => '.em-quearys-form'
					)
                ),				
                array(								
                    'id'        => 'banko_hoeder_top_bg_color',
                    'type'      => 'background',
                    'title'     => esc_html__('Header Top Section BG Color', 'banko'),
                    'default'  => '',
                    'output'    => array('
						.banko-header-top
					'),
					'default'  => array(
						'background-color' => '',
					)					
                ),							
				array(
					'id'             => 'banko_header_top_section_spacing',
					'type'           => 'spacing',
					'output'         => array('.banko-header-top'),
					'mode'           => 'padding',
					'units'          => array('em', 'px'),
					'units_extended' => 'false',
					'title'          => esc_html__('Padding Option', 'banko'),
					'subtitle'       => esc_html__('Allow your users to choose the spacing padding they want.', 'banko'),
					'desc'           => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'banko'),
					'default'            => array(
						'padding-top'     => '', 
						'padding-right'   => '', 
						'padding-bottom'  => '', 
						'padding-left'    => '',
						'units'          => 'px', 
					)
				),							
				
            ),
    ) );

    //Header social Icon
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( ' Header Social Icon', 'banko' ),
        'id'         => 'banko_social_section',
		'icon'		=> 'el el-circle-arrow-right',
        'subsection' => true,
        'fields'     => array(	
                array(
                    'id'       => 'banko_social_icons',
                    'type'     => 'sortable',
                    'title'    => esc_html__('Insert Social Icons', 'banko'),
                    'subtitle' => esc_html__('Enter social links', 'banko'),
                    'mode'     => 'text',
					'label'    => true,
                    'options'  => array(        
                        'facebook'     => '',
                        'twitter'      => '',
                        'instagram'    => '',
                        'tumblr'       => '',
                        'pinterest'    => '',
                        'linkedin'     => '',
                        'behance'      => '',
                        'dribbble'     => '',
                        'youtube'      => '',
                        'vimeo'        => '',
                        'rss'          => '',
                    ),
					'default' => array(
						'facebook'     => esc_url('https://www.facebook.com/'),
						'twitter'     => esc_url('https://twitter.com/'),
						'instagram'	=> esc_url('https://instagram.com/'),
						'tumblr'     => '',
						'pinterest'     => '',
						'linkedin'     => '',
						'behance'     => '',
						'dribbble'     => esc_url('https://dribbble.com/'),
						'youtube'     => '',
						'vimeo'     => '',
						'rss'     => '',
					),
                ),
            )
    ) );
    //Header Logo
    Redux::setSection( $opt_name, array(
        'title'     => esc_html__('Header Logo', 'banko'),
        'id'        => 'banko_header_logo',
        'desc'      => esc_html__('Header Logo', 'banko'),
		'icon'		=> 'el el-circle-arrow-right',
        'subsection' => true,     
        'fields'    => array( 
                array(
                    'id'        => 'banko_logo',
                    'type'      => 'media',
                    'title'     => esc_html__('Default Logo', 'banko'),
                    'compiler'  => 'true',
                    'mode'      => false,
                    'desc'      => esc_html__('Upload logo here.ex: - it is work in default menu.', 'banko'),
                ),
                array(
                    'id'        => 'banko_onepage_logo',
                    'type'      => 'media',
                    'title'     => esc_html__('One Page Menu Logo', 'banko'),
                    'compiler'  => 'true',
                    'mode'      => false,
                    'desc'      => esc_html__('Upload logo here. ex:- it is work in one page menu', 'banko'),
                ),
                array(
                    'id'        => 'banko_ts_logo',
                    'type'      => 'media',
                    'title'     => esc_html__('Transparent Menu Logo', 'banko'),
                    'compiler'  => 'true',
                    'mode'      => false,
                    'desc'      => esc_html__('Upload logo here. ex: - it is work in transparent menu', 'banko'),
                ),
                array(
                    'id'        => 'banko_retina_logo',
                    'type'      => 'media',
                    'title'     => esc_html__('Retina Logo', 'banko'),
                    'compiler'  => 'true',
                    'mode'      => false,
                    'desc'      => esc_html__('Upload logo here. ex: - it is work in Retina Logo', 'banko'),
                ),
                array(
                    'id'        => 'banko_mobile_top_logo',
                    'type'      => 'media',
                    'title'     => esc_html__('Mobile Logo', 'banko'),
                    'compiler'  => 'true',
                    'mode'      => false,
                    'desc'      => esc_html__('Upload logo here. recommend size:- 1801x48px.', 'banko'),
                ),				
                array(
                    'id'        => 'banko_logo_height',
                    'type'      => 'text',
                    'title'     => esc_html__('Logo Height', 'banko'),
                    'mode'      => false,
                    'desc'      => esc_html__('Set height ex-100px', 'banko'),
                ),	
                array(
                    'id'        => 'banko_logo_widget',
                    'type'      => 'text',
                    'title'     => esc_html__('Logo Width', 'banko'),
                    'mode'      => false,
                    'desc'      => esc_html__('Set Width ex-100px', 'banko'),
                ),
                array(
                    'id'        => 'banko_line_height',
                    'type'      => 'text',
                    'title'     => esc_html__('Create logo spacing massing', 'banko'),
                    'mode'      => false,
                    'desc'      => esc_html__('Set number default-15px', 'banko'),
					'default'   =>'15px',
                ),
                array(
                    'id'       => 'banko_mobile_image_logo',
                    'type'     => 'text',
					'mode'      => false,
                    'title'    => esc_html__('Logo Text', 'banko'),
                    'desc' => esc_html__('Insert text ex: - "banko", Must be use "" for logo text ', 'banko'),
					'default'	=> esc_html__('"banko"', 'banko'),	
                ),
				array(								
                    'id'        => 'banko_mobilebg_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Mobile Menu BG Color', 'banko'),
                    'default'  => '',
					'output'    => array(
						'background-color' => '.mean-container .mean-bar,.mean-container .mean-nav',
					)
                ),
				array(								
                    'id'        => 'banko_mobileicon_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Mobile Menu Icon Color', 'banko'),
                    'default'  => '',
					'output'    => array(
						'background-color' => '.mean-container a.meanmenu-reveal span',
						'color' => '.mean-container a.meanmenu-reveal,.mean-container .mean-bar::before,.meanmenu-reveal.meanclose:hover'
					)
                ),					
				
            ),
    ) );

    //Header Menu
    Redux::setSection( $opt_name, array(
        'title'     => esc_html__('Header Menu', 'banko'),
        'id'        => 'banko_menu',
		'icon'		=> 'el el-circle-arrow-right',
        'subsection'=> true,      
        'fields'    => array(
				
                array(
                    'id'        => 'banko_defaulth_menu_layout',
					'desc'      => esc_html__('Please set a menu for your all single page. But, For your home and others main page menu, Please goes to your page, there you can see header menu section. Please set a  menu style there', 'banko'),						
                    'type'      => 'select',
                    'title'     => esc_html__('Select Default Menu For All Single Page', 'banko'),
                    'customizer_only'   => false,
                    'options'   => array(
						'111' => esc_html__( 'Default Header Menu', 'banko' ),								
						'2' => esc_html__( 'Header Transparent Menu ', 'banko' ),
						'3' => esc_html__( 'Header Transparent Menu ', 'banko' ),
                    ),
                    'default'   => '111'
                ),	
                array(								
                    'id'        => 'banko_brand_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Theme Brand Color', 'banko'),
                    'default'  => '',
					'output'    => array(
					'color' => '.section-title.t_left span, .work_progress-number span'
					)
                ),
				array(
                    'id'       => 'banko_header_button',
                    'type'     => 'text',
                    'title'    => esc_html__('Button Text', 'banko'),
                    'desc' => esc_html__('Insert text', 'banko'),
					'default'	=> esc_html__('Get A Quote', 'banko'),					
                ),
                array(
                    'id'       => 'banko_header_button_url',
                    'type'     => 'text',
                    'title'    => esc_html__('Button URL', 'banko'),
                    'desc' => esc_html__('Insert url ex: - http://webitkurigram.com/', 'banko'),					
                ),
                array(								
                    'id'        => 'banko_Button_colorm',
                    'type'      => 'color',
                    'title'     => esc_html__('Menu Button & Search Text Color', 'banko'),
                    'default'  => '',
					'output'    => array(
					'color' => 'a.dtbtn,.creative_header_button .dtbtn,.em-quearys-menu i,.top-form-control button.top-quearys-style'
					)
                ),
                array(								
                    'id'        => 'banko_Button_colorurl',
                    'type'      => 'color',
                    'title'     => esc_html__('Menu Button & Search BG Color', 'banko'),
                    'default'  => '',
					'output'    => array(
					'background-color' => 'a.dtbtn,.creative_header_button .dtbtn,.em-quearys-menu i',
					'border-color' => '.em-quearys-form'
					)
                ),
              array(								
                    'id'        => 'banko_Buttonht_colorm',
                    'type'      => 'color',
                    'title'     => esc_html__('Menu Hover Button Text Color', 'banko'),
                    'default'  => '',
					'output'    => array(
					'color' => 'a.dtbtn:hover,.creative_header_button > a:hover'
					)
                ),
                array(								
                    'id'        => 'banko_Buttonhtb_colorurl',
                    'type'      => 'color',
                    'title'     => esc_html__('Menu Hover Button BG Color', 'banko'),
                    'default'  => '',
					'output'    => array(
					'background-color' => 'a.dtbtn:hover,.creative_header_button > a:hover'
					)
                ),							
                array(								
                    'id'        => 'banko_menu_bg_color',
                    'type'      => 'background',
                    'title'     => esc_html__('Main Menu Section BG Color', 'banko'),
                    'default'  => '',
                    'output'    => array('
						.banko_nav_area
					'),
					'default'  => array(
						'background-color' => '',
					)					
                ),


                // array(								
                //     'id'        => 'banko_brand_color_two',
                //     'type'      => 'color',
                //     'title'     => esc_html__('Theme Brand Color', 'banko'),
                //     'default'  => '',
				// 	'output'    => array(
				// 	'color' => '.section-title.t_left span, .work_progress-number span'
				// 	)
                // ),
				// array(
                //     'id'       => 'banko_header_button_two',
                //     'type'     => 'text',
                //     'title'    => esc_html__('Button Two Text', 'banko'),
                //     'desc' => esc_html__('Insert text', 'banko'),
				// 	'default'	=> esc_html__('Get A Quote', 'banko'),					
                // ),
                // array(
                //     'id'       => 'banko_header_button_url_two',
                //     'type'     => 'text',
                //     'title'    => esc_html__('Button Two URL', 'banko'),
                //     'desc' => esc_html__('Insert url ex: - http://webitkurigram.com/', 'banko'),					
                // ),
                // array(								
                //     'id'        => 'banko_Button_colorm_two',
                //     'type'      => 'color',
                //     'title'     => esc_html__('Menu Button Two & Search Text Color', 'banko'),
                //     'default'  => '',
				// 	'output'    => array(
				// 	'color' => 'a.dtbtn,.creative_header_button .dtbtn,.em-quearys-menu i,.top-form-control button.top-quearys-style'
				// 	)
                // ),
               
               


	/*		
				array(
					'id'          => 'banko_menu_typography',
					'type'        => 'typography', 
					'title'       => esc_html__('Main Menu Text style', 'banko'),
					'google'      => true, 
					'font-backup' => true,
					'output'      => array('
						.banko_menu > ul > li > a,
						.heading_style_2 .banko_menu > ul > li > a,
						.heading_style_3 .banko_menu > ul > li > a,
						.heading_style_4 .banko_menu > ul > li > a,
						.heading_style_3.tr_btn  .banko_menu > ul > li > a,
						.heading_style_3.tr_white_btn .banko_menu > ul > li > a,
						.heading_style_5 .banko_menu > ul > li > a
					'),
					'line-height'   => false,
					'units'       =>'px',
					'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'banko'),
					'default'     => array(
						'color'       => '', 
						'font-style'  => '', 
						'font-family' => '', 
						'google'      => true,
						'font-size'   => '', 
						'line-height' => ''
					),
				),
			
*/			
                array(								
                    'id'        => 'banko_menu_texts_hover_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Main Menu Hover Text Color', 'banko'),
                    'default'  => '',
					'output'    => array(
					'color' => '.banko_menu > ul > li:hover > a,.banko_menu > ul > li.current > a',
					'background-color' => '.banko_menu > ul > li > a::before,.banko_menu > ul > li.current:hover > a::before,.banko_menu > ul > li.current > a:before'
					)
                ),
                array(								
                    'id'        => 'banko_menu_bg_sticky_color',
                    'type'      => 'color_rgba',
                    'title'     => esc_html__('Main Menu Sticky BG Color', 'banko'),
					'default'   => array(
						'color'     => '#000000',
						'alpha'     => 1
					),
					'output'    => array(
					'background-color' => '
					.banko_nav_area.prefix,
					.hbg2
					'
					)
                ),					
		/*									
                array(								
                    'id'        => 'banko_menu_sticky_text_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Main Menu Sticky Text Color', 'banko'),
                    'default'  => '',
					'output'    => array(
					'color' => '
					.banko_nav_area.prefix .banko_menu > ul > li > a,.hbg2 .banko_menu > ul > li > a,
					.banko_nav_area.prefix .banko_menu > ul > li.current > a
					',
					'background-color' => '
					.banko_nav_area.prefix .banko_menu > ul > li > a::before,
					.hbg2 .banko_menu > ul > li > a::before
					
					'
					)
                ),	
			
			*/
                array(								
                    'id'        => 'banko_menu_text_hover_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Main Menu Sticky Current Text Color', 'banko'),
                    'default'  => '',
					'output'    => array(
					'color' => '
					.banko_nav_area.prefix .banko_menu > ul > li.current > a,
					.hbg2 .banko_menu > ul > li.current > a
					',
					'background-color' => '
						.banko_nav_area.prefix .banko_menu > ul > li.current > a::before					
					'
					)
                ),	
				
                array(								
                    'id'        => 'banko_submenu_bg_color',
                    'type'      => 'background',
                    'title'     => esc_html__('Sub Menu BG Color', 'banko'),
                    'default'  => '',
                    'output'    => array('
						.banko_menu ul .sub-menu
					'),
					'default'  => array(
						'background-color' => '',
					)					
                ),
			
			/*
				array(
					'id'          => 'banko_sub_menu_typography',
					'type'        => 'typography', 
					'title'       => esc_html__('Sub Menu Font style', 'banko'),
					'google'      => true, 
					'font-backup' => true,
					'output'      => array('
						.banko_menu ul .sub-menu li a
					'),
					'units'       =>'px',
					'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'banko'),
					'default'     => array(
						'color'       => '', 
						'font-style'  => '', 
						'font-family' => '', 
						'google'      => true,
						'font-size'   => '', 
						'line-height' => ''
					),
				),
				
				*/
                array(								
                    'id'        => 'banko_submenu_hover_text_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Sub Menu Hover Text Color', 'banko'),
                    'default'  => '',
					'output'    => array(
					'color' => '
						.banko_menu ul .sub-menu li:hover > a,
						.banko_menu ul .sub-menu .sub-menu li:hover > a,
						.banko_menu ul .sub-menu .sub-menu .sub-menu li:hover > a,
						.banko_menu ul .sub-menu .sub-menu .sub-menu .sub-menu li:hover > a																'
					)
                ),				
				array(
					'id'             => 'menu_spacing',
					'type'           => 'spacing',
					'output'         => array('.banko_nav_area'),
					'mode'           => 'padding',
					'units'          => array('em', 'px'),
					'units_extended' => 'false',
					'title'          => esc_html__('Section Padding Option', 'banko'),
					'subtitle'       => esc_html__('Allow your users to choose the spacing or padding they want.', 'banko'),
					'desc'           => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'banko'),
					'default'            => array(
						'padding-top'     => '', 
						'padding-right'   => '', 
						'padding-bottom'  => '', 
						'padding-left'    => '',
						'units'          => 'px', 
					)
				),
					
            ),
    ) );


       //Header Side Bar
       Redux::setSection( $opt_name, array(
        'title'     => esc_html__('Header Side Bar', 'banko'),
        'id'        => 'banko_header_sidebar',
        'icon'		=> 'el el-circle-arrow-right',
        'subsection'=> true,      
        'fields'    => array(	
            array(
                'id'       => 'banko_sidebar_title',
                'type'     => 'text',
                'title'    => esc_html__('Sidebar Title', 'banko'),
                'default'	=> esc_html__('About Us', 'banko'),					
            ),                 
            array(
                'id'       => 'banko_sidebar_desc',
                'type'     => 'text',
                'title'    => esc_html__('Sidebar Desc', 'banko'),
                'default'	=> esc_html__('The argument in favor of using filler text goes something like this: If you use real content in the Consulting Process, anytime you reach a review ', 'banko'),					
            ),               
            array(
                'id'       => 'banko_sidebar_contact_title',
                'type'     => 'text',
                'title'    => esc_html__('Sidebar Contact Title', 'banko'),
                'default'	=> esc_html__('Contact Info', 'banko'),					
            ),                
            array(
                'id'       => 'banko_sidebar_contact_location',
                'type'     => 'text',
                'title'    => esc_html__('Insert Company Location ', 'banko'),
                'default'	=> esc_html__('Chicago 12, Melborne City, USA', 'banko'),					
            ),                
            array(
                'id'       => 'banko_sidebar_contact_phone',
                'type'     => 'text',
                'title'    => esc_html__('Insert Phone Number', 'banko'),
                'default'	=> esc_html__('(111) 111-111-1111', 'banko'),					
            ),                
            array(
                'id'       => 'banko_sidebar_contact_mail',
                'type'     => 'text',
                'title'    => esc_html__('Insert Email Address ', 'banko'),
                'default'	=> esc_html__('Example@gmail.com', 'banko'),					
            ),                
            array(
                'id'       => 'banko_sidebar_contact_openhour',
                'type'     => 'text',
                'title'    => esc_html__('Opening Hour Text', 'banko'),
                'default'	=> esc_html__('Week Days: 09.00 to 18.00 Sunday: Closed', 'banko'),					
            ),
            array(								
                'id'        => 'banko_sidebar_title_color',
                'type'      => 'color',
                'title'     => esc_html__('Sidebar Title Text Color', 'banko'),
                'default'  => '',
                'output'    => array(
                'color' => '
                    .sidebar-title h2'
                )
            ),              
            array(								
                'id'        => 'banko_sidebar_desc_color',
                'type'      => 'color',
                'title'     => esc_html__('Sidebar Desc Text Color', 'banko'),
                'default'  => '',
                'output'    => array(
                'color' => '
                    .sidebar-desc p'
                )
            ),                
            array(								
                'id'        => 'banko_sidebar_contact_title_color',
                'type'      => 'color',
                'title'     => esc_html__('Sidebar Contact Text Color', 'banko'),
                'default'  => '',
                'output'    => array(
                'color' => '
                    .sidebar-contact-info h2'
                )
            ),                
            array(								
                'id'        => 'banko_sidebar_icon_color',
                'type'      => 'color',
                'title'     => esc_html__('Sidebar Contact Icon Color', 'banko'),
                'default'  => '',
                'output'    => array(
                'color' => '
                    .sidebar-contact-info ul li i'
                )
            ),                
            array(								
                'id'        => 'banko_sidebar_icon_text_color',
                'type'      => 'color',
                'title'     => esc_html__('Sidebar Contact Icon Text Color', 'banko'),
                'default'  => '',
                'output'    => array(
                'color' => '
                    .sidebar-contact-info ul li'
                )
            ),
            array(
                'id'       => 'banko_sidebar_social_icons',
                'type'     => 'sortable',
                'title'    => esc_html__('Sidebar Social Icons', 'banko'),
                'subtitle' => esc_html__('Enter social links', 'banko'),
                'mode'     => 'text',
                'label'    => true,
                'options'  => array(        
                    'facebook'     => '',
                    'twitter'      => '',
                    'instagram'    => '',
                    'tumblr'       => '',
                    'pinterest'    => '',
                    'linkedin'     => '',
                    'behance'      => '',
                    'dribbble'     => '',
                    'youtube'      => '',
                    'vimeo'        => '',
                    'rss'          => '',
                ),
                'default' => array(
                    'facebook'     => esc_url('https://www.facebook.com/'),
                    'twitter'     => esc_url('https://twitter.com/'),
                    'instagram'	=> esc_url('https://instagram.com/'),
                    'tumblr'     => '',
                    'pinterest'     => '',
                    'linkedin'     => '',
                    'behance'     => '',
                    'dribbble'     => esc_url('https://dribbble.com/'),
                    'youtube'     => '',
                    'vimeo'     => '',
                    'rss'     => '',
                ),
            ),
        ),
    ) );

// End Sidebar


/*========================
END banko HEADER FIELD
=========================*/


/*========================
banko BREADCRUMB FIELD
=========================*/
    Redux::setSection( $opt_name, array(
         'title'     => esc_html__('Breadcrumb Area', 'banko'),
        'id'         => 'banko_bread_page',  
        'icon'       => 'el-icon-picture',
        'fields'    => array(
    array(
     'id'   => 'info_normal',
     'type' => 'info',
     'desc' => esc_html__('Notice:- If you want to more breadrucmb control. Please see every page bottom area. We Added More Field Here','banko')
    ),    
	array(
		'id'        => 'banko_breadcrumb_bg',
		'type'      => 'background',
		'output'    => array('.breadcumb-area,.breadcumb-blog-area'),
		'title'     => esc_html__('Breadcrumb Background', 'banko'),
		'subtitle'  => esc_html__('Breadcrumb background with image, color.', 'banko'),
		'default'  => array(
			'background-color' => '',
		)
	),
	array(        
		'id'        => 'banko_bread_title_page_color',
		'type'      => 'color',
		'title'     => esc_html__('Breadcrumb Title Color', 'banko'),
		'default'  => '',
		'output'    => array(
			'color' => '.brpt h2,.breadcumb-inner h2'
		)
    ),  
			
/*			
    array(
     'id'          => 'banko_breadcrumb_typography',
     'type'        => 'typography', 
     'title'       => esc_html__('Breadcrumb Text And Font style', 'banko'),
     'google'      => true, 
     'font-backup' => true,
     'line-height'   => false,
     'text-align'   => false,
     'output'      => array('
      .breadcumb-inner ul,     
      .breadcumb-inner li,
      .breadcumb-inner li a      
     '),
     'units'       =>'px',
     'subtitle'    => esc_html__('Typography option with each property can be called individually.', 'banko'),
     'default'     => array(
		  'color'       => '', 
		  'font-style'  => '', 
		  'font-family' => '', 
		  'google'      => true,
		  'font-size'   => '', 
		 ),
	),
			
*/			
	array(        
		'id'        => 'banko_bread_current_page_color',
		'type'      => 'color',
		'title'     => esc_html__('Breadcrumb Current Text Color', 'banko'),
		'default'  => '',
		'output'    => array(
			'color' => '.breadcumb-inner li:nth-last-child(-n+1)'
		)
	),     
    array(
     'id'             => 'spacing',
     'type'           => 'spacing',
     'output'         => array('.breadcumb-area'),
     'mode'           => 'padding',
     'units'          => array('em', 'px'),
     'units_extended' => 'false',
     'title'          => esc_html__('Padding Option', 'banko'),
     'subtitle'       => esc_html__('Allow your users to choose the spacing or margin they want.', 'banko'),
     'desc'           => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'banko'),
     'default'            => array(
      'padding-top'     => '', 
      'padding-right'   => '', 
      'padding-bottom'  => '', 
      'padding-left'    => '',
      'units'          => 'px', 
     )
    ),    
        
            ),
    ) );
/*========================
END banko BREADCRUMB FIELD
=========================*/


/*========================
banko circle FIELD
=========================*/
    Redux::setSection( $opt_name, array(
         'title'     => esc_html__('Default Color', 'banko'),
        'id'         => 'banko_tm_defaultpage',  
        'icon'       => 'el el-circle-arrow-right',
        'fields'    => array(
				array(
				 'id'   => 'thdfinfo_normal',
				 'type' => 'info',
				 'desc' => esc_html__('Notice:- we set our all color in our adns, But only carousel Arrow, contact button and scroll button color will be change by below option','banko')
				),  
				array(        
					'id'        => 'thdft',
					'type'      => 'color',
					'title'     => esc_html__('Text Color', 'banko'),
					'default'  => '',
					'output'    => array(
						'color' => '.curosel-style .owl-nav div,.slick-prev:before, .slick-next:before'
					)
				),
				array(        
					'id'        => 'thdftbt',
					'type'      => 'color',
					'title'     => esc_html__('BG Color', 'banko'),
					'default'  => '',
					'output'    => array(
						'background-color' => '.curosel-style .owl-nav div,.slick-prev, .slick-next,.em-slick-slider-new.em-image-sliderslick .slick-dots li button,.mc4wp-form-fields button',
						'border-color' => '.curosel-style .owl-nav div'
					)
				),   				
				array(        
					'id'        => 'thdefhbg',
					'type'      => 'color',
					'title'     => esc_html__('Hover BG Color', 'banko'),
					'default'  => '',
					'output'    => array(
						'background' => '.curosel-style .owl-nav .owl-prev:hover,.curosel-style .owl-nav .owl-next:hover,#scrollUp,.slick-prev:hover,.slick-prev:focus,.slick-next:hover,.slick-next:focus ,.em-slick-slider-new.em-image-sliderslick .slick-dots .slick-active button,.mc4wp-form-fields button:hover',
						'border-color' => '.curosel-style .owl-nav .owl-prev:hover,.curosel-style .owl-nav .owl-next:hover,#scrollUp,.slick-prev:hover,.slick-next:hover'
					)
				),
				array(        
					'id'        => 'tmdfht',
					'type'      => 'color',
					'title'     => esc_html__('Hover Text Color', 'banko'),
					'default'  => '',
					'output'    => array(
						'color' => '.curosel-style .owl-nav .owl-prev:hover,.curosel-style .owl-nav .owl-next:hover,#scrollUp i,.slick-prev:hover:before, .slick-next:hover:before'
					)
				),


				array(        
					'id'        => 'thdefhbgctc',
					'type'      => 'color',
					'title'     => esc_html__('Contact Button Text Color', 'banko'),
					'default'  => '',
					'output'    => array(
						'color' => '.home-2 .sbuton,.sbuton'
					)
				),
				array(        
					'id'        => 'thdefhbgcbtbgh',
					'type'      => 'color',
					'title'     => esc_html__('Contact Button BG Color', 'banko'),
					'default'  => '',
					'output'    => array(
						'background' => '.home-2 .sbuton,.sbuton',
						'border-color' => '.home-2 .sbuton,.sbuton'
					)
				),				array(        
					'id'        => 'thdefhbgcbth',
					'type'      => 'color',
					'title'     => esc_html__('Contact Button Hover BG Color', 'banko'),
					'default'  => '',
					'output'    => array(
						'background' => '.home-2 .sbuton:hover,.sbuton:hover',
						'border-color' => '.home-2 .sbuton:hover,.sbuton:hover'
					)
				),
				array(        
					'id'        => 'tmdfhtcbtnht',
					'type'      => 'color',
					'title'     => esc_html__('Contact Button Hover Text Color', 'banko'),
					'default'  => '',
					'output'    => array(
						'color' => '.home-2 .sbuton:hover,.sbuton:hover'
					)
				),
                array(								
                    'id'        => 'banko_menu_bg_videocolor',
                    'type'      => 'color_rgba',
                    'title'     => esc_html__('EM Video Widget Ovelrlay Color', 'banko'),
					'default'   => array(
						'color'     => '#000000',
						'alpha'     => .3
					),
					'output'    => array(
					'background-color' => '
					.single-video::before
					'
					)
                ),						
				
				

        ),
    ) );
/*========================
END banko circle FIELD
=========================*/

/*========================
banko BLOG FIELD
=========================*/
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Blog Area', 'banko' ),
        'id'          => 'banko_blog_section_area',
		'icon'		=> 'el el-circle-arrow-right',
        'fields'     => array(
                array(
                    'id'        => 'banko_blog_bgcolor',
                    'type'      => 'background',
                    'output'    => array('.banko-single-blog'),
                    'title'     => esc_html__('Blog Item BG Color', 'banko'),
                    'subtitle'  => esc_html__('BG color', 'banko'),
                    'default'  => array(
                        'background-color' => '',
                    )
                ),

                array(								
                    'id'        => 'banko_blog_title_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Blog Title Color', 'banko'),
                    'default'  => '',
					'output'    => array(
					'color' => '
						.blog-content h1, .blog-content h2, .blog-content h3, .blog-content h4, .blog-content h5, .blog-content h6,					
						.single-blog-content h1, .single-blog-content h2, .single-blog-content h3, .single-blog-content h4, .single-blog-content h5, .single-blog-content h6,
						.blog-content h2 a,.blog-left-side .widget h2,.blog-page-title a,.banko-single-blog-title h2						
					')
                ),	
                array(								
                    'id'        => 'banko_blog_title_hover_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Blog Title Hover Color', 'banko'),
                    'default'  => '',
					'output'    => array(
					'color' => '
					.blog-content h2 a:hover,
					.blog-page-title h2 a:hover
					')
                ),
                array(								
                    'id'        => 'banko_blog_icon_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Blog Post Meta Icon Color', 'banko'),
                    'default'  => '',
					'output'    => array(
					'color' => '
					.banko-blog-meta-left i
					')
                ),
                array(								
                    'id'        => 'banko_blog_text_meta_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Blog Post Meta Text Color', 'banko'),
                    'default'  => '',
					'output'    => array(
					'color' => '
					.banko-blog-meta.txp-meta .banko-blog-meta-left a, .banko-blog-meta.txp-meta .banko-blog-meta-left span,
					
					')
                ),
               				
                array(								
                    'id'        => 'banko_blog_btn_txt_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Blog btn Text Color', 'banko'),
                    'default'  => '',
					'output'    => array(
					'color' => '.blog_readmore_btn
					
					
					')
                ),
				 array(								
                    'id'        => 'banko_blog_btn_border_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Blog btn Border Color', 'banko'),
                    'default'  => '',
					'output'    => array(
					'border-color' => '.blog_readmore_btn
					
					
					')
                ),
                array(								
                    'id'        => 'banko_blog_btnhover_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Blog btn Hover Text Color', 'banko'),
                    'default'  => '',
					'output'    => array(
					'color' => '.banko-single-blog:hover .blog_readmore_btn, .banko-blog-meta-left a, .banko-blog-meta-left span
					
					
					')
                ),				
				array(								
                    'id'        => 'banko_blog_btnhover_colorbg',
                    'type'      => 'color',
                    'title'     => esc_html__('Blog Btn Hover BG & Border Color', 'banko'),
                    'default'  => '',
					'output'    => array(
					'border-color' => '.banko-single-blog:hover .blog_readmore_btn',
					'background-color' => '.banko-single-blog:hover .blog_readmore_btn ,.banko-blog-meta-left',
					)
                ),

				
                array(
                    'id'        => 'banko_blog_widget_bgcolor',
                    'type'      => 'background',
                    'output'    => array('.blog-left-side.widget > div'),
                    'title'     => esc_html__('Blog Sidebar BG Color', 'banko'),
                    'subtitle'  => esc_html__('BG color', 'banko'),
                    'default'  => array(
                        'background-color' => '',
                    )
                ),
				 array(	
                    'id'        => 'banko_sidebar_widgett_text_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Sidebar Title Text Color', 'banko'),
                    'default'  => '',
					'output'    => array(
						'color' => '.blog-left-side .widget h2'
					)
                ),
                array(								
                    'id'        => 'banko_sidebar_widget_li_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Sidebar Text Color', 'banko'),
                    'default'  => '',
					'output'    => array(
						'color' => '
							.blog-left-side .widget ul li,
							.blog-left-side .widget ul li a,
							.blog-left-side .widget ul li::before,
							.tagcloud a,
							caption,
							table,
							 table td a,
							cite,
							.rssSummary,
							span.rss-date,
							span.comment-author-link,
							.textwidget p,
							.widget .screen-reader-text
						')
                ),	
                array(								
                    'id'        => 'banko_sidebar_widget_li_hover_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Sidebar Text Hover Color', 'banko'),
                    'default'  => '',
					'output'    => array(
						'color' => '
							.blog-left-side .widget ul li a:hover,
							.blog-left-side .widget ul li:hover::before
						')
                ),					
                array(								
                    'id'        => 'banko_blog_social_icon_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Single Blog Social Icon & Title bar Color', 'banko'),
                    'default'  => '',
					'output'    => array(
					'color' => '.banko-single-icon-inner a,.reply_date span.span_right,.banko_btn',
					'border-color' => '.banko-single-icon-inner a,.banko_btn',
					'background' => '.blog-left-side .widget h2::before,.commment_title h3::before,table#wp-calendar td#today,.footer-middle .widget h2::before',
					)
                ),
				array(								
                    'id'        => 'banko_blog_social_hover_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Single Blog Social Icon Hover Color', 'banko'),
                    'default'  => '',
					'output'    => array(
					'background-color' => '.banko-single-icon-inner a:hover,.banko_btn:hover',
					'border-color' => '.banko-single-icon-inner a:hover,.banko_btn:hover',
					)
                ),
				
				array(								
                    'id'        => 'banko_blog_pagina_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Pagination Text Color', 'banko'),
                    'default'  => '',
					'output'    => array(
					'color' => '.paginations a',
					'border-color' => '.paginations a',
					)
                ),				
				
				array(								
                    'id'        => 'banko_blog_pagina_hover_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Pagination Hover Color', 'banko'),
                    'default'  => '',
					'output'    => array(
					'background-color' => '.paginations a:hover, .paginations a.current, .page-numbers span.current',
					'border-color' => '.paginations a:hover, .paginations a.current, .page-numbers span.current',
					)
                ),					
				array(
                    'id'        => 'banko_blog_socialsharesh_hide',
                    'type'      => 'switch',
                    'title'     => esc_html__('Blog Social share Show/Hide', 'banko'),
                    'default'   => true,
                ),												
            )
    ) );		
/*========================
END banko BLOG FIELD
=========================*/
	 
/*========================
banko 404 FIELD
=========================*/	 
    Redux::setSection( $opt_name, array(
         'title'     => esc_html__('404 Area', 'banko'),
        'id'         => 'banko_error_page',  
        'desc'       => esc_html__('Use this section to upload background images, select background color', 'banko'),
        'icon'       => 'el-icon-picture',
        'fields'    => array(
                array(
                    'id'        => 'banko_background_404',
                    'type'      => 'background',
                    'output'    => array('.not-found-area'),
                    'title'     => esc_html__('404 Page Background Color', 'banko'),
                    'subtitle'  => esc_html__('404 background with image, color.', 'banko'),
                    'default'  => array(
                        'background-color' => '',
                    )
                ),
                array(								
                    'id'        => 'banko_not_title',
                    'type'      => 'color',
                    'title'     => esc_html__('Title Color', 'banko'),
                    'default'  => '',
					'output'    => array(
					'color' => '.not-found-inner h2,.not-found-inner'
					)
                ),	
                array(								
                    'id'        => 'banko_sub_not_title',
                    'type'      => 'color',
                    'title'     => esc_html__('Sub Title Color', 'banko'),
                    'default'  => '',
					'output'    => array(
					'color' => '.not-found-inner p,.not-found-inner strong'
					)
                ),
                array(								
                    'id'        => 'banko_not_link_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Return Link Color', 'banko'),
                    'default'  => '',
					'output'    => array(
					'color' => '.not-found-inner a'
					)
                ),					
                array(
                    'id'        => '404_info',
                    'type'      => 'editor',
                    'title'     => esc_html__('404 Information', 'banko'),
                    'subtitle'  => esc_html__('HTML tags allowed: a, br, em, strong', 'banko'),
                    'default'   => esc_html__('404 Oops! The page you are Looking for does not exist. ', 'banko'),
                ), 
				array(
					'id'             => 'banko_notfound_spacing',
					'type'           => 'spacing',
					'output'         => array('.not-found-area'),
					'mode'           => 'padding',
					'units'          => array('em', 'px'),
					'units_extended' => 'false',
					'title'          => esc_html__('Section Padding Option', 'banko'),
					'subtitle'       => esc_html__('Allow your users to choose the spacing or padding they want.', 'banko'),
					'desc'           => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'banko'),
					'default'            => array(
						'padding-top'     => '', 
						'padding-right'   => '', 
						'padding-bottom'  => '', 
						'padding-left'    => '',
						'units'          => 'px', 
					)
				),

				
            ),
    ) );

/*========================
banko FOOTER FIELD
=========================*/	 
	
    //Footer area
    Redux::setSection( $opt_name, array(
        'title'     => esc_html__('Footer Area', 'banko'),
        'id'        => 'footer_area_id',
        'desc'      => esc_html__('Customize Your Footer', 'banko'),
        'icon'      => 'el-icon-cog',
        'fields'    => array(      
                 array(
                    'id'       => 'banko_widget_hide',
                    'type'     => 'switch',
                    'title'    => esc_html__('Widget Section Hide/show', 'banko'),
                    'default'  => false,
                ),				
				array(
                    'id'       => 'banko_copyright_hide',
                    'type'     => 'switch',
                    'title'    => esc_html__('Copyright Section Show/Hide', 'banko'),
                    'default'  => true,
                ),

                array(
                    'id'        => 'banko_footer_box_layout',
                    'type'      => 'select',
                    'title'     => esc_html__('Select Footer layout', 'banko'),
                    'customizer_only'   => false,
                    'options'   => array(
                        'footer_box' => esc_html__('Box Layout','banko'),
                        'footer_full' => esc_html__('Full Layout','banko'),
                    ),
                    'default'   => 'footer_box'
                ),							
								
            )
    ) );
	// footer widget area 
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Footer Widget Section', 'banko' ),
        'id'          => 'banko_widget_section',
        'subsection' => true,
		'icon'		=> 'el el-circle-arrow-right',
        'fields'     => array(
                array(
                    'id'        => 'banko_widget_column_count',
                    'type'      => 'select',
                    'title'     => esc_html__('Widget Column Count', 'banko'),
                    'customizer_only'   => false,
                    'options'   => array(
                        '1' => esc_html__('Column 1','banko'),
                        '2' => esc_html__('Column 2','banko'),
                        '3' => esc_html__('Column 3','banko'),
                        '4' => esc_html__('Column 4','banko'),
                        '6' => esc_html__('Column 6','banko'),
                    ),
                    'default'   =>'4'
                ),		
				 array(	
                    'id'        => 'banko_widgett_text_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Widget Title Text Color', 'banko'),
                    'default'  => '',
					'output'    => array(
						'color' => '.footer-middle .widget h2'
					)
                ),
                array(								
                    'id'        => 'banko_copyright_widget_li_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Widget Text Color', 'banko'),
                    'default'  => '',
					'output'    => array(
						'color' => '
							.footer-middle .widget ul li,
							.footer-middle .widget ul li a,
							.footer-middle .widget ul li::before,
							.footer-middle .tagcloud a,
							.footer-middle caption,
							.footer-middle table,
							.footer-middle table td a,
							.footer-middle cite,
							.footer-middle .rssSummary,
							.footer-middle span.rss-date,
							.footer-middle span.comment-author-link,
							.footer-middle .textwidget p,
							.footer-middle .widget .screen-reader-text,
							mc4wp-form-fields p,
							.mc4wp-form-fields,
							.footer-m-address p,
							.footer-m-address,
							.footer-widget.address,
							.footer-widget.address p,
							.mc4wp-form-fields p
						')
                ),			
                array(								
                    'id'        => 'banko_copyright_widget_li_hover_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Widget Text Hover Color', 'banko'),
                    'default'  => '',
					'output'    => array(
						'color' => '
							.footer-middle .widget ul li a:hover,
							.footer-middle .widget ul li:hover::before,
							.footer-middle .sub-menu li a:hover, 
							.footer-middle .nav .children li a:hover,
							.footer-middle .recent-post-text > h4 a:hover,
							.footer-middle .tagcloud a:hover,
							#today
						')
                ),		
                array(								
                    'id'        => 'banko_widget_bg_color',
                    'type'      => 'background',
                    'title'     => esc_html__('Widget Section BG Color', 'banko'),
                    'default'  => '',
                    'output'    => array('
									.footer-middle
								'),
					'default'  => array(
						'background-color' => '',
					)					
                ),	
				array(
					'id'             => 'banko_widget_section_spacing',
					'type'           => 'spacing',
					'output'         => array('.footer-middle'),
					'mode'           => 'padding',
					'units'          => array('em', 'px'),
					'units_extended' => 'false',
					'title'          => esc_html__('Padding Option', 'banko'),
					'subtitle'       => esc_html__('Allow your users to choose the spacing padding they want.', 'banko'),
					'desc'           => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'banko'),
					'default'            => array(
						'padding-top'     => '', 
						'padding-right'   => '', 
						'padding-bottom'  => '', 
						'padding-left'    => '',
						'units'          => 'px', 
					)
				),
				
            )
    ) );	
    //footer copyright text
    Redux::setSection( $opt_name, array(
        'title'     => esc_html__('Footer Copyright Info', 'banko'),
        'id'        => 'banko_copyright',
        'desc'      => esc_html__('Insert your copyright style', 'banko'),
		'icon'		=> 'el el-circle-arrow-right',
        'subsection' => true,
        'fields'    => array(
                array(
                    'id'        => 'banko_footer_copyright_style',
                    'type'      => 'select',
                    'title'     => esc_html__('Copyright Style Layout', 'banko'),
                    'customizer_only'   => false,
                    'options'   => array(
                        'copy_s1' => esc_html__('Copyright Text Style','banko'),
                        'copy_s2' => esc_html__('Copyright Text and Right Menu','banko'),
                        'copy_s3' => esc_html__('Copyright Text and Left Menu','banko'),
                        'copy_s4' => esc_html__('Copyright Text and Social Icon','banko'),
                    ),
                    'default'   => 'copy_s2'
                ),		
                array(
                    'id'        => 'banko_copyright_text',
                    'type'      => 'editor',
                    'title'     => esc_html__('Copyright information', 'banko'),
                    'subtitle'  => esc_html__('HTML tags allowed: a, br, em, strong', 'banko'),
                    'default'	=> esc_html__('Copyright &copy; banko all rights reserved.', 'banko'),
                    'args'      => array(
                        'teeny'            => true,
                        'textarea_rows'    => 5,
                        'media_buttons' => false,
                    )
                ),
                array(								
                    'id'        => 'banko_copyright_text_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Copyright Text Color', 'banko'),
                    'default'  => '',
					'output'    => array(
					'color' => '.copy-right-text p,.footer-menu ul li a'
					)
                ),
                array(								
                    'id'        => 'banko_copyright_text_hover_color',
                    'type'      => 'color',
                    'title'     => esc_html__('Copyright Text Hover Color', 'banko'),
                    'default'  => '',
					'output'    => array(
					'color' => '.copy-right-text a, .footer-menu ul li a:hover'
					)
                ),				
                array(								
                    'id'        => 'banko_copyright_bg_color',
                    'type'      => 'background',
                    'title'     => esc_html__('Copyright Section BG Color', 'banko'),
                    'default'  => '',
                    'output'    => array('
					.footer-bottom
					'),
					'default'  => array(
						'background-color' => '',
					)					
                ),						
				array(
					'id'             => 'banko_copyright_section_spacing',
					'type'           => 'spacing',
					'output'         => array('.footer-bottom'),
					'mode'           => 'padding',
					'units'          => array('em', 'px'),
					'units_extended' => 'false',
					'title'          => esc_html__('Padding Option', 'banko'),
					'subtitle'       => esc_html__('Allow your users to choose the spacing padding they want.', 'banko'),
					'desc'           => esc_html__('You can enable or disable any piece of this field. Top, Right, Bottom, Left, or Units.', 'banko'),
					'default'            => array(
						'padding-top'     => '', 
						'padding-right'   => '', 
						'padding-bottom'  => '', 
						'padding-left'    => '',
						'units'          => 'px', 
					)
				),				
            ),
    ) );
			
/* ========================
    END banko FOOTER FIELD
=========================*/	
    Redux::setSection( $opt_name, array(
        'icon'            => 'el el-list-alt',
        'title'           => esc_html__( 'Customizer Only', 'banko' ),
        'desc'            => esc_html__( 'This Section should be visible only in Customizer', 'banko' ),
        'customizer_only' => true,
        'fields'          => array(
            array(
                'id'              => 'opt-customizer-only',
                'type'            => 'select',
                'title'           => esc_html__( 'Customizer Only Option', 'banko' ),
                'subtitle'        => esc_html__( 'The subtitle is NOT visible in customizer', 'banko' ),
                'desc'            => esc_html__( 'The field desc is NOT visible in customizer.', 'banko' ),
                'customizer_only' => true,
                //Must provide key => value pairs for select options
                'options'         => array(
                    '1' => esc_html__('Opt 1','banko'),
                    '2' => esc_html__('Opt 2','banko'),
                    '3' => esc_html__('Opt 3','banko')
                ),
                'default'         => '2'
            ),
        )
    ) );   	 	 
    /*
     * <--- END SECTIONS
     */
