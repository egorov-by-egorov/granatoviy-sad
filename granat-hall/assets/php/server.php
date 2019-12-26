<?php

function clean_form_data( $value = "" ) {
    $value = trim( $value );
    $value = stripslashes( $value );
    $value = strip_tags( $value );
    $value = htmlspecialchars( $value );

    return $value;
};
$order_data_event = clean_form_data($_POST['order_data_event']);
$order_count_persons = clean_form_data($_POST['order_count_persons']);
$order_start_event = clean_form_data($_POST['order_start_event']);
$order_end_event = clean_form_data($_POST['order_end_event']);
$order_name = clean_form_data($_POST['order_name']);
$order_phone = clean_form_data($_POST['order_phone']);


echo $mail_message = '
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Заказ Гранат-холл</title>
    </head>
    <body>
      <h2>Заявка с сайта</h2>
      <ul style="list-style: none">
        <li>Имя: ' . $order_name . '</li>
        <li>Телефон: ' . $order_phone . '</li>
        <li>Дата события: ' . $order_data_event . '</li>
        <li>Время начала: ' . $order_start_event . '</li>
        <li>Время завершения: ' . $order_end_event . '</li>
        <li>Кол-во человек: ' . $order_count_persons . '</li>
      </ul>
    </body>
    </html>';

$headers = "From: Granat-Hall <'you@example.com'>\r\n" .
	"MIME-Version: 1.0" . "\r\n" .
	"Content-type: text/html; charset=UTF-8" . "\r\n";

$mail = mail('info@granatoviy-sad.ru', 'Заявка', $mail_message, $headers);

$data = [];
if ($mail) {
	$data['status'] = "OK";
	$data['message'] = "Заявка успешно отправлена";
} else {
	$data['status'] = "NO";
	$data['message'] = "На сервере произошла ошибка";
}
echo json_encode($data);
