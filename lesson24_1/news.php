<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>УРОК 22</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="icon" href="../lesson19_2/img/favicon.png" type="image/png">
</head>
<body>
<?php include('navbar.php'); ?>
    <!-- /.navbar -->
    <main>
        <section class="hero">
            <div class="container">
                <div class="hero-block">
                    <div class="hero-text wow fadeInLeft">
                        <h1 class="hero-text__title">Внутренняя отделка 
                            помещений "под ключ"
                            
                        </h1>
                        <span class="hero-text__subtitle">
                            с гарантией качества, прописанной в договоре
                        </span>
                        <ul class="hero-list">
                            <li class="hero-list__item">
                                <div class="hero-list__image">
                                  <img src="img/hero/clock.png" alt="clock">  
                                </div>
                                <span class="hero-list__text">Точно соблюдаем сроки
                                </span>
                            </li>
                            <li class="hero-list__item">
                                <div class="hero-list__image">
                                    <img src="img/hero/calculator.png" alt="clock">  
                                  </div>
                                  <span class="hero-list__text">Рассчитаем смету на работы
                                    <br>и материалы в день обращения                                    
                                  </span>
                            </li>
                            <li class="hero-list__item">
                                <div class="hero-list__image">
                                    <img src="img/hero/paint-board.png" alt="clock">  
                                  </div>
                                  <span class="hero-list__text">Предложим более 100 вариантов 
                                    исполнения дизайна Вашего жилья
                                  </span>
                            </li>
                        </ul>
                    </div>
                    <!-- /.hero-list -->
                    <div class="hero-image wow zoomIn">
                        <img src="img/hero/hero-image.jpg" alt="План квартиры">
                    </div>
                    <!-- /.hero-image -->
                </div>
                <!-- /.hero-block -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.hero -->
        <section class="offer section">
            <div class="container">
                <div class="offer-block">
                    <h2 class="section-title offer__title wow fadeInLeft">Мы бесплатно разработаем 
                        дизайн-проект Вашего жилья 
                        и реализуем его!
                        </h2>
                    <!-- /.section-title -->
                    <span class="section-subtitle offer__subtitle wow fadeInLeft delay-0.5s">
                        Оставьте заявку на разработку 
    бесплатного дизайн-проекта!
                    </span>
                <form class="form offer__form" id="offer-form">
                    <div class="wrap-groups">
                        <div class="input-group">
                        <input type="text" name="username" class="input offer__input" placeholder="Ваше имя">
                        </div>
                        <div class="input-group">
                        <input type="tel" name="phone" class="input offer__input phone" placeholder="Ваш телефон">
                        </div>
                    </div>
                        <button class="button offer__button wow pulse">Получить бесплатный дизайн-проект
                        </button>
                </form>
                <div class="offer-contacts">
                    <span class="offer-contacts__description">Наш менеджер перезвонит Вам в течение 60 секунд</span>
                    <div class="offer-phone">
                        <span class="offer-phone__text">или перезвоните нам сами</span>
                        <a href="tel:+74954225131" class="offer-phone__numb">+7 (495) 42-251-31</a>
                    </div>
                </div>
                </div>
                <!-- /.form offer__form -->
                <!-- /.section-subtitle -->
            </div>
            <!-- /.container -->
        </section>
        <section class="section portfolio">
            <div class="container">
                <h2 class="section-title portfolio__title wow fadeInDown">Работая с 2007 года,
                   <br>мы сделали более 500 ремонтов в квартирах и домах
                    </h2>
                <div class="slider owl-carousel owl-theme">
                    <div class="slider__item">
                        <img class="slider__image" src="img/portfolio/slider-1.jpg" alt=""></div>
                    <div class="slider__item">
                        <img class="slider__image" src="img/portfolio/slider-2.jpg" alt=""></div>
                    <div class="slider__item">
                        <img class="slider__image" src="img/portfolio/slider-3.jpg" alt=""></div>
                    <div class="slider__item">
                        <img class="slider__image" src="img/portfolio/slider-1.jpg" alt=""></div>
                    <div class="slider__item">
                        <img class="slider__image" src="img/portfolio/slider-2.jpg" alt=""></div>
                    <div class="slider__item">
                        <img class="slider__image" src="img/portfolio/slider-3.jpg" alt=""></div>
                </div>
                <div class="arrows portfolio__arrows">
                    <div class="arrows__left"><img src="img/portfolio/left-arrow.png" alt=""></div>
                    <div class="arrows__right"><img src="img/portfolio/right-arrow.png" alt=""></div>
                </div>
            </div>
            <!-- /.container -->
        </section>
        <!-- /.section portfolio -->
        <section class="section price">
            <div class="container">
                <h2 class="section-title price__title wow flipInX">У нас очень гибкая система скидок на комплексные работы!
                    </h2>
                <!-- /.section-title price__title -->
                <span class="section-subtitle price__subtitle wow flipInX">Прайс на наши услуги
                </span>
                <!-- /.section-subtitle price__subtitle -->
                <div class="cards">
                    <div class="card price__card wow fadeInUp">
                        <div class="card__image"><img class="price-img" src="img/price/bathroom.jpg" alt=""></div>
                        <!-- /.card__image -->
                        <div class="card__text">
                            <h4 class="card__title">Ремонт ванных комнат и с/у
                            </h4>
                            <!-- /.card__title -->
                            <a href="#" class="card__link">Узнать цены</a>
                            <!-- /.card__link -->
                        </div>
                        <!-- /.card__text -->
                    </div>
                    <!-- /.card -->
                    <div class="card price__card wow fadeInUp">
                        <div class="card__image"><img class="price-img" src="img/price/living.jpg" alt=""></div>
                        <!-- /.card__image -->
                        <div class="card__text">
                            <h4 class="card__title">Ремонт комнат и квартир                            </h4>
                            <!-- /.card__title -->
                            <a href="#" class="card__link">Узнать цены</a>
                            <!-- /.card__link -->
                        </div>
                        <!-- /.card__text -->
                    </div>
                    <!-- /.card -->
                    <div class="card price__card wow fadeInUp">
                        <div class="card__image"><img class="price-img" src="img/price/office.jpg" alt=""></div>
                        <!-- /.card__image -->
                        <div class="card__text">
                            <h4 class="card__title">Отделка офисных помещений                            </h4>
                            <!-- /.card__title -->
                            <a href="#" class="card__link">Узнать цены</a>
                            <!-- /.card__link -->
                        </div>
                        <!-- /.card__text -->
                    </div>
                    <!-- /.card -->
                    <div class="card price__card wow fadeInUp">
                        <div class="card__image"><img class="price-img" src="img/price/buildings.jpg" alt=""></div>
                        <!-- /.card__image -->
                        <div class="card__text">
                            <h4 class="card__title">Ремонт в новостройках                            </h4>
                            <!-- /.card__title -->
                            <a href="#" class="card__link">Узнать цены</a>
                            <!-- /.card__link -->
                        </div>
                        <!-- /.card__text -->
                    </div>
                    <!-- /.card -->
                    <div class="card price__card wow fadeInUp">
                        <div class="card__image"><img class="price-img" src="img/price/kitchen.jpg" alt=""></div>
                        <!-- /.card__image -->
                        <div class="card__text">
                            <h4 class="card__title">Ремонт кухонь                            </h4>
                            <!-- /.card__title -->
                            <a href="#" class="card__link">Узнать цены</a>
                            <!-- /.card__link -->
                        </div>
                        <!-- /.card__text -->
                    </div>
                    <!-- /.card -->
                    <div class="card price__card wow fadeInUp">
                        <div class="card__image"><img class="price-img" src="img/price/house.jpg" alt=""></div>
                        <!-- /.card__image -->
                        <div class="card__text">
                            <h4 class="card__title">Ремонт дач и коттеджей                            </h4>
                            <!-- /.card__title -->
                            <a href="#" class="card__link">Узнать цены</a>
                            <!-- /.card__link -->
                        </div>
                        <!-- /.card__text -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.cards -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.section price -->
        <section class="section steps">
            <div class="container">
                <h2 class="section-title steps__title">Наши специалисты готовы выехать на замер
                    в любое удобное для Вас время
                    </h2>
                <!-- /.section-title steps__title -->
                <span class="section-subtitle steps__subtitle">5 шагов до ремонта
    </span>
                <!-- /.section-subtitle steps__subtitle -->
                <div class="steps-block">
                    <div class="step">
                        <div class="step__image">
                            <img src="img/steps/woman-with-headset.png" alt="">
                        </div>
                        <!-- /.step__image -->
                        <p class="step__text">Вы звоните нам
                           <br> или оставляете заявку
                        </p>
                        <!-- /.step__text -->
                    </div>
                    <!-- /.step -->
                    <div class="step">
                        <div class="step__image">
                            <img src="img/steps/wall-clock.png" alt="">
                        </div>
                        <!-- /.step__image -->
                        <p class="step__text">Согласуем удобное
                            <br>для Вас время выезда 
                            <br>специалиста на замер
                        </p>
                        <!-- /.step__text -->
                    </div>
                    <!-- /.step -->
                    <div class="step">
                        <div class="step__image">
                            <img src="img/steps/money.png" alt="">
                        </div>
                        <!-- /.step__image -->
                        <p class="step__text">Рассчитываем смету
                            <br>согласовываем
                            <br>с Вами
                        </p>
                        <!-- /.step__text -->
                    </div>
                    <!-- /.step -->
                    <div class="step">
                        <div class="step__image">
                            <img src="img/steps/folded-document-icon.png" alt="">
                        </div>
                        <!-- /.step__image -->
                        <p class="step__text">Подписываем договор
                            <br>закупаем материал
                            <br>по оптовым ценам
                        </p>
                        <!-- /.step__text -->
                    </div>
                    <!-- /.step -->
                    <div class="step">
                        <div class="step__image">
                            <img src="img/steps/calendar.png" alt="">
                        </div>
                        <!-- /.step__image -->
                        <p class="step__text">Выполняем ремонт
                            <br>в указанные сроки
                        </p>
                        <!-- /.step__text -->
                    </div>
                    <!-- /.step -->
                </div>
                <!-- /.steps-block -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.section steps -->
        <div class="about-block">
            <h2 class="about__title">Ремонт обойдется Вам дешевле, так как <br>мы используем качественные материалы по оптовым ценам
            </h2>
        </div>
        <div class="section about">
            <div class="container">
                <div class="about-description">
                    <div class="about__item">
                        <span class="about__text">Поможем закупить все материалы 
                                <br>по оптовым ценам у проверенных поставщиков
                        </span>
                        <!-- /.about__text -->
                        <div class="about__image"><img src="img/about/man-1.png" alt=""></div>
                        <!-- /.about__image -->
                    </div>
                    <!-- /.about__item -->
                    <div class="about__item">
                        <span class="about__text">Мы дадим Вам <b>максимальные скидки</b>
                                <br>у наших партнеров для закупки материалов оптом
                                </span>
                        <!-- /.about__text -->
                        <div class="about__image"><img src="img/about/man-2.png" alt=""></div>
                        <!-- /.about__image -->
                    </div>
                    <!-- /.about__item -->
                    <div class="about__item">
                        <span class="about__text">Все, что не сможете найти в городе -
                                поможем заказать <b>у проверенных
                                поставщиков</b>
                            </span>
                        <!-- /.about__text -->
                        <div class="about__image"><img src="img/about/man-3.png" alt=""></div>
                        <!-- /.about__image -->
                    </div>
                    <!-- /.about__item -->
                </div>
                <!-- /.about-description -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.section about -->
        <section class="security">
            <div class="container">
                <h2 class="security__title">Все наши гарантийные обязательства
                        подробно и прозрачно описаны в договоре
                    </h2>
                <!-- /.security__title -->
                <div class="security-blocks">
                    <div class="security__block">
                        <div class="security__img">
                            <img src="img/security/doc-1.jpg" alt="">
                        </div>
                        <span class="security__text">Гарантия на качество выполняемых работ<br>
                        </span>
                    </div>
                    <div class="security__block">
                        <div class="security__img">
                            <img src="img/security/doc-2.jpg" alt="">
                        </div>
                        <span class="security__text">Гарантия на фиксированные цены <br>Виды работ и цены на них прописаны в договоре</span>
                    </div>
                    <div class="security__block">
                        <div class="security__img">
                            <img src="img/security/doc-3.jpg" alt="">
                        </div>
                        <span class="security__text">Гарантия на точное соблюдение сроков и ответственность за <br>их невыполнение</span>
                    </div>
                    <!-- /.security__img -->
                </div>
                <!-- /.security-block -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.security -->
        <section class="section brif">
            <div class="container">
                <div class="brif-block">
                    <div class="interview brif__interview">
                        <h3 class="interview__title">Мы можем озвучить Вам примерную стоимость <br> работы и материалов по телефону
                        </h3>
                        <span class="interview__subtitle">Для этого нужно ответить на 4 вопроса:</span>
                        <ul class="interview-list">
                            <li class="interview-list__item">
                                <span class="interview-list__counter">1.</span> 
                                <span class="interview-list__text">Какова площадь помещения?</span> 
                            </li>
                            <li class="interview-list__item">
                                <span class="interview-list__counter">2.</span> 
                                <span class="interview-list__text">У Вас новостройка или вторичное жилье?</span> 
                            </li>
                            <li class="interview-list__item">
                                <span class="interview-list__counter">3.</span> 
                                <span class="interview-list__text">Где находится помещение, в котором будет производиться ремонт?</span> 
                            </li>
                            <li class="interview-list__item">
                                <span class="interview-list__counter">4.</span> 
                                <span class="interview-list__text">Назначение помещения?</span> 
                            </li>
                        </ul>
                    </div>
                    <!-- /.interview brif__interview -->
                    <div class="form brif__form">
                        <h3 class="form__title brif__title">Оставьте заявку на бесплатный расчет ремонта по телефону
                        </h3>
                        <span class="form__subtitle">Для этого заполните форму ниже
                        </span>
                        <form action="#" id="brif-form">
                            <div class="input-group">
                                <input type="text" name="username" class="input brif__input" placeholder="Ваше имя">
                            </div>
                            <div class="input-group">
                                <input type="tel" name="phone" class="input brif__input phone" placeholder="Ваш телефон">
                            </div>
                            <div class="input-group">
                                <input type="tel" name="email" class="input brif__input" placeholder="Ваш E-Mail">
                            </div>
                            <button class="button brif__button">Рассчитать стоимость</button>
                            <span class="form__description">Мы перезвоним Вам в течение 60 секунд
                            </span>
                        </form>
                    </div>
                    <!-- /.form brif__form -->
                </div>
                <!-- /.bfir-block -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.section brif -->
        <!-- /.offer -->
    </main>
    <footer class="footer">
        <div class="map" id="map">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A26a4a06431f8cade9350a261743ed3f723a6c212792135c1d3823c9e550faaac&amp;width=100%25&amp;height=640&amp;lang=ru_RU&amp;scroll=false&amp;drag=false"></script>
        </div>
        <div class="container">
            <div class="contacts-block">
                <div class="contacts">
                    <h3 class="contacts__title">Приезжайте к нам в гости! <br>Проконсультируем Вас <br>по всем вопросам ремонта</h3>
                    <ul class="contacts-list">
                        <li class="contacts-list__item">
                            <span class="contacts-list__icon">
                                <img src="img/footer/map-placeholder.png" alt="">
                        </span>
                            <span class="contacts-list__text">
                                    г. Москва
                                    <b><br>ул. Ленинга, д. 10,
                                    <br>корпус 2, оф. 308</b>
                        </span>
                        </li>
                        <li class="contacts-list__item">
                            <span class="contacts-list__icon">
                                <img src="img/footer/clock-with-white-face.png" alt="">
                        </span>
                            <span class="contacts-list__text">
                                    Режим работы:
                                    <b><br>с 9:00 до 18:00</b>                                    
                            </span>
                        </li>
                        <li class="contacts-list__item">
                            <span class="contacts-list__icon">
                                <img src="img/footer/phone-call-button.png" alt="">
                        </span>
                            <span class="contacts-list__text">Телефон:    
                            <b><br><a href="tel:+74954225131" class="offer-phone__numb">+ 7 (495) 42-251-31
                        </a></b>
                        </span>
                        </li>
                    </ul>
                    <p><?php echo date('l jS \of F Y h:i:s A'); ?></p>
                </div>
                <!-- /.contacts -->
            </div>
            <!-- /.contacts-block -->
        </div>
    </footer>
    <div class="modal" id="modal">
        <div class="modal-dialog">
            <button class="modal-dialog__close" id="close">&times;</button>

            <h4 class="modal-dialog__title">Узнайте точную стоимость ремонта по телефону!</h4>
            <span class="modal-dialog__subtitle">Заполните поля ниже - мы свяжемся с Вами
            </span>
            <form class="form modal-dialog__form" id="modal-form">
                <div class="input-group">
                <input type="text" name="username" class="modal-dialog__input" placeholder="Ваше имя">
                </div>
                <div class="input-group">
                <input type="tel" name="phone" class="modal-dialog__input phone" placeholder="Ваш телефон">
                </div>
                <button class="button modal-dialog__button">Узнать стоимость
                </button>
                <div class="modal-phone">
                    <span class="modal-phone__text-phone">Или Вы можете перезвонить нам сами
                        по телефону:</span>
                    <a href="tel:+78182425131" class="modal-phone__numb-phone">+7 (8182) 42-51-31</a>
                </div>
            </form>
        </div>
        <!-- /.modal-dialog -->
    </div>
        <button class="button scroll-up" id="scroll-up">&and;</button>
        <!--Кнопка наверх-->
    <!-- /.modal -->
    <!--<script src="js/main.js"></script>-->
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="js/modal.js"></script>
  <script src="js/scrollup.js"></script>
  <script src="js/slider.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/validator.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/jquery.maskedinput.min.js"></script>
  <script>
      /*Инициализация WOW*/
    new WOW({
        mobile: false
    }).init();
    </script>
</body>
</html>