<!DOCTYPE html>
<html lang="en">
<head>
    <title>Butte Strong Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ButteStrongWebsite/public/css/admin_styles.css">
    <style>
        /* ── Pantry section extras ── */
        .pantry-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 28px;
            font-size: 0.93rem;
        }
        .pantry-table th {
            background: #111;
            color: #fff;
            padding: 10px 12px;
            text-align: left;
            font-weight: 600;
        }
        .pantry-table td {
            padding: 10px 12px;
            border-bottom: 1px solid #ddd;
            vertical-align: middle;
        }
        .pantry-table tr:hover td {
            background: #f9f9f9;
        }
        .pantry-table img {
            width: 64px;
            height: 48px;
            object-fit: cover;
            border-radius: 3px;
            border: 1px solid #ddd;
        }
        .pantry-table .no-photo {
            color: #aaa;
            font-size: 0.82rem;
        }
        .btn-edit {
            background: #111;
            color: #fff;
            border: none;
            padding: 5px 12px;
            border-radius: 3px;
            cursor: pointer;
            font-size: 0.83rem;
            text-decoration: none;
            margin-right: 6px;
        }
        .btn-delete {
            background: #c0392b;
            color: #fff;
            border: none;
            padding: 5px 12px;
            border-radius: 3px;
            cursor: pointer;
            font-size: 0.83rem;
            text-decoration: none;
        }
        .btn-edit:hover   { background: #333; }
        .btn-delete:hover { background: #96281b; }

        .pantry-form {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 14px 20px;
        }
        .pantry-form .full-width {
            grid-column: 1 / -1;
        }
        .pantry-form label {
            display: block;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 4px;
            color: #333;
        }
        .pantry-form input[type="text"],
        .pantry-form input[type="number"],
        .pantry-form textarea {
            width: 100%;
            padding: 8px 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 0.92rem;
            box-sizing: border-box;
        }
        .pantry-form textarea {
            height: 70px;
            resize: vertical;
        }
        .pantry-form .hint {
            font-size: 0.78rem;
            color: #888;
            margin-top: 3px;
        }
        .pantry-form-actions {
            grid-column: 1 / -1;
            display: flex;
            gap: 10px;
            margin-top: 4px;
        }
        .btn-add {
            background: #111;
            color: #fff;
            border: none;
            padding: 9px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 0.93rem;
            font-weight: 600;
        }
        .btn-add:hover { background: #333; }
        .btn-cancel {
            background: #eee;
            color: #333;
            border: none;
            padding: 9px 16px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 0.93rem;
            text-decoration: none;
        }
        .section-subheading {
            font-size: 1rem;
            font-weight: 600;
            margin: 0 0 14px 0;
            color: #111;
            border-bottom: 1px solid #eee;
            padding-bottom: 8px;
        }
        .empty-locations {
            color: #888;
            font-size: 0.92rem;
            padding: 20px 0;
        }
    </style>
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

    <!-- ══════════════════════════════════════════════
         GENERAL SITE SETTINGS FORM
    ══════════════════════════════════════════════ -->
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

    <!-- BUTTE PANTRY LOCATIONS -->
    <div class="admin-section">
        <h2>Butte Pantry Locations</h2>

        <!-- Existing locations table -->
        <p class="section-subheading">Current Locations</p>
        <?php if (empty($pantry_locations)): ?>
            <p class="empty-locations">No locations added yet. Use the form below to add one.</p>
        <?php else: ?>
        <table class="pantry-table">
            <thead>
                <tr>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Lat / Lng</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pantry_locations as $i => $loc): ?>
                <tr>
                    <td>
                        <?php if (!empty($loc['photo'])): ?>
                            <img src="<?= htmlspecialchars($loc['photo']) ?>" alt="<?= htmlspecialchars($loc['name']) ?>">
                        <?php else: ?>
                            <span class="no-photo">No photo</span>
                        <?php endif; ?>
                    </td>
                    <td><?= htmlspecialchars($loc['name']) ?></td>
                    <td><?= htmlspecialchars($loc['address']) ?></td>
                    <td style="font-size:0.8rem;color:#666;">
                        <?= $loc['lat'] ?>, <?= $loc['lng'] ?>
                    </td>
                    <td>
                        <a class="btn-edit" href="admin.php?edit_location=<?= $i ?>">Edit</a>
                        <a class="btn-delete"
                           href="admin.php?delete_location=<?= $i ?>"
                           onclick="return confirm('Delete this location?')">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php endif; ?>

        <!-- Add / Edit form -->
        <?php
            $editing   = $edit_index !== null && isset($pantry_locations[$edit_index]);
            $form_data = $editing ? $pantry_locations[$edit_index] : ['name'=>'','address'=>'','lat'=>'','lng'=>'','notes'=>'','photo'=>''];
        ?>

        <p class="section-subheading"><?= $editing ? 'Edit Location' : 'Add New Location' ?></p>

        <form method="POST" enctype="multipart/form-data">
            <?php if ($editing): ?>
                <input type="hidden" name="edit_index" value="<?= $edit_index ?>">
            <?php endif; ?>

            <div class="pantry-form">
                <div>
                    <label for="loc_name">Location Name *</label>
                    <input type="text" id="loc_name" name="loc_name"
                           value="<?= htmlspecialchars($form_data['name']) ?>" required>
                </div>
                <div>
                    <label for="loc_address">Street Address *</label>
                    <input type="text" id="loc_address" name="loc_address"
                           value="<?= htmlspecialchars($form_data['address']) ?>" required>
                </div>
                <div>
                    <label for="loc_lat">Latitude *</label>
                    <input type="number" id="loc_lat" name="loc_lat" step="any"
                           value="<?= htmlspecialchars($form_data['lat']) ?>" required>
                    <p class="hint">Look up at <a href="https://www.latlong.net" target="_blank">latlong.net</a></p>
                </div>
                <div>
                    <label for="loc_lng">Longitude *</label>
                    <input type="number" id="loc_lng" name="loc_lng" step="any"
                           value="<?= htmlspecialchars($form_data['lng']) ?>" required>
                </div>
                <div class="full-width">
                    <label for="loc_notes">Notes (optional)</label>
                    <textarea id="loc_notes" name="loc_notes"><?= htmlspecialchars($form_data['notes']) ?></textarea>
                </div>
                <div class="full-width">
                    <label for="location_photo">Photo <?= $editing && !empty($form_data['photo']) ? '(upload a new one to replace)' : '' ?></label>
                    <input type="file" id="location_photo" name="location_photo" accept="image/*">
                    <?php if ($editing && !empty($form_data['photo'])): ?>
                        <p class="hint">Current: <img src="<?= htmlspecialchars($form_data['photo']) ?>" style="height:32px;vertical-align:middle;border-radius:2px;margin-left:4px;"></p>
                    <?php endif; ?>
                </div>
                <div class="pantry-form-actions">
                    <button type="submit"
                            name="<?= $editing ? 'update_location' : 'add_location' ?>"
                            class="btn-add">
                        <?= $editing ? 'Update Location' : 'Add Location' ?>
                    </button>
                    <?php if ($editing): ?>
                        <a href="admin.php" class="btn-cancel">Cancel</a>
                    <?php endif; ?>
                </div>
            </div>
        </form>
    </div>

</div>

</body>
</html>