<?php
session_start();

$username = "";
$email    = "";
$errors = array(); 

// подключение к бд
$db = mysqli_connect('localhost', 'root', '', 'drakita2_hand');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // проверка введенных данных и полнота введенных данных
  if (empty($username)) { array_push($errors, "Введите имя пользователя"); }
  if (empty($email)) { array_push($errors, "Введите Email "); }
  if (empty($password_1)) { array_push($errors, "Введите пароль"); }
  if ($password_1 != $password_2) {
	array_push($errors, "Повторите пароль еще раз");
  }
  // проверка данных в бд
  // на наличие одиноковых имен и mail
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Имя пользователя уже существует");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email  уже существует");
    }
  }

  // записть в бд пароля 
  if (count($errors) == 0) {
  	$password = md5($password_1);//зашифровка пароля в бд

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "";
  	header('location: ../profile.php');
  }
}
// ... 

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Введите имя пользователя");
  }
  if (empty($password)) {
  	array_push($errors, "Введите пароль");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "";
  	  header('location: ../profile.php');
  	}else {
  		array_push($errors, "Неверно имя пользователя или пароль");
  	}
  }
}

?>