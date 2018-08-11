<?php

require_once 'function.php';

session_start();

# Если пользователь не авторизован
if (!isset($_SESSION['is_auth'])) {
    header('Location: login.php');
    exit(0);
}

$title = 'Successful registration';

if (isset($_POST['continue'])) {
    header('Location: lk.php');
    exit(0);
}

$user = get_user_by_login($_SESSION['login']);
if (!$user) {
    echo 'Error. User does not exist.';
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
		<a href="#RU" class="lang" id="selectid"><img class="langi" src="img/flag1.png" alt=""><p class="langt">EUROPE</p></a>
		<div id="box" style="display: none; position: absolute;">
			<div class="minimenu"><a class="lang" href="#EUR"><img class="langi" src="img/ru.png" alt=""><p class="langtru">RU</p></a></div>
			<div class="minimenu"><a class="lang" href="#USA"><img class="langi" src="img/us.png" alt=""><p class="langtna">USA</p></a></div>			
		</div>
	</div>
	<div class="ula">
		<a class="line" href="infosite.php">Guarantees</a>
		<a class="line" href="infosite.php?infomode=discountsAndCoupons">Скидки и купоны</a>
		<a class="line" href="infosite.php?infomode=paymentForServices">Оплата услуг</a>
		<a class="line" href="Reviews.php">Отзывы</a>
	</div>
	<div class="lk">
		<img style="float: left; padding-right: 15px;" src="img/lk.png" alt=""><a href="lk.php"><p style="margin-top: 14px; float: left;">Personal account</p></a>
	</div>
</div>
<div class="callme">
	<ul style="list-style-type: none; margin-right: 0px;">
		<a href="skype:defyourtime@gmail.com?chat"><li class="s1"></li></a>
		<a href="https://discordapp.com/channels/400717982449532929/400717982449532931"><li class="s2"></li></a>
		<a href="https://t.me/joinchat/AAAAAFJhc9hs8G2RmuOzsg"><li class="s3"></li></a>
		<a href="https://chat.whatsapp.com/3sYbeaCoVi6Dya4LCxNxdh"><li class="s4"></li></a>
		<a href="https://www.facebook.com/defyourtime.defyourtime"><li class="s5"></li></a>
		<a href="https://vk.com/defyourtime"><li class="s6"></li></a>
		<a href="https://www.youtube.com/channel/UC8KRTXWDf_JKEm8vp3ed9eA/featured?view_as=public"><li class="s7"></li></a>
		<a href="https://www.instagram.com/defyourtime/"><li class="s8"></li></a>
		<a href="https://twitter.com/defyourtime"><li class="s9"></li></a>
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
<div class="wrapper-login">
	<div class="form-login">
	    <center><h2 style="color: #fff">SUCCESSFUL REGISTRATION</h2><br><br>
	    <p> Your nickname: <span class="text-reg-gold"><?php echo $nickname ?> </span></p><br><br>
	    <p> Your login: <span class="text-reg-gold"><?php echo $login ?> </span></p></center>
	    <form action="success_registration.php" method="POST">
	        <p><input class="batton-enter" style="margin-bottom: 10px;" type="submit" name="continue" value="Continue using the site"></p>
	    </form>
	</div>
</div>
<div class="footer">
	<div class="top">
		<a href="" class="footer-top" style="margin-left: 20%;"><b>Referal System</b></a>
		<a href="infosite.php?infomode=Workwithus" class="footer-top"><b>Work with us</b></a>
		<a href="infosite.php?infomode=CustomEngraving" class="footer-top"><b>Term of service</b></a>
		<a href="infosite.php?infomode=konf" class="footer-top"><b>Privacy Policy</b></a>
	</div>
</div>
</body>
</html>