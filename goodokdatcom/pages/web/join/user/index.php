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


  $pageTitle = "일반 회원가입";
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
 <script src="<?= BASE_URL ?>assets/js/publishing/common.js"></script>
 <script src="<?= BASE_URL ?>assets/js/publishing/validation.js"></script>
 <script src="<?= BASE_URL ?>assets/js/publishing/modal.js"></script>


 <!-- main -->
 <main class="auth-wrap join-wrap">
   <div class="wraper">
     <div class="container">
       <div class="text-wrap">
         <h2>회원가입</h2>
       </div>
       <form action="" class="form-container">
         <div class="form-content">
           <!-- 입력폼 -->
           <div class="input-wrapper">
             <div class="input-wrap">
               <!-- 아이디 -->
               <div class="input-item-wrapper">
                 <div class="input-item">
                   <div class="title"><span class="required">*</span>
                     <p>아이디</p>
                   </div>
                   <div class="input-box">
                     <div class="input">
                       <label for="userId" class="hidden">아이디</label>
                       <input type="text" id="userId" class="ipt" placeholder="아이디를 입력해 주세요.">
                     </div>
                     <button type="button" class="check-btn" data-group="doubleCheck">중복확인</button>
                   </div>
                 </div>
                 <div class="input-message">
                   <div class="text">
                     <i class="xi-check-min"></i>
                     <p>최소 6자 이상, 15자 이상의 영문 혹은 영문과 숫자를 조합</p>
                   </div>
                 </div>
               </div>
               <!-- 비밀번호 -->
               <div class="input-item-wrapper">
                 <div class="input-item">
                   <div class="title"><span class="required">*</span>
                     <p>비밀번호</p>
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
                     <p>최소 8자 이상 20자 이하 입력</p>
                   </div>
                   <div class="text">
                     <i class="xi-check-min"></i>
                     <p>영문/숫자/특수문자(공백 제외)만 허용하며, 세가지 문자 전부 조합</p>
                   </div>
                 </div>
               </div>
               <!-- 비밀번호 확인 -->
               <div class="input-item-wrapper">
                 <div class="input-item">
                   <div class="title"><span class="required">*</span>
                     <p>비밀번호 확인</p>
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
               <!-- 이메일 -->
               <div class="input-item-wrapper">
                 <div class="input-item">
                   <div class="title"><span class="required">*</span>
                     <p>이메일</p>
                   </div>
                   <div class="input-box">
                     <div class="input">
                       <label for="email" class="hidden">이메일</label>
                       <input type="text" id="email" class="ipt" placeholder="이메일 주소를 입력해 주세요.">
                     </div>
                   </div>
                 </div>
                 <div class="input-message">
                   <div class="text">
                   </div>
                 </div>
               </div>
               <!-- 휴대폰 -->
               <div class="input-item-wrapper">
                 <div class="input-item web">
                   <div class="title"><span class="required">*</span>
                     <p>휴대폰</p>
                   </div>
                   <div class="button">
                     <button type="button" class="check-btn">휴대폰 본인확인</button>
                   </div>
                 </div>
                 <div class="input-item mobile">
                   <div class="title"><span class="required">*</span>
                     <p>휴대폰 인증</p>
                   </div>
                   <div class="input-box-wrap">
                     <div class="input-box">
                       <div class="input">
                         <label for="userPhone" class="hidden">휴대폰 인증</label>
                         <input type="text" id="userPhone" class="ipt number" placeholder="휴대폰번호를 입력해 주세요.">
                       </div>
                       <button type="button" class="check-btn request">인증요청</button>
                     </div>
                     <!-- 인증확인 -->
                     <div class="input-box">
                       <div class="input code">
                         <label for="userCode" class="hidden">인증번호 확인</label>
                         <input type="text" id="userCode" class="ipt number">
                         <em class="timer">03:00</em>
                       </div>
                       <button type="button" class="check-btn confirm" disabled>인증 확인</button>
                     </div>
                   </div>
                 </div>
               </div>
               <!-- 이름 -->
               <div class="input-item-wrapper web">
                 <div class="input-item">
                   <div class="title"><span class="required">*</span>
                     <p>이름</p>
                   </div>
                   <div class="input-box">
                     <div class="input">
                       <label for="name" class="hidden">이름</label>
                       <input type="name" id="name" class="ipt" placeholder="이름을 입력해주세요." disabled>
                     </div>
                   </div>
                 </div>
               </div>
               <!-- 주소 -->
               <div class="input-item-wrap">
                 <div class="input-item web">
                   <div class="title"><span class="required">*</span>
                     <p>주소</p>
                   </div>
                   <div class="button">
                     <button type="button" class="search-btn"><i class="icon search"></i>
                       <p>주소 검색</p>
                     </button>
                   </div>
                 </div>
                 <!-- 주소입력 -->
                 <div class="input-box-wrap web">
                   <div class="input-box">
                     <div class="input">
                       <label for="postcode" class="hidden">우편번호</label>
                       <input type="postcode" id="postcode" class="ipt post" placeholder="우편번호" disabled>
                       <button type="button" class="ipt-search" aria-label="검색">
                         <i class="ico search"></i>
                       </button>
                     </div>
                   </div>
                   <div class="input-box">
                     <div class="input">
                       <label for="address1" class="hidden">주소1</label>
                       <input type="text" id="address1" class="ipt pw" placeholder="주소를 입력해주세요." disabled>
                     </div>
                   </div>
                   <div class="input-box">
                     <div class="input">
                       <label for="address2" class="hidden">상세주소</label>
                       <input type="text" id="address2" class="ipt pw" placeholder="상세주소를 입력해주세요.">
                     </div>
                   </div>
                 </div>
                 <div class="input-item mobile">
                   <div class="title"><span class="required">*</span>
                     <p>주소</p>
                   </div>
                   <div class="input-box-wrap">
                     <div class="input-box">
                       <div class="input">
                         <label for="postcode" class="hidden">우편번호</label>
                         <input type="postcode" id="postcode" class="ipt post" placeholder="도로명, 지번, 건물명 검색" disabled>
                         <button type="button" class="ipt-search" aria-label="검색">
                           <i class="ico search"></i>
                         </button>
                       </div>
                     </div>
                     <div class="input-box">
                       <div class="input">
                         <label for="address2" class="hidden">상세주소</label>
                         <input type="text" id="address2" class="ipt pw" placeholder="상세주소를 입력해주세요.">
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
               <!-- 성별  -->
               <div class="input-item-wrapper">
                 <div class="input-item">
                   <div class="title">
                     <p>성별</p>
                   </div>
                   <div class="input-box gender">
                     <div class="input">
                       <input type="radio" id="man" name="radio" checked>
                       <label for="man"> <span>남</span></label>
                     </div>
                     <div class="input">
                       <input type="radio" id="woman" name="radio">
                       <label for="woman"> <span>여</span></label>
                     </div>
                     <div class="input">
                       <input type="radio" id="none" name="radio">
                       <label for="none"> <span>선택안함</span></label>
                     </div>
                   </div>
                 </div>
               </div>
               <!-- 이용약관 -->
               <div class="agree-area">
                 <div class="agree-group check-group" data-group="terms">
                   <div class="agree-item all">
                     <div class="inp">
                       <input type="checkbox" id="allCheck">
                       <label for="allCheck">
                         <div class="text">
                           <p>전체 동의하기</p>
                         </div>
                       </label>
                     </div>
                   </div>
                   <ul class="agree-list">
                     <!-- 구독닷컴이용약관동의 -->
                     <li>
                       <div class="agree-item">
                         <div class="inp">
                           <input type="checkbox" id="check1" class="child-check">
                           <label for="check1">
                             <div class="text">
                               <p>구독닷컴 이용약관 동의</p>
                               <span class="required">(필수)</span>
                             </div>
                           </label>
                         </div>
                         <button class="btn-view" type="button" data-type="terms">
                           <span class="hidden">보기</span>
                           <i class="xi-angle-right-min"></i>
                         </button>
                       </div>
                     </li>
                     <!-- 개인정보수집및이용에 대한안내 -->
                     <li>
                       <div class="agree-item">
                         <div class="inp">
                           <input type="checkbox" id="check2" class="child-check">
                           <label for="check2">
                             <div class="text">
                               <p>개인정보 수집 및 이용에 대한 안내</p>
                               <span class="required">(필수)</span>
                             </div>
                           </label>
                         </div>
                         <button class="btn-view" type="button" data-type="collect">
                           <span class="hidden">보기</span>
                           <i class="xi-angle-right-min"></i>
                         </button>
                       </div>
                     </li>
                     <!-- 개인정보 수집 동의 -->
                     <li>
                       <div class="agree-item">
                         <div class="inp">
                           <input type="checkbox" id="check3" class="child-check">
                           <label for="check3">
                             <div class="text">
                               <p>개인정보 수집 동의</p>
                               <span>(선택)</span>
                             </div>
                           </label>
                         </div>
                         <button class="btn-view" type="button" data-type="privacy">
                           <span class="hidden">보기</span>
                           <i class="xi-angle-right-min"></i>
                         </button>
                       </div>
                     </li>
                     <!-- 마케팅 수집 동의 -->
                     <li>
                       <div class="agree-item">
                         <div class="inp">
                           <input type="checkbox" id="check4" class="child-check">
                           <label for="check4">
                             <div class="text">
                               <p>마케팅 수집 동의</p>
                               <span>(선택)</span>
                             </div>
                           </label>
                         </div>
                       </div>
                     </li>
                     <!-- 위치기반 서비스 이용약관 동의 -->
                     <li>
                       <div class="agree-item">
                         <div class="inp">
                           <input type="checkbox" id="check5" class="child-check">
                           <label for="check5">
                             <div class="text">
                               <p>위치기반 서비스 이용약관 동의</p>
                               <span>(선택)</span>
                             </div>
                           </label>
                         </div>
                       </div>
                     </li>
                   </ul>
                 </div>
               </div>
             </div>
           </div>
           <!-- 버튼 -->
           <div class="form-buttons">
             <div class="button-wrap">
               <div class="button">
                 <button class="join-btn">회원가입</button>
               </div>
             </div>
           </div>
         </div>
       </form>
     </div>
   </div>
 </main>
 <script>
   document.getElementById('userId').addEventListener('input', function() {
     const result = validateUserId(this.value);
     showValidationMessage(this, result);
   });
 </script>
 <!-- modal -->
 <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/goodokdatcom/components/modal.php'; ?>

 <!-- modal script -->
 <script>
   // 약관 타입별 파일 매핑
   const modalFileMap = {
     terms: 'terms.php',
     privacy: 'privacy.php',
     collect: 'collect.php'
   };
   // 타입별 클래스 매핑
   const modalClassMap = {
     terms: 'termsModal terms',
     privacy: 'privacyModal terms',
     collect: 'collectModal terms'
   };
   // 타입별 타이틀 매핑
   const modalTitleMap = {
     terms: '구독닷컴 이용약관',
     privacy: '개인정보 수집 동의',
     collect: '개인정보 수집 및 이용에 대한 안내'
   };

   $(function() {
     // 약관 보기 버튼 클릭 시 모달 표시 
     $('.btn-view').on('click', function() {
       const type = $(this).data('type');
       const file = modalFileMap[type];
       const className = modalClassMap[type] || '';
       const title = modalTitleMap[type] || '';
       if (file) {
         $.get(file)
           .done(function(html) {
             showModal({
               title: title,
               className: className,
               body: html,
               actions: [{
                 text: '확인',
                 className: 'btn-green'
               }]
             });
           })
           .fail(function() {
             showModal({
               title: title,
               className: className,
               body: '내용을 불러오지 못했습니다.',
               actions: [{
                 text: '확인',
                 className: 'btn-green'
               }]
             });
           });
       } else {
         showModal({
           title: title,
           className: className,
           body: '내용이 준비되지 않았습니다.',
           actions: [{
             text: '확인',
             className: 'btn-green'
           }]
         });
       }
     });

     // 아이디 중복확인 버튼 클릭 시 모달 표시
     $('.input-box .check-btn[data-group="doubleCheck"]').on('click', function() {
       const userId = $('#userId').val();
       if (!userId) {
         showDuplicateCheckModal('아이디를 입력해 주세요.', true, false); // 닫기 버튼 숨김 예시
         return;
       }

       // 실제 중복확인 로직은 서버에서 처리해야 함
       // 여기서는 예시로 사용가능한 경우만 표시
       showDuplicateCheckModal('사용가능한 아이디입니다.', true, false);
     });

     // 휴대폰 인증요청 버튼 클릭 시 모달 표시
     $('.input-box .check-btn.request').on('click', function() {
       const userPhone = $('#userPhone').val();
       if (!userPhone) {
         showDuplicateCheckModal('휴대폰번호를 입력해 주세요.', true, false);
         return;
       }

       // 인증번호 발송 로직
       showConfirmationModal('인증번호가 발송되었습니다.', false);

       // 타이머 시작
       startTimer();
     });

     // 휴대폰 인증확인 버튼 클릭 시 모달 표시
     $('.input-box .check-btn.confirm').on('click', function() {
       const userCode = $('#userCode').val();
       if (!userCode) {
         showDuplicateCheckModal('인증번호를 입력해 주세요.', true, false);
         return;
       }

       // 실제 인증 확인 로직은 서버에서 처리해야 함
       showConfirmationModal('휴대폰 인증이 완료되었습니다.', false);
       $('.timer').hide(); // 인증 확인 후 타이머 숨김
       $('.check-btn.confirm').prop('disabled', true);
     });

     // 타이머 함수
     function startTimer() {
       let timeLeft = 180; // 3분
       const timerElement = $('.timer');
       const confirmBtn = $('.check-btn.confirm');
       timerElement.show();
       confirmBtn.prop('disabled', true);
       $('.check-btn.request').prop('disabled', false);

       const timer = setInterval(function() {
         const minutes = Math.floor(timeLeft / 60);
         const seconds = timeLeft % 60;
         timerElement.text(
           (minutes < 10 ? '0' : '') + minutes + ':' +
           (seconds < 10 ? '0' : '') + seconds
         );

         if (timeLeft <= 0) {
           clearInterval(timer);
           showValidityPeriodModal();
           confirmBtn.prop('disabled', true);
           timerElement.hide();
         }
         timeLeft--;
       }, 1000);
     }

     // 인증번호 입력 시 인증확인 버튼 활성화
     $('#userCode').on('input', function() {
       const val = $(this).val();
       $('.check-btn.confirm').prop('disabled', !val);
     });

     // 입력/체크박스 이벤트 연결
     $('#userId, #userPw1, #userPw2, #email, #userPhone, #name, #postcode, #address1').on('input', function() {
       validateJoinForm();
     });
     $('#check1, #check2').on('change', function() {
       validateJoinForm();
     });
     // 페이지 로드시 초기 상태 체크
     $(document).ready(function() {
       validateJoinForm();
     });
   });
 </script>

 <!-- footer -->
 <?php
  $footerClass = 'mobile-hidden';
  include_once $_SERVER['DOCUMENT_ROOT'] . '/goodokdatcom/components/footer.php';
  ?>