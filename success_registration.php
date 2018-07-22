<?php

require_once 'function.php';

session_start();

# Если пользователь не авторизован
if (!isset($_SESSION['is_auth'])) {
    header('Location: login.php');
    exit(0);
}

$title = 'Успешная регистрация';

if (isset($_POST['continue'])) {
    header('Location: lk.php');
    exit(0);
}

$user = get_user_by_login($_SESSION['login']);
if (!$user) {
    echo 'Ошибка. Пользователь не существует.';
    exit(0);
}
$nickname = $user->nickname;
$login = $user->login;

?>
<!DOCTYPE html>
<html>
<head>
	<title> <?php echo $title ?> | Defyourtime</title>
	<meta charset="utf-8">
	<link href="main.css" rel="stylesheet" type="text/css">
	<link href="slider.css" rel="stylesheet"  type="text/css">	
	<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="mainjs.js"></script>	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<link type="text/css" rel="stylesheet" href="style.css" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript" src="script.js"></script>
	<script>
		$(document).ready(function() {

  			$("body").on("click", "#button-project", function() {
    			setTimeout(function() {
      			if ($(".menu-projects").is(":hidden")) {
        			$('.menu-projects').fadeIn();
      			}
    			}, 100);
  			});

  			$("body").on("click touchmove", function(e) {
    			if ($(e.target).closest(".menu-projects").length) return;
    			$(".menu-projects").fadeOut();
    			e.stopPropagation();
  			});

			});
	</script>
	<link rel="shortcut icon" href="favicon.ico">
</head>
<body>
<div class="main_menu">
	<div class="location">
		<a href="#RU" class="lang" id="selectid"><img class="langi" src="img/ru.png" alt=""><p class="langtru">RU</p></a>
		<div id="box" style="display: none; position: absolute;">
			<div class="minimenu"><a class="lang" href="#EUR"><img class="langi" src="img/flag1.png" alt=""><p class="langt">EUROPE</p></a></div>
			<div class="minimenu"><a class="lang" href="#USA"><img class="langi" src="img/us.png" alt=""><p class="langtna">USA</p></a></div>						
		</div>
	</div>
	<div class="ula">
		<a class="line" href="infosite.php">Гарантии</a>
		<a class="line" href="infosite.php?infomode=discountsAndCoupons">Скидки и купоны</a>
		<a class="line" href="infosite.php?infomode=paymentForServices">Оплата услуг</a>
		<a class="line" href="Reviews.php">Отзывы</a>
	</div>
	<div class="lk">
	<img style="float: left; padding-right: 15px;" src="img/lk.png" alt=""><a href="lk.php"><p style="margin-top: 14px; float: left;">Личный кабинет</p></a>	
	</div>
	<div class="popup reg_form">
		<a class="close" href="#">Close</a>
		<h2 class="text">Войти в личный кабинет</h2>
		<form method="post" action="">
			<label for="login">Введите логин:</label>
			<input type="text" name="login" />
			<label for="password">Введите пароль:</label>
			<input type="password" name="password" />
			<input type="submit" value="" />	
		</form>
	</div>
</div>

<div class="callme">
	<ul style="list-style-type: none; margin-right: 0px;">
		<li class="s1"><a href="" ></a></li>
		<li class="s2"><a href="" ></a></li>
		<li class="s3"><a href="" ></a></li>
		<li class="s4"><a href="" ></a></li>
		<li class="s5"><a href="" ></a></li>
		<li class="s6"><a href="" ></a></li>
		<li class="s7"><a href="" ></a></li>
		<li class="s8"><a href="" ></a></li>
		<li class="s9"><a href="" ></a></li>
	</ul>
</div>
<div class="logo">
	<div class="img"><a class="ain" href="index.php"><center><img src="img/logo.png" alt=""></center></a></div>
	<div id="slider" class="slider_wrap">
		<img src="img/baner.png" alt="" />
		<img src="img/baner1.png" alt="" />
		<img src="img/baner2.png" alt="" />
		<img src="img/baner3.png" alt="" />
	</div>	
</div>

<div style="margin-right: 13%;">
    <p>УСПЕШНАЯ РЕГИСТРАЦИЯ</p>
    <p> Ваш nickname: <?php echo $nickname ?> </p>
    <p> Ваш логин: <?php echo $login ?> </p>
    <form action="success_registration.php" method="POST">
        <p><input type="submit" name="continue" value="Продолжить пользование сайтом"></p>
    </form>
</div>

<div class="footer">
	<div class="top">
		<a href="" class="footer-top" style="margin-left: 20%;"><b>Партнерская система</b></a>
		<a href="infosite.php?infomode=Workwithus" class="footer-top"><b>Работать с нами</b></a>
		<a href="infosite.php?infomode=CustomEngraving" class="footer-top"><b>Пользовательское соглашение</b></a>
		<a href="infosite.php?infomode=konf" class="footer-top"><b>Конфиденциальность</b></a>
	</div>
</div>

</body>
</html>