<?php
session_start();
error_reporting(0);
$id = $_GET['id'];
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsaid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['submit']))
  {
	
  	$name=$_POST['name'];
    $cat_produkt=$_POST['cat_produkt'];
		$opisanie=$_POST['opisanie'];
    $image=$_POST['image'];
		$img_2=$_POST['img_2'];
    $img_3=$_POST['img_3'];
		$stoimost_zakypki=$_POST['stoimost_zakypki'];
    $na_sklade=$_POST['na_sklade'];	
		$kol_vo=$_POST['kol_vo'];
    $price=$_POST['price'];	

		$query=mysqli_query($con,"UPDATE tblproduct set cat_produkt='$cat_produkt',`name`='$name',opisanie='$opisanie',`image`='$image', img_2='$img_2',img_3='$img_3',stoimost_zakypki='$stoimost_zakypki',na_sklade='$na_sklade',kol_vo='$kol_vo',price='$price' WHERE  id='$id'");
    if ($query) {
    $msg="Страница изменена.";
  }
  else
    {
      $msg="Что-то пошло не так, повторите попытку.";
    }
}

  ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>Товары</title>

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
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
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
				<div class="forms">
					<h3 class="title1">Продукт</h3>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>Обновить:</h4>
						</div>
						<div class="form-body">
							<form method="post">
								<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
								
								<?php
							$ret=mysqli_query($con,"select * from  tblproduct where id='$id'");
							$cnt=1;
							while ($row=mysqli_fetch_array($ret)) {
								?>

							 <div class="form-group"> <label for="exampleInputEmail1">Категория товара</label> <input type="text" class="form-control" name="cat_produkt" id="cat_produkt" value="<?php  echo $row['cat_produkt'];?>" required="true"> 

							 <label for="exampleInputEmail1">Название товара</label> <input type="text" class="form-control" name="name" id="name" value="<?php  echo $row['name'];?>" required="true"> 
							 
							 <label for="exampleInputEmail1">Стоимость закупки</label> <input type="text" class="form-control" name="stoimost_zakypki" id="stoimost_zakypki" value="<?php  echo $row['stoimost_zakypki'];?>" required="true"> 

							 <label for="exampleInputEmail1">На складе</label> <input type="text" class="form-control" name="na_sklade" id="na_sklade" value="<?php  echo $row['na_sklade'];?>" required="true">

							 <label for="exampleInputEmail1">Количество</label> <input type="text" class="form-control" name="kol_vo" id="kol_vo" value="<?php  echo $row['kol_vo'];?>" required="true">

								
							 <label for="exampleInputEmail1">Стоимость продажи</label> <input type="text" class="form-control" name="price" id="price" value="<?php  echo $row['price'];?>" required="true">

							 <label for="exampleInputEmail1">Добавить изображение</label> <input type="text" class="form-control" name="image" id="image" value="<?php  echo $row['image'];?>" required="true">

							 <label for="exampleInputEmail1">Добавить изображение</label> <input type="text" class="form-control" name="img_2" id="img_2" value="<?php  echo $row['img_2'];?>" required="true">

							 <label for="exampleInputEmail1">Добавить изображение</label> <input type="text" class="form-control" name="img_3" id="img_3" value="<?php  echo $row['img_3'];?>" required="true">

							 </div> 
							 <div class="form-group"> <label for="exampleInputPassword1">Описание</label> <textarea name="opisanie" id="opisanie" rows="5" class="form-control">
        <?php  echo $row['opisanie'];?></textarea> </div>
							 <?php } ?>
							  <button type="submit" name="submit" class="btn btn-default">Обновить</button> </form> 
						</div>
						
					</div>
				
				
			</div>
		</div>
		 <?php include_once('includes/footer.php');?>
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