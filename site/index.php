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

    <?php
       if(isset($_COOKIE['user'])== false):
    ?>
    <div class="row">
      <div.class="col">
      <nav class="navbar navbar-expand-md navbar-light bg-light border-bottom shadow-sm shadow-sm mb-3">
          <div class="container">
              <a class="navbar-brand" href="./Refise11.html"><img width="50" height="50" src="./База данных Refise-Project/logo-1 (1).png"> Refise</a>
      <h2 align="right" style="color:Black">Форма регистрации</h2>
      <form action ="validation-form/check.php" method= "post">
         <input type ="text" class="form-control" name="login"
         id="login" placeholder="Введите логин"><br>
         <input type ="text" class="form-control" name="name"
         id="name" placeholder="Введите имя"><br>
         <input type ="password" class="form-control" name="pass"
         id="pass" placeholder="Введите пароль"><br>
         <button class ="btn btn-success" type="submit" >Зарегистрировать</button>
       </form>
     </div>
     <div.class="col">
     <h2 align="center" style="color:Black">Форма авторизации</h2>
     <form action ="validation-form/auth.php" method= "post">
        <input type ="text" class="form-control" name="login"
        id="login" placeholder="Введите логин"><br>
        <input type ="password" class="form-control" name="pass"
        id="pass" placeholder="Введите пароль"><br>
        <button class ="btn btn-success" type="submit" >Авторизоватьcя</button>
      </form>
    </div>
  <?php else: ?>
    <p>Привет<?=$_COOKIE['user']?>. Чтобы выйти нажмите <a href="/exit.php">здесь</a>.</p>
  <?php endif;?>



  </div>
 </div>
</body>
</html>
