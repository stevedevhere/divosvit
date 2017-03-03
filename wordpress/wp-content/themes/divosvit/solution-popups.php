<?php
  if( have_rows('portf-repeater') ):
    $j = 1;
    while ( have_rows('portf-repeater') ) : the_row();
      ?>
			<div id="popup<?=$j?>" class="gallery mfp-hide">
				<?php
					$images = get_sub_field('gallery');
					if( $images ): ?>
					<?php foreach( $images as $image ): ?>
					 <img class="popup<?=$j?>-item" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" data-mfp-src="<?=$image['url'];?>" />
					<?php endforeach;
					endif; ?>
			</div>
      <?php
      $j++;
    endwhile;
  endif;
?>
