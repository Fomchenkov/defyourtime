<!DOCTYPE html>
<html>
<head>
	<title>Defyourtime</title>
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
    			}, 500);
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
		<img style="float: left; padding-right: 15px;" src="img/lk.png" alt=""><a class="lang show_form" rel="reg_form" href="#LK"><p style="margin-top: 14px; float: left;">Личный кабинет</p></a>		
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
<CENTER>
<div class="video">
	<div class="videotext">
		<h1>Узнайте о нас за 1 минуту</h1><br>
		<p style="text-align: center">Defyourtime - для людей, а не для заработка.<br> Мы не просто выполняем какую-нибудь<br> рутину в игре или услугу, наша цель<br> с экономить ваше время, чтобы<br> вы могли насладиться игрой</p><br>
		<p style="text-align: center">Качественное выполнение услуг в играх,<br> внимание к деталям и пожеланиям клиента.<br> Оказываем услуги на рынке уже более 3х лет.</p>
	</div>
	<div class="videoframe">
		<iframe width="555" height="423" src="https://www.youtube.com/embed/Xv1JzYDKoc8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	</div>
</div>
</CENTER>
<center>
<div class="wraper">
	<div class="content">
		<img src="img/selectgame.png" alt="Выбери игру" title="Выбери игру">
		<div class="container">
			<div class="game"><a  href="gameselect.php?game_wow=raids"><img class="shadowimg" src="img/wow.png" alt=""></a></div>
			<div class="game"><a  href="#WOT"><img class="shadowimg" src="img/wot.png" alt=""></a></div>
			<div class="game"><a  href="#DOTA2"><img class="shadowimg" src="img/dota2.png" alt=""></a></div>
			<div class="game"><a  href="#HS"><img class="shadowimg" src="img/Hart.png" alt=""></a></div>
			<div class="game"><a  href="#OW"><img class="shadowimg" src="img/Ower.png" alt=""></a></div>
			<div class="game"><a  href="#DES2"><img class="shadowimg" src="img/Destini.png" alt=""></a></div>
			<div class="game"><a  href="#CSGO"><img class="shadowimg" src="img/cs.png" alt=""></a></div>
			<div class="game"><a  href="#Diablo3"><img class="shadowimg" src="img/d3.png" alt=""></a></div>
			<div class="game"><a  href="#AA"><img class="shadowimg" src="img/Archage.png" alt=""></a></div>
          	<div class="game"><a  href="#CSGO"><img class="shadowimg" src="img/lol.png" alt=""></a></div>
			<div class="game"><a  href="#Diablo3"><img class="shadowimg" src="img/str2.png" alt=""></a></div>
			<div class="game"><a  href="#AA"><img class="shadowimg" src="img/hots.png" alt=""></a></div>
		</div>
	</div>
</div>
</center>
<div class="howme">
	<center><img style="margin-right: 14%;" src="img/np.png" alt=""></center>
	<div class="mew"><center><img src="img/wma.png" alt=""><center><h2 style="text-align: center;">Свой личный аккауд</h2><p>-Накопительная система скидки.<br>-Детали заказа со скриншотами.<br>-Партнерская программа<br>-Онлайн трансляция<br> -История заказов.</p></div>
	<div class="mew"><center><img src="img/wwf.png" alt=""></center><h2 style="text-align: center;">Поддержка 24/7</h2><p>-Отзывчивые операторы ответ в любой момент.<br>-Отслеживания вашего заказа.<br>-Качественная консультация<br> -Учтём все ваши внеплановые ситуаци.</p></div>
	<div class="mew"><center><img src="img/43.png" alt=""></center><h2 style="text-align: center;">Гарантированное качетсво</h2><p style="text-align: center;"><br>-Работают профессионалы своего дела<br>-Честные и эффективные способы достижения результатов.</p></div>
	<div class="mew"><center><img src="img/slide.png" alt=""></center><h2 style="text-align: center;">Конфидециально</h2><p style="text-align: center;">-VPN и протоколы шифрования для маскировки 
работ и защиты Ваших персональных данных.<br>-Хранение и использование информации исключительно для выполнения заказов.<br>-Защита персональной информации.</p></div>
</div>
<div class="footer">
	<div class="top">
		<a href="" class="footer-top" style="margin-left: 20%;"><b>Партнерская система</b></a>
		<a href="" class="footer-top"><b>Работать с нами</b></a>
		<a href="infosite.php?infomode=soglas" class="footer-top"><b>Пользовательское соглашение</b></a>
		<a href="" class="footer-top"><b>Конфиденциальность</b></a>
	</div>
</div>
</body>
</html>