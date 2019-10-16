<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>С П А С И Б О</title>
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
                        <h1 class="hero-text__title">Спасибо за заявку
                            
                        </h1>
                        <span class="hero-text__subtitle">
                            Мы вам перезвоним в течении 60 секунд
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