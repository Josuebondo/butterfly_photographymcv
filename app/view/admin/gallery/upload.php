<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".../../../../../../public/css/dashboard.css">
    <title>butterfly_photography/upload</title>
</head>

<body>
    <aside><?php include '../../../../layout/slidebar.php' ?>
    </aside>

    <section class="home-section">
      

        <div class="home-content">
            <div class="uploadFormModal">

                <form action="" method="post">
                    <h2>Uploader une Photo</h2>
                    <label for="client">Client</label>
                    <input type="text" name="client" id="client" required>
                    <label for="date">Date de la séance</label>
                    <input type="date" name="date" id="date" required>

                    <label for="photo">Choisir une photo à uploader :</label>
                    <input type="file" name="photo" id="photo" accept="image/*" required>
                    <button type="submit" name="upload">Uploader</button>
                </form>
                </form>
            </div>

        </div>

    </section>


</body>

</html>