<?php $data["title"] = "Đăng ký"; ?>
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

                                <legend class="uk-legend uk-text-center dangnhap__form__title">Đăng ký</legend>

                                <div class="item__60-30">
                                    <div class="uk-inline uk-width">
                                        <span class="uk-form-icon" uk-icon="icon: user"></span>
                                        <input class="uk-input dangnhap__form__input" type="text" aria-label="Not clickable icon" placeholder="Họ và tên">
                                    </div>
                                </div>

                                <div class="uk-margin">
                                    <div class="uk-inline uk-width">
                                        <span class="uk-form-icon" uk-icon="icon: mail"></span>
                                        <input class="uk-input dangnhap__form__input" type="text" aria-label="Not clickable icon" placeholder="Email/Số điện thoại">
                                    </div>
                                </div>

                                <div class="uk-margin">
                                    <div class="uk-inline uk-width">
                                        <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                        <a class="uk-form-icon uk-form-icon-flip" href="#" uk-icon="icon: eye-slash"></a>
                                        <input class="uk-input dangnhap__form__input" type="password" aria-label="Clickable icon" placeholder="Mật khẩu">
                                    </div>
                                </div>

                                <div class="uk-margin">
                                    <div class="uk-inline uk-width">
                                        <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                        <a class="uk-form-icon uk-form-icon-flip" href="#" uk-icon="icon: eye-slash"></a>
                                        <input class="uk-input dangnhap__form__input" type="password" aria-label="Clickable icon" placeholder="Nhập lại mật khẩu">
                                    </div>
                                </div>

                                <div class="uk-margin-top uk-grid uk-flex-middle" uk-grid>
                                    <div class="uk-width-expand">
                                        <label class="dangnhap__form__labelCheckbox"><input class="uk-checkbox" type="checkbox" checked> Tạo tài khoản có nghĩa là bạn đồng ý với
                                            <a href="">Điều khoản dịch vụ</a> và <a href="">Chính sách quyền riêng tư</a> của chúng tôi.</label>
                                    </div>
                                    <div class="uk-width-auto uk-hidden">

                                    </div>
                                </div>

                                <button class="uk-button uk-button-secondary uk-width dangnhap__form__btnSubmit item__40-20">Đăng ký</button>
                                <div class="item__40-20 uk-position-relative dangnhap__form__Or">
                                    <span class="uk-position-center dangnhap__form__Or__txt">Hoặc</span>
                                    <hr class="uk-divider-icon">
                                </div>
                                <div class="item__40-20 uk-flex uk-flex-middle uk-flex-center">
                                    <a href="" class="uk-icon-button dangnhap__form__icon dangnhap__form__icon--fb uk-margin-small-right" uk-icon="facebook"></a>
                                    <a href="" class="uk-icon-button dangnhap__form__icon dangnhap__form__icon--google" uk-icon="google"></a>
                                </div>
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