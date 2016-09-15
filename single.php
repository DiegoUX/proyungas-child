<?php get_header(); ?>
<?php // remove_filter( 'the_content', 'wpautop' ); ?>
	<?php if ( $_GET["proyect"] ): ?>

		<main role="main">
			<!-- section -->
			<section class="loop-header <?php the_title(); ?>">
				<div class="row grey-tittle-row">
					<div class="medium-12 columns small-12">
						<h1 class="proyectos-title">Proyectos</h1>
					</div>
				</div>
			</section>

			<section class="single-proyecto">

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				
				<div class="row">
					<div class="medium-12 small-12 columns breadcrumb">
						<span class="bc-cat"><?php the_category(', '); ?></span>
						<span class="bc-separator">/</span>
						<span class="bc-post"><?php the_title(); ?></span>
					</div>
				</div>
				<!-- article -->

				<?php the_content(); // Dynamic Content ?>
				<!-- /article -->

			<?php endwhile; ?>

			<?php else: ?>

				<!-- article -->
				<article>

					<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

				</article>
				<!-- /article -->

			<?php endif; ?>

			</section>
			<!-- /section -->
		</main>
		<script>
			$(function(){
				var selproy = $(".breadcrumb a[rel='category']");
				selproy.each(function(index){ al = $(this).prop("href") + "&custom=proyect"; $(this).prop("href",al); });
				
			});
		</script>
		<script>
			$(function(){
				 var sel = $("body header .full-width .nav > ul > li:nth-child(3)");
				sel.addClass("current-menu-item");
			});
		</script>		
	<?php elseif( $_GET["publication"] ): ?>
	<?php else: ?>
		<main role="main">
			<section class="loop-header">
				<div class="row grey-tittle-row">
					<div class="medium-12 columns small-12">		
						<h1 class="noticias-title"><?php _e( 'Noticias', 'html5blank' ); ?></h1>
						
					</div>
				</div>
			</section>
			<!-- section -->
			<section class="single-noticia loop noticias-section noticias-page">
				<?php wpb_set_post_views(get_the_ID()); ?>
				<?php // echo "<h2>" . get_post_meta(get_the_ID(), 'wpb_post_views_count' , true) ."</h2>";  ?>
				<div class="row">
					<div class="column small-12 medium-7">
						<?php if (have_posts()): while (have_posts()) : the_post(); ?>
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<div class="home-post-container">
									<h5 class="new-category"><?php the_category(', '); // Separated by commas ?></h5>
									<h4>
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
									</h4>
									<div class="feat-single-notice">
										<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
												<?php the_post_thumbnail(); // Fullsize image for the single post ?>
											</a>
										<?php endif; ?>
									</div>
								

									<?php the_content(); // Dynamic Content ?>
								</div>	

								<!-- post details -->
								<div class="meta">
									
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

								<?php comments_template(); ?>

							</article>
							<!-- /article -->

						<?php endwhile; ?>
						<?php endif; ?>
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
							<?php // wp_list_categories(); ?> 
							<?php html5blank_sidebar_news_cat(); ?>
						</div>
						<div class="tweets">
							<h2>Últimos Tweets</h2>
							<a class="twitter-timeline"  href="https://twitter.com/proyungas" data-widget-id="519558749917179904">Tweets por @proyungas</a>
							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
						</div>
						
					</div>
				</div>
						

			</section>
			<!-- /section -->
		</main>
	<?php endif ?>

<?php get_footer(); ?>
