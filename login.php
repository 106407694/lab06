<?php
session_start();
?>

<?php include 'header.inc'; ?>

<div class="container">
    <div class="main-content">
        <div class="card">
            <h2>Login Form</h2>
            
            <?php if (isset($_GET['error'])): ?>
                <div class="message error">
                    Invalid username or password. Please try again.
                </div>
            <?php endif; ?>
            <form id="loginForm" action="process.php" method="POST">
                <div class="form-group">
                    <label>Username:</label>
                    <input type="text" name="username" required>
                </div>
                
                <div class="form-group">
                    <label>Password:</label>
                    <input type="password" name="password" required>
                </div>
                
                <input type="hidden" name="userToken" value="106407694">
                
                <button type="submit">Login</button>
            </form>
            
        </div>
    </div>
</div>

<?php include 'footer.inc'; ?>
