document.addEventListener("DOMContentLoaded", () => {

  const container = document.querySelector(".scroll-container");
  const sections = document.querySelectorAll(".page-section");
  const dots = document.querySelectorAll(".side-dots .dot");
  let isScrolling = false;

  // Attiva la prima sezione
  sections[0].classList.add("active");
  dots[0].classList.add("active");

  function activateSection(index) {
    sections.forEach((sec, i) => {
      sec.classList.toggle("active", i === index);
    });
    dots.forEach((dot, i) => {
      dot.classList.toggle("active", i === index);
    });
  }

  // Scroll cinematico
  const SCROLL_DELAY = 900;

  container.addEventListener("wheel", (e) => {
    if (isScrolling) return;

    isScrolling = true;

    const direction = e.deltaY > 0 ? 1 : -1;
    const pageHeight = container.clientHeight;
    const target = container.scrollTop + direction * pageHeight;

    container.scrollTo({
      top: target,
      behavior: "smooth"
    });

    setTimeout(() => {
      const index = Math.round(container.scrollTop / pageHeight);
      activateSection(index);
      isScrolling = false;
    }, SCROLL_DELAY);
  });

  // Click sui dots
  dots.forEach(dot => {
    dot.addEventListener("click", () => {
      const index = parseInt(dot.dataset.index);
      const pageHeight = container.clientHeight;

      container.scrollTo({
        top: index * pageHeight,
        behavior: "smooth"
      });

      activateSection(index);
    });
  });

  // ---------------------------------------------
  //  ALERT DI CONFERMA CANDIDATURA
  // ---------------------------------------------
  const url = new URL(window.location.href);

  if (url.searchParams.get("candidatura") === "ok") {
    alert("Grazie! La tua candidatura è stata inviata correttamente.");
  }

});
