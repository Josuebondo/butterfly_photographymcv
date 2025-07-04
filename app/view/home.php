<?php
// home.php - Vue pour la page d'accueil de Butterfly Photography
require_once __DIR__ . '/../controler/messageControler.php';


?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Butterfly_photography.com</title>
  <link rel="stylesheet" href="/butterfly_photography/public/css/style.css" />
  <link rel="icon" href="/butterfly_photography/public/images/logo.jpeg" type="image/x-icon" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet" />
  <script
    src="https://kit.fontawesome.com/9b77f887fa.js"
    crossorigin="anonymous"></script>
</head>

<body>
  <!-- Header -->
  <header class="header">
    <div class="navbar">
      <div class="logo">
        <a href="/butterfly_photography/public/index.php">
          <img src="/butterfly_photography/public/images/logo.jpeg" alt="Butterfly Photography Logo" />
        </a>
      </div>
      <nav>
        <ul>
          <li><a href="/butterfly_photography/public/index.php">Accueil</a></li>
          <li><a href="#about">À propos</a></li>
          <li><a href="/butterfly_photography/public/gallery.php">Galerie</a></li>
          <li><a href="#contact-form">Contact</a></li>
          <a href="/butterfly_photography/public/reservation.php" class="btn booking">Réservez</a>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Section Accueil -->
  <section class="home-section">
    <div class="left">
      <img class="left-image-1" src="/butterfly_photography/public/images/image3.jpg" alt="" />
      <img class="left-image-2" src="/butterfly_photography/public/images/heroimg.jpg" alt="" />
    </div>
    <div class="right">
      <span class="text-right">Planifiez votre aventure</span>
      <h1>
        Immortalisez vos moments avec<br />
        BUTTERFLY PHOTOGRAPHY
      </h1>
      <p>
        Lorem ipsum dolor sit amet,
        consectetur adipisicing elit.
        Similique mollitia aperiam aliquam
        impedit! Architecto aliquid quas odit,

        Lorem ipsum dolor sit amet,
        consectetur adipisicing elit.
        Similique mollitia aperiam aliquam
        impedit! Architecto aliquid quas odit,

      </p>
      <div class="butons">
        <a href="/book" class="btn booking"> Réserver maintenant</a>
      </div>
    </div>
  </section>
  <section class="about-section" id="about">
    <div class="left">
      <div class="decor"></div>
      <img class="left-image-1" src="/butterfly_photography/public/images/photographe.jpeg" alt="" />
      <!-- <img class="left-image-2" src="/butterfly_photography/public/images/photographe.jpeg" alt="" /> -->
    </div>
    <div class="right">
      <span class="text-right">Qui sommes-nous ?</span>
      <h1>À propos de nous</h1>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique mollitia aperiam aliquam impedit! Architecto aliquid quas odit, laudantium eligendi exercitationem ratione quaerat pariatur omnis vel praesentium suscipit, aliquam, excepturi quam? Aliquid, reprehenderit, dolores cupiditate ut cumque ex illo ipsam nihil ea modi, consequatur laboriosam quia assumenda eaque quidem! Ducimus accusamus magni consequuntur. Similique minus debitis rerum ab nisi sequi exercitationem!
      </p>

      <div class="butons">
        <a href="#contact-form" class="btn">
          Contactez-nous
        </a>
      </div>
      <div class="FAQ">
        <div class="FAQ1">
          <h2>pourquoi choisir butterfly photography?</h2>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet asperiores nesciunt tenetur cupiditate molestiae magni quasi iusto, illo ipsam nihil sint repellendus ea optio odio omnis accusamus ratione voluptates nostrum?</p>
        </div>
        <div class="FAQ2">
          <h2>commment faire une resertation?</h2>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet asperiores nesciunt tenetur cupiditate molestiae magni quasi iusto, illo ipsam nihil sint repellendus ea optio odio omnis accusamus ratione voluptates nostrum?</p>
        </div>
        <div class="FAQ3">
          <h2>commment confirmer une resertation?</h2>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet asperiores nesciunt tenetur cupiditate molestiae magni quasi iusto, illo ipsam nihil sint repellendus ea optio odio omnis accusamus ratione voluptates nostrum?</p>
        </div>
      </div>
    </div>
  </section>

  <!-- slider de photos -->
  <section class="recent">
    <h1 class="title">Explorez nos séances photo récentes</h1>
    <div class="desc-button">
      <p class="small-desc">
        Découvrez nos séances fascinantes à travers le monde.<br />
        Chaque capture offre une expérience unique et mémorable.
      </p>
    </div>
    <div class="slider">
      <div class="slide  " id="slide1">
        <img src="/butterfly_photography/public/images/heroimg.jpg" alt="Photo 2">
        <div class="slide-desc" id="slide-desc-2">
          <h1>Francia</h1>
          <p>Photo d'une séance de mariage en studio.</p>
          <div class="like-section">
            <button class="like-btn">
              <i class="fa-regular fa-heart"></i>
            </button>
            <span class="like-count">66</span>
          </div>
        </div>

      </div>
      <div class="slide  " id="slide2">
        <img src="/butterfly_photography/public/images/IMG-20250422-WA0064.jpg" alt="Photo 1">
        <div class="slide-desc" id="slide-desc-2">
          <h1>Francoise </h1>
          <p>Photo d'une séance de mariage en studio.</p>
          <div class="like-section">
            <button class="like-btn">
              <i class="fa-regular fa-heart"></i>
            </button>
            <span class="like-count">100</span>
          </div>
        </div>
      </div>
      <div class="slide  active" id="slide3">
        <img src="/butterfly_photography/public/images/hero.jpg" alt="Photo3">
        <div class="slide-desc " id="slide-desc-2">
          <h1>SEFORA</h1>
          <p>Photo d'une séance de mariage en studio.</p>
          <div class="like-section">
            <button class="like-btn">
              <i class="fa-regular fa-heart"></i>
            </button>
            <span class="like-count">12</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Section Récentes séances -->
    <div class="gallerie">
      <div class="image ">
        <img src="/butterfly_photography/public/images/IMG-20250422-WA0081.jpg" alt="" />
        <div class="description">
          <h1>Francia</h1>
          <p>Photo d'une séance de mariage en studio.</p>
          <div class="like-section">
            <button class="like-btn">
              <i class="fa-regular fa-heart"></i>
            </button>
            <span class="like-count">12</span>
          </div>
        </div>
      </div>
      <div class="image">
        <img src="/butterfly_photography/public/images/IMG-20250422-WA0081.jpg" alt="" />
        <div class="description">
          <h1>Francoise et Jack</h1>
          <p>Photo d'une séance de mariage en studio.</p>
          <div class="like-section">
            <button class="like-btn">
              <i class="fa-regular fa-heart"></i>
            </button>
            <span class="like-count">12</span>
          </div>
        </div>
      </div>
      <div class="image">
        <img src="/butterfly_photography/public/images/IMG-20250422-WA0011.jpg" alt="" />
        <div class="description">
          <h1>Albert</h1>
          <p>Photo d'une séance de mariage en studio.</p>
          <div class="like-section">
            <button class="like-btn">
              <i class="fa-regular fa-heart"></i>
            </button>
            <span class="like-count">12</span>
          </div>
        </div>
      </div>
      <div class="image">
        <img src="/butterfly_photography/public/images/IMG-20250422-WA0019.jpg" alt="" />
        <div class="description">
          <h1>Franck</h1>
          <p>Photo d'une séance de mariage en studio.</p>
          <div class="like-section">
            <button class="like-btn">
              <i class="fa-regular fa-heart"></i>
            </button>
            <span class="like-count">12</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section service -->
  <section class=" services" id="services">
    <h1 class="title">Explorez nos services</h1>
    <div class="desc-button">
      <p class="small-desc">
        Découvrez nos séances fascinantes à travers le monde.<br />
        Chaque capture offre une expérience unique et mémorable.
      </p>
    </div>
    <div class="service-cards">
      <div class="card">
        <img src="/butterfly_photography/public/images/bgimage.jpg" alt="Service 1" />
        <h2>Photographie de Mariage</h2>
        <p>Immortalisez votre grand jour avec des photos inoubliables.</p>

        <a href="/butterfly_photography/public/reservation.php" class="btn">Réserver</a>
      </div>
      <div class="card">
        <img src="/butterfly_photography/public/images/event1.jpg" alt="Service 2" />
        <h2>Photographie mariage coutumie</h2>
        <p>Des portraits professionnels pour capturer votre essence.</p>
        <a href="/butterfly_photography/public/reservation.php" class="btn">Réserver</a>
      </div>
      <div class="card">
        <img src="/butterfly_photography/public/images/IMG-20250422-WA0023.jpg" alt="Service 2" />
        <h2>Photographie mariage coutumie</h2>
        <p>Des portraits professionnels pour capturer votre essence.</p>
        <a href="/butterfly_photography/public/reservation.php" class="btn">Réserver</a>
      </div>
  </section>

  <!-- Section Contact -->
  <section class="contact-section" id="contact-form">
    <h1 class="title">Contactez-nous</h1>
    <p class="small-desc">
      Une question, un projet ou une demande de devis ? Remplissez le formulaire ci-dessous, nous vous répondrons rapidement.
    </p>
    <form class="contact-form" method="post" action="../controler/messageControler.php
      ç">
      <div class="form-group">
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" required />
      </div>
      <div class="form-group">
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required />
      </div>
      <div class="form-group">
        <label for="subject">Sujet :</label>
        <input type="text" id="subject" name="subject" required />
      </div>
      <div class="form-group">
        <label for="message">Message :</label>
        <textarea id="message" name="message" rows="4" required></textarea>
      </div>
      <button type="submit" class="btn">Envoyer</button>
    </form>
    <p class="result-message">
      <?php
      if (isset($resultat)) {
        if ($resultat['success']) {
          echo "<span style='color:green'>{$resultat['message']}</span>";
        } else {
          echo "<span style='color:red'>{$resultat['error']}</span>";
        }
      }
      ?>
    </p>
  </section>

  <!-- Modal Réservation caché -->
  <div id="reservation-modal" style="display:none;">
    <div class="reservation-modal-content">
      <span class="close-modal" id="close-reservation">&times;</span>
      <h2>Connectez-vous à votre compte pour réserver une séance</h2><br>
      <a href="login.php" class="btn">Se connecter</a>
    </div>
  </div>
  <section class="temoignages-section" id="temoignages">
    <div class="temoignage">
      <h1 class="title">Témoignages</h1>
      <p class="small-desc">
        Découvrez ce que nos clients disent de nous. Leur satisfaction est notre priorité.
      </p>
      <div class="temoignage-card">
        <div class="card">
          <img src="/butterfly_photography/public/images/IMG-20250422-WA0011.jpg" alt="Témoignage 1" />
          <div class="temoignage-text">
            <h2>Albert</h2>
            <p>Une expérience incroyable ! Les photos sont magnifiques et le service impeccable.</p>
            <SPan><i class="fa-solid fa-star"></i></SPan>
            <SPan><i class="fa-solid fa-star"></i></SPan>
            <SPan><i class="fa-solid fa-star"></i></SPan>
          </div>
        </div>
        <div class="card">
          <img src="/butterfly_photography/public/images/IMG-20250422-WA0019.jpg" alt="Témoignage 2" />
          <div class="temoignage-text">
            <h2>Franck</h2>
            <p>Des photos de qualité exceptionnelle. Je recommande vivement Butterfly Photography !</p>
            <SPan><i class="fa-solid fa-star"></i></SPan>
            <SPan><i class="fa-solid fa-star"></i></SPan>
            <SPan><i class="fa-solid fa-star"></i></SPan>
          </div>
        </div>
        <div class="card">
          <img src="/butterfly_photography/public/images/IMG-20250422-WA0081.jpg" alt="Témoignage 3" />
          <div class="temoignage-text">
            <h2>Francia</h2>
            <p>Un service professionnel et des photos qui capturent parfaitement l'instant.</p>
            <SPan><i class="fa-solid fa-star"></i></SPan>
            <SPan><i class="fa-solid fa-star"></i></SPan>
            <SPan><i class="fa-solid fa-star"></i></SPan>
          </div>
        </div>


  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="footer-content">
      <div class="footer-logo">
        <img src="/butterfly_photography/public/images/logo.jpeg" alt="Butterfly Photography Logo" />
        <span>BUTTERFLY PHOTOGRAPHY</span>
      </div>
      <div class="footer-links">
        <a href="<?= URLROOT ?>/index.php">Accueil</a>
        <a href="#about">À propos</a>
        <a href="<?= URLROOT ?>/gallery">Galerie</a>
        <a href="#contact-form">Contact</a>
        <a href="<?= URLROOT ?>/users">se connecter</a>
      </div>
      <div class="footer-social">
        <a href="#"><i class="fa-brands fa-facebook"></i></a>
        <a href="#"><i class="fa-brands fa-instagram"></i></a>
        <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
      </div>
    </div>
    <div class="footer-bottom">
      &copy; 2025 Butterfly Photography. Tous droits réservés.
    </div>
  </footer>

  <script src="/butterfly_photography/public/js/scroll.js"></script>
</body>

</html>