<?php
include __DIR__ . '/../includes/track_visitors.php';
$info = include __DIR__ . '/../data/info.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Terms of Service</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <?php include __DIR__ . '/../includes/header.php'; ?>

        <main class="content">
            <h1>Terms of Service</h1>
            <p>Welcome to Butte Strong. By using our website, you agree to the following terms:</p>

            <h2>Use of Website</h2>
            <ul>
                <li>Do not use the website for illegal or malicious purposes</li>
                <li>Respect the intellectual property of Butte Strong and others</li>
            </ul>

            <h2>Limitation of Liability</h2>
            <p>Butte Strong is not liable for damages resulting from the use of this website.</p>

            <h2>Changes to Terms</h2>
            <p>We may update these terms at any time. Continued use of the site constitutes acceptance of changes.</p>
        </main>

        <?php include __DIR__ . '/../includes/footer.php'; ?>
    </body>
</html>
