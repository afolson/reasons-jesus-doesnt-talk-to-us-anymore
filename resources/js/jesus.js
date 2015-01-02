jQuery(document).ready(function ($) {
	function returnHome() {
		window.location = document.location.origin + document.location.pathname;
	}

	$("body").keydown(function (e) {
		if (32 == e.keyCode || ( 37 <= e.keyCode && 40 >= e.keyCode )) {
			returnHome();
		}
	});

	$(".get-random-reason").click(function (e) {
		returnHome();
	});
});
