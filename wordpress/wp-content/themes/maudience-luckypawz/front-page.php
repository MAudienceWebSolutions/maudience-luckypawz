<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); 

/*
<header class="entry-header">
<h1 class="entry-title"><?php the_title(); ?></h1>
</header>
<div class="entry-content"><?php the_content(); ?></div><!-- .entry-content -->
*/

?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<!-- HOME CONTENT -->
						<section id="home-content-section" class="content-section home-section column-centerfull-wrap">
							<div class="inner-wrap">
								<?php the_content(); ?>
							</div>
						</section>

					<!-- TOP SECTION -->
						<section id="top-section" class="top-section home-section">

							<div id="top-centerfull-wrap" class="column-centerfull-wrap section-column">
								<?php if ( is_active_sidebar( 'home-top-centerfull' ) ) : ?>
									<div class="inner-wrap">
										<?php dynamic_sidebar( 'home-top-centerfull' ); ?>
									</div><!-- #home-top-right -->
								<?php endif; ?>
							</div>

							<div id="top-left-half" class="column-left section-column">
								<?php if ( is_active_sidebar( 'home-top-left' ) ) : ?>
									<div class="inner-wrap">
										<?php dynamic_sidebar( 'home-top-left' ); ?>
									</div><!-- #home-top-right -->
								<?php endif; ?>
							</div>

							<div id="top-right-half" class="column-right section-column">
								<?php if ( is_active_sidebar( 'home-top-right' ) ) : ?>
									<div class="inner-wrap">
										<?php dynamic_sidebar( 'home-top-right' ); ?>
									</div><!-- #home-top-right -->
								<?php endif; ?>
							</div>
						</section>

					<!-- MIDDLE SECTION -->
						<section id="middle-section" class="middle-section home-section">

							<div id="middle-centerfull-wrap" class="column-centerfull-wrap section-column">
								<?php if ( is_active_sidebar( 'home-middle' ) ) : ?>
									<div class="inner-wrap">
										<?php dynamic_sidebar( 'home-middle' ); ?>
									</div><!-- #home-middle -->
								<?php endif; ?>
							</div>
						</section>

					<!-- BOTTOM SECTION -->
						<section id="bottom-section" class="bottom-section home-section">

							<div id="bottom-centerfull-wrap" class="column-centerfull-wrap section-column">
								<?php if ( is_active_sidebar( 'home-bottom-centerfull' ) ) : ?>
									<div class="inner-wrap">
										<?php dynamic_sidebar( 'home-bottom-centerfull' ); ?>
									</div><!-- #home-bottom-right -->
								<?php endif; ?>
							</div>

							<div id="bottom-left-half" class="column-left section-column">
								<div class="slider-wrap">
									<?php if ( is_active_sidebar( 'home-bottom-left' ) ) : ?>
										<div id="home-bottom-left" class="home-bottom-left widget-area inner-wrap" role="complementary">
											<?php dynamic_sidebar( 'home-bottom-left' ); ?>
										</div><!-- #home-bottom-right -->
									<?php endif; ?>
								</div>
							</div>

							<div id="bottom-right-half" class="column-right section-column">
								<?php if ( is_active_sidebar( 'home-bottom-right' ) ) : ?>
									<div id="home-bottom-right" class="home-bottom-right widget-area inner-wrap" role="complementary">
										<?php dynamic_sidebar( 'home-bottom-right' ); ?>
									</div><!-- #home-bottom-right -->
								<?php endif; ?>
							</div>
						</section>

				</article><!-- #post -->
			<?php endwhile; // end of the loop. ?>
		</div><!-- #content -->
		<!-- PRE FOOTER SECTION -->
		<section id="pre-footer-section" class="pre-footer-section home-section">

			<div id="pre-footer-centerfull-wrap" class="column-centerfull-wrap section-column pre-footer">
				<?php if ( is_active_sidebar( 'home-middle' ) ) : ?>
					<div class="inner-wrap">
						<?php dynamic_sidebar( 'pre-footer-centerfull' ); ?>
					</div><!-- #home-middle -->
				<?php endif; ?>
			</div>
		</section>
	</div><!-- #primary -->

<?php get_footer(); ?>