<?php
$currentPath = $_SERVER['REQUEST_URI'];
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
$host = $_SERVER['HTTP_HOST'];
$basePath = '/goodokdatcom/';
define('BASE_URL', $protocol . "://" . $host . $basePath);

$beltBannerClass = 'mobile-hidden';
$mobileHeaderClass = 'mobile-hidden';
$mobileTopNavbarClass = '';    
$footerClass = 'mobile-hidden';


$pageTitle = "로그인";
$showBack = true;
$showMenu = false;
$showNotification = false;

include_once $_SERVER['DOCUMENT_ROOT'] . '/goodokdatcom/components/h.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/goodokdatcom/components/beltBanner.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/goodokdatcom/components/webHeader.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/goodokdatcom/components/mobileHeader.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/goodokdatcom/components/mobileTopNavbar.php';?>


<link rel="stylesheet" href="<?= BASE_URL ?>assets/css/pages/auth.css">
<link rel="stylesheet" href="<?= BASE_URL ?>assets/css/responsive.css">



<!-- main -->
<main class="auth-wrap">
<div class="wraper">
<div class="container">
  <div class="text-wrap">
    <h2>로그인</h2>
    <div class="text">
      <p>지금 가입하면 즉시 추가 할인!</p>
      <p>최대 <b>1만원</b> 할인 꼭 받으세요</p>
    </div>
  </div>
  <div class="button-wrap">
    <button class="btn naver">
      <i class="logo ico1"></i>
      <p>네이버로 계속하기</p>
  </button>
    <button class="btn kakao">
      <i class="logo ico2"></i>
      <p>카카오로 계속하기</p>
  </button>
  <button class="btn google">
      <i class="logo ico3"></i>
      <p>구글계정으로 계속하기</p>
  </button>
  <button class="btn goodok"  onclick="location.href='/goodokdatcom/pages/web/login/login.php'">
      <p>구독닷컴 아이디로 로그인</p>
  </button>


  <a href="/goodokdatcom/pages/web/join/user/index.php" class="join"><p>구독닷컴 회원가입하기</p></a>
  </div>
</div>
</div>
</main>

<!-- footer -->
<?php
  $footerClass = 'mobile-hidden';
include_once $_SERVER['DOCUMENT_ROOT'] . '/goodokdatcom/components/footer.php';
?>