<?php
include __DIR__ . '/../includes/track_visitors.php';
$info = include __DIR__ . '/../data/info.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Important Links</title>
    </head>
    <body>
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

        <?php include __DIR__ . '/../includes/footer.php'; ?>
    </body>
</html>
