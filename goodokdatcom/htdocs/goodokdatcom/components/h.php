<?php
if (!defined('BASE_URL')) {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
    $host = $_SERVER['HTTP_HOST'];
    $basePath = '/goodokdatcom/';
    define('BASE_URL', $protocol . "://" . $host . $basePath);
}
?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>구독닷컴 디자인페이지</title>
    <!-- css -->
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/common.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/xeicon.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/fonts.css">
    <!--jquery  -->
    <script src="<?= BASE_URL ?>assets/js/jquery/jquery-3.7.1.min.js"></script>
    <script src="<?= BASE_URL ?>assets/js/jquery/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/js/jquery/jquery-ui.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/js/jquery/jquery-ui.theme.min.css">
    <!--swiper  -->
    <script src="<?= BASE_URL ?>assets/js/swiper/swiper-bundle.js"></script>
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/js/swiper/swiper-bundle.css">
    <!-- modal -->
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/modal.css">
    <!-- header.js -->
    <script src="<?= BASE_URL ?>assets/js/header.js"></script>
    <!-- main.js -->
    <script src="<?= BASE_URL ?>assets/js/main.js"></script>
</head>

