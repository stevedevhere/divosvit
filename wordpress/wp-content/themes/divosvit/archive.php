<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package divosvit
 */

get_header();

		if ( have_posts() ) {

			if (get_post_type() == "post") {
				get_template_part( 'template-parts/content', get_post_format() );
			} elseif (get_post_type() == "product") {
				get_template_part( 'template-parts/product-archive', get_post_format() );
			}
		} else {
			get_template_part( 'template-parts/content', 'none' );

		}

get_footer();
