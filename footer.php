			<!-- footer -->
			<footer class="footer" role="contentinfo" style="margin-top: 40px;">

				<div class="row footer-big-row">
					<div class="column large-6 medium-6 footer-left-col">
						<div class="seguinos tac-for-small">
							<h3 class="dib vam">Seguinos</h3>
							<a href="https://www.facebook.com/pages/ProYungas/215313255167067?fref=ts" target="_blank" class="fb-social social-footer-link dib vam btn">
								<img src="<?php echo get_template_directory_uri(); ?>-child/img/home/facebook.png" alt="facebook" class="fb-img">
							</a>
							<a href="https://twitter.com/proyungas" target="_blank" class="tw-social social-footer-link dib vam btn">
								<img src="<?php echo get_template_directory_uri(); ?>-child/img/home/twitter.png" alt="twitter" class="tw-img">
							</a>
							<a href="https://www.youtube.com/user/ProYungas" target="_blank" class="youtube-social social-footer-link dib vam btn">
								<img src="<?php echo get_template_directory_uri(); ?>-child/img/home/youtube.png" alt="youtube" class="youtube-img">
							</a>
							<a href="https://www.flickr.com/photos/proyungas/" target="_blank" class="flicker-social social-footer-link dib vam btn">
								<img src="<?php echo get_template_directory_uri(); ?>-child/img/home/flickr.png" alt="flicker" class="flicker-img">
							</a>
							<div class="share-add-this-wrap"></div>
						</div>
						<div class="offices">
							<h3>Oficinas</h3>
							<div class="row">
								<div class="office column large-6 medium-12">
									<h6>Tucumán</h6>
									<span class="telefono">Tel/Fax: 54-381-4253728</span>
									<a href="mailto:administracion@propyungas.org.ar" class="mail">administracion@proyungas.org.ar</a>
								</div>
								<div class="office column large-6 medium-12">
									<h6>Salta</h6>
									<span class="telefono">Tel/Fax: 54-387-4219326</span>
									<a href="mailto:proyungassalta@proyungas.org.ar" class="mail">proyungassalta@proyungas.org.ar</a>
								</div>
								<div class="office column large-6 medium-12">
									<h6>Jujuy</h6>
									<span class="telefono">Tel/Fax: 54-388-4261522</span>
									<a href="mailto:proyungasjujuy@proyungas.org.ar" class="mail">proyungasjujuy@proyungas.org.ar</a>
								</div>
								<div class="office column large-6 medium-12">
									<h6>Buenos Aires</h6>
									<span class="telefono">Tel/Fax: 54-11-21739104</span>
									<a href="mailto:avelina@proyungas.org.ar" class="mail">avelina@proyungas.org.ar</a>
								</div>
							</div>
						</div>
					</div> 
					<!-- end large-6 left-col-footer -->

					<div class="footer-right-col large-6 column medium-6">
						<div class="links hide-for-small row">
							<div class="small-6 column large-6">
								<h4 class="title-link-footer">Quienes Somos</h5>
								<ul class="links-footer">
									<?php 
										// Esto es el feed para traer las paginas con tag QS.
										$args_grilla_home = array(
											'post_type' => 'page',
											'posts_per_page' => '10',
											'meta_key' => 'QSpage', 'meta_value' => 'si', 'meta_compare' => '=='
										);
										$nuevo_query = new WP_query( $args_grilla_home );
										
											while ($nuevo_query->have_posts()) : $nuevo_query->the_post(); ?>
												
												<li>
													<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
												</li>
								
											<?php endwhile;
										wp_reset_query();
									?>
									<li>
										<a title="Balance" href="?page_id=6&custom=grafico">Balance</a>
									</li>
								</ul>
								<!-- <h4 class="title-link-footer">
									<a href="#">Proyectos</a>
								</h4>
								<ul class="links-footer">
									<li><a href="#">Biodiversidad</a></li>
									<li><a href="#">Gestión Comunitaria</a></li>
									<li><a href="#">Productos y Servicios Sustentables</a></li>
									<li><a href="#">Areas protegidas</a></li>
									<li><a href="#">Investigación, Capacitación y Difusión</a></li>
									<li><a href="#">Gestión Forestal</a></li>
								</ul>
								<h4 class="title-link-footer">
									<a href="#">Servicios</a>
								</h4> -->
								<div class="menu-footer">
									<?php html5blank_nav_footer(); ?>
								</div>
								
							</div>

							<div class="small-6 column large-6">
								<!-- <h4 class="title-link-footer">
									<a href="#">Nos acompañan</a>
								</h4>

								<h4 class="title-link-footer">
									<a href="#">Noticias</a>
								</h4>
								<ul class="links-footer">
									<li><a href="#">Agropecuario</a></li>
									<li><a href="#">Forestal</a></li>
									<li><a href="#">Ambiental</a></li>
									<li><a href="#">Social</a></li>
									<li><a href="#">Institucional</a></li>
									<li><a class="more-footer" href="#">Ver más</a></li>
								</ul> -->
								<div class="menu-footer">
									<?php html5blank_nav_right_footer(); ?>
								</div>
								

								<!-- <h4 class="title-link-footer">
									<a href="#">Publicaciones</a>
								</h4>

								<h4 class="title-link-footer">
									<a href="#">Pasantías</a>
								</h4>
								<h4 class="title-link-footer">
									<a href="#">Contacto</a>
								</h4> -->

								<nav class="nav-2dary" role="navigation">
									<?php html5blank_nav_secondary(); ?>
								</nav>

							</div>

							
						</div>
					</div>
					<!-- end right-col-footer large-6 -->
				</div> 
				<!-- end row del footer -->
				
				<div class="full-width-copyr">
					<div class="row">
						<div class="large-12 column">
							<!-- copyright -->
							<div class="copyright tar-for-large tac-for-small">
								&copy; <?php //echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php // _e('Powered by', 'html5blank'); ?>
								<!-- <a href="//wordpress.org" title="WordPress">WordPress</a> --> <!-- <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>. -->
							</div>
							<!-- /copyright -->
						</div>
					</div>
				</div>

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- <div class="menu-responsive">
			<?php html5blank_nav(); ?>
			<?php html5blank_nav_secondary(); ?>
		</div> -->
		
