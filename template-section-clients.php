<?php
/**
 * Created by PhpStorm.
 * User: игорь
 * Date: 01.06.2018
 * Time: 17:05
 */

$args = array('posts_per_page' => -1, 'post_type' => 'clients', 'post_status' => 'publish');
$myposts = get_posts($args);
if (count($myposts) > 0) {
?>
<section class="clients">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="section-title st-center">
                        <h3>Наши клиенты</h3>
                        <p>С которыми сотрудничаем и сейчас</p>
                    </div>
                    <ul class="clients-carousel">
                        <?php
                        foreach ($myposts as $post) {
                            setup_postdata($post);
                            ?>
                            <li><img src="<?php echo wp_get_attachment_image_url(get_post_meta($post->ID, "image", true), 'full'); ?>" class="img-responsive client" alt=""></li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <?php
}
wp_reset_postdata();
?>