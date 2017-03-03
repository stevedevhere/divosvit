<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package divosvit
 */

get_header();

		while ( have_posts() ) : the_post();

			if (get_post_type() == "post")
			{
				get_template_part( 'template-parts/content', get_post_format() );
			}

		endwhile;

get_footer();
