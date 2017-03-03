
<?php get_header();
require_once('solution-jbtron.php');
require_once('catalog-p.php'); ?>

<section class="presentation pattern-bg" id="portfolio-p">
	<h2><?php the_field('portf-section-title', 5); ?></h2>
	<div class="container">
		<div class="flex">
			<?php include_once('solution-portfolio.php'); ?>
		</div>
	</div>
</section>

<?php include('news-bar.php'); ?>

<!-- POP-UPs Start -->
<?php include_once('solution-popups.php'); ?>
<!-- POP-UPs End -->

<?php get_footer(); ?>
