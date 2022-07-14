<?php get_header();?>

<main class="container">
<div class="row">
    <section class="col-lg-12">
        <h2 class="search-title">Search Results For "<?php echo $s; ?>"</h2>

        <?php if (have_posts()) {
    while (have_posts()) {
        the_post();?>

                <article class="col-lg-12">
                    <h3><a href="<?php echo get_the_permalink(); ?>"><?php the_title();?></a></h3>
                    <p><?php the_excerpt();?></p>
                </article>
         <?php }
} else {?>
<div class="col-lg-12">
    <?php echo '<p>Sorry but that word was not found</p>';
    get_search_form();
    ?>
</div>
<?php }?>
    </section>
</div>
</main>

<?php get_footer();?>
