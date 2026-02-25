<header class="site-header">
    <div class="navbar">
        <div class="topper">
        <a href="/ButteStrongWebsite/public/index.php"><div class="logolink"><img src="/ButteStrongWebsite/public/images/logo-removebg-preview.png" class="logo" alt="Butte Strong Logo"></div></a>
        <button class="nav_burger">☰</button>
        </div>
        <nav class="sidebar">
            <ul data-visible="false">
                <li><a href="/ButteStrongWebsite/public/index.php"><div class="navlink">Resource 1</div></a></li>
                <li><a href="/ButteStrongWebsite/public/importantLinks.php"><div class="navlink">Resource 2</div></a></li>
                <li><a href="/ButteStrongWebsite/public/contact_page.php"><div class="navlink">Resource 3</div></a></li>
            </ul>
            <ul class="socials" data-visible="false">
                <?php if (!empty($info['facebook_link'])): ?>
                <a href="<?= htmlspecialchars($info['facebook_link']) ?>" target="_blank">Facebook | </a>
                <?php endif; ?>

                <?php if (!empty($info['x_link'])): ?>
                    <a href="<?= htmlspecialchars($info['x_link']) ?>" target="_blank">X | </a>
                <?php endif; ?>

                <?php if (!empty($info['instagram_link'])): ?>
                    <a href="<?= htmlspecialchars($info['instagram_link']) ?>" target="_blank">Instagram</a>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</header>
