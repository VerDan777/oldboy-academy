<?php
    /*
        Template Name: Masters Page
    */

?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  
  <meta name="description" content="Академия барберинга OldBoy — Место, где вы станете настоящим барбером, профессионалом своего дела и ведущим специалистом барбершопа."/>

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
  <link href="https://fonts.googleapis.com/css?family=Lora:400,700&amp;amp;subset=cyrillic" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,900&amp;amp;subset=cyrillic" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo bloginfo('stylesheet_directory'); ?>/style.css" />

  <title>OldBoy Academy мастера</title>
  <?php wp_head(); ?>
</head>

<body>
  <header class="page-header">
    <div class="page-header__logo page-header__logo--masters">
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo bloginfo('stylesheet_directory'); ?>/img/logo.svg" alt="Академия Олдбой логотип монохром" />
      </a>
    </div>

    <div class="page-header__phone page-header__phone--inner page-header__phone--masters">
      <a href="tel: +7911456-78-90">+7 911 456-78-90</a>
    </div>

    <nav class="main-nav main-nav---side-menu">
      <div class="main-nav__logo">
        <img src="<?php echo bloginfo('stylesheet_directory'); ?>/img/logo-bw.svg" alt="Академия Олдбой логотип монохром" />
      </div>
      <ul class="main-nav__list">
        <li class="main-nav__item">
          <a class="main-nav__link" href="<?php echo esc_url(home_url('/')); ?>#about">Об Академии</a>
        </li>
        <li class="main-nav__item">
          <a class="main-nav__link" href="<?php echo esc_url(home_url('/')); ?>#features">Преимущества</a>
        </li>
        <li class="main-nav__item">
          <a class="main-nav__link" href="<?php echo esc_url(home_url('/')); ?>#courses">Наши Курсы</a>
        </li>
        <li class="main-nav__item">
          <a class="main-nav__link" href="<?php echo esc_url(home_url('/')); ?>#contacts">Контакты</a>
        </li>
      </ul>
      <div class="main-nav__social">
        <div class="masson">
          <div class="masson__logo">
            <img src="<?php echo bloginfo('stylesheet_directory'); ?>/img/masson.png" alt="" />
          </div>
          <div class="masson__social">
            <a class="icon-vkontakte" href="#"></a>
            <a class="icon-instagram" href="#"></a>
          </div>
          <a class="masson__tag" href="#">#<em>OldboyAcademy</em></a>
        </div>
      </div>
    </nav>

    <div class="menu-icon">
      <div class="menu-icon__middle"></div>
    </div>
  </header>

  <section class="masters">
      <?php
        $args = array(
            'category_name' => 'team'
        );
        
        query_posts($args);
        
        if(have_posts()) {
            while(have_posts()) {
                the_post();

                // vars
                $master_name = get_field('master_name');
                $master_expirience = get_field('master_expirience');
                $master_teach_expirience = get_field('master_teach_expirience');
                $master_barber_expirience = get_field('master_barber_expirience')
                $master_description = get_field('master_description');
                $master_photo = get_field('master_photo');
      ?>

    <div class="masters__card">
      <div class="masters__badge">oldboy<br>master</div>
      <div class="masters__card-info">

        <header class="masters__header">
          <h2 class="masters__name"><?php echo $master_name; ?></h2>
          <h3 class="masters__title">Стаж <?php echo $master_expirience; ?> лет</h3>
          <p class="masters__description"><?php echo $master_description; ?></p>
          <b class="masters__skill-time"><?php echo $master_teach_expirience; ?><br><span>преподавательский стаж</span><br></b>
          <b class="masters__skill-time"><?php echo $master_barber_expirience; ?> лет<br><span>Стаж в качестве барбера</span></b>
        </header>

        <footer class="masters__footer">
          <article class="masters__card-feature">
            <h3 class="masters__title">Конкурсы и награды</h3>
            <ul class="masters__achivements-list">
              
              <!-- <li class="masters__achivements-item">Чемпион россии</br>по коллористике</li>
              <li class="masters__achivements-item">Финалист<br>Russian Hair Awards</li>
              <li class="masters__achivements-item">Победитель<br>Barber Connect<br>в номинации Fast Shave</li> -->
            </ul>
          </article>
          <div class="masters__more">
            <a class="button button--more" href="#">Подробнее о мастере</a>
          </div>
        </footer>

      </div>

      <div class="masters__photo masters__photo--left">
        <img src="<?php echo $master_photo; ?>" alt="мастер" />
      </div>
      <?php
        }
    }
      ?>
    </div>

    <!-- <div class="masters__card">
      <div class="masters__badge masters__badge--left">oldboy
        <br>master</div>
      <div class="masters__card-info">
        <header class="masters__header masters__header--right">
          <h2 class="masters__name">Антон нижник</h2>
          <h3 class="masters__title">Стаж 16 лет</h3>
          <p class="masters__description">Мастер-универсал, проработав 11 лет в стилистике, ушёл в барберинг. В своей работе переплетает оба направления,
            расширяя границы индустрии: Антон гармонично сочетает мягкость линий из женских стрижек и четкость контуров барберинга.
            </p>
          <b class="masters__skill-time">3 года
            <br>
            <span>преподавательский стаж</span>
            <br>
          </b>
          <b class="masters__skill-time">5 лет
            <br>
            <span>Стаж в качестве барбера</span>
          </b>
        </header>
        <footer class="masters__footer">
          <article class="masters__card-feature">
            <h3 class="masters__title">Конкурсы и награды</h3>
            <ul class="masters__achivements-list">
              <li class="masters__achivements-item">Чемпион россии</br>по коллористике</li>
              <li class="masters__achivements-item">Финалист
                <br>Russian Hair Awards</li>
              <li class="masters__achivements-item">Победитель
                <br>Barber Connect
                <br>в номинации Fast Shave</li>
            </ul>
          </article>
          <div class="masters__more">
            <a class="button button--more" href="">Подробнее о мастере</a>
          </div>
        </footer>
      </div>
      <div class="masters__photo masters__photo--right">
        <img src="./img/masters/master3.png" alt="мастер" />
      </div>
    </div> -->
  </section>
</body>
<script src="menu.js"></script>
<script src="app.js"></script>

</html>