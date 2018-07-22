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
	<div class="container_baners">
		<div id="prev"></div>
		<ul id="slider-up">
    		<li><img src="img/baner0.png" alt="" /></li>
    		<li><img src="img/baner1.png" alt="" /></li>
    		<li><img src="img/baner2.png" alt="" /></li>
    		<li><img src="img/baner3.png" alt="" /></li>
  		</ul>
  		<ul id="dots">   
    		<li class="active"></li>
    		<li></li>
    		<li></li>
    		<li></li>
  		</ul>
		<div id="next"></div>	
  	</div>	
</div>
<CENTER>
<div class="video">
	<div class="videotext">
		<h1>Узнайте о нас за 1 минуту</h1>
		<p>Defyourtime - для людей, а не для заработка. Мы не просто выполняем какую-нибудь рутину в игре или услугу, наша цель с экономить ваше время, чтобы вы могли насладиться игрой</p><br>
		<p>Качественное выполнение услуг в играх, внимание к деталям и пожеланиям клиента. Оказываем услуги на рынке уже более 3х лет.</p>
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
			<div class="game"><a style="cursor: not-allowed" href="#WOT"><img class="shadowimg" style="opacity: .5;" src="img/wot.png" alt=""></a></div>
			<div class="game"><a style="cursor: not-allowed"  href="#DOTA2"><img class="shadowimg" style="opacity: .5" src="img/dota2.png" alt=""></a></div>
			<div class="game"><a style="cursor: not-allowed" href="#HS"><img class="shadowimg" style="opacity: .5" src="img/Hart.png" alt=""></a></div>
			<div class="game"><a style="cursor: not-allowed" href="#OW"><img class="shadowimg" style="opacity: .5" src="img/Ower.png" alt=""></a></div>
			<div class="game"><a style="cursor: not-allowed" href="#DES2"><img class="shadowimg" style="opacity: .5" src="img/Destini.png" alt=""></a></div>
			<div class="game"><a style="cursor: not-allowed" href="#CSGO"><img class="shadowimg" style="opacity: .5" src="img/cs.png" alt=""></a></div>
			<div class="game"><a style="cursor: not-allowed" href="#Diablo3"><img class="shadowimg" style="opacity: .5" src="img/d3.png" alt=""></a></div>
			<div class="game"><a style="cursor: not-allowed" href="#AA"><img class="shadowimg" style="opacity: .5" src="img/Archage.png" alt=""></a></div>
          	<div class="game"><a style="cursor: not-allowed" href="#CSGO"><img class="shadowimg" style="opacity: .5" src="img/lol.png" alt=""></a></div>
			<div class="game"><a style="cursor: not-allowed" href="#Diablo3"><img class="shadowimg" style="opacity: .5" src="img/str2.png" alt=""></a></div>
			<div class="game"><a style="cursor: not-allowed" href="#AA"><img class="shadowimg" style="opacity: .5" src="img/hots.png" alt=""></a></div>
		</div>
	</div>
</div>
</center>
<div class="howme">
	<center><img style="margin-right: 14%;" src="img/np.png" alt=""></center>
	<div class="mew"><center><img src="img/wma.png" alt=""></center><h2 style="text-align: center;">Свой личный аккаунт</h2>
		<ul style="list-style: none; text-align: center;">
			<li><b>&#8226;</b> Накопительная система скидки</li>
			<li><b>&#8226;</b> Детали заказа со скриншотами.</li>
			<li><b>&#8226;</b> Партнерская программа.</li>
			<li><b>&#8226;</b> Онлайн трансляция.</li>
			<li><b>&#8226;</b> История заказов.</li>
		</ul>
	</div>
	<div class="mew"><center><img src="img/wwf.png" alt=""></center><h2 style="text-align: center;">Поддержка 24/7</h2>
		<ul style="list-style: none; text-align: center;">
			<li><b>&#8226;</b> Отзывчивые операторы ответят<br> в любой момент.</li>
			<li><b>&#8226;</b> Отслеживания вашего заказа.</li>
			<li><b>&#8226;</b> Качественная консультация.</li>
			<li><b>&#8226;</b> Учтем все ваши пожелания.</li>
		</ul></div>
	<div class="mew"><center><img src="img/43.png" alt=""></center><h2 style="text-align: center;">Гарантированное качество</h2>
		<ul style="list-style: none; text-align: center;">
			<li><b>&#8226;</b> Работают профессионалы своего дела.</li>
			<li><b>&#8226;</b> Честные и эффективные способы достижения результатов.</li>
		</ul></div>
	<div class="mew"><center><img src="img/slide.png" alt=""></center><h2 style="text-align: center;">Конфидециально</h2>
		<ul style="list-style: none; text-align: center;">
			<li><b>&#8226;</b> VPN и протоколы шифрования для маскировки работ и защиты Ваших персональных данных.</li>
			<li><b>&#8226;</b> Хранение и использование информации исключительно для выполнения заказов.</li>
			<li><b>&#8226;</b> Защита персональной информации.</li>
		</ul></div>
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