<?php
$info = include __DIR__ . '/../data/info.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Home Page</title>
        <link rel="stylesheet" href="/ButteStrongWebsite/public/css/navbar_styles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>


    <body>
        <div class=encompass>
            <?php include __DIR__ . '/../includes/header.php'; ?>
            <main class="content">
                <div class="home_image">
                    <img src="/ButteStrongWebsite/public/images/ButtePhoto.png" alt="Home Image">
                </div>
                <div class="welcome-message">
                <h1><?= htmlspecialchars($info['home_message']) ?></h1> 
                </div>
                <div class="home-content">
                    <p>If you are danger call emergency services (911) <br>
                    To report something to Butte Tough text or call this number (000) 000-0000</p>
                </div>
                <p class="home-content">This website is for informational purposes only and is not a substitute for professional advice or emergency services.</p>
            </main>
            <?php include __DIR__ . '/../includes/footer.php'; ?>
        </div>
    </body>
    <script src="/ButteToughWebsite/public/js/events.js"></script>
</html>

