<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Política de Privacidade</title>

    <!-- Incluindo o CSS do Materialize 1.0.0 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style-type: none;
        }

        body {
            padding-top: 56px;
        }

        p{
            margin: 15px 0;
        }
        .flex {
            margin: 0 auto;
            padding: 0 20px !important;
            flex-wrap: wrap;
            max-width: 100%;
            width: 100%;
        }

        .m-2 {
            margin: 20px 0;
        }

        .mt-5 {
            margin-top: 4rem;
        }

        h1 {
            color: #454545;
            font-size: 2.5em;
            font-weight: 300;
        }

        h4 {
            font-weight: 400;
            color: #454545;
            padding-bottom: 20px;
        }

        h2 {
            color: #f1f1f1;
            font-size: 30px;
        }

        .flex {
            display: flex;
            width: 100%;
        }

        .w50 {
            width: 50%;
        }

        .afiliado {
            right: 0;
            max-width: 1280px;
            height: 100vh;
            position: fixed;
            padding: 30px;
            text-align: center;
            width: 40%;
            background-color: #191721;
        }

        .afiliado img {
            padding: 40px;
        }

        .afiliado h2 {
            margin: 0;
        }

        .afiliado p {
            font-size: 16px;
            color: #f1f1f1;
            padding: 30px 20px 40px 20px;
            font-weight: 400;
        }

        a.plano {
            text-decoration: none;
            font-size: 20px;
            font-weight: 500;
            color: #f1f1f1;
            border: none;
            padding: 10px 50px;
            border-radius: 10px;
            display: inline-block;
            background-color: #4ea135;
        }

        a.plano:hover {
            background-color: #387526;
        }

        /* Estilos para a Navbar */
        nav {
            padding: 5px 0;
            background-color: #1a1a1a;
            margin: 0 auto;
            /* Centraliza a navbar */
            position: fixed;
            /* Torna a navbar fixa no topo */
            top: 0;
            /* Posiciona no topo da página */
            left: 0;
            right: 0;
            z-index: 1000;
        }


        @media screen and (max-width: 768px) {

            .afiliado,
            .w50 {
                width: 100%;
            }

            .afiliado {
                height: auto;
                position: initial;
            }
            nav{
                padding: 0;
            }
        }

        
    </style>
    <script>
        function copiarHtml() {
            // Selecionar o conteúdo da política de privacidade
            var conteudo = document.getElementById("politicaConteudo");

            // Criar um elemento temporário para armazenar o HTML
            var tempTextArea = document.createElement('textarea');
            tempTextArea.value = conteudo.outerHTML; // Copiar o código HTML da div
            document.body.appendChild(tempTextArea);

            // Selecionar e copiar o conteúdo do textarea
            tempTextArea.select();
            tempTextArea.setSelectionRange(0, 99999); // Para dispositivos móveis

            // Copiar o conteúdo para a área de transferência
            try {
                document.execCommand('copy');
                M.toast({
                    html: 'Código HTML copiado com sucesso!',
                    classes: 'green'
                });
            } catch (err) {
                M.toast({
                    html: 'Falha ao copiar. Tente novamente.',
                    classes: 'red'
                });
            }

            // Remover o textarea temporário
            document.body.removeChild(tempTextArea);
        }
    </script>
</head>

