<?php
$host 	 	= "localhost";
$user 	 	= "handmadf_hand";
$pass 	 	= "gb8&lBxk";
$db_name 	= "handmadf_hand";
$connection = mysqli_connect($host, $user, $pass, $db_name);
//подключение к бд
parse_str($_POST['orderlist'], $orderlist);
parse_str($_POST['userdata'], $userdata);
/*
$orderlist - массив со списком заказа
$userdata - данные заказчика
*/
// запись данных в файл

file_put_contents('cart_data_log.php', var_export($orderlist, 1) . "\r\n");
file_put_contents('cart_data_log.php', var_export($userdata, 1), FILE_APPEND);



// Заголовок письма
$subject = 'Заказ от '.date('d.m.Y').'г.';
// ваш Email
$admin_mail = 'handmadetati@mail.ru';
// Email заказчика
$to = !empty($userdata['user_mail']) ? $userdata['user_mail'] : $admin_mail;

// Формируем таблицу с заказанными товарами
$tbl = '<table style="width: 100%; border-collapse: collapse;">
<tr>
<th style="width: 1%; border: 1px solid #333333; padding: 5px;">ID</th>
<th style="width: 1%; border: 1px solid #333333; padding: 5px;"></th>
	<th style="width: 1%; border: 1px solid #333333; padding: 5px;"></th>
	<th style="border: 1px solid #333333; padding: 5px;">Наименование</th>
		<th style="border: 1px solid #333333; padding: 5px;">Цена</th>
	<th style="border: 1px solid #333333; padding: 5px;">Кол-во</th>
<tr>';
$total_sum = 0;
foreach($orderlist as $id => $item_data) {
	$total_sum += (float)$item_data['count'] * (float)$item_data['price'];
	$tbl .= '<tr>
	<td style="border: 1px solid #333333; padding: 5px;">'.$item_data['id'].'</td>	<td style="border: 1px solid #333333;"><img src="'.$item_data['img'].'" alt="" style="max-width: 64px; max-height: 64px;"></td>
	<td style="border: 1px solid #333333;"><img src="http://handmadf.beget.tech/'.$item_data['img'].'" alt="" style="max-width: 64px; max-height: 64px;"></td>
	<td style="border: 1px solid #333333; padding: 5px;">'.$item_data['title'].'</td>
	<td style="border: 1px solid #333333; padding: 5px;">'.$item_data['price'].'</td>
	<td style="border: 1px solid #333333; padding: 5px;">'.$item_data['count'].'</td>
	</tr>';
}
$tbl .= '<tr>
<td  style="border: 1px solid #333333; padding: 5px;" colspan="3">	Итого: </td>
<td style="border: 1px solid #333333; padding: 5px;"><b>	'.$total_sum.'</b></td>
<td style="border: 1px solid #333333;">&nbsp;</td>
</tr>
</table>';
// Тело письма
$body = '

 <title>'.$subject.'</title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
 </head> 
 <body>

 <p>Информация о заказчике:</p>	
 <ul>
 <li><b>	Ф.И.О.: '.$userdata['user_name'].' </li>
 <li><b>	Тел.:'.$userdata['user_phone'].'</li>
 <li><b>	Email: '.$userdata['user_mail'].'</li>
 <li><b>	Адрес: '.$userdata['user_address'].'</li>
 <li><b>	Комментарий: '.$userdata['user_comment'].'</li>
</ul>
<p>Информация о заказае:</p>
  '.$tbl.'
	
</body>
</html>';


// Заголовки
$headers   = []; // или $headers = array() для версии ниже 5.4
$headers[] = 'MIME-Version: 1.0 '; // Обязательный заголовок
$headers[] = 'Content-type: text/html; charset=utf-8 '; // Обязательный заголовок. Кодировку изменить при необходимости
$headers[] = 'From: HandMade <handmadetati@mail.ru>'; // От кого
$headers[] = 'Bcc: Admin <'.$admin_mail.'>'; // скрытая копия админу сайта, т.е. вам
$headers[] = 'X-Mailer: PHP/'.phpversion();
// Отправка
$send_ok = mail($to, $subject, $body, implode("\r\n", $headers));
// ! Для версий PHP < 5.4 использовать традиционный синтаксис инициализации массивов:
$response = [
	'errors' => !$send_ok,
	'message' => $send_ok ? 'Заказ принят в обработку!' : 'Хьюстон! У нас проблемы!'
];
mysqli_query($connection, "INSERT INTO cart2 (orderlist,info,userdata) value('$tbl','$body','$subject')");
exit( json_encode($response) );
