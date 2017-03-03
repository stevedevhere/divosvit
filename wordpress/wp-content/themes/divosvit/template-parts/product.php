<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package divosvit
 */

?>

<div id="popup-letter" class="col-lg-6 col-lg-offset-3 prod-popup mfp-hide">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 popup-content">
				<p class="popup-title"><?php the_field('pl-title', 5); ?></p>
				<p class="description"><?php the_field('pl-description', 5) ?></p>
				<?=do_shortcode('[contact-form-7 id="282" title="product-contact-form"]');?>
			</div>
		</div>
	</div>
</div>
<div id="popup-PD-info" class="col-lg-6 col-lg-offset-3 prod-popup mfp-hide">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 popup-content popup-paddings">
				<?php the_field('pd-inf-content', 5); ?>
			</div>
		</div>
	</div>
</div>
<div id="popup-schedule" class="col-lg-6 col-lg-offset-3 prod-popup mfp-hide">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 popup-content popup-paddings">
				<?php the_field('psc-content', 5); ?>
			</div>
		</div>
	</div>
</div>



<section id="first">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-lg-offset-1">
				<div class="product-images">
					<?php if( have_rows('photos') ): $row = 1;?>
						<?php while( have_rows('photos') ): the_row();
									$image = get_sub_field('photo');
							if($row == 1) {
								?>
								<img src="<?=$image; ?>" class="big-preview" alt=""/>
								<div class="small-preview">
								<?php
							} else { ?>
								<img src="<?=$image; ?>" alt=""/>
								<?php
							}
							?>
						<?php $row++;
									endwhile; ?>
								</div>
					<?php endif; ?>
				</div>
				<div class="product-info">
					<p class="prod-title"><?php the_title();?></p>
					<div class="small-order-descr">
						<span>Под заказ, 120 дней</span>
						<span>|</span>
						<span>Только оптом</span></p>
				</div>
				<p class="prod-descr"><?php the_field('descr'); ?></p>
				<div class="prod-info-popups flex">
					<div class="item">
						<a href="#" class="popup-PD-info-opener"
							 data-mfp-src="#popup-PD-info">
							 <?php the_field('pd-title-opener', 5); ?>
						</a>
					</div>
					<div class="item">
						<a href="#" class="popup-schedule-opener"
							 data-mfp-src="#popup-schedule">
							 <?php the_field('psc-title-opener', 5); ?>
						</a>
					</div>
				</div>
				<div class="action flex">
					<div class="item">
						<p class="description"><?php the_field('buy-descr', 5); ?></p>
					</div>
					<div class="item">
						<button class="popup-letter-opener"
										data-mfp-src="#popup-letter">
										<?=get_field('btn-write-opener', 5); ?>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="charts">
	<h2><?php the_field('ch-section-title', 5); ?></h2>
	<div class="container">
		<div class="col-lg-8 col-lg-offset-2">
			<div class="table">
				<?php if( have_rows('specifications') ): $row = 1;
								while( have_rows('specifications') ): the_row(); ?>
									<div class="flex <?php if($row == 1) { echo "horizontal-border"; } ?>">
										<div class="item">
											<p class="chart-title"><?php the_sub_field('title') ?></p>
										</div>
										<div class="item">
											<p class="chart-info"><?php the_sub_field('characteristic') ?></p>
										</div>
									</div>
						<?php	$row++;
								endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<section class="s-products">
	<h2><?php the_field('rp-section-title', 5); ?></h2>
	<div class="container">
		<div class="row">
			<div class="flex products">
				<?php //var_dump(get_the_category($post->ID));
				//echo "<br><br>" . get_the_category($post->ID)->cat_ID;
					$recentOptions = [ 'numberposts' => 4, 'post_type' => 'product'];
				 ?>
				<?php	$recent_posts = wp_get_recent_posts($recentOptions);
						foreach( $recent_posts as $recent ):
							if($recent["ID"] == get_the_ID()) continue;
								?>
								<div class="item">
									<a href="<?php the_permalink($recent['ID']); ?>">
										<img src="<?=get_field('photos', $recent['ID'])[0]['photo']; ?>" class="img-responsive " alt="">
										<p class="description"><?=$recent['post_title']; ?></p>
									</a>
								</div>
							<?php
						endforeach;
							?>
			</div>
		</div>
	</div>
</section>
