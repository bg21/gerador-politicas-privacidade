<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PrivacyPolicyController extends BaseController
{
    public function showForm()
    {
        // Exibe o formulário de entrada
        $this->render("index");
    }

    public function generatePolicy()
    {
        // Captura os dados enviados pelo formulário
        $data = [
            'company_name' => $_POST['company_name'] ?? '',
            'company_cnpj' => $_POST['company_cnpj'] ?? '',
            'company_address' => $_POST['company_address'] ?? '',
            'company_address_city' => $_POST['company_address_city'] ?? '',
            'company_email' => $_POST['company_email'] ?? '',
            'website_url' => $_POST['website_url'] ?? '',
            'gender' => $_POST['gender'] === 'Feminino' ? 'A' : 'O',
            'advertising' => $_POST['advertising'] === 'Sim' ? 'possui' : 'não possui',
            'site_type' => $_POST['site_type'] ?? '',
            'resources' => $_POST['resources'] ?? [],
            'data_collection' => $_POST['data_collection'] ?? [],
            'contact_form' => $_POST['contact_form'] ?? 'N/A',
            'unsubscribe_url' => $_POST['unsubscribe_url'] ?? 'N/A',
            'cookie_policy_url' => $_POST['cookie_policy_url'] ?? 'N/A',
        ];

        // Renderiza a política gerada
        $this->render("privacy_policy", $data);
    }

    
}
