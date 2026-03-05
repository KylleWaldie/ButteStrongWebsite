<?php
$contact = include __DIR__ . '/../data/contact.php';
$info = include __DIR__ . '/../data/info.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Butte Strong Contact Us</title>
        <link rel="stylesheet" href="/ButteStrongWebsite/public/css/navbar_styles.css">
        <link rel="stylesheet" href="/ButteStrongWebsite/public/css/footer_styles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <a href="#main-content" class="skip-link">Skip to main content</a>
        <div class="encompass">
        <?php include __DIR__ . '/../includes/header.php'; ?>

        <main class="content">
            <h1>Contact Us</h1>
            <section aria-labelledby="contact-heading">
                <div class = "contact_phone">
                    <p>
                        Phone:
                        <a href="tel:<?= htmlspecialchars($contact['phone']) ?>">
                            <?= htmlspecialchars($contact['phone']) ?>
                        </a>
                    </p>
                </div>
                <div class = "contact_email">
                    <p>
                        Email:
                        <a href="mailto:<?= htmlspecialchars($contact['email']) ?>">
                            <?= htmlspecialchars($contact['email']) ?>
                        </a>
                    </p>
                </div>
                <div class = "contact_address">
                    <address>
                        <?= htmlspecialchars($contact['address']) ?>
                    </address>
                </div>
            </section>
        </main>

        <?php include __DIR__ . '/../includes/footer.php'; ?>
        </div>
    </body>
</html>
