<?php
include __DIR__ . '/../includes/track_visitors.php';
$info = include __DIR__ . '/../data/info.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Privacy Policy</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <?php include __DIR__ . '/../includes/header.php'; ?>

        <main class="content">
            <div class = privacy_policy>
                <h1>Privacy Policy</h1>
                <p>Butte Strong respects your privacy. This policy explains what data we collect, how we use it, and your rights.</p>
            </div>

            <div class = privacy_information>
                <h2>Information We Collect</h2>
                <ul>
                    <li>Visitor IP addresses and page visits for analytics</li>
                    <li>Cookies to improve user experience</li>
                    <li>Information submitted via contact forms (email, phone)</li>
                    </ul>
            </div>

            <div class = privacy_use>
                <h2>How We Use Your Information</h2>
                <ul>
                    <li>Track and improve website performance</li>
                    <li>Respond to inquiries submitted via contact forms</li>
                    <li>Comply with legal obligations</li>
                </ul>
            </div>

            <div class = privacy_cookies>
                <h2>Cookies</h2>
                <p>We use cookies to track visitors and improve user experience. You can accept or decline cookies using the banner at the bottom of the page.</p>
            </div>
        </main>

        <?php include __DIR__ . '/../includes/footer.php'; ?>
    </body>
</html>
