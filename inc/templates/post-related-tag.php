<?php 
if(get_theme_mod('md_related_order')) : 
    $orderby = get_theme_mod('md_related_order');
else :
    $orderby = 'rand';
endif; 

$orig_post = $post;
global $post;

$tags = wp_get_post_tags($post->ID);

if ($tags) {

	$tag_ids = array();

	foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
	
	$args = array(
		'tag__in' => $tag_ids,
		'post__not_in'     => array($post->ID),
		'posts_per_page'   => 3, // Number of related posts that will be shown.
		'ignore_sticky_posts' => 1,
		'orderby' => $orderby
	);

	$my_query = new wp_query( $args );
	if( $my_query->have_posts() ) { ?>
		<div class="post-related">
        
            <h2>
            
                <span class="related_heading">
                
                <?php if(get_theme_mod('md_change_text_related')) : ?>
                    <?php echo get_theme_mod('md_change_text_related'); ?>
                <?php else : ?>
                    <?php echo "You may also like"; ?>
                <?php endif; ?>
                
                </span>
                
            </h2> 
            
        <div class="related_wrap">   
		<?php while( $my_query->have_posts() ) {
			$my_query->the_post();?>
				<div class="item-related">
					
					<?php if ( (function_exists('has_post_thumbnail')) && (has_post_thumbnail()) ) : ?>
					<a href="<?php echo get_permalink() ?>"><?php the_post_thumbnail('carousel-thumb'); ?></a>
					<?php endif; ?>
					
					<h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
					<?php if (get_theme_mod('md_show_date_related')) : ?> <span class="date"><?php the_time( get_option('date_format') ); ?></span><?php endif; ?>
					
				</div>
		<?php
		}
		echo '</div></div> ';
	}
}
$post = $orig_post;
wp_reset_query();

?>