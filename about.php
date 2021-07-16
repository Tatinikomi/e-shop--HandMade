<?php include ('php/header.php')?>
<?php include ('php/menu.php')?>


	<!-- Title Page -->
	

	<!-- content page -->
	<section class=" p-t-66 p-b-38">
		<div class="container">
			<div class="row">
				<div class="col-md-4 p-b-30">
					<div class="hov-img-zoom">
						<img src="images/banner-14.jpg" alt="IMG-ABOUT">
					</div>
				</div>

				<div class="col-md-8 p-b-30">
					<h3 class="m-text26 p-t-15 p-b-16">
						О нас 
					</h3>
					  <!--sql запрос на вывод категорий товаров-->
						<?
                $result = mysqli_query($connection,"SELECT * FROM tblpage where PageType='aboutus'");
        	 						?>     
					<!--/sql запрос на вывод категорий товаров--->

                        <?php 
                            while ($row = mysqli_fetch_assoc($result))
                            {  
                        ?>  
					<!--sql-->
		
	<!--sql-->
					<p class="p-b-28">
					<?php  echo $row['PageDescription'];?>
					</p>

					<div class="bo13 p-l-29 m-l-9 p-b-10">
						<p class="p-b-11">
							
						</p>

						<span class="s-text7">
							- Команда Handmade
						</span>
					</div>
				</div>
			</div>
			<?}?>
		</div>
	</section>

	<!--подключение футера на сайт-->
	<?php include ('php/footer.php')?>