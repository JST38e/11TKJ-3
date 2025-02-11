<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Dashboard Admin</h2>
    <a href="logout.php">Logout</a>
</body>
</html>
