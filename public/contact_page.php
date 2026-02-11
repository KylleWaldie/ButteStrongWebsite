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
            <div class = contact_phone>
                <p>Phone: <?= htmlspecialchars($contact['phone']) ?></p>
            </div>
            <div class = contact_email>
                <p>Email: <?= htmlspecialchars($contact['email']) ?></p>
            </div>
            <div class = contact_address>
                <p>Address: <?= htmlspecialchars($contact['address']) ?></p>
            </div>
        </main>

        <?php include __DIR__ . '/../includes/footer.php'; ?>
    </body>
</html>
