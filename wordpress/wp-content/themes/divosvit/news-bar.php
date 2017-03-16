<section id="news" class="no-bg">
	<h2>
		<?php
		if(!empty(get_field('news-title'))) {
			the_field('news-title');
		} else {
			the_field('news-title', 48);
		}
	?></h2>
	<div class="container">
		<div class="flex">
<?php	$recent_posts = wp_get_recent_posts(['numberposts' => 2, 'post_type' => 'post', 'exclude' => get_the_ID()]);
		foreach( $recent_posts as $recent ):
			$post_id = get_the_ID();
			// if($recent["ID"] == $post_id) continue;
				?>
				<div class="item">
					<a href="<?php the_permalink($recent['ID']); ?>">
						<?=get_the_post_thumbnail($recent["ID"], '', array("class"=>"img-responsive")); ?>
						<p class="description"><?=$recent['post_title']; ?></p>
					</a>
				</div>
			<?php
		endforeach;
			?>
		</div>
	</div>
</section>
