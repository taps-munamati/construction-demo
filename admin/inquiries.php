<?php session_start(); include("../includes/db.php"); if(!isset($_SESSION['admin'])){ header("Location: login.php"); exit; } ?>
<!DOCTYPE html><html><head><title>Inquiries</title><link rel="stylesheet" href="../assets/css/style.css"></head><body class="container">
<h2>Customer Inquiries</h2>
<table border="1" cellpadding="8"><tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Message</th><th>Date</th></tr>
<?php $res=$conn->query("SELECT * FROM inquiries ORDER BY created_at DESC"); while($r=$res->fetch_assoc()){ echo "<tr>
<td>{$r['id']}</td><td>{$r['name']}</td><td>{$r['email']}</td><td>{$r['phone']}</td><td>{$r['message']}</td><td>{$r['created_at']}</td></tr>"; } ?>
</table>
<p><a href="dashboard.php">Back</a></p>
</body></html>
