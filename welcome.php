<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>
<?php include 'header.inc'; ?>
<h2>Welcome Page</h2>
<p>
    Welcome,
    <strong><?php echo $_SESSION['user']; ?></strong>
</p>
<?php include 'footer.inc'; ?>
