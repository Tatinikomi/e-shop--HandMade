<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsaid']==0)) {
  header('location:logout.php');
  } else{
	
  ?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>Список товаров</title>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--left-fixed -navigation-->
		 <?php include_once('includes/sidebar.php');?>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		 <?php include_once('includes/header.php');?>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h3 class="title1">Блог</h3>
					
					
				
					<div class="table-responsive bs-example widget-shadow">
						<h4>Просмотреть блог:</h4>
 <?php
$fdate=$_POST['fromdate'];
$tdate=$_POST['todate'];

?>
<h5 align="center" style="color:blue"> <?php echo $fdate?> <?php echo $tdate?></h5>

						<table class="table table-bordered"> 
							<thead> <tr> 
								<th>#</th> 
								<th>№</th> 
								<th>Название </th> 
								<th>Категория </th> 
								<th>Описание</th>
								<th>img</th> 
								<th>img </th> 
								<th>img</th>
								<th>Дата</th> 
								<th>Категория </th> 
								<th>Админ</th>
								<th>Изменить</th> 
								<th>Удалить</th> 
							</tr> 
							</thead> <tbody>
<?php
$ret=mysqli_query($con,"SELECT * FROM posts");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
<!--Выводим список из бд-->
						 <tr> 
						 	<th scope="row"><?php echo $cnt;?></th> 
						 	<td><?php  echo $row['id_post'];?></td>
						 	<td><?php  echo $row['title'];?></td>
						 	<td><?php  echo $row['title_2'];?></td> 
							<td><?php  echo $row['post'];?></td>
						 	<td> <? echo "<img src='" . $row['image'] . "' alt='IMG-PRODUCT' />";?></td>
						 	<td> <? echo "<img src='" . $row['img_2'] . "' alt='IMG-PRODUCT' />";?></td> 
							<td> <? echo "<img src='" . $row['img_3'] . "' alt='IMG-PRODUCT' />";?></td>
						 	<td> <?php  echo $row['date'];?></td>
						 	<td> <?php  echo $row['id_cat'];?></td> 
						  <td><?php  echo $row['id_admin'];?></td>
					  	<td> <a href="blog.php?id_post=<? echo $row['id_post'];?>">Ред.</a></td> 
							<td> <a href="blog.php?id_post=<? echo $row['id_post'];?>">Удал.</a></td> 
						  </tr>   
              <?php $cnt=$cnt+1;}?>
              </tbody>
              </table> 
					</div>
				</div>
			</div>
		</div>
		<!--footer-->
		 <?php include_once('includes/footer.php');?>
        <!--//footer-->
	</div>
	<!-- Classie -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.js"> </script>
</body>
</html>
<?php } ?>