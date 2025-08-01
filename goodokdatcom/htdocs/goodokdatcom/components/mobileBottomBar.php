<div class="bottom-bar">
  <div class="bottom-gdgnb-menu">
    <ul class="bottom-menubar">
      <li class="menu-item home<?= strpos($currentPath, '/main/login-main.php') !== false ? ' active' : '' ?>">
        <a href="<?= BASE_URL ?>pages/web/main/login-main.php" class="menuitem-link">
          <div class="ico ico1"></div>
          <span class="txt">홈</span>
        </a>
      </li>
      <li class="menu-item category">
        <a href="" class="menuitem-link">
          <div class="ico ico2"></div>
          <span class="txt">카테고리</span>
        </a>
      </li>
      <li class="menu-item search">
        <a href="" class="menuitem-link">
          <div class="ico ico3"></div>
          <span class="txt">검색</span>
        </a>
      </li>
      <li class="menu-item my<?= strpos($currentPath, '/mypage/') !== false ? ' active' : '' ?>">
        <a href="<?= $isLogin ? BASE_URL . 'pages/web/mypage/' : BASE_URL . 'pages/web/login/' ?>" class="menuitem-link">
          <div class="ico ico4"></div>
          <span class="txt">나의구독</span>
        </a>
      </li>
    </ul>
  </div>
</div>