<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('name');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php bloginfo('name');?></title>

    <?php wp_head();?>

</head>

<body <?php body_class();?>>

    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 logo-container">
                    <?php
// IF LOGO IMAGE IS NOT SET THEN DISPLAY TEXT
if (get_header_image() == '') {?>
                    <h1><a href="<?php echo get_home_url(); ?>"><?php bloginfo('name');?></a></h1>
                    <?php
} else {?>
                    <a href="<?php echo get_home_url(); ?>"><img src="<?php header_image();?>" alt="logo" class="logo"
                            width="<?php echo get_custom_header()->width; ?>"
                            height="<?php echo get_custom_header()->height; ?>">
                    </a>
                    <?php
}
?>
                </div>

                <nav class="col-lg-6 navigation custom-menu-class">
                    <?php wp_nav_menu(array(
    'theme_location' => 'main-menu',
));
?>
                </nav>
            </div>
        </div>
    </header>