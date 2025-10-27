<?php 
$title = "RoomUs";
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
      <div class="card-1">
        <?php include "./views/slogan.php"; ?>
      </div>
      <div class="card-2">
        <?php include "./views/info-cards.php"; ?>
      </div>
      <div class="card-3">
        <?php include_once "./views/review.php"; ?>
        <?php include_once "./views/contact.php"; ?>
      </div>
    </main>

    <?php include_once "./views/footer.php"; ?>
</body>
</html>
