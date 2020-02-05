<?php
/**
 * Шаблон шапки (header.php)
 * @package WordPress
 * @subpackage travelcream
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); // вывод атрибутов языка ?>>
<head>
    <meta charset="<?php bloginfo('charset'); // кодировка ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php /* RSS и всякое */ ?>
    <link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
    <link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
    <link rel="alternate" type="application/rss+xml" title="Comments RSS"
          href="<?php bloginfo('comments_rss2_url'); ?>">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>

    <?php /* Все скрипты и стили теперь подключаются в functions.php */ ?>

    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_head(); // необходимо для работы плагинов и функционала ?>
</head>
<body <?php body_class(); // все классы для body ?>>
<header class="container-fluid bg-dark">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light menu">
                <a class="navbar-brand text-light" href="/"><h1><?php echo get_bloginfo('name'); ?></h1></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <?php $args = array( // опции для вывода верхнего меню, чтобы они работали, меню должно быть создано в админке
                            'theme_location' => 'top', // идентификатор меню, определен в register_nav_menus() в functions.php
                            'container' => false, // обертка списка, тут не нужна
                            'menu_id' => 'top-nav-ul', // id для ul
                            'items_wrap' => '<ul id="%1$s" class="nav navbar-nav %2$s">%3$s</ul>',
                            'menu_class' => 'top-menu', // класс для ul, первые 2 обязательны
                            'walker' => new bootstrap_menu(true) // верхнее меню выводится по разметке бутсрапа, см класс в functions.php, если по наведению субменю не раскрывать то передайте false
                        );
                        wp_nav_menu($args); // выводим верхнее меню
                        ?>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <a class="btn btn-outline-light my-2 my-sm-0"
                           href="/wp-admin"><?php _e('Login', 'travelcream'); ?></a>
                    </form>
                </div>
            </nav>
            <div class="col-12 text-center slogan-block">
                <h2 class="text-light slogan text-center"><?php _e(get_bloginfo('description'), 'travelcream'); ?></h2>
                <div class="sub-slogan text-center">Why not?</div>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <form class="form-inline my-2 my-lg-0 searchForm">
            <input name="text1" class="form-control" type="text" placeholder="Where are you leaving from?">
            <input name="text2" class="form-control" type="text" placeholder="Where do you want to go?">
            <input name="date" class="form-control datepicker" placeholder="Date">
            <button class="btn btn-search btn-danger my-2 my-sm-0" type="submit">Search</button>
        </form>
</div>