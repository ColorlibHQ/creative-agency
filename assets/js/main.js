/**
 * Creative Agency front-end behaviour, without jQuery.
 *
 * The plugin calls keep the options they always had; ColorlibUI provides
 * drop-in versions of Owl Carousel, Isotope, Magnific Popup, SlickNav,
 * ScrollUp and AjaxChimp that build the same markup, so the theme's
 * stylesheets apply unchanged. scrollIt.js is replaced by scrollIt() below.
 */
(function () {
  'use strict';

  var UI = window.ColorlibUI;
  if (!UI) return;

  // Creative Agency shipped Owl Carousel 2.2.1, and its stylesheets style
  // that build's <div> arrows and dots (2.3 builds <button>s). Set before any
  // carousel starts, including the companion plugin's and the Elementor editor's.
  if (UI.owl && UI.owl.defaults) UI.owl.defaults.markup = '2.2';

  // TOP Menu Sticky
  window.addEventListener('scroll', function () {
    var header = document.getElementById('sticky-header');
    if (header) header.classList.toggle('sticky', window.pageYOffset >= 400);
    UI.fade('#back-top', 'in', 500);
  }, { passive: true });

  /**
   * scrollIt.js: [data-scroll-nav] / [data-scroll-goto] links scroll to the
   * [data-scroll-index] section with the same number, the nav link of the
   * section in view gets activeClass, and the up/down keys step between
   * sections. Pages without [data-scroll-index] sections are left alone.
   */
  function scrollIt(options) {
    var settings = UI.extend({
      upKey: 38,
      downKey: 40,
      scrollTime: 600,
      activeClass: 'active',
      onPageChange: null,
      topOffset: 0
    }, options);
    var sections = UI.toElements('[data-scroll-index]');
    // Indexes stay strings, as scrollIt read them from the attributes.
    var lastIndex = sections.length ? sections[sections.length - 1].getAttribute('data-scroll-index') : undefined;
    var active = 0;
    var animating = false;

    function navigate(ndx) {
      if (ndx < 0 || ndx > lastIndex) return;
      var section = document.querySelector('[data-scroll-index="' + ndx + '"]');
      if (!section) return;
      animating = true;
      window.setTimeout(function () { animating = false; }, settings.scrollTime);
      UI.scrollToY(UI.offset(section).top + settings.topOffset + 1, settings.scrollTime);
    }

    function updateActive(ndx) {
      if (settings.onPageChange && ndx && active != ndx) settings.onPageChange(ndx);
      active = ndx;
      UI.toElements('[data-scroll-nav]').forEach(function (nav) {
        nav.classList.toggle(settings.activeClass, nav.getAttribute('data-scroll-nav') === ndx);
      });
    }

    function watchActive() {
      var winTop = window.pageYOffset;
      var visible = UI.toElements('[data-scroll-index]').filter(function (section) {
        var top = UI.offset(section).top + settings.topOffset;
        return winTop >= top && winTop < top + section.offsetHeight;
      });
      updateActive(visible.length ? visible[0].getAttribute('data-scroll-index') : undefined);
    }

    window.addEventListener('scroll', watchActive, { passive: true });
    watchActive();

    window.addEventListener('keydown', function (e) {
      var key = e.keyCode;
      if (key !== settings.upKey && key !== settings.downKey) return;
      // While a scroll runs the keys are swallowed.
      if (!animating) {
        if (key === settings.upKey && active > 0) {
          navigate(parseInt(active, 10) - 1);
        } else if (key === settings.downKey && active < lastIndex) {
          navigate(parseInt(active, 10) + 1);
        } else {
          return;
        }
      }
      e.preventDefault();
      e.stopPropagation();
    });

    document.body.addEventListener('click', function (e) {
      if (!e.target.closest) return;
      var nav = e.target.closest('[data-scroll-nav]');
      var goTo = e.target.closest('[data-scroll-goto]');
      if (!nav && !goTo) return;
      e.preventDefault();
      navigate(parseInt((nav && nav.getAttribute('data-scroll-nav')) ||
        (goTo && goTo.getAttribute('data-scroll-goto')), 10));
    });
  }

  function init() {
    // mobile_menu
    UI.slicknav('ul#navigation', {
      prependTo: '.mobile_menu',
      closedSymbol: '+',
      openedSymbol: '-'
    });

    // review-active
    UI.owl('.testmonial_active', {
      loop: true,
      margin: 0,
      items: 1,
      autoplay: true,
      navText: ['<i class="fa-solid fa-angle-left"></i>', '<i class="fa-solid fa-angle-right"></i>'],
      nav: true,
      dots: false,
      autoplayHoverPause: true,
      autoplaySpeed: 800,
      responsive: {
        0: {
          items: 1,
          dots: false,
          nav: false
        },
        767: {
          items: 1,
          dots: false,
          nav: false
        },
        992: {
          items: 1,
          nav: false
        },
        1200: {
          items: 1,
          nav: false
        },
        1500: {
          items: 1
        }
      }
    });

    // brand_active
    UI.owl('.brand_active', {
      loop: true,
      margin: 0,
      items: 1,
      autoplay: true,
      navText: ['<i class="fa-solid fa-angle-left"></i>', '<i class="fa-solid fa-angle-right"></i>'],
      nav: false,
      dots: false,
      autoplayHoverPause: true,
      autoplaySpeed: 800,
      responsive: {
        0: {
          items: 2,
          dots: false,
          nav: false
        },
        767: {
          items: 3,
          dots: false,
          nav: false
        },
        992: {
          items: 4,
          nav: false
        },
        1200: {
          items: 5,
          nav: false
        },
        1500: {
          items: 6
        }
      }
    });

    // for filter
    // init Isotope
    UI.isotope('.grid', {
      itemSelector: '.grid-item',
      percentPosition: true,
      masonry: {
        // use outer width of grid-sizer for columnWidth
        columnWidth: 1
      }
    });

    // filter items on button click
    UI.toElements('.portfolio-menu').forEach(function (menu) {
      menu.addEventListener('click', function (e) {
        var button = e.target.closest && e.target.closest('button');
        if (!button || !menu.contains(button)) return;
        UI.isotope('.grid', { filter: button.getAttribute('data-filter') });
      });
    });

    //for menu active class
    UI.toElements('.portfolio-menu button').forEach(function (button) {
      button.addEventListener('click', function (event) {
        Array.prototype.forEach.call(button.parentNode.children, function (sibling) {
          if (sibling !== button) sibling.classList.remove('active');
        });
        button.classList.add('active');
        event.preventDefault();
      });
    });

    // wow js
    UI.reveal('.wow');

    // counter
    UI.counter('.counter', { time: 10000 });

    /* magnificPopup img view */
    UI.magnific('.popup-image', {
      type: 'image',
      gallery: {
        enabled: true
      }
    });

    /* magnificPopup img view */
    UI.magnific('.img-pop-up', {
      type: 'image',
      gallery: {
        enabled: true
      }
    });

    /* magnificPopup video view */
    UI.magnific('.popup-video', {
      type: 'iframe'
    });

    // scrollIt for smoth scroll
    scrollIt({
      upKey: 38,             // key code to navigate to the next section
      downKey: 40,           // key code to navigate to the previous section
      easing: 'linear',      // the easing function for animation
      scrollTime: 600,       // how long (in ms) the animation takes
      activeClass: 'active', // class given to the active nav element
      onPageChange: null,    // function(pageIndex) that is called when page is changed
      topOffset: 0           // offste (in px) for fixed top navigation
    });

    // scrollup bottom to top
    UI.scrollUp({
      scrollName: 'scrollUp', // Element ID
      topDistance: '4500', // Distance from top before showing element (px)
      topSpeed: 300, // Speed back to top (ms)
      animation: 'fade', // Fade, slide, none
      animationInSpeed: 200, // Animation in speed (ms)
      animationOutSpeed: 200, // Animation out speed (ms)
      scrollText: '<i class="fa-solid fa-angle-double-up"></i>', // Text for element
      activeOverlay: false // Set CSS color to display scrollUp active point, e.g '#00FFFF'
    });

    // blog-page

    //brand-active
    UI.owl('.brand-active', {
      loop: true,
      margin: 30,
      items: 1,
      autoplay: true,
      nav: false,
      dots: false,
      autoplayHoverPause: true,
      autoplaySpeed: 800,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        767: {
          items: 4
        },
        992: {
          items: 7
        }
      }
    });

    // blog-dtails-page

    //project-active
    UI.owl('.project-active', {
      loop: true,
      margin: 30,
      items: 1,
      // autoplay:true,
      navText: ['<i class="Flaticon flaticon-left-arrow"></i>', '<i class="Flaticon flaticon-right-arrow"></i>'],
      nav: true,
      dots: false,
      // autoplayHoverPause: true,
      // autoplaySpeed: 800,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        767: {
          items: 1,
          nav: false
        },
        992: {
          items: 2,
          nav: false
        },
        1200: {
          items: 1
        },
        1501: {
          items: 2
        }
      }
    });

    if (document.getElementById('default-select')) {
      UI.enhanceSelects('select');
    }

    //about-pro-active
    UI.owl('.details_active', {
      loop: true,
      margin: 0,
      items: 1,
      // autoplay:true,
      navText: ['<i class="ti-angle-left"></i>', '<i class="ti-angle-right"></i>'],
      nav: true,
      dots: false,
      // autoplayHoverPause: true,
      // autoplaySpeed: 800,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        767: {
          items: 1,
          nav: false
        },
        992: {
          items: 1,
          nav: false
        },
        1200: {
          items: 1
        }
      }
    });

    // resitration_Form
    UI.magnific('.popup-with-form', {
      type: 'inline',
      preloader: false,
      focus: '#name',

      // When elemened is focused, some mobile browsers in some cases zoom in
      // It looks not nice, so we disable it:
      callbacks: {
        beforeOpen: function () {
          if (document.documentElement.clientWidth < 700) {
            this.st.focus = false;
          } else {
            this.st.focus = '#name';
          }
        }
      }
    });

    // resitration_Form
    UI.magnific('.dont-hav-acc', {
      type: 'inline',
      preloader: false,
      focus: '#name',

      // When elemened is focused, some mobile browsers in some cases zoom in
      // It looks not nice, so we disable it:
      callbacks: {
        beforeOpen: function () {
          if (document.documentElement.clientWidth < 700) {
            this.st.focus = false;
          } else {
            this.st.focus = '#name';
          }
        }
      }
    });
  }

  // jQuery 3 ran ready handlers asynchronously, after the companion plugin's
  // own start-up code, so the companion's scroll-to-top and counter settings
  // won over the ones above. The timeout keeps that order.
  UI.ready(function () {
    window.setTimeout(init, 0);
  });

  //------- Mailchimp js --------//
  UI.ajaxChimp('#mc_embed_signup form');
}());
