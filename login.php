<?php include 'header.inc'; ?>
<h2>Login Form</h2>
<?php
if (isset($_GET['error'])) {
    echo "<p style='color:red;'>Invalid username or password!</p>";
}
?>
<form method="POST" action="process.php">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>

    <br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <br><br>
    <input type="hidden" name="token" value="n106407694">
    <input type="submit" value="Login">
</form>
<?php include 'footer.inc'; ?>
