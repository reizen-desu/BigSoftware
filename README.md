## Laravel

Video usado para auxiliar na criação do projeto: https://www.youtube.com/watch?v=QJXZQYQ1n9c

## Requisitos

-   PHP 7.3 ou maior
-   Node 12.13.0 or maior

## Como rodar o projeto localmente

Configuração do ambiente no seu computador:

```
git clone git@github.com:reizen-desu/BigSoftware.git
cd BigSoftware
cp .env.example .env
composer install
php artisan key:generate
php artisan cache:clear && php artisan config:clear
php artisan serve
```

## Antes de iniciar o projeto (php artisan serve)

Crie a base de dados no seu banco de dados local

```
mysql
create database bigsoftware;
exit;
```

Modifique o arquivo .env com as informações do seu banco de dados local.

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=bigsoftware
DB_USERNAME={USERNAME}
DB_PASSWORD={PASSWORD}
```

Faça a migração do banco de dados

```
php artisan migrate
```
