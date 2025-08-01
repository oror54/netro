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


$pageTitle = "비밀번호 찾기";
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
<main class="auth-wrap find-wrap">
  <div class="wraper">
    <div class="container">
      <div class="text-wrap">
        <h2>비밀번호 찾기</h2>
      </div>
      <div class="tabs-container">
        <div class="nav-container">
          <nav class="tabs-nav">
            <div class="nav-item act" data-tab="tab1" data-modal-type="phone-change">휴대폰 인증</div>
            <div class="nav-item" data-tab="tab2" data-modal-type="email-change">이메일 인증</div>
          </nav>
        </div>
        <div class="tabs-contents">
          <!-- 휴대폰 인증 탭 내용 -->
          <div class="tabs-content" data-tab-act="tab1" style="display:none;">
            <form action="" class="form-container">
              <div class="form-content">
                <!-- 입력폼 -->
                <div class="input-wrapper">
                  <div class="input-wrap">
                    <!-- 이름 -->
                    <div class="input-item-wrapper">
                      <div class="input-item">
                        <div class="title">
                          <p>이름</p>
                        </div>
                        <div class="input-box">
                          <div class="input">
                            <label for="name" class="hidden">이름</label>
                            <input type="text" id="name" class="ipt" placeholder="이름을 입력해 주세요.">
                          </div>
                        </div>
                      </div>
                      <div class="input-message">
                        <div class="text">
                          <i class="xi-check-min"></i>
                          <p>가입 시 등록한 이름을 입력해 주세요.</p>
                        </div>
                      </div>
                    </div>

                    <!-- 휴대폰 -->
                    <div class="input-item-wrapper">
                        <div class="input-item">
                        <div class="title">
                          <p>휴대폰</p>
                        </div>
                       <div class="button">
                          <button type="button" class="check-btn">휴대폰 본인확인</button>
                        </div>
                      </div>
                    </div>

                    <!-- 휴대폰 인증확인 -->
                    <!-- <div class="input-item-wrapper">
                      <div class="input-item">
                        <div class="title">
                          <p>인증확인</p>
                        </div>
                        <div class="input-box-wrap">
                          <div class="input-box">
                            <div class="input code">
                              <label for="userCode" class="hidden">인증번호 확인</label>
                              <input type="text" id="userCode" class="ipt number">
                              <em class="timer">03:00</em>
                            </div>
                            <button type="button" class="check-btn resent" disabled>재발송</button>
                          </div>
                          <div class="input-message hidden">
                            <div class="text">
                              <i class="xi-check-min hidden"></i>
                              <p>인증번호를 입력해주세요</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div> -->

                  </div>
                </div>
                <!-- 버튼 -->
                <div class="form-buttons">
                  <div class="button-wrap">
                    <div class="button">
                      <button class="btn confirm" type="button" onclick="location.href='/goodokdatcom/pages/web/find/find-password-step2-1.php'">확인</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <!-- 이메일 인증 탭 내용 -->
          <div class="tabs-content" data-tab-act="tab2" style="display:none;">
            <form action="" class="form-container">
              <div class="form-content">
                <div class="input-wrapper">
                  <div class="input-wrap">
                    <!-- 이름 -->
                    <div class="input-item-wrapper">
                      <div class="input-item">
                        <div class="title">
                          <p>이름</p>
                        </div>
                        <div class="input-box">
                          <div class="input">
                            <label for="name" class="hidden">이름</label>
                            <input type="text" id="name" class="ipt" placeholder="이름을 입력해 주세요.">
                          </div>
                        </div>
                      </div>
                      <div class="input-message">
                        <div class="text">
                          <i class="xi-check-min"></i>
                          <p>가입 시 등록한 이름을 입력해 주세요.</p>
                        </div>
                        <div class="text">
                          <i class="xi-check-min"></i>
                          <p>올바른 이메일 형식을 입력해 주세요.</p>
                        </div>
                      </div>
                    </div>
                    <!-- 이메일 -->
                    <div class="input-item-wrapper">
                      <div class="input-item">
                        <div class="title">
                          <p>이메일</p>
                        </div>
                        <div class="input-box">
                          <div class="input">
                            <label for="userEmail" class="hidden">이메일</label>
                            <input type="email" id="userEmail" class="ipt" placeholder="이메일을 입력해 주세요.">
                          </div>
                        </div>
                      </div>
                      <div class="input-message">
                        <div class="text">
                          <i class="xi-check-min"></i>
                          <p>가입 시 등록한 이메일을 입력해 주세요.</p>
                        </div>
                        <div class="text">
                          <i class="xi-check-min"></i>
                          <p>올바른 이메일 형식을 입력해 주세요.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- 버튼 -->
                <div class="form-buttons">
                  <div class="button-wrap">
                    <div class="button">
                      <button class="btn confirm" id="emailVerifyBtn" type="button" onclick="location.href='/goodokdatcom/pages/web/find/find-password-step2-2.php'">확인</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
</main>
<!-- modal -->
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/goodokdatcom/components/modal.php'; ?>

