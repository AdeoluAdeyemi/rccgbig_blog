<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package rccgbig_blog
 */

get_header();
?>

	<main id="primary" class="site-main">
		<section class="page-section bg-gradient-gray-light-1 bg-scroll overflow-hidden">

		</section>

		<section class="page-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 mb-md-80">
						<?php
							while ( have_posts() ) :
								the_post();

								get_template_part( 'template-parts/content', get_post_type() );

								the_post_navigation(
									array(
										'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'rccgbig_blog' ) . '</span> <span class="nav-title">%title</span>',
										'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'rccgbig_blog' ) . '</span> <span class="nav-title">%title</span>',
									)
								);

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;

							endwhile; // End of the loop.
						?>
					</div>
					<div class="col-lg-4 col-xl-3 offset-xl-1">
						<?php get_sidebar();?>
					</div>
				</div>
			</div>
		</section>

	</main><!-- #main -->

<?php
get_footer();
