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

// header footer handler
$(document).ready(function () {
  function isAppleDevice() {
    return (
      navigator.userAgent.toLowerCase().indexOf("ipad") > -1 ||
      navigator.userAgent.toLowerCase().indexOf("iphone") > -1 ||
      navigator.userAgent.toLowerCase().indexOf("ipod") > -1 ||
      navigator.userAgent.toLowerCase().indexOf("mac") > -1
    );
  }
  if (isAppleDevice()) {
    $("body").addClass("is_apple");
  }

  $(".header__menu-item").each(function () {
    $headerMenuToplink = $(this).find(".header__menu-toplink");
    text = $headerMenuToplink.text().trim();
    link = $headerMenuToplink.attr("href");

    $headerMenuToplink.after(
      `<a href="${link}" class="header__menu-hover">${text}</a>`
    );
  });

  const scrollToTopBtn = document.getElementById("scrollToTopBtn");
  const heroSection = document.querySelector(".hero");

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) {
          scrollToTopBtn.classList.add("visible");
        } else {
          scrollToTopBtn.classList.remove("visible");
        }
      });
    },
    {
      threshold: 0,
    }
  );

  observer.observe(heroSection);

  scrollToTopBtn.addEventListener("click", function () {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });

  $(".header__menu-item:has(.header__submenu) > .header__menu-item-text").each(
    function () {
      const handleClick = throttle(function () {
        if ($(window).innerWidth() > 1100) {
          return;
        }
        if ($(this).parent().hasClass("header__menu-expanded")) {
          $(this).parent().removeClass("header__menu-expanded");
          return;
        }
        $(".header__menu-item").removeClass("header__menu-expanded");
        $(this).parent().addClass("header__menu-expanded");
      }, 100);

      $(this).click(handleClick);
    }
  );

  $(
    ".header__submenu-item:has(.header__submenu-children) > .header__submenu-text"
  ).each(function () {
    const handleClick = throttle(function () {
      if ($(window).innerWidth() > 1100) {
        return;
      }
      if ($(this).parent().hasClass("header__menu-expanded")) {
        $(this).parent().removeClass("header__menu-expanded");
        return;
      }
      $(".header__submenu-item").removeClass("header__menu-expanded");
      $(this).parent().addClass("header__menu-expanded");
    }, 100); // Adjust throttle interval as needed

    $(this).click(handleClick);
  });

  $(".footer__main-nav .footer__nav-list .footer__nav-list-title").each(
    function () {
      const handleClick = throttle(function () {
        if ($(window).innerWidth() > 1100) {
          return;
        }
        if ($(this).parent().hasClass("footer__nav-expanded")) {
          $(this).parent().removeClass("footer__nav-expanded");
          return;
        }
        $(".footer__nav-list").removeClass("footer__nav-expanded");
        $(this).parent().addClass("footer__nav-expanded");
      }, 100);

      $(this).click(handleClick);
    }
  );

  const handleCloseMenuMobile = function () {
    document.querySelector("html").style.overflow = "";
    $(".header__menu-item").removeClass("header__menu-expanded");
    $(".header__submenu-item").removeClass("header__menu-expanded");
    $(".header__main-menu").removeClass("header__main-opened");

    $(".header__main-actions").css("display", "");
    $(".header__main-language").css("display", "");
    $(".header__main-logo").css("display", "");
  };

  $(".header__menu-close").click(handleCloseMenuMobile);

  $(".header__action-hamburger").click(function () {
    document.querySelector("html").style.overflow = "hidden";
    $(".header__main-menu").addClass("header__main-opened");
    $(".header__main-actions").css("display", "none");
    $(".header__main-language").css("display", "none");
    $(".header__main-logo").css("display", "none");
  });

  $(window).resize(handleCloseMenuMobile);

  const bannerKey = "promoTimeout";
  const oneDayInMs = 24 * 60 * 60 * 1000;

  const closedAt = localStorage.getItem(bannerKey);
  if (closedAt) {
    const closedDate = new Date(closedAt);
    const currentDate = new Date();
    if (currentDate - closedDate < oneDayInMs) {
      $(".bottom-promotion").hide();
    }
  }

  $(".bottom-promotion__close").click(function (e) {
    e.preventDefault();
    e.stopPropagation();
    $(this).parent(".bottom-promotion").remove();

    localStorage.setItem(bannerKey, new Date().toISOString());
  });
})



