<?php /* Template Name: basic-template-QS */ get_header(); ?>
<?php remove_filter( 'the_content', 'wpautop' ); ?>

	<main role="main">
		<!-- section -->
		<section class="loop-header <?php the_title(); ?>">
			<div class="row grey-tittle-row">
				<div class="medium-12 columns small-12">
					<h1 class="QS-title">Quiénes Somos</h1>		
				</div>
			</div>
		</section>

		<section>
			<?php edit_post_link(); ?>
			
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<section class="feat-section-qs">
					
					<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
					
					<div class="qs-featured-wrap">
						<img class="feat-img" src="<?php echo $feat_image; ?>" alt="Qué es Proyungas?">
					</div>
					
				</section>
				<?php endif; ?>
				

					<?php the_content(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>
				<div class="row">
					<div class="medium-12 small-12 columns">
						<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>		
					</div>
				</div>
				

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>
	
<?php //get_sidebar(); ?>

<?php get_footer(); ?>
