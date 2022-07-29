<?php
$menu_name = 'header-menu';
$locations = get_nav_menu_locations();
$menu = wp_get_nav_menu_object($locations[$menu_name]);
$menuitems = wp_get_nav_menu_items($menu->term_id, array('order' => 'DESC'));
?>

    <?php
    showMobile($menuitems, 0, 0);
    ?>
<?php
function showMobile($categories, $parent_id, $i)
{
    echo '<ul><li style="background-color: #007bff;"><a><img src="/wp-content/themes/tinhdoan/images/logo.png" alt="" srcset=""
    style="width: 200px;height: 54px;"></li>';
    foreach ($categories as $category) {
        if ($category->menu_item_parent == 0) {
            
            $has_child = hasChildMobile($categories, $category->ID);
            if ($has_child) {
                echo '<li class="contentmenu"><a href="'.$category->url.'" style="display: flex; justify-items: center; align-items: center;">'.$category->title.' &nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-caret-down-fill" viewBox="0 0 16 16">
    
                    <path
                        d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                </svg> </a>
        </li>';
                foreach ($categories as $child) {
                    if ($child->menu_item_parent == $category->ID) {
                        echo '<li><a href="' . $child->url . '">' . $child->title . '</a></li>';
                    }
                }
            } else {
                echo '<li class="contentmenu"> <a href="' . $category->url . '">' . $category->title . '</a> </li>';
            }
        }
    }
    echo '</ul>';
}

function hasChildMobile($categories, $parent_id)
{
    foreach ($categories as  $item) {
        if ($item->menu_item_parent == intval($parent_id, 10)) {
            return true;
        }
    }
    return false;
}
?>
