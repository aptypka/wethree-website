<?php
function register_my_menus() { 
  register_nav_menus(
    array(
        'main_menu' => 'Menu',
    )
  );
}
add_action( 'init', 'register_my_menus' );
?>
<?php include 'includes/ochenj_boljshaja_pljushka_dlja_menju.php'; ?>
<?php
add_theme_support('post-thumbnails'); 
?>
<?php
register_sidebar( array(
    'name' => 'menu',
    'id' => 'menu',
    'before_widget' => '<div class="menu">',
    'after_widget' => '</div>',
    'before_title' => '',
    'after_title' => ''
) );
?>