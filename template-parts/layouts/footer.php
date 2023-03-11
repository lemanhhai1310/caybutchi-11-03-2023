<!--footer-->
<footer class="footer">
    <!--footer__top-->
    <div class="footer__top uk-section">
        <div class="uk-container">
            <div class="uk-grid-70-m uk-grid" uk-grid>
                <div class="uk-width-expand">
                    <div class="uk-grid-70-m uk-child-width-expand@m uk-grid" uk-grid>
                        <div class="uk-width uk-hidden@m">
                            <ul class="footer__accordion" uk-accordion>
                                <li class="uk-open">
                                    <a class="footer__accordion__title uk-accordion-title" href="#">Về Cây Bút Nhí</a>
                                    <div class="footer__accordion__content uk-accordion-content">
                                        <?php require "template-parts/footer/footer1.php"; ?>
                                    </div>
                                </li>
                                <li>
                                    <a class="footer__accordion__title uk-accordion-title" href="#">Thông tin liên hệ</a>
                                    <div class="footer__accordion__content uk-accordion-content">
                                        <?php require "template-parts/footer/footer2.php"; ?>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="uk-width-medium@m uk-box-sizing-content uk-visible@m">
                            <h3 class="footer__top__title uk-position-relative uk-h3">Về Cây Bút Nhí</h3>
                            <?php require "template-parts/footer/footer1.php"; ?>
                        </div>
                        <div class="uk-visible@m">
                            <h3 class="footer__top__title uk-position-relative uk-h3">Thông tin liên hệ</h3>
                            <?php require "template-parts/footer/footer2.php"; ?>
                        </div>
                    </div>
                </div>
                <div class="uk-width-2-5@m">
                    <form class="footer__top__card uk-form-stacked uk-card uk-card-body">
                        <legend class="footer__form__legend uk-legend">Hãy để lại thông tin của bạn ở phần form bên dưới và chúng tôi sẽ phản hồi lại bạn trong thời gian sớm nhất!</legend>

                        <div class="uk-margin">
                            <label class="footer__form__label uk-form-label" for="form-stacked-text">Họ và tên học sinh*</label>
                            <div class="uk-form-controls">
                                <input class="footer__form__input uk-input" id="form-stacked-text" type="text" placeholder="Con bạn tên gì?">
                            </div>
                        </div>

                        <div class="uk-margin">
                            <label class="footer__form__label uk-form-label" for="form-stacked-text">Con bạn đang học lớp mấy?*</label>
                            <div class="uk-form-controls">
                                <input class="footer__form__input uk-input" id="form-stacked-text" type="text" placeholder="">
                            </div>
                        </div>

                        <div class="uk-margin uk-grid-20 uk-grid" uk-grid>
                            <div class="uk-width-1-2">
                                <label class="footer__form__label uk-form-label" for="form-stacked-select">Email*</label>
                                <div class="uk-form-controls">
                                    <input class="footer__form__input uk-input" id="form-stacked-text" type="email" placeholder="abcxyz@gmail.com">
                                </div>
                            </div>
                            <div class="uk-width-1-2">
                                <label class="footer__form__label uk-form-label" for="form-stacked-select">Số điện thoại*</label>
                                <div class="uk-form-controls">
                                    <input class="footer__form__input uk-input" id="form-stacked-text" type="tel" placeholder="097.111.6262">
                                </div>
                            </div>
                        </div>

                        <div class="uk-margin">
                            <div class="footer__form__label uk-form-label">Ghi chú</div>
                            <div class="uk-form-controls">
                                <textarea class="footer__form__input uk-textarea" rows="5" placeholder="Quý phụ huynh để lại khoá học quan tâm và nguyện vọng để được tư vấn." aria-label="Textarea"></textarea>
                            </div>
                        </div>
                        <?php if (rand(0,1)): ?>
                            <button class="footer__form__btnSubmit uk-button uk-button-secondary uk-width uk-border-rounded">
                                Gửi thông tin
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_226_231)">
                                        <path d="M0.218874 15.2698C0.0874002 15.874 0.551255 16.1297 0.981658 15.9367L15.5282 8.47783H15.5296C15.7031 8.37996 15.8039 8.20361 15.8039 8.00017C15.8039 7.79662 15.7031 7.62014 15.5296 7.52232H15.5282L0.981658 0.0632796C0.551255 -0.12972 0.0874002 0.12611 0.218874 0.730296C0.227771 0.77122 1.08775 4.60191 1.55532 6.68528L9.14884 8.00013L1.55532 9.31483C1.08775 11.3981 0.227731 15.2288 0.218874 15.2698Z" fill="currentColor"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_226_231">
                                            <rect width="16" height="16" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </button>
                        <?php else: ?>
                            <button class="footer__form__btnSubmit uk-spinner uk-button uk-button-secondary uk-width uk-border-rounded">
                                Loading
                                <svg width="16" height="16" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg">
                                    <circle fill="none" stroke="#000" cx="15" cy="15" r="14"></circle>
                                </svg>
                            </button>
                        <?php endif; ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--/footer__top-->

    <!--footer__bottom-->
    <nav class="footer__bottom uk-navbar-container uk-navbar-transparent">
        <div class="uk-container">
            <div class="uk-navbar uk-flex-middle" uk-navbar>

                <div class="uk-navbar-left">
                    <div class="uk-navbar-item">
                        <span class="footer__bottom__txt">© 2023 Caybutnhi.</span>
                    </div>
                </div>

                <div class="uk-navbar-center uk-visible@m">
                    <div class="uk-navbar-item">
                        <span class="footer__bottom__txt">Bản quyền và nội dung hình ảnh thuộc về Cây Bút Nhí</span>
                    </div>
                </div>

                <div class="uk-navbar-right uk-visible@m">

                    <ul class="uk-navbar-nav">
                        <li><a href="#">Chính sách và bảo mật thông tin</a></li>
                    </ul>

                </div>

            </div>
        </div>
    </nav>
    <!--/footer__bottom-->
</footer>
<!--/footer-->
</div>
<!--/app-->
</body>
</html>