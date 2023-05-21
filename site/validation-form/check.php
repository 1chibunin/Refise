<?php
  $login = filter_var (trim($_POST['login']), FILTER_SANITIZE_SPECIAL_CHARS);
  $name = filter_var (trim($_POST['name']), FILTER_SANITIZE_SPECIAL_CHARS);
  $pass = filter_var (trim($_POST['pass']), FILTER_SANITIZE_SPECIAL_CHARS);

  if(mb_strlen($login)< 5 || mb_strlen($login) > 90) {
    echo "Недопустимая длина логина";
    exit();
  } else if(mb_strlen($name)<3 || mb_strlen($name)>50){
    echo "Недопустимая длина имени";
    exit();
  } else if(mb_strlen($pass)< 5 || mb_strlen($pass) > 10){
    echo "Недопустимая длина пароля(от 5 до 10 символов)";
    exit();
  }

  $pass = md5($pass."ghsqellk12345");

  $mysql = new mysqli('localhost','root','root','register-refise');
  $mysql ->query("INSERT INTO `users`(`login`,`pass`,`name`)
  VALUES('$login', '$pass', '$name')");


  $mysql->close();

  header('Location: /');

?>
