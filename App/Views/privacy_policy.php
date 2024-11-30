<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Política de Privacidade</title>
</head>
<body>
    <h1>Política de Privacidade</h1>
    <p>Esta política de privacidade descreve como <strong><?php echo $gender . " " . $company_name; ?></strong> (\"nós\") coleta, usa e protege as informações dos usuários.</p>

    <h2>Informações Gerais</h2>
    <p>Nosso site principal é <a href="<?php echo $website_url; ?>"><?php echo $website_url; ?></a>, e nosso principal e-mail de contato é <a href="mailto:<?php echo $company_email; ?>"><?php echo $company_email; ?></a>.</p>

    <h2>Publicidade e Recursos</h2>
    <p>Nosso site <?php echo $advertising; ?> mecanismos de publicidade e é classificado como um <strong><?php echo $site_type; ?></strong>.</p>
    <p>Os recursos utilizados incluem:</p>
    <ul>
        <?php foreach ($resources as $resource): ?>
            <li><?php echo $resource; ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>Formulários e Cookies</h2>
    <p>O formulário de contato está disponível em: <a href="<?php echo $contact_form; ?>"><?php echo $contact_form; ?></a>.</p>
    <p>Se você utiliza um sistema de newsletter, poderá cancelar a assinatura em: <a href="<?php echo $unsubscribe_url; ?>"><?php echo $unsubscribe_url; ?></a>.</p>
    <p>Para informações sobre cookies, acesse: <a href="<?php echo $cookie_policy_url; ?>"><?php echo $cookie_policy_url; ?></a>.</p>

    <a href="showForm">Voltar</a>
</body>
</html>
