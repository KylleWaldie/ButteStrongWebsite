<?php
$info = include __DIR__ . '/../data/info.php';
?>
<!DOCTYPE html>
<html>
        <head>
        <title>Important Links</title>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="contact.php">Other</a></li>
            </ul>
        </nav>

    </head>
    <body>
        <h1>Important Links</h1>
        <p><?= htmlspecialchars($info['immigration_link']) ?></p>
        <p><a href="index.php">Home</a> | <a href="contact.php">Contact</a></p>
    </body>
