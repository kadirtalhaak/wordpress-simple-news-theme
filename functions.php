
<?php
function theme_setup(){
    // Öne çıkan görsel desteği ekle
    add_theme_support('post-thumbnails');
    // Menü desteği ekle
    register_nav_menus(array(
        'primary' => __('Primary Menu')
    ));
}
add_action('after_setup_theme', 'theme_setup');
