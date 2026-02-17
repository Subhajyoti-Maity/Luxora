<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title><?php page_title(); ?> | <?php site_name(); ?></title>
    <link href="<?php site_url(); ?>/template/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='75' font-size='75' font-weight='bold' fill='%23D4AF37'>L</text></svg>">
</head>
<body>
<button id="back-to-top" title="Go to top">⬆</button>
<div class="wrap">

    <header>
        <div>
            <h1><?php site_name(); ?></h1>
            <nav class="menu">
                <?php nav_menu(); ?>
            </nav>
        </div>
        <button class="theme-toggle" id="theme-toggle" title="Toggle dark mode">🌙</button>
    </header>
    
    <div class="breadcrumb">
        <?php breadcrumb_nav(); ?>
    </div>

    <article>
        <h2><?php page_title(); ?></h2>
        
        <?php if (is_featured_page()) { ?>
        <div class="featured">
            <div class="featured-label">⭐ Featured Section</div>
            <h3>Highlight This Content</h3>
            <p>This is a featured section that stands out. You can use it to showcase important information or promotions.</p>
        </div>
        <?php } ?>
        
        <?php page_content(); ?>
    </article>

    <footer>
        <div class="social-icons">
            <a href="https://facebook.com" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
            <a href="https://linkedin.com" target="_blank" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://instagram.com" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
        </div>
        <small>&copy;<?php echo date('Y'); ?> <?php site_name(); ?>.<br><?php site_version(); ?></small>
    </footer>

</div>

<script>
// Dark/Light Mode Toggle
const themeToggle = document.getElementById('theme-toggle');
const body = document.body;

// Load saved theme preference
const savedTheme = localStorage.getItem('theme') || 'dark';
if (savedTheme === 'light') {
    body.classList.add('light-mode');
    themeToggle.innerHTML = '🌙';
} else {
    body.classList.remove('light-mode');
    themeToggle.innerHTML = '☀️';
}

themeToggle.addEventListener('click', () => {
    body.classList.toggle('light-mode');
    if (body.classList.contains('light-mode')) {
        localStorage.setItem('theme', 'light');
        themeToggle.innerHTML = '🌙';
    } else {
        localStorage.setItem('theme', 'dark');
        themeToggle.innerHTML = '☀️';
    }
});

// Back to Top Button
const backToTopBtn = document.getElementById('back-to-top');

window.addEventListener('scroll', () => {
    if (window.pageYOffset > 300) {
        backToTopBtn.classList.add('show');
    } else {
        backToTopBtn.classList.remove('show');
    }
});

backToTopBtn.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});
</script>
</body>
</html>