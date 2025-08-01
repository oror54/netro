<?php
session_start(); 
$_SESSION['user'] = [
    'id' => 'testuser',
    'name' => '테스트유저'
];
$isLogin = isset($_SESSION['user']); 

if (!$isLogin) {
    header("Location: /goodokdatcom/pages/web/login/index.php");
    exit;
}

$currentPath = $_SERVER['REQUEST_URI'];
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
$host = $_SERVER['HTTP_HOST'];
$basePath = '/goodokdatcom/';
define('BASE_URL', $protocol . "://" . $host . $basePath);
include_once $_SERVER['DOCUMENT_ROOT'] . '/goodokdatcom/components/h.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/goodokdatcom/components/beltBanner.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/goodokdatcom/components/webHeader.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/goodokdatcom/components/mobileHeader.php';

$products = require $_SERVER['DOCUMENT_ROOT'] . '/goodokdatcom/data/products/products.php';
?>
<link rel="stylesheet" href="<?= BASE_URL ?>assets/css/pages/main.css">
<link rel="stylesheet" href="<?= BASE_URL ?>assets/css/responsive.css">

<!-- main -->
<main class="main-wrap">
    <!-- 메인슬라이드 -->
    <section class="main-event-slide">
        <!-- Slider main container -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide"><a href="" class="slide">
                        <div class="image event1">
                        </div>
                    </a></div>
                <div class="swiper-slide"><a href="" class="slide">
                        <div class="image event2"></div>
                    </a></div>
                <div class="swiper-slide"><a href="" class="slide">
                        <div class="image event3"></div>
                    </a></div>
            </div>
        </div>
        <div class="wrapper">
            <div class="wrpr">
                <!-- PC 전용 컨트롤 -->
                <div class="swiper-controls desktop-only">
                    <div class="swiper-button-prev swiper-button"></div>
                    <div class="swiper-button-next swiper-button"></div>
                    <div class="swiper-pagination pagination-desktop"></div>
                </div>
                <!-- 모바일 전용 컨트롤 -->
                <div class="swiper-controls mobile-only">
                    <div class="mobile-wrap">
                        <button type="button"  aria-pressed="false" class="swiper-toggle-btn" ><i class="xi-play"></i></button>
                        <div class="info-wrap">
                            <span class="swiper-page-info"></span>
                            <button type="button" class="swiper-next-btn swiper-button"><i class="xi-angle-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- 퀵메뉴리스트  -->
    <section class="quick-nav">
        <div class="wraper">
            <div class="quick_list">
                <!-- Slider main container -->
                <div class="swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="quick_item">
                                <a href="" class="clickable">
                                    <div class="quick_img">
                                        <img src="<?= BASE_URL ?>assets/images/main/quick/menu1.jpg" alt="menu1">
                                    </div>
                                    <div class="quick_txt"><span>이달의 신제품</span></div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="quick_item">
                                <a href="" class="clickable">
                                    <div class="quick_img">
                                        <img src="<?= BASE_URL ?>assets/images/main/quick/menu2.jpg" alt="menu2">
                                    </div>
                                    <div class="quick_txt"><span>구독’s PICK</span></div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="quick_item">
                                <a href="" class="clickable">
                                    <div class="quick_img">
                                        <img src="<?= BASE_URL ?>assets/images/main/quick/menu3.jpg" alt="menu3">
                                    </div>
                                    <div class="quick_txt"><span>BEST 제품</span></div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="quick_item">
                                <a href="" class="clickable">
                                    <div class="quick_img">
                                        <img src="<?= BASE_URL ?>assets/images/main/quick/menu4.jpg" alt="menu4">
                                    </div>
                                    <div class="quick_txt"><span>식품박스</span></div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="quick_item">
                                <a href="" class="clickable">
                                    <div class="quick_img">
                                        <img src="<?= BASE_URL ?>assets/images/main/quick/menu5.jpg" alt="menu5">
                                    </div>
                                    <div class="quick_txt"><span>육아 박스</span></div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="quick_item">
                                <a href="" class="clickable">
                                    <div class="quick_img">
                                        <img src="<?= BASE_URL ?>assets/images/main/quick/menu6.jpg" alt="menu6">
                                    </div>
                                    <div class="quick_txt"><span>생활 박스</span></div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="quick_item">
                                <a href="" class="clickable">
                                    <div class="quick_img">
                                        <img src="<?= BASE_URL ?>assets/images/main/quick/menu7.jpg" alt="menu7">
                                    </div>
                                    <div class="quick_txt"><span>건강 박스</span></div>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>


        </div>
    </section>
    <!-- 이달의 신제품 -->
    <section id="newItem" class="products newItem">
        <div class="wraper">
            <div class="title">
                <button class="tit-btn">
                    <div class="tit"><img src="<?= BASE_URL ?>assets/images/main/sparkles.png" alt="sparkles">
                        <p>가장 먼저 만나는 최신 아이템, 이달의 신제품</p>
                    </div><i class="xi-angle-right-min view-ico"></i>
                </button>
                <div class="text">
                    <div class="txt">
                        <p>NEW 아이템 입고 완료</p><img src="<?= BASE_URL ?>assets/images/main/high-voltage-sign.png" alt="volt">
                        <p> 지금 바로 확인해보세요!</p>
                    </div>
                </div>
            </div>
            <!-- 상품 리스트 출력 -->
            <?php
            $sectionTitle = '이달의 신제품';
            $sectionClass = 'new';
            $sectionKey = 'new';
            $productList = $products['new'];
            include $_SERVER['DOCUMENT_ROOT'] . '/goodokdatcom/components/main/section-new-product.php';
            ?>
        </div>
    </section>
    <!-- 베스트 제품 -->
    <section id="bestItem" class="products bestItem">
        <div class="wraper">
            <div class="title">
                <button class="tit-btn">
                    <div class="tit"><img src="<?= BASE_URL ?>assets/images/main/first-place-medal.png" alt="medal">
                        <p>요즘 제일 잘 나가는 인기템, Best 제품</p>
                    </div><i class="xi-angle-right-min view-ico"></i>
                </button>
                <div class="text">
                    <div class="txt">
                        <p>믿고 쓰는 베스트 아이템!</p>
                    </div>
                </div>
            </div>
            <!--  상품 리스트 출력 -->
            <?php
            $sectionTitle = '베스트 제품';
            $sectionClass = 'best';
            $sectionKey = 'best';
            $productList = $products['best'];
            include $_SERVER['DOCUMENT_ROOT'] . '/goodokdatcom/components/main/section-best-product.php';
            ?>
        </div>

    </section>
    <!--구독’s PICK -->
    <section id="pickItem" class="products pickItem">
        <div class="wraper">
            <div class="web title">
                <button class="tit-btn">
                    <div class="tit">
                        <p>구독’s PICK</p>
                    </div>
                    <div class="text">
                        <div class="txt">
                            <p>까다로운 구독닷컴의 마음을 사로잡은</p>
                        </div>
                        <div class="txt">
                            <p>구독’s PICK 추천 아이템</p>
                            <img src="<?= BASE_URL ?>assets/images/main/sparkles.png" alt="sparkles">
                        </div>
                    </div>
                </button>
            </div>
            <div class="moblie title">
                <button class="tit-btn">
                    <div class="tit"><img src="<?= BASE_URL ?>assets/images/main/fire.png" alt="fire">
                        <p>구독’s PICK</p>
                    </div>
                </button>
                <div class="text">
                    <div class="txt">
                        <p>까다로운 구독닷컴의 마음을 사로잡은 추천 아이템!</p>
                    </div>
                </div>
            </div>
            <!-- 상품 리스트 출력 -->
            <?php
            $sectionTitle = '구독’s PICK';
            $sectionClass = 'pick';
            $sectionKey = 'pick';
            $productList = $products['pick'];
            include $_SERVER['DOCUMENT_ROOT'] . '/goodokdatcom/components/main/section-pick-product.php';
            ?>
        </div>
    </section>
    <!-- 회원가입 이벤트 -->
    <section id="event1" class="event-banner event1">
        <div class="wraper">
            <button class="banner"></button>
        </div>
    </section>
    <!--  식품박스-->
    <section id="foodBox" class="box foodBox">
        <div class="wraper">
            <div class="web title-box">
                <button class="tit-btn">
                    <div class="titl">
                        <div class="tit">
                            <p>식품박스</p>
                        </div>
                        <div class="text">
                            <div class="txt">
                                <p>푸릇푸릇한 야채와
                                    탐스러운 과일이 한 자리에!</p>
                            </div>
                        </div>
                    </div>
                </button>
            </div>
            <div class="mobile title">
                <div class="tit">
                    <img src="<?= BASE_URL ?>assets/images/main/thumbs-up-sign.png" alt="thumbs">
                    <p>입맛도, 건강도 고려한 식품 박스</p>
                </div>
            </div>
            <div class="mobile title-box">
                <button class="tit-btn">
                    <div class="titl">
                        <div class="tit">
                            <p>식품박스</p>
                        </div>
                        <div class="text">
                            <div class="txt">
                                <p>푸릇푸릇한 야채와
                                    탐스러운 과일이 한 자리에!</p>
                            </div>
                        </div>
                    </div>
                </button>
            </div>
            <?php
            $sectionTitle = '식품 박스';
            $sectionDesc = '입맛도, 건강도 고려한 식품 박스';
            $sectionClass = 'box-section food';
            $productList = $products['foodBox'];
            include $_SERVER['DOCUMENT_ROOT'] . '/goodokdatcom/components/main/section-box-product.php';
            ?>

        </div>
    </section>
    <!-- 육아박스-->
    <section id="babyBox" class="box babyBox">
        <div class="wraper">
            <div class="web title-box">
                <button class="tit-btn">
                    <div class="titl">
                        <div class="tit">
                            <p>육아 박스</p>
                        </div>
                        <div class="text">
                            <div class="txt">
                                <p>사랑스러운 우리 아기를 위한
                                    준비물들 한자리에 가득!</p>
                            </div>
                        </div>
                    </div>
                </button>
            </div>
            <div class="mobile title">
                <div class="tit">
                    <img src="<?= BASE_URL ?>assets/images/main/baby-bottle.png" alt="baby-bottle">
                    <p>분유부터 기저귀까지, 꼭 필요한 육아템</p>
                </div>
            </div>
            <div class="mobile title-box">
                <button class="tit-btn">
                    <div class="titl">
                        <div class="tit">
                            <p>육아박스</p>
                        </div>
                        <div class="text">
                            <div class="txt">
                                <p>사랑스러운 우리 아기를 위한
                                    준비물들 한자리에 가득!</p>
                            </div>
                        </div>
                    </div>
                </button>
            </div>
            <?php
            $sectionTitle = '유아 박스';
            $sectionDesc = '분유부터 기저귀까지, 꼭 필요한 육아템';
            $sectionClass = 'box-section baby';
            $productList = $products['babyBox'];
            include $_SERVER['DOCUMENT_ROOT'] . '/goodokdatcom/components/main/section-box-product.php';
            ?>

        </div>
    </section>
    <!-- 생활박스 -->
    <section id="livingBox" class="box livingBox">
        <div class="wraper">
            <div class="web title-box">
                <button class="tit-btn">
                    <div class="titl">
                        <div class="tit">
                            <p>생활 박스</p>
                        </div>
                        <div class="text">
                            <div class="txt">
                                <p>생활의 디테일을 살리는
                                    똑똑한 살림템 모음!</p>
                            </div>
                        </div>
                    </div>
                </button>
            </div>
            <div class="mobile title">
                <div class="tit">
                    <img src="<?= BASE_URL ?>assets/images/main/bubble.png" alt="bubble">
                    <p>전문가가 골라주는 생활 필수템</p>
                </div>
            </div>
            <div class="mobile title-box">
                <button class="tit-btn">
                    <div class="titl">
                        <div class="tit">
                            <p>생활박스</p>
                        </div>
                        <div class="text">
                            <div class="txt">
                                <p>생활의 디테일을 살리는
                                    똑똑한 살림템 모음!</p>
                            </div>
                        </div>
                    </div>
                </button>
            </div>
            <?php
            $sectionTitle = '생활 박스';
            $sectionDesc = '분유부터 기저귀까지, 꼭 필요한 육아템';
            $sectionClass = 'box-section life';
            $productList = $products['lifeBox'];
            include $_SERVER['DOCUMENT_ROOT'] . '/goodokdatcom/components/main/section-box-product.php';
            ?>

        </div>
    </section>
    <!-- 건강박스 -->
    <section id="healthyBox" class="box healthyBox">
        <div class="wraper">
            <div class="web title-box">
                <button class="tit-btn">
                    <div class="titl">
                        <div class="tit">
                            <p>건강박스</p>
                        </div>
                        <div class="text">
                            <div class="txt">
                                <p>품질부터 취향까지 꼼꼼하게 고른,
                                    퀄리티로 승부하는 프리미엄 제품만 모였어요!</p>
                            </div>
                        </div>
                    </div>
                </button>
            </div>
            <div class="mobile title">
                <div class="tit">
                    <img src="<?= BASE_URL ?>assets/images/main/robotic-arm.png" alt="robotic-arm">
                    <p> 내 몸을 위한 작은 배려</p>
                </div>
            </div>
            <div class="mobile title-box">
                <button class="tit-btn">
                    <div class="titl">
                        <div class="tit">
                            <p>건강박스</p>
                        </div>
                        <div class="text">
                            <div class="txt">
                                <p>품질부터 취향까지 꼼꼼하게 고른,
                                    퀄리티로 승부하는 프리미엄 제품만 모였어요!</p>
                            </div>
                        </div>
                    </div>
                </button>
            </div>
            <?php
            $sectionTitle = '건강 박스';
            $sectionDesc = '내 몸을 위한 작은 배려';
            $sectionClass = 'box-section healthy';
            $productList = $products['healthyBox'];
            include $_SERVER['DOCUMENT_ROOT'] . '/goodokdatcom/components/main/section-box-product.php';
            ?>

        </div>
    </section>
</main>
<!-- footer -->
<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/goodokdatcom/components/footer.php';
?>
<!-- bottom-bar -->
<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/goodokdatcom/components/mobileBottomBar.php';
?>