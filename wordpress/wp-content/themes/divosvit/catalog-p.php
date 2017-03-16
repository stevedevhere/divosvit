<section class="presentation" id="catalog-p">
	<a href="/catalogs"><h2><?php the_field('cat-section-title', 5); ?></h2></a>
	<div class="container">
		<div class="flex">
			<?php
			if( have_rows('catalog-repeater') ):
				while ( have_rows('catalog-repeater') ): the_row();
					$cat = get_category_by_slug(get_sub_field('cat-slug'));
				?>
				<div class="item">
					<a href="<?=get_category_link($cat->cat_ID); ?>" target="_blank">
						<img src="<?php the_field('cat-preview',  $cat->taxonomy . '_' . $cat->term_id); ?>" alt="" class="img-responsive">
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
