<?php
// --- Simple password protection ---
$admin_password = 'ChangeThisPassword!';

session_start();

// Handle login
if (isset($_POST['password'])) {
    if ($_POST['password'] === $admin_password) {
        $_SESSION['logged_in'] = true;
    } else {
        $error = "Wrong password";
    }
}

// Logout
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: admin.php');
    exit;
}

// Redirect if not logged in
if (!isset($_SESSION['logged_in'])) {
    echo '<h2>Admin Login</h2>';
    if (isset($error)) echo "<p style='color:red;'>$error</p>";
    echo '<form method="POST">
            Password: <input type="password" name="password">
            <button type="submit">Login</button>
          </form>';
    exit;
}

// Load editable data
$contact = include __DIR__ . '/data/contact.php';
$info = include __DIR__ . '/data/info.php';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['save'])) {
    $contact_new = [
        'phone' => $_POST['phone'],
        'email' => $_POST['email'],
        'address' => $_POST['address']
    ];
    file_put_contents(__DIR__ . '/data/contact.php', '<?php return ' . var_export($contact_new, true) . ';');

    $info_new = [
        'home_message' => $_POST['home_message'],
        'about_text' => $_POST['about_text']
    ];
    file_put_contents(__DIR__ . '/data/info.php', '<?php return ' . var_export($info_new, true) . ';');

    echo "<p style='color:green;'>Data saved successfully!</p>";
}
?>

<h1>Admin Panel</h1>
<p><a href="admin.php?logout=1">Logout</a></p>

<form method="POST">
    <h2>Home Page</h2>
    <label>Home Message: <input name="home_message" value="<?= htmlspecialchars($info['home_message']) ?>" style="width:100%"></label>
    
    <h2>About Page</h2>
    <label>About Text: <textarea name="about_text" style="width:100%;height:100px;"><?= htmlspecialchars($info['immigration_link']) ?></textarea></label>

    <h2>Contact Page</h2>
    <label>Phone: <input name="phone" value="<?= htmlspecialchars($contact['phone']) ?>" style="width:100%"></label><br>
    <label>Email: <input name="email" value="<?= htmlspecialchars($contact['email']) ?>" style="width:100%"></label><br>
    <label>Address: <input name="address" value="<?= htmlspecialchars($contact['address']) ?>" style="width:100%"></label>

    <br><br>
    <button type="submit" name="save">Save Changes</button>
</form>
