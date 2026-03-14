<?php
$info = include __DIR__ . '/../data/info.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Important Links - Butte Strong</title>
        <link rel="stylesheet" href="/ButteStrongWebsite/public/css/navbar_styles.css">
        <link rel="stylesheet" href="/ButteStrongWebsite/public/css/footer_styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
        <link rel="stylesheet" href="/ButteStrongWebsite/public/css/importantlinks_styles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>

        <div class="encompass">
            <div class="inner-wrap">
                <?php include __DIR__ . '/../includes/header.php'; ?>

                <main class="content">

                <h1>Important Links</h1>

                <section aria-labelledby="important-links-heading">

                <ul>

                    <li>
                        <a href="<?= htmlspecialchars($info['immigration_link']) ?>">Immigration Resources</a>
                    </li>

                    <li>
                        <a href="<?= htmlspecialchars($info['link_2']) ?>">Resource 2</a>
                    </li>

                    <li>
                        <a href="<?= htmlspecialchars($info['link_3']) ?>">Resource 3</a>
                    </li>

                </ul>

                </section>

                </main>
            </div>    
        <?php include __DIR__ . '/../includes/footer.php'; ?>
        </div>
    </body>
    <script src="/ButteStrongWebsite/public/js/events.js" defer></script>
</html>
