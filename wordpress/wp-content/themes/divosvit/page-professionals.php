
<?php get_header(); ?>
<?php // TODO: content! ?>
<?php require_once('solution-jbtron.php'); ?>

<section class="presentation" id="catalog-p">
	<h2><?php the_field('cat-section-title', 5); ?></h2>
	<div class="container">
		<div class="flex">
			<div class="item">
				<a href="<?=site_url();?>/catalog/prod-dozator-ada">
					<img src="<?=get_template_directory_uri();?>/img/cat-1.png" alt="" class="img-responsive">
					<p class="title"><?=get_category_by_slug('prod-dozator-ada')->name;?></p>
				</a>
			</div>
			<div class="item">
				<a href="<?=site_url();?>/catalog/prod-ada-bc">
					<img src="<?=get_template_directory_uri();?>/img/cat-2.png" alt="" class="img-responsive">
					<p class="title"><?=get_category_by_slug('prod-ada-bc')->name;?></p>
				</a>
			</div>
			<div class="item">
				<a href="<?=site_url();?>/catalog/prod-ada-gc">
					<img src="<?=get_template_directory_uri();?>/img/cat-3.png" alt="" class="img-responsive">
					<p class="title"><?=get_category_by_slug('prod-ada-gc')->name;?></p>
				</a>
			</div>
		</div>
	</div>
</section>

<section class="presentation pattern-bg" id="portfolio-p">
	<h2><?php the_field('portf-section-title', 5); ?></h2>
	<div class="container">
		<div class="flex">
			<div class="item">
				<a href="#restor-eidel" class="mfp portf-popup" data-mfp-src="#restor-eidel">
					<img src="<?=get_template_directory_uri();?>/img/restaurateurs.png" alt="" class="img-responsive">
					<p class="title">Ресторан Єдельвейс</p>
					<p class="description">8 фото</p>
				</a>
			</div>
			<div class="item">
				<a href="#cafe-mont" class="mfp portf-popup" data-mfp-src="#cafe-mont">
					<img src="<?=get_template_directory_uri();?>/img/hoteliers.png" alt="" class="img-responsive">
					<p class="title">Кафе Монтегрю</p>
					<p class="description">12 фото</p>
				</a>
			</div>
			<div class="item">
				<a href="#restor-forest" class="mfp portf-popup" data-mfp-src="#restor-forest">
					<img src="<?=get_template_directory_uri();?>/img/professionals.png" alt="" class="img-responsive">
					<p class="title">Ресторан Форест</p>
					<p class="description">6 фото</p>
				</a>
			</div>
		</div>
	</div>
</section>

<?php include('news-bar.php'); ?>

<!-- POP-UPs Start -->
<div id="restor-eidel" class="gallery mfp-hide">
	<img class="re-item" src="<?=get_template_directory_uri(); ?>/img/cat-1.png" data-mfp-src="<?=get_template_directory_uri(); ?>/img/cat-1.png">
	<img class="re-eidel-item" src="<?=get_template_directory_uri(); ?>/img/cat-2.png" data-mfp-src="<?=get_template_directory_uri(); ?>/img/cat-2.png">
	<img class="re-item" src="<?=get_template_directory_uri(); ?>/img/cat-3.png" data-mfp-src="<?=get_template_directory_uri(); ?>/img/cat-3.png">
	<img class="re-item" src="<?=get_template_directory_uri(); ?>/img/portf-1.png" data-mfp-src="<?=get_template_directory_uri(); ?>/img/portf-1.png">
	<img class="re-item" src="<?=get_template_directory_uri(); ?>/img/portf-2.png" data-mfp-src="<?=get_template_directory_uri(); ?>/img/portf-2.png">
	<img class="re-item" src="<?=get_template_directory_uri(); ?>/img/portf-3.png" data-mfp-src="<?=get_template_directory_uri(); ?>/img/portf-3.png">
</div>
<div id="cafe-mont" class="gallery mfp-hide">
	<img class="cm-item" src="<?=get_template_directory_uri(); ?>/img/cat-2.png" data-mfp-src="<?=get_template_directory_uri(); ?>/img/cat-2.png">
	<img class="cm-item" src="<?=get_template_directory_uri(); ?>/img/cat-1.png" data-mfp-src="<?=get_template_directory_uri(); ?>/img/cat-1.png">
	<img class="cm-item" src="<?=get_template_directory_uri(); ?>/img/cat-3.png" data-mfp-src="<?=get_template_directory_uri(); ?>/img/cat-3.png">
	<img class="cm-item" src="<?=get_template_directory_uri(); ?>/img/portf-1.png" data-mfp-src="<?=get_template_directory_uri(); ?>/img/portf-1.png">
	<img class="cm-item" src="<?=get_template_directory_uri(); ?>/img/portf-1.png" data-mfp-src="<?=get_template_directory_uri(); ?>/img/portf-1.png">
	<img class="cm-item" src="<?=get_template_directory_uri(); ?>/img/portf-2.png" data-mfp-src="<?=get_template_directory_uri(); ?>/img/portf-2.png">
	<img class="cm-item" src="<?=get_template_directory_uri(); ?>/img/portf-3.png" data-mfp-src="<?=get_template_directory_uri(); ?>/img/portf-3.png">
</div>
<div id="restor-forest" class="gallery mfp-hide">
	<img class="rf-item" src="<?=get_template_directory_uri(); ?>/img/portf-1.png" data-mfp-src="<?=get_template_directory_uri(); ?>/img/portf-1.png">
	<img class="rf-item" src="<?=get_template_directory_uri(); ?>/img/cat-1.png" data-mfp-src="<?=get_template_directory_uri(); ?>/img/cat-1.png">
	<img class="rf-item" src="<?=get_template_directory_uri(); ?>/img/cat-2.png" data-mfp-src="<?=get_template_directory_uri(); ?>/img/cat-2.png">
	<img class="rf-item" src="<?=get_template_directory_uri(); ?>/img/cat-3.png" data-mfp-src="<?=get_template_directory_uri(); ?>/img/cat-3.png">
	<img class="rf-item" src="<?=get_template_directory_uri(); ?>/img/portf-2.png" data-mfp-src="<?=get_template_directory_uri(); ?>/img/portf-2.png">
	<img class="rf-item" src="<?=get_template_directory_uri(); ?>/img/portf-2.png" data-mfp-src="<?=get_template_directory_uri(); ?>/img/portf-2.png">
	<img class="rf-item" src="<?=get_template_directory_uri(); ?>/img/portf-2.png" data-mfp-src="<?=get_template_directory_uri(); ?>/img/portf-2.png">
	<img class="rf-item" src="<?=get_template_directory_uri(); ?>/img/portf-3.png" data-mfp-src="<?=get_template_directory_uri(); ?>/img/portf-3.png">
</div>
<!-- POP-UPs End -->
<?php get_footer(); ?>
