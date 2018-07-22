<?php
$game_wow = $_GET['game_wow'];
$content_wow = '';
switch ($game_wow) {
	case 'raids':
		$content_wow = '<div class="game-opt">
							<div class="game3">
							  <a class="menu_style_gold" href="">Золото в WoW</a>
							</div>
							<div class="game3">
							  <a class="menu_style_pach" href="gameselect.php?game_wow=pach">Патч</a>
							</div>
							<div class="game3">
							  <a class="menu_style_raid" href="gameselect.php?game_wow=raids">ПВЕ услуги</a>
							</div>
							<div class="game3">
							  <a class="menu_style_raid" href="gameselect.php?game_wow=dungeons"> ПВП услуги</a>
							</div>
							<div class="game3">
							  <a class="menu_style_raid" href="gameselect.php?game_wow=leveling" >Прокачка</a>
							</div>
							<div class="game3">
									<a class="menu_style_uslugi" href="gameselect.php?game_wow=achivement">Достижения</a>
							</div>
							<div class="game3">
									<a class="menu_style_prochie" href="">Ресурсы</a>
							</div>
							<div class="game3">
							    <a class="menu_style_prochie" href="gameselect.php?game_wow=maunts">Средства предвижения</a>
							</div>
							<div class="game3">
							    <a class="menu_style_prochie" href="">Питомцы</a>
							</div>
							<div class="game3">
							    <a class="menu_style_raid" href="">Прочее</a>
							</div>
						</div>';
		$content_wow .= "<p class='textmain'><b>НАШИ ПРЕДЛОЖЕНИЯ<br>Пве услуги</b></p>
		<div class='anchor'><a href='#reid'><p class='selectanchor'>Рейды</p></a><a href='#dungeons'><p class='selectanchor'>| Подземелья |</p></a><a href='#achiv'><p class='selectanchor'>Достижения | </p></a><a href='#learn'><p class='selectanchor'>Обучение | </p></a><a href='#maunt'><p class='selectanchor'>Маунты |</p></a><a href='#package'><p class='selectanchor'>Пакеты услуг</p></a></div>
						<div class='popular'>
							<div class='raids'><h1><a id='reid'>Рейды</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/sargeras.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/noch.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/idob.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/koshmar.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							</div>
							<div class='raids'>
							<h1><a id='dungeons'>Подземелья</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php'><img width='588' src='gameimg/wow/Tovar/dang/dang1.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img width='588' src='gameimg/wow/Tovar/dang/dang2.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img width='588' src='gameimg/wow/Tovar/dang/dang3.png' alt=''></a></div>
							</div>
							<div class='raids'>
							<h1><a id='achiv'>Достижения</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php'><img width='588' src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img width='588' src='gameimg/wow/sargeras.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img width='588' src='gameimg/wow/noch.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img width='588' src='gameimg/wow/idob.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img width='588' src='gameimg/wow/koshmar.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img width='588' src='gameimg/wow/koshmar.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img width='588' src='gameimg/wow/koshmar.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img width='588' src='gameimg/wow/koshmar.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img width='588' src='gameimg/wow/koshmar.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img width='588' src='gameimg/wow/koshmar.png' alt=''></a></div>
							</div>
							<div class='raids'>
							<h1><a id='learn'>Обучение</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/sargeras.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/noch.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/idob.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/koshmar.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							</div>
							<div class='raids'>
							<h1><a id='maunt'>Маунты</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/Tovar/mounts/mount1.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/Tovar/mounts/mount23.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/Tovar/mounts/mount27.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/Tovar/mounts/mount15.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/Tovar/mounts/mount13.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/Tovar/mounts/mount6.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/Tovar/mounts/mount9.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/Tovar/mounts/mount30.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/Tovar/mounts/mount3.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/Tovar/mounts/mount20.png' alt=''></a></div>
							</div>
							<div class='raids'>
							<h1><a id='package'>Пакеты услуг</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/Tovar/pak1.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/Tovar/pak2.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/Tovar/pak3.png' alt=''></a></div>
							</div>
						</div>";
		break;
	case 'dungeons':
		$content_wow = '<div class="game-opt">
							<div class="game3">
							  <a class="menu_style_gold" href="">Золото в WoW</a>
							</div>
							<div class="game3">
							  <a class="menu_style_pach" href="gameselect.php?game_wow=pach">Патч</a>
							</div>
							<div class="game3">
							  <a class="menu_style_raid" href="gameselect.php?game_wow=raids">ПВЕ услуги</a>
							</div>
							<div class="game3">
							  <a class="menu_style_raid" href="gameselect.php?game_wow=dungeons"> ПВП услуги</a>
							</div>
							<div class="game3">
							  <a class="menu_style_raid" href="gameselect.php?game_wow=leveling" >Прокачка</a>
							</div>
							<div class="game3">
									<a class="menu_style_uslugi" href="gameselect.php?game_wow=achivement">Достижения</a>
							</div>
							<div class="game3">
									<a class="menu_style_prochie" href="">Ресурсы</a>
							</div>
							<div class="game3">
							    <a class="menu_style_prochie" href="gameselect.php?game_wow=maunts">Средства предвижения</a>
							</div>
							<div class="game3">
							    <a class="menu_style_prochie" href="">Питомцы</a>
							</div>
							<div class="game3">
							    <a class="menu_style_raid" href="">Прочее</a>
							</div>
						</div>';
		$content_wow .= "<p class='textmain'><b>НАШИ ПРЕДЛОЖЕНИЯ<br>ПВП услуги</b></p>
		<div class='anchor'><a href='arena'><p class='selectanchor'>Арена</p></a><a href='#rbg'><p class='selectanchor'>| РБГ |</p></a><a href='#teach'><p class='selectanchor'>Обучение |</p></a><a href='#maunt'><p class='selectanchor'>Маунты |</p</a><a href='#achiv'><p class='selectanchor'>Достижения |</p></a><a href='#package'><p class='selectanchor'>Пакеты услуг</p></a></div>
						<div class='popular'>
							<div class='raids'><h1><a id='arena'>Арена</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/Tovar/pvp/3.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/Tovar/pvp/5.png' alt=''></a></div>
							</div>
							<div class='raids'><h1><a id='rbg'>РБГ</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/Tovar/pvp/1.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/Tovar/pvp/2.png' alt=''></a></div>
                            <div class='mainframegame'><a href='price.php'><img src='gameimg/wow/Tovar/pvp/4.png' alt=''></a></div>
							</div>
							<div class='raids'><h1><a id='teach'>Обучение</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/sargeras.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/noch.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/idob.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/koshmar.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							</div>
							<div class='raids'><h1><a id='maunt'>Маунты</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/sargeras.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/noch.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/idob.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/koshmar.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							</div>
							<div class='raids'><h1><a id='achiv'>Достижения</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/sargeras.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/noch.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/idob.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/koshmar.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							</div>
							<div class='raids'><h1><a id='package'>Пакеты услуг</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/Tovar/pak1.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/Tovar/pak2.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/Tovar/pak3.png' alt=''></a></div>
							</div>
						</div>";				
		break;
	case 'pach':
		$content_wow = '<div class="game-opt">
							<div class="game3">
							  <a class="menu_style_gold" href="">Золото в WoW</a>
							</div>
							<div class="game3">
							  <a class="menu_style_pach" href="gameselect.php?game_wow=pach">Патч</a>
							</div>
							<div class="game3">
							  <a class="menu_style_raid" href="gameselect.php?game_wow=raids">ПВЕ услуги</a>
							</div>
							<div class="game3">
							  <a class="menu_style_raid" href="gameselect.php?game_wow=dungeons"> ПВП услуги</a>
							</div>
							<div class="game3">
							  <a class="menu_style_raid" href="gameselect.php?game_wow=leveling" >Прокачка</a>
							</div>
							<div class="game3">
									<a class="menu_style_uslugi" href="gameselect.php?game_wow=achivement">Достижения</a>
							</div>
							<div class="game3">
									<a class="menu_style_prochie" href="">Ресурсы</a>
							</div>
							<div class="game3">
							    <a class="menu_style_prochie" href="gameselect.php?game_wow=maunts">Средства предвижения</a>
							</div>
							<div class="game3">
							    <a class="menu_style_prochie" href="">Питомцы</a>
							</div>
							<div class="game3">
							    <a class="menu_style_raid" href="">Прочее</a>
							</div>
						</div>';
		$content_wow .= "<p class='textmain'><b>НАШИ ПРЕДЛОЖЕНИЯ - Обновление 7,3</b></p>
						<div class='popular'>
							<div class='mainframegame'>
								<a href='price.php'>
									<img width='428' height='270' src='gameimg/wow/race.jpeg' alt=''>
									<h2><center><b>Ранний доступ к союзным расам</b></center></h2>
									<h3><p>краткое описание:</p></h3>
									<ul class='selectinfo'>
										<li>Срок выполнения: 4-5 часов</li>
										<li>Требование к персонажу: 110 уровень</li>
									</ul>
								</a>
							</div>
							<div class='mainframegame'>
								<a href='price.php'>
									<img width='428' height='270' src='gameimg/wow/artefact.png' alt=''>
									<h2><center><b>Фарм силы артефакта Обновлено под 7.3</b></center></h2>
									<h3><p>краткое описание:</p></h3>
									<ul class='selectinfo'>
										<li>Срок выполнения: 4-5 часов</li>
										<li>Требование к персонажу: 110 уровень</li>
									</ul>
								</a>
							</div>
							<div class='mainframegame'>
								<a href='price.php'>
									<img width='428' height='270' src='gameimg/wow/flyinleg.jpeg' alt=''>
									<h2><center><b>Полеты в Легионе</b></center></h2>
									<h3><p>краткое описание:</p></h3>
									<ul class='selectinfo'>
										<li>Срок выполнения: 4-5 часов</li>
										<li>Требование к персонажу: 110 уровень</li>
									</ul>
								</a>
							</div>
							<div class='mainframegame'>
								<a href='price.php'>
									<img width='428' height='270' src='gameimg/wow/hromi.png' alt=''>
									<h2><center><b>Смерти Хроми</b></center></h2>
									<h3><p>краткое описание:</p></h3>
									<ul class='selectinfo'>
										<li>Срок выполнения: 4-5 часов</li>
										<li>Требование к персонажу: 110 уровень</li>
									</ul>
								</a>
							</div>
							<div class='mainframegame'>
								<a href='price.php'>
									<img width='428' height='270' src='gameimg/wow/oplot_7_2.png' alt=''>
									<h2><center><b>Кампания оплота 7.2</b></center></h2>
									<h3><p>краткое описание:</p></h3>
									<ul class='selectinfo'>
										<li>Срок выполнения: 4-5 часов</li>
										<li>Требование к персонажу: 110 уровень</li>
									</ul>
								</a>
							</div>
							<div class='mainframegame'>
								<a href='price.php'>
									<img width='428' height='270' src='gameimg/wow/maunt_1.png' alt=''>
									<h2><center><b>Мозговой червь любителя загадок</b></center></h2>
									<h3><p>краткое описание:</p></h3>
									<ul class='selectinfo'>
										<li>Срок выполнения: 4-5 часов</li>
										<li>Требование к персонажу: 110 уровень</li>
									</ul>
								</a>
							</div>
							<div class='mainframegame'>
								<a href='price.php'>
									<img width='428' height='270' src='gameimg/wow/companiinarg.png' alt=''>
									<h2><center><b>Кампания на Аргусе 7.3</b></center></h2>
									<h3><p>краткое описание:</p></h3>
									<ul class='selectinfo'>
										<li>Срок выполнения: 4-5 часов</li>
										<li>Требование к персонажу: 110 уровень</li>
									</ul>
								</a>
							</div>
							<div class='mainframegame'>
								<a href='price.php'>
									<img width='428' height='270' src='gameimg/wow/honor_7_2.png' alt=''>
									<h2><center><b>Репутация Идеала</b></center></h2>
									<h3><p>краткое описание:</p></h3>
									<ul class='selectinfo'>
										<li>Срок выполнения: 4-5 часов</li>
										<li>Требование к персонажу: 110 уровень</li>
									</ul>
								</a>
							</div>
							<div class='mainframegame'>
								<a href='price.php'>
									<img width='428' height='270' src='gameimg/wow/honor_7_3.jpeg' alt=''>
									<h2><center><b>Репутации 7.3 Армия Света и Защитники Аргуса</b></center></h2>
									<h3><p>краткое описание:</p></h3>
									<ul class='selectinfo'>
										<li>Срок выполнения: 4-5 часов</li>
										<li>Требование к персонажу: 110 уровень</li>
									</ul>
								</a>
							</div>
							<div class='mainframegame'>
								<a href='price.php'>
									<img width='428' height='270' src='gameimg/wow/armdeadleg.png' alt=''>
									<h2><center><b>Армия погибели Легиона</b></center></h2>
									<h3><p>краткое описание:</p></h3>
									<ul class='selectinfo'>
										<li>Срок выполнения: 4-5 часов</li>
										<li>Требование к персонажу: 110 уровень</li>
									</ul>
								</a>
							</div>
							<div class='mainframegame'>
								<a href='price.php'>
									<img width='428' height='270' src='gameimg/wow/demono.jpeg' alt=''>
									<h2><center><b>Демонобоец</b></center></h2>
									<h3><p>краткое описание:</p></h3>
									<ul class='selectinfo'>
										<li>Срок выполнения: 4-5 часов</li>
										<li>Требование к персонажу: 110 уровень</li>
									</ul>
								</a>
							</div>
							<div class='mainframegame'>
								<a href='price.php'>
									<img width='428' height='270' src='gameimg/wow/koshmarosoz.jpeg' alt=''>
									<h2><center><b>Осознанный кошмар</b></center></h2>
									<h3><p>краткое описание:</p></h3>
									<ul class='selectinfo'>
										<li>Срок выполнения: 4-5 часов</li>
										<li>Требование к персонажу: 110 уровень</li>
									</ul>
								</a>
							</div>
							<div class='mainframegame'>
								<a href='price.php'>
									<img width='428' height='270' src='gameimg/wow/argunit.png' alt=''>
									<h2><center><b>Дымчатый Аргунит</b></center></h2>
									<h3><p>краткое описание:</p></h3>
									<ul class='selectinfo'>
										<li>Срок выполнения: 4-5 часов</li>
										<li>Требование к персонажу: 110 уровень</li>
									</ul>
								</a>
							</div>
							<div class='mainframegame'>
								<a href='price.php'>
									<img width='428' height='270' src='gameimg/wow/maunt_2.png' alt=''>
									<h2><center><b>Белоногий аргусский скиталец</b></center></h2>
									<h3><p>краткое описание:</p></h3>
									<ul class='selectinfo'>
										<li>Срок выполнения: 4-5 часов</li>
										<li>Требование к персонажу: 110 уровень</li>
									</ul>
								</a>
							</div>
							</div>
						</div>";
		break;
	case 'leveling':
	$content_wow = '<div class="game-opt">
							<div class="game3">
							  <a class="menu_style_gold" href="">Золото в WoW</a>
							</div>
							<div class="game3">
							  <a class="menu_style_pach" href="gameselect.php?game_wow=pach">Патч</a>
							</div>
							<div class="game3">
							  <a class="menu_style_raid" href="gameselect.php?game_wow=raids">ПВЕ услуги</a>
							</div>
							<div class="game3">
							  <a class="menu_style_raid" href="gameselect.php?game_wow=dungeons"> ПВП услуги</a>
							</div>
							<div class="game3">
							  <a class="menu_style_raid" href="gameselect.php?game_wow=leveling" >Прокачка</a>
							</div>
							<div class="game3">
									<a class="menu_style_uslugi" href="gameselect.php?game_wow=achivement">Достижения</a>
							</div>
							<div class="game3">
									<a class="menu_style_prochie" href="">Ресурсы</a>
							</div>
							<div class="game3">
							    <a class="menu_style_prochie" href="gameselect.php?game_wow=maunts">Средства предвижения</a>
							</div>
							<div class="game3">
							    <a class="menu_style_prochie" href="">Питомцы</a>
							</div>
							<div class="game3">
							    <a class="menu_style_raid" href="">Прочее</a>
							</div>
						</div>';
		$content_wow .= "<p class='textmain'><b>НАШИ ПРЕДЛОЖЕНИЯ<br>Прокачка</b></p>
		<div class='anchor_many'><a href='#pers'><p class='selectanchor'>Персонаж</p></a><a href='#proff'><p class='selectanchor'>| Профессии |</p></a><a href='#artf'><p class='selectanchor'>Артефакт | </p></a><a href='#reput'><p class='selectanchor'>Репутации | </p></a><a href='#quest'><p class='selectanchor'>Задания |</p></a><a href='#transmog'><p class='selectanchor'>Наборы трансмогрификации |</p></a><a href='#pets'><p class='selectanchor'>Питомцы |</p</a><a href='#legendw'><p class='selectanchor'>Легендарное оружие |</p></a><a href='#package'><p class='selectanchor'>Пакеты услуг</p></a></div>
							<div class='raids'><h1><a id='pers'>Персонаж</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/Tovar/achiv/1.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/Tovar/achiv/3.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/Tovar/achiv/6.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/Tovar/achiv/11.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/Tovar/Equip1.png' alt=''></a></div>
							</div>
							<div class='raids'><h1><a id='proff'>Профессии</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/Tovar/prof/1.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/Tovar/prof/2.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/Tovar/prof/3.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/Tovar/prof/4.png' alt=''></a></div>
							</div>
							<div class='raids'><h1><a id='artf'>Артефакт</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/Tovar/achiv/3.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/Tovar/achiv/6.png' alt=''></a></div>
							</div>
							<div class='raids'><h1><a id='reput'>Репутация</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/sargeras.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/noch.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/idob.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/koshmar.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							</div>
							<div class='raids'><h1><a id='quest'>Задания</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/Tovar/achiv/2.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/Tovar/achiv/5.png' alt=''></a></div>
                            <div class='mainframegame'><a href='price.php'><img src='gameimg/wow/Tovar/achiv/7.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/Tovar/achiv/8.png' alt=''></a></div>
                            <div class='mainframegame'><a href='price.php'><img src='gameimg/wow/Tovar/achiv/9.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/Tovar/achiv/10.png' alt=''></a></div>
                            <div class='mainframegame'><a href='price.php'><img src='gameimg/wow/Tovar/achiv/13.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/Tovar/achiv/12.png' alt=''></a></div>
							</div>
							<div class='raids'><h1><a id='transmog'>Набор трансмогрификации</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/sargeras.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/noch.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/idob.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/koshmar.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							</div>
							<div class='raids'><h1><a id='pets'>Питомцы</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/sargeras.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/noch.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/idob.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/koshmar.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							</div>
							<div class='raids'><h1><a id='legendw'>Легендарное оружие</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/sargeras.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/noch.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/idob.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/koshmar.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							</div>
							<div class='raids'><h1><a id='package'>Пакеты услуг</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/Tovar/pak1.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/Tovar/pak2.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/Tovar/pak3.png' alt=''></a></div>
							</div>
							</div>
						</div>";
		break;
	case 'achivement':
		$content_wow = '<div class="game-opt">
							<div class="game3">
							  <a class="menu_style_gold" href="">Золото в WoW</a>
							</div>
							<div class="game3">
							  <a class="menu_style_pach" href="gameselect.php?game_wow=pach">Патч</a>
							</div>
							<div class="game3">
							  <a class="menu_style_raid" href="gameselect.php?game_wow=raids">ПВЕ услуги</a>
							</div>
							<div class="game3">
							  <a class="menu_style_raid" href="gameselect.php?game_wow=dungeons"> ПВП услуги</a>
							</div>
							<div class="game3">
							  <a class="menu_style_raid" href="gameselect.php?game_wow=leveling" >Прокачка</a>
							</div>
							<div class="game3">
									<a class="menu_style_uslugi" href="gameselect.php?game_wow=achivement">Достижения</a>
							</div>
							<div class="game3">
									<a class="menu_style_prochie" href="">Ресурсы</a>
							</div>
							<div class="game3">
							    <a class="menu_style_prochie" href="gameselect.php?game_wow=maunts">Средства предвижения</a>
							</div>
							<div class="game3">
							    <a class="menu_style_prochie" href="">Питомцы</a>
							</div>
							<div class="game3">
							    <a class="menu_style_raid" href="">Прочее</a>
							</div>
						</div>';
		$content_wow .= "<p class='textmain'><b>НАШИ ПРЕДЛОЖЕНИЯ<br>Достижения</b></p>
		<div class='anchor_many'><a href='#pvp'><p class='selectanchor'>ПВП</p></a><a href='#scout'><p class='selectanchor'>| Исследования |</p></a><a href='#garni'><p class='selectanchor'>Гарнизон | </p></a><a href='#quest'><p class='selectanchor'>Задания | </p></a><a href='#scenario'><p class='selectanchor'>Сценарии |</p></a><a href='#pocemonmaster'><p class='selectanchor'>Битвы питомцев |</p></a><a href='#oplot'><p class='selectanchor'>Оплот класса |</p</a><a href='#koll'><p class='selectanchor'>Коллекции |</p></a><a href='#worldq'><p class='selectanchor'>Мировые события |</p></a><a href='#rep'><p class='selectanchor'>Реупутация |</p></a><a href='#proff'><p class='selectanchor'>Профессии |</p></a><a href='#raidanddangeon'><p class='selectanchor'>Подземелья и Рейды |</p></a><a href='#great'><p class='selectanchor'>Великие подвиги</p></a></div>
						<div class='popular'>
							<div class='raids'><h1><a id='pvp'>ПВП</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/sargeras.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/noch.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/idob.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/koshmar.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							</div>
							<div class='raids'><h1><a id='scout'>Исследование</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/sargeras.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/noch.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/idob.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/koshmar.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							</div>
							<div class='raids'><h1><a id='garni'>Гарнизон</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/sargeras.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/noch.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/idob.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/koshmar.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							</div>
							<div class='raids'><h1><a id='quest'>Задания</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/sargeras.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/noch.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/idob.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/koshmar.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							</div>
							<div class='raids'><h1><a id='scenario'>Сценарий</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/sargeras.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/noch.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/idob.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/koshmar.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							</div>
							<div class='raids'><h1><a id='pocemonmaster'>Битвы питомцев</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/sargeras.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/noch.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/idob.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/koshmar.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							</div>
							<div class='raids'><h1><a id='oplot'>Оплот класса</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/sargeras.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/noch.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/idob.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/koshmar.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							</div>
							<div class='raids'><h1><a id='koll'>Коллекции</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/sargeras.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/noch.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/idob.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/koshmar.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							</div>
							<div class='raids'><h1><a id='worldq'>Мировые события</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/sargeras.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/noch.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/idob.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/koshmar.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							</div>
							<div class='raids'><h1><a id='rep'>Репутация</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/sargeras.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/noch.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/idob.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/koshmar.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							</div>
							<div class='raids'><h1><a id='proff'>Профессии</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/sargeras.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/noch.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/idob.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/koshmar.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							</div>
							<div class='raids'><h1><a id='raidanddangeon'>Подземелья и Рейды</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/sargeras.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/noch.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/idob.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/koshmar.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							</div>
							<div class='raids'><h1><a id='great'>Великие подвиги</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/sargeras.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/noch.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/idob.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/koshmar.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							</div>
						</div>";
		break;
	case 'maunts':
		$content_wow = '<div class="game-opt">
							<div class="game3">
							  <a class="menu_style_gold" href="">Золото в WoW</a>
							</div>
							<div class="game3">
							  <a class="menu_style_pach" href="gameselect.php?game_wow=pach">Патч</a>
							</div>
							<div class="game3">
							  <a class="menu_style_raid" href="gameselect.php?game_wow=raids">ПВЕ услуги</a>
							</div>
							<div class="game3">
							  <a class="menu_style_raid" href="gameselect.php?game_wow=dungeons"> ПВП услуги</a>
							</div>
							<div class="game3">
							  <a class="menu_style_raid" href="gameselect.php?game_wow=leveling" >Прокачка</a>
							</div>
							<div class="game3">
									<a class="menu_style_uslugi" href="gameselect.php?game_wow=achivement">Достижения</a>
							</div>
							<div class="game3">
									<a class="menu_style_prochie" href="">Ресурсы</a>
							</div>
							<div class="game3">
							    <a class="menu_style_prochie" href="gameselect.php?game_wow=maunts">Средства предвижения</a>
							</div>
							<div class="game3">
							    <a class="menu_style_prochie" href="">Питомцы</a>
							</div>
							<div class="game3">
							    <a class="menu_style_raid" href="">Прочее</a>
							</div>
						</div>';
		$content_wow .= "<p class='textmain'><b>НАШИ ПРЕДЛОЖЕНИЯ<br>Средтсва передвижения</b></p>
		<div class='anchor_many'><a href='#wolddrop'><p class='selectanchor'>Мировая добыча</p></a><a href='#pvp'><p class='selectanchor'>| ПВП |</p></a><a href='#proff'><p class='selectanchor'>Профессии | </p></a><a href='#slava'><p class='selectanchor'>Слава | </p></a><a href='#quest'><p class='selectanchor'>Задания |</p></a><a href='#raidd'><p class='selectanchor'>Рейдовая добыча |</p></a><a href='#reput'><p class='selectanchor'>Репутация |</p</a><a href='#other'><p class='selectanchor'>Другое |</p></a><a href='#blackmarket'><p class='selectanchor'>Черный рынок |</p></a><a href='#package'><p class='selectanchor'>Пакеты услуг</p></a></div>
						<div class='popular'>
							<div class='raids'><h1><a id='wolddrop'>Мировая добыча</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-woldDrop-BR'><img src='gameimg/wow/Tovar/mounts/mount1.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-woldDrop-BHK'><img src='gameimg/wow/Tovar/mounts/mount2.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-woldDrop-BV'><img src='gameimg/wow/Tovar/mounts/mount3.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-woldDrop-VIG'><img src='gameimg/wow/Tovar/mounts/mount4.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-woldDrop-GKOZ'><img src='gameimg/wow/Tovar/mounts/mount5.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-woldDrop-GOOZ'><img src='gameimg/wow/Tovar/mounts/mount6.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-woldDrop-GROZ'><img src='gameimg/wow/Tovar/mounts/mount7.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-woldDrop-GK'><img src='gameimg/wow/Tovar/mounts/mount8.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-woldDrop-ZDJ'><img src='gameimg/wow/Tovar/mounts/mount9.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-woldDrop-KI'><img src='gameimg/wow/Tovar/mounts/mount10.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-woldDrop-KDD'><img src='gameimg/wow/Tovar/mounts/mount11.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-woldDrop-KDJ'><img src='gameimg/wow/Tovar/mounts/mount12.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-woldDrop-LH'><img src='gameimg/wow/Tovar/mounts/mount13.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-woldDrop-MM'><img src='gameimg/wow/Tovar/mounts/mount14.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-woldDrop-NOOZ'><img src='gameimg/wow/Tovar/mounts/mount15.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-woldDrop-NDD'><img src='gameimg/wow/Tovar/mounts/mount16.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-woldDrop-OSH'><img src='gameimg/wow/Tovar/mounts/mount17.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-woldDrop-OS'><img src='gameimg/wow/Tovar/mounts/mount18.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-woldDrop-PP'><img src='gameimg/wow/Tovar/mounts/mount19.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-woldDrop-PL'><img src='gameimg/wow/Tovar/mounts/mount20.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-woldDrop-SK'><img src='gameimg/wow/Tovar/mounts/mount21.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-woldDrop-SRC'><img src='gameimg/wow/Tovar/mounts/mount22.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-woldDrop-SD'><img src='gameimg/wow/Tovar/mounts/mount23.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-woldDrop-SSG'><img src='gameimg/wow/Tovar/mounts/mount24.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-woldDrop-SEV'><img src='gameimg/wow/Tovar/mounts/mount25.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-woldDrop-SDD'><img src='gameimg/wow/Tovar/mounts/mount26.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-woldDrop-SMG'><img src='gameimg/wow/Tovar/mounts/mount27.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-woldDrop-SJP'><img src='gameimg/wow/Tovar/mounts/mount28.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-woldDrop-CDJ'><img src='gameimg/wow/Tovar/mounts/mount29.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-woldDrop-JDD'><img src='gameimg/wow/Tovar/mounts/mount30.png' alt=''></a></div>
							</div>
							<div class='raids'><h1><a id='pvp'>ПВП</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-PVP-CBT'><img src='gameimg/wow/Tovar/mountspvp/mount1.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'price_wow=Maunt-PVP-CBA'><img src='gameimg/wow/Tovar/mountspvp/mount2.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'price_wow=Maunt-PVP-CBS'><img src='gameimg/wow/Tovar/mountspvp/mount3.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'price_wow=Maunt-PVP-CBM'><img src='gameimg/wow/Tovar/mountspvp/mount4.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'price_wow=Maunt-PVP-CBMT'><img src='gameimg/wow/Tovar/mountspvp/mount5.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-PVP-CBV'><img src='gameimg/wow/Tovar/mountspvp/mount6.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-PVP-KBK'><img src='gameimg/wow/Tovar/mountspvp/mount7.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-PVP-CBJ'><img src='gameimg/wow/Tovar/mountspvp/mount8.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-PVP-SBK'><img src='gameimg/wow/Tovar/mountspvp/mount9.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-PVP-JBK'><img src='gameimg/wow/Tovar/mountspvp/mount10.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-PVP-CBK'><img src='gameimg/wow/Tovar/mountspvp/mount11.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-PVP-BSGV'><img src='gameimg/wow/Tovar/mountspvp/mount12.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-PVP-CVT'><img src='gameimg/wow/Tovar/mountspvp/mount13.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-PVP-JBB'><img src='gameimg/wow/Tovar/mountspvp/mount14.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-PVP-JBJ'><img src='gameimg/wow/Tovar/mountspvp/mount15.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-PVP-JBKO'><img src='gameimg/wow/Tovar/mountspvp/mount16.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-PVP-JBM'><img src='gameimg/wow/Tovar/mountspvp/mount17.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-PVP-CBB'><img src='gameimg/wow/Tovar/mountspvp/mount18.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-PVP-JBE'><img src='gameimg/wow/Tovar/mountspvp/mount19.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-PVP-JBT'><img src='gameimg/wow/Tovar/mountspvp/mount20.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-PVP-JK'><img src='gameimg/wow/Tovar/mountspvp/mount21.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-PVP-JBGK'><img src='gameimg/wow/Tovar/mountspvp/mount22.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-PVP-PBK'><img src='gameimg/wow/Tovar/mountspvp/mount23.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-PVP-JBS'><img src='gameimg/wow/Tovar/mountspvp/mount24.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-PVP-PBV'><img src='gameimg/wow/Tovar/mountspvp/mount25.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-PVP-PK'><img src='gameimg/wow/Tovar/mountspvp/mount26.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-PVP-JBC'><img src='gameimg/wow/Tovar/mountspvp/mount27.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-PVP-JBMD'><img src='gameimg/wow/Tovar/mountspvp/mount28.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-PVP-PKS'><img src='gameimg/wow/Tovar/mountspvp/mount29.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-PVP-PBS'><img src='gameimg/wow/Tovar/mountspvp/mount30.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-PVP-PLS'><img src='gameimg/wow/Tovar/mountspvp/mount31.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-PVP-JBV'><img src='gameimg/wow/Tovar/mountspvp/mount32.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-PVP-PBSN'><img src='gameimg/wow/Tovar/mountspvp/mount33.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-PVP-PPS'><img src='gameimg/wow/Tovar/mountspvp/mount34.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-PVP-JBL'><img src='gameimg/wow/Tovar/mountspvp/mount35.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-PVP-VBS'><img src='gameimg/wow/Tovar/mountspvp/mount36.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-PVP-PDM'><img src='gameimg/wow/Tovar/mountspvp/mount37.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-PVP-JBKS'><img src='gameimg/wow/Tovar/mountspvp/mount38.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-PVP-CBM'><img src='gameimg/wow/Tovar/mountspvp/mount39.png' alt=''></a></div>
							</div>
							<div class='raids'><h1><a id='proff'>Профессии</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/sargeras.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/noch.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/idob.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/koshmar.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							</div>
							<div class='raids'><h1><a id='slava'>Слава</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/sargeras.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/noch.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/idob.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/koshmar.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							</div>
							<div class='raids'><h1><a id='quest'>Задания</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/sargeras.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/noch.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/idob.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/koshmar.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							</div>
							<div class='raids'><h1><a id='raidd'>Рейдовая добыча</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/sargeras.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/noch.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/idob.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/koshmar.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							</div>
							<div class='raids'><h1><a id='reput'>Репутация</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/sargeras.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/noch.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/idob.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/koshmar.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							</div>
							<div class='raids'><h1><a id='other'>Другое</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/Tovar/raid/mount1.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/Tovar/raid/mount2.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/Tovar/raid/mount3.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/Tovar/raid/mount4.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/Tovar/raid/mount5.png' alt=''></a></div>
					        </div>
							<div class='raids'><h1><a id='blackmarket'>Черный рынок</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/sargeras.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/noch.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/idob.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/koshmar.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							</div>
							<div class='raids'><h1><a id='package'>Пакеты услугк</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/sargeras.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/noch.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/idob.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/koshmar.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							</div>
						</div>";
		break;
	default:
		# code...
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
	<link type="text/css" rel="stylesheet" href="style.css" />
	<link rel="stylesheet" type="text/css" href="css/slidergame.css" media="all">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript" src="mainjs.js"></script>
	<script type="text/javascript" src="script.js"></script>
    <script type="text/javascript" src="ecomment.js"></script>
   	<!-- Put this script tag to the <head> of your page -->
	<script type="text/javascript" src="//vk.com/js/api/openapi.js?151"></script>	
	<script type="text/javascript">
	  VK.init({apiId: 6321241, onlyWidgets: true});
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
<div class="game2">
	<div class="selectwrapper">
		<div class="select ">
		 	<a class="icon" href="gameselect.php?game_wow=raids"><img class="active-img" src="img/gameico/wow.png" alt=""></a>
		</div>
		<div class="select">
			<a href="#CS"><img class="none-active-img" src="img/gameico/CS.png" alt=""></a>
		</div>
		<div class="select">
			<a href="#D3"><img class="none-active-img" src="img/gameico/D3.png" alt=""></a>
		</div>
		<div class="select">
			<a href="#DE"><img class="none-active-img" src="img/gameico/DE.png" alt=""></a>
		</div>
		<div class="select">
			<a href="#dota"><img class="none-active-img" src="img/gameico/dota.png" alt=""></a>
		</div>
		<div class="select">
			<a href="#HS"><img class="none-active-img" src="img/gameico/HS.png" alt=""></a>
		</div>
		<div class="select">
			<a href="#OVW"><img class="none-active-img" src="img/gameico/OVW.png" alt=""></a>
		</div>
		<div class="select">
			<a href="#wot"><img class="none-active-img" src="img/gameico/wot.png" alt=""></a>
		</div>
		<div class="select">
			<a href="#AA"><img class="none-active-img" src="img/gameico/hots.png" alt=""></a>
		</div>
		<div class="select">
			<a href="#AA"><img class="none-active-img" src="img/gameico/rev.png" alt=""></a>
		</div>
		<div class="select">
			<a href="#AA"><img class="none-active-img" src="img/gameico/stc2.png" alt=""></a>
		</div>
		<div class="select">
			<a href="#AA"><img class="none-active-img" src="img/gameico/lol.png" alt=""></a>
		</div>
	</div>
</div>
<div class='blockslider'>
<center><p style='font-size: 36px; color: #fff;'>Популярное</p></center>
	<div class='slider'>
		<div class='slide-list'>
		<div class='slide-wrap'>
			<div class='slide-item'><a href=''><img width='330' height='197' src='img/selectgame/cs.png' alt='Contra' /></a><span class='slide-title'>Первый слайд</span></div>
			<div class='slide-item'><a href=''><img width='330' height='197' src='img/selectgame/destoni.png' alt='Destoni' /></a><span class='slide-title'>Ну просто очень длинное название второго слайда</span></div>
			<div class='slide-item'><a href=''><img width='330' height='197' src='img/selectgame/diablo3.png' alt='Diablo 3' /></a><span class='slide-title'>Третий слайд</span></div>
			<div class='slide-item'><a href=''><img width='330' height='197' src='img/selectgame/dota2.png' alt='Dota 2' /></a><span class='slide-title'>Четвертый слайд</span></div>
			<div class='slide-item'><a href=''><img width='330' height='197' src='img/selectgame/heastone.png' alt='Hearstone' /></a><span class='slide-title'>Пятый слайд</span></div>
			<div class='slide-item'><a href=''><img width='330' height='197' src='img/selectgame/overwach.png' alt='Overwach' /></a><span class='slide-title'>Первый слайд</span></div>
			<div class='slide-item'><a href=''><img width='330' height='197' src='img/selectgame/wow.png' alt='Wold Of Warcraft' /></a><span class='slide-title'>Первый слайд</span></div>
			<div class='slide-item'><a href=''><img width='330' height='197' src='img/selectgame/wt.png' alt='Wold of Tanks' /></a><span class='slide-title'>Первый слайд</span></div>
			<div class='slide-item'><a href=''><img width='330' height='197' src='img/selectgame/apx.png' alt='Ark Age' /></a><span class='slide-title'>Первый слайд</span></div>
			</div>
			<div class='clear'></div>
		</div>
		<div class='navy prev-slide'></div>
		<div class='navy next-slide'></div>
		<!--<div class='auto play'></div>-->
	</div>
	<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js'></script>
	<script src='slidergame.js'></script>
</div>
<?php echo $content_wow; ?>
<div id="toTop"><img src="img/arrow.png" alt=""></div>
<div class="footer">
	<div class="top">
		<a href="" class="footer-top" style="margin-left: 20%;"><b>Партнерская система</b></a>
		<a href="" class="footer-top"><b>Работать с нами</b></a>
		<a href="" class="footer-top"><b>Пользовательское соглашение</b></a>
		<a href="" class="footer-top"><b>Конфиденциальность</b></a>
	</div>
</div>
</body>
</html>