<?php
$currentPath = $_SERVER['REQUEST_URI'];
$currentFile = basename(parse_url($currentPath, PHP_URL_PATH)); 
?>

<div class="side-navi-bar">
  <div class="title">
    <h3>마이페이지</h3>
  </div>
  <div class="navi-bar-inner">
    <ul class="navi-list">
      <li class="depth1">
        <div class="navi-item">
          <img src="<?= BASE_URL ?>/assets/images/icon/order-ico.svg" alt="일반주문">
          <span>일반 주문</span>
        </div>
        <ol class="depth2-list">
          <li class="depth2">  <a href="" class="navi-item">일반 주문 조회</a> </li>
          <li class="depth2"> <a href="" class="navi-item">취소 / 교환 / 반품</a></li>
        </ol>
      </li>
      <li class="depth1">
        <div class="navi-item">
          <img src="<?= BASE_URL ?>/assets/images/icon/subscription-ico.svg" alt="정기구독">
          <span>정기 구독</span>
        </div>
        <ol class="depth2-list">
          <li class="depth2"> <a href="" class="navi-item">정기구독 관리</a> </li>
          <li class="depth2"><a href="" class="navi-item">정기구독 내역</a> </li>
        </ol>
      </li>
      <li class="depth1">
        <div class="navi-item">
          <img src="<?= BASE_URL ?>/assets/images/icon/shopping-ico.svg" alt="나의쇼핑">
          <span>나의 쇼핑</span>
        </div>
        <ol class="depth2-list">
          <li class="depth2">  <a href="" class="navi-item">상품 문의</a> </li>
          <li class="depth2"> <a href="" class="navi-item">상품 후기</a></li>
          <li class="depth2"> <a href="" class="navi-item">보유 쿠폰</a></li>
          <li class="depth2"> <a href="" class="navi-item">적립금 내역</a></li>
          <li class="depth2"><a href="" class="navi-item">장바구니</a></li>
          <li class="depth2"> <a href="" class="navi-item">찜 리스트</a> </li>
        </ol>
      </li>
      <li class="depth1">
        <div class="navi-item">
          <img src="<?= BASE_URL ?>/assets/images/icon/info-ico.svg" alt="나의정보관리">
          <span>나의 정보 관리</span>
        </div>
        <ol class="depth2-list">
          <li class="depth2">
            <a href="" class="navi-item">회원정보 관리</a>
          </li>
          <li class="depth2"> <a href="" class="navi-item">배송지 관리</a></li>
          <li class="depth2"> <a href="/goodokdatcom/pages/web/mypage/myinfo/payment.php" class="navi-item <?= $currentFile === 'payment.php' ? 'act' : '' ?>">결제 수단 관리</a></li>
          <li class="depth2"> <a href="" class="navi-item">결제 비밀번호 관리</a> </li>
        </ol>
      </li>
      <li class="depth1">
        <div class="navi-item">
          <img src="<?= BASE_URL ?>/assets/images/icon/cs-ico.svg" alt="고객센터">
          <span>고객 센터</span>
        </div>
        <ol class="depth2-list">
          <li class="depth2"> <a href="" class="navi-item">1:1 문의</a></li>
          <li class="depth2"> <a href="" class="navi-item">회원 탈퇴</a></li>
        </ol>
      </li>
    </ul>
  </div>
</div>