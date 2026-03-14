<!DOCTYPE html>
<html lang="en">
<head>
    <title>Butte Strong Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ButteStrongWebsite/public/css/admin_styles.css">
</head>
<body>

<div class="admin-header">
    <h1>Butte Strong — Admin Panel</h1>
    <a href="admin.php?logout=1">Logout</a>
</div>

<div class="admin-body">

    <?php if ($success): ?>
        <p class="msg-success">Changes saved successfully.</p>
    <?php elseif ($error_msg): ?>
        <p class="msg-error">Something went wrong. Changes could not be saved.</p>
    <?php endif; ?>

    <form method="POST">
        <div class="admin-section">
            <h2>Home Page</h2>
            <div class="field">
                <label for="home_message">Home Message / Title</label>
                <input type="text" id="home_message" name="home_message" value="<?= htmlspecialchars($info['home_message']) ?>">
            </div>
        </div>

        <div class="admin-section">
            <h2>Important Links</h2>
            <div class="field">
                <label for="immigration_link">Immigration Resources URL</label>
                <input type="text" id="immigration_link" name="immigration_link" value="<?= htmlspecialchars($info['immigration_link']) ?>">
            </div>
            <div class="field">
                <label for="link_2">Resource 2 URL</label>
                <input type="text" id="link_2" name="link_2" value="<?= htmlspecialchars($info['link_2']) ?>">
            </div>
            <div class="field">
                <label for="link_3">Resource 3 URL</label>
                <input type="text" id="link_3" name="link_3" value="<?= htmlspecialchars($info['link_3']) ?>">
            </div>
        </div>

        <div class="admin-section">
            <h2>Social Media Links</h2>
            <div class="field">
                <label for="facebook_link">Facebook URL</label>
                <input type="text" id="facebook_link" name="facebook_link" value="<?= htmlspecialchars($info['facebook_link']) ?>">
            </div>
            <div class="field">
                <label for="x_link">X (Twitter) URL</label>
                <input type="text" id="x_link" name="x_link" value="<?= htmlspecialchars($info['x_link']) ?>">
            </div>
            <div class="field">
                <label for="instagram_link">Instagram URL</label>
                <input type="text" id="instagram_link" name="instagram_link" value="<?= htmlspecialchars($info['instagram_link']) ?>">
            </div>
        </div>

        <div class="admin-section">
            <h2>Contact Information</h2>
            <div class="field">
                <label for="phone">Phone Number</label>
                <input type="text" id="phone" name="phone" value="<?= htmlspecialchars($contact['phone']) ?>">
            </div>
            <div class="field">
                <label for="email">Email Address</label>
                <input type="text" id="email" name="email" value="<?= htmlspecialchars($contact['email']) ?>">
            </div>
            <div class="field">
                <label for="address">Address</label>
                <input type="text" id="address" name="address" value="<?= htmlspecialchars($contact['address']) ?>">
            </div>
        </div>

        <div class="save-bar">
            <button type="submit" name="save">Save Changes</button>
        </div>

    </form>
</div>

</body>
</html>