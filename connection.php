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

// Neon's proxy routes connections by SNI hostname; if the PHP environment's
// libpq doesn't send SNI (common on serverless Linux builds), the endpoint
// id must be passed explicitly instead. https://neon.com/sni
$endpointId = explode('.', $host)[0];
$options = rawurlencode("endpoint=$endpointId");

$dsn = "pgsql:host=$host;port=$port;dbname=$dbname;sslmode=require;options=$options";

try {
    $con = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_SILENT,
    ]);
} catch (PDOException $e) {
    die('Database connection failed: ' . $e->getMessage());
}
