<?php
/*
Template Name: Roi-Calculator
*/
get_header();
?>
<!-- Roi Calculator page-->
<div class="one-column-template">
	<div class="roi-calculator-page">
		<div class="wrapper">
			<div class="page-header">
				<h1><?php the_title() ?></h1>
			</div>
			<div id="primary" class="page-content">
				<main id="main" class="site-main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php
					// If comments are open or we have at least one comment, load up the comment template
					//if ( comments_open() || '0' != get_comments_number() ) :
					//	comments_template();
					//endif;
					?>

				<?php endwhile; // end of the loop. ?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div>
</div>
</div>
<section class="rounded-block happy-work">
	<div class="">
		<div class="modal-box" id="calculate_roi_form" style="display:none;">
			<p>Please enter your information below to find out how much happiness could save you!</p>
			<iframe src="http://go.deliveringhappiness.com/l/66522/2015-03-31/cgg1" width="100%" height="300" type="text/html" frameborder="0" allowTransparency="true" style="border: 0"></iframe>
			<p>We value your privacy. Read our <a href="/privacy/">Privacy Policy</a>.</p>
			<span class="close" id="close1">close</span>
		</div>
	</div>
</section>
<!-- /Work page-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script><script type="text/javascript">
$(function() {
	$(document).ready(function () {

		$('#calculate_roi_form').show();
		
		var value = $("#number-of-org").val();
		if (value.length > 0) {
			setTimeout(function() {
				if(value == '' || value == 0) {
					$("#would-benefit-1").html('$0');
					$("#would-benefit-2").html('$0');
					$("#would-benefit-3").html('$0');
					$("#would-benefit-4").html('$0');
					$("#would-benefit-5").html('$0');
				}
				var benefit1 	= value*40000*0.01;
				var benefited1 = formatNumbers(benefit1);
				var benefit2 	= 1*(value*40000)/240;
				var benefited2 = formatNumbers(benefit2);
				var benefit3 	= (value*0.16)*0.40*40000*0.10;
				var benefited3 = formatNumbers(benefit3);
				var benefit4 	= (benefit1)+(benefit2)+(benefit3);
				var benefited4 = formatNumbers(benefit4);
				var benefit5		= value*10.00;
				var benefited5 = formatNumbers(benefit5);
				$("#would-benefit-1").html('$'+benefited1);
				$("#would-benefit-2").html('$'+benefited2);
				$("#would-benefit-3").html('$'+benefited3);
				$("#would-benefit-4").html('$'+benefited4);
				$("#would-benefit-5").html('$'+benefited5);
			}, 300);
		}
	});

	$("input#number-of-org").keypress(function() {
			var value = $("#number-of-org").val();
			setTimeout(function() {
				if(value == '' || value == 0) {
					$("#would-benefit-1").html('$0');
					$("#would-benefit-2").html('$0');
					$("#would-benefit-3").html('$0');
					$("#would-benefit-4").html('$0');
					$("#would-benefit-5").html('$0');
				}
				var benefit1 	= value*40000*0.01;
				var benefited1 = formatNumbers(benefit1);
				var benefit2 	= 1*(value*40000)/240;
				var benefited2 = formatNumbers(benefit2);
				var benefit3 	= (value*0.16)*0.40*40000*0.10;
				var benefited3 = formatNumbers(benefit3);
				var benefit4 	= (benefit1)+(benefit2)+(benefit3);
				var benefited4 = formatNumbers(benefit4);
				var benefit5		= value*10.00;
				var benefited5 = formatNumbers(benefit5);
				$("#would-benefit-1").html('$'+benefited1);
				$("#would-benefit-2").html('$'+benefited2);
				$("#would-benefit-3").html('$'+benefited3);
				$("#would-benefit-4").html('$'+benefited4);
				$("#would-benefit-5").html('$'+benefited5);
			}, 300);
	});
	
$("input#number-of-org").keydown(function(event) {
			// Allow: backspace, delete, tab and escape
			if ( event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27) {
				return;
			}
			// Allow: Ctrl+A
			if(event.keyCode == 65) {
				if(event.ctrlKey === true) {
					return;
				}
			}
			// Allow: home, end, left, right
			if(event.keyCode >= 35) {
				if(event.keyCode <= 39) {
					// let it happen, don't do anything
					return;
				}
			}
			// Ensure that it is a number and stop the keypress
			if (event.keyCode < 48 || event.keyCode > 57) {
				if(event.keyCode < 96 || event.keyCode > 105) {
					event.preventDefault();
				}
			}
		});

});
function formatNumbers(nStr) {
	nStr = Math.round(nStr).toFixed(2);
	nStr += '';
	x = nStr.split('.');
	x1 = x[0];
	x2 = x.length > 1 ? '.' + x[1] : '';
	var rgx = /(\d+)(\d{3})/;
	while (rgx.test(x1)) {
		x1 = x1.replace(rgx, '$1' + ',' + '$2');
	}
	return x1 + x2;
}

</script>
<?php get_footer(); ?>