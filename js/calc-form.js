/**
 * Created by игорь on 07.02.2018.
 * Функция подсчета стоимости услуг на создания дизайна сайта
 */
$(document).ready(function () {
    calc();
});

function calc() {
    //получаем ссылку на элемент Select (Что налить в колбу:)
    var flask = document.getElementById("flask");
    //получаем ссылку на элемент Select (Выберите тобак:)
    var tobacco = document.getElementById("tobacco");
    //получаем ссылку на элемент input (Кол-во вариантов)
    var count = document.getElementById("count");
    //получаем ссылку на элемент span, в него будем писать стоимость дизайна
    var result = document.getElementById("result");
    var resultInput = document.getElementById("result-input");
    //за заказ 1 кальяна
    var priceOne = document.getElementById("price-hookah-one").value;
    //за каждые сутки аренды
    var priceDay = document.getElementById("price-hookah-day").value;
    // доставить
    var datefrom = document.getElementById("datefromhiden");
    datefrom = datefrom == null ? 0 : datefrom.value;
    //забрать
    var dateto = document.getElementById("datetohiden");
    dateto = dateto == null ? 0 : dateto.value;
    //количесто дней аренды
    var countDay = (dateto - datefrom) / 60 / 60 / 24 ;
    countDay = (countDay < 0 ? 0 : countDay);

    var price = 0;
    for (var i = 0; i < flask.selectedOptions.length; i++) {
        price += parseInt(flask.selectedOptions[i].value.split(':')[1]);
    }
    for (var i = 0; i < tobacco.selectedOptions.length; i++) {
        price += parseInt(tobacco.selectedOptions[i].value.split(':')[1]);
    }
    price += parseInt(count.value) * priceOne;
    price += parseInt(count.value) * countDay * priceDay;
    result.innerHTML = price;
    resultInput.value = price;
}
