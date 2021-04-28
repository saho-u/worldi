// ハンバーガーメニュー
$(function() {
  $('.hamburger').click(function() {
      $(this).toggleClass('active');

      if ($(this).hasClass('active')) {
          $('.globalMenuSp').addClass('active');
      } else {
          $('.globalMenuSp').removeClass('active');
      }
  });
});

// トップに戻るボタン
$(function() {
  var appear = false;
  var pagetop = $('#page_top');
  $(window).on('load',function() {
    appear = false;
    pagetop.stop().animate({
      'bottom': '-50px' //下から-50pxの位置に
    }, 300); //0.3秒かけて隠れる
  });
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {  //100pxスクロールしたら
      if (appear == false) {
        appear = true;
        pagetop.stop().animate({
          'bottom': '50px' //下から50pxの位置に
        }, 300); //0.3秒かけて現れる
      }
    } else {
      if (appear) {
        appear = false;
        pagetop.stop().animate({
          'bottom': '-50px' //下から-50pxの位置に
        }, 300); //0.3秒かけて隠れる
      }
    }
  });
  pagetop.click(function () {
    $('body, html').animate({ scrollTop: 0 }, 500); //0.5秒かけてトップへ戻る
    return false;
  });
});

// lazyload
$(function () {
  $('img.lazy').lazyload({
    effect: 'fadeIn',
    effectspeed: 1000,
    threshold: 400
  });
});

$(function() {
  ScrollReveal().reveal('.slideUp', {
    duration: 1500,
    origin: "bottom",
    distance: "70px",
    delay: 100
  });
})

$(function() {
  ScrollReveal().reveal('.fadeIn_slow');
})

$(window).on('load scroll', function(){
  const wHeight = $(window).height();
  const scrollAmount = $(window).scrollTop();
  $('.move-slow').each(function () {
    const targetPosition = $(this).offset().top;
    if(scrollAmount > targetPosition - wHeight + 60) {
      $(this).addClass("fadeInDown");
    }
  });
});
