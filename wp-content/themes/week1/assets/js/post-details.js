$(document).ready(function () {
  const postSlider = new Swiper(".posts__slider.swiper", {
    slidesPerView: 1,
    grid: {
      rows: 3,
      fill: "row",
    },
    spaceBetween: 30,
    breakpoints: {
      576: {
        slidesPerView: 3,
        grid: false,
        spaceBetween: 22,
      }
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });

  $('.post__details-toc .toc__expand').click(function () {
    $toc = $(this).parents('.post__details-toc');
    $toc.toggleClass('expanded')
  })
});
