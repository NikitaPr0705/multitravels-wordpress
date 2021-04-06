<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo bloginfo( 'template_url'); ?>/assets/img/favicon.ico" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#111111">
    <title><?php bloginfo( 'name' ); echo ' | '; bloginfo('description'); ?></title>
    <!-- <link rel="stylesheet" href="css/global.css"> -->
    <!-- <link rel="stylesheet" href="css/vendor.css"> -->
    <!-- <link rel="stylesheet" href="css/main.css"> -->
    <?php wp_head(); ?>
</head>

<body>
	<div class="site-container">
		<div id="openModal" class="modal-outer">
             <a href="#close" title="Close" class="close"></a>
                 <div class="modal-dialog">




                <div class="form-block __mobile __desktop __white-bg __transparent-bg modal modal-fixed">
                    <div class="form-block__inner-wrapper __modal">
                        <a href="#close" title="Close" class="close-btn">Отменить</a>
                        <div class="form-block__title __mobile">
                            <h4>Хочу в путешествие</h4>
                        </div>
                        <div class="form-block__subtitle __mobile">
                            <span>Мы перезвоним Вам в рабочее время.</span>
                        </div>
                        <?php echo do_shortcode('[contact-form-7 id="38" title="Форма отправки заявки (модальное окно)"]' ) ?>
                        <!-- <form class="form __mobile" action="">
                            <div class="name">
                                        <label class="form-label" for="formname">Ваше имя *</label>
                                        <div>
                                            <input type="text" id="formname" name="formname" placeholder="Ваше имя" required>
                                        </div>
                                    </div>
                                    <div class="phone">
                                        <label class="form-label" for="formphone">Номер телефона для связи *</label>
                                        <div>
                                            <input type="text" id="formphone" name="formphone" placeholder="+7 __ __ __ __ ___" required>
                                        </div>
                                    </div>
                                    <div class="e-mail">
                                        <label class="form-label" for="formemail">E-mail </label>
                                        <div>
                                            <input type="text" id="formemail" name="formemail" placeholder="MultiTravel@gmail.com" required>
                                        </div>
                                    </div>


                            <div>

                                <div class="form-block__checkbox-wrapper">
                                    <input class="check__input" type="checkbox" id="agreement-modal" checked>
                                    <span class="check__box"></span>
                                    <label class="check option" for="agreement-modal">Нажимая на кнопку «Отправить» вы
                                        соглашаетесь с Обработкой персональных данных, Политикой
                                        конфиденциальности и Пользовательским соглашением</label>


                                </div>


                                <div class="order-btn-wrapper">
                                    <button class="btn btn-main btn-order" type="submit">Заказать
                                        звонок</button>
                                </div>
                            </div>
                        </form> -->
                    </div>
                    <div class="ready-form visually-hidden __modal">
                        <div class="ready-form__title">
                            <span><strong>Спасибо!
                                </strong></span>
                            <span><strong>
                                    Ваша заявка принята! </strong></span>
                        </div>
                        <div class="ready-form__text">
                            <span>Мы перезвоним Вам в рабочее время.</span>
                        </div>
                        <div class="social-block">
                            <div class="social-block__text">
                                <span>Присоединяйся к нам!</span>
                            </div>
                            <div class="social-block__list">
                                <a href="#" class="social-block__item" target="_blank">
                                    <img src="<?php echo bloginfo( 'template_url'); ?>/assets/img/whatsapp.svg" alt="whatsapp">
                                </a>
                                <a href="#" class="social-block__item" target="_blank">
                                    <img src="<?php echo bloginfo( 'template_url'); ?>/assets/img/telegram.svg" alt="telegram">
                                </a>
                                <a href="#" class="social-block__item" id="insta" target="_blank">
                                    <img src="<?php echo bloginfo( 'template_url'); ?>/assets/img/insta.svg" alt="insta">
                                </a>
                                <a href="#" class="social-block__item" target="_blank">
                                    <img src="<?php echo bloginfo( 'template_url'); ?>/assets/img/vk.svg" alt="vk">
                                </a>
                                <a href="#" class="social-block__item" target="_blank">
                                    <img src="<?php echo bloginfo( 'template_url'); ?>/assets/img/fb.svg" alt="fb">
                                </a>
                                <a href="#" class="social-block__item" target="_blank">
                                    <img src="<?php echo bloginfo( 'template_url'); ?>/assets/img/twitter.svg" alt="twitter">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

         </div>

        </div>
		<header class="header">
  <div class="container">
    <div class="header-inner">

      <nav class="nav __header">
        <a class="nav__link" href="#route">О маршруте </a>
        <a class="nav__link" href="#nearesttrip">Ближайшие походы</a>
        <a class="nav__link" href="#aboutus">О нас</a>
        <a class="nav__link" href="#gallery">Галерея</a>
        <a class="nav__link" href="#trainee">Новичку</a>
        <a class="nav__link" href="#reviews">Отзывы</a>
        <a class="nav__link" href="#findus">как нас найти?</a>
      </nav>

      <div class="phone-number __header">
        <a href="tel:<?php the_field('phone', 9); ?>" class="phone-number__link __header"><?php the_field('phone', 9); ?></a>
      </div>

      <div class="btn-header-wrapper">
        <a href="#openModal" class="btn btn-header open-modal-js">Заказать звонок</a>
      </div>

      <div class="hamburger-menu">
        <input id="menu__toggle" type="checkbox" />
        <label class="menu__btn menu__btn-header-mobile" for="menu__toggle">
          <span></span>
        </label>

        <div class="menu__box">
          <div class="menu__box-inner">
            <ul class="menu__box-list">
              <li><a class="menu__item" href="#route">О маршруте</a></li>
              <li><a class="menu__item" href="#nearesttrip">Ближайшие походы</a></li>
              <li><a class="menu__item" href="#aboutus">О нас</a></li>
              <li><a class="menu__item" href="#gallery">Галерея</a></li>
              <li><a class="menu__item" href="#trainee">Новичку</a></li>
              <li><a class="menu__item" href="#reviews">Отзывы</a></li>
              <li><a class="menu__item" href="#findus">как нас найти?</a></li>
            </ul>

          </div>
        </div>
      </div>
    </div>
  </div>
</header>