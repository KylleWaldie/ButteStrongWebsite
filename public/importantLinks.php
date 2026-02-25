<?php
$info = include __DIR__ . '/../data/info.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Important Links</title>
        <link rel="stylesheet" href="/ButteToughWebsite/public/css/navbar_styles.css">
    </head>
    <body>
        <div class=encompass>
        <?php include __DIR__ . '/../includes/header.php'; ?>

        <main class="content">
            <h1>Important Links</h1>
            <div class = important_link1>
                <p><?= htmlspecialchars($info['immigration_link']) ?></p>
            </div>
            <div class = important_link2>
                <p><?= htmlspecialchars($info['link_2']) ?></p>
            </div>    
            <div class = important_link3>
                <p><?= htmlspecialchars($info['immigration_link']) ?></p>
            </div>
        </main>
        </div>
        <?php include __DIR__ . '/../includes/footer.php'; ?>
    </body>
</html>
