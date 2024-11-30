<?php

namespace App\Controllers;

class PrivacyPolicyController
{
    public function showForm()
    {
        // Exibe o formulário de entrada
        $this->render("privacy_form");
    }

    public function generatePolicy()
    {
        // Captura os dados enviados pelo formulário
        $data = [
            'company_name' => $_POST['company_name'] ?? '',
            'company_email' => $_POST['company_email'] ?? '',
            'website_url' => $_POST['website_url'] ?? '',
            'gender' => $_POST['gender'] === 'Feminino' ? 'A' : 'O',
            'advertising' => $_POST['advertising'] === 'Sim' ? 'possui' : 'não possui',
            'site_type' => $_POST['site_type'] ?? '',
            'resources' => $_POST['resources'] ?? [],
            'contact_form' => $_POST['contact_form'] ?? 'N/A',
            'unsubscribe_url' => $_POST['unsubscribe_url'] ?? 'N/A',
            'cookie_policy_url' => $_POST['cookie_policy_url'] ?? 'N/A',
        ];

        // Renderiza a política gerada
        $this->render("privacy_policy", $data);
    }

    private function render($view, $data = [])
    {
        // Transforma o array $data em variáveis acessíveis na view
        extract($data);
        // Inclui a view correspondente
        require_once "../App/Views/{$view}.php";
    }
}
