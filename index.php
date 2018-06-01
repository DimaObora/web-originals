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
    get_template_part('template-header','none');

    // Главная
    get_template_part('template-home','none');

    // О нас
    get_template_part('template-about','none');

    // Коротко о нас
    get_template_part('template-faq-sec','none');

    // Сервис
    get_template_part('template-service','none');

    // Позвоните нам
    get_template_part('template-call-us','none');

    // Продвижение сайтов
    get_template_part('template-features-desc','none');

    // Наши проекты
    get_template_part('template-projects','none');

    // Клиенты
    get_template_part('template-clients','none');

    // Комментарии
    get_template_part('template-testimonials','none');

    // Контакты
    get_template_part('template-contacts','none');

    // Футер
    get_template_part('template-footer','none');
?>

</div>
<?php
get_footer();
?>
</body>
</html>