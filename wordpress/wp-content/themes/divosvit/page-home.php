
<?php get_header(); ?>

<div class="banner">
	<section class="container flex">
		<div class="item left">
			<div class="text decorator">
				<h2 class="left-align"><?=get_field('banner-name');?></h2>
				<p class="description">
					Якість та інновації в привабливому дизайні
					<span>ADA Cosmetics</span>
				</p>
			</div>
		</div>
		<div class="item right">
			<img class="item-img" src="<?=get_template_directory_uri(); ?>/img/banner-image.png" alt="">
		</div>
	</section>
</div>

<section class="presentation">
	<h2><span>Наші</span> рішення</h2>
	<div class="container">
		<div class="flex">
			<div class="item">
				<a href="<?=site_url();?>/restaurateurs.html">
					<img src="<?=get_template_directory_uri(); ?>/img/restaurateurs.png" alt="" class="img-responsive">
					<p class="title">Рестораторам</p>
				</a>
			</div>
			<div class="item">
				<a href="<?=site_url();?>/hoteliers.html">
					<img src="<?=get_template_directory_uri(); ?>/img/hoteliers.png" alt="" class="img-responsive">
					<p class="title">Отельєрам</p>
				</a>
			</div>
			<div class="item">
				<a href="<?=site_url();?>/professionals.html">
					<img src="<?=get_template_directory_uri(); ?>/img/professionals.png" alt="" class="img-responsive">
					<p class="title">Професіоналам</p>
				</a>
			</div>
		</div>
	</div>
</section>

<section id="news">
	<h2><span>Новини</span> компанії</h2>
	<div class="container">
		<div class="flex">
			<div class="item">
				<a href="#"><img src="<?=get_template_directory_uri(); ?>/img/news-1.png" alt="" class="img-responsive"></a>
				<p class="description">Підписано дистрибуційну угоду з Cali’ Cosmetics, Inc.</p>
			</div>
			<div class="item">
				<a href="#"><img src="<?=get_template_directory_uri(); ?>/img/news-2.png" alt="" class="img-responsive"></a>
				<p class="description">Акційні ціни на ADA Green Collection до 8 березня</p>
			</div>
		</div>
	</div>
</section>

<section id="brands">
	<h2><span>Бренди</span> з якими працюємо</h2>
	<div class="container">
		<div class="slider">
			<img src="<?=get_template_directory_uri(); ?>/img/brands/1.png">
			<img src="<?=get_template_directory_uri(); ?>/img/brands/2.png">
			<img src="<?=get_template_directory_uri(); ?>/img/brands/3.png">
			<img src="<?=get_template_directory_uri(); ?>/img/brands/4.png">
			<img src="<?=get_template_directory_uri(); ?>/img/brands/5.png">
			<img src="<?=get_template_directory_uri(); ?>/img/brands/1.png">
			<img src="<?=get_template_directory_uri(); ?>/img/brands/2.png">
			<img src="<?=get_template_directory_uri(); ?>/img/brands/3.png">
			<img src="<?=get_template_directory_uri(); ?>/img/brands/4.png">
			<img src="<?=get_template_directory_uri(); ?>/img/brands/5.png">
		</div>
	</div>
</section>


<?php get_footer(); ?>
