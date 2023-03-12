<?php $data["title"] = "Home page"; ?>
<?php $isLogin = false ?>
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
<div class="home__about uk-section home__section">
    <div class="uk-container">
        <div class="uk-child-width-1-2@m uk-grid-80-m uk-flex-middle uk-grid" uk-grid>
            <div class="uk-flex-last@m">
                <div class="home__about__coverImg uk-cover-container uk-border-rounded uk-background-muted">
                    <img src="images/Rectangle140378.png" alt="" uk-cover="">
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

<!--Thành tựu-->
<div class="home__sectionbg old uk-background-norepeat uk-background-top-center" data-src="images/pngegg51.png" uk-img>
    <!--Banner-->
    <div class="uk-text-center"><img src="images/Frame2020.png" alt=""></div>
    <!--/Banner-->

    <div class="uk-section home__section">
        <div class="uk-container">
            <div class="uk-text-center">
                <h3 class="uk-h3 home__section__title1">Thành tựu</h3>
                <div class="home__section__title2 item__12">Những con số nổi bật</div>
            </div>
            <div uk-scrollspy="target: > div; cls: uk-animation-fade; delay: 500" class="uk-grid item__60-30 uk-child-width-1-1 uk-child-width-1-4@m uk-grid-30 uk-grid-40-m" uk-grid>
                <?php
                $data = array(
                    array(
                        'txt1' => 'Cây Bút Nhí sau hơn 3 năm thành lập đã có được',
                        'txt2' => 'Đã và đang theo học tại trung tâm và trực tuyến ',
                        'title1' => '5000+',
                        'title2' => 'Học sinh',
                        'svg' => '<svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M28.875 1.75244C27.4359 1.75244 26.2534 2.93484 26.2534 4.37395V18.3705C26.2534 19.8096 27.4359 21.0007 28.875 21.0007H29.7466V25.3724C29.7457 25.5404 29.7932 25.7051 29.8835 25.8469C29.9738 25.9887 30.103 26.1015 30.2557 26.1718C30.4083 26.2421 30.578 26.2669 30.7444 26.2433C30.9109 26.2197 31.067 26.1488 31.1941 26.0389L37.0713 21.0007H51.6233C53.0624 21.0007 54.2534 19.8097 54.2534 18.3705V4.37395C54.2534 2.93484 53.0624 1.75244 51.6233 1.75244H28.875ZM4.375 3.49561C2.93588 3.49561 1.75342 4.68658 1.75342 6.12569V34.1257C1.75342 35.5649 2.93588 36.7473 4.375 36.7473H48.1233C49.5624 36.7473 50.7517 35.5649 50.7517 34.1257V22.7507H47.2517V32.3757C47.2508 32.6077 47.1577 32.83 46.993 32.9935C46.8283 33.1569 46.6054 33.2482 46.3733 33.2473H6.12671C6.01166 33.2479 5.89761 33.2259 5.79109 33.1825C5.68456 33.139 5.58766 33.075 5.50591 32.9941C5.42416 32.9131 5.35918 32.8168 5.31468 32.7107C5.27018 32.6046 5.24704 32.4907 5.24658 32.3757V7.87572C5.24614 7.7601 5.26862 7.64552 5.31272 7.53863C5.35681 7.43175 5.42165 7.33469 5.50349 7.25302C5.58533 7.17134 5.68254 7.10666 5.78951 7.06277C5.89648 7.01889 6.01109 6.99661 6.12671 6.99727H24.5034V4.37395C24.5034 4.06474 24.5676 3.77185 24.6675 3.49561H4.375ZM36.7825 6.12569C36.9324 6.129 37.0818 6.17172 37.2131 6.25407L44.2149 10.6342C44.7643 10.9768 44.7643 11.7767 44.2149 12.1193L37.2131 16.4925C36.6303 16.8542 35.8769 16.435 35.8767 15.7491V6.99748C35.8767 6.4317 36.3327 6.11174 36.7825 6.12569ZM17.5 10.499C14.6066 10.499 12.2483 12.8574 12.2483 15.7507V18.3722C12.2457 18.8588 12.6401 19.2543 13.1267 19.2524V20.124C13.1267 21.6715 13.8048 23.0616 14.875 24.0239V26.2541H13.9983C11.1055 26.2541 8.74753 28.603 8.74658 31.4955H28.0017C28.0008 28.603 25.6445 26.2541 22.7517 26.2541H21.875V24.0256C22.9448 23.0632 23.6233 21.6726 23.6233 20.124V19.2524C24.1099 19.2542 24.5045 18.8588 24.5017 18.3722V15.7507C24.5017 12.8574 22.1434 10.499 19.25 10.499H17.5ZM20.8718 17.7348L21.8716 18.7328V20.124C21.8716 22.0781 20.3326 23.624 18.3784 23.624C16.4243 23.624 14.8767 22.0781 14.8767 20.124V19.2524H15.7483C17.9822 19.2524 20.2902 18.1091 20.8718 17.7348ZM16.625 25.0664C17.1744 25.2621 17.763 25.374 18.3784 25.374C18.9916 25.374 19.5778 25.2625 20.125 25.0681V26.9668C20.125 26.9668 19.8578 28.0007 18.375 28.0007C16.8922 28.0007 16.625 26.9668 16.625 26.9668V25.0664ZM9.63355 38.4974C7.22493 38.4974 5.25342 40.462 5.25342 42.8706V43.749C5.25342 44.1191 5.31284 44.4735 5.4004 44.8171C5.91705 44.6941 6.45283 44.6223 7.00513 44.6223H12.2551C12.8089 44.6223 13.3447 44.6918 13.8582 44.8171C13.9454 44.4735 14.0051 44.1191 14.0051 43.749V42.8706C14.0051 40.462 12.0422 38.4974 9.63355 38.4974ZM27.9966 38.4974C25.588 38.4974 23.6182 40.462 23.6182 42.8706V43.749C23.6182 44.1198 23.679 44.4745 23.7669 44.8188C24.2819 44.6925 24.8193 44.6223 25.375 44.6223H30.6267C31.1781 44.6223 31.7117 44.6912 32.2229 44.8155C32.3099 44.4723 32.3699 44.1186 32.3699 43.7491V42.8707C32.3699 40.4621 30.4052 38.4974 27.9966 38.4974ZM46.3733 38.4974C43.9647 38.4974 42 40.462 42 42.8706V43.749C42 44.1191 42.0597 44.4735 42.147 44.8171C42.6624 44.6905 43.2005 44.6223 43.7568 44.6223H49.0085C49.5578 44.6223 50.0909 44.6937 50.6047 44.8154C50.692 44.4722 50.7517 44.1186 50.7517 43.7491V42.8706C50.7517 40.462 48.7819 38.4974 46.3733 38.4974ZM7.00513 46.3723C4.11178 46.3723 1.75346 48.729 1.75342 51.6224V53.374C1.75298 53.4895 1.7754 53.6039 1.81939 53.7107C1.86338 53.8175 1.92806 53.9144 2.00972 53.9961C2.09138 54.0778 2.18839 54.1424 2.29516 54.1864C2.40193 54.2304 2.51636 54.2529 2.63184 54.2524H16.6284C16.7439 54.2529 16.8583 54.2304 16.9651 54.1864C17.0719 54.1424 17.1689 54.0778 17.2505 53.9961C17.3322 53.9144 17.3969 53.8175 17.4409 53.7107C17.4849 53.6039 17.5073 53.4895 17.5068 53.374V51.6224C17.5068 48.729 15.1485 46.3723 12.2551 46.3723H7.00513ZM25.375 46.3723C22.4817 46.3723 20.1233 48.729 20.1233 51.6224V53.374C20.1229 53.4895 20.1453 53.6039 20.1893 53.7107C20.2333 53.8175 20.2979 53.9144 20.3796 53.9961C20.4613 54.0778 20.5583 54.1424 20.665 54.1864C20.7718 54.2304 20.8862 54.2529 21.0017 54.2524H34.9983C35.1138 54.2529 35.2282 54.2304 35.335 54.1864C35.4417 54.1424 35.5388 54.0778 35.6204 53.9961C35.7021 53.9144 35.7668 53.8175 35.8107 53.7107C35.8547 53.6039 35.8772 53.4895 35.8767 53.374V51.6224C35.8767 48.729 33.5201 46.3723 30.6267 46.3723H25.375ZM43.7568 46.3723C40.8635 46.3723 38.5051 48.729 38.5051 51.6224V53.374C38.5047 53.4895 38.5271 53.6039 38.5711 53.7107C38.6151 53.8175 38.6798 53.9144 38.7614 53.9961C38.8431 54.0778 38.9401 54.1424 39.0469 54.1864C39.1536 54.2304 39.2681 54.2529 39.3836 54.2524H53.3818C53.6139 54.2515 53.8361 54.1584 53.9995 53.9937C54.163 53.8289 54.2543 53.6061 54.2534 53.374V51.6224C54.2534 48.729 51.9019 46.3723 49.0086 46.3723H43.7568Z" fill="#FDC948"/>
</svg>
',
                    ),
                    array(
                        'txt1' => 'Luôn duy trì và đảm bảo chất lượng',
                        'txt2' => 'Học sinh tốt nghiệp và đỗ chuyên mỗi năm',
                        'title1' => '90%',
                        'title2' => 'tỉ lệ',
                        'svg' => '<svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_65_259)">
<path d="M43.2294 19.2137C43.3101 21.3881 46.4307 21.3865 46.5106 19.2137V12.4495L43.2294 13.6488V19.2137Z" fill="#FDC948"/>
<path d="M10.5664 9.34946L27.4308 15.5177C27.7947 15.6508 28.1936 15.6508 28.5576 15.5179L45.4333 9.34968C46.8606 8.8296 46.8601 6.78757 45.4334 6.26782L28.5633 0.099832C28.1995 -0.0332773 27.8004 -0.0332773 27.4366 0.099832L10.5666 6.26782C9.1395 6.78779 9.14005 8.82971 10.5664 9.34946Z" fill="#FDC948"/>
<path d="M16.695 35.7903C16.695 32.7218 14.1985 30.2253 11.13 30.2253C3.75737 30.5051 3.75944 41.0767 11.1301 41.3553C14.1985 41.3553 16.695 38.8589 16.695 35.7903Z" fill="#FDC948"/>
<path d="M50.4351 35.7903C50.4351 32.7218 47.9386 30.2253 44.8701 30.2253C37.4975 30.5051 37.4996 41.0767 44.8702 41.3553C47.9386 41.3553 50.4351 38.8589 50.4351 35.7903Z" fill="#FDC948"/>
<path d="M22.435 35.7903C22.435 38.8589 24.9315 41.3553 28 41.3553C35.3726 41.0756 35.3707 30.504 27.9999 30.2253C24.9315 30.2253 22.435 32.7218 22.435 35.7903Z" fill="#FDC948"/>
<path d="M44.87 41.3555C42.6728 41.3555 40.6223 41.9956 38.8951 43.099C41.0784 45.6225 42.4 48.9032 42.4 52.4854V56H54.3594C55.2655 56 56 55.2655 56 54.3594V52.4854C56 46.3483 51.0072 41.3555 44.87 41.3555Z" fill="#FDC948"/>
<path d="M27.9067 41.3555C21.7244 41.3555 16.6947 46.3483 16.6947 52.4855V56H39.1189V52.4854C39.1188 46.3483 34.089 41.3555 27.9067 41.3555Z" fill="#FDC948"/>
<path d="M11.13 41.3555C4.99286 41.3555 0 46.3483 0 52.4854V54.3594C0 55.2655 0.734563 56 1.64063 56H13.4134V52.4854C13.4134 48.8675 14.7616 45.5569 16.9841 43.0234C15.2823 41.9668 13.2763 41.3555 11.13 41.3555Z" fill="#FDC948"/>
<path d="M38.427 21.2723V15.4041L29.684 18.5997C28.6008 18.9983 27.3849 18.9983 26.3025 18.5987L17.5729 15.4059V21.2741C17.5729 21.9629 18.0032 22.5784 18.6501 22.8149L27.4309 26.0263C27.7947 26.1593 28.1938 26.1593 28.5576 26.0264L37.3496 22.8133C37.9965 22.5769 38.427 21.9613 38.427 21.2723Z" fill="#FDC948"/>
</g>
<defs>
<clipPath id="clip0_65_259">
<rect width="56" height="56" fill="white"/>
</clipPath>
</defs>
</svg>
',
                    ),
                    array(
                        'txt1' => 'Đội ngũ giảng viên tại Cây Bút Nhí có hơn',
                        'txt2' => 'Có trình độ và kinh nghiệm tới từ các trường danh tiếng',
                        'title1' => '50+',
                        'title2' => 'Giảng viên',
                        'svg' => '<svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M43.0917 41.3243H46.0834V42.2488H43.0917V41.3243ZM43.0917 39.4697H47.4098V40.3942H43.0917V39.4697ZM43.0917 37.6207H47.4098V38.5452H43.0917V37.6207ZM41.2198 34.5085V46.5671H49.2589V34.5085H41.2198ZM31.9864 34.5085V46.5671H40.0254V34.5085H31.9864ZM30.1374 32.6882H51.1308V48.4161H43.0917C43.0902 48.6618 42.9915 48.8969 42.8173 49.0701C42.643 49.2433 42.4073 49.3405 42.1616 49.3406H39.0779C38.8367 49.3346 38.6074 49.2346 38.439 49.0618C38.2706 48.8891 38.1763 48.6573 38.1764 48.4161H30.1374V32.6882ZM30.7116 25.7976C33.2808 25.8069 35.8346 26.1939 38.2913 26.946C41.347 27.7524 44.2279 29.115 46.7897 30.9656H28.4147V44.1726H13.6515C14.6274 43.672 15.4089 42.8607 15.8727 41.8667C16.3364 40.8727 16.456 39.7526 16.2126 38.6831C15.9736 37.7828 15.4815 36.97 14.7944 36.341C14.1074 35.7119 13.2545 35.2931 12.3366 35.1343V34.9851C12.3514 34.2747 12.524 33.5764 12.8418 32.9409C13.1596 32.3053 13.6147 31.7483 14.1741 31.3102C16.8915 29.3589 19.9205 27.8832 23.1319 26.946C25.5962 26.2281 28.1452 25.8419 30.7116 25.7976ZM4.71948 20.1788C4.8642 20.1309 5.02201 20.1424 5.15823 20.2108C5.29446 20.2792 5.39793 20.399 5.44591 20.5436L10.6484 36.2427C11.134 36.1316 11.6369 36.1187 12.1275 36.205C12.6181 36.2912 13.0865 36.4748 13.5051 36.7448C13.9237 37.0149 14.284 37.366 14.5648 37.7775C14.8456 38.189 15.0412 38.6525 15.14 39.1407C15.2389 39.629 15.2391 40.132 15.1405 40.6203C15.0419 41.1087 14.8466 41.5723 14.5661 41.9839C14.2856 42.3956 13.9255 42.7469 13.5071 43.0173C13.0887 43.2876 12.6204 43.4715 12.1298 43.558C9.97651 44.0922 8.78789 44.3909 7.88062 40.7733C7.09391 37.6035 7.90358 36.9777 9.55733 36.5127L4.35489 20.9052C4.33114 20.8335 4.32173 20.7579 4.32719 20.6826C4.33266 20.6074 4.35291 20.5339 4.38677 20.4664C4.42063 20.399 4.46744 20.3389 4.52453 20.2895C4.58163 20.2402 4.64784 20.2025 4.71948 20.1788ZM30.7116 5.12573C32.5287 5.12573 34.305 5.66457 35.8159 6.67411C37.3268 7.68364 38.5043 9.11853 39.1997 10.7973C39.8951 12.4761 40.077 14.3234 39.7225 16.1056C39.368 17.8878 38.493 19.5249 37.2081 20.8098C35.9232 22.0947 34.2862 22.9697 32.504 23.3242C30.7218 23.6787 28.8745 23.4968 27.1957 22.8014C25.5169 22.106 24.082 20.9284 23.0724 19.4175C22.0629 17.9067 21.5241 16.1303 21.5241 14.3132C21.5241 11.8766 22.492 9.53968 24.215 7.81669C25.938 6.0937 28.2749 5.12573 30.7116 5.12573Z" fill="#FDC948"/>
</svg>
',
                    ),
                    array(
                        'txt1' => 'Hợp tác thân thiện và uy tín cùng mọi đối tác ',
                        'txt2' => 'Thường niên và luôn duy trì mối quan hệ tốt nhất',
                        'title1' => '200+',
                        'title2' => 'Đối tác',
                        'svg' => '<svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M25.3496 6.40609C25.3496 6.40609 25.3497 6.40609 25.3497 6.40598L28.0001 0L30.6504 6.40609L37.0352 7.11856L32.2884 11.4472L33.5839 17.74L27.9999 14.5632L22.4161 17.7401L23.7117 11.4472L18.965 7.11867L25.3496 6.40609ZM11.8169 47.6312C10.9622 47.1743 10.6386 46.1068 11.0958 45.252C11.0958 45.252 12.8098 42.0477 12.8108 42.0454C13.2607 41.204 14.3523 40.8755 15.1917 41.3241C16.0325 41.7743 16.361 42.8641 15.9115 43.7037L14.1935 46.9149C13.7346 47.7656 12.6702 48.0874 11.8169 47.6312ZM46.5255 39.1488C46.244 38.801 45.8946 38.4987 45.4839 38.2641L36.1435 32.9406C35.3261 32.4743 34.4841 32.2903 33.6288 32.2903C31.9735 32.2903 30.2689 32.9806 28.6023 33.6547C25.4363 34.9373 22.6681 36.0577 20.0808 33.2328C22.5891 31.7107 24.732 30.0584 26.4609 28.3117C27.222 27.5425 27.9953 26.8846 28.7587 26.3565C32.4077 23.834 34.9316 24.8654 37.3726 25.863C39.1519 26.5905 40.9917 27.343 42.919 26.3398L46.7388 24.2952L51.6497 36.9646L46.5255 39.1488ZM45.2562 42.296C45.7162 41.4596 45.3997 40.3853 44.5506 39.9013L35.2102 34.5778C33.6054 33.6625 31.6144 34.4683 29.3095 35.4026C25.8478 36.803 21.5398 38.5481 17.8979 33.5297C17.7407 33.3129 17.6832 33.0395 17.7392 32.7783C17.7954 32.5165 17.9599 32.2914 18.1922 32.1585C20.9658 30.5691 23.297 28.8291 25.121 26.9857C25.5945 26.5071 26.0744 26.0676 26.5564 25.668C24.4853 24.7272 22.7313 25.1412 20.8909 25.5764C19.1117 25.9965 17.2724 26.4311 15.3947 25.3924L10.074 22.9377L4.40135 35.008C4.49509 35.0491 4.59866 35.0964 4.71329 35.148C6.30109 35.8632 9.25673 37.1954 9.79934 37.4065C11.1862 37.9444 11.5197 39.291 11.7212 40.3642C12.1501 39.9129 12.6911 39.5772 13.3052 39.3911C14.2385 39.1088 15.2237 39.2055 16.0791 39.6622C16.932 40.1168 17.5589 40.8815 17.8427 41.8141C17.9134 42.0475 17.9608 42.2832 17.9846 42.5199C18.806 42.337 19.6939 42.4337 20.4927 42.8617C21.3456 43.3162 21.9726 44.081 22.2563 45.0135C22.2746 45.0735 22.2915 45.1347 22.3066 45.1964C22.3643 45.1753 22.4227 45.1563 22.4817 45.1386C23.415 44.8547 24.4001 44.9514 25.2554 45.4099C26.1084 45.8633 26.7352 46.6275 27.0188 47.5606C27.0373 47.6218 27.054 47.6818 27.0691 47.743C27.1266 47.7229 27.1853 47.7035 27.2443 47.6852C28.1776 47.4029 29.1626 47.4996 30.0181 47.9565C30.4358 48.1793 30.7989 48.4761 31.0944 48.8306L35.1926 51.0969C36.0422 51.565 37.1133 51.2537 37.5806 50.4045C38.0431 49.562 37.7286 48.4889 36.8794 48.012L31.1142 44.7664C30.6606 44.5108 30.4999 43.9362 30.7551 43.4827C31.0103 43.0292 31.585 42.8685 32.0386 43.1243L39.3323 47.2001C40.1817 47.6669 41.2531 47.3557 41.7202 46.5066C42.1828 45.6652 41.8683 44.5921 41.019 44.1141C40.996 44.1008 35.2547 40.8546 35.2547 40.8546C34.8017 40.5978 34.6417 40.0226 34.8976 39.5709C35.1538 39.1174 35.7286 38.9567 36.1817 39.2125L42.8775 42.9948C43.6953 43.4564 44.8058 43.1146 45.2562 42.296ZM34.2052 54.7108C33.7379 55.56 32.6666 55.8713 31.8172 55.4049L30.5415 54.7024L31.5128 52.8862C31.7535 52.436 31.8931 51.9497 31.9309 51.4535L33.5011 52.3171L33.5095 52.3216C34.3591 52.7918 34.671 53.8638 34.2052 54.7108ZM27.1652 55.9228C26.7137 56.0595 26.2385 56.0133 25.8271 55.7933C24.9723 55.3364 24.6486 54.2689 25.1057 53.4136C25.1057 53.4136 26.749 50.3415 26.7502 50.3392C27.2007 49.4972 28.2886 49.1682 29.1309 49.6195C29.9567 50.0613 30.3032 51.1523 29.8508 51.9981L28.2066 55.0725C27.9864 55.4839 27.6167 55.7862 27.1652 55.9228ZM22.1676 53.8144C21.7161 53.9511 21.2408 53.9049 20.8294 53.6849C19.9745 53.228 19.6511 52.1605 20.1083 51.3052L21.9869 47.7924C21.9869 47.7924 21.9871 47.7924 21.9871 47.7918C22.2071 47.3806 22.5769 47.0788 23.0284 46.9421C23.4799 46.8054 23.9553 46.8515 24.3682 47.0716C24.7776 47.2895 25.0787 47.6585 25.2157 48.1098C25.3536 48.5633 25.3083 49.0389 25.0881 49.4503L23.2089 52.9643C22.9891 53.3748 22.6192 53.6776 22.1676 53.8144ZM16.9601 52.0983C17.4117 51.9615 17.7813 51.6587 18.0015 51.2474L20.3251 46.9032C20.7742 46.0635 20.4455 44.9736 19.6056 44.5251C18.7926 44.09 17.6644 44.4234 17.2289 45.2365C17.2278 45.2388 14.9008 49.5892 14.9008 49.5892C14.4434 50.4445 14.7668 51.5115 15.622 51.9689C16.0334 52.1888 16.5087 52.235 16.9601 52.0983ZM50.1371 15.0061C50.1371 15.0061 50.1369 15.0061 50.1373 15.0062L51.1525 19.9382L46.7761 17.4478L42.3992 19.9383L43.4148 15.0062L39.6941 11.6133L44.6986 11.0551L46.776 6.46778L48.8533 11.0546L53.8578 11.6135L50.1371 15.0061ZM2.14221 11.6131L7.14677 11.0549L9.22413 6.46756L11.3016 11.0544L16.3056 11.6133L12.5853 15.006L13.6009 19.9381L9.22413 17.4477L4.84749 19.9381L5.86282 15.006L2.14221 11.6131Z" fill="#FDC948"/>
</svg>
',
                    ),
                );
                foreach ($data as $k=>$v): ?>
                <div>
                    <div class="uk-position-relative home__thanhtuu__box">
                        <div class="uk-card home__thanhtuu__card uk-position-cover">

                        </div>
                        <div class="home__thanhtuu__boxCover uk-position-relative">
                            <div class="home__thanhtuu__box1 uk-cover-container uk-border-circle uk-flex-inline">
                                <div class="uk-position-cover uk-flex uk-flex-middle uk-flex-center">
                                    <?= $v['svg'] ?>
                                </div>
                                <canvas width="160" height="160"></canvas>
                            </div>
                            <div class="item__20 home__thanhtuu__txt"><?= $v['txt1'] ?></div>
                            <div class="item__36-20 home__thanhtuu__divider"></div>
                            <div class="item__36-20 home__thanhtuu__title">
                                <?= $v['title1'] ?>
                            </div>
                            <div class="home__thanhtuu__title item__12">
                                <?= $v['title2'] ?>
                            </div>
                            <div class="home__thanhtuu__txt item__20">
                                <?= $v['txt2'] ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

