<?php
$sectionKey = isset($sectionClass) ? preg_replace('/box-section /', '', $sectionClass) : 'default';
$maxCount = 36;
$limitedProductList = array_slice($productList, 0, $maxCount);
$chunks = array_chunk($limitedProductList, 6);
?>
<!-- 모바일용 리스트 -->
<div class="mobile product-list-wrap product-card-box-list <?= $sectionKey ?>-list">
  <?php foreach (array_slice($productList, 0, 3) as $item): ?>
    <div class="product-card-box-html <?= $sectionKey ?>-card">
      <?php include __DIR__ . '/product-card-box.php'; ?>
    </div>
  <?php endforeach; ?>
  <?php if (count($productList) > 3): ?>
    <button type="button" class="btn-more-list"><p>전체보기</p><i class="xi-angle-right-min"></i></button>
  <?php endif; ?>
</div>

<!-- PC/태블릿용 Swiper 컨테이너 -->
<div class="box-swiper swiper <?= $sectionKey ?>-swiper" data-section="<?= $sectionKey ?>">
  <div class="swiper-wrapper">
    <?php foreach ($chunks as $group): ?>
      <div class="swiper-slide">
        <div class="product-grid">
          <?php foreach ($group as $item): ?>
            <div class="product-card-box-html <?= $sectionKey ?>-card">
              <?php include __DIR__ . '/product-card-box.php'; ?>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
</div>