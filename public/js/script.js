// Ouvre le modal sur tous les boutons "Réserver"
document.querySelectorAll(".booking").forEach(function (btn) {
  btn.addEventListener("click", function (e) {
    if (
      btn.classList.contains("booking") ||
      btn.textContent.trim().toLowerCase().includes("réserver")
    ) {
      e.preventDefault();
      document.getElementById("reservation-modal").style.display = "flex";
    }
  });
});
// Ferme le modal
document.getElementById("close-reservation").onclick = function () {
  document.getElementById("reservation-modal").style.display = "none";
};
// Ferme si on clique en dehors du contenu
window.onclick = function (event) {
  var modal = document.getElementById("reservation-modal");
  if (event.target === modal) {
    modal.style.display = "none";
  }
};

// Ferme le modal si on appuie sur la touche "Échap"
document.addEventListener("keydown", function (event) {
  if (event.key === "Escape") {
    const modal = document.getElementById("reservation-modal");
    if (modal.style.display === "flex") {
      modal.style.display = "none";
    }
  }
});

// Gère le clic sur les boutons "J'aime"

document.querySelectorAll(".like-btn").forEach(function (btn) {
  btn.addEventListener("click", function () {
    const countSpan = btn.nextElementSibling;
    let count = parseInt(countSpan.textContent, 10);
    if (!btn.classList.contains("liked")) {
      btn.classList.add("liked");
      btn.querySelector("i").classList.remove("fa-regular");
      btn.querySelector("i").classList.add("fa-solid");
      countSpan.textContent = count + 1;
    } else {
      btn.classList.remove("liked");
      btn.querySelector("i").classList.remove("fa-solid");
      btn.querySelector("i").classList.add("fa-regular");
      countSpan.textContent = count - 1;
    }
  });
});

// slide gestion

let slides = document.querySelectorAll('.slide');
let current = 0;

function activateNextSlide() {
  slides[current].classList.remove('active');
  current = (current + 1) % slides.length;
  slides[current].classList.add('active');
}

// Initialisation : active la première slide
slides[current].classList.add('active');

// Change de slide toutes les 3 secondes vers la droite
setInterval(activateNextSlide, 3000);

// Gestion du formulaire de contact
document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector(".contact-form");
  if (form) {
    form.addEventListener("submit", function (e) {
      e.preventDefault(); // Empêche le rechargement

      const formData = new FormData(form);

      fetch("", {
        method: "POST",
        body: formData,
      })
        .then((response) => response.text())
        .then((html) => {
          // Extraire le message de résultat depuis la réponse HTML
          const parser = new DOMParser();
          const doc = parser.parseFromString(html, "text/html");
          const result = doc.querySelector(".result-message");
          if (result) {
            document.querySelector(".result-message").innerHTML = result.innerHTML;
            form.reset(); // Réinitialise le formulaire
            setTimeout(() => {
              document.querySelector(".result-message").innerHTML = "";
            }, 4000); // 4000 ms = 4 secondes
          }
        })
        .catch(() => {
          document.querySelector(".result-message").innerHTML = "<span>Erreur lors de l'envoi.</span>";
        });
    });
  }
});

document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("reservation-form");
  const messageDiv = document.getElementById("reservation-message");

  if (form) {
    form.addEventListener("submit", function (e) {
      e.preventDefault();

      const formData = new FormData(form);

      fetch("reservation.php", {
        method: "POST",
        body: formData
      })
        .then(response => response.text())
        .then(html => {
          // Extraire le message de la réponse HTML
          const parser = new DOMParser();
          const doc = parser.parseFromString(html, "text/html");
          const success = doc.querySelector(".success-message");
          const error = doc.querySelector(".error-message");

          if (success) {
            messageDiv.innerHTML = success.outerHTML;
            form.reset();
            setTimeout(() => {
              messageDiv.innerHTML = "";
            }, 4000); // 4000 ms = 4 secondes
          } else if (error) {
            messageDiv.innerHTML = error.outerHTML;
            setTimeout(() => {
              messageDiv.innerHTML = "";
            }, 4000);
          } else {
            messageDiv.innerHTML = "<div class='error-message'>Erreur inconnue.</div>";
          }
        })
        .catch(() => {
          messageDiv.innerHTML = "<div class='error-message'>Erreur lors de l'envoi.</div>";
        });
    });
  }
});

// Ouvre la modale avec les infos de la réservation
document.querySelectorAll('.reservation-row').forEach(function(row) {
  row.addEventListener('click', function() {
    const details = `
      <strong>Nom complet :</strong> ${this.dataset.fullname}<br>
      <strong>Email :</strong> ${this.dataset.email}<br>
      <strong>Téléphone :</strong> ${this.dataset.phone}<br>
      <strong>Date :</strong> ${this.dataset.date}<br>
      <strong>Type :</strong> ${this.dataset.type}<br>
      <strong>Message :</strong> ${this.dataset.message}<br>
      <strong>Status :</strong> ${this.dataset.status}
    `;
    document.getElementById('modal-details').innerHTML = details;
    document.getElementById('reservation-modal').style.display = 'block';
  });
});

// Ferme la modale
document.getElementById('close-reservation-modal').onclick = function() {
  document.getElementById('reservation-modal').style.display = 'none';
};
// Ferme si on clique en dehors du contenu
window.onclick = function(event) {
  const modal = document.getElementById('reservation-modal');
  if (event.target === modal) {
    modal.style.display = 'none';
  }
};

document.addEventListener("DOMContentLoaded", function () {
  // Animation des sections au scroll
  const sections = document.querySelectorAll(".mariage, .studio");

  // Initial setup
  sections.forEach((section) => {
    section.style.opacity = "0";
    section.style.transform = "translateY(20px)";
    section.style.transition = "opacity 0.6s ease, transform 0.6s ease";
  });

  function animateOnScroll() {
    sections.forEach((section) => {
      const sectionPosition = section.getBoundingClientRect().top;
      const windowHeight = window.innerHeight;
      if (sectionPosition < windowHeight - 100) {
        section.classList.add("in-view");
        section.style.opacity = "1";
        section.style.transform = "translateY(0)";
      }
    });
  }

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
