<?php

class ViewRender
{
    public static function getView($viewName, $data = [])
    {
        extract($data); // Extrai as variáveis ​​do array para que possam ser usadas na view

        ob_start(); // Inicia o buffer de saída

        // Inclui a view
        $viewFile = __DIR__ . '/../views/' . $viewName . '.php';
        if (file_exists($viewFile)) {
            require $viewFile;
        } else {
            throw new Exception("View not found: " . $viewName);
        }

        $content = ob_get_clean(); // Captura o conteúdo do buffer de saída
        // Inclui o layout
        $layoutFile = __DIR__ . '/../views/layout.php';
        if (file_exists($layoutFile)) {
            require $layoutFile;
        } else {
            throw new Exception("Layout not found");
        }
    }
}
