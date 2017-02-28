<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package divosvit
 */

?>

<footer id="footer">
	<div class="container">
		<div class="stx">
			<div class="logo"><img src="<?=get_template_directory_uri();?>/img/logo.png" alt=""></div>
			<p class="description"><?php the_field('copyright', 5); ?></p>
		</div>
		<div class="flex">
			<div class="item">
				<h2><?php the_field('contacts-title', 5); ?>:</h2>
				<a class="no-locale" href="tel:">+380 - 32 - 240 - 51 - 04</a>
				<a class="no-locale" href="tel:">+380 - 67 - 676 - 61 - 67</a>
				<a class="no-locale" href="mailto:">bs@dyvosvit.biz</a>
			</div>
			<div class="item">
				<h2 class="hide">hidden</h2>
				<ul>
						<li><a href="<?php site_url(); ?>/about"><?php the_field('abt-title', 5);	 ?></a></li>
					<li><a href="<?php site_url(); ?>/news"><?php the_field('x-news-title', 5); ?></a></li>
				</ul>
			</div>
			<div class="item">
				<h2><?php the_field('hotel-title', 5); ?>:</h2>
				<ul>
					<li><a href="<?php site_url(); ?>/hoteliers#catalog-p"><?php the_field('cat-section-title', 5); ?></a></li>
					<li><a href="<?php site_url(); ?>/hoteliers#portfolio-p"><?php the_field('portf-section-title', 5); ?></a></li>
					<li><a href="<?php site_url(); ?>/hoteliers#news"><?php the_field('news-title', 5); ?></a></li>
				</ul>
			</div>
			<div class="item">
				<h2><?php the_field('restor-title', 5); ?>:</h2>
				<ul>
					<li><a href="<?php site_url(); ?>/restaurateurs#catalog-p"><?php the_field('cat-section-title', 5); ?></a></li>
					<li><a href="<?php site_url(); ?>/restaurateurs#portfolio-p"><?php the_field('portf-section-title', 5); ?></a></li>
					<li><a href="<?php site_url(); ?>/restaurateurs#news"><?php the_field('news-title', 5); ?></a></li>
				</ul>
			</div>
			<div class="item">
				<h2><?php the_field('prof-title', 5); ?>:</h2>
				<ul>
					<li><a href="<?php site_url(); ?>/professionals#catalog-p"><?php the_field('cat-section-title', 5); ?></a></li>
					<li><a href="<?php site_url(); ?>/professionals#portfolio-p"><?php the_field('portf-section-title', 5); ?></a></li>
					<li><a href="<?php site_url(); ?>/professionals#news"><?php the_field('news-title', 5); ?></a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>

</div>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?=get_template_directory_uri(); ?>/css/main.min.css">
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNzxn57ZGRW9yicfbqdiOjp0_U141y2S4"></script>
<script src="<?=get_template_directory_uri();?>/js/scripts.min.js"></script>
<script src="<?=get_template_directory_uri();?>/js/common.js"></script>

<?php wp_footer(); ?>
</body>
</html>
