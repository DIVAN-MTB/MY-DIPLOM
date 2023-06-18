<?php
    $email = $_POST['email'];
    $name = $_POST['name'];
    $message = $_POST['question'];
    $product = $_POST['tovar'];
    $phone = $_POST['phone'];


    $subject = "=?utf-8?B?".base64_encode("Обратная связь")."?=";
    $headers ="From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";
    $to = "EMAIL";

    $sendMessage = "Имя: " . $name;
    $sendMessage .= "<br>Почта: " . $email;
    $sendMessage .= "<br>Номер телефона: " . $phone;
    $sendMessage .= "<br>Товар: " . $product;
    $sendMessage .= "<br>Вопрос: " . $message;

    $success = mail($to, $subject, $sendMessage, $headers);

    header("Location: ../index.html");
    
?>