<?php
$name = $args['name'];
$args = array(
    'post_type' => 'cars',
);
$query = new WP_Query($args);
?>

<!-- content địa điểm hot-->
<h2><?= $name; ?></h2>
<div class="row">
<?php if ($query->have_posts()) { ?>
            <?php while ($query->have_posts()) {
                $query->the_post(); 
                $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'post-thumbnail');
                ?>
    <div class="col-sm-4 isotopeSelector">
        <article class="box isotopeSelector box-kiritm box-tour box-extra-service">
            <figure>
                <a href="<?= the_permalink() ?>" class="popup-gallery image-box-relative image-box-3x2">
                    <img width="100%" height="250" alt="Tuyến HCM - Củ Chi" src="<?= $featured_img_url; ?>">
                </a>
            </figure>
            <div class="box-tour-price">
                <p class="text">Giá từ</p>
                <p class="price"><?= the_field('gia_car'); ?></p>
            </div>
            <div class="details-kiritm">
                <div class="name-tour-detail">
                    <a href="<?= the_permalink() ?>">
                    <?php the_field('diem_xuat_phat'); ?> -
                    <?php the_field('diem_den'); ?>
                    </a>
                </div>
                <div class="bottom-detail">
                    <div class="info-extra-service">
                        Xe chất lượng cao từ 7&nbsp;- 45 chỗ. Giá thuê hợp lý với nhiều dòng
                        xe hiện đại, tiện nghi.
                        &nbsp;
                    </div>
                </div>
            </div>
        </article>
    </div>
    <?php }
        } ?>
</div>