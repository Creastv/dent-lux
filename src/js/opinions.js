var swiper = new Swiper(".opinion", {
  slidesPerView: 1,
  loop: true,
  pagination: {
    el: ".sw-pagination",
    clickable: true,
    renderBullet: function (index, className) {
      return '<span class="' + className + '">' + (index + 1) + "</span>";
    }
  },
  navigation: {
    nextEl: ".sw-button-next",
    prevEl: ".sw-button-prev"
  },
  breakpoints: {
    998: {
      slidesPerView: 2,
      spaceBetween: 20
    }
  }
});
