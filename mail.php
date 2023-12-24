<?php
    $fio = $_POST['fio'];
    $number = $_POST['phone'];
    $fio = htmlspecialchars($fio);
    $number = htmlspecialchars($number);
    $fio = urldecode($fio);
    $number = urldecode($number);
    $fio = trim($fio);
    $number = trim($number);


    if (empty($_POST['fio'])) {
        echo 'Вы не заполнили Имя';
    }

    if (empty($_POST['phone'])) {
        echo 'Вы не заполнили Телефон';
    }
   
    if (mail("nairanairena@gmail.com", "Заявка с сайта", "ФИО:".$fio. "\nТелефон: ".$number ,"From: nairena_mail_site@nairena.ru  \r\n"))
    {     echo "";
    } else {
        echo "при отправке сообщения возникли ошибки";
    }

    ini_set('short_open_tag', 'On');

?>