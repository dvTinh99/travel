<?php
$menu_name = 'header-menu';
$locations = get_nav_menu_locations();
$menu = wp_get_nav_menu_object($locations[$menu_name]);
$menuitems = wp_get_nav_menu_items($menu->term_id, array('order' => 'DESC'));
?>

<nav>

    <?php
    show($menuitems, 0, 0);
    ?>
</nav>

<?php
function show($categories, $parent_id, $i)
{
    echo '<ul class="navbar-nav">';
    foreach ($categories as $category) {
        if ($category->menu_item_parent == 0) {
            $has_child = hasChild($categories, $category->ID);
            if ($has_child) {
                echo '<li class="nav-item dropdown">
                <a class="nav-link  dropdown-toggle" href="'.$category->url.'" data-bs-toggle="dropdown">'.$category->title.'</a>
                <ul class="dropdown-menu">' ;
                foreach ($categories as $child) {
                    if ($child->menu_item_parent == $category->ID) {
                        echo '<li><a class="dropdown-item" href="'.$child->url.'">'.$child->title.'</a></li>';
                    }
                }
                echo '</ul></li>';
            } else {

                echo '<li class="nav-item active"> <a class="nav-link" href="'.$category->url.'">' . $category->title . '</a> </li>';
            }
        }
    }
    echo '</ul>';
}

function hasChild($categories, $parent_id)
{
    foreach ($categories as  $item) {
        if ($item->menu_item_parent == intval($parent_id, 10)) {
            return true;
        }
    }
    return false;
}
?>

<!-- <ul class="navbar-nav">
    <li class="nav-item active"> <a class="nav-link" href="#">Trang chủ </a> </li>
    <li class="nav-item dropdown">
        <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown">Tour trong
            nước</a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">DU LỊCH MIỀN BẮC</a></li>
            <li><a class="dropdown-item" href="#">DU LỊCH MIỀN TRUNG </a></li>
            <li><a class="dropdown-item" href="#">DU LỊCH MIỀN NAM</a></li>
        </ul>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> Tour nước ngoài
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">DU LỊCH CHÂU Á</a></li>
            <li><a class="dropdown-item" href="#">DU LỊCH CHÂU ÂU</a></li>
            <li><a class="dropdown-item" href="#">DU LỊCH CHÂU PHI</a></li>
            <li><a class="dropdown-item" href="#">DU LỊCH CHÂU MỸ </a></li>
        </ul>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> Dịch vụ
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#"> Thuê xe</a></li>
            <li><a class="dropdown-item" href="#"> Vé máy bay </a></li>
            <li><a class="dropdown-item" href="#"> Bảo hiểm du lịch </a></li>
            <li><a class="dropdown-item" href="#"> Sim du lịch</a></li>
        </ul>
    </li>
    <li class="nav-item"><a class="nav-link" href="#"> Thanh toán </a></li>
    <li class="nav-item"><a class="nav-link" href="#"> Liên hệ </a></li>
</ul> -->