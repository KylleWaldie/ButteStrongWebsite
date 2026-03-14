<header class="site-header">
    <div class="navbar">
        <div class="topper">
        <a href="/ButteStrongWebsite/public/index.php"><div class="logolink"><img src="/ButteStrongWebsite/public/images/logo-removebg-preview.png" class="logo" alt="Butte Strong home page logo"></div></a>
        <button class="nav_burger" aria-label="Toggle navigation menu" aria-controls="primary-navigation" aria-expanded="false">
            <span></span>
            <span></span>
            <span></span>
        </button>
        </div>
        <nav class="sidebar" id="primary-navigation" aria-label="Main navigation">
            <ul data-visible="false">
                <li><a href="/ButteStrongWebsite/public/index.php" class="navlink">Resource 1</a></li>
                <li><a href="/ButteStrongWebsite/public/importantLinks.php" class="navlink">Resource 2</a></li>
                <li><a href="/ButteStrongWebsite/public/contact_page.php" class="navlink">Resource 3</a></li>
            </ul>
            <ul class="socials" data-visible="false">
                <?php if (!empty($info['facebook_link'])): ?>
                <li><a href="<?= htmlspecialchars($info['facebook_link']) ?>" target="_blank" rel="noopener noreferrer">
                    <i class="fa-brands fa-facebook"></i>
                </a></li>
                <?php endif; ?>

                <?php if (!empty($info['x_link'])): ?>
                <li><a href="<?= htmlspecialchars($info['x_link']) ?>" target="_blank" rel="noopener noreferrer">
                    <i class="fa-brands fa-x-twitter"></i>
                </a></li>
                <?php endif; ?>

                <?php if (!empty($info['instagram_link'])): ?>
                <li><a href="<?= htmlspecialchars($info['instagram_link']) ?>" target="_blank" rel="noopener noreferrer">
                    <i class="fa-brands fa-instagram"></i>
                </a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</header>