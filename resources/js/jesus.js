jQuery(document).ready(function ($) {
	$("body").keydown(function (e) {
		var rootUrl = document.location.origin + document.location.pathname;

		if ( 32 == e.keyCode || ( 37 <= e.keyCode && 40 >= e.keyCode ) ) {
			window.location = rootUrl;
		}
	});
});
