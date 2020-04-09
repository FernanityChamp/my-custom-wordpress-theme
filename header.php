<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Awesome Theme</title>
        <?php wp_head(); ?>
    </head>

    <?php 
        // is_front_page: it is the main page used as static in the settings
        // is_home: it is the blog loop page
        if ( is_front_page() ): 
            $awesome_classes = ['awesome-class', 'my-class'];
        else: 
            $awesome_classes = ['no-awesome-class'];
        endif;
    ?>

    <body <?php body_class( $awesome_classes ); ?>>
        <?php wp_nav_menu(['theme_location' => 'primary']); ?>