<?php include("includes/db.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Contact - ACME Construction</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php include("partials/header.php"); ?>
<main class="container">
  <h1>Contact Us</h1>
  <?php
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $conn->query("INSERT INTO inquiries (name,email,phone,message,created_at) VALUES ('$name','$email','$phone','$message',NOW())");
    echo "<p class='success'>Thank you! Your message has been sent.</p>";
  }
  ?>
  <form method="post" class="form">
    <label>Name</label><input type="text" name="name" required />
    <label>Email</label><input type="email" name="email" required />
    <label>Phone</label><input type="text" name="phone" />
    <label>Message</label><textarea name="message" rows="5" required></textarea>
    <button type="submit">Send Message</button>
  </form>
</main>
<?php include("partials/footer.php"); ?>
</body>
</html>
