<div class="pagination"> <?php // TODO: product pagination! ?>
	<?php
	echo paginate_links(
		array(
			// 'base' => get_pagenum_link(1) . '%_%',
			'format' => 'page/%#%',
			'prev_next' => false,
			'current' => max( 1, get_query_var( 'paged' ) ),
			'total' => $query->max_num_pages
			)
		);
		?>
</div>
