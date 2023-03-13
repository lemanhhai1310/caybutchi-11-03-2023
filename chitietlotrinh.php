<?php $data["title"] = "Chi tiết lộ trình"; ?>
<?php $isLogin = false ?>
<?php require "template-parts/layouts/header.php"; ?>
<!--breadcrumb-->
<div class="about__section1">
    <div class="uk-container">
        <ul class="uk-breadcrumb about__breadcrumb">
            <li><a href=".">Trang chủ </a></li>
            <li><span>Giới thiệu</span></li>
        </ul>
    </div>
</div>
<!--/breadcrumb-->



<!--Câu chuyện hình thành và phát triển về Cây Bút Nhí-->
<div class="about__cauchuyen__bg uk-section-xsmall uk-text-center">
    <div class="uk-container">
        <div class="about__cauchuyen__txt">Lộ trình học Tiếng Việt lớp V2.4</div>
    </div>
</div>
<!--/Câu chuyện hình thành và phát triển về Cây Bút Nhí-->

<!--Timeline-->
<div class="uk-section home__section">
    <div class="uk-container" uk-scrollspy="target: > div > div; cls: uk-animation-slide-bottom-small; delay: 500">
        <?php for ($i=1;$i<=4;$i++): ?>
        <div class="uk-child-width-1-2@m uk-grid-divider uk-grid-large about__timeline__divider" uk-grid>
            <div class="<?= ($i%2 === 0)?'uk-flex-last@m right':'left' ?>">
                <div class="uk-position-relative">
                    <div class="about__timeline__cardImg uk-card uk-card-body uk-card-default">
                        <img class="uk-width" src="images/Rectangle140378.png" alt="">
                    </div>
                    <div class="about__timeline__dot">

                    </div>
                </div>
            </div>
            <div>
                <div class="about__timeline__title">Cây Bút Nhí</div>
                <p class="about__timeline__desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
        </div>
        <?php endfor; ?>
    </div>
</div>
<!--/Timeline-->



<?php require "template-parts/layouts/footer.php"; ?>