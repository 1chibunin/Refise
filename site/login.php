<!DOCTYPE html>
<html lang="ru">
<head>
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <link rel="stylesheet" href="./База данных Refise-Project/bootstrap.css">
      <link rel="stylesheet" href="./База данных Refise-Project/app.css">
      <link rel="stylesheet" href="style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Refise</title>
      <link rel="icon" href="./База данных Refise-Project/logo-1 (1).png" type="image/png">
  </head>
<body>
    <div class = "fonsite"
    </div>
    <style>.fonsite{
      background-size: cover;
      background-image:url(joker.jpg)

    }
  </style>
     <div class ="container mt-4">
    <div.class="col">
     <h2 align="center" style="color:Black"></h2>
     <form action ="login.php" method= "POST">
        &nbsp;
        <input type ="text" class="form-control" name="login"
        id="login" placeholder="Введите логин"><br>
        &nbsp;
        <input type ="password" class="form-control" name="pass"
        id="pass" placeholder="Введите пароль"><br>
        
        
        <button class ="btn btn-lg btn-primary btn block" type="submit" >Авторизоваться</button>
        &nbsp;
        <a href = "Refise11.html" class = "btn btn-lg btn-primary btn block">На главную</a>
        &nbsp;
      </form>
    </div>
    <?php
session_start();
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass= filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);


$mysql = new mysqli('localhost', 'root', 'root', 'refisebd');
$result = $mysql->query("SELECT * FROM users WHERE login='$login' AND pass='$pass'");
$user = $result->fetch_assoc();


if(count($user) == 0){
echo "Вы не атворизовались";
}else{
echo "Вы авторизованы";
}
session_destroy();


?>