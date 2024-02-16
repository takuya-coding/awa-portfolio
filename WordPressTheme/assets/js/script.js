"use strict";

jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる

  // ハンバーガーメニュー
  $('.js-hamburger').on('click', function () {
    if ($('.js-hamburger').hasClass('is-active')) {
      $('.js-drawer').removeClass('is-active');
      $(this).removeClass('is-active');
      $('.js-header').removeClass('is-active');
      // ドロワーメニュー展開時に背景のコンテンツをスクロールさせないための記述（base.scssにも記述あり）
      $('body').removeClass('is-active');
    } else {
      $('.js-drawer').addClass('is-active');
      $(this).addClass('is-active');
      $('.js-header').addClass('is-active');
      // ドロワーメニュー展開時に背景のコンテンツをスクロールさせないための記述（base.scssにも記述あり）
      $('body').addClass('is-active');
    }

    // resizeイベント
    $(window).resize(function () {
      if (window.matchMedia("(min-width: 768px)").matches) {
        closeDrawer();
      }
    });
  });
  function openDrawer() {
    $(".js-drawer").addClass("is-active");
    $(".js-hamburger").addClass("is-active");
    $('.js-header').addClass('is-active');
  }
  function closeDrawer() {
    $(".js-drawer").removeClass("is-active");
    $(".js-hamburger").removeClass("is-active");
    $('.js-header').removeClass('is-active');
  }

  // ドロワーメニューの背景orリンクをクリックした際にドロワーメニューを閉じる
  $('.js-drawer, js-header-logo').on('click', function () {
    $(this).removeClass('is-active');
    $('.js-hamburger').removeClass('is-active');
    $('.js-header').removeClass('is-active');
    // ドロワーメニュー展開時に背景のコンテンツをスクロールさせないための記述（base.scssにも記述あり）
    $('body').removeClass('is-active');
  });

  // top-main-viewのスライダー
  var mainviewSwiper = new Swiper('.js-top-main-view-swiper', {
    // direction: 'horizontal',
    loop: true,
    speed: 3000,
    effect: 'fade',
    autoplay: {
      delay: 3000,
      disableOnInteraction: false
    }
  });

  // top-campaignセクションのスライダー
  var campaignSwiper = new Swiper('.js-campaign-cards .js-top-campaign-swiper', {
    loop: true,
    loopAdditionalSlides: 2,
    //複製するスライド数を指定（0だとループが滑らかに繋がらないことがあるため1以上がオススメ）
    spaceBetween: 24,
    slidesPerView: 1.26,
    speed: 1500,
    //スライド切り替えのアニメーションのスピード
    width: 360,
    //campaign-card1枚の幅を固定
    autoplay: {
      delay: 3000,
      //次のスライドに切り替わるまでの時間
      disableOnInteraction: false //ユーザーが操作したときに自動再生を止める（falseにしておくのがオススメ）
    },

    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev'
    },
    breakpoints: {
      768: {
        spaceBetween: 40,
        slidesPerView: 3.5,
        // width: 1270,
        width: 1267
      }
    }
  });

  // top-campaignセクションのスライダー
  // const target = '.top-campaign .splide-top-campaign';
  // const options = {
  //   mediaQuery: 'min',
  //   perMove: 1, //1度に何枚動かすか
  //   fixedWidth: '17.5rem',
  //   gap: '1.5rem',
  //   updateOnMove: true,
  //   //追加
  //   type: "loop",
  //   autoplay: true,
  //   interval: 4000,
  //   speed: 2000,
  //   //デフォルトの矢印とページネーションを削除
  //   //arrows: false,
  //   //pagination: false,

  //   breakpoints: {
  //     768: {
  //     fixedWidth: '20.875rem',
  //     gap: '2.5rem',
  //     //デフォルトの矢印とページネーションを削除
  //     //arrows: false,
  //     //pagination: false,
  //     }
  //   },
  // }
  // const mySplide = new Splide(target, options);

  // mySplide.mount();

  // 背景色の後に画像が表示されるエフェクト（top-informationセクション）
  // 要素の取得とスピードの設定
  var box = $('.top-information__img'),
    speed = 700;

  // .top-information__imgの付いた要素に対して下記の処理を行う
  box.each(function () {
    $(this).append('<div class="color"></div>');
    var color = $(this).find($('.color')),
      image = $(this).find('img');
    var counter = 0;
    image.css('opacity', '0');
    color.css('width', '0%');
    //inviewを使って背景色が画面に現れたら処理をする
    color.on('inview', function () {
      if (counter == 0) {
        $(this).delay(200).animate({
          'width': '100%'
        }, speed, function () {
          image.css('opacity', '1');
          $(this).css({
            'left': '0',
            'right': 'auto'
          });
          $(this).animate({
            'width': '0%'
          }, speed);
        });
        counter = 1;
      }
    });
  });

  // 背景色の後に画像が表示されるエフェクト（top-voiceセクション）
  // 要素の取得とスピードの設定
  var box2 = $('.voice-card__img'),
    speed2 = 700;

  // .post__imgの付いた要素に対して下記の処理を行う
  box2.each(function () {
    $(this).append('<div class="color"></div>');
    var color2 = $(this).find($('.color')),
      image2 = $(this).find('img');
    var counter2 = 0;
    image2.css('opacity', '0');
    color2.css('width', '0%');
    //inviewを使って背景色が画面に現れたら処理をする
    color2.on('inview', function () {
      if (counter2 == 0) {
        $(this).delay(200).animate({
          'width': '100%'
        }, speed2, function () {
          image2.css('opacity', '1');
          $(this).css({
            'left': '0',
            'right': 'auto'
          });
          $(this).animate({
            'width': '0%'
          }, speed2);
        });
        counter2 = 1;
      }
    });
  });

  // 背景色の後に画像が表示されるエフェクト（top-priceセクション）
  // 要素の取得とスピードの設定
  var box3 = $('.top-price__img'),
    speed3 = 700;

  // .top-price__imgの付いた要素に対して下記の処理を行う
  box3.each(function () {
    $(this).append('<div class="color"></div>');
    var color3 = $(this).find($('.color')),
      image3 = $(this).find('img');
    var counter3 = 0;
    image3.css('opacity', '0');
    color3.css('width', '0%');
    //inviewを使って背景色が画面に現れたら処理をする
    color3.on('inview', function () {
      if (counter3 == 0) {
        $(this).delay(200).animate({
          'width': '100%'
        }, speed3, function () {
          image3.css('opacity', '1');
          $(this).css({
            'left': '0',
            'right': 'auto'
          });
          $(this).animate({
            'width': '0%'
          }, speed3);
        });
        counter3 = 1;
      }
    });
  });

  // トップに戻るボタン（基本の動き）
  var topBtn = $('.js-to-top');
  topBtn.hide();

  // ボタンの表示設定
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      // 指定px以上のスクロールでボタンを表示
      topBtn.fadeIn();
    } else {
      // 画面が指定pxより上ならボタンを非表示
      topBtn.fadeOut();
    }
  });

  // ボタンをクリックしたらスクロールして上に戻る
  topBtn.click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 300, 'swing');
    return false;
  });

  // トップに戻るボタンのアレンジ（footer手前で止まる）
  topBtn.hide();
  $(window).on("scroll", function () {
    var scrollHeight = $(document).height(),
      //ドキュメントの高さ
      scrollPosition = $(window).height() + $(window).scrollTop(),
      //現在の位置
      footHeight = $("footer").innerHeight(); //footerの高さ
    if (scrollHeight - scrollPosition <= footHeight) {
      if (window.innerWidth <= 767) {
        topBtn.css({
          position: "absolute",
          bottom: footHeight + 15
        });
      } else {
        topBtn.css({
          position: "absolute",
          bottom: footHeight + 20
        });
      }
    } else {
      if (window.innerWidth <= 767) {
        topBtn.css({
          position: "fixed",
          bottom: "15px"
        });
      } else {
        topBtn.css({
          position: "fixed",
          bottom: "20px"
        });
      }
    }
  });
  $(window).on("resize", function () {
    if (window.innerWidth <= 767) {
      topBtn.css({
        bottom: "15px"
      });
    } else {
      topBtn.css({
        bottom: "20px"
      });
    }
  });

  // スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動)
  $(document).on('click', 'a[href*="#"]', function () {
    var time = 400;
    var header = $('header').innerHeight();
    var target = $(this.hash);
    if (!target.length) return;
    var targetY = target.offset().top - header;
    $('html,body').animate({
      scrollTop: targetY
    }, time, 'swing');
    return false;
  });

  // コンテンツ量が少なく短いページでもfooterを最下部に表示する
  // スマホで見た際、footerがアドレスバーに隠れないようにするためのコード
  $(window).on("load resize", function () {
    var window_height = window.innerHeight ? window.innerHeight : $(window).innerHeight();
    $(".wrap").css("min-height", window_height + "px");
  });

  // campaignページのタブ（厳密にはタブではない）
  // WordPress化前提に考えると、別ページ扱いになるためJSはコメントアウト
  // const campaign_button = $(".js-category-button-campaign"),
  //       campaign_content = $(".js-campaign-content");

  // campaign_button.on("click", function () {
  //   // クリックされたタブのテキストを取得
  //   const selectedCategory = $(this).text().trim();

  //   // 全てのパネルを非表示にする
  //   campaign_content.removeClass("is-active");

  //   // 選択されたカテゴリーに合致するパネルを表示する
  //   campaign_content.each(function() {
  //     const categoryText = $(this).find(".campaign-card__category").text().trim();
  //     if (selectedCategory === "all" || categoryText === selectedCategory) {
  //       $(this).addClass("is-active");
  //     }
  //   });

  //   // タブのアクティブ状態を切り替える
  //   campaign_button.removeClass("is-active");
  //   $(this).addClass("is-active");
  // });

  // about-usページのモーダル
  var open = $(".js-modal-open"),
    modal = $(".js-modal");

  //開くボタンをクリックしたらモーダルを表示する
  open.on("click", function () {
    // まず、クリックした画像の HTML(<img>タグ全体)をjs-modal-img内にコピー
    $(".js-modal-img").html($(this).prop("outerHTML"));

    // クリックされた画像の親要素（.gallery__item）のaspect-ratioの値を取得
    var aspectRatio = $(this).css('aspect-ratio');
    // 取得したaspect-ratioの値をモーダルの画像に適用
    $(".js-modal-img > .gallery__item").css('aspect-ratio', aspectRatio);

    // 下記記述でもOK
    // // クリックされた画像の親要素（.gallery__item）の実際の幅と高さからアスペクト比を計算
    // let width = $(this).width();
    // let height = $(this).height();
    // let aspectRatio = width / height;
    // // アスペクト比をaspect-ratioの形式に変換
    // let aspectRatioCSS = width + " / " + height;
    // // gallery__modal-imgの子要素であるgallery__itemのCSSを変更
    // $(".gallery__modal-img > .gallery__item").css("aspect-ratio", aspectRatioCSS);

    //そして、is-openで表示する。
    modal.addClass("is-open");
    // $("body,html").css("overflow-y", "hidden");
    // モーダル展開時に背景のコンテンツをスクロールさせないための記述（base.scssにも記述あり）
    $('body').addClass('is-active');
  });
  modal.on("click", function () {
    modal.removeClass("is-open");
    // $("body,html").css("overflow-y", "visible");
    // モーダル展開時に背景のコンテンツをスクロールさせないための記述（base.scssにも記述あり）
    $('body').removeClass('is-active');
  });

  // informationページのタブ（一般的なタブ切り替え）
  // const information_tabButton = $(".js-tab-button-information"),
  //       information_tabContent = $(".js-information-content");

  // information_tabButton.on("click", function () {
  // let index = information_tabButton.index(this);
  // information_tabButton.removeClass("is-active");
  // $(this).addClass("is-active");
  // information_tabContent.removeClass("is-active");
  // information_tabContent.eq(index).addClass("is-active");
  // });

  // informationページのタブ切り替え（リンククリック時に任意のタブコンテンツを開いた状態にする）
  $(function () {
    // パラメータ取得
    function getParam(name, url) {
      if (!url) url = window.location.href;
      name = name.replace(/[\[\]]/g, "\\$&");
      var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
      if (!results) return null;
      if (!results[2]) return '';
      return decodeURIComponent(results[2].replace(/\+/g, " "));
    }

    // ページ読み込み時のタブ切り替え
    var tabPram = ['tab-1', 'tab-2', 'tab-3'];
    var pram = getParam('active-tab');
    if (pram && $.inArray(pram, tabPram) !== -1) {
      $('.js-tab-button-information,.js-information-content').removeClass('is-active');
      $('[data-tab="' + pram + '"]').addClass('is-active');
    }

    // ロード後のタブ切り替え
    $('.js-tab-button-information').on('click', function () {
      var dataPram = $(this).data('tab');
      $('.js-tab-button-information,.js-information-content').removeClass('is-active');
      $('[data-tab="' + dataPram + '"]').addClass('is-active');
    });
  });

  // FAQページのアコーディオン
  $(function () {
    // 最初のコンテンツだけ表示する
    $(".js-faq-accordion-item:first-of-type .js-faq-accordion-content").css("display", "block");
    // 最初のみ矢印の向きを開いている状態に変えておく
    $(".js-faq-accordion-item:first-of-type .js-faq-accordion-title").addClass("is-open");
    $(".js-faq-accordion-title").on("click", function () {
      $(this).next().slideToggle(400);
      $(this).toggleClass("is-open", 400);
    });
  });

  // blogページサイドバーのアコーディオン
  $(function () {
    // 一番目のアコーディオンのみ開いた状態にするための記述
    $(".js-accordion-item:first-child .js-accordion-list").css("display", "block");
    $(".js-accordion-item:first-child .js-accordion-year").addClass("is-open");

    /*タイトルをクリックすると*/
    $(".js-accordion-year").on("click", function () {
      /*クリックした隣の要素を開閉する*/
      $(this).next().slideToggle(400);
      /*タイトルにopenクラスの追加、削除を行って矢印の向きを変える*/
      $(this).toggleClass("is-open", 400);
    });
  });


