<?php get_header();?>

<div class="container">
    <div class="row">
        <main class="col-md-9">
            <section class="category-information">
                <h2 class="category-title">
                    Category: <?php echo single_cat_title(); ?>
                </h2><!-- category title -->
                <div class="category-description">
                    <?php echo category_description(); ?>
                </div><!-- category description -->
                </section><!-- category information -->

                <hr>

                <section class="category-posts">


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
                </section><!-- category posts -->


        </main>
    </div><!-- row -->
</div><!-- container -->

<?php get_footer();?>