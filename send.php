<?php
// несколько получателей
$to  = 'smmsiera@gmail.com' . ', ';  // обратите внимание на запятую
$to .= 'lunatik0734@gmail.com' . ', ';

// тема письма
$subject = 'Запрос на связь с покуппателем!';

// текст письма меняется он!!
$message = $_POST['name'] . '<br />' . $_POST['tel'] . '<br />' . $_POST['email'];

// Для отправки HTML-письма должен быть установлен заголовок Content-type
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
// Дополнительные заголовки
$headers .= 'To: УСиЭС <support@usies.ru>' . "\r\n"; // Свое имя и email
$headers .= 'From: '  . $_POST['name'] . '<' . $_POST['tel'] . '>' . "\r\n";


// Отправляем
mail($to, $subject, $message, $headers);
if(mail($to, $subject, $message, $headers)){
   echo "сообщение успешно отправлено";
} else{
    echo "сообщение не отправлено";
}
?>