/**
 * Custom functions
 *
 */

(function($){
	$( document ).ready(function() {

    // Modal box 
    $('.faded').height($(document).height());
    $('.modal-box-handler').click(function(){
      $('.faded').show();
    });
    $('.modal-box').find('.close').click(function(){
      $('.faded').hide();
      $(this).parent().hide();
    });

    //for closing keep in touch popup
    $('.popups').find('.close').click(function(){
      $('.popups').hide('slow');
    });

    // Flip animation 
		$('.flip .coin').click(function() {
      $(this).parents('.all-coins').find('.coin').removeClass('active');
     	$(this).addClass('active');
      $(this).parents('.wrapper').find('.right-col .content').removeClass('active');
      $(this).parents('.wrapper').find('.right-col .content:eq('+$(this).parents('.all-coins').find('.coin').index(this)+')').toggleClass('active');
      return false;
    });
    $( ".products-animation" ).hover(
        function() {
        }, function() {
          $( this ).find('.card').eq(0).addClass('active');
        }
    );
		$( ".products-animation .card" ).hover(
  			function() {
          $('.products-animation .card').removeClass('active');
    			$( this ).addClass('active');
  			}, function() {
    			$( this ).removeClass('active');
  			}
		);
    $('.video-container .button').click(function() {
        $(this).parents('.video-container').find('.video').show();
    });
    //Mobile nav toggle
    $("#page").css("width", "100%");
    $('.mobile-toggle').click(function() {
        $("#page").toggleClass("animate-me");
        $(".mobile-nav-menu").toggleClass("animate-me");
        $("#page").addClass("trans");
        return false;
    });
    $('.course-bottom-bar .top-btn').click(function() {
        $(".course-bottom-bar").toggleClass("animate-me");
        $(this).toggleClass("active");
        return false;
    });
    //Circle 
    $( document ).ready(function() {
        $('#myStat2').circliful();
        $('#myStat3').circliful();
        $('#myStat4').circliful();
        $('#myStat5').circliful();
        $('#myStat6').circliful();
        $('#myStat7').circliful();

    });
	});
	
	// var $sidebar   = $(".nav-left-sidebar"), 
	// 	$sidebarW  =  $sidebar.width();
	// 	$headerH = $('.global-header').outerHeight();
	// 	$cntH = $('.speaking-page').outerHeight();
	// 	$footerhH = $('.site-footer').offset().top - 36;
	//         $window    = $(window),
	//         offset     = $sidebar.offset();
	    
	//     $window.scroll(function() {
	//     	var y = $(this).scrollTop();
	    	
	//     	// console.log($cntH, y + $cntH, $footerhH)

	//         if (y > offset.top && (y - $cntH) < $footerhH) {
	//         	$sidebar.addClass('is-sticky');
	//         	$sidebar.css('top', $headerH);
	//         	$('.has-left-sticky').css('margin-left', $sidebarW);
	//         } else {
	//         	$('.has-left-sticky').removeAttr('style');
	//         	$sidebar.removeClass('is-sticky');
	//         }
	//     });
	
	var tmpWindow = $(window),
	    wrapper = $('.sticky-container').outerHeight(),
	    header = $('.global-header').outerHeight(),
	    sidebar = $('.nav-left-sidebar');
	    $sidebarW  =  sidebar.width();
	    if( ! sidebar.length || ! wrapper){
	    	return;
	    }
	var offsetTop = sidebar.offset().top,
	    offsetBottom;

	    tmpWindow.scroll(function(){
	    	console.log(tmpWindow.scrollTop(), offsetTop);
	    offsetBottom = (wrapper + header) - sidebar.outerHeight();
	    if ((tmpWindow.scrollTop() + header) < offsetTop) {
	        sidebar.removeClass('is-sticky bottom');
	        sidebar.removeAttr('style');
	        $('.has-left-sticky').removeAttr('style');

	    } else if (tmpWindow.scrollTop() > offsetBottom) {
	        sidebar.removeClass('is-sticky').addClass('bottom');
	        sidebar.removeAttr('style');
	        $('.has-left-sticky').removeAttr('style');
	    } else {
	        sidebar.removeClass('bottom').addClass('is-sticky');
	        sidebar.css('top', header);
	        $('.has-left-sticky').css('margin-left', $sidebarW);
	    }
	});

})(jQuery);
