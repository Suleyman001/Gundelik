<php
include '/data/dbconnect.php';
include '/pages/header.php';
include '/pages/footer.php';
include '/styles/styles.css';
</php>
<link rel="icon" type="image/png" href="path-to-your-favicon/favicon.png">

<div class="content">
    <h1>Welcome to My Website!</h1>
    <p>This is the home page content.</p>
</div>


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
