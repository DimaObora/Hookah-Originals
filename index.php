<?php
$settings = get_option('hookah_settings');
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
<!--    <link rel="shortcut icon" href="--><?php //echo get_template_directory_uri(); ?><!--/img/fav.png">-->
    <!-- Author Meta -->
    <meta name="author" content="">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Hookah Originals</title>
    <style>

        .nav-item{
            padding: 0 12px;
            text-align: center;
        }
        /*.navbar-nav{*/
        /*flex-direction: row;*/
        /*}*/
        .navbar-toggleable-md{
            position: relative;
        }
        .line-item{
            text-align: center;
        }
        .nav-item{

            display: inline-block;
        }
        .navbar-nav .nav-item{
            float: none!important;
        }
        .button-menu-right{
            float: right;
        }
        .logo-absol{
            position: absolute;
            top:2%;
            left: 2%;
        }
        @media (max-width: 768px){
            .nav-item{

                display: block;
            }
        }

    </style>
</head>

<body>
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
                    <button type="button" class="btn btn-block btn-success " id="warning_button_yes"
                            data-dismiss="modal"
                            onclick="document.getElementById('parent_popup').style.display='none'; document.cookie = 'check18=ok';">
                        Да
                    </button>
                </div>
                <div class="col-md-6 text-center">
                    <a type="button" class="btn btn-block btn-danger" id="warning_button_no"
                       href="https://www.google.ru">Нет</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="responsesend">
    <center>
        <h1>Ваша заявка отправлена, спасибо, что пользуетесь нашими услугами, мы вам перезоним для уточнения заказа в
            течении часа.</h1>
        <button type="button" id="responseclose">Закрыть</button>
    </center>
</div>
<!-- Start Banner Area -->
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><div class="logo">
            <p class="logo-text">
                Hookah-Originals</p>
        </div></a>
    <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
        <ul class="navbar-nav  ">
            <li class="nav-item active">
                <a class="nav-link" href="#home">Главная <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#feature">Полезно знать</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#application">Заказ кальяна</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about">Отзывы</a>
            </li>
            <li class="nav-item">
                <a class="phone nav-link"
                   href="tel:<?php echo preg_replace('/[ a-zA-Z,.-]/', '', $settings['hookah_text_field_0']); ?>"><?php echo $settings['hookah_text_field_0']; ?></a>
            </li>
        </ul>

    </div>
