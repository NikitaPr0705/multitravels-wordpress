<?php 

add_action('wp_enqueue_scripts', 'multitravel_scripts'); 


function multitravel_scripts() {
    
    wp_enqueue_style( 'fancybox-style', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css' ); //подключение доп стилей, get_template_directory_uri (папка с темой) - задаются путь, где лежит шаблон

    wp_enqueue_style( 'global-style', get_template_directory_uri() . '/assets/styles/global.css' ); //подключение доп стилей, get_template_directory_uri (папка с темой) - задаются путь, где лежит шаблон
    wp_enqueue_style( 'vendor-style', get_template_directory_uri() . '/assets/styles/vendor.css' ); //подключение доп стилей, get_template_directory_uri (папка с темой) - задаются путь, где лежит шаблон
    wp_enqueue_style( 'slick-style', get_template_directory_uri() . '/assets/styles/slider-slick.css' ); //подключение доп стилей, get_template_directory_uri (папка с темой) - задаются путь, где лежит шаблон

    wp_enqueue_style( 'multitravel-style', get_stylesheet_uri() ); // функция ВП которая отвечает за подключение стилей, get_stylesheet_directory_uri - сам понимает, что нужно подключить style.css
    wp_enqueue_script( 'jquery' );
	// для версий WP меньше 3.6 'jquery' нужно поменять на 'jquery-core'
	$wp_jquery_ver = $GLOBALS['wp_scripts']->registered['jquery']->ver;
	$jquery_ver = $wp_jquery_ver == '' ? '1.11.0' : $wp_jquery_ver;

	wp_deregister_script( 'jquery-core' );
	wp_register_script( 'jquery-core', '//ajax.googleapis.com/ajax/libs/jquery/'. $jquery_ver .'/jquery.min.js' );
	wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'fancybox-scripts', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js'); 
    wp_enqueue_script( 'slick-scripts', 'https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js'); 
    wp_enqueue_script( 'multitravel-slick-scripts', get_template_directory_uri(  ) . '/assets/js/slider-slick.js', array(), null, true ); // функция ВП которая отвечает за подключение скриптов, get_stylesheet_directory_uri - сам понимает, что нужно подключить main.js , true - подключить скрипт в футере, array('jquery' - подключить скрипт, если покдлючен джейквери
    wp_enqueue_script( 'slick-scripts', 'https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js'); 
    wp_enqueue_script( 'slick-scripts', 'https://cdn.jsdelivr.net/npm/clipboard@2.0.8/dist/clipboard.min.js'); 

    wp_enqueue_script( 'multitravel-scripts', get_template_directory_uri(  ) . '/assets/js/main.js', array(), null, true ); // функция ВП которая отвечает за подключение скриптов, get_stylesheet_directory_uri - сам понимает, что нужно подключить main.js , true - подключить скрипт в футере, array('jquery' - подключить скрипт, если покдлючен джейквери
    


    // ПРИМЕР:


    // wp_enqueue_style( 'animate-style', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' ); //подключение доп стилей, через cdn


    // вордпресс сам подключает jqeury внутри, 

}


add_theme_support('custom-logo'); // включение возможности вставки логотипа на сайте
add_theme_support('post-thumbnails'); 


// define( 'WP_DEBUG_DISPLAY', false );
?>
