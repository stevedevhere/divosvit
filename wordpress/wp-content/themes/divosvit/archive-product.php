<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package divosvit
 */

get_header();
		// die('die');
		if ( have_posts() ) {
				get_template_part( 'template-parts/product-archive', get_post_format() );
		} else {
			get_template_part( 'template-parts/content', 'none' );
		}

get_footer();
