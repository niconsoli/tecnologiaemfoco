<?php  

    $nome = addcslashes($_POST['name']);
    $email = addcslashes($_POST['email']);
    $mensagem = addcslashes($_POST['messagem']);

    $to = "sthevaz@gmail.com";
    $assunto = "Contato - Conselho de Biomedicina ";
    $body = "Nome: ".$nome. "\n"."Email: ".email. "\n"."Mensagem: ".mesagem. "\n";

    $header = "From: user@gmail.com"."\r\n"."Reply-To: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($to, $assunto, $body, $header)){
        echo ("Email enviado com sucesso :D");
    } else{
        echo ("O Email não pode ser enviado ;(");
    }


?>