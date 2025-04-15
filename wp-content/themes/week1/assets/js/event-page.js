function throttle(func, limit) {
  let lastCall = 0;

  return function (...args) {
    const now = Date.now();

    if (now - lastCall >= limit) {
      lastCall = now;
      func.apply(this, args);
    }
  };
}

function debounce(func, delay) {
  let timeoutId;

  return function (...args) {
    // Clear the previous timeout if it's still running
    clearTimeout(timeoutId);

    // Set a new timeout to execute the function after the delay
    timeoutId = setTimeout(() => {
      func.apply(this, args);
    }, delay);
  };
}


$(document).ready(function () {
  $('.header__menu-item').click(function() {
    if(!$('.header__main-menu').hasClass('header__main-opened')) {
      return;
    }
    $('.header__menu-close').trigger('click');
    const target = $(this).find(' a.header__menu-toplink').attr('href');
    if (target) {
        $('html, body').animate({ scrollTop: $(target).offset().top - 70 }, 500);
    }
  })

  const aboutUsSlider = new Swiper(".about-event__slider.swiper", {
    slidesPerView: 2,
    slidesPerGroup: 2,
    speed: 400,
    loop: true,
    spaceBetween: 2,
    lazy: true,
    navigation: {
      prevEl: ".about-event__slider-nav.swiper-button-prev",
      nextEl: ".about-event__slider-nav.swiper-button-next",
    },
    autoplay: {
      delay: 3000,
      pauseOnMouseEnter: true,
    },
    breakpoints: {
      576: {
        direction: "horizontal", // Vertical mode on mobile
        slidesPerView: 3,
        slidesPerGroup: 3,
        loop: true,
        loopAddBlankSlides: false,
        spaceBetween: 16,
      },
      720: {
        slidesPerView: 3,
        slidesPerGroup: 3,
        loop: true,
        loopAddBlankSlides: false,
        spaceBetween: 60,
      },
      0: {
        direction: "vertical", // Vertical mode on mobile
        slidesPerView: "auto",
        loopAddBlankSlides: false,
        spaceBetween: 30,
        mousewheel: true, // Enables scrolling with mouse
      }
    },
  });

  let checkAnPSwiper = document.querySelector(".anp__slider.swiper").swiper

  if (checkAnPSwiper) {
    checkAnPSwiper.destroy(true, true);
    console.log('destroyed')
  }

  const anpSlider = new Swiper(".anp__slider.swiper", {
    slidesPerView: 4,
    speed: 400,
    spaceBetween: 40,
    loop: true,
    // lazy: true,
    navigation: {
      prevEl: ".anp__slider-nav.swiper-button-prev",
      nextEl: ".anp__slider-nav.swiper-button-next",
    },
    autoplay: {
      delay: 3000,
      pauseOnMouseEnter: true,
    },
    breakpoints: {
      576: {
        loopAddBlankSlides: false,
        spaceBetween: 80,
      },
    },
  });
});
