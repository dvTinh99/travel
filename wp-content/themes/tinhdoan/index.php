<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="shortcut icon" href="https://saigontourist.net/images/icons/favicon.ico" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,500;1,400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/css/custom.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/css/cssheader.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/css/cssfooter.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/css/slider.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/css/about.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/css/tour.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/css/rsp-listtour.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/css/list-tour.css">

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
</head>

<body>
    <header>
        <!-- navbar -->
        <div class="navigation-top">
            <div class="top_nav">
                <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-house-heart-fill" viewBox="0 0 16 16">
                        <path
                            d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.707L8 2.207 1.354 8.853a.5.5 0 1 1-.708-.707L7.293 1.5Z" />
                        <path
                            d="m14 9.293-6-6-6 6V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9.293Zm-6-.811c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.691 0-5.018Z" />
                    </svg> Công ty TNHH VeraTravel</p>
                <p id="phone_nav"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-telephone-inbound-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM15.854.146a.5.5 0 0 1 0 .708L11.707 5H14.5a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 1 0v2.793L15.146.146a.5.5 0 0 1 .708 0z" />
                    </svg> Hotline : 0774442555</p>
            </div>
            <nav class="navbar navbar-expand-xl navbar-dark bg-primary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="<?php bloginfo('template_directory')?>/images/logo.png" alt="" srcset="">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="main_nav">
                        <ul class="navbar-nav">
                            <li class="nav-item active"> <a class="nav-link" href="#">Trang chủ </a> </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown">Tour trong
                                    nước</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">DU LỊCH MIỀN BẮC</a></li>
                                    <li><a class="dropdown-item" href="#">DU LỊCH MIỀN TRUNG </a></li>
                                    <li><a class="dropdown-item" href="#">DU LỊCH MIỀN NAM</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> Tour nước ngoài
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">DU LỊCH CHÂU Á</a></li>
                                    <li><a class="dropdown-item" href="#">DU LỊCH CHÂU ÂU</a></li>
                                    <li><a class="dropdown-item" href="#">DU LỊCH CHÂU PHI</a></li>
                                    <li><a class="dropdown-item" href="#">DU LỊCH CHÂU MỸ </a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> Dịch vụ
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#"> Thuê xe</a></li>
                                    <li><a class="dropdown-item" href="#"> Vé máy bay </a></li>
                                    <li><a class="dropdown-item" href="#"> Bảo hiểm du lịch </a></li>
                                    <li><a class="dropdown-item" href="#"> Sim du lịch</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#"> Thanh toán </a></li>
                            <li class="nav-item"><a class="nav-link" href="#"> Liên hệ </a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

    </header>
    <!-- slider -->
    <div class="owl-carousel owl-theme">
        <div class="item">
            <img src="<?php bloginfo('template_directory')?>/images/canh dep du lich 02.jpg" alt="">
            <div class="cover">
                <div class="container">
                    <div class="header-content">
                        <div class="line"></div>
                        <h1>Tour trong nước</h1>
                        <h4>Khám phá những tour du lịch đa dạng và thú vị nhất tại Việt Nam.</h4>
                        <button id="button_">Xem thêm</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="<?php bloginfo('template_directory')?>/images/banner2.jpg" alt="">
            <div class="cover">
                <div class="container">
                    <div class="header-content">
                        <div class="line animated bounceInLeft"></div>
                        <h1>Tour nước ngoài</h1>
                        <h4>Khám phá những vùng đất mới cùng VERATRAVEL thật đơn giản và thú vị.</h4>
                        <button id="button_">Xem thêm</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content địa điểm hot-->
    <h1 class="title-content" style=" text-align: center ;">Địa điểm hot *</h1>
    <section class="campus">
        <div class="row_campus">
            <div class="campus-col">
                <img src="images/diadiemhot.jpg" alt="">
                <div class="layer">
                    <h3>
                        <p style="font-size: 15px;font-weight: 400;">Du lịch Singapore Du lịch
                            Singapore</p>
                        <p>Thời gian : 3 ngày 2 đêm</p>
                        <p>Bắt đầu: 20/02/2022</p>

                    </h3>

                </div>
            </div>
            <div class="campus-col">
                <img src="images/diadiemhot.jpg" alt="">
                <div class="layer">
                    <h3>
                        <p style="font-size: 15px;font-weight: 400;">Du lịch Singapore Du lịch
                            Singapore</p>
                        <p>Thời gian : 3 ngày 2 đêm</p>
                        <p>Bắt đầu: 20/02/2022</p>
                    </h3>

                </div>
            </div>
            <div class="campus-col">
                <img src="images/diadiemhot.jpg" alt="">
                <div class="layer">
                    <h3>
                        <p style="font-size: 15px;font-weight: 400;">Du lịch Singapore Du lịch
                            Singapore</p>
                        <p>Thời gian : 3 ngày 2 đêm</p>
                        <p>Bắt đầu: 20/02/2022</p>
                    </h3>

                </div>
            </div>
            <div class="campus-col">
                <img src="images/diadiemhot.jpg" alt="">
                <div class="layer">
                    <h3>
                        <p style="font-size: 15px;font-weight: 400;">Du lịch Singapore Du lịch
                            Singapore</p>
                        <p>Thời gian : 3 ngày 2 đêm</p>
                        <p>Bắt đầu: 20/02/2022</p>
                    </h3>

                </div>
            </div>
            <div class="campus-col">
                <img src="images/diadiemhot.jpg" alt="">
                <div class="layer">
                    <h3>
                        <p style="font-size: 15px;font-weight: 400;">Du lịch Singapore Du lịch
                            Singapore</p>
                        <p>Thời gian : 3 ngày 2 đêm</p>
                        <p>Bắt đầu: 20/02/2022</p>
                    </h3>

                </div>
            </div>
        </div>
    </section>

    <!-- content tour trong nước-->
    <h1 class="title-content">Tour trong nước</h1>
    <section class="campus">
        <div class="row_campus">
            <div class="campus-col">
                <img src="images/diadiemhot.jpg" alt="">
                <div class="layer">
                    <h3>
                        <p style="font-size: 15px;font-weight: 400;">Du lịch Singapore Du lịch
                            Singapore</p>
                        <p>Thời gian : 3 ngày 2 đêm</p>
                        <p>Bắt đầu: 20/02/2022</p>
                    </h3>

                </div>
            </div>
            <div class="campus-col">
                <img src="images/diadiemhot.jpg" alt="">
                <div class="layer">
                    <h3>
                        <p style="font-size: 15px;font-weight: 400;">Du lịch Singapore Du lịch
                            Singapore</p>
                        <p>Thời gian : 3 ngày 2 đêm</p>
                        <p>Bắt đầu: 20/02/2022</p>
                    </h3>

                </div>
            </div>
            <div class="campus-col">
                <img src="images/diadiemhot.jpg" alt="">
                <div class="layer">
                    <h3>
                        <p style="font-size: 15px;font-weight: 400;">Du lịch Singapore Du lịch
                            Singapore</p>
                        <p>Thời gian : 3 ngày 2 đêm</p>
                        <p>Bắt đầu: 20/02/2022</p>
                    </h3>

                </div>
            </div>
            <div class="campus-col">
                <img src="images/diadiemhot.jpg" alt="">
                <div class="layer">
                    <h3>
                        <p style="font-size: 15px;font-weight: 400;">Du lịch Singapore Du lịch
                            Singapore</p>
                        <p>Thời gian : 3 ngày 2 đêm</p>
                        <p>Bắt đầu: 20/02/2022</p>
                    </h3>

                </div>
            </div>
            <div class="campus-col">
                <img src="images/diadiemhot.jpg" alt="">
                <div class="layer">
                    <h3>
                        <p style="font-size: 15px;font-weight: 400;">Du lịch Singapore Du lịch
                            Singapore</p>
                        <p>Thời gian : 3 ngày 2 đêm</p>
                        <p>Bắt đầu: 20/02/2022</p>
                    </h3>

                </div>
            </div>
        </div>
        <button id="button_">Xem thêm</button>
    </section>

    <!-- content tour nước ngoài-->
    <h1 class="title-content">Tour nước ngoài</h1>
    <section class="campus">
        <div class="row_campus">
            <div class="campus-col">
                <img src="images/diadiemhot.jpg" alt="">
                <div class="layer">
                    <h3>
                        <p style="font-size: 15px;font-weight: 400;">Du lịch Singapore Du lịch
                            Singapore</p>
                        <p>Thời gian : 3 ngày 2 đêm</p>
                        <p>Bắt đầu: 20/02/2022</p>
                    </h3>

                </div>
            </div>
            <div class="campus-col">
                <img src="images/diadiemhot.jpg" alt="">
                <div class="layer">
                    <h3>
                        <p style="font-size: 15px;font-weight: 400;">Du lịch Singapore Du lịch
                            Singapore</p>
                        <p>Thời gian : 3 ngày 2 đêm</p>
                        <p>Bắt đầu: 20/02/2022</p>
                    </h3>

                </div>
            </div>
            <div class="campus-col">
                <img src="images/diadiemhot.jpg" alt="">
                <div class="layer">
                    <h3>
                        <p style="font-size: 15px;font-weight: 400;">Du lịch Singapore Du lịch
                            Singapore</p>
                        <p>Thời gian : 3 ngày 2 đêm</p>
                        <p>Bắt đầu: 20/02/2022</p>
                    </h3>

                </div>
            </div>
            <div class="campus-col">
                <img src="images/diadiemhot.jpg" alt="">
                <div class="layer">
                    <h3>
                        <p style="font-size: 15px;font-weight: 400;">Du lịch Singapore Du lịch
                            Singapore</p>
                        <p>Thời gian : 3 ngày 2 đêm</p>
                        <p>Bắt đầu: 20/02/2022</p>
                    </h3>

                </div>
            </div>
            <div class="campus-col">
                <img src="images/diadiemhot.jpg" alt="">
                <div class="layer">
                    <h3>
                        <p style="font-size: 15px;font-weight: 400;">Du lịch Singapore Du lịch
                            Singapore</p>
                        <p>Thời gian : 3 ngày 2 đêm</p>
                        <p>Bắt đầu: 20/02/2022</p>
                    </h3>

                </div>
            </div>
        </div>
        <button id="button_">Xem thêm</button>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-12">
                <a target="_blank" href="https://www.dichvu.saigontourist.net/">
                    <img width="100%" src="<?php bloginfo('template_directory')?>/images/Banner-dichvudulich.jpg">
                </a>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="col-sm-12 col-xs-6" style="padding: 0;">
                    <a target="_blank" href="https://khachhang.saigontourist.net/">
                        <img width="100%" src="<?php bloginfo('template_directory')?>/images/Banner-TheThanhVien-01.jpg">

                    </a>
                </div>
                <div class="col-sm-12 col-xs-6" style="margin-top: 10px;padding: 0;">
                    <a target="_blank" href="https://dichvu.saigontourist.net/">
                        <img width="100%" src="<?php bloginfo('template_directory')?>/images/banner-web-tai-App.jpg">

                    </a>
                </div>
            </div>
        </div>
    </div>


    <section class="whiteSection">
        <div class="container commitment">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12" id="list_commitment">
                    <div class="commitment-box">
                        <div class="commitment-image">
                            <img width="60px" height="60px" class="icon-commitment" src="<?php bloginfo('template_directory')?>/images/price.png"
                                alt="image commitment">
                        </div>
                        <div class="commitment-content">
                            <span class="commitment-taitle">GIÁ TỐT - NHIỀU ƯU ĐÃI</span>
                            <p class="commitment-description">Ưu đãi và quà tặng hấp dẫn khi mua
                                tour online</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12" id="list_commitment">
                    <div class="commitment-box">
                        <div class="commitment-image">
                            <img width="60px" height="60px" class="icon-commitment" src="<?php bloginfo('template_directory')?>/images/pay.png"
                                alt="image commitment">
                        </div>
                        <div class="commitment-content">
                            <span class="commitment-taitle">THANH TOÁN AN TOÀN</span>
                            <p class="commitment-description">Được bảo mật bởi tổ chức quốc tế
                                Global Sign</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12" id="list_commitment">
                    <div class="commitment-box">
                        <div class="commitment-image">
                            <img width="60px" height="60px" class="icon-commitment" src="<?php bloginfo('template_directory')?>/images/promotion.png"
                                alt="image commitment">
                        </div>
                        <div class="commitment-content">
                            <span class="commitment-taitle">TƯ VẤN MIỄN PHÍ</span>
                            <p class="commitment-description">Hỗ trợ tư vấn online miễn phí</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12" id="list_commitment">
                    <div class="commitment-box">
                        <div class="commitment-image">
                            <img width="60px" height="60px" class="icon-commitment" src="<?php bloginfo('template_directory')?>/images/star.png"
                                alt="image commitment">
                        </div>
                        <div class="commitment-content">
                            <span class="commitment-taitle">THƯƠNG HIỆU UY TÍN</span>
                            <p class="commitment-description">Thương hiệu lữ hành hàng đầu Việt
                                Nam</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->
    <footer>
        <div class="footer_clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-4 col-xs-12">
                        <div class="info-sgt-box">
                            <div class="info-sgt-logo">
                                <img class="image-info-footer" src="<?php bloginfo('template_directory')?>/images/logo.png" alt="image commitment" />
                            </div>
                            <div class="info-sgt-title">
                                Lữ hành , thương hiệu lữ hành hàng đầu Việt Nam<br />
                                Thương hiệu quốc gia
                            </div>
                            <div class="info-sgt-title">
                                Địa chỉ : 18 Hồ Huân Nghiệp, Mỹ An, Ngũ Hành Sơn, Đà Nẵng
                            </div>

                            <div class="info-sgt-image">
                                <img class="image-info-footer" src="<?php bloginfo('template_directory')?>/images/prize.png" alt="image commitment" />
                            </div>
                            <div class="info-sgt-contact">
                                <p class="contact-phone" href="tel:0774442555">Tổng đài: <span
                                        class="number-phone">0774442555</span></p>
                                <p class="contact-email" href="mailto:veratravel@.net">Email:
                                    VeraTravel68@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-8 col-xs-12">
                        <div class="row">
                            <div class="col-sm-4 col-xs-12">
                                <div class="footerContent info-sgt-box">
                                    <h5>DỊCH VỤ</h5>

                                    <ul>
                                        <li><a class="link-level4-light" href="/tour-trong-nuoc">Tour trong nước</a>
                                        </li>
                                        <li><a class="link-level4-light" href="/tour-nuoc-ngoai">Tour nước ngoài</a>
                                        </li>
                                        <li><a class="link-level4-light" href="/trang/dich-vu-ve-may-bay">Vé máy
                                                bay</a>
                                        </li>
                                        <li><a class="link-level4-light" href="/trang/dich-vu-thue-xe">Thuê xe</a>
                                        </li>
                                        <li><a href="https://www.chubbtravelinsurance.com.vn/vi/?brokerCode="
                                                target="_blank">Mua Bảo hiểm Du lịch</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-sm-4 col-xs-12">
                                <div class="footerContent info-sgt-box">
                                    <h5>CHĂM SÓC KHÁCH HÀNG</h5>

                                    <ul>
                                        <li><a href="https://khachhang..net/" target="_blank">Thẻ khách
                                                hàng</a></li>
                                        <li><a href="https://.net/trang/gioi-thieu-ung-dung-di-dong--travel"
                                                target="_blank">Tải App</a></li>
                                        <li><a class="link-level4-light" href="/trang/travel-voucher"
                                                target="_blank">Travel Voucher </a></li>
                                        <li><a class="link-level4-light" href="/trang/bao-hiem-du-lich"
                                                target="_blank">Bảo hiểm Du lịch</a></li>
                                        <li><a href="https://.net/vi/chi-tiet/604/-tien-phong-tang-bao-hiem-covid-cho-toan-bo-du-khach"
                                                target="_blank">Bảo hiểm Covid 19</a></li>
                                        <li><a class="link-level4-light" href="/y-kien-khach-hang">Ý kiến khách
                                                hàng</a>
                                        </li>
                                        <li><a href="https://cskh..net/" target="_blank">Phiếu
                                                góp ý</a>
                                        </li>
                                        <li>
                                            <a class="link-level4-light" href="/trang/chuong-trinh-thap-sang-niem-tin"
                                                target="_blank">
                                                Chương trình<br />
                                                Thắp sáng Niềm Tin
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-sm-4 col-xs-12">
                                <div class="footerContent info-sgt-box">
                                    <h5>LIÊN HỆ</h5>

                                    <ul>
                                        <li><a class="link-level4-light" href="/trang/gioi-thieu-lu-hanh-">Giới
                                                thiệu</a></li>
                                        <li><a class="link-level4-light" href="/lien-he">Liên
                                                hệ</a></li>
                                        <li><a class="link-level4-light" href="/chi-nhanh">Chi
                                                nhánh</a></li>
                                        <li><a class="link-level4-light" href="/trang/quy-dinh-bao-ve">Quy định bảo
                                                vệ
                                            </a></li>
                                        <li><a class="link-level4-light" href="/trang/dieu-khoan-chung">Điều khoản
                                                chung
                                            </a></li>
                                        <li><a href="https://.net/trang/huong-dan-thanh-toan-tren-website">Hướng
                                                dẫn mua tour online</a></li>
                                        <li><a class="link-level4-light" href="/trang/quy-dinh-thanh-toan">Quy định
                                                thanh toán</a></li>
                                        <li><a class="link-level4-light" href="/trang/chinh-sach-giao-nhan">Chính
                                                sách
                                                giao nhận</a></li>
                                        <li><a class="link-level4-light" href="/trang/chinh-sach-huy-phat">Chính
                                                sách
                                                hủy phạt</a></li>
                                        <li><a class="link-level4-light"
                                                href="/trang/chinh-sach-bao-mat-va-thu-thap-thong-tin">Chính
                                                sách
                                                bảo
                                                mật</a></li>
                                        <li><a href="https://.net/trang/chinh-sach-chat-luong" target="_blank">Chính
                                                sách chất lượng</a></li>
                                        <li><a class="link-level4-light" href="http://www..net/tuyendung/"
                                                target="_blank">Tuyển dụng</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-footer clearfix">
            <div class="col-sm-12 col-xs-12 copyright-style">
                <p style="text-align: center;"><img alt="" src="https://www..net/uploads<?php bloginfo('template_directory')?>/images/thequocte.gif"
                        style="width: 60%;" /></p>

                <p style="text-align: center;">
                    <span style="font-size: 11px;">
                        © Công ty TNHH Một Thành Viên Dịch vụ Lữ hành VERATRAVEL.<br />
                        ĐÀ NẴNG.
                    </span>
                </p>
                <h3 style="text-align: center;">Tư vấn &amp; đặt dịch vụ: 0774442555
                </h3>
                <p style="text-align: center;">Website <strong>veratravel.net</strong> đã <a
                        href="http://online.gov.vn/CustomWebsiteDisplay.aspx?DocId=36659" target="_blank">được đăng
                        ký</a> với Bộ Công Thương</p>
                <p style="text-align: center;">
                    <a href="###" target="_blank">
                        <img alt="" src="<?php bloginfo('template_directory')?>/images/20150827110756-dathongbao.png"
                            style="width: 200px; height: 70px; margin-top: 10px; margin-bottom: 10px; border-width: 0px; border-style: solid;" />
                    </a>
                </p>
                <p style="text-align: center;">
                    Kết nối với Lữ hành &nbsp; &nbsp;
                    <a href="" target="_blank"><img alt="VERATRAVEL" src="<?php bloginfo('template_directory')?>/images/social-fa.gif"
                            style="height: 50px; width: 50px;" /></a>
                    <a href="" target="_blank"><img alt="Youtube" src="<?php bloginfo('template_directory')?>/images/social-youtube.gif"
                            style="height: 50px; width: 50px;" /></a>
                </p>
                <p>&nbsp;</p>
            </div>
        </div>
        <div class="copyRight clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="copyRightText">
                            <p style="text-align: center;">Copyright © 2022. All Rights Reserved
                                by <a target="_blank" href="https://www.facebook.com/codebyy">CODEBY</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- menu-mobile -->





    <div class="menu-mobile">
        <ul>
            <li style="background-color: #007bff;"><a><img src="<?php bloginfo('template_directory')?>/images/logo.png" alt="" srcset=""></a>
            </li>
            <li><a>TRANG CHỦ</a>
            </li>
            <li><a style="display: flex; justify-items: center; align-items: center;">TOUR TRONG NUÓC &nbsp;<svg
                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-caret-down-fill" viewBox="0 0 16 16">

                        <path
                            d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                    </svg> </a>
            </li>
            <li><a>Du lịch miền Bác</a></li>
            <li><a>Du lịch miền Trung</a></li>
            <li><a>Du lịch miền Nam</a></li>

            <li><a style="display: flex; justify-items: center; align-items: center;">TOUR NUÓC NGOÀI &nbsp;<svg
                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                        <path
                            d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                    </svg></a>
            </li>
            <li><a>Du lịch châu Á</a></li>
            <li><a>Du lịch châu Âu</a></li>
            <li><a>Du lịch châu Phi</a></li>
            <li><a>Du lịch châu Mỹ</a></li>

            <li><a>DỊCH VỤ</a>
            </li>
            <li><a>THANH TOÁN</a>
            </li>
            <li><a>LIÊN HỆ</a>
            </li>
        </ul>
    </div>
    <style>
        .menu-mobile {
            position: absolute;
            top: 0;
            width: 80%;
            z-index: 1000;
            visibility: hidden;


        }

        ._open_menu .menu-mobile {
            visibility: visible;
            transform: translateX(0);
            opacity: 1;
        }

        .menu-mobile ul {
            width: 100%;
            background-color: #fff;
            /* transition: all 300ms;
            transform: translateX(0); */
            transform: translateX(0);
            transition: all 100ms;
            /* opacity: 0; */
        }

        .menu-mobile ul li {
            padding: 10px 20px;
        }

        .menu-mobile ul li a {
            text-decoration: none;
        }
    </style>
    <!-- js -->
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            dots: true,
            nav: true,
            mouseDrag: false,
            autoplay: true,
            animateOut: 'slideOutUp',
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });

    </script>
    <script>

        document.querySelector('.navbar-toggler').addEventListener('click', () => {
            document.querySelector('html').classList.toggle('_open_menu')
        })

        document.addEventListener("DOMContentLoaded", function () {
            // make it as accordion for smaller screens
            if (window.innerWidth > 992) {

                document.querySelectorAll('.navbar .nav-item').forEach(function (everyitem) {

                    everyitem.addEventListener('mouseover', function (e) {
                        let el_link = this.querySelector('a[data-bs-toggle]');

                        if (el_link != null) {
                            let nextEl = el_link.nextElementSibling;
                            el_link.classList.add('show');
                            nextEl.classList.add('show');
                        }

                    });
                    everyitem.addEventListener('mouseleave', function (e) {
                        let el_link = this.querySelector('a[data-bs-toggle]');

                        if (el_link != null) {
                            let nextEl = el_link.nextElementSibling;
                            el_link.classList.remove('show');
                            nextEl.classList.remove('show');
                        }
                    })
                });
            }
        });

    </script>
</body>

</html>