/**
 * Created by Igor on 21.09.2017.
 */
//валидация мыла в модалке
function validateEmail(email) {
    var reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return reg.test(email);
}

$(document).ready(function ($) {
    let particles = [];
    let frequency = 20
// Popolate particles
    setInterval(
        function(){
            popolate()
        }.bind(this),
        frequency
    )

    let c1 = createCanvas({width: $(window).width(), height: $(window).height()})
    let c2 = createCanvas({width: $(window).width(), height: $(window).height()})
    let c3 = createCanvas({width: $(window).width(), height: $(window).height()})

    let tela   = c1.canvas;
    let canvas = c1.context;

// $("body").append(tela);
    $("#").append(c3.canvas);
    writeText(c2.canvas, c2.context, "КАЛЬЯН НА ДОМ")


    class Particle{
        constructor(canvas, options){
            let random = Math.random()
            this.canvas = canvas;
            this.x = options.x
            this.y = options.y
            this.s = (3 + Math.random());
            this.a = 0
            this.w = $(window).width()
            this.h = $(window).height()
            this.radius = 0.5 + Math.random()*20
            this.color  = this.radius > 5 ? "#FF5E4C" : "#ED413C" //this.randomColor()
        }

        randomColor() {
            let colors = ["#FF5E4C", "#FFFFFF"];
            return colors[this.randomIntFromInterval(0,colors.length-1)];
        }

        randomIntFromInterval(min,max){
            return Math.floor(Math.random()*(max-min+1)+min);
        }

        render(){
            this.canvas.beginPath();
            this.canvas.arc(this.x, this.y, this.radius, 0, 2 * Math.PI);
            this.canvas.lineWidth = 2;
            this.canvas.fillStyle = this.color;
            this.canvas.fill();
            this.canvas.closePath();
        }

        move(){
            //this.swapColor()
            this.x += Math.cos(this.a) * this.s;
            this.y += Math.sin(this.a) * this.s;
            this.a += Math.random() * 0.8 - 0.4;

            if(this.x < 0 || this.x > this.w - this.radius){
                return false
            }

            if(this.y < 0 || this.y > this.h - this.radius){
                return false
            }
            this.render()
            return true
        }
    }

    function createCanvas(properties){
        let canvas = document.createElement('canvas');
        canvas.width = properties.width;
        canvas.height = properties.height;
        let context = canvas.getContext('2d');
        return {
            canvas: canvas,
            context: context
        }
    }

    function writeText(canvas, context, text){
        let size = 100
        context.font = size + "px Montserrat";
        context.fillStyle = "#111111";
        context.textAlign = "center";
        let lineheight = 70
        let lines = text.split('\n');
        for(let i = 0; i<lines.length; i++){
            context.fillText(lines[i], canvas.width/2, canvas.height/2 + lineheight*i - (lineheight*(lines.length-1))/3);
        }
    }

    function maskCanvas(){
        c3.context.drawImage(c2.canvas, 0, 0, c2.canvas.width, c2.canvas.height);
        c3.context.globalCompositeOperation = 'source-atop';
        c3.context.drawImage(c1.canvas, 0, 0);
        blur(c1.context,c1.canvas, 2)
    }

    function blur(ctx,canvas, amt) {
        ctx.filter = `blur(${amt}px)`
        ctx.drawImage(canvas, 0, 0)
        ctx.filter = 'none'
    }


    /*
     * Function to clear layer canvas
     * @num:number number of particles
     */
    function popolate(){
        particles.push(
            new Particle(canvas,{
                x: ($(window).width()/2),
                y: ($(window).height()/2)
            })
        )
        return particles.length
    }

    function clear(){
        canvas.globalAlpha=0.03;
        canvas.fillStyle='#111111';
        canvas.fillRect(0, 0, tela.width, tela.height);
        canvas.globalAlpha=1;
    }

    function update(){
        clear();
        particles = particles.filter(function(p) {
            return p.move()
        })
        maskCanvas()
        requestAnimationFrame(update.bind(this))
    }

    update()
    //маски для полей
    $(".phone-mask").mask("+7 (999) 99-99-999");

    //кнопка просбы позвонить
    $(".backcall").on("click", function () {
        $("#form-contact").fadeIn();
    });
    //кнопка скрытия модалки обратного звонка
    $("#hide-contact").on("click", function () {
        $("#form-contact").fadeOut();
    });
    $("#contact").submit(function () {
        return false;
    });
    //кнопка отправки заявки
    $("#send").on("click", function () {
        var emailval = $("#email").val();
        var namevl = $("#name").val();
        var phonevl = $("#phone").val();
        var msgval = $("#msg").val();
        var msglen = msgval.length;
        var mailvalid = validateEmail(emailval);

        if (mailvalid == false) {
            $("#email").addClass("error");
        }
        else if (mailvalid == true) {
            $("#email").removeClass("error");
        }
        if (mailvalid == false) {
            $("#name").addClass("error");
        }
        else if (mailvalid == true) {
            $("#name").removeClass("error");
        }
        if (mailvalid == false) {
            $("#phone").addClass("error");
        }
        else if (mailvalid == true) {
            $("#phone").removeClass("error");
        }
        if (msglen < 4) {
            $("#msg").addClass("error");
        }
        else if (msglen >= 4) {
            $("#msg").removeClass("error");
        }
        if (mailvalid == true && msglen >= 4) {
            // если обе проверки пройдены
            // сначала мы скрываем кнопку отправки
            $("#send").replaceWith("<em id='send-text' style='color: #f1f1f1;'>Отправка, ожидайте</em>");
            $.ajax({
                type: 'POST',
                url: 'sendmessage.php',
                data: $("#contact").serialize(),
                success: function (data) {
                    if (true) {
                        $("#contact").fadeOut("fast", function () {
                            $(this).before("<div><button type=\"button\" id=\"hide-contact\">Закрыть</button></div><p><strong>Успешно! Ваше сообщение отправлено  :)</strong></p>");
                            //кнопка скрытия модалки обратного звонка
                            $("#hide-contact").on("click", function () {
                                $("#form-contact").fadeOut();
                            });
                        });
                    }
                    else {
                        $("#send-text").replaceWith("<em style='color: #ff5412'>Ошибка при отправке, попробуйте позже!</em>");
                    }
                }
            });
        }
    });

    //кнопка отправки заявки 2 версия
    $("#send2").on("click", function () {
        if ($("#name2").val().length < 1) {
            $('#name2').addClass("error");
        }
        else {
            $("#name2").removeClass("error");
        }
        if ($("#phone2").val().length < 1) {
            $("#phone2").addClass("error");
        }
        else {
            $("#phone2").removeClass("error");
        }
        if ($("#name2").val().length > 0 && $("#phone2").val().length > 0) {
            // если обе проверки пройдены
            // сначала мы скрываем кнопку отправки
            $("#send2").replaceWith("<em id='send-text' style='color: #f1f1f1;'>Отправка, ожидайте</em>");
            $.ajax({
                type: 'POST',
                url: 'sendmessage.php',
                data: $("#contact").serialize(),
                success: function (data) {
                    if (data == "true") {
                        $("#contact").fadeOut("fast", function () {
                            $(this).before("<p><strong>Успешно! Ваше сообщение отправлено  :)</strong></p>");
                            setTimeout("$.fancybox.close()", 1000);
                        });
                    }
                    else {
                        $("#send-text").replaceWith("<em style='color: #ff5412'>Ошибка при отправке, попробуйте позже!</em>");
                    }
                }
            });
        }
    });
});