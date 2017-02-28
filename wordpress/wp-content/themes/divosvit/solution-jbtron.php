<section class="jbtron">
 <div class="container">
	 <div class="content">
		 <div class="text">
			 <h2 class="left-align"><?php wp_title(''); ?></h2>
			 <p class="description small-desc">
				    <?php the_field('sol-description'); ?>
			 </p>
		 </div>
		 <img src="<?php the_post_thumbnail_url(); ?>" class="cat-img" alt="">
	 </div>
 </div>
</section>
