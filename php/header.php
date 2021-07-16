<?php include('server.php') ?>  <!--вход пользователя на сайт если он уже зарегестрирован -->
<?php include ('db/db.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Handmade</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/style(2).css">
	<link rel="stylesheet" href="css/cookie.css">
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
 <!--Корзина товаров-->
 <link href="css/jqcart.css" rel="stylesheet" type="text/css">
    <script src="js/jqcart.min.js"></script>
      <!--Корзина товаров-->
<script>
$(function(){
	'use strict';	
	// инициализация плагина
	$.jqCart({
			buttons: '.add_item',
			handler: 'js/developer/handler.php',
			cartLabel: '.label-place',
			visibleLabel: true,
			openByAdding: false,
			currency: 'руб'
	});	
	// Пример с дополнительными методами
	$('#open').click(function(){
		$.jqCart('openCart'); // открыть корзину
	});
	$('#clear').click(function(){
		$.jqCart('clearCart'); // очистить корзину
	});	
});
</script>

</head>
<body>

											<!--sql запрос-->
											<?
                $result = mysqli_query($connection,"SELECT * FROM tblpage WHERE PageType='contactus'");
        	 									?>     
										<!--/sql запрос-->

                       		 <?php 
                            while ($contactus = mysqli_fetch_assoc($result))
                            {  
                            ?>  
	<!-- Header -->
	<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="topbar">
				<div class="topbar-social">
					<a href="<?php echo $contactus['PageDescription'];?>" class="topbar-social-item fa fa-instagram"></a>
				</div>

				<span class="topbar-child1">
					
		
				<!-- Logo -->
				<a href="index.php" class="logo">
				<?php echo $contactus['img_logo'];?>
				</a>

				</span>

				<div class="topbar-child2">
					<span class="topbar-email">
					<a href= "mailto:<?php echo $contactus['Email'];?>" class="topbar-email"><?php echo $contactus['Email'];?></a>
					</span>

				</div>
			</div>
<? }?>
					
			<div class="wrap_header">
				<!-- Logo -->
			