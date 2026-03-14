<?php
$contact = include __DIR__ . '/../data/contact.php';
$info = include __DIR__ . '/../data/info.php';

$success = false;
$error = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = htmlspecialchars($_POST['name'] ?? '');
    $email   = htmlspecialchars($_POST['email'] ?? '');
    $message = htmlspecialchars($_POST['message'] ?? '');

    if ($name && $email && $message) {
        $to      = $contact['email'];
        $subject = "Contact Form - Butte Strong";
        $body    = "From: $name\nEmail: $email\n\nMessage:\n$message";
        $headers = "From: $email\r\nReply-To: $email";

        if (mail($to, $subject, $body, $headers)) {
            $success = true;
        } else {
            $error = true;
        }
    } else {
        $error = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Butte Strong Contact Us</title>
        <link rel="stylesheet" href="/ButteStrongWebsite/public/css/navbar_styles.css">
        <link rel="stylesheet" href="/ButteStrongWebsite/public/css/footer_styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
        <link rel="stylesheet" href="/ButteStrongWebsite/public/css/contactpage_styles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <a href="#main-content" class="skip-link">Skip to main content</a>
        <div class="encompass">
            <div class="inner-wrap">
                <?php include __DIR__ . '/../includes/header.php'; ?>

                <main class="content" id="main-content">
                    <h1>Contact Us</h1>
                    <section aria-labelledby="contact-heading">
                        <div class="contact_phone">
                            <p>
                                Phone:
                                <a href="tel:<?= htmlspecialchars($contact['phone']) ?>">
                                    <?= htmlspecialchars($contact['phone']) ?>
                                </a>
                            </p>
                        </div>
                        <div class="contact_email">
                            <p>
                                Email:
                                <a href="mailto:<?= htmlspecialchars($contact['email']) ?>">
                                    <?= htmlspecialchars($contact['email']) ?>
                                </a>
                            </p>
                        </div>
                        <div class="contact_address">
                            <address>
                                <?= htmlspecialchars($contact['address']) ?>
                            </address>
                        </div>
                    </section>

                    <section class="contact-form-section" aria-label="Send us a message">
                        <h2>Send Us a Message</h2>

                        <?php if ($success): ?>
                            <p class="form-success">Your message has been sent. We will get back to you soon.</p>
                        <?php elseif ($error): ?>
                            <p class="form-error">Something went wrong. Please try again or contact us directly.</p>
                        <?php endif; ?>

                        <form method="POST" action="/ButteStrongWebsite/public/contact_page.php" class="contact-form">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" id="name" name="name" required placeholder="Your name"
                                    value="<?= htmlspecialchars($_POST['name'] ?? '') ?>">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" required placeholder="Your email"
                                    value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea id="message" name="message" required placeholder="Your message"><?= htmlspecialchars($_POST['message'] ?? '') ?></textarea>
                            </div>
                            <button type="submit">Send Message</button>
                        </form>
                    </section>
                </main>
            </div>
            <?php include __DIR__ . '/../includes/footer.php'; ?>
        </div>
    </body>
    <script src="/ButteStrongWebsite/public/js/events.js" defer></script>
</html>