<?php
$sendto   = "web-originals@yandex.ru";
$address = $_POST['address'];
$username = $_POST['name'];
$userphone = $_POST['phone'];
$usercount = $_POST['count'];
$userflask = $_POST['flask'];
$usertobacco = $_POST['tobacco'];
// Формирование заголовка письма
$subject  = "Новое сообщение";
$headers  = "From: " . strip_tags($username) . "\r\n";
$headers .= "Reply-To: ". strip_tags($username) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";
// Формирование тела письма
$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Новое сообщение </h2>\r\n";
$msg .= "<p><strong>Имя:</strong> ".$username."</p>\r\n";
$msg .= "<p><strong>Номер телефона:</strong> ".$userphone."</p>\r\n";
$msg .= "<p><strong>Адресс:</strong> ".$username."</p>\r\n";
$msg .= "<p><strong>Количество кальянов:</strong> ".$usercount."</p>\r\n";
$msg .= "<p><strong>Что налить  колбу:</strong> ".$userflask."</p>\r\n";
$msg .= "<p><strong>Табак:</strong> ".$usertobacco."</p>\r\n";
$msg .= "</body></html>";


$msgvk .= "Имя:".$username."\r\n";
$msgvk .= "Номер телефона: ".$userphone."\r\n";
$msgvk .= "Адресс: ".$username."\r\n";
$msgvk .= "Количество кальянов:".$usercount."\r\n";
$msgvk .= "Что налить  колбу:".$userflask."\r\n";
$msgvk .= "Табак:".$usertobacco."\r\n";

send("2000000182",'Заказ кальяна'."\r\n".$msgvk);

//// отправка сообщения
//if (@mail($sendto, $subject, $msg, $headers)) {
//    echo "true";
//} else {
//    echo "false";
//}


function send($id, $message)
{
    echo $message;exit;
    $access_tocken = "5421b067c9d1ca7dca56361fdc232c2ff04a8c9f6fb50f02992aa5b91c122398cb5c3eede760689e41fda";
    $secret = "9e5c1789c3eebc1d75";
    $url = 'https://api.vk.com/method/messages.send';
    $params = array(
        'peer_id' => $id,    // Кому отправляем
        'message' => $message,   // Что отправляем
        'access_token' => $access_tocken,  // access_token можно вбить хардкодом, если работа будет идти из под одного юзера
        'v'=>'5.38',
    );
    $sig = md5("/method/messages.send?".http_build_query($params).$secret);
    $params['sig']= $sig;
    // В $result вернется id отправленного сообщения
    $result = file_get_contents($url, false, stream_context_create(array(
        'http' => array(
            'method' => 'POST',
            'header' => 'Content-type: application/x-www-form-urlencoded',
            'content' => http_build_query($params)
        )
    )));
}

?>
