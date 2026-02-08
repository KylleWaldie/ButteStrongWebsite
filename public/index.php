<?php
$info = include __DIR__ . '/../data/info.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Home Page</title>
        <nav>
            <ul>
                <li><a href="importantLinks.php">Important Links</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="contact.php">Other</a></li>
            </ul>
        </nav>

    </head>
    <body>
        <h1><?= htmlspecialchars($info['home_message']) ?></h1>
    </body>
</html>
