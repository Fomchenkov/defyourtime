<?php
$price_wow = $_GET['price_wow'];
$cart_wow = '';
$info_wow = '';
switch ($price_wow) {
  case 'LVLUP-LQ':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/achiv/12.png' alt=''>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='180' data-title='Выполнение' data-price='150' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Выполненией</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>150</span> Рублей</p>
        </div>
      </div>
      <!-- Бкол товара -->
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Локальные квесты</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite">
      <li>Локальные квесты.</li>
      <li>Требование к аккаунту: 110 уровень персонажа.</li>
    </ul>
    <br>
    <h3 class="main-text">Вы получите:</h3>
    <ul class="ulinfosite">
      <li>Выполнение 4 заданий одной из шести фракции, которая в данный момент имеет дейлик</li>
      <li>В награду получаете 1500 репутации с данной фракцией и сундук в котором может содержаться легендарный предмет/ресурсы оплота/золото.</li>
    </ul>
    <br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'LVLUP-I':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/achiv/13.png' alt=''>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='179' data-title='Избранный' data-price='0' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Избранный</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>0</span> Рублей</p>
        </div>
      </div>
      <!-- Бкол товара -->
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Избранный</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite">
      <li>Срок выполнения:  7-14 дней.</li>
      <li>Требования к аккаунту:  110 уровень и 885 уровень предметов.</li>
    </ul>
    <br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite">
      <li>Выполнение всех обязательных условий для получения достижения <a href="http://ru.wowhead.com/achievement=11387/%D0%B8%D0%B7%D0%B1%D1%80%D0%B0%D0%BD%D0%BD%D1%8B%D0%B9">Избранный</a></li>
    </ul>
    <br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'LVLUP-BS':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/achiv/10.png' alt=''>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='178' data-title='Баланс сил' data-price='4900' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Баланс сил</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>4 900</span> Рублей</p>
        </div>
      </div>
      <!-- Бкол товара -->
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Баланс сил</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite">
      <li>Срок выполнения:  4-8 недель.</li>
      <li>Требования к аккаунту:  110 уровень и 885 уровень предметов.</li>
    </ul>
    <br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite">
      <li>Выполнение всех обязательных условий для получения достижения <b>Баланс сил</b></li>
    </ul>
    <br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'LVLUP-KO':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/achiv/9.png' alt=''>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='177' data-title='Кампания оплота' data-price='1300' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Кампания оплота</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1 300</span> Рублей</p>
        </div>
      </div>
      <!-- Бкол товара -->
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Услуга Кампания оплота</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite">
      <li>Срок выполнения - 7-14 дней.</li>
      <li>Требования: 110 уровень персонажа.</li>
      <li>Продолжение кампании классового оплота Легиона, вышедшее в обновлении 7.2. Открывает доступ к классовому маунту!</li>
    </ul>
    <br>
    <h3 class="main-text">Услуга Кампания оплота 7.2  включает:</h3>
    <ul class="ulinfosite">
      <li>Прохождение всех новых цепочек кампании.</b></li>
      <li>Доступ к рейду <b>Гробница Саргероса.</b></li>
      <li>Доступ к уникальному классовому маунту.</li>
    </ul>
    <br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'LVLUP-D':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/achiv/8.png' alt=''>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='176' data-title='Демонобоец' data-price='2000' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Демонобоец</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>2 000</span> Рублей</p>
        </div>
      </div>
      <!-- Бкол товара -->
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Полеты в Легионе</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite">
      <li>Срок выполнения - 7-14 дней.</li>
      <li>Требования: 110 уровень персонажа.</li>
      <li>Для получения титула требуется истребить 5000 демонов на Аргусе. </li>
    </ul>
    <br>
    <h3 class="main-text">Вы получаете:</h3>
    <ul class="ulinfosite">
      <li>Титул <b>Демонобоец</b></li>
      <li>Маунт <a href="http://ru.wowhead.com/spell=254260/%D0%B1%D0%B5%D0%BB%D0%BE%D0%BD%D0%BE%D0%B3%D0%B8%D0%B9-%D0%B0%D1%80%D0%B3%D1%83%D1%81%D1%81%D0%BA%D0%B8%D0%B9-%D1%81%D0%BA%D0%B8%D1%82%D0%B0%D0%BB%D0%B5%D1%86">Белоногий аргусский скиталец</a></li>
      <li>Достижение <a href="http://ru.wowhead.com/achievement=12104/%D0%B8-%D1%83-%D0%BD%D0%B0%D1%81-%D0%B7%D0%B0%D0%BA%D0%BE%D0%BD%D1%87%D0%B8%D0%BB%D0%B8%D1%81%D1%8C-%D0%B1%D1%83%D0%BB%D0%BE%D1%87%D0%BA%D0%B8-%D0%B8%D0%B7-%D0%BC%D0%B0%D0%BD%D1%8B">И у нас закончились булочки из маны...</a></li>
    </ul>
    <br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'LVLUP-SH':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/achiv/7.png' alt=''>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='175' data-title='Смерти Хроми' data-price='2200' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Добрый Сурамаритянин</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>2 200</span> Рублей</p>
        </div>
      </div>
      <!-- Бкол товара -->
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Полеты в Легионе</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite">
      <li>Срок выполнения:  1-2 суток</li>
      <li>Требования: 110 уровень персонажа.</li>
    </ul>
    <br>
    <h3 class="main-text">Услуга включает прохождение сценария.</h3><br><br>
    <h3 class="main-text">Награды, которые вы получите за прохождение сценария:</h3>
    <ul class="ulinfosite">
      <li>1 из 4 уникальных трансмог сетов: Комплект снаряжения: <a href="http://ru.wowhead.com/item=151693/%D0%BA%D0%BE%D0%BC%D0%BF%D0%BB%D0%B5%D0%BA%D1%82-%D1%81%D0%BD%D0%B0%D1%80%D1%8F%D0%B6%D0%B5%D0%BD%D0%B8%D1%8F-%D0%BE%D0%B4%D0%B5%D0%B6%D0%B4%D1%8B-%D1%80%D0%B2%D0%B0%D0%BD%D0%BE%D0%B3%D0%BE-%D1%88%D1%80%D0%B0%D0%BC%D0%B0">одежды рваного шрама</a>, <a href="http://ru.wowhead.com/item=151695/%D0%BA%D0%BE%D0%BC%D0%BF%D0%BB%D0%B5%D0%BA%D1%82-%D1%81%D0%BD%D0%B0%D1%80%D1%8F%D0%B6%D0%B5%D0%BD%D0%B8%D1%8F-%D0%BB%D0%B0%D1%82%D1%8B-%D1%85%D1%80%D0%B0%D0%BD%D0%B8%D1%82%D0%B5%D0%BB%D1%8F-%D0%B2%D1%80%D0%B5%D0%BC%D0%B5%D0%BD%D0%B8">Комплект снаряжения: латы хранителя времени</a>,<a href="http://ru.wowhead.com/item=151692/%D0%BA%D0%BE%D0%BC%D0%BF%D0%BB%D0%B5%D0%BA%D1%82-%D1%81%D0%BD%D0%B0%D1%80%D1%8F%D0%B6%D0%B5%D0%BD%D0%B8%D1%8F-%D1%83%D0%B1%D1%80%D0%B0%D0%BD%D1%81%D1%82%D0%B2%D0%BE-%D1%85%D1%80%D0%BE%D0%BD%D0%BE%D0%BC%D0%B0%D0%B3%D0%B0">Комплект снаряжения: убранство хрономага</a>,<a href="http://ru.wowhead.com/item=151692/%D0%BA%D0%BE%D0%BC%D0%BF%D0%BB%D0%B5%D0%BA%D1%82-%D1%81%D0%BD%D0%B0%D1%80%D1%8F%D0%B6%D0%B5%D0%BD%D0%B8%D1%8F-%D1%83%D0%B1%D1%80%D0%B0%D0%BD%D1%81%D1%82%D0%B2%D0%BE-%D1%85%D1%80%D0%BE%D0%BD%D0%BE%D0%BC%D0%B0%D0%B3%D0%B0">Комплект снаряжения: кольчужные доспехи стража времен</a></li>
      <li>Титул <b>Повелитель времени</b></li>
      <li>2 боевых питомца: <a href="http://ru.wowhead.com/item=151829/%D0%B1%D1%80%D0%BE%D0%BD%D0%B7%D0%BE%D0%B2%D1%8B%D0%B9-%D0%BF%D1%80%D0%BE%D1%82%D0%BE%D0%B4%D1%80%D0%B0%D0%BA%D0%BE%D0%BD%D1%87%D0%B8%D0%BA">Бронзовый протодракончики</a> <a href="http://ru.wowhead.com/item=151828/%D0%BD%D0%B5%D1%81%D1%82%D0%B0%D1%80%D0%B5%D1%8E%D1%89%D0%B8%D0%B9-%D0%B1%D1%80%D0%BE%D0%BD%D0%B7%D0%BE%D0%B2%D1%8B%D0%B9-%D0%B4%D1%80%D0%B0%D0%BA%D0%BE%D0%BD">Нестареющий бронзовый дракон</a></li>
      <li><b>Искаженные временем знаки</b> и золото. </li>
    </ul>
    <br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'LVLUP-DS':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/achiv/2.png' alt=''>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='174' data-title='Добрый Сурамаритянин' data-price='6000' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Добрый Сурамаритянин</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>6 000</span> Рублей</p>
        </div>
      </div>
      <!-- Бкол товара -->
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Полеты в Легионе</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite">
      <li>Срок выполнения: договорной.</li>
      <li>Требования: 110 уровень персонажа.</li>
    </ul>
    <br>
    <h3 class="main-text">Услуга включает прохождение всех цепочек заданий для получения достижения <b>Добрый сурамаритянин.</b></h3>
    <br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'LVLUP-PVL':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/achiv/2.png' alt=''>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='173' data-title='Следопыт Расколотых островов, часть 1' data-price='4500' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Следопыт Расколотых островов, часть 1</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>4 500</span> Рублей</p>
        </div>
      </div>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='172' data-title='Первопроходец Расколотых островов, часть 2' data-price='1500' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Первопроходец Расколотых островов, часть 2</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1 500</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
    $info_wow = '<h1 class="main-text">Полеты в Легионе</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite">
      <li>Срок выполнения: договорной.</li>
      <li>Требования: 110 уровень персонажа.</li>
    </ul>
    <br>
    <h3 class="main-text">Опция Следопыт Расколотых островов, часть 1 включает в себя:</h3>
    <ul class="ulinfosite">
      <li><a href="http://ru.wowhead.com/achievement=11188/%D1%80%D0%B0%D1%81%D0%BA%D0%BE%D0%BB%D0%BE%D1%82%D1%8B%D0%B5-%D0%BE%D1%81%D1%82%D1%80%D0%BE%D0%B2%D0%B0">Расколотые острова</a></li>
      <li><a href="http://ru.wowhead.com/achievement=11157/%D1%85%D1%80%D0%B0%D0%BD%D0%B8%D1%82%D0%B5%D0%BB%D1%8C-%D0%BC%D1%83%D0%B4%D1%80%D0%BE%D1%81%D1%82%D0%B8-legion">Хранитель мудрости Legion</a></li>
      <li><a href="http://ru.wowhead.com/achievement=11189/%D1%80%D0%B0%D0%B7%D0%BD%D0%BE%D0%BE%D0%B1%D1%80%D0%B0%D0%B7%D0%B8%D0%B5-%D0%B2%D0%BE%D1%82-%D1%87%D1%82%D0%BE-%D0%BF%D1%80%D0%B8%D0%B4%D0%B0%D0%B5%D1%82-%D0%B2%D0%BA%D1%83%D1%81-%D0%B6%D0%B8%D0%B7%D0%BD%D0%B8">Разнообразие – вот что придает вкус жизни</a></li>
      <li><a href="http://ru.wowhead.com/achievement=10672/%D0%B4%D0%B8%D0%BF%D0%BB%D0%BE%D0%BC%D0%B0%D1%82-%D1%80%D0%B0%D1%81%D0%BA%D0%BE%D0%BB%D0%BE%D1%82%D1%8B%D1%85-%D0%BE%D1%81%D1%82%D1%80%D0%BE%D0%B2%D0%BE%D0%B2">Дипломат Расколотых островов</a></li>
      <li><a href="http://ru.wowhead.com/achievement=10994/%D1%81%D0%BB%D0%B0%D0%B2%D0%BD%D0%B0%D1%8F-%D0%BA%D0%B0%D0%BC%D0%BF%D0%B0%D0%BD%D0%B8%D1%8F">Славная кампания</a></li>
    </ul>
    <h3 class="main-text">Опция Первопроходец Расколотых островов – часть 2 включает в себя:</h3>
    <ul class="ulinfosite">
      <li><a href="http://ru.wowhead.com/achievement=11546/%D0%BF%D1%80%D0%BE%D0%BD%D0%B8%D0%BA%D0%BD%D0%BE%D0%B2%D0%B5%D0%BD%D0%B8%D0%B5-%D0%B2-%D0%B3%D1%80%D0%BE%D0%B1%D0%BD%D0%B8%D1%86%D1%83">Проникновение в Гробницу</a></li>
      <li><a href="http://ru.wowhead.com/achievement=11543/%D1%80%D0%B0%D1%81%D0%BA%D0%BE%D0%BB%D0%BE%D1%82%D1%8B%D0%B9-%D0%B1%D0%B5%D1%80%D0%B5%D0%B3">Расколотый берег</a></li>
      <li><a href="http://ru.wowhead.com/achievement=11544/%D0%B7%D0%B0%D1%89%D0%B8%D1%82%D0%BD%D0%B8%D0%BA-%D1%80%D0%B0%D1%81%D0%BA%D0%BE%D0%BB%D0%BE%D1%82%D1%8B%D1%85-%D0%BE%D1%81%D1%82%D1%80%D0%BE%D0%B2%D0%BE%D0%B2">Защитник Расколотых островов</a></li>
      <li><a href="http://ru.wowhead.com/achievement=11545/%D0%BA%D0%BE%D0%BC%D0%B0%D0%BD%D0%B4%D0%B8%D1%80-%D0%B0%D1%80%D0%BC%D0%B8%D0%B8-%D0%BF%D0%BE%D0%B3%D0%B8%D0%B1%D0%B5%D0%BB%D0%B8-%D0%BB%D0%B5%D0%B3%D0%B8%D0%BE%D0%BD%D0%B0">Командир Армии погибели Легиона</a></li>
    </ul>
    <p>Все эти достижения необходимы для получения  <b>Первопроходец Расколотых островов, часть 2,</b> после получения данного достижения Вам будут доступны полеты на <b>Расколотые острова.</b></p><br>
    <br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'LVLUP-VP':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/prof/3.png' alt=''>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='171' data-title='Рыбная ловля' data-price='2500' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Рыбная ловля</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>2 500</span> Рублей</p>
        </div>
      </div>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='170' data-title='Первая помощь' data-price='2500' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Первая помощь</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>2 500</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='169' data-title='Кулинария' data-price='8000' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Кулинария</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>8 000</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='168' data-title='Археология' data-price='3000' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Археология</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>3 000</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Второстепенные профессии</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite">
      <li>Срок выполнения: договорной.</li>
      <li>Требования: 110 уровень персонажа.</li>
    </ul>
    <br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite">
      <li>Прокачать навык  1 по 800 .</li>
      <li>Выполнение квест лайна до рейдового контента.</li>
    </ul>
    <p>В легионе много разных крутых плюшек добавили в профессии, с подробным описанием Вы можете ознакомиться внутри товара представленных в данном каталоге.</p>
    <p>Ранги профессий в WOW Легионе<br> Все рецепты Легиона имеют 3 уровня (ранга):<br>Собирательные профессии имеют несколько бонусных рангов на сбор дополнительных материалов.<br>Для крафтовых профессий более высокие ранги позволяют создавать предметы эффективнее: для одних рецептов уменьшают количество требуемых для крафта материалов, для других – увеличивают количество создаваемых вещей.</p><br>
    <p><b>Кровь саргераса</b></p><br>
    <p>Это новый предмет, необходимый для создания крутых вещей в профессиях и повышения уровня предметов. Персональный при поднятии.
    <ul class="ulinfosite">
      <li>2 шт. <b>Крови Саргераса</b> нужно для повышения уровня предмета с помощью Аннигилята.</li>
      <li>Игроки с собирательными профессиями 2 ранга с некоторой вероятностью могут получить <b>Кровь Саргераса</b> во время поиска цветов / копания жил / снятия шкур.</li>
      <li>Другие пути получить Кровь Саргераса:</li>
        <ul class="ulinfosite">
          <li>Локальные задания</li>
          <li>Дроп в подземельях</li>
          <li>Распыление</li>
          <li>Дроп с наложенными на плечи чарами <a href="http://ru.wowhead.com/item=140219/%D0%B4%D0%B0%D1%80-%D0%BA%D1%80%D0%BE%D0%B2%D0%B0%D0%B2%D0%BE%D0%B3%D0%BE-%D0%BE%D1%85%D0%BE%D1%82%D0%BD%D0%B8%D0%BA%D0%B0">Дар кровавого охотника</a></li>
        </ul>
      <li>Сменить профессию можно за 1000 золотых. Что сильно упрощает их смену.</li>
    </ul>
    <h3 class="main-text">Анигилят</h3>
    <p>Большую роль в профессиях Легиона играет так называемый Аннигилят. Аннигилят – это новый предмет, который в дополнении World of Warcraft Legion позволит игрокам повышать уровень предметов на 5. Улучшение можно применить несколько раз – повысив таким образом уровень крафтовых предметов с 815 до 850. Ненужные предметы можно уничтожить у специальной печи в Даларане (Горн Аннигиляции), чтобы получить Аннигилят услуга включает в себя прокачивание любой крафтовой профессии (профессия, используемая для изготовления предметов) с 1 до 700 навыка. Defyourtime.ru готов помочь в прокачке любой профессии. Мы возьмем на себя все реагенты, а также ежедневные задания. Работать можем в удобное Вам время</p>
    <br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'LVLUP-KP':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/prof/3.png' alt=''>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='167' data-title='Кузнечное дело' data-price='5000' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Кузнечное дело</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>5 000</span> Рублей</p>
        </div>
      </div>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='166' data-title='Ювелирноедело' data-price='5000' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Ювелирноедело</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>5 000</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='165' data-title='Портняжное дело' data-price='4000' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Портняжное дело</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>3 000</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='164' data-title='Инженерное дело ' data-price='4000' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Травничество</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>3 000</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='163' data-title='Наложение чар' data-price='4000' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Наложение чар</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>4 000</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='162' data-title='Кожевничество' data-price='4000' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Кожевничество</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>4 000</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='161' data-title='Начертание' data-price='4000' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Начертание</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>4 000</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='160' data-title='Алхимия' data-price='4000' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Алхимия</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>4 000</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Крафтовые профессии</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite">
      <li>Срок выполнения: договорной.</li>
      <li>Требования: 110 уровень персонажа.</li>
    </ul>
    <br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite">
      <li>Прокачать навык  1 по 800.</li>
      <li>Выполнение квест лайна до рейдового контента.</li>
    </ul>
    <p>В легионе много разных крутых плюшек добавили в профессии, с подробным описанием Вы можете ознакомиться внутри товара представленных в данном каталоге.</p>
    <p>Ранги профессий в WOW Легионе<br> Все рецепты Легиона имеют 3 уровня (ранга):<br>Собирательные профессии имеют несколько бонусных рангов на сбор дополнительных материалов.<br>Для крафтовых профессий более высокие ранги позволяют создавать предметы эффективнее: для одних рецептов уменьшают количество требуемых для крафта материалов, для других – увеличивают количество создаваемых вещей.</p><br>
    <p><b>Кровь саргераса</b></p><br>
    <p>Это новый предмет, необходимый для создания крутых вещей в профессиях и повышения уровня предметов. Персональный при поднятии.
    <ul class="ulinfosite">
      <li>2 шт. <b>Крови Саргераса</b> нужно для повышения уровня предмета с помощью Аннигилята.</li>
      <li>Игроки с собирательными профессиями 2 ранга с некоторой вероятностью могут получить <b>Кровь Саргераса</b> во время поиска цветов / копания жил / снятия шкур.</li>
      <li>Другие пути получить Кровь Саргераса:</li>
        <ul class="ulinfosite">
          <li>Локальные задания</li>
          <li>Дроп в подземельях</li>
          <li>Распыление</li>
          <li>Дроп с наложенными на плечи чарами <a href="http://ru.wowhead.com/item=140219/%D0%B4%D0%B0%D1%80-%D0%BA%D1%80%D0%BE%D0%B2%D0%B0%D0%B2%D0%BE%D0%B3%D0%BE-%D0%BE%D1%85%D0%BE%D1%82%D0%BD%D0%B8%D0%BA%D0%B0">Дар кровавого охотника</a></li>
        </ul>
      <li>Сменить профессию можно за 1000 золотых. Что сильно упрощает их смену.</li>
    </ul><br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'LVLUP-SP':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/prof/2.png' alt=''>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='159' data-title='Горное дело' data-price='3000' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Горное дело</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>3 000</span> Рублей</p>
        </div>
      </div>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='158' data-title='Снятие шкур' data-price='2500' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Снятие шкур</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>2 500</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='157' data-title='Травничество' data-price='3000' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Травничество</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>3 000</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Собирательные профессии</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite">
      <li>Срок выполнения: договорной.</li>
      <li>Требования: 110 уровень персонажа.</li>
    </ul>
    <br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite">
      <li>Прокачать навык  1 по 800 .</li>
      <li>Выполнение квест лайна до рейдового контента.</li>
    </ul>
    <p>В легионе много разных крутых плюшек добавили в профессии, с подробным описанием Вы можете ознакомиться внутри товара представленных в данном каталоге.</p>
    <p>Ранги профессий в WOW Легионе<br> Все рецепты Легиона имеют 3 уровня (ранга):<br>Собирательные профессии имеют несколько бонусных рангов на сбор дополнительных материалов.<br>Для крафтовых профессий более высокие ранги позволяют создавать предметы эффективнее: для одних рецептов уменьшают количество требуемых для крафта материалов, для других – увеличивают количество создаваемых вещей.</p><br>
    <p><b>Кровь саргераса</b></p><br>
    <p>Это новый предмет, необходимый для создания крутых вещей в профессиях и повышения уровня предметов. Персональный при поднятии.
    <ul class="ulinfosite">
      <li>2 шт. <b>Крови Саргераса</b> нужно для повышения уровня предмета с помощью Аннигилята.</li>
      <li>Игроки с собирательными профессиями 2 ранга с некоторой вероятностью могут получить <b>Кровь Саргераса</b> во время поиска цветов / копания жил / снятия шкур.</li>
      <li>Другие пути получить Кровь Саргераса:</li>
        <ul class="ulinfosite">
          <li>Локальные задания</li>
          <li>Дроп в подземельях</li>
          <li>Распыление</li>
          <li>Дроп с наложенными на плечи чарами <a href="http://ru.wowhead.com/item=140219/%D0%B4%D0%B0%D1%80-%D0%BA%D1%80%D0%BE%D0%B2%D0%B0%D0%B2%D0%BE%D0%B3%D0%BE-%D0%BE%D1%85%D0%BE%D1%82%D0%BD%D0%B8%D0%BA%D0%B0">Дар кровавого охотника</a></li>
        </ul>
      <li>Сменить профессию можно за 1000 золотых. Что сильно упрощает их смену.</li>
    </ul>
    <h3 class="main-text">Анигилят</h3>
    <p>Большую роль в профессиях Легиона играет так называемый Аннигилят. Аннигилят – это новый предмет, который в дополнении World of Warcraft Legion позволит игрокам повышать уровень предметов на 5. Улучшение можно применить несколько раз – повысив таким образом уровень крафтовых предметов с 815 до 850. Ненужные предметы можно уничтожить у специальной печи в Даларане (Горн Аннигиляции), чтобы получить Аннигилят услуга включает в себя прокачивание любой крафтовой профессии (профессия, используемая для изготовления предметов) с 1 до 700 навыка. Defyourtime.ru готов помочь в прокачке любой профессии. Мы возьмем на себя все реагенты, а также ежедневные задания. Работать можем в удобное Вам время</p>
    <br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'LVLUP-VQP':
    $cart_wow ="<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/prof/1.png' alt=''>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='156' data-title='Прокачать 100 - 110 уровень' data-price='1400' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Прокачать 100 - 110 уровень</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1 400</span> Рублей</p>
        </div>
      </div>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='155' data-title='Выполнение квест лайна' data-price='2000' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Выполнение квест лайна</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>2 000</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Выполнение квест лайна любой профессии до рейдового контента</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite">
      <li>Срок выполнения: договорной.</li>
      <li>Требования: 110 уровень персонажа.</li>
      <li>Наличие профессии (уровень навыка 700+).</li>
    </ul>
    <br>
    <h3 class="main-text">Важно!</h3>
    <ul class="ulinfosite">
      <li>Для крафтовой профессии крайне желательно наличие добывающей парной профессии.</li>
      <li>Прохождение цепочек заданий, во время которых открываются рецепты на крафт большинства вещей данной профессии.</li>
      <li>Не включено прохождение последних квестов в рейдах, т.к. туда не будет доступа больше месяца.</li>
    </ul>
    <h3 class="main-text">Нововведением в легионе для профессий стало:</h3>
    <ul class="ulinfosite">
      <li>Появления 3 рангов для рецептов в профессиях, позволяющих создавать предметы более высокого уровня.</li>
      <li>Для собирательных профессий - бонусные ранги.</li>
      <li>Изменился интерфейс самих профессий.</li>
      <li>Сменить профессию можно за 1000 золотых. Что сильно упрощает их смену.</li>
    </ul><br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'LVLUP-PA':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/pvp/4.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='154' data-title='С героических подземелий' data-price='7000' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>С героических подземелий</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>7 000</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='153' data-title='С нормал рейда' data-price='25000' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>С нормал рейда</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>25 000</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='152' data-title='С героического рейда' data-price='45000' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>С героического рейда</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>45 000</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Пакеты экипировки</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite">
      <li>Срок выполнения: договорной.</li>
    </ul>
    <br>
    <h3 class="main-text">Быстрый и без лишних заморочек способ приодеть персонажа, предлагаем различные варианты:</h3>
    <ul class="ulinfosite">
      <li>Одеть персонажа в полный комплект экипировки с героических подземелий.</li>
      <li>Одеть персонажа в полный комплект экпипировки с нормал рейда.</li>
      <li>Одеть персонажа в полный комплект экпипировки с героического рейда.</li>
    </ul><br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'PVP-RBG-PRPB':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/pvp/4.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='151' data-title='Уровень престижа PVP' data-price='0' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Победа на РБГ</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>0</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
    $info_wow = '<h1 class="main-text">Прокачка Рейтинга Поля Боя</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <br>
    <h3 class="main-text">Доступные опции к заказу через сайт:</h3>
    <ul class="ulinfosite">
      <li>1800/1900/2000/2100/2200/2300/2400.</li>
      <li>Герой Альянса.</li>
    </ul>
    <h3 class="main-text">Описание опций:</h3>
    <ul class="ulinfosite">
      <li>Допустим вы выбрали опцию 2200 рейтинг , значит ваш рейтинг должен быть ниже этой отметки к примеру 1600. По завершению заказа у вашего персонажа будет 2200 рейтинг на РПБ.</li>
    </ul>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'PVP_RBG-WIN':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/pvp/2.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='150' data-title='Уровень престижа PVP' data-price='0' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Победа на РБГ</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>0</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Победа на РБГ</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite">
      <li>Срок: Договорной</li>
      <li>Требования: 110 уровень</li>
    </ul>
    <p>Поможем Вам набить необходимое количество побед на РБГ. 100% побед не гарантируем, так что услуга не подойдет для поддержания рейтинга. Играем честно, без переливов и других махинаций, для защиты аккаунта от последствий. Услуга является оптимальным решением для отбития накопившего капа очков завоевания и многих других вещей:</p>
    <ul class="ulinfosite">
      <li>Идеальное решение для получения многих званий и маунтов, таких как:</li>
      <li>75 побед - Ветеран орды/альянса</li>
      <li>150 побед  - Ветеран орды / альянс ll</li>
      <li>300 побед  - Вестник битв орды / альянса</li>
    </ul>
    <p>Награда:  <a href="http://ru.wowhead.com/item=70910/%D1%80%D0%BE%D0%B3-%D1%8F%D1%80%D0%BE%D1%81%D1%82%D0%BD%D0%BE%D0%B3%D0%BE-%D0%B1%D0%BE%D0%B5%D0%B2%D0%BE%D0%B3%D0%BE-%D0%B2%D0%BE%D0%BB%D0%BA%D0%B0">Рог яростного боевого волка</a> для орды, и <a href="http://ru.wowhead.com/item=70909/%D0%BF%D0%BE%D0%B2%D0%BE%D0%B4%D1%8C%D1%8F-%D1%8F%D1%80%D0%BE%D1%81%D1%82%D0%BD%D0%BE%D0%B3%D0%BE-%D0%B1%D0%BE%D0%B5%D0%B2%D0%BE%D0%B3%D0%BE-%D0%BA%D0%BE%D0%BD%D1%8F">Поводья яростного боевого коня</a> для альянса.</p>
    <br><br>
    <h3 class="main-text">Седла ярости, которые позволит получить Вам следующих маунтов:</h3>
    <ul class="ulinfosite">
      <li><a href="http://ru.wowhead.com/item=142437/%D1%8F%D1%80%D0%BE%D1%81%D1%82%D0%BD%D1%8B%D0%B9-%D0%B1%D0%BE%D0%B5%D0%B2%D0%BE%D0%B9-%D1%81%D0%BA%D0%BE%D1%80%D0%BF%D0%B8%D0%BE%D0%BD">Яростный боевой скорпион</a></li>
      <li><a href="http://ru.wowhead.com/item=142237/%D1%8F%D1%80%D0%BE%D1%81%D1%82%D0%BD%D1%8B%D0%B9-%D0%B1%D0%BE%D0%B5%D0%B2%D0%BE%D0%B9-%D0%BB%D0%B5%D0%B2">Яростный боевой лев</a></li>
      <li><a href="http://ru.wowhead.com/item=142235/%D1%8F%D1%80%D0%BE%D1%81%D1%82%D0%BD%D1%8B%D0%B9-%D0%B1%D0%BE%D0%B5%D0%B2%D0%BE%D0%B9-%D0%BC%D0%B5%D0%B4%D0%B2%D0%B5%D0%B4%D1%8C">Яростный боевой медведь</a></li>
      <li><a href="http://ru.wowhead.com/item=143649/%D1%8F%D1%80%D0%BE%D1%81%D1%82%D0%BD%D0%B0%D1%8F-%D0%B1%D0%BE%D0%B5%D0%B2%D0%B0%D1%8F-%D1%87%D0%B5%D1%80%D0%B5%D0%BF%D0%B0%D1%85%D0%B0">Яростная боевая черепаха</a></li>
    </ul>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'LVLUP-AFGA':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/dange/2.png' alt=''>
    <select name='option3' id='antor'>
      <option value='1'>Эпохальный</option>
      <option value='2'>Героик</option>
      <option value='3'>Нормал</option>
    </select>
    <div id='mihic' style='display: block;'>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='149' data-title='Иду сам' data-price='30000' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Иду сам</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>30 000</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='148' data-title='Бис гир' data-price='70000' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Бис гир</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>70 000</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='147' data-title='Оффспек' data-price='30000' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Мой ilvl 900+</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>30 000</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='146' data-title='Прохождение' data-price='6500' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Мой ilvl 890+</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>65 000</span> Рублей</p>
        </div>
      </div>
      </div>
      <div id='heroic' style='display: none;'>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='145' data-title='Иду сам' data-price='5000' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Иду сам</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>5 000</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='144' data-title='Бис гир' data-price='10000' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Бис гир</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>10 000</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='143' data-title='Оффспек' data-price='4000' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Оффспек</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>4 000</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='142' data-title='Прохождение' data-price='6000' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Прохождение</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>6 000</span> Рублей</p>
        </div>
      </div>
      </div>
      <div id='normal' style='display: none;'>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='141' data-title='Иду сам' data-price='1' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Иду сам</h3>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='140' data-title='Бис гир' data-price='3000' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Бис гир</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>3 000</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='139' data-title='Офф спек' data-price='4000' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Офф спек</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>4 000</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='138' data-title='Прохождение' data-price='6000' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Мой ilvl 890+</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>6 000</span> Рублей</p>
        </div>
      </div>
      </div>
      <script src='alltrubls.js'></script>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div>";
  $info_wow = '<h1 class="main-text">Анторус Фулл Гир все сложности</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite">
      <li>Срок выполнения: договорной.</li>
      <li>Требования: персонаж 110 уровня.</li>
    </ul>
    <br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite">
      <li>Фарм вещей необходимого Вам уровня в мифик+ данжах. Дополнительно Вы получаете Силу Артефакта.</li>
      <li>Мы будем проходить рейды до тех пор, пока Вашему персонажу не выпадет вещь из рейда в каждый слот.</li>
    </ul>
    <h3 class="main-text">Доступные опции: </h3>
    <ul class="ulinfosite">
      <li>960-970 илвл фулл гир с Анторус, Пылающий Трон Мифик.</li>
      <li>Иду сам — Вы будете учавствовать в рейде лично.</li>
      <li>Бис Гир — лучшие вещи для определенного спека Вашего персонажа.</li>
      <li>Оффспек — все вещи для дополнительной специализации.</li>
    </ul>
    <br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'LVLUP-FAP':
    $cart_wow = '<div class="backtoprice">
  <div id="wrapper_tovar">
    <img style="border-radius: 10px 10px 0 0" src="gameimg/wow/price/achiv/6.png" alt="">
    <div class="item_box">
      <div class="calc">
        <div class="price-block">
        <div class="gold">
          <span class="text-option">Я заплачу:</span><br>
          <input class="input-value-farm" type="number" id="input-money-farm" value="2000" alt="2000"><br> <span class="text-option" style="color:#fff"> руб</span>
        </div>
        <div class="money">
          <span class="text-option">Я получу:</span>
          <input type="number" class="input-value-farm" id="input-gold-farm"> <span class="text-option" style="color:#fff"> часов</span>
        </div>
        </div>
        <div class="addiction">
          <div class="total">
            <span class="text-option">Всего:</span>
            <input value="0" type="text" disabled class="total-count" id="total-value">
            <input type="checkbox" class="add_item box_input" data-id="137" data-title="Золото" data-price="" data-img="gameimg/info.png"><span class="text-option">В корзину</span></button>
          </div>
        </div>
      </div>
      <script src="calcfarm.js"></script>
    </div>
    <div class="label-place"></div><!-- Элемент, где будет расположен ярлык корзины --> 
  </div>
</div>';
$info_wow = '<h1 class="main-text">Фарм силы артефакта Обновлено под 7.3</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite">
      <li>Срок выполнения:  Зависит от количества заказанных вами часов фарма.</li>
      <li>Требования:  110 уровень персонажа.</li>
    </ul>
    <br><br>
    <h3 class="main-text">Вы получите: </h3>
    <ul class="ulinfosite">
      <li>Наш драйвер будет фармить нон стопом силу артефакта.</li>
      <li>Чем Выше уровень - тем более сильное оружие имеет Ваш персонаж.</li>
      <li>Значительное усиление возможностей Вашего персонажа, в том числе и скрытые бафы к персонажу.</li>
      <li>Артефактное оружие можно использовать везде и без ограничений.</li>
    </ul>
    <h3 class="main-text">Что такое Сила Артефакта?</h3>
    <ul class="ulinfosite">
      <li>Одна из самых важных новинок дополнения Legion.</li>
      <li>Сила артефакта необходима на улучшение вашего артефактного оружия - удобный <a href="http://ru.wowhead.com/artifact-calc/warrior/fury/A_ZiMjAA">калькулятор Силы Артефакта</a>.</li>
      <li>Каждый уровень артефакта существенно увеличивает вашу выживаемость/наносимый урон/исходящее исцеление.</li>
      <li>Чем выше уровень знаний артефакта, тем больше можно получить силы, за тот же промежуток времени.</li>
      <li>Параллельно с получением силы артефакта вы будете качать репутации, получать кровь саргераса и даже вещи достаточно высокого итемлвла!</li>
    </ul>
    <br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'LVLUP-IABM':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/dange/2.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='136' data-title='Мой ilvl 930+' data-price='450' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Мой ilvl 930+</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1 900</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='135' data-title='Мой ilvl 910+' data-price='700' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Мой ilvl 930+</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>700</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='134' data-title='Мой ilvl 900+' data-price='1000' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Мой ilvl 900+</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1 000</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='181' data-title='Мой ilvl 890+' data-price='1400' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Мой ilvl 890+</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1 400</span> Рублей</p>
        </div>
      </div>
       <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='133' data-title='Cделать все преквесты' data-price='300' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Cделать все преквесты</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>300</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Испытание Артефакта - Башня Магов</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <p>Услуга включает прохождение испытания  Башни Магов на расколотом берегу для одной специализации. За прохождение испытания Вы получаете уникальный внешний вид артефакта и достижение <a href="http://ru.wowhead.com/achievement=11611/%D0%B8%D1%81%D0%BF%D1%8B%D1%82%D0%B0%D0%BD%D0%BD%D0%BE%D0%B5-%D0%BE%D1%80%D1%83%D0%B6%D0%B8%D0%B5">Испытанное оружие</a>. Каждая специализация имеет свой <a href="http://ru.wowhead.com/challenging-artifact-weapon-appearances">уникальный вид</a> артефакта, вы можете заказать испытание артфакта для каждой интересующей Вас специальности.</p>
    <br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'LVLUP-PP':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/achiv/3.png' alt=''>
    <select name='option2' id='prokchka'>
      <option value='1'>prokchka100-110</option>
      <option value='2'>prokchka90-100</option>
      <option value='3'>prokchka20-110</option>
    </select>
        <div id='prokchka100-110' style='display: block;'>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='132' data-title='Прокачать за 12 часов (100-110)' data-price='400' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Прокачать за 12 часов (100-110)</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>400</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='131' data-title='Прокачать с 1 по 100 уровень' data-price='2400' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Прокачать с 1 по 100 уровень</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>2 400</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='130' data-title='Кампания Аргуса' data-price='1000' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Кампания Аргуса</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1 000</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='129' data-title='Кампания Расколотого берега' data-price='1600' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Кампания Расколотого берега</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>3 200</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='128' data-title='Кампания классового оплота' data-price='1500' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Кампания классового оплота</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1 500</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='127' data-title='Анторус героик ПЛ со скидкой ' data-price='2000' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Анторус героик ПЛ со скидкой</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>2 000</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='126' data-title='Прокачка' data-price='780' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Пройти 11 из 11 подземелий</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>780</span> Рублей</p>
        </div>
      </div>
      </div>
      <div id='prokchka90-100' style='display: none;'>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='125' data-title='Прокачать за 9 часов (90-100)' data-price='300' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Пройти 11 из 11 подземелий</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>300</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='124' data-title='Прокачать с 1 по 90 уровень' data-price='2300' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Пройти 11 из 11 подземелий</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>2 300</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='123' data-title='Прокачать с 100 по 110 уровень' data-price='1200' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Прокачать с 100 по 110 уровень</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1 200</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='122' data-title='Прокачка' data-price='700' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Прокачка</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>700</span> Рублей</p>
        </div>
      </div>
      </div>
      <div id='prokchka20-110' style='display: none;'>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='121' data-title='Прокачать за 4 дня' data-price='1500' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Прокачать за 4 дня</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1 500</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='120' data-title='Прокачка' data-price='3300' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Прокачать за 4 дня</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>3 300</span> Рублей</p>
        </div>
      </div>
      </div>
      <script src='prokachka.js'></script>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Прокачка персонажа</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок прокачки:  1-2 дня..</li>
      <li>Требования к аккаунту: минимум 100 уровень.</li>
    </ul><br>
    <h3 class="main-text"><b>Прокачка персонажа осуществляется исключительно руками, никаких ботов и автоматизированных программ!.</b></h3><br>
    <h3 class="main-text">Описание услуги:</h3>
    <p>При заказе прокачки до 110 уровня вы получите: Персонажа 110 уровня<br>
    Будет одет в  экипировку которую выдают за выполнение квестовых заданий в LEGION.<br>
    Предлагаем услугу для тех, кто не хочет тратить ни секунды, чтобы достичь 110-го уровня максимально быстро.<br>
    Наши сотрудники начнут прокачивать Вашего персонажа за 1 - 2 дня, максимально быстро и эффективно.<br>
    Мы можем качать персонажа как по квестам, так и по героикам, в зависимости от Ваших предпочтений.<br>
    Желаемый метод прокачки Вы можете указать в комментарии.<br>
    Возможна прокачка и с других уровней, к примеру 103 - 110, 107 - 110 и другие. Цена будет ниже. Свяжитесь с оператором для уточнения деталей. Также, настоятельно рекомендуем уточнять способ прокачки артефакта при оформлении заказа во избежание разногласий после его выполнения. Также мы можем работать в удобное Вам время, что позволит Вам ходить в рейды, играть на РБГ и жить полноценной игровой жизнью. Однако, сроки прокачки могу увеличиться.</p>
    <br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'PVP-RBG-LVLUPHONOR':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/pvp/1.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='119' data-title='Уровень престижа PVP' data-price='0' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Уровень престижа PVP</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>0</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Уровень Престижа PvP</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <br>
    <h3 class="main-text"><b>Наша команда поможет Вам со взятием выбранного Вами рейтинга на Арене, или Полях Боя. Мы не несем отвественности за дальнейшие действия от разработчиков игры в Вашу сторону по отношению к пользовательскому соглашению.</b></h3><br>
    <h3>Услуга включает на Ваш выбор следующие опции:</h3>
    <ul class="ulinfosite_price">
      <li>Прокачка уровня престижа до 1 уровня.</li>
      <li>Прокачка уровня престижа до 2 уровня.</li>
      <li>Прокачка уровня престижа до 3 уровня.</li>
      <li>Прокачка уровня престижа до 4 уровня.</li>
    </ul><br>
    <h3 class="main-text">Что такое уровни Престижа?:</h3>
    <ul class="ulinfosite">
      <li>Необходимо прокачать <b>50 уровеней Чести</b.</li>
      <li>По достижению <b>50 уровня Чести</b> она обнулится и Вам дадут 1 уровень престижа.</li>
      <li>Вы получите разные <b>виды артефактов</b>, маунтов, питомцев и многое другое.</li>
      <li>Маунты за Престиж - <a href="http://ru.wowhead.com/item=140228/%D0%BF%D1%80%D0%BE%D1%81%D0%BB%D0%B0%D0%B2%D0%BB%D0%B5%D0%BD%D0%BD%D1%8B%D0%B9-%D0%B1%D1%80%D0%BE%D0%BD%D0%B7%D0%BE%D0%B2%D1%8B%D0%B9-%D1%81%D0%BA%D0%B0%D0%BA%D1%83%D0%BD">Прославленный бронзовый скакун</a>, <a href="http://ru.wowhead.com/item=140230/%D0%BF%D1%80%D0%BE%D1%81%D0%BB%D0%B0%D0%B2%D0%BB%D0%B5%D0%BD%D0%BD%D1%8B%D0%B9-%D0%BA%D0%BE%D1%80%D0%BE%D0%BB%D0%B5%D0%B2%D1%81%D0%BA%D0%B8%D0%B9-%D1%81%D0%BA%D0%B0%D0%BA%D1%83%D0%BD">Прославленный королевский скакун</a>, <a href="http://ru.wowhead.com/item=140232/%D0%BF%D1%80%D0%BE%D1%81%D0%BB%D0%B0%D0%B2%D0%BB%D0%B5%D0%BD%D0%BD%D1%8B%D0%B9-%D0%BB%D0%B5%D1%81%D0%BD%D0%BE%D0%B9-%D1%81%D0%BA%D0%B0%D0%BA%D1%83%D0%BD">Прославленный лесной скакун</a>, <a href="http://ru.wowhead.com/item=140233/%D0%BF%D1%80%D0%BE%D1%81%D0%BB%D0%B0%D0%B2%D0%BB%D0%B5%D0%BD%D0%BD%D1%8B%D0%B9-%D0%B1%D0%B5%D0%BB%D1%8B%D0%B9-%D1%81%D0%BA%D0%B0%D0%BA%D1%83%D0%BD">Прославленный белый скакун</a>, <a href="http://ru.wowhead.com/item=140407/%D0%BF%D1%80%D0%BE%D1%81%D0%BB%D0%B0%D0%B2%D0%BB%D0%B5%D0%BD%D0%BD%D1%8B%D0%B9-%D0%BF%D0%BE%D0%BB%D0%BD%D0%BE%D1%87%D0%BD%D1%8B%D0%B9-%D1%81%D0%BA%D0%B0%D0%BA%D1%83%D0%BD">Прославленный полночный скакун</a>, <a href="http://ru.wowhead.com/item=140408/%D0%BF%D1%80%D0%BE%D1%81%D0%BB%D0%B0%D0%B2%D0%BB%D0%B5%D0%BD%D0%BD%D1%8B%D0%B9-%D0%BB%D0%B0%D0%B7%D1%83%D1%80%D0%BD%D1%8B%D0%B9-%D1%81%D0%BA%D0%B0%D0%BA%D1%83%D0%BD">Прославленный лазурный скакун</a>.</li>
      <li>Питомцы за Престиж - <a href="http://ru.wowhead.com/item=139775/%D1%8D%D0%BD%D1%82%D1%83%D0%B7%D0%B8%D0%B0%D1%81%D1%82-%D0%B0%D0%BB%D1%8C%D1%8F%D0%BD%D1%81%D0%B0">Энтузиаст Альянса</a>, <a href="http://ru.wowhead.com/item=139775/%D1%8D%D0%BD%D1%82%D1%83%D0%B7%D0%B8%D0%B0%D1%81%D1%82-%D0%B0%D0%BB%D1%8C%D1%8F%D0%BD%D1%81%D0%B0">Фанатик Орды</a>.</li>
    </ul>
    <br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'PVP-ARENA-GLAD':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/pvp/5.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='118' data-title='Гладиатор' data-price='500000' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Гладиатор</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>500 000</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
    $info_wow = '<h1>Гладиатор</h1><br><br>
    <h3>Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок прокачки: в течении сезона.</li>
      <li>Требование к персонажу: 110 уровень.</li>
    </ul><br>
    <h3><b>Наша команда поможет Вам со взятием выбранного Вами рейтинга на Арене, или Полях Боя. Мы не несем отвественности за дальнейшие действия от разработчиков игры в Вашу сторону по отношению к пользовательскому соглашению.</b></h3><br>
    <h3>Оплачивая услугу Вы получите:</h3>
    <ul class="ulinfosite_price">
      <li>Рейтинг необходимый для получения <a href="http://ru.wowhead.com/achievement=2091/%D0%B3%D0%BB%D0%B0%D0%B4%D0%B8%D0%B0%D1%82%D0%BE%D1%80">Гладиатор</a> по окончанию сезона.</li>
      <li>Возможность получить Уникального маунта.</li>
      <li>Множество достижений на арене, без доплат.</li>
      <li>Восхищение и зависть своих знакомых по игре, а также случайных игроков.</li>
    </ul><br>
    <h3>Как мы это сделаем?</h3>
    <p>Наши гладиаторы прокачают вашего персонажа в брекете 3х3 до уровня достаточного для вхождения в 0,5% строк рейтинговой таблицы. Также мы будем плотно играть в концовке сезона, что бы подогнать команду под нужные параметры. Самым ярым любителям PVP и редких достижений мы также представляем помощь в получении уникального достижения  - Топ 1 гладиатор. Услуга включает получение первой строчки в таблице pvp команд, даёт уникальный титул, великий подвиг - <Название сезона> гладиатор. Такого рода званий в игре крайне мало - ведь они доставались только игрокам, которые занимали первые места в одном из сезонов.</p>
    <br><br>
    <h3>Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'PVP-ARENA-PAP':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/dange/2.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='117' data-title='Пройти 8 из 11 подземелий' data-price='1900' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Пройти 8 из 11 подземелий</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1 900</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='116' data-title='Пройти 10 из 11 подземелий' data-price='2700' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Пройти 10 из 11 подземелий</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>2 700</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='115' data-title='Пройти 11 из 11 подземелий' data-price='3200' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Пройти 11 из 11 подземелий</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>3 200</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
    $info_wow ='<div id="container">
        <div id="jQuerySlider">
        </div>
        <input type="text" id="Editbox" name="Сумма" value="3" autocomplete="off" spellcheck="false">
        </div>
        <script src="jquery-ui.min.js"></script>
        <script src="begunok.js"></script>';
    break;
  case 'Dangeon-EPP':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/dange/3.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='114' data-title='2-3 уровень ключа' data-price='300' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>2-3 уровень ключа</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>300</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='113' data-title='4-6 уровень ключа' data-price='400' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>4-6 уровень ключа</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>400</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='112' data-title='7 уровень' data-price='500' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>7 уровень<br> подземелий</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>500</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='111' data-title='8 уровень' data-price='600' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>8 уровень</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>600</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='110' data-title='9 уровень ключа' data-price='700' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>9 уровень ключа</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>700</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='109' data-title='10 уровень ключа' data-price='750' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>10 уровень ключа</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>750</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='108' data-title='11 уровень ключа' data-price='850' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>11 уровень ключа</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>850</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='107' data-title='12 уровень ключа' data-price='1000' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>12 уровень ключа</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1000</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='106' data-title='13 уровень ключа' data-price='1200' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>13 уровень ключа</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1 200</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='105' data-title='14 уровень ключа' data-price='1300' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>14 уровень ключа</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1 300</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='181' data-title='15 уровень ключа' data-price='1400' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>15 уровень ключа</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1 400</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
    $info_wow = '<h1 class="main-text">Эпохальные ПЛЮС подземелья</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: от 2 часов.</li>
      <li>Требование к персонажу: 110 уровень.</li>
      <li>При заказе ключа +10 и выше требуется 900+ уровень экипировки!</li>
    </ul><br>
    <h3 class="main-text"><b>Это очень быстрый и эффективный способ приодеться. Весь лут 940+ уровня и другой,  выпавший в процессе прохождения, на персонажа останутся в сумке.</b></h3><br>
    <h3 class="main-text">Описание услуги:</h3>
    <ul class="ulinfosite_price">
      <li>Прохождение одного эпохального+ подземелья по Вашему ключу. Возможны варианты прохождения нескольких подземелий подряд по выгодной цене, обратитесь к оператору для оформления персонального заказа.</li>
      <li>Вы получите лут из всех подземелий, которые мы пройдём, пока достигнем заказанного уровня, + сундук в оплоте в конце недели.</li>
      <li>Это самый быстрый и эффективный способ приодеться.</li>
    </ul><br>
    <h3>Что это вообще такое?</h3>
    <p>Дополнение Legion принесло в игру новый тип контента - Эпохальные+ подземелья с ключами. На самом деле это те же самые подземелья эпохальной сложности, но имеющие следующие особенности:</p>
    <ul class="ulinfosite_price">
      <li>Ограничение времени на прохождение;</li>
      <li>Усиленные противники;</li>
      <li>Дополнительные способности противников и окружающего мира.</li>
    </ul>
    <br><br>
    <h3 class="main-text">Эпохальные ключи имеют всего 2 характеристики:</h3>
    <ul class="ulinfosite_price">
      <li>Уровень;</li>
      <li>Набор модификаторов.</li>
      <li><img src="img/key.png"></li>
    </ul>
    <h3>Эпохальный ключ 6 уровня</h3>
    <h3>Источники ключей:</h3>
    <ul class="ulinfosite">
      <li>Вы можете получить ключ 2 уровня из добычи с последнего босса эпохального подземелья без ключа;</li>
      <li>Вы можете получить ключ в конце эпохального подземелья с ключом; Уровень ключа будет примерно на 30% ниже уровня пройденного подземелья.</li>
      <li>Вы можете получить ключ <a href="https://www.noob-club.ru/index.php?topic=41879.0#weekly">с сундука в оплоте</a>. Уровень ключа будет примерно на 30% ниже максимального уровня, пройденного вами на прошлой неделе.</li>
    </ul>
    <br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Dangeon-EP':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/dange/2.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='104' data-title='Пройти 8 из 11 подземелий' data-price='1900' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Пройти 8 из 11 подземелий</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1 900</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='103' data-title='Пройти 10 из 11 подземелий' data-price='2700' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Пройти 10 из 11 подземелий</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>2 700</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='102' data-title='Пройти 11 из 11 подземелий' data-price='3200' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Пройти 11 из 11 подземелий</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>3 200</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Эпохальные Подземелья</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: от 2 часов</li>
      <li>Требование к персонажу: 110 уровень.</li>
    </ul><br>
    <h3><b>Это очень быстрый и эффективный способ приодеться. Весь лут 840+ уровня и другой,  выпавший в процессе прохождения, на персонажа останутся в сумке.</b></h3><br>
    <h3 class="main-text">Ваш персонаж в составе нашей группы пройдет следующие подземелья:</h3>
    <ul class="ulinfosite_price">
      <li>Крепость Черной Ладьи.</li>
      <li>Квартал Звезд.</li>
      <li>Чаща Темного Сердца.</li>
      <li>Око Азшары.</li>
      <li>Чертоги Доблести.</li>
      <li>Утроба душ.</li>
      <li>Логово Нелтариона.</li>
      <li>Катакомбы Сурамара.</li>
      <li>Казематы Стражей.</li>
      <li>Штурм Аметистовой крепости.</li>
      <li>Собор Вечной Ночи.</li>
    </ul><br>
    <h3 class="main-text">Доступно две услуги Прохождения Эпохальный Подземелий:</h3>
    <ul class="ulinfosite_price">
      <li>Прохождение 8/11 подземелий.</li>
      <li>Прохождение 10/11 подземелий.</li>
      <li>Прохождение 11/11 подземелий.</li>
    </ul>
    <br><br>
    <h3 class="main-text">Описание:</h3>
    <ul class="ulinfosite_price">
      <li>Стрим (трансляция). Вы сможете наблюдать за процессом прохождения подземелий Вашим персонажем. Мы предоставим ссылку для просмотра в браузере.</li>
      <li>Иду сам.  Говорит за себя, можете поучаствовать в группе лично.</li>
    </ul><br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Dangeon-WPARI':
    $cart_wow = "
    <div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/dange/1.png' alt=''>
      <select name='option' id='opt'>
        <option value='1'>wowprogress score</option>
        <option value='2'>Raide.io score</option>
      </select>
      <!-- Бкол товара -->
      <div id='wowprogers' style='display: block;'>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='101' data-title='1800 scoreг' data-price='17499' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>1800 score</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>17 499</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='100' data-title='1900 scoreг' data-price='17999' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>1900 score</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>17 999</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='99' data-title='2000 scoreг' data-price='9100' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>2000 score</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>9 100</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='98' data-title='2100 scoreг' data-price='18999' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>2100 score</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>18 999</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='97' data-title='2200 scoreг' data-price='12999' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>2200 score</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>12 999</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='96' data-title='2300 scoreг' data-price='19999' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>2300 score</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>19 999</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='95' data-title='2400 scoreг' data-price='19500' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>2400 score</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>17 499</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='94' data-title='2500 scoreг' data-price='27999' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>2500 score</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>27 999</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='93' data-title='2600 scoreг' data-price='31999' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>2600 score</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>31 999</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='92' data-title='2700 scoreг' data-price='34999' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>2700 score</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>34 999</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='91' data-title='2800 scoreг' data-price='42999' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>2800 score</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>42 999</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='90' data-title='2900 scoreг' data-price='59999' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>2900 score</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>59 999</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='89' data-title='Иду сам' data-price='2999' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Иду сам</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>2 999</span> Рублей</p>
        </div>
      </div>
      </div>
      <div id='reid_score' style='display: none;'>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='88' data-title='2100 scoreг' data-price='17499' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>2100+- Score</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>17 499</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='87' data-title='2200 scoreг' data-price='17999' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>2200+- Score</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>17 999</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='86' data-title='2300 scoreг' data-price='18499' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>2300+- Score</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>18 499</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='85' data-title='2400 scoreг' data-price='18999' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>2400+- score</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>18 999</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='84' data-title='2600 scoreг' data-price='19499' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>2600+- score</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>19 499</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='83' data-title='2800 scoreг' data-price='19999' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>2800+- score</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>19 999</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='82' data-title='3000 scoreг' data-price='23999' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>3000+- score</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>23 999</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='81' data-title='3200 scoreг' data-price='27999' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>3200+- score</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>27 999</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='80' data-title='3600 scoreг' data-price='34999' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>3600+- score</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>34 999</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='79' data-title='3800 scoreг' data-price='42999' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>3800 score</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>42 999</span> Рублей</p>
        </div>
      </div>
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='76' data-title='Иду сам' data-price='2999' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Иду сам</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>2 999</span> Рублей</p>
        </div>
      </div>
      </div>
      <script src='opt.js'></script>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div>
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Эпохальные+ Подземелья Score</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: от 30 минут до 48 часов.</li>
      <li>Требование к персонажу: 110 уровень, 930+ уровень предметов.</li>
    </ul><br><br><br>
    <h3 class="main-text">Доступные опции:</h3>
    <ul class="ulinfosite_price">
      <li>Мы повысим ваш Эпохальные+ WoWProgress Score от 1800 до 2900 очков.</li>
      <li>Мы повысим ваш Эпохальные+ Raider.io Score от 2100 до 3800 очков.</li>
    </ul><br><br>
    <h3 class="main-text">ВНИМАНИЕ! Перед тем, как оплачивать услугу, узнайте у оператора подходит ли ваш персонаж для выбраной опции Score.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Maunt-PVP-CBM':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mountspvp/39.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='75' data-title='Черный боевой механодолгоног' data-price='1199' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Черный боевой механодолгоног</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1 199</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Поводья черного боевого маханодолгонога</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: 4 - 8 часов.</li>
    </ul><br><br><br>
    <h3 class="main-text">Описание:</h3>
    <ul class="ulinfosite_price">
      <li>Получение маунта - <a href="http://ru.wowhead.com/item=29465/%D1%87%D0%B5%D1%80%D0%BD%D1%8B%D0%B9-%D0%B1%D0%BE%D0%B5%D0%B2%D0%BE%D0%B9-%D0%BC%D0%B5%D1%85%D0%B0%D0%BD%D0%BE%D0%B4%D0%BE%D0%BB%D0%B3%D0%BE%D0%BD%D0%BE%D0%B3">Поводья черного боевого маханодолгонога.</a></li>
    </ul><br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Maunt-PVP-JBKS':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mountspvp/38.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='74' data-title='Яростный боевой конь-скелет' data-price='1199' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Яростный боевой конь-скелет</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1 199</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Поводья яростного боевого коня-скелета</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: 4 - 8 часов.</li>
    </ul><br><br><br>
    <h3 class="main-text">Описание:</h3>
    <ul class="ulinfosite_price">
      <li>Получение маунта - <a href="http://ru.wowhead.com/item=102533/%D0%BF%D0%BE%D0%B2%D0%BE%D0%B4%D1%8C%D1%8F-%D1%8F%D1%80%D0%BE%D1%81%D1%82%D0%BD%D0%BE%D0%B3%D0%BE-%D0%B1%D0%BE%D0%B5%D0%B2%D0%BE%D0%B3%D0%BE-%D0%BA%D0%BE%D0%BD%D1%8F-%D1%81%D0%BA%D0%B5%D0%BB%D0%B5%D1%82%D0%B0">Поводья яростного боевого коня-скелета.</a></li>
    </ul><br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Maunt-PVP-PDM':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mountspvp/37.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='73' data-title='Пеплошкурый дикий мушан' data-price='1199' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Пеплошкурый дикий мушан</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1 199</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Поводья пеплошкурого дикого мушана</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: 4 - 8 часов.</li>
    </ul><br><br><br>
    <h3 class="main-text">Описание:</h3>
    <ul class="ulinfosite_price">
      <li>Получение маунта - <a href="http://ru.wowhead.com/item=103638/%D0%BF%D0%BE%D0%B2%D0%BE%D0%B4%D1%8C%D1%8F-%D0%BF%D0%B5%D0%BF%D0%BB%D0%BE%D1%88%D0%BA%D1%83%D1%80%D0%BE%D0%B3%D0%BE-%D0%B4%D0%B8%D0%BA%D0%BE%D0%B3%D0%BE-%D0%BC%D1%83%D1%88%D0%B0%D0%BD%D0%B0">Поводья пеплошкурого дикого мушана.</a></li>
    </ul><br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Maunt-PVP-VBS':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mountspvp/36.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='72' data-title='Вороной боевой скакун' data-price='1199' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Вороной боевой скакун</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1 199</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Поводья вороного боевого скакуна</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: 4 - 8 часов.</li>
    </ul><br><br><br>
    <h3 class="main-text">Описание:</h3>
    <ul class="ulinfosite_price">
      <li>Получение маунта - <a href="http://ru.wowhead.com/item=29468/%D1%83%D0%B7%D0%B4%D0%B0-%D0%B2%D0%BE%D1%80%D0%BE%D0%BD%D0%BE%D0%B3%D0%BE-%D0%B1%D0%BE%D0%B5%D0%B2%D0%BE%D0%B3%D0%BE-%D1%81%D0%BA%D0%B0%D0%BA%D1%83%D0%BD%D0%B0">Поводья вороного боевого скакуна.</a></li>
    </ul><br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Maunt-PVP-JBL':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mountspvp/35.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='71' data-title='Яростный боевой лис' data-price='1199' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Яростный боевой лис</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1 199</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Поводья яростного боевого лиса</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: 4 - 8 часов.</li>
    </ul><br><br><br>
    <h3 class="main-text">Описание:</h3>
    <ul class="ulinfosite_price">
      <li>Получение маунта - <a href="http://ru.wowhead.com/item=152870/%D1%8F%D1%80%D0%BE%D1%81%D1%82%D0%BD%D1%8B%D0%B9-%D0%B1%D0%BE%D0%B5%D0%B2%D0%BE%D0%B9-%D0%BB%D0%B8%D1%81">Поводья яростного боевого лиса.</a></li>
    </ul><br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Maunt-PVP-PPS':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mountspvp/34.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='70' data-title='Прославленный полуночный скакун' data-price='1199' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Прославленный полуночный скакун</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1 199</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Поводья прославленного полуночного скакуна</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: 4 - 8 часов.</li>
    </ul><br><br><br>
    <h3 class="main-text">Описание:</h3>
    <ul class="ulinfosite_price">
      <li>Получение маунта - <a href="http://ru.wowhead.com/item=140407/%D0%BF%D1%80%D0%BE%D1%81%D0%BB%D0%B0%D0%B2%D0%BB%D0%B5%D0%BD%D0%BD%D1%8B%D0%B9-%D0%BF%D0%BE%D0%BB%D0%BD%D0%BE%D1%87%D0%BD%D1%8B%D0%B9-%D1%81%D0%BA%D0%B0%D0%BA%D1%83%D0%BD">Поводья прославленного поулчного скакуна.</a></li>
    </ul><br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Maunt-PVP-PBSN':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mountspvp/33.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='69' data-title='Прославленный бронзовый скакун' data-price='1199' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Прославленный бронзовый скакун</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1 199</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Поводья прославленного бронзового скакуна</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: 4 - 8 часов.</li>
    </ul><br><br><br>
    <h3 class="main-text">Описание:</h3>
    <ul class="ulinfosite_price">
      <li>Получение маунта - <a href="http://ru.wowhead.com/item=140228/%D0%BF%D1%80%D0%BE%D1%81%D0%BB%D0%B0%D0%B2%D0%BB%D0%B5%D0%BD%D0%BD%D1%8B%D0%B9-%D0%B1%D1%80%D0%BE%D0%BD%D0%B7%D0%BE%D0%B2%D1%8B%D0%B9-%D1%81%D0%BA%D0%B0%D0%BA%D1%83%D0%BD">Поводья прославленного бронзового скакуна.</a></li>
    </ul><br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Maunt-PVP-JBV':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mountspvp/32.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='68' data-title='Яростный боевой волк' data-price='1199' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Яростный боевой волк</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1 199</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Поводья яростного боевого волка</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: 4 - 8 часов.</li>
    </ul><br><br><br>
    <h3 class="main-text">Описание:</h3>
    <ul class="ulinfosite_price">
      <li>Получение маунта - <a href="http://ru.wowhead.com/spell=100333/%D1%8F%D1%80%D0%BE%D1%81%D1%82%D0%BD%D1%8B%D0%B9-%D0%B1%D0%BE%D0%B5%D0%B2%D0%BE%D0%B9-%D0%B2%D0%BE%D0%BB%D0%BA">Поводья яростного боевого волка.</a></li>
    </ul><br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Maunt-PVP-PLS':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mountspvp/31.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='67' data-title='Прославленный лазурный скакун' data-price='1199' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Прославленный лазурный скакун</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1 199</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Поводья прославленного лазурного скакуна</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: 4 - 8 часов.</li>
    </ul><br><br><br>
    <h3 class="main-text">Описание:</h3>
    <ul class="ulinfosite_price">
      <li>Получение маунта - <a href="http://ru.wowhead.com/item=140408/%D0%BF%D1%80%D0%BE%D1%81%D0%BB%D0%B0%D0%B2%D0%BB%D0%B5%D0%BD%D0%BD%D1%8B%D0%B9-%D0%BB%D0%B0%D0%B7%D1%83%D1%80%D0%BD%D1%8B%D0%B9-%D1%81%D0%BA%D0%B0%D0%BA%D1%83%D0%BD">Поводья прославленного лазурного скакуна.</a></li>
    </ul><br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Maunt-PVP-PBS':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mountspvp/30.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='66' data-title='Прославленный белый скакун' data-price='1199' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Прославленный белый скакун</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1 199</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Поводья прославленного белого скакуна</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: 4 - 8 часов.</li>
    </ul><br><br><br>
    <h3 class="main-text">Описание:</h3>
    <ul class="ulinfosite_price">
      <li>Получение маунта - <a href="http://ru.wowhead.com/item=140233/%D0%BF%D1%80%D0%BE%D1%81%D0%BB%D0%B0%D0%B2%D0%BB%D0%B5%D0%BD%D0%BD%D1%8B%D0%B9-%D0%B1%D0%B5%D0%BB%D1%8B%D0%B9-%D1%81%D0%BA%D0%B0%D0%BA%D1%83%D0%BD">Поводья прославленного белого скакуна.</a></li>
    </ul><br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Maunt-PVP-PKS':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mountspvp/29.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='65' data-title='Прославленный королевский скакун' data-price='1199' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Прославленный королевский скакун</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1 199</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Поводья прославленного королевского скакуна</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: 4 - 8 часов.</li>
    </ul><br><br><br>
    <h3 class="main-text">Описание:</h3>
    <ul class="ulinfosite_price">
      <li>Получение маунта - <a href="http://ru.wowhead.com/item=140230/%D0%BF%D1%80%D0%BE%D1%81%D0%BB%D0%B0%D0%B2%D0%BB%D0%B5%D0%BD%D0%BD%D1%8B%D0%B9-%D0%BA%D0%BE%D1%80%D0%BE%D0%BB%D0%B5%D0%B2%D1%81%D0%BA%D0%B8%D0%B9-%D1%81%D0%BA%D0%B0%D0%BA%D1%83%D0%BD">Поводья прославленного королевского скакуна.</a></li>
    </ul><br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Maunt-PVP-JBMD':
   $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mountspvp/28.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='64' data-title='Яростный боевой медведь' data-price='1199' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Яростный боевой медведь</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1 199</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Поводья яростного боевоевого медведя</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: 4 - 8 часов.</li>
    </ul><br><br><br>
    <h3 class="main-text">Описание:</h3>
    <ul class="ulinfosite_price">
      <li>Получение маунта - <a href="http://ru.wowhead.com/item=142234/%D1%8F%D1%80%D0%BE%D1%81%D1%82%D0%BD%D1%8B%D0%B9-%D0%B1%D0%BE%D0%B5%D0%B2%D0%BE%D0%B9-%D0%BC%D0%B5%D0%B4%D0%B2%D0%B5%D0%B4%D1%8C">Поводья яростного боевоевого медведя.</a></li>
    </ul><br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Maunt-PVP-JBC':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mountspvp/27.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='63' data-title='Яростная боевая черепаха' data-price='1199' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Яростная боевая черепаха</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1 199</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Поводья яростной боевой черепахи</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: 4 - 8 часов.</li>
    </ul><br><br><br>
    <h3 class="main-text">Описание:</h3>
    <ul class="ulinfosite_price">
      <li>Получение маунта - <a href="http://ru.wowhead.com/item=142369/%D0%BF%D0%B0%D0%BB%D0%B5%D0%B2%D1%8B%D0%B9-%D0%BA%D1%80%D1%8B%D0%BB%D0%BE%D0%B1%D0%B5%D0%B3">Поводья яростной боевой черепахи.</a></li>
    </ul><br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Maunt-PVP-PK':
    $cart_wow ="<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mountspvp/26.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='62' data-title='Палевый крылобег' data-price='1199' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Палевый крылобег</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1 199</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Поводья палевого крылобега</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: 4 - 8 часов.</li>
    </ul><br><br><br>
    <h3 class="main-text">Описание:</h3>
    <ul class="ulinfosite_price">
      <li>Получение маунта - <a href="http://ru.wowhead.com/item=142369/%D0%BF%D0%B0%D0%BB%D0%B5%D0%B2%D1%8B%D0%B9-%D0%BA%D1%80%D1%8B%D0%BB%D0%BE%D0%B1%D0%B5%D0%B3">Поводья палевого крылобега.</a></li>
    </ul><br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Maunt-PVP-PBV':
   $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mountspvp/25.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='61' data-title='Прославленный боевой волк' data-price='1199' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Прославленный боевой волк</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1 199</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Поводья прославленного боевого волка</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: 4 - 8 часов.</li>
    </ul><br><br><br>
    <h3 class="main-text">Описание:</h3>
    <ul class="ulinfosite_price">
      <li>Получение маунта - <a href="http://ru.wowhead.com/item=143864/%D0%BF%D0%BE%D0%B2%D0%BE%D0%B4%D1%8C%D1%8F-%D0%BF%D1%80%D0%BE%D1%81%D0%BB%D0%B0%D0%B2%D0%BB%D0%B5%D0%BD%D0%BD%D0%BE%D0%B3%D0%BE-%D0%B1%D0%BE%D0%B5%D0%B2%D0%BE%D0%B3%D0%BE-%D0%B2%D0%BE%D0%BB%D0%BA%D0%B0">Поводья прославленного боевого волка.</a></li>
    </ul><br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Maunt-PVP-JBS':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mountspvp/24.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='60' data-title='Яростный боевой саблезуб' data-price='1199' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Яростный боевой саблезуб</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1 199</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Поводья яростного боевого саблезуба</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: 4 - 8 часов.</li>
    </ul><br><br><br>
    <h3 class="main-text">Описание:</h3>
    <ul class="ulinfosite_price">
      <li>Получение маунта - <a href="http://ru.wowhead.com/spell=146615/%D1%8F%D1%80%D0%BE%D1%81%D1%82%D0%BD%D1%8B%D0%B9-%D0%B1%D0%BE%D0%B5%D0%B2%D0%BE%D0%B9-%D1%81%D0%B0%D0%B1%D0%BB%D0%B5%D0%B7%D1%83%D0%B1">Поводья яростного боевого саблезуба.</a></li>
    </ul><br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Maunt-PVP-PBK':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mountspvp/23.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='59' data-title='Прославленный боевой конь' data-price='1199' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Прославленный боевой конь</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1 199</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow ='<h1 class="main-text">Поводья прославленного боевого коня</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: 4 - 8 часов.</li>
    </ul><br><br><br>
    <h3 class="main-text">Описание:</h3>
    <ul class="ulinfosite_price">
      <li>Получение маунта - <a href="http://ru.wowhead.com/item=129280/%D0%BF%D0%BE%D0%B2%D0%BE%D0%B4%D1%8C%D1%8F-%D0%BF%D1%80%D0%BE%D1%81%D0%BB%D0%B0%D0%B2%D0%BB%D0%B5%D0%BD%D0%BD%D0%BE%D0%B3%D0%BE-%D0%B1%D0%BE%D0%B5%D0%B2%D0%BE%D0%B3%D0%BE-%D0%BA%D0%BE%D0%BD%D1%8F">Поводья прославленного боевого коня.</a></li>
    </ul><br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Maunt-PVP-JBGK':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mountspvp/22.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='58' data-title='Яростный боевой гилнеасский конь' data-price='1199' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Яростный боевой<br>гилнеасский конь</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1 199</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Поводья яростного боевого гилнеасского коня</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: 4 - 8 часов.</li>
    </ul><br><br><br>
    <h3 class="main-text">Описание:</h3>
    <ul class="ulinfosite_price">
      <li>Получение маунта - <a href="http://ru.wowhead.com/item=140353/%D1%8F%D1%80%D0%BE%D1%81%D1%82%D0%BD%D1%8B%D0%B9-%D0%B1%D0%BE%D0%B5%D0%B2%D0%BE%D0%B9-%D0%B3%D0%B8%D0%BB%D0%BD%D0%B5%D0%B0%D1%81%D1%81%D0%BA%D0%B8%D0%B9-%D0%BA%D0%BE%D0%BD%D1%8C">Поводья яростного боевого гилнеасского коня.</a></li>
    </ul><br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Maunt-PVP-JK':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mountspvp/21.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='57' data-title='Яростный крылобег' data-price='1199' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Яростный крылобег</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1 199</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Поводья яростного крылобега</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: 4 - 8 часов.</li>
    </ul><br><br><br>
    <h3 class="main-text">Описание:</h3>
    <ul class="ulinfosite_price">
      <li>Получение маунта - <a href="http://ru.wowhead.com/item=140348/%D1%8F%D1%80%D0%BE%D1%81%D1%82%D0%BD%D1%8B%D0%B9-%D0%BA%D1%80%D1%8B%D0%BB%D0%BE%D0%B1%D0%B5%D0%B3">Поводья яростного крылобега.</a></li>
    </ul><br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>'; 
  break;
  case 'Maunt-PVP-JBT':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mountspvp/20.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='56' data-title='Яростный боевой трицикл' data-price='1199' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Яростный боевой элекк</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1 199</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Поводья яростного боевого трицикла</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: 4 - 8 часов.</li>
    </ul><br><br><br>
    <h3 class="main-text">Описание:</h3>
    <ul class="ulinfosite_price">
      <li>Получение маунта - <a href="http://ru.wowhead.com/item=140354/%D1%8F%D1%80%D0%BE%D1%81%D1%82%D0%BD%D1%8B%D0%B9-%D0%B1%D0%BE%D0%B5%D0%B2%D0%BE%D0%B9-%D1%82%D1%80%D0%B8%D1%86%D0%B8%D0%BA%D0%BB">Поводья яростного боевого трицикла.</a></li>
    </ul><br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Maunt-PVP-JBE':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mountspvp/19.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='55' data-title='Яростный боевой элекк' data-price='1199' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Яростный боевой элекк</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1 199</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow ='<h1 class="main-text">Поводья яростного боевого элика</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: 4 - 8 часов.</li>
    </ul><br><br><br>
    <h3 class="main-text">Описание:</h3>
    <ul class="ulinfosite_price">
      <li>Получение маунта - <a href="http://ru.wowhead.com/spell=223578/%D1%8F%D1%80%D0%BE%D1%81%D1%82%D0%BD%D1%8B%D0%B9-%D0%B1%D0%BE%D0%B5%D0%B2%D0%BE%D0%B9-%D1%8D%D0%BB%D0%B5%D0%BA%D0%BA">Поводья яростного боевого элика.</a></li>
    </ul><br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Maunt-PVP-CBB':
    $cart_wow ="<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mountspvp/18.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='54' data-title='Черный боевой баран' data-price='1200' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Черный боевой баран</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1 200</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Поводья черного боевого барана</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: 4 - 8 часов.</li>
    </ul><br><br><br>
    <h3 class="main-text">Описание:</h3>
    <ul class="ulinfosite_price">
      <li>Получение маунта - <a href="http://ru.wowhead.com/item=29467/%D1%87%D0%B5%D1%80%D0%BD%D1%8B%D0%B9-%D0%B1%D0%BE%D0%B5%D0%B2%D0%BE%D0%B9-%D0%B1%D0%B0%D1%80%D0%B0%D0%BD">Поводья черного боевого барана.</a></li>
    </ul><br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Maunt-PVP-JBM':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mountspvp/17.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='53' data-title='Яростный боевой механодолгоног' data-price='1199' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Яростный боевой механодолгоног</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1 199</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Поводья яростного боевого механодолгонога</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: 4 - 8 часов.</li>
    </ul><br><br><br>
    <h3 class="main-text">Описание:</h3>
    <ul class="ulinfosite_price">
      <li>Получение маунта - <a href="http://ru.wowhead.com/item=124089/%D1%8F%D1%80%D0%BE%D1%81%D1%82%D0%BD%D1%8B%D0%B9-%D0%B1%D0%BE%D0%B5%D0%B2%D0%BE%D0%B9-%D0%BC%D0%B5%D1%85%D0%B0%D0%BD%D0%BE%D0%B4%D0%BE%D0%BB%D0%B3%D0%BE%D0%BD%D0%BE%D0%B3">Поводья яростного боевого механодолгонога.</a></li>
    </ul><br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Maunt-PVP-JBKO':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mountspvp/16.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='52' data-title='Яростный боевой кодо' data-price='1199' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Яростный боевой кодо</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1 199</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Поводья яростного боевого кодо</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: 4 - 8 часов.</li>
    </ul><br><br><br>
    <h3 class="main-text">Описание:</h3>
    <ul class="ulinfosite_price">
      <li>Получение маунта - <a href="http://ru.wowhead.com/item=124540/%D1%8F%D1%80%D0%BE%D1%81%D1%82%D0%BD%D1%8B%D0%B9-%D0%B1%D0%BE%D0%B5%D0%B2%D0%BE%D0%B9-%D0%BA%D0%BE%D0%B4%D0%BE">Поводья яростного боевого кодо.</a></li>
    </ul><br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Maunt-PVP-JBJ':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mountspvp/15.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='51' data-title='Яростный боевой ящер' data-price='1199' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Яростный боевой баран</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1 199</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Поводья яростного боевого ящера</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: 4 - 8 часов.</li>
    </ul><br><br><br>
    <h3 class="main-text">Описание:</h3>
    <ul class="ulinfosite_price">
      <li>Получение маунта - <a href="http://ru.wowhead.com/item=116778/%D1%8F%D1%80%D0%BE%D1%81%D1%82%D0%BD%D1%8B%D0%B9-%D0%B1%D0%BE%D0%B5%D0%B2%D0%BE%D0%B9-%D1%8F%D1%89%D0%B5%D1%80">Поводья яростного боевого ящера.</a></li>
    </ul><br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Maunt-PVP-JBB':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mountspvp/14.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='50' data-title='Яростный боевой баран' data-price='1199' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Яростный боевой баран</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1 199</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow ='<h1 class="main-text">Поводья яростного боевого барана</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: 4 - 8 часов.</li>
    </ul><br><br><br>
    <h3 class="main-text">Описание:</h3>
    <ul class="ulinfosite_price">
      <li>Получение маунта - <a href="http://ru.wowhead.com/item=116777/%D1%8F%D1%80%D0%BE%D1%81%D1%82%D0%BD%D1%8B%D0%B9-%D0%B1%D0%BE%D0%B5%D0%B2%D0%BE%D0%B9-%D0%B1%D0%B0%D1%80%D0%B0%D0%BD">Поводья яростного боевого барана.</a></li>
    </ul><br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Maunt-PVP-CVT':
    $cart_wow ="<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mountspvp/13.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='49' data-title='Черный боевой талбук' data-price='1199' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Черный боевой талбук</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1 199</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow ='<h1 class="main-text">Поводья черного боевого талбука</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: 4 - 8 часов.</li>
    </ul><br><br><br>
    <h3 class="main-text">Описание:</h3>
    <ul class="ulinfosite_price">
      <li>Получение маунта - <a href="http://ru.wowhead.com/item=29228/%D0%BF%D0%BE%D0%B2%D0%BE%D0%B4%D1%8C%D1%8F-%D1%87%D0%B5%D1%80%D0%BD%D0%BE%D0%B3%D0%BE-%D0%B1%D0%BE%D0%B5%D0%B2%D0%BE%D0%B3%D0%BE-%D1%82%D0%B0%D0%BB%D0%B1%D1%83%D0%BA%D0%B0">Поводья черного боевого талбука.</a></li>
    </ul><br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Maunt-PVP-BSGV':
    $cart_wow ="<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mountspvp/12.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='48' data-title='Боевой скакун грозовой вершины' data-price='1199' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Боевой скакун<br> грозовой вершины</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1 199</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow ='<h1 class="main-text">Поводья боевого скакуна грозовой вершины</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: 4 - 8 часов.</li>
    </ul><br><br><br>
    <h3 class="main-text">Описание:</h3>
    <ul class="ulinfosite_price">
      <li>Получение маунта - <a href="http://ru.wowhead.com/item=19030/%D0%B1%D0%BE%D0%B5%D0%B2%D0%BE%D0%B9-%D1%81%D0%BA%D0%B0%D0%BA%D1%83%D0%BD-%D0%B3%D1%80%D0%BE%D0%B7%D0%BE%D0%B2%D0%BE%D0%B9-%D0%B2%D0%B5%D1%80%D1%88%D0%B8%D0%BD%D1%8B">Поводья боевого скакуна грозовой вершины.</a></li>
    </ul><br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Maunt-PVP-CBK':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mountspvp/11.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='47' data-title='Черный боевой кодо' data-price='1199' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Черный боевой кодо</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1 199</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Поводья черного боевого кодо</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: 4 - 8 часов.</li>
    </ul><br><br><br>
    <h3 class="main-text">Описание:</h3>
    <ul class="ulinfosite_price">
      <li>Получение маунта - <a href="http://ru.wowhead.com/item=29466/%D1%87%D0%B5%D1%80%D0%BD%D1%8B%D0%B9-%D0%B1%D0%BE%D0%B5%D0%B2%D0%BE%D0%B9-%D0%BA%D0%BE%D0%B4%D0%BE">Поводья черного боевого кодо.</a></li>
    </ul><br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Maunt-PVP-JBK':
    $cart_wow ="<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mountspvp/10.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='46' data-title='Яростный боевой конь' data-price='1199' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Яростный боевой конь</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1 199</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow ='<h1 class="main-text">Поводья яростного боевого коня</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: 4 - 8 часов.</li>
    </ul><br><br><br>
    <h3 class="main-text">Описание:</h3>
    <ul class="ulinfosite_price">
      <li>Получение маунта - <a href="http://ru.wowhead.com/item=70909/%D0%BF%D0%BE%D0%B2%D0%BE%D0%B4%D1%8C%D1%8F-%D1%8F%D1%80%D0%BE%D1%81%D1%82%D0%BD%D0%BE%D0%B3%D0%BE-%D0%B1%D0%BE%D0%B5%D0%B2%D0%BE%D0%B3%D0%BE-%D0%BA%D0%BE%D0%BD%D1%8F">Поводья яростного боевого коня.</a></li>
    </ul><br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Maunt-PVP-SBK':
    $cart_wow ="<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mountspvp/9.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='45' data-title='Стремительный боевой крылобег' data-price='1199' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Стремительный боевой крылобег</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1 199</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
    $info_wow ='<h1 class="main-text">Поводья стремительного боевого крылобега</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: 4 - 8 часов.</li>
    </ul><br><br><br>
    <h3 class="main-text">Описание:</h3>
    <ul class="ulinfosite_price">
      <li>Получение маунта - <a href="http://ru.wowhead.com/item=34129/%D1%81%D1%82%D1%80%D0%B5%D0%BC%D0%B8%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9-%D0%B1%D0%BE%D0%B5%D0%B2%D0%BE%D0%B9-%D0%BA%D1%80%D1%8B%D0%BB%D0%BE%D0%B1%D0%B5%D0%B3">Поводья стремительного боевого крылобега.</a></li>
    </ul><br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Maunt-PVP-CBJ':
    $cart_wow ="<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mountspvp/8.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='44' data-title='Черный боевой ящер' data-price='1199' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Черный боевой ящер</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1 199</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow ='<h1 class="main-text">Поводья черного боевого ящера</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: 4 - 8 часов.</li>
    </ul><br><br><br>
    <h3 class="main-text">Описание:</h3>
    <ul class="ulinfosite_price">
      <li>Получение маунта - <a href="http://ru.wowhead.com/item=29472/%D1%87%D0%B5%D1%80%D0%BD%D1%8B%D0%B9-%D0%B1%D0%BE%D0%B5%D0%B2%D0%BE%D0%B9-%D1%8F%D1%89%D0%B5%D1%80">Поводья черного боевого ящера.</a></li>
    </ul><br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Maunt-PVP-KBK':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mountspvp/7.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='44' data-title='Красный боевой конь' data-price='1199' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Красный боевой конь</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1 199</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Поводья красного боевого коня</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: 4 - 8 часов.</li>
    </ul><br><br><br>
    <h3 class="main-text">Описание:</h3>
    <ul class="ulinfosite_price">
      <li>Получение маунта - <a href="http://ru.wowhead.com/item=29470/%D0%BA%D1%80%D0%B0%D1%81%D0%BD%D1%8B%D0%B9-%D0%B1%D0%BE%D0%B5%D0%B2%D0%BE%D0%B9-%D0%BA%D0%BE%D0%BD%D1%8C-%D1%81%D0%BA%D0%B5%D0%BB%D0%B5%D1%82">Поводья красного боевого коня.</a></li>
    </ul><br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Maunt-PVP-CBV':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mountspvp/6.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='43' data-title='Черный боевой волк' data-price='1199' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Черный боевой волк</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1 199</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow ='<h1 class="main-text">Поводья черного боевого волка</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: 4 - 8 часов.</li>
    </ul><br><br><br>
    <h3 class="main-text">Описание:</h3>
    <ul class="ulinfosite_price">
      <li>Получение маунта - <a href="http://ru.wowhead.com/item=29469/%D1%87%D0%B5%D1%80%D0%BD%D1%8B%D0%B9-%D0%B1%D0%BE%D0%B5%D0%B2%D0%BE%D0%B9-%D0%B2%D0%BE%D0%BB%D0%BA">Поводья черного боевого волка.</a></li>
    </ul><br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Maunt-PVP-CBMT':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mountspvp/5.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='42' data-title='Черный боевой мамонт' data-price='1199' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Черный боевой мамонт</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1 199</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Поводья черного боевого мамонта</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: 4 - 8 часов.</li>
    </ul><br><br><br>
    <h3 class="main-text">Описание:</h3>
    <ul class="ulinfosite_price">
      <li>Получение маунта - <a href="http://ru.wowhead.com/item=44077/%D0%BF%D0%BE%D0%B2%D0%BE%D0%B4%D1%8C%D1%8F-%D1%87%D0%B5%D1%80%D0%BD%D0%BE%D0%B3%D0%BE-%D0%B1%D0%BE%D0%B5%D0%B2%D0%BE%D0%B3%D0%BE-%D0%BC%D0%B0%D0%BC%D0%BE%D0%BD%D1%82%D0%B0">Поводья черного боевого маммонта.</a></li>
    </ul><br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Maunt-PVP-CBM':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mountspvp/4.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='41' data-title='Черный боевой медведь' data-price='1199' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Черный боевой медведь</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1 199</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Поводья черного боевого медведя</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: 4 - 8 часов.</li>
    </ul><br><br><br>
    <h3 class="main-text">Описание:</h3>
    <ul class="ulinfosite_price">
      <li>Получение маунта - <a href="http://ru.wowhead.com/item=44223/%D0%BF%D0%BE%D0%B2%D0%BE%D0%B4%D1%8C%D1%8F-%D1%87%D0%B5%D1%80%D0%BD%D0%BE%D0%B3%D0%BE-%D0%B1%D0%BE%D0%B5%D0%B2%D0%BE%D0%B3%D0%BE-%D0%BC%D0%B5%D0%B4%D0%B2%D0%B5%D0%B4%D1%8F">Поводья черного боевого медведя.</a></li>
    </ul><br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Maunt-PVP-CBS':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mountspvp/3.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='40' data-title='Черный боевой заблезуб' data-price='1199' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Черный боевой заблезуб</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1 199</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow ='<h1 class="main-text">Поводья черного боевого саблезуба</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: 4 - 8 часов.</li>
    </ul><br><br><br>
    <h3 class="main-text">Описание:</h3>
    <ul class="ulinfosite_price">
      <li>Получение маунта - <a href="http://ru.wowhead.com/item=29471/%D0%BF%D0%BE%D0%B2%D0%BE%D0%B4%D1%8C%D1%8F-%D1%87%D0%B5%D1%80%D0%BD%D0%BE%D0%B3%D0%BE-%D0%B1%D0%BE%D0%B5%D0%B2%D0%BE%D0%B3%D0%BE-%D1%81%D0%B0%D0%B1%D0%BB%D0%B5%D0%B7%D1%83%D0%B1%D0%B0">Поводья черного боевого саблезуба.</a></li>
    </ul><br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Maunt-PVP-CBA':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mountspvp/2.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='39' data-title='Черный боевой элекк' data-price='1199' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Черный боевой элекк</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1 199</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow ='<h1 class="main-text">Поводья черного боевого элекка</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: 4 - 8 часов.</li>
    </ul><br><br><br>
    <h3 class="main-text">Описание:</h3>
    <ul class="ulinfosite_price">
      <li>Получение маунта - <a href="http://ru.wowhead.com/item=35906/%D1%87%D0%B5%D1%80%D0%BD%D1%8B%D0%B9-%D0%B1%D0%BE%D0%B5%D0%B2%D0%BE%D0%B9-%D1%8D%D0%BB%D0%B5%D0%BA%D0%BA">Поводья черного боевого элекка.</a></li>
    </ul><br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Maunt-PVP-CBT':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mountspvp/1.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='38' data-title='Поводья черного боевого талбука' data-price='1199' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Поводья черного боевого талбука</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1 199</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Поводья черного боевого талбука</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: 4 - 8 часов.</li>
    </ul><br><br><br>
    <h3 class="main-text">Описание:</h3>
    <ul class="ulinfosite_price">
      <li>Получение маунта - <a href="http://ru.wowhead.com/item=29228/%D0%BF%D0%BE%D0%B2%D0%BE%D0%B4%D1%8C%D1%8F-%D1%87%D0%B5%D1%80%D0%BD%D0%BE%D0%B3%D0%BE-%D0%B1%D0%BE%D0%B5%D0%B2%D0%BE%D0%B3%D0%BE-%D1%82%D0%B0%D0%BB%D0%B1%D1%83%D0%BA%D0%B0#screenshots">Поводья черного боевого талбука.</a></li>
    </ul><br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Maunt-woldDrop-JDD':
    $cart_wow ="<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mounts/30.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='37' data-title='Янтарный доисторический дикорог' data-price='1995' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Янтарный<br> доисторический дикорог</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>1 995</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow ='<h1 class="main-text">Янтарный доисторический дикорог</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: 1 - 7 дней.</li>
    </ul><br><br><br>
    <h3 class="main-text">Описание:</h3>
    <ul class="ulinfosite_price">
      <li>Получение маунта - <a href="http://ru.wowhead.com/item=94230/%D0%BF%D0%BE%D0%B2%D0%BE%D0%B4%D1%8C%D1%8F-%D1%8F%D0%BD%D1%82%D0%B0%D1%80%D0%BD%D0%BE%D0%B3%D0%BE-%D0%B4%D0%BE%D0%B8%D1%81%D1%82%D0%BE%D1%80%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%BE%D0%B3%D0%BE-%D0%B4%D0%B8%D0%BA%D0%BE%D1%80%D0%BE%D0%B3%D0%B0#screenshots">Поводья янтарного доисторического дикорога</a></li>
    </ul><br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Maunt-woldDrop-CDJ':
    $cart_wow ="<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mounts/29.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='36' data-title='Черный древний ящер' data-price='4999' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Черный древний ящер</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>4 999</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = 'Черный древний ящер';
    break;
  case 'Maunt-woldDrop-SJP':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mounts/28.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='35' data-title='Солнечный ястреб пиков' data-price='2750' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Солнечный ястреб пиков</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>2 750</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Солнечный ястреб пиков</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: договорной</li>
      <li>Требования к аккаунту:  Персонаж 100 уровня.</li>
    </ul><br><br><br>
    <h3 class="main-text">Описание:</h3>
    <ul class="ulinfosite_price">
      <li>Вы получите <a href="http://ru.wowhead.com/item=116771/%D1%81%D0%BE%D0%BB%D0%BD%D0%B5%D1%87%D0%BD%D1%8B%D0%B9-%D1%8F%D1%81%D1%82%D1%80%D0%B5%D0%B1-%D0%BF%D0%B8%D0%BA%D0%BE%D0%B2">Солнечный ястреб пиков</a></li>
      <li><a href="http://ru.wowhead.com/npc=87493/%D1%80%D1%83%D1%85%D0%BC%D0%B0%D1%80">Рухмар</a> - новый ворлд босс, с которого с низким шансом могут упасть поводья ite_price">
      <li>Defyourtime.ru готовы взять на себя поиск, ожидание и убийство Рухмар на себя, Вам остаётся только раслабиться и ждать заказаного маунта.</li>
      <li>Маунт уникальный и редкий, владеют и будут владеть им очень небольшой круг игроков, и Вы можете стать одним из них!</li>
    </ul><br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Maunt-woldDrop-SMG':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mounts/27.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='34' data-title='Солнечношкурый малый гронн' data-price='4999' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Солнечношкурый малый гронн</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>4 999</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Солнечношкурый малый гронн</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: 1 - 7 дней.</li>
      <li>Требования к аккаунту:  Персонаж 100 уровня.</li>
    </ul><br><br><br>
    <h3 class="main-text">Описание:</h3>
    <ul class="ulinfosite_price">
      <li>Маунт <a href="http://ru.wowhead.com/item=116792/%D1%81%D0%BE%D0%BB%D0%BD%D0%B5%D1%87%D0%BD%D0%BE%D1%88%D0%BA%D1%83%D1%80%D1%8B%D0%B9-%D0%BC%D0%B0%D0%BB%D1%8B%D0%B9-%D0%B3%D1%80%D0%BE%D0%BD%D0%BD">Солнечношкурый малый гронн</a> Падает с редкого существа <a href="http://ru.wowhead.com/npc=50985/%D0%BF%D1%83%D0%B4%D0%BE%D0%B2%D1%8B%D0%B9-%D0%BA%D1%83%D0%BB%D0%B0%D0%BA">ПУДОВЫЙ КУЛАК!</a></li>
      <li>Время респауна: примерно 24 - 28 часов.</li>
      <li>Маунт уникальный и редкий, владеют и будут владеть им очень небольшой круг игроков, и Вы можете стать одним из них!</li>
    </ul><br><br>
    <h3 class="main-text">Для получения маунта есть 2 пути:</h3>
    <ul class="ulinfosite_price">
    <li>Караулить маунта самому, что может занять очень много времени. Помимо этого, придеться выиграть конкурентную борьбу у десятков других игроков и убить маунта первым. Это способ труден и требует удачного стечения обстоятельств, что, как известно, просиходит далеко не всегда.</li>
    <li><b>Обратиться в Defyourtime.ru ! Мы сделаем всё за Вас, а Вам останется только наслаждаться от поездок на своём новом маунте!</b></li>
    </ul>
    <br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Maunt-woldDrop-SDD':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mounts/26.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='33' data-title='Сланцевый доисторический дикорог' data-price='2750' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Сланцевый<br> доисторический дикорог</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>2 750</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Сланцевый доисторический дикорог</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: 1 - 7 дней.</li>
    </ul><br><br><br>
    <h3 class="main-text">Описание:</h3>
    <ul class="ulinfosite_price">
      <li>Получение маунта - <a href="http://ru.wowhead.com/item=94229/%D0%BF%D0%BE%D0%B2%D0%BE%D0%B4%D1%8C%D1%8F-%D1%81%D0%BB%D0%B0%D0%BD%D1%86%D0%B5%D0%B2%D0%BE%D0%B3%D0%BE-%D0%B4%D0%BE%D0%B8%D1%81%D1%82%D0%BE%D1%80%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%BE%D0%B3%D0%BE-%D0%B4%D0%B8%D0%BA%D0%BE%D1%80%D0%BE%D0%B3%D0%B0">Поводья сланцевого доисторического дикорога.</a></li>
      <li>Маунт уникальный и редкий, владеют и будут владеть им очень небольшой круг игроков, и Вы можете стать одним из них!</li>
    </ul><br><br>
    <br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Maunt-woldDrop-SEV':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mounts/25.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='32' data-title='Серый ездовой верблюд' data-price='3995' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Серый ездовой верблюд</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>3 995</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = 'Серый ездовой верблюд';
    break;
  case 'Maunt-woldDrop-SSG':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mounts/24.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='31' data-title='Седло сына Галеона' data-price='3995' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Седло сына Галеона</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>3 995</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = 'Седло сына Галеона';
    break;
  case 'Maunt-woldDrop-SD':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mounts/23.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='30' data-title='Светящийся дракон' data-price='3995' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Светящийся дракон</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>3 995</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = 'Светящийся дракон';
    break;
  case 'Maunt-woldDrop-SRC':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mounts/22.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='29' data-title='Сапфировое речное чудище' data-price='3995' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Сапфировое речное чудище</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>3 995</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Сапфировое речное чудище</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: 1 - 7 дней.</li>
      <li>Требования к аккаунту:  Персонаж 100 уровня.</li>
    </ul><br><br><br>
    <h3 class="main-text">Описание:</h3>
    <ul class="ulinfosite_price">
      <li>С <a href="http://ru.wowhead.com/npc=51015/%D1%81%D0%B8%D0%BB%D1%8C%D1%84%D0%B8%D0%B4%D0%B0">Сильфида</a> Вы можете получить <a href="http://ru.wowhead.com/item=116767/%D1%81%D0%B0%D0%BF%D1%84%D0%B8%D1%80%D0%BE%D0%B2%D0%BE%D0%B5-%D1%80%D0%B5%D1%87%D0%BD%D0%BE%D0%B5-%D1%87%D1%83%D0%B4%D0%B8%D1%89%D0%B5">Сапфировое речное чудище</a> c вероятностью в 100%!</li>
      <li>Маунт уникальный и редкий, владеют и будут владеть им очень небольшой круг игроков, и Вы можете стать одним из них!</li>
    </ul><br><br>
    <h3 class="main-text">Для получения маунта есть 2 пути:</h3>
    <ul class="ulinfosite_price">
    <li>Караулить маунта самому, что может занять очень много времени. Помимо этого, придеться выиграть конкурентную борьбу у десятков других игроков и убить маунта первым. Это способ труден и требует удачного стечения обстоятельств, что, как известно, просиходит далеко не всегда.</li>
    <li><b>Обратиться в Defyourtime.ru ! Мы сделаем всё за Вас, а Вам останется только наслаждаться от поездок на своём новом маунте!</b></li>
    </ul>
    <br>
    <p>Сам маунт оригинален, особо выделяется толстые пластины, которые защищают голову и шею питомца, а также часть спины. Низкий силует и хищная морда, большие клыки с пастью и средних размеров хвост делают это животное крайне опасным в дикой природе Дренора и красивым средством передвижения для игроков. Присоединяйтесь!</p>
    <br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Maunt-woldDrop-SK':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mounts/21.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='28' data-title='Самец кровокопыт' data-price='3995' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Самец кровокопыт</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>3 995</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Самец-кровокопыт</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: 1 - 7 дней.</li>
      <li>Требования к аккаунту:  Персонаж 100 уровня.</li>
    </ul><br><br><br>
    <h3 class="main-text">Описание:</h3>
    <ul class="ulinfosite_price">
      <li>Маунт <a href="http://ru.wowhead.com/item=116659/%D1%81%D0%B0%D0%BC%D0%B5%D1%86-%D0%BA%D1%80%D0%BE%D0%B2%D0%BE%D0%BA%D0%BE%D0%BF%D1%8B%D1%82">Самец-кровокопыт падает</a> с редкого существа <a href="http://ru.wowhead.com/npc=50990/%D0%BD%D0%B0%D0%BA%D0%BA-%D0%B3%D1%80%D0%BE%D0%BC%D0%BE%D0%B3%D0%BB%D0%B0%D1%81%D0%BD%D1%8B%D0%B9">Накк Громогласный.</a></li>
      <li>Время респауна: примерно 24 - 28 часов.</li>
      <li>Маунт уникальный и редкий, владеют и будут владеть им очень небольшой круг игроков, и Вы можете стать одним из них!</li>
    </ul><br><br>
    <h3 class="main-text">Для получения маунта есть 2 пути:</h3>
    <ul class="ulinfosite_price">
    <li>Караулить маунта самому, что может занять очень много времени. Помимо этого, придеться выиграть конкурентную борьбу у десятков других игроков и убить маунта первым. Это способ труден и требует удачного стечения обстоятельств, что, как известно, просиходит далеко не всегда.</li>
    <li><b>Обратиться в Defyourtime.ru ! Мы сделаем всё за Вас, а Вам останется только наслаждаться от поездок на своём новом маунте!</b></li>
    </ul>
    <br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Maunt-woldDrop-PL':
   $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mounts/20.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='27' data-title='Пятнистый лугопотам' data-price='3495' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Пятнистый лугопотам</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>3 495</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow ='<h1 class="main-text">Пятнистый лугопотам</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: 1 - 5 дней.</li>
      <li>Требования к аккаунту:  Персонаж 100 уровня.</li>
    </ul><br><br><br>
    <h3 class="main-text">Описание:</h3>
    <ul class="ulinfosite_price">
      <li>Маунт <a href="http://ru.wowhead.com/item=116661/%D0%BF%D1%8F%D1%82%D0%BD%D0%B8%D1%81%D1%82%D1%8B%D0%B9-%D0%BB%D1%83%D0%B3%D0%BE%D0%BF%D0%BE%D1%82%D0%B0%D0%BC">Пятнистый лугопотам</a>  Падает с редкого существа <a href="http://ru.wowhead.com/npc=50981/%D0%BB%D1%83%D0%BA%D1%85%D0%BE%D0%BA">Лук\'хок.</a></li>
      <li>Маунт уникальный и редкий, владеют и будут владеть им очень небольшой круг игроков, и Вы можете стать одним из них!</li>
    </ul><br><br>
    <h3 class="main-text">Для получения маунта есть 2 пути:</h3>
    <ul class="ulinfosite_price">
    <li>Караулить маунта самому, что может занять очень много времени. Помимо этого, придеться выиграть конкурентную борьбу у десятков других игроков и убить маунта первым. Это способ труден и требует удачного стечения обстоятельств, что, как известно, просиходит далеко не всегда.</li>
    <li><b>Обратиться в Defyourtime.ru ! Мы сделаем всё за Вас, а Вам останется только наслаждаться от поездок на своём новом маунте!</b></li>
    </ul>
    <br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Maunt-woldDrop-PP':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mounts/19.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='26' data-title='Поводья посейдуса' data-price='10900' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Поводья посейдуса</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>10 900</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Поводья посейдуса</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: 1 - 5 дней.</li>
    </ul><br><br><br>
    <h3 class="main-text">Описание:</h3>
    <ul class="ulinfosite_price">
      <li>Получение маунта - <a href="http://ru.wowhead.com/item=67151/%D0%BF%D0%BE%D0%B2%D0%BE%D0%B4%D1%8C%D1%8F-%D0%BF%D0%BE%D1%81%D0%B5%D0%B9%D0%B4%D1%83%D1%81%D0%B0#screenshots">Поводья Посейдуса</a></li>
      <li>Помните, что код можно активировать только для одного сервера и одного игрока. Поэтому будьте внимательны при выборе сервера и персонажа, которым вы хотите играть и активировать код. </li>
    </ul><br><br>
    <br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Maunt-woldDrop-OS':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mounts/18.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='25' data-title='Огромный сероклык' data-price='3495' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Огромный сероклык</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>3 495</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Огромный сероклык</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: 1 - 7 дней.</li>
      <li>Требования к аккаунту:  Персонаж 100 уровня.</li>
    </ul><br><br><br>
    <h3 class="main-text">Описание:</h3>
    <ul class="ulinfosite_price">
      <li>Маунт <a href="http://ru.wowhead.com/item=116674/%D0%BE%D0%B3%D1%80%D0%BE%D0%BC%D0%BD%D1%8B%D0%B9-%D1%81%D0%B5%D1%80%D0%BE%D0%BA%D0%BB%D1%8B%D0%BA">Огромный сероклык</a>  падает с редкого существа <a href="http://ru.wowhead.com/npc=50992/%D0%B3%D0%BE%D1%80%D0%BE%D0%BA">Горок.</a></li>
      <li>Время респауна: примерно 8 часов.</li>
      <li>Маунт уникальный и редкий, владеют и будут владеть им очень небольшой круг игроков, и Вы можете стать одним из них!</li>
    </ul><br><br>
    <h3 class="main-text">Для получения маунта есть 2 пути:</h3>
    <ul class="ulinfosite_price">
    <li>Караулить маунта самому, что может занять очень много времени. Помимо этого, придеться выиграть конкурентную борьбу у десятков других игроков и убить маунта первым. Это способ труден и требует удачного стечения обстоятельств, что, как известно, просиходит далеко не всегда.</li>
    <li><b>Обратиться в Defyourtime.ru ! Мы сделаем всё за Вас, а Вам останется только наслаждаться от поездок на своём новом маунте!</b></li>
    </ul>
    <br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Maunt-woldDrop-OSH':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mounts/17.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='24' data-title='Обезумевший скакун хаоса' data-price='2750' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Обезумевший скакун хаоса</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>2 750</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = 'Обезумевший скакун хаоса';
    break;
  case 'Maunt-woldDrop-NDD':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mounts/16.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='23' data-title='Нефритовый доисторический дикорог' data-price='2750' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Нефритовый<br> доисторический дикорог</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>2 750</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Нефритовый доисторический дикорог</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: 1 - 7 дней.</li>
    </ul><br><br><br>
    <h3 class="main-text">Вы получите маунта</h3>
    <ul class="ulinfosite_price">
      <li><Получение маунта - <a href="http://ru.wowhead.com/item=94231/%D0%BF%D0%BE%D0%B2%D0%BE%D0%B4%D1%8C%D1%8F-%D0%BD%D0%B5%D1%84%D1%80%D0%B8%D1%82%D0%BE%D0%B2%D0%BE%D0%B3%D0%BE-%D0%B4%D0%BE%D0%B8%D1%81%D1%82%D0%BE%D1%80%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%BE%D0%B3%D0%BE-%D0%B4%D0%B8%D0%BA%D0%BE%D1%80%D0%BE%D0%B3%D0%B0">Поводья нефритового доисторического дикорога</a></li>
    </ul><br><br>
    <br><br>
    <h3 class="main-text">Свяжитесь с нашим оператором в правом нижнем углу для уточнения всех деталей или специальных условий.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Maunt-woldDrop-NOOZ':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mounts/15.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='22' data-title='Небесно ониксовый облачный змей' data-price='39995' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Небесно ониксовый<br> облачный змей</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>39 995</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Поводья небесного ониксового облачного змея</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: 1 - 50 дней.</li>
    </ul><br><br><br>
    <h3 class="main-text">Вы получите маунта</h3>
    <ul class="ulinfosite_price">
      <li><a hfer="http://ru.wowhead.com/item=87771/%D0%BF%D0%BE%D0%B2%D0%BE%D0%B4%D1%8C%D1%8F-%D0%BD%D0%B5%D0%B1%D0%B5%D1%81%D0%BD%D0%BE%D0%B3%D0%BE-%D0%BE%D0%BD%D0%B8%D0%BA%D1%81%D0%BE%D0%B2%D0%BE%D0%B3%D0%BE-%D0%BE%D0%B1%D0%BB%D0%B0%D1%87%D0%BD%D0%BE%D0%B3%D0%BE-%D0%B7%D0%BC%D0%B5%D1%8F#screenshots">Поводья небесного ониксового облачного змея</a></li>
    </ul><br><br>
    <h3 class="main-text">Схема добычи маунта:</h3>
    <ul class="ulinfosite_price">
      <li>Вы создаете новую учетную запись в Battle.net (детали у оператора).</li>
      <li>Сообщаете нам детали по новой записи.</li>
      <li>Мы фармим маунта в игре, а также мониторим Черный аукцион на всех серверах евро региона, затем выкупаем его по высшей ставке.</li>
      <li>Трансферим персонажа с маунтом в сумке к Вам на основной аккаунт.</li>
      <li>Активируете маунта и прикрепляете его к своей учетной записи.</li>
      <li>Прокатитесь на нём и получайте удовольствие!</li>
    </ul>
    <br><br>
    <h3 class="main-text">Такая схема полностью исключает риск для Вашего основного аккаунта, а вероятность бана равна 0, так как все основные действия происходят на аккаунте дублере. Мы можем достать для Вас как доступных маунтов, так и более недоступных в игре. Без багов, без читов, без последствий и бана - все действия абсолютно легальны и не нарушают правила игры.</h3>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Maunt-woldDrop-MM':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mounts/14.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='21' data-title='Мерцающий манаскат' data-price='2750' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Мерцающий манаскат</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>2 750</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = 'Мерцающий манаскат';
    break;
  case 'Maunt-woldDrop-LH':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mounts/13.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='20' data-title='Ллотиенский хищник' data-price='2750' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Ллотиенский хищник</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>2 750</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = 'Ллотиенский хищник';
    break;
  case 'Maunt-woldDrop-KDJ':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mounts/12.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='19' data-title='Красный древний ящер' data-price='2750' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Красный древний ящер</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>2 750</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = 'Красный древний ящер';
    break;
  case 'Maunt-woldDrop-KDD':
    $catr_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mounts/11.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='18' data-title='Кислотный изрыгатель' data-price='2750' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Кислотный изрыгатель</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>2 750</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Поводья нефритового доисторического дикорога</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: 1 - 7 дней.</li>
    </ul><br><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>получение маунта — <a href="http://ru.wowhead.com/item=94231/%D0%BF%D0%BE%D0%B2%D0%BE%D0%B4%D1%8C%D1%8F-%D0%BD%D0%B5%D1%84%D1%80%D0%B8%D1%82%D0%BE%D0%B2%D0%BE%D0%B3%D0%BE-%D0%B4%D0%BE%D0%B8%D1%81%D1%82%D0%BE%D1%80%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%BE%D0%B3%D0%BE-%D0%B4%D0%B8%D0%BA%D0%BE%D1%80%D0%BE%D0%B3%D0%B0">Поводья нефритового доисторического дикорога</a></li>
      <li></li>
    </ul><br><br>
    <p>Наши бустеры будут фармить босса <a href="http://ru.wowhead.com/npc=126912/%D1%81%D0%BA%D1%80%D0%B8%D0%B8%D0%B3-%D0%BF%D0%BE%D0%B6%D0%B8%D1%80%D0%B0%D1%82%D0%B5%D0%BB%D1%8C">Скрииг Пожиратель</a> до тех пор, пока Вам не выпадет желанный маунт. Шанс выпадения очень маленький - 3%, но мы готовы выбить его Вам в кратчайшие сроки.</p><br><br>
    <div class="fancy"><h3>Скриншоты и видео</h3>
    <p><span style="color: #FF0000">!!ВНИМАНИЕ!!</span> - Свяжитесь с нашим оператором в правом нижнем углу для уточнения деталей,  а также ответов на все Ваши вопросы.</p><br><br>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Maunt-woldDrop-KI':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mounts/10.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='17' data-title='Кислотный изрыгатель' data-price='3495' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Кислотный изрыгатель</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>3 495</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Кислотный изрыгатель</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li><Срок выполнения: 1-2 недели./li>
      <li>Требования к персонажу: 110 уровень.</li>
    </ul><br><br><br>
    <h3 class="main-text">Кислотный изрыгатель включает:</h3>
    <ul class="ulinfosite_price">
      <li>получение маунта — <a href="http://ru.wowhead.com/item=152904/%D0%BA%D0%B8%D1%81%D0%BB%D0%BE%D1%82%D0%BD%D1%8B%D0%B9-%D0%B8%D0%B7%D1%80%D1%8B%D0%B3%D0%B0%D1%82%D0%B5%D0%BB%D1%8C">Кислотный изрыгатель"</a></li>
      <li></li>
    </ul><br><br>
    <p>Наши бустеры будут фармить босса <a href="http://ru.wowhead.com/npc=126912/%D1%81%D0%BA%D1%80%D0%B8%D0%B8%D0%B3-%D0%BF%D0%BE%D0%B6%D0%B8%D1%80%D0%B0%D1%82%D0%B5%D0%BB%D1%8C">Скрииг Пожиратель</a> до тех пор, пока Вам не выпадет желанный маунт. Шанс выпадения очень маленький - 3%, но мы готовы выбить его Вам в кратчайшие сроки.</p><br><br>
    <div class="fancy"><h3>Скриншоты и видео</h3>
    <p class="main-text"><span style="color: #FF0000">!!ВНИМАНИЕ!!</span> - Свяжитесь с нашим оператором в правом нижнем углу для уточнения деталей,  а также ответов на все Ваши вопросы.</p><br><br>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Maunt-woldDrop-ZDJ':
   $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mounts/9.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='16' data-title='Зеленый древний ящер' data-price='3495' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Зеленый древний ящер</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>3 495</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = 'Зеленый древний ящер';
    break;
  case 'Maunt-woldDrop-GK':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mounts/8.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='15' data-title='Желчнозубый костеглот' data-price='3495' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Желчнозубый костеглот</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>3 495</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = 'Желчнозубый костеглот';
    break;
  case 'Maunt-woldDrop-GROZ':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mounts/7.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='14' data-title='Поводья грозового рубинового облачного змея' data-price='3495' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Поводья грозового рубинового облачного змея купить</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>3 495</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = 'Поводья грозового рубинового облачного змея купить';
    break;
  case 'Maunt-woldDrop-GOOZ':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mounts/6.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='13' data-title='Грозовой ониксового облачный змей' data-price='4699' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Грозовой ониксового облачный змей</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>4 699</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = 'Грозовой ониксового облачный змей';
    break;
  case 'Maunt-woldDrop-GKOZ':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mounts/5.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='12' data-title='Воющий в ночи гарн' data-price='3495' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Воющий в ночи гарн</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>3 495</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
    break;
  case 'Maunt-woldDrop-VIG':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mounts/4.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='11' data-title='Поводья грозового кобальтового облачного змея' data-price='39995' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Грозовой кобальтовый<br> облачный змей/h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>39 995</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Грозовой кобальтовый облачный змей</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: 1 - 50 дней.</li>
    </ul><br><br><br>
    <h3 class="main-text">Вы получите:</h3>
    <ul class="ulinfosite_price">
      <li><a href="http://ru.wowhead.com/item=95057/%D0%BF%D0%BE%D0%B2%D0%BE%D0%B4%D1%8C%D1%8F-%D0%B3%D1%80%D0%BE%D0%B7%D0%BE%D0%B2%D0%BE%D0%B3%D0%BE-%D0%BA%D0%BE%D0%B1%D0%B0%D0%BB%D1%8C%D1%82%D0%BE%D0%B2%D0%BE%D0%B3%D0%BE-%D0%BE%D0%B1%D0%BB%D0%B0%D1%87%D0%BD%D0%BE%D0%B3%D0%BE-%D0%B7%D0%BC%D0%B5%D1%8F#screenshots">Поводья грозового кобальтового облачного змея</a></li>
      <li>Время респауна примерно (12 часов).</li>
    </ul><br><br>
    <h3 class="main-text">Схема добычи маунта:</h3>
    <ul class="ulinfosite_price">
      <li>Вы создаете новую учетную запись в Battle.net (детали у оператора).</li>
      <li>Сообщаете нам детали по новой записи.</li>
      <li>Мы фармим маунта в игре, а также мониторим Черный аукцион на всех серверах евро региона, затем выкупаем его по высшей ставке.</li>
      <li>Трансферим персонажа с маунтом в сумке к Вам на основной аккаунт.</li>
      <li>Активируете маунта и прикрепляете его к своей учетной записи.</li>
      <li>Прокатитесь на нём и получайте удовольствие!</li>
    </ul><br><br>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Maunt-woldDrop-BV':
   $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mounts/3.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='10' data-title='Быстрый ветробег' data-price='3495' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Быстрый ветробег</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>3 495</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Быстрый ветробег</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: 1-2 недели.</li>
      <li>Требования к персонажу: 100 уровень.</li>
    </ul><br><br><br>
    <h3 class="main-text">Вы получите:</h3>
    <ul class="ulinfosite_price">
      <li>Маунт <a href="http://ru.wowhead.com/item=116773/%D0%B1%D1%8B%D1%81%D1%82%D1%80%D1%8B%D0%B9-%D0%B2%D0%B5%D1%82%D1%80%D0%BE%D0%B1%D0%B5%D0%B3">Быстрый ветробег</a> падает с редкого существа <a hfer="http://ru.wowhead.com/npc=50883/%D1%82%D0%BE%D1%80%D0%BE%D0%BF%D1%83%D0%BD">Торопун.</a></li>
      <li>Время респауна примерно (12 часов).</li>
    </ul><br><br>
    <h3 class="main-text">Для получения маунта есть 2 пути:</h3>
    <ul class="ulinfosite_price">
      <li>Караулить маунта самому, что может занять очень много времени. Помимо этого, придеться выиграть конкурентную борьбу у десятков других игроков и убить маунта первым. Это способ труден и требует удачного стечения обстоятельств, что, как известно, просиходит далеко не всегда.</li>
      <li>Обратиться в Defyourtime.ru! Мы сделаем всё за Вас, а Вам останется только наслаждаться от поездок на своём новом маунте!</li>
    </ul><br><br>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
  case 'Maunt-woldDrop-BHK':
    $cart_wow = "<div class='backtoprice'>
  <div id='wrapper_tovar'>
    <img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mounts/2.png' alt=''>
      <!-- Бкол товара -->
      <div class='item_box'>
        <div class='price_tovar_main'>
          <input type='checkbox' class='add_item box_input' data-id='9' data-title='Бронированный шипастый кабан' data-price='6999' data-img='gameimg/info.png'>
        </div>
        <div class='price_tovar_main'>
          <h3 class='item_title'>Бронированный<br> шипастый кабан</h3>
        </div>
        <div class='price_tovar_main'>
          <p class='box_cena'><span class='item_price'>6999</span> Рублей</p>
        </div>
      </div>
      <div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
    </div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Бронированный шипастый кабан</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: 1-2 недели.</li>
      <li>Требования к персонажу: 110 уровень.</li>
      <li>Срок выполнения - договорной.</li>
    </ul><br><br><br>
    <h3 class="main-text">Вы получите:</h3>
    <ul class="ulinfosite_price">
      <li><a href="http://ru.wowhead.com/item=116669/%D0%B1%D1%80%D0%BE%D0%BD%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%BD%D1%8B%D0%B9-%D1%88%D0%B8%D0%BF%D0%B0%D1%81%D1%82%D1%8B%D0%B9-%D0%BA%D0%B0%D0%B1%D0%B0%D0%BD#screenshots:id=471978">Бронированный шипастый кабан</a></li>
    </ul><br><br>
    <p class="main-text"><span style="color: #FF0000">!!ВНИМАНИЕ!!</span> - После согласования даты и времени рейда возврат средств не осуществляется<br>
    Свяжитесь с нашим оператором в правом нижнем углу для уточнения деталей,  а также ответов на все Ваши вопросы.</p><br><br>
    <div class="fancy"><h3>Скриншоты и видео</h3>
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
    break;
	case 'Maunt-woldDrop-BR':
		$cart_wow = "<div class='backtoprice'>
	<div id='wrapper_tovar'>
		<img style='border-radius: 10px 10px 0 0' src='gameimg/wow/price/mounts/1.png' alt=''>
  		<!-- Бкол товара -->
  		<div class='item_box'>
  			<div class='price_tovar_main'>
  				<input type='checkbox' class='add_item box_input' data-id='8' data-title='Багровый рабоглот' data-price='6750' data-img='gameimg/info.png'>
  			</div>
  			<div class='price_tovar_main'>
  				<h3 class='item_title'>Багровый рабоглот</h3>
  			</div>
  			<div class='price_tovar_main'>
  				<p class='box_cena'><span class='item_price'>6 750</span> Рублей</p>
  			</div>
  		</div>
  		<div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
  	</div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Багровый рабоглот</h1><br><br>
    <h3 class="main-text">Услуга включает:</h3>
    <ul class="ulinfosite_price">
      <li>Срок выполнения: 1-2 недели.</li>
      <li>Требования к персонажу: 110 уровень.</li>
    </ul><br><br><br>
    <h3 class="main-text">Кислотный изрыгатель включает:</h3>
    <ul class="ulinfosite_price">
      <li>получение маунта — <a style="color: #FFF" href="http://ru.wowhead.com/item=152905/%D0%B1%D0%B0%D0%B3%D1%80%D0%BE%D0%B2%D1%8B%D0%B9-%D1%80%D0%B0%D0%B1%D0%BE%D0%B3%D0%BB%D0%BE%D1%82">Багровый рабоглот"</a></li>
      <li>Наши бустеры будут фармить босса <a style="color: #FFF" href="http://ru.wowhead.com/npc=122958/%D1%8F%D0%B7%D0%B2%D0%BE%D0%B3%D0%BB%D0%BE%D1%82">Язвоглот</a> до тех пор, пока Вам не выпадет желанный маунт. Шанс выпадения очень маленький - 3%, но мы готовы выбить его Вам в кратчайшие сроки.</li>
    </ul><br><br>
    <p class="main-text"><span style="color: #FF0000">!!ВНИМАНИЕ!!</span> - После согласования даты и времени рейда возврат средств не осуществляется<br>
    Свяжитесь с нашим оператором в правом нижнем углу для уточнения деталей,  а также ответов на все Ваши вопросы.</p><br><br>
    <div class="fancy">
      <img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
      <img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
    </div>';
		break;
	case 'gold':
		$cart_wow = '<div class="backtoprice">
	<div id="wrapper_tovar">
  <img style="border-radius: 10px 10px 0 0" src="gameimg/wow/price/goldprice.png" alt="">
		<div class="item_box">
			<div class="calc">
				<div class="price-block">
				<div class="gold">
					<span class="text-option">Я заплачу:</span><br>
					<input class="input-value" type="number" id="input-money" alt="200"><br> <span class="text-option" style="color:#fff"> руб</span>
				</div>
				<div class="money">
					<span class="text-option">Я получу:</span>
					<input type="number" class="input-value" id="input-gold"> <span class="text-option" style="color:#fff"> тыс. золота</span>
				</div>
				</div>
				<div class="addiction">
					<center><span class="text-option">Выберете опцию:</span></center>
					<div class="addiction-block" >
						<input type="checkbox" id="heand-option">
						<span class="text-option">Доставить лично персонажу</span>
					</div>
					<div class="addiction-block">
						<span class="text-option">Доставить через аукцион</span> <span class="text-option" style="color: red">+5% </span><span class="text-option"> к сумме</span>
					</div>
					<div class="total">
						<span class="text-option">Всего:</span>
						<input value="0" type="text" disabled class="total-count" id="total-value">
						<input type="checkbox" class="add_item box_input" data-id="7" data-title="Золото" data-price="" data-img="gameimg/info.png"><span class="text-option">В корзину</span></button>
					</div>
				</div>
			</div>
			<script src="calc.js"></script>
		</div>
    <br>
		<div class="label-place"></div><!-- Элемент, где будет расположен ярлык корзины -->
    <br>
	</div>
</div>';
		$info_wow = '<h1 class="main-text">Калькулятор золота World of Warcraft</h1><br><br>
		<h3 class="main-text">Услуга включает:</h3>
		<ul class="ulinfosite_price">
			<li>Срок доставки: от 5 минут до 48 часов.</li>
			<li>Среднее время доставки в рабочее время - 10 минут.  Работаем с 10 00 до 04 00 по Москве.</li>
			<li>Достижение <a href="http://ru.wowhead.com/achievement=12111">На кромке лезвия</a> </li>
		</ul><br><br><br>
		<h3 class="main-text">Способы доставки золота:</h3>
		<ul class="ulinfosite_price">
			<li>Передача в руки в центре одной из столиц. Оргриммар для Орды и Штормград для Альянса. Золото передают Вам в руки, в обмен кладёте любой хлам для маскировки сделки под торговую операцию, что сделает её невидимой для ГМ.</li>
			<li>Игровая почта. Мы отсылаем золото почтой на имя Вашего персонажа. Удобно в случаях, если Вы покупаете золото, без возможности сразу же его получить. А также в ночное время суток.</li>
			<li> Доставка через аукцион: Вы выставляете лоты на аукционе, а мы их выкупаем. Детали уточняйте у оператора. Это наиболее безопасный способ доставки, но требующий дополнительных усилий.</li>
			<li>Иду сам - Вы можете поучаствовать в рейде лично. Передача аккаунта не требуется. Стоимость выше из-за возрастающих рисков для рейда.</li>
		</ul><br><br>
		<p class="main-text"><span style="color: #FF0000">Порядок сделки:</span></p>
		<ul class= "ulinfosite_price">
		<li>Купите золото, указав ник, сервер и фракцию персонажа (указываются при оформлении заказа)</li>
		<li>Узнайте номер заказа, проверив почту. Номер шестизначный, к примеру 123456.</li>
		<li>Написать в чат оператору (справа внизу) номер заказа, для ускорения процесса сделки. Текст свободный, к примеру "Заказ 123456, когда можно получить"?, "Оплатил заказ 123456, жду в шторме".</li>
		</ul>
		<br><br>
		<p>Возможна доставка на низкоуровневых персонажей, просим это указывать при оформлении заказа в комментариях, так как придется к персонажу добираться.
Предусмотрен  возврат средств, если Вы передумали, или в случаях не получения денег в полном объеме</p>';
		break;
	case 'antorRaid':
		$cart_wow = "<div class='backtoprice'>
	<div id='wrapper_tovar'>
		<img style='border-radius: 10px 10px 0 0' src='gameimg/wow/aprice.png' alt=''>
  		<!-- Бкол товара -->
  		<div class='item_box'>
  			<div class='price_tovar_main'>
  				<input type='checkbox' class='add_item box_input' data-id='1' data-title='Персональный лут' data-price='14000' data-img='gameimg/info.png'>
  			</div>
  			<div class='price_tovar_main'>
  				<h3 class='item_title'>Персональный лут</h3>
  			</div>
  			<div class='price_tovar_main'>
  				<p class='box_cena'><span class='item_price'>14 000</span> Рублей</p>
  			</div>
  		</div>
 		  <!-- Бкол товара -->
 		<div class='item_box'>
 		 	<div class='price_tovar'>
 		 		<input type='checkbox' class='add_item box_input' id='unhide' data-id='2' data-title='Мастрер лут' data-price='11000' data-img='gameimg/info.png'>
 		 	</div>
 		 	<div class='price_tovar'>
 		 		<h3 class='item_title'>Мастер лут</h3>
 		 	</div>
 		 	<div class='price_tovar'>
 		 		<p class='box_cena'><span class='item_price'>11 000</span> Рублей</p>
 		 	</div>		  	
  	</div>
  		<!-- Бкол товара -->
  		<div class='item_box'>
  			<div class='price_tovar'>
 		 		<input type='checkbox' class='add_item box_input' data-id='3' data-title='Иду сам' data-price='10000' data-img='gameimg/info.png'>
 		 	</div>
 		 	<div class='price_tovar'>
 		 		<h3 class='item_title'>Иду сам</h3>
 		 	</div>
 		 	<div class='price_tovar'>
 		 		<p class='box_cena'><span class='item_price'>10 000</span> Рублей</p>
 		 	</div>
  		</div>
  		<div class='item_box'>
      <div class='price_tovar'>
        <input type='checkbox' class='add_item box_input' id='unhide' data-id='2' data-title='Оф сет приорити' data-price='15000' data-img='gameimg/info.png'>
      </div>
      <div class='price_tovar'>
        <h3 class='item_title'>Оф сет приорити</h3>
      </div>
      <div class='price_tovar'>
        <p class='box_cena'><span class='item_price'>15 000</span> Рублей</p>
      </div>
  		</div>
  		 <!-- Бкол товара -->
  		<div class='item_box'>
  			<div class='price_tovar'>
  				<input type='checkbox' class='add_item box_input' data-id='4' data-title='Гарантирована тринька' data-price='4000' data-img='gameimg/info.png'>
  			</div>
  			<div class='price_tovar'>
  				 <h3 class='item_title'>Гарантирована тринька<br>(при мастер луте)</h3>
  			</div>
  			<div class='price_tovar'>
  				<p class='box_cena'><span class='item_price'>4 000</span> Рублей</p>
  			</div>
  		</div>
      <br>
      <br>
  		<div class='label-place'></div><!-- Элемент, где будет расположен ярлык корзины -->
  	</div> 
  </div><!-- Конец корзины -->";
  $info_wow = '<h1 class="main-text">Ульдир</h1><br><br>
		<h3 class="main-text">Услуга включает:</h3><br>
		<ul class="ulinfosite_price">
			<li>Убийство 11 боссов  на эпохальном уровне сложности с  мастер лутом лута гарантируем минимум 9 вещей.</li>
			<li>Так же вы можете выбрать опции личного присутствия. </li>
			<li>Достижение <a style="color: #000" href="http://ru.wowhead.com/achievement=12111">На кромке лезвия</a> </li>
		</ul><br><br><br>
		<h3 class="main-text">Описание опций:</h3><br>
		<ul class="ulinfosite_price">
			<li>Приоритет на реликвии для артефакта - При стандартном мастерлуте не гарантируем получение<br> реликвий для артефакта, они разыгрываются между Вашим персонажем и еще 1-2 покупателями; но за небольшую доплату все реликвии достанутся Вам;</li>
			<li>Приоритет на бижутерию и плащ - При стандартном мастерлуте не гарантируем получение колец, ожерелья и плаща, они разыгрываются между Вами персонажем и еще 1-2 покупателями; но за небольшую доплату вся бижутерия достанется Вам;</li>
			<li>Приоритет на сетовые токены - При стандартном мастерлуте не гарантируем получение сетовых токенов, они разыгрываются между Вами персонажем и еще 1-2 покупателями; но за небольшую доплату все сетовые токены достанутся Вам;</li>
			<li>Иду сам - Вы можете поучаствовать в рейде лично. Передача аккаунта не требуется. Стоимость выше из-за возрастающих рисков для рейда.</li>
		</ul><br><br>
		<p class="main-text"><span style="color: #FF0000">!!ВНИМАНИЕ!!</span> - После согласования даты и времени рейда возврат средств не осуществляется<br>
		Свяжитесь с нашим оператором в правом нижнем углу для уточнения деталей,  а также ответов на все Ваши вопросы.</p><br><br>
		<div class="fancy"><h3>Скриншоты и видео</h3>
			<img width="120" height="90" src="img/wow.png" class="image-new" alt=""/>
			<img width="120" height="90" src="img/wot.png" class="image-new" alt=""/>
			<img width="120" height="90" src="img/cs.png" class="image-new" alt=""/>
			<img width="120" height="90" src="img/d3.png" class="image-new" alt=""/>
			<img width="120" height="90" src="img/dota2.png" class="image-new" alt=""/>
		</div>';
		break;	
	default:
		# code...
		break;
}
?>
<!Doctype>
<html>
<head>
	<meta charset="utf-8">
	<title>Defyourtime</title>
	<link href="main.css" rel="stylesheet" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="ecomment.css" type="text/css" media="all">
  <script type="text/javascript" src="script.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/slidergame.css" media="all">
	<link rel="stylesheet" type="text/css" href="cart/cartcss.css">
	<link rel="stylesheet" type="text/css" href="css/tooltip-line.css">
  <!-- Бегунок -->
  <link href="jquery-ui.min.css" rel="stylesheet">
  <link href="begunok.css" rel="stylesheet">
	<!--<link href="slider.css" rel="stylesheet"  type="text/css">-->
  <link rel="stylesheet" type="text/css" href="css/template.css">
	<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="mainjs.js"></script>
  <script type="text/javascript" src="ecomment.js"></script>
	<!-- wowhead -->
	<script>var whTooltips = {colorLinks: false, iconizeLinks: true, renameLinks: true};</script>
	<script src="//wow.zamimg.com/widgets/power.js"></script>
   	<!-- VK -->
	<script type="text/javascript" src="//vk.com/js/api/openapi.js?151"></script>
	<script type="text/javascript">
	  VK.init({apiId: 6321241, onlyWidgets: true});
	</script>
	<!-- Корзина -->
	<link href="css/jqcart.css" rel="stylesheet" type="text/css">
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/developer/jqcart.js"></script>
	<script>
		jQuery(function(){
			'use strict';	
			// инициализация плагина
			jQuery.jqCart({
			buttons: '.add_item',
			handler: './php/handler.php',
			cartLabel: '.label-place',
					visibleLabel: true,
					openByAdding: false,
					currency: '&#8381;'
			});	
			// Пример с дополнительными методами
			jQuery('#open').click(function(){
				jQuery.jqCart('openCart'); // открыть корзину
			});
			jQuery('#clear').click(function(){
				jQuery.jqCart('clearCart'); // очистить корзину
			});	
		});
	</script>
  <script type="text/javascript" src="js/popup_img.js"></script>
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
<div class="game-opt">
  <div class="game3"><a class="menu_style_gold" href="price.php?price_wow=gold">Золото в WoW</a></div>
  <div class="game3"><a class="menu_style_pach" href="gameselect.php?game_wow=pach">Патч</a></div>
  <div class="game3"><a class="menu_style_raid" href="gameselect.php?game_wow=raids">PVE услуги</a></div>
  <div class="game3"><a class="menu_style_raid" href="gameselect.php?game_wow=dungeons">PVP услуги</a></div>
  <div class="game3"><a class="menu_style_raid" href="gameselect.php?game_wow=leveling">Прокачка</a></div>
  <div class="game3"><a class="menu_style_uslugi" href="gameselect.php?game_wow=achivement">Достижения</a></div>
  <div class="game3"><a class="menu_style_prochie" href="">Ресурсы</a></div>
  <div class="game3"><a class="menu_style_prochie" href="gameselect.php?game_wow=maunts">Маунты</a></div>
  <div class="game3"><a class="menu_style_prochie" href="">Питомцы</a></div>
  <div class="game3"><a class="menu_style_raid" href="">Прочее</a></div>
</div>
<div class="priceblock">
	<div class="infotovar">
	<?php echo $info_wow; ?>	
	</div>
	<div class="spisok">
	<?php echo $cart_wow; ?>
	</div>	
</div>
<div class="vibor">
<div class='blockslider'>
  <center><p style='font-size: 36px; color: #fff;'>С этим покупают</p></center>
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
  </div>
  <script src='slidergame.js'></script>
</div>
</div>
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