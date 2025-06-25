<?php
// session_start();
// if (!isset($_SESSION['username'])) {
//     header('Location: /butterfly/login.php');
//     exit();
// }
require_once __DIR__ . '/../../../config/config.php';
require_once __DIR__ . '/../../../app/models/messagemodel.php';

$messagemodel = new messagemodel();

$messages = $messagemodel->getAllMessages();
foreach ($messages as $message) {
  // Affichage des messages
}

// $users = getAllRows($pdo, 'contacts', 'created_at');
// foreach ($users as $user) {
//     echo $user['username'] . '<br>';
// }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="UTF-8" />
  <title> butterfly_photography</title>
  <link rel="stylesheet" href="/butterfly_photography/public/css/dashboard.css" />
  <!-- Boxicons CDN Link -->
  <link
    href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
    rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class="bx bxl-c-plus-plus"></i>
      <span class="logo_name">butterfly</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="dashboard.php" class="active">
          <i class="bx bx-grid-alt"></i>
          <span class="links_name">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="bx bx-box"></i>
          <span class="links_name">Produit</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="bx bx-list-ul"></i>
          <span class="links_name">Commandes</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="bx bx-pie-chart-alt-2"></i>
          <span class="links_name">Analyses</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="bx bx-coin-stack"></i>
          <span class="links_name">Stock</span>
        </a>
      </li>
      <li>
        <a href="reservationView.php">
          <i class="bx bx-book-alt"></i>
          <span class="links_name">Tout les reservations</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="bx bx-user"></i>
          <span class="links_name">Utilisateur</span>
        </a>
      </li>
      <li>
        <a href="<?= URLROOT ?>/message">
          <i class="bx bx-message"></i>
          <span class="links_name">Messages</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="bx bx-heart"></i>
          <span class="links_name">Favrorites</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="bx bx-cog"></i>
          <span class="links_name">Configuration</span>
        </a>
      </li>
      <li class="log_out">
        <a href="#">
          <i class="bx bx-log-out"></i>
          <span class="links_name">Déconnexion</span>
        </a>
      </li>
    </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class="bx bx-menu sidebarBtn"></i>
        <span class="dashboard">Tout les Messages</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Recherche..." />
        <i class="bx bx-search"></i>
      </div>
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
        <span class="admin_name">Komche</span>
        <i class="bx bx-chevron-down"></i>
      </div>
    </nav>
    <div class="home-content">



      </div>
    </div>
  </section>
  </section>
</body>

</html>
<?php

if (isset($_GET['delete']) && is_numeric($_GET['delete'])) {
  $messagemodel->deleteMessage($pdo, $_GET['delete']);
  header("Location: message.php");
  exit();
}
?>