<?php
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
    include __DIR__ . '/admin_login.php';
    exit;
}

// Load editable data
// Load editable data
$contact = include __DIR__ . '/../data/contact.php';
$info = include __DIR__ . '/../data/info.php';

$success = false;
$error_msg = false;

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['save'])) {
    $contact_new = [
        'phone'   => $_POST['phone'],
        'email'   => $_POST['email'],
        'address' => $_POST['address']
    ];
    $info_new = [
        'home_message'     => $_POST['home_message'],
        'immigration_link' => $_POST['immigration_link'],
        'link_2'           => $_POST['link_2'],
        'link_3'           => $_POST['link_3'],
        'facebook_link'    => $_POST['facebook_link'],
        'x_link'           => $_POST['x_link'],
        'instagram_link'   => $_POST['instagram_link'],
    ];

    $r1 = file_put_contents(__DIR__ . '/../data/contact.php', '<?php return ' . var_export($contact_new, true) . ';');
    $r2 = file_put_contents(__DIR__ . '/../data/info.php', '<?php return ' . var_export($info_new, true) . ';');
    
    if ($r1 !== false && $r2 !== false) {
        $success = true;
        $contact = $contact_new;
        $info = $info_new;
    } else {
        $error_msg = true;
    }
}

include __DIR__ . '/admin_panel.php';