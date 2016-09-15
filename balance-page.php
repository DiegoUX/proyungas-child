<?php /* Template Name: balance-page */ get_header(); ?>
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
	<section class="loop-balance">
		<?php 
		if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
		elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
		else { $paged = 1; }

		// query_posts('posts_per_page=3&paged=' . $paged); 
		?>
		<?php $args_grilla_home = array(
			'post_type' => 'grafico',
			'paged' => $paged,
			'posts_per_page' => '2'
		); 
		$nuevo_query = new WP_query( $args_grilla_home );
		$temp_query = $wp_query;
		$wp_query   = NULL;
		$wp_query   = $nuevo_query;
		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
			<h2><?php the_title(); ?></h2>
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
			<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
				<div class="graphic">
					<img class="feat-img" src="<?php echo $feat_image; ?>" alt="Qué es Proyungas?">
				</div>

			<?php endif; ?>
			<div class="graphic-content">
				<p>
					<?php the_content(); ?>	
				</p>
			</div>
		<?php endwhile; ?>
		<?php wp_reset_query(); ?>
		<?php get_template_part('pagination'); ?>
		$wp_query = NULL;
		$wp_query = $temp_query;

	</section>
<?php //get_sidebar(); ?>

<?php get_footer(); ?>
