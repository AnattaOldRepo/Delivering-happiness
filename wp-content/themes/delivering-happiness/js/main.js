/**
 * Custom functions
 *
 */

(function($){
	$( document ).ready(function() {
		$('.flip .coin').click(function() {
		        $(this).parents('.all-coins').find('.coin').removeClass('active');
           	$(this).addClass('active');
            $(this).parents('.wrapper').find('.right-col .content').removeClass('active');
            $('.right-col .content:eq('+$('.flip .coin').index(this)+')').toggleClass('active');
           return false;
        });
		$( ".products-animation .card" ).hover(
  			function() {
    			$( this ).addClass('active');
  			}, function() {
    			$( this ).removeClass('active');
  			}
		);
    $('.video-container .button').click(function() {
        $(this).parents('.video-container').find('.video').show();
    });
	});
})(jQuery);
