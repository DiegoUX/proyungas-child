<?php /* Template Name: basic-template-page-pasantias */ get_header(); ?>
<?php remove_filter( 'the_content', 'wpautop' ); ?>

	<main role="main">
		<!-- section -->
		<section class="loop-header <?php the_title(); ?>">
			<div class="row grey-tittle-row">
				<div class="medium-12 columns small-12">
					<h1 class="<?php the_title(); ?>-title"><?php the_title(); ?></h1>		
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
	<section class="pasantes-pasantia">
		<div class="row">
			<div class="small-12 columns large-12 tac">
				<h4>Pasantes</h4>
			</div>
		</div>
		<?php 
			$grid_size = 4;
			$i=0;
			$args_grilla_home = array(
				'post_type' => ($_GET['post_type']) ? $_GET['post_type'] : 'pasante',
				'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1,
				'posts_per_page' => '1000'
			);
			$nuevo_query = new WP_query( $args_grilla_home );
			while ($nuevo_query->have_posts()) : $nuevo_query->the_post();	 ?>
			
			<?php
				if( ( ($i + 1 ) % $grid_size )  == 1){
					//es el primero de la fila  ?>
					<div class="row tabs-pasantes">
						<dl data-tab class="tabs">
			<?php
				}
				?>
					
							<dd class="active">
							  	<a href="#tab<?php echo ($i + 1); ?>">
							  		<div class='simple-thumbnail'>
							  			<?php the_post_thumbnail(); ?>
									</div>
									<h5><?php the_title(); ?></h5>
									<?php echo "<span class='content-description'>".get_post(get_post_thumbnail_id())->post_content."</span>"; ?>
								</a>
						  	<!-- </dd> -->
					
				<?php
				$index = $i % $grid_size;
				$tab_contents[$index] = '<div class="row"><div class="columns small-12 medium-9">' . get_the_content() . '</div><div class="columns small-12 medium-3 tac"><div><a class="mail-link" href="mailto: ' . get_post(get_post_thumbnail_id())->post_excerpt . '">' . get_post(get_post_thumbnail_id())->post_excerpt . '</a></div><div><a class="btn-green" target="_blank" href="' . get_post_meta(get_the_ID(), 'pdf-url' , true) . '">Ver CV</a></div></div></div>';
				?>
								<!-- code for responsive tab-content -->
								<div class="mobile-tab-content">
									<?php echo $tab_contents[$index]; ?>
								</div>
								<!-- end of code for responsive tab-content -->
						  	</dd>
				
				<?php  
				if( ( ($i + 1 ) % $grid_size )  == 0){
					// Es el ultimo de la fila ?>
						</dl> 
					</div>
					<div class="content-tabs-pasantes">
						<div>
							 <?php  
							 $id = $i - $grid_size + 2;
							for ($j=0; $j < $grid_size ; $j++) { 
									
									echo "<div class='tab-content-wrap content' id='tab". $id . "'>";
									echo $tab_contents[$j];
									echo "</div>";
									$id = $id + 1;
								}

							 ?>
						</div>
					</div>
					<?php
				}


				$i = $i +1;
			?>
		
		<?php endwhile; ?>

		<?php wp_reset_query(); ?>
		<?php 
		$mod = $i % $grid_size;
		if ( $mod > 0) {
			// la ultima fila no tenía el maximo de elementos de la grilla(4)
			// echo "<div class='tabs-content'>";
			?>
				</dl>
			</div>
			<div class="content-tabs-pasantes">
				<div>
			<?php
			$id = $i - $mod + 1;
			for ($k = 0; $k < $mod ; $k++) { 
				// $id = $i - $mod + 1;
				echo "<div class='tab-content-wrap content' id='tab". $id . "'>";
				echo $tab_contents[$k];
				echo "</div>";
				$id = $id + 1;
			}
			echo "</div></div>";
			}
		 ?>

		
				
	</section>
	<script>
		jQuery(document).ready(function($){
			$(".content-tabs-pasantes,.tabs-pasantes").find(".active").removeClass("active");

			$("dd > a").click(function(e){
				$(this).parents("div.tabs-pasantes").siblings("div.tabs-pasantes").find("dd").removeClass("active");

				$(this).parents("div.tabs-pasantes").next().siblings("div.content-tabs-pasantes").find(".tab-content-wrap").removeClass("active");	
			});
			
		});
	</script>
<?php //get_sidebar(); ?>

<?php get_footer(); ?>