</div>
<!--/Thành tựu-->

<!--Đào tạo-->
<div class="home__daotao uk-position-relative uk-background-norepeat uk-background-cover uk-background-center-center" data-src="images/bg_Rectangle140270.png" uk-img>
    <div class="home__daotao__gradient uk-position-cover"></div>
    <div class="uk-section home__section uk-position-relative uk-position-z-index">
        <div class="uk-container">
            <div class="uk-text-center">
                <h3 class="uk-h3 home__section__title1">Đào tạo</h3>
                <div class="home__section__title2 item__12">Khoá học của chúng tôi</div>
            </div>
            <div class="item__60-30">
                <ul class="home__daotao__tab uk-subnav uk-subnav-pill uk-flex-center uk-child-width-auto@m" uk-toggle="cls: uk-child-width-expand; mode: media; media: (max-width: 959.8px)" uk-switcher="connect: .switcher-container">
                    <li><a href="#">Khoá học dài hạn</a></li>
                    <li><a href="#">Khoá học ngắn hạn</a></li>
                </ul>
                <ul class="home__daotao__box uk-switcher switcher-container uk-margin">
                    <li>
                        <div uk-slider="finite: true">

                            <div class="uk-position-relative">

                                <div class="uk-slider-container uk-position-z-index">
                                    <ul class="uk-slider-items uk-child-width-1-1">
                                        <?php for ($i=1;$i<=2;$i++): ?>
                                        <li>
                                            <div class="uk-grid uk-flex-middle" uk-grid>
                                                <div class="uk-width-expand">
                                                    <div class="uk-card uk-card-body">
                                                        <p class="home__daotao__box__txt">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                        <div class="item__40-20">
                                                            <a href="" class="home__about__btnMore uk-border-rounded uk-button uk-button-secondary">
                                                                Xem chi tiết
                                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M15.138 7.52861L10.4714 2.86195C10.3456 2.74051 10.1772 2.67331 10.0024 2.67483C9.82762 2.67635 9.66041 2.74646 9.53681 2.87007C9.4132 2.99367 9.34309 3.16088 9.34157 3.33568C9.34005 3.51048 9.40725 3.67888 9.52869 3.80461L13.0574 7.33328H1.33335C1.15654 7.33328 0.986973 7.40352 0.861949 7.52854C0.736925 7.65357 0.666687 7.82313 0.666687 7.99995C0.666687 8.17676 0.736925 8.34633 0.861949 8.47135C0.986973 8.59637 1.15654 8.66661 1.33335 8.66661H13.0574L9.52869 12.1953C9.46501 12.2568 9.41423 12.3303 9.37929 12.4117C9.34435 12.493 9.32596 12.5805 9.32519 12.669C9.32442 12.7575 9.34129 12.8453 9.37481 12.9272C9.40833 13.0092 9.45783 13.0836 9.52042 13.1462C9.58302 13.2088 9.65745 13.2583 9.73938 13.2918C9.82132 13.3253 9.9091 13.3422 9.99762 13.3414C10.0861 13.3407 10.1736 13.3223 10.255 13.2873C10.3363 13.2524 10.4099 13.2016 10.4714 13.1379L15.138 8.47128C15.263 8.34626 15.3332 8.17672 15.3332 7.99995C15.3332 7.82317 15.263 7.65363 15.138 7.52861Z" fill="currentColor"/>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="uk-width-auto@m">
                                                    <div class="uk-position-relative">
                                                        <div class="uk-cover-container uk-visible@m home__daotao__box__bg3 uk-position-center-left">
                                                            <canvas width="349" height="406"></canvas>
                                                        </div>
                                                        <div class="uk-cover-container uk-visible@m home__daotao__box__bg2 uk-position-center-left">
                                                            <canvas width="382" height="444"></canvas>
                                                        </div>
                                                        <div class="uk-cover-container uk-visible@m home__daotao__box__bg1 uk-position-center-left">
                                                            <canvas width="413" height="480"></canvas>
                                                        </div>
                                                        <div class="uk-cover-container home__daotao__box__img">
                                                            <img src="images/Rectangle140378.png" alt="" uk-cover="">
                                                            <canvas width="413" height="480"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <?php endfor; ?>
                                    </ul>
                                </div>

                                <div class="uk-hidden@s uk-light">
                                    <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                    <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                                </div>

                                <div class="uk-visible@s">
                                    <a class="home__daotao__box__nav home__daotao__box__nav--previous uk-position-center-left-out uk-position-small" href="#" uk-slider-item="previous">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.07348 10.0042L15.5554 2.52195C15.7614 2.31642 15.8748 2.04163 15.8748 1.74862C15.8748 1.45545 15.7614 1.18081 15.5554 0.974959L14.8998 0.319675C14.6941 0.113496 14.4192 0 14.1262 0C13.8332 0 13.5585 0.113496 13.3527 0.319675L4.44421 9.22797C4.23755 9.43447 4.12437 9.71041 4.12519 10.0037C4.12437 10.2984 4.23738 10.574 4.44421 10.7807L13.3444 19.6803C13.5502 19.8865 13.8249 20 14.118 20C14.411 20 14.6857 19.8865 14.8917 19.6803L15.5471 19.025C15.9736 18.5985 15.9736 17.9042 15.5471 17.4779L8.07348 10.0042Z" fill="white"/>
                                        </svg>
                                    </a>
                                    <a class="home__daotao__box__nav home__daotao__box__nav--next uk-position-center-right-out uk-position-small" href="#" uk-slider-item="next">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.9265 10.0042L4.44451 2.52195C4.23849 2.31642 4.12516 2.04163 4.12516 1.74862C4.12516 1.45545 4.23849 1.18081 4.44451 0.974959L5.10012 0.319675C5.30581 0.113496 5.58077 0 5.87378 0C6.16678 0 6.44142 0.113496 6.64727 0.319675L15.5557 9.22797C15.7624 9.43447 15.8756 9.71041 15.8748 10.0037C15.8756 10.2984 15.7626 10.574 15.5557 10.7807L6.65556 19.6803C6.44971 19.8865 6.17508 20 5.88191 20C5.5889 20 5.31426 19.8865 5.10825 19.6803L4.4528 19.025C4.0263 18.5985 4.0263 17.9042 4.4528 17.4779L11.9265 10.0042Z" fill="white"/>
                                        </svg>
                                    </a>
                                </div>

                            </div>


                        </div>
                    </li>
                    <li>
                        <div uk-slider="finite: true">

                            <div class="uk-position-relative">

                                <div class="uk-slider-container">
                                    <ul class="uk-slider-items uk-child-width-1-1">
                                        <?php for ($i=1;$i<=2;$i++): ?>
                                            <li>
                                                <div class="uk-grid uk-flex-middle" uk-grid>
                                                    <div class="uk-width-expand">
                                                        <div class="uk-card uk-card-body">
                                                            <p class="home__daotao__box__txt">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                            <div class="item__40-20">
                                                                <a href="" class="home__about__btnMore uk-border-rounded uk-button uk-button-secondary uk-margin-small-right">
                                                                    Khoá học trực tiếp
                                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M15.138 7.52861L10.4714 2.86195C10.3456 2.74051 10.1772 2.67331 10.0024 2.67483C9.82762 2.67635 9.66041 2.74646 9.53681 2.87007C9.4132 2.99367 9.34309 3.16088 9.34157 3.33568C9.34005 3.51048 9.40725 3.67888 9.52869 3.80461L13.0574 7.33328H1.33335C1.15654 7.33328 0.986973 7.40352 0.861949 7.52854C0.736925 7.65357 0.666687 7.82313 0.666687 7.99995C0.666687 8.17676 0.736925 8.34633 0.861949 8.47135C0.986973 8.59637 1.15654 8.66661 1.33335 8.66661H13.0574L9.52869 12.1953C9.46501 12.2568 9.41423 12.3303 9.37929 12.4117C9.34435 12.493 9.32596 12.5805 9.32519 12.669C9.32442 12.7575 9.34129 12.8453 9.37481 12.9272C9.40833 13.0092 9.45783 13.0836 9.52042 13.1462C9.58302 13.2088 9.65745 13.2583 9.73938 13.2918C9.82132 13.3253 9.9091 13.3422 9.99762 13.3414C10.0861 13.3407 10.1736 13.3223 10.255 13.2873C10.3363 13.2524 10.4099 13.2016 10.4714 13.1379L15.138 8.47128C15.263 8.34626 15.3332 8.17672 15.3332 7.99995C15.3332 7.82317 15.263 7.65363 15.138 7.52861Z" fill="currentColor"/>
                                                                    </svg>
                                                                </a>
                                                                <a href="" class="home__about__btnMore uk-border-rounded uk-button uk-button-secondary">
                                                                    Khoá học online
                                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M15.138 7.52861L10.4714 2.86195C10.3456 2.74051 10.1772 2.67331 10.0024 2.67483C9.82762 2.67635 9.66041 2.74646 9.53681 2.87007C9.4132 2.99367 9.34309 3.16088 9.34157 3.33568C9.34005 3.51048 9.40725 3.67888 9.52869 3.80461L13.0574 7.33328H1.33335C1.15654 7.33328 0.986973 7.40352 0.861949 7.52854C0.736925 7.65357 0.666687 7.82313 0.666687 7.99995C0.666687 8.17676 0.736925 8.34633 0.861949 8.47135C0.986973 8.59637 1.15654 8.66661 1.33335 8.66661H13.0574L9.52869 12.1953C9.46501 12.2568 9.41423 12.3303 9.37929 12.4117C9.34435 12.493 9.32596 12.5805 9.32519 12.669C9.32442 12.7575 9.34129 12.8453 9.37481 12.9272C9.40833 13.0092 9.45783 13.0836 9.52042 13.1462C9.58302 13.2088 9.65745 13.2583 9.73938 13.2918C9.82132 13.3253 9.9091 13.3422 9.99762 13.3414C10.0861 13.3407 10.1736 13.3223 10.255 13.2873C10.3363 13.2524 10.4099 13.2016 10.4714 13.1379L15.138 8.47128C15.263 8.34626 15.3332 8.17672 15.3332 7.99995C15.3332 7.82317 15.263 7.65363 15.138 7.52861Z" fill="currentColor"/>
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="uk-width-auto@m">
                                                        <div class="uk-position-relative">
                                                            <div class="uk-cover-container uk-visible@m home__daotao__box__bg3 uk-position-center-left">
                                                                <canvas width="349" height="406"></canvas>
                                                            </div>
                                                            <div class="uk-cover-container uk-visible@m home__daotao__box__bg2 uk-position-center-left">
                                                                <canvas width="382" height="444"></canvas>
                                                            </div>
                                                            <div class="uk-cover-container uk-visible@m home__daotao__box__bg1 uk-position-center-left">
                                                                <canvas width="413" height="480"></canvas>
                                                            </div>
                                                            <div class="uk-cover-container home__daotao__box__img">
                                                                <img src="images/Rectangle140378.png" alt="" uk-cover="">
                                                                <canvas width="413" height="480"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php endfor; ?>
                                    </ul>
                                </div>

                                <div class="uk-hidden@s uk-light">
                                    <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                    <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                                </div>

                                <div class="uk-visible@s">
                                    <a class="home__daotao__box__nav home__daotao__box__nav--previous uk-position-center-left-out uk-position-small" href="#" uk-slider-item="previous">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.07348 10.0042L15.5554 2.52195C15.7614 2.31642 15.8748 2.04163 15.8748 1.74862C15.8748 1.45545 15.7614 1.18081 15.5554 0.974959L14.8998 0.319675C14.6941 0.113496 14.4192 0 14.1262 0C13.8332 0 13.5585 0.113496 13.3527 0.319675L4.44421 9.22797C4.23755 9.43447 4.12437 9.71041 4.12519 10.0037C4.12437 10.2984 4.23738 10.574 4.44421 10.7807L13.3444 19.6803C13.5502 19.8865 13.8249 20 14.118 20C14.411 20 14.6857 19.8865 14.8917 19.6803L15.5471 19.025C15.9736 18.5985 15.9736 17.9042 15.5471 17.4779L8.07348 10.0042Z" fill="white"/>
                                        </svg>
                                    </a>
                                    <a class="home__daotao__box__nav home__daotao__box__nav--next uk-position-center-right-out uk-position-small" href="#" uk-slider-item="next">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.9265 10.0042L4.44451 2.52195C4.23849 2.31642 4.12516 2.04163 4.12516 1.74862C4.12516 1.45545 4.23849 1.18081 4.44451 0.974959L5.10012 0.319675C5.30581 0.113496 5.58077 0 5.87378 0C6.16678 0 6.44142 0.113496 6.64727 0.319675L15.5557 9.22797C15.7624 9.43447 15.8756 9.71041 15.8748 10.0037C15.8756 10.2984 15.7626 10.574 15.5557 10.7807L6.65556 19.6803C6.44971 19.8865 6.17508 20 5.88191 20C5.5889 20 5.31426 19.8865 5.10825 19.6803L4.4528 19.025C4.0263 18.5985 4.0263 17.9042 4.4528 17.4779L11.9265 10.0042Z" fill="white"/>
                                        </svg>
                                    </a>
                                </div>

                            </div>


                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--/Đào tạo-->

