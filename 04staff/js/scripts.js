(function ($, root, undefined) {
	
jQuery(function($) {
	$('.navToggle').click(function() {
    $(this).toggleClass('active');
    if ($(this).hasClass('active')) {
      $('.menuHeader-inner').addClass('active');
      $('body').addClass('fixed');
    } else {
      $('.menuHeader-inner').removeClass('active');
      $('body').removeClass('fixed');
    }
  });
	$(".parent").on("click", function() {
		$(this).next().slideToggle();
		$(this).toggleClass("active");//追加部分
	});
	$(".is-nest > i").on("click", function() {
		$(this).next().slideToggle();
		$(this).toggleClass("active");//追加部分
	});
	$('input').on('change', function () {
	    var file = $(this).prop('files')[0];
	    $('p').text(file.name);
	});

});



})(jQuery, this);
