## Laravel

[Clique aqui](https://www.youtube.com/watch?v=QJXZQYQ1n9c) para ver o video que usei para como base para a criação do projeto
Para a construção das telas foi usado o framework [TailwindCSS](https://tailwindcss.com/)

## Requisitos

-   PHP 7.3 ou maior
-   Node 12.13.0 or maior

## Como clonar e rodar o projeto localmente

Configuração do ambiente no seu computador. Siga os passos abaixo:

```bash
git clone https://github.com/reizen-desu/BigSoftware.git
cd BigSoftware
cp .env.example .env
composer install
php artisan key:generate
php artisan cache:clear && php artisan config:clear
php artisan serve # Corra apenas esse comando após ler as instruções abaixo
```

## Antes de iniciar o projeto (php artisan serve)

Crie a base de dados no seu banco de dados local. Certifique-se de rodar o mysql e o apache.

```
mysql
create database bigsoftware;
exit;
```

Se você não quiser usar os comandos acima, pode criar a base de dados pelo phpmyadmin.

De seguida modifque o arquivo .env com as informações da sua base de dados local.

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=bigsoftware
DB_USERNAME={USUARIO}
DB_PASSWORD={SENHA}
```

Faça a migração do banco de dados

```
php artisan migrate
```
