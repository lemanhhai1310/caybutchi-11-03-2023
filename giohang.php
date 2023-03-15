<?php $data["title"] = "Giỏ hàng"; ?>
<?php $isLogin = false ?>
<?php require "template-parts/layouts/header.php"; ?>
<!--breadcrumb-->
<div class="about__section1">
    <div class="uk-container">
        <ul class="uk-breadcrumb about__breadcrumb">
            <li><a href=".">Trang chủ </a></li>
            <li><span>Giỏ hàng</span></li>
        </ul>
    </div>
</div>
<!--/breadcrumb-->

<div class="uk-section home__section">
    <div class="uk-container">
        <div class="uk-grid-100-m uk-grid" uk-grid>
            <div class="uk-width-expand">
                <h1 class="uk-h1 giohang__title">
                    <div class="uk-flex uk-flex-middle">
                        Sản phẩm bạn đã chọn
                        <svg class="uk-margin-small-left" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.0009 1C14.4096 1 12.8834 1.63214 11.7582 2.75736C10.633 3.88258 10.0009 5.4087 10.0009 7V8H9.17085C8.32897 7.99911 7.51918 8.32297 6.91007 8.90413C6.30096 9.4853 5.93947 10.279 5.90085 11.12L5.11085 27.57C5.0906 28.0123 5.16013 28.4542 5.31525 28.869C5.47036 29.2837 5.70785 29.6628 6.0134 29.9833C6.31895 30.3038 6.68624 30.5591 7.09312 30.7338C7.49999 30.9086 7.93804 30.9991 8.38085 31H23.6209C24.0637 30.9991 24.5017 30.9086 24.9086 30.7338C25.3155 30.5591 25.6828 30.3038 25.9883 29.9833C26.2939 29.6628 26.5313 29.2837 26.6865 28.869C26.8416 28.4542 26.9111 28.0123 26.8909 27.57L26.1009 11.12C26.0622 10.279 25.7007 9.4853 25.0916 8.90413C24.4825 8.32297 23.6727 7.99911 22.8309 8H22.0009V7C22.0009 5.4087 21.3687 3.88258 20.2435 2.75736C19.1183 1.63214 17.5922 1 16.0009 1ZM12.0009 7C12.0009 5.93913 12.4223 4.92172 13.1724 4.17157C13.9226 3.42143 14.94 3 16.0009 3C17.0617 3 18.0791 3.42143 18.8293 4.17157C19.5794 4.92172 20.0009 5.93913 20.0009 7V8H12.0009V7ZM10.3609 12.19C10.3609 11.9922 10.4195 11.7989 10.5294 11.6344C10.6393 11.47 10.7954 11.3418 10.9782 11.2661C11.1609 11.1904 11.362 11.1706 11.5559 11.2092C11.7499 11.2478 11.9281 11.343 12.068 11.4829C12.2078 11.6227 12.3031 11.8009 12.3416 11.9949C12.3802 12.1889 12.3604 12.39 12.2847 12.5727C12.209 12.7554 12.0809 12.9116 11.9164 13.0215C11.752 13.1314 11.5586 13.19 11.3609 13.19C11.0956 13.19 10.8413 13.0846 10.6537 12.8971C10.4662 12.7096 10.3609 12.4552 10.3609 12.19ZM19.6409 12.19C19.6409 11.9922 19.6995 11.7989 19.8094 11.6344C19.9193 11.47 20.0754 11.3418 20.2582 11.2661C20.4409 11.1904 20.642 11.1706 20.8359 11.2092C21.0299 11.2478 21.2081 11.343 21.348 11.4829C21.4878 11.6227 21.5831 11.8009 21.6216 11.9949C21.6602 12.1889 21.6404 12.39 21.5647 12.5727C21.489 12.7554 21.3609 12.9116 21.1964 13.0215C21.032 13.1314 20.8386 13.19 20.6409 13.19C20.3756 13.19 20.1213 13.0846 19.9337 12.8971C19.7462 12.7096 19.6409 12.4552 19.6409 12.19Z" fill="#FDC948"/>
                        </svg>
                    </div>
                </h1>
                <div class="item__54-20">
                    <?php for ($i=1;$i<=3;$i++): ?>
                    <div class="giohang__item uk-card uk-margin uk-card-default uk-padding-small uk-position-relative">
                        <a href="" class="giohang__item__close uk-position-top-right uk-position-small" uk-close></a>
                        <div class="uk-grid-small uk-grid-20-m uk-grid uk-grid-match" uk-grid>
                            <div class="uk-width-auto@m">
                                <div class="uk-cover-container giohang__item__img">
                                    <img src="images/noimage.jpg" alt="" uk-cover="">
                                    <canvas width="180" height="105"></canvas>
                                </div>
                            </div>
                            <div class="uk-width-expand">
                                <div class="uk-flex uk-flex-column uk-flex-between">
                                    <div class="giohang__item__name"><a href="">Ôn thi vào lớp 6 - HSG</a></div>
                                    <div class="uk-flex-middle uk-flex giohang__item__txt">
                                        <svg class="uk-margin-small-right" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.05944 2.3602C3.0589 2.3602 3.0583 2.3602 3.05776 2.3602C2.8686 2.3602 2.69069 2.43394 2.55634 2.56794C2.42052 2.70343 2.3457 2.88384 2.3457 3.07589V13.8076C2.3457 14.2011 2.66712 14.5221 3.06227 14.5231C4.72814 14.527 7.51912 14.8743 9.44452 16.8891V5.65812C9.44452 5.52472 9.41044 5.3994 9.34613 5.2957C7.76586 2.75077 4.72908 2.3641 3.05944 2.3602Z" fill="#262626" fill-opacity="0.7"/>
                                            <path d="M17.6534 13.8076V3.07583C17.6534 2.88378 17.5786 2.70337 17.4428 2.56788C17.3084 2.43388 17.1304 2.36014 16.9414 2.36014C16.9408 2.36014 16.9402 2.36014 16.9397 2.36014C15.2701 2.36411 12.2333 2.75078 10.653 5.2957C10.5887 5.39941 10.5547 5.52473 10.5547 5.65813V16.8891C12.4801 14.8742 15.2711 14.527 16.9369 14.523C17.332 14.522 17.6534 14.2011 17.6534 13.8076Z" fill="#262626" fill-opacity="0.7"/>
                                            <path d="M19.2837 4.83508H18.7647V13.8076C18.7647 14.8124 17.9461 15.6317 16.9398 15.6342C15.5268 15.6375 13.1969 15.9138 11.5469 17.4755C14.4006 16.7768 17.409 17.231 19.1235 17.6217C19.3375 17.6705 19.5588 17.6201 19.7303 17.4834C19.9012 17.347 19.9992 17.1432 19.9992 16.9244V5.55064C19.9993 5.15609 19.6782 4.83508 19.2837 4.83508Z" fill="#262626" fill-opacity="0.7"/>
                                            <path d="M1.23448 13.8076V4.83508H0.715558C0.321079 4.83508 0 5.15609 0 5.55064V16.9242C0 17.1431 0.0980475 17.3468 0.268957 17.4832C0.440338 17.6198 0.661349 17.6704 0.875761 17.6215C2.59024 17.2307 5.59867 16.7766 8.45229 17.4753C6.80231 15.9137 4.47247 15.6375 3.05947 15.6341C2.05321 15.6317 1.23448 14.8124 1.23448 13.8076Z" fill="#262626" fill-opacity="0.7"/>
                                        </svg>
                                        16 bài giảng
                                    </div>
                                    <div class="giohang__item__gia">699.000 đ</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
            <div class="uk-width-auto@m">
                <div class="uk-card giohang__card">
                    <div class="uk-card-header">
                        Thông tin đơn hàng
                    </div>
                    <div class="uk-card-body">
                        <div class="giohang__card__label">Sản phẩm:</div>
                        <div class="item__40-20">
                            <?php for ($i=1;$i<=3;$i++): ?>
                                <div class="uk-grid-5 uk-flex-middle item__28" uk-grid>
                                    <div class="uk-width-expand">
                                        <div class="giohang__card__name">Ôn thi vào lớp 6 - HSG</div>
                                    </div>
                                    <div class="uk-width-auto">
                                        <div class="giohang__card__sltxt">X1</div>
                                    </div>
                                </div>
                            <?php endfor; ?>
                        </div>
                        <hr>
                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                            <div class="uk-width-expand">
                                <div class="giohang__card__tamtinhtxt">Tạm tính:</div>
                            </div>
                            <div class="uk-width-auto">
                                <div class="giohang__card__gia">2.000.000 đ</div>
                            </div>
                        </div>
                        <a href="thanhtoan.php" class="uk-button giohang__card__btn item__40-20 uk-button-secondary uk-width">
                            Tiến thành thanh toán
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.34455 8.66796H13.0555L10.8615 10.862C10.2313 11.4922 11.1766 12.4375 11.8068 11.8073L13.8049 9.806L15.1388 8.47004C15.3973 8.20998 15.3973 7.78998 15.1388 7.52992L11.8068 4.194C11.68 4.06373 11.5055 3.99064 11.3237 3.99215C10.7236 3.99223 10.4291 4.72319 10.8615 5.13934L13.0607 7.33338H1.31004C0.38578 7.37924 0.454791 8.71397 1.34455 8.66796Z" fill="white"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require "template-parts/layouts/footer.php"; ?>