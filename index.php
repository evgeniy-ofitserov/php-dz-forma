<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/main.css">
  <title>Форма отправки</title>
</head>
<body>
  

<div class="form">
<h1 class="form-title">
  Форма отправки сообщения:
</h1>


<?php 

if (!empty($_POST) ) {


  $message = "Вам пришло письмо:  \n "
  
  ."Имя отправителя : " . $_POST['user'] . "\n"
  ."Email отправителя :" .  $_POST['userEmail'] . "\n"
  ."Сообщение отправителя :" . $_POST['message'];
  
  $headers = "From: eoficerov@yandex.ru";

  $resaul = mail("eoficerov@yandex.ru", "Сообщение с сайта", $message, $headers);

}

?>


<form action="index.php" method="post">

<input type="text" name="user" class="input" placeholder="Введите ваше имя">
<input type="email" name="userEmail" class="input" placeholder="Введите ваш E-mail">
<textarea name="message" id="" cols="30" rows="10" placeholder="Сообщение..." ></textarea>
<input type="submit" value="Отправить" class="btn">

<?php

if($resaul){
  echo "<font color=green class = 'infosms'> Сообщение отправлено!</font>";

}else{
    echo "<font color=red class = 'infosms'> Сообщение не отправлено!</font>";
}

?>
</form>
</div>

</body>
</html>