<?php
parse_str($_POST['orderlist'], $orderlist);
parse_str($_POST['userdata'], $userdata);
/*
$orderlist - массив со списком заказа
$userdata - данные заказчика
*/

// При желании, можно посмотреть полученные данные, записав их в файл:
file_put_contents('cart_data_log.txt', var_export($orderlist, 1) . "\r\n");
file_put_contents('cart_data_log.txt', var_export($userdata, 1), FILE_APPEND);


// Проверить, авторизован ли пользователь
session_start();
if (isset($_SESSION['is_auth'])) {
	$user_login = $_SESSION['login'];
	require_once '../config.php';
	// Добавить новый заказ в базу данных
	$mysqli = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_db);
	if ($mysqli->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	foreach($orderlist as $id => $item_data) {
		$sql = "INSERT INTO orders (nickname, price, title, product_id, 
		count_, user_name_, user_phone, user_mail, user_comment) VALUES 
		('$user_login', " . $item_data['price'] . ", '" . $item_data['title'] . "',
		" . $item_data['id'] . ", " . $item_data['count'] . ", '" . $userdata['user_name'] . "',
		'" . $userdata['user_phone'] . "', '" . $userdata['user_mail'] . "',
		'" . $userdata['user_comment'] . "')";
		$mysqli->query($sql);
	}
	$mysqli->close();
}

// Заголовок письма
$subject = 'Заказ от '.date('d.m.Y').'г.';
// ваш Email
$admin_mail = 'defyourtime@gmail.com';
// Email заказчика (как fallback - ваш же Email)
$to = !empty($userdata['user_mail']) ? $userdata['user_mail'] : $admin_mail;

// Формируем таблицу с заказанными товарами
$tbl = '<table style="width: 100%; border-collapse: collapse;">
	<tr>
		<th style="width: 1%; border: 1px solid #333333; padding: 5px;">ID</th>
		<th style="width: 1%; border: 1px solid #333333; padding: 5px;"></th>
		<th style="border: 1px solid #333333; padding: 5px;">Наименование</th>
		<th style="border: 1px solid #333333; padding: 5px;">Цена</th>
	</tr>';
$total_sum = 0;
foreach($orderlist as $id => $item_data) {
	$total_sum += (float)$item_data['count'] * (float)$item_data['price'];
	$tbl .= '
	<tr>
		<td style="border: 1px solid #333333; padding: 5px;">'.$item_data['id'].'</td>
		<td style="border: 1px solid #333333;"><img src="'.$item_data['img'].'" alt="" style="max-width: 64px; max-height: 64px;"></td>
		<td style="border: 1px solid #333333; padding: 5px;">'.$item_data['title'].'</td>
		<td style="border: 1px solid #333333; padding: 5px;">'.$item_data['price'].' рублей</td>
	</tr>';
}
$tbl .= '<tr>
		<td  style="border: 1px solid #333333; padding: 5px;" colspan="3">Итого:</td>
		<td style="border: 1px solid #333333; padding: 5px;"><b>'.$total_sum.'</b> рублей</td>
	</tr>
</table>';
// Тело письма
$body = '
<html>
<head>
  <title>'.$subject.'</title>
</head>
<body>
  <p>Информация о заказчике:</p>
	<ul>
		<li><b>Battle Tag</b> '.$userdata['user_name'].'</li>
		<li><b>Armory link</b> '.$userdata['user_phone'].'</li>
		<li><b>Email:</b> '.$userdata['user_mail'].'</li>
		<li><b>Комментарий:</b> '.$userdata['user_comment'].'</li>
	</ul>
	<p>Информация о заказае:</p>
  '.$tbl.'
	<p>Письмо создано автоматически. Пожалуйста, не отвечайте на него, т.к. все ушли на пляж!</p>
</body>
</html>';

// Заголовки
$headers   = []; // или $headers = array() для версии ниже 5.4
$headers[] = 'MIME-Version: 1.0'; // Обязательный заголовок
$headers[] = 'Content-type: text/html; charset=utf-8'; // Обязательный заголовок. Кодировку изменить при необходимости
$headers[] = 'From: Defyourtime.ru'; // От кого
$headers[] = 'Bcc: Admin <'.$admin_mail.'>'; // скрытая копия админу сайта, т.е. вам
$headers[] = 'X-Mailer: PHP/'.phpversion();
// Отправка
$send_ok = mail($to, $subject, $body, implode("\r\n", $headers));

// Ответ на запрос
$response = [
	'errors' => !$send_ok,
	'message' => $send_ok ? '<p style="color: #ffc837;">Заказ принят в обработку!</p>' : 'Хьюстон! У нас проблемы!'
];
// ! Для версий PHP < 5.4 использовать традиционный синтаксис инициализации массивов:
/*
$response = array (
	'errors' => !$send_ok,
	'message' => $send_ok ? 'Заказ принят в обработку!' : 'Хьюстон! У нас проблемы!'
);
*/
exit( json_encode($response) );