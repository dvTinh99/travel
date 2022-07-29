<?php
$name = $args['name'];
$args = array(
    'category_name' => $args['cat'],
    'posts_per_page' => 6
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
        <article class="box isotopeSelector box-kiritm box-tour">
            <figure>
                <a href="<?= the_permalink() ?>" class="popup-gallery image-box-relative image-box-3x2">
                    <img width="100%" height="250" alt="<?= the_title();?>" src="<?= $featured_img_url; ?>">
                </a>
            </figure>
            <div class="box-tour-price">
                <p class="info"><?= the_field('thoi_luong'); ?></p>
            </div>
            <div class="details-kiritm">
                <div class="name-tour-detail">
                    <a href="<?= the_permalink() ?>" class="GAproductClick" title="<?= the_title();?>">
                    <?= the_title();?>
                    </a>
                </div>
                <div class="bottom-detail">
                    <div class="info-tour">
                    <?php the_field('diem_xuat_phat'); ?> -
                    <?php the_field('diem_den'); ?> </div>
                </div>
            </div>
        </article>
    </div>
    <?php }
        } ?>
</div>