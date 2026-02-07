<?php
$info = include __DIR__ . '/../data/info.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Home Page</title>
    </head>
    <body>
        <h1><?= htmlspecialchars($info['home_message']) ?></h1>
        <p><a href="importantLinks.php">Important Links</a> | <a href="contact.php">Contact</a></p>
    </body>
</html>
