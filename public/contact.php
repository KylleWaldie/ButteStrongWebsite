<?php
$contact = include __DIR__ . '/../data/contact.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Contacts</title>
        <nav>
            <ul>
                <li><a href="importantLinks.php">Important Links</a></li>
                <li><a href="index.php">Home</a></li>
                <li><a href="contact.php">Other</a></li>
            </ul>
        </nav>

    </head>
    <body>
        <h1>Contact Us</h1>
        <p>Phone: <?= htmlspecialchars($contact['phone']) ?></p>
        <p>Email: <?= htmlspecialchars($contact['email']) ?></p>
        <p>Address: <?= htmlspecialchars($contact['address']) ?></p>
        <p><a href="index.php">Home</a> | <a href="about.php">About</a></p>
    </body>
</html>
