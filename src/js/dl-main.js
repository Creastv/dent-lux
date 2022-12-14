(window.load = function (event) {
  const togglerNav = document.querySelector(".js-navbar__toggler");
  const nav = document.querySelector(".js-navigation");
  let navFlag = false;

  togglerNav.addEventListener("click", () => {
    if (navFlag == false) {
      nav.classList.add("active");
      togglerNav.classList.add("active");
      document.querySelector("#header").style.transform = "translateX(-300px)";
      document.querySelector("#main").style.transform = "translateX(-300px)";
      document.querySelector("#footer").style.transform = "translateX(-300px)";
      document.querySelector("html").style.overflowY = "hidden";
      navFlag = true;
    } else {
      nav.classList.remove("active");
      togglerNav.classList.remove("active");
      document.querySelector("#header").style.transform = "initial";
      document.querySelector("#main").style.transform = "initial";
      document.querySelector("#footer").style.transform = "initial";
      document.querySelector("html").style.overflowY = "initial";
      navFlag = false;
    }
    loadItemsNav();
  });
  function loadItemsNav() {
    const li = [...document.querySelectorAll(".js-header-nav-list li")];
    let index = 0;
    setTimeout(function () {
      window.setInterval(function () {
        if (index < li.length) {
          li[index++].classList.toggle("liVisible");
        }
      }, 100);
    }, 0);
  }
  // Go to Top
  const goToTop = document.querySelector("#go-to-top");
  const social = document.querySelector(".js--sticky-social-media");
  goToTop.addEventListener("click", () => {
    document.documentElement.scrollTop = 0;
  });
  document.addEventListener("scroll", () => {
    if (window.pageYOffset >= 200) {
      goToTop.classList.add("active");
    } else {
      goToTop.classList.remove("active");
    }

    if (window.pageYOffset >= 300) {
      social.classList.add("active");
    } else {
      social.classList.remove("active");
    }
  });
  // sticy nabvbar
  const navbar = document.querySelector("#header");
  document.addEventListener("scroll", () => {
    var st = window.pageYOffset || document.documentElement.scrollTop;
    if (window.pageYOffset >= 50) {
      navbar.classList.add("active");
    } else {
      navbar.classList.remove("active");
    }
  });

  // set body padding top by geting header height
  function heightHeader() {
    const heightHeader = document.querySelector("#header");
    document.querySelector("body").style.paddingTop = heightHeader.clientHeight + "px";
  }
  window.addEventListener("resize", heightHeader);
  heightHeader();
})();
