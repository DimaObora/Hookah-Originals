<?php
$settings =  get_option('hookah_settings');
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="Colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Hookah Originals</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <link href="http://allfont.ru/allfont.css?fonts=dynarshadow-bold" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/linearicons.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/form.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/FAER.sass">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/hedar.css">
    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css" rel="stylesheet"/>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/material-datetime-picker.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsiv.css">

</head>
<body  >
<div id="parent_popup">
        <div class="modal-dialog block18+ col-xl-4" id="popup">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Вам уже исполнилось 18 лет?</h4>
                </div>
                <div class="modal-body text-center">
                    Содержание сайта предназначено для просмотра исключительно лицам достигшим совершеннолетия! <br>
                    <label><input type="checkbox" id="agree"/> Согласен на обработку персональных данных</label>
                </div>
                <div class="modal-footer">

                    <div class="col-md-6 text-center">
                        <button type="button" class="btn btn-block btn-success " id="warning_button_yes"  data-dismiss="modal" onclick="document.getElementById('parent_popup').style.display='none';">Да</button>
                    </div>
                    <div class="col-md-6 text-center">
                        <a type="button" class="btn btn-block btn-danger" id="warning_button_no" href="https://www.google.ru">Нет</a>
                    </div>
                </div>
            </div>
        </div>
</div>

<div id="responsesend">
    <center>
       <h1>Ваша заявка отправлена, спасибо, что пользуетесь нашими услугами, мы вам перезоним для уточнения заказа в течении часа.</h1>
        <button type="button" id="responseclose">Закрыть</button>
    </center>
</div>
<!-- Start Banner Area -->
<section class="banner-area relative" id="home">
    <div class="container">
        <!-- Start Header Area -->
        <header class="default-header">
            <div class="container">
                <div class="header-wrap">
                    <div class="header-top d-flex justify-content-between align-items-center">
                        <div class="logo">
                            <p class="logo-text">
                                Hookah-Originals</p>
                        </div>
                        <div class="main-menubar d-flex align-items-center">
                            <nav class="text-center">
                                <a href="#home">Главная</a>
                                <a href="#feature">Полезно знать</a>
                                <a href="#application">Заказ кальяна</a>
                                <a href="#about">Отзывы</a>
                                <a class="phone " href="tel:<?php echo preg_replace('/[ a-zA-Z,.-]/','',$settings['hookah_text_field_0']); ?>"><?php echo $settings['hookah_text_field_0']; ?></a>
                            </nav>
                            <div class="menu-bar"><span class="lnr lnr-cross"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End Header Area -->

        <div class="row fullscreen align-items-center justify-content-center" style="height: 735px;">
            <div class="col-lg-12">
                <div class="banner-content text-center">
                    <h1 class="center__text glitch is-glitching" data-text="Кальян на дом">Кальян на дом</h1>
                    <p class="text-uppercase mx-auto">
                        по дискому району
                    </p>
                    <!--<h1 class="text-uppercase text-white">Кальян на дом</h1>-->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->
<div class="modal fade" id="basicModal" tabindex="-1" role="dialog">

</div>

<!-- Start quote Area -->
<section class="quote-area pt-100 pb-100" id="feature">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-sm-12 quote-left">
                <h2 class="text-right">
                    <p style="color: #a0a0a0"><span>Кальян</span> для новичков и <br>  тех,<span> кто</span> редко <br>
                        <span>курит.</span></p>
                </h2>
            </div>
            <div class="col-lg-6 col-sm-12 quote-right">
                <p class="text-left">
                    Дымный, с насыщенным вкусом и легкий в приготовлении кальян — идеальный кальян для новичков или для
                    тех, кто дымит редко. Чтобы он получился именно таким, следуйте четырем советам. Подбор чаши
                    Идеальная чаша в данном случае — силиконовая чаша. С ней сложнее всего накосячить. Выбирайте и не
                    ошибетесь. Подбор табака Оптимальный вариант табака — с низким содержанием никатина.</p>
            </div>
        </div>
    </div>
</section>
<!-- End quote Area -->