</nav>
<section class="banner-area relative" id="home">

    <div class="container">
        <!-- Start Header Area -->

        <!-- End Header Area -->
        <div class="row fullscreen align-items-center justify-content-center" style="height: 735px;">
            <div class="col-lg-12 align-self-center">
                <div class="banner-content text-center align-self-center">
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
                    <p style="color: #a0a0a0"><span>Кальян</span> для новичков и <br> тех,<span> кто</span> редко <br>
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
<section class="feature-area pb-100">
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
    <div class="container">
        <div class="row row-md-right about-details">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 title-hookah text-center "><h2 class="f700i mb-25">Заказать
                    кальян!</h2></div>
            <input type="hidden" id="order-send-url" value="<?php echo get_template_directory_uri(); ?>/mail.php">
            <input type="hidden" id="price-hookah-one" value="<?php echo $settings['hookah_text_field_2']; ?>">
            <input type="hidden" id="price-hookah-day" value="<?php echo $settings['hookah_text_field_3']; ?>">
            <form id="order-form" action="#" method="post" >
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 select">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input required class="input-kalk-1cal" name="name" type="text" size="20"
                                       placeholder="Ваше имя:">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input required class="input-kalk-1cal" name="phone" id="phone1"
                                       placeholder="Ваш телефон:">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input required class="input-kalk-1cal c-datepicker-input" name="datefrom"
                                       placeholder="Когда доставить:">
                            </div>
                        </div>
                        <input class="input-kalk-1cal" type="hidden" id="datefromhiden" value="0"/>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input required class="input-kalk-1cal" name="count" type="number" id="count" value="1"
                                       onchange="calc()" placeholder="Кол-во кальянов:"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <textarea required rows="3" cols="35" name="address" class="delivery-address"
                                          placeholder="Куда доставить:"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 select">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <select name="flask" class="formcolback-select " id="flask" onchange="calc()"
                                        multiple="multi">
                                    <?php
                                    $args = array('posts_per_page' => -1, 'post_type' => 'flask');
                                    $myposts = get_posts($args);
                                    foreach ($myposts as $post) {
                                        setup_postdata($post);
                                        ?>
                                        <option value="<?php the_title(); ?>:<?php echo get_post_meta($post->ID, "price", true); ?>">
                                            <?php the_title(); ?> <?php echo get_post_meta($post->ID, "price", true); ?>
                                            руб.
                                        </option>
                                        <?php
                                    }
                                    wp_reset_postdata();
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <select name="tobacco" class="formcolback-select" onchange="calc()" id="tobacco"
                                        multiple="multiple">
                                    <?php
                                    $args = array('posts_per_page' => -1, 'post_type' => 'tobacco');
                                    $myposts = get_posts($args);
                                    foreach ($myposts as $post) {
                                        setup_postdata($post);
                                        ?>
                                        <option value="<?php the_title(); ?>:<?php echo get_post_meta($post->ID, "price", true); ?>">
                                            <?php the_title(); ?> <?php echo get_post_meta($post->ID, "price", true); ?>
                                            руб.
                                        </option>
                                        <?php
                                    }
                                    wp_reset_postdata();
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input required class="input-kalk-1cal c-datepicker-input" name="dateto"
                                       placeholder="Когда забрать:"/>
                            </div>
                        </div>
                        <input class="input-kalk-1cal" type="hidden" id="datetohiden" value="0"/>
                        <input class="input-kalk-1cal" name="result" id="result-input" type="hidden" value="0">
                        <div class="navbar-left mb-1em"><h4>Итого: <span id="result">0</span> руб.</h4></div>
                        <button id="sends"
                                class="pull-left primary-btn  align-items-center mt-30"
                                style="color: white">
                            Заказать
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- Start member Area -->
<section class="member-area relative pt-100 pb-100 parallax-window " data-parallax=" scroll " id="about">
    <div class="overlay overlay-bg"></div>
    <div class="container relative">
        <div class="row justify-content-center ">
            <div class="active-member-carousel">
                <div class="single-member item">
                    <div class="member-info d-flex flex-row justify-content-center">
                        <img class="reviews-avatar" style="width:100px;height: 100%;border-radius: 50%;"
                             src="<?php echo get_template_directory_uri(); ?>/img/m1.jpg" alt="">
                        <div class="details reviews-about">
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
                        <img class="reviews-avatar" style="width:100px;height: 100%; border-radius: 50%;"
                             src="<?php echo get_template_directory_uri(); ?>/img/e1.jpg" alt="">
                        <div class="details reviews-about">
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
            <div class="col-lg-3 col-xs-6 col-sm-6 copy-right-text"><a class="phone "
                                                                       href="tel:<?php echo preg_replace('/[ a-zA-Z,.-]/', '', $settings['hookah_text_field_0']); ?>"><?php echo $settings['hookah_text_field_0']; ?>
                    &nbsp;&nbsp;&nbsp;&nbsp;</a><?php echo $settings['hookah_text_field_1']; ?>
            </div>
            <div class="col-lg-3 col-xs-6 col-sm-6 footer-social">
                <?php if (!empty($settings['hookah_text_field_8'])) { ?><a
                    href="<?php echo $settings['hookah_text_field_8']; ?>" target="_blank">
                        <div class="circlefa"><i class="fa fa-facebook"></i></div></a><?php } ?>
                <?php if (!empty($settings['hookah_text_field_9'])) { ?><a
                    href="<?php echo $settings['hookah_text_field_9']; ?>" target="_blank">
                        <div class="circlefa"><i class="fa fa-twitter"></i></div></a><?php } ?>
                <?php if (!empty($settings['hookah_text_field_10'])) { ?><a
                    href="<?php echo $settings['hookah_text_field_10']; ?>" target="_blank">
                        <div class="circlefa"><i class="fa fa-vk"></i></div></a><?php } ?>
            </div>
        </div>
    </div>
</footer>

<!-- End Footer Area -->

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/linearicons.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/form.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel-min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/magnific-popup-min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsiv.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/hedar-min.css">
<link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css" rel="stylesheet"/>
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/material-datetime-picker.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
<style>
    @font-face {
        font-family: 'DynarShadow Bold';
        font-style: normal;
        font-weight: 700;
        src: local('DynarShadow Bold'), local('DynarShadow-Bold'),
        url(<?php echo get_template_directory_uri(); ?>/fonts/dynarshadow-bold_d58c133493577c19b19dfd68b41e68b3.woff) format('woff'),
        url(<?php echo get_template_directory_uri(); ?>/fonts/dynarshadow-bold_d58c133493577c19b19dfd68b41e68b3.ttf) format('truetype');
    }

    @font-face {
        font-family: 'olietta script lyrica bolditalic';
        src: local('olietta script lyrica bolditalic'), local('olietta-script-lyrica-bolditalic'),
        url(<?php echo get_template_directory_uri(); ?>/fonts/olietta-script-lyrica-bolditalic_[allfont.ru].ttf);
        font-style: normal;
    }
</style>

<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/parallax.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/calc-form-min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/polyfill-min.js">></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rome/2.1.22/rome.standalone.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/material-datetime-picker-min.js" charset="utf-8"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/parallax.min.js "></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main-min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.maskedinput-min.js"></script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter48031541 = new Ya.Metrika({
                    id:48031541,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/48031541" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>




