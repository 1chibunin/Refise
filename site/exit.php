<?php
  setcoockie('user', $user['name'], time() - 3600,"/");
  header('Location: /');
 ?>
