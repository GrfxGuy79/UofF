<footer>
    <div class="border-bar"></div>

    <div class="container">
        <div class="row">

            <!-- LEFT FOOTER MENU -->
            <div class="col-md-4">
                <?php
if (has_nav_menu('footer-left')) {?>
                <nav class="footer-menu">
                    <?php wp_nav_menu(array(
    'theme_location' => 'footer-left',
));
    ?>
                </nav>
                <?php } else {echo "No Menu Has Been Set!";}?>
            </div>

            <!-- MIDDLE FOOTER MENU -->
            <div class="col-md-4">
                <?php
if (has_nav_menu('footer-middle')) {?>
                <nav class="footer-menu">
                    <?php wp_nav_menu(array(
    'theme_location' => 'footer-middle',
));
    ?>
                </nav>
                <?php } else {echo "No Menu Has Been Set!";}?>
            </div>

            <!-- RIGHT FOOTER MENU -->
            <div class="col-md-4">
                <?php
if (has_nav_menu('footer-right')) {?>
                <nav class="footer-menu">
                    <?php wp_nav_menu(array(
    'theme_location' => 'footer-right',
));
    ?>
                </nav>
                <?php } else {echo "No Menu Has Been Set!";}?>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer();?>

</body>

</html>