<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$isLogin = isset($_SESSION['user']);
?>
<header class="webHeader">
    <!-- top-menu -->
    <div class="top-menu">
        <div class="wraper">
            <div class="top-container">
                <div class="switch-tab">
                    <input type="radio" id="tab1" name="tab" checked />
                    <input type="radio" id="tab2" name="tab" />

                    <div class="slider"></div>

                    <label for="tab1">구독몰</label>
                    <label for="tab2">기부존</label>
                </div>
                <ul class="right">
                    <li><a href="#">친구추천</a></li>
                    <?php if ($isLogin): ?>
                        <li><a href="<?= BASE_URL ?>pages/web/login/index.php?logout=1">로그아웃</a></li>
                    <?php else: ?>
                        <li><a href="<?= BASE_URL ?>pages/web/login/">로그인</a></li>
                    <?php endif; ?>
                    <li><a href="<?= BASE_URL ?>pages/web/join/user/">회원가입</a></li>
                    <li><a href="#">주문/배송조회</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- main-menu-wrap -->
    <div class="main-menu-wrap">
        <div class="web-menu-container">
            <div class="wraper">
                <div class="menu-container">
                    <!-- logo -->
                    <h1 class="logo"><a href="<?= BASE_URL ?>pages/web/main/"><img src="<?= BASE_URL ?>assets/images/logo.svg" alt="구독닷컴"></a></h1>
                    <!-- search -->
                    <div class="search-wrap">
                        <form>
                            <input type="text" class="input" placeholder="검색어를 입력해주세요.">
                            <button type="submit" class="search_btn"><i class="ico search"></i></button>
                        </form>
                    </div>
                    <!-- menu -->
                    <div class="right-wrap">
                        <ul>
                            <li class="user-menu-wrap">
                                <a href="<?= BASE_URL ?>pages/web/mypage/" class="icon" id="myPage"><i class="ico user"></i><span class="count hidden">0</span></a>
                                <ul class="user-dropdown" style="display:none;">
                                    <li><a href="<?= BASE_URL ?>pages/web/mypage/">일반주문 조회</a></li>
                                    <li><a href="<?= BASE_URL ?>pages/web/order/">정기구독 관리</a></li>
                                    <li><a href="<?= BASE_URL ?>pages/web/order/">쿠폰</a></li>
                                    <li><a href="<?= BASE_URL ?>pages/web/order/">회원 정보 관리</a></li>
                                    <li><a href="<?= BASE_URL ?>pages/web/login/index.php?logout=1">로그아웃</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="icon"> <i class="ico basket"></i><span class="count hidden">0</span></a></li>
                            <li><a href="#" class="icon"> <i class="ico bell"></i><span class="count">0</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- category -->
    <div class="category-wraper">
        <div class="wraper">
            <div class="menu-wrapper">
                <div class="category-wrap">
                    <button class="category-btn" aria-haspopup="true" aria-expanded="false" aria-label="카테고리 메뉴 열기">
                        <i class="xi-bars" aria-hidden="true"></i>
                        <span>카테고리</span>
                    </button>
                    <div class="gdgnb_ctg_total">
                        <?php include __DIR__ . '/category-layout.php'; ?>
                    </div>
                </div>
                <div class="gdgnb_menu">
                    <ul class="menubar">
                        <li class="menu_item">
                            <a href="" class="menuitem_link">
                                <span>구독 스토리</span>
                            </a>
                        </li>
                        <li class="menu_item">
                            <a href="" class="menuitem_link">
                                <span>정기구독</span>
                            </a>
                        </li>
                        <li class="menu_item">
                            <a href="" class="menuitem_link">
                                <span>기획전</span>
                            </a>
                        </li>
                        <li class="menu_item">
                            <a href="" class="menuitem_link">
                                <span>공동구매</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- scroll-header -->
    <div class="scroll-header">
        <div class="category-wraper">
            <div class="wraper">
                <div class="menu-wrapper">
                    <div class="category-wrap">
                        <button class="category-btn" aria-haspopup="true" aria-expanded="false" aria-label="카테고리 메뉴 열기">
                            <i class="xi-bars" aria-hidden="true"></i>
                            <span>카테고리</span>
                        </button>
                        <div class="gdgnb_ctg_total">
                            <?php include __DIR__ . '/category-layout.php'; ?>
                        </div>
                    </div>
                    <div class="gdgnb_menu">
                        <ul class="menubar">
                            <li class="menu_item">
                                <a href="/web/monthly.php" class="menuitem_link">
                                    <span>구독 스토리</span>
                                </a>
                            </li>
                            <li class="menu_item">
                                <a href="" class="menuitem_link">
                                    <span>정기구독</span>
                                </a>
                            </li>
                            <li class="menu_item">
                                <a href="" class="menuitem_link">
                                    <span>기획전</span>
                                </a>
                            </li>
                            <li class="menu_item">
                                <a href="" class="menuitem_link">
                                    <span>공동구매</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- search -->
                    <div class="search-wrap">
                        <div class="search-input">
                            <form>
                                <input type="text" class="input" placeholder="검색어를 입력해주세요.">
                                <button type="submit" class="search_btn"><i class="ico search"></i></button>
                            </form>
                        </div>
                    </div>
                    <!-- menu -->
                    <div class="right-wrap">
                        <ul>
                            <li class="user-menu-wrap">
                                <a href="<?= BASE_URL ?>pages/web/mypage/" class="icon" id="myPage"><i class="ico user"></i><span class="count hidden">0</span></a>
                                <ul class="user-dropdown" style="display:none;">
                                    <li><a href="<?= BASE_URL ?>pages/web/mypage/">일반주문 조회</a></li>
                                    <li><a href="<?= BASE_URL ?>pages/web/order/">정기구독 관리</a></li>
                                    <li><a href="<?= BASE_URL ?>pages/web/order/">쿠폰</a></li>
                                    <li><a href="<?= BASE_URL ?>pages/web/order/">회원 정보 관리</a></li>
                                    <li><a href="<?= BASE_URL ?>pages/web/login/index.php?logout=1">로그아웃</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="icon"> <i class="ico basket"></i><span class="count hidden">0</span></a></li>
                            <li><a href="#" class="icon"> <i class="ico bell"></i><span class="count">0</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>