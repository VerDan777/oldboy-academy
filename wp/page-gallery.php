<?php
    /*
        Template Name: Gallery Page
    */
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>

    <!-- OG -->
    <meta property="og:title" content="<?php the_title(); ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php bloginfo('stylesheet_directory'); ?>/img/courses/course1.jpg">
    <meta propepty="og:url" content="<?php the_permalink(); ?>">
    <meta property="og:description" content="Академия барберинга OldBoy — Место, где вы станете настоящим барбером, профессионалом своего дела и ведущим специалистом барбершопа.">
    <meta propepty="og:locale" content="ru_RU">
    <meta property="og:site_name" content="OldBoyAcademy">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo("stylesheet_directory"); ?>/img/favicon.png">

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:300,400,400i,500,700&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo bloginfo('stylesheet_directory'); ?>/style.css"/>

    <title>Oldboy Academy Галлерея</title>

    <?php wp_head(); ?>
  </head>
  <body>

    <!-- Header -->
    <header class="page-header">
      <nav class="main-nav main-nav--side-menu">
        <div class="main-nav__logo"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-bw.svg" alt="Академия Олдбой логотип монохром"/></div>
        <ul class="main-nav__list">
          <li class="main-nav__item"><a class="main-nav__link" href="#about">Об Академии</a></li>
          <li class="main-nav__item"><a class="main-nav__link" href="#features">Преимущества</a></li>
          <li class="main-nav__item"><a class="main-nav__link" href="#courses">Наши Курсы</a></li>
          <li class="main-nav__item"><a class="main-nav__link" href="#team">Команда</a></li>
          <li class="main-nav__item"><a class="main-nav__link" href="#contacts">Контакты</a></li>
        </ul>
        <div class="main-nav__social">
          <div class="masson">
            <div class="masson__logo"><img src="<?php bloginfo('styleshhet_directory'); ?>/img/masson.png" alt=""/></div>
            <div class="masson__social"><a class="icon-vkontakte" href="#"></a><a class="icon-instagram" href="#"></a></div><a class="masson__tag" href="#">#<em>OldboyAcademy</em></a>
          </div>
        </div>
      </nav>
      <div class="menu-icon menu-icon--inner">
        <div class="menu-icon__middle"></div>
      </div>
    </header>

    <!-- Gallery -->
    
    <section class="hero hero--gallery">
      <div class="hero__header">
        <header class="hero-header">
          <div class="hero-header__caption">
            <h1 class="hero-header__title"><strong>Академия OldBoy</strong><br>Галерея</h1>
          </div>
        </header>
      </div>
    </section>
    
    <section class="gallery">
      <header class="gallery__header">
        <h2 class="gallery__title">Добро<br>пожаловать<br>в&nbsp;семью OldBoy</h2>
        <p class="gallery__subtitle">Галерея работ наших<br>мастеров и учеников</p>
      </header>
      <header class="gallery__header--slogan">
        <p class="gallery__subtitle--slogan">OldBoy Academy</p>
        <h4 class="gallery__title--slogan">Стань настоящим<br>барбером</h4>
        <p class="gallery__text">Посмотри сам каких результатов добиваются наши<br>ученики за время обучения в Академии.</p>
      </header>
    </section>

  <?php if ( function_exists( 'envira_gallery' ) ) { envira_gallery( '153' ); } ?>

    <!-- Banner -->
    <section class="horiz-banner">
      <header class="horiz-banner__header">
        <p class="horiz-banner__suptitle">Академия Oldboy</p>
        <h2 class="horiz-banner__title">С 31 октября<br>старт нового курса</h2>
        <p class="horiz-banner__subtitle">Базовый курс для тех, кто хочет освоить профессию барбера</p>
      </header>
      <div class="horiz-banner__more"><a class="button" href="#">Подробнее о курсе</a></div>
    </section>

  <?php if ( function_exists( 'envira_gallery' ) ) { envira_gallery( '165' ); } ?>

    <?php get_footer(); ?>
  </body>
</html>