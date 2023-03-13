<?php $data["title"] = "Chi tiết sách"; ?>
<?php $isLogin = false ?>
<?php require "template-parts/layouts/header.php"; ?>
<!--breadcrumb-->
<div class="about__section1">
    <div class="uk-container">
        <ul class="uk-breadcrumb about__breadcrumb">
            <li><a href=".">Trang chủ</a></li>
            <li><a href="tiemsach.php">Tiệm sách</a></li>
            <li><span>Mùa tiểu học cuối cùng</span></li>
        </ul>
    </div>
</div>
<!--/breadcrumb-->


<div class="uk-section-small">
    <div class="uk-container">
        <div class="chitietsach__card uk-card uk-card-default uk-card-body uk-height-min-medium">
            <div class="uk-flex-middle uk-grid-60-m uk-grid-small" uk-grid>
                <div class="uk-width-expand">
                    <div class="uk-grid uk-grid-small uk-grid-40-m" uk-grid>
                        <div class="uk-width-auto@s">
                            <div class="chitietsach__card__coverImg uk-cover-container">
                                <img src="images/noimage.jpg" alt="" uk-cover="">
                                <canvas width="200" height="300"></canvas>
                            </div>
                        </div>
                        <div class="uk-width-expand">
                            <div>
                                <div class="chitietsach__card__title">mùa tiểu học cuối cùng</div>
                                <table class="chitietsach__card__table uk-table uk-table-small">
                                    <tbody>
                                    <tr>
                                        <td>Nhà cung cấp: <strong>Cây Bút Nhí</strong></td>
                                        <td>Tác giả: <strong>Cây Bút Nhí</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Nhà Xuất bản: <strong>Cây Bút Nhí</strong></td>
                                        <td>Hình thức bìa: <strong>Bìa mềm</strong></td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="uk-grid-small uk-margin-top uk-flex-bottom uk-child-width-auto uk-grid" uk-grid>
                                    <div>
                                        <div class="chitietsach__card__price">699.000 đ</div>
                                    </div>
                                    <div>
                                        <del class="chitietsach__card__priceOld">799.000 đ</del>
                                    </div>
                                </div>
                                <div class="item__24 chitietsach__card__desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-medium@m uk-box-sizing-content">
                    <div class="uk-padding-small chitietsach__box uk-flex uk-flex-middle">
                        <div>
                            <div class="uk-flex-middle uk-grid-small" uk-grid>
                                <div class="uk-width-auto">
                                    <div class="chitietsach__box__label">Số lượng:</div>
                                </div>
                                <div class="uk-width-expand">
                                    <div class="uk-position-relative">
                                        <a href="" class="chitietsach__box__btnSelect chitietsach__box__btnSelect--minus uk-position-center-left"></a>
                                        <input class="uk-input chitietsach__box__input" type="text" placeholder="" value="1" aria-label="Large">
                                        <a href="" class="chitietsach__box__btnSelect chitietsach__box__btnSelect--add uk-position-center-right"></a>
                                    </div>
                                </div>
                            </div>
                            <button class="uk-button chitietsach__box__btnBuy uk-button-secondary uk-width item__40-20">
                                Xác nhận đặt mua
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.34552 8.66796H13.0565L10.8624 10.862C10.2322 11.4922 11.1776 12.4375 11.8078 11.8073L13.8059 9.806L15.1398 8.47004C15.3983 8.20998 15.3983 7.78998 15.1398 7.52992L11.8078 4.194C11.681 4.06373 11.5065 3.99064 11.3247 3.99215C10.7246 3.99223 10.43 4.72319 10.8624 5.13934L13.0617 7.33338H1.31102C0.386757 7.37924 0.455768 8.71397 1.34552 8.66796Z" fill="white"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php require "template-parts/layouts/footer.php"; ?>