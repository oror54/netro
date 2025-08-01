$(function () {
	// === Swiper 통합 ===

	// === Swiper 통합 ===
	let swiperInstances = {
		mainEvent: null,
		quickMenu: null,
		product: null,
		best: null,
		pick: null,
		// boxSwiper는 sectionKey별로 동적으로 추가
	};

	function createSwiper(selector, options) {
		return new Swiper(selector, options);
	}

	function initMainEventSwiper() {
		const isMobile = window.innerWidth <= 720;
		const $container = $(".main-event-slide");
		const $toggleBtn = $container.find(".swiper-toggle-btn");
		const $nextBtn = $container.find(".swiper-next-btn");
		const $pageInfo = $container.find(".swiper-page-info");

		// 원본 슬라이드 개수 (복제본 제외)
		const originalSlideCount = $container.find(".swiper .swiper-wrapper > .swiper-slide").not(".swiper-slide-duplicate").length;

		if (swiperInstances.mainEvent) {
			swiperInstances.mainEvent.destroy(true, true);
			swiperInstances.mainEvent = null;
		}

		swiperInstances.mainEvent = new Swiper($container.find(".swiper")[0], {
			direction: "horizontal",
			loop: true,
			autoplay: isMobile ? { delay: 3000, disableOnInteraction: false } : false,
			pagination: !isMobile
				? {
						el: $container.find(".pagination-desktop")[0],
						type: "fraction",
						clickable: true,
						formatFractionCurrent: (num) => String(num).padStart(2, "0"),
						formatFractionTotal: (num) => String(num).padStart(2, "0"),
						renderFraction: (c, t) => `<div class="pagination"><span class="current-num ${c}"></span><span> / </span><span class="total-num ${t}"></span></div>`,
				  }
				: false,
			navigation: !isMobile
				? {
						nextEl: $container.find(".swiper-button-next")[0],
						prevEl: $container.find(".swiper-button-prev")[0],
				  }
				: false,
			on: {
				init: function () {
					if (isMobile) updatePageInfo(this);
				},
				slideChange: function () {
					if (isMobile) updatePageInfo(this);
				},
			},
		});

		function updatePageInfo(swiper) {
			const current = swiper.realIndex + 1;
			$pageInfo.text(`${current} / ${originalSlideCount}`);
		}

		// 모바일 전용 컨트롤
		if (isMobile && swiperInstances.mainEvent) {
			const swiper = swiperInstances.mainEvent;
			const $icon = $toggleBtn.find("i");

			// 초기 상태 설정
			if (swiper.autoplay && swiper.autoplay.running) {
				$icon.removeClass("xi-play").addClass("xi-pause");
				$toggleBtn.attr("aria-pressed", "true");
			} else {
				$icon.removeClass("xi-pause").addClass("xi-play");
				$toggleBtn.attr("aria-pressed", "false");
			}

			// 클릭 시 토글
			$toggleBtn.off("click").on("click", function (e) {
				e.preventDefault();
				if (!swiper.autoplay) return;

				if (swiper.autoplay.running) {
					swiper.autoplay.stop();
					$icon.removeClass("xi-pause").addClass("xi-play");
					$toggleBtn.attr("aria-pressed", "false");
				} else {
					swiper.autoplay.start();
					$icon.removeClass("xi-play").addClass("xi-pause");
					$toggleBtn.attr("aria-pressed", "true");
				}
			});

			$nextBtn.off("click").on("click", function (e) {
				e.preventDefault();
				swiper.slideNext();
			});
		}
	}

	function initBoxSwipers() {
		$(".box-swiper").each(function () {
			const $swiperEl = $(this);
			const sectionKey = $swiperEl.data("section");

			if (swiperInstances[sectionKey]) {
				swiperInstances[sectionKey].destroy(true, true);
				swiperInstances[sectionKey] = null;
			}

			//
			if (window.innerWidth <= 720) {
				$swiperEl.find(".swiper-button-prev, .swiper-button-next").hide();
				return;
			} else {
				$swiperEl.find(".swiper-button-prev, .swiper-button-next").show();
			}

			swiperInstances[sectionKey] = new Swiper(this, {
				slidesPerView: 1,
				slidesPerGroup: 1,
				loop: false,
				spaceBetween: 16,
				navigation: {
					nextEl: $swiperEl.find(".swiper-button-next")[0],
					prevEl: $swiperEl.find(".swiper-button-prev")[0],
				},
			});
		});
	}

	function initGenericSwiper(key, selector) {
		const $container = $(selector);
		const $menuItems = $container.find(".swiper-slide");
		const $wrapper = $container.find(".swiper-wrapper");
		const isMobile = window.innerWidth <= 720;

		// quickMenu는 기존대로
		if (key === "quickMenu") {
			if ($menuItems.length >= 4) {
				if (!swiperInstances[key]) {
					swiperInstances[key] = createSwiper(`${selector} .swiper`, {
						direction: "horizontal",
						loop: false,
						slidesPerView: isMobile ? 6 : "auto",
						centeredSlides: false,
						slidesOffsetAfter: 100,
					});
				}
				$wrapper.removeClass("no-swiper");
			} else {
				if (swiperInstances[key]) {
					swiperInstances[key].destroy(true, true);
					swiperInstances[key] = null;
				}
				$wrapper.addClass("no-swiper");
			}
			return;
		}

		// // // 상품 슬라이더 (product, best, pick 등)
		if (key == "product" || key == "best" || key == "pick") {
			if (
				(!isMobile && $menuItems.length >= 5) || // PC: 5개 이상
				(isMobile && $menuItems.length >= 3) // 모바일: 3개 이상
			) {
				if (!swiperInstances[key]) {
					swiperInstances[key] = createSwiper(`${selector} .swiper`, {
						slidesPerView: isMobile ? 3 : 4,
						spaceBetween: 16,
						loop: false,
						centeredSlides: false,
						slidesOffsetAfter: 100,
						navigation: {
							nextEl: $container.find(".swiper-button-next")[0],
							prevEl: $container.find(".swiper-button-prev")[0],
						},
						breakpoints: {
							0: { slidesPerView: 2 },
							425: { slidesPerView: 3 },
							720: { slidesPerView: 4 },
						},
					});
				}
				$wrapper.removeClass("no-swiper");
			} else {
				if (swiperInstances[key]) {
					swiperInstances[key].destroy(true, true);
					swiperInstances[key] = null;
				}
				$wrapper.addClass("no-swiper");
			}
			return;
		}

		// // // 그 외 기존대로
		if ($menuItems.length >= 4) {
			if (!swiperInstances[key]) {
				swiperInstances[key] = createSwiper(`${selector} .swiper`, {
					direction: "horizontal",
					loop: false,
					slidesPerView: "auto",
					centeredSlides: false,
					slidesOffsetAfter: 100,
				});
			}
			$wrapper.removeClass("no-swiper");
		} else {
			if (swiperInstances[key]) {
				swiperInstances[key].destroy(true, true);
				swiperInstances[key] = null;
			}
			$wrapper.addClass("no-swiper");
		}
	}

	function initAllSwipers() {
		initMainEventSwiper();
		initBoxSwipers();
		initGenericSwiper("quickMenu", ".quick_list");
		initGenericSwiper("product", ".product-list:not(.best):not(.pick)");
		initGenericSwiper("best", ".product-list.best");
		initGenericSwiper("pick", ".product-list.pick");
		initGenericSwiper("gnbMenu", ".gdgnb_menu");
	}

	initAllSwipers();
	$(window).on("resize", initAllSwipers);
});

// --------------------------------------------- 띠배너 기부금 ---------------------------------------------
function animateCounter($target, endValue, duration) {
	var $digits = $target.find(".digit");
	var startValue = 0;
	var startTime = Date.now();
	var endStr = endValue.toLocaleString("ko-KR").replace(/[^0-9]/g, "");

	function update() {
		var elapsed = Date.now() - startTime;
		var progress = Math.min(elapsed / duration, 1);
		var currentValue = Math.floor(startValue + (endValue - startValue) * progress);
		var currentStr = currentValue
			.toLocaleString("ko-KR")
			.replace(/[^0-9]/g, "")
			.padStart(endStr.length, "0");

		$digits.each(function (i) {
			$(this).text(currentStr[i]);
		});

		if (progress < 1) {
			requestAnimationFrame(update);
		}
	}
	requestAnimationFrame(update);
}

// $(function () {
// 	var $counter = $("#donationCounter");
// 	animateCounter($counter, 127768237, 4000);
// });
// --------------------------------------------------------------------------------------------------------
