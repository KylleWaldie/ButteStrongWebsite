<?php
// Loads locations saved by the admin panel
$pantry_file = __DIR__ . '/../data/pantry_locations.php';
$locations   = file_exists($pantry_file) ? include $pantry_file : [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Butte Pantry Locations – Butte Strong</title>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="/ButteStrongWebsite/public/css/navbar_styles.css" />
    <link rel="stylesheet" href="/ButteStrongWebsite/public/css/footer_styles.css">
    <link rel="stylesheet" href="/ButteStrongWebsite/public/css/pantry_box_styles.css">
</head>
<body>
<div class="encompass">
    <div class="inner-wrap">

        <?php include __DIR__ . '/../includes/header.php'; ?>

        <main class="content" id="main-content">
            <div class="pantry-page">

                <div class="pantry-header">
                    <h1>Butte Pantry Locations</h1>
                    <p>Find a free community pantry box near you. Take what you need, leave what you can. All boxes are open to everyone — no questions asked.</p>
                </div>

                <div class="pantry-banner">
                    <i class="fa-solid fa-box-open"></i>
                    <p>
                        <strong>How it works</strong>
                        Each box is stocked by community volunteers. If you'd like to donate non-perishable food items, simply visit any location and place items inside the box.
                    </p>
                </div>

                <div id="pantry-map"></div>

                <div class="pantry-grid">
                    <?php if (empty($locations)): ?>
                        <div class="pantry-empty">
                            <i class="fa-solid fa-map-pin" style="font-size:2rem;display:block;margin-bottom:12px;color:#ccc;"></i>
                            Locations coming soon. Check back later!
                        </div>
                    <?php else: ?>
                        <?php foreach ($locations as $i => $loc): ?>
                        <div class="pantry-card" data-index="<?= $i ?>">
                            <?php if (!empty($loc['photo']) && file_exists($_SERVER['DOCUMENT_ROOT'] . $loc['photo'])): ?>
                                <img src="<?= htmlspecialchars($loc['photo']) ?>"
                                     alt="Photo of <?= htmlspecialchars($loc['name']) ?> pantry box"
                                     class="pantry-card-img">
                            <?php else: ?>
                                <div class="pantry-card-img-placeholder">
                                    <i class="fa-solid fa-image"></i>
                                    Photo coming soon
                                </div>
                            <?php endif; ?>
                            <div class="pantry-card-body">
                                <h2><?= htmlspecialchars($loc['name']) ?></h2>
                                <p class="pantry-card-address">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <?= htmlspecialchars($loc['address']) ?>
                                </p>
                                <?php if (!empty($loc['notes'])): ?>
                                    <p class="pantry-card-notes"><?= htmlspecialchars($loc['notes']) ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>

            </div>
        </main>
    </div>
        <?php include __DIR__ . '/../includes/footer.php'; ?>
</div>

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script>
    const locations = <?= json_encode(array_values($locations)) ?>;

    const map = L.map('pantry-map').setView([46.0038, -112.5348], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        maxZoom: 19
    }).addTo(map);

    const blackIcon = L.divIcon({
        className: '',
        html: `<div style="width:14px;height:14px;background:#111;border:2px solid #fff;border-radius:50%;box-shadow:0 0 0 2px #111;"></div>`,
        iconSize: [14, 14],
        iconAnchor: [7, 7],
        popupAnchor: [0, -10]
    });

    const markers = locations.map((loc, i) => {
        const marker = L.marker([loc.lat, loc.lng], { icon: blackIcon }).addTo(map);
        marker.bindPopup(`
            <strong style="font-family:Georgia,serif;font-size:1rem;">${loc.name}</strong><br>
            <span style="font-size:0.85rem;color:#555;">${loc.address}</span>
        `);
        return marker;
    });

    document.querySelectorAll('.pantry-card').forEach((card, i) => {
        card.addEventListener('click', () => {
            map.setView([locations[i].lat, locations[i].lng], 16);
            markers[i].openPopup();
            document.getElementById('pantry-map').scrollIntoView({ behavior: 'smooth' });
        });
    });

    if (locations.length > 0) {
        map.fitBounds(locations.map(l => [l.lat, l.lng]), { padding: [40, 40], maxZoom: 15 });
    }
</script>

<script src="/ButteStrongWebsite/public/js/events.js" defer></script>
</body>
</html>