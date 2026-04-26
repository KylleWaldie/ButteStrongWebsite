<?php
$info = include __DIR__ . '/../data/info.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Butte Strong Home Page</title>
        <link rel="stylesheet" href="/ButteStrongWebsite/public/css/navbar_styles.css">
        <link rel="stylesheet" href="/ButteStrongWebsite/public/css/footer_styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
        <link rel="stylesheet" href="/ButteStrongWebsite/public/css/index_styles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    
    <body>
        <a href="#main-content" class="skip-link">Skip to main content</a>

        <div class=encompass>
            <div class="inner-wrap">
                <?php include __DIR__ . '/../includes/header.php'; ?>
                <main id="main-content" class="content">
                    <div class="home_image">
                        <img src="/ButteStrongWebsite/public/images/istockphoto-1502044339-1024x1024.jpg" alt="View of Butte, Montana with a historic mining gallows frame in the foreground">
                    </div>
                    <div class="welcome-message">
                    <h1><?= htmlspecialchars($info['home_message']) ?></h1> 
                    </div>
                    <div class="home-content">
                        <p><strong>If you are in danger, call emergency services at <a href="tell:911">911</a></strong></p>
                        <p>To report something to Butte Strong, text or call <a href="tel:0000000000">(000) 000-0000</a></p>
                    </div>
                    <p class="home-content">This website is for informational purposes only and is not a substitute for professional advice or emergency services. </p>
                    <p class="home-content-heading">
                        <b>Mission Statement</b>
                    </p>
                    <p class="home-content"> 
                        To organize and protect the residents of Butte by ensuring equitable access to justice,
                         safety, and resources without exception.
                    </p>
                    <p class="home-content-heading">
                        <b>Vision Statement</b>
                    </p>
                    <p class="home-content">
                        At Butte Strong neighborhood watch, every person truly belongs and feels secure, 
                        where background or identity never dictates one's access to safety, and where community-led accountability 
                        ensures our systems work for the benefit of all.
                    </p>
                    <p class="home-content-heading">
                        <b>Core Values</b>
                    </p>
                    <p class="home-content">
                        <b>Collective Protection:</b> We are a community coalition built on the simple, powerful act of neighbors
                         looking out for one another.
                    </p>
                    <p class="home-content">
                        <b>Inherent Dignity:</b> Every individual deserves respect and safety regardless of where they were born,
                         what they look like, or who they are.
                    </p>
                    <p class="home-content">    
                        <b>Equity is a Right:</b> Justice and resources are not privileges to be earned, but fundamental rights for every neighbor.
                    </p>
                    <p class="home-content">
                        <b>Systemic Accountability:</b> We don't just watch the streets; we watch the systems. We ensure that institutions meant to serve the public remain equitable and effective.
                    </p>        
                </main>
            </div>
            <?php include __DIR__ . '/../includes/footer.php'; ?>
        </div>
    </body>
    <script src="/ButteStrongWebsite/public/js/events.js" defer></script>
</html>

