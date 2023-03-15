<?php $data["title"] = "Luyện thi"; ?>
<?php $isLogin = false ?>
<?php require "template-parts/layouts/header.php"; ?>
<!--breadcrumb-->
<div class="about__section1">
    <div class="uk-container">
        <ul class="uk-breadcrumb about__breadcrumb">
            <li><a href=".">Trang chủ </a></li>
            <li><span>Luyện đề</span></li>
        </ul>
    </div>
</div>
<!--/breadcrumb-->

<div class="uk-section home__section hoctructuyen__bg uk-background-norepeat uk-background-top-center" data-src="images/bg_Group1.png" uk-img>
    <div class="uk-container">
        <h1 class="uk-h1 about__title uk-text-center">Thư viện đề thi và các bài kiểm tra</h1>
        <div class="uk-grid item__40-20 uk-flex-center" uk-grid>
            <div class="uk-width-4-5@m">
                <form class="hoctructuyen__formSearch uk-search uk-search-default uk-width">
                    <span class="hoctructuyen__formSearch__icon" uk-search-icon></span>
                    <input class="hoctructuyen__formSearch__input uk-border-pill uk-search-input uk-width" type="search" placeholder="Tìm kiếm đề thi" aria-label="">
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
                        <option value="">Chọn chủ đề của bài thi</option>
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
        <div class="item__40-20 uk-grid uk-child-width-1-4@m uk-grid-small uk-grid-40-m" uk-grid>
            <?php for ($i=1;$i<=12;$i++): ?>
                <div>
                    <div class="uk-card uk-card-body luyenthi__cardItem">
                        <div class="uk-cover-container uk-border-rounded">
                            <img src="images/noimage.jpg" alt="" uk-cover="">
                            <canvas width="250" height="180"></canvas>
                        </div>
                        <a href="chitietluyende.php" class="luyenthi__cardItem__btn uk-button item__16 uk-button-primary uk-width uk-border-pill">Đề số 3</a>
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
</div>

<?php require "template-parts/layouts/footer.php"; ?>