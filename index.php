<?php
require 'config.php';

// Registra a sessão com o Flight
Flight::register('session', \Ghostff\Session\Session::class);

// Inicia a sessão


// Define o diretório de Views
Flight::set('flight.views.path', 'App/Views');


// Registra as rotas
Flight::route('GET /', ['App\Controllers\PrivacyPolicyController', 'showForm']);
Flight::route('POST /generatePolicy', ['App\Controllers\PrivacyPolicyController', 'generatePolicy']);


Flight::set('flight.log_errors', true);



// Inicia o Flight
Flight::start();