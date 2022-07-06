<?php get_header();?>

<div class="container">
    <div class="row">
        <main class="col-md-9">
            <section class="date-information">
                <h2 class="date-title">
                    <?php
if (is_day()) {
    echo "Daily Archives: " . get_the_date();
} elseif (is_month()) {
    echo "Monthly Archives: " . get_the_date('F Y');
} elseif (is_year()) {
    echo "Yearly Archives: " . get_the_date('Y');
}

?>
                </h2><!-- date title -->
            </section><!-- date information -->

            <hr>

            <section class="date-posts">

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
            </section><!-- date posts -->


        </main>
    </div><!-- row -->
</div><!-- container -->

<?php get_footer();?>