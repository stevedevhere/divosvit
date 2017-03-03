<section class="presentation" id="catalog-p">
	<h2><?php the_field('cat-section-title', 5); ?></h2>
	<div class="container">
		<div class="flex">
			<?php
			if( have_rows('catalog-repeater') ):
				while ( have_rows('catalog-repeater') ): the_row();
				?>
				<div class="item">
					<a href="<?=site_url();?>/products/<?php the_sub_field('cat-slug'); ?>">
						<img src="<?php the_sub_field('cat-img'); ?>" alt="" class="img-responsive">
						<p class="title"><?=get_category_by_slug(get_sub_field('cat-slug'))->name;?></p>
					</a>
				</div>

				<?php
				endwhile;

			else:
			// no rows found
			endif;

			?>

		</div>
	</div>
</section>
