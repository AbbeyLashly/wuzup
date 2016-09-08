<?php
//////////////////////////////////////////////////////////////////
// Customizer - Add CSS
//////////////////////////////////////////////////////////////////
function maidesign_customizer_css() {
    ?>
    <style type="text/css">      
        
        #logo {
            padding-top:<?php echo get_theme_mod( 'md_header_padding_top' ); ?>px;
            padding-bottom:<?php echo get_theme_mod( 'md_header_padding_bottom' ); ?>px;
        }        
        
        /***********Change font style of post title**********/
        <?php if(get_theme_mod( 'md_font_style' ) == "montserrat") : ?>        
        .post-header h2 a, .post-header h1 {
            font-family: 'Montserrat', sans-serif;
            font-size: 25px;
        }

        .side_right .post-header h2 a {
            margin-bottom: 5px;
        }
        h1,h2,h3,h4,h5,h6 {
            font-family: 'Montserrat', sans-serif;  
        }
        <?php endif; ?>

        <?php if(get_theme_mod( 'md_bold_title' )) : ?>        
        .post-header h2 a, .post-header h1 {
            font-weight: normal;
        }
        <?php endif; ?>        

        .maidesign_about_widget {
            background-color: <?php echo get_theme_mod( 'md_background_about_me' ); ?>;
            border-color: <?php echo get_theme_mod( 'md_border_about_me' ); ?>;
        }
        #top-bar,.menu .sub-menu, .menu .children {
            background-color: <?php echo get_theme_mod( 'md_background_menu' ); ?>;
        }
        #top-social a,
        .menu li a,
        .text_follow,
        #top-search a,
        ul.menu ul a,
        .menu ul ul a,
        .slicknav_nav a
        {
            color: <?php echo get_theme_mod( 'md_text_menu' ); ?>;
        }

        .slicknav_menu .slicknav_icon-bar
        {
            background-color: <?php echo get_theme_mod( 'md_text_menu' ); ?>;
        }

        #top-bar,
        .menu .sub-menu, .menu .children,
        ul.menu ul a,
        #top-search
        {
            border-color: <?php echo get_theme_mod( 'md_border_dropdown' ); ?>;
        }

        ul.menu ul a:hover,
        .menu ul ul a:hover
        {
            background-color: <?php echo get_theme_mod( 'md_hover_dropdown' ); ?>;
        }

        .cat-blog a,
        .cat-blog 
        {
            color: <?php echo get_theme_mod( 'md_cat_color' ); ?>;
        }

        .side_right .cat-blog a,
        .side_right .cat-blog
        {
            color: <?php echo get_theme_mod( 'md_cat_list_color' ); ?>;
        }   

        a {
            color: <?php echo get_theme_mod( 'md_link' ); ?>;
        }
        
        <?php if(get_theme_mod( 'md_post_date' )) : ?> 
        .meta_date {
            display: none;
        }
        <?php endif; ?>

        <?php if(get_theme_mod( 'md_post_date_list' )) : ?> 
        .side_right .meta_date {
            display: none;
        }
        <?php endif; ?>

        <?php if(get_theme_mod( 'md_show_date_related' )) : ?>        
        .item-related span.date {
            display: block;
        }
        <?php endif; ?>  

        #footer_meta
        {
            background-color: <?php echo get_theme_mod( 'md_background_footer' ); ?>;
        }  
        #footer_meta h2, .footer_social a
        {
            color: <?php echo get_theme_mod( 'md_text_footer' ); ?>;
        }  

        /*************Share button *****/
        .post-share a{
            background-color: <?php echo get_theme_mod( 'md_share_button_color' ); ?>;
        }
        .post-share a{ 
            border-color: <?php echo get_theme_mod( 'md_share_button_color' ); ?>;
        }
        
		<?php if(get_theme_mod( 'md_custom_css' )) : ?>
		<?php echo get_theme_mod( 'md_custom_css' ); ?>
		<?php endif; ?>               
		
    </style>
    <?php
}
add_action( 'wp_head', 'maidesign_customizer_css' );

?>