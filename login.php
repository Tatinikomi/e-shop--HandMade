<?php include('server.php') ?>  <!--вход пользователя на сайт если он уже зарегестрирован -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="style(2).css">
    <link href="css/jqcart.css" rel="stylesheet" type="text/css">
</head>
<body>


  <form class="log" method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Имя пользователя</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Пароль</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btnform" name="login_user">Вход</button>
  	</div>
  	<p>
  		Нет аккаунта? <a class="nav__link" href="register.php">Создать</a>
  	</p>
  	<p>
  		Забыли пароль? <a class="nav__link" href="recovery.php">Восстановить</a>
  	</p>
  </form>
      <div id="wrapper">
  <br>
    </div> 
</body>
  
</html>
