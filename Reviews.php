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
    <!-- TrustBox script -->
		<script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
	<!-- End Trustbox script -->
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
		<a href="#RU" class="lang" id="selectid"><img class="langi" src="img/ru.png" alt=""><p class="langtru">RU</p></a>
		<div id="box" style="display: none; position: absolute;">
			<div class="minimenu"><a class="lang" href="#EUR"><img class="langi" src="img/flag1.png" alt=""><p class="langt">EUROPE</p></a></div>
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
		<img style="float: left; padding-right: 15px;" src="img/lk.png" alt=""><a href="lk.php"><p style="margin-top: 14px; float: left;">Личный кабинет</p></a>
	</div>
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
<div class="reviews">
	<div class="trustpilot-widget" data-locale="ru-RU" data-template-id="5419b6a8b0d04a076446a9ad" data-businessunit-id="5b6298954a7a1a00011d86c5" data-style-height="24px" data-style-width="100%" data-theme="light">
	<a href="https://ru.trustpilot.com/review/defyourtime.com" target="_blank">Trustpilot</a>
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
