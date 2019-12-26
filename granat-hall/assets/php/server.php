<?php
	


    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $udate = $_POST["udate"];
    $persons = $_POST["persons"];
    $start = $_POST["start"];
    $end = $_POST["end"];
	
    if($name=="" or $phone=="" ){ 
        echo "Заполните все необходимые поля";
    }

    else{
        
        $to = "contact@promind.studio"; 
        $subject = "Гранат Холл"; 
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/plain; charset=utf-8\r\n";
        $headers .= "From: <info@granatoviy-sad.ru>\r\n";

        
        $message .= "Заявка от Гранат Холл \r\n \r\n \r\n";
        $message .= "Имя клиента: ".$name."\r\n";
        $message .= "Телефон: ".$phone."\r\n";
        $message .= "Дата события: ".$udate."\r\n";
        $message .= "Начало : ".$start."\r\n";
        $message .= "Окончание: ".$end."\r\n";
        $message .= "Кол-во персон: ".$persons."\r\n";

      

        $send = mail($to, $subject, $message, $headers);

       
        if ($send == "true")
        {
            echo "Ваше сообщение отправлено. Мы ответим вам в ближайшее время.\r\n";
        }
       
        else
        {
            echo "Не удалось отправить, попробуйте снова!";
        }
    }

?>