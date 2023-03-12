<?php $data["title"] = "Học trực tuyến"; ?>
<?php $isLogin = false ?>
<?php require "template-parts/layouts/header.php"; ?>
<!--breadcrumb-->
<div class="about__section1">
    <div class="uk-container">
        <ul class="uk-breadcrumb about__breadcrumb">
            <li><a href=".">Trang chủ </a></li>
            <li><span>Học trực tuyến</span></li>
        </ul>
    </div>
</div>
<!--/breadcrumb-->

<div class="uk-height-viewport uk-section home__section hoctructuyen__bg uk-background-norepeat uk-background-top-center" data-src="images/bg_Group1.png" uk-img>
    <div class="uk-container">
        <h1 class="uk-h1 about__title uk-text-center">Tìm kiếm khoá học trực tuyến cho bạn</h1>
        <div class="uk-grid item__40-20 uk-flex-center" uk-grid>
            <div class="uk-width-4-5@m">
                <form class="hoctructuyen__formSearch uk-search uk-search-default uk-width">
                    <span class="hoctructuyen__formSearch__icon" uk-search-icon></span>
                    <input class="hoctructuyen__formSearch__input uk-border-pill uk-search-input uk-width" type="search" placeholder="Tìm kiếm khoá học" aria-label="">
                </form>
            </div>
        </div>
    </div>
    <nav class="hoctructuyen__navbar uk-overflow-auto uk-navbar-container uk-margin uk-navbar-transparent" uk-navbar>
        <div class="uk-navbar-left uk-width uk-flex-center">
            <ul class="uk-navbar-nav uk-flex-nowrap">
                <li class="uk-active"><a href="">Tất cả</a></li>
                <?php for ($i=1;$i<=6;$i++): ?>
                <li><a href="">Lớp <?= $i ?></a></li>
                <?php endfor; ?>
            </ul>
        </div>
    </nav>
    <div class="uk-container item__40-20">
        <div class="uk-grid uk-flex-middle uk-grid-small" uk-grid>
            <div class="uk-width-expand">
                <div class="hoctructuyen__txtSearch">64 kết quả đã lọc</div>
            </div>
            <div class="uk-width-auto@s">
                <div class="uk-width" uk-form-custom="target: > * > span:first-child">
                    <select aria-label="Custom controls">
                        <option value="">Chọn chủ đề của khoá học</option>
                        <option value="1">Option 01</option>
                        <option value="2">Option 02</option>
                        <option value="3">Option 03</option>
                        <option value="4">Option 04</option>
                    </select>
                    <button class="hoctructuyen__btnSelect uk-button uk-width uk-button-secondary" type="button" tabindex="-1">
                        <span></span>
                        <span uk-icon="icon: chevron-down"></span>
                    </button>
                </div>
            </div>
        </div>
        <div class="item__40-20 uk-grid uk-child-width-1-3@m uk-grid-small uk-grid-40-m" uk-grid>
            <?php for ($i=1;$i<=9;$i++): ?>
                <div>
                    <div class="home__cbn__card home__cbn__card--hover uk-card uk-card-body">
                        <div class="uk-cover-container uk-border-rounded">
                            <img src="images/noimage.jpg" alt="" uk-cover="">
                            <canvas width="360" height="200"></canvas>
                        </div>
                        <div class="uk-margin home__cbn__card__title"><a href="" class="uk-link-toggle">Ôn thi vào lớp 6 - HSG</a></div>
                        <div class="uk-margin home__cbn__card__desc">Với mục tiêu giúp các em học sinh lớp 5 có nền tảng kiến thức chuyên sâu để thi tuyển vào các trường chất lượng cao trên địa bàn thành phố Hà Nội...</div>
                        <div class="uk-margin uk-flex-bottom" uk-grid>
                            <div class="uk-width-expand">
                                <div class="home__cbn__card__txt uk-flex uk-flex-middle">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.05938 2.36035C3.05884 2.36035 3.05824 2.36035 3.0577 2.36035C2.86854 2.36035 2.69063 2.43409 2.55628 2.5681C2.42046 2.70359 2.34564 2.88399 2.34564 3.07604V13.8077C2.34564 14.2013 2.66706 14.5222 3.06221 14.5232C4.72808 14.5272 7.51906 14.8744 9.44446 16.8893V5.65828C9.44446 5.52487 9.41038 5.39955 9.34607 5.29585C7.7658 2.75093 4.72902 2.36426 3.05938 2.36035Z" fill="#262626" fill-opacity="0.7"/>
                                        <path d="M17.6544 13.8078V3.07604C17.6544 2.88399 17.5796 2.70359 17.4438 2.5681C17.3094 2.43409 17.1314 2.36035 16.9424 2.36035C16.9418 2.36035 16.9412 2.36035 16.9407 2.36035C15.2711 2.36432 12.2343 2.75099 10.654 5.29592C10.5897 5.39962 10.5557 5.52494 10.5557 5.65834V16.8893C12.4811 14.8744 15.272 14.5272 16.9379 14.5232C17.333 14.5222 17.6544 14.2013 17.6544 13.8078Z" fill="#262626" fill-opacity="0.7"/>
                                        <path d="M19.2845 4.83545H18.7655V13.8079C18.7655 14.8127 17.9469 15.632 16.9405 15.6345C15.5275 15.6379 13.1977 15.9142 11.5477 17.4759C14.4014 16.7772 17.4098 17.2314 19.1243 17.6221C19.3383 17.6708 19.5595 17.6205 19.7311 17.4838C19.902 17.3474 20 17.1436 20 16.9248V5.55101C20.0001 5.15646 19.679 4.83545 19.2845 4.83545Z" fill="#262626" fill-opacity="0.7"/>
                                        <path d="M1.23448 13.8079V4.83545H0.715558C0.321079 4.83545 0 5.15646 0 5.55101V16.9246C0 17.1434 0.0980475 17.3472 0.268957 17.4836C0.440338 17.6202 0.661349 17.6708 0.875761 17.6219C2.59024 17.2311 5.59867 16.777 8.45229 17.4757C6.80231 15.9141 4.47247 15.6378 3.05947 15.6345C2.05321 15.632 1.23448 14.8127 1.23448 13.8079Z" fill="#262626" fill-opacity="0.7"/>
                                    </svg>
                                    16 bài giảng
                                </div>
                            </div>
                            <div class="uk-width-auto">
                                <span class="home__cbn__card__price">699.000 đ</span>
                            </div>
                        </div>
                        <a href="" class="home__about__btnMore uk-width uk-border-rounded uk-button uk-button-secondary">
                            Chi tiết khoá học
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.138 7.52861L10.4714 2.86195C10.3456 2.74051 10.1772 2.67331 10.0024 2.67483C9.82762 2.67635 9.66041 2.74646 9.53681 2.87007C9.4132 2.99367 9.34309 3.16088 9.34157 3.33568C9.34005 3.51048 9.40725 3.67888 9.52869 3.80461L13.0574 7.33328H1.33335C1.15654 7.33328 0.986973 7.40352 0.861949 7.52854C0.736925 7.65357 0.666687 7.82313 0.666687 7.99995C0.666687 8.17676 0.736925 8.34633 0.861949 8.47135C0.986973 8.59637 1.15654 8.66661 1.33335 8.66661H13.0574L9.52869 12.1953C9.46501 12.2568 9.41423 12.3303 9.37929 12.4117C9.34435 12.493 9.32596 12.5805 9.32519 12.669C9.32442 12.7575 9.34129 12.8453 9.37481 12.9272C9.40833 13.0092 9.45783 13.0836 9.52042 13.1462C9.58302 13.2088 9.65745 13.2583 9.73938 13.2918C9.82132 13.3253 9.9091 13.3422 9.99762 13.3414C10.0861 13.3407 10.1736 13.3223 10.255 13.2873C10.3363 13.2524 10.4099 13.2016 10.4714 13.1379L15.138 8.47128C15.263 8.34626 15.3332 8.17672 15.3332 7.99995C15.3332 7.82317 15.263 7.65363 15.138 7.52861Z" fill="currentColor"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            <?php endfor; ?>
        </div>

        <!--pagination-->
        <div class="item__80-40">
            <ul class="uk-pagination hoctructuyen__pagination uk-flex-center" uk-margin>
                <li><a href="#"><span uk-pagination-previous></span></a></li>
                <li><a href="#">1</a></li>
                <li class="uk-disabled"><span>…</span></li>
                <li><a href="#">5</a></li>
                <li><a href="#">6</a></li>
                <li class="uk-active"><span>7</span></li>
                <li><a href="#">8</a></li>
                <li><a href="#"><span uk-pagination-next></span></a></li>
            </ul>
        </div>
        <!--/pagination-->
    </div>
</div>

<?php require "template-parts/layouts/footer.php"; ?>