<?php

if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['mensagem'])) {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    $para = "seu_email@aqui.com"; // Substitua pelo seu endereço de e-mail
    $assunto = "Nova mensagem do formulário de contato";

    $corpo_email = "Nome: " . $nome . "\r\n";
    $corpo_email .= "E-mail: " . $email . "\r\n";
    $corpo_email .= "Mensagem: " . $mensagem . "\r\n";

    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";

    if(mail($para, $assunto, $corpo_email, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar a mensagem.";
    }

} else {
    echo "Por favor, preencha todos os campos do formulário.";
}

?>