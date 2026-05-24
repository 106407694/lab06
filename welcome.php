<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<?php include 'header.inc'; ?>

<h3>Welcome Page</h3>

<p>Hello <?php echo $_SESSION['user']; ?></p>

<br>
<a href="logout.php">Logout</a>

<?php include 'footer.inc'; ?>
