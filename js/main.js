$(document).ready(function () {
    "use strict";

    var window_width = $(window).width(),
        window_height = window.innerHeight,
        header_height = $(".default-header").height(),
        header_height_static = $(".site-header.static").outerHeight(),
        fitscreen = window_height - header_height;

    $(".fullscreen").css("height", window_height)
    $(".fitscreen").css("height", fitscreen);

    //-------- Active Sticky Js ----------//
    $(".default-header").sticky({topSpacing: 0});


    // -------   Active Mobile Menu-----//
    $(".menu-bar").on('click', function (e) {
        e.preventDefault();
        $("nav").toggleClass('hide');
        $("span", this).toggleClass("lnr-menu lnr-cross");
        $(".main-menu").addClass('mobile-menu');
    });

    // Select all links with hashes
    $('a[href*="#"]')
    // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function (event) {
            // On-page links
            if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                &&
                location.hostname == this.hostname
            ) {
                // Figure out element to scroll to
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                // Does a scroll target exist?
                if (target.length) {
                    // Only prevent default if animation is actually gonna happen
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000, function () {
                        // Callback after animation
                        // Must change focus!
                        var $target = $(target);
                        $target.focus();
                        if ($target.is(":focus")) { // Checking if the target was focused
                            return false;
                        } else {
                            $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                            $target.focus(); // Set focus again
                        }
                    });
                }
            }
        });

    //  video popup
    $('.play-btn').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });

    //  member carusel
    $('.active-member-carousel').owlCarousel({
        items: 1,
        loop: true,
        margin: 30,
        dots: true
    });

    $('.next-trigger').click(function () {
        $(".active-member-carousel").trigger('next.owl.carousel');
    });
    // Go to the previous item
    $('.prev-trigger').click(function () {
        $(".active-member-carousel").trigger('prev.owl.carousel');
    });

    // -------   Mail Send ajax
    $(document).ready(function () {
        var form = $('#order-form'); // contact form
        var submit = $('#sends'); // submit button
        var alert = $('#responsesend'); // alert div for show alert message
        //кнопка скрытия модалки
        $("#responseclose").on("click", function () {
            alert.fadeOut();
        });
        // alert.fadeOut;

        // убираем отправку формы
        form.submit(function () {
            return false;
        });

        // button click event
        submit.on('click', function (e) {
            // prevent default form submit

            $.ajax({
                url: $('#order-send-url').val(), // form action url
                type: 'POST', // form submit method get/post
                dataType: 'html', // request type html/json/xml
                data: form.serialize(), // serialize form data
                beforeSend: function () {
                    submit.html('Отправка....'); // change submit button text
                },
                success: function (data) {
                    alert.fadeIn(); // fade in response data
                    // form.trigger('reset'); // reset form
                    submit.html('Отправленно'); // change submit button text
                    submit.prop("disabled", true);
                },
                error: function (e) {
                    console.log(e)
                }
            });
        });
    });

    $(document).ready(function () {
        $(".formcolback-select").select2();
        $ ( ' .parallax-window ' ). parallax ({imageSrc :  '../img/ca07be5c2c7ab8e82d895fa81a6384c9.jpg' });
    });

    var input = document.querySelectorAll('.c-datepicker-input');
    input.forEach(function (inputEl) {
        var picker = new MaterialDatetimePicker({})
            .on('submit', function(d) {
                inputEl.value = d.format("DD.MM.YYYY HH:mm");
                var date = new Date(d._d);
                $("#"+inputEl.name+"hiden").val(date.getTime() /1000);
                calc();
            });
        inputEl.addEventListener('focus', function() { picker.open();}, false);
    });

    <!-- скрипт чтобы без чек бокса не работала кнопка да-->

            $('#warning_button_yes').prop('disabled', true);

            $('#agree').change(function() {

                $('#warning_button_yes').prop('disabled', function(i, val) {
                    return !val;
                })
            });

        <!--скрипт для открытия модалки через 1с-->

    var delay_popup = 1000;setTimeout("document.getElementById('parent_popup').style.display='block'", delay_popup);


});
