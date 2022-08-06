<?php
/*
* Template Name: success
*/
?>
<?php get_header(); ?>
<div class="main-wrapper">

    <!-- WHITE SECTION-->
    <section class="mainContentSection">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12" style="height: 486px; margin-bottom: -194px;">
                    <div class="contactForm">
                        <div class="toast-container">
                            <div class="iconcheck-top">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
                                </svg>
                            </div>
                            <div class="text-content">
                                <h3>
                                    Thông báo đã được gửi đến VERATRAVEL, quý khách vui lòng để ý điện thoại để được hỗ trợ ! <br><br>
                                    Chọn <a href="<?php bloginfo('url')?>">Trang chủ</a> để quay lại .
                                </h3>
                                <p class="author-name">Xin chân thành cảm ơn !</p>
                            </div>
                            <style>
                                .iconcheck-top {
                                    display: flex;
                                    justify-content: center;
                                    margin: 20px 0px;
                                }

                                .bi-check-lg {

                                    border-radius: 50%;
                                    border: 2px solid #fff;
                                    background-color: rgb(38 143 15);

                                }

                                .toast-container {
                                    position: absolute;
                                    bottom: 40%;
                                    width: 90%;
                                    max-width: 720px;
                                    align-items: center;
                                    background: #007bff;
                                    color: #fff;
                                    font-family: "Montserrat", sans-serif;
                                    padding: 0 16px;
                                    border-radius: 24px;
                                    box-shadow: 0 8px 20px -4px rgba(0, 0, 0, 0.2);
                                    left: 50%;
                                    transform: translateX(-50%);
                                }

                                .toast-container h3 {
                                    font-weight: 800;
                                    line-height: 1.5;
                                    font-size: 16px;
                                }

                                .toast-container .text-content {
                                    padding: 0 24px;
                                    padding-right: 40px;
                                }

                                .toast-container p.author-name {
                                    color: rgb(15, 14, 14);
                                    font-size: 14px;
                                }

                                .toast-container a {
                                    color: #e98d57;
                                }
                            </style>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</section>

<?php get_footer(); ?>