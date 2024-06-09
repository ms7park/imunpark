(function (win, $) {
  'use strict';

  // Sub Tab
  const handleSubTab = () => {
    const tabWrap = $('.tab_wrap');
    const tab = tabWrap.find('.tab');
    const tabBtn = tab.find('.tab_btn');
    const tabCont = $('.tab_cont_item');
    const section_sub_top = $('.section_sub_top');
    section_sub_top.eq(0).siblings().removeClass('is-active');

    tabBtn.on('click', function () {
      let thisIndex = $(this).parent().index();
      tabCont.eq(thisIndex).addClass('is-show').siblings().removeClass('is-show');

      if (section_sub_top.length > 1) {
        section_sub_top.eq(thisIndex).addClass('is-active').siblings().removeClass('is-active');
        section_sub_top.eq(thisIndex).find('.sub_top_txt').removeClass('is-show').addClass('no-animate');
        section_sub_top.eq(thisIndex).find('.sub_top_imgbox').removeClass('is-show').addClass('no-animate');
      }
    });
  };

  // Image popup
  const handleImagePopup = () => {
    const imgboxList = $('.imgbox_list');
    const imgboxPop = $('.imgbox_pop');
    const popupLayer = $('.img_popup_layer');
    const popupTitle = $('.popup_tit');
    const popupCloseBtn = $('.popup_close_btn');
    const popupImage = popupLayer.find('.popup_img');
    const body = $('body');

    const showPopup = function () {
      const thisTitle = $(this).siblings('.sub_content_tit');
      const thisImage = $(this).find('.pop_img');
      const popupNewImage = thisImage.attr('src');

      if (imgboxList.children(imgboxPop).length > 1) {
        const popupNewTitle = $(this).parent().siblings().children('.sub_content_tit').text();
        popupTitle.text(popupNewTitle);
        popupImage.attr('src', popupNewImage);
        popupLayer.addClass('is-show');
        body.addClass('no-scroll');
      } else {
        const popupNewTitle = thisTitle.text();
        popupTitle.text(popupNewTitle);
        popupImage.attr('src', popupNewImage);
        popupLayer.addClass('is-show');
        body.addClass('no-scroll');
      }
    };

    const hidePopup = function () {
      popupLayer.removeClass('is-show');
      body.removeClass('no-scroll');
    };

    if (window.innerWidth <= 1024) {
      imgboxPop.on('click', showPopup);
      popupCloseBtn.on('click', hidePopup);
    } else {
      hidePopup();
    }
  };

  // Youtube Tab
  const handleYoutubeTab = () => {
    const youtubeTab = $('.tab.type_youtube');
    const youtubeTabBtn = youtubeTab.find('.tab_btn');
    const youtubeTabCont = $('.youtube_item');

    youtubeTabBtn.on('click', function () {
      let thisIndex = $(this).parent().index();
      youtubeTabCont.eq(thisIndex).addClass('is-show').siblings().removeClass('is-show');
    });
  };

  // Contact Tab
  const handleContactTab = () => {
    const contactBox = $('.contact_box');
    const contactTabBtn = contactBox.find('.tab_btn');
    const contactList = $('.media_tablet .contact_list');
    const contactItem = contactList.find('.contact_item');

    contactTabBtn.on('click', function () {
      let thisIndex = $(this).parent().index();
      contactItem.eq(thisIndex).addClass('is-show').siblings().removeClass('is-show');
    });
  };

  // Contact Scroll svg
  const handleContactScroll = () => {
    if (!$('.contact').length) return;
    const contact = $('.contact');
    const mapRoad = $('.map_road');
    if (contact.parent().parent().hasClass('is-show')) {
      mapRoad.addClass('is-show');
    } else {
      mapRoad.removeClass('is-show');
    }
  };

  // Overview
  const handleOverview = () => {
    if (!$('.section_overview').length) return;
    for (let i = 0; i < $('.section_overview').length; i++) {
      let currentPosition = 0;
      let overviewItem = $('.overview_item').eq(i);
      let overviewItemTop = overviewItem.offset().top;
      let overviewItemHeight = overviewItem.height();

      overviewItemHeight *= $('.overview_desc_item').length / $('.section_overview').length;
      overviewItem.css('height', overviewItemHeight + 500);

      let overviewImageBox = $('.overview_imgbox').eq(i);
      let overviewDesc = $('.overview_desc').eq(i);
      let opacityImage = overviewImageBox.find('.media_pc').eq(0);
      let moveImage = overviewImageBox.find('.media_pc').eq(1);
      let opacityImageMo = overviewImageBox.find('.media_tablet').eq(0);
      let moveImageMo = overviewImageBox.find('.media_tablet').eq(1);
      let moveDesc1 = overviewDesc.find('.overview_desc_item').eq(0);
      let moveDesc2 = overviewDesc.find('.overview_desc_item').eq(1);

      const handleScrollOverview = function () {
        const scroll = $(window).scrollTop();

        let currentRatio = (scroll - overviewItemTop) / overviewItemHeight;
        currentRatio = currentRatio.toFixed(1);

        if (currentRatio < 0) {
          currentPosition = 0;
        } else if (currentRatio > 1) {
          currentPosition = 1;
        } else {
          currentPosition = currentRatio;
        }
        if (currentRatio <= 0.0) {
          opacityImage.css('opacity', '1');
          moveImage.css('top', '100%');
          opacityImageMo.css('opacity', '1');
          moveImageMo.css('top', '100%');
          moveDesc1.css('top', '0');
          moveDesc2.css('top', '100%');
        }
        if (currentRatio == 0.2) {
          opacityImage.css('opacity', '0.8');
          moveImage.css('top', '80%');
          opacityImageMo.css('opacity', '0.8');
          moveImageMo.css('top', '80%');
          moveDesc1.css('top', '80%');
          moveDesc2.css('top', '100%');
        }
        if (currentRatio == 0.3) {
          opacityImage.css('opacity', '0.8');
          moveImage.css('top', '20%');
          opacityImageMo.css('opacity', '0.8');
          moveImageMo.css('top', '20%');
          moveDesc1.css('top', '100%');
          moveDesc2.css('top', '20%');
        }
        if (currentRatio >= 0.4) {
          opacityImage.css('opacity', '0.8');
          moveImage.css('top', '0');
          opacityImageMo.css('opacity', '0.8');
          moveImageMo.css('top', '0');
          moveDesc1.css('top', '100%');
          moveDesc2.css('top', '0');
        }
      };

      $(win).on('scroll', function () {
        handleScrollOverview();
      });
    }
  };

  // System Accordion
  const handleSystemAccordion = () => {
    const systemAccItem = $('.section_ico.type_toggle .ico_item');
    const systemAccBtn = systemAccItem.find('.item_button');
    const systemAccCont = systemAccItem.find('.ico_cont');

    const handleSystemButton = function () {
      systemAccBtn.on('click', function () {
        let thisIndex = $(this).parent().index();

        if ($(this).parent().hasClass('is-active') == false) {
          $(this).parent().addClass('is-active');
          $(this).attr('aria-expanded', 'true');
        } else if ($(this).parent().hasClass('is-active') == true) {
          $(this).attr('aria-expanded', 'false');
          $(this).parent().removeClass('is-active');
        }

        if (systemAccCont.eq(thisIndex).hasClass('is-show') == false) {
          systemAccCont.eq(thisIndex).stop().slideDown(500);
          systemAccCont.eq(thisIndex).addClass('is-show');
        } else if (systemAccCont.eq(thisIndex).hasClass('is-show') == true) {
          systemAccCont.eq(thisIndex).stop().slideUp(500);
          systemAccCont.eq(thisIndex).removeClass('is-show');
        }
      });
    };

    const handleResizeTest = function () {
      let cachedWidth = $(window).width();
      $(win).on('resize', function () {
        let newWidth = $(window).width();
        if (newWidth !== cachedWidth) {
          systemAccBtn.parent().removeClass('is-active');
          systemAccCont.removeClass('is-show');
          if (window.innerWidth >= 1024) {
            systemAccCont.show();
          }
          if (window.innerWidth <= 1024) {
            systemAccCont.hide();
          }
          cachedWidth = newWidth;
        }
      });
    };

    handleSystemButton();
    handleResizeTest();
  };

  const handleIco = () => {
    if (!$('.ico_swiper').length) return;
    const icoSwiper = new Swiper('.ico_swiper', {
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      observer: true,
      observeParents: true,
    });
  };

  const handleSystemTab = () => {
    const section_sub_top = $('.section_sub_top');
    const systemTabBox = $('.system_tabbox');
    const systemTabBtn = systemTabBox.find('.tab_btn');
    const systemContList = $('.system_tabcont');
    const systemContItem = systemContList.find('.system_tabitem');
    section_sub_top.eq(0).addClass('is-active');

    systemTabBtn.on('click', function () {
      let thisIndex = $(this).parent().index();
      systemContItem.eq(thisIndex).addClass('is-show').siblings().removeClass('is-show');
      section_sub_top.eq(thisIndex).addClass('is-active').siblings().removeClass('is-active');
    });
  };

  $(function () {
    handleSubTab();
    handleImagePopup();
    handleYoutubeTab();
    handleContactTab();
    handleOverview();
    handleSystemAccordion();
    handleIco();
    handleSystemTab();
  });

  $(win).on('resize', function () {
    handleImagePopup();
  });

  $(win).on('scroll', function () {
    handleContactScroll();
  });
})(window, window.jQuery);
