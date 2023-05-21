<?php
      $login= filter_var (trim($_POST['login']), FILTER_SANITIZE_SPECIAL_CHARS);
      $pass= filter_var (trim($_POST['pass']), FILTER_SANITIZE_SPECIAL_CHARS);

      $pass= md5($pass."ghsqellk12345");

      $mysql= new mysqli('localhost','root','root','register-refise');
      $result= $mysql -> query("SELECT * FROM `users` WHERE `login`='$login' AND `pass`= '$pass'");
      $result= $user -> fetch_assoc();
       if(is_array($user) == 0){
        echo "Такой пользователь не найден";
        exit();
      }


      $mysql->close();

      header('Location: /');www
?>
