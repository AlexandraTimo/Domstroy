<?php
// правильный способ подключить стили и скрипты
add_action('wp_print_styles', 'theme_name_scripts');
// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function theme_name_scripts() {
wp_enqueue_style( 'swipercss', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css'  );
wp_enqueue_style( 'style', get_template_directory_uri() .'/assets/css/style.css'  );
wp_enqueue_style( 'tippycss', 'https://unpkg.com/tippy.js@5/dist/backdrop.css'  );
wp_enqueue_script( 'jquery' );

wp_enqueue_script( 'popper', 'https://unpkg.com/popper.js@1');
wp_enqueue_script( 'tippyJs', 'https://unpkg.com/tippy.js@5/dist/tippy-bundle.iife.js');
wp_enqueue_script( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js');
wp_enqueue_script( 'script', get_template_directory_uri() .'/assets/js/script.js', array(), '20151215', true);
wp_enqueue_script( 'swiperJs', get_template_directory_uri() .'/assets/js/swiper.js', array(), '20151215', true);
//  wp_enqueue_script( 'gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js');
//  wp_enqueue_script( 'gsapscript', get_template_directory_uri() .'/assets/js/gsap.js', array(), '20151215', true);

}

add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails', array( 'post' ) );


// добавление миниатюры-картинки для статей
add_image_size('post_thumb', 1300,500,true);

//

// Разрешить добавить формат svg
add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}




// Плдключение nav bar  в шаблон Wordpress
register_nav_menus(array(
    'top'    => 'Верхнее меню',    //Название месторасположения меню в шаблоне
    'bottom' => 'Нижнее меню' ,
    'sub'=> 'Субменю'
         //Название другого месторасположения меню в шаблоне
));

function add_menu_link_class( $atts, $item, $args ) {
    if (property_exists($args, 'link_class')) {
     $atts['class'] = $args->link_class;
   }
   return $atts;
 }
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );


