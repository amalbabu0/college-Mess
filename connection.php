<?php
require_once __DIR__ . '/db_compat.php';

$databaseUrl = getenv('DATABASE_URL');
if (!$databaseUrl) {
    die('DATABASE_URL is not set');
}

$parts = parse_url($databaseUrl);
$host = $parts['host'];
$port = $parts['port'] ?? 5432;
$dbname = ltrim($parts['path'], '/');
$user = $parts['user'];
$pass = $parts['pass'];

$dsn = "pgsql:host=$host;port=$port;dbname=$dbname;sslmode=require";

try {
    $con = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_SILENT,
    ]);
} catch (PDOException $e) {
    die('Database connection failed: ' . $e->getMessage());
}
