<?php
// home.php - Vue pour la page d'accueil de Butterfly Photography

require_once __DIR__ . '/../../../config/config.php';
require_once __DIR__ . '/../../models/galleryModel.php';

$galleryModel = new galleryModel();

$photos = $galleryModel->getAllphotos();
// foreach inutile ici si rien n'est fait
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Butterfly_photography.com</title>
    <link rel="stylesheet" href="../../../public/css/stile.css" />
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
    <div class="navbar">
        <div class="logo">
            <a href="index.php">
                <img src="/butterfly_photography/public/images/logo.jpeg" alt="Butterfly Photography Logo" />
            </a>
        </div>
        <nav>
            <ul>
                <li><a href="/butterfly_photography/public/index.php?route=home">Accueil</a></li>
                <li><a href="/butterfly_photography/public/index.php?route=about">À propos</a></li>
                <li><a href="/butterfly_photography/public/index.php?route=gallery">Galerie</a></li>
                <li><a href="/butterfly_photography/public/index.php?route=contact">Contact</a></li>
                <a href="/butterfly_photography/public/index.php?route=reservation" class="btn booking">Réservez</a>
            </ul>
        </nav>
    </div>

    <!-- Section Galerie -->
    <section class="gallery-section" id="gallery">
        <h1 class="title">Galerie</h1>
        <p class="small-desc">
            Découvrez notre collection de photos capturant la beauté et l'émotion.
        </p>
        <div class="research">
            <form class="search-form" action="/search" method="get">
                <input type="text" name="query" placeholder="Rechercher des photos..." required />
                <button type="submit" class="btn"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
        <div class="gallery-container">

            <!-- GALLERY MARIAGE -->
            <div class="mariage">
                <h2 class="title">Mariage</h2>
                <p>Des moments inoubliables capturés avec passion.</p>
                <div class="mariage-slides">
                    <div class="slide" id="slide1">
                        <?php
                        ?>
                        <img src="../../../public/images/bgimage.jpg" alt="">
                        <div class="slide-desc" id="slide-desc-2">
                            <h1>Francia</h1>
                            <p>Photo d'une séance de mariage en studio.</p>
                            <div class="like-section">
                                <button class="like-btn">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                                <span class="like-count">66</span>
                            </div>
                            <a href="/butterfly_photography/public/reservation.php" class="btn">reserver</a>
                        </div>
                    </div>
                    <div class="slide" id="slide1">
                        <?php
                        ?>
                        <img src="../../../public/images/bgimage.jpg" alt="">
                        <div class="slide-desc" id="slide-desc-2">
                            <h1>Francia</h1>
                            <p>Photo d'une séance de mariage en studio.</p>
                            <div class="like-section">
                                <button class="like-btn">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                                <span class="like-count">66</span>
                            </div>
                            <a href="/butterfly_photography/public/reservation.php" class="btn">reserver</a>
                        </div>
                    </div>
                    <div class="slide" id="slide1">
                        <?php
                        ?>
                        <img src="../../../public/images/bgimage.jpg" alt="">
                        <div class="slide-desc" id="slide-desc-2">
                            <h1>Francia</h1>
                            <p>Photo d'une séance de mariage en studio.</p>
                            <div class="like-section">
                                <button class="like-btn">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                                <span class="like-count">66</span>
                            </div>
                            <a href="/butterfly_photography/public/reservation.php" class="btn">reserver</a>
                        </div>
                    </div>
                    <div class="slide" id="slide1">
                        <?php
                        ?>
                        <img src="../../../public/images/bgimage.jpg" alt="">
                        <div class="slide-desc" id="slide-desc-2">
                            <h1>Francia</h1>
                            <p>Photo d'une séance de mariage en studio.</p>
                            <div class="like-section">
                                <button class="like-btn">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                                <span class="like-count">66</span>
                            </div>
                            <a href="/butterfly_photography/public/reservation.php" class="btn">reserver</a>
                        </div>
                    </div>
                    <div class="slide" id="slide1">
                        <?php
                        ?>
                        <img src="../../../public/images/bgimage.jpg" alt="">
                        <div class="slide-desc" id="slide-desc-2">
                            <h1>Francia</h1>
                            <p>Photo d'une séance de mariage en studio.</p>
                            <div class="like-section">
                                <button class="like-btn">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                                <span class="like-count">66</span>
                            </div>
                            <a href="/butterfly_photography/public/reservation.php" class="btn">reserver</a>
                        </div>
                    </div>
                    <div class="slide" id="slide1">
                        <?php
                        ?>
                        <img src="../../../public/images/bgimage.jpg" alt="">
                        <div class="slide-desc" id="slide-desc-2">
                            <h1>Francia</h1>
                            <p>Photo d'une séance de mariage en studio.</p>
                            <div class="like-section">
                                <button class="like-btn">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                                <span class="like-count">66</span>
                            </div>
                            <a href="/butterfly_photography/public/reservation.php" class="btn">reserver</a>
                        </div>
                    </div>
                    <div class="slide" id="slide1">
                        <?php
                        ?>
                        <img src="../../../public/images/bgimage.jpg" alt="">
                        <div class="slide-desc" id="slide-desc-2">
                            <h1>Francia</h1>
                            <p>Photo d'une séance de mariage en studio.</p>
                            <div class="like-section">
                                <button class="like-btn">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                                <span class="like-count">66</span>
                            </div>
                            <a href="/butterfly_photography/public/reservation.php" class="btn">reserver</a>
                        </div>
                    </div>
                    <div class="slide" id="slide1">
                        <?php
                        ?>
                        <img src="../../../public/images/bgimage.jpg" alt="">
                        <div class="slide-desc" id="slide-desc-2">
                            <h1>Francia</h1>
                            <p>Photo d'une séance de mariage en studio.</p>
                            <div class="like-section">
                                <button class="like-btn">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                                <span class="like-count">66</span>
                            </div>
                            <a href="/butterfly_photography/public/reservation.php" class="btn">reserver</a>
                        </div>
                    </div>
                    <div class="slide" id="slide1">
                        <?php
                        ?>
                        <img src="../../../public/images/bgimage.jpg" alt="">
                        <div class="slide-desc" id="slide-desc-2">
                            <h1>Francia</h1>
                            <p>Photo d'une séance de mariage en studio.</p>
                            <div class="like-section">
                                <button class="like-btn">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                                <span class="like-count">66</span>
                            </div>
                            <a href="/butterfly_photography/public/reservation.php" class="btn">reserver</a>
                        </div>
                    </div>
                    <div class="slide" id="slide1">
                        <?php
                        ?>
                        <img src="../../../public/images/bgimage.jpg" alt="">
                        <div class="slide-desc" id="slide-desc-2">
                            <h1>Francia</h1>
                            <p>Photo d'une séance de mariage en studio.</p>
                            <div class="like-section">
                                <button class="like-btn">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                                <span class="like-count">66</span>
                            </div>
                            <a href="/butterfly_photography/public/reservation.php" class="btn">reserver</a>
                        </div>
                    </div>
                    <div class="slide" id="slide1">
                        <?php
                        ?>
                        <img src="../../../public/images/bgimage.jpg" alt="">
                        <div class="slide-desc" id="slide-desc-2">
                            <h1>Francia</h1>
                            <p>Photo d'une séance de mariage en studio.</p>
                            <div class="like-section">
                                <button class="like-btn">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                                <span class="like-count">66</span>
                            </div>
                            <a href="/butterfly_photography/public/reservation.php" class="btn">reserver</a>
                        </div>
                    </div>
                    <div class="slide" id="slide1">
                        <?php
                        ?>
                        <img src="../../../public/images/bgimage.jpg" alt="">
                        <div class="slide-desc" id="slide-desc-2">
                            <h1>Francia</h1>
                            <p>Photo d'une séance de mariage en studio.</p>
                            <div class="like-section">
                                <button class="like-btn">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                                <span class="like-count">66</span>
                            </div>
                            <a href="/butterfly_photography/public/reservation.php" class="btn">reserver</a>
                        </div>
                    </div>
                    <div class="slide" id="slide1">
                        <?php
                        ?>
                        <img src="../../../public/images/bgimage.jpg" alt="">
                        <div class="slide-desc" id="slide-desc-2">
                            <h1>Francia</h1>
                            <p>Photo d'une séance de mariage en studio.</p>
                            <div class="like-section">
                                <button class="like-btn">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                                <span class="like-count">66</span>
                            </div>
                            <a href="/butterfly_photography/public/reservation.php" class="btn">reserver</a>
                        </div>
                    </div>
                    <div class="slide" id="slide1">
                        <?php
                        ?>
                        <img src="../../../public/images/bgimage.jpg" alt="">
                        <div class="slide-desc" id="slide-desc-2">
                            <h1>Francia</h1>
                            <p>Photo d'une séance de mariage en studio.</p>
                            <div class="like-section">
                                <button class="like-btn">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                                <span class="like-count">66</span>
                            </div>
                            <a href="/butterfly_photography/public/reservation.php" class="btn">reserver</a>
                        </div>
                    </div>
                    <div class="slide" id="slide1">
                        <?php
                        ?>
                        <img src="../../../public/images/bgimage.jpg" alt="">
                        <div class="slide-desc" id="slide-desc-2">
                            <h1>Francia</h1>
                            <p>Photo d'une séance de mariage en studio.</p>
                            <div class="like-section">
                                <button class="like-btn">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                                <span class="like-count">66</span>
                            </div>
                            <a href="/butterfly_photography/public/reservation.php" class="btn">reserver</a>
                        </div>
                    </div>
                    <div class="slide" id="slide1">
                        <?php
                        ?>
                        <img src="../../../public/images/bgimage.jpg" alt="">
                        <div class="slide-desc" id="slide-desc-2">
                            <h1>Francia</h1>
                            <p>Photo d'une séance de mariage en studio.</p>
                            <div class="like-section">
                                <button class="like-btn">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                                <span class="like-count">66</span>
                            </div>
                            <a href="/butterfly_photography/public/reservation.php" class="btn">reserver</a>
                        </div>
                    </div>
                    <div class="slide" id="slide1">
                        <?php
                        ?>
                        <img src="../../../public/images/bgimage.jpg" alt="">
                        <div class="slide-desc" id="slide-desc-2">
                            <h1>Francia</h1>
                            <p>Photo d'une séance de mariage en studio.</p>
                            <div class="like-section">
                                <button class="like-btn">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                                <span class="like-count">66</span>
                            </div>
                            <a href="/butterfly_photography/public/reservation.php" class="btn">reserver</a>
                        </div>
                    </div>
                    <div class="slide" id="slide1">
                        <?php
                        ?>
                        <img src="../../../public/images/bgimage.jpg" alt="">
                        <div class="slide-desc" id="slide-desc-2">
                            <h1>Francia</h1>
                            <p>Photo d'une séance de mariage en studio.</p>
                            <div class="like-section">
                                <button class="like-btn">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                                <span class="like-count">66</span>
                            </div>
                            <a href="/butterfly_photography/public/reservation.php" class="btn">reserver</a>
                        </div>
                    </div>
                    <div class="slide" id="slide2">
                        <img src="/butterfly_photography/public/images/heroimg.jpg" alt="Photo 3">
                        <div class="slide-desc" id="slide-desc-3">
                            <h1>Francia</h1>
                            <p>Photo d'une séance de mariage en studio.</p>
                            <div class="like-section">
                                <button class="like-btn">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                                <span class="like-count">66</span>
                            </div>
                            <a href="/butterfly_photography/public/reservation.php" class="btn">reserver</a>
                        </div>
                    </div>
                    <div class="slide" id="slide3">
                        <img src="/butterfly_photography/public/images/studionpo.jpg" alt="Photo 4">
                        <div class="slide-desc" id="slide-desc-4">
                            <h1>Francia</h1>
                            <p>Photo d'une séance de mariage en studio.</p>
                            <div class="like-section">
                                <button class="like-btn">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                                <span class="like-count">66</span>
                            </div>
                            <a href="/butterfly_photography/public/reservation.php" class="btn">reserver</a>
                        </div>
                    </div>
                    <div class="slide" id="slide3">
                        <img src="/butterfly_photography/public/images/heroimg.jpg" alt="Photo 4">
                        <div class="slide-desc" id="slide-desc-4">
                            <h1>Francia</h1>
                            <p>Photo d'une séance de mariage en studio.</p>
                            <div class="like-section">
                                <button class="like-btn">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                                <span class="like-count">66</span>
                            </div>
                            <a href="/butterfly_photography/public/reservation.php" class="btn">reserver</a>
                        </div>
                    </div>
                    <div class="slide" id="slide3">
                        <img src="/butterfly_photography/public/images/hero.jpg" alt="Photo 4">
                        <div class="slide-desc" id="slide-desc-4">
                            <h1>Francia</h1>
                            <p>Photo d'une séance de mariage en studio.</p>
                            <div class="like-section">
                                <button class="like-btn">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                                <span class="like-count">66</span>
                            </div>
                            <a href="/butterfly_photography/public/reservation.php" class="btn">reserver</a>
                        </div>
                    </div>
                    <div class="slide" id="slide4">
                        <img src="/butterfly_photography/public/images/forme_img.jpg" alt="Photo 5">
                        <div class="slide-desc" id="slide-desc-5">
                            <h1>Francia</h1>
                            <p>Photo d'une séance de mariage en studio.</p>
                            <div class="like-section">
                                <button class="like-btn">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                                <span class="like-count">66</span>
                            </div>
                            <a href="/butterfly_photography/public/reservation.php" class="btn">reserver</a>
                        </div>
                    </div>
                    <div class="slide" id="slide4">

                        <img src="/butterfly_photography/public/images/event3.jpg" alt="Photo 5">
                        <div class="slide-desc" id="slide-desc-5">
                            <h1>Francia</h1>
                            <p>Photo d'une séance de mariage en studio.</p>
                            <div class="like-section">
                                <button class="like-btn">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                                <span class="like-count">66</span>
                            </div>
                            <a href="/butterfly_photography/public/reservation.php" class="btn">reserver</a>
                        </div>
                    </div>
                    <div class="slide" id="slide4">
                        <img src="/butterfly_photography/public/images/event2.jpg" alt="Photo 5">
                        <div class="slide-desc" id="slide-desc-5">
                            <h1>Francia</h1>
                            <p>Photo d'une séance de mariage en studio.</p>
                            <div class="like-section">
                                <button class="like-btn">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                                <span class="like-count">66</span>
                            </div>
                            <a href="/butterfly_photography/public/reservation.php" class="btn">reserver</a>
                        </div>
                    </div>
                    <div class="slide" id="slide4">
                        <img src="/butterfly_photography/public/images/event1.jpg" alt="Photo 5">
                        <div class="slide-desc" id="slide-desc-5">
                            <h1>Francia</h1>
                            <p>Photo d'une séance de mariage en studio.</p>
                            <div class="like-section">
                                <button class="like-btn">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                                <span class="like-count">66</span>
                            </div>
                            <a href="/butterfly_photography/public/reservation.php" class="btn">reserver</a>
                        </div>
                    </div>
                    <div class="slide" id="slide3">
                        <img src="/butterfly_photography/public/images/studionpo.jpg" alt="Photo 4">
                        <div class="slide-desc" id="slide-desc-4">
                            <h1>Francia</h1>
                            <p>Photo d'une séance de mariage en studio.</p>
                            <div class="like-section">
                                <button class="like-btn">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                                <span class="like-count">66</span>
                            </div>
                            <a href="/butterfly_photography/public/reservation.php" class="btn">reserver</a>
                        </div>
                    </div>

                </div>
            </div>

            <!-- GALLERY STUDIO -->

            <div class="studio">
                <h2 class="title">Studio</h2>
                <p>Des portraits et des séances en studio pour capturer votre essence.</p>

                <div class="studio-slides">
                    <div class="slide" id="slide1">
                        <img src="/butterfly_photography/public/images/MARIAGE1.jpg" alt="Photo 1">
                        <div class="slide-desc" id="slide-desc-1">
                            <h1>Francia</h1>
                            <p>Photo d'une séance de mariage en studio.</p>
                            <div class="like-section">
                                <button class="like-btn">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                                <span class="like-count">66</span>
                            </div>
                            <a href="/butterfly_photography/public/reservation.php" class="btn">reserver</a>
                        </div>
                    </div>
                    <div class="slide" id="slide1">
                        <img src="/butterfly_photography/public/images/MARIAGE2.jpg" alt="Photo 1">
                        <div class="slide-desc" id="slide-desc-1">
                            <h1>Francia</h1>
                            <p>Photo d'une séance de mariage en studio.</p>
                            <div class="like-section">
                                <button class="like-btn">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                                <span class="like-count">66</span>
                            </div>
                            <a href="/butterfly_photography/public/reservation.php" class="btn">reserver</a>
                        </div>
                    </div>
                    <div class="slide" id="slide1">
                        <img src="/butterfly_photography/public/images/MARIAGE1.jpg" alt="Photo 1">
                        <div class="slide-desc" id="slide-desc-1">
                            <h1>Francia</h1>
                            <p>Photo d'une séance de mariage en studio.</p>
                            <div class="like-section">
                                <button class="like-btn">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                                <span class="like-count">66</span>
                            </div>
                            <a href="/butterfly_photography/public/reservation.php" class="btn">reserver</a>
                        </div>
                    </div>

                    <div class="slide" id="slide1">
                        <img src="/butterfly_photography/public/images/MARIAGE1.jpg" alt="Photo 1">
                        <div class="slide-desc" id="slide-desc-1">
                            <h1>Francia</h1>
                            <p>Photo d'une séance de mariage en studio.</p>
                            <div class="like-section">
                                <button class="like-btn">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                                <span class="like-count">66</span>
                            </div>
                            <a href="/butterfly_photography/public/reservation.php" class="btn">reserver</a>
                        </div>
                    </div>
                    <div class="slide" id="slide1">
                        <img src="/butterfly_photography/public/images/MARIAGE2.jpg" alt="Photo 1">
                        <div class="slide-desc" id="slide-desc-1">
                            <h1>Francia</h1>
                            <p>Photo d'une séance de mariage en studio.</p>
                            <div class="like-section">
                                <button class="like-btn">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                                <span class="like-count">66</span>
                            </div>
                            <a href="/butterfly_photography/public/reservation.php" class="btn">reserver</a>
                        </div>
                    </div>
                    <div class="slide" id="slide1">
                        <img src="/butterfly_photography/public/images/MARIAGE1.jpg" alt="Photo 1">
                        <div class="slide-desc" id="slide-desc-1">
                            <h1>Francia</h1>
                            <p>Photo d'une séance de mariage en studio.</p>
                            <div class="like-section">
                                <button class="like-btn">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                                <span class="like-count">66</span>
                            </div>
                            <a href="/butterfly_photography/public/reservation.php" class="btn">reserver</a>
                        </div>
                    </div>

                    <div class="slide" id="slide1">
                        <img src="/butterfly_photography/public/images/MARIAGE1.jpg" alt="Photo 1">
                        <div class="slide-desc" id="slide-desc-1">
                            <h1>Francia</h1>
                            <p>Photo d'une séance de mariage en studio.</p>
                            <div class="like-section">
                                <button class="like-btn">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                                <span class="like-count">66</span>
                            </div>
                            <a href="/butterfly_photography/public/reservation.php" class="btn">reserver</a>
                        </div>
                    </div>

                    <div class="slide" id="slide1">
                        <img src="/butterfly_photography/public/images/MARIAGE2.jpg" alt="Photo 1">
                        <div class="slide-desc" id="slide-desc-1">
                            <h1>Francia</h1>
                            <p>Photo d'une séance de mariage en studio.</p>
                            <div class="like-section">
                                <button class="like-btn">
                                    <i class="fa-regular fa-heart"></i>
                                </button>
                                <span class="like-count">66</span>
                            </div>
                            <a href="/butterfly_photography/public/reservation.php" class="btn">reserver</a>
                        </div>
                    </div>


                </div>
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
                <a href="/butterfly_photography/public/index.php?route=home">Accueil</a>
                <a href="/butterfly_photography/public/index.php?route=about">À propos</a>
                <a href="/butterfly_photography/public/index.php?route=gallery">Galerie</a>
                <a href="/butterfly_photography/public/index.php?route=contact">Contact</a>
                <a href="/butterfly_photography/public/index.php?route=dashboard">se connecter</a>
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

    <script src="/butterfly_photography/public/js/scripts.js"></script>
</body>

</html>