<!--Giảng viên-->
<div class="uk-section home__section old">
    <div class="uk-container">
        <div class="uk-text-center">
            <h3 class="uk-h3 home__section__title1">Giảng viên</h3>
            <div class="home__section__title2 item__12">Đội ngũ kinh nghiệm tại Cây Bút Nhí</div>
        </div>
        <div class="item__40-20 uk-flex-between@m" uk-grid>
            <div>
                <div class="home__giangvien__txt">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_65_612)">
                            <path d="M16 31.7538C24.7006 31.7538 31.7538 24.7006 31.7538 15.9999C31.7538 7.29933 24.7006 0.246094 16 0.246094C7.29939 0.246094 0.246155 7.29933 0.246155 15.9999C0.246155 24.7006 7.29939 31.7538 16 31.7538Z" fill="#FDC948"/>
                            <path d="M24.2954 15.0401C24.9108 14.4247 24.5662 13.3662 23.7046 13.2431L19.5692 12.6524C19.2246 12.6031 18.9292 12.3816 18.7816 12.0862L16.9354 8.34468C16.5416 7.55698 15.4339 7.55698 15.0646 8.34468L13.2185 12.0862C13.0708 12.4062 12.7754 12.6031 12.4308 12.6524L8.2954 13.2431C7.43386 13.3662 7.08924 14.4247 7.70463 15.0401L10.6831 17.9693C10.9292 18.2154 11.0523 18.5601 10.9785 18.9047L10.2646 23.0154C10.1416 23.877 11.0523 24.517 11.8154 24.1231L15.5077 22.1785C15.8031 22.0062 16.1723 22.0062 16.4923 22.1785L20.1846 24.1231C20.9477 24.517 21.8585 23.877 21.7108 23.0154L20.9969 18.9047C20.9477 18.5601 21.0462 18.2154 21.2923 17.9693L24.2954 15.0401Z" fill="white"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_65_612">
                                <rect width="32" height="32" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                    Sẵn sàng hết mình vì học viên
                </div>
            </div>
            <div>
                <div class="home__giangvien__txt">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_65_612)">
                            <path d="M16 31.7538C24.7006 31.7538 31.7538 24.7006 31.7538 15.9999C31.7538 7.29933 24.7006 0.246094 16 0.246094C7.29939 0.246094 0.246155 7.29933 0.246155 15.9999C0.246155 24.7006 7.29939 31.7538 16 31.7538Z" fill="#FDC948"/>
                            <path d="M24.2954 15.0401C24.9108 14.4247 24.5662 13.3662 23.7046 13.2431L19.5692 12.6524C19.2246 12.6031 18.9292 12.3816 18.7816 12.0862L16.9354 8.34468C16.5416 7.55698 15.4339 7.55698 15.0646 8.34468L13.2185 12.0862C13.0708 12.4062 12.7754 12.6031 12.4308 12.6524L8.2954 13.2431C7.43386 13.3662 7.08924 14.4247 7.70463 15.0401L10.6831 17.9693C10.9292 18.2154 11.0523 18.5601 10.9785 18.9047L10.2646 23.0154C10.1416 23.877 11.0523 24.517 11.8154 24.1231L15.5077 22.1785C15.8031 22.0062 16.1723 22.0062 16.4923 22.1785L20.1846 24.1231C20.9477 24.517 21.8585 23.877 21.7108 23.0154L20.9969 18.9047C20.9477 18.5601 21.0462 18.2154 21.2923 17.9693L24.2954 15.0401Z" fill="white"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_65_612">
                                <rect width="32" height="32" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                    Truyền tải tâm huyết và đam mê qua từng con chữ
                </div>
            </div>
            <div>
                <div class="home__giangvien__txt">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_65_612)">
                            <path d="M16 31.7538C24.7006 31.7538 31.7538 24.7006 31.7538 15.9999C31.7538 7.29933 24.7006 0.246094 16 0.246094C7.29939 0.246094 0.246155 7.29933 0.246155 15.9999C0.246155 24.7006 7.29939 31.7538 16 31.7538Z" fill="#FDC948"/>
                            <path d="M24.2954 15.0401C24.9108 14.4247 24.5662 13.3662 23.7046 13.2431L19.5692 12.6524C19.2246 12.6031 18.9292 12.3816 18.7816 12.0862L16.9354 8.34468C16.5416 7.55698 15.4339 7.55698 15.0646 8.34468L13.2185 12.0862C13.0708 12.4062 12.7754 12.6031 12.4308 12.6524L8.2954 13.2431C7.43386 13.3662 7.08924 14.4247 7.70463 15.0401L10.6831 17.9693C10.9292 18.2154 11.0523 18.5601 10.9785 18.9047L10.2646 23.0154C10.1416 23.877 11.0523 24.517 11.8154 24.1231L15.5077 22.1785C15.8031 22.0062 16.1723 22.0062 16.4923 22.1785L20.1846 24.1231C20.9477 24.517 21.8585 23.877 21.7108 23.0154L20.9969 18.9047C20.9477 18.5601 21.0462 18.2154 21.2923 17.9693L24.2954 15.0401Z" fill="white"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_65_612">
                                <rect width="32" height="32" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                    Vui vẻ hoà đồng và tràn đầy năng lượng
                </div>
            </div>
        </div>
        <div class="item__60-30" uk-slider="finite: true">

            <div class="uk-position-relative">

                <div class="uk-slider-container uk-slider-container-offset home__tailieu__uk-slider-container">
                    <ul class="uk-slider-items uk-child-width uk-child-width-1-2@s uk-child-width-1-4@m uk-grid-small uk-grid-40-m" uk-grid>
                        <?php for ($i=1;$i<=8;$i++): ?>
                            <li>
                                <div class="home__cbn__card uk-card uk-card-body">
                                    <div class="uk-cover-container uk-border-rounded">
                                        <img src="images/noimage.jpg" alt="" uk-cover="">
                                        <canvas width="250" height="180"></canvas>
                                    </div>
                                    <div class="uk-margin home__giangvien__nameP">Cô Dương Hằng</div>
                                    <div class="uk-margin home__cbn__card__desc">Cô Dương Hằng là giáo viên trẻ với 5 năm kinh nghiệm giảng dạy môn Tiếng Việt tiểu học, luôn yêu trẻ và tâm huyết với nghề giáo.</div>
                                </div>
                            </li>
                        <?php endfor; ?>
                    </ul>
                </div>

                <div class="uk-hidden@s uk-light uk-position-z-index">
                    <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>

                <div class="uk-visible@s">
                    <a class="uk-position-center-left-out uk-position-small home__tailieu__sliderNav home__tailieu__sliderNav--previous" href="#" uk-slider-item="previous">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.45881 8.00338L12.4444 2.01756C12.6092 1.85314 12.6999 1.6333 12.6999 1.39889C12.6999 1.16436 12.6092 0.94465 12.4444 0.779967L11.9199 0.25574C11.7553 0.0907967 11.5354 0 11.301 0C11.0665 0 10.8468 0.0907967 10.6822 0.25574L3.55539 7.38237C3.39006 7.54758 3.29952 7.76832 3.30017 8.00299C3.29952 8.2387 3.38993 8.45919 3.55539 8.62452L10.6755 15.7443C10.8402 15.9092 11.0599 16 11.2945 16C11.5289 16 11.7486 15.9092 11.9134 15.7443L12.4377 15.22C12.7789 14.8788 12.7789 14.3234 12.4377 13.9823L6.45881 8.00338Z" fill="white"/>
                        </svg>
                    </a>
                    <a class="uk-position-center-right-out uk-position-small home__tailieu__sliderNav home__tailieu__sliderNav--next" href="#" uk-slider-item="next">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.54119 8.00338L3.55563 2.01756C3.39082 1.85314 3.30015 1.6333 3.30015 1.39889C3.30015 1.16436 3.39082 0.94465 3.55563 0.779967L4.08012 0.25574C4.24467 0.0907967 4.46464 0 4.69904 0C4.93345 0 5.15316 0.0907967 5.31784 0.25574L12.4446 7.38237C12.6099 7.54758 12.7005 7.76832 12.6998 8.00299C12.7005 8.2387 12.6101 8.45919 12.4446 8.62452L5.32448 15.7443C5.15979 15.9092 4.94009 16 4.70555 16C4.47114 16 4.25143 15.9092 4.08662 15.7443L3.56226 15.22C3.22106 14.8788 3.22106 14.3234 3.56226 13.9823L9.54119 8.00338Z" fill="white"/>
                        </svg>
                    </a>
                </div>

            </div>

        </div>
    </div>
