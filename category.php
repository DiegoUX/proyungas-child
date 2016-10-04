<?php get_header(); ?>
	
	<?php if( isset($_GET["custom"]) && $_GET["custom"] == "proyect" ): ?>

		<main role="main">
			<!-- section -->
			<section class="loop-header <?php the_title(); ?>">
				<div class="row grey-tittle-row">
					<div class="medium-12 columns small-12">
						<h1 class="proyectos-title">Proyectos</h1>
					</div>
				</div>
			</section>

			<section class="proyectos-page">
				<div class="row">
					<div class="medium-7 columns small-12">
						<div class="proyecto-category-content">
							<?php
									if( isset($_GET["cat"]) ):
										$cat = $_GET["cat"];
										$args_grilla_home = array(
											'post_type' => 'proyect',
											'paged' => 1,
											'posts_per_page' => '1000',
											'cat' => $cat
										);
									elseif( get_query_var('category_name') ):
										$cat = get_query_var('category_name');
										$args_grilla_home = array(
											'post_type' => 'proyect',
											'paged' => 1,
											'posts_per_page' => '1000',
											'category_name' => get_query_var('category_name')
										);
									else:
										$args_grilla_home = array(
											'post_type' => 'proyect',
											'paged' => 1,
											'posts_per_page' => '1000'
										);
									endif;
									$nuevo_query = new WP_query( $args_grilla_home ); ?>
									<?php $count = 1; ?>

									<?php while ($nuevo_query->have_posts()) : $nuevo_query->the_post();?>
										<?php if( $count == 1 ): ?>

											<h2 class="proyect-category-title">
												<?php $cat_array =  get_the_category(); ?>
												<?php echo $cat_array[0]->cat_name; ?>
												<?php $cat_proy_id = $cat_array[0]->term_id; ?>
											</h2>
											<div class="featured-img">
												<img src="<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url(); ?>" alt="Imágen de la Categoría">
											</div>
											
											<div class="category-text">
												<?php echo category_description(); ?>
											</div>

											<h2 class="proyect-category-title">
												Proyectos
											</h2>
										<?php endif ?>
										<div class="proy-post-container">
											
											<div class="thumb-proy">
												<?php //the_post_thumbnail(); ?>
												<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
												<div class="thumb" style="background-image: url('<?php echo $feat_image; ?>');"></div> 
											</div>
											<div class="pryct-title">
												<h3>
													<?php the_title(); ?>
												</h3>

												<div class="button-wrap-proy"><a href="<?php the_permalink(); ?>" class="btn-green">ver</a></div>
											</div>
												
											
										</div>
										<?php $count = $count + 1; ?>
									<?php endwhile; ?>
								<?php wp_reset_query(); ?>
						</div> 
							
								

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

	<?php elseif( isset( $_GET["custom"] ) && $_GET["custom"] == "publication" ): ?>
		<main role="main">
		<!-- section -->

			<section class="loop-header">
				<div class="row grey-tittle-row">
					<div class="medium-12 columns small-12">
						<h1 class="publicaciones-title"><?php _e( 'Publicaciones', 'html5blank' ); ?></h1>
					</div>
				</div>
			</section>

			<section class="loop noticias-section noticias-page no-noticias">
				
				<div class="row">
					<div class="medium-7 small-12 columns">
						
						<?php
							// $args_grilla_home = array(
							// 	'post_type' => 'publication',
							// 	// 'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1,
							// 	'posts_per_page' => '1000'
							// );
							if( isset($_GET["cat"]) ):
								$cat = $_GET["cat"];
								$args_grilla_home = array(
									'post_type' => 'publication',
									'paged' => 1,
									'posts_per_page' => '1000',
									'cat' => $cat
								);
							elseif( get_query_var('category_name') ):
								$cat = get_query_var('category_name');
								$args_grilla_home = array(
									'post_type' => 'publication',
									'paged' => 1,
									'posts_per_page' => '1000',
									'category_name' => get_query_var('category_name')
								);
							else:
								$args_grilla_home = array(
									'post_type' => 'publication',
									'paged' => 1,
									'posts_per_page' => '1000'
								);
							endif;
							$nuevo_query = new WP_query( $args_grilla_home );
							while ($nuevo_query->have_posts()) : $nuevo_query->the_post();
						?>
							<div class="home-post-container">
								<h5 class="new-category"><?php the_category(', '); // Separated by commas ?></h5>
								<!-- <h4>
									<a href="<?php // the_permalink(); ?>" title="<?php // the_title(); ?>"><?php // the_title(); ?></a>
								</h4> -->
								<h4>
									<?php the_title(); ?>
								</h4>
								<?php the_post_thumbnail(); ?>
								<?php // if( $_GET["custom"] == 'publication' ): ?>
									<div class="data-meta">
										<?php echo get_post_meta(get_the_ID(), 'publication-meta' , true);
										?>	
									</div>
								<?php // endif ?>
								<div class="excerpt">
									<p><?php the_content();// the_excerpt(); ?></p>
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
										<?php echo "<a class='btn-green pdf' target='_blank' href='". get_post_meta(get_the_ID(), 'pdf-url' , true) ."'>Descargar PDF</a>";
										?>
									<?php endif ?>
									<?php if (get_post_meta(get_the_ID(), 'ver-lamina' , true)): ?>
										<?php echo "<a class='btn-green lamina' target='_blank' href='". get_post_meta(get_the_ID(), 'ver-lamina' , true) ."'>Ver Lámina</a>";
										?>	
									<?php endif ?>
									
								</div>

								<?php // if( $_GET["custom"] == 'publication' ): ?>
									<div class="ejemplar">
										<p>
											<span>Adquirir un ejemplar</span>
											<a href="mailto:ventas@proyungas.org.ar">ventas@proyungas.org.ar</a>	
										</p>
									</div>
								<?php // endif ?>

								
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
								<li><a href="">Lorem ipsum dolor sit amet</a></li>
								<li><a href="">consectetur adipisicing elit</a></li>
								<li><a href="">dolores magnam</a></li>
								<li><a href="">voluptatum corrupti reiciendis eaque</a></li>
								<li><a href="">Dignissimos, quo, assumenda atque omnis aut amet</a></li>
							</ul>
							
						</div>
						<div class="sidebar most-recient-articles basic-sidebar-box">
							<h3><?php _e( 'Articulos más recientes', 'html5blank' ); ?></h3>
							<ul class="articles-list">
								<li><a href="">assumenda atque omnis aut amet</a></li>
								<li><a href="">voluptate nulla eligendi sit</a></li>
								<li><a href="">facere iste in molestiae</a></li>
								<li><a href="">Facilis, fuga</a></li>
								<li><a href="">tenetur quidem voluptatum corrupti</a></li>
							</ul>
						</div> 
						<div class="basic-sidebar-box categories-list">
							<h3><?php _e( 'Categorías', 'html5blank' ); ?></h3>
							<?php // wp_list_categories(); ?> 
							<?php html5blank_sidebar_publication_cat(); ?>
						</div>
						<div class="tweets">
						<h2>Últimos Tweets</h2>
							<a class="twitter-timeline"  href="https://twitter.com/proyungas" data-widget-id="519558749917179904">Tweets por @proyungas</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
						</div>
						<?php // if( $_GET["custom"] == 'publication' ): ?>
							<div class="basic-sidebar-box categories-list">
								<h3><?php _e( 'Publicación Destacada', 'html5blank' ); ?></h3>
								<?php
									$args_grilla_home = array(
										'post_type' => 'publication',
										'paged' => 1,
										'posts_per_page' => '1',
										'tag' => 'destacado-sidebar'
									);
									$nuevo_query = new WP_query( $args_grilla_home );
									while ($nuevo_query->have_posts()) : $nuevo_query->the_post();
								?>
									<div class="home-post-container">
										<h5 class="new-category"><?php the_category(', '); // Separated by commas ?></h5>
										<!-- <h4>
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
										</h4> -->
										<h4>
											<?php the_title(); ?>
										</h4>
										<h4>
											mariano
										</h4>
										<?php the_post_thumbnail(); ?>
										<?php // if( $_GET["custom"] == 'publication' ): ?>
											<div class="data-meta">
												<?php echo get_post_meta(get_the_ID(), 'publication-meta' , true);
												?>	
											</div>
										<?php // endif ?>
										<div class="excerpt">
											<p><?php the_content();// the_excerpt(); ?></p>
										</div>
										<div class="ver-cv-dir buttons">
											<?php if ( get_post_meta(get_the_ID(), 'pdf-url' , true) ): ?>
												<?php echo "<a class='btn-green pdf' target='_blank' href='". get_post_meta(get_the_ID(), 'pdf-url' , true) ."'>Descargar PDF</a>";
												?>
											<?php endif ?>
											<?php if (get_post_meta(get_the_ID(), 'ver-lamina' , true)): ?>
												<?php echo "<a class='btn-green lamina' target='_blank' href='". get_post_meta(get_the_ID(), 'ver-lamina' , true) ."'>Ver Lámina</a>";
												?>	
											<?php endif ?>
											
										</div>

									</div>
								<?php endwhile; ?>
								<?php wp_reset_query(); ?>
							</div>
						<?php // endif ?>
					</div>
				</div>

			</section>
			<!-- /section -->
		</main>
		<script>
			$(function(){
				var selpubl = $(".basic-sidebar-box.categories-list > ul > li > a")
				selpubl.each(function(index){ al = $(this).prop("href") + "&custom=publication"; $(this).prop("href",al); });
				$(".nav-2dary > ul > li:first-child").addClass("current-menu-item");
				$("nav.nav > ul > li").removeClass("current-menu-item");
			});
		</script>

	<?php else: ?>

		<main role="main">
			<!-- section -->
			<section class="loop-header">
				<div class="row grey-tittle-row">
					<div class="medium-12 columns small-12">
						<h1 class="noticias-title"><?php _e( 'Categorías', 'html5blank' ); ?></h1>		
					</div>
				</div>
			</section>

			<section class="loop noticias-section noticias-page">
				
				<div class="row">
					<div class="medium-7 small-12 columns">
						<h3><span><?php _e( 'Categoría: ', 'html5blank' ); ?></span><?php single_cat_title(); ?></h3>
						<?php
							$args_grilla_home = array(
								'post_type' => isset( $_GET['post_type'] ) ? $_GET['post_type'] : 'post',
								'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1
							);
							$nuevo_query = new WP_query( $args_grilla_home );
							while ($nuevo_query->have_posts()) : $nuevo_query->the_post();
						?>
						<div class="home-post-container">
							
							<h4>
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
							</h4>
							<?php the_post_thumbnail(); ?>
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
							
						</div>
						<?php endwhile; ?>
						<?php wp_reset_query(); ?>
						<?php get_template_part('pagination'); ?>
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
<?php // get_sidebar(); ?>

<?php get_footer(); ?>
