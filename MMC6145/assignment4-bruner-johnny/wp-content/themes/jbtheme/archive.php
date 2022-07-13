<?php get_header();?>

<main class="container archive-page">

                <h1 class="archive-title">
                    <?php
if (is_category()) {
    single_cat_title();
} elseif (is_tag()) {
    single_tag_title();
} elseif (is_day()) {
    echo "Daily Archives: " . get_the_date();
} elseif (is_month()) {
    echo "Monthly Archives: " . get_the_date('F Y');
} elseif (is_year()) {
    echo "Yearly Archives: " . get_the_date('Y');
} else {
    echo "Archives";
}
?>
                </h2><!-- archive title -->
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