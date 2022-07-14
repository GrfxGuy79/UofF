<?php
/* Template Name: Hero Image
Template Post Type: page
 */

get_header();

if (have_posts()) {
    while (have_posts()) {
        the_post();?>

                <div class="featured-image">
                    <?php the_post_thumbnail('full');?>
                </div><!-- featured image -->

<div class="container">
    <div class="row">


        <main class="col-md-9">
                <div class="text-container">
                    <h2><?php the_title();?></h2>
                    <p class="body-content">
                        <?php the_content();?>
                    </p>
                </div><!-- text container -->
            </div><!-- individual post -->
            <?php
}
}
?>
        </main>
<aside class="col-md-3">
            <?php get_sidebar();?>
        </aside>
    </div>
<?php get_footer();?>