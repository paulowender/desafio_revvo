<?php
session_start();
// Show all errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'src/config/setup.php';
require_once 'src/helpers/ViewRender.php';
require_once 'src/config/database.php';

// Obtém a URL atual
$url = $_SERVER['REQUEST_URI'];

// Remove a barra inicial, se existir
$url = ltrim($url, '/');

// Divide a URL em segmentos
$segments = explode('/', $url);

// Obtém o nome do controlador e do método
$controllerName = !empty($segments[0]) ? $segments[0] : 'home';
$methodName = isset($segments[1]) ? $segments[1] : 'index';

// Inclui o arquivo do controlador
$controllerFile = __DIR__ . '/src/controllers/' . ucfirst($controllerName) . 'Controller.php';
if (file_exists($controllerFile)) {
    require_once $controllerFile;

    // Cria uma instância do controlador
    $controllerClassName = ucfirst($controllerName) . 'Controller';
    $controller = new $controllerClassName();

    // Chama o método do controlador
    if (method_exists($controller, $methodName)) {
        $controller->$methodName();
    } else {
        // Método não encontrado, exiba uma página de erro 404
        header("HTTP/1.0 404 Not Found");
        echo '404 - Page Not Found';
    }
} else {
    // Controlador não encontrado, exiba uma página de erro 404
    header("HTTP/1.0 404 Not Found");
    echo '404 - Page Not Found';
}
