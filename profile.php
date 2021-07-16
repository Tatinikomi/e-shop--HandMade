<?php 
  session_start(); 
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "Сначала войдите в систему";
  	header('location: profile.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: profile.php");
  }
?>
<?php include ('php/header.php')?>
<?php include ('php/menu.php')?>


	<!-- Title Page -->


	<!-- content page -->
	<section class="p-t-66 p-b-38">
		<div class="container">
			<div class="row">
				<div class="col-md-4 p-b-30">
					<div class="hov-img-zoom">
						<img src="images/banner-14.jpg" alt="IMG-ABOUT">
					</div>
				</div>

				<div class="col-md-8 p-b-30">
					<h3 class="m-text26 p-t-15 p-b-16">
						Мой профиль
					</h3>

					<p class="p-b-28">
					<?php echo $_SESSION['username']; 
					
					
					?>
					</p>
				

					<div class="bo13 p-l-29 m-l-9 p-b-10">
						<p class="p-b-11">
					<form >
					<form  method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Имя пользователя</label>
  	  <p style="margin-left: 15px;">
  	  <input style="background-color: #ece0d6;" type="text" name="username"  placeholder="<?php echo $_SESSION['username']; ?>" > </p>
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
			<p style=" margin-left: 95px;">
			<input  style="background-color: #ece0d6;"  type="email" name="email" placeholder="<?php echo $_SESSION['email']; ?>" > </p>
  	</div>
  	<div class="input-group">
  	  <label>Пароль</label>
			<p style=" margin-left: 95px;">
			<input style="background-color: #ece0d6;" type="password" name="password" ></p>
  	</div>
  	</div>
  </form>
     <div id="wrapper">
  <br>
    </div>  
		</div>
				
						

						<span class="s-text7">
						
						</span>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--подключение футера на сайт-->
	<?php include ('php/footer.php')?>