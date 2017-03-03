<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package divosvit
 */

get_header();

  $cat_name = "prod-dozator-ada";
?>

<?php require_once('jbtron.php'); ?>

 <section id="catalog">
 	<div class="container">
 		<div class="row">
 			<div class="flex products">
 				<?php require_once('cat-content.php'); ?>
 			</div>

 			<?php include_once('products-pagination.php'); ?>
 		</div>
 	</div>
 </section>


 <?php get_footer(); ?>
