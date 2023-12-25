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

<!DOCTYPE html>
<html></html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Спасибо! Мы свяжемся с вами!</title>
        <meta name="generator">
        <link href="https://fonts.googleapis.com/css2?family=Anton&family=DM+Sans&family=Mulish:ital,wght@0,600;1,400&family=Open+Sans&family=Poppins:wght@400;600&family=Rubik:wght@300&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
        <link type="text/javascript">
        <script type="text/javascript">
            const handleLocation = () => {
                location.replace("/index.html");
            }
            // setTimeout('location.replace("/index.html")', 3000);
            /*Изменить текущий адрес страницы через 3 секунды (3000 миллисекунд)*/
        </script>
            
        <style>
            body{
                margin: 0;
                height: 100vh;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                background-color: #ffffff;
                font-family: 'Open Sans', sans-serif;
                font-style: normal;
            }

            .mail_img {
                width: 30%;
                height: 40%;
                background-image: url('/images/poka-poka.jpg');
                background-size: cover;
            }

            .mail_container{
                width: 550px;
                height: 400px;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                border-radius: 10px;
                box-shadow: 0px 6px 6px -2px rgb(0 0 0 / 10%), 0px 6px 12px 0px rgb(0 0 0 / 7%), 0px 3px 24px 0px rgb(0 0 0 / 6%)
            }

            .mail_title{
                color: rgb(31, 31, 31);
                font-size: 26px;
                text-align: center;
            }

            .mail_btn{
                border: 1px solid black;
                outline: none;
                padding: 15px 0px;
                background-color: none;
                width: 200px;
                font-weight: 400;
                font-size: 16px;
                cursor: pointer;
                color: black;
            }

            .mail_title, .mail_text{
                line-height: 10px;
            }
        </style>
    </head>
    <body>
        <div class="mail_container">
            <div class="mail_img"></div>
            <h1 class="mail_title">Спасибо за обращение!</h1>
            <h3 class="mail_text">В ближайшее время мы с вами свяжемся.</h3>
            <button type="button" onClick="handleLocation()" class="mail_btn">Вернуться назад</button>
        </div>
    </body>
</html>