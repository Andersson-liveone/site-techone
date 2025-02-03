<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/autoload.php';

    // envia_email_padrao();
    envia_email_padrao();
    function envia_email_padrao() {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $ramo = $_POST['ramo'];
        $telefone = $_POST['telefone'];
        $mensagem = $_POST['mensagem'];
        $destinatario = "richard.souza@enelo.com.br";
        $titulo = "Novo pedido de contato";

        $mail = new PHPMailer(true);

        // HTML do e-mail com interpolação de variáveis
        $htmlEmail = '<div style="max-width: 100%; margin: 0 auto; background-color: #ffffff; overflow: hidden; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); font-family: Arial, sans-serif; background-color: #f4f4f4;">
                            <div style="background-image: url(\'https://softone.techonebrasil.com.br/img/img_fundo_cabecalho_email.png\');background-repeat: round;padding: 51px;text-align:center;color:#ffffff;min-height: 90px;">
                            </div>
                            <div style="padding: 30px; text-align: center;">
                                ' . $nome . ' deseja entrar em contato com a Tech One. Dados: ' . $ramo . ', ' . $telefone . ', ' . $mensagem . ', ' . $email  . '
                            </div>
                            <div style="background-color: #5e065a; padding: 10px 20px; color: #ffffff; text-align: center;">
                                <p style="margin: 0;">Nos siga!</p>
                                <a href="https://www.instagram.com/tech.one.br/" style="margin: 0 5px;"><img src="https://softone.techonebrasil.com.br/site-techone/img/icone_instagram.png" width="50" alt="Instagram"></a>
                                <a href="https://www.facebook.com/profile.php?id=61560483996013" style="margin: 0 5px;"><img src="https://softone.techonebrasil.com.br/site-techone/img/icone_facebook.png" width="50" alt="Facebook"></a>
                                <a href="https://www.linkedin.com/company/tech-one-br/?viewAsMember=true" style="margin: 0 5px;"><img src="https://softone.techonebrasil.com.br/site-techone/img/icone_linkedin.png" width="50" alt="Linkedin"></a>
                                <a href="https://www.tiktok.com/@techone.oficial" style="margin: 0 5px;"><img src="https://softone.techonebrasil.com.br/site-techone/img/icone_tiktok.png" width="50" alt="TikTok"></a>
                                <p style="margin: 10px 0;"><img src="https://softone.techonebrasil.com.br//img/logo-techone.png" width="20" style=" margin: -6px 0px; "> <a href="https://www.techonebrasil.com.br" style="color: #ffffff; text-decoration: none;">www.techonebrasil.com.br</a></p>
                            </div>
                        </div>';

        try {
            // Configurações do servidor SMTP
            $mail->isSMTP();
            $mail->Host = 'email-ssl.com.br'; // Substitua pelo servidor SMTP correto
            $mail->SMTPAuth = true;
            $mail->Username = 'softone@techonebrasil.com.br'; // E-mail SMTP
            $mail->Password = '4C#$3REBgxmV7p4dT'; // Senha SMTP
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Use STARTTLS ou SSL conforme o servidor suporta
            $mail->Port = 587; // Porta padrão para STARTTLS. Use 465 para SSL se necessário

            // Remetente e destinatário
            $mail->setFrom('softone@techonebrasil.com.br', 'SOFTONE'); // Substitua pelo seu e-mail e nome
            $mail->addAddress($destinatario); // E-mail do destinatário

            // Conteúdo do e-mail
            $mail->isHTML(true);
            $mail->Subject = $titulo;
            $mail->Body = $htmlEmail;

            $mail->send();
            echo json_encode('E-mail enviado com sucesso!');
        } catch (Exception $e) {
            echo json_encode("Erro ao enviar o e-mail: " . $mail->ErrorInfo);
        }
    }

?>