<?php
/*
* Template Name: tour
*/
?>
<?php get_header(); ?>

<section class="mainContentSection singlePackage">
        <div class="container detail-tour-kiritm" style="margin-top: 155px;">
            <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="info-tour">
                        <div class="promotion-tour">
                            <div class="text-promotion-tour" title="Giá tour từ 2.679.000 đ">Giá tour từ <?php the_field('gia'); ?>
                            </div>
                        </div>
                        <div class="row-info">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <span class="text-uppercase">Thời gian:</span>
                                    <span class="text-strong"><?php the_field('thoi_luong'); ?></span>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <span class="text-uppercase">Phương tiện:</span>
                                    <span class="text-strong">
                                    <?php the_field('phuong_tien'); ?>
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <span class="text-uppercase">Điểm xuất phát:</span>
                                    <span class="text-strong"><?php the_field('diem_xuat_phat'); ?> </span>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <span class="text-uppercase">Điểm đến:</span>
                                    <span class="text-strong"><?php the_field('diem_den'); ?></span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="list-tour-detail">
                        <div class="row ">
                            <div class="col-md-12 col-xs-12 tour-detail-title-information tour-detail-header-col">
                                <div class="row">
                                    <div class="col-md-2 col-sm-3 col-xs-12">
                                        Khởi hành
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-xs-12">
                                        Mã Tour
                                    </div>
                                    <div class="col-sm-2 col-xs-12">
                                        Giá
                                    </div>
                                    <div class="col-sm-2 col-xs-12">
                                        Giá trẻ em
                                    </div>
                                    <div class="col-sm-2 col-xs-12">
                                        Giá em bé
                                    </div>
                                    <div class="col-md-2 col-sm-12 col-xs-12">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 tour-detail-content-col">
                                <div class="list-inline">
                                    <div class="row">
                                        <div class=" col-xs-12">
                                            <h5>Thông tin tour chi tiết thứ #1</h5>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-xs-12">
                                            <label>Ngày khởi hành</label>
                                            <strong><?php the_field('ngay_khoi_hanh'); ?></strong>
                                        </div>
                                        <div class="col-md-2 col-sm-3 col-xs-12">
                                            <label>Mã Tour</label>
                                            <strong style="margin-left: -30px;"><?php the_field('ma_tour'); ?></strong>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-12 price">
                                            <label>Giá</label>
                                            <strong><?php the_field('price'); ?></strong>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-12 price">
                                            <label>Giá trẻ em</label>
                                            <strong><?php the_field('price_child'); ?></strong>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-12 price">
                                            <label>Giá trẻ sơ sinh</label>
                                            <strong><?php the_field('gia_em_be'); ?></strong>
                                        </div>
                                        <div class="col-md-2 col-sm-12 col-xs-12 packageInfo">
                                            <label>Đặt/Mua tour</label>
                                            <div class="action-book">
                                                <form method="POST" action="/booking">
                                                    <input type="hidden" name="tour_id" value="<?php the_field('ma_tour'); ?>">
                                                    <input type="hidden" name="name_tour" value="<?php the_field('name'); ?>">
                                                    <button class="btn btn-buy-tour"
                                                        href="/booking/book-tour/pax-no/21763?type=buy">
                                                        Đặt tour
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" row-info-tour">
                        <div role="tabpanel">
                            <!-- Nav tabs -->
                            <p style="color: #ff891e ;">
                                Chương trình Tour
                            </p>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="tour-program">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="commonInfo">
                                                <p></p>
                                                <?= get_the_content(); ?>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-md-12 col-sm-4 col-xs-12">
                            <div class="right-detail-tour-box" id="boxInfoSuportSgt">
                                <div class="title">Hỗ trợ khách hàng</div>
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
                                            <span class="text">Email: VeraTravel68@gmail.com</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="callback-sgt">
                                    <button class="btn-callback-sgt" data-toggle="modal" data-target="#callMeBackModal">
                                        <span class="fa fa-phone"> Bạn muốn được gọi lại?</span>
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
                                    <li class="item_"><a class="item_-line" href="#"><span class="text">Thương hiệu mọi
                                                người tin dùng</span> </a></li>
                                </ul>
                            </div>
                        </div>

                        <p class="item_" style="text-align: center;"><a href="###" target="_blank"><img alt=""
                                    src="<?php bloginfo('template_directory') ?>/images/diadiemhot.jpg" style="width: 95%;"></a></p>

                        <p class="item_" style="text-align: center;">&nbsp;</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container more-info-tour">
            <div class="row">
                <div class="col-xs-12">
                    <div class="relatedProduct">
                        <h2>Tour liên quan</h2>
                        <div class="row">
                            <?php
                                $post_id = get_the_ID(); //this will get the post id
                                $category_object = get_the_category($post_id); //this will get categories
                                $category_name = $category_object[0]->name; //select category from here
                                
                                $args = array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'category_name' => $category_name,
                                    // 'post__not_in' => array($post_id)
                                );
                                $arr_posts = new WP_Query( $args );
                                
                                /* Start the Loop */
                                while ( $arr_posts->have_posts() ) :
                                    $arr_posts->the_post();
                                ?>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                <article class="box isotopeSelector box-kiritm box-tour">
                                    <figure>
                                        <a href="<?= the_permalink(); ?>"
                                            class="popup-gallery image-box-relative image-box-3x2">
                                            <img width="100%" height="250"
                                                alt="Du lịch Phan Thiết - Mũi Né - Lâu Đài Rượu Vang"
                                                src="<?php bloginfo('template_directory') ?>/images/diadiemhot.jpg">
                                        </a>
                                    </figure>
                                    <div class="box-tour-price">
                                        <p class="text">Giá từ</p>
                                        <p class="price"><?= the_field('gia')?></p>
                                        <p class="info"><?= the_field('thoi_luong')?></p>
                                    </div>
                                    <div class="details-kiritm">
                                        <div class="name-tour-detail">
                                            <a href="<?= the_permalink(); ?>"
                                                data-url="/vi/tour-trong-nuoc/3775/du-lich-phan-thiet-mui-ne-lau-dai-ruou-vang"
                                                data-id="3775"
                                                data-name="Du lịch Phan Thiết - Mũi Né - Lâu Đài Rượu Vang"
                                                data-price="3459000" data-category="Tour Phan Thiết"
                                                data-brand="tour-trong-nuoc" data-list="List" data-position="1"
                                                class="GAproductClick"
                                                title="Du lịch Phan Thiết - Mũi Né - Lâu Đài Rượu Vang">
                                                <?= the_title(); ?>
                                            </a>
                                        </div>
                                        <div class="bottom-detail">
                                            <div class="info-tour">
                                            <?= the_field('diem_xuat_phat'); ?> - <?= the_field('diem_den'); ?></div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                                <?php
                                endwhile; // End of the loop.?>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 40px;">
                <div class="col-xs-12">
                    <span class="contactSGT" style="color: rgb(51, 51, 151);font-size: 24px;">* Thông tin về bảo hiểm du
                        lịch</span>
                    <div class="content-text">
                        <p>Công ty TNHH Một Thành Viên Dịch vụ Lữ hành VERATRAVEL thực hiện chương trình TẶNG MIỄN
                            PHÍ BẢO HIỂM DU LỊCH NỘI ĐỊA&nbsp;dành cho tất cả du khách của Công ty và các chi nhánh trực
                            thuộc tham gia tour trọn gói trên tất cả các tuyến du lịch nội địa,&nbsp;khởi hành trên toàn
                            quốc, với mức bảo hiểm tối đa lên đến 150.000.000 VNĐ/khách/vụ.&nbsp;</p>

                        <p><br>
                            Toàn bộ phí bảo hiểm được tặng miễn phí cho khách hàng của Lữ hành VERATRAVEL với chương
                            trình, giá và chất lượng dịch vụ tour không đổi.</p>

                        <p>Thông tin chi tiết, vui lòng liên hệ các văn phòng thuộc Hệ thống Lữ hành VERATRAVEL trên
                            toàn quốc.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <span class="contactSGT" style="color: rgb(51, 51, 151);">* Các địa chỉ liên hệ với Lữ hành
                        VERATRAVEL</span>
                    <span id="viewContactSGT" class="view-contact-sgt">Xem thêm</span>
                </div>
            </div>
        </div>
</section>  
<?php get_footer(); ?>