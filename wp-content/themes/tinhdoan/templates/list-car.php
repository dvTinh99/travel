<?php
/*
* Template Name: list-car
*/
?>
<?php get_header(); ?>

<div class="main-wrapper">
    <!-- PAGE TITLE -->
    <div id="banner-car">
        <style>
            #banner-car {
                margin-bottom: 2%;
                text-align: center;
                padding-top: 20%;
                background: url(<?php bloginfo('template_directory') ?>/images/carr.jpg) top / cover no-repeat;
                /* max-height: 480px; */
            }

            @media screen and (max-width: 475px) {
                #banner-car {
                    padding-top: 30%;
                }
            }
        </style>
        <div class="background-description">
            <div class="title">
                <h1 style="text-decoration: underline;">THUÊ XE DU LỊCH</h1>
                <p>Dịch vụ thuê xe du lịch, đội xe hiện đại, nhiều chủng loại xe đời mới, tiện nghi nhất từ 4 đến 45
                    chỗ</p>
            </div>
        </div>
    </div>
    <!-- WHITE SECTION-->
    <section class="mainContentSection singlePackage">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="relatedProduct">
                        <?php get_template_part('template-parts/car-relative', null, array(
                            'name' => 'DANH SÁCH CÁC XE DỊCH VỤ',
                            'cat' => 'car',
                        )) ?>
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
        </div>
    </section>
</div>
<?php get_footer(); ?>