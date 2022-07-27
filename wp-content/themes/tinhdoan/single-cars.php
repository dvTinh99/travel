<?php get_header(); ?>
<?php
$thumbnailUrl = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail');
?>
<div class="main-wrapper">
    <!-- PAGE TITLE -->
    <div id="banner-car">
        <style>
            #banner-car {
                margin-bottom: 2%;
                text-align: center;
                padding-top: 20%;
                background: url(<?=$thumbnailUrl?>) top / cover no-repeat;
                /* max-height: 480px; */
            }

            @media screen and (max-width: 475px) {
                #banner-car {
                    padding-top: 30%;
                }
            }

            .date-tour {
                margin-bottom: 0;
                color: #eb2525;
            }
        </style>
        <div class="background-description">
            <div class="title">
                <h1><?= the_field('tuyen_car'); ?></h1>

            </div>
        </div>
    </div>
    <!-- WHITE SECTION-->
    <section class="mainContentSection singlePackage">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div role="tabpanel" class="countryTabs">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active">
                                <div class="row">
                                    <div class="col-sm-9 col-xs-12">
                                        <h2 class="extra-service-price" style="color: #ff891e ;">
                                            Giá từ: <?= the_field('gia_car'); ?></h2>
                                        <div class="commonInfo">
                                            <div>
                                                <p><?= the_field('lo_trinh'); ?></p>

                                                <ul>
                                                    <li><?= the_field('loai_xe'); ?> </li>
                                                    <li style="color: #ff891e ;">Liên hệ ngay Hotline để được tư vấn
                                                        về giá</li>
                                                </ul>

                                                <p>
                                                    <?= the_content(); ?>
                                                </p>

                                                <p>&nbsp;</p>

                                                <p><img alt="" src="./images/carr.jpg" style="width: 90%;">
                                                </p>
                                                <p>&nbsp;</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-4 col-xs-12">
                                                <div class="right-detail-tour-box" id="boxInfoSuportSgt">
                                                    <div class="title">Liên hệ đặt chỗ</div>
                                                    <ul class="list-rows">
                                                        <li class="item_">
                                                            <a class="item_-line" href="tel:0774442555">
                                                                <i class="fa fa-phone"></i>
                                                                <span class="text">Hotline: 0774442555</span>
                                                            </a>
                                                        </li>
                                                        <li class="item_">
                                                            <a class="item_-line" href="mailto:VeraTravel68@gmail.com">
                                                                <i class="fa fa-envelope"></i>
                                                                <span class="text">Email:
                                                                    VeraTravel68@gmail.com</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="callback-sgt">
                                                        <button class="btn-callback-sgt" data-toggle="modal" data-target="#callMeBackModal">
                                                            <span class="fa fa-phone">Gọi ngay</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-4 col-xs-12">
                                                <div class="right-detail-tour-box">
                                                    <div class="title">Vì sao nên mua tour tạI VERATRAVEL?</div>

                                                    <ul class="list-rows">
                                                        <li class="item_"><a class="item_-line" href="#"><span class="text">An toàn - Bảo
                                                                    mật</span> </a></li>
                                                        <li class="item_"><a class="item_-line" href="#"><span class="text">Tiện lợi, tiết
                                                                    kiệm thời gian</span> </a></li>
                                                        <li class="item_"><a class="item_-line" href="#"><span class="text">Không tính phí
                                                                    giao dịch</span> </a></li>
                                                        <li class="item_"><a class="item_-line" href="#"><span class="text">Giao dịch bảo
                                                                    đảm</span> </a></li>
                                                        <li class="item_"><a class="item_-line" href="#"><span class="text">Nhận thêm ưu
                                                                    đãi</span> </a></li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="col-md-12 col-sm-4 col-xs-12">
                                                <div class="right-detail-tour-box">
                                                    <div class="title">Thương hiệu uy tín</div>

                                                    <ul class="list-rows">
                                                        <li class="item_"><a class="item_-line" href="#"><span class="text">Thành lập từ năm
                                                                    2020</span> </a></li>
                                                        <li class="item_"><a class="item_-line" href="#"><span class="text">Thương hiệu lữ
                                                                    hành hàng đầu</span> </a></li>
                                                        <li class="item_"><a class="item_-line" href="#"><span class="text">Thương hiệu mọi người tin
                                                                    dùng</span> </a></li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <p class="item_" style="text-align: center;"><a href="###" target="_blank"><img alt="" src="./images/diadiemhot.jpg" style="width: 95%;"></a></p>

                                            <p class="item_" style="text-align: center;">&nbsp;</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="relatedProduct">
                    <?php get_template_part('template-parts/tour-relative', null, array(
                            'name' => 'Tour liên quan',
                            'cat' => 'hot',
                        )) ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="relatedProduct">
                    <?php get_template_part('template-parts/car-relative', null, array(
                            'name' => 'Dịch vụ khác',
                            'cat' => 'hot',
                        )) ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>