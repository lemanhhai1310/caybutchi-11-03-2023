<?php $data["title"] = "Khoá học"; ?>
<?php $isLogin = false ?>
<?php require "template-parts/layouts/header.php"; ?>
<!--breadcrumb-->
<div class="about__section1">
    <div class="uk-container">
        <ul class="uk-breadcrumb about__breadcrumb">
            <li><a href=".">Trang chủ </a></li>
            <li><span>Khoá học</span></li>
        </ul>
    </div>
</div>
<!--/breadcrumb-->

<!--Slider-->
<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="autoplay: true; min-height: 300; max-height: 400">

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

<div class="uk-section home__section">
    <div class="uk-container">
        <div class="uk-grid-small" uk-grid>
            <div class="uk-width-expand">
                <h1 class="uk-h1 khoahoc__title">Lịch học các lớp dài hạn năm 2022-2023</h1>
            </div>
            <div class="uk-width-auto@s">
                <div class="uk-width" uk-form-custom="target: > * > span:first-child">
                    <select aria-label="Custom controls">
                        <option value="">Chọn lớp của bạn</option>
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
        <div class="item__80-40 uk-grid-109-m uk-grid" uk-grid>
            <div class="uk-width-expand">
                <article class="uk-article about__article">
                    <h1 class="uk-article-title khoahoc__title1">Chào mừng các em học sinh bước vào lớp 3!</h1>
                    <p><strong>Lớp 3 là một năm học với nhiều thay đổi quan trọng đối với mỗi học sinh.</strong></p>
                    <p>Năm học lớp 3 là một bước chuyển tiếp giữa vui chơi, khám phá và xác định mục tiêu. Các em học sinh học lớp 1, lớp 2 với tinh thần tự do khám phá, tự do phát triển; trong khi ở lớp 3, các em sẽ tập trung vào xây dựng các kỹ năng và rèn luyện mức độ tập trung.</p>
                    <p>Năm học 2022 – 2023 đang tới, Cây Bút Nhí chúc cho các em thành công trong việc rèn luyện sự tập trung, kiên trì, nhẫn nại; rèn được nét chữ viết nhanh nhưng đẹp; đọc nhanh, hiểu nhanh và nhớ sâu; rèn được các kỹ năng tính toán… ngày một hoàn thiện bản thân để sẵn sàng chinh phục những mục tiêu trong kỳ thi chuyển cấp vào lớp 6.</p>
                </article>
            </div>
            <div class="uk-width-auto@m">
                <div class="home__about__coverImg uk-cover-container uk-border-rounded uk-background-muted">
                    <img src="images/Rectangle140378.png" alt="" uk-cover="">
                    <canvas width="542" height="388"></canvas>
                </div>
            </div>
        </div>
        <div class="uk-overflow-auto item__40-20">
            <table class="khoahoc__table uk-table uk-table-striped uk-table-small">
                <thead>
                <tr>
                    <th>Môn</th>
                    <th>Địa điểm</th>
                    <th>Mã lớp</th>
                    <th>Ngày</th>
                    <th>Giờ</th>
                    <th>Giáo viên</th>
                    <th>Lộ trình</th>
                </tr>
                </thead>
                <tbody>
                <?php for ($i=1;$i<=12;$i++): ?>
                <tr>
                    <td>Tiếng Việt</td>
                    <td>CBN Cầu Giấy</td>
                    <td>V2.4</td>
                    <td>Thứ 7</td>
                    <td>18:00-20:00</td>
                    <td>Dương Hằng</td>
                    <td><a href="" class="khoahoc__table__link">Xem Chi tiết</a></td>
                </tr>
                <?php endfor; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php require "template-parts/layouts/footer.php"; ?>