<!-- Start feature Area -->
<section class="feature-area pb-100" >
    <div class="container">
        <div class="row ">
            <div class="col-lg-4 col-md-4 no-padding single-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/f11.jpg" class="image img-fluid">
                <div class="middle">
                    <h2 class="text-uppercase text-white">Большое разнообразие приятных вкусов и миксов</h2>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 no-padding single-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/f22.jpg" class="image img-fluid">
                <div class="middle">
                    <h2 class="text-uppercase text-white">Не знаешь что заказать?</h2>
                    <p>Мы поможем! Позвони по номеру:</p>
                    <h2 class="text-uppercase text-white"><a class="phone " href="tel:+79002475139"> <i>+7 900
                                24-75-139</i></a></h2>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 no-padding single-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/f33.jpg" class="image img-fluid">
                <div class="middle">
                    <h2 class="text-uppercase text-white">Бесплатная доставка готового кальяна</h2>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 no-padding single-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/f44.jpg" class="image img-fluid">
                <div class="middle2">
                    <a href="https://www.youtube.com/watch?v=oBzsStUX1Fk" class="play-btn">
                        <img class="vdo-icon" src="<?php echo get_template_directory_uri(); ?>/img/video-btn.png"
                             alt="">
                    </a>
                    <h2 class="text-uppercase text-white">КАК ЗАБИТЬ КАЛЬЯН ВКУСНО</h2>
                    <p>3 рецепта</p>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 no-padding single-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/f55.jpg" class="image img-fluid">
                <div class="middle2">
                    <a href="https://www.youtube.com/watch?v=_0SniMwH6xI" class="play-btn">
                        <img class="vdo-icon" src="<?php echo get_template_directory_uri(); ?>/img/video-btn.png"
                             alt="">
                    </a>
                    <h2 class="text-uppercase text-white">Как сделать реально ВКУСНЫЙ кальян!</h2>
                    <p>за 15 мин</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End feature Area -->

