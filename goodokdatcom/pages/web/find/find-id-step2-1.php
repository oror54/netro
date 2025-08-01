<?php
$currentPath = $_SERVER['REQUEST_URI'];
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
$host = $_SERVER['HTTP_HOST'];
$basePath = '/goodokdatcom/';
define('BASE_URL', $protocol . "://" . $host . $basePath);

$beltBannerClass = 'mobile-hidden';
$mobileHeaderClass = 'mobile-hidden';
$mobileTopNavbarClass = 'mobile-hidden';
$footerClass = 'mobile-hidden';


$showBack = true;
$showMenu = false;
$showNotification = false;

include_once $_SERVER['DOCUMENT_ROOT'] . '/goodokdatcom/components/h.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/goodokdatcom/components/beltBanner.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/goodokdatcom/components/webHeader.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/goodokdatcom/components/mobileHeader.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/goodokdatcom/components/mobileTopNavbar.php'; ?>
<!-- css -->
<link rel="stylesheet" href="<?= BASE_URL ?>assets/css/pages/auth.css">
<link rel="stylesheet" href="<?= BASE_URL ?>assets/css/responsive.css">
<link rel="stylesheet" href="<?= BASE_URL ?>assets/css/modal.css">
<!--js -->
<script src="<?= BASE_URL ?>assets/js/publishing/modal.js"></script>
<script src="<?= BASE_URL ?>assets/js/publishing/validation.js"></script>
<script src="<?= BASE_URL ?>assets/js/publishing/common.js"></script>



<!-- main -->
<main class="auth-wrap find-wrap find-id-step-2">
  <div class="wraper">
    <div class="container">
      <div class="find-content">
        <div class="tit"><b>고객님의 구독닷컴 계정을 찾았습니다.</b>
          <p>아이디 확인 후 로그인해 주세요.</p>
        </div>
        <div class="uer-info">
          <div class="img">
            <div class="image"></div>
          </div>
          <div class="id">
            <p>kimbog*******</p>
          </div>
          <div class="date">
            <p>가입일</p>
            <p>2025.06.18</p>
          </div>
        </div>
        <div class="button-wrap">
          <div class="buttons col">
            <button class="login-btn" type="button" onclick="location.href='/goodokdatcom/pages/web/login/login.php'">로그인</button>
            <button class="home-btn" type="button" onclick="location.href='/goodokdatcom/pages/web/main/'">홈으로</button>
          </div>
        </div>

      </div>
    </div>
  </div>
</main>




<!-- footer -->
<?php
$footerClass = 'mobile-hidden';
include_once $_SERVER['DOCUMENT_ROOT'] . '/goodokdatcom/components/footer.php';
?>