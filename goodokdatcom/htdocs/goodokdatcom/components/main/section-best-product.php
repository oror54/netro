<div class="product-list <?= $sectionClass ?>" data-section="<?= $sectionKey ?>">
  <div class="swiper best-swiper">
    <div class="swiper-wrapper">
      <?php foreach ($productList as $index => $item): ?>
        <div class="swiper-slide">
          <div class="product-card">
            <a href="#">
              <div class="thumb">
                <img src="<?= $item['image'] ?>" alt="<?= $item['name'] ?>">

                <!-- 장바구니 버튼 -->
                <button class="btn-cart">
                  <img src="../../../assets/images/main/basket_icon_white.svg" alt="장바구니" class="cart-img">
                </button>
                <!-- 뱃지들 -->
                <?php if (!empty($item['badges'])): ?>
                  <div class="badge-wrap">
                    <?php foreach ($item['badges'] as $badge): ?>
                      <span class="badge badge-<?= strtolower($badge) ?>"><?= $badge ?></span>
                    <?php endforeach; ?>
                  </div>
                <?php endif; ?>
              </div>
              <div class="info-wrap">
                <!-- 순위 -->
                <div class="rank-badge"><?= $index + 1 ?></div>
                <div class="info">
                  <h3><?= $item['name'] ?></h3>
                  <p class="price"><?= number_format($item['price']) ?>원</p>
                </div>
              </div>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>