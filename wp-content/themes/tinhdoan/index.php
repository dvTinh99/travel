<?php
if (isset($_POST['send'])) {
    $message = 'Tên tour : ' . $_POST['nametour'] . ' <br> ' .
        'ID tour : ' . $_POST['idtour']  . ' <br> ' .
        'Số lượng người lớn : ' . $_POST['nguoilon'] . ' <br> ' .
        'Số lượng trẻ em : ' . $_POST['treem'] . ' <br> ' .
        'Số lượng em bé : ' . $_POST['embe'] . ' <br> ' .
        'Số lượng tên khách : ' . $_POST['name'] . ' <br> ' .
        'Email khách : ' . $_POST['email'] . ' <br> ' .
        'Số điện thoại : ' . $_POST['phone'] . ' <br> ' .
        'Địa chỉ : ' . $_POST['address'] . ' <br> ' .
        'Lời nhắn : ' . $_POST['message'] . ' <br> ';
    $to = 'dvtinh.it@gmail.com';

    // $to = $_POST['your-email'];
    $subject = "Book a successful tour";
    $header  =  "From:dvtinh.it@gmail.com \r\n";
    $header .=  "Cc:dvtinh.it@gmail.com \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";
    $message_mail = '<h2>Khách mới</h2>';
    $message_mail .= '<h3>Your information</h3>  <br>';
    $message_mail .= $message;

    $to_admin = wp_mail($to, $subject, $message_mail, $header);
    // $to_custome = wp_mail('havantrungbdu@gmail.com',$subject,$message_mail,$header);
}
?>
<?php get_header(); ?>
<!-- slider -->
<div class="owl-carousel owl-theme">
    <div class="item">
        <img src="<?php bloginfo('template_directory') ?>/images/canh dep du lich 02.jpg" alt="">
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
        <img src="<?php bloginfo('template_directory') ?>/images/banner2.jpg" alt="">
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
<div class="container">
    <div class="col-xs-12">
        <div class="relatedProduct">
            <?php get_template_part('template-parts/tour', null, array(
                'name' => 'Địa điểm hot',
                'cat' => 'hot',
            )) ?>
        </div>
    </div>
    <div class="col-xs-12">
        <div class="relatedProduct">
            <?php get_template_part('template-parts/tour', null, array(
                'name' => 'Tour Trong Nước',
                'cat' => 'trong-nuoc',
            )) ?>
        </div>
    </div>
    <div class="col-xs-12">
        <div class="relatedProduct">
            <?php get_template_part('template-parts/tour', null, array(
                'name' => 'Tour Nước Ngoài',
                'cat' => 'nuoc-ngoai',
            )) ?>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-sm-8 col-xs-12">
            <a target="_blank" href="https://www.dichvu.saigontourist.net/">
                <img width="100%" src="<?php bloginfo('template_directory') ?>/images/Banner-dichvudulich.jpg">
            </a>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="col-sm-12 col-xs-6" style="padding: 0;">
                <a target="_blank" href="https://khachhang.saigontourist.net/">
                    <img width="100%" src="<?php bloginfo('template_directory') ?>/images/Banner-TheThanhVien-01.jpg">

                </a>
            </div>
            <div class="col-sm-12 col-xs-6" style="margin-top: 10px;padding: 0;">
                <a target="_blank" href="https://dichvu.saigontourist.net/">
                    <img width="100%" src="<?php bloginfo('template_directory') ?>/images/banner-web-tai-App.jpg">
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
                        <img width="60px" height="60px" class="icon-commitment" src="<?php bloginfo('template_directory') ?>/images/price.png" alt="image commitment">
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
                        <img width="60px" height="60px" class="icon-commitment" src="<?php bloginfo('template_directory') ?>/images/pay.png" alt="image commitment">
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
                        <img width="60px" height="60px" class="icon-commitment" src="<?php bloginfo('template_directory') ?>/images/promotion.png" alt="image commitment">
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
                        <img width="60px" height="60px" class="icon-commitment" src="<?php bloginfo('template_directory') ?>/images/star.png" alt="image commitment">
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
<?php get_footer(); ?>