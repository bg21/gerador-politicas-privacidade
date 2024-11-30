<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Gerador de Política de Privacidade</title>
</head>
<body>
    <h1>Gerador de Política de Privacidade</h1>
    <form action="generatePolicy" method="POST">
        <label for="company_name">Nome da Empresa:</label>
        <input type="text" id="company_name" name="company_name" required>

        <label for="company_email">E-mail de Contato:</label>
        <input type="email" id="company_email" name="company_email" required>

        <label for="website_url">Endereço do Site (https://...):</label>
        <input type="url" id="website_url" name="website_url" required>

        <label for="gender">Você se refere à sua empresa no masculino ou feminino?</label>
        <select id="gender" name="gender" required>
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
        </select>

        <label for="advertising">Seu site possui mecanismos de publicidade?</label>
        <select id="advertising" name="advertising" required>
            <option value="Sim">Sim</option>
            <option value="Não">Não</option>
        </select>

        <label for="site_type">Qual é o tipo de seu site?</label>
        <select id="site_type" name="site_type" required>
            <option value="Site institucional">Site institucional</option>
            <option value="E-commerce">E-commerce</option>
            <option value="Blog pessoal">Blog pessoal</option>
            <option value="Página de captura (Afiliados)">Página de captura (Afiliados)</option>
        </select>

        <label for="resources">Quais destes recursos você usa em seu site?</label>
        <select id="resources" name="resources[]" multiple required>
            <option value="Google Analytics / Tag Manager / Google Kit">Google Analytics / Tag Manager / Google Kit</option>
            <option value="Bing Webmaster Tools">Bing Webmaster Tools</option>
            <option value="Pixel do Facebook">Pixel do Facebook</option>
            <option value="WordPress">WordPress</option>
            <option value="Gateways de pagamento">Gateways de pagamento</option>
            <option value="Correios / Empresas de Transporte">Correios / Empresas de Transporte</option>
            <option value="Botão do WhatsApp">Botão do WhatsApp</option>
            <option value="Chat do Facebook">Chat do Facebook</option>
            <option value="Chat de Atendimento Online">Chat de Atendimento Online</option>
            <option value="Google Forms">Google Forms</option>
            <option value="Notificações via Push">Notificações via Push</option>
        </select>

        <label for="contact_form">Endereço do Formulário de Contato:</label>
        <input type="url" id="contact_form" name="contact_form">

        <label for="unsubscribe_url">URL de Cancelamento de Newsletter:</label>
        <input type="url" id="unsubscribe_url" name="unsubscribe_url">

        <label for="cookie_policy_url">URL da Política de Cookies:</label>
        <input type="url" id="cookie_policy_url" name="cookie_policy_url">

        <button type="submit">Gerar Política</button>
    </form>
</body>
</html>
