<?php /* Template Name: Proyectos Page */ get_header(); ?>
<?php // remove_filter( 'the_content', 'wpautop' ); ?>

	<main role="main">
		<!-- section -->
		<section class="loop-header <?php the_title(); ?>">
			<div class="row grey-tittle-row">
				<div class="medium-12 columns small-12">
					<h1 class="servicios-title"><?php the_title(); ?></h1>
				</div>
			</div>
		</section>

		<section class="proyecto-page">
			<div class="row">
				<div class="medium-7 columns small-12">
					<?php
							$args_grilla_home = array(
								'post_type' => 'proyect',
								'paged' => 1,
								'posts_per_page' => '1000'
							);
							$nuevo_query = new WP_query( $args_grilla_home );
							while ($nuevo_query->have_posts()) : $nuevo_query->the_post();
						?>
							<div class="servicios-post-container">
								
								<h2>
									<?php the_title(); ?>
								</h2>
								
								<div class="thumb-serv">
									<?php the_post_thumbnail(); ?>
								</div>
								
								<div class="serv-content">
									<?php the_content(); ?>
								</div>
								<div class="data-meta">
									<div class="servicio-name-contact">
										<?php echo get_post_meta(get_the_ID(), 'servicio-name-contact' , true); ?>	
									</div>
									<div class="servicio-mail-contact">
										<a href="mailto:<?php echo get_post_meta(get_the_ID(), 'servicio-mail-contact' , true); ?>"><?php echo get_post_meta(get_the_ID(), 'servicio-mail-contact' , true); ?></a>
									</div>
								</div>
								
							</div>
						<?php endwhile; ?>
					<?php wp_reset_query(); ?>

				</div> 
				<!-- end medium 7 -->
				<div class="medium-5 columns small-12"> 
					<div class="sidebar basic-sidebar-box">
							<h2>Destacados</h2>
							<?php
									$args_grilla_home = array(
										'post_type' => array('post','proyect'),
										'paged' => 1,
										'posts_per_page' => '1',
										'tag' => 'Destacadomayor'
									);
									$nuevo_query = new WP_query( $args_grilla_home );
									while ($nuevo_query->have_posts()) : $nuevo_query->the_post();
								?>
									<div class="destacado-sidebar">
										<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
										<div class="thumb" style="background-image: url('<?php echo $feat_image; ?>');">
										</div> 
										<h6>
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
										</h6>
										
									</div>
								<?php endwhile; ?>
							<?php wp_reset_query(); ?>
							<?php
									$args_grilla_home = array(
										'post_type' => array('post','proyect'),
										'paged' => 1,
										'posts_per_page' => '7',
										'tag' => 'Destacado'
									);
									$nuevo_query = new WP_query( $args_grilla_home );
									while ($nuevo_query->have_posts()) : $nuevo_query->the_post();
								?>
									<div class="destacado-sidebar">
										<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
										<div class="thumb" style="background-image: url('<?php echo $feat_image; ?>');">
										</div>  
										<h6>
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
										</h6>
										
									</div>
								<?php endwhile; ?>
							<?php wp_reset_query(); ?>
						</div>
				</div>
			</div>
				
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
