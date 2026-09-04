document.addEventListener("DOMContentLoaded", () => {

  /* -----------------------------
     SWIPER (tuo codice)
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
      slideChange: function () {
        updateDots(this.activeIndex);
      }
    }
  });

  updateDots(swiper.activeIndex);

  const dots = document.querySelectorAll(".side-dots .dot");

  function updateDots(activeIndex) {
    const dots = document.querySelectorAll('.side-dots .dot');
    dots.forEach(dot => dot.classList.remove('active'));
    if (dots[activeIndex]) {
      dots[activeIndex].classList.add('active');
    }
  }

  dots.forEach(dot => {
    dot.addEventListener('click', () => {
      const index = parseInt(dot.dataset.index);
      swiper.slideTo(index);
    });
  });

  document.getElementById('backToTop').addEventListener('click', () => {
    swiper.slideTo(0); // go to the top slide
  });

  const url = new URL(window.location.href);
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

      if (!submenu) return; // skip items without dropdown

      link.addEventListener("click", function(e) {
        const isMobile = window.matchMedia("(max-width: 768px)").matches;
        if (!isMobile) return; // desktop → normal navigation

        // MOBILE ONLY
        if (!item.classList.contains("open")) {
          e.preventDefault();

          // Close others
          navItems.forEach(i => {
            if (i !== item) i.classList.remove("open");
          });

          item.classList.add("open");
        } else {
          // Second tap → navigate
          window.location = link.href;
        }
      });
    });

    // Close menu when clicking outside
    document.addEventListener("click", function(e) {
      const isMobile = window.matchMedia("(max-width: 768px)").matches;
      if (!isMobile) return;

      // If click is outside the nav
      if (!e.target.closest(".nav-item.dropdown-mega")) {
        navItems.forEach(item => item.classList.remove("open"));
      }
    });
  }

  setupMobileDropdowns();


});
