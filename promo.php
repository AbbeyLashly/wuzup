<div class="promo_wrap">
    
    <div class="container">


  <style type="text/css">

  </style>

<section class="variable slider">

<?php query_posts('category_name="featured"&showposts=6');while (have_posts()) : the_post();?>

    <div style="background: #fff url('<?php the_post_thumbnail_url( "small" ); ?>') 50% / cover no-repeat;">
      <!-- <img src="http://placehold.it/350x300?text=1"> -->
      <article class="description">
      	<h1 class="title"><?php the_title(); ?></h1>
      	
      </article>
      <a href="<?php the_permalink() ?>" title="<?php the_title() ?>" class="ref"></a>
    </div>

<?php endwhile;wp_reset_query(); ?>

  </section>


    </div>    
    
</div>
