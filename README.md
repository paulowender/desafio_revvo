## Desafio Revvo

Desafio Revvo para a vaga de Desenvolvedor PHP Pleno realizado por Paulo Wender de A. Oliveira.

## Objetivo
Criar um CRUD em PHP que permita:
- Listar os cursos;
- Cadastrar um curso;
- Atualizar um curso;
- Deletar um curso;

### Regras e Diretrizes: [Desafio Revvo](https://bitbucket.org/leolearningbrasil/desafio-revvo/src/master/)

## Requisitos
- PHP 7.1 ou superior;
- MySQL 5.7 ou superior;
- Composer instalado;

## Features

- Listando os cursos disponíveis;

## Instalação

### 1. Crie o banco de dados
Instruções: [Criando o banco de dados](#criando-o-banco-de-dados)


### 2. Instale as dependências
```bash
composer install
```

### 3. Instale o projeto
```bash
npm install
```

## 4. Execute o projeto
```bash
npm run dev
```

## Criando o banco de dados

Para iniciar crie o banco de dados

    CREATE DATABASE IF NOT EXISTS `desafio_revvo`;

    USE `desafio_revvo`;

    CREATE TABLE IF NOT EXISTS `courses` (
      `id` int NOT NULL AUTO_INCREMENT,
      `title` varchar(100) NOT NULL,
      `summary` varchar(100) NOT NULL,
      `link` varchar(50) NOT NULL,
      `url_image` varchar(50) NOT NULL,
      `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
      `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
      `deleted_at` timestamp NULL DEFAULT NULL,
      PRIMARY KEY (`id`)
    ) ENGINE = MyISAM DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;

A conexão é feita em "src/config/database.php"

    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "desafio_revvo";