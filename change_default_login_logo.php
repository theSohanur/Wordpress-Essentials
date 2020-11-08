<?php
//How to Change the Login Logo in WordPress
// Below we have embedded the few lines of code that you need to put in your WordPress theme.
// For that:
// Just copy the below code and paste it into your theme’s functions.php file.

//* Add logo to admin page
function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/site-login-logo.png);
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );