<?php session_start(); include("../includes/db.php"); if(!isset($_SESSION['admin'])){ header("Location: login.php"); exit; } 
if(isset($_GET['delete'])){ $id=intval($_GET['delete']); $conn->query("DELETE FROM slides WHERE id=$id"); header("Location: slides.php"); exit; } ?>
<!DOCTYPE html><html><head><title>Slides</title><link rel="stylesheet" href="../assets/css/style.css"></head><body class="container">
<h2>Homepage Slides</h2>
<p><a href="slide_add.php">Add Slide</a></p>
<table border="1" cellpadding="8"><tr><th>ID</th><th>Image</th><th>Caption</th><th>Action</th></tr>
<?php $res=$conn->query("SELECT * FROM slides ORDER BY id DESC"); while($r=$res->fetch_assoc()){ echo "<tr>
<td>{$r['id']}</td><td><img src='../assets/images/{$r['image']}' width='140'></td><td>{$r['caption']}</td>
<td><a href='slides.php?delete={$r['id']}'>Delete</a></td></tr>"; } ?>
</table>
<p><a href="dashboard.php">Back</a></p>
</body></html>
