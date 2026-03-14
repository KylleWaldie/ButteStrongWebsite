<?php
$info = include __DIR__ . '/../data/info.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Butte Strong Home Page</title>
        <link rel="stylesheet" href="/ButteStrongWebsite/public/css/navbar_styles.css">
        <link rel="stylesheet" href="/ButteStrongWebsite/public/css/footer_styles.css">
        <link rel="stylesheet" href="/ButteStrongWebsite/public/css/index_styles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    
    <body>
        <a href="#main-content" class="skip-link">Skip to main content</a>

        <div class=encompass>
            <div class="inner-wrap">
                <?php include __DIR__ . '/../includes/header.php'; ?>
                <main id="main-content" class="content">
                    <div class="home_image">
                        <img src="/ButteStrongWebsite/public/images/istockphoto-1502044339-1024x1024.jpg" alt="View of Butte, Montana with a historic mining gallows frame in the foreground">
                    </div>
                    <div class="welcome-message">
                    <h1><?= htmlspecialchars($info['home_message']) ?></h1> 
                    </div>
                    <div class="home-content">
                        <p><strong>If you are in danger, call emergency services at <a href="tell:911">911</a></strong></p>
                        <p>To report something to Butte Strong, text or call <a href="tel:0000000000">(000) 000-0000</a></p>
                    </div>
                    <p class="home-content">This website is for informational purposes only and is not a substitute for professional advice or emergency services. </p>
                    <p class="home-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>           
                </main>
            </div>
            <?php include __DIR__ . '/../includes/footer.php'; ?>
        </div>
    </body>
    <script src="/ButteStrongWebsite/public/js/events.js" defer></script>
</html>

