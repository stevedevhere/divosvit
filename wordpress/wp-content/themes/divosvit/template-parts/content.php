<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package divosvit
 */

?>

<section id="single-news">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 n-content">
				<a href="/news" class="forward"><?php the_field('news-forward', 5); ?></a>
				<!-- <h2 class="n-title">Підписано дистрибуційну угоду з Cali’ Cosmetics, Inc. (США)</h2> -->
				<?php
				if ( is_single() ) :
					the_title( '<h2 class="n-title">', '</h2>' );
				endif;
				?>
				<div class="post-content">
					 <?php the_post_thumbnail('', array('class' => 'img-responsive')); ?>
					<p><?=get_field("post-content");?></p>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include(get_template_directory() . '/news-bar.php'); ?>
