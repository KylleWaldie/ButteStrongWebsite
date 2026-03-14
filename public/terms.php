<?php
$info = include __DIR__ . '/../data/info.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Terms of Service Butte Strong</title>
        <link rel="stylesheet" href="/ButteStrongWebsite/public/css/navbar_styles.css">
        <link rel="stylesheet" href="/ButteStrongWebsite/public/css/footer_styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
        <link rel="stylesheet" href="/ButteStrongWebsite/public/css/terms_styles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class=encompass>
            <div class="inner-wrap">
            <?php include __DIR__ . '/../includes/header.php'; ?>

            <main class="content">
                <h1>Terms of Service</h1>
                <p><strong>Last Updated:</strong> March 2026</p>
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
        </div>
        <?php include __DIR__ . '/../includes/footer.php'; ?>
        </div>
    </body>
    <script src="/ButteStrongWebsite/public/js/events.js" defer></script>
</html>
