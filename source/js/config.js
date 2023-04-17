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
	$(".list-office .parent").on("click", function() {
		$(this).next().slideToggle();
		$(this).toggleClass("active");//追加部分
	});
	$('input').on('change', function () {
	    var file = $(this).prop('files')[0];
	    $('p').text(file.name);
	});
});
function mediaQueriesWin(){
  var width = $(window).width();
  if(width <= 640) {//横幅が768px以下の場合
    $(".list-nest>span").off('click'); //has-childクラスがついたaタグのonイベントを複数登録を避ける為offにして一旦初期状態へ
    $(".list-nest>span").on('click', function() {//has-childクラスがついたaタグをクリックしたら
      var parentElem =  $(this).parent();// aタグから見た親要素の<li>を取得し
      $(parentElem).toggleClass('active');//矢印方向を変えるためのクラス名を付与して
      $(parentElem).children('ul').stop().slideToggle(500);//liの子要素のスライドを開閉させる※数字が大きくなるほどゆっくり開く
      return false;//リンクの無効化
    });
  }else{//横幅が768px以上の場合
    $(".list-nest>span").off('click');//has-childクラスがついたaタグのonイベントをoff(無効)にし
    $(".list-nest").removeClass('active');//activeクラスを削除
    $('.list-nest').children('.nest-block').css("display","");//スライドトグルで動作したdisplayも無効化にする
  }
}
// ページがリサイズされたら動かしたい場合の記述
$(window).resize(function() {
	mediaQueriesWin();/* ドロップダウンの関数を呼ぶ*/
});

// ページが読み込まれたらすぐに動かしたい場合の記述
$(window).on('load',function(){
	mediaQueriesWin();/* ドロップダウンの関数を呼ぶ*/
});