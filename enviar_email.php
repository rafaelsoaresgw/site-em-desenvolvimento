<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupere os dados do formulário
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $celular = htmlspecialchars($_POST['celular']);
    $mensagem = htmlspecialchars($_POST['mensagem']);

    // Configurações para o e-mail
    $destinatario = "rafaelsoaresgw@gmail.com"; // Altere para o seu endereço de e-mail
    $assunto = "Mensagem do formulário de contato";

    // Monta o corpo do e-mail
    $corpo_email = "Nome: $nome\n";
    $corpo_email .= "E-mail: $email\n";
    $corpo_email .= "Celular: $celular\n\n";
    $corpo_email .= "Mensagem:\n$mensagem";

    // Cabeçalhos adicionais
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n";

    // Envia o e-mail
    if (mail($destinatario, $assunto, $corpo_email, $headers)) {
        echo "<script>alert('Mensagem enviada com sucesso!');</script>";
    } else {
        echo "<script>alert('Erro ao enviar mensagem.');</script>";
    }
}
?>
