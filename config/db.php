<?php
$host = 'localhost'; $user = 'root'; $pass = ''; $dbname = 'resume_lab';
if (file_exists(__DIR__ . '/db.local.php')) { require __DIR__ . '/db.local.php'; }
$conn = mysqli_connect($host, $user, $pass, $dbname);
if (!$conn) { error_log(mysqli_connect_error()); http_response_code(500); exit('Database unavailable'); }
mysqli_set_charset($conn, 'utf8mb4');