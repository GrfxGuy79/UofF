<?php get_header();?>

<div class="container">
    <div class="row">
        <main class="col-md-9">
            <section class="archive-container">
                <h2 class="archive-title">
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
        the_post();
        ?>
        <article class="individual-post">
            <!-- GET LINK AND TITLE OF POSTS -->
<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>

<!-- DISPLAY AUTHOR AND DATE -->
<?php post_data();?>
<!-- GET FEATURED IMAGE IF ANY -->
<?php the_post_thumbnail('thumbnail');?>
<!-- GET EXCERPT FROM ARTICLE -->
<?php the_excerpt();?>
<hr>
        </article><!-- individual post -->
<?php
}
}
?>
            </section><!-- archive container -->
        </main>
    </div><!-- row -->
</div><!-- container -->

<?php get_footer();?>