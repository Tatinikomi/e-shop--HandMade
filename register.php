<?php include ('php/header.php')?>
<?php include ('php/menu.php')?>
	<!-- content page -->
	<section class="p-t-66 p-b-38">
		<div class="container">
			<div class="row">
				<div class="col-md-4 p-b-30">
					<div class="hov-img-zoom">
						<img src="images/banner-14.jpg" alt="IMG-ABOUT">
					</div>
				</div>

  <form  method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Имя пользователя</label>
			<p style=" margin-left: 15px;">
  	  <input style="background-color: #ece0d6;" type="text" name="username" value="<?php echo $username; ?>"></p>
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
			<p style=" margin-left: 95px;">
  	  <input  style="background-color: #ece0d6;" type="email" name="email" value="<?php echo $email; ?>"></p>
  	</div>
  	<div class="input-group">
  	  <label>Пароль</label><p style=" margin-left: 85px;">
  	  <input style="background-color: #ece0d6;" type="password" name="password_1"></p>
  	</div>
  	<div class="input-group">
  	  <label>Повторите пароль</label><p style=" margin-left: 15px;">
  	  <input style="background-color: #ece0d6;" type="password" name="password_2"></p>
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btnform" name="reg_user">Зарегестрироваться</button>
	  <button type="submit" class="btnform"><a class="nav__link" href="../index.php"> На главную</a></button>

  	</div>
  	<p>
  	
  	</p>
  </form>
     <div id="wrapper">
  <br>
    </div>  
		</div>
				</div>
			</div>
		</div>
	</section>

	<!--подключение футера на сайт-->
	<?php include ('php/footer.php')?>