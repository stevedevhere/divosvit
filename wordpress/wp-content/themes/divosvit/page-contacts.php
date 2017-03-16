<?php get_header(); ?>

<section class="info">
	<div id="map-container">
		<div id="map"></div>
		<div id="text-info">
			<p class="title"><?php the_field('address-title'); ?></p>
			<p class="description"><?php the_field('address'); ?></p>
			<p class="title"><?php the_field('email-title'); ?></p>
			<p class="description"><?php the_field('email'); ?></p>
			<p class="title"><?php the_field('tel-title'); ?></p>
			<p class="description"><?php the_field('tel-1'); ?></p>
			<p class="description"><?php the_field('tel-2'); ?></p>
		</div>
	</div>
</section>
<div id="letter" class="container">
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3 letter-x">
			<h2>Надіслати листа</h2>
			<p class="description">Залиште ваші дані і наші меннеджери з вами звя'жуться найближчим часом.</p>
			<?=do_shortcode('[contact-form-7 id="282" title="product-contact-form"]');?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