$(document).ready(function () {
  const heroSlider = new Swiper(".hero__slider.swiper", {
    slidesPerView: 1,
    speed: 400,
    spaceBetween: 0,
    lazy: true,
    pagination: {
      el: ".hero__slider-pagination",
      clickable: true,
    },
  });

  const aboutUsSlider = new Swiper(".about-us__slider.swiper", {
    slidesPerView: 2,
    slidesPerGroup: 2,
    speed: 400,
    loop: true,
    spaceBetween: 2,
    lazy: true,
    navigation: {
      prevEl: ".about-us__slider-nav.swiper-button-prev",
      nextEl: ".about-us__slider-nav.swiper-button-next",
    },
    autoplay: {
      delay: 3000,
      pauseOnMouseEnter: true,
    },
    breakpoints: {
      576: {
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
    },
  });

  const anpSlider = new Swiper(".anp__slider.swiper", {
    slidesPerView: 4,
    speed: 400,
    spaceBetween: 20,
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

  const newsSlider = new Swiper(".information__slider.swiper", {
    slidesPerView: 1,
    speed: 400,
    spaceBetween: 12,
    centeredSlides: true,
    centeredSlidesBounds: true,
    width: 280,
    lazy: true,
    navigation: {
      prevEl: ".information__slider-nav.swiper-button-prev",
      nextEl: ".information__slider-nav.swiper-button-next",
    },
    breakpoints: {
      576: {
        width: null,
        spaceBetween: 16,
        slidesPerView: 3,
        centeredSlides: false,
        centeredSlidesBounds: false,
      },
    },
  });

  const eventSlider = new Swiper(".events__slider.swiper", {
    slidesPerView: 1,
    speed: 400,
    width: 264,
    slidesPerGroup: 1,
    spaceBetween: 12,
    lazy: true,
    centeredSlides: true,
    autoplay: {
      delay: 3000,
      pauseOnMouseEnter: true,
    },
    navigation: {
      prevEl: ".events__slider-nav.swiper-button-prev",
      nextEl: ".events__slider-nav.swiper-button-next",
    },
    breakpoints: {
      576: {
        width: 508,
        slidesPerView: 2,
        spaceBetween: 13,
        centeredSlides: false,
      },
      846: {
        width: null,
        loop: true,
        slidesPerView: 3,
        centeredSlides: true,
      },
    },
  });

  const sharingSlider = new Swiper(".sharing__slider.swiper", {
    slidesPerView: 1,
    speed: 400,
    spaceBetween: 100,
    pagination: {
      el: ".sharing__slider-pagination",
      clickable: true,
    },
    navigation: {
      prevEl: ".sharing__slider-nav.swiper-button-prev",
      nextEl: ".sharing__slider-nav.swiper-button-next",
    },
    autoplay: {
      delay: 3000,
      pauseOnMouseEnter: true,
    },
  });

  const studentLifeSlider = new Swiper(".student-life__slider.swiper", {
    loop: true,
    speed: 1000,
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 1,
    slideToClickedSlide: true,
    loopAdditionalSlides: 2,
    coverflowEffect: {
      rotate: 0,
      stretch: 210,
      scale: 0.8,
      depth: 150,
      modifier: 1,
      slideShadows: false,
    },
    autoplay: {
      delay: 3000,
      pauseOnMouseEnter: true,
    },
    breakpoints: {
      412: {
        coverflowEffect: {
          rotate: 0,
          stretch: 245,
          scale: 0.8,
          depth: 150,
          modifier: 1,
          slideShadows: false,
        },
      },
      576: {
        slidesPerView: 1,
        coverflowEffect: {
          rotate: 0,
          stretch: 356,
          scale: 0.9,
          depth: 150,
          modifier: 1,
          slideShadows: false,
        },
      },
      768: {
        slidesPerView: 1,
        coverflowEffect: {
          rotate: 0,
          stretch: 640,
          modifier: 0.8,
          scale: 0.9,
          slideShadows: false,
        },
      },
      1100: {
        slidesPerView: 2,
        coverflowEffect: {
          rotate: 0,
          stretch: 336,
          modifier: 0.8,
          scale: 0.8,
          slideShadows: false,
        },
      },
    },
    navigation: {
      prevEl: ".student-life__slider-nav.swiper-button-prev",
      nextEl: ".student-life__slider-nav.swiper-button-next",
    },
    pagination: {
      el: ".student-life__slider-pagination",
      clickable: true,
    },
  });

  var currentVideo = {
    id: "1HI_bnHLDms",
    src: "https://www.youtube.com/embed/1HI_bnHLDms",
    title: "DISCOVER OUR CAMPUS – WHERE LEARNING COMES TO LIFE",
  };

  $(".video__item").each(function () {
    const videoID = $(this).data("video-id");
    if (videoID) {
      var videoThumbnail = `https://img.youtube.com/vi/${videoID}/maxresdefault.jpg`;
      $(this).find(".video__item-thumbnail img").attr("src", videoThumbnail);
    }
  });

  $(".video__item").click(function () {
    const videoSrc = $(this).data("video");
    const videoTitle = $(this).data("title");
    const videoID = $(this).data("video-id");
    // const tempVideo = {
    //   id: videoID,
    //   src: videoSrc,
    //   title: videoTitle
    // }

    $(this).data("video", currentVideo.src);
    $(this).data("title", currentVideo.title);
    $(this).data("video-id", currentVideo.id);
    console.log("this");

    if (currentVideo.id) {
      var videoThumbnail = `https://img.youtube.com/vi/${currentVideo.id}/maxresdefault.jpg`;
      $(this).find(".video__item-thumbnail img").attr("src", videoThumbnail);
    }

    currentVideo = {
      id: videoID,
      src: videoSrc,
      title: videoTitle,
    };

    $(".video__player-main")
      .find("iframe")
      .attr({
        src: `${currentVideo.src}?&autoplay=1&mute=1`,
        title: currentVideo,
        autoplay: "1",
      });
  });

  const $video = $("#video_play");
  const videosSection = document.querySelector(".videos");

  let lastScrollY = 0;
  let isScrollingDown = false;

  const updateScrollDirection = () => {
    const currentScrollY = window.scrollY;
    isScrollingDown = currentScrollY > lastScrollY;
    lastScrollY = currentScrollY;
  };

  if (videosSection) {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting && isScrollingDown) {
            const videoSrc = $video.attr("src");
            if (videoSrc.includes("?&autoplay=1&mute=1")) {
              console.log(videoSrc);
              return;
            }
            $video.attr("src", `${videoSrc}?&autoplay=1&mute=1`);
          }
        });
      },
      {
        threshold: 0.3,
      }
    );

    observer.observe(videosSection);
  }

  $(window).on("scroll", updateScrollDirection);

  $(".float-cta__menu").click(function () {
    $(this).parent(".float-cta").toggleClass("active");
  });

  flatpickr("#Expected_Start_Date__c", {
    dateFormat: "Y/m/d",
    allowInput: true,
  });
})

