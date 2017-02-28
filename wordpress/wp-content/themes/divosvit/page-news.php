<?php get_header(); ?>

<section id="all-news">
	<h2><?php the_field('news-title', 5); ?></h2>
	<div class="flex">


			<?php
			$query = new WP_Query('post_type=post&category_name=news&nopaging=1'); // указываем категорию 9 и выключаем разбиение на страницы (пагинацию)
			if( $query->have_posts() ){
				while( $query->have_posts() ){ $query->the_post();
				?>
				<div class="item post">
					<a class="post" href="<?php the_permalink(); ?>">
					<div class="post-image">
						<?php the_post_thumbnail(); ?>
					</div>
					<div class="post-text">
						<p class="post-text-excerpt"><?php the_title(); ?><?php the_field("excerpt"); ?></p>
						<p class="post-text-publicated"><?php the_date(); ?></p>

					</div>
					</a>
				</div>
				<?php
				}
				wp_reset_postdata(); // сбрасываем переменную $post
			}
			?>
	</div>
	<div class="pagination"> <?php // TODO: news pagination ?>
		<a href="#" class="prev">Попереднея сторінка</a>
		<a href="#" class="next">Наступна сторінка</a>
	</div>
</section>


<?php get_footer(); ?>
