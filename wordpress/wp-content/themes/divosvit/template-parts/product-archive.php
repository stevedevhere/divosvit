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
 				$query = new WP_Query('post_type=product&nopaging=1'); // указываем категорию 9 и выключаем разбиение на страницы (пагинацию)
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

 			<div class="pagination"> <?php // TODO: product pagination! ?>
 				<a href="#">1</a>
 				<a href="#">2</a>
 				<a href="#">3</a>
 				<p class="sep">...</p>
 				<a href="#">6</a>
 				<a href="#">7</a>
 				<a href="#">8</a>
 			</div>
 		</div>
 	</div>
 </section>
