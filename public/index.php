<?php
$info = include __DIR__ . '/../data/info.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Butte Strong Home Page</title>
        <link rel="stylesheet" href="/ButteStrongWebsite/public/css/navbar_styles.css">
        <link rel="stylesheet" href="/ButteStrongWebsite/public/css/footer_styles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    
    <body>
        <a href="#main-content" class="skip-link">Skip to main content</a>

        <div class=encompass>
            <?php include __DIR__ . '/../includes/header.php'; ?>
            <main id="main-content" class="content">
                <div class="home_image">
                    <img src="/ButteStrongWebsite/public/images/ButtePhoto.png" alt="View of Butte, Montana with a historic mining gallows frame in the foreground">
                </div>
                <div class="welcome-message">
                <h1><?= htmlspecialchars($info['home_message']) ?></h1> 
                </div>
                <div class="home-content">
                    <p><strong>If you are in danger, call emergency services at <a href="tell:911">911</a></strong></p>
                    <p>To report something to Butte Strong, text or call <a href="tel:0000000000">(000) 000-0000</a></p>
                </div>
                <p class="home-content">This website is for informational purposes only and is not a substitute for professional advice or emergency services.</p>
            </main>
        </div>
        <?php include __DIR__ . '/../includes/footer.php'; ?>
    </body>
    <script src="/ButteStrongWebsite/public/js/events.js" defer></script>
</html>

