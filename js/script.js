document.addEventListener("DOMContentLoaded", () => {

  /* -----------------------------
     SWIPER
  ----------------------------- */
  const swiper = new Swiper('.mainSwiper', {
    direction: 'vertical',
    speed: 1000,
    mousewheel: {
      releaseOnEdges: true,
      forceToAxis: true,
    },
    threshold: 10,
    resistanceRatio: 0.2,
    allowTouchMove: true,
    on: {
      slideChangeTransitionEnd: function () {
        updateDots(this.activeIndex);
      }
    }
  });


  /* -----------------------------
     CREATE DOTS DYNAMICALLY
  ----------------------------- */
  const slides = document.querySelectorAll(".swiper-slide");
  const dotsContainer = document.querySelector(".side-dots");

  dotsContainer.innerHTML = ""; // pulizia

  slides.forEach((slide, index) => {
    const dot = document.createElement("div");
    dot.classList.add("dot");
    dot.dataset.index = index;
    dotsContainer.appendChild(dot);
  });

  const dots = document.querySelectorAll(".side-dots .dot");


  /* -----------------------------
     UPDATE DOTS
  ----------------------------- */
  function updateDots(activeIndex) {
    dots.forEach(dot => dot.classList.remove('active'));
    if (dots[activeIndex]) {
      dots[activeIndex].classList.add('active');
    }
  }


  /* -----------------------------
     FIX: SWIPER + ANCHOR NAVIGATION
  ----------------------------- */
  const url = new URL(window.location.href);
  const anchor = url.hash;

  if (anchor) {
    const target = document.querySelector(anchor);

    if (target) {
      const slide = target.closest(".swiper-slide");
      const index = Array.from(slides).indexOf(slide);

      if (index >= 0) {
        swiper.slideTo(index, 0);
        updateDots(index);
        document.body.style.overflow = "hidden";
      }
    }
  }


  /* -----------------------------
     INITIAL DOT UPDATE
  ----------------------------- */
  updateDots(swiper.activeIndex);


  /* -----------------------------
     DOT CLICK
  ----------------------------- */
  dots.forEach(dot => {
    dot.addEventListener('click', () => {
      const index = parseInt(dot.dataset.index);
      swiper.slideTo(index);
    });
  });


  /* -----------------------------
     BACK TO TOP
  ----------------------------- */
  document.getElementById('backToTop').addEventListener('click', () => {
    swiper.slideTo(0);
  });


  /* -----------------------------
     CANDIDATURA CHECK
  ----------------------------- */
  if (url.searchParams.get("candidatura") === "ok") {
    alert("Grazie! La tua candidatura è stata inviata correttamente.");
    window.location.href = "/lavora-con-noi";
  }


  /* -----------------------------
     MOBILE SUBMENU FIX
  ----------------------------- */
  function setupMobileDropdowns() {
    const navItems = document.querySelectorAll(".nav-item.dropdown-mega");

    navItems.forEach(item => {
      const submenu = item.querySelector(".mega-menu.small-dropdown");
      const link = item.querySelector(".nav-link");

      if (!submenu) return;

      link.addEventListener("click", function(e) {
        const isMobile = window.matchMedia("(max-width: 768px)").matches;
        if (!isMobile) return;

        if (!item.classList.contains("open")) {
          e.preventDefault();
          navItems.forEach(i => {
            if (i !== item) i.classList.remove("open");
          });
          item.classList.add("open");
        } else {
          window.location = link.href;
        }
      });
    });

    document.addEventListener("click", function(e) {
      const isMobile = window.matchMedia("(max-width: 768px)").matches;
      if (!isMobile) return;

      if (!e.target.closest(".nav-item.dropdown-mega")) {
        navItems.forEach(item => item.classList.remove("open"));
      }
    });
  }

  setupMobileDropdowns();

});
