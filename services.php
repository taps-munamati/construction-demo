<?php include("includes/db.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Services - ACME Construction</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php include("partials/header.php"); ?>
<main class="container">
  <h1>Our Services</h1>
  <div class="cards">
    <?php
    $res = $conn->query("SELECT * FROM services ORDER BY id DESC");
    while($row = $res->fetch_assoc()){
      echo "<div class='card'>
              <img src='assets/images/{$row['image']}' alt='{$row['title']}' />
              <h3>{$row['title']}</h3>
              <p>{$row['description']}</p>
            </div>";
    }
    ?>
  </div>
</main>
<?php include("partials/footer.php"); ?>
</body>
</html>
