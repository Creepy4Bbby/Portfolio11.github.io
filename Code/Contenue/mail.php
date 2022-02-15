<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
</head>

<body>
    <?php
    SMTP = smtp.gmail.com
    smtp_port = 587 ou 465
    sendmail_from =votremail@gmail.com
    $retour = mail('dolores.bby4@gmail.com', 'Envoi depuis la page Contact', $_POST['subject'], '$email');
    if ($retour)
        echo '<p>Votre message a bien été envoyé.</p>';
    ?>
</body>
</html>