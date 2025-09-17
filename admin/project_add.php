<?php session_start(); include("../includes/db.php"); if(!isset($_SESSION['admin'])){ header("Location: login.php"); exit; }
if($_SERVER['REQUEST_METHOD']=='POST'){
  $title=$_POST['title']; $desc=$_POST['description']; $status=$_POST['status'];
  $image='default.jpg'; if(!empty($_FILES['image']['name'])){ $new=time().'_'.basename($_FILES['image']['name']); if(move_uploaded_file($_FILES['image']['tmp_name'],"../assets/images/".$new)){ $image=$new; } }
  $conn->query("INSERT INTO projects (title,description,status,image) VALUES ('$title','$desc','$status','$image')");
  header("Location: projects.php"); exit;
} ?>
<!DOCTYPE html><html><head><title>Add Project</title><link rel="stylesheet" href="../assets/css/style.css"></head><body class="container">
<h2>Add Project</h2>
<form method="post" enctype="multipart/form-data" class="form">
  <label>Title</label><input name="title" required />
  <label>Description</label><textarea name="description" rows="5"></textarea>
  <label>Status</label>
  <select name="status">
    <option>Completed</option>
    <option>Ongoing</option>
    <option>Planned</option>
  </select>
  <label>Image</label><input type="file" name="image" accept="image/*" />
  <button type="submit">Save</button>
</form>
</body></html>
