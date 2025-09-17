<?php include("includes/db.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <title>ACME Construction</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header>
  <div class="brand">ACME Construction</div>
  <nav>
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="services.php">Services</a>
    <a href="projects.php">Projects</a>
    <a href="contact.php">Contact</a>
    <a href="admin/login.php">Admin</a>
  </nav>
</header>

<section class="hero">
  <div class="slideshow-container">
    <?php
    $slides = $conn->query("SELECT * FROM slides ORDER BY id DESC");
    $count = 0;
    while($s = $slides->fetch_assoc()) { $count++;
      echo "<div class='mySlides fade'>
              <img src='assets/images/{$s['image']}' alt='Slide {$count}' />
              ".(!empty($s['caption']) ? "<div class='caption'>{$s['caption']}</div>" : "")."
            </div>";
    }
    ?>
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <div class="dots">
    <?php for($i=1;$i<=$count;$i++){ echo "<span class='dot' onclick='currentSlide($i)'></span>"; } ?>
  </div>
</section>

<section class="intro container">
  <h1>We Build What Matters</h1>
  <p>From residential builds to large-scale infrastructure, ACME Construction delivers quality, on time, on budget.</p>
</section>

<section class="home-services container">
  <h2>Our Core Services</h2>
  <div class="cards">
    <?php
    $svcs = $conn->query("SELECT * FROM services ORDER BY id DESC LIMIT 6");
    while($svc = $svcs->fetch_assoc()) {
      echo "<div class='card'>
              <img src='assets/images/{$svc['image']}' alt='{$svc['title']}' />
              <h3>{$svc['title']}</h3>
              <p>".substr($svc['description'],0,120)."...</p>
            </div>";
    }
    ?>
  </div>
</section>

<?php include("partials/footer.php"); ?>

<script src="assets/js/script.js"></script>
</body>
</html>
