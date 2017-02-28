<?php get_header(); ?>

<section class="jbtron">
	<div class="container">
		<div class="content">
			<div class="text">
				<h2 class="left-align">Дозатори ADA</h2>
				<p class="description small-desc">
					An intelligent as well as progressive concept: our dispenser solutions for hotels.
					More than 30 years ago, ADA Cosmetics International developed the first dispenser system
					for the hotel bathroom and spa. And we are still full of good ideas.
					<br><br>
					Today we can offer our customers concepts that incorporate technological
					convenience along with economical and ecological benefits in one modern product design.
					This is where we make a difference – to your hotel as well.
				</p>
			</div>
			<img src="<?=get_template_directory_uri(); ?>/img/res-intro.png" alt="">
		</div>
	</div>
</section>

<section id="catalog">
	<div class="container">
		<div class="row">
			<div class="flex products">
				<?php
				$query = new WP_Query('post_type=product&cat=news&nopaging=1'); // указываем категорию 9 и выключаем разбиение на страницы (пагинацию)
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
				else echo 'Записей нет.';
				?>

			</div>

			<div class="pagination">
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


<?php get_footer(); ?>
