<?php
$game_wow = $_GET['game_wow'];
$content_wow = '';
switch ($game_wow) {
	case 'raids':
		$content_wow = '<div class="game-opt">
						  <div class="game3">
						    <a class="menu_style_gold" href="price.php?price_wow=gold">Wow GOLD</a>
						  </div>
						  <div class="game3">
						    <a class="menu_style_pach" href="gameselect.php?game_wow=pach">Patch 8.0.1</a>
						  </div>
						  <div class="game3 acv">
						    <a class="menu_style_raid" href="gameselect.php?game_wow=raids">PVE</a>
						  </div>
						  <div class="game3">
						    <a class="menu_style_raid" href="gameselect.php?game_wow=dungeons">PVP</a>
						  </div>
						  <div class="game3">
						    <a class="menu_style_raid" href="gameselect.php?game_wow=leveling" >Powerleveling</a>
						  </div>
						  <div class="game3">
						  		<a class="menu_style_uslugi" href="gameselect.php?game_wow=achivement">Achievements</a>
						  </div>
						  <div class="game3">
						  		<a class="menu_style_prochie" href="">Currency</a>
						  </div>
						  <div class="game3">
						      <a class="menu_style_prochie" href="gameselect.php?game_wow=maunts">Mounts</a>
						  </div>
						  <div class="game3">
						      <a class="menu_style_prochie" href="">Pets</a>
						  </div>
						  <div class="game3">
						      <a class="menu_style_raid" href="">Other</a>
						  </div>
						</div>';
		$content_wow .= "<p class='textmain'><b><br>PVE</b></p>
						<center>
						<div class='anchor'>
							<div class='selectanchor'><a href='#reid'><p>Raids</p></a></div>
							<div class='selectanchor'><a href='#dungeons'><p>Dungeons</p></a></div>
							<div class='selectanchor'><a href='#achiv'><p>Achievements</p></a></div>
							<div class='selectanchor'><a href='#learn'><p>Coaching</p></a></div>
							<div class='selectanchor'><a href='#maunt'><p>Mounts</p></a></div>
							<div class='selectanchor'><a href='#package'><p>Packages</p></a></div>
						</div>
						</center>
						<div class='popular'>
							<div class='raids'><h1><a id='reid'>Raids</a></h1>
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
							<h1><a id='dungeons'>Dungeons</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php?price_wow=Dangeon-WPARI'><img width='588' src='gameimg/wow/Tovar/dang/Dang1.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Dangeon-EP'><img width='588' src='gameimg/wow/Tovar/dang/Dang2.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Dangeon-EPP'><img width='588' src='gameimg/wow/Tovar/dang/Dang3.png' alt=''></a></div>
							</div>
							<div class='raids'>
							<h1><a id='achiv'>Dungeons</a></h1>
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
							<h1><a id='learn'>Coaching</a></h1>
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
							<h1><a id='maunt'>Mounts</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-woldDrop-BR'><img src='gameimg/wow/Tovar/mounts/mount1.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-woldDrop-SD'><img src='gameimg/wow/Tovar/mounts/mount23.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-woldDrop-SMG'><img src='gameimg/wow/Tovar/mounts/mount27.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-woldDrop-NOOZ'><img src='gameimg/wow/Tovar/mounts/mount15.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-woldDrop-LH'><img src='gameimg/wow/Tovar/mounts/mount13.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-woldDrop-GOOZ'><img src='gameimg/wow/Tovar/mounts/mount6.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-woldDrop-ZDJ'><img src='gameimg/wow/Tovar/mounts/mount9.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-woldDrop-JDD'><img src='gameimg/wow/Tovar/mounts/mount30.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-woldDrop-BV'><img src='gameimg/wow/Tovar/mounts/mount3.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=Maunt-woldDrop-PL'><img src='gameimg/wow/Tovar/mounts/mount20.png' alt=''></a></div>
							</div>
							<div class='raids'>
							<h1><a id='package'>Packages</a></h1>
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
						    <a class="menu_style_gold" href="price.php?price_wow=gold">Wow GOLD</a>
						  </div>
						  <div class="game3">
						    <a class="menu_style_pach" href="gameselect.php?game_wow=pach">Patch 8.0.1</a>
						  </div>
						  <div class="game3 acv">
						    <a class="menu_style_raid" href="gameselect.php?game_wow=raids">PVE</a>
						  </div>
						  <div class="game3">
						    <a class="menu_style_raid" href="gameselect.php?game_wow=dungeons">PVP</a>
						  </div>
						  <div class="game3">
						    <a class="menu_style_raid" href="gameselect.php?game_wow=leveling" >Powerleveling</a>
						  </div>
						  <div class="game3">
						  		<a class="menu_style_uslugi" href="gameselect.php?game_wow=achivement">Achievements</a>
						  </div>
						  <div class="game3">
						  		<a class="menu_style_prochie" href="">Currency</a>
						  </div>
						  <div class="game3">
						      <a class="menu_style_prochie" href="gameselect.php?game_wow=maunts">Mounts</a>
						  </div>
						  <div class="game3">
						      <a class="menu_style_prochie" href="">Pets</a>
						  </div>
						  <div class="game3">
						      <a class="menu_style_raid" href="">Other</a>
						  </div>
						</div>';
 $content_wow .= "<p class='textmain'><b><br>PVP</b></p>
						<div class='anchor'>
							<div class='selectanchor'><a href='#arena'><p>Arena</p></a></div>
							<div class='selectanchor'><a href='#rbg'><p>RBG	</p></a></div>
							<div class='selectanchor'><a href='#teach'><p>Coaching</p></a></div>
							<div class='selectanchor'><a href='#maunt'><p>Mounts</p</a></div>
							<div class='selectanchor'><a href='#achiv'><p>Achievements</p></a></div>
							<div class='selectanchor'><a href='#package'><p>Packages</p></a></div>
						</div>
						<div class='popular'>
							<div class='raids'><h1><a id='arena'>Arena</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php?price_wow=PVP-ARENA-PAP'><img src='gameimg/wow/Tovar/pvp/3.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=PVP-ARENA-GLAD'><img src='gameimg/wow/Tovar/pvp/5.png' alt=''></a></div>
							</div>
							<div class='raids'><h1><a id='rbg'>RBG	</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php?price_wow=PVP-RBG-LVLUPHONOR'><img src='gameimg/wow/Tovar/pvp/1.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=PVP_RBG-WIN'><img src='gameimg/wow/Tovar/pvp/2.png' alt=''></a></div>
                            <div class='mainframegame'><a href='price.php?price_wow=PVP-RBG-PRPB'><img src='gameimg/wow/Tovar/pvp/4.png' alt=''></a></div>
							</div>
							<div class='raids'><h1><a id='teach'>Coaching</a></h1>
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
							<div class='raids'><h1><a id='maunt'>Mounts</a></h1>
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
							<div class='raids'><h1><a id='achiv'>Achievements</a></h1>
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
							<div class='raids'><h1><a id='package'>Packages</a></h1>
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
						    <a class="menu_style_gold" href="price.php?price_wow=gold">Wow GOLD</a>
						  </div>
						  <div class="game3">
						    <a class="menu_style_pach" href="gameselect.php?game_wow=pach">Patch 8.0.1</a>
						  </div>
						  <div class="game3 acv">
						    <a class="menu_style_raid" href="gameselect.php?game_wow=raids">PVE</a>
						  </div>
						  <div class="game3">
						    <a class="menu_style_raid" href="gameselect.php?game_wow=dungeons">PVP</a>
						  </div>
						  <div class="game3">
						    <a class="menu_style_raid" href="gameselect.php?game_wow=leveling" >Powerleveling</a>
						  </div>
						  <div class="game3">
						  		<a class="menu_style_uslugi" href="gameselect.php?game_wow=achivement">Achievements</a>
						  </div>
						  <div class="game3">
						  		<a class="menu_style_prochie" href="">Currency</a>
						  </div>
						  <div class="game3">
						      <a class="menu_style_prochie" href="gameselect.php?game_wow=maunts">Mounts</a>
						  </div>
						  <div class="game3">
						      <a class="menu_style_prochie" href="">Pets</a>
						  </div>
						  <div class="game3">
						      <a class="menu_style_raid" href="">Other</a>
						  </div>
						</div>';
 $content_wow .= "<p class='textmain'><b><br>Patch 8.0.1</b></p>
						 					<div class='anchor'>
							<div class='selectanchor'><a href='#Pwlvl'><p>Powerleveling</p></a></div>
							<div class='selectanchor'><a href='#package'><p>Packages</p></a></div>
      <div class='selectanchor'><a href='#maunt'><p>Mounts</p</a></div> 
</div>
						<div class='popular'>
							<div class='raids'><h1><a id='Pwlvl'>Powerleveling</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/Tovar/lvl1.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/Tovar/Equip1.png' alt=''></a></div>
<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/Tovar/race.png' alt=''></a></div> 
                             </div>
						<div class='raids'><h1><a id='teach'>Coaching</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/antorus.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/sargeras.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/noch.png' alt=''></a></div>
							</div>
							<div class='raids'><h1><a id='maunt'>Mounts</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/Tovar/mountsBFA/1.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/Tovar/mountsBFA/2.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/Tovar/mountsBFA/3.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/Tovar/mountsBFA/4.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/Tovar/mountsBFA/5.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/Tovar/mountsBFA/6.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/Tovar/mountsBFA/7.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/Tovar/mountsBFA/8.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/Tovar/mountsBFA/9.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/Tovar/mountsBFA/10.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/Tovar/mountsBFA/11.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/Tovar/mountsBFA/12.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/Tovar/mountsBFA/13.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/Tovar/mountsBFA/14.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/Tovar/mountsBFA/15.png' alt=''></a></div> 
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/Tovar/mountsBFA/16.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/Tovar/mountsBFA/17.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/Tovar/mountsBFA/18.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/Tovar/mountsBFA/19.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/Tovar/mountsBFA/20.png' alt=''></a></div> 
<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/Tovar/mountsBFA/30.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/Tovar/mountsBFA/21.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/Tovar/mountsBFA/22.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/Tovar/mountsBFA/23.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/Tovar/mountsBFA/24.png' alt=''></a></div>
<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/Tovar/mountsBFA/25.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/Tovar/mountsBFA/26.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/Tovar/mountsBFA/27.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/Tovar/mountsBFA/28.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/Tovar/mountsBFA/29.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/Tovar/mountsBFA/31.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/Tovar/mountsBFA/32.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/Tovar/mountsBFA/33.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/Tovar/mountsBFA/34.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/Tovar/mountsBFA/35.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/Tovar/mountsBFA/36.png' alt=''></a></div> 
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/Tovar/mountsBFA/37.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/Tovar/mountsBFA/38.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/Tovar/mountsBFA/39.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/Tovar/mountsBFA/40.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/Tovar/mountsBFA/41.png' alt=''></a></div> 
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/Tovar/mountsBFA/42.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/Tovar/mountsBFA/43.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/Tovar/mountsBFA/44.png' alt=''></a></div> 
</div>
						</div>";				
		break;	case 'leveling':
					$content_wow = '<div class="game-opt">
						  <div class="game3">
						    <a class="menu_style_gold" href="price.php?price_wow=gold">Wow GOLD</a>
						  </div>
						  <div class="game3">
						    <a class="menu_style_pach" href="gameselect.php?game_wow=pach">Patch 8.0.1</a>
						  </div>
						  <div class="game3 acv">
						    <a class="menu_style_raid" href="gameselect.php?game_wow=raids">PVE</a>
						  </div>
						  <div class="game3">
						    <a class="menu_style_raid" href="gameselect.php?game_wow=dungeons">PVP</a>
						  </div>
						  <div class="game3">
						    <a class="menu_style_raid" href="gameselect.php?game_wow=leveling" >Powerleveling</a>
						  </div>
						  <div class="game3">
						  		<a class="menu_style_uslugi" href="gameselect.php?game_wow=achivement">Achievements</a>
						  </div>
						  <div class="game3">
						  		<a class="menu_style_prochie" href="">Currency</a>
						  </div>
						  <div class="game3">
						      <a class="menu_style_prochie" href="gameselect.php?game_wow=maunts">Mounts</a>
						  </div>
						  <div class="game3">
						      <a class="menu_style_prochie" href="">Pets</a>
						  </div>
						  <div class="game3">
						      <a class="menu_style_raid" href="">Other</a>
						  </div>
						</div>';
 $content_wow .= "<p class='textmain'><b><br>Powerleveling</b></p> 
<div class='anchor'>
								<div class='selectanchor'><a href='#pers'><p>Character</p></a></div>
								<div class='selectanchor'><a href='#proff'><p>Professions</p></a></div>
								<div class='selectanchor'><a href='#artf'><p>Artifact</p></a></div>
								<div class='selectanchor'><a href='#reput'><p>Reputation</p></a></div>
								<div class='selectanchor'><a href='#quest'><p>Quests</p></a></div>
								<div class='selectanchor'><a href='#transmog'><p>Transmogrification gear</p></a></div>
								<div class='selectanchor'><a href='#pets'><p>Pets</p</a></div>
								<div class='selectanchor'><a href='#legendw'><p>Legendary weapon</p></a></div>
								<div class='selectanchor'><a href='#package'><p>Packages</p></a></div>
							</div>
							<div class='raids'><h1><a id='pers'>Character</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php?price_wow=LVLUP-PP'><img src='gameimg/wow/Tovar/achiv/1.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=LVLUP-IABM'><img src='gameimg/wow/Tovar/achiv/3.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=LVLUP-FAP'><img src='gameimg/wow/Tovar/achiv/6.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=LVLUP-AFGA'><img src='gameimg/wow/Tovar/achiv/11.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=LVLUP-PA'><img src='gameimg/wow/Tovar/Equip1.png' alt=''></a></div>
							</div>
							<div class='raids'><h1><a id='proff'>Professions</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php?price_wow=LVLUP-VQP'><img src='gameimg/wow/Tovar/prof/1.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=LVLUP-SP'><img src='gameimg/wow/Tovar/prof/2.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=LVLUP-KP'><img src='gameimg/wow/Tovar/prof/3.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=LVLUP-VP'><img src='gameimg/wow/Tovar/prof/4.png' alt=''></a></div>
							</div>
							<div class='raids'><h1><a id='artf'>Artifact</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php?price_wow=LVLUP-FAP'><img src='gameimg/wow/Tovar/achiv/3.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=LVLUP-IABM'><img src='gameimg/wow/Tovar/achiv/6.png' alt=''></a></div>
							</div>
							<div class='raids'><h1><a id='reput'>Reputation	</a></h1>
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
							<div class='raids'><h1><a id='quest'>Quests</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php?price_wow=LVLUP-PVL'><img src='gameimg/wow/Tovar/achiv/2.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=LVLUP-DS'><img src='gameimg/wow/Tovar/achiv/5.png' alt=''></a></div>
                            <div class='mainframegame'><a href='price.php?price_wow=LVLUP-SH'><img src='gameimg/wow/Tovar/achiv/7.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=LVLUP-D'><img src='gameimg/wow/Tovar/achiv/8.png' alt=''></a></div>
                            <div class='mainframegame'><a href='price.php?price_wow=LVLUP-KO'><img src='gameimg/wow/Tovar/achiv/9.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=LVLUP-BS'><img src='gameimg/wow/Tovar/achiv/10.png' alt=''></a></div>
                            <div class='mainframegame'><a href='price.php?price_wow=LVLUP-I'><img src='gameimg/wow/Tovar/achiv/13.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php?price_wow=LVLUP-LQ'><img src='gameimg/wow/Tovar/achiv/12.png' alt=''></a></div>
							</div>
							<div class='raids'><h1><a id='transmog'>Transmogrification gear	</a></h1>
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
							<div class='raids'><h1><a id='pets'>Pets</a></h1>
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
							<div class='raids'><h1><a id='legendw'>Legendary weapon</a></h1>
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
							<div class='raids'><h1><a id='package'>Packages</a></h1>
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
						    <a class="menu_style_gold" href="price.php?price_wow=gold">Wow GOLD</a>
						  </div>
						  <div class="game3">
						    <a class="menu_style_pach" href="gameselect.php?game_wow=pach">Patch 8.0.1</a>
						  </div>
						  <div class="game3 acv">
						    <a class="menu_style_raid" href="gameselect.php?game_wow=raids">PVE</a>
						  </div>
						  <div class="game3">
						    <a class="menu_style_raid" href="gameselect.php?game_wow=dungeons">PVP</a>
						  </div>
						  <div class="game3">
						    <a class="menu_style_raid" href="gameselect.php?game_wow=leveling" >Powerleveling</a>
						  </div>
						  <div class="game3">
						  		<a class="menu_style_uslugi" href="gameselect.php?game_wow=achivement">Achievements</a>
						  </div>
						  <div class="game3">
						  		<a class="menu_style_prochie" href="">Currency</a>
						  </div>
						  <div class="game3">
						      <a class="menu_style_prochie" href="gameselect.php?game_wow=maunts">Mounts</a>
						  </div>
						  <div class="game3">
						      <a class="menu_style_prochie" href="">Pets</a>
						  </div>
						  <div class="game3">
						      <a class="menu_style_raid" href="">Other</a>
						  </div>
						</div>'; 
$content_wow .= "<p class='textmain'><b><br>Achievements</b></p>
						<div class='anchor'>
							<div class='selectanchor'><a href='#pvp'><p>PVP</p></a></div>
							<div class='selectanchor'><a href='#scout'><p>Exploration</p></a></div>
							<div class='selectanchor'><a href='#garni'><p>Garrison</p></a></div>
							<div class='selectanchor'><a href='#quest'><p>Questing</p></a></div>
							<div class='selectanchor'><a href='#scenario'><p>Scenarios</p></a></div>
							<div class='selectanchor'><a href='#pocemonmaster'><p>Pet battles</p></a></div>
							<div class='selectanchor'><a href='#oplot'><p>Class Hall</p</a></div>
							<div class='selectanchor'><a href='#koll'><p>Collections</p></a></div>
							<div class='selectanchor'><a href='#worldq'><p>World Events</p></a></div>
							<div class='selectanchor'><a href='#rep'><p>Reputation</p></a></div>
							<div class='selectanchor'><a href='#proff'><p>Professions</p></a></div>
							<div class='selectanchor'><a href='#raidanddangeon'><p>Dungeons and raids</p></a></div>
							<div class='selectanchor'><a href='#great'><p>Feats of strength</p></a></div>
						</div>
						<div class='popular'>
							<div class='raids'><h1><a id='pvp'>PVP</a></h1>
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
							<div class='raids'><h1><a id='scout'>Exploration</a></h1>
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
							<div class='raids'><h1><a id='garni'>Garrison	</a></h1>
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
							<div class='raids'><h1><a id='quest'>	Questing</a></h1>
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
							<div class='raids'><h1><a id='scenario'>Scenarios</a></h1>
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
							<div class='raids'><h1><a id='pocemonmaster'>Pet battles</a></h1>
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
							<div class='raids'><h1><a id='oplot'>Class Hall	</a></h1>
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
							<div class='raids'><h1><a id='koll'>Collections	</a></h1>
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
							<div class='raids'><h1><a id='worldq'>World Events	</a></h1>
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
							<div class='raids'><h1><a id='rep'>Reputation</a></h1>
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
							<div class='raids'><h1><a id='proff'>Professions</a></h1>
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
							<div class='raids'><h1><a id='raidanddangeon'>Dungeons and raids</a></h1>
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
							<div class='raids'><h1><a id='great'>Feats of strength</a></h1>
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
						    <a class="menu_style_gold" href="price.php?price_wow=gold">Wow GOLD</a>
						  </div>
						  <div class="game3">
						    <a class="menu_style_pach" href="gameselect.php?game_wow=pach">Patch 8.0.1</a>
						  </div>
						  <div class="game3 acv">
						    <a class="menu_style_raid" href="gameselect.php?game_wow=raids">PVE</a>
						  </div>
						  <div class="game3">
						    <a class="menu_style_raid" href="gameselect.php?game_wow=dungeons">PVP</a>
						  </div>
						  <div class="game3">
						    <a class="menu_style_raid" href="gameselect.php?game_wow=leveling" >Powerleveling</a>
						  </div>
						  <div class="game3">
						  		<a class="menu_style_uslugi" href="gameselect.php?game_wow=achivement">Achievements</a>
						  </div>
						  <div class="game3">
						  		<a class="menu_style_prochie" href="">Currency</a>
						  </div>
						  <div class="game3">
						      <a class="menu_style_prochie" href="gameselect.php?game_wow=maunts">Mounts</a>
						  </div>
						  <div class="game3">
						      <a class="menu_style_prochie" href="">Pets</a>
						  </div>
						  <div class="game3">
						      <a class="menu_style_raid" href="">Other</a>
						  </div>
						</div>'; 
 $content_wow .= "<p class='textmain'><b><br>Mounts</b></p>
						<div class='anchor'>
							<div class='selectanchor'><a href='#wolddrop'><p>World drop</p></a></div>
							<div class='selectanchor'><a href='#pvp'><p>PVP</p></a></div>
							<div class='selectanchor'><a href='#proff'><p>Professions</p></a></div>
							<div class='selectanchor'><a href='#slava'><p>Glory</p></a></div>
							<div class='selectanchor'><a href='#quest'><p>Quest</p></a></div>
							<div class='selectanchor'><a href='#raidd'><p>Raid drop</p></a></div>
							<div class='selectanchor'><a href='#reput'><p>Reputation</p</a></div>
							<div class='selectanchor'><a href='#other'><p>Other</p></a></div>
							<div class='selectanchor'><a href='#blackmarket'><p>Black market</p></a></div>
							<div class='selectanchor'><a href='#package'><p>Packages</p></a></div>
						</div>
						<div class='popular'>
							<div class='raids'><h1><a id='wolddrop'>World drop</a></h1>
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
							<div class='raids'><h1><a id='pvp'>PVP</a></h1>
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
							<div class='raids'><h1><a id='proff'>Professions</a></h1>
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
							<div class='raids'><h1><a id='slava'>Glory</a></h1>
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
							<div class='raids'><h1><a id='quest'>Quest	</a></h1>
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
							<div class='raids'><h1><a id='raidd'>Raid drop	</a></h1>
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
							<div class='raids'><h1><a id='reput'>Reputation	</a></h1>
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
							<div class='raids'><h1><a id='other'>Other</a></h1>
							<hr>
							<div class='mainframegame'><a href='price.php?price_wow=antorRaid'><img src='gameimg/wow/Tovar/raid/mount1.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/Tovar/raid/mount2.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/Tovar/raid/mount3.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/Tovar/raid/mount4.png' alt=''></a></div>
							<div class='mainframegame'><a href='price.php'><img src='gameimg/wow/Tovar/raid/mount5.png' alt=''></a></div>
					        </div>
							<div class='raids'><h1><a id='blackmarket'>Black market</a></h1>
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
							<div class='raids'><h1><a id='package'>Packages</a></h1>
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
		<a class="line" href="infosite.php">Guarantees	</a>
		<a class="line" href="infosite.php?infomode=discountsAndCoupons">Discounts and coupons</a>
		<a class="line" href="infosite.php?infomode=paymentForServices">How to pay</a>
		<a class="line" href="Reviews.php">Review</a>
	</div>
	<div class="lk">
		<img style="float: left; padding-right: 15px;" src="img/lk.png" alt=""><a href="lk.php"><p style="margin-top: 14px; float: left;">Login</p></a>		
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
<div class='blockslider'>
<center><p style='font-size: 36px; color: #fff;'>Popular</p></center>
  <div class='slider'>
    <div class='slide-list'>
    <div class='slide-wrap'>
      <div class='slide-item'><a href=''><img src='gameimg/wow/Tovar/gold.png' alt='Gold' /></a></div>
      <div class='slide-item'><a href=''><img src='gameimg/wow/Tovar/prof/3.png' alt='Proffesion' /></a></div>
      <div class='slide-item'><a href=''><img src='gameimg/wow/Tovar/raid/mount3.png' alt='Mount' /></a></div>
      <div class='slide-item'><a href=''><img src='gameimg/wow/Tovar/raid/mount4.png' alt='Mount' /></a></div>
      <div class='slide-item'><a href=''><img src='gameimg/wow/Tovar/Equip1.png' alt='Equip' /></a></div>
      <div class='slide-item'><a href=''><img src='gameimg/wow/Tovar/mountspvp/mount38.png' alt='Mount PVP' /></a></div>
      <div class='slide-item'><a href=''><img src='gameimg/wow/Tovar/mounts/mount13.png' alt='Mount' /></a></div>
      <div class='slide-item'><a href=''><img src='gameimg/wow/Tovar/achiv/8.png' alt='Achiv' /></a></div>
      <div class='slide-item'><a href=''><img src='gameimg/wow/Tovar/achiv/3.png' alt='Achiv' /></a></div>
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
		<a href="" class="footer-top" style="margin-left: 20%;"><b>Referal System</b></a>
		<a href="" class="footer-top"><b>Work with us</b></a>
		<a href="" class="footer-top"><b>Term of service</b></a>
		<a href="" class="footer-top"><b>Privacy Policy</b></a>
	</div>
</div>
</body>
</html>
