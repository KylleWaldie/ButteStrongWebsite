<?php
$info = include __DIR__ . '/../data/info.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Privacy Policy</title>
        <link rel="stylesheet" href="/ButteStrongWebsite/public/css/navbar_styles.css">
        <link rel="stylesheet" href="/ButteStrongWebsite/public/css/footer_styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
        <link rel="stylesheet" href="/ButteStrongWebsite/public/css/privacy_styles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class=encompass>
            <div class="inner-wrap">    
                <?php include __DIR__ . '/../includes/header.php'; ?>

                <main class="legal-section">
                    <div class = privacy_policy>
                        <h1>Privacy Policy</h1>
                        <p><strong>Last Updated:</strong> March 2026</p>
                        <p>Butte Strong respects your privacy. This policy explains what data we collect, how we use it, and your rights.</p>
                    </div>

                    <div class="legal-section">
                        <h2>Information We Collect</h2>
                        <ul>
                            <li>Visitor IP addresses and page visits for analytics</li>
                            <li>Cookies to improve user experience</li>
                            <li>Information submitted via contact forms (email, phone)</li>
                            </ul>
                    </div>

                    <div class="legal-section">
                        <h2>How We Use Your Information</h2>
                        <ul>
                            <li>Track and improve website performance</li>
                            <li>Respond to inquiries submitted via contact forms</li>
                            <li>Comply with legal obligations</li>
                        </ul>
                    </div>
                </main>
            </div>
        <?php include __DIR__ . '/../includes/footer.php'; ?>
        </div>
    </body>
    <script src="/ButteStrongWebsite/public/js/events.js" defer></script>
</html>
