<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-12991127-1', 'auto');
	ga('send', 'pageview');

</script>

<?php // track conversions in Gravity Forms for Calculate your Happiness ROI form

function add_conversion_tracking_code_roi($button, $form) {
	$dom = new DOMDocument();
	$dom->loadHTML($button);
	$input = $dom->getElementsByTagName('input')->item(0);
	if ($input->hasAttribute('onclick')) {
		$input->setAttribute("onclick","ga('send', 'event', { eventCategory: 'Forms', eventAction: 'Calculate your Happiness ROI', eventLabel: 'ROI Calculator Form'});".$input->getAttribute("onclick"));
	} else {
		$input->setAttribute("onclick","ga('send', 'event', { eventCategory: 'Forms', eventAction: 'Calculate your Happiness ROI', eventLabel: 'ROI Calculator Form'});");
	}
	return $dom->saveHtml();
}

add_filter( 'gform_submit_button_20', 'add_conversion_tracking_code_roi', 10, 2);
