(function (win, $) {
  'use strict';

  // PC Header
  const handlePcHeader = () => {
    const headerInner = $('.header_inner.type_pc');
    const headerTitle = headerInner.find('.header_title_link');
    const headerGnbItem = headerInner.find('.header_gnb_item');
    const headerLnbLastItem = headerInner.find('.header_lnb .header_lnb_item:last-child .header_lnb_link');

    headerGnbItem.on('mouseenter', function () {
      $(this).addClass('is-active');
    });
    headerGnbItem.on('mouseleave', function () {
      $(this).removeClass('is-active');
    });
    headerGnbItem.on('focusin', function () {
      $(this).siblings().removeClass('is-active');
      $(this).addClass('is-active');
    });
    headerTitle.on('focusin', function () {
      headerGnbItem.removeClass('is-active');
    });
    headerLnbLastItem.on('focusout', function () {
      $(this).closest('.header_gnb_item').removeClass('is-active');
    });
  };

  // Mobile Header
  const handleMobileHeader = () => {
    const body = $('body');
    const headerInner = $('.header_inner.type_mobile');
    const headerMenuBtn = headerInner.find('.header_menu_btn');
    const headerGnbWrap = headerInner.find('.header_gnb_wrap');
    const headerGnbBtn = headerInner.find('.header_gnb_btn');
    const headerCloseBtn = headerInner.find('.header_close_btn');

    headerMenuBtn.on('click', function () {
      body.toggleClass('no-scroll');
      $(this).attr('aria-expanded') === 'true' ? $(this).attr('aria-expanded', 'false') : $(this).attr('aria-expanded', 'true');
      headerGnbWrap.toggleClass('is-active');
    });

    headerGnbBtn.on('click', function () {
      const thisGnbItem = $(this).closest('.header_gnb_item');
      const gnbItemSiblings = thisGnbItem.siblings();
      const lnbHeight = $(this).siblings('.header_lnb').find('.header_lnb_list').outerHeight(true);

      gnbItemSiblings.find('.header_gnb_btn').attr('aria-expanded', 'false');
      $(this).attr('aria-expanded') === 'true' ? $(this).attr('aria-expanded', 'false') : $(this).attr('aria-expanded', 'true');

      gnbItemSiblings.removeClass('is-active');
      thisGnbItem.toggleClass('is-active');

      gnbItemSiblings.find('.header_lnb').animate({ height: 0 }, 500);
      thisGnbItem.hasClass('is-active') ? $(this).siblings('.header_lnb').animate({ height: lnbHeight }, 500) : $(this).siblings('.header_lnb').animate({ height: 0 }, 500);
    });

    headerCloseBtn.on('click', function () {
      body.removeClass('no-scroll');
      headerMenuBtn.attr('aria-expanded', 'false');
      headerGnbWrap.removeClass('is-active');
    });
  };

  // Fixed Header
  const handleFixedHeader = () => {
    let lastScroll = 0;

    const handleScrollHeader = function () {
      if (window.innerWidth >= 1024) {
        const header = $('.header');
        let nowScroll = $(window).scrollTop();

        if (nowScroll > lastScroll) {
          header.addClass('is-hide');
        } else {
          header.removeClass('is-hide');
        }
        lastScroll = nowScroll;

        header.on('focusin', function () {
          header.removeClass('is-hide');
        });
      }
    };

    $(win).on('scroll resize', function () {
      handleScrollHeader();
    });
  };

  // Move Top
  const handleMoveTop = () => {
    $('.btn_move_top').on('click', function () {
      $('html, body').animate({ scrollTop: '0' });
    });
  };

  // Tab Button
  const handleTabBtn = () => {
    const tab = $('.tab');
    const tabBtn = tab.find('.tab_btn');

    tabBtn.on('click', function () {
      $(this).attr('aria-selected', 'true').siblings().attr('aria-selected', 'false');
      $(this).parent().addClass('is-active').siblings().removeClass('is-active');
    });
  };

  // scroll
  const handleScroll = () => {
    const scroll = $(window).scrollTop();
    const sections = $('.section:visible');

    sections.each(function (index, section) {
      if (index === 0) {
        return;
      }

      const $section = $(section);
      const offsetTop = $section.offset().top;

      if (scroll > offsetTop - 600) {
        $section.addClass('is-show');
      }
    });
  };

  $(function () {
    handlePcHeader();
    handleMobileHeader();
    handleFixedHeader();
    handleMoveTop();
    handleTabBtn();
    handleScroll();
  });

  $(win).on('scroll', function () {
    handleScroll();
  });
})(window, window.jQuery);
