<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Cookware</title>
  <link rel="icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/swiper.min.css">
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
            <a href="#!" class="rs-cookware-header__top-menu_link">
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
            <a href="#!" class="rs-cookware-header__main-nav_logo">
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
  <section class="rs-cookware-catalog">
    <div class="container">
      <div class="block-title">
        <div class="block-title__subtitle">
          <span>ЧугунPRO</span>
        </div>
        <h2>Каталог магазина</h2>
      </div>
      <div class="rs-cookware-catalog__row">
        
        <div class="rs-cookware-catalog__col">
          <a href="#!" class="rs-cookware-catalog__item">
            <i class="icon icon-chef"></i>
            <span class="rs-cookware-catalog__item_title">Все предложения</span>
            <span class="rs-cookware-catalog__item_text">Весь ассортимент представленный в нашем магазине</span>
          </a>
        </div>

        <div class="rs-cookware-catalog__col">
          <a href="#!" class="rs-cookware-catalog__item with-bg">
            <i class="icon icon-pan-set"></i>
            <span class="rs-cookware-catalog__item_title">Наборы</span>
            <span class="rs-cookware-catalog__item_text">Комплекты посуды для термической обработки пищи</span>
          </a>
        </div>

        <div class="rs-cookware-catalog__col">
          <a href="#!" class="rs-cookware-catalog__item">
            <i class="icon icon-pan"></i>
            <span class="rs-cookware-catalog__item_title">Кастрюли</span>
            <span class="rs-cookware-catalog__item_text">Изделия для длительного приготовления (томления) блюд</span>
          </a>
        </div>

        <div class="rs-cookware-catalog__col">
          <a href="#!" class="rs-cookware-catalog__item">
            <i class="icon icon-grill"></i>
            <span class="rs-cookware-catalog__item_title">Сковороды</span>
            <span class="rs-cookware-catalog__item_text">Изделия с природными антипригарными свойствами</span>
          </a>
        </div>

        <div class="rs-cookware-catalog__col">
          <a href="#!" class="rs-cookware-catalog__item">
            <i class="icon icon-grill-press"></i>
            <span class="rs-cookware-catalog__item_title">Прессы для гриля</span>
            <span class="rs-cookware-catalog__item_text">Прижимающие продукты изделия с имитацией решетки</span>
          </a>
        </div>

        <div class="rs-cookware-catalog__col">
          <a href="#!" class="rs-cookware-catalog__item">
            <i class="icon icon-bakery"></i>
            <span class="rs-cookware-catalog__item_title">Формы для выпечки</span>
            <span class="rs-cookware-catalog__item_text">Емкости для выпекания с естественными защитными свойствами</span>
          </a>
        </div>

        <div class="rs-cookware-catalog__col">
          <a href="#!" class="rs-cookware-catalog__item">
            <i class="icon icon-tajines"></i>
            <span class="rs-cookware-catalog__item_title">Тажины</span>
            <span class="rs-cookware-catalog__item_text">Марокканские сковороды с куполообразной или конусной крышкой</span>
          </a>
        </div>

        <div class="rs-cookware-catalog__col">
          <a href="#!" class="rs-cookware-catalog__item">
            <i class="icon icon-wok"></i>
            <span class="rs-cookware-catalog__item_title">Казаны и воки</span>
            <span class="rs-cookware-catalog__item_text">Толстостенные изделия полусферической формы для медленного нагрева</span>
          </a>
        </div>

        <div class="rs-cookware-catalog__col">
          <a href="#!" class="rs-cookware-catalog__item">
            <i class="icon icon-braziers"></i>
            <span class="rs-cookware-catalog__item_title">Жаровни и приготовление на природе</span>
            <span class="rs-cookware-catalog__item_text">Формы для готовки в духовке или на открытом огне</span>
          </a>
        </div>

        <div class="rs-cookware-catalog__col">
          <a href="#!" class="rs-cookware-catalog__item">
            <i class="icon icon-kettle"></i>
            <span class="rs-cookware-catalog__item_title">Чайники</span>
            <span class="rs-cookware-catalog__item_text">Традиционные японские изделия, прекрасно аккумулирующие тепло</span>
          </a>
        </div>

        <div class="rs-cookware-catalog__col">
          <a href="#!" class="rs-cookware-catalog__item">
            <i class="icon icon-lids"></i>
            <span class="rs-cookware-catalog__item_title">Крышки для посуды</span>
            <span class="rs-cookware-catalog__item_text">Специальные изделия, улучшающие функциональность посуды</span>
          </a>
        </div>

        <div class="rs-cookware-catalog__col">
          <a href="#!" class="rs-cookware-catalog__item">
            <i class="icon icon-cooking"></i>
            <span class="rs-cookware-catalog__item_title">Аксессуары</span>
            <span class="rs-cookware-catalog__item_text">Кухонные принадлежности, упрощающие процессы приготовления блюд</span>
          </a>
        </div>

      </div>
    </div>
  </section>
  <!-- Хиты продаж -->
  <section class="rs-cookware-products">
    <div class="container">
      <div class="block-title">
        <div class="block-title__subtitle">
          <span>ЧугунPRO</span>
        </div>
        <h2>Хиты продаж</h2>
      </div>
      <div class="rs-cookware-products__slider">
        <div class="swiper-container" id="productSlider">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="rs-cookware-products__item">
                <div class="rs-cookware-products__item_img">
                  <img src="img/front-page/products/1.png" alt="">
                  <div class="rs-cookware-products__item_buttons">
                    <a href="#!">
                      <span>Купить</span>
                      <span><i class="icon icon-credit-card"></i></span>
                    </a>
                    <a href="#!">
                      <span>В корзину</span>
                      <span><i class="icon icon-cart"></i></span>
                    </a>
                  </div>
                </div>
                <a href="#!" class="rs-cookware-products__item_title">
                  <span>Эмалированный чугунный кокот с крышкой «Лилия»</span>
                </a>
                <span class="rs-cookware-products__item_price">20 750 руб.</span>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="rs-cookware-products__item">
                <div class="rs-cookware-products__item_img">
                  <img src="img/front-page/products/1.png" alt="">
                  <div class="rs-cookware-products__item_buttons">
                    <a href="#!">
                      <span>Купить</span>
                      <span><i class="icon icon-credit-card"></i></span>
                    </a>
                    <a href="#!">
                      <span>В корзину</span>
                      <span><i class="icon icon-cart"></i></span>
                    </a>
                  </div>
                </div>
                <a href="#!" class="rs-cookware-products__item_title">
                  <span>Эмалированный чугунный кокот с крышкой «Лилия»</span>
                </a>
                <span class="rs-cookware-products__item_price">20 750 руб.</span>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="rs-cookware-products__item">
                <div class="rs-cookware-products__item_img">
                  <img src="img/front-page/products/1.png" alt="">
                  <div class="rs-cookware-products__item_buttons">
                    <a href="#!">
                      <span>Купить</span>
                      <span><i class="icon icon-credit-card"></i></span>
                    </a>
                    <a href="#!">
                      <span>В корзину</span>
                      <span><i class="icon icon-cart"></i></span>
                    </a>
                  </div>
                </div>
                <a href="#!" class="rs-cookware-products__item_title">
                  <span>Эмалированный чугунный кокот с крышкой «Лилия»</span>
                </a>
                <span class="rs-cookware-products__item_price">20 750 руб.</span>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="rs-cookware-products__item">
                <div class="rs-cookware-products__item_img">
                  <img src="img/front-page/products/1.png" alt="">
                  <div class="rs-cookware-products__item_buttons">
                    <a href="#!">
                      <span>Купить</span>
                      <span><i class="icon icon-credit-card"></i></span>
                    </a>
                    <a href="#!">
                      <span>В корзину</span>
                      <span><i class="icon icon-cart"></i></span>
                    </a>
                  </div>
                </div>
                <a href="#!" class="rs-cookware-products__item_title">
                  <span>Эмалированный чугунный кокот с крышкой «Лилия»</span>
                </a>
                <span class="rs-cookware-products__item_price">20 750 руб.</span>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="rs-cookware-products__item">
                <div class="rs-cookware-products__item_img">
                  <img src="img/front-page/products/1.png" alt="">
                  <div class="rs-cookware-products__item_buttons">
                    <a href="#!">
                      <span>Купить</span>
                      <span><i class="icon icon-credit-card"></i></span>
                    </a>
                    <a href="#!">
                      <span>В корзину</span>
                      <span><i class="icon icon-cart"></i></span>
                    </a>
                  </div>
                </div>
                <a href="#!" class="rs-cookware-products__item_title">
                  <span>Эмалированный чугунный кокот с крышкой «Лилия»</span>
                </a>
                <span class="rs-cookware-products__item_price">20 750 руб.</span>
              </div>
            </div>
          </div>
          <!-- Add Pagination -->
          <div class="swiper-pagination" id="productSliderPag"></div>
        </div>
      </div>
    </div>
  </section>
  <!-- Контакты -->
  <section class="rs-cookware-contacts">
    <div class="container">
      <div class="rs-cookware-contacts__row">
        <div class="rs-cookware-contacts__col">
          <div class="rs-cookware-contacts__info">
            <div class="block-title">
              <div class="block-title__subtitle">
                <span>Свяжитесь с нами</span>
              </div>
              <h2>Наши контакты</h2>
            </div>
            <p>В наших каталогах собрана коллекция чугунной посуды, способная стать достойным подарком себе или близким.</p>
            <div class="rs-cookware-contacts__info_item">
              <div class="rs-cookware-contacts__info_icon">
                <i class="icon icon-phone-o"></i>
              </div>
              <div class="rs-cookware-contacts__info_link">
                <span>Наши телефоны</span>
                <a href="tel:88122428072">+7 (812) 242-80-72</a>
                <span>/</span>
                <a href="tel:88003333406">+7 (800) 333-34-06</a>
              </div>
            </div>
            <div class="rs-cookware-contacts__info_item">
              <div class="rs-cookware-contacts__info_icon">
                <i class="icon icon-email-o"></i>
              </div>
              <div class="rs-cookware-contacts__info_link">
                <span>E-mail</span>
                <a href="mailto:info@ChugunPRO.ru">info@ChugunPRO.ru</a>
              </div>
            </div>
            <div class="rs-cookware-contacts__info_item">
              <div class="rs-cookware-contacts__info_icon">
                <i class="icon icon-clock"></i>
              </div>
              <div class="rs-cookware-contacts__info_link">
                <span>Режим работы</span>
                <span>Пн-Вс: с 09.00 до 21.00</span>
              </div>
            </div>
          </div>
        </div>
        <div class="rs-cookware-contacts__col">
          <div class="rs-cookware-contacts__form">
            <div class="block-title">
              <div class="block-title__subtitle">
                <span>Напишите нам</span>
              </div>
              <h2>У вас остались вопросы?</h2>
            </div>
            <form action="">
              <input type="text" name="firstname" placeholder="Ваше имя">
              <div class="rs-cookware-contacts__form_row">
                <div class="rs-cookware-contacts__form_col">
                  <input type="email" name="email" placeholder="E-mail">
                </div>
                <div class="rs-cookware-contacts__form_col">
                  <input type="phone" name="phone" placeholder="Телефон">
                </div>
              </div>
              <textarea name="" id="" cols="30" rows="4" placeholder="Ваше сообщение"></textarea>
              <div class="rs-cookware-contacts__form_agreement">
                <button class="btn btn-cookware">
                  <span>Отправить сообщение</span>
                  <i class="icon icon-arrow-right"></i>
                </button>
                <p class="">Нажимая на кнопку «Отправить сообщение», Вы соглашаетесь на обработку персональных данных в соответствии с пользовательским соглашением</p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
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