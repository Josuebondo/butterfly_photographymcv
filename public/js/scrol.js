

document.addEventListener('DOMContentLoaded', function() {
  // Animation du header au scroll
  const header = document.querySelector('.header');
  window.addEventListener('scroll', function() {
    if (window.scrollY > 50) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  });
  
  // Modal de réservation
  const bookingBtn = document.querySelector('.btn.booking[href="/book"]');
  const modal = document.getElementById('reservation-modal');
  const closeModal = document.getElementById('close-reservation');
  
  if (bookingBtn) {
    bookingBtn.addEventListener('click', function(e) {
      e.preventDefault();
      modal.classList.add('active');
    });
  }
  
  closeModal.addEventListener('click', function() {
    modal.classList.remove('active');
  });
  
  // Animation des éléments au scroll
  const animateOnScroll = function() {
    const elements = document.querySelectorAll('.home-section, .about-section, .recent, .services, .contact-section, .temoignages-section');
    
    elements.forEach(element => {
      const elementPosition = element.getBoundingClientRect().top;
      const windowHeight = window.innerHeight;
      
      if (elementPosition < windowHeight - 100) {
        element.style.opacity = '1';
        element.style.transform = 'translateY(0)';
      }
    });
  };
  
  // Initial setup
  const sections = document.querySelectorAll('section');
  sections.forEach(section => {
    section.style.opacity = '0';
    section.style.transform = 'translateY(20px)';
    section.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
  });
  
  window.addEventListener('scroll', animateOnScroll);
  animateOnScroll(); // Run once on load
});