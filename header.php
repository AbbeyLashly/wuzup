<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php bloginfo('name'); echo ' - '; is_front_page() ? bloginfo('description') : wp_title(''); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
	<!-- Add the slick-theme.css if you want default styling -->
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick-theme.css"/>
	<?php if(get_theme_mod('md_favicon')) : ?>
	<link rel="shortcut icon" href="<?php echo get_theme_mod('md_favicon'); ?>" />
	<?php endif; ?>
	
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


	<?php wp_head(); ?>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-77732226-1', 'auto');
  ga('send', 'pageview');

</script>



	<style>


    .slider {
        width: 100%;
        margin: 0px auto;
    }

    .slick-slide {
      margin: 0px 5px;
      width: 340px;
      height: 400px;
      border-radius: 4px;
      position: relative;
    }

    .slick-slide:after {
	    content: '';
	    position: absolute;
	    top: 0;
	    right: 0;
	    bottom: 0;
	    left: 0;
	    margin: 0;
	    opacity: 0.7;
	    background: -moz-linear-gradient(top, rgba(24, 23, 31, 0) 0%, #18171f 88%, #18171f 100%);
	    background: -webkit-linear-gradient(top, rgba(24, 23, 31, 0) 0%, #18171f 88%, #18171f 100%);
	    background: linear-gradient(to bottom, rgba(24, 23, 31, 0) 0%, #18171f 88%, #18171f 100%);
	    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0018171f', endColorstr='#18171f',GradientType=0 );
	    z-index: 2;
    }


.slick-slide .ref {
	    content: '';
	    position: absolute;
	    top: 0;
	    right: 0;
	    bottom: 0;
	    left: 0;
	    margin: 0;
	    opacity: 0.7;
	    background: transparent;
	    z-index: 9000;
    }



    .slick-slide .description {
	    position: absolute;
	    right: 0;
	    bottom: 0;
	    left: 0;
	    margin: 0 auto 6%;
	    z-index: 20;
	    width: 90%;
	    max-width: 90%;
	    white-space: normal;
	    word-wrap: normal;
	}

.slick-slide .description .title {
    color: white;
    font-size: 1.5em;
    line-height: 1.4;
    font-weight: 300;
    font-family: 'Raleway', sans-serif;
    margin-bottom: 10px;
}

.slick-slide .description p {
    color: rgba(255, 255, 255, 0.7);
    font-size: 1.125em;
    line-height: 1.4;
    font-weight: 400;
    font-family: 'Raleway', sans-serif;
}
    .slick-slide img {
      width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
        color: black;
    }
	</style>
	
</head>

<body <?php body_class(); ?>> 

    <div id="top-bar">
		
		<div class="container"> 			
			
			<div class="menu_wrap">
				<?php wp_nav_menu( array( 'container' => false, 'theme_location' => 'main-menu', 'menu_class' => 'menu' ) ); ?>				
			</div>

			<div class="menu-mobile"></div>

			<div class="meta_top">

				<!-- Search -->
				<?php if(!get_theme_mod('md_topbar_search_check')) : ?>

				<div class="show-search">
					<?php get_search_form(); ?>
				</div>
					
				<div id="top-search">
						<a href="#"><i class="fa fa-search"></i></a>
				</div>	
				<?php endif; ?>
				<!-- end Search -->		

				<?php if(!get_theme_mod('md_topbar_social_check')) : ?>
				<div id="top-social">
					<span class="text_follow">Follow:</span>
					<?php if(get_theme_mod('md_facebook')) : ?><a href="http://facebook.com/<?php echo get_theme_mod('md_facebook'); ?>" target="_blank"><i class="fa fa-facebook"></i></a><?php endif; ?>
					<?php if(get_theme_mod('md_twitter')) : ?><a href="http://twitter.com/<?php echo get_theme_mod('md_twitter'); ?>" target="_blank"><i class="fa fa-twitter"></i></a><?php endif; ?>
					<?php if(get_theme_mod('md_instagram')) : ?><a href="http://instagram.com/<?php echo get_theme_mod('md_instagram'); ?>" target="_blank"><i class="fa fa-instagram"></i></a><?php endif; ?>
					<?php if(get_theme_mod('md_pinterest')) : ?><a href="http://pinterest.com/<?php echo get_theme_mod('md_pinterest'); ?>" target="_blank"><i class="fa fa-pinterest"></i></a><?php endif; ?>
					<?php if(get_theme_mod('md_bloglovin')) : ?><a href="http://bloglovin.com/<?php echo get_theme_mod('md_bloglovin'); ?>" target="_blank"><i class="fa fa-heart"></i></a><?php endif; ?>
					<?php if(get_theme_mod('md_google')) : ?><a href="http://plus.google.com/<?php echo get_theme_mod('md_google'); ?>" target="_blank"><i class="fa fa-google-plus"></i></a><?php endif; ?>
					<?php if(get_theme_mod('md_tumblr')) : ?><a href="http://<?php echo get_theme_mod('md_tumblr'); ?>.tumblr.com/" target="_blank"><i class="fa fa-tumblr"></i></a><?php endif; ?>
					<?php if(get_theme_mod('md_youtube')) : ?><a href="http://youtube.com/<?php echo get_theme_mod('md_youtube'); ?>" target="_blank"><i class="fa fa-youtube-play"></i></a><?php endif; ?>
					<?php if(get_theme_mod('md_rss')) : ?><a href="<?php echo get_theme_mod('md_rss'); ?>" target="_blank"><i class="fa fa-rss"></i></a><?php endif; ?>
					
				</div>
				<?php endif; ?>

			</div> <!--end meta_top -->

		</div>
	
	</div>    
	
	<header id="header">
	
		<div class="container">		
            
			<div id="logo" <?php if(get_theme_mod('md_show_only_promo_homepage')) : ?>class="promo_only_homepage"<?php endif; ?>>
				
				<?php if(!get_theme_mod('md_logo')) : ?>					
				
						<h1><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php bloginfo( 'name' ); ?>" /></a></h1>
					
				<?php else : ?>
					
						<h1><a href="<?php echo home_url(); ?>"><img src="<?php echo get_theme_mod('md_logo'); ?>" alt="<?php bloginfo( 'name' ); ?>" /></a></h1>
					
				<?php endif; ?>
				
			</div> <!-- end logo -->
                            
		</div>	 
        
	</header>    
	
	 <?php if (get_theme_mod('md_show_carousel') == 'only_home') : ?>
    
        <?php if (is_home()) : get_template_part( 'slider' ); endif; ?>
    
    <?php elseif (get_theme_mod('md_show_carousel') == 'all') :  ?>
    
        <?php get_template_part( 'slider' ); ?>

    <?php endif; ?>

    <?php if (!get_theme_mod('md_hide_promo')) : ?>
    
        <?php if (get_theme_mod('md_show_only_promo_homepage')) : ?>
        
            <?php if (is_home()) : get_template_part( 'promo'); endif; ?>
        
        <?php else:  ?>
        
            <?php get_template_part( 'promo'); ?>
            
        <?php endif; ?>
        
    <?php endif; ?>