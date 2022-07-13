<?php get_header();?>

<main class="container home-page">
    <?php

if (have_posts()) {
    while (have_posts()) {
        the_post();?>

        <div class="individual-post">
            <div class="row justify-content-center">
            <div class="col-lg-2">
                <div class="featured-image">
                    <a href="<?php the_permalink();?>"><?php the_post_thumbnail('thumbnail');?></a>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="text-container">
                    <h2 class="post-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                    <p class="excerpt">
                        <?php echo get_the_excerpt(); ?>
                    </p>
                </div>
            </div>

        </div>
        <hr>
    </div>

    <?php
}
}
?>
</main>

<?php get_footer();