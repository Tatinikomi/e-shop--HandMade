<?php include ('php/header.php')?>
<?php include ('php/menu.php')?>
<?php 
$id = $_GET['id'];
//если в id не число,остановка скрипта
if (!is_numeric($id))
exit();
?>  

	<!-- breadcrumb -->
					<!--получение массива поста-->
											<?php include 'php/function.php';?>
                      <?php $post =get_post_by_id($id);?> 
                       <!--/получение массива поста--> 
	<!-- Product Detail -->
	<div class="container  p-t-35 p-b-80">
		<div class="flex-w flex-sb">
			<div class="w-size13 p-t-30 respon5">
				<div class="wrap-slick3 flex-sb flex-w">
					<div class="wrap-slick3-dots"></div>

					<div class="slick3">
						<div class="item-slick3" data-thumb="<?echo $post['image']?>">
							<div class="wrap-pic-w">
							<? echo "<img src='" . $post['image'] . "' alt='IMG-PRODUCT' />";?>
							</div>
						</div>

						<div class="item-slick3" data-thumb="<?echo $post['img_2']?>">
							<div class="wrap-pic-w">
								<img src="images/product-detail-02.jpg" alt="IMG-PRODUCT">
							</div>
						</div>

						<div class="item-slick3" data-thumb="<?echo $post['img_3']?>">
							<div class="wrap-pic-w">
								<img src="images/product-detail-03.jpg" alt="IMG-PRODUCT">
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="w-size14 p-t-30 respon5">
				<h4 class="product-detail-name m-text16 p-b-13">
									<?php echo $post['name']?>
				</h4>

				<span class="m-text17">
									<?php echo $post['price'];?>руб.
				</span>

				<p class="s-text8 p-t-10">
									<?php echo $post['na_sklade']?>
				</p>

		
				

					<div class="flex-r-m flex-w p-t-10">
						<div class=" flex-m flex-w">
						
							<div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
								<!-- Button -->
								<button id='product' class=" add_item flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" data-id="<? echo $post['id'];?>" data-title="<?php echo $post['name'];?>"data-price="<?php echo $post['price'];?>" data-img="<? echo $post['image'];?>" data-count="100500">
									В корзину
								</button>								
							</div>
							<!--  -->
							<p class="s-text8">
											<?php echo $post['opisanie']?>
						</p>
					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
											<?php echo $post['opisanie']?>
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
