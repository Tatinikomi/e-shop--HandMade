<?php 
$id_mk = $_GET['id_mk'];
//если в id не число,остановка скрипта
if (!is_numeric($id_mk))
exit();
?>   

<?php include ('php/header.php')?>
<?php include ('php/menu.php')?>

																<!--получение массива поста-->
																				<?php include 'php/funktmk.php';?>
                                         <?php $post =get_post_by_id($id_mk);?> 
                              <!--/получение массива поста--> 
	<!-- breadcrumb -->
	<div class="bread-crumb  flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
		<a href="index.php" class="s-text16">
			Главная 
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

		<a href="blog.html" class="s-text16">
			Блог
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

		<span class="s-text17">

												<?php echo $post['title'];?>

		</span>
	</div>

	<!-- content page -->
		<!-- Banner2 -->
		<section class="banner2 bg5 p-t-55 p-b-55">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto p-t-15 p-b-15">
					<div class="hov-img-zoom pos-relative">

					<? echo "<img src='" . $post['img_3'] . "' alt='IMG-BLOG' />"; ?>  

						<div class="ab-t-l sizefull flex-col-c-m p-l-15 p-r-15">
							<span class="m-text9 p-t-45 fs-20-sm">

							</span>
							<h3 class="l-text1 fs-35-sm">
									<?php echo $post['title'];?>
							</h3>

							<a href="#" class="s-text4 hov2 p-t-20 ">
							<?php echo $post['title_2'];?>
							</a>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto p-t-15 p-b-15">
					<div class=" hov-img-zoom pos-relative p-b-20per-ssm">
					<? echo "<img src='" . $post['img_2'] . "' alt='IMG-BLOG' />"; ?>  

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class=" p-t-60 p-b-25">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9 p-b-80">
					<div class="p-r-50 p-r-0-lg">
						<div class="p-b-40">
								<p class="p-b-25 text">
								<?php echo $post['post']?>
								</p>
							</div>
							<div class="flex-m flex-w p-t-20">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--подключение футера на сайт-->
	<?php include ('php/footer.php')?>
