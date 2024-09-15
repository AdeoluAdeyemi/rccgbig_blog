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
			<div class="bg-shape-1 wow fadeIn no-animate animated">
				<img alt="" loading="lazy" width="1443" height="844" decoding="async" data-nimg="1" class="opacity-05" src="../assets/images/banner/bg-shape-1.svg" style="color: transparent;">
			</div>

			<div class="container position-relative pt-10 pt-sm-40 text-center">
				<div class="row">
					<div class="col-lg-10 offset-lg-1">
						<h1 class="hs-title-9 mb-20">
							<?php the_title();?>
            </h1>
						<div class="blog-item-data mt-30 mt-sm-10 mb-0 wow fadeIn no-animate animated">

						</div>
						<div class="blog-item-data mt-30 mt-sm-10 mb-0 wow fadeIn no-animate  animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s;">
							<div class="d-inline-block me-3">
								<a href="#">
									<i class="mi-clock size-16"></i>
									<span class="visually-hidden">Date:</span> 
								</a>
							</div>
							<div class="d-inline-block me-3">
								<a href="#">
									<i class="mi-user size-16"></i>
									<span class="visually-hidden">Author:</span>
								</a>
							</div>
							<div class="d-inline-block me-3">
								<i class="mi-folder size-16"></i>
								<span class="visually-hidden">Categories:</span><a href="#">Design</a>, 
								<a href="#">Branding</a>
							</div>
							<div class="d-inline-block me-3">
								<a href="#">
									<i class="mi-message size-16"></i> 5 Comments
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
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
