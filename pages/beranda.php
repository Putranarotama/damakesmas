<?php
require_once __DIR__ . '/../config.php';
/**
 * pages/beranda.php
 * Page alias untuk Beranda — forward ke index.php
 * (Digunakan jika routing masuk lewat /pages/beranda.php)
 */
header('Location: ../index.php', true, 301);
exit;
