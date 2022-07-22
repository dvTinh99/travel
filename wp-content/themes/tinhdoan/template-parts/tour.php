<?php
$name = $args['name'];
$args = array(
    'category_name' => $args['cat'],
);
$query = new WP_Query($args);
?>

<!-- content địa điểm hot-->
<h1 class="title-content" style=" text-align: center ;"><?= $name ?>*</h1>
<section class="campus">
    <div class="row_campus">
        <?php if ($query->have_posts()) { ?>
            <?php while ($query->have_posts()) {
                $query->the_post(); 
                $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'post-thumbnail');
                ?>
                <div class="campus-col">
                    <a href="<?= the_permalink() ?>" >

                        <img src="<?= $featured_img_url; ?>" alt="">
                        <div class="layer">
                            <h3>
                                <p style="font-size: 15px;font-weight: 400;"> <?= the_title();?> </p>
                                <p>Thời gian : <?= the_field('thoi_luong'); ?></p>
                                <p>Bắt đầu: <?= the_field('time_start'); ?></p>
                            </h3>
                            
                        </div>
                    </a>
                </div>
        <?php }
        } ?>
    </div>
</section>