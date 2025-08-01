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
           <p>구독닷컴 아이디로 로그인</p>
         </div>
       </div>
       <form action="" class="form-container">
         <div class="form-content">
           <!-- 입력폼 -->
           <div class="input-wrapper">
             <div class="input-wrap">
               <div class="input">
                 <label for="" class="hidden">아이디</label>
                 <input type="text" class="ipt" placeholder="아이디 입력" autocomplete="username">
               </div>
             </div>
             <div class="input-wrap">
               <div class="input">
                 <label for="" class="hidden">비밀번호</label>
                 <input type="password" class="ipt" placeholder="비밀번호 입력" autocomplete="current-password">
               </div>
             </div>
           </div>
           <!-- 버튼 -->
           <div class="form-buttons">
             <div class="button-wrap">
               <div class="button">
                 <button class="login-btn" type="button" onclick="location.href='/goodokdatcom/pages/web/main/login-main.php'">로그인</button>
               </div>
               <div class="buttons">
                 <a href="/goodokdatcom/pages/web/find/find-id-step1.php" class="find-btn"> 아이디 찾기</a>
                 <a href="/goodokdatcom/pages/web/find/find-password-step1.php" class="find-btn"> 비밀번호 찾기</a>
               </div>
             </div>
           </div>
         </div>
       </form>
     </div>
   </div>
 </main>

 <!-- footer -->
 <?php
  $footerClass = 'mobile-hidden';
  include_once $_SERVER['DOCUMENT_ROOT'] . '/goodokdatcom/components/footer.php';
  ?>