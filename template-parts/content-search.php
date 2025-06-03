<?php

/**
 * Template part for displaying archive posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package banko
 */

?>

<!-- SEARCH QUERY -->
<div class="col-md-12 col-sm-12 col-xs-12">
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="banko-single-blog  banko-lt">
			<!-- BLOG THUMB -->
			<?php if (!empty(get_the_post_thumbnail())) { ?>
				<div class="banko-blog-thumb ">
					<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?> </a>
					<div class="banko-blog-meta-top">
						<?php $banko_post_categories = get_the_category(); ?>

						<?php if (!empty($banko_post_categories)) :

							$banko_first_category = $banko_post_categories[0];

							$banko_category_name = $banko_first_category->name;
							$banko_category_link = get_category_link($banko_first_category); ?>
							<ul class="post-categories">
								<li><a href="<?php echo esc_url($banko_category_link) ?>"><?php echo esc_html($banko_category_name, 'banko') ?></a></li>
							</ul>
						<?php endif ?>
					</div>
				</div>
			<?php } ?>

			<!-- BLOG CONTENT -->
			<div class="banko-blog-content-area ">
				<div class="banko-blog-meta-left">
					<a href="<?php echo get_author_posts_url(get_the_author_meta('ID'), get_the_author_meta('user_nicename')); ?>"> <i class="fa fa-user"></i><?php esc_html_e('by ', 'banko'); ?><?php the_author(); ?></a>
					<span><i class="fa fa-calendar" aria-hidden="true"></i><?php echo get_the_time(get_option('date_format')); ?></span>

				</div>
				<div class="blog-page-title ">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				</div>
				<div class="blog-description">
					<p><?php echo wp_trim_words(get_the_content(), 23, ' '); ?></p>
				</div>
				<div class="blog-readmore">
					<a href="<?php the_permalink(); ?>"><?php esc_html_e('Read More', 'banko'); ?> </a>
				</div>
			</div>
		</div>

	</div> <!--  END SINGLE BLOG -->

</div><!-- #post-## -->