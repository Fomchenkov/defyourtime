<?php
$comm = $_GET['comm'];
$contcomm = '';
switch ($comm) {
	case 'vk':
		$contcomm ="
			<!-- Put this div tag to the place, where the Comments block will be -->
			<div id='vk_comments'></div>
			<script type='text/javascript'>
			VK.Widgets.Comments('vk_comments', {limit: 10, attach: false});
			</script>";
		break;
	case 'facebook':
		$contcomm = "<div class='fb-comments' data-href='http://defyourtime.ru/Reviews.php?comm=facebook' data-width='650' data-numposts='10'></div>";
		break;
	default:
		$contcomm = "
			<div class='ecomment_wrapper'></div>
			<script>
    			$('.ecomment_wrapper').ecomment()
			</script>";
		break;
}
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Defyourtime</title>
	<link href="main.css" rel="stylesheet" type="text/css">	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="ecomment.css" type="text/css" media="all">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<link type="text/css" rel="stylesheet" href="style.css" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript" src="mainjs.js"></script>
	<script type="text/javascript" src="script.js"></script>
    <script type="text/javascript" src="ecomment.js"></script>
   	<!-- Put this script tag to the <head> of your page -->
	<script type="text/javascript" src="//vk.com/js/api/openapi.js?151"></script>	
	<script type="text/javascript">
	  VK.init({apiId: 6321241, onlyWidgets: true});
	</script>
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
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.11';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="main_menu">
	<div class="location">
		<a href="#RU" class="lang" id="button-project"><img class="langi" src="img/ru.png" alt=""><p class="langtru">RU</p></a>
		<div class="menu-projects">
			<div class="minimenu"><a class="lang" href="#EUR"><img class="langi" src="img/flag1.png" alt=""><p class="langt">EUROPE</p></a></div>
			<div class="minimenu"><a class="lang" href="#USA"><img class="langi" src="img/us.png" alt=""><p class="langtna">USA</p></a></div>						
		</div>
	</div>
	<div class="ula">
		<a class="line" href="infosite.php">Гарантии</a>
		<a class="line" href="infosite.php?infomode=discountsAndCoupons">Скидки и купоны</a>
		<a class="line" href="infosite.php?infomode=paymentForServices">Оплата услуг</a>
		<a class="line" href="Reviews.php">Отзывы</a>
		<a class="line" href="infosite.phpinfomode=faq">FAQ</a>
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
<div class="logo">
	<div class="img"><a class="ain" href="index.php"><center><img src="img/logo.png" alt=""></center></a></div>
	<div id="slider" class="slider_wrap">
		<img src="img/baner.png" alt="" />
		<img src="img/baner1.png" alt="" />
		<img src="img/baner2.png" alt="" />
		<img src="img/baner3.png" alt="" />
	</div>	
</div>
<div class="game2">
	<div class="object select">
	 	<a href="#GAME1"></a>			
	</div>
	<div class="object select">
		<a href="#GAME1"></a>		
	</div>
	<div style="margin: 20px; padding-top: 110px;">
		<a class="ulspisok" href="#GOLD"><p>Золото в WOW</p>
		<a class="ulspisok" href="#PACH"><p>Пачь 7,3</p></a>
		<div class="selectmenu">
			<a href="#RU" id="selectid"><p>ЛУТ РЭЙДЫ ЛЕГИОН</p></a>
			<div id="box" style="display: none; position: absolute;">
				<div class="selectop"><a href="#EUR"><p>ПЫЛАЮЩИЙ АНТОРУС</p></a></div>
				<div class="selectop"><a href="#USA"><p>ГРОБНИЦА САГРЕРОСА</p></a></div>
				<div class="selectop"><a href="#USA"><p>АНТОРУС ПАРАБАЩЁННЫЙ</p></a></div>
				<div class="selectop"><a href="#USA"><p>ЦЫТАДЕЛЬ НОЧИ</p></a></div>						
			</div>
		</div>
	</div>	
</div>
<div class="reviews">
	<center><h1>ОТЗОВЫ НАШИХ КЛИЕНТОВ</h1></center>
	<div class="button">
		<ul class="hr">
			<li><a href="Reviews.php">На сайте!</a></li>
			<li><a href="Reviews.php?comm=vk">В контакте!</a></li>
			<li><a href="Reviews.php?comm=facebook">Facebook!</a></li>
		</ul>
	</div>
	<?php echo $contcomm; ?>
</div>
<div class="footer">
	<div class="top">
		<a href="" class="footer-top" style="margin-left: 20%;"><b>Партнерская система</b></a>
		<a href="" class="footer-top"><b>Работать с нами</b></a>
		<a href="" class="footer-top"><b>Пользовательское соглашение</b></a>
		<a href="" class="footer-top"><b>Конфиденциальность</b></a>
		<a href="" class="footer-top"><b>Дисклеймер</b></a>
	</div>
</div>
</body>
</html>
