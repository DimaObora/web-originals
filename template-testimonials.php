<?php $args = array('posts_per_page' => -1, 'post_type' => 'quote', 'post_status' => 'publish');
$myposts = get_posts($args);
if (count($myposts) > 0) {
    ?>

    <section class="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="testimonials-carousel">
                        <ul>
                            <?php
                            foreach ($myposts as $post) {
                                setup_postdata($post);
                                ?>
                                <li>
                                    <div class="testimonial">
                                        <div class="testimonial-img">
                                            <img src="<?php echo wp_get_attachment_image_url(get_post_meta($post->ID, "image", true), 'full'); ?>"
                                                 alt="">
                                        </div>
                                        <blockquote>
                                            <p><?php the_content(); ?></p>
                                            <footer><?php echo get_post_meta($post->ID, "author", true); ?>, <cite
                                                        title="Source Title"><?php echo get_post_meta($post->ID, "corp", true); ?></cite>
                                            </footer>
                                        </blockquote>
                                    </div>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    wp_reset_postdata();
}
?>