<script>
  // ===== 유효성 검사 함수 (전역 선언) =====
  function isValidName(name) {
    return name.trim().length > 0;
  }

  function isValidPhone(phone) {
    return /^(010-\d{4}-\d{4}|\d{11})$/.test(phone);
  }

  function isValidCode(code) {
    return /^\d{6}$/.test(code);
  }

  $(function() {
    $('.input-box .delete').on('click', function(e) {
      e.preventDefault();
      $(this).siblings('.ipt').val('').focus();
    });

    // 입력 이벤트로 인증번호 받기 버튼 활성화
    $('#name, #userPhone').on('input', function() {
      const name = $('#name').val();
      const phone = $('#userPhone').val();
      $('#phoneVerifyBtn').prop('disabled', !(isValidName(name) && isValidPhone(phone)));
    });
    // 인증번호 입력 시 확인 버튼 활성화 (1자리 이상 숫자 입력 시 활성화)
    $('#userCode').on('input', function() {
      const code = $(this).val();
      // 숫자 1자리 이상이면 활성화, 아니면 비활성화
      $('#phoneVerifyBtn.confirm').prop('disabled', !(code.length > 0 && /^\d+$/.test(code)));
    });
    // 인증번호 받기/확인 버튼 동작 (모달 포함)
    $('#phoneVerifyBtn').on('click', function() {
      var $btn = $(this);
      var phoneVal = $('#userPhone').val();
      var codeInput = $('#userCode');
      if ($btn.hasClass('request')) {
        if (!isValidPhone(phoneVal)) {
          alert('올바른 휴대폰 번호를 입력해 주세요.');
          return;
        }
        // 인증번호 발송 모달 띄우기
        showConfirmationModal(
          '인증번호가 발송되었습니다.<br>3분 안에 인증번호를 입력해 주세요.<br><br>카카오톡이 설치된 경우<br>카카오 알림톡으로 발송됩니다.',
          false, 'code'
        );
        $btn.removeClass('request').addClass('confirm').text('확인').prop('disabled', true);
        codeInput.prop('disabled', false).focus();
      } else if ($btn.hasClass('confirm')) {
        var codeVal = codeInput.val();
      }
    });
    // 이메일 인증 탭 클릭 시 모달 표시
    $('.tabs-nav .nav-item[data-modal-type="email-change"]').on('click', function(e) {
      e.preventDefault();
      if ($(this).hasClass('act')) return;

      // 취소 버튼만 있는 모달 표시 (닫기 X 버튼 숨김)
      showModal({
        title: '',
        className: 'confirmation select',
        body: '이메일 인증 화면으로 이동하시겠습니까?<br>입력하신 휴대폰 인증 정보는 초기화됩니다.',
        actions: [
          { text: '취소', className: 'btn-gray cancel-btn' },
          { text: '확인', className: 'btn-green confirm-btn', onClick: function() {
            // 탭 전환 및 폼 초기화
            $('.tabs-nav .nav-item').removeClass('act');
            $('.tabs-nav .nav-item[data-tab="tab2"]').addClass('act');
            $('.tabs-content').hide();
            $('.tabs-content[data-tab-act="tab2"]').show();
            $('#name').val('');
            $('#userPhone').val('');
            $('#userCode').val('');
            $('#phoneVerifyBtn').prop('disabled', true).removeClass('confirm').addClass('request').text('인증번호 받기');
          }}
        ],
        showCloseButton: false
      });
    });

    // 휴대폰 인증 탭 클릭 시 모달 표시
    $('.tabs-nav .nav-item[data-modal-type="phone-change"]').on('click', function(e) {
      e.preventDefault();
      if ($(this).hasClass('act')) return;

      showModal({
        title: '',
        className: 'confirmation select',
        body: '휴대폰 인증 화면으로 이동하시겠습니까?<br>입력하신 이메일 인증 정보는 초기화됩니다.',
        actions: [
          { text: '취소', className: 'btn-gray cancel-btn' },
          { text: '확인', className: 'btn-green confirm-btn', onClick: function() {
            $('.tabs-nav .nav-item').removeClass('act');
            $('.tabs-nav .nav-item[data-tab="tab1"]').addClass('act');
            $('.tabs-content').hide();
            $('.tabs-content[data-tab-act="tab1"]').show();
            // 이메일 인증 폼 초기화
            $('#name').val('');
            $('#userEmail').val('');
          }}
        ],
        showCloseButton: false
      });
    });
  });

  // // 탭 tab
$(function () {
	$(".tabs-nav .nav-item").on("click", function (e) {
		// 이메일/휴대폰 인증 탭 클릭 시, 탭 전환 막고 모달만 뜨게 함
		if ($(this).is('[data-modal-type="email-change"]') || $(this).is('[data-modal-type="phone-change"]')) {
			return;
		}
		var tab = $(this).data("tab");
		$(".tabs-nav .nav-item").removeClass("act");
		$(this).addClass("act");
		$(".tabs-content").hide();
		$('.tabs-content[data-tab-act="' + tab + '"]').show();
	});
	// 페이지 로드 시 첫 번째 탭만 보이기
	$(".tabs-content").hide();
	$('.tabs-content[data-tab-act="tab1"]').show();
});

</script>


<!-- footer -->
<?php
$footerClass = 'mobile-hidden';
include_once $_SERVER['DOCUMENT_ROOT'] . '/goodokdatcom/components/footer.php';
?>