<?php $args = array('posts_per_page' => -1, 'post_type' => 'quote', 'post_status' => 'publish');
$myposts = get_posts($args);
if (count($myposts) > 0) {
    ?>

    <section class="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
<!--                    <div class="testimonials-carousel">-->
<!--                        <ul>-->
<!--                            --><?php
//                            foreach ($myposts as $post) {
//                                setup_postdata($post);
//                                ?>
<!--                                <li>-->
<!--                                    <div class="testimonial">-->
<!--                                        <div class="testimonial-img">-->
<!--                                            <img src="--><?php //echo wp_get_attachment_image_url(get_post_meta($post->ID, "image", true), 'full'); ?><!--"-->
<!--                                                 alt="">-->
<!--                                        </div>-->
<!--                                        <blockquote>-->
<!--                                            <p>--><?php //the_content(); ?><!--</p>-->
<!--                                            <footer>--><?php //echo get_post_meta($post->ID, "author", true); ?><!--, <cite-->
<!--                                                        title="Source Title">--><?php //echo get_post_meta($post->ID, "corp", true); ?><!--</cite>-->
<!--                                            </footer>-->
<!--                                        </blockquote>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                --><?php
//                            }
//                            ?>
<!--                        </ul>-->
<!--                    </div>-->

                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src=".../800x400?auto=yes&bg=777&fg=555&text=First slide" alt="First slide">
                                <h1>ghbdtn</h1>
                                <p>vcvcvcvcvcvcvcvcvcvcvcvcvcvcvc vcvcvcvcvcvcvcvcvc vcvcvcvcvcvc
                                    vcvcvcvcvcvcvcvcvcvcvcvcvcvcvcvcvcvcvcvcvc
                                    vcvcvcv vcvcvcvvcvcvcvcvcvcvvcvcvcvcvcvcvv</p>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src=".../800x400?auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide">
                                <h1>ghbdtn</h1>
                                <p>vcvcvcvcvcvcvcvcvcvcvcvcvcvcvc vcvcvcvcvcvcvcvcvc vcvcvcvcvcvc
                                    vcvcvcvcvcvcvcvcvcvcvcvcvcvcvcvcvcvcvcvcvc
                                    vcvcvcv vcvcvcvvcvcvcvcvcvcvvcvcvcvcvcvcvv</p>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src=".../800x400?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
                                <h1>ghbdtn</h1>
                                <p>vcvcvcvcvcvcvcvcvcvcvcvcvcvcvc vcvcvcvcvcvcvcvcvc vcvcvcvcvcvc
                                    vcvcvcvcvcvcvcvcvcvcvcvcvcvcvcvcvcvcvcvcvc
                                    vcvcvcv vcvcvcvvcvcvcvcvcvcvvcvcvcvcvcvcvv</p>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
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