// 別ページのリンクからpriceページの該当箇所へのスムーススクロール
$(function() {
  let pageHash = window.location.hash;
  if (pageHash) {
      let scrollToElement = $('[data-id="' + pageHash + '"]');
      if (!scrollToElement.length) return;
      $(window).on('load', function() {
          history.replaceState('', '', './');
          let locationOffset = scrollToElement.offset().top;
          let navigationBarHeight = $('.header').innerHeight();
          locationOffset = locationOffset - navigationBarHeight - 150;
          $('html, body').animate({
              scrollTop: locationOffset
          }, 300, 'swing');
      });
  }
});

// 内部リンクからpriceページの該当箇所へのスムーススクロール
$(function() {
  $('a[href*="#"]').on('click', function() {
      const scrollSpeed = 400;
      const navigationHeight = $(".header").innerHeight();
      const scrollToTarget = $(this.hash === '#' || '' ? 'html' : this.hash)
      if (!scrollToTarget.length) return;
      const scrollPosition = scrollToTarget.offset().top - navigationHeight - 150;
      $('html, body').animate({
          scrollTop: scrollPosition
      }, scrollSpeed, 'swing');
      return false;
  });
});


  // コンタクトフォームのバリデーション（すべての項目に対応）
  // $('input[type="submit"]').click(function() {
  //   // .wpcf7-formクラスを持つフォーム内のすべての入力フィールドをチェック
  //   $('.wpcf7-form').find('input, textarea, select').each(function() {
  //       if (!$(this).val()) {
  //           // 値が空の場合、is-showクラスを追加
  //           $(this).addClass('is-show');
  //       }
  //   });

  //   // 特定のデータ属性を持つ.wpcf7-form-control-wrapに対してクラスを追加
  //   $('.wpcf7-form-control-wrap[data-name="check"]').each(function() {
  //       if ($(this).find('input:checked').length === 0) {
  //           // チェックされた項目がない場合、is-showクラスを追加
  //           $(this).addClass('is-show');
  //       }
  //   });
  // });

  // コンタクトフォームのバリデーション（必須項目のみ対応）
  $('input[type="submit"]').click(function () {
    // .wpcf7-formクラスを持つフォーム内の必須のinput, textarea, selectフィールドをチェック
    $('.wpcf7-form').find('input[aria-required="true"], textarea[aria-required="true"], select[aria-required="true"]').each(function () {
      if (!$(this).val()) {
        // 値が空で必須の場合、is-showクラスを追加
        $(this).addClass('is-show');
      } else {
        // 値が入力されている場合、is-showクラスを削除
        $(this).removeClass('is-show');
      }
    });

    // 特定のデータ属性を持つ.wpcf7-form-control-wrap（必須の場合）に対してクラスを追加
    $('.wpcf7-form-control-wrap[data-name="check"]').each(function () {
      if ($(this).find('input[aria-required="true"]:checked').length === 0) {
        // チェックされた項目がなく、必須の場合、is-showクラスを追加
        $(this).addClass('is-show');
      } else {
        // チェック項目がある場合、is-showクラスを削除
        $(this).removeClass('is-show');
      }
    });
  });
});