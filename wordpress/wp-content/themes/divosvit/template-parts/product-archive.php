<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package divosvit
 */
 ?>

 <section id="catalog">
 	<div class="container">
 		<div class="row">
 			<div class="flex products">
 				<?php
        $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
 				$query = new WP_Query(
          array(
            'post_type' => 'product',
            'showposts' => 12,
            'paged' => $paged
          )
        );
 				if( $query->have_posts() ){
 					while( $query->have_posts() ){ $query->the_post();
 					?>
 					<div class="item">
 						<a href="<?php the_permalink($query->ID); ?>">
 							<img src="<?=get_field('photos', $query->ID)[0]['photo']; ?>" class="img-responsive" alt="">
 							<p class="description"><?php the_title(); ?></p>
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
