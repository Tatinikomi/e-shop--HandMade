<?php include 'php/header.php'; ?>
<?php include 'php/menu.php';?>
	<section class="p-t-66 p-b-38">
		<div class="container">
			<div class="row">
				<div class="col-md-4 p-b-30">
					<div class="hov-img-zoom">
						<img src="images/banner-14.jpg" alt="IMG-ABOUT">
					</div>
				</div>
<form  method="post" action="post_recovery.php">
  	<div class="input-group">
  		<label>Имя пользователя</label>
  		<p style=" margin-left: 95px;">
  		<input style="background-color: #ece0d6;" type="text" name="username" ></p>
  	</div>

  	<div class="input-group">
  		<button type="submit" class="btnform">Восстановление</button>
  	</div>
	</form>
	</div>
			</div>
		</div>
	</section>
	<?php include 'php/footer.php';?>