<?php  

if (isset($_POST['enviar'])) {
    if (!empty($_POST['name']) && !empty($_POST['asunto']) && !empty($_POST['msg']) && !empty($_POST['email'])) {
        $name = $_POST['name'];
        $asunto = $_POST['asunto'];
        $msg = $_POST['msg'];
        $email = $_POST['email'];
        $header = "From: sistemas@labatc.com" . "\r\n";
        $header.= "Reply-To: sistemas@labatc.com" . "\r\n";
        $header.= "X-Mailer: PHP/".phpversion();
        $mail = mail($email,$asunto,$msg,$header);
        if ($mail) {
            echo "<script>alert('Mail enviado con exito')</script>";
            echo "<script>setTimeout(\"location.href='index.html'\",1000)</script>";
        }
        else {
            echo "<script>alert('algo salio mal')</script>";
            echo "<script>setTimeout(\"location.href='index.html'\",1000)</script>";
        }
    }
}

