<?php include ('php/header.php')?>
<?php include ('php/menu.php')?>
	<!-- Slide1 -->
		<!-- Banner -->
	<section class="banner  p-t-40 p-b-40">
		<div class="container">
			<div class="row">
			<!--sql-->
											<?php
                $result = mysqli_query($connection,"SELECT * FROM `mk`");
            					?>
					<!--sql-->
													<?php 
                            while ($post = mysqli_fetch_assoc($result))
                            {  
                          ?>
	 <div class="card__item flex-w p-l-15 p-r-15">
			 <div class="card__inner">
			 <a class="nav__linkimg"  href="m-k-detail.php?id_mk=<? echo $post['id_mk'];?>"><?php echo $post['title'];?></a>
					 <div class="card__img">
					 <a href="m-k-detail.php?id_mk=<?php echo $post['id_mk'];?>">  
					 <?                                               
     					echo "<img src='" . $post['image'] . "' alt='' />";
		 				?>  
		  </a>
					 </div>
					 <div class="card__text"> 
							 <div class="social">
									 <a class="nav__link"  href="m-k-detail.php?id_mk=<? echo $post['id_mk'];?>">

									 <?php echo $post['title'];?>
									 
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