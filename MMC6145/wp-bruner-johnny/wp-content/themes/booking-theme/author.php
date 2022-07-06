<?php get_header();?>

<div class="container">
    <div class="row">
        <main class="col-md-9">
            <section class="author-information">
                <h2 class="author-title">
                    <?php echo get_the_author_meta('nickname'); ?>
                </h2><!-- author title -->

                <div class="row author-avatar">
                    <!-- GET AUTHOR AVATAR -->
                    <p class="col-lg-2 col-md-3">
                        <?php echo get_avatar(get_the_author_meta('ID')); ?>
                    </p>

                    <ul class="col-md-9">
                        <li>
                            <span class="bold">Email:</span> <a
                                href="mailto:<?php echo get_the_author_meta('user_email'); ?>"><?php echo get_the_author_meta('user_email'); ?></a>
                        </li>
                        <li>
                            <a href="<?php echo get_the_author_meta('user_url'); ?>" target="_blank">Website</a>
                        </li>
                        <li>
                            <span class="bold">Registered Since:</span>
                            <?php echo get_the_author_meta('user_registered'); ?>
                        </li>
                    </ul>

                </div><!-- author avatar -->
                <div class="author-bio">
                    <h3>Bio</h3>
                    <p>
                        <?php echo get_the_author_meta('description'); ?>
                    </p>
                </div><!-- bio -->
            </section><!-- author information -->

            <hr>

            <section class="author-posts">
<h3>Posts written by <?php echo get_the_author_meta('nickname'); ?></h3>

                <?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>
                <article class="individual-post">
                    <!-- GET LINK AND TITLE OF POSTS -->
                    <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>

                    <!-- DISPLAY AUTHOR AND DATE -->
                    <?php post_data();?>

                    <div class="image-excerpt-block">
                        <!-- GET FEATURED IMAGE IF ANY -->
                        <?php the_post_thumbnail('thumbnail');?>
                        <!-- GET EXCERPT FROM ARTICLE -->
                        <?php the_excerpt();?>
                        <hr>
                    </div><!-- image excerpt block -->
                </article><!-- individual post -->
                <?php
}
}
?>
            </section><!-- author posts -->


        </main>
    </div><!-- row -->
</div><!-- container -->

<?php get_footer();?>