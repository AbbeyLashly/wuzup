jQuery(function($){
    "use strict";	

	// Search
	
	$('#top-search a').on('click', function ( e ) {
		e.preventDefault();
    	
          $(".show-search").toggle("ease");
    });
	
	// Menu
	$('.menu_wrap .menu').slicknav({
		prependTo:'.menu-mobile',
		label:''
	});
	
	// Slick
$(document).on('ready', function() {
      $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
      $(".center").slick({
        dots: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
      $(".variable").slick({
        dots: true,
        infinite: true,
        variableWidth: true,
        autoplay: true,
        infinite: true,
        centerMode: true,
        slidesToScroll: 3
      });
    });     


    
  // Fitvids
  $(document).ready(function(){
    // Target your .container, .wrapper, .post, etc.
    $(".container").fitVids();
  });
    
	// Scroll to top
	
	$('.to-top').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
    
    // Widget categories list with featured image
    if ($(".widget .list_cat_with_img li").length){  
        $(".widget .list_cat_with_img li").click(function() {
          window.location = $(this).find("a").attr("href"); 
          return false;
        });
    }

    //
    if ($(".promo_frame").length){  
        $(".promo_frame").click(function() {
          window.location = $(this).find("a").attr("href"); 
          return false;
        });
    }

    $('.btnPinIt').click(function() {
        var url = $(this).attr('href');
        var media = $(this).attr('data-image');
        var desc = $(this).attr('data-desc');
        window.open("//www.pinterest.com/pin/create/button/"+
        "?url="+url+
        "&media="+media+
        "&description="+desc,"_blank");
        return false;
    });

    
});


