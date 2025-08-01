$(function () {
	// 체크박스
	$(".check-group").each(function () {
		const $group = $(this);
		const $allCheck = $group.find('.all input[type="checkbox"]');
		const $childChecks = $group.find(".child-check");

		// 전체 체크 클릭 시 자식 전부 제어
		$allCheck.on("change", function () {
			const isChecked = $(this).is(":checked");
			$childChecks.prop("checked", isChecked);
		});

		// 자식 체크 클릭 시 전체 체크 상태 동기화
		$childChecks.on("change", function () {
			const total = $childChecks.length;
			const checked = $childChecks.filter(":checked").length;
			$allCheck.prop("checked", total === checked);
		});
	});

	// 비밀번호 보기
	// 비밀번호 보기 토글 (jQuery)
	$(".toggle-password").on("click", function () {
		const $input = $(this).closest(".input").find("input");
		const $icon = $(this).find("i");

		if ($input.attr("type") === "password") {
			$input.attr("type", "text");
			$icon.removeClass("eye-off").addClass("eye-on");
		} else {
			$input.attr("type", "password");
			$icon.removeClass("eye-on").addClass("eye-off");
		}
	});
});


// 모바일 top-navi
$(function () {
	var $navbar = $(".mobile-top-navi");
	$(window).on("scroll", function () {
		if ($navbar.length === 0) return;
		if ($(window).scrollTop() > 0) {
			$navbar.addClass("fixed");
		} else {
			$navbar.removeClass("fixed");
		}
	});
});

// // 탭 tab
// $(function () {
// 	$(".tabs-nav .nav-item").on("click", function () {
// 		var tab = $(this).data("tab");
// 		$(".tabs-nav .nav-item").removeClass("act");
// 		$(this).addClass("act");
// 		$(".tabs-content").hide();
// 		$('.tabs-content[data-tab-act="' + tab + '"]').show();
// 	});
// 	// 페이지 로드 시 첫 번째 탭만 보이기
// 	$(".tabs-content").hide();
// 	$('.tabs-content[data-tab-act="tab1"]').show();
// });
