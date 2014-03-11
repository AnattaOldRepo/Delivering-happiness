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
      $(this).parents('.wrapper').find('.right-col .content:eq('+$(this).parents('.all-coins').find('.coin').index(this)+')').toggleClass('active');
      return false;
    });
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
	});
})(jQuery);

