<?php
// Common functions
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function generate_csrf_token() {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

function verify_csrf_token($token) {
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

function get_jobs($limit = 5) {
    global $db;
    $stmt = $db->prepare("SELECT * FROM jobs ORDER BY post_date DESC LIMIT ?");
    $stmt->execute([$limit]);
    return $stmt->fetchAll();
}

function get_gk_posts($limit = 3) {
    global $db;
    $stmt = $db->prepare("SELECT * FROM general_knowledge ORDER BY created_at DESC LIMIT ?");
    $stmt->execute([$limit]);
    return $stmt->fetchAll();
}

function get_news_posts($limit = 3) {
    global $db;
    $stmt = $db->prepare("SELECT * FROM news ORDER BY publish_date DESC LIMIT ?");
    $stmt->execute([$limit]);
    return $stmt->fetchAll();
}
