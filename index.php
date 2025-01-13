<?php
include 'dbconnect.php';
include 'header.php';
include 'styles.php';
?>

<div class="content">
    <h1>Welcome to My Website!</h1>
    <p>This is the home page content.</p>
</div>

<?php include 'footer.php'; ?>
<script>
    // JavaScript for theme toggling
    const theme = localStorage.getItem('theme') || 'bright';
    document.body.className = theme;

    const button = document.getElementById('theme-toggle');
    button.textContent = theme === 'bright' ? 'Switch to Dark Mode' : 'Switch to Bright Mode';

    button.addEventListener('click', () => {
        const currentTheme = document.body.className;
        const newTheme = currentTheme === 'bright' ? 'dark' : 'bright';
        document.body.className = newTheme;
        localStorage.setItem('theme', newTheme);
        button.textContent = newTheme === 'bright' ? 'Switch to Dark Mode' : 'Switch to Bright Mode';
    });
</script>
