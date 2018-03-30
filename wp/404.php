<?php 
    /*
        Template Name: 404 Page
    */
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <meta name="description" content="404 страница">

     <!-- OG -->
    <meta property="og:title" content="<?php the_title(); ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php bloginfo('stylesheet_directory'); ?>/img/courses/course2.jpg">
    <meta propepty="og:url" content="<?php the_permalink(); ?>">
    <meta property="og:description" content="Академия барберинга OldBoy — Место, где вы станете настоящим барбером, профессионалом своего дела и ведущим специалистом барбершопа.">
    <meta propepty="og:locale" content="ru_RU">
    <meta property="og:site_name" content="OldBoyAcademy">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo("stylesheet_directory"); ?>/img/favicon.png">

    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,500,700&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo bloginfo('stylesheet_directory'); ?>/style.css" />
    
    <title>404 Страница</title>

    <?php wp_head(); ?>
</head>

<body class="page-404__nopd">
    <div class="page-404">
        <div class="page-404__wrapper">
            <h1 class="page-404__title">404</h1>
            <p class="page-404__text">Страница, на которую вы попали, не существует. Вы можете попробовать следующее:</p>
            <div class="page-404__list">
                <li class="page-404__item"><a class="page-404__link" href="<?php echo esc_url(home_url('/')); ?>">Перейти на главную страницу</a></li>
                <li class="page-404__item">Проверить правильность введенного адреса</li>
                <li class="page-404__item">Вернуться туда, откуда пришли (нажать кнопку «Назад» в своем браузере)</li>
            </div>
        </div>
    </div>
</body>
</html>