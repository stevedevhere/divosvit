<?php $queried_object = get_queried_object(); ?>

<section class="jbtron">
 <div class="container">
	 <div class="content">
		 <div class="text">
			 <h2 class="left-align"><?php wp_title(''); ?></h2>
			 <p class="description small-desc">
				 <?=get_category_by_slug($cat_name)->description; ?>
			 </p>
		 </div>

     <img src="<?php the_field('cat_thumb_image', $queried_object); ?>" class="cat-img" alt="">
	 </div>
 </div>
</section>
