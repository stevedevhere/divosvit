<?php get_header(); ?>


 <section id="catalog">
 	<div class="container">
    <h2 class="pt0">Каталоги</h2>
 		<div class="row">
 			<div class="flex products catalogs">
 				<?php
				$args = array(
					'child_of'     => 9,
					'taxonomy'     => 'category'
				);
        $categories = get_categories( $args );
				if( $categories ){

					foreach( $categories as $cat ){

 					?>
 					<div class="item">
 						<a href="<?=get_category_link($cat->cat_ID); ?>" target="_blank">
 							<img src="<?php the_field('cat-preview',  $cat->taxonomy . '_' . $cat->term_id); ?>" alt="" class="img-responsive">
 							<p class="description"><?=$cat->name?></p>
 						</a>
 					</div>
 					<?php
 					}
        	wp_reset_postdata(); // сбрасываем переменную $post
 				}
 				?>



 			</div>
 			<?php include_once('products-pagination.php'); ?>
 		</div>
 	</div>
 </section>


<?php get_footer(); ?>
