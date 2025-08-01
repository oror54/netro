<?php
$beltBannerClass = isset($beltBannerClass) ? $beltBannerClass : '';
?>

<!-- 최상단 띠배너 -->
<div class="beltBanner <?= $beltBannerClass ?>">
  <a class="img" href="">
    <img src="<?= BASE_URL ?>assets/images/main/banner/animation-banner.png" alt="banner" class="web-img">
    <img src="<?= BASE_URL ?>assets/images/main/banner/animation-banner-mobile.png" alt="banner" class="mobile-img">
  </a>
  <div class="donation-counter" id="donationCounter">
    <!-- 숫자 자리수별로 span 생성 (예: 127,768,237) -->
    <span class="digit">0</span>
    <span class="digit">0</span>
    <span class="digit">0</span>
    <span class="comma">,</span>
    <span class="digit">0</span>
    <span class="digit">0</span>
    <span class="digit">0</span>
    <span class="comma">,</span>
    <span class="digit">0</span>
    <span class="digit">0</span>
    <span class="digit">0</span>
  </div>
  </div>
</div>

<script>
$(function () {
	var $counter = $("#donationCounter");
	animateCounter($counter, 127768237, 4000);
});
</script>