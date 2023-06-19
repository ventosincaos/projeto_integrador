<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];

    
    if ($email === "carlota05@gmail.com") {
        // Gerar uma nova senha aleatória
        $novaSenha = substr(md5(time()), 0, 8);

        

        // Enviar o email com a nova senha
        $assunto = "Recuperar a senha";
        $mensagem = "a  nova senha é: " . $novaSenha;
        $headers = "From: seunome@Sysffee.com\r\n";
        $headers .= "Reply-To: seunome@Sysffee.com\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        if (mail($email, $assunto, $mensagem, $headers)) {
            echo "Email enviado com sucesso. Verifique sua caixa de entrada.";
        } else {
            echo "Ocorreu um erro ao enviar o email.";
        }
    } else {
        echo "Endereço de email não encontrado.";
    }
}
?>