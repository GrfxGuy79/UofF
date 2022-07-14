<?php get_header();?>

<main class="container single-page">
    <?php

if (have_posts()) {
    while (have_posts()) {
        the_post();?>

    <div class="individual-post">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">

                <div class="text-container">
                    <!-- GET TITLE -->
                    <h1 class="single-title"><?php the_title();?></h1>

                    <!-- GET FEATURED IMAGE -->
                    <?php the_post_thumbnail('large');?>

                    <!-- GET POST -->
                    <p class="single-content">
                        <?php the_content();?>
                    </p>
                </div>
            </div>


        </div>
    </div>

    <?php
}
}
?>
</main>

<?php get_footer();?>