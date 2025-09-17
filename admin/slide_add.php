<?php session_start(); include("../includes/db.php"); if(!isset($_SESSION['admin'])){ header("Location: login.php"); exit; }
if($_SERVER['REQUEST_METHOD']=='POST'){
  $caption=$_POST['caption']; $image='default.jpg';
  if(!empty($_FILES['image']['name'])){ $new=time().'_'.basename($_FILES['image']['name']); if(move_uploaded_file($_FILES['image']['tmp_name'],"../assets/images/".$new)){ $image=$new; } }
  $conn->query("INSERT INTO slides (image,caption) VALUES ('$image','$caption')");
  header("Location: slides.php"); exit;
} ?>
<!DOCTYPE html><html><head><title>Add Slide</title><link rel="stylesheet" href="../assets/css/style.css"></head><body class="container">
<h2>Add Slide</h2>
<form method="post" enctype="multipart/form-data" class="form">
  <label>Caption</label><input name="caption" />
  <label>Image</label><input type="file" name="image" accept="image/*" required />
  <button type="submit">Upload</button>
</form>
</body></html>
