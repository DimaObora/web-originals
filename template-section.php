<?php
/**
 * Created by PhpStorm.
 * User: игорь
 * Date: 07.06.2018
 * Time: 0:34
 * Шаблон секции для вывода контента страницы на главной
 */

?>
<a name="<?php the_title(); ?>"></a>
<section class="post-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="section-title st-center">
                    <h3><?php
                        the_title(); // выводит заголовок поста
                        ?></h3>
                    <p>
                        <?php
                        echo get_post_meta($post->ID, "subtitle", true);
                        ?>
                    </p>
                </div>
                <?php
                the_content(); // выводим контент поста
                ?>
            </div>
        </div>
    </div>
</section>