document.addEventListener("DOMContentLoaded", () => {

  /* -----------------------------
     SWIPER (tuo codice)
  ----------------------------- */
  const swiper = new Swiper('.mainSwiper', {
    direction: 'vertical',
    speed: 600,
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

  const dots = document.querySelectorAll(".side-dots .dot");

  function updateDots(index) {
    dots.forEach((dot, i) => {
      dot.classList.toggle("active", i === index);
    });
  }

  dots.forEach(dot => {
    dot.addEventListener("click", () => {
      const index = parseInt(dot.dataset.index);
      swiper.slideTo(index);
    });
  });

  const url = new URL(window.location.href);
  if (url.searchParams.get("candidatura") === "ok") {
    alert("Grazie! La tua candidatura è stata inviata correttamente.");
  }


  /* -----------------------------
     MOBILE SUBMENU FIX
  ----------------------------- */
  const isMobile = window.matchMedia("(max-width: 768px)").matches;

  if (isMobile) {
    document.querySelectorAll(".nav-item.dropdown-mega").forEach(item => {
      const submenu = item.querySelector(".mega-menu.small-dropdown");

      if (submenu) {
        item.querySelector(".nav-link").addEventListener("click", function(e) {
          e.preventDefault(); // evita navigazione immediata
          item.classList.toggle("open");
        });
      }
    });
  }

});
