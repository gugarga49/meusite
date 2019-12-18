<?php
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$mensagem = $_POST['mensagem'];
		


        require 'vendor/autoload.php';

        $from = new SendGrid\Email(null, "gugarga49@gmail.com");
        $subject = "Mensagem de contato";
        $to = new SendGrid\Email(null, "gugarga49@gmail.com");
        $content = new SendGrid\Content("text/html", "Olá Cesar, <br><br>Nova mensagem de contato<br><br>Nome: $nome<br>Email: $email <br>Mensagem: $mensagem");
        $mail = new SendGrid\Mail($from, $subject, $to, $content);
        
        //Necessário inserir a chave
        $apiKey = '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';
        $sg = new \SendGrid($apiKey);

        $response = $sg->client->mail()->send()->post($mail);
        echo "Mensagem enviada com sucesso";
	 ?>

