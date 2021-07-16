<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsaid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['submit']))
  {
		$name=$_POST['name'];
		$id_cat=$_POST['id_cat'];
        $cat_produkt=$_POST['cat_produkt'];
		$opisanie=$_POST['opisanie'];
        $image=$_POST['image'];
		$img_2=$_POST['img_2'];
        $img_3=$_POST['img_3'];
		$stoimost_zakypki=$_POST['stoimost_zakypki'];
        $na_sklade=$_POST['na_sklade'];	
		$kol_vo=$_POST['kol_vo'];
        $price=$_POST['price'];	

 
     
    $query=mysqli_query($con, "INSERT INTO   tblproduct (`name`,id_cat,cat_produkt,opisanie,`image`,img_2,img_3,`stoimost_zakypki`,na_sklade,kol_vo,price) value('$name','$id_cat','$cat_produkt','$opisanie','$image','$img_2','$img_3','$stoimost_zakypki','$na_sklade','$kol_vo','$price')");
    if ($query) {
echo "<script>alert('Добавлено.');</script>"; 
echo "<script>window.location.href = 'new_produkt.php'</script>"; 
 } else {
echo "<script>alert('Что-то пошло не так. Пожалуйста, попробуйте еще раз.');</script>";  	
} }

  ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>Добавить запись в блог</title>
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
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
				<div class="forms">
					<h3 class="title1">Добавить товар</h3>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4></h4>
						</div>
						<div class="form-body">
							<form method="post">
								<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>

<div class="form-group"> <label for="exampleInputEmail1">№категории</label>

<select style=" font-size: 120%;
  width: 100%;" name="id_cat" id="id_cat" value="<?php  echo $row['id_cat'];?>" >
   <?php
$ret=mysqli_query($con,"SELECT * FROM category");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
?>
  <option class="form-control"  value="<?php  echo $row['id_cat'];?>"><?php  echo $row['id_cat'];?>-<?php  echo $row['cat_name'];?></option>
<?}?>
</select> 

<div class="form-group"> <label for="exampleInputEmail1">Категория товара</label> 

<select style=" font-size: 120%;
  width: 100%;" name="cat_produkt" id="cat_produkt" value="<?php  echo $row['cat_produkt'];?>">
   <?php
$ret=mysqli_query($con,"SELECT * FROM cat_product");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
?>
  <option class="form-control"  value="<?php  echo $row['name'];?>"><?php  echo $row['id_cp'];?>-<?php  echo $row['name'];?></option>

<?}?>

</select> 



<label for="exampleInputEmail1">Название товара</label> <input type="text" class="form-control" name="name" id="name" value="<?php  echo $row['name'];?>" required="true"> 

<label for="exampleInputEmail1">Стоимость закупки</label> <input type="text" class="form-control" name="stoimost_zakypki" id="stoimost_zakypki" value="<?php  echo $row['stoimost_zakypki'];?>" required="true"> 

<label for="exampleInputEmail1">На складе</label> 

<select style=" font-size: 120%;
  width: 100%;" name="na_sklade" id="na_sklade" value="<?php  echo $row['na_sklade'];?>" >
   <?php
$ret=mysqli_query($con,"SELECT * FROM sklad");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
?>
  <option class="form-control"  value="<?php  echo $row['yes_no'];?>"><?php  echo $row['id_sklad'];?>-<?php  echo $row['yes_no'];?></option>
<?}?>
</select> 

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
