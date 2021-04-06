        <?php 
            get_header();
            ?>
            <main class="main">
             <section class="intro">
                        <div class="intro__inner">
                            <div class="container ">
                                <a href="#">
                                    <img id="myBtn" class="to-top-not-hover" src="<?php echo bloginfo( 'template_url'); ?>/assets/img/scrolltotop.svg" alt="">

                                </a>

                                <div class="wrapper __intro">
                                    <div class="intro__title-wrapper">
                                        <div class="intro-title">
                                            <span class="intro-title--1">Сплав по реке</span>
                                            <h2 class="intro-title--2">Клязьма</h2>
                                            <div class="intro-title--3">
                                                <span>от команды</span>
                                            </div>
                                            <h2 class="intro-title--4">MultiTravel</h2>
                                        </div>
                                    </div>




                                </div>
                            </div>
                            <div class="btn-intro-wrapper">
                                <a href="#openModal" class="btn btn-header btn-intro open-modal-js">Заказать звонок</a>
                            </div>
                            <div class="intro__jump-to">
                                <a href="#nearesttrip">
                                    Ближайшие походы

                                </a>
                            </div>

                        </div>



             </section>
			<section class="main-section" id='route'>
                <div class="routes-info__text--mobile">
                    <div class="intro__info-block-title block-title">
                        <span>Мы выбрали лучшие маршруты для Вас. </span>
                    </div>
                    <div class="intro__info-block-text block-text">
                        <p>Сплав и рафтинг в современном языке давно стали синонимами. Мы организуем сплавы на катамаранах и
                            байдарках, и мы делаем отличные водные походы! От самых простых, таких как сплавы по Шуе в
                            Карелии,
                            доступные для участников с детьми, до сложнейших маршрутов 4-5 к.с., на Алтае и в Саянах. Это
                            сплавы
                            по
                            Катуни, Башкаусу, Чулышману, рекам Жомболок и Ока Саянская. Также у нас множество интересных и
                            доступных
                            каждому походов на Кольском полуострове, в Карелии, на Кавказе и в Ленобласти.</p>
                    </div>
                </div>
                <div class="left-block __routes-info">
                    <div class="content-block __routes-info-image  __mobile">
                        <picture class="content-block__picture __routes-info">
                            <img src="<?php echo bloginfo( 'template_url'); ?>/assets/img/route-img.png" alt="forrest image">

                        </picture>
                    </div>

                    <div class="top-row__item __route-info-indent __rating">
                        <a class="reviews-link __routes-info-indent" href="#reviews">30 отзывов
                        </a>
                        <span class="rating">4,9</span>

                    </div>
                </div>
                <div class="container">
                    <div class="main-section__inner __routes-info">


                        <div class="main-section__title-wrapper __routes-info">
                            <div class="main-section-title __main-title-indent">
                                <h2>О маршруте</h2>
                            </div>
                            <div class="secondary-title __main-sub-decor __secondary-colored">
                                <div class="wrapper __decor __padding-left __margin-left">
                                <span class="secondary-title-text__indent __routes-info">по реке Клязьма</span>
                                </div>
                            </div>
                        </div>
                        <div class="main-section__content __routes-info">
                            <div class="content-block __routes-info-image __desktop">
                                <picture class="content-block__picture __routes-info">
                                    <img src="<?php echo bloginfo( 'template_url'); ?>/assets/img/route-img.png" alt="forrest image">
                                </picture>
                            </div>
                            <div class="content-block __routes-info-column-dir __desktop">
                                <div class="top-row __routes-info">
                                    <div class="top-row__item __route-info-indent">
                                        <div class="top-row__item-title">
                                            <h4>Сложность</h4>
                                            <div class="appear-prompt">Легкий опыт не требуется</div>
                                        </div>
                                        <div class="top-row__item-text">
                                            <span class="difficulty __decor">3 / 10</span>
                                        </div>
                                    </div>

                                    <div class="top-row__item __route-info-indent">
                                        <a class="reviews-link __routes-info-indent" href="#reviews">30 отзывов
                                        </a>
                                        <span class="rating">4,9</span>

                                    </div>

                                    <div class="social-share-wrapper __routes-info">
                                        <picture>
                                            <img src="<?php echo bloginfo( 'template_url'); ?>/assets/img/share-social.svg" alt="">
                                        </picture>
                                        <div class="appear-prompt">Поделиться ссылкой
                                                                </div>
                                                                <div id="copytext1">
                                                <p>https://google.com</p>   
                                            </div>
                                            <button onclick="copytext('#copytext1')">Добавить текст в буфер обмена</button>
                                        
                                        <!-- <div class="social-list"></div> -->

                                    </div>
                                </div>

                                <div class="route-info__columns-wrapper">
                                    <div class="route-info __column __column1">


                                        <div class="route-info__item __route-info-indent">
                                            <div class="route-info__item-title">
                                                <h4>Регион</h4>
                                            </div>
                                            <div class="route-info__item-text">
                                                <span>подмосковье (река Клязьма )</span>
                                                <a href="#" class="text-colored">(все походы в этом регионе)</a>
                                            </div>

                                        </div>
                                        <div class="route-info__item __route-info-indent">
                                            <div class="route-info__item-title">
                                                <h4>Нитка</h4>
                                            </div>
                                            <div class="route-info__item-text __small-size">
                                                <span>Москва – Усад –Омутище – Москва</span>
                                            </div>
                                        </div>
                                        <div class="route-info__item __route-info-indent">
                                            <div class="route-info__item-title">
                                                <h4>Длинна</h4>
                                            </div>
                                            <div class="route-info__item-text">
                                                <span>28 км.</span>
                                            </div>
                                        </div>
                                        <div class="route-info__item __route-info-indent">
                                            <div class="route-info__item-title">
                                                <h4>Длительность</h4>
                                            </div>
                                            <div class="route-info__item-text">
                                                <span>2 дня / 2 ночи</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="route-info __column __column2">

                                        <div class="route-info__item __route-info-indent">
                                            <div class="route-info__item-title">
                                                <h4>Участвие с детьми</h4>
                                            </div>
                                            <div class="route-info__item-text __small-size">
                                                <span>Можно взять с собой детей от 3-х лет</span>
                                            </div>
                                        </div>
                                        <div class="route-info__item __route-info-indent">
                                            <div class="route-info__item-title">
                                                <h4>Размер группы</h4>
                                            </div>
                                            <div class="route-info__item-text __small-size">
                                                <span>От 9 до 18 человек</span>
                                            </div>
                                        </div>

                                        <div class="btn-watch-video click-to-video __routes-info">
                                            <a href="#" class="main-section__title-wrapper __info-about-us">
                                                <div class="btn-watch-video__text">
                                                    <span>Походная баня !</span>
                                                </div>
                                                <div class="secondary-title __main-sub-decor __secondary-colored __btn-watch-video">
                                                <div class="wrapper __decor __watch-p-left __watch-m-left">
                                                    <span class="">Узнать больше</span>
                                                </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>


                            </div>







                            <div class="content-block __routes-info __mobile">
                                <div class="wrapper __routes-info">
                                    <!-- <div class="left-block __routes-info">
                                        <div class="content-block __routes-info-image">
                                            <picture class="content-block__picture __routes-info">
                                                <img src="<?php echo bloginfo( 'template_url'); ?>/assets/img/routes-info-bg.png" alt="forrest image">
                                            </picture>
                                        </div>
                                    </div> -->
                                    <div class="right-block __routes-info">
                                        <!-- <div class="route-info __column __column1"> -->

                                        <div class="route-info__item __route-info-indent __difficulty">
                                            <div class="route-info__item-title">
                                                <h4>Сложность</h4>
                                            <div class="appear-prompt">Легкий опыт не требуется</div>
                                            </div>
                                            <div class="route-info__item-text">
                                                <span class="difficulty __decor">3 / 10</span>
                                            </div>

                                        </div>
                                        <div class="route-info__item __route-info-indent">
                                            <div class="route-info__item-title">
                                                <h4>Регион</h4>
                                            </div>
                                            <div class="route-info__item-text">
                                                <span>подмосковье (река Клязьма )</span>
                                                <a href="#" class="text-colored">(все походы в этом регионе)</a>
                                            </div>

                                        </div>
                                        <div class="route-info__item __route-info-indent">
                                            <div class="route-info__item-title">
                                                <h4>Нитка</h4>
                                            </div>
                                            <div class="route-info__item-text __small-size">
                                                <span>Москва – Усад –Омутище – Москва</span>
                                            </div>
                                        </div>
                                        <div class="route-info__item __route-info-indent">
                                            <div class="route-info__item-title">
                                                <h4>Длинна</h4>
                                            </div>
                                            <div class="route-info__item-text">
                                                <span>28 км.</span>
                                            </div>
                                        </div>
                                        <div class="route-info__item __route-info-indent">
                                            <div class="route-info__item-title">
                                                <h4>Длительность</h4>
                                            </div>
                                            <div class="route-info__item-text">
                                                <span>2 дня / 2 ночи</span>
                                            </div>
                                        </div>
                                        <div class="route-info__item __route-info-indent">
                                            <div class="route-info__item-title">
                                                <h4>Размер группы</h4>
                                            </div>
                                            <div class="route-info__item-text __small-size">
                                                <span>От 9 до 18 человек</span>
                                            </div>
                                        </div>

                                        <div class="route-info__item __route-info-indent">
                                            <div class="route-info__item-title">
                                                <h4>Участвие с детьми</h4>
                                            </div>
                                            <div class="route-info__item-text __small-size">
                                                <span>Можно взять с собой детей от 3-х лет</span>
                                            </div>
                                        </div>
                                        <!-- </div> -->
                                    </div>
                                </div>
                                <div class="btn-watch-video click-to-video __routes-info">
                                    <a href="#" class="main-section__title-wrapper __info-about-us">
                                        <div class="btn-watch-video__text">
                                            <span>Походная баня !</span>
                                        </div>
                                        <div class="secondary-title __main-sub-decor __secondary-colored __btn-watch-video">
                                        <div class="wrapper __decor __watch-p-left __watch-m-left">
                                            <span class="">Узнать больше</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>


                            </div>
                            <div class="cards-wrapper __routes-info">
                                <div class="card-item __mar-left--mobile">

                                    <div class="secondary-title __secondary-colored __card-item-title-indent">
                                        <div class="wrapper __decor __padding-right __margin-right">
                                            <span>Инструктор</span>
                                        </div>
                                    </div>

                                    <div class="card-info__wrapper">
                                        <picture class="card-item__picture">
                                            <img src="<?php echo bloginfo( 'template_url'); ?>/assets/img/instructor.png" alt="инструктор фото">
                                        </picture>
                                        <div class="card-info">
                                            <div class="card-info__title">
                                                <h4>Алексей</h4>
                                            </div>
                                            <div class="card-info__content">
                                                <div class="card-info__text">
                                                    Влюблен в Норвегию и горнолыжный спорт. С ним в любом походе будет интересно и
                                                    безопасно.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-item __smaller __indent __zero-left-indent">
                                    <div class="secondary-title __secondary-colored __coordinator">
                                    <div class="wrapper __decor __padding-right __margin-right">
                                        <span>Координатор</span>
                                        </div>
                                    </div>

                                    <div class="card-info__wrapper">
                                        <picture class="card-item__picture">
                                            <img src="<?php echo bloginfo( 'template_url'); ?>/assets/img/coordinator.png" alt="координатор фото">
                                        </picture>
                                        <div class="card-info">
                                            <div class="card-info__title">
                                                <h4>Оксана</h4>
                                            </div>
                                            <div class="card-info__content">
                                                <div class="phone-number __default __indent">
                                                    <a href="tel:<?php the_field('phone', 9); ?>"
                                                        class="phone-number__link __default"><?php the_field('phone', 9); ?></a>
                                                </div>
                                                <div class="email __default">
                                                    <a href="mailto:<?php the_field('mail', 9); ?>"
                                                        class="email__link __default"><?php the_field('mail', 9); ?></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="btn-secondary-wrapper __routes-info">
                                    <a class="btn-secondary __gallery" href="#gallery"><span>Галерея</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </section>
			<section class="main-section __presentation-info" >
                <div class="container">
                    <div class="main-section__inner __presentation-info">
                        <div class="main-section__title-wrapper __presentation-info">
                            <div class="main-section-title __main-title-indent">
                                <h2>Видеопрезентация </h2>
                            </div>
                            <div class="secondary-title __main-sub-decor __secondary-colored">
                            <div class="wrapper __decor __padding-left __margin-left">
                                <span class="secondary-title-text__indent">по реке Клязьма</span>
                                </div>
                            </div>
                        </div>
                        <div class="main-section__content __presentation-info">
                            <div class="content-block __presentation-info-video">
                                <div class="content-block__picture __presentation-info videopres1">
                                    <a href="#hidden-video-presentation" data-fancybox class="fancybox-link"></a>
                                    <picture>
                                        <img class="content-block__video" src="<?php echo bloginfo( 'template_url'); ?>/assets/img/videopresent.png" alt="forrest ">
                                    </picture>
                                    <div class="modal-video __presentation-info" id="hidden-video-presentation"  style="display: none;">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/LXb3EKWsInQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                                    </div>
                                <picture class="content-block__picture __presentation-info videopres2">
                                    <img class="content-block__photo" src="<?php echo bloginfo( 'template_url'); ?>/assets/img/videopres2.png" alt="forrest ">
                                </picture>
                                <picture class="content-block__picture __presentation-info videopres3">
                                    <img class="content-block__photo" src="<?php echo bloginfo( 'template_url'); ?>/assets/img/videopres3.png" alt="forrest ">
                                </picture>


                            </div>
                            <div class="content-block __presentation-info">
                                <div class="tabs">
                                    <nav class="tabs-triggers">
                                        <a href="#tab_1" class="tabs-triggers__item no-scroll-js tabs-triggers__item--active">Краткая
                                            информация</a>
                                        <a href="#tab_2" class="tabs-triggers__item no-scroll-js">Маршрут</a>
                                        <a href="#tab_3" class="tabs-triggers__item no-scroll-js">FAQ</a>
                                        <a href="#tab_4" class="tabs-triggers__item no-scroll-js">Личное снаряжение</a>
                                    </nav>
                                    <div class="tabs-content __presentation-info">
                                        <div id="tab_1" class="tabs-content__item __short-info">
                                            <p>
                                                В 2020 году программа обновлена, дополнительно мы посетим легендарный остров
                                                Сенья!</p>
                                            <p> Лофотенские острова – красивейшее место на земле! Природа Лофотен – это сотни
                                                островов и огромных скал, возвышающихся над ними. Это узкие проливы, фьорды и
                                                бескрайние просторы Норвежского моря. Это белоснежные пляжи и изумрудная вода. Это
                                                волшебные закаты и горы, окрашенные синей, малиновой, фиолетовой дымкой... Это
                                                место, в котором обязательно стоит побывать.</p>
                                            <p>
                                                Климат и природные явления. Несмотря на то, что архипелаг находится за полярным
                                                кругом, благодаря воздействию Гольфстрима, климат здесь теплее, чем на соседней
                                                материковой Норвегии. Летом пышно цветут цветы, а в садах местных жителей зреют
                                                смородина и малина. В июне-июле белые ночи и полярный день, а в конце августа уже
                                                можно любоваться северным сиянием.Погода на Лофотенах.</p>
                                            <p>
                                                Летом температура воздуха днём может быть от +10°С до +25°С. Ночью может опускаться
                                                до +8-10°С. Лофотены – поистине райское место, но всё же рядом с холодным океаном,
                                                поэтому не стоит забывать о часто меняющейся погоде. Обязательно ответственно
                                                подойдите к выбору личного снаряжения для этого тура!Природа Лофотенских островов
                                                невероятно разнообразная и яркая. Недаром их иногда называют «Затопленными
                                                островами». Как-будто 4000 метровые пики затопило, и остались видны самые вершинки,
                                                а у их подножья раскинулись ярко-зелёные луга и крохотные рыбацкие деревушки.</p>
                                            <p>
                                                Здесь можно встретить снежные горные пики, отвесные скалы, зелёные холмы, заливные
                                                поля, необъятные песчаные пляжи, таинственные фьорды, душистые леса из голубых елей,
                                                мягкие и даже вертикальные болота, чистейшие горные озёра, океан с богатой флорой и
                                                фауной, а водопадам и рекам нет счёта.</p>
                                            </p>
                                        </div>
                                        <div id="tab_2" class="tabs-content__item __short-info">
                                            <p>
                                                Сплав и рафтинг в современном языке давно стали синонимами.</p>
                                            <p>Мы уже организуем сплавы на катамаранах и байдарках, и мы делаем отличные водные
                                                походы!</p>
                                            <p>Мы выбрали лучшие маршруты для Вас, доступные для участников с детьми, до сложнейших
                                                маршрутов 4-5 к.с., на Алтае и в Саянах. Это сплавы по Катуни, Башкаусу, Чулышману,
                                                рекам Жомболок и Ока Саянская. Также у нас множество интересных и доступных каждому
                                                походов на Кольском полуострове, в Карелии, на Кавказе и в Ленобласти.</p>
                                            <p>Мы учим туризму! Мы проводим тренировки на катамаранах и байдарках. Все желающие
                                                участники наших походов могут научиться технике водного туризма и всем премудростям
                                                походной жизни. Как заранее, так и в походе научиться управлять катамараном и
                                                байдаркой на бурной воде, и безопасно проходить пороги и преодолевать себя. Если вы
                                                ходите узнать что такое водные походы, научиться новому и найти новых настоящих
                                                друзей, обращайтесь к нам!</p>
                                            </p>
                                        </div>
                                        <div id="tab_3" class="tabs-content__item __short-info">
                                        <div
                                                    class="secondary-title __main-sub-decor __secondary-colored __faq-block">
                                                    <span class="">Общие вопросы</span>
                                                </div>
                                        <ul class="section-content-list __section-faq ">
                                        <?php
                                                                // параметры по умолчанию
                                            $posts = get_posts( array(
                                                'numberposts' => 5,
                                                'category_name'    => 'faq',
                                                'orderby'     => 'date',
                                                'order'       => 'ASC',
                                                'post_type'   => 'post',
                                                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                                            ) );

                                            foreach( $posts as $post ){
                                                setup_postdata($post);
                                                // формат вывода the_title() ...

                                                ?>



                                            <li class="content__item">
                                                <div class="item-inner">
                                                    <div class="accordion">
                                                        <button ><?php the_title(); ?></button>
                                                        <img class="show-hide-icon hide-icon" src="<?php echo bloginfo( 'template_url'); ?>/assets/img/minus.svg" alt="hide icon">
                                                        <img class="show-hide-icon show-icon" src="<?php echo bloginfo( 'template_url'); ?>/assets/img/plus.svg" alt="show icon">
                                                    </div>

                                                    <div class="panel">
                                                        <div class="item-text">
                                                            <?php the_content(); ?>
                                                        </div>

                                                    </div>
                                                    <!--                        <div class="shadow-wrappper"> </div>-->


                                                    <!--                        <svg width="25" height="27" viewBox="0 0 25 27" fill="none" xmlns="http://www.w3.org/2000/svg">-->
                                                    <!--                            <path d="M13.8553 1C13.8553 0.723858 13.6314 0.5 13.3553 0.5H11.5902C11.3141 0.5 11.0902 0.723858 11.0902 1V21.4146L2.67733 13.0017C2.49041 12.8148 2.19027 12.8057 1.99234 12.9809L0.668562 14.1529C0.565328 14.2443 0.504418 14.3743 0.500231 14.5121C0.496044 14.6499 0.548952 14.7833 0.646447 14.8808L12.1192 26.3536C12.3145 26.5488 12.631 26.5488 12.8263 26.3536L24.2991 14.8808C24.3965 14.7833 24.4495 14.6499 24.4453 14.5121C24.4411 14.3743 24.3802 14.2443 24.2769 14.1529L22.9532 12.9809C22.7552 12.8057 22.4551 12.8148 22.2682 13.0017L13.8553 21.4146V1Z" fill="#00297C" stroke="#00297C" stroke-linejoin="round"/>-->
                                                    <!--                        </svg>-->
                                                </div>


                                            </li>
                                            <?php
                                        }

                                        wp_reset_postdata(); // сброс
                                        ?>

                                            </ul>
                                        </div>
                                        <div id="tab_4" class="tabs-content__item">
                                            <div class="top-block __presentation-info">
                                                <div
                                                    class="secondary-title __main-sub-decor __secondary-colored __presentation-info">
                                                    <span class="">Гитара</span>
                                                </div>
                                                <div class="top-block__text">
                                                    <p>
                                                        Если вы планируете взять гитару, а также умеете на ней играть - обязательно
                                                        сообщите об этом вашему координатору ДО похода. Чтобы в походе не оказалось
                                                        двух (трёх, пяти) гитар. Для гитары надо продумать защиту от дождя (не нужно
                                                        для туров с проживанием в гостинице и на турбазе).
                                                    </p>
                                                </div>

                                            </div>

                                            <div class="lists-wrapper-outer">
                                                <div class="lists-wrapper">

                                                    <div class="list-block">
                                                        <span class="list-block__title">Документы</span>
                                                        <ul class="list __prompt">
                                                            <li class="list__item">Паспорт
                                                                <div class="appear-prompt">Тот, на который куплен билет. Для детей -
                                                                    свидетельство о рождении.</div>
                                                            </li>
                                                            <li class="list__item">
                                                                Полис ОМС
                                                                <div class="appear-prompt">
                                                                    Обязательно! Он действует на всей территории России. Можно
                                                                    оформить дополнительную страховку от травм. При оформлении
                                                                    страховки обязательно сообщите страховой компании, что вы едете
                                                                    в активный или даже экстремальный тур, будете ходить по горам
                                                                    (сплавляться по рекам, кататься на велосипеде – в зависимости от
                                                                    выбранного тура). Если этого не указать – любое происшествие в
                                                                    активном туре оплачиваться страховой компанией не будет.
                                                                </div>
                                                            </li>
                                                            <li class="list__item">Герметичная упаковка для документов
                                                                <div class="appear-prompt">Можно купить, а можно взять плотный п/э
                                                                    пакет на застёжке, по размеру документов.</div>
                                                            </li>
                                                            <li class="list__item">Деньги</li>
                                                        </ul>
                                                    </div>
                                                    <div class="list-block">
                                                        <span class="list-block__title">Обувь</span>
                                                        <ul class="list __prompt">
                                                            <li class="list__item">Сандалии на липучках (туристические)
                                                            </li>
                                                            <li class="list__item">

                                                                Кроссовки
                                                            </li>
                                                            <li class="list__item">Резиновые сапоги</li>
                                                        </ul>
                                                    </div>


                                                </div>

                                                <div class="lists-wrapper __flex-end">
                                                    <div class="list-block">
                                                        <span class="list-block__title">Туристическое</span>
                                                        <ul class="list __prompt">
                                                            <li class="list__item">Рюкзак большой
                                                                <div class="appear-prompt">
                                                                    Для женщин не менее 60 л, для мужчин не менее 90 л. Обязательно
                                                                    с жёсткой спиной, широким поясом на застёжке, регулируемыми по
                                                                    высоте лямками, удобный! Проверьте, чтобы работали все фастексы
                                                                    (застёжки), закрывались молнии, были целые швы. Дома на досуге
                                                                    набейте рюкзак вещами и подгоните под себя все настройки. Старые
                                                                    рюкзаки типа "колобок" не подходят!
                                                                </div>
                                                            </li>
                                                            <li class="list__item">
                                                                Набор посуды<br>
                                                                (кружка, миска, ложка, нож)
                                                                <div class="appear-prompt">Пластик или сталь, не керамика/стекло.
                                                                    Пластиковая
                                                                    посуда не обжигает руки, металлическая легче отмывается , термо
                                                                    - сохраняет горячее (это где-то плюс, а где-то минус), –
                                                                    выбирайте что более по душе. Нож не обязателен.</div>
                                                            </li>
                                                            <li class="list__item">Сидушка<br>
                                                                (пенка для сидения, «подпопник»)</li>
                                                            <li class="list__item">Спальник с t° комфорта -5
                                                                <div class="appear-prompt">Для межсезонья и горных походов летом,
                                                                    желательно типа "кокон".</div>
                                                            </li>
                                                            <li class="list__item">Накидка от дождя на рюкзак
                                                                <div class="appear-prompt">Иногда прилагается к рюкзаку, посмотрите
                                                                    в верхнем кармане или
                                                                    в кармашке на молнии снизу. Вариант: вставляем в рюкзак большой
                                                                    полиэтиленовый пакет + все вещи по пакетам).</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="list-block">
                                                        <span class="list-block__title">Одежда</span>
                                                        <ul class="list __prompt">
                                                            <li class="list__item">Штаны ходовые
                                                            </li>
                                                            <li class="list__item">
                                                                Шорты
                                                            </li>
                                                            <li class="list__item">Футболки 3 шт.</li>
                                                            <li class="list__item">Рубашка с длинным рукавом лёгкая</li>
                                                            <li class="list__item">Тёплый свитер или флиска</li>
                                                            <li class="list__item">Купальник или плавки</li>
                                                            <li class="list__item">Куртка-ветровка</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                    </div>

                                </div>
                                <div class="btn-secondary-wrapper __presentation-info">
                                    <a class="btn-secondary __gallery" href="#gallery"><span>Галерея</span></a>
                                </div>
                                <div class="block-prompt-wrapper __presentation-info">
                                    <img class="block-prompt__bg-img" src="<?php echo bloginfo( 'template_url'); ?>/assets/img/prompt-decor-bg.png" alt="">
                                

                                    <div class="block-prompt __presentation-info">
                                        <div class="top-row __presentation-info">
                                            <div class="secondary-title __main-sub-decor __secondary-colored">
                                            <div class="wrapper __decor __padding-right __margin-right">
                                                <span class="">Подсказки</span>
                                            </div>
                                            </div>
                                            <div class="prompt-subtitle __presentation-info">
                                                От нашей команды
                                            </div>
                                        </div>
                                        <div class="block-prompt-content">
                                            <div class="video-wrapper __presentation-info">
                                            <img class="block-prompt__bg-img2" src="<?php echo bloginfo( 'template_url'); ?>/assets/img/prompt-img-video-bg.png" alt="">

                                                <picture class="video-wrapper__video __presentation-info">
                                                    <img src="<?php echo bloginfo( 'template_url'); ?>/assets/img/video-prompt.png" alt="">
                                                </picture>
                                            </div>
                                            <div class="block-prompt__text">
                                                <p>Наши инструкторы собрали для тебя самые дельные советы со всего
                                                    своего опыта.
                                                    Обязательно посмотри! Тогда ты будешь готов ко всем неожиданностям.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="main-btn-wrapper">
                            <a href="#openModal" class="btn btn-main open-modal-js">
                                Хочу в путешествие
                            </a>
                        </div>
                      
                    </div>

                </div>
                        

            </section>

			<section class="main-section __nearest-trips" id="nearesttrip">
                 <div class="why-we-block">
                            <div class="why-we-block__main-title"> 
                                <span>Почему выбирают нас?</span>
                            </div>
                            <div class="why-we-block__items">
                                <div class="why-we-block__item">
                                    <div class="why-we-block__item-title">
                                        <div class="why-we-block__item-title--decor">
                                            <div class="text-wrapper">
                                                <span>Всё</span>
                                            </div>
                                        </div>
                                        <div class="text-wrapper __subtitle">
                                            <span>просто</span>
                                        </div>
                                    </div>
                                    <div class="why-we-block__item-text">
                                        <p>Путешествия организованы «от и до». Просто выберите приключение.</p>
                                    </div>
                                </div>
                                <div class="why-we-block__item">
                                    <div class="why-we-block__item-title">
                                        <div class="why-we-block__item-title--decor">
                                            <div class="text-wrapper">
                                                <span>Максимум </span>
                                            </div>
                                        </div>
                                        <div class="text-wrapper __subtitle">
                                            <span>впечатлений</span>
                                        </div>
                                    </div>
                                    <div class="why-we-block__item-text">
                                        <p>Мы знаем, чем вас удивить. Проведём через максимум красивых мест.</p>
                                    </div>
                                </div>
                                <div class="why-we-block__item">
                                    <div class="why-we-block__item-title">
                                        <div class="why-we-block__item-title--decor">
                                            <div class="text-wrapper">
                                                <span>Всё</span>
                                            </div>
                                        </div>
                                        <div class="text-wrapper __subtitle">
                                            <span>для вас</span>
                                        </div>
                                    </div>
                                    <div class="why-we-block__item-text">
                                        <p>Выберите из 642 захватывающих путешествий.  Вы точно найдёте что-то своё.</p>
                                    </div>
                                </div>
                                <div class="why-we-block__item">
                                    <div class="why-we-block__item-title">
                                    <div class="text-wrapper __subtitle">
                                            <span>Вы нам </span>
                                        </div>
                                        <div class="why-we-block__item-title--decor">
                                            <div class="text-wrapper">
                                                <span>важны</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="why-we-block__item-text">
                                        <p>Мы заботимся о том, чтобы вам было с нами комфортно, 
                                            хорошо и уютно. Мы всегда собираем обратную связь и интересуемся вашим мнением.</p>
                                    </div>
                                </div>
                                <div class="why-we-block__item">
                                    <div class="why-we-block__item-title">
                                    <div class="text-wrapper __subtitle">
                                            <span>С нами</span>
                                        </div>
                                        <div class="why-we-block__item-title--decor">
                                            <div class="text-wrapper">
                                                <span>надёжно</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="why-we-block__item-text">
                                        <p>Все наши походы тщательно продуманы и спланированы. 
                                            Мы вас не бросим и поможем разобраться в любой ситуации.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <div class="nearest-trips__bg">
                        <picture>
                            <img src="<?php echo bloginfo( 'template_url'); ?>/assets/img/guitar-girl.png" alt="">
                        </picture>
                    </div>
                    <div class="container">
                        <div class="main-section__inner __nearest-trips">

                            <div class="main-section__title-wrapper ">
                                <div class="main-section-title __main-title-indent">
                                    <h2>Ближайшие походы</h2>
                                </div>
                                <div class="secondary-title __main-sub-decor __secondary-colored">
                                    <div class="wrapper __decor __padding-left __margin-left">
                                        <span class="secondary-title-text__indent">по реке Клязьма</span>
                                    </div>
                                </div>
                            </div>
                            <div class="main-section__content __nearest-trips">
                                <div class="content-block __nearest-trips __trips-table">

                                    <div class="rows-wrapper dir-column __nearest-trips">


                                        <div class="row row1 __nearest-trips">
                                            <div class="row-item month">
                                                <span>Сроки без дороги</span>
                                            </div>
                                            <div class="row-item person">
                                                <span>Инструктор</span>
                                            </div>
                                            <div class="row-item seats">
                                                <span>Количество мест</span>
                                            </div>
                                            <div class="row-item price">
                                                <span>Цена</span>
                                            </div>
                                            <div class="row-item request">
                                                <span>Заявка</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=" btn max-w-100 month-btn">
                                        май 2021
                                    </div>
                                    <div class="rows-wrapper dir-column __nearest-trips">
                                    <?php
                                                                // параметры по умолчанию
                                            $posts = get_posts( array(
                                                'numberposts' => 5,
                                                'category_name'    => 'tours',
                                                'orderby'     => 'date',
                                                'order'       => 'ASC',
                                                'post_type'   => 'post',
                                                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                                            ) );

                                            foreach( $posts as $post ){
                                                setup_postdata($post);
                                                // формат вывода the_title() ...

                                                ?>
                                                <div class="row row2 __nearest-trips ">
                                            <div class="row-item month">
                                                <span class="row-item__text--mobile">Сроки без дороги</span>
                                                <span><?php the_field('duration_without_ride') ?></span>
                                            </div>
                                            <div class="row-item person">

                                                <span><?php the_field('instruktor') ?></span>
                                            </div>
                                            <div class="row-item seats">
                                                <span class="row-item__text--mobile"> Количество мест
                                                </span>
                                                <span>
                                                    <!-- <span> 5 </span> / <span> 15 </span></span> -->
                                                    <span><?php the_field('count_seats') ?></span>
                                            </div>
                                            <div class="row-item price">
                                                <span class="row-item__text--mobile"> Цена
                                                </span>
                                                <span class="price-text"> 
                                                <!-- <span> 37 000 ₽ </span>/ <span> 38 500 ₽</span></span> -->
                                                <span><?php the_field('price') ?></span>
                                            </div>
                                            <div class="row-item request">
                                                <a href="#openModal" class="btn btn-third open-modal-js">Хочу в путешествие</a>
                                            </div>
                                        </div>
                                            <?php
                                        }

                                        wp_reset_postdata(); // сброс
                                        ?>




                                    </div>

                                </div>


                            </div>

                        
                        </div>
                    </div>


            </section>
			<section class="main-section " id="aboutus">
                <div class="container">
        <div class="main-section__inner __our-team">
            <div class="wrapper __our-team--row-1">
                <picture class="our-team-photo--desktop">
                    <img src="<?php echo bloginfo( 'template_url'); ?>/assets/img/our-team.png" alt="">
                </picture>
                <div class="block-wrapper __our-team">
                    <div class="main-section__title-wrapper  __our-team">
                        <div class="main-section-title __main-title-indent">
                            <h2>О нашей команде</h2>
                        </div>
                        <div class="secondary-title __main-sub-decor __secondary-colored">
                        <div class="wrapper __decor __padding-left __margin-left">
                            <span class="secondary-title-text__indent">Наши создатели</span>
                            </div>
                        </div>
                    </div>
                    <picture class="our-team-photo--mobile">
                        <img src="<?php echo bloginfo( 'template_url'); ?>/assets/img/our-team.png" alt="">
                    </picture>
                    <div class="content-text __our-team">
                        <p>Основателями и создателя компании МультиПутишествия являються Алексей Сурин и Данила
                            Морковецев. 20 год выдался, сложным и интересным. Границы на замке, а отдыхать от привычных
                            будней, атмосферы больших городов необходим. Получать новые впечатления, эмоции и прочее.
                        </p>
                        <p>
                            Инструкторы, с которыми вы можете отправиться в путешествие, прошли множество походов и
                            специальную подготовку. Это опытные путешественники, увлеченные и творческие люди, для
                            которых походы любого типа, в горы и не только, являются любимым делом и важной частью
                            жизни. Они познакомят вас с секретами туристского быта, расскажут о природе и
                            достопримечательностях маршрута, окажут поддержку и всю необходимую помощь, помогут
                            организовать в группе комфортную психологическую обстановку.Инструкторы, с которыми вы
                            можете отправиться в путешествие, прошли множество походов и специальную подготовку.</p>
                    </div>
                </div>
            </div>
            <div class="wrapper __our-team--row-2">
                <div class="block-wrapper __stories-videos">
                    <div class="main-section__title-wrapper">

                        <div class="secondary-title __main-sub-decor __secondary-colored __our-team-videos">
                            <div class="wrapper __decor __our-team-videos">
                                <span class="secondary-title-text__indent __our-team-videos">Истории создателей!</span>
                                </div>
                            </div>
                        </div>
                    <div class="block-wrapper __our-team-videos">
                        <div class="video-block video1">
                            <picture>
                                <img src="<?php echo bloginfo( 'template_url'); ?>/assets/img/our-team.png" alt="">
                            </picture>
                        </div>
                        <div class="video-block video2">
                            <picture>
                                <img src="<?php echo bloginfo( 'template_url'); ?>/assets/img/our-team.png" alt="">
                            </picture>
                        </div>
                        <div class="social-block __our-team">
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
                <div class="block-wrapper __our-team-members">
                    <div class="cards-wrapper __our-team-members">
                        <div class="card-item __our-team-members">
                            <div
                                class="secondary-title __secondary-colored __card-item-title-indent __our-team-members">
                                <div class="wrapper __decor __padding-right __margin-right">
                                <span>Максим</span>
                                </div>
                            </div>

                            <div class="card-info__wrapper">
                                <picture class="card-item__picture __our-team-members">
                                    <img src="<?php echo bloginfo( 'template_url'); ?>/assets/img/team-max.png" alt="команда фото">
                                </picture>
                                <div class="card-info">

                                    <div class="card-info__content">
                                        <div class="card-info__text">
                                            Не представляю себя без воды и постоянного движения. Мне нравится свобода во
                                            всех ее проявлениях - в наше время не всем доступное удовольствие.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-item __our-team-members __smaller __indent">
                            <div class="secondary-title __secondary-colored __coordinator __our-team-members">
                            <div class="wrapper __decor __padding-right __margin-right">
                                <span>Алексей</span>
                                </div>
                            </div>

                            <div class="card-info__wrapper">
                                <picture class="card-item__picture __our-team-members">
                                    <img src="<?php echo bloginfo( 'template_url'); ?>/assets/img/team-alex.png" alt="команда фото">

                                </picture>
                                <div class="card-info">

                                    <div class="card-info__content">
                                        <div class="card-info__text">
                                            Не представляю себя без воды и постоянного движения. Мне нравится свобода во
                                            всех ее проявлениях - в наше время не всем доступное удовольствие.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>


