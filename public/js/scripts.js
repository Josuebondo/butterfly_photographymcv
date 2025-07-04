document.addEventListener("DOMContentLoaded", function () {
  // Animation des sections au scroll
  const animateOnScroll = function () {
    const sections = document.querySelectorAll(".mariage, .studio");

    sections.forEach((section) => {
      const sectionPosition = section.getBoundingClientRect().top;
      const windowHeight = window.innerHeight;

      if (sectionPosition < windowHeight - 100) {
        section.classList.add("in-view");
      }
    });
  };

  // Initial setup
  const sections = document.querySelectorAll(".mariage, .studio");
  sections.forEach((section) => {
    section.style.opacity = "0";
    section.style.transform = "translateY(20px)";
    section.style.transition = "opacity 0.6s ease, transform 0.6s ease";
  });

  window.addEventListener("scroll", animateOnScroll);
  animateOnScroll(); // Run once on load

  // Animation des likes
  const likeButtons = document.querySelectorAll(".like-btn");
  likeButtons.forEach((button) => {
    button.addEventListener("click", function () {
      const icon = this.querySelector("i");
      const likeCount = this.nextElementSibling;

      // Animation du cœur
      if (icon.classList.contains("fa-regular")) {
        icon.classList.remove("fa-regular");
        icon.classList.add("fa-solid");
        icon.style.color = "var(--primary-color)";

        // Animation du compteur
        let count = parseInt(likeCount.textContent);
        likeCount.textContent = count + 1;

        // Animation de rebond
        this.style.transform = "scale(1.3)";
        setTimeout(() => {
          this.style.transform = "scale(1)";
        }, 300);
      } else {
        icon.classList.remove("fa-solid");
        icon.classList.add("fa-regular");
        icon.style.color = "white";

        let count = parseInt(likeCount.textContent);
        likeCount.textContent = count - 1;
      }
    });
  });

  // Animation au survol des slides
  const slides = document.querySelectorAll(".slide");
  slides.forEach((slide) => {
    slide.addEventListener("mouseenter", function () {
      this.style.transform = "translateY(-10px)";
      this.style.boxShadow = "0 15px 40px rgba(0, 0, 0, 0.2)";
    });

    slide.addEventListener("mouseleave", function () {
      this.style.transform = "translateY(0)";
      this.style.boxShadow = "0 10px 30px rgba(0, 0, 0, 0.1)";
    });
  });
});
