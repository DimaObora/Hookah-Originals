/**
 * Created by игорь on 07.02.2018.
 */
/*
 * Функция подсчета стоимости услуг на создания дизайна сайта
 */
function calc() {
    //получаем ссылку на элемент Select (Выберите вкус кальяна)
    var taste = document.getElementById("taste");
    //получаем ссылку на элемент Select (Что налить в колбу:)
    var flask = document.getElementById("flask");
    //получаем ссылку на элемент Select (Выберите тобак:)
    var tobacco = document.getElementById("tobacco");
    //получаем ссылку на элемент input (Кол-во вариантов)
    var count = document.getElementById("count");
    //получаем ссылку на элемент span, в него будем писать стоимость дизайна
    var result = document.getElementById("result");

    var price = 0;
    price += parseInt(taste.options[taste.selectedIndex].value);
    price += parseInt(flask.options[flask.selectedIndex].value);
    price += parseInt(tobacco.options[tobacco.selectedIndex].value);
    price = parseInt(count.value) * price;

    result.innerHTML = price;
}
