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
$contact  = include __DIR__ . '/../data/contact.php';
$info     = include __DIR__ . '/../data/info.php';

// Load pantry locations (create file with empty array if it doesn't exist yet)
$pantry_file = __DIR__ . '/../data/pantry_locations.php';
if (!file_exists($pantry_file)) {
    file_put_contents($pantry_file, '<?php return [];');
}
$pantry_locations = include $pantry_file;

$success   = false;
$error_msg = false;

// ── Save general site settings ──────────────────────────────
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
    $r2 = file_put_contents(__DIR__ . '/../data/info.php',    '<?php return ' . var_export($info_new,    true) . ';');

    if ($r1 !== false && $r2 !== false) {
        $success = true;
        $contact = $contact_new;
        $info    = $info_new;
    } else {
        $error_msg = true;
    }
}

// Add a new pantry location
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_location'])) {
    $photo_path = '';
    if (!empty($_FILES['location_photo']['name'])) {
        $upload_dir = __DIR__ . '/../public/images/pantry/';
        if (!is_dir($upload_dir)) mkdir($upload_dir, 0755, true);
        $filename   = time() . '_' . basename($_FILES['location_photo']['name']);
        $dest       = $upload_dir . $filename;
        if (move_uploaded_file($_FILES['location_photo']['tmp_name'], $dest)) {
            $photo_path = '/ButteStrongWebsite/public/images/pantry/' . $filename;
        }
    }

    $pantry_locations[] = [
        'name'    => trim($_POST['loc_name']),
        'address' => trim($_POST['loc_address']),
        'lat'     => (float) $_POST['loc_lat'],
        'lng'     => (float) $_POST['loc_lng'],
        'photo'   => $photo_path,
        'notes'   => trim($_POST['loc_notes']),
    ];

    $r = file_put_contents($pantry_file, '<?php return ' . var_export($pantry_locations, true) . ';');
    $success   = $r !== false;
    $error_msg = $r === false;
}

//─ Delete a pantry location 
if (isset($_GET['delete_location'])) {
    $idx = (int) $_GET['delete_location'];
    if (isset($pantry_locations[$idx])) {
        // Delete photo file if it exists
        if (!empty($pantry_locations[$idx]['photo'])) {
            $abs = $_SERVER['DOCUMENT_ROOT'] . $pantry_locations[$idx]['photo'];
            if (file_exists($abs)) unlink($abs);
        }
        array_splice($pantry_locations, $idx, 1);
        file_put_contents($pantry_file, '<?php return ' . var_export($pantry_locations, true) . ';');
    }
    header('Location: admin.php');
    exit;
}

// Edit/update an existing pantry location 
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_location'])) {
    $idx = (int) $_POST['edit_index'];
    if (isset($pantry_locations[$idx])) {
        $photo_path = $pantry_locations[$idx]['photo']; // keep existing photo by default

        if (!empty($_FILES['location_photo']['name'])) {
            $upload_dir = __DIR__ . '/../public/images/pantry/';
            if (!is_dir($upload_dir)) mkdir($upload_dir, 0755, true);
            $filename = time() . '_' . basename($_FILES['location_photo']['name']);
            $dest     = $upload_dir . $filename;
            if (move_uploaded_file($_FILES['location_photo']['tmp_name'], $dest)) {
                // Remove old photo
                if (!empty($photo_path) && file_exists($_SERVER['DOCUMENT_ROOT'] . $photo_path)) {
                    unlink($_SERVER['DOCUMENT_ROOT'] . $photo_path);
                }
                $photo_path = '/ButteStrongWebsite/public/images/pantry/' . $filename;
            }
        }

        $pantry_locations[$idx] = [
            'name'    => trim($_POST['loc_name']),
            'address' => trim($_POST['loc_address']),
            'lat'     => (float) $_POST['loc_lat'],
            'lng'     => (float) $_POST['loc_lng'],
            'photo'   => $photo_path,
            'notes'   => trim($_POST['loc_notes']),
        ];

        $r = file_put_contents($pantry_file, '<?php return ' . var_export($pantry_locations, true) . ';');
        $success   = $r !== false;
        $error_msg = $r === false;
    }
}

$edit_index = isset($_GET['edit_location']) ? (int) $_GET['edit_location'] : null;

include __DIR__ . '/admin_panel.php';