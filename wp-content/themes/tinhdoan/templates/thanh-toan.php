<?php
/*
* Template Name: thanh-toan
*/
?>
<?php get_header(); ?>
<div class="main-wrapper">
        <!-- PAGE TITLE -->
        <div id="banner-thanhtoan">
            <style>
                #banner-thanhtoan {
                    margin-bottom: 2%;
                    text-align: center;
                    padding-top: 20%;
                    background: url(<?php bloginfo('template_directory') ?>/images/THANHTOAN.jpg) top / cover no-repeat;
                    /* max-height: 480px; */
                }

                @media screen and (max-width: 475px) {
                    #banner-thanhtoan {
                        padding-top: 30%;
                    }
                }
            </style>
            <div class="background-description">
                <div class="title">
                    <h1 style="text-decoration: underline;">THANH TOÁN ONLINE</h1>
                    <p>Qúy khách có thể liên hệ hotline để được hỗ trợ thanh toán một cách an toàn nhất , chúng tôi chỉ
                        sử dụng STK duy nhất ở bên dưới tránh tình trạng lừa đảo . </p>
                </div>
            </div>
        </div>
        <!-- WHITE SECTION-->
        <section class="mainContentSection singlePackage">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="method-content">
                            <label class="title" toggle="OnePayQuocTe" for="pament-method1">
                                <h4 style="margin: 0 0 10px;">Thanh toán bằng Thẻ Tín Dụng</h4>
                                <div class="description">Sau khi đặt vé và thanh toán thành công, Lữ
                                    hành VERATRAVEL sẽ gửi vé điện tử của Quý khách qua email.</div>
                                <i class="fa fa-chevron-down"></i>
                                <i class="fa fa-check"></i>
                            </label>
                            <div class="content" id="OnePayQuocTe">
                                <p>VERATRAVEL chấp nhận thanh toán dịch vụ bằng các loại thẻ tín dụng .
                                </p>
                                <p> Hiện tại chúng tôi đang thanh toán trên hai số tài khoản :</p>
                                ...............
                                <br />
                                <p><img alt="" src="<?php bloginfo('template_directory') ?>/images/thetindung.gif" style="width: 90%;"></p>
                                <br />
                                <p style="color: RED;">Lưu ý chúng tôi chỉ sử dụng các số tài khoản nêu trên , quý khách
                                    hàng lưu ý để tránh
                                    bị lừa đảo ngoài ý muốn</p>
                                <p>XIN CẢM ƠN ĐÃ TIN TƯỞNG SỬ DỤNG DỊCH VỤ CỦA CHÚNG TÔI !</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php get_footer(); ?>