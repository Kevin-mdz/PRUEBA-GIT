<?php

if(isset($_POST['enviar'])){
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['message'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        $header = "From: kevinmdz0023@gmail.com";
        $header. = "X-Mailer: php/". phpversion();
        $mail = mail($name,$email,$phone,$message);
        if ($mail){
            echo "<h4>Email exiado exitosamente</h4>";
        }
    }
}