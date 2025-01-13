<div class="footer">
    <p>&copy; <?php echo date('Y'); ?> My Website. All rights reserved.</p>
</div>
</body>
</html><script>
    // Check local storage for saved theme
    const theme = localStorage.getItem('theme') || 'bright';
    document.body.className = theme;

    const button = document.getElementById('theme-toggle');
    button.textContent = theme === 'bright' ? 'Switch to Dark Mode' : 'Switch to Bright Mode';

    // Toggle theme
    button.addEventListener('click', () => {
        const currentTheme = document.body.className;
        const newTheme = currentTheme === 'bright' ? 'dark' : 'bright';
        document.body.className = newTheme;
        localStorage.setItem('theme', newTheme);
        button.textContent = newTheme === 'bright' ? 'Switch to Dark Mode' : 'Switch to Bright Mode';
    });
</script>
