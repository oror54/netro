$(function () {
	const $categoryBtn = $(".category-btn");
	const $categoryPanel = $(".gdgnb_ctg_total");
	let leaveTimeout;

	// === 카테고리 열기/닫기 ===
	function openCategory() {
		$categoryPanel.addClass("active");
		$categoryBtn.addClass("active").attr("aria-expanded", "true");
	}

	function closeCategory() {
		$categoryPanel.removeClass("active");
		$categoryBtn.removeClass("active").attr("aria-expanded", "false");
	}

	$categoryBtn
		.on("mouseenter", () => {
			clearTimeout(leaveTimeout);
			openCategory();
		})
		.on("mouseleave", () => {
			leaveTimeout = setTimeout(() => {
				closeCategory();
			}, 100);
		});

	$categoryPanel
		.on("mouseenter", () => clearTimeout(leaveTimeout))
		.on("mouseleave", () => {
			leaveTimeout = setTimeout(() => {
				closeCategory();
			}, 100);
		});

	// === Depth2 메뉴 ===
	$(".gdgnb_ctg_menu").each(function () {
		const $menu = $(this);
		let depth2Timeout;

		$menu
			.add($menu.find(".gdgnb_ctg_subarea.depth2"))
			.on("mouseenter", () => {
				clearTimeout(depth2Timeout);
				$(".gdgnb_ctg_menu").not($menu).removeClass("open active").find("a").attr("aria-expanded", "false");
				$menu.addClass("open active").find("a").attr("aria-expanded", "true");
			})
			.on("mouseleave", () => {
				depth2Timeout = setTimeout(() => {
					$menu.removeClass("open active").find("a").attr("aria-expanded", "false");
				}, 150);
			});
	});

	// === Depth3 ===
	$(".gdgnb_ctg_submn").each(function () {
		const $submn = $(this);
		const $depth3 = $submn.children(".gdgnb_ctg_subarea.depth3");
		let depth3Timeout;

		if ($depth3.length) {
			$submn.addClass("has-depth3");

			$submn.on("mouseenter", () => {
				clearTimeout(depth3Timeout);
				$(".gdgnb_ctg_submn").not($submn).removeClass("active").find("a").attr("aria-expanded", "false");
				$(".gdgnb_ctg_subarea.depth3").not($depth3).removeClass("show");
				$submn.addClass("active").find("a").attr("aria-expanded", "true");
				$depth3.addClass("show");
			});

			$submn.on("mouseleave", () => {
				depth3Timeout = setTimeout(() => {
					if (!$depth3.is(":hover")) {
						$submn.removeClass("active").find("a").attr("aria-expanded", "false");
						$depth3.removeClass("show");
					}
				}, 150);
			});

			$depth3
				.on("mouseenter", () => clearTimeout(depth3Timeout))
				.on("mouseleave", () => {
					depth3Timeout = setTimeout(() => {
						if (!$submn.is(":hover")) {
							$submn.removeClass("active").find("a").attr("aria-expanded", "false");
							$depth3.removeClass("show");
						}
					}, 150);
				});
		}
	});

	// === 모바일 Depth2 클릭 토글 ===
	$(document).on("click", ".gdgnb_ctg_submn > a", function (e) {
		e.preventDefault();
		const $submn = $(this).parent();
		const $depth3 = $submn.children(".gdgnb_ctg_subarea.depth3");

		if ($depth3.length) {
			const isActive = $submn.hasClass("active");
			$(".gdgnb_ctg_submn").not($submn).removeClass("active").find("a").attr("aria-expanded", "false");
			$(".gdgnb_ctg_subarea.depth3").not($depth3).removeClass("show");

			if (isActive) {
				$submn.removeClass("active").find("a").attr("aria-expanded", "false");
				$depth3.removeClass("show");
			} else {
				$submn.addClass("active").find("a").attr("aria-expanded", "true");
				$depth3.addClass("show");
			}
		}
	});

	$(document).on("click", ".gdgnb_ctg_sublink", closeCategory);

	// === 검색 기능 ===
	$(".search-wrap form").on("submit", function (e) {
		e.preventDefault();
		const searchTerm = $(this).find("input").val().trim();
		if (searchTerm) {
			window.location.href = "/search?q=" + encodeURIComponent(searchTerm);
		}
	});

	// === 로고 클릭 ===
	$(".logo a").on("click", function (e) {
		e.preventDefault();
		window.location.href = "/";
	});

	// === 키보드 접근성 ===
	$categoryBtn.on("keydown", function (e) {
		if (e.key === "Enter" || e.key === " ") {
			e.preventDefault();
			openCategory();
		}
	});

	$(document).on("keydown", ".gdgnb_ctg_submn > a", function (e) {
		if (e.key === "Enter" || e.key === " ") {
			e.preventDefault();
			$(this).click();
		}
	});

	$('input[name="tab"]').on("change", function () {
		console.log("선택된 탭:", this.id === "tab-sub" ? "구독몰" : "기부존");
		closeCategory();
	});

	// === 모바일 헤더 스크롤 고정 기능 ===
	let mobileScrollThreshold = 50; // 모바일 헤더가 고정되기 시작하는 스크롤 위치 (더 빠른 반응)
	let isMobileHeaderFixed = false;
	let mobileScrollTimeout;

	function handleMobileHeaderScroll() {
		const $mobileHeader = $(".mobile-header");
		const $mobileTopNavi = $(".mobile-top-navi"); // 추가
		const $body = $("body");
		const scrollTop = $(window).scrollTop();
		const windowWidth = $(window).width();

		// 모바일에서만 동작
		if (windowWidth > 720) {
			return;
		}

		// 스크롤 이벤트 최적화 (throttling)
		clearTimeout(mobileScrollTimeout);
		mobileScrollTimeout = setTimeout(() => {
			// 스크롤 위치가 임계값을 넘으면 헤더 고정 (항상 보이도록)
			if (scrollTop > mobileScrollThreshold && !isMobileHeaderFixed) {
				$mobileHeader.addClass("header-fixed");
				$mobileTopNavi.addClass("fixed"); // 추가
				$body.addClass("header-fixed");
				isMobileHeaderFixed = true;
			} else if (scrollTop <= mobileScrollThreshold && isMobileHeaderFixed) {
				$mobileHeader.removeClass("header-fixed");
				$mobileTopNavi.removeClass("fixed"); // 추가
				$body.removeClass("header-fixed");
				isMobileHeaderFixed = false;
			}
		}, 10); // 10ms 지연으로 부드러운 전환
	}

	// === Bottom-bar 활성화 처리 ===
	function handleBottomBar() {
		const $bottomBar = $(".bottom-bar");
		const $body = $("body");
		const windowWidth = $(window).width();

		// 모바일에서만 bottom-bar 표시
		if (windowWidth <= 720 && $bottomBar.length > 0) {
			$bottomBar.show();
			$body.addClass("bottom-bar-active");
		} else {
			$bottomBar.hide();
			$body.removeClass("bottom-bar-active");
		}
	}

	// 초기 로드 시 bottom-bar 처리
	handleBottomBar();

	// === scroll-header 고정 기능 ===
	let scrollHeaderOffset = 102;
	let isScrollHeaderFixed = false;

	function handleScrollHeaderFix() {
		const scrollTop = $(window).scrollTop();
		const windowWidth = $(window).width();

		// 데스크탑에서만 적용
		if (windowWidth < 720) {
			$(".scroll-header").removeClass("show");
			isScrollHeaderFixed = false;
			return;
		}

		if (scrollTop > scrollHeaderOffset && !isScrollHeaderFixed) {
			$(".scroll-header").addClass("show");
			isScrollHeaderFixed = true;
		} else if (scrollTop <= scrollHeaderOffset && isScrollHeaderFixed) {
			$(".scroll-header").removeClass("show");
			isScrollHeaderFixed = false;
		}
	}

	function onScrollAll() {
		handleMobileHeaderScroll(); // 모바일에서만 동작
		handleScrollHeaderFix(); // 데스크탑 전용 고정
	}

	// 모바일 헤더 스크롤 이벤트 리스너 등록
	$(window).on("scroll", onScrollAll);

	// 윈도우 리사이즈 시 헤더 상태 초기화
	$(window).on("resize", function () {
		const windowWidth = $(window).width();

		if (windowWidth > 720) {
			$(".mobile-header").removeClass("header-fixed header-hidden");
			$("body").removeClass("header-fixed");
			isMobileHeaderFixed = false;
		}

		// 스크롤 헤더 초기화 (PC → 모바일 전환 등)
		if (windowWidth < 1050) {
			$(".scroll-header").removeClass("fixed");
			isScrollHeaderFixed = false;
		}

		// 오프셋 다시 계산
		scrollHeaderOffset = $(".scroll-header").offset()?.top || 0;

		// Bottom-bar 처리
		handleBottomBar();
	});

	// === PC 유저 드롭다운 호버 ===
var userDropdownTimer = null;

$(document).on('mouseenter', '.user-menu-wrap', function() {
  if (window.innerWidth < 1025) return;
  clearTimeout(userDropdownTimer);
  $(this).find('.user-dropdown').stop(true, true).fadeIn(120);
});
$(document).on('mouseleave', '.user-menu-wrap', function() {
  if (window.innerWidth < 1025) return;
  var $dropdown = $(this).find('.user-dropdown');
  userDropdownTimer = setTimeout(function() {
    $dropdown.stop(true, true).fadeOut(120);
  }, 200);
});
});
