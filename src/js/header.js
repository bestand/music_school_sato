var beforePosition = 0;

function ScrollAnime() {
    var elemTop = $('.main-section').offset().top;
    var presentPosition = $(window).scrollTop();

    if( elemTop < presentPosition && presentPosition < beforePosition ){ //elemTopより下の位置にあり、上に進んだとき⇒メニュー出す
        $('header').removeClass('up-move');
        $('header').addClass('down-move');
    }

    if( elemTop <= presentPosition && presentPosition > beforePosition ){ //elemTopより下の位置にあり、下に進んだとき⇒メニュー消す
        $('header').removeClass('down-move');
        $('header').addClass('up-move');
    }
    
    if( elemTop > presentPosition && presentPosition < beforePosition ){ //elemTopより上の位置にあり、上に進んだとき⇒どちらのクラスも消す
      $('header').removeClass('down-move');
      $('header').removeClass('up-move');
    }

    beforePosition = presentPosition;
}


$(window).scroll(function () {
  ScrollAnime();
});

$(window).on('load', function () {
  ScrollAnime();
});


var headerH = $("header").outerHeight(true);    
$('#menu-header-menu li a').click(function () {
    var elmHash = $(this).attr('href'); 
    var pos = $(elmHash).offset().top-headerH;
    $('body, html').animate({scrollTop: pos}, 1000);
    return false;
});

$(function(){
  $('.hamburger-btn').click(function() {
    $('.hamburger-btn').toggleClass('active');
    return false;
  });
});

$(function () {
  $('.hamburger-btn').click(function () {
    $('nav').toggleClass('open'); // メニューとバーガーの線にopenクラスをつけ外しする
  })
});

$(function(){
  $('.menu-item a').click(function() {
    $('nav').removeClass('open');
    $('.hamburger-btn').removeClass('active');
  });
});