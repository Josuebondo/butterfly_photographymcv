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
           <!-- <form action="" method="post" enctype="multipart/form-data" style="margin:30px;">

            <div class="uploaded-photos">
                <h2>Photos Uploadées</h2>
                <ul style="display:flex;flex-wrap:wrap;gap:10px;">
                    <?php
                    // $imagesDir = '/butterfly_photography/public/images/';
                    // $serverDir = $_SERVER['DOCUMENT_ROOT'] . $imagesDir;
                    // $images = glob($serverDir . '*.{jpg,jpeg,png,gif,webp}', GLOB_BRACE);
                    // foreach ($images as $img) {
                    //     $imgName = basename($img);
                    //     echo "<li><img src=\"$imagesDir$imgName\" alt=\"$imgName\" style=\"max-width:120px;max-height:120px;\"></li>";
                    // }
                    ?>
                </ul> -->
            </div>
        </div>
   </section>
   <?php if (!empty($uploadMessage)) echo "<div style='text-align:center;'>$uploadMessage</div>"; ?>
   </section>
  </body>
</html>
<?php
