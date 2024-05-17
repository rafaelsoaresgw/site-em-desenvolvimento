<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receba os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $mensagem = $_POST['mensagem'];

    // Configurações de e-mail
    $para = 'rafaelsoaresgw@gmail.com'; // Insira seu endereço de e-mail aqui
    $assunto = 'Mensagem do formulário de contato';

    // Corpo do e-mail
    $mensagem_corpo = "Nome: $nome\n";
    $mensagem_corpo .= "Email: $email\n";
    $mensagem_corpo .= "Celular: $celular\n";
    $mensagem_corpo .= "Mensagem:\n$mensagem\n";

    // Enviar e-mail
    if (mail($para, $assunto, $mensagem_corpo)) {
        // E-mail enviado com sucesso
        header('Location: obrigado.html');
        exit; // Certifique-se de sair após o redirecionamento
    } else {
        // Falha ao enviar o e-mail
        echo "Ocorreu um erro ao enviar a mensagem. Por favor, tente novamente mais tarde.";
    }
} else {
    // Se o método de requisição não for POST, redirecionar para a página do formulário
    header('Location: formulario.html');
    exit; // Certifique-se de sair após o redirecionamento
}
?>
