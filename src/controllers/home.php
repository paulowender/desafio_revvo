<?php

class HomeController{
    public function index()
    {
        // Lógica relacionada à página inicial
        $data = [
            'pageTitle' => 'Página Inicial',
            'content' => 'Esta é a página inicial do meu site.'
        ];

        ViewHelper::getView('home/index', $data);
    }

    public function about()
    {
        // Lógica relacionada a "Sobre nós"
        $data = [
            'pageTitle' => 'Sobre nós',
            'content' => 'Somos uma equipe apaixonada por desenvolvimento web.'
        ];

        ViewHelper::getView('home/about', $data);
    }
}