</div>
<!--/Giảng viên-->

<!--Banner-->
<div class="uk-text-center">
    <img src="images/banner_Frame2060.png" alt="">
</div>
<!--/Banner-->

<!--CBN-->
<div class="uk-section home__section old">
    <div class="uk-container">
        <div class="uk-text-center">
            <h3 class="uk-h3 home__section__title1">CBN</h3>
            <div class="home__section__title2 item__12">
                <span class="uk-position-relative">
                    Khoá học trực tuyến
                    <img class="uk-position-absolute home__cbn__icon" src="images/mail1.png" alt="">
                </span>
            </div>
        </div>
        <div class="item__60-30" uk-slider="finite: true">

            <div class="uk-position-relative">

                <div class="uk-slider-container uk-slider-container-offset home__tailieu__uk-slider-container">
                    <ul class="uk-slider-items uk-child-width uk-child-width-1-2@s uk-child-width-1-3@m uk-grid-small uk-grid-40-m" uk-grid>
                        <?php for ($i=1;$i<=8;$i++): ?>
                            <li>
                                <div class="home__cbn__card home__cbn__card--hover uk-card uk-card-body">
                                    <div class="uk-cover-container uk-border-rounded">
                                        <img src="images/noimage.jpg" alt="" uk-cover="">
                                        <canvas width="360" height="200"></canvas>
                                    </div>
                                    <div class="uk-margin home__cbn__card__title"><a href="" class="uk-link-toggle">Ôn thi vào lớp 6 - HSG</a></div>
                                    <div class="uk-margin home__cbn__card__desc">Với mục tiêu giúp các em học sinh lớp 5 có nền tảng kiến thức chuyên sâu để thi tuyển vào các trường chất lượng cao trên địa bàn thành phố Hà Nội...</div>
                                    <div class="uk-margin uk-flex-bottom" uk-grid>
                                        <div class="uk-width-expand">
                                            <div class="home__cbn__card__txt uk-flex uk-flex-middle">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M3.05938 2.36035C3.05884 2.36035 3.05824 2.36035 3.0577 2.36035C2.86854 2.36035 2.69063 2.43409 2.55628 2.5681C2.42046 2.70359 2.34564 2.88399 2.34564 3.07604V13.8077C2.34564 14.2013 2.66706 14.5222 3.06221 14.5232C4.72808 14.5272 7.51906 14.8744 9.44446 16.8893V5.65828C9.44446 5.52487 9.41038 5.39955 9.34607 5.29585C7.7658 2.75093 4.72902 2.36426 3.05938 2.36035Z" fill="#262626" fill-opacity="0.7"/>
                                                    <path d="M17.6544 13.8078V3.07604C17.6544 2.88399 17.5796 2.70359 17.4438 2.5681C17.3094 2.43409 17.1314 2.36035 16.9424 2.36035C16.9418 2.36035 16.9412 2.36035 16.9407 2.36035C15.2711 2.36432 12.2343 2.75099 10.654 5.29592C10.5897 5.39962 10.5557 5.52494 10.5557 5.65834V16.8893C12.4811 14.8744 15.272 14.5272 16.9379 14.5232C17.333 14.5222 17.6544 14.2013 17.6544 13.8078Z" fill="#262626" fill-opacity="0.7"/>
                                                    <path d="M19.2845 4.83545H18.7655V13.8079C18.7655 14.8127 17.9469 15.632 16.9405 15.6345C15.5275 15.6379 13.1977 15.9142 11.5477 17.4759C14.4014 16.7772 17.4098 17.2314 19.1243 17.6221C19.3383 17.6708 19.5595 17.6205 19.7311 17.4838C19.902 17.3474 20 17.1436 20 16.9248V5.55101C20.0001 5.15646 19.679 4.83545 19.2845 4.83545Z" fill="#262626" fill-opacity="0.7"/>
                                                    <path d="M1.23448 13.8079V4.83545H0.715558C0.321079 4.83545 0 5.15646 0 5.55101V16.9246C0 17.1434 0.0980475 17.3472 0.268957 17.4836C0.440338 17.6202 0.661349 17.6708 0.875761 17.6219C2.59024 17.2311 5.59867 16.777 8.45229 17.4757C6.80231 15.9141 4.47247 15.6378 3.05947 15.6345C2.05321 15.632 1.23448 14.8127 1.23448 13.8079Z" fill="#262626" fill-opacity="0.7"/>
                                                </svg>
                                                16 bài giảng
                                            </div>
                                        </div>
                                        <div class="uk-width-auto">
                                            <span class="home__cbn__card__price">699.000 đ</span>
                                        </div>
                                    </div>
                                    <a href="" class="home__about__btnMore uk-width uk-border-rounded uk-button uk-button-secondary">
                                        Chi tiết khoá học
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15.138 7.52861L10.4714 2.86195C10.3456 2.74051 10.1772 2.67331 10.0024 2.67483C9.82762 2.67635 9.66041 2.74646 9.53681 2.87007C9.4132 2.99367 9.34309 3.16088 9.34157 3.33568C9.34005 3.51048 9.40725 3.67888 9.52869 3.80461L13.0574 7.33328H1.33335C1.15654 7.33328 0.986973 7.40352 0.861949 7.52854C0.736925 7.65357 0.666687 7.82313 0.666687 7.99995C0.666687 8.17676 0.736925 8.34633 0.861949 8.47135C0.986973 8.59637 1.15654 8.66661 1.33335 8.66661H13.0574L9.52869 12.1953C9.46501 12.2568 9.41423 12.3303 9.37929 12.4117C9.34435 12.493 9.32596 12.5805 9.32519 12.669C9.32442 12.7575 9.34129 12.8453 9.37481 12.9272C9.40833 13.0092 9.45783 13.0836 9.52042 13.1462C9.58302 13.2088 9.65745 13.2583 9.73938 13.2918C9.82132 13.3253 9.9091 13.3422 9.99762 13.3414C10.0861 13.3407 10.1736 13.3223 10.255 13.2873C10.3363 13.2524 10.4099 13.2016 10.4714 13.1379L15.138 8.47128C15.263 8.34626 15.3332 8.17672 15.3332 7.99995C15.3332 7.82317 15.263 7.65363 15.138 7.52861Z" fill="currentColor"></path>
                                        </svg>
                                    </a>
                                </div>
                            </li>
                        <?php endfor; ?>
                    </ul>
                </div>

                <div class="uk-hidden@s uk-light uk-position-z-index">
                    <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>

                <div class="uk-visible@s">
                    <a class="uk-position-center-left-out uk-position-small home__tailieu__sliderNav home__tailieu__sliderNav--previous" href="#" uk-slider-item="previous">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.45881 8.00338L12.4444 2.01756C12.6092 1.85314 12.6999 1.6333 12.6999 1.39889C12.6999 1.16436 12.6092 0.94465 12.4444 0.779967L11.9199 0.25574C11.7553 0.0907967 11.5354 0 11.301 0C11.0665 0 10.8468 0.0907967 10.6822 0.25574L3.55539 7.38237C3.39006 7.54758 3.29952 7.76832 3.30017 8.00299C3.29952 8.2387 3.38993 8.45919 3.55539 8.62452L10.6755 15.7443C10.8402 15.9092 11.0599 16 11.2945 16C11.5289 16 11.7486 15.9092 11.9134 15.7443L12.4377 15.22C12.7789 14.8788 12.7789 14.3234 12.4377 13.9823L6.45881 8.00338Z" fill="white"/>
                        </svg>
                    </a>
                    <a class="uk-position-center-right-out uk-position-small home__tailieu__sliderNav home__tailieu__sliderNav--next" href="#" uk-slider-item="next">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.54119 8.00338L3.55563 2.01756C3.39082 1.85314 3.30015 1.6333 3.30015 1.39889C3.30015 1.16436 3.39082 0.94465 3.55563 0.779967L4.08012 0.25574C4.24467 0.0907967 4.46464 0 4.69904 0C4.93345 0 5.15316 0.0907967 5.31784 0.25574L12.4446 7.38237C12.6099 7.54758 12.7005 7.76832 12.6998 8.00299C12.7005 8.2387 12.6101 8.45919 12.4446 8.62452L5.32448 15.7443C5.15979 15.9092 4.94009 16 4.70555 16C4.47114 16 4.25143 15.9092 4.08662 15.7443L3.56226 15.22C3.22106 14.8788 3.22106 14.3234 3.56226 13.9823L9.54119 8.00338Z" fill="white"/>
                        </svg>
                    </a>
                </div>

            </div>

        </div>
    </div>
