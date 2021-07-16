
	<!-- Footer -->
	<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
		<div class="flex-w p-b-90">
			<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					Связаться
				</h4>

				<div>
				<?
                $result = mysqli_query($connection,"SELECT * FROM tblpage WHERE PageType='contactus'");
        	 									?>     
										<!--/sql запрос-->

                       		 <?php 
                            while ($contactus = mysqli_fetch_assoc($result))
                            {  
                            ?>  
					<p class="s-text7 w-size27">
					Если есть вопрсы вы можите обратиться к нам 	<a href= "mailto:<?php echo $contactus['Email'];?>" class="topbar-email"><?php echo $contactus['Email'];?></a>
					</p>
				
					<div class="flex-m p-t-30">
					<a href="<?php echo $contactus['PageDescription'];?>" class="topbar-social-item fa fa-instagram"></a>
					</div>
					<?}?>
				</div>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Материалы
				</h4>
								<!--sql-->
								<?
                $result = mysqli_query($connection,"SELECT * FROM category WHERE id_cat>1");
        	 						?>  
											 
											 <ul>
									 <!--sql-->
											 <?php 
                            while ($cat = mysqli_fetch_assoc($result))
                            {  
                        ?>  
							<li>
							<li class="p-b-9">
							<a href="<?php echo $cat['str']; ?>" class="s-text7"><?php echo $cat['cat_name'];?></a>
					</li>
					<?}?>
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Ссылки
				</h4>
							<!--sql-->
							<?
                $result = mysqli_query($connection,"SELECT * FROM links ");
        	 						?>  
											 
											 <ul>
									 <!--sql-->
											 <?php 
                            while ($links = mysqli_fetch_assoc($result))
                            {  
                        ?>  
					<li class="p-b-9">
					<a href="<?php echo $links['str']; ?>" class="s-text7"><?php echo $links['name'];?></a>
						</a>
					</li>
					<?}?>
				</ul>
			</div>

			

			<div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
		
				</h4>

			</div>
		</div>

		<div class="t-center p-l-15 p-r-15">
			

			<div class="t-center s-text8 p-t-20">
				Copyright © 2021  |  <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="mailto:handmadetati@mail.ru" target="_blank">Mikhailova Tatiana</a>
			</div>
		</div>
	</footer>



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>
	<!--Уведомление об использовании файлов куки-->
	<div class="cookie-block">
      Мы используем файлы cookie для наилучшей работы сайта.

        <button class="ok">Принимаю</button>
    </div>
    <script src="js/cookie.min.js"></script>
    <script src="js/cookie.js"></script>
			<!--Уведомление об использовании файлов куки-->
	<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>



<!--===============================================================================================-->

<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
	<script type="text/javascript" src="search.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').php();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').php();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});

		$('.btn-addcart-product-detail').each(function(){
			var nameProduct = $('.product-detail-name').php();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>

			<!---->

	<script src="js/main.js"></script>

</body>
</html>
