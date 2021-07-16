<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="style(2).css">
    <link href="css/jqcart.css" rel="stylesheet" type="text/css">
</head>
<body>

	
  <form class="log" method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Имя пользователя</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Пароль</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Повторите пароль</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btnform" name="reg_user">Зарегестрироваться</button>
	  <button type="submit" class="btnform"><a class="nav__link" href="index.php"> На главную</a></button>

  	</div>
  	<p>
  		Уже есть аккаунт? <a class="nav__link" href="login.php">Войти</a>
  	</p>
  </form>
     <div id="wrapper">
  <br>
    </div>  
</body>
</html>