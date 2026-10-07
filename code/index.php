<?php 
$title = "RoomUs";
?>

<!DOCTYPE html>
<html lang="nl">
  <link rel="icon" type="image/x-icon" href="/img/roomus_logo.png">
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
      <div id="card-1" class="card-1">
        <?php include "./views/slogan.php"; ?>
      </div>
      <div id="card-2" class="card-2">
        <?php include "./views/info-cards.php"; ?>
      </div>
      <div id="card-3" class="card-3">
        <?php include_once "./views/review.php"; ?>
        <?php include_once "./views/contact.php"; ?>
      </div>
      <div></div>
    </main>

    <?php include_once "./views/footer.php"; ?>
</body>
</html>
