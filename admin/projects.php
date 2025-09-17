<?php session_start(); include("../includes/db.php"); if(!isset($_SESSION['admin'])){ header("Location: login.php"); exit; } ?>
<!DOCTYPE html><html><head><title>Projects</title><link rel="stylesheet" href="../assets/css/style.css"></head><body class="container">
<h2>Projects</h2>
<p><a href="project_add.php">Add Project</a></p>
<table border="1" cellpadding="8"><tr><th>ID</th><th>Title</th><th>Status</th><th>Image</th><th>Action</th></tr>
<?php $res=$conn->query("SELECT * FROM projects ORDER BY id DESC"); while($r=$res->fetch_assoc()){ echo "<tr>
<td>{$r['id']}</td><td>{$r['title']}</td><td>{$r['status']}</td><td><img src='../assets/images/{$r['image']}' width='120'></td>
<td><a href='project_delete.php?id={$r['id']}'>Delete</a></td></tr>"; } ?>
</table>
<p><a href="dashboard.php">Back</a></p>
</body></html>
