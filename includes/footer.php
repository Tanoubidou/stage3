<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package banko
 */

?>

		<?php global $banko_opt; ?>	

		<?php if (!empty($banko_opt['banko_address_hide']) && $banko_opt['banko_address_hide']==true): ?>				
			
			
			<!-- FOOTER TOP ADDRESS AREA -->
				<div class="top-address-area">
					<div class="<?php if(!empty($banko_opt['banko_footer_box_layout']) && $banko_opt['banko_footer_box_layout']=="footer_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
						<div class="row">
							<div class="col-md-12">
							
								<div class="footer-top-address">
								<?php if(!empty($banko_opt['banko_address_logo_style']) && $banko_opt['banko_address_logo_style']=="s_logo_s2"){?>
									<!-- ADDRESS IMAGE LOGO -->
									<?php if (!empty($banko_opt['banko_address_logo'])): ?>
										<div class="top_address_logo text-center">
											<img src="<?php echo esc_url($banko_opt['banko_address_logo']['url']); ?>" alt="<?php bloginfo( 'name' ); ?>" />
										</div>					
									<?php endif ?>
								<?php }else{?>
									<!-- SOCIAL TEXT LOGO -->
									<?php if (!empty($banko_opt['banko_address_title_text'])): ?>					
										<h2 class="text-center">													
											<?php 
												echo wp_kses($banko_opt['banko_address_title_text'], array(
													'span' => array(),
												));
											?>														
										</h2>
									<?php endif ?>	
								<?php } ?>					
								</div>
									
								<div class="top_address_content">
									<?php if (!empty($banko_opt['banko_address_road'])): ?>
										<span><i class="fa fa-map-marker"></i><?php echo esc_html($banko_opt['banko_address_road']); ?></span>
									<?php endif; ?>	
									<?php if (!empty($banko_opt['banko_address_email'])): ?>
										<a href="<?php esc_attr_e('mailto:','banko')?><?php echo esc_html($banko_opt['banko_address_email']); ?>"><i class="fa fa-envelope"></i><?php echo esc_html($banko_opt['banko_address_email']); ?></a>
									<?php endif; ?>	
									<?php if (!empty($banko_opt['banko_address_mobile'])): ?>						
										<a href="<?php esc_attr_e('tel:','banko')?><?php echo esc_html($banko_opt['banko_address_mobile']); ?>"><i class="fa fa-phone"></i><?php echo esc_html($banko_opt['banko_address_mobile']); ?></a>
									<?php endif; ?>							
								</div>
							</div>
						</div>
					</div>
				</div>
			<!-- END FOOTER TOP ADDRESS AREA -->
			<?php endif; ?>

		<?php if (!empty($banko_opt['banko_social_hide']) && $banko_opt['banko_social_hide']==true): ?>	
			
			<!-- FOOTER TOP AREA -->
				<div class="footer-top">
					<div class="<?php if(!empty($banko_opt['banko_footer_box_layout']) && $banko_opt['banko_footer_box_layout']=="footer_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
						<div class="row">
							<div class="col-md-12">
								<div class="footer-top-inner">
								
								<?php if(!empty($banko_opt['banko_social_logo_style']) && $banko_opt['banko_social_logo_style']=="s_logo_s2"){?>
								<!-- SOCIAL IMAGE LOGO -->
								<?php if (!empty($banko_opt['banko_social_logo'])): ?>
									<div class="social_logo text-center">
										<img src="<?php echo esc_url($banko_opt['banko_social_logo']['url']); ?>" alt="<?php bloginfo( 'name' ); ?>" />
									</div>					
								<?php endif ?>
								<?php }else{?>
								<!-- SOCIAL TEXT LOGO -->
								<?php if (!empty($banko_opt['banko_social_title_text'])): ?>					
									<h2 class="text-center">													
										<?php 
											echo wp_kses($banko_opt['banko_social_title_text'], array(
												'span' => array(),
											));
										?>														
									</h2>
								<?php endif ?>	
								<?php } ?>	
									
									
								<!-- FOOTER COPYRIGHT TEXT -->
								<?php if (!empty($banko_opt['banko_social_text'])): ?>
									<p class="text-center">
										<?php						
											echo wp_kses($banko_opt['banko_social_text'], array(
												'span' => array(),
												'a' => array(
													'href' => array(),
													'title' => array()										
												),
												'b' => array(),
												'p' => array(),
												'strong' => array(),
												'em' => array(),
												'br' => array(),
											));	
										?>						
									</p>
								<?php endif ?>							
				
									<div class="footer-social-icon">					
										<?php 
											foreach($banko_opt['banko_social_icons'] as $key=>$value ) { 
											
												if($value != ''){						
													 echo '<a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" title="'.ucwords(esc_attr($key)).'" ><i class="fa fa-'.esc_attr($key).'"></i></a>';
												}
											}
										?>							
					
									</div>
								</div>
							</div>
						</div>		
					</div>
				</div>
			<!-- END FOOTER TOP AREA -->
			<?php endif; ?>

		<?php if (!empty($banko_opt['banko_widget_hide']) && $banko_opt['banko_widget_hide']==true): ?>				
			
			<!-- FOOTER MIDDLE AREA -->
				<?php $footer_sidebar_count = $banko_opt['banko_widget_column_count']; ?>
					<?php if( 0 != $footer_sidebar_count ) { ?>
						<div class="footer-middle"> 
							<div class="<?php if(!empty($banko_opt['banko_footer_box_layout']) && $banko_opt['banko_footer_box_layout']=="footer_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
								<div class="row">
									<?php // Default Sidebar count to 4
									if( '' == $footer_sidebar_count ) $footer_sidebar_count = 4;
									// Get the sidebar class
									$footer_sidebar_class = floor( 12/$footer_sidebar_count ); ?>
									<?php for( $footer = 1; $footer <= $footer_sidebar_count; $footer++ ) { ?>
										<?php if ( is_active_sidebar( 'banko-footer-' . $footer ) ) { ?>
											<div class="col-sm-6 col-md-<?php echo esc_attr( $footer_sidebar_class ); ?> <?php if( $footer == $footer_sidebar_count ) echo esc_attr('last'); ?>">
												<?php dynamic_sidebar( 'banko-footer-' . $footer ); ?>
											</div>
											
										<?php } ?>
									<?php } ?>
								</div>
							</div>
						</div>
					<?php } // if 0 != sidebars ?>	
			<!-- END FOOTER MIDDLE AREA -->
			<?php endif; ?>


		<?php if (!empty($banko_opt['banko_copyright_hide']) && $banko_opt['banko_copyright_hide']==true): ?>				
			
			<!-- FOOTER BOTTOM AREA -->
			<div class="footer-bottom">
				<div class="<?php if(!empty($banko_opt['banko_footer_box_layout']) && $banko_opt['banko_footer_box_layout']=="footer_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
					<div class="row">
					
						<!-- FOOTER COPYRIGHT STYLE 1 -->		
						<?php			
						if(!empty($banko_opt['banko_footer_copyright_style']) && $banko_opt['banko_footer_copyright_style']=="copy_s1"){?>
						
							<div class="col-md-12 footer_style_1">			
								<div class="copy-right-text text-center">
									<!-- FOOTER COPYRIGHT TEXT -->
									<?php if (!empty($banko_opt['banko_copyright_text'])): ?>
										<p>
											<?php						
												echo wp_kses($banko_opt['banko_copyright_text'], array(
													'span' => array(),
													'a' => array(
														'href' => array(),
														'title' => array()										
													),
													'b' => array(),
													'p' => array(),
													'strong' => array(),
													'em' => array(),
													'br' => array(),
												));	
											?>
										</p>
									<?php endif ?>					
								</div>
							</div>
						<!-- FOOTER COPYRIGHT STYLE 2 -->		
						<?php }elseif(!empty($banko_opt['banko_footer_copyright_style']) && $banko_opt['banko_footer_copyright_style']=="copy_s2"){?>
						
							<div class="col-md-6  col-sm-6">
								<div class="copy-right-text">
									<!-- FOOTER COPYRIGHT TEXT -->
									<?php if (!empty($banko_opt['banko_copyright_text'])): ?>
										<p>
											<?php						
												echo wp_kses($banko_opt['banko_copyright_text'], array(
													'span' => array(),
													'a' => array(
														'href' => array(),
														'title' => array()										
													),
													'b' => array(),
													'p' => array(),
													'strong' => array(),
													'em' => array(),
													'br' => array(),
												));	
											?>
										</p>
									<?php endif ?>	
								</div>
							</div>
							<div class="col-md-6  col-sm-6">				
								<div class="footer-menu">
									<!-- FOOTER COPYRIGHT MENU -->
									 <?php if ( has_nav_menu( 'menu-2' ) ) {
											wp_nav_menu( array(
											'theme_location' => 'menu-2',
											'menu_class' => 'text-right',
											'fallback_cb' => false,
											'container' => '',
											) );
									 } ?> 				
								</div>
							</div>
						<!-- FOOTER COPYRIGHT STYLE 3 -->		
						<?php }elseif(!empty($banko_opt['banko_footer_copyright_style']) && $banko_opt['banko_footer_copyright_style']=="copy_s3"){?>
						
							<div class="col-md-6  col-sm-6 footer_style_3">
								<div class="footer-menu">
									<!-- FOOTER COPYRIGHT MENU -->				
									 <?php if ( has_nav_menu( 'menu-2' ) ) {
											wp_nav_menu( array(
											'theme_location' => 'menu-2',
											'menu_class' => 'text-left',
											'fallback_cb' => false,
											'container' => '',
											) );
									 } ?> 
								</div>
							</div>		
						
							<div class="col-md-6  col-sm-6 footer_style_3">
								<div class="copy-right-text text-right">
									<!-- FOOTER COPYRIGHT TEXT -->
									<?php if (!empty($banko_opt['banko_copyright_text'])): ?>
										<p>
											<?php						
												echo wp_kses($banko_opt['banko_copyright_text'], array(
													'span' => array(),
													'a' => array(
														'href' => array(),
														'title' => array()										
													),
													'b' => array(),
													'p' => array(),
													'strong' => array(),
													'em' => array(),
													'br' => array(),
												));	
											?>
										</p>
									<?php endif ?>	
								</div>
							</div>
							
						<!-- FOOTER COPYRIGHT STYLE 4 -->		
						<?php }elseif(!empty($banko_opt['banko_footer_copyright_style']) && $banko_opt['banko_footer_copyright_style']=="copy_s4"){?>
						
							<div class="col-md-6 col-sm-6">
								<div class="copy-right-text">
									<!-- FOOTER COPYRIGHT TEXT -->
									<?php if (!empty($banko_opt['banko_copyright_text'])): ?>
										<p>
											<?php						
												echo wp_kses($banko_opt['banko_copyright_text'], array(
													'span' => array(),
													'a' => array(
														'href' => array(),
														'title' => array()										
													),
													'b' => array(),
													'p' => array(),
													'strong' => array(),
													'em' => array(),
													'br' => array(),
												));	
											?>
										</p>
									<?php endif ?>	
								</div>
							</div>
							<div class="col-md-6 col-sm-6">				
								<div class="footer-menu">
									<!-- FOOTER COPYRIGHT SOCIAL MENU -->
									<ul class="text-right">
										<?php 
											foreach($banko_opt['banko_social_icons'] as $key=>$value ) { 
											
												if($value != ''){						
													 echo '<li><a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" title="'.ucwords(esc_attr($key)).'" ><i class="fa fa-'.esc_attr($key).'"></i></a></li>';
												}
											}
										?>							
									
									</ul>				
								</div>
							</div>
						<?php } // end copyright style ?>			
					</div>
				
				</div>
			</div>
			<!-- END FOOTER BOTTOM AREA -->
			
			<?php else: ?>
			
			<!-- FOOTER MIDDLE AREA -->
				<?php $footer_sidebar_count =4; ?>
					<?php if( 0 != $footer_sidebar_count ) { ?>
						<div class="footer-middle wpfd"> 
							<div class="container">
								<div class="row">
									<?php // Default Sidebar count to 4
									if( '' == $footer_sidebar_count ) $footer_sidebar_count = 4;
									// Get the sidebar class
									$footer_sidebar_class = floor( 12/$footer_sidebar_count ); ?>
									<?php for( $footer = 1; $footer <= $footer_sidebar_count; $footer++ ) { ?>
										<?php if ( is_active_sidebar( 'banko-footer-' . $footer ) ) { ?>
											<div class="wpfdp col-sm-6 col-md-<?php echo esc_attr( $footer_sidebar_class ); ?> <?php if( $footer == $footer_sidebar_count ) echo esc_attr('last'); ?>">
												<?php dynamic_sidebar( 'banko-footer-' . $footer ); ?>
											</div>
											
											
										<?php } ?>
									<?php } ?>
								</div>
							</div>
						</div>
					<?php } // if 0 != sidebars ?>	
			<!-- END FOOTER MIDDLE AREA -->			
			<!-- FOOTER BOTTOM AREA -->
			<div class="footer-bottom">
				<div class="<?php if(!empty($banko_opt['banko_footer_box_layout']) && $banko_opt['banko_footer_box_layout']=="footer_full"){echo esc_attr('container-fluid');}else{ echo esc_attr('container'); }?>">
					<div class="row">			
						<div class="col-md-12">
							<div class="copy-right-text text-center">
								<!-- FOOTER COPYRIGHT TEXT -->
									<p>
										<?php						
											echo esc_html_e("Copyright &copy; banko 2019 all right reserved.","banko"); 
										?>
									</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END FOOTER BOTTOM AREA -->
			<?php endif; ?>
        </div>
        <!-- MAIN WRAPPER END -->
		
<?php wp_footer(); ?>

</body>
</html>
