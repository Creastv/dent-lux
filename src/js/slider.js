var swiper = new Swiper(".slider-cr", {
  slidesPerView: 1,
  loop: true,
  speed: 500,
  effect: "fade",
  autoplay: {
    delay: 3900,
    disableOnInteraction: false
  },
  pagination: {
    el: ".sw-pagination",
    clickable: true
  }
});
