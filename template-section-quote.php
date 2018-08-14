<?php $args = array('posts_per_page' => -1, 'post_type' => 'quote', 'post_status' => 'publish');
$myposts = get_posts($args);
if (count($myposts) > 0) {
    ?>

    <section class="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <?php
                            $count = 0;
                            foreach ($myposts as $post) {
                                setup_postdata($post);
                                ?>
                                <div class="carousel-item <?php if ($count++ == 0) echo "active" ?>">
                                    <img class="d-inline-block w-12"
                                         src="<?php echo wp_get_attachment_image_url(get_post_meta($post->ID, "image", true), 'full'); ?>"
                                         alt="image">
                                    <h1 class="color-white"><?php echo get_post_meta($post->ID, "author", true); ?></h1>
                                    <p><?php the_content(); ?></p>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                           data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                           data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    wp_reset_postdata();
}
?>