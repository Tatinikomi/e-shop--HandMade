<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
        <!-- Bootstrap  main css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- слайдер css -->
    <link rel="stylesheet" href="lib/css/nivo-slider.css">
    <!-- плагины css -->
    <link rel="stylesheet" href="css/core.css">
    <!-- элементы стиля -->
    <link rel="stylesheet" href="css/shortcode/shortcodes.css">
    <!-- основной стиль -->
    <link rel="stylesheet" href="css/style.css">
    <!-- адаптация -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- основной стиль -->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Modernizr JS -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="css/style.css">
<title>Восстановление пароля</title>
</head>
<body>
    <?php include 'php/header.php'; ?>
<?php
$connect = mysqli_connect('localhost', 'drakita2_hand', 'qU7N7mc&', 'drakita2_hand');

$username = mysqli_real_escape_string($connect,$_POST['username']);

$zapros = "SELECT `id_us` FROM `users` WHERE `username`='{$username}' LIMIT 1";
 $sql = mysqli_query($connect,$zapros) or die(mysqli_error());
 if (mysqli_num_rows($sql)==1)
 {
$simv = array ("92", "83", "7", "66", "45", "4", "36", "22", "1", "0", 
 "k", "l", "m", "n", "o", "p", "q", "1r", "3s", "a", "b", "c", "d", "5e", "f", "g", "h", "i", "j6", "t", "u", "v9", "w", "x5", "6y", "z5");
 for ($k = 0; $k < 8; $k++)
 {
 shuffle ($simv);
 $string = $string.$simv[1];

 }
$zapros = "UPDATE `users` SET  `password`='{$string}' WHERE `username`='{$username}' ";
$sql = mysqli_query($connect,$zapros) or die(mysqli_error());


$zapros = "SELECT `email` FROM `users` WHERE `username`='{$username}' LIMIT 1";
$sql = mysqli_query($connect,$zapros)or die(mysqli_error());
$r = mysqli_fetch_assoc($sql);
$mail = $r['email'];
mail($mail, "Запрос на восстановление пароля", "Привет, $username.Вы оставили заявку на восстановление пароля. Новый пароль от сайта Handmade: $string");
 } ?>
 <div class="slider-area bg-3 bg-opacity-black-60 dotted-overlay ptb-150 mb-80">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="slider-desc-3 slider-desc-4  text-center">
                            <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                                <h1 class="slider2-title-2 cd-headline clip is-full-width">
                               
                                </h1>
                            </div>
                            <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                                <h2 class="slider2-title-3"><strong> <?php echo "На ваш почтовый ящик было отправлено письмо с новый паролем"; ?></strong></h2>
                            </div>
                            
                            </div>        
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>	
