<?php
include __DIR__ . '/../includes/track_visitors.php';
$contact = include __DIR__ . '/../data/contact.php';
$info = include __DIR__ . '/../data/info.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Contacts</title>

    </head>

    <body>
        <?php include __DIR__ . '/../includes/header.php'; ?>

        <main class="content">
            <h1>Contact Us</h1>
            <p>Phone: <?= htmlspecialchars($contact['phone']) ?></p>
            <p>Email: <?= htmlspecialchars($contact['email']) ?></p>
            <p>Address: <?= htmlspecialchars($contact['address']) ?></p>
        </main>

        <?php include __DIR__ . '/../includes/footer.php'; ?>
    </body>
</html>
