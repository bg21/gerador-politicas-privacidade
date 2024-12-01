<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Política de Privacidade</title>

    <!-- Incluindo o CSS do Materialize 1.0.0 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">

    <!-- Incluindo o favicon -->
    <link rel="icon" href="favicon.ico">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            padding-top: 56px;
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
            font-weight: 300;
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

            <h1 class="">Gerador de Política de Privacidade</h1>

            <form action="politica-gerada" method="POST" class="mt-5">

                <!-- Campo Nome da Empresa -->
                <div class="input-field">
                    <input type="text" id="company_name" name="company_name" required placeholder="Exemplo: Empresa XYZ">
                    <label for="company_name">Nome da Empresa</label>
                </div>

                <!-- Campo E-mail de Contato -->
                <div class="input-field">
                    <input type="email" id="company_email" name="company_email" required placeholder="Exemplo: contato@empresa.com">
                    <label for="company_email">E-mail de Contato</label>
                </div>

                <!-- Campo Endereço do Site -->
                <div class="input-field">
                    <input type="url" id="website_url" name="website_url" required placeholder="Exemplo: https://www.empresa.com">
                    <label for="website_url">Endereço do Site (https://...)</label>
                </div>

                <!-- Campo Gênero da Empresa -->
                <div class="input-field">
                    <select id="gender" name="gender" required>
                        <option value="" disabled selected>Escolha o gênero da empresa</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Feminino">Feminino</option>
                    </select>
                    <label for="gender">Você se refere à sua empresa no masculino ou feminino?</label>
                </div>

                <!-- Campo Publicidade -->
                <div class="input-field">
                    <select id="advertising" name="advertising" required>
                        <option value="" disabled selected>Escolha uma opção</option>
                        <option value="Sim">Sim</option>
                        <option value="Não">Não</option>
                    </select>
                    <label for="advertising">Seu site possui mecanismos de publicidade?</label>
                </div>

                <!-- Campo Tipo de Site -->
                <div class="input-field">
                    <select id="site_type" name="site_type" required>
                        <option value="" disabled selected>Escolha o tipo de site</option>
                        <option value="Site institucional">Site institucional</option>
                        <option value="E-commerce">E-commerce</option>
                        <option value="Blog pessoal">Blog pessoal</option>
                        <option value="Página de captura (Afiliados)">Página de captura (Afiliados)</option>
                    </select>
                    <label for="site_type">Qual é o tipo de seu site?</label>
                </div>

                <!-- Campo Recursos Usados no Site -->
                <div class="input-field">
                    <select id="resources" name="resources[]" multiple required>
                        <option value="" disabled selected>Selecione os recursos usados no site</option>
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
                    <label for="resources">Quais destes recursos você usa em seu site?</label>
                </div>

                <!-- Campo Formulário de Contato -->
                <div class="input-field">
                    <input type="url" id="contact_form" name="contact_form" placeholder="Exemplo: https://www.empresa.com/contato">
                    <label for="contact_form">Endereço do Formulário de Contato</label>
                </div>

                <!-- Campo URL de Cancelamento de Newsletter -->
                <div class="input-field">
                    <input type="url" id="unsubscribe_url" name="unsubscribe_url" placeholder="Exemplo: https://www.empresa.com/cancelar-newsletter">
                    <label for="unsubscribe_url">URL de Cancelamento de Newsletter</label>
                </div>

                <!-- Campo URL da Política de Cookies -->
                <div class="input-field">
                    <input type="url" id="cookie_policy_url" name="cookie_policy_url" placeholder="Exemplo: https://www.empresa.com/politica-de-cookies">
                    <label for="cookie_policy_url">URL da Política de Cookies</label>
                </div>

                <!-- Campo Seleção de Dados Coletados -->
                <div class="input-field">
                    <select id="data_collection" name="data_collection[]" multiple required>
                        <option value="" disabled selected>Escolha os dados a serem coletados</option>
                        <option value="Dados de cadastro (Nome, e-mail, cidade de residência, profissão)">Dados de cadastro (Nome, e-mail, cidade de residência, profissão)</option>
                        <option value="Dados de navegação (Palavras-chave, interações no site, IP)">Dados de navegação (Palavras-chave, interações no site, IP)</option>
                        <option value="Dados para transações (Informações financeiras)">Dados para transações (Informações financeiras)</option>
                        <option value="Dados sensíveis (Se expressamente consentido)">Dados sensíveis (Se expressamente consentido)</option>
                        <option value="Outras informações conforme necessidade e consentimento">Outras informações conforme necessidade e consentimento</option>
                    </select>
                    <label for="data_collection">Quais tipos de dados serão recolhidos?</label>
                </div>

                <!-- Botão de Envio -->
                <div class="center-align m-2">
                    <button type="submit" class="btn waves-effect waves-light">Gerar Política</button>
                </div>

            </form>
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
    <script>
        // Inicializando o Materialize para os elementos de formulário (selects)
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('select');
            var instances = M.FormSelect.init(elems);
        });
    </script>
</body>

</html>