<!-- End service Area -->
<section class=" bg-secondary-1 relative" id="application">
    <div class="image-absolute image-absolute-left">
        <img src="<?php echo get_template_directory_uri(); ?>/img/model-legs-water-pipe-relax.jpg" width="974" height="587" alt="" class="img-responsive">
    </div>
    <div class="container-fluid">
        <div class="row row-md-right">
            <div class="col-lg-6 col-md-12 col-xs-12 col-xm-12 col-md-pull-1 about-details text-center">
                <div class="container">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 title-hookah text-center "><h2 class="f700i">Заказать кальян!</h2></div>
                    <input type="hidden" id="order-send-url" value="<?php echo get_template_directory_uri(); ?>/mail.php">
                    <input type="hidden" id="price-hookah-one" value="<?php echo $settings['hookah_text_field_2']; ?>">
                    <input type="hidden" id="price-hookah-day" value="<?php echo $settings['hookah_text_field_3']; ?>">
                    <form id="order-form" action="#" method="post" class="mt-50 mb-25">
                        <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12 select">
                            <h4>Ваше имя:</h4>
                            <input class="input-kalk-1cal" name="name" type="text" size="20">
                            <h4>Ваш телефон:</h4>
                            <input class="input-kalk-1cal" name="phone" id="phone1">
                            <h4>Когда доставить:</h4>
                            <input class="input-kalk-1cal c-datepicker-input" name="datefrom"   />
                            <input class="input-kalk-1cal" type="hidden" id="datefromhiden" value="0"/>
                            <h4>Кол-во кальянов:</h4>
                            <input class="input-kalk-1cal" name="count" type="text" id="count" value="1" onchange="calc()"/>
                            <h4>Куда доставить:</h4>
                            <textarea rows="3" cols="35"  name="address" class="delivery-address"></textarea>
                        </div>
                        <div class="col-lg-6 col-md-5 col-sm-6 col-xs-12 select">
                            <h4>Что налить в колбу:</h4>
                            <select name="flask" class="formcolback-select " id="flask" onchange="calc()"
                                    multiple="multiple">
                                <?php
                                $args = array('posts_per_page' => -1, 'post_type' => 'flask');
                                $myposts = get_posts($args);
                                foreach ($myposts as $post) {
                                    setup_postdata($post);
                                    ?>
                                    <option value="<?php the_title(); ?>:<?php echo get_post_meta($post->ID, "price", true); ?>">
                                        <?php the_title(); ?> <?php echo get_post_meta($post->ID, "price", true); ?> руб.
                                    </option>
                                    <?php
                                }
                                wp_reset_postdata();
                                ?>
                            </select>
                            <h4>Выберите табак:</h4>
                            <select name="tobacco" class="formcolback-select" onchange="calc()" id="tobacco"
                                    multiple="multiple">
                                <?php
                                $args = array('posts_per_page' => -1, 'post_type' => 'tobacco');
                                $myposts = get_posts($args);
                                foreach ($myposts as $post) {
                                    setup_postdata($post);
                                    ?>
                                    <option value="<?php the_title(); ?>:<?php echo get_post_meta($post->ID, "price", true); ?>">
                                        <?php the_title(); ?> <?php echo get_post_meta($post->ID, "price", true); ?> руб.
                                    </option>
                                    <?php
                                }
                                wp_reset_postdata();
                                ?>
                            </select>
                            <h4>Когда забрать:</h4>
                            <input class="input-kalk-1cal c-datepicker-input" name="dateto"  />
                            <input class="input-kalk-1cal" type="hidden" id="datetohiden" value="0"/>
                            <input class="input-kalk-1cal" name="result" id="result-input" type="hidden" value="0"><br/>
                            <div class="navbar-left mb-1em"><h4>Итого: <span id="result">0</span> руб.</h4></div>
                            <div class="col-lg-12">
                                <button id="sends"
                                        class="pull-right primary-btn d-inline-flex align-items-center mt-10" style="color: white">
                                    Заказать
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Start member Area -->
<section class="member-area relative pt-100 pb-100 parallax-window " data-parallax = " scroll " data-image-src = "../img/ca07be5c2c7ab8e82d895fa81a6384c9.jpg" id="about">
    <div class="overlay overlay-bg"></div>
    <div class="container relative">
        <div class="row justify-content-center ">
            <div class="active-member-carousel">
                <div class="single-member item">
                    <div class="member-info d-flex flex-row justify-content-center">
                        <img class="" style="width:100px;height: 100%;border-radius: 50%;"
                             src="<?php echo get_template_directory_uri(); ?>/img/m1.jpg" alt="">
                        <div class="details">
                            <h4 class="text-white text-uppercase">Саша Простакова</h4>
                            <p>Возрост: 26 лет
                                ст. Старомышастовская</p>
                        </div>
                    </div>
                    <p class="summery">
                        Очень крутой кальян! Дымный, вкусный😍 Обязательно закажу еще) Курьер милый, все подробно
                        рассказал, забил кальян) Всем все понравилось, советую! </p>
                </div>
                <div class="single-member item">
                    <div class="member-info d-flex flex-row justify-content-center">
                        <img class="" style="width:100px;height: 100%; border-radius: 50%;"
                             src="<?php echo get_template_directory_uri(); ?>/img/e1.jpg" alt="">
                        <div class="details">
                            <h4 class="text-white text-uppercase">Лиза</h4>
                            <p>Возрост: 22 лет
                                ст. Старомышастовская</p>
                        </div>
                    </div>
                    <p class="summery">
                        Вчера курили кальян и разбили чашу глиняную, было очень обидно. Искали ближайший магазин
                        кальянный и нашли вас! Приехали, купили такую же и продолжили курение. Спасибо большое за низкую
                        цену и хорошее качество, будем брать еще. </p>
                </div>
            </div>
        </div>
        <div class="next-trigger"><span class="lnr lnr-arrow-right"></span></div>
        <div class="prev-trigger"><span class="lnr lnr-arrow-left"></span></div>
    </div>
</section>
<!-- End member Area -->

<!-- Strat Footer Area -->

<footer class="footer-area">
    <div class="container">
        <div class="row footer-content">
            <div class="col-lg-6 copy-right-text">
                <?php echo $settings['hookah_text_field_7']; ?>
            </div>
            <div class="col-lg-3 col-xs-6 col-sm-6 copy-right-text"><a class="phone " href="tel:<?php echo preg_replace('/[ a-zA-Z,.-]/','',$settings['hookah_text_field_0']); ?>"><?php echo $settings['hookah_text_field_0']; ?></a><?php echo $settings['hookah_text_field_1']; ?>
            </div>
            <div class="col-lg-3 col-xs-6 col-sm-6 footer-social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-vk"></i></a>
            </div>
        </div>
    </div>
</footer>

<!-- End Footer Area -->

<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.sticky.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/parallax.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/calc-form.js"></script>
<script src="https://unpkg.com/babel-polyfill@6.2.0/dist/polyfill.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rome/2.1.22/rome.standalone.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/material-datetime-picker.js" charset="utf-8"></script>
<script  src = "<?php echo get_template_directory_uri(); ?>/js/parallax.min.js " > </script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
</body>
</html>




