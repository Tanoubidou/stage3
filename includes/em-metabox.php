<?php

add_action( 'cmb2_admin_init', 'banko_metabox' );
/*
**	Setting up custom fields for custom post types belongs to fantasic child theme for banko
*/ 

if ( !function_exists('banko_metabox') ) {
	function banko_metabox() {
		$prefix = '_banko_';

	//header metabox
 	$page_heading_style = new_cmb2_box( array(
	'id'            => $prefix . 'em_header_style_option',
	'title'         => esc_html__( 'Header Style Option', 'banko' ),
	'object_types'  => array( 'page' ), // Post type
	'priority'   => 'high',
	) );
	

	
		$page_heading_style->add_field( array(
			'name'    => esc_html__('Top Menu Style ','banko'),
			'id'      => $prefix . 'banko_header_topa',
			'type'    => 'radio_inline',
			'options' => array(
			'1' => esc_html__( 'Show Top Menu This Page', 'banko' ),
			'2'   => esc_html__( 'Hide Top Menu This Page', 'banko' ),
			),
			'default' =>'2',
		) );
		$page_heading_style->add_field( array(
			'name'    => esc_html__('Header Style','banko'),
			'id'      => $prefix . 'banko_header_style',
			'show_option_none' => true,
			'desc'   => esc_html__( 'Note: When you select 1-1,3,4,6 style menu, that time you need to set top bar menu, otherwise you can not find our real menu style.', 'banko' ), 			
			'type'    => 'select',
			'options' => array(
				'1' => esc_html__( 'Default Header Menu', 'banko' ),				
				'2' => esc_html__( 'Header Menu Transparent', 'banko' ),					
				'3' => esc_html__( 'Header Style Two', 'banko' ),			
				'4' => esc_html__( 'Header OnePage Menu', 'banko' ),			
			),
			'default' =>'1',
		) );	
		
		  //page metabox
		  $page_breadcrumb = new_cmb2_box( array(
		   'id'            => $prefix . 'pageid1',
		   'title'         => esc_html__( 'Breadcumb Option', 'banko' ),
		   'object_types'  => array( 'post','page','em_event','em_portfolio' ), // Post type
		   'priority'   => 'high',
		  ) );
		  
		  $page_breadcrumb->add_field( array(
		   'name'    => esc_html__('Page Title','banko'),
		   'id'      => $prefix . 'ptitle',
		   'type'    => 'radio_inline',
		   'options' => array(
			'ptitles' => esc_html__( 'Hide Title', 'banko' ),
			'ptitleh'   => esc_html__( 'Show Title', 'banko' ),
		   ),
		   'default' =>'ptitleh',
		  ) );   
		  
		  
		$page_breadcrumb->add_field( array(
			'name'    => esc_html__('Breadcrumb','banko'),
			'id'      => $prefix . 'breadcrumbs',
			'type'    => 'radio_inline',
			'options' => array(
			'0' => esc_html__( 'Show breadcrumb', 'banko' ),
			'1'   => esc_html__( 'Hide breadcrumb', 'banko' ),
			),
			'default' =>0,
		) );
		$page_breadcrumb->add_field( array(
			'name'    => esc_html__('Breadcrumb Title','banko'),
			'id'      => $prefix . 'btitle',
			'type'    => 'radio_inline',
			'options' => array(
			'btitles' => esc_html__( 'Show Title', 'banko' ),
			'btitleh'   => esc_html__( 'Hide Title', 'banko' ),
			),
			'default' =>'btitleh',
		) );    
		$page_breadcrumb->add_field(array(
			'name' => esc_html__( 'Page Breadcrumb Image', 'banko' ),
			'id'   => $prefix .'pageimagess',
			'desc'       => esc_html__( 'insert image here', 'banko' ),  
			'type' => 'file',
		) );  
		$page_breadcrumb->add_field( array(
			'name'             => esc_html__('Text Align','banko'),
			'desc'             => esc_html__('Select an option','banko'),
			'id'   => $prefix .'page_text_align',
			'type'             => 'select',
			'show_option_none' => true,
			'default'          => 'text-center',
			'options'          => array(
			'text-left' => esc_html__( 'Align Left', 'banko' ),
			'text-center'   => esc_html__( 'Align Middle', 'banko' ),
			'text-right'     => esc_html__( 'Alige Right', 'banko' ),
			),
		) );
		$page_breadcrumb->add_field( array(
			'name'             => esc_html__('Text Transform','banko'),
			'desc'             => esc_html__('Select an option','banko'),
			'id'   => $prefix .'page_text_transform',
			'type'             => 'select',
			'show_option_none' => true,
			'default'          => 'ccase',
			'options'          => array(
			'lcase' => esc_html__( 'Transform lowercase', 'banko' ),
			'ucase'   => esc_html__( 'Transform uppercase', 'banko' ),
			'ccase'     => esc_html__( 'Transform capitalize', 'banko' ),
			),
		) );	
		

		//Testimonial
		$testimonial = new_cmb2_box( array(
			'id'            => $prefix . 'em_testimonial',
			'title'         => esc_html__( 'Testimonial Option', 'banko' ),
			'object_types'  => array( 'em_testimonial' ), // Post type
			'priority'   => 'high',
		) );
		$testimonial->add_field( array(
			'name'       => esc_html__( 'Degignation', 'banko' ),
			'desc'       => esc_html__( 'insert Degignation here', 'banko' ),
			'id'         => $prefix . 'testi_deg',
			'type'       => 'text',
		) );	
			
							
		//Case Study
			$casestudy = new_cmb2_box( array(
				'id'            => $prefix . 'em_case_study',
				'title'         => esc_html__( 'Case Study Option', 'banko' ),
				'object_types'  => array( 'em_case_study' ), // Post type
				'priority'   => 'high',
			) );
				$casestudy->add_field( array(
					'name'       => esc_html__( 'Case Study Description', 'banko' ),
					'desc'       => esc_html__( 'Description', 'banko' ),
					'id'         => $prefix . 'casedesc',
					'type'       => 'wysiwyg',
				) );

			$casestudy->add_field( array(
					'name' => 'oEmbed',
					'id'   => 'embed',
					'type' => 'oembed',
				) );
			$casestudy->add_field( array(
				'name'    => 'Icon Field',
				'desc'    => 'Upload an image or enter an URL.',
				'id'      => 'icon_field',
				'type'    => 'file',
			) );
					
			//===================================
			//Portfolio Metaboxes
			//===================================  

			$portfolio = new_cmb2_box( array(
				'id'            => $prefix . 'portfolio',
				'title'         => esc_html__( 'Portfolio Option', 'banko' ),
				'object_types'  => array( 'em_portfolio', ), // Post type
				'priority'   => 'high',
			) );
			// $portfolio->add_field( array(
			// 	'name'       => esc_html__( 'Portfolio Description', 'banko' ),
			// 	'desc'       => esc_html__( 'Description', 'banko' ),
			// 	'id'         => $prefix . 'portdesc',
			// 	'type'       => 'wysiwyg',
			// ) );				
			
			$portfolio->add_field( array(
				'name'    => esc_html__('Show/Hide All Option','banko'),			  
				'id'      => $prefix . 'saloption',
				'type'    => 'radio_inline',
				'options' => array(
					'm_alshow' => esc_html__( 'Show', 'banko' ),
					'm_alhide'   => esc_html__( 'Hide', 'banko' ),
				),
				'default' =>'m_alhide',
			) );
			$portfolio->add_field( array(
				'name'       => esc_html__( 'Portfolio Description', 'banko' ),
				'desc'       => esc_html__( 'Description', 'banko' ),
				'id'         => 'pdetails',
				'type'       => 'wysiwyg',
			) );
			$portfolio->add_field( array(
				'name' => 'Test Money',
				'desc' => 'field description (optional)',
				'id' => 'hotel_money',
				'type' => 'text_money',
			) );
			$portfolio->add_field( array(
				'name'    => esc_html__('Show/Hide Popup Image','banko'),			  
				'id'      => $prefix . 'siimagepop',
				'type'    => 'radio_inline',
				'options' => array(
					'm_ishow' => esc_html__( 'Show', 'banko' ),
					'm_ihide'   => esc_html__( 'Hide', 'banko' ),
				),
				'default' =>'m_ishow',
			) );
			$portfolio->add_field( array(
				'name'    => esc_html__('Show/Hide Link Page','banko'),			  
				'id'      => $prefix . 'sllink',
				'type'    => 'radio_inline',
				'options' => array(
					'm_lshow' => esc_html__( 'Show', 'banko' ),
					'm_lhide'   => esc_html__( 'Hide', 'banko' ),
				),
				'default' =>'m_lshow',
			) );				  
			$portfolio->add_field( array(
				'name'    => esc_html__('Show/Hide Popup Youtube','banko'),			  
				'id'      => $prefix . 'shyoutub',
				'type'    => 'radio_inline',
				'options' => array(
					'm_yshow' => esc_html__( 'Show', 'banko' ),
					'm_yhide'   => esc_html__( 'Hide', 'banko' ),
				),
				'default' =>'m_yhide',
			) );				
			$portfolio->add_field( array(
				'name'       => esc_html__( 'Youtube Video', 'banko' ),
				'desc'       => esc_html__( 'insert video link. ex-https://youtu.be/OJ9ejTy4J98', 'banko' ),
				'id'         => $prefix . 'pyoutube',
				'type'       => 'text_url',
			) );
			$portfolio->add_field( array(
				'name'    => esc_html__('Show/Hide Popup Vimeo','banko'),			  
				'id'      => $prefix . 'svvimeo',
				'type'    => 'radio_inline',
				'options' => array(
					'm_vshow' => esc_html__( 'Show', 'banko' ),
					'm_vhide'   => esc_html__( 'Hide', 'banko' ),
				),
				'default' =>'m_vhide',
			) );				   
			$portfolio->add_field( array(
				'name'       => esc_html__( 'Vimeo Video', 'banko' ),
				'desc'       => esc_html__( 'insert video link. ex-https://youtu.be/OJ9ejTy4J98', 'banko' ),
				'id'         => $prefix . 'pvimeo',
				'type'       => 'text_url',
			) );		   

			$portfolio->add_field( array(
				'name'    => esc_html__('Select Multi Gellary','banko'),			  
				'id'      => $prefix . 'm_g_image_pop',
				'type'    => 'radio_inline',
				'options' => array(
					'm_gshow' => esc_html__( 'Show', 'banko' ),
					'm_ghide'   => esc_html__( 'Hide', 'banko' ),
				),
				'default' =>'m_ghide',
			) );				   
			$portfolio->add_field( array(
				'name'       => esc_html__( 'Multiple Gellary Image', 'banko' ),
				'desc'       => esc_html__( 'insert multiple gellary image here for single page', 'banko' ),
				'id'         => $prefix . 'pgellaryu',
				'type'       => 'file_list',
			) );
			$portfolio->add_field( array(
				'name'    => esc_html__('Show/Hide Title','banko'),			  
				'id'      => $prefix . 'pshow_title',
				'type'    => 'radio_inline',
				'options' => array(
					'ptitle_show' => esc_html__( 'Show', 'banko' ),
					'ptitle_hide'   => esc_html__( 'Hide', 'banko' ),
				),
				'default' =>'ptitle_show',
			) );					
			$portfolio->add_field( array(
				'name'    => esc_html__('Show/Hide Category','banko'),			  
				'id'      => $prefix . 'pshow_cat',
				'type'    => 'radio_inline',
				'options' => array(
					'pcat_show' => esc_html__( 'Show', 'banko' ),
					'pcat_hide'   => esc_html__( 'Hide', 'banko' ),
				),
				'default' =>'pcat_show',
			) );

	//Product
			$product = new_cmb2_box( array(
				'id'            => $prefix . 'em_product_post',
				'title'         => esc_html__( 'Product Option', 'banko' ),
			'object_types'  => array( 'em_product_post' ), // Post type
			'priority'   => 'high',
		) );
			$product->add_field( array(
				'name' => __( 'Website URL', 'banko' ),
				'id'   => 'facebook',
				'type' => 'text_url',
			) );
			$product->add_field( array(
				'name'       => esc_html__( 'Product  Description', 'banko' ),
				'desc'       => esc_html__( 'Description', 'banko' ),
				'id'         => 'dreamit_product',
				'type'       => 'wysiwyg',
			) );
			$product->add_field( array(
				'name'    => 'Icon Field',
				'desc'    => 'Upload an image or enter an URL.',
				'id'      => 'icon_field',
				'type'    => 'file',
			) );

			$product->add_field( array(
				'name' => 'Test Money',
				'desc' => 'field description (optional)',
				'id' => 'dreamit_money',
				'type' => 'text_money',
			) );
			
		//curser metabox
			  $page_curser_style = new_cmb2_box( array(
			  	'id'            => $prefix . 'em_curser_style_option',
			  	'title'         => esc_html__( 'Curser Style Option', 'banko' ),
				'object_types'  => array( 'post','page','em_event','em_portfolio' ), // Post type
					'priority'   => 'high',
				) );

			  $page_curser_style->add_field( array(
			  	'name'    => esc_html__('Curser Style ','banko'),
			  	'id'      => $prefix . 'banko_Curser_topa',
			  	'type'    => 'radio_inline',
			  	'options' => array(
			  		'1' => esc_html__( 'Show Curser This Page', 'banko' ),
			  		'2'   => esc_html__( 'Hide Curser This Page', 'banko' ),
			  	),
			  	'default' =>'1',
			  ) );

//===================================
//Pricing table metabox
//===================================
		$pricing = new_cmb2_box( array(
			'id'            => $prefix . 'pricing',
			'title'         => esc_html__( 'Price Option', 'banko' ),
			'object_types'  => array( 'em_pricing', ), // Post type
			'priority'   => 'high',
		) );
				$pricing->add_field( array(
					'name'       => esc_html__( 'Price Currency', 'banko' ),
					'desc'       => esc_html__( 'insert Currency here e.g $', 'banko' ),
					'id'         => $prefix . 'currency',
					'type'       => 'text',
				) );	
				$pricing->add_field( array(
					'name'       => esc_html__( 'Price Amount', 'banko' ),
					'desc'       => esc_html__( 'insert Amount here', 'banko' ),
					'id'         => $prefix . 'price_amount',
					'type'       => 'text',
				) );	
				$pricing->add_field( array(
					'name'       => esc_html__( 'Price Delay', 'banko' ),
					'desc'       => esc_html__( 'insert Year, Month, Week or Day here', 'banko' ),
					'id'         => $prefix . 'day',
					'type'       => 'text',
				) );						
				$pricing->add_field( array(
					'name'       => esc_html__( 'pricing content', 'banko' ),
					'desc'       => esc_html__( 'insert pricing Item', 'banko' ),
					'id'         => $prefix . 'pricing_item_loop',
					'type'       => 'text',
					'repeatable'      => true,
				) );
				$pricing->add_field( array(
					'name' => esc_html__( 'Button Text', 'banko' ),
					'desc' => esc_html__( 'Insert Text Here', 'banko' ),
					'id'   => $prefix . 'button_text',
					'type' => 'text',
				) );					
				$pricing->add_field( array(
					'name' => esc_html__( 'Button Link', 'banko' ),
					'desc' => esc_html__( 'Insert register Link', 'banko' ),
					'id'   => $prefix . 'button_link',
					'type' => 'text_url',
				) );
				$pricing->add_field( array(
					'name' => esc_html__( 'Active Class', 'banko' ),
					'desc' => esc_html__( 'Add Active Class here "active"', 'banko' ),
					'id'   => $prefix . 'active',
					'type' => 'text',
				) );

				
				
		//post tab metabox
			$emtab = new_cmb2_box( array(
				'id'            => $prefix . 'em_tab',
				'title'         => esc_html__( 'Tab Option', 'banko' ),
				'object_types'  => array( 'em_tab' ), // Post type
				'priority'   => 'high',
			) );

				$emtab->add_field( array(
					'name'       => esc_html__( 'Tab Menu Name', 'banko' ),
					'desc'       => esc_html__( 'insert tab menu here', 'banko' ),
					'id'         => $prefix . 'em_tab_menu',
					'type'       => 'text',
				) );					
									
				$emtab->add_field(array(
					'name' => esc_html__( 'Tab Menu Image', 'banko' ),
					'id'   => $prefix .'em_tab_image',
					'desc'       => esc_html__( 'insert image here', 'banko' ),  
					'type' => 'file',
				) );
				$emtab->add_field( array(
					'name'       => esc_html__( 'Tab Menu Active', 'banko' ),
					'desc'       => esc_html__( 'must be set "active in" class into one post from all post, for active tab item', 'banko' ),
					'id'         => $prefix . 'em_tab_active',
					'type'       => 'text',
				) );
				$emtab->add_field( array(
					'name'       => esc_html__( 'Tab Icon Name', 'banko' ),
					'desc'       => esc_html__( 'Type Your favorite Font awesome Icon name', 'banko' ),
					'id'         => $prefix . 'em_tab_icon',
					'type'       => 'text',
				) );
				
					
				
				
								
//slider table metabox
	$slider = new_cmb2_box( array(
		'id'            => $prefix . 'banko_slider',
		'title'         => esc_html__( 'Slider Option', 'banko' ),
		'object_types'  => array( 'em_slider', ), // Post type
		'priority'   => 'high',
	) );
	
	
			$slider->add_field( array(
				'name'       => esc_html__( 'Title', 'banko' ),
				'desc'       => esc_html__( 'insert title here. for highlight text use <span> ex-<span>Design</span>', 'banko' ),
				'id'         => $prefix . 'em_slide_title',
				'type'       => 'textarea_small',
			) );

			$slider->add_field( array(
				'name'    => esc_html__('Title Animate','banko'),
				'id'      => $prefix . 'em_aimate_title',
				'show_option_none' => true,					
				'type'    => 'select',
				'options' => array(
					'bounceIn' => esc_html__( 'bounceIn', 'banko' ),				
					'bounceInDown' => esc_html__( 'bounceInDown', 'banko' ),				
					'bounceInLeft' => esc_html__( 'bounceInLeft', 'banko' ),				
					'bounceInRight' => esc_html__( 'bounceInRight', 'banko' ),				
					'bounceInUp' => esc_html__( 'bounceInUp', 'banko' ),				
					'fadeIn' => esc_html__( 'fadeIn', 'banko' ),				
					'fadeInDown' => esc_html__( 'fadeInDown', 'banko' ),				
					'fadeInDownBig' => esc_html__( 'fadeInDownBig', 'banko' ),				
					'fadeInLeft' => esc_html__( 'fadeInLeft', 'banko' ),				
					'fadeInLeftBig' => esc_html__( 'fadeInLeftBig', 'banko' ),				
					'fadeInRight' => esc_html__( 'fadeInRight', 'banko' ),				
					'fadeInRightBig' => esc_html__( 'fadeInRightBig', 'banko' ),				
					'fadeInUp' => esc_html__( 'fadeInUp', 'banko' ),				
					'fadeInUpBig' => esc_html__( 'fadeInUpBig', 'banko' ),				
					'rotateIn' => esc_html__( 'rotateIn', 'banko' ),				
					'rotateInDownLeft' => esc_html__( 'rotateInDownLeft', 'banko' ),				
					'rotateInDownRight' => esc_html__( 'rotateInDownRight', 'banko' ),				
					'rotateInUpLeft' => esc_html__( 'rotateInUpLeft', 'banko' ),				
					'rotateInUpRight' => esc_html__( 'rotateInUpRight', 'banko' ),				
					'rollIn' => esc_html__( 'rollIn', 'banko' ),				
					'zoomIn' => esc_html__( 'zoomIn', 'banko' ),				
					'zoomInDown' => esc_html__( 'zoomInDown', 'banko' ),				
					'zoomInLeft' => esc_html__( 'zoomInLeft', 'banko' ),				
					'zoomInRight' => esc_html__( 'zoomInRight', 'banko' ),				
					'zoomInUp' => esc_html__( 'zoomInUp', 'banko' ),				
					'slideInDown' => esc_html__( 'slideInDown', 'banko' ),				
					'slideInLeft' => esc_html__( 'slideInLeft', 'banko' ),				
					'slideInRight' => esc_html__( 'slideInRight', 'banko' ),				
					'slideInUp' => esc_html__( 'slideInUp', 'banko' ),				
				),
				'default' =>'slideInRight',
			) );
			

			$slider->add_field( array(
				'name'    => esc_html__('Title Animate Duration','banko'),
				'id'      => $prefix . 'em_durations_title',
				'show_option_none' => false,					
				'type'    => 'select',
				'options' => array(
					'0.1' => esc_html__( 'point 1s', 'banko' ),							
					'0.2' => esc_html__( 'point 2s', 'banko' ),							
					'0.3' => esc_html__( 'point 3s', 'banko' ),							
					'0.4' => esc_html__( 'point 4s', 'banko' ),							
					'0.5' => esc_html__( 'point 5s', 'banko' ),							
					'0.6' => esc_html__( 'point 6s', 'banko' ),							
					'0.7' => esc_html__( 'point 7s', 'banko' ),							
					'0.8' => esc_html__( 'point 8s', 'banko' ),							
					'0.9' => esc_html__( 'point 9s', 'banko' ),							
					'1.2' => esc_html__( '1 point 2s', 'banko' ),							
					'1.3' => esc_html__( '1 point 3s', 'banko' ),							
					'1.4' => esc_html__( '1 point 4s', 'banko' ),							
					'1.5' => esc_html__( '1 point 5s', 'banko' ),							
					'1.8' => esc_html__( '1 point 8s', 'banko' ),							
					'2' => esc_html__( '2s', 'banko' ),							
					'2.2' => esc_html__( '2 point 2s', 'banko' ),							
					'2.3' => esc_html__( '2 point 5s', 'banko' ),							
					'3' => esc_html__( '3s', 'banko' ),							
				),
				'default' =>'2',
			) );
			$slider->add_field( array(
				'name'    => esc_html__('Title Animate Delay','banko'),
				'id'      => $prefix . 'em_dealy_title',
				'show_option_none' => false,					
				'type'    => 'select',
				'options' => array(
					'0' => esc_html__( 'point 0s', 'banko' ),							
					'0.1' => esc_html__( 'point 1s', 'banko' ),							
					'0.2' => esc_html__( 'point 2s', 'banko' ),							
					'0.3' => esc_html__( 'point 3s', 'banko' ),							
					'0.4' => esc_html__( 'point 4s', 'banko' ),							
					'0.5' => esc_html__( 'point 5s', 'banko' ),							
					'0.6' => esc_html__( 'point 6s', 'banko' ),							
					'0.7' => esc_html__( 'point 7s', 'banko' ),							
					'0.8' => esc_html__( 'point 8s', 'banko' ),							
					'0.9' => esc_html__( 'point 9s', 'banko' ),							
					'1.2' => esc_html__( '1 point 2s', 'banko' ),							
					'1.3' => esc_html__( '1 point 3s', 'banko' ),							
					'1.4' => esc_html__( '1 point 4s', 'banko' ),							
					'1.5' => esc_html__( '1 point 5s', 'banko' ),							
					'1.8' => esc_html__( '1 point 8s', 'banko' ),							
					'2' => esc_html__( '2s', 'banko' ),							
					'2.2' => esc_html__( '2 point 2s', 'banko' ),							
					'2.3' => esc_html__( '2 point 5s', 'banko' ),							
					'3' => esc_html__( '3s', 'banko' ),							
				),
				'default' =>'0',
			) );		

		
		
		
			
			$slider->add_field( array(
				'name'       => esc_html__( 'Sub Title', 'banko' ),
				'desc'       => esc_html__( 'insert sub-title here. for highlight text use <span> ex-<span>website</span>', 'banko' ),
				'id'         => $prefix . 'em_slide_subtitle',
				'type'       => 'textarea_small',
			) );
			$slider->add_field( array(
				'name'    => esc_html__('Sub Title Animate','banko'),
				'id'      => $prefix . 'em_aimate_subtitle',
				'show_option_none' => true,					
				'type'    => 'select',
				'options' => array(
					'bounceIn' => esc_html__( 'bounceIn', 'banko' ),				
					'bounceInDown' => esc_html__( 'bounceInDown', 'banko' ),				
					'bounceInLeft' => esc_html__( 'bounceInLeft', 'banko' ),				
					'bounceInRight' => esc_html__( 'bounceInRight', 'banko' ),				
					'bounceInUp' => esc_html__( 'bounceInUp', 'banko' ),				
					'fadeIn' => esc_html__( 'fadeIn', 'banko' ),				
					'fadeInDown' => esc_html__( 'fadeInDown', 'banko' ),				
					'fadeInDownBig' => esc_html__( 'fadeInDownBig', 'banko' ),				
					'fadeInLeft' => esc_html__( 'fadeInLeft', 'banko' ),				
					'fadeInLeftBig' => esc_html__( 'fadeInLeftBig', 'banko' ),				
					'fadeInRight' => esc_html__( 'fadeInRight', 'banko' ),				
					'fadeInRightBig' => esc_html__( 'fadeInRightBig', 'banko' ),				
					'fadeInUp' => esc_html__( 'fadeInUp', 'banko' ),				
					'fadeInUpBig' => esc_html__( 'fadeInUpBig', 'banko' ),				
					'rotateIn' => esc_html__( 'rotateIn', 'banko' ),				
					'rotateInDownLeft' => esc_html__( 'rotateInDownLeft', 'banko' ),				
					'rotateInDownRight' => esc_html__( 'rotateInDownRight', 'banko' ),				
					'rotateInUpLeft' => esc_html__( 'rotateInUpLeft', 'banko' ),				
					'rotateInUpRight' => esc_html__( 'rotateInUpRight', 'banko' ),				
					'rollIn' => esc_html__( 'rollIn', 'banko' ),				
					'zoomIn' => esc_html__( 'zoomIn', 'banko' ),				
					'zoomInDown' => esc_html__( 'zoomInDown', 'banko' ),				
					'zoomInLeft' => esc_html__( 'zoomInLeft', 'banko' ),				
					'zoomInRight' => esc_html__( 'zoomInRight', 'banko' ),				
					'zoomInUp' => esc_html__( 'zoomInUp', 'banko' ),				
					'slideInDown' => esc_html__( 'slideInDown', 'banko' ),				
					'slideInLeft' => esc_html__( 'slideInLeft', 'banko' ),				
					'slideInRight' => esc_html__( 'slideInRight', 'banko' ),				
					'slideInUp' => esc_html__( 'slideInUp', 'banko' ),				
				),
				'default' =>'slideInRight',
			) );
			

			$slider->add_field( array(
				'name'    => esc_html__('Sub Title Animate Duration','banko'),
				'id'      => $prefix . 'em_durations_subtitle',
				'show_option_none' => false,					
				'type'    => 'select',
				'options' => array(
					'0.1' => esc_html__( 'point 1s', 'banko' ),							
					'0.2' => esc_html__( 'point 2s', 'banko' ),							
					'0.3' => esc_html__( 'point 3s', 'banko' ),							
					'0.4' => esc_html__( 'point 4s', 'banko' ),							
					'0.5' => esc_html__( 'point 5s', 'banko' ),							
					'0.6' => esc_html__( 'point 6s', 'banko' ),							
					'0.7' => esc_html__( 'point 7s', 'banko' ),							
					'0.8' => esc_html__( 'point 8s', 'banko' ),							
					'0.9' => esc_html__( 'point 9s', 'banko' ),							
					'1.2' => esc_html__( '1 point 2s', 'banko' ),							
					'1.3' => esc_html__( '1 point 3s', 'banko' ),							
					'1.4' => esc_html__( '1 point 4s', 'banko' ),							
					'1.5' => esc_html__( '1 point 5s', 'banko' ),							
					'1.8' => esc_html__( '1 point 8s', 'banko' ),							
					'2' => esc_html__( '2s', 'banko' ),							
					'2.2' => esc_html__( '2 point 2s', 'banko' ),							
					'2.3' => esc_html__( '2 point 5s', 'banko' ),							
					'3' => esc_html__( '3s', 'banko' ),							
				),
				'default' =>'2',
			) );
			$slider->add_field( array(
				'name'    => esc_html__('Sub Title Animate Delay','banko'),
				'id'      => $prefix . 'em_dealy_subtitle',
				'show_option_none' => false,					
				'type'    => 'select',
				'options' => array(
					'0' => esc_html__( 'point 0s', 'banko' ),							
					'0.1' => esc_html__( 'point 1s', 'banko' ),							
					'0.2' => esc_html__( 'point 2s', 'banko' ),							
					'0.3' => esc_html__( 'point 3s', 'banko' ),							
					'0.4' => esc_html__( 'point 4s', 'banko' ),							
					'0.5' => esc_html__( 'point 5s', 'banko' ),							
					'0.6' => esc_html__( 'point 6s', 'banko' ),							
					'0.7' => esc_html__( 'point 7s', 'banko' ),							
					'0.8' => esc_html__( 'point 8s', 'banko' ),							
					'0.9' => esc_html__( 'point 9s', 'banko' ),							
					'1.2' => esc_html__( '1 point 2s', 'banko' ),							
					'1.3' => esc_html__( '1 point 3s', 'banko' ),							
					'1.4' => esc_html__( '1 point 4s', 'banko' ),							
					'1.5' => esc_html__( '1 point 5s', 'banko' ),							
					'1.8' => esc_html__( '1 point 8s', 'banko' ),							
					'2' => esc_html__( '2s', 'banko' ),							
					'2.2' => esc_html__( '2 point 2s', 'banko' ),							
					'2.3' => esc_html__( '2 point 5s', 'banko' ),							
					'3' => esc_html__( '3s', 'banko' ),							
				),
				'default' =>'0',
			) );				
			$slider->add_field( array(
				'name'       => esc_html__( 'Content', 'banko' ),
				'desc'       => esc_html__( 'insert content here', 'banko' ),
				'id'         => $prefix . 'em_slide_textarea',
				'type'       => 'textarea',
			) );
			$slider->add_field( array(
				'name'    => esc_html__('Content Animate','banko'),
				'id'      => $prefix . 'em_aimate_content',
				'show_option_none' => true,					
				'type'    => 'select',
				'options' => array(
					'bounceIn' => esc_html__( 'bounceIn', 'banko' ),				
					'bounceInDown' => esc_html__( 'bounceInDown', 'banko' ),				
					'bounceInLeft' => esc_html__( 'bounceInLeft', 'banko' ),				
					'bounceInRight' => esc_html__( 'bounceInRight', 'banko' ),				
					'bounceInUp' => esc_html__( 'bounceInUp', 'banko' ),				
					'fadeIn' => esc_html__( 'fadeIn', 'banko' ),				
					'fadeInDown' => esc_html__( 'fadeInDown', 'banko' ),				
					'fadeInDownBig' => esc_html__( 'fadeInDownBig', 'banko' ),				
					'fadeInLeft' => esc_html__( 'fadeInLeft', 'banko' ),				
					'fadeInLeftBig' => esc_html__( 'fadeInLeftBig', 'banko' ),				
					'fadeInRight' => esc_html__( 'fadeInRight', 'banko' ),				
					'fadeInRightBig' => esc_html__( 'fadeInRightBig', 'banko' ),				
					'fadeInUp' => esc_html__( 'fadeInUp', 'banko' ),				
					'fadeInUpBig' => esc_html__( 'fadeInUpBig', 'banko' ),				
					'rotateIn' => esc_html__( 'rotateIn', 'banko' ),				
					'rotateInDownLeft' => esc_html__( 'rotateInDownLeft', 'banko' ),				
					'rotateInDownRight' => esc_html__( 'rotateInDownRight', 'banko' ),				
					'rotateInUpLeft' => esc_html__( 'rotateInUpLeft', 'banko' ),				
					'rotateInUpRight' => esc_html__( 'rotateInUpRight', 'banko' ),				
					'rollIn' => esc_html__( 'rollIn', 'banko' ),				
					'zoomIn' => esc_html__( 'zoomIn', 'banko' ),				
					'zoomInDown' => esc_html__( 'zoomInDown', 'banko' ),				
					'zoomInLeft' => esc_html__( 'zoomInLeft', 'banko' ),				
					'zoomInRight' => esc_html__( 'zoomInRight', 'banko' ),				
					'zoomInUp' => esc_html__( 'zoomInUp', 'banko' ),				
					'slideInDown' => esc_html__( 'slideInDown', 'banko' ),				
					'slideInLeft' => esc_html__( 'slideInLeft', 'banko' ),				
					'slideInRight' => esc_html__( 'slideInRight', 'banko' ),				
					'slideInUp' => esc_html__( 'slideInUp', 'banko' ),				
				),
				'default' =>'slideInRight',
			) );
			

			$slider->add_field( array(
				'name'    => esc_html__('Content Animate Duration','banko'),
				'id'      => $prefix . 'em_durations_content',
				'show_option_none' => false,					
				'type'    => 'select',
				'options' => array(
					'0.1' => esc_html__( 'point 1s', 'banko' ),							
					'0.2' => esc_html__( 'point 2s', 'banko' ),							
					'0.3' => esc_html__( 'point 3s', 'banko' ),							
					'0.4' => esc_html__( 'point 4s', 'banko' ),							
					'0.5' => esc_html__( 'point 5s', 'banko' ),							
					'0.6' => esc_html__( 'point 6s', 'banko' ),							
					'0.7' => esc_html__( 'point 7s', 'banko' ),							
					'0.8' => esc_html__( 'point 8s', 'banko' ),							
					'0.9' => esc_html__( 'point 9s', 'banko' ),							
					'1.2' => esc_html__( '1 point 2s', 'banko' ),							
					'1.3' => esc_html__( '1 point 3s', 'banko' ),							
					'1.4' => esc_html__( '1 point 4s', 'banko' ),							
					'1.5' => esc_html__( '1 point 5s', 'banko' ),							
					'1.8' => esc_html__( '1 point 8s', 'banko' ),							
					'2' => esc_html__( '2s', 'banko' ),							
					'2.2' => esc_html__( '2 point 2s', 'banko' ),							
					'2.3' => esc_html__( '2 point 5s', 'banko' ),							
					'3' => esc_html__( '3s', 'banko' ),							
				),
				'default' =>'3',
			) );
			$slider->add_field( array(
				'name'    => esc_html__('Content Animate Delay','banko'),
				'id'      => $prefix . 'em_dealy_content',
				'show_option_none' => false,					
				'type'    => 'select',
				'options' => array(
					'0' => esc_html__( 'point 0s', 'banko' ),							
					'0.1' => esc_html__( 'point 1s', 'banko' ),							
					'0.2' => esc_html__( 'point 2s', 'banko' ),							
					'0.3' => esc_html__( 'point 3s', 'banko' ),							
					'0.4' => esc_html__( 'point 4s', 'banko' ),							
					'0.5' => esc_html__( 'point 5s', 'banko' ),							
					'0.6' => esc_html__( 'point 6s', 'banko' ),							
					'0.7' => esc_html__( 'point 7s', 'banko' ),							
					'0.8' => esc_html__( 'point 8s', 'banko' ),							
					'0.9' => esc_html__( 'point 9s', 'banko' ),							
					'1.2' => esc_html__( '1 point 2s', 'banko' ),							
					'1.3' => esc_html__( '1 point 3s', 'banko' ),							
					'1.4' => esc_html__( '1 point 4s', 'banko' ),							
					'1.5' => esc_html__( '1 point 5s', 'banko' ),							
					'1.8' => esc_html__( '1 point 8s', 'banko' ),							
					'2' => esc_html__( '2s', 'banko' ),							
					'2.2' => esc_html__( '2 point 2s', 'banko' ),							
					'2.3' => esc_html__( '2 point 5s', 'banko' ),							
					'3' => esc_html__( '3s', 'banko' ),							
				),
				'default' =>'0',
			) );				
			
			$slider->add_field( array(
				'name'       => esc_html__( 'Button Text 1', 'banko' ),
				'desc'       => esc_html__( 'insert button text here', 'banko' ),
				'id'         => $prefix . 'em_slide_btn1',
				'type'       => 'text',
			) );
			$slider->add_field( array(
				'name'       => esc_html__( 'Slide Image', 'banko' ),
				'desc'       => esc_html__( 'insert single slide image here', 'banko' ),
				'id'         => $prefix . 'em_slide_img',
				'type'       => 'file',
			) );
			$slider->add_field( array(
				'name'    => esc_html__('Image Animate','banko'),
				'id'      => $prefix . 'em_aimate_image',
				'show_option_none' => true,					
				'type'    => 'select',
				'options' => array(
					'bounceIn' => esc_html__( 'bounceIn', 'banko' ),				
					'bounceInDown' => esc_html__( 'bounceInDown', 'banko' ),				
					'bounceInLeft' => esc_html__( 'bounceInLeft', 'banko' ),				
					'bounceInRight' => esc_html__( 'bounceInRight', 'banko' ),				
					'bounceInUp' => esc_html__( 'bounceInUp', 'banko' ),				
					'fadeIn' => esc_html__( 'fadeIn', 'banko' ),				
					'fadeInDown' => esc_html__( 'fadeInDown', 'banko' ),				
					'fadeInDownBig' => esc_html__( 'fadeInDownBig', 'banko' ),				
					'fadeInLeft' => esc_html__( 'fadeInLeft', 'banko' ),				
					'fadeInLeftBig' => esc_html__( 'fadeInLeftBig', 'banko' ),				
					'fadeInRight' => esc_html__( 'fadeInRight', 'banko' ),				
					'fadeInRightBig' => esc_html__( 'fadeInRightBig', 'banko' ),				
					'fadeInUp' => esc_html__( 'fadeInUp', 'banko' ),				
					'fadeInUpBig' => esc_html__( 'fadeInUpBig', 'banko' ),				
					'rotateIn' => esc_html__( 'rotateIn', 'banko' ),				
					'rotateInDownLeft' => esc_html__( 'rotateInDownLeft', 'banko' ),				
					'rotateInDownRight' => esc_html__( 'rotateInDownRight', 'banko' ),				
					'rotateInUpLeft' => esc_html__( 'rotateInUpLeft', 'banko' ),				
					'rotateInUpRight' => esc_html__( 'rotateInUpRight', 'banko' ),				
					'rollIn' => esc_html__( 'rollIn', 'banko' ),				
					'zoomIn' => esc_html__( 'zoomIn', 'banko' ),				
					'zoomInDown' => esc_html__( 'zoomInDown', 'banko' ),				
					'zoomInLeft' => esc_html__( 'zoomInLeft', 'banko' ),				
					'zoomInRight' => esc_html__( 'zoomInRight', 'banko' ),				
					'zoomInUp' => esc_html__( 'zoomInUp', 'banko' ),				
					'slideInDown' => esc_html__( 'slideInDown', 'banko' ),				
					'slideInLeft' => esc_html__( 'slideInLeft', 'banko' ),				
					'slideInRight' => esc_html__( 'slideInRight', 'banko' ),				
					'slideInUp' => esc_html__( 'slideInUp', 'banko' ),				
				),
				'default' =>'slideInRight',
			) );
			

			$slider->add_field( array(
				'name'    => esc_html__('Image Animate Duration','banko'),
				'id'      => $prefix . 'em_durations_image',
				'show_option_none' => false,					
				'type'    => 'select',
				'options' => array(
					'0.1' => esc_html__( 'point 1s', 'banko' ),							
					'0.2' => esc_html__( 'point 2s', 'banko' ),							
					'0.3' => esc_html__( 'point 3s', 'banko' ),							
					'0.4' => esc_html__( 'point 4s', 'banko' ),							
					'0.5' => esc_html__( 'point 5s', 'banko' ),							
					'0.6' => esc_html__( 'point 6s', 'banko' ),							
					'0.7' => esc_html__( 'point 7s', 'banko' ),							
					'0.8' => esc_html__( 'point 8s', 'banko' ),							
					'0.9' => esc_html__( 'point 9s', 'banko' ),							
					'1.2' => esc_html__( '1 point 2s', 'banko' ),							
					'1.3' => esc_html__( '1 point 3s', 'banko' ),							
					'1.4' => esc_html__( '1 point 4s', 'banko' ),							
					'1.5' => esc_html__( '1 point 5s', 'banko' ),							
					'1.8' => esc_html__( '1 point 8s', 'banko' ),							
					'2' => esc_html__( '2s', 'banko' ),							
					'2.2' => esc_html__( '2 point 2s', 'banko' ),							
					'2.3' => esc_html__( '2 point 5s', 'banko' ),							
					'3' => esc_html__( '3s', 'banko' ),							
				),
				'default' =>'2',
			) );
			$slider->add_field( array(
				'name'    => esc_html__('Image Animate Delay','banko'),
				'id'      => $prefix . 'em_dealy_image',
				'show_option_none' => false,					
				'type'    => 'select',
				'options' => array(
					'0' => esc_html__( 'point 0s', 'banko' ),							
					'0.1' => esc_html__( 'point 1s', 'banko' ),							
					'0.2' => esc_html__( 'point 2s', 'banko' ),							
					'0.3' => esc_html__( 'point 3s', 'banko' ),							
					'0.4' => esc_html__( 'point 4s', 'banko' ),							
					'0.5' => esc_html__( 'point 5s', 'banko' ),							
					'0.6' => esc_html__( 'point 6s', 'banko' ),							
					'0.7' => esc_html__( 'point 7s', 'banko' ),							
					'0.8' => esc_html__( 'point 8s', 'banko' ),							
					'0.9' => esc_html__( 'point 9s', 'banko' ),							
					'1.2' => esc_html__( '1 point 2s', 'banko' ),							
					'1.3' => esc_html__( '1 point 3s', 'banko' ),							
					'1.4' => esc_html__( '1 point 4s', 'banko' ),							
					'1.5' => esc_html__( '1 point 5s', 'banko' ),							
					'1.8' => esc_html__( '1 point 8s', 'banko' ),							
					'2' => esc_html__( '2s', 'banko' ),							
					'2.2' => esc_html__( '2 point 2s', 'banko' ),							
					'2.3' => esc_html__( '2 point 5s', 'banko' ),							
					'3' => esc_html__( '3s', 'banko' ),							
				),
				'default' =>'0',
			) );		

			
			
			$slider->add_field( array(
				'name'       => esc_html__( 'Button url 1', 'banko' ),
				'desc'       => esc_html__( 'insert button text url here', 'banko' ),
				'id'         => $prefix . 'em_slide_btn1utl',
				'type'       => 'text_url',
			) );			
			$slider->add_field( array(
				'name'       => esc_html__( 'Button Text 2', 'banko' ),
				'desc'       => esc_html__( 'insert button text here', 'banko' ),
				'id'         => $prefix . 'em_slide_btn2',
				'type'       => 'text',
			) );
			$slider->add_field( array(
				'name'       => esc_html__( 'Button url 2', 'banko' ),
				'desc'       => esc_html__( 'insert button text url here', 'banko' ),
				'id'         => $prefix . 'em_slide_btn2url',
				'type'       => 'text_url',
			) );
			$slider->add_field( array(
				'name'    => esc_html__('Button Animate','banko'),
				'id'      => $prefix . 'em_aimate_btn',
				'show_option_none' => true,					
				'type'    => 'select',
				'options' => array(
					'bounceIn' => esc_html__( 'bounceIn', 'banko' ),				
					'bounceInDown' => esc_html__( 'bounceInDown', 'banko' ),				
					'bounceInLeft' => esc_html__( 'bounceInLeft', 'banko' ),				
					'bounceInRight' => esc_html__( 'bounceInRight', 'banko' ),				
					'bounceInUp' => esc_html__( 'bounceInUp', 'banko' ),				
					'fadeIn' => esc_html__( 'fadeIn', 'banko' ),				
					'fadeInDown' => esc_html__( 'fadeInDown', 'banko' ),				
					'fadeInDownBig' => esc_html__( 'fadeInDownBig', 'banko' ),				
					'fadeInLeft' => esc_html__( 'fadeInLeft', 'banko' ),				
					'fadeInLeftBig' => esc_html__( 'fadeInLeftBig', 'banko' ),				
					'fadeInRight' => esc_html__( 'fadeInRight', 'banko' ),				
					'fadeInRightBig' => esc_html__( 'fadeInRightBig', 'banko' ),				
					'fadeInUp' => esc_html__( 'fadeInUp', 'banko' ),				
					'fadeInUpBig' => esc_html__( 'fadeInUpBig', 'banko' ),				
					'rotateIn' => esc_html__( 'rotateIn', 'banko' ),				
					'rotateInDownLeft' => esc_html__( 'rotateInDownLeft', 'banko' ),				
					'rotateInDownRight' => esc_html__( 'rotateInDownRight', 'banko' ),				
					'rotateInUpLeft' => esc_html__( 'rotateInUpLeft', 'banko' ),				
					'rotateInUpRight' => esc_html__( 'rotateInUpRight', 'banko' ),				
					'rollIn' => esc_html__( 'rollIn', 'banko' ),				
					'zoomIn' => esc_html__( 'zoomIn', 'banko' ),				
					'zoomInDown' => esc_html__( 'zoomInDown', 'banko' ),				
					'zoomInLeft' => esc_html__( 'zoomInLeft', 'banko' ),				
					'zoomInRight' => esc_html__( 'zoomInRight', 'banko' ),				
					'zoomInUp' => esc_html__( 'zoomInUp', 'banko' ),				
					'slideInDown' => esc_html__( 'slideInDown', 'banko' ),				
					'slideInLeft' => esc_html__( 'slideInLeft', 'banko' ),				
					'slideInRight' => esc_html__( 'slideInRight', 'banko' ),				
					'slideInUp' => esc_html__( 'slideInUp', 'banko' ),				
				),
				'default' =>'bounceInUp',
			) );
			

			$slider->add_field( array(
				'name'    => esc_html__('Button Animate Duration','banko'),
				'id'      => $prefix . 'em_durations_btn',
				'show_option_none' => false,					
				'type'    => 'select',
				'options' => array(
					'0.1' => esc_html__( 'point 1s', 'banko' ),							
					'0.2' => esc_html__( 'point 2s', 'banko' ),							
					'0.3' => esc_html__( 'point 3s', 'banko' ),							
					'0.4' => esc_html__( 'point 4s', 'banko' ),							
					'0.5' => esc_html__( 'point 5s', 'banko' ),							
					'0.6' => esc_html__( 'point 6s', 'banko' ),							
					'0.7' => esc_html__( 'point 7s', 'banko' ),							
					'0.8' => esc_html__( 'point 8s', 'banko' ),							
					'0.9' => esc_html__( 'point 9s', 'banko' ),							
					'1.2' => esc_html__( '1 point 2s', 'banko' ),							
					'1.3' => esc_html__( '1 point 3s', 'banko' ),							
					'1.4' => esc_html__( '1 point 4s', 'banko' ),							
					'1.5' => esc_html__( '1 point 5s', 'banko' ),							
					'1.8' => esc_html__( '1 point 8s', 'banko' ),							
					'2' => esc_html__( '2s', 'banko' ),							
					'2.2' => esc_html__( '2 point 2s', 'banko' ),							
					'2.3' => esc_html__( '2 point 5s', 'banko' ),							
					'3' => esc_html__( '3s', 'banko' ),							
				),
				'default' =>'3',
			) );
			$slider->add_field( array(
				'name'    => esc_html__('Button Animate Delay','banko'),
				'id'      => $prefix . 'em_dealy_btn',
				'show_option_none' => true,					
				'type'    => 'select',
				'options' => array(
					'0' => esc_html__( 'point 0s', 'banko' ),							
					'0.1' => esc_html__( 'point 1s', 'banko' ),							
					'0.2' => esc_html__( 'point 2s', 'banko' ),							
					'0.3' => esc_html__( 'point 3s', 'banko' ),							
					'0.4' => esc_html__( 'point 4s', 'banko' ),							
					'0.5' => esc_html__( 'point 5s', 'banko' ),							
					'0.6' => esc_html__( 'point 6s', 'banko' ),							
					'0.7' => esc_html__( 'point 7s', 'banko' ),							
					'0.8' => esc_html__( 'point 8s', 'banko' ),							
					'0.9' => esc_html__( 'point 9s', 'banko' ),							
					'1.2' => esc_html__( '1 point 2s', 'banko' ),							
					'1.3' => esc_html__( '1 point 3s', 'banko' ),							
					'1.4' => esc_html__( '1 point 4s', 'banko' ),							
					'1.5' => esc_html__( '1 point 5s', 'banko' ),							
					'1.8' => esc_html__( '1 point 8s', 'banko' ),							
					'2' => esc_html__( '2s', 'banko' ),							
					'2.2' => esc_html__( '2 point 2s', 'banko' ),							
					'2.3' => esc_html__( '2 point 5s', 'banko' ),							
					'3' => esc_html__( '3s', 'banko' ),							
				),
				'default' =>'1',
			) );				
			$slider->add_field( array(
				'name'    => esc_html__('Text Alignment Style','banko'),
				'id'      => $prefix . 'em_slider_posi',
				'show_option_none' => true,					
				'type'    => 'select',
				'options' => array(
					'' => esc_html__( 'Select alignment', 'banko' ),
					'text-left' => esc_html__( 'Left Alignment', 'banko' ),
					'text-center' => esc_html__( 'Center Alignment', 'banko' ),
					'text-right' => esc_html__( 'Right Alignment', 'banko' ),
				),
				'default' =>'text-center',
			) );				
			$slider->add_field( array(
				'name'       => esc_html__( 'More Sliders Option, Please see slider widget area', 'banko' ),
				'id'         => $prefix . 'title_heading_line',
				'type'       => 'title',
			) );				
	
			
	}
}


