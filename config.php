<?php

// Se estiver usando o Composer, requer o autoloader.
require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese'); //Deixar datas no formato brasileiro
date_default_timezone_set('America/Sao_Paulo'); //Nossa fuso horário pra brasileiro 



define("INCLUDE_PATH", "http://localhost/converter-images/");

define("CONF_UPLOAD_IMAGE_DIR", __DIR__ . "/uploads/imagens/");
