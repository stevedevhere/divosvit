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
			<p class="description">ТОВ «Дивосвіт» 2017</p>
		</div>
		<div class="flex">
			<div class="item">
				<h2>Контакти:</h2>
				<a href="tel:">+380 - 32 - 240 - 51 - 04</a>
				<a href="tel:">+380 - 67 - 676 - 61 - 67</a>
				<a href="mailto:">bs@dyvosvit.biz</a>
			</div>
			<div class="item">
				<h2 class="hide">hidden</h2>
				<ul>
					<li><a href="<?php site_url(); ?>/about">Про компанію</a></li>
					<li><a href="<?php site_url(); ?>/news">Новини</a></li>
					<li><a href="#">Акції</a></li>
				</ul>
			</div>
			<div class="item">
				<h2>Отельєрам:</h2>
				<ul>
					<li><a href="<?php site_url(); ?>/hotelier#catalog-p">Каталоги продукції</a></li>
					<li><a href="<?php site_url(); ?>/hotelier#portfolio-p">Портфоліо рішень</a></li>
					<li><a href="<?php site_url(); ?>/hotelier#news">Корисна інформація</a></li>
				</ul>
			</div>
			<div class="item">
				<h2>Рестораторам:</h2>
				<ul>
					<li><a href="<?php site_url(); ?>/restaurateurs#catalog-p">Каталоги продукції </a></li>
					<li><a href="<?php site_url(); ?>/restaurateurs#portfolio-p">Портфоліо рішень</a></li>
					<li><a href="<?php site_url(); ?>/restaurateurs#news">Корисна інформація</a></li>
				</ul>
			</div>
			<div class="item">
				<h2>Професіоналам:</h2>
				<ul>
					<li><a href="<?php site_url(); ?>/professionals#catalog-p">Каталоги продукції</a></li>
					<li><a href="<?php site_url(); ?>/professionals#portfolio-p">Портфоліо рішень</a></li>
					<li><a href="<?php site_url(); ?>/professionals#news">Корисна інформація</a></li>
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
