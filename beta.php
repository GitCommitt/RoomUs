<?php 
$title = "RoomUs Beta";
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="views/styles.css">
</head>
<body>
    <header>
      <?php include "./views/navbar.php"; ?>
    </header>

    <main>
      <div class="beta-container">
        <div class="beta-content">
          <h1>Join the RoomUs Beta</h1>
          <p>Wees één van de eerste die RoomUs kan gebruiken en help ons de app te verbeteren!</p>
          
          <form class="beta-form" action="process-beta.php" method="POST">
            <input type="email" name="email" placeholder="Jouw email adres" required>
            <button type="submit">Aanmelden voor Beta</button>
          </form>
        </div>
      </div>
    </main>

    <?php include_once "./views/footer.php"; ?>
</body>
</html>
