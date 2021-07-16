<?php include ('php/header.php')?>
<?php include ('php/menu.php')?>
<?php 
$id_rabot = $_GET['id_rabot'];
//если в id не число,остановка скрипта
if (!is_numeric($id_rabot))
exit();
?>  

	<!-- breadcrumb -->
					<!--получение массива поста-->
											<?php include 'php/functrr.php';?>
                      <?php $rabota =get_post_by_id($id_rabot);?> 
                       <!--/получение массива поста--> 
	<!-- Product Detail -->
	<div class="container  p-t-35 p-b-80">
		<div class="flex-w flex-sb">
			<div class="w-size13 p-t-30 respon5">
				<div class="wrap-slick3 flex-sb flex-w">
					<div class="wrap-slick3-dots"></div>

					<div class="slick3">
						<div class="item-slick3" data-thumb="<?echo $rabota['image']?>">
							<div class="wrap-pic-w">
							<? echo "<img src='" . $rabota['image'] . "' alt='IMG-PRODUCT' />";?>
							</div>
						</div>

						<div class="item-slick3" data-thumb="<?echo $rabota['img_2']?>">
							<div class="wrap-pic-w">
							<? echo "<img src='" . $rabota['img_2'] . "' alt='IMG-PRODUCT' />";?>
							</div>
						</div>

						<div class="item-slick3" data-thumb="<?echo $rabota['img_3']?>">
							<div class="wrap-pic-w">
							<? echo "<img src='" . $rabota['img_3'] . "'  />";?>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="w-size14 p-t-30 respon5">
				<h4 class="product-detail-name m-text16 p-b-13">
									<?php echo $rabota['name']?>
				</h4>

				<span class="m-text17">
									<?php echo $rabota['stoimost'];?>руб.
				</span>

		
				

					<div class="flex-r-m flex-w p-t-10">
						<div class=" flex-m flex-w">
						
							<div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
								<!-- Button -->
								<button id='wicartbutton_001' class=" add_item flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" data-id="<? echo $rabota['id_rabot'];?>" data-title="<?php echo $rabota['name'];?>"data-price="<?php echo $rabota['stoimost'];?>" data-img="<? echo $rabota['image'];?>" data-count="100500">
									В корзину
								</button>								
							</div>
							<!--  -->
							<p class="s-text8">
											<?php echo $rabota['opisanie']?>
						</p>
					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
											<?php echo $rabota['opisanie']?>
						</p>
					</div>
				</div>
						</div>
					</div>
				</div>

				
<!--
				<div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Additional information
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
							Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat
						</p>
					</div>
				</div>

				<div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Reviews (0)
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
							Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat
						</p>
					</div>
				</div>
			</div>-->
		</div>
	</div>


							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>
	<!--подключение футера на сайт-->
	<?php include ('php/footer.php')?>
