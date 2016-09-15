<?php get_header(); ?>

	
	<main role="main">
		<!-- section -->

			<section class="loop-header">
				<div class="row grey-tittle-row">
					<div class="medium-12 columns small-12">		
						<h1 class="noticias-title no-icon"><?php _e( 'Resultado de Búsqueda', 'html5blank' ); ?></h1>
						
					</div>
				</div>
			</section>

			<section class="loop noticias-section noticias-page search-page">
				
				<div class="row">
					<div class="medium-7 small-12 columns">
						<h2><?php echo sprintf( __( 'Resultado para la busqueda de "<span>', 'html5blank' ), $wp_query->found_posts ); echo get_search_query() . '</span>"'; ?></h2>
						
						<?php
							$args_grilla_home = array(
								'post_type' => array('post','proyect','publication'),
								// 'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1
								'posts_per_page' => '1000',
								's' => $_GET["s"]

							);
							$nuevo_query = new WP_query( $args_grilla_home );
							while ($nuevo_query->have_posts()) : $nuevo_query->the_post();
						?>
							<div class="home-post-container">
								<h5 class="new-category"><?php the_category(', '); // Separated by commas ?></h5>
								<h4>
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
								</h4>
								<?php // the_post_thumbnail(); ?>
								
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
										
									</div>
									<div class="tags-box row">
										<div class="tags medium-8 columns small-12">
											<?php the_tags( __( '', 'html5blank' ), ' - ', '<br>'); // Separated by commas with a line break at the end ?>
										</div>
										<div class="comments medium-4 columns small-12 tar">
											<?php comments_popup_link( __( 'Déjenos un comentario', 'html5blank' ), __( '1 Comentario', 'html5blank' ), __( '% Comentarios', 'html5blank' )); ?>
										</div>
									</div>

								</div>
								<div class="ver-cv-dir buttons">
									<?php if ( get_post_meta(get_the_ID(), 'pdf-url' , true) ): ?>
										<?php echo "<a class='btn-green pdf' target='_blank' href='". get_post_meta(get_the_ID(), 'pdf-url' , true) ."'>Ver CV</a>";
										?>
									<?php endif ?>
									<?php if (get_post_meta(get_the_ID(), 'pdf-url' , true)): ?>
										<?php echo "<a class='btn-green lamina' target='_blank' href='". get_post_meta(get_the_ID(), 'pdf-url' , true) ."'>Ver Lamina</a>";
										?>	
									<?php endif ?>
									
								</div>

							</div>
						<?php endwhile; ?>
						<?php wp_reset_query(); ?>
						<?php // get_template_part('pagination'); ?>
						<!-- <?php wp_pagenavi(); ?> -->
					</div>
					<div class="medium-5 small-12 columns">
						<div class="sidebar most-readed-articles basic-sidebar-box">
							<h3><?php _e( 'Articulos más leídos', 'html5blank' ); ?></h3>
							
							<ul class="articles-list">
								<?php
									$args_grilla_home = array(
										'post_type' => 'post',
										'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1,
										'posts_per_page' => '5',
										'orderby' => 'meta_value_num',
										'meta_key' => 'wpb_post_views_count'
									);
									$nuevo_query = new WP_query( $args_grilla_home );
									while ($nuevo_query->have_posts()) : $nuevo_query->the_post();
								?>

									<li>
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
									</li>

								<?php endwhile; ?>
								<?php wp_reset_query(); ?>
							</ul>
							
						</div>

						<div class="sidebar most-recient-articles basic-sidebar-box">
							<h3><?php _e( 'Articulos más recientes', 'html5blank' ); ?></h3>
							<ul class="articles-list">
								<?php
									$args_grilla_home = array(
										'post_type' => 'post',
										'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1,
										'posts_per_page' => '5'
									);
									$nuevo_query = new WP_query( $args_grilla_home );
									while ($nuevo_query->have_posts()) : $nuevo_query->the_post();
								?>

									<li>
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
									</li>

								<?php endwhile; ?>
								<?php wp_reset_query(); ?>
							</ul>
						</div>
						<div class="basic-sidebar-box categories-list">
							<h3><?php _e( 'Categorías', 'html5blank' ); ?></h3>
							<?php wp_list_categories(); ?> 
						</div>
						<div class="tweets">
							<h2>Últimos Tweets</h2>
							<a class="twitter-timeline"  href="https://twitter.com/mrmedina87"  data-widget-id="506434795564314624">Tweets por @mrmedina87</a>
							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
						</div>
						
					</div>
				</div>

			</section>
			<!-- /section -->
		</main>

<?php get_footer(); ?>
