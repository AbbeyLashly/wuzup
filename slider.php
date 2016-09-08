<?php if(!get_theme_mod('md_featured_post')) : ?>
    
            <div class="slider_wrap">
                    <div class="container">  
                            <div class="bxslider_featured">
                               <?php 
                               if (get_theme_mod('md_number_slide')): 
                                    $num_slide = get_theme_mod('md_number_slide'); 
                               else : 
                                    $num_slide = 5;
                               endif; 
                               $args = array(
                                			'posts_per_page' => $num_slide,
                                			'orderby' => 'date',
                                			'meta_query' => array(
                                                            array(
                                                            'key' => 'featured-checkbox',
                                                            'value' => 'yes'
                                                    )
                                                )
                                		 );
                                
                                $featured_query = new WP_Query($args); ?>
                                
                                <?php if ($featured_query-> have_posts()) : while ($featured_query-> have_posts()) : $featured_query-> the_post(); ?> 
                                     	<?php $thumb_slide = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full-thumb' );
                                                $url_slide = $thumb_slide['0']; ?>				
                        			     <div class="slide_item" style="background-image: url(<?php echo $url_slide; ?>);">
                                                
                                                    <div class="slide_overlay">                                                        
                                                        <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
                                                        <div class="readmore_slider"><a href="<?php the_permalink(); ?>"><?php _e('Read More'); ?></a></div>                                        
                                                    </div>
                                                
                                         </div>	
                                     
                    			<?php endwhile; wp_reset_postdata(); endif ?>
                                
                            </div>
                  </div>                            
            </div>
   
    
<?php endif; ?>