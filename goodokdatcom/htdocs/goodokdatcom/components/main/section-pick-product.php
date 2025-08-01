<div class="product-list <?= $sectionClass ?>" data-section="<?= $sectionKey ?>">
  <div class="swiper pick-swiper">
    <div class="swiper-wrapper">
      <?php foreach ($productList as $item): ?>
        <div class="swiper-slide">
          <div class="product-card">
            <a href="#">
              <div class="thumb">
                <img src="<?= $item['image'] ?>" alt="<?= $item['name'] ?>">
                <button class="btn-cart">
                  <img src="../../../assets/images/main/basket_icon_white.svg" alt="장바구니" class="cart-img">
                </button>
                <?php if (!empty($item['badges'])): ?>
                  <div class="badge-wrap">
                    <?php foreach ($item['badges'] as $badge): ?>
                      <span class="badge badge-<?= strtolower($badge) ?>"><?= $badge ?></span>
                    <?php endforeach; ?>
                  </div>
                <?php endif; ?>
              </div>
              <div class="info">
                <h3><?= $item['name'] ?></h3>
                <p class="price"><?= number_format($item['price']) ?>원</p>
              </div>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>