</section>

<section class="main-section __nearest-trips" id="nearesttrip">

                    <div class="our-advantages__bg">
                        <picture>
                            <img src="<?php echo bloginfo( 'template_url'); ?>/assets/img/our-advantages-bg.png" alt="">
                        </picture>
                    </div>
                    <div class="container">
                        <div class="main-section__inner __nearest-trips">

                            <div class="main-section__title-wrapper ">
                                <div class="main-section-title __main-title-indent">
                                    <h2>Наши преимущества</h2>
                                </div>
                                <div class="secondary-title __main-sub-decor __secondary-colored">
                                    <div class="wrapper __decor __padding-left __margin-left">
                                        <span class="secondary-title-text__indent">Все для вас!</span>
                                    </div>
                                </div>
                            </div>
                            <div class="main-section__content __our-advantages">
                            <div class="why-we-block__items __advantages-item ">
                                <div class="why-we-block__item __advantages-item">
                                    <div class="main-section__title-wrapper __our-advantages ">
                                        <div class="main-section-title __main-title-indent __advantages-item-title">
                                            <h2>Если у вас изменятся планы</h2>
                                        </div>
                                        <div class="secondary-title __main-sub-decor __secondary-colored __advantages-item-subtitle">
                                            <div class="wrapper __decor __padding-left __margin-left __our-advantages ">
                                                <span class="secondary-title-text__indent">ничего страшного!</span>
                                            </div>
                                        </div>
                                     </div>
                                    <div class="why-we-block__item-text __advantages-item-text">
                                        <p>Вы сможете скорректировать сроки путешествия или перенести свою заявку на
                                             другую программу. Просто сообщите об этом за 10 дней, и вся сумма предоплаты будет сохранена.</p>
                                    </div>
                                </div>
                                <div class="why-we-block__item __advantages-item">
                                    <div class="main-section__title-wrapper __our-advantages ">
                                        <div class="main-section-title __main-title-indent __advantages-item-title">
                                            <h2>Предоплата всего </h2>
                                        </div>
                                        <div class="secondary-title __main-sub-decor __secondary-colored __advantages-item-subtitle">
                                            <div class="wrapper __decor __padding-left __margin-left __our-advantages">
                                                <span class="secondary-title-text__indent">20-25%</span>
                                            </div>
                                        </div>
                                     </div>
                                    <div class="why-we-block__item-text __advantages-item-text">
                                        <p>Что вы получаете: за вами сразу закрепляется место в группе, и если с 
                                            приближением путешествия стоимость участия повысится, для вас она останется прежней! </p>
                                    </div>
                                </div>
                                <div class="why-we-block__item __advantages-item">
                                    <div class="main-section__title-wrapper __our-advantages ">
                                        <div class="main-section-title __main-title-indent __advantages-item-title">
                                            <h2>Нам важно </h2>
                                        </div>
                                        <div class="secondary-title __main-sub-decor __secondary-colored __advantages-item-subtitle">
                                            <div class="wrapper __decor __padding-left __margin-left __our-advantages">
                                                <span class="secondary-title-text__indent">ваше мнение!</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="why-we-block__item-text __advantages-item-text">
                                        <p>После путешествия мы связываемся со всеми участниками, чтобы получить обратную связь.
                                             Нам важно убедиться, что вы довольны. И важно узнать, что вы посоветуете улучшить. 
                                             Это помогает при следующих путешествиях.</p>
                                    </div>
                                </div>
                                <div class="why-we-block__item __advantages-item">
                                <div class="main-section__title-wrapper __our-advantages ">
                                        <div class="main-section-title __main-title-indent __advantages-item-title">
                                            <h2>Мы всё упростили  </h2>
                                        </div>
                                        <div class="secondary-title __main-sub-decor __secondary-colored __advantages-item-subtitle">
                                            <div class="wrapper __decor __padding-left __margin-left __our-advantages">
                                                <span class="secondary-title-text__indent">для вас!</span>
                                            </div>
                                        </div>
                                     </div>
                                    <div class="why-we-block__item-text __advantages-item-text">
                                        <p>Не нужно ехать подписывать договор или сканировать документы – на нашем сайте действует публичная оферта. 
                                            У нас удобные способы оплаты, и есть оплата на сайте.</p>
                                    </div>
                                </div>
                                <div class="why-we-block__item __advantages-item">
                                <div class="main-section__title-wrapper __our-advantages ">
                                        <div class="main-section-title __main-title-indent __advantages-item-title">
                                            <h2>Мы уверены что </h2>
                                        </div>
                                        <div class="secondary-title __main-sub-decor __secondary-colored __advantages-item-subtitle">
                                            <div class="wrapper __decor __padding-left __margin-left __our-advantages">
                                                <span class="secondary-title-text__indent">вам понравится!</span>
                                            </div>
                                        </div>
                                     </div>
                                    <div class="why-we-block__item-text __advantages-item-text">
                                        <p>Всё будет именно так, как написано на сайте. Если ваше доверие не будет оправдано, вам вернут деньги.</p>
                                    </div>
                                </div>
                            </div>


                            </div>

                        
                        </div>
                    </div>


            </section>


			<section class="main-section" id="gallery">
    <div class="container">
        <div class="main-section__inner __gallery">
            <div class="main-section__title-wrapper __gallery">
                <div class="main-section-title __main-title-indent">
                    <h2>Галерея наших маршрутов</h2>
                </div>
                <div class="secondary-title __main-sub-decor __secondary-colored">
                <div class="wrapper __decor __padding-left __margin-left">
                    <span class="secondary-title-text__indent __gallery">Только яркие эмоции!</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="main-section__content __routes-info"> -->

    <div class="slider slider-gallery">

        <div class="content-block slider-item __gallery">
            <a href="<?php echo bloginfo( 'template_url'); ?>/assets/img/slider-item1.png" data-fancybox="gallery">
            <picture class="content-block__picture __gallery">
                <img src="<?php echo bloginfo( 'template_url'); ?>/assets/img/slider-item1.png" alt="forrest image">
            </picture>
            </a>
            <!-- <iframe width="560" height="315" data-lazy="https://www.youtube.com/embed/IUN664s7N-c"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe> -->
        </div>

        <div class="content-block slider-item __gallery">
            <a href="<?php echo bloginfo( 'template_url'); ?>/assets/img/slider-item1.png" data-fancybox="gallery">
            <picture class="content-block__picture __gallery">
                <img src="<?php echo bloginfo( 'template_url'); ?>/assets/img/slider-item1.png" alt="forrest image">
            </picture>
            </a>
            <!-- <iframe width="560" height="315" data-lazy="https://www.youtube.com/embed/IUN664s7N-c"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe> -->
        </div>
        <div class="content-block slider-item __gallery">
            <a href="<?php echo bloginfo( 'template_url'); ?>/assets/img/slider-item2.png" data-fancybox="gallery">
            <picture class="content-block__picture __gallery">
                <img src="<?php echo bloginfo( 'template_url'); ?>/assets/img/slider-item2.png" alt="forrest image">
            </picture>
            </a>
            <!-- <iframe width="560" height="315" data-lazy="https://www.youtube.com/embed/IUN664s7N-c"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe> -->
        </div>
        <div class="content-block slider-item __gallery">
            <a href="<?php echo bloginfo( 'template_url'); ?>/assets/img/slider-item3.png" data-fancybox="gallery">
            <picture class="content-block__picture __gallery">
                <img src="<?php echo bloginfo( 'template_url'); ?>/assets/img/slider-item3.png" alt="forrest image">
            </picture>
            </a>
            <!-- <iframe width="560" height="315" data-lazy="https://www.youtube.com/embed/IUN664s7N-c"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe> -->
        </div>
        <div class="content-block slider-item __gallery">
            <a href="<?php echo bloginfo( 'template_url'); ?>/assets/img/slider-item4.png" data-fancybox="gallery">
            <picture class="content-block__picture __gallery">
                <img src="<?php echo bloginfo( 'template_url'); ?>/assets/img/slider-item4.png" alt="forrest image">
            </picture>
            </a>
            <!-- <iframe width="560" height="315" data-lazy="https://www.youtube.com/embed/IUN664s7N-c"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe> -->
        </div>
        <div class="content-block slider-item __gallery">
            <a href="<?php echo bloginfo( 'template_url'); ?>/assets/img/slider-item5.png" data-fancybox="gallery">
            <picture class="content-block__picture __gallery">
                <img src="<?php echo bloginfo( 'template_url'); ?>/assets/img/slider-item5.png" alt="forrest image">
            </picture>
            </a>
            <!-- <iframe width="560" height="315" data-lazy="https://www.youtube.com/embed/IUN664s7N-c"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe> -->
        </div>
        <div class="content-block slider-item __gallery">
            <a href="<?php echo bloginfo( 'template_url'); ?>/assets/img/slider-item6.png" data-fancybox="gallery">
            <picture class="content-block__picture __gallery">
                <img src="<?php echo bloginfo( 'template_url'); ?>/assets/img/slider-item6.png" alt="forrest image">
            </picture>
            </a>
            <!-- <iframe width="560" height="315" data-lazy="https://www.youtube.com/embed/IUN664s7N-c"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe> -->
        </div>
        <div class="content-block slider-item __gallery">
            <a href="<?php echo bloginfo( 'template_url'); ?>/assets/img/slider-item7.png" data-fancybox="gallery">
            <picture class="content-block__picture __gallery">
                <img src="<?php echo bloginfo( 'template_url'); ?>/assets/img/slider-item7.png" alt="forrest image">
            </picture>
            </a>
            <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/IUN664s7N-c"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe> -->
        </div>
        <div class="content-block slider-item __gallery">
            <a href="<?php echo bloginfo( 'template_url'); ?>/assets/img/slider-item6.png" data-fancybox="gallery">
            <picture class="content-block__picture __gallery">
                <img src="<?php echo bloginfo( 'template_url'); ?>/assets/img/slider-item6.png" alt="forrest image">
            </picture>
            </a>
            <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/IUN664s7N-c"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe> -->
        </div>
        <div class="content-block slider-item __gallery">
            <a href="<?php echo bloginfo( 'template_url'); ?>/assets/img/slider-item7.png" data-fancybox="gallery">
            <picture class="content-block__picture __gallery">
                <img src="<?php echo bloginfo( 'template_url'); ?>/assets/img/slider-item7.png" alt="forrest image">
            </picture>
            </a>
            <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/IUN664s7N-c"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe> -->
        </div>
        <div class="content-block slider-item __gallery">
            <a href="<?php echo bloginfo( 'template_url'); ?>/assets/img/slider-item7.png" data-fancybox="gallery">
            <picture class="content-block__picture __gallery">
                <img src="<?php echo bloginfo( 'template_url'); ?>/assets/img/slider-item7.png" alt="forrest image">
            </picture>
            </a>
            <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/IUN664s7N-c"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe> -->
        </div>
        <div class="content-block slider-item __gallery">
            <a href="<?php echo bloginfo( 'template_url'); ?>/assets/img/slider-item6.png" data-fancybox="gallery">
            <picture class="content-block__picture __gallery">
                <img src="<?php echo bloginfo( 'template_url'); ?>/assets/img/slider-item6.png" alt="forrest image">
            </picture>
            </a>
            <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/IUN664s7N-c"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe> -->
        </div>
        <div class="content-block slider-item __gallery">
            <a href="<?php echo bloginfo( 'template_url'); ?>/assets/img/slider-item7.png" data-fancybox="gallery">
            <picture class="content-block__picture __gallery">
                <img src="<?php echo bloginfo( 'template_url'); ?>/assets/img/slider-item7.png" alt="forrest image">
            </picture>
            </a>
            <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/IUN664s7N-c"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe> -->
        </div>
        <div class="content-block slider-item __gallery">
            <a href="<?php echo bloginfo( 'template_url'); ?>/assets/img/slider-item7.png" data-fancybox="gallery">
            <picture class="content-block__picture __gallery">
                <img src="<?php echo bloginfo( 'template_url'); ?>/assets/img/slider-item7.png" alt="forrest image">
            </picture>
            </a>
            <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/IUN664s7N-c"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe> -->
        </div>
        <div class="content-block slider-item __gallery">
            <a href="<?php echo bloginfo( 'template_url'); ?>/assets/img/slider-item6.png" data-fancybox="gallery">
            <picture class="content-block__picture __gallery">
                <img src="<?php echo bloginfo( 'template_url'); ?>/assets/img/slider-item6.png" alt="forrest image">
            </picture>
            </a>
            <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/IUN664s7N-c"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe> -->
        </div>
        <div class="content-block slider-item __gallery">
            <a href="<?php echo bloginfo( 'template_url'); ?>/assets/img/slider-item7.png" data-fancybox="gallery">
            <picture class="content-block__picture __gallery">
                <img src="<?php echo bloginfo( 'template_url'); ?>/assets/img/slider-item7.png" alt="forrest image">
            </picture>
            </a>
            <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/IUN664s7N-c"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe> -->
        </div>


    </div>
    <!-- <div class="content-block __routes-info-column-dir">
                    <div class="top-row __routes-info">
                        <div class="top-row__item __route-info-indent">
                            <div class="top-row__item-title">
                                <h4>Сложность</h4>
                            </div>
                            <div class="top-row__item-text">
                                <span class="difficulty __decor">3 / 10</span>
                            </div>
                        </div>

                        <div class="top-row__item __route-info-indent">
                            <a class="reviews-link __routes-info-indent" href="#">30 отзывов
                            </a>
                            <span class="rating">4,9</span>

                        </div>
                    </div>

                    <div class="route-info__columns-wrapper">
                        <div class="route-info __column __column1">


                            <div class="route-info__item __route-info-indent">
                                <div class="route-info__item-title">
                                    <h4>Регион</h4>
                                </div>
                                <div class="route-info__item-text">
                                    <span>подмосковье (река Клязьма )</span>
                                    <a href="#" class="text-colored">(все походы в этом регионе)</a>
                                </div>

                            </div>
                            <div class="route-info__item __route-info-indent">
                                <div class="route-info__item-title">
                                    <h4>Нитка</h4>
                                </div>
                                <div class="route-info__item-text __small-size">
                                    <span>Москва – Усад –Омутище – Москва</span>
                                </div>
                            </div>
                            <div class="route-info__item __route-info-indent">
                                <div class="route-info__item-title">
                                    <h4>Длинна</h4>
                                </div>
                                <div class="route-info__item-text">
                                    <span>28 км.</span>
                                </div>
                            </div>
                            <div class="route-info__item __route-info-indent">
                                <div class="route-info__item-title">
                                    <h4>Длительность</h4>
                                </div>
                                <div class="route-info__item-text">
                                    <span>2 дня / 2 ночи</span>
                                </div>
                            </div>
                        </div>
                        <div class="route-info __column __column2">

                            <div class="route-info__item __route-info-indent">
                                <div class="route-info__item-title">
                                    <h4>Участвие с детьми</h4>
                                </div>
                                <div class="route-info__item-text __small-size">
                                    <span>Можно взять с собой детей от 3-х лет</span>
                                </div>
                            </div>
                            <div class="route-info__item __route-info-indent">
                                <div class="route-info__item-title">
                                    <h4>Размер группы</h4>
                                </div>
                                <div class="route-info__item-text __small-size">
                                    <span>От 9 до 18 человек</span>
                                </div>
                            </div>


                        </div>
                    </div>

                </div> -->

    <!-- </div> -->




