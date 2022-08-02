<?php
/*
* Template Name: booking
*/
?>
<?php 
    
?>
<?php get_header(); ?>
<div class="main-wrapper">
        <!-- PAGE TITLE -->
        <div id="banner-booking">
            <style>
                #banner-booking {
                    margin-bottom: 2%;
                    text-align: center;
                    padding-top: 20%;
                    background: url(<?php bloginfo('template_directory') ?>/images/booking.jpg) top / cover no-repeat;
                    /* max-height: 480px; */
                }

                @media screen and (max-width: 475px) {
                    #banner-booking {
                        padding-top: 30%;
                    }
                }
            </style>
            <div class="background-description">
                <div class="title">
                    <h1 style="text-decoration: underline;">BOOKING TOUR</h1>
                </div>
            </div>
        </div>

        <!-- WHITE SECTION-->
        <section class="mainContentSection">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <div class="contactInfo">
                            <h3>Công ty TNHH VERATRAVEL</h3>
                            <div class="media">
                                <a class="media-left" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                    </svg>
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Địa chỉ</h4>
                                    <p>18 Hồ Huân Nghiệp, Mỹ An, Ngũ Hành Sơn, Đà Nẵng</p>
                                </div>
                            </div>
                            <div class="media">
                                <a class="media-left" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                    </svg>
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Tư vấn &amp; đặt dịch vụ</h4>
                                    <p>Điện thoại: 0774442555 <br>
                                    </p>
                                </div>
                            </div>

                            <div class="media">
                                <a class="media-left" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                                    </svg>
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Email</h4>
                                    <p><a href="mailTo:VeraTravel68@gmail.com">VeraTravel68@gmail.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8 col-xs-12">
                        <div class="contactForm">
                            <form action="/send-mail/" method="POST">
                                <div class="form-group">
                                    <input type="text" name="nametour" class="form-control" id="nametour"
                                        value="<?= $_POST['name_tour']?>"
                                        readonly>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="idtour" class="form-control" id="idtour"
                                        value="<?= $_POST['tour_id']?>" readonly>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="nguoilon" class="form-control" id="nguoilon"
                                        placeholder="Nhập số lượng người lớn">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="treem" class="form-control" id="treem"
                                        placeholder="Nhập số lượng trẻ em">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="embe" class="form-control" id="embe"
                                        placeholder="Nhập số lượng em bé">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Họ &amp; tên">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" id="email"
                                        placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control" id="phone"
                                        placeholder="Điện thoại">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="address" class="form-control" id="address"
                                        placeholder="Địa chỉ">
                                </div>
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message"
                                        placeholder="Nội dung"></textarea>
                                </div>
                        </div>
                        <button name="send" id="button_" style="float: right;">ĐẶT TOUR</button>
                        </form>
                    </div>
                </div>
            </div>
    </div>
    </section>
    </div>

<?php get_footer(); ?>