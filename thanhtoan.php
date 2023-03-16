<?php $data["title"] = "Thanh toán"; ?>
<?php $isLogin = false ?>
<?php require "template-parts/layouts/header.php"; ?>
<!--breadcrumb-->
<div class="about__section1">
    <div class="uk-container">
        <ul class="uk-breadcrumb about__breadcrumb">
            <li><a href=".">Trang chủ </a></li>
            <li><span>Thanh toán</span></li>
        </ul>
    </div>
</div>
<!--/breadcrumb-->

<div class="uk-section home__section">
    <div class="uk-container">
        <div class="uk-grid-100-m uk-grid" uk-grid>
            <div class="uk-width-expand">
                <div class="uk-margin-medium">
                    <div class="thanhtoan__title">Thông tin khách hàng</div>
                    <div class="thanhtoan__txt item__40-20">Nhập thông tin dưới đây hoặc <a href="dangnhap.php" class="uk-text-danger">đăng nhập</a> nếu bạn đã có tài khoản.</div>
                    <form class="uk-form-stacked thanhtoan__form item__40-20">

                        <div class="uk-margin">
                            <label class="uk-form-label thanhtoan__form__label" for="form-stacked-name">Họ và tên*</label>
                            <div class="uk-form-controls">
                                <input class="uk-input thanhtoan__form__input" id="form-stacked-name" type="text" placeholder="" value="Phạm Mạnh Hiếu">
                            </div>
                        </div>

                        <div class="uk-margin">
                            <div class="uk-grid-small uk-child-width-1-2@s" uk-grid>
                                <div>
                                    <label class="uk-form-label thanhtoan__form__label" for="form-stacked-phone">Số điện thoại*</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input thanhtoan__form__input" id="form-stacked-phone" type="tel" placeholder="" value="(+84) 0971116262">
                                    </div>
                                </div>
                                <div>
                                    <label class="uk-form-label thanhtoan__form__label" for="form-stacked-email">Email*</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input thanhtoan__form__input" id="form-stacked-email" type="email" placeholder="" value="phammanhhieu2411@gmail.com">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="uk-margin">
                            <label class="uk-form-label thanhtoan__form__label" for="form-stacked-note">Ghi chú</label>
                            <div class="uk-form-controls">
                                <textarea class="uk-textarea thanhtoan__form__input" id="form-stacked-note" rows="4" placeholder="" aria-label="Textarea"></textarea>
                            </div>
                        </div>

                    </form>
                </div>

                <div class="uk-margin-medium">
                    <div class="thanhtoan__title">Hình thức thanh toán</div>
                    <div class="item__40-20">
                        <label class="uk-width uk-display-block thanhtoan__payment__method uk-open">
                            <input class="uk-radio" type="radio" name="radio2" checked> Thanh toán chuyển khoản
                        </label>
                        <div class="thanhtoan__payment__content uk-padding-small uk-height-min-small uk-background-muted uk-hidden">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </div>

                        <label class="uk-width uk-display-block thanhtoan__payment__method item__40-20">
                            <input class="uk-radio" type="radio" name="radio2"> Thanh toán tại văn phòng
                        </label>
                        <div class="thanhtoan__payment__content uk-padding-small uk-height-min-small uk-background-muted uk-hidden">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </div>
                    </div>
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
                        <div class="uk-position-relative item__20 uk-grid-collapse giohang__card__giamgia" uk-grid>
                            <div class="uk-width-expand">
                                <input class="uk-input giohang__card__giamgia__input" type="text" placeholder="Nhập mã giảm giá" aria-label="Input">
                            </div>
                            <div class="uk-width-auto">
                                <button class="uk-button uk-button-secondary giohang__card__giamgia__btnSubmit">Áp dụng</button>
                            </div>
                        </div>
                        <hr>
                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                            <div class="uk-width-expand">
                                <div class="giohang__card__txtTong">Tổng:</div>
                            </div>
                            <div class="uk-width-auto">
                                <div class="giohang__card__txtTong giohang__card__txtTong--c1">2.000.000 đ</div>
                            </div>
                        </div>
                        <a href="" class="uk-button giohang__card__btn item__40-20 uk-button-secondary uk-width">
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