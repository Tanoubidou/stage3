<?php
/**
 * Standard blog single page
 *
 */

get_header();
banko_signle_blog_breadcrumb(); ?>
<!-- BLOG AREA START -->
<div class="banko-blog-area  single-blog-details">
	<div class="container">				
		<div class="row">						
			<div class="col-md-12  col-lg-8 blog-lr">
				<?php if (have_posts() ) : ?>													 
						<?php while ( have_posts() ) : the_post();
							global $post; ?>
							<?php get_template_part( 'template-parts/content' , 'single' );?>
						<?php endwhile; // while has_post(); ?>
				<?php endif; // if has_post() ?>	
			</div>
			<div class="col-md-12  col-lg-4  sidebar-right content-widget pdsr">
				<div class="blog-left-side">
					<?php 
						 if ( is_active_sidebar( 'sidebar-1' ) ) {
						 	dynamic_sidebar( 'sidebar-1' ); 
						 }	
					?>
				</div>
			</div>	
		</div>	
	</div>
</div>
<!-- END BLOG AREA START -->						
<?php
get_footer();