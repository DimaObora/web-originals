<?php
/**
 * Created by PhpStorm.
 * User: игорь
 * Date: 01.06.2018
 * Time: 17:27
 */
?>
<header class="st-navbar">
    <nav class="navbar navbar-expand-lg fixed-top d-flex justify-content-center navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand " href="#">Web-студия "ORIGINALS"</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id' => 'navbarSupportedContent',
                'items_wrap' => '<ul id="%1$s" class="%2$s navbar-nav m-auto">%3$s</ul>
                                    <div class="form-inline my-2 my-lg-0">
                                    <a class="phone " href="tel:+79002475139">+7(900)24-75-139</a>',
                'walker' => new Walker_Primary_Menu()
            ));
            ?>
        </div>
    </nav>

</header>
