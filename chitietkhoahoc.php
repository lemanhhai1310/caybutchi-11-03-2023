<?php $data["title"] = "Chi tiết khoá học"; ?>
<?php $isLogin = false ?>
<?php require "template-parts/layouts/header.php"; ?>
<!--breadcrumb-->
<div class="about__section1">
    <div class="uk-container">
        <ul class="uk-breadcrumb about__breadcrumb">
            <li><a href=".">Trang chủ </a></li>
            <li><a href="khoahoc.php">Khoá học</a></li>
            <li><span>Lộ trình lớp học V2.4</span></li>
        </ul>
    </div>
</div>
<!--/breadcrumb-->

<div class="uk-section home__section">
    <div class="uk-container">
        <div class="uk-grid uk-grid-89-m" uk-grid>
            <div class="uk-width-expand">
                <h1 class="uk-h1 khoahoc__title"><div>Khoá học online: <span style="color: #BD2411;">Ôn thi vào lớp 6 - HSG</span></div></h1>
                <video class="item__52-20" src="https://yootheme.com/site/images/media/yootheme-pro.mp4" width="1800" height="1200" loop muted playsinline uk-video="autoplay: inview"></video>
                <nav class="chitietkhoahoc__navbar uk-navbar-container uk-navbar-transparent uk-margin" uk-navbar>
                    <div class="uk-navbar-left">
                        <ul class="uk-navbar-nav" uk-scrollspy-nav="closest: li; scroll: true">
                            <li><a href="#lotrinhhoc">Lộ trình khoá học</a></li>
                            <li><a href="#thongtingiangvien">Thông tin giảng viên</a></li>
                        </ul>
                    </div>
                </nav>
                <div id="lotrinhhoc" class="chitietkhoahoc__boxCard uk-card uk-card-default uk-card-body item__40-20 uk-overflow-auto" style="max-height: 532px">
                    <h3 class="uk-card-title">Lộ trình học tiếng anh giao tiếp online</h3>
                    <div class="item__40-20">
                        <?php for ($i=1;$i<=6;$i++): ?>
                            <div class="uk-padding-small chitietkhoahoc__boxCard__item uk-position-relative uk-background-muted uk-margin uk-border-rounded">
                                <div class="chitietkhoahoc__boxCard__item__txt">Bài 1: Ôn thi HSG lớp 6 cùng Cây Bút Nhí</div>
                                <a href="" class="uk-position-cover"></a>
                                <a href="" class="uk-position-center-right uk-position-small" uk-icon="icon: lock"></a>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
                <div id="thongtingiangvien" class="chitietkhoahoc__boxCard uk-card uk-card-default uk-card-body item__40-20">
                    <h3 class="uk-card-title">Thông tin giảng viên</h3>
                    <article class="item__40-20 uk-article">
                        <div class="uk-article-title">Giới thiệu:</div>
                        <ul class="uk-list uk-list-bullet">
                            <li>Cô Dương Hằng là cử nhân trẻ với 5 năm kinh nghiệm giảng dạy môn Tiếng Việt tiểu học, luôn yêu trẻ và tâm huyết với nghề giáo. Là một cây bút trẻ có nhiều đam mê với văn chương, cô luôn mong muốn là người thắp lửa và người giữ lửa đam mê văn học cho các bạn nhỏ. “Thầy cô chính là người cầm tay, mở ra trí óc và chạm đến trái tim</li>
                        </ul>
                        <div class="uk-article-title">Thành tích:</div>
                        <ul class="uk-list uk-list-bullet">
                            <li>Tác giả của các cuốn sách văn học: Ngọn đồi biết hát (Sách thiếu nhi), Bay đi khướu ơi (Sách thiếu nhi), Miền cát trắng mù sương, Hình như là mưa ngâu, Chạy trốn một tiếng ve. Giải Ba Quốc gia môn Văn hai năm liền (lớp 11, 12). Giải Nhất cấp tỉnh môn Ngữ Văn (lớp 12). Giải Ba cuộc thi truyện ngắn do Tạp chí xứ Thanh tổ chức. Giải Ba cuộc thi viết “Ngôi trường trong trí nhớ” do báo Áo Trắng tổ chức. Giải Khuyến khích cuộc thi viết truyện ngắn thiếu nhi do báo Nhi Đồng tổ chức. Tham gia nhiều hoạt động liên quan đến văn học như viết báo, viết kịch bản phim hoạt hình…</li>
                        </ul>
                    </article>
                </div>
            </div>
            <div class="uk-width-1-3@m">
                <div class="chitietkhoahoc__sidebar uk-card uk-card-default">
                    <div class="uk-cover-container">
                        <img src="images/noimage.jpg" alt="" uk-cover="">
                        <canvas width="433" height="240"></canvas>
                    </div>
                    <div class="uk-card-body">
                        <div class="uk-grid uk-child-width-auto" uk-grid>
                            <div class="uk-width-expand">
                                <div class="chitietkhoahoc__sidebar__txt">Thời lượng:</div>
                            </div>
                            <div>
                                <div class="chitietkhoahoc__sidebar__txt">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.05944 2.36023C3.0589 2.36023 3.0583 2.36023 3.05776 2.36023C2.8686 2.36023 2.69069 2.43397 2.55634 2.56797C2.42052 2.70346 2.3457 2.88387 2.3457 3.07592V13.8076C2.3457 14.2011 2.66712 14.5221 3.06227 14.5231C4.72814 14.5271 7.51912 14.8743 9.44452 16.8892V5.65815C9.44452 5.52475 9.41044 5.39943 9.34613 5.29573C7.76586 2.7508 4.72908 2.36414 3.05944 2.36023Z" fill="#262626" fill-opacity="0.7"/>
                                        <path d="M17.6544 13.8076V3.07586C17.6544 2.88381 17.5796 2.7034 17.4438 2.56791C17.3094 2.43391 17.1314 2.36017 16.9424 2.36017C16.9418 2.36017 16.9412 2.36017 16.9407 2.36017C15.2711 2.36414 12.2343 2.75081 10.654 5.29573C10.5897 5.39944 10.5557 5.52476 10.5557 5.65816V16.8891C12.4811 14.8742 15.272 14.527 16.9379 14.523C17.333 14.522 17.6544 14.2011 17.6544 13.8076Z" fill="#262626" fill-opacity="0.7"/>
                                        <path d="M19.2846 4.83514H18.7657V13.8076C18.7657 14.8124 17.9471 15.6317 16.9407 15.6342C15.5277 15.6376 13.1979 15.9139 11.5479 17.4756C14.4016 16.7769 17.41 17.2311 19.1244 17.6218C19.3385 17.6705 19.5597 17.6202 19.7312 17.4835C19.9022 17.3471 20.0002 17.1433 20.0002 16.9245V5.5507C20.0003 5.15616 19.6792 4.83514 19.2846 4.83514Z" fill="#262626" fill-opacity="0.7"/>
                                        <path d="M1.23448 13.8076V4.83514H0.715558C0.321079 4.83514 0 5.15616 0 5.5507V16.9243C0 17.1431 0.0980475 17.3469 0.268957 17.4833C0.440338 17.6199 0.661349 17.6705 0.875761 17.6216C2.59024 17.2308 5.59867 16.7767 8.45229 17.4754C6.80231 15.9138 4.47247 15.6375 3.05947 15.6342C2.05321 15.6317 1.23448 14.8124 1.23448 13.8076Z" fill="#262626" fill-opacity="0.7"/>
                                    </svg>
                                    16 bài giảng
                                </div>
                            </div>
                        </div>
                        <div class="uk-grid uk-child-width-auto" uk-grid>
                            <div class="uk-width-expand">
                                <div class="chitietkhoahoc__sidebar__txt">Học phí:</div>
                            </div>
                            <div>
                                <div class="chitietkhoahoc__sidebar__price">699.000 đ</div>
                            </div>
                        </div>
                        <a href="" class="chitietkhoahoc__sidebar__btn chitietkhoahoc__sidebar__btn--addCart uk-width uk-button uk-button-default item__40-20">Thêm vào giỏ hàng</a>
                        <a href="" class="chitietkhoahoc__sidebar__btn chitietkhoahoc__sidebar__btn--pay uk-width uk-button uk-button-primary uk-margin">
                            Tiến hành thanh toán
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.34552 8.66796H13.0565L10.8624 10.862C10.2322 11.4922 11.1776 12.4375 11.8078 11.8073L13.8059 9.806L15.1398 8.47004C15.3983 8.20998 15.3983 7.78998 15.1398 7.52992L11.8078 4.194C11.681 4.06373 11.5065 3.99064 11.3247 3.99215C10.7246 3.99223 10.43 4.72319 10.8624 5.13934L13.0617 7.33338H1.31102C0.386757 7.37924 0.455768 8.71397 1.34552 8.66796Z" fill="white"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <h1 class="uk-h1 khoahoc__title item__80-40">Khoá học liên quan khác</h1>
        <div class="item__40-20" uk-slider="finite: true">

            <div class="uk-position-relative">

                <div class="uk-slider-container uk-slider-container-offset home__tailieu__uk-slider-container">
                    <ul class="uk-slider-items uk-child-width uk-child-width-1-2@s uk-child-width-1-3@m uk-grid-small uk-grid-40-m" uk-grid>
                        <?php for ($i=1;$i<=8;$i++): ?>
                            <li>
                                <div class="home__cbn__card home__cbn__card--hover uk-card uk-card-body" style="background: #FEF5D8;">
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
                                            <span class="home__cbn__card__price" style="color: #BD2411;">699.000 đ</span>
                                        </div>
                                    </div>
                                    <a href="" class="home__about__btnMore uk-width uk-border-rounded uk-button uk-button-secondary">
                                        Chi tiết khoá học
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15.138 7.52861L10.4714 2.86195C10.3456 2.74051 10.1772 2.67331 10.0024 2.67483C9.82762 2.67635 9.66041 2.74646 9.53681 2.87007C9.4132 2.99367 9.34309 3.16088 9.34157 3.33568C9.34005 3.51048 9.40725 3.67888 9.52869 3.80461L13.0574 7.33328H1.33335C1.15654 7.33328 0.986973 7.40352 0.861949 7.52854C0.736925 7.65357 0.666687 7.82313 0.666687 7.99995C0.666687 8.17676 0.736925 8.34633 0.861949 8.47135C0.986973 8.59637 1.15654 8.66661 1.33335 8.66661H13.0574L9.52869 12.1953C9.46501 12.2568 9.41423 12.3303 9.37929 12.4117C9.34435 12.493 9.32596 12.5805 9.32519 12.669C9.32442 12.7575 9.34129 12.8453 9.37481 12.9272C9.40833 13.0092 9.45783 13.0836 9.52042 13.1462C9.58302 13.2088 9.65745 13.2583 9.73938 13.2918C9.82132 13.3253 9.9091 13.3422 9.99762 13.3414C10.0861 13.3407 10.1736 13.3223 10.255 13.2873C10.3363 13.2524 10.4099 13.2016 10.4714 13.1379L15.138 8.47128C15.263 8.34626 15.3332 8.17672 15.3332 7.99995C15.3332 7.82317 15.263 7.65363 15.138 7.52861Z" fill="currentColor"></path>
                                        </svg>
                                    </a>
                                </div>
                            </li>
                        <?php endfor; ?>
                    </ul>
                </div>

                <div class="uk-hidden@s uk-light uk-position-z-index">
                    <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>

                <div class="uk-visible@s">
                    <a class="uk-position-center-left-out uk-position-small home__tailieu__sliderNav home__tailieu__sliderNav--previous" href="#" uk-slider-item="previous">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.45881 8.00338L12.4444 2.01756C12.6092 1.85314 12.6999 1.6333 12.6999 1.39889C12.6999 1.16436 12.6092 0.94465 12.4444 0.779967L11.9199 0.25574C11.7553 0.0907967 11.5354 0 11.301 0C11.0665 0 10.8468 0.0907967 10.6822 0.25574L3.55539 7.38237C3.39006 7.54758 3.29952 7.76832 3.30017 8.00299C3.29952 8.2387 3.38993 8.45919 3.55539 8.62452L10.6755 15.7443C10.8402 15.9092 11.0599 16 11.2945 16C11.5289 16 11.7486 15.9092 11.9134 15.7443L12.4377 15.22C12.7789 14.8788 12.7789 14.3234 12.4377 13.9823L6.45881 8.00338Z" fill="white"/>
                        </svg>
                    </a>
                    <a class="uk-position-center-right-out uk-position-small home__tailieu__sliderNav home__tailieu__sliderNav--next" href="#" uk-slider-item="next">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.54119 8.00338L3.55563 2.01756C3.39082 1.85314 3.30015 1.6333 3.30015 1.39889C3.30015 1.16436 3.39082 0.94465 3.55563 0.779967L4.08012 0.25574C4.24467 0.0907967 4.46464 0 4.69904 0C4.93345 0 5.15316 0.0907967 5.31784 0.25574L12.4446 7.38237C12.6099 7.54758 12.7005 7.76832 12.6998 8.00299C12.7005 8.2387 12.6101 8.45919 12.4446 8.62452L5.32448 15.7443C5.15979 15.9092 4.94009 16 4.70555 16C4.47114 16 4.25143 15.9092 4.08662 15.7443L3.56226 15.22C3.22106 14.8788 3.22106 14.3234 3.56226 13.9823L9.54119 8.00338Z" fill="white"/>
                        </svg>
                    </a>
                </div>

            </div>

        </div>
    </div>
</div>


<?php require "template-parts/layouts/footer.php"; ?>