</div>
<!--/CBN-->

<!--Tài liệu-->
<div class="home__tailieu uk-section home__section old">
    <div class="uk-container">
        <div class="uk-text-center">
            <h3 class="uk-h3 home__section__title1">
                <span class="uk-position-relative">
                    Tài liệu
                    <img class="home__tailieu__icon uk-position-absolute" src="images/paper-plane_21.png" alt="">
                </span>
            </h3>
            <div class="home__section__title2 item__12">Tiệm sách CBN</div>
        </div>
        <div class="item__60-30" uk-slider="finite: true">

            <div class="uk-position-relative">

                <div class="uk-slider-container home__tailieu__uk-slider-container">
                    <ul class="uk-slider-items uk-child-width uk-child-width-1-3@s uk-child-width-1-4@m uk-grid-small uk-grid-40-m" uk-grid>
                        <?php for ($i=1;$i<=8;$i++): ?>
                        <li>
                            <div class="home__tailieu__card uk-card uk-card-body">
                                <div class="uk-text-center"><img src="images/image5.png" alt=""></div>
                                <div class="uk-margin uk-light home__tailieu__card__name"><a href="" class="uk-link-toggle">mùa tiểu học cuối cùng</a></div>
                                <div class="uk-margin uk-grid-12 uk-flex-bottom uk-grid uk-child-width-auto" uk-grid>
                                    <div>
                                        <span class="home__tailieu__card__price">699.000 đ</span>
                                    </div>
                                    <div>
                                        <del class="home__tailieu__card__priceOld">799.000 đ</del>
                                    </div>
                                </div>
                                <a href="" class="home__tailieu__card__btnBuy uk-button uk-button-secondary uk-border-rounded uk-width">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_470_623)">
                                            <path d="M7.0625 15.0312C7.83915 15.0312 8.46875 14.4017 8.46875 13.625C8.46875 12.8483 7.83915 12.2188 7.0625 12.2188C6.28585 12.2188 5.65625 12.8483 5.65625 13.625C5.65625 14.4017 6.28585 15.0312 7.0625 15.0312Z" fill="currentColor"/>
                                            <path d="M11.7812 15.0312C12.5579 15.0312 13.1875 14.4017 13.1875 13.625C13.1875 12.8483 12.5579 12.2188 11.7812 12.2188C11.0046 12.2188 10.375 12.8483 10.375 13.625C10.375 14.4017 11.0046 15.0312 11.7812 15.0312Z" fill="currentColor"/>
                                            <path d="M0.468747 1.90628H2.42352L4.68657 9.82851L4.50907 10.1835C4.0417 11.1173 4.72016 12.2187 5.767 12.2187H13.6562C13.9153 12.2187 14.1249 12.0091 14.1249 11.75C14.1249 11.4909 13.9153 11.2812 13.6562 11.2812H5.767C5.41891 11.2812 5.19141 10.9147 5.34769 10.6028L5.47725 10.3437H13.6562C13.8654 10.3437 14.0494 10.205 14.1071 10.0036L15.9821 3.44114C16.0223 3.29971 15.994 3.14771 15.9056 3.03008C15.8168 2.91289 15.6781 2.84377 15.5312 2.84377H3.66632L3.22779 1.30887C3.17011 1.10747 2.98611 0.96875 2.77689 0.96875H0.468747C0.209655 0.96875 0 1.17841 0 1.4375C0 1.69659 0.209655 1.90628 0.468747 1.90628Z" fill="currentColor"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_470_623">
                                                <rect width="16" height="16" fill="currentColor"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    Đặt mua ngay
                                </a>
                            </div>
                        </li>
                        <?php endfor; ?>
                    </ul>
                </div>

                <div class="uk-hidden@s uk-light">
                    <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>

                <div class="uk-visible@s">
                    <a class="uk-position-center-left-out uk-position-small home__tailieu__sliderNav home__tailieu__sliderNav--previous" href="#" uk-slider-item="previous">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.45881 8.00338L12.4444 2.01756C12.6092 1.85314 12.6999 1.6333 12.6999 1.39889C12.6999 1.16436 12.6092 0.94465 12.4444 0.779967L11.9199 0.25574C11.7553 0.0907967 11.5354 0 11.301 0C11.0665 0 10.8468 0.0907967 10.6822 0.25574L3.55539 7.38237C3.39006 7.54758 3.29952 7.76832 3.30017 8.00299C3.29952 8.2387 3.38993 8.45919 3.55539 8.62452L10.6755 15.7443C10.8402 15.9092 11.0599 16 11.2945 16C11.5289 16 11.7486 15.9092 11.9134 15.7443L12.4377 15.22C12.7789 14.8788 12.7789 14.3234 12.4377 13.9823L6.45881 8.00338Z" fill="white"/>
                        </svg>
                    </a>
                    <a class="uk-position-center-right-out uk-position-small home__tailieu__sliderNav home__tailieu__sliderNav--next" href="#" uk-slider-item="next">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.54119 8.00338L3.55563 2.01756C3.39082 1.85314 3.30015 1.6333 3.30015 1.39889C3.30015 1.16436 3.39082 0.94465 3.55563 0.779967L4.08012 0.25574C4.24467 0.0907967 4.46464 0 4.69904 0C4.93345 0 5.15316 0.0907967 5.31784 0.25574L12.4446 7.38237C12.6099 7.54758 12.7005 7.76832 12.6998 8.00299C12.7005 8.2387 12.6101 8.45919 12.4446 8.62452L5.32448 15.7443C5.15979 15.9092 4.94009 16 4.70555 16C4.47114 16 4.25143 15.9092 4.08662 15.7443L3.56226 15.22C3.22106 14.8788 3.22106 14.3234 3.56226 13.9823L9.54119 8.00338Z" fill="white"/>
                        </svg>
                    </a>
                </div>

            </div>

            <ul class="uk-slider-nav home__tailieu__dotnav uk-grid-8 uk-dotnav uk-flex-center uk-margin"></ul>

        </div>
    </div>
</div>
<!--/Tài liệu-->

<!--Tin tức-->
<div class="uk-section home__section old">
    <div class="uk-container">
        <div class="uk-text-center">
            <h3 class="uk-h3 home__section__title1">Tin tức</h3>
            <div class="home__section__title2 item__12">Hoạt động Cây Bút Nhí</div>
        </div>
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
<!--/Tin tức-->

<?php require "template-parts/layouts/footer.php"; ?>