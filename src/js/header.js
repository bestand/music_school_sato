$(function () {
    $('.hamburger-btn').on('click', function () {
      $('.header-menu , .btn-line').toggleClass('open'); // メニューとバーガーの線にopenクラスをつけ外しする
    })
});