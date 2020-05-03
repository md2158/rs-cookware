<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Cookware</title>
  <link rel="icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="fonts/cookware-icons/styles.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
</head>
<body>

  <!-- Шапка -->
  <header>
    <div class="rs-cookware-header">
      <div class="rs-cookware-header__top-menu">
        <div class="container">
          <div class="rs-cookware-header__top-menu_nav">
            <a class="rs-cookware-header__top-menu_link">
              <i class="icon icon-user"></i>
              <span>Войти</span>
            </a>
            <a href="tel:78122428072" class="rs-cookware-header__top-menu_link">
              <i class="icon icon-phone"></i>
              <span>+7 (812) 242-80-72</span>
            </a>
            <a href="tel:78003333406" class="rs-cookware-header__top-menu_link">
              <i class="icon icon-phone"></i>
              <span>+7 (800) 333-34-06</span>
            </a>
            <a href="mailto:info@ChugunPRO.ru" class="rs-cookware-header__top-menu_link">
              <i class="icon icon-envelope"></i>
              <span>info@ChugunPRO.ru</span>
            </a>
          </div>
        </div>
      </div>
      <div class="rs-cookware-header__main-nav">
        <div class="container">
          <div class="rs-cookware-header__main-nav_content">
            <a class="rs-cookware-header__main-nav_logo">
              <img src="img/svg/logo.svg" alt="logo-cookware">
            </a>
            <nav class="rs-cookware-header__menu">
              <ul class="primary-menu">
                <li class="primary-menu__item"><a class="primary-menu__link" href="#!">Главная</a></li>
                <li class="primary-menu__item sub-menu-parent">
                  <a class="primary-menu__link" href="#!">Каталог</a>
                  <ul class="sub-menu">
                    <li class="sub-menu__item"><a class="sub-menu__link" href="#!">Каталог 1</a></li>
                    <li class="sub-menu__item"><a class="sub-menu__link" href="#!">Каталог 2</a></li>
                    <li class="sub-menu__item"><a class="sub-menu__link" href="#!">Каталог 3</a></li>
                    <li class="sub-menu__item"><a class="sub-menu__link" href="#!">Каталог 4</a></li>
                  </ul>
                </li>
                <li class="primary-menu__item"><a class="primary-menu__link" href="#!">Покупателю</a></li>
                <li class="primary-menu__item"><a class="primary-menu__link" href="#!">Новости/Акции</a></li>
                <li class="primary-menu__item"><a class="primary-menu__link" href="#!">О магазине</a></li>
                <li class="primary-menu__item"><a class="primary-menu__link" href="#!">Доставка</a></li>
                <li class="primary-menu__item"><a class="primary-menu__link" href="#!">Контакты</a></li>
              </ul>
            </nav>
            <div class="rs-cookware-header__main-nav_icons">
              <div class="rs-cookware-header__main-nav_icons_cart">
                <a href="#!">
                  <i class="icon icon-cart"></i>
                </a>
                <span>0</span>
              </div>
              <a href="#!" id="searchModalBtn">
                <i class="icon icon-search"></i>
              </a>
              <div class="rs-cookware-header__search animated fadeIn" id="searchModal">
                <input class="rs-cookware-header__search_input" type="text" name="search" placeholder="Поиск...">
                <button class="rs-cookware-header__search_button"><i class="icon icon-search"></i></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="slider">
    <img class="w-100" src="img/slider-1.jpg" alt="">
  </div>
  <!-- Каталог -->
  <section class="rs-cookware-catalog"></section>
  <!-- Хиты продаж -->
  <section class="rs-cookware-products"></section>
  <!-- Контакты -->
  <section class="rs-cookware-contacts"></section>
  <!-- Рецепты -->
  <section class="rs-cookware-recipes"></section>

  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/swiper.min.js"></script>
  <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script> -->
  <script type="text/javascript" src="js/common.js"></script>
  <script type="text/javascript" src="js/pages/front-page.js"></script>
  
</body>
</html>