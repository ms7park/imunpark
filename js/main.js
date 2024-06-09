(function (win, $) {
  'use strict';

  // Popup
  const handlePopup = () => {
    const openPopup = function () {
      if (!$('.notice_popup_layer').length) return;
      const popupLayer = $('.notice_popup_layer');
      const closeBtn = popupLayer.find('.popup_btn_close');
      const checkBtn = popupLayer.find('.check_dayclose');
      const body = $('body');

      const isPopupClosed = function () {
        const cookiedata = document.cookie;
        return cookiedata.indexOf('close=Y') >= 0;
      };

      const setCookie = (cname, cvalue, exdays) => {
        const todayDate = new Date();
        todayDate.setTime(todayDate.getTime() + exdays * 24 * 60 * 60 * 1000);
        todayDate.setHours(0, 0, 0, 0);
        const expires = 'expires=' + todayDate.toUTCString();
        document.cookie = cname + '=' + cvalue + ';' + expires;
      };

      const closePopup = function () {
        if (checkBtn.is(':checked')) {
          setCookie('close', 'Y', 1);
        }
        popupLayer.hide();
        body.removeClass('no-scroll');
      };

      const popupSwiper = new Swiper('.popup_swiper', {
        speed: 500,
        loop: true,
        autoplay:true,
        autoplay: {
        delay: 5000,
        disableOnInteraction: false,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        touchRatio: 0,
        observer: true,
        observeParents: true,
      });

      if (isPopupClosed()) {
        popupLayer.hide();
      } else {
        popupLayer.show();
        if (window.innerWidth <= 580) {
          body.addClass('no-scroll');
        } else {
          body.removeClass('no-scroll');
        }
      }

      closeBtn.on('click', function () {
        closePopup();
      });
    };

    openPopup();

    let cachedWidth = $(window).width(); // Initialize cachedWidth with initial window width

    $(win).on('resize', function () {
      let newWidth = $(window).width();
      if (newWidth !== cachedWidth) {
        openPopup();
        cachedWidth = newWidth;
      }
    });
  };

  // Hero Banner
  const handleHeroBanner = () => {
    if (!$('.hero_banner').length) return;
    const handleTotalFraction = function () {
      const heroBanner = $('.hero_banner');
      const heroTotalFraction = heroBanner.find('.swiper-pagination-total');
      const slideCount = heroBanner.find('.swiper-slide').length;
      const duplicateSlideCount = heroBanner.find('.swiper-slide-duplicate').length;
      const totalSlideCount = slideCount - duplicateSlideCount;

      heroTotalFraction.text(totalSlideCount);
    };

    const handleCurrentFraction = function () {
      const heroBanner = $('.hero_banner');
      const heroCurrentFraction = heroBanner.find('.swiper-pagination-current');
      const currentSlideCount = heroBanner.find('.swiper-slide-active').data('swiper-slide-index') + 1;

      heroCurrentFraction.text(currentSlideCount);
    };

    const heroBannerSwiper = new Swiper('.hero_banner', {
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      speed: 1000,
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        type: 'progressbar',
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      a11y: {
        prevSlideMessage: '이전 배너 보기',
        nextSlideMessage: '다음 배너 보기',
      },
      on: {
        init: function () {
          handleTotalFraction();
          handleCurrentFraction();
        },
        slideChangeTransitionStart: function () {
          handleCurrentFraction();
        },
      },
    });

    $('.hero_autoplay_btn').on('click', function () {
      if ($(this).hasClass('is-stop')) {
        $(this).removeClass('is-stop');
        heroBannerSwiper.autoplay.start();
      } else {
        $(this).addClass('is-stop');
        heroBannerSwiper.autoplay.stop();
      }
    });
  };

  // View Scroll
  const handleViewScroll = () => {
    const sectionView = $('.section_view');
    const viewItems = sectionView.find('.view_item');

    const scroll = $(window).scrollTop();
    const threshold = 600;

    viewItems.each(function (index, viewItem) {
      const $viewItem = $(viewItem);
      const offsetTop = $viewItem.offset().top;
      const thresholdAdjusted = threshold;

      if (scroll > offsetTop - thresholdAdjusted) {
        $viewItem.addClass('is-show');
      }
    });
  };

  // Gallery Tab
  const handleGalleryTab = () => {
    const sectionGallery = $('.section_gallery');
    const galleryTabBtn = sectionGallery.find('.tab_btn');
    const galleryList = sectionGallery.find('.gallery_list');
    const galleryItem = galleryList.find('.gallery_item');

    galleryTabBtn.on('click', function () {
      const $this = this;

      galleryList.children().remove();

      if ($this.innerText === 'All') {
        galleryList.append(galleryItem);
        galleryList.removeClass('is-filtered');
      } else {
        const filteredContent = galleryItem.filter(function () {
          return $(this).find('.gallery_room_type')[0].innerText === $this.innerText;
        });
        galleryList.append(filteredContent);
        galleryList.addClass('is-filtered');
      }
    });
  };

  // Unit Type - Tab
  const handleUnitTab = () => {
    const unitTab = $('.tab.type_unit');
    const unitTabBtn = unitTab.find('.tab_btn');
    const unitTabCont = $('.unit_item');

    unitTabBtn.on('click', function () {
      let thisIndex = $(this).parent().index();

      unitTabBtn.attr('aria-selected', 'false');
      unitTabBtn.parent().removeClass('is-active');
      $(this).attr('aria-selected', 'true');
      $(this).parent().addClass('is-active');

      unitTabCont.eq(thisIndex).addClass('is-show').siblings().removeClass('is-show');
    });
  };

  // Unit Type - Accordion
  const handleUnitAccordion = () => {
    const unitAccItem = $('.unit_accordion_item');
    const unitAccBtn = unitAccItem.find('.unit_accordion_btn');
    const unitAccCont = $('.unit_accordion_box');

    unitAccCont.hide();
    unitAccCont.eq(0).show();
    unitAccBtn.on('click', function () {
      let thisIndex = $(this).parent().index();

      unitAccBtn.attr('aria-expanded', 'false');
      unitAccBtn.parent().removeClass('is-active');
      $(this).attr('aria-expanded', 'true');
      $(this).parent().addClass('is-active');

      if (unitAccCont.eq(thisIndex).hasClass('is-show') == false) {
        unitAccCont.slideUp(500);
        unitAccCont.eq(thisIndex).slideDown(500);
        unitAccCont.removeClass('is-show');
        unitAccCont.eq(thisIndex).addClass('is-show');
      }
    });
  };

  // VR Tab
  const handleVRTab = () => {
    const sectionVR = $('.section_vr');
    const vrTabBtn = sectionVR.find('.tab_btn');
    const vrItem = sectionVR.find('.vr_item');
    vrItem.eq(0).addClass('is-show');
    vrTabBtn.on('click', function () {
      const targetIdx = $(this).parent().index();
      vrItem.removeClass('is-show');
      vrItem.eq(targetIdx).addClass('is-show');
    });
  };

  $(function () {
    handlePopup();
    handleHeroBanner();
    handleGalleryTab();
    handleUnitTab();
    handleUnitAccordion();
    handleVRTab();
  });

  $(win).on('scroll', function () {
    handleViewScroll();
  });
})(window, window.jQuery);
