<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package banko
 */
?>
	<!-- BLOG QUERY -->
	<!-- SINGLE BLOG -->
	<div class="col-md-6 col-lg-4 grid-item">
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="banko-single-blog blog-grid">					
				<!-- BLOG THUMB -->
				<?php if(has_post_thumbnail()){?>
					<div class="banko-blog-thumb ">
						<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail('banko-blog-default'); ?> </a>
						<div class="banko-blog-meta-top">
							<?php the_category();?>
						</div>
					</div>									
				<?php } ?>
				
				<!-- BLOG CONTENT -->
				<div class="banko-blog-content-area ">												
					<div class="banko-blog-meta-left">
                        <i class="fa fa-user"></i><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php esc_html_e('by ', 'banko'); ?><?php the_author(); ?></a>	
                        <i class="fa fa-calendar"></i><span><?php echo get_the_time(get_option('date_format')); ?></span>
					</div>	
					<div class="blog-page-title ">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>			
					</div>
					<div class="blog-description">					
						<p><?php echo wp_trim_words( get_the_content(), 9, ' ' ); ?></p>
					</div>
					<div class="blog-readmore">
						<a href="<?php the_permalink(); ?>"><?php esc_html_e('Read More', 'banko'); ?></a>	
					</div>
				</div>									
			</div>
		</div> <!--  END SINGLE BLOG -->
	</div><!-- #post-## -->
