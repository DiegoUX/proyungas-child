<?php get_header(); ?>

	<?php if( isset($_GET["custom"]) && $_GET["custom"] == "grafico" ): ?>
		<?php remove_filter( 'the_content', 'wpautop' ); ?>

		<main role="main">
			<!-- section - contenido Balance -->
			<section class="loop-header <?php the_title(); ?>">
				<div class="row grey-tittle-row">
					<div class="medium-12 columns small-12">
						<h1 class="QS-title">Quiénes Somos</h1>		
					</div>
				</div>
			</section>

			<section class="qs paddtop">
				<div class="row">
					<div class="small-12 columns large-12 large-centered medium-12 tac">
						<h2>Documentos de Interés</h2>
					</div>
				</div>
			</section>
			<section class="documentos-interes qs paddbott">
				<div class="row">
					<div class="columns small-12 medium-4 documento tac">
						<div class="img-doc tac">
							<img src="<?php echo get_template_directory_uri(); ?>-child/img/estrategia.png" alt="" class="img-doc">
						</div>
						<div>
							<h3 class="tac">Estrategia de la Fundación Proyungas</h3>
						</div>
						<a href="http://proyungas.org.ar/wp-content/uploads/2015/01/FUNDACION_PROYUNGAS_DOC_INSTITUCIONAL.pdf" class="btn-green"target="_blank"> PDF</a>

					</div>
					<div class="columns small-12 medium-4 documento tac">
						<div class="img-doc tac">
							<img src="<?php echo get_template_directory_uri(); ?>-child/img/politica-seguridad.png" alt="Política de Salud, Seguridad y Medio Ambiente" class="img-doc">
						</div>
						<div>
							<h3 class="tac">Política de Salud, Seguridad y Medio Ambiente</h3>
						</div>
						<a href="#" class="btn-green"target="_blank"> PDF</a>

					</div>
					<div class="columns small-12 medium-4 documento tac">
						<div class="img-doc tac">
							<img src="http://proyungas.org.ar/wp-content/uploads/2015/01/sector-empresarial.png" alt="ProYungas y el Sector Empresarial" class="img-doc">
						</div>
						<div>
							<h3 class="tac">ProYungas y el Sector Empresarial</h3>
						</div>
						<a href="http://proyungas.org.ar/wp-content/uploads/2015/01/ProYungas_y_el_sector_empresarial.pdf" class="btn-green"target="_blank"> PDF</a>

					</div>
				</div>
			</section>
			<section class="slider-balance">
				<ul class="example-orbit-content" data-orbit>
				 	<li data-orbit-slide="headline-1">
					 	<div class="row">
							<div class="medium-12 columns small-12 tac">
								<h2>Memorias y Estados Contables de la Fundación ProYungas</h2>
							</div>
							<div class="mygrid-1-5-for-medium columns tac">
								<h3>2014</h3>
								<div>
									<a href="#" class="slide-pdf-link"target="_blank">VER PDF</a>
								</div>
							</div>
							<div class="mygrid-1-5-for-medium columns tac">
								<h3>2013</h3>
								<div>
									<a href="http://proyungas.org.ar/wp-content/uploads/2015/01/Balance_ProYungas_2013.pdf" class="slide-pdf-link"target="_blank">VER PDF</a>
								</div>
							</div>
							<div class="mygrid-1-5-for-medium columns tac">
								<h3>2012</h3>
								<div>
									<a href="http://proyungas.org.ar/wp-content/uploads/2015/01/Balance_ProYungas_2012.pdf" class="slide-pdf-link"target="_blank">VER PDF</a>
								</div>
							</div>
							<div class="mygrid-1-5-for-medium columns tac">
								<h3>2011</h3>
								<div>
									<a href="http://proyungas.org.ar/wp-content/uploads/2015/01/Balance_ProYungas_2011.pdf" class="slide-pdf-link"target="_blank">VER PDF</a>
								</div>
							</div>
							<div class="mygrid-1-5-for-medium columns tac">
								<h3>2010</h3>
								<div>
									<a href="http://proyungas.org.ar/wp-content/uploads/2015/01/Balance_ProYungas_2010.pdf" class="slide-pdf-link" target="_blank">VER PDF</a>
								</div>
							</div>
					 	</div>
				 	</li>
				 	<!--<li data-orbit-slide="headline-2">
					 	<div class="row">
							<div class="medium-12 columns small-12 tac">
								<h2>Memorias y Estados Contables de la Fundación ProYungas</h2>
							</div>
							<div class="mygrid-1-5-for-medium columns tac">
								<h3>2014</h3>
								<div>
									<a href="#" class="slide-pdf-link">Descargar PDF</a>
								</div>
							</div>
							<div class="mygrid-1-5-for-medium columns tac">
								<h3>2014</h3>
								<div>
									<a href="#" class="slide-pdf-link">Descargar PDF</a>
								</div>
							</div>
							<div class="mygrid-1-5-for-medium columns tac">
								<h3>2014</h3>
								<div>
									<a href="#" class="slide-pdf-link">Descargar PDF</a>
								</div>
							</div>
							<div class="mygrid-1-5-for-medium columns tac">
								<h3>2014</h3>
								<div>
									<a href="#" class="slide-pdf-link">Descargar PDF</a>
								</div>
							</div>
							<div class="mygrid-1-5-for-medium columns tac">
								<h3>2014</h3>
								<div>
									<a href="#" class="slide-pdf-link">Descargar PDF</a>
								</div>
							</div>
					 	</div>
				 	</li> -->
				 	<!--<li data-orbit-slide="headline-3">
					 	<div class="row">
							<div class="medium-12 columns small-12 tac">
								<h2>Memorias y Estados Contables de la Fundación ProYungas</h2>
							</div>
							<div class="mygrid-1-5-for-medium columns tac">
								<h3>2014</h3>
								<div>
									<a href="#" class="slide-pdf-link">Descargar PDF</a>
								</div>
							</div>
							<div class="mygrid-1-5-for-medium columns tac">
								<h3>2014</h3>
								<div>
									<a href="#" class="slide-pdf-link">Descargar PDF</a>
								</div>
							</div>
							<div class="mygrid-1-5-for-medium columns tac">
								<h3>2014</h3>
								<div>
									<a href="#" class="slide-pdf-link">Descargar PDF</a>
								</div>
							</div>
							<div class="mygrid-1-5-for-medium columns tac">
								<h3>2014</h3>
								<div>
									<a href="#" class="slide-pdf-link">Descargar PDF</a>
								</div>
							</div>
							<div class="mygrid-1-5-for-medium columns tac">
								<h3>2014</h3>
								<div>
									<a href="#" class="slide-pdf-link">Descargar PDF</a>
								</div>
							</div>
					 	</div>
				 	</li>-->
				</ul>

			</section>

			<section class="qs paddtop">
				<div class="row">
					<div class="small-12 columns large-12 large-centered medium-12 tac feed-graficos-title-balance">
						<h2>Recursos y presupuestos</h2>
					</div>
				</div>
			</section>
			<!-- /end section Balance contenido -->
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
			<div class="row tar pag">
				<?php get_template_part('pagination'); ?>	
			</div>
			
			<!-- $wp_query = NULL;
			$wp_query = $temp_query; -->

		</section>
		<script>
			// $("nav.nav > ul > li:first-child").addClass("current-menu-item");
			jQuery(function(){
				// $("nav.nav > ul > li:nth-child(2)").addClass("current-menu-item");
				jQuery("nav.nav > ul > li:nth-child(2)").addClass("current-menu-item").siblings().removeClass("current-menu-item");
			});
		</script>
	<!-- end del if custom == grafico -->
	<?php elseif( isset($_GET["custom"]) && $_GET["custom"] == "publication" ): ?>
		<main role="main">
		<!-- section -->

			<section class="loop-header">
				<div class="row grey-tittle-row">
					<div class="medium-12 columns small-12">
						<h1 class="publicaciones-title"><?php _e( 'Publicaciones', 'html5blank' ); ?></h1>
					</div>
				</div>
			</section>

			<section class="loop noticias-section noticias-page">
				
				<div class="row">
					<div class="medium-7 small-12 columns">
						
						<?php
							$args_grilla_home = array(
								'post_type' => 'publication',
								'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1,
								'posts_per_page' => '20'
							);
							$nuevo_query = new WP_query( $args_grilla_home );
							while ($nuevo_query->have_posts()) : $nuevo_query->the_post();
						?>
							<div class="home-post-container">
								<h5 class="new-category"><?php the_category(', '); // Separated by commas ?></h5>
								<h4>
									<!-- <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a> -->
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
									<!-- <?php the_excerpt(); ?> -->
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
						<?php get_template_part('pagination'); ?>
						<!-- <?php wp_pagenavi(); ?> -->
					</div>
					<div class="medium-5 small-12 columns">
						
						<div class="basic-sidebar-box categories-list">
							<h3><?php _e( 'Categorías', 'html5blank' ); ?></h3>
							<?php // wp_list_categories(); ?> 
							<?php html5blank_sidebar_publication_cat(); ?>
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
										<h4>
											<!-- <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a> -->
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
			jQuery(function(){
				var selpubl = jQuery(".basic-sidebar-box.categories-list > ul > li > a")
				selpubl.each(function(index){ al = jQuery(this).prop("href") + "&custom=publication"; jQuery(this).prop("href",al); });

				jQuery(".nav-2dary > ul > li:first-child").addClass("current-menu-item");

				jQuery("nav.nav > ul > li").removeClass("current-menu-item");
			});
		</script>
	
	<?php else: ?>
		<main role="main">
		<!-- section -->

			<section class="loop-header">
				<div class="row grey-tittle-row">
					<div class="medium-12 columns small-12">		
						<h1 class="noticias-title"><?php _e( 'Noticias', 'html5blank' ); ?></h1>

					</div>
				</div>
			</section>

			<section class="loop noticias-section noticias-page">
				
				<div class="row">
					<div class="medium-7 small-12 columns">
						
						<?php
							$args_grilla_home = array(
								'post_type' => 'post',
								'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1
							);
							$nuevo_query = new WP_query( $args_grilla_home );
							while ($nuevo_query->have_posts()) : $nuevo_query->the_post();
						?>
							<div class="home-post-container">
								<h5 class="new-category"><?php the_category(', '); // Separated by commas ?></h5>
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
								<div class="ver-cv-dir buttons">
									<?php if ( get_post_meta(get_the_ID(), 'pdf-url' , true) ): ?>
										<?php echo "<a class='btn-green pdf' target='_blank' href='". get_post_meta(get_the_ID(), 'pdf-url' , true) ."'>Ver CV</a>";
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
						<?php get_template_part('pagination'); ?>
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

<?php if( isset($_GET["custom"] )): ?>
 	<script>
 		jQuery(function(){
 			jQuery("body").addClass("no-noticias");
 		});

 	</script>
<?php endif ?>

<?php get_footer(); ?>
<!-- 026867 -->