<!-- Menu -->
<div class="wrap_menu">

					<nav class="menu">
						<ul class="main_menu">
									<!--sql-->
									<?
                $result = mysqli_query($connection,"SELECT * FROM category WHERE id_cat>1");
        	 						?>  
											 <!--sql-->
											 <?php 
                            while ($cat = mysqli_fetch_assoc($result))
                            {  
                        ?>  
							<li>
								<a href="<?php echo $cat['str'];?>"><?php echo $cat['cat_name'];?></a>
							</li>
													<?
																				}
													?>

						<!--	<li>
								<a href="contact.php">Contact</a>
							</li>-->
						</ul>
					</nav>
				</div>
	<!-- Header Icon -->
	<div class="header-icons">
				<!--вход и регистрация-->
						<li class="dropdown head-dpdn">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON"><span class="badge blue"><?php echo $num;?></span></a>
              
              <ul class=" dropdown-menu ">
							<form class="log" method="post" action="#dropdown">
                <li>
                  <div class="notification_header">
																			<h3><p>Вход</p></h3>
																			<?php echo $_SESSION['username']; ?>
                  </div>
                </li>
                <li>
            
                   <div class="notification_desc">	 
  	<?php include('errors.php'); ?>
  	<div class="input-group" style="
    width: 200px; height: 30px; left:10%;">						
  		<input type="text" name="username"  placeholder="Имя 	<?php echo $_SESSION['username']; ?>" >
  	</div>
  	<div class="input-group" style="
    width: 200px; height: 30px;left:10%;">
  		<input type="password" name="password" placeholder="Пароль">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btnform" name="login_user" >Вход</button>
  	</div>
		<p>
  		Нет аккаунта? <a class="nav__link" href="register.php">Создать</a>
  	</p>
  	<p>
  		Забыли пароль? <a class="nav__link" href="recovery.php">Восстановить</a>
  	</p>
      <div id="wrapper">
  <br>
    </div>        
                  </div>
              </ul>
            </li> 
          </ul>
          <div class="clearfix"> </div>
        </div>
					</a>

					<span class="linedivide1"></span>
						<div class="header-wrapicon2">
						<span class="label-place header-icon1 js-show-header-dropdown"></span> 
					</div>
					</form>
				</div>
			</div>
		</div>	<!--вход и регистрация-->


		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="index.php" class="logo-mobile">
				<img src="images/icons/logo.png" alt="IMG-LOGO">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					<a href="#" class="header-wrapicon1 dis-block">
						<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide2"></span>

					<div class="header-wrapicon2">
							</div>
						</div>
					</div>
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">
					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
					<!--	<span class="topbar-child1">
							Free shipping for standard order over $100
						</span>
					</li>-->

					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<div class="topbar-child2-mobile">
							<span class="topbar-email">
								fashe@example.com
							</span>

							
						</div>
					</li>

					<li class="item-topbar-mobile p-l-10">
						<div class="topbar-social-mobile">
						
							<a href="#" class="topbar-social-item fa fa-instagram"></a>
	
						</div>
					</li>

				<!--	<li class="item-menu-mobile">
						<a href="index.php">Home</a>
						<ul class="sub-menu">
							<li><a href="index.php">Homepage V1</a></li>
							<li><a href="home-02.html">Homepage V2</a></li>
							<li><a href="home-03.html">Homepage V3</a></li>
						</ul>
						<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
					</li>-->

					<li class="item-menu-mobile">
						<a href="product.php">Материалы для творчества</a>
					</li>

					<li class="item-menu-mobile">
						<a href="rr.php">Ручная работа</a>
					</li>

					<li class="item-menu-mobile">
						<a href="m-k.php">Мастер-классы</a>
					</li>

					<li class="item-menu-mobile">
						<a href="blog.php">Блог</a>
					</li>

					<li class="item-menu-mobile">
						<a href="about.php">О компании</a>
					</li>

				<!--	<li class="item-menu-mobile">
						<a href="contact.php">Contact</a>
					</li>-->
				</ul>
			</nav>
		</div>
	</header>