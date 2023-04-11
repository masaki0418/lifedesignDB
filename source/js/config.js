jQuery(function($) {
	$(".list-office .parent").on("click", function() {
		$(this).next().slideToggle();
		$(this).toggleClass("active");//追加部分
	});
});
