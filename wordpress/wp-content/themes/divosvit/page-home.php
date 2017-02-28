
<?php get_header(); ?>

<div class="banner">
	<section class="container flex">
		<div class="item left">
			<div class="text decorator">
				<h2 class="left-align"><?=get_field('banner-name');?></h2>
				<p class="description">
					<?php the_field('home-description') ?>
				</p>
			</div>
		</div>
		<div class="item right">
			<img class="item-img" src="<?=get_template_directory_uri(); ?>/img/banner-image.png" alt="">
		</div>
	</section>
</div>

<section class="presentation">
	<h2><?php the_field('solutions-section-title'); ?></h2>
	<div class="container">
		<div class="flex">
			<div class="item">
				<a href="<?=site_url();?>/restaurateurs">
					<img src="<?=get_template_directory_uri(); ?>/img/restaurateurs.png" alt="" class="img-responsive">
					<p class="title"><?php the_field('restor-title'); ?></p>
				</a>
			</div>
			<div class="item">
				<a href="<?=site_url();?>/hoteliers">
					<img src="<?=get_template_directory_uri(); ?>/img/hoteliers.png" alt="" class="img-responsive">
					<p class="title"><?php the_field('hotel-title'); ?></p>
				</a>
			</div>
			<div class="item">
				<a href="<?=site_url();?>/professionals">
					<img src="<?=get_template_directory_uri(); ?>/img/professionals.png" alt="" class="img-responsive">
					<p class="title"><?php the_field('prof-title'); ?></p>
				</a>
			</div>
		</div>
	</div>
</section>

<section id="news">
	<h2><?php the_field('news-title'); ?></h2>
	<div class="container">
		<div class="flex">
		<?php	$recent_posts = wp_get_recent_posts(['numberposts' => 2, 'post_type' => 'post']);
			foreach( $recent_posts as $recent ):
				$post_id = get_the_ID();
				if($recent["ID"] == $post_id) continue;
					?>
					<div class="item">
						<a href="<?php the_permalink($recent['ID']); ?>">
							<?=get_the_post_thumbnail($recent["ID"], '', array("class"=>"img-responsive")); ?>
							<p class="description"><?=$recent['post_title']; ?></p>
						</a>
					</div>
			<?php
			endforeach;
			?>
		</div>
	</div>
</section>


<?php include("brands.php") ?>


<?php get_footer(); ?>
