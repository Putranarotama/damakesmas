<?php
define('ROOT_PATH', __DIR__);

$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';

$scriptName   = str_replace('\\', '/', $_SERVER['SCRIPT_NAME']);
$scriptAbs    = str_replace('\\', '/', $_SERVER['SCRIPT_FILENAME'] ?? '');
$rootAbs      = str_replace('\\', '/', ROOT_PATH);

$relativePath = ltrim(str_replace($rootAbs, '', $scriptAbs), '/');
$basePath     = str_replace('/' . $relativePath, '', $scriptName);
$basePath     = rtrim($basePath, '/');

define('BASE_URL', $protocol . '://' . $host . $basePath);

function asset(string $path): string {
    return BASE_URL . '/' . ltrim($path, '/');
}
function url(string $path): string {
    return BASE_URL . '/' . ltrim($path, '/');
}
function load(string $path): void {
    include ROOT_PATH . '/' . ltrim($path, '/');
}
function redirect(string $path): void {
    header('Location: ' . url($path));
    exit;
}
