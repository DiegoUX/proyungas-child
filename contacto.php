<?php /* Template Name: contacto-page */ get_header(); ?>
<?php remove_filter( 'the_content', 'wpautop' ); ?>

	<main role="main">
		<!-- section -->
		<section class="loop-header <?php the_title(); ?>">
			<div class="row grey-tittle-row">
				<div class="medium-12 columns small-12">
					<h1 class="contact-title"><?php the_title(); ?></h1>		
				</div>
			</div>
		</section>

		<section class="contact-page">
			<div class="row">
				<div class="medium-7 columns small-12">
					<?php edit_post_link(); ?>
					<?php if (have_posts()): while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; ?>
					<?php endif; ?>
					<div class="contact-section row">
						<div class="column small-12 medium-12">
							<h2 class="contact-second-title">Prensa</h2>
						</div>
						<div class="medium-6 column small-12 contact-box end">
							<span class="nombre-contactos">Departamento de Prensa</span>
							<a href="mailto:prensa@proyungas.com.ar">prensa@proyungas.com.ar</a>
						</div>
					</div>
					<div class="contact-section row">
						<div class="column small-12 medium-12">
							<h2 class="contact-second-title">Organizaciones Socias</h2>
						</div>
						<div class="medium-6 column small-12 contact-box">
							<h3 class="little-title">FUNDACIÓN NATIVA</h3>
							<span class="nombre-contactos">Iván Arnold</span>
							<a href="http://www.nativabolivia.com" target="_blank">www.nativabolivia.com</a>
						</div>
						<div class="medium-6 column small-12 contact-box">
							<h3 class="little-title">Fundación Gran Chaco</h3>
							<span class="nombre-contactos">Agustín Noriega</span>
							<a href="http://www.redeschaco.org" target="_blank">www.redeschaco.org</a>
						</div>
						<div class="medium-6 column small-12 contact-box">
							<h3 class="little-title">Fundación Moisés Bertoni</h3>
							<span class="nombre-contactos">Yan Speranza</span>
							<a href="http://www.mbertoni.org.py" target="_blank">www.mbertoni.org.py</a>
						</div>
						<div class="medium-6 column small-12 contact-box end">
							<h3 class="little-title">Redes Chaco</h3>
							<span class="nombre-contactos">Pablo Frere</span>
							<a href="http://www.gran-chaco.org" target="_blank">www.gran-chaco.org</a>
						</div>
					</div>
				</div>
				<div class="medium-5 columns small-12">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3560.973245827811!2d-65.28432780000003!3d-26.808980500000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94225d2b589f19f9%3A0xac245be04ae93abd!2zUGVyw7ogMTE4MCwgWWVyYmEgQnVlbmEsIFR1Y3Vtw6Fu!5e0!3m2!1sen!2sar!4v1411500681163" width="300" height="400" frameborder="0" style="border:0"></iframe>
					<div class="sidebar most-readed-articles basic-sidebar-box">
						<h2>Nuestras Oficinas</h2>
						<div class="office">
							<h3>Tucumán</h3>
							<p class="office-data">Perú 1180 (4107) Yerba Buena</p>
							<p class="office-data">Tucumán <span>.</span> Argentina</p>
							<p class="office-data">Tel/Fax: 54-381-4253728</p>
							<p class="office-data"><a href="mailto:administracion@proyungas.com.ar">administracion@proyungas.com.ar</a></p>
						</div>
						<div class="office">
							<h3>Jujuy</h3>
							<p class="office-data">Museo Pasquini López - Victor Hugo 45 - (B° Alto La Viña)</p>
							<p class="office-data">(4600) Jujuy <span>.</span> Argentina</p>
							<p class="office-data">Tel/Fax: 54-388-4261522</p>
							<p class="office-data"><a href="mailto:administracion@proyungas.com.ar">proyungasjujuy@proyungas.org.ar</a></p>
						</div>
						<div class="office">
							<h3>Salta</h3>
							<p class="office-data">Lerma 128 <span>
							<p class="office-data">(4400) Salta <span>.</span> Argentina</p>
							<p class="office-data">Tel/Fax: 54-387-4219326</p>
							<p class="office-data"><a href="mailto:administracion@proyungas.com.ar">proyungassalta@proyungas.org.ar</a></p>
						</div>
						<div class="office">
							<h3>Buenos Aires</h3>
							<p class="office-data">Av. Entre Ríos 258 <span>.</span> 3er piso <span>.</span>Oficina E</p>
							<p class="office-data">(1079) C.A.B.A. Capital Federal <span>.</span> Argentina</p>
							<p class="office-data">Tel/Fax: 54-11-21739104</p>
							<p class="office-data"><a href="mailto:administracion@proyungas.com.ar">avelina@productoyungas.org.ar</a></p>
						</div>
					</div>
				</div>
			</div>
				
		

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
