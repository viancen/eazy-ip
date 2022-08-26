<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Headers: Origin, Content-Type');
$data = [
    'ip' => $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'],
    'browser' => $_SERVER['HTTP_USER_AGENT'] ?? null
];
header('Content-Type: application/json; charset=utf-8');
echo json_encode($data);