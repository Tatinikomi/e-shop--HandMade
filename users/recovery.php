<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
     <link rel="stylesheet" type="text/css" href="style(2).css">
    <link href="css/jqcart.css" rel="stylesheet" type="text/css">
<title>Восстановление пароля</title>
</head>
<body>
<?php include 'php/header.php'; ?>
<form class="log" method="post" action="post_recovery.php">
  	<div class="input-group">
  		<label>Имя пользователя</label>
  		<input type="text" name="username" >
  	</div>

  	<div class="input-group">
  		<button type="submit" class="btnform">Восстановление</button>
  	</div>
	</form>
</body>
  
</html>
