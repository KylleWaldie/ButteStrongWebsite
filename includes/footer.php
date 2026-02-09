<?php
$info = include __DIR__ . '/../data/info.php';
?>
<footer>
    <div class="cr">
        <p>&copy; <?= date('Y') ?> Butte Tough. All rights reserved.</p>
    </div>

    <div class="social">
        <?php if (!empty($info['facebook_link'])): ?>
            <a href="<?= htmlspecialchars($info['facebook_link']) ?>" target="_blank">Facebook</a>
        <?php endif; ?>

        <?php if (!empty($info['x_link'])): ?>
            <a href="<?= htmlspecialchars($info['x_link']) ?>" target="_blank">X</a>
        <?php endif; ?>

        <?php if (!empty($info['instagram_link'])): ?>
            <a href="<?= htmlspecialchars($info['instagram_link']) ?>" target="_blank">Instagram</a>
        <?php endif; ?>
    </div>
</footer>
