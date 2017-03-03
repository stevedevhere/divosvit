<?php get_header(); ?>

<section id="all-news">
	<h2><?php the_field('news-title', 5); ?></h2>
	<div class="flex">


			<?php
			$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
			$query = new WP_Query("post_type=post&posts_per_page=4&paged={$paged}");
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
				?>
				<div class="pagination">
					<?php
						previous_posts_link( get_field('prev-text', 5), 1 );
						next_posts_link( get_field('next-text', 5) , $query->max_num_pages);
					?>
				</div>

				<?php
				wp_reset_postdata(); // сбрасываем переменную $post
			}
			?>
	</div>
</section>


<?php get_footer(); ?>
