<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    // Configurar o destinatário do email
    $destinatario = "rodrigojcastro.91@gmail.com";

    // Configurar o assunto do email
    $assunto = "Nova mensagem do formulário de contato";

    // Montar o corpo do email
    $corpo_email = "Nome: $nome\n";
    $corpo_email .= "Email: $email\n";
    $corpo_email .= "Mensagem: $mensagem\n";

    // Enviar o email
    mail($destinatario, $assunto, $corpo_email);

    // Redirecionar de volta à página de contato ou exibir uma mensagem de sucesso
    header("Location: /pagina-de-contato?enviado=sim");
} else {
    // Redirecionar para a página de contato se o formulário não foi enviado
    header("Location: /pagina-de-contato");
}
?>