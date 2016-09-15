<?php /* Template Name: BKP Home-template OLD */ get_header(); ?>
<?php remove_filter( 'the_content', 'wpautop' ); ?>
	<main role="main">
		<!-- section -->
		<section class="home-slider-wrap">

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

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
		
		<section class="grilla">

			<div class="row">
				<div class="column medium-6 small-12 left-grid-col pr-0-for-large">
					<?php 
						
						$args_grilla_home = array(
							'post_type' => array('post','proyect','publication'),
							'posts_per_page' => '1',
							'tag' => 'Destacadomayor'
						);
						$nuevo_query = new WP_query( $args_grilla_home );
						//query_posts( $args_grilla_home );
							while ($nuevo_query->have_posts()) : $nuevo_query->the_post(); ?>
								<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
								<div class="home-grid-cell" style="background-image: url('<?php echo $feat_image; ?>');">
									<h4>
										<?php the_title(); ?>
									</h4>
									
									<a href="<?php the_permalink(); ?>">
										Leer más	
									</a>
								</div>
							
									
							<?php endwhile; 
						wp_reset_query();
					?>
					<?php 
						
						$count = 1;
						$args_grilla_home = array(
							'post_type' => array('post','proyect','publication'),
							'posts_per_page' => '7',
							'tag' => 'Destacado'
						);
						$nuevo_query = new WP_query( $args_grilla_home );
						//query_posts( $args_grilla_home );
							while ($nuevo_query->have_posts()) : $nuevo_query->the_post(); ?>
								<?php 
								$count++;

								if ($count == 5) {
									echo "</div><div class='medium-6 small-12 column right-grid-col'>";
									// echo "hola!";
								}

								?>
								<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
								<div class="home-grid-cell" style="background-image: url('<?php echo $feat_image; ?>');">
									<h4>
										<?php the_title(); ?>
									</h4>
									
									<a href="<?php the_permalink(); ?>">
										Leer más	
									</a>
								</div>
									
							<?php endwhile; 
						wp_reset_query();
					?>
				</div>
			</div>
		</section>
		<section class="noticias-section">
			<div class="row">
				<div class="medium-7 column news small-12">
					<h2>Noticias</h2>
					<?php 
						
						$args_grilla_home = array(
							'post_type' => array('post'),
							'posts_per_page' => '3'
						);

						$nuevo_query = new WP_query( $args_grilla_home );
						$count2 = 0;
						while ($nuevo_query->have_posts()) : $nuevo_query->the_post(); ?>
							<?php $count2++; ?>
							<div class="home-post-container">
								<h4>
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
								</h4>
								<?php if($count2 == 1) : the_post_thumbnail(); 
								endif;?>
								<div class="excerpt">
									<?php the_excerpt(); ?>
								</div>
								<div class="meta">
									
									<div>
										<a href="<?php the_permalink(); ?>" class="readmore-post">Leer más</a>	
									</div>
									<div>
										<span><?php _e( 'Por ', 'html5blank' ); the_author(); ?></span>

										<span class="date"> - <?php the_time('j'); ?> / <?php the_time('m'); ?> / <?php the_time('Y'); ?></span>
										<span class="comments"><?php comments_popup_link( __( 'Déjenos un comentario', 'html5blank' ), __( '1 Comentario', 'html5blank' ), __( '% Comentarios', 'html5blank' )); ?></span>	
									</div>
									
									
								</div>
								
							</div>
								
						<?php endwhile; 
						wp_reset_query();
					?>
					<a href="<?php echo home_url(); ?>/?page_id=6" class="btn more-news">Ver más Noticias</a>
				</div>

				<div class="medium-5 column news-2ndcol">
					<div class="newsletter">
						<!-- <form action="">
							<h2>Novedades</h2>
							<p>Ingrese su mail para suscribirse y recibir nuestras últimas novedades.</p>
							<input type="text">
							<button class="btn-green">Enviar</button>
						</form> -->
						<h2>Novedades</h2>
						<?php
							echo do_shortcode('[contact-form-7 id="249" title="Contact Form Sidebar Home"]');
						?> 
					</div>
					<div class="tweets">
						<h2>Últimos Tweets</h2>
						<a class="twitter-timeline"  href="https://twitter.com/proyungas" data-widget-id="519558749917179904">Tweets por @proyungas</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					</div>

				</div>
			</div>
					
		</section>
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
