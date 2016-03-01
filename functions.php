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
<?php include 'includes/portfelj.php'; ?>
<?php include 'includes/huita_opasnaja_dlja_zhizni.php' ?>
<?php include 'includes/ochenj_boljshaja_pljushka_dlja_menju.php'; ?>
<?php
add_theme_support('post-thumbnails'); 
?>
<?php 
if(is_admin()) {
    wp_enqueue_script('imagefield', get_template_directory_uri().'/includes/imagefield.js');
} ?>
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