<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$isLogin = isset($_SESSION['user']);
$mobileHeaderClass = isset($mobileHeaderClass) ? $mobileHeaderClass : '';
?>
<header class="mobile-header <?= $mobileHeaderClass ?>">
  <div class="header-inner">
    <div class="top-bar">
      <div class="left-wrap">
        <button class="btn-back hidden"><i class="xi-angle-left"></i></button>
      </div>
      <h1 class="logo">
        <img src="<?= BASE_URL ?>assets/images/logo-white.svg" alt="구독닷컴" />
      </h1>
      <!-- menu -->
      <div class="right-wrap">
        <ul>
          <?php if ($isLogin): ?>
            <li><a href="<?= BASE_URL ?>pages/web/login/index.php?logout=1" class="icon"> <i class="ico logout"></i></a></li>
          <?php endif; ?>
          <li><a href="#" class="icon"> <i class="ico search"></i></a></li>
          <li><a href="#" class="icon"> <i class="ico basket"></i><span class="count hidden">0</span></a></li>
        </ul>
      </div>
    </div>
    <!-- 배너 -->
    <div class="banner"></div>
    <!-- 상단메뉴바 -->
    <div class="menu-wrapper gdgnb_menu">
      <div class="swiper">
        <div class="swiper-wrapper menubar">
          <div class="swiper-slide menu_item">
            <a href="" class="menuitem_link">
              <span>구독 스토리</span>
            </a>
          </div>
          <div class="swiper-slide menu_item">
            <a href="" class="menuitem_link">
              <span>정기구독</span>
            </a>
          </div>
          <div class="swiper-slide menu_item">
            <a href="" class="menuitem_link">
              <span>기획전</span>
            </a>
          </div>
          <div class="swiper-slide menu_item">
            <a href="" class="menuitem_link">
              <span>공동구매</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>