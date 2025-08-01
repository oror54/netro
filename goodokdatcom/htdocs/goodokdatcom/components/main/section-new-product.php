<div class="product-list <?= $sectionClass ?>" data-section="<?= $sectionKey ?>">
<div class="swiper">
<div class="swiper-wrapper">
  <?php foreach ($productList as $item): ?>
    <div class="swiper-slide">
      <div class="product-card">
<a href="#">
        <div class="thumb">
          <img src="<?= $item['image'] ?>" alt="<?= $item['name'] ?>">

          <!-- 장바구니 버튼 -->
          <button class="btn-cart">
            <img src="<?= BASE_URL ?>assets/images/main/basket_icon_white.svg" alt="장바구니" class="cart-img">
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

        <div class="info">
          <h3><?= $item['name'] ?></h3>
          <p class="price"><?= number_format($item['price']) ?>원</p>

          <!-- 별점 및 리뷰 -->
          <div class="product-rating-wrap">
            <div class="rating-icon">
              <i class="xi-star"></i>
              <span class="rating-score"><?= number_format($item['rating'], 1) ?></span>
            </div>
            <span class="review-count">(<?= $item['reviewCount'] ?>)</span>
          </div>
        </div>
      </a>
      </div>
    </div>
  <?php endforeach; ?>
</div>
</div>
</div>