<body>
<nav>
        <div class="nav-wrapper">
            <a href="#" class="brand-logo center">
                <img src="https://breviares.com/public/assets/images/logo/logo.svg" alt="" srcset=""></a>

        </div>
    </nav>
    <div class="flex">
        <div class="w50">
            <h1 class="center-align">Política de Privacidade Gerada</h1>

            <!-- Botão de copiar -->
            <div class="center-align">
                <button onclick="copiarHtml()" class="btn waves-effect waves-light">Copiar Código HTML</button>
            </div>
            <div id="politicaConteudo">
                <!-- Seção 1: Informações Gerais -->
                <section>
                    <h4>Seção 1 - Informações Gerais</h4>
                    <p>
                        A presente Política de Privacidade contém informações sobre coleta, uso, armazenamento, tratamento e proteção dos dados pessoais dos usuários e visitantes do site <a href="<?php echo $website_url; ?>"><?php echo $website_url; ?></a>,
                        com a finalidade de demonstrar absoluta transparência quanto ao assunto e esclarecer a todos interessados sobre os tipos de dados que são coletados, os motivos da coleta e a forma como os usuários podem gerenciar ou excluir as suas informações pessoais.
                    </p>
                    <p>
                        Esta Política de Privacidade aplica-se a todos os usuários e visitantes do site e aplicativo e integra os Termos e Condições Gerais de Uso do site, devidamente inscrito no CNPJ sob o nº <strong><?php echo $company_cnpj; ?></strong>, situado em <strong><?php echo $company_address; ?></strong>, doravante nominada <strong><?php echo $company_name; ?></strong>.
                    </p>
                    <p>
                        O presente documento foi elaborado em conformidade com a Lei Geral de Proteção de Dados Pessoais (Lei 13.709/18), o Marco Civil da Internet (Lei 12.965/14) e o Regulamento da UE n. 2016/679.
                        Ainda, o documento poderá ser atualizado em decorrência de eventual atualização normativa, razão pela qual se convida o usuário a consultar periodicamente esta seção.
                    </p>
                </section>

                <!-- Seção 2: Como Recolhemos os Dados Pessoais -->
                <section>
                    <h4>Seção 2 - Como Recolhemos os Dados Pessoais do Usuário e do Visitante?</h4>
                    <p>Os dados pessoais do usuário e visitante são recolhidos pela plataforma das seguintes formas:</p>
                    <ul class="browser-default">
                        <li>Quando o usuário cria uma conta na plataforma: Nome, e-mail, cidade de residência e profissão.</li>
                        <li>Interações e acessos ao site, como páginas visitadas, palavras-chave utilizadas, IP e navegador.</li>
                        <li>Dados fornecidos por terceiros, como Google ou Facebook, quando há login por meio dessas plataformas.</li>
                        <li>Outras formas especificadas na interação com o usuário.</li>
                    </ul>
                </section>

                <!-- Seção 3: Quais Dados Coletamos -->
                <section>
                    <h4>Seção 3 - Quais Dados Pessoais Recolhemos?</h4>
                    <p>Os dados pessoais do usuário e visitante recolhidos são:</p>
                    <ul class="browser-default">
                        <?php if (in_array('Dados de cadastro (Nome, e-mail, cidade de residência, profissão)', $data_collection)) { ?>
                            <li> <strong>Dados de cadastro:</strong> Nome, e-mail, cidade de residência, profissão.</li>
                        <?php } ?>
                        <?php if (in_array('Dados de navegação (Palavras-chave, interações no site, IP)', $data_collection)) { ?>
                            <li> <strong>Dados de navegação:</strong> Palavras-chave utilizadas, interações no site e IP.</li>
                        <?php } ?>
                        <?php if (in_array('Dados para transações (Informações financeiras)', $data_collection)) { ?>
                            <li> <strong>Dados para transações:</strong> Informações financeiras (cartão de crédito, pagamentos).</li>
                        <?php } ?>
                        <?php if (in_array('Dados sensíveis (Se expressamente consentido)', $data_collection)) { ?>
                            <li> <strong>Dados sensíveis:</strong> Apenas se expressamente consentido, como origem racial, opiniões políticas, entre outros.</li>
                        <?php } ?>
                        <?php if (in_array('Outras informações conforme necessidade e consentimento', $data_collection)) { ?>
                            <li>Outras informações conforme a necessidade e consentimento.</li>
                        <?php } ?>
                    </ul>
                </section>

                <!-- Seção 4: Finalidades dos Dados -->
                <section>
                    <h4>Seção 4 - Para que Finalidades Utilizamos os Dados Pessoais?</h4>
                    <p>Os dados pessoais coletados têm as seguintes finalidades:</p>
                    <ul class="browser-default">
                        <li>Melhorar a experiência do usuário na plataforma.</li>
                        <li>Personalizar anúncios e conteúdos exibidos.</li>
                        <li>Gerar segurança jurídica para transações realizadas.</li>
                        <li>Outros usos previamente autorizados.</li>
                    </ul>
                </section>

                <!-- Seção 5: Recursos Utilizados -->
                <section>
                    <h4>Seção 5 - Quais Recursos São Utilizados no Nosso Site?</h4>
                    <p>Para melhorar a funcionalidade e a experiência dos usuários em nosso site, utilizamos os seguintes recursos:</p>
                    <ul class="browser-default">
                        <?php if (in_array('Google Analytics / Tag Manager / Google Kit', $resources)) { ?>
                            <li> <strong>Google Analytics / Tag Manager / Google Kit</strong></li>
                        <?php } ?>
                        <?php if (in_array('Bing Webmaster Tools', $resources)) { ?>
                            <li> <strong>Bing Webmaster Tools</strong></li>
                        <?php } ?>
                        <?php if (in_array('Pixel do Facebook', $resources)) { ?>
                            <li> <strong>Pixel do Facebook</strong></li>
                        <?php } ?>
                        <?php if (in_array('WordPress', $resources)) { ?>
                            <li> <strong>WordPress</strong></li>
                        <?php } ?>
                        <?php if (in_array('Gateways de pagamento', $resources)) { ?>
                            <li> <strong>Gateways de pagamento</strong></li>
                        <?php } ?>
                        <?php if (in_array('Correios / Empresas de Transporte', $resources)) { ?>
                            <li> <strong>Correios / Empresas de Transporte</strong></li>
                        <?php } ?>
                        <?php if (in_array('Botão do WhatsApp', $resources)) { ?>
                            <li> <strong>Botão do WhatsApp</strong></li>
                        <?php } ?>
                        <?php if (in_array('Chat do Facebook', $resources)) { ?>
                            <li> <strong>Chat do Facebook</strong></li>
                        <?php } ?>
                        <?php if (in_array('Chat de Atendimento Online', $resources)) { ?>
                            <li> <strong>Chat de Atendimento Online</strong></li>
                        <?php } ?>
                        <?php if (in_array('Google Forms', $resources)) { ?>
                            <li> <strong>Google Forms</strong></li>
                        <?php } ?>
                        <?php if (in_array('Notificações via Push', $resources)) { ?>
                            <li> <strong>Notificações via Push</strong></li>
                        <?php } ?>
                    </ul>
                </section>

                <!-- Seções 6 a 10 -->
                <section>
                    <h4>Seção 6 - Por Quanto Tempo os Dados Pessoais Ficam Armazenados?</h4>
                    <p>Os dados são armazenados enquanto necessários para as finalidades descritas ou conforme previsto por lei.</p>

                    <h4>Seção 7 - Segurança dos Dados Pessoais Armazenados</h4>
                    <p>Utilizamos criptografia e padrões de segurança (SSL) para proteger os dados coletados.</p>

                    <h4>Seção 8 - Compartilhamento de Dados</h4>
                    <p>Os dados podem ser compartilhados com terceiros contratados apenas quando necessário e autorizado.</p>

                    <h4>Seção 9 - Cookies ou Dados de Navegação</h4>
                    <p>Utilizamos cookies para melhorar a experiência do usuário. Você pode configurá-los em seu navegador.</p>

                    <h4>Seção 10 - Consentimento</h4>
                    <p>Ao utilizar nossos serviços, você consente com esta política. Pode revogar o consentimento a qualquer momento entrando em contato por <a href="mailto:<?php echo $company_email; ?>"><?php echo $company_email; ?></a>.</p>

                    <h4>Seção 11 - Jurisdição para Resolução de Conflitos</h4>
                    <p>Os litígios serão resolvidos no foro da comarca de <strong><?php echo $company_address_city; ?></strong>, aplicando-se as leis brasileiras.</p>
                </section>
            </div>
            <!-- Link para voltar -->
            <div class="center-align m-2">
                <a href="showForm" class="btn waves-effect waves-light">Voltar</a>
            </div>
        </div>

        <div class="w50">
            <div class="afiliado">
                <img src="https://d1i4tvf70h7zdy.cloudfront.net/ead/images/vitalicio/logo.png" alt="Plano Vitalício" title="Plano Vitalício">
                <h2><b>
                        Seu momento é agora, economize mais de
                        R$ 10.000 em todos os
                        cursos atuais e futuros!
                    </b></h2>

                <p>
                    O plano vitalício foi pensado em você que quer aprender e não quer investir mais nem R$1,00 em outro curso ou plano.
                </p>

                <a target="__blank" alt="Plano Vitalício" title="Plano Vitalício" class="plano" href="https://hotm.art/plano-vitalicio">COMPRAR COM R$800 OFF</a>
            </div>

        </div>


    </div>

    <!-- Incluindo o JS do Materialize 1.0.0 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>