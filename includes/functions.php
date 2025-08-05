<?php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'freeindia_user');
define('DB_PASS', 'secure_password_123');
define('DB_NAME', 'freeindia_jobalert');

// Create connection
try {
    $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
