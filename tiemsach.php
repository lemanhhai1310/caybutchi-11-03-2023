<?php $data["title"] = "Tiệm sách"; ?>
<?php $isLogin = false ?>
<?php require "template-parts/layouts/header.php"; ?>
<!--breadcrumb-->
<div class="about__section1">
    <div class="uk-container">
        <ul class="uk-breadcrumb about__breadcrumb">
            <li><a href=".">Trang chủ</a></li>
            <li><span>Tiệm sách</span></li>
        </ul>
    </div>
</div>
<!--/breadcrumb-->


<div class="uk-section home__section">
    <div class="uk-container">
        <div class="uk-grid-small uk-grid" uk-grid>
            <div class="uk-width-expand">
                <h1 class="uk-h1 khoahoc__title">Tiệm sách Cây Bút Nhí</h1>
            </div>
            <div class="uk-width-auto@m">
                <form class="uk-search uk-search-default tiemsach__formSearch">
                    <span class="uk-search-icon-flip tiemsach__formSearch__icon" uk-search-icon></span>
                    <input class="uk-search-input tiemsach__formSearch__input" type="search" placeholder="Bạn muốn tìm kiếm sách gì ?" aria-label="Search">
                </form>
            </div>
        </div>
        <div class=" uk-grid-small uk-grid-40-m item__60-30" uk-grid>
            <div class="uk-width-expand">
                <div class="uk-child-width-1-3@m uk-grid-small uk-grid-40-m" uk-grid>
                    <?php for ($i=1;$i<=9;$i++): ?>
                        <div>
                            <div class="home__tailieu__card uk-card uk-card-body">
                                <div class="uk-text-center"><img src="images/image5.png" alt=""></div>
                                <div class="uk-margin uk-light home__tailieu__card__name"><a href="" class="uk-link-toggle">mùa tiểu học cuối cùng</a></div>
                                <div class="uk-margin uk-grid-12 uk-flex-bottom uk-grid uk-child-width-auto" uk-grid>
                                    <div>
                                        <span class="home__tailieu__card__price">699.000 đ</span>
                                    </div>
                                    <div>
                                        <del class="home__tailieu__card__priceOld">799.000 đ</del>
                                    </div>
                                </div>
                                <a href="" class="home__tailieu__card__btnBuy uk-button uk-button-secondary uk-border-rounded uk-width">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_470_623)">
                                            <path d="M7.0625 15.0312C7.83915 15.0312 8.46875 14.4017 8.46875 13.625C8.46875 12.8483 7.83915 12.2188 7.0625 12.2188C6.28585 12.2188 5.65625 12.8483 5.65625 13.625C5.65625 14.4017 6.28585 15.0312 7.0625 15.0312Z" fill="currentColor"/>
                                            <path d="M11.7812 15.0312C12.5579 15.0312 13.1875 14.4017 13.1875 13.625C13.1875 12.8483 12.5579 12.2188 11.7812 12.2188C11.0046 12.2188 10.375 12.8483 10.375 13.625C10.375 14.4017 11.0046 15.0312 11.7812 15.0312Z" fill="currentColor"/>
                                            <path d="M0.468747 1.90628H2.42352L4.68657 9.82851L4.50907 10.1835C4.0417 11.1173 4.72016 12.2187 5.767 12.2187H13.6562C13.9153 12.2187 14.1249 12.0091 14.1249 11.75C14.1249 11.4909 13.9153 11.2812 13.6562 11.2812H5.767C5.41891 11.2812 5.19141 10.9147 5.34769 10.6028L5.47725 10.3437H13.6562C13.8654 10.3437 14.0494 10.205 14.1071 10.0036L15.9821 3.44114C16.0223 3.29971 15.994 3.14771 15.9056 3.03008C15.8168 2.91289 15.6781 2.84377 15.5312 2.84377H3.66632L3.22779 1.30887C3.17011 1.10747 2.98611 0.96875 2.77689 0.96875H0.468747C0.209655 0.96875 0 1.17841 0 1.4375C0 1.69659 0.209655 1.90628 0.468747 1.90628Z" fill="currentColor"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_470_623">
                                                <rect width="16" height="16" fill="currentColor"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    Đặt mua ngay
                                </a>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
                <div class="item__80-40">
                    <!--pagination-->
                    <?php require "template-parts/layouts/pagination.php"; ?>
                    <!--/pagination-->
                </div>
            </div>
            <div class="uk-width-1-4@m uk-flex-first@m">
                <div class="tiemsach__card uk-card">
                    <div class="uk-card-header">
                        Nhóm sản phẩm
                    </div>
                    <div class="uk-card-body">
                        <div class="uk-margin uk-grid-small uk-child-width uk-grid">
                            <label class="tiemsach__card__label"><input class="tiemsach__card__checkbox uk-checkbox" type="checkbox" checked> Tất cả sản phẩm</label>
                            <label class="tiemsach__card__label"><input class="tiemsach__card__checkbox uk-checkbox" type="checkbox"> Sách Luyện thi HSG</label>
                            <label class="tiemsach__card__label"><input class="tiemsach__card__checkbox uk-checkbox" type="checkbox"> Sách bổ trợ ngữ pháp</label>
                            <label class="tiemsach__card__label"><input class="tiemsach__card__checkbox uk-checkbox" type="checkbox"> Sách những bài văn hay</label>
                            <label class="tiemsach__card__label"><input class="tiemsach__card__checkbox uk-checkbox" type="checkbox"> Sách Tiếng việt</label>
                        </div>
                    </div>
                </div>
                <div class="tiemsach__card uk-card uk-margin">
                    <div class="uk-card-header">
                        Giá sản phẩm
                    </div>
                    <div class="uk-card-body">
                        <div class="boloc__ranger">
                            <input type="text" class="js-range-slider" name="my_range" value="" />
                        </div>
                        <div class="js-output__d1 uk-margin-top"></div>
                        <button class="uk-button tiemsach__card__btn uk-button-primary uk-width item__32-20">Tìm kiếm</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php require "template-parts/layouts/footer.php"; ?>