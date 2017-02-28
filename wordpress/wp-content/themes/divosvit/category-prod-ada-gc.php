<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package divosvit
 */

get_header();
$cat_name = "prod-ada-gc";
?>

<?php require_once('jbtron.php'); ?>

 <section id="catalog">
 	<div class="container">
 		<div class="row">
 			<div class="flex products">
 				<?php require_once('cat-content.php'); ?>
 			</div>


 			<div class="pagination"> <?php // TODO: products pagination!! ?>
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
