

var blur_bg_home = $('.blur_bg_home');
var blur_bg_guide = $('.blur_bg_guide');
var blur_bg_events = $('.blur_bg_events');

function blurred() {
	$(blur_bg_home).mouseenter(function() {
		$(".home_about").css("background-image", "url('../img/indexabout.jpg')");
	});
	$(blur_bg_home).mouseleave(function() {
		$(".home_about").css("background-image", "url('../img/index_about02.jpg')");
	});

}

function blurred2() {
	$(blur_bg_guide).mouseenter(function() {
		$(".home_guide").css("background-image", "url('../img/article05_blurred.jpg')");
	});
	$(blur_bg_guide).mouseleave(function() {
		$(".home_guide").css("background-image", "url('../img/article05.jpg')");
	});
}

function blurred3() {
	$(blur_bg_events).mouseenter(function() {
		$(".home_story").css("background-image", "url('../img/article01_blurred.jpg')");
	});
	$(blur_bg_events).mouseleave(function() {
		$(".home_story").css("background-image", "url('../img/article01.jpg')");
	});
}

blurred();
blurred2();
blurred3();