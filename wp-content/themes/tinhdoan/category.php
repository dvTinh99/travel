<?php
$term = get_queried_object();
$cat = $term->slug;
switch ($cat){
    case 'chau-a':
        $bg_image = 'chaua.jpg';
        $title = 'DU LỊCH CHÂU Á';
        $content = 'Du lịch Châu Á - Được biết đến là một châu lục nổi tiếng với nhiều quốc gia xinh đẹp, nhiều điểm
        du lịch văn hóa lịch sử nổi tiếng, Châu Á còn là cái nôi của văn hóa tín ngưỡn tôn giáo đặc sắc.
        Đến với tour Du lịch Châu Á du khách sẽ được khám phá những vùng đất huyền bí Ấn Độ, khám phá
        văn hóa Trung Quốc, Nhật Bản, và được khám phá vùng đất được mệnh danh "con Rồng Châu Á" -
        Singapore. Tour Châu Á sẽ là lựa chọn tuyệt vời, mang đến cho du khách yêu du lịch những trải
        nghiệm thú vị và khó quên. Cùng tham khảo các tour Du lịch Châu Á mà Du Lịch Việt đang cung cấp:
        Du lich Nhat Ban, Du lich Han Quoc, Du lich Hong Kong, Du lich Thai Lan, Du lich Singapore....
    ';
        break;
    case 'chau-au':
        $bg_image = 'chau-au.jpg';
        $title = 'DU LỊCH CHÂU ÂU';
        $content = 'Với tour du lịch Châu Âu của Du Lịch Việt sẽ đưa bạn đến với hành trình khám phá các nước châu Âu
        chắc chắn sẽ là trải nghiệm tuyệt vời của các du khách.Đi tour Châu Âu vào mùa nào cũng là thời
        gian lý tưởng Mỗi mùa đều có một nét đặc sắc riêng. Qua tour du lịch Châu Âu du khách sẽ được
        đặt chân đến những địa
        danh nổi tiếng như: Paris, Roma, Venice,London,...';
        break;
    case 'chau-phi':
        $bg_image = 'chau-phi.jpg';
        $title = 'DU LỊCH CHÂU PHI';
        $content = 'Với tour du lịch Châu Âu của Du Lịch Việt sẽ đưa bạn đến với hành trình khám phá các nước châu Âu
        chắc chắn sẽ là trải nghiệm tuyệt vời của các du khách.Đi tour Châu Âu vào mùa nào cũng là thời
        gian lý tưởng Mỗi mùa đều có một nét đặc sắc riêng. Qua tour du lịch Châu Âu du khách sẽ được
        đặt chân đến những địa
        danh nổi tiếng như: Paris, Roma, Venice,London,...
    ';
        break;
    case 'chau-my':
        $bg_image = 'chau-my.jpg';
        $title = 'DU LỊCH CHÂU MỸ';
        $content = 'Qua những sự biến động về lịch sử, văn hóa châu Mỹ dần trở thành một điểm đến hấp dẫn, thu hút
        nhiều du khách. Bài viết sau sẽ điểm qua 30 địa điểm du lịch Châu Mỹ cực kỳ thú vị dành cho
        chuyến đi của bạn.
    ';
        break;
    case 'mien-bac':
        $bg_image = 'slider-image.jpeg';
        $title = 'DU LỊCH MIỀN BẮC';
        $content = 'Du lịch Miền Bắc-Miền Bắc mang nhiều dấu ấn lịch sử lâu đời từ thời Vua Hùng dựng
        nước cho đến các triều đại phong kiến giữ nước. Du lịch Miền Bắc là hành trình hấp dẫn dành cho những ai yêu
        thích lịch sử, mong muốn tìm hiểu và trải nghiệm những điều mới mẻ .';
        break;
    case 'mien-trung':
        $bg_image = 'mientrung.jpeg';
        $title = 'DU LỊCH MIỀN TRUNG';
        $content = 'Tour Hè Miền Trung đang trở thành xu hướng du lịch nghỉ dưỡng số một tại Việt
        Nam bởi nơi đây có nhiều cảnh quan và bãi biển đẹp. Đến với Tour du lịch Miền Trung, Tour Du
        lịch hè miền trung du khách sẽ được thả hồn vào sóng nước, được tham quan hệ sinh thái động thực
        vật đa dạng phong phú và khám phá những bãi biển hoang sơ. ';
        break;
    case 'mien-nam':
        $bg_image = 'miennam.jpg';
        $title = 'DU LỊCH MIỀN NAM';
        $content = 'Các điểm du lịch miền Nam Việt Nam không những được tạo hóa ưu ái ban tặng vẻ đẹp hữu tình mà còn
        dành cho nơi đây những dải đất phù sa màu mỡ với nhiều hoa tươi quả ngọt. Cũng chính vì vậy mà
        con người miền Nam hiền hòa, ẩm thực phong phú đưa nhiều du khách lui tới vùng đất này.';
        break;
}
// $category_id = get_term_by('slug',$cat);

$args = array( 'posts_per_page' => 5, 'offset'=> 0, 'category_name' => $cat );

$posts = get_posts($args);

?>
<?php get_header(); ?>
<div id="main">
        <div id="slider-chau-au">
            <style>
                #slider-chau-au {
                    padding-top: 20%;
                    background: url(<?php bloginfo('template_directory') ?>/images/<?= $bg_image?>) top / cover no-repeat;
                    /* max-height: 480px; */
                }

                /* responsive */
                @media screen and (max-width: 475px) {
                    #slider-chau-au {
                        padding-top: 30%;
                    }
                }
            </style>
            <div class="background-description" style="width: 80%;">
                <div class="title">
                    <h1><?= $title; ?></h1>
                </div>
                <div class="description">
                    <p><?= $content; ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <?php foreach($posts as $post) {?>
                    <div id="tour-card" class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="image-tour">
                                <a href="<?php echo $post->guid; ?>">
                                    <img src="<?php bloginfo('template_directory') ?>/images/tour-detail.jpeg" class="img" alt="">
                                </a>
                                <div class="tour-promotion">
                                    <div class="text-promotion-tour">
                                        Giá từ: <?php the_field('gia'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <div class="row">
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                    <div class="title-tour">
                                        <a href="<?php echo $post->guid; ?>"><?= the_title() ?></a>
                                    </div>
                                    <div class="destination-tour"><?php the_field('name'); ?></div>
                                    <p class="time-tour" style="margin-bottom: 0;">
                                        Thời gian : <?php the_field('thoi_luong'); ?>
                                    </p>
                                    <div class="day-tour">
                                        <p class="day-start"><?php the_field('time_start'); ?></p>&nbsp;-&nbsp;
                                        <p class="day-end"><?php the_field('time_end'); ?></p>
                                    </div>
                                    <p class="description-tour "><?= get_the_excerpt(); ?>
                                    </p>
                                </div>
                                <div class="box-btn-tour-detail col-md-4 col-sm-4 col-xs-12">
                                    <a href="<?php echo $post->guid; ?>"class="btn-tour-detail"><span>Chi tiết</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>