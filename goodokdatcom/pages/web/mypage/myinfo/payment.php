<?php
$currentPath = $_SERVER['REQUEST_URI'];
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
$host = $_SERVER['HTTP_HOST'];
$basePath = '/goodokdatcom/';
define('BASE_URL', $protocol . "://" . $host . $basePath);

$paymentData = include $_SERVER['DOCUMENT_ROOT'] . '/goodokdatcom/data/user/payment.php';
$paymentMethods = $paymentData;

$beltBannerClass = 'mobile-hidden';
$mobileHeaderClass = 'mobile-hidden';
$mobileTopNavbarClass = 'left';
$footerClass = 'mobile-hidden';


$pageTitle = "결제수단 관리";
$showBack = true;
$showMenu = false;
$showNotification = false;

include_once $_SERVER['DOCUMENT_ROOT'] . '/goodokdatcom/components/h.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/goodokdatcom/components/beltBanner.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/goodokdatcom/components/webHeader.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/goodokdatcom/components/mobileHeader.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/goodokdatcom/components/mobileTopNavbar.php'; ?>

<link rel="stylesheet" href="<?= BASE_URL ?>assets/css/pages/mypage.css">
<link rel="stylesheet" href="<?= BASE_URL ?>assets/css/responsive.css">

<!-- main -->
<main class="mypage">
  <section class="myinfo">
    <!-- 사이드 네비게이션 -->
    <div class="side-navi">
      <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/goodokdatcom/pages/web/mypage/mySideBar.php'; ?>
    </div>
    <div class="wraper">
      <div class="contain">
        <!-- 메인 콘텐츠 영역 -->
        <div class="main-content">
          <div class="title">
            <div class="titl">
              <h3>결제 수단 관리</h3>
            </div>
            <div class="button-wrap">
              <button class="delete-btn" <?= empty($paymentMethods) ? ' disabled' : '' ?>>
                <div class="icon"> <i class="xi-check-min"></i></div>
                선택 항목 삭제
              </button>
            </div>
          </div>

          <div class="payment-content">
            <?php if (empty($paymentMethods)) : ?>
              <!-- 결제 수단 없을 때 -->
              <div class="empty-state">
                <i class="empty-icon"></i>
                <div class="empty-text">
                  <p>등록된 결제 수단이 없습니다.</p>
                  <p>결제 수단을 추가해 주세요.</p>
                </div>
              </div>
            <?php else : ?>
              <!-- 결제 수단 있을 때 -->
              <div class="card-list">
                <div class="card-header">
                  <p class="tit">카드</p>
                  <span class="number"><?= count($paymentMethods) ?>개</span>
                </div>

                <div class="card-wrap">
                  <div class="cards">
                    <?php foreach ($paymentMethods as $card) : ?>
                      <label class="card-item<?= $card['isDefault'] ? ' default' : '' ?>">
                        <div class="item-wrap">
                          <input type="checkbox" class="card-select">
                          <span class="checkmark"><i class="xi-check-min"></i></span>
                          <div class="card-info">
                            <div class="card-thumb">
                              <img src="<?= $card['image'] ?: BASE_URL . 'assets/images/user/payment/card/row-placeholder.png' ?>" alt="<?= $card['bank'] ?>">
                            </div>
                            <div class="card-text">
                              <div class="card-bank <?= $card['isDefault'] ? '' : 'no-badge' ?>">
                                <p title="<?= $card['bank'] ?>"><?= $card['bank'] ?></p>
                                <?php if ($card['isDefault']): ?>
                                  <span class="primary-badge">주거래</span>
                                <?php endif; ?>
                              </div>
                              <span class="card-type hidden"><?= $card['type'] ?></span>
                              <span class="card-number"><?= maskCardNumber($card['cardNumber']) ?></span>
                            </div>
                          </div>
                          <div class="card-actions">
                            <?php if (!$card['isDefault']) : ?>
                              <button class="set-default hidden">기본</button>
                            <?php endif; ?>
                            <button class="edit-btn">수정</button>
                            <button class="delete-btn">삭제</button>
                          </div>
                          <!-- 모바일 플로팅 메뉴 -->
                          <div class="more-wrap">
                            <button class="menu-btn m-show" type="button">
                              <i class="xi-ellipsis-h"></i>
                            </button>
                            <div class="floating-menu m-show">
                              <button class="edit-btn">수정</button>
                              <button class="delete-btn">삭제</button>
                            </div>
                          </div>
                        </div>
                      </label>
                    <?php endforeach; ?>
                  </div>
                </div>

                <button class="add-btn">
                  <div class="icon"><i class="xi-plus-min"></i></div>
                  <p>결제수단 추가</p>
                </button>
              </div>
            <?php endif; ?>
          </div>

        </div>
      </div>
    </div>
  </section>
</main>
<script>
  $(document).ready(function() {
    $(document).on('click', '.menu-btn', function(e) {
      e.stopPropagation();
      const menu = $(this).siblings('.floating-menu');
      $('.floating-menu').not(menu).removeClass('active');
      menu.toggleClass('active');
    });

    $(document).on('click', function(e) {
      if (!$(e.target).closest('.card-item').length) {
        $('.floating-menu').removeClass('active');
      }
    });

    $(window).on('resize', function() {
      if ($(window).width() > 768) {
        $('.floating-menu').removeClass('active');
      }
    });
  });
</script>
<!-- footer -->
<?php
$footerClass = 'mobile-hidden';
include_once $_SERVER['DOCUMENT_ROOT'] . '/goodokdatcom/components/footer.php';
?>