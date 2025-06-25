<?php
// session_start();
// if (!isset($_SESSION['username'])) {
//     header('Location: /butterfly/login.php');
//     exit();
// }
require_once __DIR__ . '/../../../../config/config.php';
require_once __DIR__ . '/../../../models/messagemodel.php';

// Traitement de l'upload
$uploadMessage = '';
if (isset($_POST['upload']) && isset($_FILES['photo'])) {
    $uploadDir = __DIR__ . '/../../../../public/images/';
    $fileName = basename($_FILES['photo']['name']);
    $targetFile = $uploadDir . $fileName;
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $allowedTypes = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

    if (in_array($fileType, $allowedTypes)) {
        if (move_uploaded_file($_FILES['photo']['tmp_name'], $targetFile)) {
            $uploadMessage = "<span style='color:green;'>Image uploadée avec succès !</span>";
        } else {
            $uploadMessage = "<span style='color:red;'>Erreur lors de l'upload.</span>";
        }
    } else {
        $uploadMessage = "<span style='color:red;'>Type de fichier non autorisé.</span>";
    }
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
      rel="stylesheet"
    />
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
          <a href="/butterfly_photography/public/dashboard.php" class="active">
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
          <a href="/butterfly_photography/app/view/admin/gallery/reservationView.php">
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
          <a href="/butterfly_photography/app/view/admin/message.php">
            <i class="bx bx-message"></i>
            <span class="links_name">Messages</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-heart" ></i>
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
            <h1>Galerie d'Upload de Photos</h1>
            <p>Bienvenue dans la section d'upload de photos. Vous pouvez uploader vos photos ici.</p>
            <p>Pour supprimer un message, cliquez sur le lien "Supprimer" à côté du message.</p>
            <div class="messages">
                <h2>Messages</h2>
                <ul>
                    <?php
                    $messagemodel = new messagemodel();
                    $messages = $messagemodel->getAllMessages();
                    foreach ($messages as $message) {
                        echo '<li>' . htmlspecialchars($message['message']) . ' - <a href="?delete=' . $message['id'] . '">Supprimer</a></li>';
                    }
                    ?>
                </ul>
            </div>
           <form action="" method="post" enctype="multipart/form-data" style="margin:30px;">
            <h2>Uploader une Photo</h2>
            <label for="client">Client</label>
            <input type="text" name="client" id="client" required>
            <label for="date">Date de la séance</label>
            <input type="date" name="date" id="date" required>
            
            <label for="photo">Choisir une photo à uploader :</label>
            <input type="file" name="photo" id="photo" accept="image/*" required>
            <button type="submit" name="upload">Uploader</button>
            </form>
            <div class="uploaded-photos">
                <h2>Photos Uploadées</h2>
                <ul style="display:flex;flex-wrap:wrap;gap:10px;">
                    <?php
                    $imagesDir = '/butterfly_photography/public/images/';
                    $serverDir = $_SERVER['DOCUMENT_ROOT'] . $imagesDir;
                    $images = glob($serverDir . '*.{jpg,jpeg,png,gif,webp}', GLOB_BRACE);
                    foreach ($images as $img) {
                        $imgName = basename($img);
                        echo "<li><img src=\"$imagesDir$imgName\" alt=\"$imgName\" style=\"max-width:120px;max-height:120px;\"></li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
   </section>
   <?php if (!empty($uploadMessage)) echo "<div style='text-align:center;'>$uploadMessage</div>"; ?>
   </section>
  </body>
</html>
<?php
