<?php
$currentPath = $_SERVER['REQUEST_URI'];
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
$host = $_SERVER['HTTP_HOST'];
$basePath = '/goodokdatcom/';
define('BASE_URL', $protocol . "://" . $host . $basePath);

$beltBannerClass = 'mobile-hidden';
$mobileHeaderClass = 'mobile-hidden';
$mobileTopNavbarClass = 'mypage';
$footerClass = 'mobile-hidden';


$pageTitle = "마이페이지";
$showBack = false;
$showMenu = false;
$showNotification = true;

include_once $_SERVER['DOCUMENT_ROOT'] . '/goodokdatcom/components/h.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/goodokdatcom/components/beltBanner.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/goodokdatcom/components/webHeader.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/goodokdatcom/components/mobileHeader.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/goodokdatcom/components/mobileTopNavbar.php'; ?>

<link rel="stylesheet" href="<?= BASE_URL ?>assets/css/pages/mypage.css">
<link rel="stylesheet" href="<?= BASE_URL ?>assets/css/responsive.css">



<!-- main -->
<main class="mypage">
  <section class="user">
    <div class="wraper">
      <div class="column">
        <div class="between">
          <div class="name">
            <h2>정민석</h2>
            <p>님</p>
          </div>
          <div class="buttons">
            <button class="round-btn">
              <p>정기구독 신청하기</p><i class="xi-angle-right-min"></i>
            </button>
            <button class="round-btn">
              <p>멤버쉽 가입하기</p><i class="xi-angle-right-min"></i>
            </button>
          </div>
        </div>
        <div class="card-wrap">
          <!-- 카드(총 보유쿠폰) -->
          <div class="card">
            <div class="content">
              <div class="title">
                <p>보유쿠폰</p>
              </div>
              <div class="inner">
                <div class="img coupon"></div>
                <div class="number">
                  <b>1</b>
                  <p>개</p>
                </div>
              </div>
            </div>
          </div>
          <!-- 카드 (보유 씨앗 수)-->
          <div class="card">
            <div class="content">
              <div class="title">
                <p>보유 씨앗 수</p>
              </div>
              <div class="inner">
                <div class="img seed"></div>
                <div class="number">
                  <b>1</b>
                  <p>개</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="wraper">
    <section class="mypage-list">
      <!-- 일반주문 -->
      <div class="list">
        <div class="tit">
          <img src="<?= BASE_URL ?>assets/images/icon/order-ico.svg" alt="일반주문">
          <p>일반 주문</p>
        </div>
        <ul>
          <li><a href="#">일반 주문 조회</a></li>
          <li><a href="#">쥐소 / 교환 / 반품</a></li>
        </ul>
      </div>
      <!-- 정기구독 -->
      <div class="list">
        <div class="tit">
          <img src="<?= BASE_URL ?>assets/images/icon/subscription-ico.svg" alt="정기구독">
          <p>정기 구독</p>
        </div>
        <ul>
          <li class="sub-list">
            <div class="accordion active">
              <a href="#">구독 현황</a>
              <i class="xi-angle-up-min"></i>
            </div>
            <div class="panel" style="display: block;">
              <div class="items-wrap">
                <button type="button" class="item"><p></p>식품박스<span>(18)</span></button>
                <button type="button" class="item"><p></p>유아박스 <span>(10)</span></button>
                <button type="button" class="item act"><p>생활박스</p><span>(1)</span> </button>
                <button type="button" class="item" ><p>건강박스</p> <span>(10)</span></button>
              </div>
            </div>
          </li>
          <li><a href="#">구독 정보 조회</a></li>
        </ul>
      </div>
      <!-- 나의 쇼핑 -->
      <div class="list">
        <div class="tit">
          <img src="<?= BASE_URL ?>assets/images/icon/shopping-ico.svg" alt="나의 쇼핑">
          <p>나의 쇼핑</p>
        </div>
        <ul>
          <li><a href="#">상품 문의</a></li>
          <li><a href="#">상품 후기</a></li>
          <li><a href="#">보유 쿠폰</a></li>
          <li><a href="#">적립금 내역</a></li>
          <li><a href="#">찜 리스트</a></li>
        </ul>
      </div>
      <!-- 나의 정보 관리 -->
      <div class="list">
        <div class="tit">
          <img src="<?= BASE_URL ?>assets/images/icon/info-ico.svg" alt="정보 관리">
          <p>나의 정보 관리</p>
        </div>
        <ul>
          <li><a href="#">회원정보 관리</a></li>
          <li><a href="#">배송지 관리</a></li>
          <li><a href="/goodokdatcom/pages/web/mypage/myinfo/payment.php">결제 수단 관리</a></li>
          <li><a href="#">결제 비밀번호 관리</a></li>
        </ul>
      </div>
      <!-- 고객센터 -->
      <div class="list">
        <div class="tit">
          <img src="<?= BASE_URL ?>assets/images/icon/cs-ico.svg" alt="고객센터">
          <p>고객센터</p>
        </div>
        <ul>
          <li><a href="#">1:1 문의</a></li>
          <li><a href="#">회원 탈퇴</a></li>
        </ul>
      </div>

    </section>
    <a href="<?= BASE_URL ?>pages/web/login/index.php?logout=1" class="logout">로그아웃</a>
  </div>
</main>
<script>
  // 
  $(function() {
    // 정기구독보기
    $(".items-wrap .item").on("click", function() {
      $(this).siblings().removeClass("act");
      $(this).addClass("act");
    });

    // Accordion for subscription list
    $('.list .accordion').on('click', function(e) {
      e.preventDefault();
      var $panel = $(this).next('.panel');
      var $icon = $(this).find('i');

      $panel.slideToggle();
      if ($icon.hasClass('xi-angle-down-min')) {
        $icon.removeClass('xi-angle-down-min').addClass('xi-angle-up-min');
      } else {
        $icon.removeClass('xi-angle-up-min').addClass('xi-angle-down-min');
      }
    });
  });
</script>
<!-- footer -->
<?php
$footerClass = 'mobile-hidden';
include_once $_SERVER['DOCUMENT_ROOT'] . '/goodokdatcom/components/footer.php';
?>
<!-- bottom-bar -->
<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/goodokdatcom/components/mobileBottomBar.php';
?>