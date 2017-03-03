<?php
  if( have_rows('portf-repeater') ):
    $i = 1;
    while ( have_rows('portf-repeater') ) : the_row();
      ?>
      <div class="item">
        <a href="#popup<?=$i?>" class="mfp portf-popup" data-mfp-src="#popup<?=$i?>">
          <img src="<?php the_sub_field('main-photo'); ?>" alt="" class="img-responsive">
          <p class="title"><?php the_sub_field('title'); ?></p>
          <?php
            $imgs = get_sub_field('gallery');
            $count = 0;
            foreach ($imgs as $img) {
              $count = $count + count($img['url']);
            }
          ?>
          <p class="description"><?=$count?> фото</p>
        </a>
      </div>
      <?php
      $i++;
    endwhile;
  endif;
?>
