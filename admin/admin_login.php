<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ButteStrongWebsite/public/css/admin_styles.css">
</head>
<body>
    <div class="login-box">
        <h2>Butte Strong Admin</h2>
        <?php if (isset($error)) echo "<p class='msg-error'>$error</p>"; ?>
        <form method="POST">
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>