<?php
$mobileTopNavbarClass = isset($mobileTopNavbarClass) ? $mobileTopNavbarClass : '';
?>
<header class="mobile-top-navi <?= $mobileTopNavbarClass ?>">
  <div class="header-inner">
    <div class="top-bar">
      <div class="left-title">
        <?php if (!empty($showBack)): ?>
          <button class="btn-back" onclick="history.back()"><i class="xi-angle-left"></i></button>
        <?php endif; ?>
      </div>
      <div class="center-title">
        <h2><?= isset($pageTitle) ? $pageTitle : '' ?></h2>
      </div>
      <div class="right-title">
        <?php if (!empty($showMenu)): ?>
          <button class="btn-menu"><i class="xi-bars"></i></button>
        <?php endif; ?>
        <?php if (!empty($showNotification)): ?>
          <button class="btn-notification"><i class="icon bell"></i> <span class="count">0</span></button>
        <?php endif; ?>
      </div>
    </div>
  </div>
</header>