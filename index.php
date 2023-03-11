<?php $data["title"] = "Home page"; ?>
<?php $bodyClass = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<!--Slider-->
<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="autoplay: true; min-height: 300; max-height: 600">

    <ul class="uk-slideshow-items">
        <li>
            <img src="images/image8.png" alt="" uk-cover="">
        </li>
        <li>
            <img src="images/photo.jpg" alt="" uk-cover>
        </li>
        <li>
            <img src="images/dark.jpg" alt="" uk-cover>
        </li>
        <li>
            <img src="images/light.jpg" alt="" uk-cover>
        </li>
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

</div>
<!--/Slider-->

<!--About-->
<div class="home__about uk-section">
    <div class="uk-container">
        <div class="uk-child-width-1-2@m uk-grid-80-m uk-flex-middle uk-grid" uk-grid>
            <div class="uk-flex-last@m">
                <div class="home__about__coverImg uk-cover-container uk-border-rounded uk-background-muted">
                    <img src="images/noimage.jpg" alt="" uk-cover="">
                    <canvas width="571" height="360"></canvas>
                </div>
            </div>
            <div>
                <div class="uk-grid uk-grid-collapse uk-child-width-auto uk-flex-bottom" uk-grid>
                    <div>
                        <h2 class="uk-h2 home__about__title">Về Cây Bút Nhí</h2>
                    </div>
                    <div>
                        <img class="home__about__iconImg" src="images/about_Group1.png" alt="">
                    </div>
                </div>
                <h4 class="uk-h4 home__about__title1 item__12">trung tâm đào tạo hàng đầu trong lĩnh vực trực tuyến</h4>
                <article class="uk-article item__40-20 home__about__article">
                    <p>
                        Là một tổ chức giáo dục hướng tới phát triển bền vững, <strong>CÂY BÚT NHÍ</strong> lấy tinh thần <strong>HƯỚNG VỀ NGUỒN CỘI</strong> là tinh thần cốt lõi trong mọi hoạt động, lấy sự <strong>HÀI LÒNG</strong> của người học và Quý phụ huynh làm mục tiêu trọng tâm.
                    </p>
                    <p>
                        Trên nền tảng đó, <strong>CÂY BÚT NHÍ</strong>  đã và đang làm việc với phương châm  <strong>"VUN ĐẮP - LAN TỎA - NUÔI DƯỠNG"</strong>
                    </p>
                    <ul class="uk-list">
                        <li>- <strong>VUN ĐẮP</strong> tình yêu tiếng Việt cho học sinh là trung tâm của mọi hoạt động dạy và học.</li>
                        <li>- <strong>LAN TỎA</strong> tình yêu tiếng Việt trên tinh thần hướng về nguồn cội.</li>
                        <li>- <strong>NUÔI DƯỠNG</strong> của học viên và Quý phụ huynh làm động lực tạo ra những giá trị bền vững.</li>
                    </ul>
                </article>
                <div class="item__40-20">
                    <a href="" class="home__about__btnMore uk-border-rounded uk-button uk-button-secondary">
                        Tìm hiểu thêm
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.138 7.52861L10.4714 2.86195C10.3456 2.74051 10.1772 2.67331 10.0024 2.67483C9.82762 2.67635 9.66041 2.74646 9.53681 2.87007C9.4132 2.99367 9.34309 3.16088 9.34157 3.33568C9.34005 3.51048 9.40725 3.67888 9.52869 3.80461L13.0574 7.33328H1.33335C1.15654 7.33328 0.986973 7.40352 0.861949 7.52854C0.736925 7.65357 0.666687 7.82313 0.666687 7.99995C0.666687 8.17676 0.736925 8.34633 0.861949 8.47135C0.986973 8.59637 1.15654 8.66661 1.33335 8.66661H13.0574L9.52869 12.1953C9.46501 12.2568 9.41423 12.3303 9.37929 12.4117C9.34435 12.493 9.32596 12.5805 9.32519 12.669C9.32442 12.7575 9.34129 12.8453 9.37481 12.9272C9.40833 13.0092 9.45783 13.0836 9.52042 13.1462C9.58302 13.2088 9.65745 13.2583 9.73938 13.2918C9.82132 13.3253 9.9091 13.3422 9.99762 13.3414C10.0861 13.3407 10.1736 13.3223 10.255 13.2873C10.3363 13.2524 10.4099 13.2016 10.4714 13.1379L15.138 8.47128C15.263 8.34626 15.3332 8.17672 15.3332 7.99995C15.3332 7.82317 15.263 7.65363 15.138 7.52861Z" fill="currentColor"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/About-->
<?php require "template-parts/layouts/footer.php"; ?>