<?php $data["title"] = "Tin tức - Tuyến sinh"; ?>
<?php $isLogin = false ?>
<?php require "template-parts/layouts/header.php"; ?>
<!--breadcrumb-->
<div class="about__section1">
    <div class="uk-container">
        <ul class="uk-breadcrumb about__breadcrumb">
            <li><a href=".">Trang chủ</a></li>
            <li><span>Tin tức-Tuyển sinh</span></li>
        </ul>
    </div>
</div>
<!--/breadcrumb-->


<div class="uk-section home__section">
    <div class="uk-container">
        <div class="uk-grid-small uk-grid" uk-grid>
            <div class="uk-width-expand">
                <h1 class="uk-h1 khoahoc__title">Tin Tức và Sự Kiện Tuyển Sinh Tại CBN</h1>
            </div>
            <div class="uk-width-auto@m">
                <form class="uk-search uk-search-default tiemsach__formSearch">
                    <span class="uk-search-icon-flip tiemsach__formSearch__icon" uk-search-icon></span>
                    <input class="uk-search-input tiemsach__formSearch__input" type="search" placeholder="Bạn muốn tìm kiếm sách gì ?" aria-label="Search">
                </form>
            </div>
        </div>
        <nav class="tintuc__navbar uk-navbar-container uk-navbar-transparent item__40-20" uk-navbar>
            <div class="uk-navbar-left">
                <ul class="uk-navbar-nav">
                    <li class="uk-active"><a href="">Tất cả</a></li>
                    <li><a href="">Mới nhất</a></li>
                    <li><a href="">CBN Tuyển Sinh</a></li>
                    <li><a href="">Hoạt Động CBN</a></li>
                    <li><a href="">Tin Giáo Dục</a></li>
                </ul>
            </div>
        </nav>
        <div class=" uk-grid-small uk-grid-80-m item__60-30" uk-grid>
            <div class="uk-width-expand">
                <div class="uk-grid-small uk-child-width" uk-grid>
                    <?php for ($i=1;$i<=5;$i++): ?>
                    <div>
                        <div class="tintuc__card uk-card uk-card-default uk-padding-small uk-height-min-small">
                            <div class="uk-grid-small" uk-grid>
                                <div class="uk-width-auto@s">
                                    <div class="tintuc__card__img uk-cover-container">
                                        <img src="images/noimage.jpg" alt="" uk-cover="">
                                        <canvas width="180" height="168"></canvas>
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <div class="tintuc__card__title"><a href="">Khai giảng lớp 5 môn Tiếng Việt khối chuyên năm học 2021 – 2022 tại cơ sở CBN Cầu Giấy</a></div>
                                    <div class="item__12 tintuc__card__desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a...</div>
                                    <div class="item__12"><a href="" class="tintuc__card__linkMore">Xem chi tiết</a></div>
                                </div>
                            </div>
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
            <div class="uk-width-1-3@m">
                <h4 class="uk-h4 tintuc__title">Tin nổi bật</h4>
                <div class="uk-grid uk-grid-small uk-child-width" uk-grid>
                    <?php for ($i=1;$i<=3;$i++): ?>
                    <div>
                        <div class="uk-grid-small" uk-grid>
                            <div class="uk-width-auto">
                                <div class="tintuc__card__img uk-cover-container">
                                    <img src="images/noimage.jpg" alt="" uk-cover="">
                                    <canvas width="120" height="116"></canvas>
                                </div>
                            </div>
                            <div class="uk-width-expand">
                                <div class="tintuc__title1"><a href="">Khai giảng lớp 5 môn Tiếng Việt khối chuyên năm học 2021 – 2022 tại cơ sở CBN Cầu Giấy</a></div>
                                <div class="item__9"><span class="tintuc__time">24 th11 2022</span> <span class="tintuc__divider">-</span> <a href="" class="tintuc__category">CBN Tuyển Sinh</a></div>
                                <div class=""><a href="" class="tintuc__card__linkMore">Xem chi tiết</a></div>
                            </div>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>
</div>



<?php require "template-parts/layouts/footer.php"; ?>