<div class="header">
    <div class="logo">
        <a href="index.php">My Website</a>
    </div>
    <div class="links">
        <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true): ?>
            <a href="logout.php">Logout</a>
        <?php else: ?>
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
        <?php endif; ?>
        <button id="theme-toggle">Switch to Dark Mode</button>
    </div>
</div>
 