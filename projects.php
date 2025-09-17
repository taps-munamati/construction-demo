<?php include("includes/db.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Projects - ACME Construction</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php include("partials/header.php"); ?>
<main class="container">
  <h1>Projects</h1>
  <div class="grid">
    <?php
    $res = $conn->query("SELECT * FROM projects ORDER BY id DESC");
    while($p = $res->fetch_assoc()){
      echo "<div class='project'>
              <img src='assets/images/{$p['image']}' alt='{$p['title']}' />
              <div class='project-info'>
                <h3>{$p['title']}</h3>
                <p>{$p['description']}</p>
                <span class='status'>{$p['status']}</span>
              </div>
            </div>";
    }
    ?>
  </div>
</main>
<?php include("partials/footer.php"); ?>
</body>
</html>
