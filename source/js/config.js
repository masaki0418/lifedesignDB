jQuery(function($) {
	$(".list-office .parent").on("click", function() {
		$(this).next().slideToggle();
		$(this).toggleClass("active");//追加部分
	});
	$('input').on('change', function () {
	    var file = $(this).prop('files')[0];
	    $('p').text(file.name);
	});
});
