/**
 * Created by игорь on 07.02.2018.
 * Функция подсчета стоимости услуг на создания дизайна сайта
 */
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
    var price = 0;
    // console.log(flask.selectedOptions.length);
    for(var i =0; i< flask.selectedOptions.length; i++){
        price += parseInt(flask.selectedOptions[i].value.split(':')[1]);
    }
    for(var i =0; i< tobacco.selectedOptions.length; i++){
        price += parseInt(tobacco.selectedOptions[i].value.split(':')[1]);
    }
    price = parseInt(count.value) * 1200;

    result.innerHTML = price;
    resultInput.value = price;
}
