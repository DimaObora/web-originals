<?php
$args = array('posts_per_page' => -1, 'post_type' => 'projects');
$myposts = get_posts($args);
if (count($myposts) > 0) {
    ?>
    <section class="call-2-acction gradient-background">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="c2a">
                        <h2>Некоторые наши проекты</h2>
                        <div data-nanogallery2='{
       "itemsBaseURL": "../now-web/",
         "thumbnailHeight": "auto",
        "thumbnailLabel": {
          "titleMultiLine": true,
          "displayDescription": true,
          "descriptionMultiLine": true
        },
        "thumbnailHoverEffect2": "toolsSlideDown|toolsSlideUp|scale120",
        "galleryDisplayMode": "rows",
        "thumbnailAlignment": "center",
        "gallerySorting": "random"
      }'>
                            <?php
                            foreach ($myposts as $post) {
                                setup_postdata($post);
                                ?>
                                <a href="<?php echo wp_get_attachment_image_url(get_post_meta($post->ID, "image_project", true), 'full'); ?>"
                                   data-ngThumb="<?php echo wp_get_attachment_image_url(get_post_meta($post->ID, "image_project", true), 'thumbnail'); ?>"></a>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
}
wp_reset_postdata();
?>