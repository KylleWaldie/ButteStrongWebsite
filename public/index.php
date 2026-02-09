<?php
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
            <h1><?= htmlspecialchars($info['home_message']) ?></h1>
        </main>
        <?php include __DIR__ . '/../includes/footer.php'; ?>
    </body>

</html>

