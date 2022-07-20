<?php
/*
* Template Name: mien-nam
*/
?>
<?php get_header(); ?>

<div id="main">
        <div id="slider-miennam">
            <style>
                #slider-miennam {
                    padding-top: 20%;
                    background: url(<?php bloginfo('template_directory') ?>/images/miennam.jpg) top / cover no-repeat;
                    /* max-height: 480px; */
                }

                /* responsive */
                @media screen and (max-width: 475px) {
                    #slider-miennam {
                        padding-top: 30%;
                    }
                }
            </style>
            <div class="background-description" style="width: 80%;">
                <div class="title">
                    <h1>DU LỊCH MIỀN NAM</h1>
                </div>
                <div class="description">
                    <p>Các điểm du lịch miền Nam Việt Nam không những được tạo hóa ưu ái ban tặng vẻ đẹp hữu tình mà còn
                        dành cho nơi đây những dải đất phù sa màu mỡ với nhiều hoa tươi quả ngọt. Cũng chính vì vậy mà
                        con người miền Nam hiền hòa, ẩm thực phong phú đưa nhiều du khách lui tới vùng đất này.</p>
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