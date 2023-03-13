<?php $data["title"] = "Chi tiết Tin tức-Tuyển dụng"; ?>
<?php $isLogin = false ?>
<?php require "template-parts/layouts/header.php"; ?>
<!--breadcrumb-->
<div class="about__section1">
    <div class="uk-container">
        <ul class="uk-breadcrumb about__breadcrumb">
            <li><a href=".">Trang chủ</a></li>
            <li><a href="tintuc.php">Tin tức-Tuyển sinh</a></li>
            <li><span>Khai giảng lớp 5 môn Tiếng Việt khối chuyên năm học 2021 – 2022 tại cơ sở CBN Cầu Giấy</span></li>
        </ul>
    </div>
</div>
<!--/breadcrumb-->


<div class="uk-section home__section">
    <div class="uk-container">
        <div class="uk-grid-small uk-grid-109-m" uk-grid>
            <div class="uk-width-expand">
                <h1 class="uk-h1 chitiettintuc__title">Khai giảng lớp 5 môn Tiếng Việt khối chuyên năm học 2021 – 2022 tại cơ sở CBN Cầu Giấy</h1>
                <div class="item__20">
                    <span class="chitiettintuc__time">24 th11 2022</span> - <a href="" class="chitiettintuc__category">CBN Tuyển Sinh</a>
                </div>
                <div class="item__40-20 chitiettintuc__desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type</div>
                <div class="uk-cover-container item__20 chitiettintuc__thumbnail">
                    <img src="images/noimage.jpg" alt="" uk-cover="">
                    <canvas width="758" height="480"></canvas>
                </div>
                <article class="uk-article item__20 chitiettintuc__article">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </article>
            </div>
            <div class="uk-width-1-3@m">
                <div class="uk-margin-medium">
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
                <div class="uk-margin-medium">
                    <h4 class="uk-h4 tintuc__title">Tin tức liên quan</h4>
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
        <div class=" item__120-60">
            <h1 class="uk-h1 khoahoc__title">Xem thêm tin tức khác</h1>
            <div class="uk-overflow-auto home__tintuc__overflow__boxSpace item__60-30 home__tintuc__overflow__scrollbar">
                <div class="uk-grid uk-flex-nowrap uk-grid-small uk-grid-40-m" uk-grid>
                    <?php
                    $data = array(
                        'CBN Tuyển sinh',
                        'HOẠT ĐỘNG CBN',
                        'TIN GIÁO DỤC',
                    );
                    foreach ($data as $k=>$v): ?>
                        <div class="uk-width-1-3@m uk-width-auto home__tintuc__overflow__column">
                            <div class="home__tintuc__overflow__width">
                                <div class="home__tintuc__title1"><?= $v ?></div>
                                <?php for ($i=1;$i<=3;$i++): ?>
                                    <div class="uk-margin uk-grid-match uk-grid-12" uk-grid>
                                        <div class="uk-width-2-5 uk-width-auto@m">
                                            <div class="home__tintuc__coverImg uk-cover-container">
                                                <img src="images/noimage.jpg" alt="" uk-cover="">
                                                <canvas width="180" height="160"></canvas>
                                            </div>
                                        </div>
                                        <div class="uk-width-expand">
                                            <div class="uk-flex uk-flex-column">
                                                <h5 class="home__tintuc__title2 uk-h5 uk-flex-auto"><a href="" class="uk-link-toggle">Khai giảng lớp 5 môn Tiếng Việt chuyên năm học 2021 – 2022 tại cơ sở CBN Cầu Giấy</a></h5>
                                                <div class="home__tintuc__time uk-flex uk-flex-middle">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_76_324)">
                                                            <path d="M5.8295 8.82716C5.8295 8.62673 5.66693 8.46436 5.46634 8.46436H4.19903C3.99866 8.46436 3.83606 8.62673 3.83606 8.82716V10.0943C3.83606 10.295 3.99866 10.4574 4.19903 10.4574H5.46634C5.66693 10.4574 5.8295 10.295 5.8295 10.0943V8.82716Z" fill="#FDC948"/>
                                                            <path d="M8.99667 8.82716C8.99667 8.62673 8.83406 8.46436 8.63386 8.46436H7.36639C7.16602 8.46436 7.00342 8.62673 7.00342 8.82716V10.0943C7.00342 10.295 7.16602 10.4574 7.36639 10.4574H8.63386C8.83406 10.4574 8.99667 10.295 8.99667 10.0943V8.82716Z" fill="#FDC948"/>
                                                            <path d="M12.164 8.82716C12.164 8.62673 12.0014 8.46436 11.801 8.46436H10.5337C10.3331 8.46436 10.1705 8.62673 10.1705 8.82716V10.0943C10.1705 10.295 10.3331 10.4574 10.5337 10.4574H11.801C12.0014 10.4574 12.164 10.295 12.164 10.0943V8.82716Z" fill="#FDC948"/>
                                                            <path d="M5.8295 11.9948C5.8295 11.7941 5.66693 11.6318 5.46634 11.6318H4.19903C3.99866 11.6318 3.83606 11.7941 3.83606 11.9948V13.2618C3.83606 13.4623 3.99866 13.6247 4.19903 13.6247H5.46634C5.66693 13.6247 5.8295 13.4623 5.8295 13.2618V11.9948Z" fill="#FDC948"/>
                                                            <path d="M8.99667 11.9948C8.99667 11.7941 8.83406 11.6318 8.63386 11.6318H7.36639C7.16602 11.6318 7.00342 11.7941 7.00342 11.9948V13.2618C7.00342 13.4623 7.16602 13.6247 7.36639 13.6247H8.63386C8.83406 13.6247 8.99667 13.4623 8.99667 13.2618V11.9948Z" fill="#FDC948"/>
                                                            <path d="M12.164 11.9948C12.164 11.7941 12.0014 11.6318 11.8012 11.6318H10.5337C10.3331 11.6318 10.1705 11.7941 10.1705 11.9948V13.2618C10.1705 13.4623 10.3331 13.6247 10.5337 13.6247H11.8012C12.0014 13.6247 12.164 13.4623 12.164 13.2618V11.9948Z" fill="#FDC948"/>
                                                            <path d="M14.4301 1.78136V3.71683C14.4301 4.59163 13.7204 5.2966 12.8457 5.2966H11.8463C10.9715 5.2966 10.2524 4.59163 10.2524 3.71683V1.77441H5.7476V3.71683C5.7476 4.59163 5.02855 5.2966 4.15393 5.2966H3.15428C2.27963 5.2966 1.56998 4.59163 1.56998 3.71683V1.78136C0.805533 1.8044 0.177368 2.43696 0.177368 3.21446V14.5572C0.177368 15.3493 0.819398 15.9999 1.61151 15.9999H14.3885C15.1794 15.9999 15.8227 15.348 15.8227 14.5572V3.21446C15.8227 2.43696 15.1945 1.8044 14.4301 1.78136ZM13.9659 13.8509C13.9659 14.1932 13.6883 14.4709 13.3459 14.4709H2.62687C2.28442 14.4709 2.00686 14.1932 2.00686 13.8509V7.99192C2.00686 7.64947 2.28438 7.37175 2.62687 7.37175H13.3458C13.6883 7.37175 13.9658 7.64947 13.9658 7.99192L13.9659 13.8509Z" fill="#FDC948"/>
                                                            <path d="M3.15079 4.25917H4.1394C4.43947 4.25917 4.68278 4.01622 4.68278 3.71615V0.543208C4.68278 0.243105 4.43947 0 4.1394 0H3.15079C2.85069 0 2.60742 0.243105 2.60742 0.543208V3.71615C2.60742 4.01622 2.85069 4.25917 3.15079 4.25917Z" fill="#FDC948"/>
                                                            <path d="M11.8336 4.25917H12.8222C13.122 4.25917 13.3653 4.01622 13.3653 3.71615V0.543208C13.3654 0.243105 13.1221 0 12.8222 0H11.8336C11.5335 0 11.2902 0.243105 11.2902 0.543208V3.71615C11.2902 4.01622 11.5335 4.25917 11.8336 4.25917Z" fill="#FDC948"/>
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_76_324">
                                                                <rect width="16" height="16" fill="white"/>
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                    24 th11 2022
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>



<?php require "template-parts/layouts/footer.php"; ?>