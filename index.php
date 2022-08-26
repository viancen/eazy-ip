<?php
$data = [
    'ip' => $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'],
    'browser' => get_browser()
];
header('Content-Type: application/json; charset=utf-8');
echo json_encode($data);