</section>
			<section class="main-section " id="findus">
    <div class="container">
        <div class="main-section__inner __trainee-benefits" id="trainee">
            <div class="wrapper __our-team--row-1">
                <div class="block-wrapper __trainee-benefits">
                    <div class="main-section__title-wrapper ">
                        <div class="main-section-title __main-title-indent">
                            <h2>Новичку</h2>
                        </div>
                    </div>
                    <div class="content-text __trainee-benefits">
                        <p>Клубную Карту получают все участники наших походов продолжительностью более 5 дней, а также
                            участники 5 походов выходного дня.
                        </p>

                    </div>

                    <div class="list-block __trainee-benefits">
                        <div class="list-block__title __trainee-benefits">
                            <h4>По Клубной карте предоставляется:</h4>
                        </div>
                        <div class="list-wrapper __trainee-benefits">
                            <ul class="list __trainee-benefits">
                                <li class="list__item __trainee-benefits">при стоимости участия свыше 15 тыс.руб. размер
                                    скидки составляет 1500 руб.</li>
                                <li class="list__item __trainee-benefits">при стоимости участия до 15 тыс.руб. скидка
                                    10%</li>
                                <li class="list__item __trainee-benefits">скидка по клубной карте не суммируется с
                                    детской скидкой (детям до 12 лет включительно предоставляется скидка 20%, не
                                    зависимо от наличия клубной карты, максимальный размер детской скидки составляет
                                    3000 руб.)</li>
                                <li class="list__item __trainee-benefits">скидка предоставляется только владельцу
                                    Клубной Карты.</li>
                                <li class="list__item __trainee-benefits">на первый поход скидка не распространяется.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="btn-watch-video click-to-video __info-about-us">
                        <a href="#" class="main-section__title-wrapper __info-about-us">
                            <div class="btn-watch-video__text">
                                <span>Узнай больше !</span>
                            </div>
                            <div class="secondary-title __main-sub-decor __secondary-colored __btn-watch-video">
                            <div class="wrapper __decor __watch-p-left __watch-m-left">
                                <span class="">Смотреть</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="block-wrapper __our-location">
                    <div class="main-section__title-wrapper __info-about-us">
                        <div class="main-section-title __main-title-indent">
                            <h2>Как нас найти?</h2>
                        </div>
                        <div class="secondary-title __main-sub-decor __secondary-colored">
                        <div class="wrapper __decor __padding-left __margin-left">
                            <span class="secondary-title-text__indent">Мы ждём вас!</span>
                            </div>
                        </div>
                    </div>
                    <div class="location-block __our-location">
                        <div class="city-location">
                            <span>Санкт-Петербург, Большой Сампсониевский пр., д. 7, первый этаж</span>
                        </div>
                        <div class="schedule">
                            <div class="schedule__title">
                                <h4>График работы:</h4>
                            </div>
                            <div class="schedule__text">
                                <span>ПН-ПТ - с 11:00 до 19:00,</span>
                                <span> перерыв на обед с 14:00 до 14:30.</span>
                                <span> СБ, ВС - выходной</span>
                            </div>
                        </div>
                    </div>
                    <div class="map">
                        <!-- <img src="<?php echo bloginfo( 'template_url'); ?>/assets/img/map.png" alt=""> -->
                        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A6224fd34d69bf910273a605c9b248b556149f6ed588a987b52bc64451fb4d205&amp;source=constructor" width="624" height="240" frameborder="0"></iframe>
                    </div>
                    <div class="main-btn-wrapper __info-about-us">
                        <a href="
                        <?php the_field('maps-link') ?>" class="btn btn-third" target="_blank">
                            проложить маршрут
                        </a>
                    </div>
                </div>
            </div>
            <div class="wrapper __our-team--row-2">
                <div class="block-wrapper __info-about-us">

                    <div class="social-block __info-about-us">
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
    

