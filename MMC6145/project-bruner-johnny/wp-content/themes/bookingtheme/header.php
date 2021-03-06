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
                <div class="col-lg-6 col-md-4 col-sm-2">
                    <?php
// IF LOGO IMAGE IS NOT SET THEN DISPLAY TEXT
if (get_header_image() == '') {?>
                    <h1><a href="<?php echo get_home_url(); ?>" class="logo-text"><?php bloginfo('name');?></a></h1>
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

                <nav class="navbar col-lg-6 col-md-4 col-sm-2 navbar-expand-lg">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarContent"">
                    <?php wp_nav_menu(array(
    'theme_location' => 'main-menu',
));
?>
                </div>
                </nav>
            </div>
        </div>
    </header>