<?php
session_start();

$visitorFile = __DIR__ . '/../data/visitors.csv';
$pageViewsFile = __DIR__ . '/../data/pageviews.csv';

// Assign unique visitor ID
if (!isset($_COOKIE['visitor_id'])) {
    $visitorId = bin2hex(random_bytes(16));
    setcookie('visitor_id', $visitorId, time() + 60*60*24*365, '/'); // 1 year
    $ip = $_SERVER['REMOTE_ADDR'];
    $time = date('Y-m-d H:i:s');
    file_put_contents($visitorFile, "$time,$visitorId,$ip\n", FILE_APPEND);
} else {
    $visitorId = $_COOKIE['visitor_id'];
}

// Log page view
$page = basename($_SERVER['PHP_SELF']);
$time = date('Y-m-d H:i:s');
file_put_contents($pageViewsFile, "$time,$visitorId,$page\n", FILE_APPEND);

?>