<!-- 
		<script src="<?php // echo get_template_directory_uri(); ?>-child/foundation-5.3.3/js/foundation/foundation.js"></script>
		<script src="<?php // echo get_template_directory_uri(); ?>-child/foundation-5.3.3/js/foundation/foundation-orbit.js"></script>
 -->
		<script src="<?php echo get_template_directory_uri(); ?>-child/foundation-5.3.3/js/foundation.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>-child/js/jquery.waituntilexists.js"></script>
		<script>
			jQuery(function($){
				$(document).foundation();
			});
		</script>
		
		<script src="<?php echo get_template_directory_uri(); ?>-child/js/jquery.pageslide.min.js"></script>
		<script type="text/javascript">
		    jQuery('a.menu-trigger').pageslide();
		</script>
		<script>
			// $(function(){
				jQuery("#twitter-widget-0").waitUntilExists(function(){
					jQuery("#twitter-widget-0").contents().find("head").append('<style>.timeline-header,.timeline-footer{display:none;}.stream > button.load-more{display:none;}div.timeline{background: transparent;}li.tweet{border-color: #fff; padding: 23px 12px 4px 57px;}li.tweet:first-child{padding-top: 12px;}ul.tweet-actions {background: none repeat scroll 0 0 rgba(0, 0, 0, 0);box-shadow: none;}.tweet-actions > li > a:hover > i,.tweet-actions > li > a > i{background-color: transparent!important;}i.ic-reply{background-position: -104px -86px;}i.ic-retweet{background-position: -108px -103px;}i.ic-fav{background-position: -102px -123px;}li:hover > a > .ic-reply {background-position: -81px -86px;}li:hover > a > .ic-retweet {background-position: -81px -103px;}li:hover > a > .ic-fav {background-position: -81px -123px;}');
				});
				
			// });
			
		</script>
		<script>
			// $(document).ready(function(){
			// 	$(".content-tabs-pasantes,.tabs-pasantes").find(".active").removeClass("active");

			// 	$("dd > a").click(function(e){
			// 		$(this).parents("div.tabs-pasantes").siblings("div.tabs-pasantes").find("dd").removeClass("active");

			// 		$(this).parents("div.tabs-pasantes").next().siblings("div.content-tabs-pasantes").find(".tab-content-wrap").removeClass("active");	
			// 	});
				
			// });
		</script>

		<script>
			jQuery(function(){
				// $("a[title='Proyectos'] + ul.sub-menu")
				var sel = jQuery("nav.nav ul li.menu-item-has-children:nth-child(3) > ul > li > a,a[title='Proyectos'] + ul.sub-menu li a,div#menu-wrap > ul > li.menu-item-has-children:nth-child(3) > ul > li > a");
				sel.each(function(index){ al = jQuery(this).prop("href") + "&custom=proyect"; jQuery(this).prop("href",al); });
			});
		</script>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