</section>
			<section class="main-section " id="reviews">
    <!-- <div class="container"> -->
    <div class="main-section__inner __reviews-form">

        <div class="block-wrapper __reviews">
            <div class="main-section__title-wrapper __slider-reviews">
                <div class="inner __slider-reviews">
                    <div class="main-section-title __main-title-indent __reviews">
                        <h2>Отзывы</h2>
                    </div>
                    <div class="secondary-title __main-sub-decor __secondary-colored __reviews">
                            <div class="wrapper __decor __padding-left __margin-left __reviews">
                                <span class="secondary-title-text__indent">О нас</span>
                            </div>
                    </div>
                </div>
                    <div class="video-reviews __desktop">
                        <div class="main-section__title-wrapper __video-reviews">
                            <a class="inner-wrapper __video-reviews" href="#">
                                <div class="main-section-title __video-reviews">
                                    <span>Видео отзывы на нашем канале </span>
                                </div>
                                <div class="secondary-title __main-sub-decor __secondary-colored __video-reviews">
                                <div class="wrapper __decor __video-reviews __padding-left">
                                    <span class="secondary-title-text__indent __video-reviews">Смотреть</span>
                                </div>
                                </div>
                            </a>
                    </div>

                </div>
            </div>


            <div class="slider slider-reviews ">

                <div class="slider-item">
                    <a href="<?php echo bloginfo( 'template_url'); ?>/assets/img/review-1.png" data-fancybox="gallery">
                    <picture>
                        <img src="<?php echo bloginfo( 'template_url'); ?>/assets/img/review-1.png" alt="">
                    </picture>
                    </a>
                </div>
                <div class="slider-item">
                    <a href="<?php echo bloginfo( 'template_url'); ?>/assets/img/review-2.png" data-fancybox="gallery">
                    <picture>
                        <img src="<?php echo bloginfo( 'template_url'); ?>/assets/img/review-2.png" alt="">
                    </picture>
                    </a>
                </div>
                <div class="slider-item">
                    <a href="<?php echo bloginfo( 'template_url'); ?>/assets/img/review-1.png" data-fancybox="gallery">
                    <picture>
                        <img src="<?php echo bloginfo( 'template_url'); ?>/assets/img/review-1.png" alt="">
                    </picture>
                    </a>
                </div>
                <div class="slider-item">
                    <a href="<?php echo bloginfo( 'template_url'); ?>/assets/img/review-2.png" data-fancybox="gallery">
                    <picture>
                        <img src="<?php echo bloginfo( 'template_url'); ?>/assets/img/review-2.png" alt="">
                    </picture>
                    </a>
                </div>
                <div class="slider-item">
                    <a href="<?php echo bloginfo( 'template_url'); ?>/assets/img/review-1.png" data-fancybox="gallery">
                    <picture>
                        <img src="<?php echo bloginfo( 'template_url'); ?>/assets/img/review-1.png" alt="">
                    </picture>
                    </a>
                </div>
                <div class="slider-item">
                    <a href="<?php echo bloginfo( 'template_url'); ?>/assets/img/review-2.png" data-fancybox="gallery">
                    <picture>
                        <img src="<?php echo bloginfo( 'template_url'); ?>/assets/img/review-2.png" alt="">
                    </picture>
                    </a>
                </div>
                <div class="slider-item">
                    <a href="<?php echo bloginfo( 'template_url'); ?>/assets/img/review-1.png" data-fancybox="gallery">
                    <picture>
                        <img src="<?php echo bloginfo( 'template_url'); ?>/assets/img/review-1.png" alt="">
                    </picture>
                    </a>
                </div>
                <div class="slider-item">
                    <a href="<?php echo bloginfo( 'template_url'); ?>/assets/img/review-2.png" data-fancybox="gallery">
                    <picture>
                        <img src="<?php echo bloginfo( 'template_url'); ?>/assets/img/review-2.png" alt="">
                    </picture>
                    </a>
                </div>
                <div class="slider-item">
                    <a href="<?php echo bloginfo( 'template_url'); ?>/assets/img/review-1.png" data-fancybox="gallery">
                    <picture>
                        <img src="<?php echo bloginfo( 'template_url'); ?>/assets/img/review-1.png" alt="">
                    </picture>
                    </a>
                </div>
                <div class="slider-item">
                    <a href="<?php echo bloginfo( 'template_url'); ?>/assets/img/review-2.png" data-fancybox="gallery">
                    <picture>
                        <img src="<?php echo bloginfo( 'template_url'); ?>/assets/img/review-2.png" alt="">
                    </picture>
                    </a>
                </div>
                <div class="slider-item">
                    <a href="<?php echo bloginfo( 'template_url'); ?>/assets/img/review-1.png" data-fancybox="gallery">
                    <picture>
                        <img src="<?php echo bloginfo( 'template_url'); ?>/assets/img/review-1.png" alt="">
                    </picture>
                    </a>
                </div>
                <div class="slider-item">
                    <a href="<?php echo bloginfo( 'template_url'); ?>/assets/img/review-2.png" data-fancybox="gallery">
                    <picture>
                        <img src="<?php echo bloginfo( 'template_url'); ?>/assets/img/review-2.png" alt="">
                    </picture>
                    </a>
                </div>
            </div>

            <div class="video-reviews __mobile">
                <div class="main-section__title-wrapper __video-reviews">
                    <a class="inner-wrapper __video-reviews" href="#">
                        <div class="main-section-title __video-reviews">
                            <span>Видео отзывы на нашем канале </span>
                        </div>
                        <div class="secondary-title __main-sub-decor __secondary-colored __video-reviews">
                        <div class="wrapper __decor __video-reviews __padding-left">
                            <span class="secondary-title-text__indent __video-reviews">Смотреть</span>
                        </div>
                        </div>
                    </a>
                </div>

            </div>



        </div>
        <div class="block-wrapper __form">
            <div class="container">

                <div class="form-block __mobile __desktop __white-bg __transparent-bg">
                    <div class="form-block__inner-wrapper __reviews-form">
                        <div class="form-block__title __mobile">
                            <h4>Хочу в путешествие</h4>
                        </div>
                        <div class="form-block__subtitle __mobile">
                            <span>Мы перезвоним Вам в рабочее время.</span>
                        </div>
                        <?php echo do_shortcode('[contact-form-7 id="37" title="Форма отправки заявки"]' ) ?>
                        <!-- <form class="form __mobile" action="" method="post">
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
                                <label class="form-label" for="e-mail">E-mail </label>
                                <div>
                                    <input type="text" id="e-mail" name="formemail" placeholder="MultiTravel@gmail.com" required>
                                </div>
                            </div>


                            <div>

                                <div class="form-block__checkbox-wrapper">
                                    <input class="check__input" type="checkbox" id="agreement" checked required>
                                    <span class="check__box"></span>
                                    <label class="check option" for="agreement">Нажимая на кнопку «Отправить» вы
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
                    <div class="ready-form visually-hidden __reviews-form">
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


    </div>
    <!-- </div> -->


</section>
		</main>
	<?php get_footer(  );?>