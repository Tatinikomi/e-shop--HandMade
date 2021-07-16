<?php include ('php/header.php')?>
<?php include ('php/menuindex.php')?>
<!--/Меню-->
	<!-- Slide1 -->
	<section class="slide1">
		<div class="wrap-slick1">
			<div class="slick1">
				
			<?php
                $result = mysqli_query($connection,"SELECT * FROM `design` WHERE id=1");
            ?>
					<!--sql-->
													<?php 
                            while ($design = mysqli_fetch_assoc($result))
                            {  
                          ?>
				<div class="item-slick1 item1-slick1" style="background-image: url(<?echo $design['img1']; ?>);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
							
						</span>

						
						</div>
					</div>
				
				</div>
				<?}?>
		

			</div>
		</div>
	</section>

	<!-- Shipping 
	<section class="shipping bgwhite p-t-62 p-b-46">
		<div class="flex-w p-l-15 p-r-15">
			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
				<h4 class="m-text12 t-center">
					30 Days Return
				</h4>

				<span class="s-text11 t-center">
					Simply return it within 30 days for.
				</span>
			</div>

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
				<h4 class="m-text12 t-center">
					30 Days Return
				</h4>

				<span class="s-text11 t-center">
					Simply return it within 30 days for.
				</span>
			</div>

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
				<h4 class="m-text12 t-center">
					30 Days Return
				</h4>

				<span class="s-text11 t-center">
					Simply return it within 30 days for.
				</span>
			</div>
		</div>
	</section>-->


	<!-- Banner -->
	<section class="banner  p-t-40 p-b-40">
		<div class="container">
			<div class="row">
			<!--sql-->
											<?php
                $result = mysqli_query($connection,"SELECT * FROM `category`WHERE `id_cat` NOT IN (1,3,6)");
            					?>
					<!--sql-->
													<?php 
                            while ($category = mysqli_fetch_assoc($result))
                            {  
                          ?>
	 <div class="card__item flex-w p-l-15 p-r-15">
			 <div class="card__inner">
			 <a class="nav__linkimg" href="<?php echo $category['str'];?>"><?php echo $category['cat_name'];?></a>
					 <div class="card__img">
					 <a href="<?php echo $category['str'];?>">  
					 <?                                               
     					echo "<img src='" . $category['image'] . "' alt='' />";
		 				?>  
		  </a>
					 </div>
					 <div class="card__text"> 
							 <div class="social">
									 <a class="nav__link" href="<?php echo $category['str'];?>">

									 <?php echo $category['cat_name'];?>
									 
									</a>
							 </div>
					 </div>
			 </div>
	 </div>
										 <?
                  				 }
                    ?>
	 <!-- /.card__item -->


		

			</div>
		</div>
	</section>


		<!--подключение футера на сайт-->
	<?php include ('php/footer.php')?>