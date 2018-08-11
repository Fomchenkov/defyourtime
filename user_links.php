<?php

require_once 'function.php';

session_start();

# Если пользователь не авторизован
if (!isset($_SESSION['is_auth'])) {
    header('Location: login.php');
    exit(0);
}

$title = 'Links';

$user = get_user_by_login($_SESSION['login']);
if (!$user) {
    echo 'Ошибка. Пользователь не существует.';
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
	<link href='js/developer/jqcart.css' rel='stylesheet' type='text/css'>
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
	<div class="form-orders">    
	    <center><h3 class="text-reg-gold"><?php echo $login ?></h3></center>
	    <div class="form-center">
	    <form class="change" action="lk.php" method="POST">
	        <p><input class="profile" type="submit" name="profile" value="Profile"></p>
	    </form>
	    <form class="change" action="lk.php" method="POST">
	        <p><input class="my-zakaz" type="submit" name="my_zakaz" value="My order"></p>
	    </form>
        <form action="lk.php" method="POST">
	        <p><input class="" type="submit" name="my_links" value="My Links"></p>
	    </form>
	    <form class="change" action="lk.php" method="POST">
	        <p><input class="logout" type="submit" name="logout" value="Exit"></p>
	    </form>
	    </div>
	    <div class="table">
			<h3>My links</h3>
			<?php
                require_once 'function.php';
                $links = get_user_links($nickname);
                $html = "";
				for ($i = 0; $i < count($links); $i++) {	
                    $html .= "<p>" . $links[$i]->twitch . ' ' . $links[$i]->pic_url . "</p>";
                    $html .= '<br>';
				}
				echo $html;
			?>
		</div>
	</div>
</div>
</body>
</html>
