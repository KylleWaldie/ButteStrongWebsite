<?php
$contact = include __DIR__ . '/../data/contact.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Contact</title>
    </head>
    <body>
        <h1>Contact Us</h1>
        <p>Phone: <?= htmlspecialchars($contact['phone']) ?></p>
        <p>Email: <?= htmlspecialchars($contact['email']) ?></p>
        <p>Address: <?= htmlspecialchars($contact['address']) ?></p>
        <p><a href="index.php">Home</a> | <a href="about.php">About</a></p>
    </body>
</html>
