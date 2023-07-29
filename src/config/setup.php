<?php

require 'vendor/autoload.php'; //vlucas/phpdotenv

// Caminho para o arquivo .env
$envFilePath = getcwd();

// Verificar se o arquivo .env existe
if (file_exists($envFilePath)) {

    // Carregar variáveis de ambiente do arquivo .env
    $dotenv = Dotenv\Dotenv::createImmutable($envFilePath);
    $dotenv->load();

} else {
    echo 'Verifique o arquivo .env';
    die();
}
