<?php
/*
* Template Name: mien-trung
*/
?>
<?php get_header(); ?>
<div id="main">
        <div id="slider-mientrung">
            <style>
                #slider-mientrung {
                    padding-top: 20%;
                    background: url(<?php bloginfo('template_directory') ?>/images/mientrung.jpeg) top / cover no-repeat;
                    /* max-height: 480px; */
                }

                /* responsive */
                @media screen and (max-width: 475px) {
                    #slider-mientrung {
                        padding-top: 30%;
                    }
                }
            </style>
            <div class="background-description" style="width: 80%;">
                <div class="title">
                    <h1>DU LỊCH MIỀN TRUNG</h1>
                </div>
                <div class="description">
                    <p>Tour Hè Miền Trung đang trở thành xu hướng du lịch nghỉ dưỡng số một tại Việt
                        Nam bởi nơi đây có nhiều cảnh quan và bãi biển đẹp. Đến với Tour du lịch Miền Trung, Tour Du
                        lịch hè miền trung du khách sẽ được thả hồn vào sóng nước, được tham quan hệ sinh thái động thực
                        vật đa dạng phong phú và khám phá những bãi biển hoang sơ. </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div id="tour-card" class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="image-tour">
                                <a href="">
                                    <img src="<?php bloginfo('template_directory') ?>/images/tour-detail.jpeg" class="img" alt="">
                                </a>
                                <div class="tour-promotion">
                                    <div class="text-promotion-tour">
                                        Giá từ: 1.550.000đ/ khách
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <div class="row">
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                    <div class="title-tour">
                                        <a>Du lịch Buôn Ma Thuột - Buôn Đôn - KDL sinh thái Kotam [Khởi hành từ Buôn Ma
                                            Thuột]</a>
                                    </div>
                                    <div class="destination-tour">Buôn Ma Thuột - Buôn Ma Thuột</div>
                                    <p class="time-tour" style="margin-bottom: 0;">
                                        Thời gian : 2 ngày 1 đêm
                                    </p>
                                    <div class="day-tour">
                                        <p class="day-start">12/04/2022</p>&nbsp;-&nbsp;
                                        <p class="day-end">14/02/2022</p>
                                    </div>
                                    <p class="description-tour ">Trải nghiệm cảm giác thú vị khi ngồi trên lưng những
                                        Chú voi Bản Đôn
                                        Trải
                                        nghiệm cảm giác thú vị khi ngồi trên lưng những Chú voi Bản Đôn</p>
                                </div>
                                <div class="box-btn-tour-detail col-md-4 col-sm-4 col-xs-12">
                                    <a class="btn-tour-detail"><span>Chi tiết</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>