<?php $data["title"] = "Quên mật khẩu?"; ?>
<?php $isLogin = true ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="dangnhap__bg">
    <div class="uk-container">
        <div class="uk-grid-match" uk-grid>
            <div class="uk-width-expand uk-visible@m">
                <div class="uk-height-viewport dangnhap__sectionLeft uk-section-small uk-flex uk-flex-column uk-flex-between">
                    <div><a href="."><img src="images/logo.png" alt=""></a></div>
                    <div>
                        <img src="images/creative-thinking/cuate.png" alt="">
                    </div>
                </div>
            </div>
            <div class="uk-width-auto@m">
                <div>
                    <div class="dangnhap__width uk-section dangnhap__sectionRight">
                        <form class="dangnhap__form">
                            <fieldset class="uk-fieldset">

                                <legend class="uk-legend uk-text-center dangnhap__form__title">Quên mật khẩu?</legend>

                                <div class="item__60-30">
                                    <div class="uk-inline uk-width">
                                        <span class="uk-form-icon" uk-icon="icon: mail"></span>
                                        <input class="uk-input dangnhap__form__input" type="text" aria-label="Not clickable icon" placeholder="Email/Số điện thoại">
                                    </div>
                                </div>

                                <button class="uk-button uk-button-secondary uk-width dangnhap__form__btnSubmit item__40-20">Xác nhận</button>

                                <div class="item__40-20 uk-text-center dangnhap__form__txtDangky">
                                    Bạn đã có tài khoản? <a href="dangnhap.php" class="uk-text-warning">Đăng nhập</a>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>