<?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

$query = new WP_Query('posts_per_page=12&post_type=product&category_name='.$cat_name.'&paged=' . $paged); // указываем категорию 9 и выключаем разбиение на страницы (пагинацию)
if( $query->have_posts() ){
  while( $query->have_posts() ){ $query->the_post(); ?>
  <div class="item">
    <a href="<?php the_permalink($query->ID); ?>">
      <img src="<?=get_field('photos', $query->ID)[0]['photo']; ?>" class="img-responsive" alt="">
      <p class="description"><?php the_title(); ?></p>
    </a>
  </div>
  <?php
  }	wp_reset_postdata(); // сбрасываем переменную $post
}
else echo 'Записей нет.';
?>
