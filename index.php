<?php
?>
<!DOCTYPE html>
<html lang="ru">
<?php
get_header();
?>
<body>
<div id="wrapper">
    <?php

    // Хэдер
    get_template_part('template-header', 'none');

    // Главная
    get_template_part('template-home', 'none');

    //вывод всех страниц из меню
    //todo: нужно делать проверку что это за страницы и использовать правильные шаблоны в соответствии с типом
    if (($locations = get_nav_menu_locations()) && isset($locations['primary'])) {
        $menu = wp_get_nav_menu_object($locations['primary']);
        $menu_items = wp_get_nav_menu_items($menu->term_id);
        if ($menu_items = wp_get_nav_menu_items($menu->term_id)) {
            $menu_list = '';
            global $post;
            foreach ((array)$menu_items as $key => $menu_item) {
                $post = get_post(intval($menu_item->object_id));
                ?>
                <a name="<?php echo $menu_item->title ?>"></a>
                <?php
                setup_postdata($post);
                if($menu_item->type  == "post_type_archive"){
                    get_template_part('template-section', $menu_item->object);
                }
                else{
                    get_template_part('template-section', 'none');
                }
            }
            wp_reset_postdata();
        }
    }

    // Позвоните нам
    get_template_part('template-call-us', 'none');

    // Контакты
    get_template_part('template-contacts', 'none');

    // Футер
    get_template_part('template-footer', 'none');
    ?>

</div>
<?php
get_footer();
?>
</body>
</html>