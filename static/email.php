<?php

    if(isset($_POST['email']) && !empty($_POST['email'])){

    $nome = addcslashes($_POST['name'])
    $email = addcslashes($_POST['email'])
    $telefone = addcslashes($_POST['telefone'])
    $mensagem = addcslashes($_POST['email'])

    $to = "contato@portfolio.com.br";
    $subject = "Contato - Portfólio";
    $body = "Nome: ".$nome. "\r \n"
            "Email: ".$email. "\r \n"
            "Telefone: ".$telefone. "\r \n"
            "Mensagem: ".$mensagem;

    $header = "From: caioramos.ccf@gmail.com"."\r \n"
                ."Replay-to:".$email."\r \n"
                ."X-Mailer:PHP/".phpversion();

               if(mail($to, $subject, $body, $header)){
                   echo("Email eviado com sucesso!");
               }else{
                   echo("Erro ao enviar email. Verifique se todas informações estão corretas.")
               }


    }

?>