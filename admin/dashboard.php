<?php session_start(); if(!isset($_SESSION['admin'])){ header("Location: login.php"); exit; } ?>
<!DOCTYPE html><html><head><title>Dashboard</title><link rel="stylesheet" href="../assets/css/style.css"></head><body class="container">
<h1>Admin Dashboard</h1>
<nav>
  <a href="services.php">Manage Services</a> |
  <a href="projects.php">Manage Projects</a> |
  <a href="inquiries.php">Customer Inquiries</a> |
  <a href="slides.php">Homepage Slides</a> |
  <a href="logout.php">Logout</a>
</nav>
</body></html>
