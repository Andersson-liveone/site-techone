<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/autoload.php';

    envia_email_padrao();
    function envia_email_padrao() {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $ramo = $_POST['ramo'];
        $codigo_postal = $_POST['codigo_pais'];
        $telefone = $_POST['telefone'];
        $mensagem = $_POST['mensagem'];
        $destinatario = "joas.rodrigues@enelo.com.br";
        $titulo = "Novo pedido de contato";
        $telefone = $codigo_postal . " " . $telefone;

        $mail = new PHPMailer(true);

        // HTML do e-mail com interpolação de variáveis
        $htmlEmail = '
                    <div style="max-width: 600px; margin: 0 auto; background-color: #5e065a; border-radius: 8px; box-shadow: 0 4px 6px rgba(187, 255, 0, 0); font-family: Arial, sans-serif; background-color:rgba(255, 0, 0, 0); overflow: hidden;">
                        <div style="background-color: rgb(255, 255, 255); color: #5e065a; padding: 20px; text-align: center; font-size: 20px; font-weight: bold;">
                            Novo Contato Recebido
                        </div>
                        <div style="padding: 30px; background-color: #ffffff; text-align: left; font-size: 16px; color: #333;">
                            <p><strong>' . htmlspecialchars($nome) . '</strong> deseja entrar em contato com a Tech One.</p>
                            <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
                                <tr>
                                    <td style="font-weight: bold; padding: 8px; border-bottom: 1px solid #ddd;">Nome:</td>
                                    <td style="padding: 8px; border-bottom: 1px solid #ddd;">' . htmlspecialchars($nome) . '</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold; padding: 8px; border-bottom: 1px solid #ddd;">E-mail:</td>
                                    <td style="padding: 8px; border-bottom: 1px solid #ddd;">' . htmlspecialchars($email) . '</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold; padding: 8px; border-bottom: 1px solid #ddd;">Ramo:</td>
                                    <td style="padding: 8px; border-bottom: 1px solid #ddd;">' . htmlspecialchars($ramo) . '</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold; padding: 8px; border-bottom: 1px solid #ddd;">Telefone:</td>
                                    <td style="padding: 8px; border-bottom: 1px solid #ddd;">' . htmlspecialchars($telefone) . '</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold; padding: 8px; vertical-align: top;">Mensagem:</td>
                                    <td style="padding: 8px;">' . nl2br(htmlspecialchars($mensagem)) . '</td>
                                </tr>
                            </table>
                        </div>
                        <br>
                        <div style="background-color:rgb(255, 255, 255); padding: 10px; text-align: center; color: #5e065a; font-size: 14px;">
                            <p style="margin: 0;">Tech One - www.techonebrasil.com.br</p>
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

            // Configurações adicionais
            $mail->CharSet = 'UTF-8';

            // Remetente e destinatário
            $mail->setFrom('softone@techonebrasil.com.br', 'SOFTONE'); // Substitua pelo seu e-mail e nome
            $mail->addAddress($destinatario); // E-mail do destinatário

            // Conteúdo do e-mail
            $mail->isHTML(true);
            $mail->Subject = $titulo;
            $mail->Body = $htmlEmail;

            $mail->send();
            header('Location: index.php');
            echo json_encode('E-mail enviado com sucesso!');
        } catch (Exception $e) {
            echo json_encode("Erro ao enviar o e-mail: " . $mail->ErrorInfo);
        }
    }

?>