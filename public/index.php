<?php
include __DIR__ . '/../includes/track_visitors.php';
$info = include __DIR__ . '/../data/info.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Home Page</title>
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>
        <?php include __DIR__ . '/../includes/header.php'; ?>
        <main class="content">
            <div class="home_image">
                <img src="/../public/images/RubyPhoto.jpg" alt="Home Image">
            </div>
            <div class="welcome-message">
               <h1><?= htmlspecialchars($info['home_message']) ?></h1> 
            </div>
            <div class="home-content">
                <p>If you are danger call emergency services (911) <br>
                To report something to Butte Tough text or call this number (000) 000-0000</p>
            </div>
        </main>
        <?php include __DIR__ . '/../includes/footer.php'; ?>
    </body>

</html>

