<?php

require_once 'function.php';

session_start();

# Если пользователь не авторизован
if (!isset($_SESSION['is_auth'])) {
    header('Location: login.php');
    exit(0);
}

$title = 'Personal account';

if (isset($_POST['profile'])) {
    header('Location: lk.php');
    exit(0);
}

if (isset($_POST['my_zakaz'])) {
    header('Location: orders.php');
    exit(0);
}

if (isset($_POST['my_links'])) {
    header('Location: user_links.php');
    exit(0);
}

if (isset($_POST['logout'])) {
    session_destroy();
    header('Location: login.php');
    exit(0);
}

if (isset($_POST['change_profile'])) {
    change_user_info($_SESSION['login'], $_POST['nickname'], $_POST['sk'], $_POST['dk']);
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
$sk = $user->skype_contact;
$dk = $user->discard_contact;

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
<center><h3 class="user-text"><?php echo $login ?></h3></center>
<div class="wrapper-login">
<div class="form-lk" >
    <div class="button">
	    <form action="lk.php" method="POST">
	        <p><input class="profile" type="submit" name="profile" value="Profile"></p>
	    </form>
	    <form action="lk.php" method="POST">
	        <p><input class="my-zakaz" type="submit" name="my_zakaz" value="My order"></p>
	    </form>
		<form action="lk.php" method="POST">
	        <p><input class="" type="submit" name="my_links" value="My Links"></p>
	    </form>
	    <form action="lk.php" method="POST">
	        <p><input class="logout" type="submit" name="logout" value="Exit"></p>
	    </form>
	<?php
		$user_amount = get_user_amount($_SESSION['login']);
		$discount = 0;
		if ($user_amount > 200) {
			$discount = 1;
		}
		if ($user_amount > 1000) {
			$discount = 2;
		}
		if ($user_amount > 2000) {
			$discount = 3;
		}
		if ($user_amount > 5000) {
			$discount = 4;
		}
		if ($user_amount > 10000) {
			$discount = 5;
		}
		if ($user_amount > 15000) {
			$discount = 10;
		}
		if ($user_amount > 20000) {
			$discount = 15;
		}
		if ($user_amount > 30000) {
			$discount = 20;
		}
		if ($user_amount > 50000) {
			$discount = 25;
		}
		if ($user_amount > 60000) {
			$discount = 30;
		}
		$html = "<p style='color: #fff; text-align:center;'>Моя персональная<br> скидка: $discount %</p>";
		$html .= "<p><img src=\"img/discounts/" . $discount . ".png\" alt=\"Персональная скидка\"></p>";
		echo $html;
	?>
	</div>
	<div class="user-info">
		<div>
	    <form action="lk.php" method="POST">
	    	<h3 class="profile-text">Profile</h3>
	        <p><span>Nickname</span><input type="text" class="nick-lk" readonly name="nickname" value="<?php echo $nickname ?>"></p>
	        <p><span>E-mail</span><input type="text" size="10" class="email-lk" value="<?php echo $login ?>"></p>
			<span><a href="change_password.php" style="color: #000">Password change</a></span>
	        <h5 class="text-ki"><p>Contact information</p></h5>       	
	        	<p><span>Skype</span><input class="sk-dis" type="text" name="sk" value="<?php echo $sk ?>"></p>        	
	        <p><span>Discord</span><input class="sk-dis" type="text" name="dk" value="<?php echo $dk ?>"></p>  	
	        <p><input type="submit" class="batton-enter" name="change_profile" value="Save the changes"></p>
	    </form>
	   	</div>	
    </div>
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