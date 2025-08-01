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


$pageTitle = "비밀번호 변경";
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
<main class="auth-wrap find-wrap find-pw-step-2">
  <div class="wraper">
    <div class="container">
      <div class="text-wrap">
        <h2>비밀번호 재설정</h2>
      </div>
      <form action="" class="form-container">
        <div class="form-content">
          <!-- 입력폼 -->
          <div class="input-wrapper">
            <div class="input-wrap">
              <!-- 새비밀번호등록 -->
              <div class="input-item-wrapper">
                <div class="input-item">
                  <div class="title">
                    <p>새 비밀번호 등록</p>
                  </div>
                  <div class="input-box">
                    <div class="input">
                      <label for="userPw1" class="hidden">비밀번호</label>
                      <input type="password" id="userPw1" class="ipt pw" placeholder="비밀번호를 입력해 주세요.">
                      <button type="button" class="toggle-password" aria-label="비밀번호 보기">
                        <i class="ico eye-off"></i>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="input-message">
                  <div class="text">
                    <i class="xi-check-min"></i>
                    <p>10자 이상 입력</p>
                  </div>
                  <div class="text">
                    <i class="xi-check-min"></i>
                    <p>영문/숫자/특수문자(공백 제외)만 허용하며, 2개 이상 조합</p>
                  </div>
                  <div class="text">
                    <i class="xi-check-min"></i>
                    <p>동일한 숫자 3개 이상 연속 사용 불가</p>
                  </div>
                </div>
              </div>
              <!-- 새 비밀번호 확인 -->
              <div class="input-item-wrapper">
                <div class="input-item">
                  <div class="title">
                    <p>새 비밀번호 확인</p>
                  </div>
                  <div class="input-box">
                    <div class="input">
                      <label for="userPw2" class="hidden">비밀번호</label>
                      <input type="password" id="userPw2" class="ipt pw" placeholder="비밀번호를 한번 더 입력해 주세요.">
                      <button type="button" class="toggle-password" aria-label="비밀번호 보기">
                        <i class="ico eye-off"></i>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="input-message">
                  <div class="text">
                    <i class="xi-check-min"></i>
                    <p>동일한 비밀번호를 입력해 주세요.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- 버튼 -->
                <div class="form-buttons">
                  <div class="button-wrap">
                    <div class="button">
                      <button class="btn confirm" type="button" id="pwChangeBtn">확인</button>
                    </div>
                  </div>
                </div>
        </div>
      </form>
    </div>
  </div>
</main>

<!-- modal -->
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/goodokdatcom/components/modal.php'; ?>


<!-- footer -->
<?php
$footerClass = 'mobile-hidden';
include_once $_SERVER['DOCUMENT_ROOT'] . '/goodokdatcom/components/footer.php';
?>

<script>
// 비밀번호 변경 완료 모달 표시 및 확인 시 로그인 이동 (jQuery 버전)
function showPwChangeCompleteModal() {
  showModal({
    title: '',
    className: 'confirmation',
    body: '비밀번호 변경이 완료되었습니다.',
    actions: [
      {
        text: '확인',
        className: 'btn-green',
        onClick: function() {
          window.location.href = '/goodokdatcom/pages/web/login/login.php';
        }
      }
    ],
    showCloseButton: false
  });
}

$(function() {
  $('#pwChangeBtn').on('click', function() {
    showPwChangeCompleteModal();
  });
});
</script>