<?php get_header();?>

<main class="container home-page">
    <?php

if (have_posts()) {
    while (have_posts()) {
        the_post();?>

    <div class="individual-post">
        <div class="row justify-content-center">
<div class="col-lg-10 text-center">
<div class="featured-image">
                    <a href="<?php the_permalink();?>"><?php the_post_thumbnail('medium');?></a>
                </div>

                <div class="text-container">
                    <h2 class="post-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                    <!-- DISPLAY AUTHOR AND DATE -->
                    <p class="post-info"><?php post_data();?></p>
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
    // ADD PAGINATION
    echo '<div class="text-center">';
    jbThemePagination();
    echo '</div>';

}
?>
</main>

<?php get_footer();