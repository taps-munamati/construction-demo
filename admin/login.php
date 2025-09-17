<?php
session_start(); include("../includes/db.php");
if($_SERVER['REQUEST_METHOD']=='POST'){
  $u = $_POST['username']; $p = md5($_POST['password']);
  $res = $conn->query("SELECT * FROM admin WHERE username='$u' AND password='$p'");
  if($res && $res->num_rows===1){ $_SESSION['admin']=$u; header("Location: dashboard.php"); exit; } else { $err="Invalid credentials"; }
}
?>
<!DOCTYPE html><html><head><title>Admin Login</title><link rel="stylesheet" href="../assets/css/style.css"></head><body class="container">
<h2>Admin Login</h2>
<?php if(isset($err)) echo "<p style='color:red'>$err</p>"; ?>
<form method="post" class="form">
  <label>Username</label><input name="username" required />
  <label>Password</label><input type="password" name="password" required />
  <button type="submit">Login</button>
</form>
</body></html>
